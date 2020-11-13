<?php 
include("header.php");
?>
<title>Thông tin cá nhân - SIT</title>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                    <?php
                    $limit =5;
                    $sqlcm = "SELECT * FROM comment WHERE username=" .$profile['id'] ;
                    $querycm = mysqli_query($conn, $sqlcm);
                    $countcm = mysqli_num_rows($querycm);
                    echo "<h4 class='mb-0 font-size-18'>Nhận xét của tôi ($countcm)</h4>";
                    $current_page = isset($_GET["page"]) ? $_GET["page"] : 1;
                    $total_page = ceil($countcm / $limit);
                    if ($current_page > $total_page){
                    $current_page = $total_page;
                    }
                    else if ($current_page < 1){
                    $current_page = 1;
                    }
                    $start = ($current_page - 1) * $limit;
                    $uid= $profile['id'];
                    $sqllimit = "SELECT * FROM comment WHERE username= $uid ORDER BY id DESC LIMIT $start,$limit";
                    $result = mysqli_query($conn, $sqllimit);
                    ?>
                        <div class="table-responsiv">
                            <table class="table project-list-table table-nowrap table-centered table-borderless">
                                <tbody>
                                    <?php
                                    while ($rowcm = mysqli_fetch_assoc($result)){
                                        $sqlpro = "SELECT * FROM sanpham WHERE id =".$rowcm['idpro'];
                                        $querypro = mysqli_query($conn, $sqlpro);
                                        $rowpro = mysqli_fetch_assoc($querypro);
                                        $urlpage = str_replace(" ", "-", "$rowpro[tenmathang]");
                                        include("slug-page.php");
                                        echo "<tr>";
                                        echo "<td class='text-left' width='10%'><img src='images/shop/$rowpro[images]' alt='$rowpro[tenmathang]' class='border' width='70px'></td>
                                        <td class='text-left' width='90%'>
                                            <h5 class='text-truncate font-size-14'><a href='$urlpage-$rowcm[idpro].html#listcomment' class='text-dark'>$rowpro[tenmathang]</a></h5>
                                            <p class='text-muted mb-0'><i>$rowcm[date]</i></p>
                                            <p class=''>$rowcm[comment]</p>
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