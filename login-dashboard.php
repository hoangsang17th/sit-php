﻿<?php 
    include("Connect.php");
    session_start();
    $LoginErr ="";
    if (isset($_POST['username'])){
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn,$username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn,$password);
        $query = "SELECT * FROM `admin` WHERE user='$username' and password='$password'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
            if($rows==1){ //1 là đúng (Nếu rows tồn tại 1 giá trị thì thực hiện công việc tiếp theo)
                $_SESSION['adminname'] = $username;
                header("Location: index-dashboard.php");
            }
            else{
                $LoginErr ="Sai Tài khoản hoặc Mật Khẩu!";
            }
        }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login | Admin Dashboard SIT</title>
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
        <a href="login.php" class="text-dark"><i class="fas fa-home h2"></i></a>
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
                                        <h5 class="text-primary">Hệ Thống Quản Trị</h5>
                                        <p>Quản Lý SIT.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0"> 
                            <div>
                                <a href="home.php">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-dark">
                                            <img src="Logo.png" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form class="form-horizontal" action="" method="post" name="login">
                                    <i class="text-danger mb-5"><?php echo $LoginErr;?></i>
                                    <div class="form-group mt-1">
                                        <label for="username">Tài Khoản</label>
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                    </div>
                                    <div class="form-group">
                                        <label for="userpassword">Mật Khẩu</label>
                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Ghi nhớ trạng thái đăng nhập</label>
                                    </div>
                                    
                                    <div class="mt-3">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Đăng Nhập</button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <a href="tel: 0332148505" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Bạn Quên Mật Khẩu</a>
                                    </div>
                                </form>
                            </div>
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
</body>
</html>
