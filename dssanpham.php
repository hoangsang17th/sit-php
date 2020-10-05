<?php 
include("header-dashboard.php");
?>
<title>Thông tin sản phẩm SIT</title>
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Danh Sách Sản Phẩm</h4>
                                    <p class="card-title-desc">SIT. Bạn tài giỏi, tôi cũng vậy!</p>
                                        <a href="AddSP.php" class="btn btn-primary mr-2 w-md mb-3">
                                            <i class="bx bx-check-double font-size-16 align-middle mr-2"></i> Thêm Sản Phẩm</a>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Thương Hiệu</th>
                                            <th>Giá</th>
                                            <th>Actions</th>
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
                                                echo "<td>".$row['thuonghieu']."</td>";
                                                echo "<td>".$row['dongia']."</td>";
                                                echo '<td><a href="EditPro.php?id='.$row['id'].'" class="px-2"><i class="far fa-edit"></i><a/>';
                                                echo '<a href="DeleteSP.php?id='.$row['id'].'" class="px-2"><i class="far fa-trash-alt"></i><a/></td>';
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
            </div>
        </div>
    </div>
<?php
include("footeradmin.php");
?>