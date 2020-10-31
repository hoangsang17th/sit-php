<?php
echo '<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css"> '; 
    include("Connect.php");
    $search = $_REQUEST['search'];
    mysqli_select_db($conn,"sanpham");
    $sql = "SELECT * FROM sanpham WHERE LOWER(tenmathang)  LIKE '%".$search."%'";
    $result = mysqli_query($conn,$sql);
    $quanlity=mysqli_num_rows($result);
    echo "<div class='col-12 text-center'><h3><i>Có sản ".$quanlity." phẩm khớp với từ khóa cần tìm</i></h3></div>";
    echo "<div class='container'>
        <div class='row'>";
while($row = mysqli_fetch_array($result)) {
    if ($row['dongia']!=0){
        $price = number_format($row['dongia'],3);
        $del = $row['dongia']*1.1*1000;
    }
    else $price =$del = 0;
    $urlpage = str_replace(" ", "-", "$row[tenmathang]");
    include("slug-page.php");
    echo "<div class='col-lg-3 col-md-4 col-sm-6 col-6 mt-4 pt-2'>
            <div class='card shop-list border-0 position-relative overflow-hidden'>
                <div class='shop-image position-relative overflow-hidden rounded shadow'>
                    <a href='$urlpage-$row[id].html'><img src='images/shop/$row[images]' class='img-fluid' alt=''></a>
                    <a href='$urlpage-$row[id].html' class='overlay-work'>
                        <img src='images/shop/$row[images]' class='img-fluid' alt=''>
                    </a>
                </div>
                <div class='card-body content pt-4 p-2'>
                    <a href='$urlpage-$row[id].html' class='text-dark product-name h6'>$row[tenmathang]</a>
                    <div class='d-flex justify-content-between mt-1'>";
                    if ($price !=0){
                        echo "<h6 class='text-muted small font-italic mb-0 mt-1'>".$price." VNĐ";
                        if(rand(0,1)==0){
                            if ($del!=0) echo "<span class='text-danger ml-1'>(".$del.")</span>";
                        }  
                        echo  "     </h6>";
                    }
                    else   echo "<h6 class=' small font-italic mb-0 mt-1 text-success'>FREE</h6>";
                    
            echo"   </div>
                </div>
            </div>
        </div>";
}
echo 
"</div>
</div>";
mysqli_close($conn);
?>