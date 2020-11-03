<?php
include("navigation.php");
?>
<title>Không Tìm Thấy Trang Yêu Cầu | 404 Error | SIT </title>
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<section class="align-items-center my-5">
    <div class="containermt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 text-center">
                <img src="images/404.svg" class="img-fluid" alt="">
                <div class="text-uppercase mt-4 display-3">Oh ! No</div>
                <h5 class="text-muted para-desc mx-auto">Xin lỗi, Trang bạn đang tìm kiếm không tồn tại!</h5>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12 text-center mb-5 pb-5">
                <button class="btn btn-outline-primary mt-4" onclick="goBack()">Go Back</button>
                <a href="Home.html" class="btn btn-primary mt-4 ml-2">Go To Home</a>
            </div>
        </div>
    </div>
</section>
<script>
function goBack() {
    window.history.back();
}
</script>
<?php
include("footer.php");
?>        