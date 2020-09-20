<!doctype html>
<html lang="en">
    <head>    
        <meta charset="utf-8">
        <title>Danh sách danh mục | SIT Admin Dashboard</title>
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
    <body>
    <?php 
    include("header-dashboard.php");
    ?>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Danh Sách Danh Mục</h4>
                                    <p class="card-title-desc">SIT. Bạn tài giỏi, còn tôi thì không!</p>
                                    <a href="AddDM.php" class="btn btn-primary mr-2 w-md mb-3">
                                            <i class="bx bx-check-double font-size-16 align-middle mr-2"></i> Thêm Danh Mục</a>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên Danh Mục</th>
                                            <th>Sửa</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $stt= 1;
                                            $rsdanhmuc = "SELECT * FROM danhmuc";
                                            $ketqua =mysqli_query($conn, $rsdanhmuc);
                                            $slsp=0;
                                            while ($row = mysqli_fetch_assoc($ketqua)){
                                                echo "<tr>";
                                                echo '<td>'.$stt.'</td>';
                                                // echo '<td>'.$row['tendanhmuc'].'</td>';
                                                echo '<td><a href="dssanpham.php?iddanhmuc='.$row['id'].'">'.$row['tendanhmuc'].'<a/></td>';
                                                echo '<td><a href="EditDM.php?id='.$row['id'].'"><i class="far fa-edit"></i><a/></td>';
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
        

    </body>
</html>
