<?php 
    include("Connect.php");
    session_start();
    $LoginErr ="";
    if (isset($_POST['Email_User'])){
        $Email_User = stripslashes($_REQUEST['Email_User']);
        $Email_User = mysqli_real_escape_string($conn,$Email_User);
        $Password_User = stripslashes($_REQUEST['Password_User']);
        $Password_User = mysqli_real_escape_string($conn,$Password_User);
        $query = "SELECT * FROM `users` WHERE Email_User='$Email_User' and Password_User='$Password_User'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['Email_User'] = $Email_User;
            ?>
            <script type="text/javascript">
                window.history.go(-2);
            </script>
            <?php
        }
        else{
            $LoginErr ="* Sai Tài khoản hoặc Mật Khẩu!";
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login | User SIT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SIT To Do Giải pháp mang tính cách mạng" />
    <meta name="keywords" content="ToDo List, Hoàng Sang, Hoang Sang 17Th, HoangSang17TH HoangSang 17Th, 17Team.Work, 17team.work, 17, 17teamwork, 17 work, Shop SoftWare, đăng ký, đăng ký sit"/>
    <meta name="author" content="Hoàng Sang" />
    <meta name="email" content="phsang49@gmail.com" />
    <meta name="website" content="http://www.sit.vn" />
    <meta name="Version" content="v1.0.0" />
    <link rel="shortcut icon" href="favicon.ico">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
</head>
<body>
<div class="home-btn d-none d-sm-block">
    <a href="home.html" class="text-dark"><i class="fas fa-home h2"></i></a>
</div>
<div class="account-pages pt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Hệ Thống User SIT.</h5>
                                    <p>Đăng Nhập Để Đến Với SIT.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0"> 
                        <div>
                            <a href="login-dashboard.html">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-dark">
                                        <img src="Logo.png" height="34">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <form class="form-horizontal" action="" method="post" name="login">
                                
                                <div class="form-group mt-1">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="Email_User" placeholder="Email của bạn">
                                </div>
                                <div class="form-group">
                                    <label for="userpassword">Mật Khẩu</label>
                                    <input type="password" class="form-control" name="Password_User" placeholder="Mật Khẩu">
                                
                                </div>
                                <div class="form-group">
                                <span><i class="text-danger mt-5"><?php echo $LoginErr;?></i></span>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Ghi nhớ trạng thái đăng nhập</label>
                                </div>
                                
                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Đăng Nhập</button>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Bạn Quên Mật Khẩu</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mt-3 text-center">
                    <div>
                        <p>Chưa Có Tài Khoản ? <a href="register.html" class="font-weight-medium text-primary"> Đăng Ký </a> </p>
                        <p><script>document.write(new Date().getFullYear())</script> © SIT.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>
</body>
</html>
