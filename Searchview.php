<?php
    include("Connect.php");
    $search = $_REQUEST['search'];
    mysqli_select_db($conn,"sanpham");
    $sql = "SELECT * FROM sanpham WHERE LOWER(tenmathang)  LIKE '%".$search."%'";
    $result = mysqli_query($conn,$sql);
    $quanlity=mysqli_num_rows($result);
    echo "<div class='col-12 text-center'><h3><i>Có sản ".$quanlity." phẩm khớp với từ khóa cần tìm</i></h3></div>";
while($row = mysqli_fetch_array($result)) {
    echo "
    <div class='col-12 col-sm-6 col-md-4 col-lg-3 my-3'>
        <div class='card mb-3'>
            <img src='./assets/images/Producttest.svg' alt='' class='my-3 px-4 w-100 card-img-top'>
            <div class='card-body'>
                <h5 class='card-title'>".$row['tenmathang']."</h5>
                <p class='card-text'><small class='text-muted'>".$row['dongia']."VNĐ</small></p>
            </div>
        </div>
    </div>
    ";
}
mysqli_close($conn);
?>