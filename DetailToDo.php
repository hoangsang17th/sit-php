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
        $mission =$_POST['mission'];
        $description =$_POST['description'];
        $sql = "UPDATE todolist SET mission='$mission', description= '$description' WHERE idm=".$_GET['idm'];
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
                                                <input type="text" class="form-control" name="mission" value="<?php 
                                                if ($dtodo['id']== $profile['id']){
                                                    echo $dtodo['mission']; 
                                                }
                                                else echo "Manipulation URL là gì?";
                                                ?>">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="formrow-email-input">Thời Gian Bắt Đầu</label>
                                                        <input type="text" class="form-control" name="startdate" value="<?php
                                                        if ($dtodo['id']== $profile['id']){
                                                            echo $dtodo['startdate']; 
                                                        }
                                                        else echo "Admin sinh ngày 4/9/2001 nhé!";?>" disabled>
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
                                                <textarea id="textarea" name="description" class="form-control" maxlength="5000" rows="7" placeholder="Không quá 5000 ký tự"><?php 
                                                if ($dtodo['id']== $profile['id']){
                                                    echo $dtodo['description']; 
                                                }
                                                else echo "Một số ứng dụng web giao tiếp thông tin giữa máy khách (trình duyệt) và máy chủ trong URL. Thay đổi một số thông tin trong URL đôi khi có thể dẫn đến hành vi ngoài ý muốn của máy chủ và điều này được gọi là Thao tác URL."; 
                                                ?></textarea>
                                            </div>
                                            <div>
                                            <?php 
                                            if ($dtodo['id']== $profile['id']){
                                                echo '<button type="submit" class="btn btn-warning mr-2 mt-2"><i class="far fa-edit"> </i> Lưu </button>';
                                                if($dtodo['completiondate']==""){
                                                    echo '<td><a href="CompleToDo.php?idm='.$dtodo['idm'].'" class="btn btn-success w-md mr-2 mt-2"><i class="bx bx-check-double"></i> Đánh dấu đã hoàn thành<a/></td>';
                                                }
                                                echo '<td><a href="DeleteToDo.php?idm='.$dtodo['idm'].'" class="btn btn-danger mr-2 mt-2"><i class="far fa-trash-alt"></i> Xóa Nhiệm Vụ<a/></td>';
                                            }
                                            else echo '<a href="index.php" class="btn btn-primary mr-2 w-md mb-3"> 
                                            <i class="fas fa-chevron-left"></i> Quay lại </a>';
                                            ?>
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
