<?php
    include("Connect.php");
    include("SSUser.php");
    $users = $_SESSION['username'];
    $rsname = "SELECT * FROM `users` WHERE username= '$users'";
    $resname =mysqli_query($conn, $rsname);
    $profile = mysqli_fetch_assoc($resname);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SIT | Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">
        <!-- Bootstrap Css -->
        <link href="assets\css\bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="assets\css\app.min.css" id="app-style" rel="stylesheet" type="text/css">
        <link href="assets\css\main.css" id="app-style" rel="stylesheet" type="text/css">
    <style>
        .header-top-menu{
            font-family: none;
        }
    </style>
    </head>
    <body data-sidebar="dark">
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner-chase">
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                </div>
            </div>
        </div>
        <!-- Begin page -->
        <div id="layout-wrapper">
                <header id="page-topbar">
                <div class="header-top-menu container-fluid" id="header-top-menu">
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
                <div class="navbar-header">
                    
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets\images\logo-light.svg" alt="" height="25">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets\images\logo-light.svg" alt="" height="50">
                                    <!-- <h2 style="font-style: italic;
                                    font-weight: bold; font-height: 10px; margin-right: 20px;">SIT</h2> -->
                                </span>
                            </a>
                        </div>
                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>

                        
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="" src="assets\images\flags\vn.png" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets\images\flags\us.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">English</span>
                                </a>

                                
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell bx-tada"></i>
                                <span class="badge badge-danger badge-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar="" style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <img src="assets\images\users\avatar-3.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">James Lemire</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle mr-1"></i> View More..
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets\images\users\avatar.jpg" alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ml-1"><?php echo $profile['name']; ?></span>
                                <!-- <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i> -->
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item text-danger" href="logout.php"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                            </div>
                        </div>            
                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">
                <div data-simplebar="" class="h-100">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Tài khoản của <?php echo $profile['name'];?></li>
                            <li>
                                <a href="index.php" class=" waves-effect">
                                <i class="fas fa-tasks"></i>
                                    <span>To Do List</span><span class="badge badge-pill badge-info float-right">NEW</span>
                                </a>
                            </li>
                            <li>
                                <a href="Profileuser.php" class="waves-effect">
                                    <i class="fas fa-user-cog"></i>
                                    <span>Thông tin tài khoản</span>
                                </a>
                            </li>
                            <!-- <li class="menu-title">Apps</li> -->
                            <li>
                                <a href="#" class=" waves-effect">
                                <i class="far fa-bell"></i>
                                    <span>Thông báo của tôi</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class=" waves-effect">
                                <i class="fas fa-archive"></i>
                                    <span>Quản lí đơn hàng</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class=" waves-effect">
                                <i class="fas fa-map-marker-alt"></i>
                                    <span>Sổ địa chỉ</span>
                                </a>
                            </li><li>
                                <a href="#" class=" waves-effect">
                                <i class="far fa-credit-card"></i>
                                    <span>Thông tin thanh toán</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class=" waves-effect">
                                <i class="far fa-question-circle"></i>
                                    <span>Hỏi đáp</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
        </div>
        <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © SIT.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Phạm Hoàng Sang
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
        <script src="assets\libs\jquery\jquery.min.js"></script>
        <script src="assets\libs\bootstrap\js\bootstrap.bundle.min.js"></script>
        <script src="assets\libs\metismenu\metisMenu.min.js"></script>
        <script src="assets\libs\simplebar\simplebar.min.js"></script>
        <script src="assets\libs\node-waves\waves.min.js"></script>
        <!-- apexcharts -->
        <script src="assets\libs\apexcharts\apexcharts.min.js"></script>
        <script src="assets\js\pages\dashboard.init.js"></script>
        <script src="assets\js\app.js"></script>

        <script src="assets\libs\datatables.net\js\jquery.dataTables.min.js"></script>
        <script src="assets\libs\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets\libs\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
        <script src="assets\libs\datatables.net-buttons-bs4\js\buttons.bootstrap4.min.js"></script>
        <script src="assets\libs\jszip\jszip.min.js"></script>
        <script src="assets\libs\pdfmake\build\pdfmake.min.js"></script>
        <script src="assets\libs\pdfmake\build\vfs_fonts.js"></script>
        <script src="assets\libs\datatables.net-buttons\js\buttons.html5.min.js"></script>
        <script src="assets\libs\datatables.net-buttons\js\buttons.print.min.js"></script>
        <script src="assets\libs\datatables.net-buttons\js\buttons.colVis.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="assets\libs\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
        <script src="assets\libs\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>
        <!-- Datatable init js -->
        <script src="assets\js\pages\datatables.init.js"></script>   
        <script>
        function GetClock(){
            var datatime= new Date();
            var min= datatime.getMinutes(); //Phút
            var hour= datatime.getHours(); //Giờ
            var date= datatime.getDate(); //Ngày
            var month= datatime.getMonth(); //Tháng
            var year= datatime.getFullYear(); //Năm
            if(min<=9) min="0"+min
            var clocktext= +hour+':'+min+" Ngày "+date+"/ "+(month+1)+"/ "+year;
            document.getElementById('Time').innerHTML=clocktext;
        }
        GetClock();
        setInterval(GetClock,1000);
        </script>
    </body>
</html>
