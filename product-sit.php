<?php
include("navigation.php");
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
        $sqlGetHangHoa = "SELECT * FROM sanpham WHERE id=".$_GET['id'];        
        $ketQuaGetHangHoa = mysqli_query($conn, $sqlGetHangHoa);
        $mathang = mysqli_fetch_assoc($ketQuaGetHangHoa);
        echo "<section class='section'>";
        include("Basket.php");
        echo    "<div class='container mt-5'>
                    <div class='row align-items-center'>
                        <div class='col-md-5'>
                            <div class='slider slider-for'>
                                <div><img src='images/shop/$mathang[images]' class='img-fluid rounded' title='$mathang[tenmathang]'></div>
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
            $urlpage = str_replace(" ", "-", "$row[tenmathang]");
            include("slug-page.php");
            echo "<div class='col-12 mt-4 pt-2'>
            <div class='card shop-list border-0 position-relative overflow-hidden'>
                <div class='shop-image position-relative overflow-hidden rounded shadow'>
                    <a href='$urlpage-$row[id].html'><img src='images/shop/$row[images]' class='img-fluid' alt=''></a>
                    <a href='$urlpage-$row[id].html' class='overlay-work'>
                        <img src='images/shop/$row[images]' class='img-fluid' alt=''>
                    </a>
                    <ul class='list-unstyled shop-icons pr-3'>
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
           echo "<div class='card shadow rounded border-0 mt-4'>
    <div class='card-body'>
        <h5 class='card-title mb-0'>Comments :</h5>

        <ul class='media-list list-unstyled mb-0'>
            <li class='mt-4'>
                <div class='d-flex justify-content-between'>
                    <div class='media align-items-center'>
                        <a class='pr-3' href='#'>
                            <img src='assets/images/users/avatar.jpg' class='img-fluid avatar avatar-md-sm rounded-circle shadow' alt='img'>
                        </a>
                        <div class='commentor-detail'>
                            <h6 class='mb-0'><a href='javascript:void(0)' class='media-heading text-dark'>Tammy Camacho</a></h6>
                            <small class='text-muted'>16th August, 2019 at 03:44 pm</small>
                        </div>
                    </div>
                    <a href='#' class='text-muted'><i class='mdi mdi-reply'></i> Reply</a>
                </div>
                <div class='mt-3'>
                    <p class='text-muted font-italic p-3 bg-light rounded'>' There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour '</p>
                </div>

                <ul class='list-unstyled pl-4 pl-md-5 sub-comment'>
                    <li class='mt-4'>
                        <div class='d-flex justify-content-between'>
                            <div class='media align-items-center'>
                                <a class='pr-3' href='#'>
                                    <img src='assets/images/users/avatar.jpg' class='img-fluid avatar avatar-md-sm rounded-circle shadow' alt='img'>
                                </a>
                                <div class='commentor-detail'>
                                    <h6 class='mb-0'><a href='javascript:void(0)' class='text-dark media-heading'>Lorenzo Peterson</a></h6>
                                    <small class='text-muted'>17th August, 2019 at 01:25 pm</small>
                                </div>
                            </div>
                            <a href='#' class='text-muted'><i class='mdi mdi-reply'></i> Reply</a>
                        </div>
                        <div class='mt-3'>
                            <p class='text-muted font-italic p-3 bg-light rounded'>' There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour '</p>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>";
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