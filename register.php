<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SIT To Do Giải pháp mang tính cách mạng" />
    <meta name="keywords" content="ToDo List, Hoàng Sang, Hoang Sang 17Th, HoangSang17TH HoangSang 17Th, 17Team.Work, 17team.work, 17, 17teamwork, 17 work, Shop SoftWare"/>
    <meta name="author" content="Hoàng Sang" />
    <meta name="email" content="phsang49@gmail.com" />
    <meta name="website" content="http://www.sit.vn" />
    <meta name="Version" content="v1.0.0" />
    <link rel="shortcut icon" href="favicon.ico">
    <title>Đăng Ký - SIT </title>
    <link href="assets\css\bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets\css\app.min.css" id="app-style" rel="stylesheet" type="text/css">
</head>
<body>
<?php
    include("Connect.php");
    $userErr = "";
    if (isset($_REQUEST['username'])){
        $hovaten =  stripslashes($_REQUEST['hovaten']);
        $hovaten =  mysqli_real_escape_string($conn,$hovaten);
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn,$username);
        $email = stripslashes($_REQUEST['useremail']);
        $email = mysqli_real_escape_string($conn,$email);
        $password = stripslashes($_REQUEST['userpassword']);
        $password = mysqli_real_escape_string($conn,$password);
        $atest = "SELECT username FROM users WHERE username='$username'";
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date("Y-m-d H:i:s");
        $test = mysqli_query($conn, $atest);
        if (mysqli_num_rows($test) > 0){
            $userErr = "Tên đăng nhập đã tồn tại!";
        }
        else{
            $query = "INSERT INTO `users` (username, password, email, name, date) VALUES ('$username', '$password', '$email', '$hovaten', '$date')";
            $result = mysqli_query($conn,$query);
            if($result){
                header("Location: login.php");
            }
        }
    }
?>
    <div class="account-pages pt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Đăng Ký Miễn Phí</h5>
                                        <p>Trở Thành Một Phần Của Chúng Tôi</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="assets\images\profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0"> 
                            <div>
                                <a href="index.html">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-dark">
                                            <img src="Logo.png"height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form class="form-horizontal" action="" method="POST">
                                    <div class="form-group">
                                        <label for="userpassword">Họ và Tên</label>
                                        <input type="text" class="form-control" name="hovaten" placeholder="Họ và Tên" required>        
                                    </div>
                                    <div class="form-group">
                                        <label for="useremail">Email</label>
                                        <input type="email" class="form-control" name="useremail" placeholder="Enter email" required>        
                                    </div>
            
                                    <div class="form-group">
                                        <label for="username">ID Login</label>
                                        <input type="text" class="form-control" name="username" placeholder="Enter ID Login" required>
                                        <span><i class="text-danger"><?php echo $userErr;?></i></span>
                                    </div>
            
                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <input type="password" class="form-control" name="userpassword" placeholder="Enter password" required>        
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit"> Đăng Ký </button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <p class="mb-0">Điều khoản sử dụng <a href="#" class="text-primary">SIT</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <div>
                            <p>Bạn đã có tài khoản ? <a href="login.php" class="font-weight-medium text-primary"> Đăng Nhập</a> </p>
                            <p><script>document.write(new Date().getFullYear())</script> © SIT.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JAVASCRIPT -->
    <script src="assets\libs\jquery\jquery.min.js"></script>
    <script src="assets\libs\bootstrap\js\bootstrap.bundle.min.js"></script>
    <script src="assets\libs\metismenu\metisMenu.min.js"></script>
    <script src="assets\libs\simplebar\simplebar.min.js"></script>
    <script src="assets\libs\node-waves\waves.min.js"></script>
    <script src="assets\js\app.js"></script>
</body>
</html>
