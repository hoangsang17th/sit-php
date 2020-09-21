<?php
    include("Connect.php");    
    include("SSUser.php");
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $datecomple = date("Y-m-d H:i:s");
    $sql = "UPDATE todolist SET completiondate= '$datecomple' WHERE idm=".$_GET['idm'];
    $ketqua = mysqli_query($conn, $sql);
    header("Location: index.php");
?>