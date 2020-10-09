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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SIT To Do Giải pháp mang tính cách mạng" />
    <meta name="keywords" content="ToDo List, Hoàng Sang, Hoang Sang 17Th, HoangSang17TH HoangSang 17Th, 17Team.Work, 17team.work, 17, 17teamwork, 17 work, Shop SoftWare"/>
    <meta name="author" content="Hoàng Sang" />
    <meta name="email" content="phsang49@gmail.com" />
    <meta name="website" content="http://www.sit.vn" />
    <meta name="Version" content="v1.0.0" />
    <link rel="shortcut icon" href="favicon.ico">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"> 
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
</head>
<body>
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
    <div id="layout-wrapper">
            <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <button type="button" class="btn btn-sm px-4 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
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
                            <img class="" src="assets/images/flags/vn.png" alt="Header Language" height="16">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/us.jpg" alt="user-image" class="mr-1" height="12"> <span class="align-middle">English</span>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-bell bx-tada"></i>
                            <span class="badge badge-danger badge-pill">17</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Cảnh báo </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small">Xem tất cả</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar="" style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="bx bx-badge-check"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Sắp Tết Rồi Đó</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">Mà bạn vẫn chưa có người yêu!</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> Nhục</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle mr-1"></i> FA Muôn Kiếp...
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar.jpg" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ml-1"><?php echo $profile['name']; ?></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="Home.php"><img src="Logo.png" width="20px"> Trang Chủ</a>
                            <a class="dropdown-item text-danger" href="logout.php"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                        </div>
                    </div>            
                </div>
            </div>
        </header>
        <div class="vertical-menu">
            <div data-simplebar="" class="h-100">
                <div id="sidebar-menu">
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
            </div>
        </div>
    </div>