<?php
include("navigation.php");
include("Connect.php");
?>
<title>Welcome to SIT</title>
<section class="bg-half-170 bg-light d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="title-heading text-center mt-5 pt-3">
                    <div class="alert alert-light alert-pills" role="alert" data-aos="fade-up" data-aos-duration="1000">
                        <span class="badge badge-pill badge-success mr-1">SIT</span>
                        <span class="content"> Đăng ký nhận bản tin 24/7</span>
                    </div>
                    <h1 class="heading mb-3" data-aos="fade-up" data-aos-duration="1400">Wellcome to SIT</h1>
                    <p class="para-desc mx-auto text-muted" data-aos="fade-up" data-aos-duration="1800">
                        <?php
                            if (isset($_GET['email'])){
                                $email = $_GET["email"];
                                $sqlx = "SELECT * FROM subcribe WHERE email= '$email'";
                                $sqlxi = mysqli_query($conn, $sqlx);
                                $rows = mysqli_num_rows($sqlxi);
                                if ($rows == 0){
                                    $sqle = "INSERT INTO `subcribe` (`id`, `email`) VALUES (NULL, '$email')";
                                    $ketqua = mysqli_query($conn, $sqle);
                                    echo "Đăng ký nhận bản tin thành công";
                                }
                                else echo "Đăng ký nhận bản tin thất bại";
                            }
                            else echo "Đầu tư cổ phiếu năm 18 tuổi có phải là 1 sự lựa chọn thông minh không?";
                        ?>
                    </p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container--> 
</section>
<?php
include("footer.php");
?>