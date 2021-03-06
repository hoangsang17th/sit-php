<?php
    include("navigation.php");
?>
<title>Giỏ Hàng của Bạn - SIT </title>
<?php
// session_start();
if(isset($_POST['submit'])){
    foreach($_POST['qty'] as $key=>$value){
        if( ($value == 0) and (is_numeric($value))){
            unset ($_SESSION['cart'][$key]);
        }
        else 
        if(($value > 0) and (is_numeric($value))){
            $_SESSION['cart'][$key]=$value;
        }
    }
    header("Location:Shop-Cart.html");
}
?>
<section class="d-table w-100 py-5" style="background:url('images/software/partner1.svg');">
    <div class="container pt-5">
        <div class="row justify-content-center pt-5">
            <div class="col-lg-12 text-center pt-5">
                <div class="page-next-level pt-5">
                    <h4 class="title"> Shopping Cart </h4>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="Home.html">SIT</a></li>
                                <li class="breadcrumb-item"><a href="Shop.html">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<section class="section">
    <div class="container">
    <?php
    include("Connect.php");
    $count=0; 
    // Biến đếm
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $key => $value){
            if(isset($key)){
                $count=1;
            }
        }
    }
    if($count == 1){
        echo '<form action="Shop-Cart.html" method="POST">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive bg-white shadow">
                    <table class="table table-center table-padding mb-0">
                        <thead>
                            <tr>
                                <th class="py-3" style="min-width: 300px;">Sản Phẩm</th>
                                <th class="text-center py-3" style="min-width: 160px;">Giá</th>
                                <th class="text-center py-3" style="min-width: 160px;">Số Lượng</th>
                                <th class="text-center py-3" style="min-width: 160px;">Tổng</th>
                            </tr>
                        </thead>
                        <tbody>';
        foreach($_SESSION['cart'] as $key=>$value){
            $item[]=$key;
        }
        $str=implode(",",$item);
        $Statement_Product = "SELECT * FROM product WHERE ID_Product IN ($str)";
        $Query_Product = mysqli_query($conn, $Statement_Product);
        $total = 0;
        while ($Display_Product = mysqli_fetch_assoc($Query_Product)){
            $urlpage = str_replace(" ", "-", "$Display_Product[Name_Product]");
            include("slug-page.php");
            echo "<tr>";
            echo   "<td>
                        <div class='d-flex align-items-center'>
                            <img src='images/shop/$Display_Product[Image_Product]' class='img-fluid avatar avatar-small rounded shadow' style='height:auto;'>
                            <div class='mb-0 ml-3'>
                            <h6><a href='$urlpage-$Display_Product[ID_Product].html'>$Display_Product[Name_Product]</a></h6>
                            <a href='DeleteCart.html?id=$Display_Product[ID_Product]'>Xóa</a>
                            </div>
                        </div>
                        
                    </td>";
            if ($Display_Product['Price_Product']==0){
                echo    "<td class='text-center'><i class='text-success'>FREE</i></td>";
            }
            else {
                echo    "<td class='text-center'>".number_format($Display_Product['Price_Product'],3)."VNĐ</td>";
            }
            echo    "<td class='text-center'>
                        <input type='button' value='-' class='minus btn btn-icon btn-soft-primary font-weight-bold'>
                        <input type='text' step='1' min='1' name='qty[$Display_Product[ID_Product]]' value='{$_SESSION['cart'][$Display_Product['ID_Product']]}' title='Qty' class='btn btn-icon btn-soft-primary font-weight-bold'>
                        <input type='button' value='+' class='plus btn btn-icon btn-soft-primary font-weight-bold'>
                    </td>";
            echo    "<td class='text-center font-weight-bold'>".number_format($_SESSION['cart'][$Display_Product['ID_Product']]*$Display_Product['Price_Product'],3)." VND</td>";
            echo "</tr>";
            $total += $_SESSION['cart'][$Display_Product['ID_Product']]*$Display_Product['Price_Product'];
        }
        $totals = $total + ($total/10);
        echo    "</tbody>
            </table>
        </div>
    </div>
</div>
<div class='row'>
<div class='col-lg-8 col-md-6 mt-4 pt-2'>
    <a href='Shop.html' class='btn btn-primary'>Shop More</a>
    <input type='submit' name='submit' value='Update Cart' class='btn btn-soft-primary ml-2'>
</div>
</form>
<div class='col-lg-4 col-md-6 ml-auto mt-4 pt-2'>
    <div class='table-responsive bg-white rounded shadow'>
        <table class='table table-center table-padding mb-0'>
            <tbody>
                <tr>
                    <td class='h6'>Tạm Tính</td>
                    <td class='text-center font-weight-bold'>".number_format($total,3)." VND</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class='mt-4 pt-2 text-right'>
        <a href='Check.html' class='btn btn-primary'>Tiến hành đặt hàng</a>
    </div>
</div>
</div>";
}
else
{
    echo    "<div class='row justify-content-center mt-4'>
                <div class='col-12 col-md-4 text-center'>
                    <img src='Assets/images/Noproducts.svg' class='w-100'>
                    <p class='mt-4 mb-3'>Không có sản phẩm nào trong giỏ hàng của bạn.
                    <div class='mt-4 pt-2'>
                        <a href='Shop.html' class='btn btn-warning'>Tiếp tục mua sắm</a>
                    </div>
                </div>
            </div>";
}
?>       
    </div>
</section>
<?php
include("footer.php");
?>
<script>
$('.plus').click(function () {
    if ($(this).prev().val() < 999) {
        $(this).prev().val(+$(this).prev().val() + 1);
    }
});
$('.minus').click(function () {
    if ($(this).next().val() > 1) {
        if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
    }
});
</script>