<?php 
include("header.php");
?>

<title>Quản lí đơn hàng - SIT</title>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                            <?php
                            $limit = 10;
                            $sql= "SELECT * FROM orderpro WHERE user_id =" .$profile['id'];
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
                            $uid= $profile['id'];
                            $sqllimit = "SELECT * FROM orderpro WHERE user_id= $uid ORDER BY id DESC LIMIT $start,$limit";
                            $result = mysqli_query($conn, $sqllimit);
                            ?>
                                <table class="table table-centered table-nowrap">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Mã đơn hàng</th>
                                            <th>Ngày mua</th>
                                            <th>Sản phẩm</th>
                                            <th>Tổng tiền</th>
                                            <th>Trạng thái đơn hàng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo "<tr>
                                            
                                        <td><a href='javascript: void(0);' class='text-primary ml-3'>$row[id]</a> </td>
                                        <td>$row[date_order]</td>
                                        <td>
                                            $row[product_name]
                                        </td>
                                        <td>
                                        ".number_format($row['price'])."đ
                                        </td>
                                        <td>";
                                        if($row['status']=="Chưa Giải Quyết"){
                                            echo "<span class='badge badge-pill badge-soft-danger font-size-13'>Chưa Giải Quyết</span>";
                                        }
                                        else echo "<span class='badge badge-pill badge-soft-success font-size-13'>Giao Hàng Thành Công</span>";
                                            
                                    echo    "</td>
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
                                            echo "<li class='page-item'><a class='page-link' href='Orderhistory.html' aria-label='Previous'><i class='mdi mdi-arrow-left'></i> </a></li>";
                                        }else
                                        echo "<li class='page-item'><a class='page-link' href='Orderhistory.html?page=".($current_page-1)."' aria-label='Previous'><i class='mdi mdi-arrow-left'></i> </a></li>";
                                    }
                                    
                                    for ($i = 1; $i <= $total_page; $i++){
                                        if ($i == $current_page){
                                            echo "<li class='page-item active'><span class='page-link'>".$i."</span></li>";
                                        } else{
                                            if ($i ==1){
                                            echo "<li class='page-item'><a class='page-link' href='Orderhistory.html'>".$i."</a></li>";
                                            }else 
                                            echo "<li class='page-item'><a class='page-link' href='Orderhistory.html?page=$i'>".$i."</a></li>";
                                        }
                                    }
                                    if ($current_page < $total_page){
                                        echo "<li class='page-item'><a class='page-link' href='Orderhistory.html?page=".($current_page+1)."' aria-label='Next'> <i class='mdi mdi-arrow-right'></i></a></li>";
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
</div>
<?php
include("footeruser.php");
?>