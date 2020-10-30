<?php
include("header-dashboard.php");
?>
<title>Trang Quản Trị SIT</title>
<style>
    a{
        color: #fff;
    }
</style>
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bảng Điều Khiển</a></li>
                                <li class="breadcrumb-item active"><?php echo $_SESSION['adminname']; ?></li>
                            </ol>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="card bg-danger text-white-50">
                        <div class="card-body">
                            <h5 class="mt-0 mb-4 text-white"><i class="fas fa-box-open mr-3"></i>ĐƠN HÀNG</h5>
                            <h2 class="card-text"><?php echo "<a href='dssanpham.html'>".$slsp."</a>";?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="card bg-success text-white-50">
                        <div class="card-body">
                            <h5 class="mt-0 mb-4 text-white"><i class="fas fa-list-ul mr-3"></i>Sản Phẩm</h5>
                            <h2 class="card-text"><?php echo "<a href='dssanpham.html'>".$slsp."</a>";?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="card bg-info text-white-50">
                        <div class="card-body">
                            <h5 class="mt-0 mb-4 text-white"><i class="fas fa-list-ol mr-3"></i>Danh Mục</h5>
                            <h2 class="card-text"><?php echo "<a href='dsdanhmuc.html'>".$sldm."</a>";?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="card bg-warning text-white-50">
                        <div class="card-body">
                            <h5 class="mt-0 mb-4 text-white"><i class="fas fa-user mr-3"></i>Người Dùng</h5>
                            <h2 class="card-text"><?php echo "<a href='user-dashboard.html'>".$slus."</a>";?></h2>
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