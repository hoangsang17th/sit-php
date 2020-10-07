<?php
    include("Connect.php");
    include("navigation.php");
?>
<link href="assets/css/flexslider.css" rel="stylesheet" type="text/css" />
<?php
session_start();
?>
<title>Shop SIT - Mua mọi thứ với mọi giá!</title>
<section class="main-slider">
    <ul class="slides"> 
        <li class="bg-slider slider-rtl-2 d-flex align-items-center" style="background:url('images/software/partner1.svg');">
            <div class="container">
                <div class="row align-items-center mt-5">
                    <div class="col-lg-7 col-md-7">
                        <div class="title-heading mt-4">                                    
                            <h1 class="display-4 title-white font-weight-bold mb-3 text-white">Phần Mềm <br> Windows</h1>
                            <p class="para-desc text-muted para-dark">Cung cấp phần mềm bản quyền giá rẻ hơn 20% so với giá thị trường.</p>
                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-soft-primary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="bg-slider slider-rtl-1 d-flex align-items-center" style="background:url('images/software/partner1.svg');">
            <div class="container">
                <div class="row align-items-center mt-5">
                    <div class="col-lg-7 col-md-7">
                        <div class="title-heading mt-4">
                            <h1 class="display-4 title-white font-weight-bold mb-3 text-white">Chứng Khoáng <br> SIT</h1>
                            <p class="para-desc text-muted para-dark">Các lớp học với các nền tảng kiến thức căn bản quan trọng nhất.</p>
                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-soft-primary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="bg-slider slider-rtl-3 d-flex align-items-center" style="background:url('images/software/partner1.svg');">
            <div class="container">
                <div class="row align-items-center mt-5">
                    <div class="col-lg-7 col-md-7">
                        <div class="title-heading mt-4">
                            <h1 class="display-4 title-white font-weight-bold mb-3 text-white">To Do SIT</h1>
                            <p class="para-desc text-muted para-dark">Giúp bạn theo dõi và kiểm soát công việc hằng ngày dễ dàng hơn bao giờ hết.</p>
                            <div class="mt-4">
                                <a href="javascript:void(0)" class="btn btn-soft-primary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>
