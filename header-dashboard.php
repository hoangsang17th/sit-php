<?php
    include("Connect.php");
    include("SSAdmin.php");
    $admin = $_SESSION['adminname'];
    $rsname = "SELECT * FROM `admin` WHERE user= '$admin'";
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
                    <div class="dropdown d-none d-lg-inline-block ml-1">
                    <a href="AddSP.php">
                        <button class="btn header-item noti-icon waves-effect">
                            <i class="bx bx-customize"></i>
                        </button></a>
                    </div>
                    <div class="dropdown d-none d-lg-inline-block ml-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-bell bx-tada"></i>
                            <span class="badge badge-danger badge-pill">1</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Thông báo </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small"> Xem tất cả</a>
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
                                            <h6 class="mt-0 mb-1">Sắp trung thu rồi!</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">Mà bạn vẫn chưa có người yêu</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> Nhục</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle mr-1"></i> Các Ngày FA còn lại.
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar.jpg" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ml-1"><?php echo $profile['name']; ?></span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Tài Khoản</a>
                            <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> Doanh Thu</a>
                            <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> Cài Đặt</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="logout-dashboard.php"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Đăng Xuất</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="vertical-menu">
            <div data-simplebar="" class="h-100">
                <div id="sidebar-menu">
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="index-dashboard.php" class="waves-effect">
                                <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">SIT</span>
                                <span>Trang Chủ</span>
                            </a>
                        </li>
                        <li>
                            <a href="user-dashboard.php" class=" waves-effect">
                            <i class="fas fa-users"></i>
                                <span>Users SIT</span>
                            </a>
                        </li>
                        <li>
                            <a href="dsdanhmuc.php" class=" waves-effect">
                            <i class="fas fa-list-ol"></i>
                                <span>Danh Mục</span>
                            </a>
                        </li>
                        <li>
                            <a href="dssanpham.php" class=" waves-effect">
                                <i class="fas fa-list-ul"></i>
                                <span>Sản Phẩm</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-store"></i>
                                <span>Hệ Thống</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">Đơn Hàng</a></li>
                                <li><a href="#">Kho Hàng</a></li>
                                <li><a href="#">Địa Chỉ</a></li>
                                <li><a href="#">Doanh Thu</a></li>
                                <li><a href="#">Tài Khoản</a></li>
                                <li><a href="#">Khuyến Mãi</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Hỗ Trợ</a></li>
                            </ul>
                        </li>
                    </ul>
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
    </div>