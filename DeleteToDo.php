<?php
    include("Connect.php");    
    include("SSUser.php");
    $sql = "DELETE FROM todolist WHERE idm=".$_GET['idm'];
    $ketqua = mysqli_query($conn, $sql);
    header("Location: index.html");
?>