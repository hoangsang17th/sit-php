<?php 
include("header-dashboard.php");
?>
<title>Thêm sản phẩm mới SIT</title>
<link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">
<link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css">
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
    $sql = "INSERT INTO sanpham(tenmathang, thuonghieu, dongia, iddanhmuc, mota, title, keywords, motatrang, images) VALUES ('$tenmathang','$thuonghieu','$dongia','$idDanhmuc', '$mota','$title','$keywords','$motatrang', '$filename')";
    $ketqua = mysqli_query($conn, $sql);
    if (move_uploaded_file($tempname, $folder))  { 
        $msg = "Image uploaded successfully"; 
    }else{ 
        $msg = "Failed to upload image"; 
    } 
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
                                    <h4 class="card-title">Thông tin cơ bản</h4>
                                    <p class="card-title-desc">Điền tất cả thông tin bên dưới</p>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="formrow-firstname-input">Tên sản phẩm</label>
                                                    <input type="text" class="form-control" name="tenmathang">
                                                </div>
                                                <div class="form-group">
                                                    <label for="manufacturername">Thương hiệu</label>
                                                    <input name="thuonghieu" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                <label class="control-label">Danh Mục</label>
                                                    <select name="iddanhmuc" class="form-control select">
                                                    <?php
                                                        $sql = "SELECT * FROM danhmuc";
                                                        
                                                        $ketqua =mysqli_query($conn, $sql);
                                                        while ($row = mysqli_fetch_assoc($ketqua)) {
                                                            echo '<option value="'.$row['id'].'">'.$row['tendanhmuc'].'</option>';
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="price">Giá Bán</label>
                                                    <input name="dongia" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="productdesc">Mô tả sản phẩm</label>
                                                    <textarea name="mota" id="mytextarea" class="form-control pb-2" maxlength="1000" rows="15" placeholder="Không quá 1000 ký tự"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h4 class="col-12 card-title my-3">Phần SEO</h4>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="metatitle">Tiêu đề trang</label>
                                                    <input id="metatitle" name="title" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="metakeywords">Keywords của trang</label>
                                                    <input id="metakeywords" name="keywords" type="text" class="form-control" placeholder="Ngăn cách các từ khóa bằng dấu phẩy">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="metadescription">Mô tả trang</label>
                                                    <textarea class="form-control" name="motatrang" rows="5" placeholder="Em là nguồn cảm hứng đằng sau tất cả những gì anh làm, là nguồn gốc của những điều tốt lành trong cuộc sống của anh. Mãi yêu Code"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-12">
                                                <h4 class="card-title mb-3">Ảnh về sản phẩm</h4>
                                                <input name="uploadfile" type="file">
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary mr-1 mt-3 waves-effect waves-light" onclick="return SubmitForm();" value="Lưu và hiển thị">
                                        <a href="dssanpham.html" class="btn btn-danger mt-3 waves-effect px-5">Hủy</a>
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