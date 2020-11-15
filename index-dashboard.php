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
    // Đếm số đơn hàng được order
    $Quanlity_Order = 0;
    $Statement_Order = "SELECT COUNT(ID_Order) AS Quanlity_Order FROM `order`";
    $Query_Order =mysqli_query($conn, $Statement_Order);
    $Display_Order = mysqli_fetch_assoc($Query_Order);
    $Quanlity_Order = $Display_Order['Quanlity_Order'];
    // Đếm tổng số sản phẩm có trên giỏ hàng
    $Quanlity_Product = 0;
    $Statement_Product = "SELECT COUNT(ID_Product) AS Quanlity_Product FROM `product`";
    $Query_Product =mysqli_query($conn, $Statement_Product);
    $Display_Product = mysqli_fetch_assoc($Query_Product);
    $Quanlity_Product = $Display_Product['Quanlity_Product'];
    // Đếm tổng số danh mục tòn tại trong của hàng
    $Quanlity_Catalog = 0;
    $Statement_Catalog = "SELECT COUNT(ID_Catalog) AS Quanlity_Catalog FROM `catalog`";
    $Query_Catalog =mysqli_query($conn, $Statement_Catalog);
    $Display_Catalog = mysqli_fetch_assoc($Query_Catalog);
    $Quanlity_Catalog = $Display_Catalog['Quanlity_Catalog'];
    // Đếm tổng số khách hàng của cửa hàng
    $Quanlity_Users = 0;
    $Statement_Users = "SELECT COUNT(ID_User) AS Quanlity_Users FROM `users`";
    $Query_Users =mysqli_query($conn, $Statement_Users);
    $Display_Users = mysqli_fetch_assoc($Query_Users);
    $Quanlity_Users = $Display_Users['Quanlity_Users'];
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
                                <li class="breadcrumb-item active"><?php echo $_SESSION["Email_Admin"]; ?></li>
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
                            <h2 class="card-text"><?php echo "<a href='dssanpham.html'>".$Quanlity_Order."</a>";?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="card bg-success text-white-50">
                        <div class="card-body">
                            <h5 class="mt-0 mb-4 text-white"><i class="fas fa-list-ul mr-3"></i>Sản Phẩm</h5>
                            <h2 class="card-text"><?php echo "<a href='dssanpham.html'>".$Quanlity_Product."</a>";?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="card bg-info text-white-50">
                        <div class="card-body">
                            <h5 class="mt-0 mb-4 text-white"><i class="fas fa-list-ol mr-3"></i>Danh Mục</h5>
                            <h2 class="card-text"><?php echo "<a href='dsdanhmuc.html'>".$Quanlity_Catalog."</a>";?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="card bg-warning text-white-50">
                        <div class="card-body">
                            <h5 class="mt-0 mb-4 text-white"><i class="fas fa-user mr-3"></i>Người Dùng</h5>
                            <h2 class="card-text"><?php echo "<a href='user-dashboard.html'>".$Quanlity_Users."</a>";?></h2>
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