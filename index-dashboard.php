<?php
include("header-dashboard.php");
?>
<title>Trang Quản Trị SIT</title>
<?php
    $slsp =0;
    $sldm =0;
    $slus =0;
    $rsdanhmuc = "SELECT * FROM danhmuc";
    $rssanpham = "SELECT * FROM sanpham";
    $rsuser = "SELECT * FROM users";
    $sldanhmuc =mysqli_query($conn, $rsdanhmuc);
    $slsanpham =mysqli_query($conn, $rssanpham);
    $sluser =mysqli_query($conn, $rsuser);
    while ($row1 = mysqli_fetch_assoc($sldanhmuc)){
        $sldm++;
    }
    while ($row2 = mysqli_fetch_assoc($slsanpham)){
        $slsp++;
    }
    while ($row3 = mysqli_fetch_assoc($sluser)){
        $slus++;
    }
?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">SIT</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Quản Trị</a></li>
                                <li class="breadcrumb-item active"><?php echo $_SESSION['adminname']; ?></li>
                            </ol>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Đơn Hàng Mới</p>
                                    <h4 class="mb-0"><?php echo "<a href='dssanpham.html'>".$slsp."</a>";?></h4>
                                </div>
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Sản Phẩm</p>
                                    <h4 class="mb-0"><?php echo "<a href='dssanpham.html'>".$slsp."</a>";?></h4>
                                </div>
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Danh Mục</p>
                                    <h4 class="mb-0"><?php echo "<a href='dsdanhmuc.html'>".$sldm."</a>";?></h4>
                                </div>
                                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Users</p>
                                    <h4 class="mb-0"><?php echo "<a href='user-dashboard.html'>".$slus."</a>";?></h4>
                                </div>
                                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4 float-sm-left">Doanh Thu Cửa Hàng</h4>
                    <div class="float-sm-right">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Tuần</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tháng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Năm</a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
                    <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
                    <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("footeradmin.php");
?>