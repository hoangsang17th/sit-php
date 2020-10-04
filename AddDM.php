<?php 
include("header-dashboard.php");
?>
<title>Thêm danh mục mới SIT</title>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tendanhmuc = $_POST['tendanhmuc'];
    $id=$_GET['id'];
    $sql = "INSERT INTO danhmuc(tendanhmuc) VALUES ('$tendanhmuc')";
    $ketqua = mysqli_query($conn, $sql);
}
?>
<?php
    if (isset($_GET['id'])){
        $sqlGetDanhMuc = "SELECT * FROM danhmuc WHERE id=".$_GET['id'];        
        $ketQuaGetDanhMuc = mysqli_query($conn, $sqlGetDanhMuc);
        $danhmuc = mysqli_fetch_assoc($ketQuaGetDanhMuc);
    }
?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Thêm sản phẩm</h4>
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">Tên Danh Mục</label>
                                        <input type="text" class="form-control" name="tendanhmuc">
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
<?php
include("footeradmin.php");
?>