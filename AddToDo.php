<!doctype html>
<html lang="en">
    <head>       
        <meta charset="utf-8">
        <title>Thêm công việc mới | SIT </title>
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
        $id=$profile['id'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date("Y-m-d H:i:s");
        $sql = "INSERT INTO todolist(id, mission, description, startdate) VALUES ('$id','$mission','$description','$date')";
        $ketqua = mysqli_query($conn, $sql);
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
                                        <h4 class="card-title mb-4">Thêm nhiệm vụ</h4>
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <label for="formrow-firstname-input">Tên Nhiệm Vụ</label>
                                                <input type="text" class="form-control" name="mission"maxlength="225 " placeholder="Không quá 225 ký tự">
                                            </div>
                                            <div class="mt-3 mb-3">
                                                <label>Mô tả nhiệm vụ</label>
                                                <textarea id="textarea" name="description" class="form-control" maxlength="5000" rows="5" placeholder="Không quá 5000 ký tự"></textarea>
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
