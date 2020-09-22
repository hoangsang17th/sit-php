<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Chi tiết công việc | SIT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets\css\bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="assets\css\app.min.css" id="app-style" rel="stylesheet" type="text/css">

    </head>
    <body data-sidebar="dark">
    <?php 
    include("header.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // $password =$_POST['password']; password= '$password',
        $email =$_POST['email'];
        $name =$_POST['name'];
        $phone =$_POST['phone'];
        $address =$_POST['address'];

        $sql = "UPDATE users SET  email= '$email', name= '$name', phone='$phone', address='$address' WHERE id=".$profile['id'];
        $ketqua = mysqli_query($conn, $sql);
    }
    ?>
    <?php
        $sqlGet = "SELECT * FROM users WHERE id=".$profile['id'];      
        $ketQua = mysqli_query($conn, $sqlGet);
        $file = mysqli_fetch_assoc($ketQua);
        
    ?>
        <!-- Begin page -->
        <div id="layout-wrapper">
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Thông tin tài khoản</h4>
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Họ và Tên</label>
                                                <input type="text" class="form-control" name="name" value="<?php echo $file['name'];
                                                ?>">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">ID Login</label>
                                                        <input type="text" class="form-control" name="username" value="<?php
                                                        echo $file['username']; ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Email</label>
                                                        <input type="text" class="form-control" name="email" value="<?php
                                                        echo $file['email'];?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Số Điện Thoại</label>
                                                        <input type="number" class="form-control" name="phone" value="<?php
                                                        echo $file['phone']; ?>" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 mb-3">
                                                <label for="formrow-email-input">Địa Chỉ Liên Lạc</label>
                                                <textarea type="text" class="form-control" name="address" maxlength="5000" rows="7" placeholder="Không quá 5000 ký tự"><?php
                                                echo $file['address'];?></textarea>
                                                <p class="mt-3">Bạn là thành viên của SIT từ ngày <b><i><?php echo $file['date']; ?></i></b></p>
                                            </div>
                                            
                                            <div>
                                                <button type="submit" class="btn btn-warning mr-2 mt-2"><i class="far fa-edit"> </i> Lưu </button>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </body>
</html>
