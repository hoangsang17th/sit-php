<?php
include("navigation.php");
$counts = 0;
if(isset($_SESSION['cart'])){
    $items = $_SESSION['cart'];
    $counts = count($items);
}
if($counts!=0){
    echo "<title>Đặt hàng thành công - SIT </title>";
} else echo "<title>Trang Lỗi Giỏ Hàng - SIT </title>";
?>

<?php
if($counts!=0){
    foreach($_SESSION['cart'] as $key=>$value){
        $item[]=$key;
    }
    $str=implode(",",$item);
    $Statement_Product = "SELECT * FROM product WHERE ID_Product IN ($str)";
    $Query_Product = mysqli_query($conn, $Statement_Product);
    $total = 0;
    $ID_User= $profile['ID_User'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $Date_Order= date("H:i:s d/m/Y");
    $Address_User = $_GET['address'];
    $Phone_User = $_GET['numberphone'];
    $Name_User= $profile['Name_User'];
    $Email_User = $profile['Email_User'];
    $stt=0;
    $Statement_Order= "INSERT INTO `order`(ID_User, Address_User, Phone_User, Status_Order, Date_Order) VALUES ('$ID_User', '$Address_User', '$Phone_User', 'Chưa Giải Quyết', '$Date_Order')";
    $Query_Order = mysqli_query($conn, $Statement_Order);
    $last_id = mysqli_insert_id($conn);
    include('SendEmail.php');
    echo "<section class='bg-invoice bg-light'>
    <div class='container'>
        <div class='row mt-5 pt-4 pt-sm-0 justify-content-center'>
            <div class='col-lg-10'>
                <div class='card shadow rounded border-0'>
                    <div class='card-body'>
                        <div class='invoice-top pb-4 border-bottom'>
                            <div class='row'>
                                <div class='col-md-8'>
                                    <div class='logo-invoice mb-2'>SIT<span class='text-primary'>.</span></div>
                                    <a href='javascript:void(0)' class='text-primary h6'><i data-feather='link' class='fea icon-sm text-muted mr-2'></i>www.SIT.com</a>
                                </div>
                                <div class='col-md-4 mt-4 mt-sm-0'>
                                    <h5>Address :</h5>
                                    <dl class='row mb-0'>
                                        <dt class='col-2 text-muted'><i data-feather='map-pin' class='fea icon-sm'></i></dt>
                                        <dd class='col-10 text-muted'>
                                            <a href='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin' class='video-play-icon text-muted'>
                                                <p class='mb-0'>Đại Học Việt Hàn,</p>
                                                <p class='mb-0'>Đà Nẵng, Việt Nam</p>
                                            </a>
                                        </dd>
                                        <dt class='col-2 text-muted'><i data-feather='mail' class='fea icon-sm'></i></dt>
                                        <dd class='col-10 text-muted'>
                                            <a href='mailto:phsang49@gmail.com' class='text-muted'>phsang49@gmail.com</a>
                                        </dd>
                                        <dt class='col-2 text-muted'><i data-feather='phone' class='fea icon-sm'></i></dt>
                                        <dd class='col-10 text-muted'>
                                            <a href='tel:0332148505' class='text-muted'>0332148505</a>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class='invoice-middle py-4'>
                            <h5>Chi tiết hóa đơn :</h5>
                            <div class='row mb-0'>
                                <div class='col-md-8 order-2 order-md-1'>
                                    <dl class='row'>
                                        <dt class='col-md-3 col-5 font-weight-normal'>Mã hóa đơn : </dt>
                                        <dd class='col-md-9 col-7 text-muted'>VKU$last_id</dd>
                                        
                                        <dt class='col-md-3 col-5 font-weight-normal'>Họ và Tên :</dt>
                                        <dd class='col-md-9 col-7 text-muted'> $Name_User</dd>
                                        
                                        <dt class='col-md-3 col-5 font-weight-normal'>Địa Chỉ :</dt>
                                        <dd class='col-md-9 col-7 text-muted'>
                                            <p class='mb-0'> $Address_User</p>
                                        </dd>
                                        <dt class='col-md-3 col-5 font-weight-normal'>Số điện thoại :</dt>
                                        <dd class='col-md-9 col-7 text-muted'>$Phone_User</dd>
                                    </dl>
                                </div>
                                <div class='col-md-4 order-md-2 order-1 mt-2 mt-sm-0'>
                                    <dl class='row mb-0'>
                                        <dt class='col-md-4 col-5 font-weight-normal'>Ngày :</dt>
                                        <dd class='col-md-8 col-7 text-muted'>$Date_Order</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class='invoice-table pb-4'>
                            <div class='table-responsive bg-white shadow rounded'>
                                <table class='table mb-0 table-center invoice-tb'>
                                    <thead class='bg-light'>
                                        <tr>
                                            <th scope='col'></th>
                                            <th scope='col' class='text-left'>Sản phẩm</th>
                                            <th scope='col' class='text-center'>Số lượng</th>
                                            <th scope='col' class='text-center'>Giá</th>
                                        </tr>
                                    </thead>
                                    <tbody>";
                                    
                                    while ($Display_Product = mysqli_fetch_assoc($Query_Product)){
                                        $stt++;
                                        $ID_Product = $Display_Product['ID_Product'];
                                        $Quanlity_Order= $_SESSION['cart'][$Display_Product['ID_Product']];
                                        $Price_Order = ($_SESSION['cart'][$Display_Product['ID_Product']]*$Display_Product['Price_Product']*1000);
                                        $Statement_OrderDetail= "INSERT INTO orderdetail(ID_Order, ID_Product, Quanlity_Order, Price_Order) VALUES ('$last_id', '$ID_Product', '$Quanlity_Order', '$Price_Order')";
                                        $Query_OrderDetail = mysqli_query($conn, $Statement_OrderDetail);
                                        echo "<tr>";
                                        echo   "
                                        <th scope='row' class='text-center'>$stt</th>
                                        <td class='text-left'>
                                        <div class='d-flex align-items-center'>
                                            <img src='images/shop/$Display_Product[Image_Product]' class='img-fluid avatar avatar-small rounded shadow' style='height:auto;'>
                                            <div class='mb-0 ml-3'>
                                                <h6>".$Display_Product['Name_Product']."</h6>
                                            </div>
                                        </div>
                                        </td>
                                        <td class='text-center'>".$_SESSION['cart'][$Display_Product['ID_Product']]."</td>";
                                        if ($Display_Product['Price_Product']==0){
                                            echo    "<td class='text-center'><i class='text-success'>FREE</i></td>";
                                        }
                                        else {
                                            echo    "<td class='text-center font-weight-bold'>".number_format($_SESSION['cart'][$Display_Product['ID_Product']]*$Display_Product['Price_Product'],3)." VND</td>";
                                        }
                                        echo "</tr>";
                                        $total += $_SESSION['cart'][$Display_Product['ID_Product']]*$Display_Product['Price_Product'];
                                        $total1= number_format($total,3);
                                    }
                                    echo "        </tbody>  </table>
                                    </div>
                                    <div class='row'>
                                        <div class='col-lg-4 col-md-5 ml-auto'>
                                            <ul class='list-unstyled mt-4 mb-0'>
                                                <li class='text-muted d-flex justify-content-between'>Tạm tính :<span>$total1 VNĐ</span></li>
                                                <li class='text-muted d-flex justify-content-between'>Phí vận chuyển :<span>0 VNĐ</span></li>
                                                <li class='d-flex justify-content-between font-weight-bold'>Tổng :<span>$total1 VNĐ</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class='invoice-footer border-top pt-4'>
                                    <div class='row'>
                                        <div class='col-sm-6'>
                                            <div class='text-sm-left text-muted text-center'>
                                                <h6 class='mb-0'>CSKH : <a href='tel:0332148505' class='text-warning'>0332148505</a></h6>
                                            </div>
                                        </div>
                                        <div class='col-sm-6'>
                                            <div class='text-sm-right text-muted text-center'>
                                                <h6 class='mb-0 text-primary'>Hoàng Sang</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>";
    unset($_SESSION['cart']); 
} 
else {
        echo "<section class='align-items-center my-5'>
        <div class='containermt-5 pt-5'>
            <div class='row justify-content-center'>
                <div class='col-lg-8 col-md-12 text-center'>
                    <img src='images/404.svg' class='img-fluid' alt=''>
                    <div class='text-uppercase mt-4 display-3'>Oh ! No</div>
                    <h5 class='text-muted para-desc mx-auto'>Xin lỗi, Trang bạn đang tìm kiếm không tồn tại!</h5>
                </div>
            </div>
            <div class='row mb-5'>
                <div class='col-md-12 text-center mb-5 pb-5'>
                    <button class='btn btn-outline-primary mt-4' onclick='goBack()'>Go Back</button>
                    <a href='Home.html' class='btn btn-primary mt-4 ml-2'>Go To Home</a>
                </div>
            </div>
        </div>
    </section>";
}
?>
<script>
function goBack() {
    window.history.back();
}
</script>
<?php
include("footer.php");
?>