<?php
    session_start();
    $profile['username']='';
    $profile['name']='';
    if(isset($_SESSION["username"])){
        include("Connect.php");
        $users = $_SESSION['username'];
        $rsname = "SELECT * FROM `users` WHERE username= '$users'";
        $resname =mysqli_query($conn, $rsname);
        $profile = mysqli_fetch_assoc($resname);
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="1 Giải pháp mang tính cách mạng" />
    <meta name="keywords" content="ToDo List"/>
    <meta name="author" content="Hoàng Sang" />
    <meta name="email" content="phsang49@gmail.com" />
    <meta name="website" content="http://www.sit.vn" />
    <meta name="Version" content="v7.3.1" />
    <link rel="shortcut icon" href="favicon.ico">
    <link href="assets/css/bootstrap.home.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">           
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css"/> 
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/> 
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="assets/css/colors/default.css" rel="stylesheet" id="color-opt">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>

    <header id="topnav" class="defaultscroll sticky bg-white">
        <div class="header-top-menu container-fluid">
            <div class="row">
                <div class="col">
                    <div class="data-time">
                        <span id="Time"></span>
                    </div>
                </div>
                <div class="col text-right social">
                    <div class="social">
                        <a target="_blank" href="https://www.facebook.com/HoangSang17TH"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://www.instagram.com/hoangsang17th/"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="mailto: phsang49@gmail.com"><i class="fas fa-envelope"></i></a>
                        <a target="_blank" href="https://twitter.com/HoangSang17Th"><i class="fab fa-twitter"></i></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UCFovmhE6wmj-6doJKKURaiA"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div>
                <a class="logo" href="index.html">
                    <img src="Logo.png" height="50" alt="">
                </a>
            </div>                 
            <div class="buy-button">
                <?php
                if ($profile['username']==''){
                    echo "<a href='login.php' class='btn btn-primary'>Đăng Nhập</a>";
                }
                else if($profile['name']==''){
                    echo "<a href='Profileuser.php' class='btn btn-primary'>Hoàn Thiện</a>";
                }
                else echo "<a href='Profileuser.php' class='btn btn-primary'>".$profile['name']."</a>"; ?>
            </div>
            <div class="menu-extras">
                <div class="menu-item">
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>
            <div id="navigation">
                <ul class="navigation-menu">
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="Shop.php">Shop</a></li>
                    <li><a href="introtodo.php">To Do</a></li>
                    <li><a href="aboutus.php">About Us</a></li>  
                    <li><a href="Search.php">Search</a></li>  
                </ul>
                <div class="buy-menu-btn d-none">
                    <?php
                        if ($profile['username']==''){
                            echo "<a href='login.php' class='btn btn-primary'>Đăng Nhập</a>";
                        }
                        else if($profile['name']==''){
                            echo "<a href='Profileuser.php' class='btn btn-primary'>Hoàn Thiện</a>";
                        }
                        else echo "<a href='Profileuser.php' class='btn btn-primary'>".$profile['name']."</a>"; ?>
                </div>
            </div>
        </div>
    </header>
        