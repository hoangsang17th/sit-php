<?php
    include("Connect.php");
    include("Connect.php");
    session_start();
    $profile['name']='';
    if(isset($_SESSION["username"])){
        $users = $_SESSION['username'];
        $rsname = "SELECT * FROM `users` WHERE username= '$users'";
        $resname =mysqli_query($conn, $rsname);
        $profile = mysqli_fetch_assoc($resname);
    }
    $idpro = $_POST['idpro'];
    $username = $profile['name'];
    $content = $_POST['content'];
    $sql = "INSERT INTO comment(idpro, username, comment) VALUES ('$idpro', '$username', '$content')";
    $ketqua = mysqli_query($conn, $sql);
?>