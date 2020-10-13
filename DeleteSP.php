<?php
    include("Connect.php");
    include("SSAdmin.php");
    $sql = "DELETE FROM sanpham WHERE id=".$_GET['id'];
    $ketqua = mysqli_query($conn, $sql);
    header("Location: dssanpham.html");
?>