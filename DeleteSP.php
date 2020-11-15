<?php
    include("Connect.php");
    include("SSAdmin.php");
    $Statement_Delete_Product = "DELETE FROM product WHERE ID_Product=".$_GET['id'];
    $Query_Product = mysqli_query($conn, $Statement_Delete_Product);
    header("Location: dssanpham.html");
?>