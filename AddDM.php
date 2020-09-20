<!doctype html>
<html lang="en">
    <head>       
        <meta charset="utf-8">
        <title>Thêm danh mục mới | SIT Admin Dashboard</title>
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
        $sql = "INSERT INTO danhmuc(tendanhmuc) VALUES ('$tendanhmuc')";
        $ketqua = mysqli_query($conn, $sql);
    }
    ?>
    <?php
        if (isset($_GET['id'])){
            $sqlGetDanhMuc = "SELECT * FROM danhmuc WHERE id=".$_GET['id'];        
            $ketQuaGetDanhMuc = mysqli_query($conn, $sqlGetDanhMuc);
            $danhmuc = mysqli_fetch_assoc($ketQuaGetDanhMuc);
        }
    ?>
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Thêm sản phẩm</h4>
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Tên Danh Mục</label>
                                                <input type="text" class="form-control" name="tendanhmuc">
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
    </body>
</html>
