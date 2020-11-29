<?php
include("navigation.php");
?>
<?php
    $check = 0;
    if (isset($_GET['id'])){
        $ID = $_GET['id'];
        $Statement_Product = "SELECT * FROM product WHERE ID_Product= $ID";      
        $Query_Product = mysqli_query($conn, $Statement_Product);
        $Quanlity_Product = mysqli_num_rows($Query_Product);
        $Display_Product = mysqli_fetch_assoc($Query_Product);
        if($Quanlity_Product == 1){
            $check = 1;
        }
        else{        
            $check = 0;
        }
    }
?>
<?php
    if($check == 1){
        if ($Display_Product['Title_Product'] ==''){
            echo "<title>".$Display_Product['Name_Product']." - SIT</title>";
        }
        else echo "<title>".$Display_Product['Title_Product']."</title>";
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
        $Statement_Product = "SELECT * FROM product WHERE ID_Product= ".$_GET['id'];             
        $Query_Product = mysqli_query($conn, $Statement_Product);
        $Display_Product = mysqli_fetch_assoc($Query_Product);
        echo "<section class='section'>";
        include("Basket.php");
        echo    "<div class='container mt-5'>
                    <div class='row align-items-center'>
                        <div class='col-md-5'>
                            <div class='slider slider-for'>
                                <div><img src='images/shop/$Display_Product[Image_Product]' class='img-fluid rounded' title='$Display_Product[Name_Product]'></div>
                            </div>
                            
                        </div>
                        <div class='col-md-7 mt-sm-0 pt-2 pt-sm-0'>
                            <div class='section-title ml-md-4'>
                                <h4 class='title'>".$Display_Product['Name_Product']."</h4>";
                                if ($Display_Product['Price_Product'] !=0){
                                    $del = $Display_Product['Price_Product']*1.1*1000;
                                    echo "<h6 class='text-muted small font-italic mb-0 mt-1'>".number_format($Display_Product['Price_Product'],3)." VNĐ";
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
                                <p class='text-muted'>".$Display_Product['Des_Product']."</p>
                                <ul class='list-unstyled text-muted'>
                                    <li class='mb-0'><span class='text-primary h5 mr-2'><i class='uim uim-check-circle'></i></span> Miễn Phí Vận Chuyển</li>
                                    <li class='mb-0'><span class='text-primary h5 mr-2'><i class='uim uim-check-circle'></i></span> Cam kết chính hiệu 100%</li>
                                    <li class='mb-0'><span class='text-primary h5 mr-2'><i class='uim uim-check-circle'></i></span> Ở đâu rẻ hơn, SIT hoàn tiền</li>
                                </ul>
                                <div class='mt-4 pt-2'>
                                    <a href='AddToShop.php?item=$Display_Product[ID_Product]' class='btn btn-soft-primary ml-2'>Thêm Vào Giỏ Hàng</a>
                                    <a href='AddToShopNow.php?item=$Display_Product[ID_Product]' class='btn btn-primary'>Mua Ngay</a>
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
        $Statement_Product = "SELECT * FROM product";
        $Query_Product = mysqli_query($conn, $Statement_Product);
        while ($Display_Product = mysqli_fetch_assoc($Query_Product)){
            if ($Display_Product['Price_Product']!=0){
                $price = number_format($Display_Product['Price_Product'],3);
                $del = $Display_Product['Price_Product']*1.1*1000;
            }
            else $price =$del = 0;
            $urlpage = str_replace(" ", "-", "$Display_Product[Name_Product]");
            include("slug-page.php");
            echo "<div class='col-12 mt-4 pt-2'>
            <div class='card shop-list border-0 position-relative overflow-hidden'>
                <div class='shop-image position-relative overflow-hidden rounded shadow'>
                    <a href='$urlpage-$Display_Product[ID_Product].html'><img src='images/shop/$Display_Product[Image_Product]' class='img-fluid' alt=''></a>
                    <a href='$urlpage-$Display_Product[ID_Product].html' class='overlay-work'>
                        <img src='images/shop/$Display_Product[Image_Product]' class='img-fluid' alt=''>
                    </a>
                    <ul class='list-unstyled shop-icons pr-3'>
                        <li class='mt-2'><a href='$urlpage-$Display_Product[ID_Product].html' class='btn btn-icon btn-pills btn-soft-primary'><i data-feather='eye' class='icons'></i></a></li>
                        <li class='mt-2'><a href='AddToShop.php?item=$Display_Product[ID_Product]' class='btn btn-icon btn-pills btn-soft-warning'><i data-feather='shopping-cart' class='icons'></i></a></li>
                    </ul>
                </div>
                <div class='card-body content pt-4 p-2'>
                    <a href='$urlpage-$Display_Product[ID_Product].html' class='text-dark product-name h6'>$Display_Product[Name_Product]</a>
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
        if ($profile['Email_User']!=''){
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
            <div class='col-12 mb-5' id='listcomment'>
            <div class='card shadow rounded border-0 mt-4'>
    <div class='card-body'>";
        $Statement_Comment = "SELECT * FROM comment WHERE ID_Product = $ID";
        $Query_Comment = mysqli_query($conn, $Statement_Comment);
        $Quanlity_Comment = mysqli_num_rows($Query_Comment);
        if ($Quanlity_Comment !=0){
            echo "<label>$Quanlity_Comment Bình Luận</label>";
        }
        else echo "<label>Chưa có đánh giá nào!</label>";
        while ($Display_Comment = mysqli_fetch_assoc($Query_Comment)){
            $Statement_Users = 'SELECT * FROM users WHERE ID_User ='.$Display_Comment['ID_User'];
            $Query_Users = mysqli_query($conn, $Statement_Users);
            $Display_Users = mysqli_fetch_assoc($Query_Users);
            echo "<ul class='media-list list-unstyled mb-0'>
                    <li class='mt-4'>
                        <div class='d-flex justify-content-between'>
                            <div class='media align-items-center'>
                                <a class='pr-3' href='#'>
                                    <img src='assets/images/users/avatar.jpg' class='img-fluid avatar avatar-md-sm rounded-circle shadow' alt='img'>
                                </a>
                                <div class='commentor-detail'>
                                    <h6 class='mb-0'><a href='javascript:void(0)' class='media-heading text-dark'>$Display_Users[Name_User]</a></h6>
                                    <small class='text-muted'>$Display_Comment[Date_Comment]</small>
                                </div>
                            </div>
                        </div>
                        <div class='mt-3'>
                            <p class='text-muted font-italic p-3 bg-light rounded'>' $Display_Comment[Comment]'</p>
                        </div>";
                        if (isset($_POST['btnsub-'.$Display_Comment['ID_Comment']])) {
                            $ID_User=$profile['ID_User'];
                            $ID_Comment = $Display_Comment['ID_Comment'];
                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $date = date("Y-m-d");
                            $ReComment = $_POST['recomment-'.$Display_Comment['ID_Comment']];
                            $sql = "INSERT INTO recomment(ID_User, ID_Comment, ReComment, Date_ReComment) VALUES ('$ID_User','$ID_Comment','$ReComment','$date')";
                            $ketqua = mysqli_query($conn, $sql);
                        }
                        echo "
                            <form action='' method='POST'>
                            <div class='row'>
                            <div class='col-8 col-sm-9 col-md-10'>
                                <input type='text' id='recomments' name='recomment-$Display_Comment[ID_Comment]' class='form-control' placeholder='Trả lời bình luận của $Display_Users[Name_User]'>
                            </div>
                            <div class='col-4 col-sm-3 col-md-2'>
                                <input type='submit' id='sendrcm' value='Trả lời' name='btnsub-$Display_Comment[ID_Comment]' class='btn btn-primary btn-lock'>
                            </div></div>
                            </form>
                        
                        ";
                        $Statement_ReComment = "SELECT * FROM recomment WHERE ID_Comment = $Display_Comment[ID_Comment]";
                        $Query_ReComment = mysqli_query($conn, $Statement_ReComment);
                        while ($Display_ReComment = mysqli_fetch_assoc($Query_ReComment)){
                            $Statement_ReUsers = 'SELECT * FROM users WHERE ID_User ='.$Display_ReComment['ID_User'];
                            $Query_ReUsers = mysqli_query($conn, $Statement_ReUsers);
                            $Display_ReUsers = mysqli_fetch_assoc($Query_ReUsers);
            echo"
                        <ul class='list-unstyled pl-4 pl-md-5 sub-comment'>
                            <li class='mt-4'>
                                <div class='d-flex justify-content-between'>
                                    <div class='media align-items-center'>
                                        <a class='pr-3' href='#'>
                                            <img src='assets/images/users/avatar.jpg' class='img-fluid avatar avatar-md-sm rounded-circle shadow' alt='img'>
                                        </a>
                                        <div class='commentor-detail'>
                                            <h6 class='mb-0'><a href='javascript:void(0)' class='text-dark media-heading'>$Display_ReUsers[Name_User]</a></h6>
                                            <small class='text-muted'>$Display_ReComment[Date_ReComment]</small>
                                        </div>
                                    </div>
                                </div>
                                <div class='mt-3'>
                                    <p class='text-muted font-italic p-3 bg-light rounded'>' $Display_ReComment[ReComment]'</p>
                                </div>
                            </li>
                        </ul>";}
                        echo"
                    </li>
                </ul><hr>";
        }
    echo "  </div>
    </div>
    </div>
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
            var ID_Product = <?php echo $_GET['id'];?>
            // url.searchParams.get("id");
            // var idpro = (new URL(document.location)).searchParams;
            var txt = $("#comments").val();
            document.getElementById("comments").value= "";
            alert("Đăng Bình Luận Thành Công");
            $.post("CommentProcess.php", {ID_Product: ID_Product, content: txt}, function (result) {
                // alert(result);
                $("#listcomment").append("<div class='rounded shadow my-3'><div class='p-4'><div class='d-flex justify-content-between'><div class='media align-items-center'><div class='pr-3'><img src='assets/images/users/avatar.jpg' class='img-fluid avatar avatar-md-sm rounded-circle shadow' alt='img'>                            </div><div class='commentor-detail'><h6 class='mb-0'><a href='javascript:void(0)' class='media-heading text-dark'>Bạn</a></h6><small class='text-muted'>Khách Hàng</small></div></div><small class='text-muted'>Vừa xong</small></div><div class='mt-3'><p class='mb-0'>"+txt+"</p></div></div></div>");
            });
        });
    });
</script>
