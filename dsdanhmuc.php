<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Trang Quản Trị SIT | Danh Mục</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>
    .title{
        font-weight: bold;
        font-style: italic;
        font-family: 'Oswald', sans-serif;
    }
    
    </style>
</head>
<body>
    <?php 
    include("header-dashboard.php");
    ?>
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">SIT</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Quản Trị</a></li>
                            <li class="breadcrumb-item active"><?php echo $_SESSION['username']; ?></li>
                        </ol>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row justify-content-center title">
        <h2>Danh Sách Danh Mục</h2>
        </div>
        <div class="row justify-content-center mt-2 mb-4">
            <div class="col-12">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên Danh Mục</th>
                            <!-- <th scope="col">Số Lượng</th> -->
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
    </div>
</div>
</div>
</body>
</html>
