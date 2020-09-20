<?php
session_start();
if(!isset($_SESSION["adminname"])){
header("Location: login-dashboard.php");
exit(); 
}
?>