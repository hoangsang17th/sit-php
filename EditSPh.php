<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <title>Thay đổi thông tin sản phẩm | SIT Admin Dashboard</title>
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
    include("header-dashboard.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tenmathang = $_POST['tenmathang']; $soluong = $_POST['soluong'];
        $dongia = $_POST['dongia']; $idDanhmuc = $_POST['iddanhmuc'];
        $mota =$_POST['mota'];
        $id=$_GET['id'];
        $sql = "UPDATE sanpham SET tenmathang='$tenmathang',iddanhmuc=$idDanhmuc,soluong=$soluong,dongia=$dongia, mota='$mota' WHERE id=$id";
        $sll = "SELECT * FROM sanpham WHERE tenmathang='$tenmathang' ";
        $ketqua = mysqli_query($conn, $sql);
    }
    ?>
    <?php
        if (isset($_GET['id'])){
            $sqlGetHangHoa = "SELECT * FROM sanpham WHERE id=".$_GET['id'];        
            $ketQuaGetHangHoa = mysqli_query($conn, $sqlGetHangHoa);
            $mathang = mysqli_fetch_assoc($ketQuaGetHangHoa);
        }
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
                                        <h4 class="card-title mb-4">Thay đổi thông tin sản phẩm</h4>
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Tên Sản Phẩm</label>
                                                <input type="text" class="form-control" name="tenmathang"value="<?php echo $mathang['tenmathang']; ?>">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Số Lượng</label>
                                                        <input type="number" class="form-control" name="soluong" value="<?php echo $mathang['soluong']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formrow-password-input">Đơn Giá</label>
                                                        <input type="number" class="form-control" name="dongia" value="<?php echo $mathang['dongia']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="formrow-inputState">Danh Mục</label>
                                                        <select name="iddanhmuc" class="form-control" selected="<?php echo (isset($mathang))?$mathang['iddanhmuc']:'';?>">
                                                        <?php
                                                            $sqlGetDanhMuc = "SELECT * FROM danhmuc";
                                                            $ketquaGetDanhMuc = mysqli_query($conn,$sqlGetDanhMuc);
                                                            while($row = mysqli_fetch_assoc($ketquaGetDanhMuc))
                                                            {
                                                                echo '<option value="'.$row['id'].'"';
                                                                if ($row['id'] == $mathang['iddanhmuc']) echo 'selected="selected">'.$row['tendanhmuc'].'</option>';
                                                                if ($row['id'] != $mathang['iddanhmuc']) echo '>'.$row['tendanhmuc'].'</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 mb-3">
                                                <label>Mô tả sản phẩm</label>
                                                <textarea id="textarea" name="mota" class="form-control" maxlength="1000" rows="5" placeholder="Không quá 1000 ký tự"><?php echo $mathang['mota']; ?></textarea>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Hoàn Thành</button>
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
