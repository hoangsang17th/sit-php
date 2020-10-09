<?php
include("navigation.php");
?> 
<title>Sản Phẩm 001 - SIT</title>
<link rel="stylesheet" href="assets/css/slick.css"/> 
<link rel="stylesheet" href="assets/css/slick-theme.css"/>
<?php
    if (!isset($_GET['id'])){
        echo "
        <div class='container my-5'>
            <div class='row mt-5 justify-content-center'>
                <div class='col-6 mt-5'>
                    <img src='assets/images/nopro.svg' class='w-100 mt-3'>
                </div>
                <div class='col-12 text-center mt-3'>
                <h2 class='text-danger'><i>Có vẻ như sản phẩm này đã bị xóa!</i></h2>
                </div>
                <div class='col-12 text-center mt-3'>
                <a href='Shop.php' class='btn btn-outline-primary'><i class='fas fa-angle-left'> </i> Trở về cửa hàng</a>
                </div>
            </div>
        </div>
        ";
    }
    else{
        echo "<section class='section'>";
        echo    "<div class='container'>
                    <div class='row align-items-center'>
                        <div class='col-md-5'>
                            <div class='slider slider-for'>
                                <div><img src='https://instagram.fdad1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/118770837_312755929805340_7987722077723780081_n.jpg?_nc_ht=instagram.fdad1-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=XdePOahKTacAX9PsJCi&oh=426d8971ee25a2e20f39a8c26cea1f5b&oe=5FA2116C' class='img-fluid rounded' alt=''></div>
                                <div><img src='https://instagram.fdad2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p750x750/118847575_255389815525741_8558020339629264414_n.jpg?_nc_ht=instagram.fdad2-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=9GxyEKkqUNQAX9X3Zh4&oh=e4e878701c9a170022687ea2d92452dd&oe=5FA60095' class='img-fluid rounded' alt=''></div>
                                <div><img src='https://instagram.fdad2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p750x750/119650081_186754249557859_7433573165844354493_n.jpg?_nc_ht=instagram.fdad2-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=dgKEQ0y3JMgAX_6_YAn&oh=6c689a6b0909f97429e3b9035b7cf5ae&oe=5FA5A1E8' class='img-fluid rounded' alt=''></div>
                                <div><img src='https://instagram.fdad2-1.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/118686423_948296468983235_355637591094112665_n.jpg?_nc_ht=instagram.fdad2-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=A2MTGYxA9BMAX8JV399&_nc_tp=19&oh=0ad3a47bf166de7d850b6aff9975eabc&oe=5FA2C690' class='img-fluid rounded' alt=''></div>
                                <div><img src='https://instagram.fdad1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/116018845_123292089133349_4706741316114013504_n.jpg?_nc_ht=instagram.fdad1-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=RNYXNd6k5-wAX-XVW6b&oh=2b2a1ca2e223137c6d040fabf4ec7501&oe=5FA5C129' class='img-fluid rounded' alt=''></div>
                                <div><img src='https://instagram.fdad1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/117972614_1213839532325656_268353430210084517_n.jpg?_nc_ht=instagram.fdad1-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=G12ks3yAFl0AX9vPLeU&oh=f4b1d6e70cf4afc2c115071237ce9970&oe=5FA52555' class='img-fluid rounded' alt=''></div>
                            </div>
                            <div class='slider slider-nav'>
                                <div><img src='https://instagram.fdad1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/118770837_312755929805340_7987722077723780081_n.jpg?_nc_ht=instagram.fdad1-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=XdePOahKTacAX9PsJCi&oh=426d8971ee25a2e20f39a8c26cea1f5b&oe=5FA2116C' class='img-fluid' alt=''></div>
                                <div><img src='https://instagram.fdad2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p750x750/118847575_255389815525741_8558020339629264414_n.jpg?_nc_ht=instagram.fdad2-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=9GxyEKkqUNQAX9X3Zh4&oh=e4e878701c9a170022687ea2d92452dd&oe=5FA60095' class='img-fluid' alt=''></div>
                                <div><img src='https://instagram.fdad2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p750x750/119650081_186754249557859_7433573165844354493_n.jpg?_nc_ht=instagram.fdad2-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=dgKEQ0y3JMgAX_6_YAn&oh=6c689a6b0909f97429e3b9035b7cf5ae&oe=5FA5A1E8' class='img-fluid' alt=''></div>
                                <div><img src='https://instagram.fdad2-1.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/118686423_948296468983235_355637591094112665_n.jpg?_nc_ht=instagram.fdad2-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=A2MTGYxA9BMAX8JV399&_nc_tp=19&oh=0ad3a47bf166de7d850b6aff9975eabc&oe=5FA2C690' class='img-fluid' alt=''></div>
                                <div><img src='https://instagram.fdad1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/116018845_123292089133349_4706741316114013504_n.jpg?_nc_ht=instagram.fdad1-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=RNYXNd6k5-wAX-XVW6b&oh=2b2a1ca2e223137c6d040fabf4ec7501&oe=5FA5C129' class='img-fluid' alt=''></div>
                                <div><img src='https://instagram.fdad1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/117972614_1213839532325656_268353430210084517_n.jpg?_nc_ht=instagram.fdad1-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=G12ks3yAFl0AX9vPLeU&oh=f4b1d6e70cf4afc2c115071237ce9970&oe=5FA52555' class='img-fluid' alt=''></div>
                            </div>
                        </div>
                        <div class='col-md-7 mt-4 mt-sm-0 pt-2 pt-sm-0'>
                            <div class='section-title ml-md-4'>
                                <h4 class='title'>Branded T-Shirts</h4>
                                <h5 class='text-muted'>$21.00 <del class='text-danger ml-2'>$25.00</del> </h5>
                                <ul class='list-unstyled text-warning h5 mb-0'>
                                    <li class='list-inline-item'><i class='mdi mdi-star'></i></li>
                                    <li class='list-inline-item'><i class='mdi mdi-star'></i></li>
                                    <li class='list-inline-item'><i class='mdi mdi-star'></i></li>
                                    <li class='list-inline-item'><i class='mdi mdi-star'></i></li>
                                    <li class='list-inline-item'><i class='mdi mdi-star'></i></li>
                                </ul>
                                <h5 class='mt-4 py-2'>Overview :</h5>
                                <p class='text-muted'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero exercitationem, unde molestiae sint quae inventore atque minima natus fugiat nihil quisquam voluptates ea omnis. Modi laborum soluta tempore unde accusantium.</p>
                                <ul class='list-unstyled text-muted'>
                                    <li class='mb-0'><span class='text-primary h5 mr-2'><i class='uim uim-check-circle'></i></span> Digital Marketing Solutions for Tomorrow</li>
                                    <li class='mb-0'><span class='text-primary h5 mr-2'><i class='uim uim-check-circle'></i></span> Our Talented &amp; Experienced Marketing Agency</li>
                                    <li class='mb-0'><span class='text-primary h5 mr-2'><i class='uim uim-check-circle'></i></span> Create your own skin to match your brand</li>
                                </ul>
                                <div class='row mt-4 pt-2'>
                                    <div class='col-lg-6 col-12'>
                                        <div class='d-flex align-items-center'>
                                            <h6 class='mb-0'>Your Size:</h6>
                                            <ul class='list-unstyled mb-0 ml-3'>
                                                <li class='list-inline-item'><a href='javascript:void(0)' class='btn btn-icon btn-soft-primary'>S</a></li>
                                                <li class='list-inline-item ml-1'><a href='javascript:void(0)' class='btn btn-icon btn-soft-primary'>M</a></li>
                                                <li class='list-inline-item ml-1'><a href='javascript:void(0)' class='btn btn-icon btn-soft-primary'>L</a></li>
                                                <li class='list-inline-item ml-1'><a href='javascript:void(0)' class='btn btn-icon btn-soft-primary'>XL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class='col-lg-6 col-12 mt-4 mt-lg-0'>
                                        <div class='d-flex shop-list align-items-center'>
                                            <h6 class='mb-0'>Quantity:</h6>
                                            <div class='ml-3'>
                                                <input type='button' value='-' class='minus btn btn-icon btn-soft-primary font-weight-bold'>
                                                <input type='text' step='1' min='1' name='quantity' value='1' title='Qty' class='btn btn-icon btn-soft-primary font-weight-bold'>
                                                <input type='button' value='+' class='plus btn btn-icon btn-soft-primary font-weight-bold'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='mt-4 pt-2'>
                                    <a href='javascript:void(0)' class='btn btn-primary'>Shop Now</a>
                                    <a href='shop-cart.html' class='btn btn-soft-primary ml-2'>Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
        // Sản phẩm tương tự
        echo "<div class='container mt-100 mt-60'>
                <div class='row'>
                    <div class='col-12'>
                        <h5 class='mb-0'>Sản phẩm tương tự</h5>
                    </div>
                    <div class='col-12 mt-4'>
                        <div id='client-four' class='owl-carousel owl-theme'>";
        $id = $_GET["id"];
        $iddanhmuc = 1;
        $sql = "SELECT * FROM sanpham WHERE id =".$id;
        $query1 = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($query1)){
            $iddanhmuc = $row['iddanhmuc'];
        }
        $sql2 = "SELECT * FROM sanpham WHERE iddanhmuc= ".$iddanhmuc;
        $query2 = mysqli_query($conn, $sql2);
        while ($row2 = mysqli_fetch_assoc($query2)){
            echo "
                    <div class='card shop-list border-0 position-relative overflow-hidden m-2'>
                        <div class='shop-image position-relative overflow-hidden rounded shadow'>
                            <a href='product-sit.php?id=".$row2['id']."'><img src='images/shop/product/s1.jpg' class='img-fluid' alt=''></a>
                            <a href='product-sit.php?id=".$row2['id']."' class='overlay-work'>
                                <img src='images/shop/product/s-1.jpg' class='img-fluid' alt=''>
                            </a>
                            <ul class='list-unstyled shop-icons'>
                                <li class='mt-2'><a href='product-sit.php?id=".$row2['id']."' class='btn btn-icon btn-pills btn-soft-primary'><i data-feather='eye' class='icons'></i></a></li>
                                <li class='mt-2'><a href='AddToShop.php?item=$row2[id]' class='btn btn-icon btn-pills btn-soft-warning'><i data-feather='shopping-cart' class='icons'></i></a></li>
                            </ul>
                        </div>
                        <div class='card-body content pt-4 p-2'>
                        <a href='product-sit.php?id=".$row2['id']."' class='text-dark product-name h6'>$row2[tenmathang]</a>
                        <div class='d-flex justify-content-between mt-1'>
                        <h6 class=' small font-italic mb-0 mt-1 text-success'>FREE</h6>
                            </div>
                        </div>
                    </div>";
        }
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </section>";
    }
?>

<!-- <section class="bg-half bg-light d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> Branded T-Shirts </h4>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="index.html">SIT</a></li>
                                <li class="breadcrumb-item"><a href="index-shop.html">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section> -->
<!-- <div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div> -->

<?php
include("footer.php");
?>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/slick.init.js"></script>
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