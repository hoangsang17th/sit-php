<?php 
include("header-dashboard.php");
?>
<title>Thay đổi thông tin danh mục | SIT Admin Dashboard</title>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tendanhmuc = $_POST['tendanhmuc'];
    $id=$_GET['id'];
    $sql = "UPDATE danhmuc SET tendanhmuc='$tendanhmuc' WHERE id=$id";
    $ketqua = mysqli_query($conn, $sql);
}
?>
<?php
    if (isset($_GET['id'])){
        $sqlGetDanhMuc = "SELECT * FROM danhmuc WHERE id=".$_GET['id'];        
        $ketQuaGetDanhMuc = mysqli_query($conn, $sqlGetDanhMuc);
        $tendanhmuc = mysqli_fetch_assoc($ketQuaGetDanhMuc);
    }
?>
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Thay đổi thông tin danh mục</h4>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="formrow-firstname-input">Tên Danh Mục</label>
                                            <input type="text" class="form-control" name="tendanhmuc"value="<?php echo $tendanhmuc['tendanhmuc']; ?>">
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
<?php
include("footeradmin.php");
?>
