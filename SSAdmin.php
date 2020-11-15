<?php
session_start();
// Kiểm tra $_SESSION["Email_Admin"] nếu chưa có thì điều hướng về trang đăng nhập
if(!isset($_SESSION["Email_Admin"])){
header("Location: login-dashboard.html");
exit(); 
}
?>