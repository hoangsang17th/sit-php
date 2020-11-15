<?php 
include("header.php");
?>
<title>Các bình luận của bạn về sản phẩm - SIT</title>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                    <?php
                    $limit =5;
                    $Statement_Comment = "SELECT * FROM comment WHERE ID_User=" .$profile['ID_User'] ;
                    $Query_Comment = mysqli_query($conn, $Statement_Comment);
                    $Count_Comment = mysqli_num_rows($Query_Comment);
                    echo "<h4 class='mb-0 font-size-18'>Nhận xét của tôi ($Count_Comment)</h4>";
                    $current_page = isset($_GET["page"]) ? $_GET["page"] : 1;
                    $total_page = ceil($Count_Comment / $limit);
                    if ($current_page > $total_page){
                    $current_page = $total_page;
                    }
                    else if ($current_page < 1){
                    $current_page = 1;
                    }
                    $start = ($current_page - 1) * $limit;
                    $UID= $profile['ID_User'];
                    $Statement_Comment = "SELECT * FROM comment WHERE ID_User= $UID ORDER BY ID_Comment DESC LIMIT $start,$limit";
                    $Query_Comment = mysqli_query($conn, $Statement_Comment);
                    ?>
                        <div class="table-responsiv">
                            <table class="table project-list-table table-nowrap table-centered table-borderless">
                                <tbody>
                                    <?php
                                    while ($Display_Comment = mysqli_fetch_assoc($Query_Comment)){
                                        $Statement_Product = "SELECT * FROM product WHERE ID_Product =".$Display_Comment['ID_Product'];
                                        $Query_Product = mysqli_query($conn, $Statement_Product);
                                        $Display_Product = mysqli_fetch_assoc($Query_Product);
                                        $urlpage = str_replace(" ", "-", "$Display_Product[Name_Product]");
                                        include("slug-page.php");
                                        echo "<tr>";
                                        echo "<td class='text-left' width='10%'><img src='images/shop/$Display_Product[Image_Product]' alt='$Display_Product[Name_Product]' class='border' width='70px'></td>
                                        <td class='text-left' width='90%'>
                                            <h5 class='text-truncate font-size-14'><a href='$urlpage-$Display_Comment[ID_Product].html#listcomment' class='text-dark'>$Display_Product[Name_Product]</a></h5>
                                            <p class='text-muted mb-0'><i>$Display_Comment[Date_Comment]</i></p>
                                            <p class=''>$Display_Comment[Comment]</p>
                                        </td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if($total_page >1){
                    echo "<div class='row mb-3'>
                            <div class='col-12'>
                                <ul class='pagination mb-0 justify-content-end'>";
                    if ($current_page > 1){
                        if ($current_page == 2){
                            echo "<li class='page-item'><a class='page-link' href='Review.html' aria-label='Previous'><i class='mdi mdi-arrow-left'></i> </a></li>";
                        }else
                        echo "<li class='page-item'><a class='page-link' href='Review.html?page=".($current_page-1)."' aria-label='Previous'><i class='mdi mdi-arrow-left'></i> </a></li>";
                    }
                    
                    for ($i = 1; $i <= $total_page; $i++){
                        if ($i == $current_page){
                            echo "<li class='page-item active'><span class='page-link'>".$i."</span></li>";
                        } else{
                            if ($i ==1){
                            echo "<li class='page-item'><a class='page-link' href='Review.html'>".$i."</a></li>";
                            }else 
                            echo "<li class='page-item'><a class='page-link' href='Review.html?page=$i'>".$i."</a></li>";
                        }
                    }
                    if ($current_page < $total_page){
                        echo "<li class='page-item'><a class='page-link' href='Review.html?page=".($current_page+1)."' aria-label='Next'> <i class='mdi mdi-arrow-right'></i></a></li>";
                    }
                    echo        "</ul>
                        </div>
                    </div>";
                }                
            ?> 
        </div>
    </div>
</div>
<?php
include("footeruser.php");
?>