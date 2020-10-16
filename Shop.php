<?php
    include("Connect.php");
    include("navigation.php");
?>
<link href="assets/css/flexslider.css" rel="stylesheet" type="text/css" />
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
<?php
    include("Basket.php");
?>
<div class="container-fluid mt-3 pt-2">
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
            <div class="py-5 rounded shadow" style="background: url('images/shop/Sittodo.png') top center;background-size: cover;">
                <div class="p-4">
                    <h3>Fix Bug <br> HTML</h3>
                    <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary mt-2">Mua Ngay</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mt-4 pt-2">
            <div class="py-5 rounded shadow" style="background: url('images/shop/Sittodo.png') top center;background-size: cover;">
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
                $del = $row['dongia']*1.1*1000;
            }
            else $price =$del = 0;
            $urlpage = str_replace(" ", "_", "$row[tenmathang]");
            $sql5 = "SELECT * FROM photos WHERE idpro=$row[id]";
            $query5 = mysqli_query($conn, $sql5);
            $row5 = mysqli_fetch_assoc($query5);
            echo "<div class='col-lg-3 col-md-4 col-sm-6 col-6 mt-4 pt-2'>
            <div class='card shop-list border-0 position-relative overflow-hidden'>
                <div class='shop-image position-relative overflow-hidden rounded shadow'>
                    <a href='$row[id]_$urlpage.html'><img src='images/shop/$row5[images]' class='img-fluid' alt=''></a>
                    <a href='$row[id]_$urlpage.html' class='overlay-work'>
                        <img src='images/shop/$row5[images]' class='img-fluid' alt=''>
                    </a>
                    <ul class='list-unstyled shop-icons'>
                        <li class='mt-2'><a href='$row[id]_$urlpage.html' class='btn btn-icon btn-pills btn-soft-primary'><i data-feather='eye' class='icons'></i></a></li>
                        <li class='mt-2'><a href='AddToShop.php?item=$row[id]' class='btn btn-icon btn-pills btn-soft-warning'><i data-feather='shopping-cart' class='icons'></i></a></li>
                    </ul>
                </div>
                <div class='card-body content pt-4 p-2'>
                    <a href='$row[id]_$urlpage.html' class='text-dark product-name h6'>$row[tenmathang]</a>
                    <div class='d-flex justify-content-between mt-1'>";
                    if ($price !=0){
                        echo "<h6 class='text-muted small font-italic mb-0 mt-1'>".$price." VNĐ";
                        if(rand(0,1)==0){
                            if ($del!=0) echo "<span class='text-danger ml-1'>(".$del.")</span>";
                        }  
                        echo  "     </h6>";
                    }
                    else   echo "<h6 class=' small font-italic mb-0 mt-1 text-success'>FREE</h6>";
                    
            echo"   </div>
                </div>
            </div>
        </div>";
        }
        ?>
        </div>
    </div>
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