<?php
    include("Connect.php");
    session_start();
    $profile['username']='';
    $profile['name']='';
    if(isset($_SESSION["username"])){
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
    <meta name="description" content="SIT To Do Giải pháp mang tính cách mạng" />
    <meta name="og:description" content="A group of U.S. Marines, under command of..."/>
    <meta name="keywords" content="ToDo List, Hoàng Sang, Hoang Sang 17Th, HoangSang17TH, HoangSang 17Th, Shop SoftWare,
    SIT, tải ứng dụng sit, cài ứng dụng sit, cai dat ung dung sit, cài đặt ứng dụng sit, cách tải ứng dụng sit, các sử dụng ứng dụng sit, cách sử dụng ứng dụng sit, software sit, ứng dụng sit, cách dùng ứng dụng sit, tải ứng dụng sit, phần mềm adobe, phần mềm văn phòng"/>
    <meta name="author" content="Hoàng Sang, phsang49@gmail.com"/>

    <meta name="email" content="phsang49@gmail.com" />
    <meta name="og:email" content="phsang49@gmail.com"/>

    <meta name="website" content="http://www.sit.vn" />
    <meta name="url" content="http://www.websiteaddrress.com">
    <meta name="identifier-URL" content="http://www.websiteaddress.com">
    <meta name="og:url" content="http://www.imdb.com/title/tt0117500/"/>

    <meta name="og:title" content="The Rock"/>
    
    <meta name="Version" content="v1.0.0" />
    <meta name="subject" content="SIT To Do, SIT Shop Software">
    <meta name="copyright"content="Hoàng Sang 17Th">
    <meta name="language" content="VI">
    <meta name="robots" content="home ,follow" />
    <meta name="revised" content="Saturday, October 17th, 2010, 5:15 am" />
    <meta name="abstract" content="">
    <meta name="topic" content="">
    <meta name="summary" content="">
    <meta name="Classification" content="Business">
    <meta name="designer" content="">
    <meta name="copyright" content="">
    <meta name="reply-to" content="phsang49@gmail.com">
    <meta name="owner" content="">
    
    <meta name="directory" content="submission">
    <meta name="category" content="">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <!-- OpenGraph Meta Tags -->
    <meta name="og:type" content="movie"/>
    <meta name="og:image" content="https://raw.githubusercontent.com/hoangsang17th/sit-php/master/Logo.png"/>
    <meta name="og:site_name" content="SIT"/>

    <meta name="fb:profile_id" content="100017678553549" />
    <meta name="og:phone_number" content="0332148505"/>

    <meta name="og:latitude" content="15.973075498752186"/>
    <meta name="og:longitude" content="108.25172162379636"/>
    <meta name="og:street-address" content="Nam Kỳ Khởi Nghĩa"/>
    <meta name="og:locality" content="Ngũ Hành Sơn"/>
    <meta name="og:region" content="Đà Nẵng"/>
    <meta name="og:postal-code" content="550000"/>
    <meta name="og:country-name" content="Việt Nam"/>

    <meta property="og:video" content="https://www.youtube.com/watch?v=kjQhtf1TfRk" />
    <meta property="og:video:height" content="1920" />
    <meta property="og:video:width" content="1080" />
    <meta property="og:video:type" content="Short Video" />
    <meta property="og:video:type" content="video/mp4" />

    <!-- End OpenGraph Meta Tags -->

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
                        <a target="_blank" href="https://www.facebook.com/HoangSang17TH" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://www.instagram.com/hoangsang17th/" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="mailto: phsang49@gmail.com" data-toggle="tooltip" data-placement="bottom" title="Email"><i class="fas fa-envelope"></i></a>
                        <a target="_blank" href="https://twitter.com/HoangSang17Th" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UCFovmhE6wmj-6doJKKURaiA" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fab fa-youtube"></i></a>
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
            <div class="buy-button">
                <?php
                if ($profile['username']==''){
                    echo "<a href='login.html' class='btn btn-primary'>Đăng Nhập</a>";
                }
                else if($profile['name']==''){
                    echo "<a href='Profileuser.html' class='btn btn-primary'>Hoàn Thiện</a>";
                }
                else echo "<a href='Profileuser.html' class='btn btn-primary'>".$profile['name']."</a>"; ?>
            </div>
            
            <div id="navigation">
                <ul class="navigation-menu">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="Shop.html">Shop</a></li>
                    <li><a href="introtodo.html">To Do</a></li>
                    <li><a href="aboutus.html">About Us</a></li>  
                    <li><a href="Search.html">Search</a></li>  
                </ul>
                <div class="buy-menu-btn d-none">
                    <?php
                        if ($profile['username']==''){
                            echo "<a href='login.html' class='btn btn-primary'>Đăng Nhập</a>";
                        }
                        else if($profile['name']==''){
                            echo "<a href='Profileuser.html' class='btn btn-primary'>Hoàn Thiện</a>";
                        }
                        else echo "<a href='Profileuser.html' class='btn btn-primary'>".$profile['name']."</a>"; ?>
                </div>
            </div>
        </div>
    </header>
    
<!-- <script src="/__/firebase/7.24.0/firebase-app.js"></script>

<script src="/__/firebase/7.24.0/firebase-analytics.js"></script>

<script src="/__/firebase/init.js"></script> -->