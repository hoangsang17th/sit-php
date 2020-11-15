<?php 
include("header.php");
?>
<title>Thêm Nhiệm Vụ Mới - SIT To Do</title>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Mission_ToDo =$_POST['Mission_ToDo'];
    $Des_ToDo =$_POST['Des_ToDo'];
    $ID_User=$profile['ID_User'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO todolist(ID_User, Mission_ToDo, Des_ToDo, Start_Date) VALUES ('$ID_User','$Mission_ToDo','$Des_ToDo','$date')";
    $ketqua = mysqli_query($conn, $sql);
    header("Location: index.html");
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
                                    <h4 class="card-title mb-4">Thêm nhiệm vụ</h4>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="formrow-firstname-input">Tên Nhiệm Vụ</label>
                                            <input type="text" class="form-control" name="Mission_ToDo"maxlength="225 " placeholder="Không quá 225 ký tự">
                                        </div>
                                        <div class="mt-3 mb-3">
                                            <label>Mô tả nhiệm vụ</label>
                                            <textarea id="textarea" name="Des_ToDo" class="form-control" maxlength="5000" rows="5" placeholder="Không quá 5000 ký tự"></textarea>
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
include("footeruser.php");
?>