<?php
include("Connect.php"); 
include("SSAdmin.php");
$productname = $_POST['productname'];
$idpage= rand();
$urlpage = str_replace(" ", "-", "$productname");
$tenmathang = $_POST['tenmathang']; $soluong = $_POST['soluong'];

$myfile = fopen("Product/$urlpage-$idpage.php", "w") or die("Unable to open file!");

$txt = "
<!doctype html>
<html lang='en'>
    <head>       
        <meta charset='utf-8'>
        <title>$productname | SIT Admin Dashboard</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    </head>
    <h1>$tenmathang</h1>
";
fwrite($myfile, $txt);
fwrite($myfile, $tenmathang);
fclose($myfile);
header("Location: Product/$urlpage-$idpage.php");
?>