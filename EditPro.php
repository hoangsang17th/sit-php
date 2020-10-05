<?php 
include("header-dashboard.php");
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tenmathang = $_POST['tenmathang']; 
    $thuonghieu = $_POST['thuonghieu'];
    $dongia = $_POST['dongia']; 
    $idDanhmuc = $_POST['iddanhmuc'];
    $mota =$_POST['mota'];
    $title =$_POST['title'];
    $keywords =$_POST['keywords'];
    $motatrang =$_POST['motatrang'];
    $id=$_GET['id'];
    $sql = "UPDATE sanpham SET tenmathang='$tenmathang',iddanhmuc=$idDanhmuc,thuonghieu='$thuonghieu',dongia=$dongia, mota='$mota', title='$title', keywords='$keywords', motatrang='$motatrang' WHERE id=$id";
    $sll = "SELECT * FROM sanpham WHERE tenmathang='$tenmathang' ";
    $ketqua = mysqli_query($conn, $sql);
}
?>
<?php
    if (isset($_GET['id'])){
        $sqlGetHangHoa = "SELECT * FROM sanpham WHERE id=".$_GET['id'];        
        $ketQuaGetHangHoa = mysqli_query($conn, $sqlGetHangHoa);
        $mathang = mysqli_fetch_assoc($ketQuaGetHangHoa);
    }
?>
<title>Thay đổi thông tin sản phẩm SIT</title>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Thay đổi thông tin sản phẩm</h4>
                            <form action="" method="POST">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">Tên sản phẩm</label>
                                        <input type="text" class="form-control" name="tenmathang" value="<?php echo $mathang['tenmathang']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="manufacturername">Thương hiệu</label>
                                        <input name="thuonghieu" type="text" class="form-control"value="<?php echo $mathang['thuonghieu']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Giá Bán</label>
                                        <input name="dongia" type="number" class="form-control" value="<?php echo $mathang['dongia']; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                    <label class="control-label">Danh Mục</label>
                                        <select name="iddanhmuc" class="form-control select"  selected="<?php echo (isset($mathang))?$mathang['iddanhmuc']:'';?>">
                                        <?php
                                            $sqlGetDanhMuc = "SELECT * FROM danhmuc";
                                            $ketquaGetDanhMuc = mysqli_query($conn,$sqlGetDanhMuc);
                                            while($row = mysqli_fetch_assoc($ketquaGetDanhMuc))
                                            {
                                                echo '<option value="'.$row['id'].'"';
                                                if ($row['id'] == $mathang['iddanhmuc']) echo 'selected="selected">'.$row['tendanhmuc'].'</option>';
                                                if ($row['id'] != $mathang['iddanhmuc']) echo '>'.$row['tendanhmuc'].'</option>';
                                            }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="productdesc">Mô tả sản phẩm</label>
                                        <textarea name="mota" class="form-control pb-2" maxlength="1000" rows="6" placeholder="Không quá 1000 ký tự"><?php echo $mathang['mota']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <h4 class="col-12 card-title my-3">Phần SEO</h4>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="metatitle">Tiêu đề trang</label>
                                        <input id="metatitle" name="title" type="text" class="form-control" value="<?php echo $mathang['title']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="metakeywords">Keywords của trang</label>
                                        <input id="metakeywords" name="keywords" type="text" class="form-control" placeholder="Ngăn cách các từ khóa bằng dấu chấm phẩy" value="<?php echo $mathang['keywords']; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="metadescription">Mô tả trang</label>
                                        <textarea class="form-control" name="motatrang" rows="5" placeholder="Em là nguồn cảm hứng đằng sau tất cả những gì anh làm, là nguồn gốc của những điều tốt lành trong cuộc sống của anh. Mãi yêu Code"><?php echo $mathang['motatrang']; ?></textarea>
                                    </div>
                                </div>
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