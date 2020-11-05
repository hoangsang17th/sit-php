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
    $sql = "SELECT * FROM sanpham WHERE id IN ($str)";
    $query = mysqli_query($conn, $sql);
    $total = 0;
    $user_id= $profile['id'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date_order= date("H:i:s d/m/Y");
    $address = $_GET['address'];
    $phone = $_GET['numberphone'];
    $name= $profile['name'];
    echo "<div class='container-fluid mt-5'>
            <div class='row justify-content-center mt-5'>
                <div class='col-12 col-sm-10 col-md-8 col-lg-6'>
                    <div class='rounded shadow-lg'>
                    <h4 class='mb-0 text-center pt-5 mb-3'>Đặt Hàng Thành Công</h4>
                    <hr>
                    <div class='ml-3'>
                        <h5 class=''><b>$name</b></h5>
                        <p class='text-secondary'>Địa chỉ: $address
                        <br>Điện thoại: $phone
                        <br>Ngày đặt hàng: $date_order
                        </p>
                    </div>
                    <table class='table table-center table-padding mb-5'>
                    ";
    while ($row = mysqli_fetch_assoc($query)){
        $product_id = $row['id'];
        $product_name = $row['tenmathang'];
        $quanlity= $_SESSION['cart'][$row['id']];
        $price = ($_SESSION['cart'][$row['id']]*$row['dongia']*1000);
        $sqlorder= "INSERT INTO orderpro(user_id, product_id, product_name, quanlity, price, address, phone, status, date_order) VALUES ('$user_id', '$product_id', '$product_name', '$quanlity', '$price', '$address', '$phone', 'Chưa Giải Quyết', '$date_order')";
        $queryorder = mysqli_query($conn, $sqlorder);
        echo "<tr>";
        echo   "<td>
                    <div class='d-flex align-items-center'>
                        <img src='images/shop/$row[images]' class='img-fluid avatar avatar-small rounded shadow' style='height:auto;'>
                        <div class='mb-0 ml-3'>
                        <h6><b>".$_SESSION['cart'][$row['id']]."</b> x ".$row['tenmathang']."</h6>
                        </div>
                    </div>
                    
                </td>";
        if ($row['dongia']==0){
            echo    "<td class='text-center'><i class='text-success'>FREE</i></td>";
        }
        else {
            echo    "<td class='text-center font-weight-bold'>".number_format($_SESSION['cart'][$row['id']]*$row['dongia'],3)." VND</td>";
        }
        echo "</tr>";
        $total += $_SESSION['cart'][$row['id']]*$row['dongia'];
    }
        echo    "<tr>
                    <td class='h6'>Tổng cộng</td>
                    <td class='text-center font-weight-bold text-danger'>".number_format($total,3)." VND</td>
                </tr>";
    echo "          </table>
                    </div>
                </div>
            </div>
        </div>";
    unset($_SESSION['cart']); 
    } else {
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