<?php
include("header-dashboard.php");
?>
<title>Quản Lí Đơn Hàng - SIT</title>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap">
                                <?php
                                $limit = 10;
                                $sql= "SELECT * FROM orderpro";
                                $query = mysqli_query($conn, $sql);
                                $count= mysqli_num_rows($query);
                                $current_page = isset($_GET["page"]) ? $_GET["page"] : 1;
                                $total_page = ceil($count / $limit);
                                if ($current_page > $total_page){
                                $current_page = $total_page;
                                }
                                else if ($current_page < 1){
                                $current_page = 1;
                                }
                                $start = ($current_page - 1) * $limit;
                                $sqllimit = "SELECT * FROM orderpro LIMIT $start,$limit";
                                $result = mysqli_query($conn, $sqllimit);
                                ?>
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Mã đơn hàng</th>
                                            <th>Ngày mua</th>
                                            <th>Khách hàng</th>
                                            <th>Tổng</th>
                                            <th>Trạng thái</th>
                                            <th>Chi Tiết</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $sqlname = "SELECT * FROM users WHERE id =".$row['user_id'];
                                            $queryname = mysqli_query($conn, $sqlname);
                                            $rowname = mysqli_fetch_assoc($queryname); 

                                            $sqlprice= " SELECT * FROM orderdetail WHERE idorder =".$row['id'];
                                            $qprice= mysqli_query($conn, $sqlprice);
                                            $rowprice = mysqli_fetch_assoc($qprice); 
                                            echo "<tr>
                                                
                                            <td><a href='javascript: void(0);' class='text-primary ml-3'>VKU$row[id]</a> </td>
                                            <td>$row[date_order]</td>
                                            <td>
                                                $rowname[name]
                                            </td>
                                            <td>
                                            ".number_format($rowprice['price'])."đ
                                            </td>
                                            <td>";
                                            if($row['status']=="Chưa Giải Quyết"){
                                                echo "<span class='badge badge-pill badge-soft-danger font-size-13'>Chưa Giao</span>";
                                            }
                                            else echo "<span class='badge badge-pill badge-soft-success font-size-13'>Đã Giao</span>";
                                                
                                        echo    "</td>";
                                        echo "<td>
                                                <button type='button' class='btn btn-primary btn-sm btn-rounded' data-toggle='modal' data-target='.Modal$row[id]'>
                                                    Xem
                                                </button>
                                            </td>
                                        </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php
                            if($total_page >1){
                                    echo    "<ul class='pagination pagination-rounded justify-content-end mb-2'>";
                                    if ($current_page > 1){
                                        if ($current_page == 2){
                                            echo "<li class='page-item'><a class='page-link' href='orderlist.html' aria-label='Previous'><i class='mdi mdi-arrow-left'></i> </a></li>";
                                        }else
                                        echo "<li class='page-item'><a class='page-link' href='orderlist.html?page=".($current_page-1)."' aria-label='Previous'><i class='mdi mdi-arrow-left'></i> </a></li>";
                                    }
                                    
                                    for ($i = 1; $i <= $total_page; $i++){
                                        if ($i == $current_page){
                                            echo "<li class='page-item active'><span class='page-link'>".$i."</span></li>";
                                        } else{
                                            if ($i ==1){
                                            echo "<li class='page-item'><a class='page-link' href='orderlist.html'>".$i."</a></li>";
                                            }else 
                                            echo "<li class='page-item'><a class='page-link' href='orderlist.html?page=$i'>".$i."</a></li>";
                                        }
                                    }
                                    if ($current_page < $total_page){
                                        echo "<li class='page-item'><a class='page-link' href='orderlist.html?page=".($current_page+1)."' aria-label='Next'> <i class='mdi mdi-arrow-right'></i></a></li>";
                                    }
                                    echo    "</ul>
                                        ";
                                }                
                            ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $sqlmodal = "SELECT * FROM orderpro";
    $result = mysqli_query($conn, $sqlmodal);
    while ($row1 = mysqli_fetch_assoc($result)){
    $sqlname = "SELECT * FROM users WHERE id =".$row1['user_id'];
    $queryname = mysqli_query($conn, $sqlname);
    $rowname = mysqli_fetch_assoc($queryname); 
    echo "<div class='modal fade Modal$row1[id]' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Chi Tiết Đơn Hàng</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='modal-body'>
                        <p class='mb-2'>Mã Đơn Hàng: <span class='text-primary'> VKU$row1[id]</span></p>
                        <p class='mb-4'>Khách Hàng: <span class='text-primary'> $rowname[name]</span></p>

                        <div class='table-responsive'>
                            <table class='table table-centered table-nowrap'>
                                <thead>
                                    <tr>
                                    <th scope='col'>Hình Ảnh</th>
                                    <th scope='col'>Tên Sản Phẩm</th>
                                    <th scope='col'>Tổng</th>
                                    </tr>
                                </thead>
                                <tbody>";
    $sorder = "SELECT * FROM orderdetail WHERE idorder =".$row1['id'];
    $qorder = mysqli_query($conn, $sorder);
    $total=0;
    while($roworder = mysqli_fetch_assoc($qorder)){
        $sqlpro = "SELECT * FROM sanpham WHERE id =".$roworder['idpro'];
        $querypro = mysqli_query($conn, $sqlpro);
        $rowpro = mysqli_fetch_assoc($querypro);
        echo "<tr>
                <th scope='row'>
                    <div>
                        <img src='images/shop/$rowpro[images]' class='border' width='70px'>
                    </div>
                </th>
                <td>
                    <div>
                        <h5 class='text-truncate font-size-14'>$rowpro[tenmathang]</h5>
                        <p class='text-muted mb-0'>".($rowpro['dongia']*1000)."đ x $roworder[quanlity]</p>
                    </div>
                </td>
                <td>".number_format($roworder['price'])."đ</td>
            </tr>";
            $total+= $roworder['price'];
    }
    

    

    
                                    echo"<tr>
                                    <td colspan='2'>
                                        <h6 class='m-0 text-right'>Total:</h6>
                                    </td>
                                    <td>
                                    ".number_format($total)."đ
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    </div>
                </div>
            </div>
        </div>";
}
    ?>
</div>

<?php
include("footeradmin.php");
?>