<?php 
include("header-dashboard.php");
?>
<title>Danh Sách Người Dùng SIT</title>
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Danh Sách User</h4>
                                    <p class="card-title-desc">SIT. Bạn tài giỏi, còn tôi thì không!</p>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">Họ và Tên</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $Statement_Users = "SELECT * FROM users";
                                        $Query_Users =mysqli_query($conn, $Statement_Users);
                                        $Stt= 1;
                                        while ($Display_Users = mysqli_fetch_assoc($Query_Users)){
                                            echo "<tr>";
                                            echo '<td>'.$Stt.'</td>';
                                            echo "<td>".$Display_Users['Name_User']."</td>";
                                            echo "<td>".$Display_Users['Email_User']."</td>";
                                            echo "<td>".$Display_Users['Password_User']."</td>";
                                            echo "<td>".$Display_Users['Phone_User']."</td>";
                                            echo "<td>".$Display_Users['Address_User']."</td>";
                                            echo "</tr>";
                                            $Stt++;
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
<?php
include("footeradmin.php");
?>