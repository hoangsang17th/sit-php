<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Search SIT</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
    include("Connect.php");
    $search = $_REQUEST['search'];
    mysqli_select_db($conn,"sanpham");
    $sql = "SELECT * FROM sanpham WHERE LOWER(tenmathang)  LIKE '%".$search."%'";
    $result = mysqli_query($conn,$sql);

echo "
<table class='table'>
    <thead class='thead-dark'>
        <tr>
            <th scope='col'>STT</th>
            <th scope='col'>Tên Sản Phẩm</th>
            <th scope='col'>Đơn Giá</th>
        </tr>
    </thead>
    <tbody>";
    $stt= 1;
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo '<td>'.$stt.'</td>';
    echo "<td>".$row['tenmathang']."</td>";
    echo "<td>".$row['dongia']."</td>";
    echo "</tr>";
    $stt++;
}
echo "
    </tbody>
</table>";
mysqli_close($conn);
?>
</body>
</html>