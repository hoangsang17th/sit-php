<?php
session_start();
unset($_SESSION['adminname']);
header("Location: login-dashboard.html");
?>