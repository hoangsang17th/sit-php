<?php
session_start();
unset($_SESSION['Email_Admin']);
header("Location: login-dashboard.html");
?>