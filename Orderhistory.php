<?php 
include("header.php");
?>
<title>Quản lí đơn hàng - SIT</title>
<style>
.text_product_hidden{
    white-space: nowrap; 
    width: 100px; 
    overflow: hidden;
    text-overflow: ellipsis; 
}
</style>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Mã đơn hàng</th>
                                            <th>Ngày mua</th>
                                            <th>Sản phẩm</th>
                                            <th>Chi Tiết</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $UID= $profile['ID_User'];
                                    $Statement_Order = "SELECT * FROM `order` WHERE ID_User= $UID";
                                    $Query_Order = mysqli_query($conn, $Statement_Order);
                                    while ($Display_Order = mysqli_fetch_assoc($Query_Order)){
                                        $Statement_OrderDetail = "SELECT * FROM orderdetail WHERE ID_Order =".$Display_Order['ID_Order'];
                                        $Query_OrderDetail = mysqli_query($conn, $Statement_OrderDetail);
                                        echo "<tr>
                                        <td><a href='javascript: void(0);' class='text-primary ml-3'>VKU$Display_Order[ID_Order]</a> </td>
                                        <td>$Display_Order[Date_Order]</td>
                                        <td class='text_product_hidden'>";
                                        while($Display_OrderDetail = mysqli_fetch_assoc($Query_OrderDetail)){
                                            $Statement_Product = "SELECT * FROM product WHERE ID_Product =".$Display_OrderDetail['ID_Product'];
                                            $Query_Product = mysqli_query($conn, $Statement_Product);
                                            $Display_Product = mysqli_fetch_assoc($Query_Product);
                                            echo "$Display_Product[Name_Product], ";
                                        }
                                        echo "</td><td>
                                                <button type='button' class='btn btn-primary btn-sm btn-rounded' data-toggle='modal' data-target='.Modal$Display_Order[ID_Order]'>Xem</button>
                                        </td>";
                                    echo    "
                                    </tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<?php
    $Statement_Order = "SELECT * FROM `order`";
    $Query_Order = mysqli_query($conn, $Statement_Order);
    while ($Display_Order = mysqli_fetch_assoc($Query_Order)){
    $Statement_Users = "SELECT * FROM users WHERE ID_User =".$Display_Order['ID_User'];
    $Query_Users = mysqli_query($conn, $Statement_Users);
    $Display_Users = mysqli_fetch_assoc($Query_Users); 
    echo "<div class='modal fade Modal$Display_Order[ID_Order]' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Chi Tiết Đơn Hàng</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='modal-body'>
                        <p class='mb-1'>Mã Đơn Hàng: <span class='text-primary'> VKU$Display_Order[ID_Order]</span></p>
                        <p class='mb-1'>Liên Lạc: <span class='text-primary'> $Display_Order[Phone_User]</span></p>
                        <p class='mb-2'>Địa Chỉ: <span class='text-primary'> $Display_Order[Address_User]</span></p>";
                        if($Display_Order['Status_Order']=="Chưa Giải Quyết"){
                                echo "<p class='mb-2'>Chưa Giải Quyết</p>";
                            }
                            else echo "<p class='mb-2'>Giao Hàng Thành Công</p>";
                 echo"       <div class='table-responsive'>
                            <table class='table table-centered table-nowrap'>
                                <thead>
                                    <tr>
                                    <th scope='col'>Hình Ảnh</th>
                                    <th scope='col'>Tên Sản Phẩm</th>
                                    <th scope='col'>Tổng</th>
                                    </tr>
                                </thead>
                                <tbody>";
                $Statement_OrderDetail = "SELECT * FROM orderdetail WHERE ID_Order =".$Display_Order['ID_Order'];
                $Query_OrderDetail = mysqli_query($conn, $Statement_OrderDetail);
                $Total=0;
                while($Display_OrderDetail = mysqli_fetch_assoc($Query_OrderDetail)){
                    $Statement_Product = "SELECT * FROM product WHERE ID_Product =".$Display_OrderDetail['ID_Product'];
                    $Query_Product = mysqli_query($conn, $Statement_Product);
                    $Display_Product = mysqli_fetch_assoc($Query_Product);
                    echo "<tr>
                            <th scope='row'>
                                <div>
                                    <img src='images/shop/$Display_Product[Image_Product]' class='border' width='70px'>
                                </div>
                            </th>
                            <td>
                                <div>
                                    <h5 class='text-truncate font-size-14'>$Display_Product[Name_Product]</h5>
                                    <p class='text-muted mb-0'>".number_format($Display_Product['Price_Product'], 3)."đ x $Display_OrderDetail[Quanlity_Order]</p>
                                </div>
                            </td>
                            <td>".number_format($Display_OrderDetail['Price_Order'])."đ</td>
                        </tr>";
                        $Total+= $Display_OrderDetail['Price_Order'];
                }
                                    echo"<tr>
                                    <td colspan='2'>
                                        <h6 class='m-0 text-right'>Total:</h6>
                                    </td>
                                    <td>
                                    ".number_format($Total)."đ
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

<?php
include("footeruser.php");
?>