
<!doctype html>
<html lang="en">
    <head>    
        <meta charset="utf-8">
        <title>To Do List | SIT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">
        <!-- DataTables -->
        <link href="assets\libs\datatables.net-bs4\css\dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <link href="assets\libs\datatables.net-buttons-bs4\css\buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <!-- Responsive datatable examples -->
        <link href="assets\libs\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">     
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
    ?>
        <div id="layout-wrapper">
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Danh Sách Các Công Việc Cần Phải Làm</h4>
                                        <p class="card-title-desc">SIT. Chỉ cần bạn không dừng lại thì việc bạn tiến chậm cũng không là vấn đề!</p>
                                            <a href="AddSP.php" class="btn btn-primary mr-2 w-md mb-3">
                                                <i class="bx bx-check-double font-size-16 align-middle mr-2"></i> Thêm Công Việc</a>
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Nhiệm Vụ</th>
                                                <th><i class="far fa-folder-open"></i></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                // if (isset($_GET['iddanhmuc'])) {
                                                //     $sql = "SELECT * FROM sanpham WHERE iddanhmuc=" .$_GET['iddanhmuc'];
                                                // } else {                
                                                //     $sql = "SELECT * FROM sanpham";
                                                // }
                                                $sql = "SELECT * FROM todolist WHERE id =".$_GET['id'];
                                                $ketqua =mysqli_query($conn, $sql);
                                                $stt= 1;
                                                while ($row = mysqli_fetch_assoc($ketqua)){
                                                    echo "<tr>";
                                                    echo '<td>'.$stt.'</td>';
                                                    echo "<td>".$row['mission']."</td>";
                                                    echo "<td><a href=''><i class='fas fa-info-circle'></i></a></td>";
                                                    echo "</tr>";
                                                    $stt++;
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
            </div>
            <!-- end main content-->
        </div>
    </body>
</html>
