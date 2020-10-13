<?php 
include("header.php");
?>
<title>Home SIT To Do</title>
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Danh Sách Các Công Việc Cần Phải Làm</h4>
                                    <p class="card-title-desc">SIT. Chỉ cần bạn không dừng lại thì việc bạn tiến chậm cũng không là vấn đề!</p>
                                        <a href="AddToDo.html" class="btn btn-primary mr-2 w-md mb-3">
                                            <i class="bx bx-check-double font-size-16 align-middle mr-2"></i> Thêm Công Việc</a>
                                        <a href="ListCompleToDo.html" class="btn btn-primary mr-2 w-md mb-3">
                                        <i class="far fa-check-square font-size-16 align-middle mr-2"></i> Đã Hoàn Thành</a>
                                            <div class="table-responsive">
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Ngày Bắt Đầu</th>
                                            <th>Nhiệm Vụ</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $sql = "SELECT * FROM todolist WHERE id =".$profile['id'];
                                            $ketqua =mysqli_query($conn, $sql);
                                            $stt= 1;
                                            while ($row = mysqli_fetch_assoc($ketqua)){
                                                if ($row['completiondate']==''){
                                                    echo "<tr>";
                                                    echo '<td>'.$stt.'</td>';
                                                    echo "<td>".$row['startdate']."</td>";
                                                    echo "<td>".$row['mission']."</td>";
                                                    echo '<td><a href="DetailToDo.html?idm='.$row['idm'].'" class="btn btn-outline-secondary">View</a></td>';
                                                    echo "</tr>";
                                                    $stt++;
                                                }
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                    </div>
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