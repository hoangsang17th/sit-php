<?php
include("navigation.php");
function makeUrl($string){
    $string = trim($string);
    $string = str_replace(' ', '_', $string);
    $string = strtolower($string);
    $string = preg_replace('/(à|ạ)/', 'a', $string);
    return $string;
}
?>
<?php
    $check = 0;
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $filter = "SELECT * FROM sanpham WHERE id=".$_GET['id'];      
        $refilter = mysqli_query($conn, $filter);
        $qafilter = mysqli_num_rows($refilter);
        $mathang = mysqli_fetch_assoc($refilter);
        if($qafilter==1){
            $check = 1;
        }
        else{        
            $check = 0;
        }
    }
?>
<?php
    if($check == 1){
        if ($mathang['title'] ==''){
            echo "<title>".$mathang['tenmathang']." - SIT</title>";
        }
        else echo "<title>".$mathang['title']."</title>";
    }
    else echo "<title>Không tìm thấy trang yêu cầu | 404 Error | SIT </title>";
?>
<link rel="stylesheet" href="assets/css/slick.css"/> 
<link rel="stylesheet" href="assets/css/slick-theme.css"/>
<?php
    if ($check == 0){
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
        // <div class='slider slider-nav'>
        //     <div><img src='https://instagram.fdad1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/118770837_312755929805340_7987722077723780081_n.jpg?_nc_ht=instagram.fdad1-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=XdePOahKTacAX9PsJCi&oh=426d8971ee25a2e20f39a8c26cea1f5b&oe=5FA2116C' class='img-fluid' alt=''></div>
        //     <div><img src='https://instagram.fdad2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p750x750/118847575_255389815525741_8558020339629264414_n.jpg?_nc_ht=instagram.fdad2-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=9GxyEKkqUNQAX9X3Zh4&oh=e4e878701c9a170022687ea2d92452dd&oe=5FA60095' class='img-fluid' alt=''></div>
        //     <div><img src='https://instagram.fdad2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p750x750/119650081_186754249557859_7433573165844354493_n.jpg?_nc_ht=instagram.fdad2-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=dgKEQ0y3JMgAX_6_YAn&oh=6c689a6b0909f97429e3b9035b7cf5ae&oe=5FA5A1E8' class='img-fluid' alt=''></div>
        //     <div><img src='https://instagram.fdad2-1.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/118686423_948296468983235_355637591094112665_n.jpg?_nc_ht=instagram.fdad2-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=A2MTGYxA9BMAX8JV399&_nc_tp=19&oh=0ad3a47bf166de7d850b6aff9975eabc&oe=5FA2C690' class='img-fluid' alt=''></div>
        //     <div><img src='https://instagram.fdad1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/116018845_123292089133349_4706741316114013504_n.jpg?_nc_ht=instagram.fdad1-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=RNYXNd6k5-wAX-XVW6b&oh=2b2a1ca2e223137c6d040fabf4ec7501&oe=5FA5C129' class='img-fluid' alt=''></div>
        //     <div><img src='https://instagram.fdad1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/117972614_1213839532325656_268353430210084517_n.jpg?_nc_ht=instagram.fdad1-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=G12ks3yAFl0AX9vPLeU&oh=f4b1d6e70cf4afc2c115071237ce9970&oe=5FA52555' class='img-fluid' alt=''></div>
        // </div>
        $sqlGetHangHoa = "SELECT * FROM sanpham WHERE id=".$_GET['id'];        
        $ketQuaGetHangHoa = mysqli_query($conn, $sqlGetHangHoa);
        $mathang = mysqli_fetch_assoc($ketQuaGetHangHoa);
        $sql5 = "SELECT * FROM photos WHERE idpro=$mathang[id]";
        $query5 = mysqli_query($conn, $sql5);
        $row5 = mysqli_fetch_assoc($query5);
        echo "<section class='section'>";
        include("Basket.php");
        echo    "<div class='container mt-5'>
                    <div class='row align-items-center'>
                        <div class='col-md-5'>
                            <div class='slider slider-for'>
                                <div><img src='images/shop/$row5[images]' class='img-fluid rounded' title='$mathang[tenmathang]'></div>
                            </div>
                            
                        </div>
                        <div class='col-md-7 mt-sm-0 pt-2 pt-sm-0'>
                            <div class='section-title ml-md-4'>
                                <h4 class='title'>".$mathang['tenmathang']."</h4>";
                                if ($mathang['dongia'] !=0){
                                    $del = $mathang['dongia']*1.1*1000;
                                    echo "<h6 class='text-muted small font-italic mb-0 mt-1'>".number_format($mathang['dongia'],3)." VNĐ";
                                    if(rand(0,1)==0){
                                        if ($del!=0) echo "<span class='text-danger ml-1'>(".$del.")</span>";
                                    }  
                                    echo  "     </h6>";
                                }
                                else   echo "<h5 class=' small font-italic mb-0 mt-1 text-success'>FREE</h5>";
                    echo "
                                <ul class='list-unstyled text-warning h5 mb-0'>
                                    <li class='list-inline-item'><i class='mdi mdi-star'></i></li>
                                    <li class='list-inline-item'><i class='mdi mdi-star'></i></li>
                                    <li class='list-inline-item'><i class='mdi mdi-star'></i></li>
                                    <li class='list-inline-item'><i class='mdi mdi-star'></i></li>
                                    <li class='list-inline-item'><i class='mdi mdi-star'></i></li>
                                </ul>
                                <h5 class='mt-4 py-2'>MÔ TẢ SẢN PHẨM:</h5>
                                <p class='text-muted'>".$mathang['mota']."</p>
                                <ul class='list-unstyled text-muted'>
                                    <li class='mb-0'><span class='text-primary h5 mr-2'><i class='uim uim-check-circle'></i></span> Miễn Phí Vận Chuyển</li>
                                    <li class='mb-0'><span class='text-primary h5 mr-2'><i class='uim uim-check-circle'></i></span> Cam kết chính hiệu 100%</li>
                                    <li class='mb-0'><span class='text-primary h5 mr-2'><i class='uim uim-check-circle'></i></span> Ở đâu rẻ hơn, SIT hoàn tiền</li>
                                </ul>
                                <div class='mt-4 pt-2'>
                                    <a href='AddToShop.php?item=$mathang[id]' class='btn btn-soft-primary ml-2'>Thêm Vào Giỏ Hàng</a>
                                    <a href='AddToShopNow.php?item=$mathang[id]' class='btn btn-primary'>Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
        // Sản phẩm tương tự
        echo "</section>";
    }
