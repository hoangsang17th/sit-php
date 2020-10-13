<?php 
include("header-dashboard.php");
?>
<title>Danh sách danh mục SIT</title>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Danh Sách Danh Mục</h4>
                                <p class="card-title-desc">SIT. Bạn tài giỏi, còn tôi thì không!</p>
                                <a href="AddDM.html" class="btn btn-primary mr-2 w-md mb-3">
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
                                            echo '<td><a href="dssanpham.html?iddanhmuc='.$row['id'].'">'.$row['tendanhmuc'].'<a/></td>';
                                            echo '<td><a href="EditDM.html?id='.$row['id'].'"><i class="far fa-edit"></i><a/></td>';
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
<?php
include("footeradmin.php");
?>