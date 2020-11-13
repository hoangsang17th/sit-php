<?php
    include("Connect.php");
    include("navigation.php");
    session_start();
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
                    <h3>Fix Bug <br> Fontend</h3>
                    <a href="AddToShop.php?item=13" class="btn btn-sm btn-soft-primary mt-2">Mua Ngay</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mt-4 pt-2">
            <div class="py-5 rounded shadow" style="background: url('images/shop/Sittodo.png') top center;background-size: cover;">
                <div class="p-4">
                    <h3>Fix Bug <br> Backend</h3>
                    <a href="AddToShop.php?item=14" class="btn btn-sm btn-soft-primary mt-2">Mua Ngay</a>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="card border-0 sidebar sticky-bar">
                    <div class="card-body p-0">
                        <div class="widget">
                            <div id="search2" class="widget-search mb-0">
                                <form role="search" method="get" id="searchform" class="searchform">
                                    <div>
                                        <input type="text" class="border rounded" name="s" placeholder="Tìm Kiếm">
                                        <input type="submit" id="searchsubmit" value="Search">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <hr>
                        <div class="widget mt-2">
                            <div id="search3" class="widget-search mb-0">
                                <form method="GET" action="Shop.html">
                                <div class="row mb-2">
                                    <div class="col-12 mb-2">GIÁ</div>
                                    <div class="col-12 text-muted">Chọn khoản giá</div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <input type="number" class="border rounded form-control" name="min">
                                    </div>
                                    <div class="mt-2">
                                    ĐẾN
                                    </div>
                                    <div class="col-5 text-center">
                                    <input type="number" class="border rounded form-control" name="max">
                                    </div>
                                    <div class="ml-3 mt-3 col-4 btn btn-outline-primary">
                                    <input type="submit" value="OK">OK</div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget mt-4 pt-2">
                            <h4 class="widget-title"><a href="Shop.html">DANH MỤC SẢN PHẨM</a></h4>
                            <ul class="list-unstyled mt-4 mb-0 blog-catagories">
                                <?php
                                $resultdm = mysqli_query($conn, "SELECT * FROM danhmuc");
                                while ($rowdm = mysqli_fetch_assoc($resultdm)){
                                $resultslsp = mysqli_query($conn, "SELECT * FROM sanpham WHERE iddanhmuc=".$rowdm['id']."");
                                $sqlslsp= mysqli_num_rows($resultslsp);
                                echo "<li><a href='?c=".$rowdm['id']."'>$rowdm[tendanhmuc] <span class='text-primary'>($sqlslsp)</span></a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                if(!isset($_SESSION['limit'])){
                    $_SESSION['limit'] =10;
                }
                $limit = $_SESSION['limit'];
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $custom = $_POST['limi'];
                    $_SESSION['limit'] =  $custom;
                }
            if (isset($_GET['c'])){
                $c=$_GET['c'];
                $querycou = "SELECT * FROM sanpham WHERE iddanhmuc=".$c;
                $resultcou = mysqli_query($conn, $querycou);
                
                $total_records = mysqli_num_rows($resultcou);
                $current_page = isset($_GET["page"]) ? $_GET["page"] : 1;
                $total_page = ceil($total_records / $limit);
                if ($current_page > $total_page){
                $current_page = $total_page;
                }
                else if ($current_page < 1){
                $current_page = 1;
                }
                $start = ($current_page - 1) * $limit;
                $result = mysqli_query($conn, "SELECT * FROM sanpham WHERE iddanhmuc= $c LIMIT $start,$limit");
            }else 
            if(isset($_GET['s'])){
                $s =$_GET['s'];
                $querycou = "SELECT * FROM sanpham WHERE LOWER(tenmathang)  LIKE '%".$s."%'";
                $resultcou = mysqli_query($conn, $querycou);
                
                $total_records = mysqli_num_rows($resultcou);
                $current_page = isset($_GET["page"]) ? $_GET["page"] : 1;
                $total_page = ceil($total_records / $limit);
                if ($current_page > $total_page){
                $current_page = $total_page;
                }
                else if ($current_page < 1){
                $current_page = 1;
                }
                $start = ($current_page - 1) * $limit;
                $sqls= "SELECT * FROM sanpham WHERE LOWER(tenmathang)  LIKE '%".$s."%' LIMIT $start,$limit";
                $result = mysqli_query($conn, $sqls);
            } else {
                $querycou = "SELECT * FROM sanpham";
                $resultcou = mysqli_query($conn, $querycou);
                
                $total_records = mysqli_num_rows($resultcou);
                $current_page = isset($_GET["page"]) ? $_GET["page"] : 1;
                $total_page = ceil($total_records / $limit);
                if ($current_page > $total_page){
                $current_page = $total_page;
                }
                else if ($current_page < 1){
                $current_page = 1;
                }
                $start = ($current_page - 1) * $limit;
                $result = mysqli_query($conn, "SELECT * FROM sanpham LIMIT $start,$limit");
            }

            ?>
            <div class="col-lg-9 col-md-8 col-12 mt-5 pt-2 mt-sm-0 pt-sm-0">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-7">
                        <div class="section-title">
                            <h5 class="mb-0">SẢN PHẨM: <?php echo $total_records;?> Kết Quả</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="form custom-form" >
                            <form action="Shop.html" method="POST">
                            <div class="form-group mb-0">
                                <select class="form-control custom-select" name="limi" onchange = 'this.form.submit ()'>
                                    <option >Số SP Mỗi Trang</option>
                                    <option value="10">10 Sản Phẩm</option>
                                    <option value="20">20 Sản Phẩm</option>
                                    <option value="30">30 Sản Phẩm</option>
                                </select>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php
                if ($total_records!=0){
                    while ($row = mysqli_fetch_assoc($result)){
                        if ($row['dongia']!=0){
                            $price = number_format($row['dongia'],3);
                            $del = $row['dongia']*1.1*1000;
                        }
                        else $price =$del = 0;
                        $urlpage = str_replace(" ", "-", "$row[tenmathang]");
                        include("slug-page.php");
                        echo "<div class='col-lg-3 col-md-4 col-sm-6 col-6 mt-4 pt-2'>
                        <div class='card shop-list border-0 position-relative overflow-hidden'>
                            <div class='shop-image position-relative overflow-hidden rounded shadow'>
                                <a href='$urlpage-$row[id].html'><img src='images/shop/$row[images]' class='img-fluid' alt=''></a>
                                <a href='$urlpage-$row[id].html' class='overlay-work'>
                                    <img src='images/shop/$row[images]' class='img-fluid' alt=''>
                                </a>
                                <ul class='list-unstyled shop-icons'>
                                    <li class='mt-2'><a href='$urlpage-$row[id].html' class='btn btn-icon btn-pills btn-soft-primary'><i data-feather='eye' class='icons'></i></a></li>
                                    <li class='mt-2'><a href='AddToShop.php?item=$row[id]' class='btn btn-icon btn-pills btn-soft-warning'><i data-feather='shopping-cart' class='icons'></i></a></li>
                                </ul>
                            </div>
                            <div class='card-body content pt-4 p-2'>
                                <a href='$urlpage-$row[id].html' class='text-dark product-name h6'>$row[tenmathang]</a>
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
                } else {
                    echo    "</div class='col-12 mt-5'>
                                <p class='alert alert-outline-warning mt-5 text-center'>Trang này không có sản phẩm nào!</p>    
                            </div>";
                }
                
                ?>
                </div>
                <?php
                if ($total_page >1 && isset($_GET['c'])){
                    echo "<div class='row my-5'>
                            <div class='col-12'>
                                <ul class='pagination mb-0 justify-content-end'>";
                    if ($current_page > 1){
                        if ($current_page == 2){
                            echo "<li class='page-item'><a class='page-link' href='Shop.html?c=$c' aria-label='Previous'><i class='mdi mdi-arrow-left'></i> </a></li>";
                        }else
                        echo "<li class='page-item'><a class='page-link' href='Shop.html?page=".($current_page-1)."&c=$c' aria-label='Previous'><i class='mdi mdi-arrow-left'></i> </a></li>";
                    }
                    
                    for ($i = 1; $i <= $total_page; $i++){
                        if ($i == $current_page){
                            echo "<li class='page-item active'><span class='page-link'>".$i."</span></li>";
                        } else{
                            if ($i ==1){
                            echo "<li class='page-item'><a class='page-link' href='Shop.html?c=$c'>".$i."</a></li>";
                            }else 
                            echo "<li class='page-item'><a class='page-link' href='Shop.html?page=$i&c=$c'>".$i."</a></li>";
                        }
                    }
                    if ($current_page < $total_page){
                        echo "<li class='page-item'><a class='page-link' href='Shop.html?page=".($current_page+1)."&c=$c' aria-label='Next'> <i class='mdi mdi-arrow-right'></i></a></li>";
                    }
                    echo        "</ul>
                        </div>
                    </div>";
                } else if($total_page >1 && !isset($_GET['c'])){
                    echo "<div class='row my-5'>
                            <div class='col-12'>
                                <ul class='pagination mb-0 justify-content-end'>";
                    if ($current_page > 1){
                        if ($current_page == 2){
                            echo "<li class='page-item'><a class='page-link' href='Shop.html' aria-label='Previous'><i class='mdi mdi-arrow-left'></i> </a></li>";
                        }else
                        echo "<li class='page-item'><a class='page-link' href='Shop.html?page=".($current_page-1)."' aria-label='Previous'><i class='mdi mdi-arrow-left'></i> </a></li>";
                    }
                    
                    for ($i = 1; $i <= $total_page; $i++){
                        if ($i == $current_page){
                            echo "<li class='page-item active'><span class='page-link'>".$i."</span></li>";
                        } else{
                            if ($i ==1){
                            echo "<li class='page-item'><a class='page-link' href='Shop.html'>".$i."</a></li>";
                            }else 
                            echo "<li class='page-item'><a class='page-link' href='Shop.html?page=$i'>".$i."</a></li>";
                        }
                    }
                    if ($current_page < $total_page){
                        echo "<li class='page-item'><a class='page-link' href='Shop.html?page=".($current_page+1)."' aria-label='Next'> <i class='mdi mdi-arrow-right'></i></a></li>";
                    }
                    echo        "</ul>
                        </div>
                    </div>";
                }                
                ?>      
            </div>
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