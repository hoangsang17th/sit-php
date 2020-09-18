<?php
    $conn = mysqli_connect("localhost", "root","","banhang");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $tenmathang = $_POST['tenmathang']; $soluong = $_POST['soluong'];
      $dongia = $_POST['dongia']; $idDanhmuc = $_POST['idDanhmuc'];
      $id=$_GET['id'];
      $sql = "UPDATE hanghoa SET tenmathang='$tenmathang',idDanhmuc=$idDanhmuc,soluong=$soluong,dongia=$dongia WHERE id=$id";
      $ketqua = mysqli_query($conn, $sql);
      $ketqua2 = mysqli_query($conn, $sll);
      $anhdung = mysqli_num_rows($ketqua2);
        if($anhdung==1){ 
          header("Location:dshanghoa.php");
    }
    }
?>
<html>
    <head>
        <title>Sửa Sản Phẩm</title>
    </head>
    <body>
        <?php
          include('menu.php');
          $sqlGetHangHoa = "SELECT * FROM hanghoa WHERE id=".$_GET['id'];        
          $ketQuaGetHangHoa = mysqli_query($conn, $sqlGetHangHoa);
          $mathang = mysqli_fetch_assoc($ketQuaGetHangHoa);
          
        ?>
        <h1>Sửa Hàng Hóa</h1>
        <form action="<?php $_PHP_SELF ?>" method="POST">
          Tên Hàng Hóa: <input type="text" name="tenmathang" value="<?php echo (isset($mathang))?$mathang['tenmathang']:'';?>"><br>
          Số lượng: <input type="text" name="soluong" value="<?php echo (isset($mathang))?$mathang['soluong']:'';?>"><br>
          Đơn Giá: <input type="text" name="dongia" value="<?php echo (isset($mathang))?$mathang['dongia']:'';?>"><br>
          Danh Mục: 
          <select name="idDanhmuc" selected="<?php echo (isset($mathang))?$mathang['idDanhmuc']:'';?>">
            <?php
            $sqlGetDanhMuc = "SELECT * FROM danhmuc";
            $ketquaGetDanhMuc = mysqli_query($conn,$sqlGetDanhMuc);
            while($row = mysqli_fetch_assoc($ketquaGetDanhMuc))
            {
                echo '<option value="'.$row['id'].'"';
                if ($row['id'] == $mathang['idDanhmuc']) echo 'selected="selected">'.$row['tendanhmuc'].'</option>';
                if ($row['id'] != $mathang['idDanhmuc']) echo '>'.$row['tendanhmuc'].'</option>';
            }
            ?> 
             
          </select>
          <input type="submit" value="Sửa">
          </form>
    </body>
</html>