<div class="container-fluid mt-3 pt-2">
    <div class="row mb-3">
        <div class="col-12 text-center">
        <?php
            $counts = 0;
            if(isset($_SESSION['cart'])){
                $items = $_SESSION['cart'];
                $counts = count($items);
            }
            echo "<a href='Shop-Cart.php' class='btn btn-outline-primary'><i class='fas fa-shopping-basket'> </i> ".$counts." Sản Phẩm</a>";
        ?>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4 mt-4 pt-2">
            <div class="py-5 rounded shadow" style="background: url('images/shop/Sittodo.png') top center;background-size: cover;">
                <div class="p-4">
                    <h3>To Do <br>SIT </h3>
                    <a href="index.php" class="btn btn-sm btn-soft-primary mt-2">Mua Ngay</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mt-4 pt-2">
            <div class="py-5 rounded shadow" style="background: url('images/shop/Fixbug.png') top center;background-size: cover;">
                <div class="p-4">
                    <h3>Fix Bug <br> HTML</h3>
                    <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary mt-2">Mua Ngay</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mt-4 pt-2">
            <div class="py-5 rounded shadow" style="background: url('images/shop/Fixbug.png') top center;background-size: cover;">
                <div class="p-4">
                    <h3>Fix Bug <br> PHP</h3>
                    <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary mt-2">Mua Ngay</a>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="mb-0">DÀNH RIÊNG CHO BẠN</h5>
            </div>
        </div>
        <div class="row">
        <?php
        $sql2 = "SELECT * FROM sanpham";
        $query = mysqli_query($conn, $sql2);
        while ($row = mysqli_fetch_assoc($query)){
            if ($row['dongia']!=0){
                $price = number_format($row['dongia'],3);
            }
            else $price = 0;
            echo "<div class='col-lg-3 col-md-4 col-sm-6 col-6 mt-4 pt-2'>
            <div class='card shop-list border-0 position-relative overflow-hidden'>
                <div class='shop-image position-relative overflow-hidden rounded shadow'>
                    <a href='shop-product-detail.html'><img src='images/shop/product/s1.jpg' class='img-fluid' alt=''></a>
                    <a href='shop-product-detail.html' class='overlay-work'>
                        <img src='images/shop/product/s-1.jpg' class='img-fluid' alt=''>
                    </a>
                    <ul class='list-unstyled shop-icons'>
                        <li><a href='javascript:void(0)' class='btn btn-icon btn-pills btn-soft-danger'><i data-feather='heart' class='icons'></i></a></li>
                        <li class='mt-2'><a href='shop-product-detail.html' class='btn btn-icon btn-pills btn-soft-primary'><i data-feather='eye' class='icons'></i></a></li>
                        <li class='mt-2'><a href='AddToShop.php?item=$row[id]' class='btn btn-icon btn-pills btn-soft-warning'><i data-feather='shopping-cart' class='icons'></i></a></li>
                    </ul>
                </div>
                <div class='card-body content pt-4 p-2'>
                    <a href='shop-product-detail.html' class='text-dark product-name h6'>$row[tenmathang]</a>
                    <div class='d-flex justify-content-between mt-1'>
                        <h6 class='text-muted small font-italic mb-0 mt-1'>".$price." VNĐ</h6>
                    </div>
                </div>
            </div>
        </div>";
        // echo "<div>";
        // echo "<h3>$row[title]</h3>";
        // echo "Tac Gia: $row[author] - Gia: ".number_format($row['price'],3)."
        // VND<br />";
        // echo "<p align='right'><a href='addcart.php?item=$row[id]'>Mua Sach
        // Nay</a></p>";
        // echo "</div>";
        }
        ?>
            <!-- <del class='text-danger ml-2'>$21.00</del>  -->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mt-4 pt-2">
                <div class="card shop-list border-0 position-relative overflow-hidden">
                    <div class="shop-image position-relative overflow-hidden rounded shadow">
                        <a href="shop-product-detail.html"><img src="images/shop/product/s3.jpg" class="img-fluid" alt=""></a>
                        <a href="shop-product-detail.html" class="overlay-work">
                            <img src="images/shop/product/s-3.jpg" class="img-fluid" alt="">
                        </a>
                        <ul class="list-unstyled shop-icons">
                            <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                            <li class="mt-2"><a href="shop-product-detail.html" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                            <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body content pt-4 p-2">
                        <a href="shop-product-detail.html" class="text-dark product-name h6">Elegent Watch</a>
                        <div class="d-flex justify-content-between mt-1">
                            <h6 class="text-muted small font-italic mb-0 mt-1">$5.00 <span class="text-success ml-1">30% off</span> </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container mt-100 mt-60">
        <div class="row">
            <div class="col-12">
                <h5 class="mb-0">Top Categories</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                <div class="card explore-feature border-0 rounded text-center bg-white">
                    <div class="card-body">
                        <div class="icon rounded-circle shadow-lg d-inline-block h2">
                            <i class="uil uil-user-md"></i>
                        </div>
                        <div class="content mt-3">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Fashion</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                <div class="card explore-feature border-0 rounded text-center bg-white">
                    <div class="card-body">
                        <div class="icon rounded-circle shadow-lg d-inline-block h2">
                            <i class="uil uil-tennis-ball"></i>
                        </div>
                        <div class="content mt-3">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Sports</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                <div class="card explore-feature border-0 rounded text-center bg-white">
                    <div class="card-body">
                        <div class="icon rounded-circle shadow-lg d-inline-block h2">
                            <i class="uil uil-headphones"></i>
                        </div>
                        <div class="content mt-3">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Music</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                <div class="card explore-feature border-0 rounded text-center bg-white">
                    <div class="card-body">
                        <div class="icon rounded-circle shadow-lg d-inline-block h2">
                            <i class="uil uil-bed-double"></i>
                        </div>
                        <div class="content mt-3">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Furniture</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                <div class="card explore-feature border-0 rounded text-center bg-white">
                    <div class="card-body">
                        <div class="icon rounded-circle shadow-lg d-inline-block h2">
                            <i class="uil uil-airplay"></i>
                        </div>
                        <div class="content mt-3">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Electronics</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                <div class="card explore-feature border-0 rounded text-center bg-white">
                    <div class="card-body">
                        <div class="icon rounded-circle shadow-lg d-inline-block h2">
                            <i class="uil uil-car-sideview"></i>
                        </div>
                        <div class="content mt-3">
                            <h6 class="mb-0"><a href="javascript:void(0)" class="title text-dark">Motors</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container-fluid mt-100 mt-60">
        <div class="rounded py-5" style="background: url('images/shop/simple.jpg') fixed;background-size: cover;">
            <div class="container py-5">
                <div class="row py-5">
                    <div class="col-12">
                        <div class="section-title">
                            <h2 class="font-weight-bold mb-4 text-light">Hình Ảnh Tối Giản <br> Miễn Phí</h2>
                            <p class="para-desc para-white text-muted mb-0">Minimalism là phong cách ảnh tối giản đã có một chỗ đứng rất đặc biệt trong xã hội hiện đại.</p>
                            <div class="mt-4">
                                <a href="images/shop/simple.jpg" class="btn btn-success" download="SIT_Simple"><i class="fa fa-download mr-3"> </i> Tải Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include("footer.php");
?>
<script src="assets/js/jquery.flexslider-min.js"></script>
<script src="assets/js/flexslider.init.js"></script>