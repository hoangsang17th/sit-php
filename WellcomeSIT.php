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
                                $Email_Subcribe = $_GET["email"];
                                $Statement_Subcribe = "SELECT * FROM subcribe WHERE Email_Subcribe= '$Email_Subcribe'";
                                $Query_Subcribe = mysqli_query($conn, $Statement_Subcribe);
                                $Display_Subcribe = mysqli_num_rows($Query_Subcribe);
                                if ($Display_Subcribe == 0){
                                    $Statement_Insert_Subcribe = "INSERT INTO `subcribe` (`Email_Subcribe`) VALUES ('$Email_Subcribe')";
                                    $Query_Subcribe = mysqli_query($conn, $Statement_Insert_Subcribe);
                                    echo "Đăng ký nhận bản tin thành công";
                                }
                                else echo "Đăng ký nhận bản tin thất bại";
                            }
                            else echo "Đầu tư cổ phiếu năm 18 tuổi có phải là 1 sự lựa chọn thông minh không?";
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include("footer.php");
?>