<!doctype html>
<html lang="en">
    <head>    
        <meta charset="utf-8">
        <title>Data Tables | SIT Admin Dashboard</title>
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
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên Danh Mục</th>
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
                                                    // echo '<td>'.$slsp.'</td>';
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
