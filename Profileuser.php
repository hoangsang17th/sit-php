<?php 
include("header.php");
?>
<title>Thông tin cá nhân - SIT</title>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name =$_POST['name'];
    $phone =$_POST['phone'];
    $address =$_POST['address'];
    $sql = "UPDATE users SET  name= '$name', phone='$phone', address='$address' WHERE id=".$profile['id'];
    $ketqua = mysqli_query($conn, $sql);
}
?>
<?php
    $sqlGet = "SELECT * FROM users WHERE id=".$profile['id'];      
    $ketQua = mysqli_query($conn, $sqlGet);
    $file = mysqli_fetch_assoc($ketQua);
?>
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Thông tin tài khoản</h4>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="formrow-firstname-input">Họ và Tên</label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $file['name'];
                                            ?>" required>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="formrow-email-input">Email</label>
                                                    <input type="text" class="form-control" name ="email" value="<?php
                                                    echo $file['email'];?>" disabled required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="formrow-email-input">Số Điện Thoại</label>
                                                    <input type="number" class="form-control" name="phone" value="<?php
                                                    echo $file['phone']; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2 mb-3">
                                            <label for="formrow-email-input">Địa Chỉ Liên Lạc</label>
                                            <textarea type="text" class="form-control" name="address" maxlength="5000" rows="7" placeholder="Không quá 5000 ký tự" required><?php
                                            echo $file['address'];?></textarea>
                                            <p class="mt-3">Bạn là thành viên của SIT từ ngày <b><i><?php echo $file['date']; ?></i></b></p>
                                        </div>
                                        
                                        <div>
                                            <button type="submit" class="btn btn-warning mr-2 mt-2"><i class="far fa-edit"> </i> Lưu </button>
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
    include("footeruser.php");
?>