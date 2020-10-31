<?php
    include("Connect.php");
    session_start();
    $profile['id']='';
    if(isset($_SESSION["email"])){
        $users = $_SESSION['email'];
        $rsname = "SELECT * FROM `users` WHERE email= '$users'";
        $resname =mysqli_query($conn, $rsname);
        $profile = mysqli_fetch_assoc($resname);
    }
    $idpro = $_POST['idpro'];
    $username = $profile['id'];
    $content = $_POST['content'];
    $sql = "INSERT INTO comment(idpro, username, comment) VALUES ('$idpro', '$username', '$content')";
    $ketqua = mysqli_query($conn, $sql);
?>