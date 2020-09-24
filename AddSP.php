<!doctype html>
<html lang="en">
    <head>       
        <meta charset="utf-8">
        <title>Thêm sản phẩm mới | SIT Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets\css\bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="assets\css\app.min.css" id="app-style" rel="stylesheet" type="text/css">
        <link href="assets\libs\select2\css\select2.min.css" rel="stylesheet" type="text/css">

        <!-- dropzone css -->
        <link href="assets\libs\dropzone\min\dropzone.min.css" rel="stylesheet" type="text/css">
    </head>
    <body data-sidebar="dark">
    <?php 
    include("header-dashboard.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tenmathang = $_POST['tenmathang']; $soluong = $_POST['soluong'];
        $dongia = $_POST['dongia']; $idDanhmuc = $_POST['iddanhmuc'];
        $mota =$_POST['mota'];
        $id=$_GET['id'];
        $sql = "INSERT INTO sanpham(tenmathang, soluong, dongia, iddanhmuc, mota) VALUES ('$tenmathang','$soluong','$dongia','$idDanhmuc', '$mota')";
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
                                    <form action="AddSP.php" method="post">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                <label for="formrow-firstname-input">Tên sản phẩm</label>
                                                <input type="text" class="form-control" name="tenmathang">
                                                </div>
                                                <div class="form-group">
                                                    <label for="manufacturername">Thương hiệu</label>
                                                    <input id="manufacturername" name="brand" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="manufacturerbrand">Số Lượng</label>
                                                    <input id="manufacturerbrand" name="soluong" type="number" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="price">Giá Bán</label>
                                                    <input id="price" name="dongia" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                <label class="control-label">Thể Loại</label>
                                                    <select name="iddanhmuc" class="form-control select2">
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
                                                    <textarea id="textarea" name="mota" class="form-control pb-2" maxlength="1000" rows="9" placeholder="Không quá 1000 ký tự"></textarea>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!-- <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Lưu và hiển thị</button>
                                        <button type="submit" class="btn btn-danger waves-effect px-5">Hủy</button> -->
                                    
                                    </form>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Ảnh về sản phẩm</h4>
                                    <form action="/" method="post" class="dropzone">
                                    <!-- <textarea id="textarea" name="mota" class="form-control pb-2" maxlength="1000" rows="9" placeholder="Không quá 1000 ký tự"></textarea> -->

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
    
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tăng SEO</h4>
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="metatitle">Tiêu đề trang</label>
                                                    <input id="metatitle" name="productname" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="metakeywords">Keywords của trang</label>
                                                    <input id="metakeywords" name="manufacturername" type="text" class="form-control" placeholder="Ngăn cách các từ khóa bằng dấu chấm phẩy">
                                                </div>
                                            </div>
    
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="metadescription">Mô tả trang</label>
                                                    <textarea class="form-control" id="metadescription" rows="5" placeholder="Em là nguồn cảm hứng đằng sau tất cả những gì anh làm, là nguồn gốc của những điều tốt lành trong cuộc sống của anh. Mãi yêu Code"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Lưu và hiển thị</button>
                                        <button type="submit" class="btn btn-danger waves-effect px-5">Hủy</button>
                                    </form>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            
        </div>
    </div>
        <script src="assets\libs\select2\js\select2.min.js"></script>

        <!-- dropzone plugin -->
        <script src="assets\libs\dropzone\min\dropzone.min.js"></script>

        <!-- init js -->
        <script src="assets\js\pages\ecommerce-select2.init.js"></script>
    </body>
</html>