?>
<div class="container mb-4">
    <div class="row">
        <div class='col-12'>
            <h5 class='mb-0'>Sản phẩm tương tự</h5>
        </div>
        <div class='col-12 mt-4'>
            <div id='client-four' class='owl-carousel owl-theme'>
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
            $sql6 = "SELECT * FROM photos WHERE idpro=$row[id]";
            $query6 = mysqli_query($conn, $sql6);
            $row6 = mysqli_fetch_assoc($query6);
            echo "<div class='col-12 mt-4 pt-2'>
            <div class='card shop-list border-0 position-relative overflow-hidden'>
                <div class='shop-image position-relative overflow-hidden rounded shadow'>
                    <a href='$row[id]_$urlpage.html'><img src='images/shop/$row6[images]' class='img-fluid' alt=''></a>
                    <a href='$row[id]_$urlpage.html' class='overlay-work'>
                        <img src='images/shop/$row6[images]' class='img-fluid' alt=''>
                    </a>
                    <ul class='list-unstyled shop-icons pr-3'>
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
    </div>
</div>

<?php
    if($check == 0){
        echo "";
    }
    else{
        if ($profile['email']!=''){
            echo" <div class='container my-5'>
        <h4 >KHÁCH HÀNG NHẬN XÉT</h4>
        <!-- <form method='GET' action=''> -->
            <div class='row mt-3'>
                <div class='col-md-12'>
                    <div class='form-group position-relative'>
                    <label>Comments</label>
                        <i data-feather='message-circle' class='fea icon-sm icons'></i>
                        <input type='text' id='comments' class='form-control pl-5' placeholder='Mời bạn để lại bình luận...'>
                    </div>
                </div>
            </div>
            <div class='row justify-content-end'>
                <div class='col-5 col-sm-4 col-md-3 col-lg-2'>
                    <input type='submit' id='sendcm' value='Gửi bình luận' class='btn btn-primary btn-lock'>
                </div>
            </div>
        <!-- </form> -->
    </div>";
        }
    echo "
    <div class='container mb-5'>
        <div class='row mb-5'>
            <div class='col-12 mb-5' id='listcomment'>";
                $sql3 = "SELECT * FROM comment WHERE idpro = $id";
                $ketqua3 = mysqli_query($conn, $sql3);
                $quanlity = mysqli_num_rows($ketqua3);
                if ($quanlity !=0){
                    echo "<label>$quanlity Bình Luận</label>";
                }
                else echo "<label>Chưa có đánh giá nào!</label>";
                while ($row3 = mysqli_fetch_assoc($ketqua3)){
                    $sql4 = 'SELECT * FROM users WHERE id ='.$row3['username'];
                    $ketqua4 = mysqli_query($conn, $sql4);
                    $row4 = mysqli_fetch_assoc($ketqua4);
                    echo "<div class='rounded shadow my-3'>
                    <div class='p-4'>
                        <div class='d-flex justify-content-between'>
                            <div class='media align-items-center'>
                                <div class='pr-3'>
                                <img src='assets/images/users/avatar.jpg' class='img-fluid avatar avatar-md-sm rounded-circle shadow' alt='img'>
                            </div>
                                <div class='commentor-detail'>
                                    <h6 class='mb-0'><a href='javascript:void(0)' class='media-heading text-dark'>$row4[name]</a></h6>
                                    <small class='text-muted'>Khách Hàng</small>
                                </div>
                            </div>
                            <small class='text-muted'>$row3[date]</small>
                        </div>
                        <div class='mt-3'>
                            <p class='mb-0'>$row3[comment]</p>
                        </div>
                    </div>
                </div>";
                }
    echo "  </div>
        </div>
    </div>";
    }
?>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#sendcm").click(function(){
            var url_string = window.location.href;
            var url = new URL(url_string);
            var idpro = <?php echo $_GET['id'];?>
            // url.searchParams.get("id");
            // var idpro = (new URL(document.location)).searchParams;
            var txt = $("#comments").val();
            document.getElementById("comments").value= "";
            alert("Đăng Bình Luận Thành Công");
            $.post("CommentProcess.php", {idpro: idpro, content: txt}, function (result) {
                // alert(result);
                $("#listcomment").append("<div class='rounded shadow my-3'><div class='p-4'><div class='d-flex justify-content-between'><div class='media align-items-center'><div class='pr-3'><img src='assets/images/users/avatar.jpg' class='img-fluid avatar avatar-md-sm rounded-circle shadow' alt='img'>                            </div><div class='commentor-detail'><h6 class='mb-0'><a href='javascript:void(0)' class='media-heading text-dark'>Bạn</a></h6><small class='text-muted'>Khách Hàng</small></div></div><small class='text-muted'>Vừa xong</small></div><div class='mt-3'><p class='mb-0'>"+txt+"</p></div></div></div>");
            });
        });
    });
</script>