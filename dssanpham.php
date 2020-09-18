<!doctype html>
<html lang="en">
    <head>    
        <meta charset="utf-8">
        <title>Thông tin sản phẩm | SIT Admin Dashboard</title>
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
    include("header-dashboard.php");
    ?>
        <div id="layout-wrapper">
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Danh Sách Sản Phẩm</h4>
                                        <p class="card-title-desc">SIT. Bạn tài giỏi, còn tôi thì không!</p>
                                            <a href="AddSP.php" class="btn btn-primary mr-2 w-md mb-3">
                                                <i class="bx bx-check-double font-size-16 align-middle mr-2"></i> Thêm Sản Phẩm</a>
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên Sản Phẩm</th>
                                                <th>Số Lượng</th>
                                                <th>Đơn Giá</th>
                                                <th>Sửa</th>
                                                <th>Xóa</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                if (isset($_GET['iddanhmuc'])) {
                                                    $sql = "SELECT * FROM sanpham WHERE iddanhmuc=" .$_GET['iddanhmuc'];
                                                } else {                
                                                    $sql = "SELECT * FROM sanpham";
                                                }
                                                $ketqua =mysqli_query($conn, $sql);
                                                $stt= 1;
                                                while ($row = mysqli_fetch_assoc($ketqua)){
                                                    echo "<tr>";
                                                    echo '<td>'.$stt.'</td>';
                                                    echo "<td>".$row['tenmathang']."</td>";
                                                    echo "<td>".$row['soluong']."</td>";
                                                    echo "<td>".$row['dongia']."</td>";
                                                    echo '<td><a href="EditSPh.php?id='.$row['id'].'"><i class="far fa-edit"></i><a/></td>';
                                                    echo '<td><a href="DeleteSP.php?id='.$row['id'].'"><i class="far fa-trash-alt"></i><a/></td>';
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
        <!-- END layout-wrapper -->

        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets\libs\jquery\jquery.min.js"></script>
        <script src="assets\libs\bootstrap\js\bootstrap.bundle.min.js"></script>
        <script src="assets\libs\metismenu\metisMenu.min.js"></script>
        <script src="assets\libs\simplebar\simplebar.min.js"></script>
        <script src="assets\libs\node-waves\waves.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets\libs\datatables.net\js\jquery.dataTables.min.js"></script>
        <script src="assets\libs\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets\libs\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
        <script src="assets\libs\datatables.net-buttons-bs4\js\buttons.bootstrap4.min.js"></script>
        <script src="assets\libs\jszip\jszip.min.js"></script>
        <script src="assets\libs\pdfmake\build\pdfmake.min.js"></script>
        <script src="assets\libs\pdfmake\build\vfs_fonts.js"></script>
        <script src="assets\libs\datatables.net-buttons\js\buttons.html5.min.js"></script>
        <script src="assets\libs\datatables.net-buttons\js\buttons.print.min.js"></script>
        <script src="assets\libs\datatables.net-buttons\js\buttons.colVis.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="assets\libs\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
        <script src="assets\libs\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets\js\pages\datatables.init.js"></script>    

        <script src="assets\js\app.js"></script>

    </body>
</html>
