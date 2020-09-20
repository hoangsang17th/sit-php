<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <title>Thay đổi thông tin danh mục | SIT Admin Dashboard</title>
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
        $tendanhmuc = $_POST['tendanhmuc'];
        $id=$_GET['id'];
        $sql = "UPDATE danhmuc SET tendanhmuc='$tendanhmuc' WHERE id=$id";
        // $sll = "SELECT * FROM hanghoa WHERE danhmuc='$tendanhmuc' ";
        $ketqua = mysqli_query($conn, $sql);
        // $ketqua2 = mysqli_query($conn, $sll);
        // $edit2 = mysqli_num_rows($ketqua2);
        // if($edit2==1){ 
        //     header("Location: dssanpham.php"); 
        // }
    }
    ?>
    <?php
        if (isset($_GET['id'])){
            $sqlGetDanhMuc = "SELECT * FROM danhmuc WHERE id=".$_GET['id'];        
            $ketQuaGetDanhMuc = mysqli_query($conn, $sqlGetDanhMuc);
            $tendanhmuc = mysqli_fetch_assoc($ketQuaGetDanhMuc);
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
                                        <h4 class="card-title mb-4">Thay đổi thông tin danh mục</h4>
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Tên Danh Mục</label>
                                                <input type="text" class="form-control" name="tendanhmuc"value="<?php echo $tendanhmuc['tendanhmuc']; ?>">
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
