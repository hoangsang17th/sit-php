<?php 
include("header.php");
?>
<title>Thông Tin Chi Tiết Nhiệm Vụ - SIT To Do</title>
<?php 
$Display_ToDo['id'] = $Display_ToDo['completiondate'] = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Mission_ToDo =$_POST['Mission_ToDo'];
    $Des_ToDo =$_POST['Des_ToDo'];
    $Statement_ToDo = "UPDATE todolist SET Mission_ToDo='$Mission_ToDo', Des_ToDo= '$Des_ToDo' WHERE ID_ToDo=".$_GET['id'];
    $Query_ToDo = mysqli_query($conn, $Statement_ToDo);
}
?>
<?php
if (isset($_GET['id'])){
    $Statement_ToDo = "SELECT * FROM todolist WHERE ID_ToDo=".$_GET['id'];        
    $Query_ToDo = mysqli_query($conn, $Statement_ToDo);
    $Display_ToDo = mysqli_fetch_assoc($Query_ToDo);
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
                                    <h4 class="card-title mb-4">Chi tiết nhiệm vụ</h4>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="formrow-firstname-input">Tên Nhiệm Vụ</label>
                                            <input type="text" class="form-control" name="Mission_ToDo" value="<?php 
                                            if ($Display_ToDo['ID_User']== $profile['ID_User']){
                                                echo $Display_ToDo['Mission_ToDo']; 
                                            }
                                            else echo "Manipulation URL là gì?";
                                            ?>">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="formrow-email-input">Thời Gian Bắt Đầu</label>
                                                    <input type="text" class="form-control" name="startdate" value="<?php
                                                    if ($Display_ToDo['ID_User']== $profile['ID_User']){
                                                        echo $Display_ToDo['Start_Date']; 
                                                    }
                                                    else echo "Admin sinh ngày 4/9/2001 nhé!";?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="formrow-password-input">Thời Gian Hoàn Thành</label>
                                                    <input type="text" class="form-control" name="completiondate" value="<?php
                                                    if($Display_ToDo['Completion_Date']==""){
                                                        echo "Chưa Hoàn Thành";
                                                    }
                                                    else echo $Display_ToDo['Completion_Date']; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 mb-3">
                                            <label>Mô tả nhiệm vụ</label>
                                            <textarea id="textarea" name="Des_ToDo" class="form-control" maxlength="5000" rows="7" placeholder="Không quá 5000 ký tự"><?php 
                                            if ($Display_ToDo['ID_User']== $profile['ID_User']){
                                                echo $Display_ToDo['Des_ToDo']; 
                                            }
                                            else echo "Một số ứng dụng web giao tiếp thông tin giữa máy khách (trình duyệt) và máy chủ trong URL. Thay đổi một số thông tin trong URL đôi khi có thể dẫn đến hành vi ngoài ý muốn của máy chủ và điều này được gọi là Thao tác URL."; 
                                            ?></textarea>
                                        </div>
                                        <div>
                                        <?php 
                                        if ($Display_ToDo['ID_User']== $profile['ID_User']){
                                            if($Display_ToDo['Completion_Date']!=""){
                                                echo '<td><a href="index.html" class="btn btn-primary mr-2 mt-2"><i class="fas fa-chevron-left"></i> Quay lại </a></td>';
                                                
                                            }
                                            echo '<button type="submit" class="btn btn-warning mr-2 mt-2"><i class="far fa-edit"> </i> Lưu </button>';
                                            if($Display_ToDo['Completion_Date']==""){
                                                echo '<td><a href="CompleToDo.html?id='.$Display_ToDo['ID_ToDo'].'" class="btn btn-success w-md mr-2 mt-2"><i class="bx bx-check-double"></i> Đánh dấu đã hoàn thành<a/></td>';
                                            }
                                            echo '<td><a href="DeleteToDo.html?id='.$Display_ToDo['ID_ToDo'].'" class="btn btn-danger mr-2 mt-2"><i class="far fa-trash-alt"></i> Xóa Nhiệm Vụ<a/></td>';
                                        }
                                        else echo '<a href="index.html" class="btn btn-primary mr-2 w-md mb-3"> 
                                        <i class="fas fa-chevron-left"></i> Quay lại </a>';
                                        ?>
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