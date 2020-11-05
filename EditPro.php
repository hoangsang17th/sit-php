<?php 
include("header-dashboard.php");
?>
<title>Thay đổi thông tin sản phẩm SIT</title>
<script src="https://cdn.tiny.cloud/1/rm8h7epfc7tvhvacjxs9dfg7u4whkpmvn962dhuwiavn550n/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#mytextarea'
    });
</script>
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

    $filename = $_FILES["uploadfile"]["name"]; 
	$tempname = $_FILES["uploadfile"]["tmp_name"];	 
    $folder = "images/shop/".$filename;
    $id=$_GET['id'];
    $sql = "UPDATE sanpham SET tenmathang='$tenmathang',iddanhmuc=$idDanhmuc,thuonghieu='$thuonghieu',dongia=$dongia, mota='$mota', title='$title', keywords='$keywords', motatrang='$motatrang', images='$filename' WHERE id=$id";
    $sll = "SELECT * FROM sanpham WHERE tenmathang='$tenmathang' ";
    $ketqua = mysqli_query($conn, $sql);   
    if (move_uploaded_file($tempname, $folder))  { 
        $msg = "Image uploaded successfully"; 
    }else{ 
        $msg = "Failed to upload image"; 
    }  
}
?>
<?php
    if (isset($_GET['id'])){
        $sqlGetHangHoa = "SELECT * FROM sanpham WHERE id=".$_GET['id'];        
        $ketQuaGetHangHoa = mysqli_query($conn, $sqlGetHangHoa);
        $mathang = mysqli_fetch_assoc($ketQuaGetHangHoa);
        $pass= mysqli_num_rows($ketQuaGetHangHoa);
        if($pass==0){
            $mathang['tenmathang'] = $mathang['thuonghieu'] = $mathang['dongia']
        = $mathang['iddanhmuc'] = $mathang['mota'] = $mathang['title']
        = $mathang['keywords'] = $mathang['motatrang'] =
        "Sản Phẩm Không Tồn Tại!";
        }
    }
    else {
        $mathang['tenmathang'] = $mathang['thuonghieu'] = $mathang['dongia']
        = $mathang['iddanhmuc'] = $mathang['mota'] = $mathang['title']
        = $mathang['keywords'] = $mathang['motatrang'] =
        "Lỗi GET, vui lòng thử lại bằng cách chọn 1 sản phẩm khác";
    }
?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Thay đổi thông tin sản phẩm</h4>
                            <form action="" method="POST" enctype="multipart/form-data">
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
                                        <label for="price">Giá Bán</label>
                                        <input name="dongia" type="number" class="form-control" value="<?php echo $mathang['dongia']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="productdesc">Mô tả sản phẩm</label>
                                        <textarea name="mota" id="mytextarea" class="form-control pb-2" maxlength="1000" rows="15" placeholder="Không quá 1000 ký tự"><?php echo $mathang['mota']; ?></textarea>
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
                            <div class="row mt-4">
                                <div class="col-12">
                                    <h4 class="card-title mb-3">Ảnh về sản phẩm</h4>
                                    <input name="uploadfile" type="file">
                                </div>
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary mr-1 mt-3 waves-effect waves-light" value="Lưu và hiển thị">
                                <a href="dssanpham.html" class="btn btn-danger mt-3 waves-effect px-5">Hủy</a>
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