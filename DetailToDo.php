<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <title>Chi tiết công việc | SIT</title>
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
    include("header.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tenmathang = $_POST['tenmathang']; $soluong = $_POST['soluong'];
        $dongia = $_POST['dongia']; $idDanhmuc = $_POST['iddanhmuc'];
        $mota =$_POST['mota'];
        $id=$_GET['id'];
        $sql = "SELECT * FROM sanpham WHERE idm=$idm";
        $ketqua = mysqli_query($conn, $sql);
    }
    ?>
    <?php
        if (isset($_GET['idm'])){
            $sqlGetToDo = "SELECT * FROM todolist WHERE idm=".$_GET['idm'];        
            $ketQuaToDo = mysqli_query($conn, $sqlGetToDo);
            $dtodo = mysqli_fetch_assoc($ketQuaToDo);
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
                                        <h4 class="card-title mb-4">Chi tiết nhiệm vụ</h4>
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Tên Nhiệm Vụ</label>
                                                <input type="text" class="form-control" name="mission" value="<?php echo $dtodo['mission']; ?>">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Thời Gian Bắt Đầu</label>
                                                        <input type="text" class="form-control" name="startdate" value="<?php echo $dtodo['startdate'];?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-password-input">Thời Gian Hoàn Thành</label>
                                                        <input type="text" class="form-control" name="completiondate" value="<?php
                                                        if($dtodo['completiondate']==""){
                                                            echo "Chưa Hoàn Thành";
                                                        }
                                                        else echo $dtodo['completiondate']; ?>" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 mb-3">
                                                <label>Mô tả nhiệm vụ</label>
                                                <textarea id="textarea" name="description" class="form-control" maxlength="5000" rows="7" placeholder="Không quá 5000 ký tự"><?php echo $dtodo['description']; ?></textarea>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-warning mr-2"><i class="far fa-edit"> </i> Lưu </button>
                                                <button type="submi" class="btn btn-success w-md mr-2"><i class="bx bx-check-double"> </i> Đánh dấu đã hoàn thành</button>
                                                <button type="submi" class="btn btn-danger mr-2"><i class="far fa-trash-alt"> </i> Xóa Nhiệm Vụ</button>
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
