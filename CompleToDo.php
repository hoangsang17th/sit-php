<?php
    include("Connect.php");    
    include("SSUser.php");
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $datecomple = date("Y-m-d H:i:s");
    $sql = "UPDATE todolist SET Completion_Date= '$datecomple' WHERE ID_ToDo=".$_GET['id'];
    $ketqua = mysqli_query($conn, $sql);
    // echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location: index.html");
    // $message = "Những bước đi đầu tiên sẽ gặp phải muôn vàn khó khăn và thử thách vì thế hãy mạnh mẽ lên nhé";
    
?>