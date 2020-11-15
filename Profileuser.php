<?php 
include("header.php");
?>
<title>Thông tin cá nhân - SIT</title>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name_User =$_POST['Name_User'];
    $Phone_User =$_POST['Phone_User'];
    $Address_User =$_POST['Address_User'];
    $Statement_Users = "UPDATE users SET  Name_User= '$Name_User', Phone_User='$Phone_User', Address_User='$Address_User' WHERE ID_User=".$profile['ID_User'];
    $Query_Users = mysqli_query($conn, $Statement_Users);
}
?>
<?php
    $Statement_Users = "SELECT * FROM users WHERE ID_User=".$profile['ID_User'];      
    $Query_Users = mysqli_query($conn, $Statement_Users);
    $Display_Users = mysqli_fetch_assoc($Query_Users);
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
                                        <input type="text" class="form-control" name="Name_User" value="<?php echo $Display_Users['Name_User'];
                                        ?>" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="formrow-email-input">Email</label>
                                                <input type="text" class="form-control" name ="email" value="<?php
                                                echo $Display_Users['Email_User'];?>" disabled required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="formrow-email-input">Số Điện Thoại</label>
                                                <input type="number" class="form-control" name="Phone_User" value="<?php
                                                echo $Display_Users['Phone_User']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-3">
                                        <label for="formrow-email-input">Địa Chỉ Liên Lạc</label>
                                        <textarea type="text" class="form-control" name="Address_User" maxlength="5000" rows="7" placeholder="Không quá 5000 ký tự" required><?php
                                        echo $Display_Users['Address_User'];?></textarea>
                                        <p class="mt-3">Bạn là thành viên của SIT từ ngày <b><i><?php echo $Display_Users['Date_Join_User']; ?></i></b></p>
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