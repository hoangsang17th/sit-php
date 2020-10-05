<?php 
include("header-dashboard.php");
?>
<title>Thêm sản phẩm mới SIT</title>
<link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">
<link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css">
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
    $sql = "INSERT INTO sanpham(tenmathang, thuonghieu, dongia, iddanhmuc, mota, title, keywords, motatrang) VALUES ('$tenmathang','$thuonghieu','$dongia','$idDanhmuc', '$mota','$title','$keywords','$motatrang')";
    $ketqua = mysqli_query($conn, $sql);
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
                                    <form action="" method="POST" name="form1" >
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
                                                <div class="form-group">
                                                    <label for="price">Giá Bán</label>
                                                    <input name="dongia" type="number" class="form-control">
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
                                                    <label for="productdesc">Mô tả sản phẩm</label>
                                                    <textarea name="mota" class="form-control pb-2" maxlength="1000" rows="6" placeholder="Không quá 1000 ký tự"></textarea>
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
                                        <input type="submit" class="btn btn-primary mr-1 waves-effect waves-light" value="Lưu và hiển thị">
                                        <button type="sbmit" class="btn btn-danger waves-effect px-5">Hủy</button>
                                    </form>
                                </div>
                            </div>
                            <!-- <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Ảnh về sản phẩm</h4>
                                    <form action="AddSP.php" method="post" class="dropzone" name="form2">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple="">
                                        </div>
                                        <div class="dz-message needsclick">
                                            <div class="mb-3">
                                                <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                            </div>
                                            <h4>Drop files here or click to upload.</h4>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary mr-1 waves-effect waves-light" onclick="return SubmitForm();" value="Lưu và hiển thị"> -->
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <script language=javascript>
    function SubmitForm()
    {
        document.forms['form1'].submit();
        document.forms['form2'].submit();
        return true;
    }
    </script>
    <script src="assets/libs/dropzone/min/dropzone.min.js"></script>
<?php
include("footeradmin.php");
?>