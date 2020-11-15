<?php 
include("header.php");
?>
<title>Nhiệm Vụ Đã Hoàn Thành - SIT To Do</title>
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Danh Sách Các Công Việc Đã Thực Hiện</h4>
                                    <p class="card-title-desc">SIT. Bạn thật tuyệt vời! Hãy cố gắng thêm nhé!</p>
                                        <a href="index.html" class="btn btn-primary mr-2 w-md mb-3">
                                            <i class="fas fa-chevron-left font-size-16 align-middle mr-2"></i> Quay lại </a>
                                            <div class="table-responsive">
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Ngày Hoàn Thành</th>
                                            <th>Nhiệm Vụ</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $Statement_ToDo = "SELECT * FROM todolist WHERE ID_User =".$profile['ID_User'];
                                            $Query_ToDo =mysqli_query($conn, $Statement_ToDo);
                                            $Stt= 1;
                                            while ($Display_ToDo = mysqli_fetch_assoc($Query_ToDo)){
                                                if ($Display_ToDo['Completion_Date']!=''){
                                                    echo "<tr>";
                                                    echo '<td>'.$Stt.'</td>';
                                                    echo "<td>".$Display_ToDo['Completion_Date']."</td>";
                                                    echo "<td>".$Display_ToDo['Mission_ToDo']."</td>";
                                                    echo '<td><a href="DetailToDo.html?idm='.$Display_ToDo['ID_ToDo'].'">View</a></td>';
                                                    echo "</tr>";
                                                    $Stt++;
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