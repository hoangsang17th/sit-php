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
                                            <th scope="col">ID Login</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $sql = "SELECT * FROM users";
                                        $ketqua =mysqli_query($conn, $sql);
                                        $stt= 1;
                                        while ($row = mysqli_fetch_assoc($ketqua)){
                                            echo "<tr>";
                                            echo '<td>'.$stt.'</td>';
                                            echo "<td>".$row['name']."</td>";
                                            echo "<td>".$row['username']."</td>";
                                            echo "<td>".$row['password']."</td>";
                                            echo "<td>".$row['email']."</td>";
                                            echo "</tr>";
                                            $stt++;
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