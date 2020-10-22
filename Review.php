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
                    $sqlcm = "SELECT * FROM comment WHERE username=" .$profile['id'];
                    $querycm = mysqli_query($conn, $sqlcm);
                    $countcm = mysqli_num_rows($querycm);
                    echo "<h4 class='mb-0 font-size-18'>Nhận xét của tôi ($countcm)</h4>";
                    ?>
                        <div class="table-responsive">
                            <table class="table project-list-table table-nowrap table-centered table-borderless">
                                <tbody>
                                    <?php
                                    while ($rowcm = mysqli_fetch_assoc($querycm)){
                                        $sqlpro = "SELECT * FROM sanpham WHERE id =".$rowcm['idpro'];
                                        $sqlphoto = "SELECT * FROM photos WHERE idpro= ".$rowcm['idpro'];
                                        $querypro = mysqli_query($conn, $sqlpro);
                                        $queryphoto = mysqli_query($conn, $sqlphoto);
                                        $rowpro = mysqli_fetch_assoc($querypro);
                                        $rowphoto = mysqli_fetch_assoc($queryphoto);
                                        $urlpage = str_replace(" ", "_", "$rowpro[tenmathang]");
                                        echo "<tr>";
                                        echo "<td><img src='images/shop/$rowphoto[images]' alt='$rowpro[tenmathang]' class='border' width='70px'></td>
                                        <td>
                                            <h5 class='text-truncate font-size-14'><a href='$rowcm[idpro]_$urlpage.html#listcomment' class='text-dark'>$rowpro[tenmathang]</a></h5>
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
        </div>
    </div>
</div>
<?php
include("footeruser.php");
?>