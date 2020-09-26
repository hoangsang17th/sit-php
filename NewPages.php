<?php
include("Connect.php");
include("SSAdmin.php");
$productname = $_POST['productname'];
$myfile = fopen("Product/$productname.php", "w") or die("Unable to open file!");

$txt = "
<!doctype html>
<html lang='en'>
    <head>       
        <meta charset='utf-8'>
        <title>$productname | SIT Admin Dashboard</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    </head>
        <?php include('header-dashboard.php'); ?>
";
fwrite($myfile, $txt);
fwrite($myfile, $productname);
fclose($myfile);
header("Location: AddSP.php");
?>