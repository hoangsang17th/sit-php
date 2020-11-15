<?php
    include("Connect.php");    
    include("SSUser.php");
    $Statement_ToDo = "DELETE FROM todolist WHERE ID_ToDo=".$_GET['id'];
    $Query_ToDo = mysqli_query($conn, $Statement_ToDo);
    header("Location: index.html");
?>