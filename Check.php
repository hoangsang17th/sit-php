<?php
include("navigation.php");
?>
<title>Thông tin thanh toán - SIT </title>
<section class="d-table w-100 py-5" style="background:url('images/software/partner1.svg');">
    <div class="container pt-5">
        <div class="row justify-content-center pt-5">
            <div class="col-lg-12 text-center pt-5">
                <div class="page-next-level pt-5">
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="Home.html">SIT</a></li>
                                <li class="breadcrumb-item"><a href="Shop.html">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<section class="section">
    <div class="container">
        <div class="row">
            <?php
            if($profile['name']==''){
                echo "<div class='col-lg-7 col-md-6' id='nav-tabs'>
                        <div class='component-wrapper rounded shadow sticky-bar'>
                            <div class='p-4'>
                                <div class='row'>
                                    <div class='col-lg-12'>
                                        <ul class='nav nav-pills nav-justified flex-column flex-sm-row' id='pills-tab' role='tablist'>
                                            <li class='nav-item'>
                                                <a class='nav-link active mx-3 my-2' id='login-tab' data-toggle='pill' href='#login' role='tab' aria-controls='login' aria-selected='false'>
                                                    <div class='text-center pt-1 pb-1'>
                                                        <h4 class='title font-weight-normal mb-0'>Đăng Nhập</h4>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class='nav-item'>
                                                <a class='nav-link mx-3 my-2' id='register-tab' data-toggle='pill' href='#register' role='tab' aria-controls='register' aria-selected='false'>
                                                    <div class='text-center pt-1 pb-1'>
                                                        <h4 class='title font-weight-normal mb-0'>Đăng Ký</h4>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class='row pt-2'>
                                    <div class='col-12'>
                                        <div class='tab-content' id='pills-tabContent'>
                                            <div class='tab-pane fade show active text-center' id='login' role='tabpanel' aria-labelledby='login-tab'>
                                                <a class='btn btn-primary' href='login.html'>Đăng Nhập</a>
                                            </div>
                                            <div class='tab-pane fade text-center' id='register' role='tabpanel' aria-labelledby='register-tab'>
                                            <a class='btn btn-primary' href='register.html'>Đăng Ký</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
            } else {
                echo "<div class='col-lg-7 col-md-6'>
                <div class='rounded shadow-lg p-4 sticky-bar'>
                    <h5 class='mb-0'>Thông tin giao hàng :</h5>
                    <form action='success.html' method='GET'>
                        <div class='row mt-4'>
                            <div class='col-12'>
                                <div class='form-group position-relative'>
                                    <label>Họ và Tên <span class='text-danger'>*</span></label>
                                    <input name='name' id='fullname' type='text' class='form-control' placeholder='Nhập họ và tên' value='".$profile['name']."' required disabled>
                                </div>
                            </div>
                            <div class='col-12'>
                                <div class='form-group position-relative'>
                                    <label>Điện thoại di động <span class='text-danger'>*</span></label>
                                    <input name='numberphone' type='text' class='form-control' placeholder='Nhập số di động' value='".$profile['phone']."' required>
                                </div>
                            </div>
                            <div class='col-12'>
                                <div class='form-group position-relative'>
                                    <label>Email <span class='text-danger'>*</span></label>
                                    <input name='email' id='email' type='email' class='form-control' placeholder='Email của bạn' value='".$profile['email']."' required disabled>
                                </div> 
                            </div>
                            <div class='col-12'>
                                <div class='form-group position-relative'>
                                    <label>Địa chỉ <span class='text-danger'>*</span></label>
                                    <input name='address' type='text' class='form-control' placeholder='Địa chỉ của bạn' value='".$profile['address']."' required>
                                </div> 
                            </div>
                        </div>
                    
                </div>
            </div>";
            }
            ?>

            <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="rounded shadow-lg p-4">
                    <div class="d-flex mb-4 justify-content-between">
                        <h5>
                            <?php
                            $counts = 0;
                            if(isset($_SESSION['cart'])){
                                $items = $_SESSION['cart'];
                                $counts = count($items);
                            }
                            echo $counts." Sản Phẩm";
                            ?>
                        </h5>
                        <a href="shop-cart.html" class="text-muted h6">Đơn Hàng</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-center table-padding mb-0">
                            <tbody>
                                <?php
                                $total =0;
                            if($counts!=0){
                                foreach($_SESSION['cart'] as $key=>$value){
                                    $item[]=$key;
                                }
                                $str=implode(",",$item);
                                $sql = "SELECT * FROM sanpham WHERE id IN ($str)";
                                $query = mysqli_query($conn, $sql);
                                $total = 0;
                                while ($row = mysqli_fetch_assoc($query)){
                                $urlpage = str_replace(" ", "-", "$row[tenmathang]");
                                include("slug-page.php");
                                    echo "<tr>";
                                    echo   "<td>
                                                <div class='d-flex align-items-center'>
                                                    <img src='images/shop/$row[images]' class='img-fluid avatar avatar-small rounded shadow' style='height:auto;'>
                                                    <div class='mb-0 ml-3'>
                                                    <h6><b>".$_SESSION['cart'][$row['id']]."</b> x <a href='$urlpage-$row[id].html'target='_blank'>$row[tenmathang]</a></h6>
                                                    </div>
                                                </div>
                                                
                                            </td>";
                                    if ($row['dongia']==0){
                                        echo    "<td class='text-center'><i class='text-success'>FREE</i></td>";
                                    }
                                    else {
                                        echo    "<td class='text-center font-weight-bold'>".number_format($_SESSION['cart'][$row['id']]*$row['dongia'],3)." VND</td>";
                                    }
                                    echo "</tr>";
                                    $total += $_SESSION['cart'][$row['id']]*$row['dongia'];
                                }
                            }
                                ?>
                                <tr>
                                    <td class='h6'>Tổng</td>
                                    <?php echo "<td class='text-center font-weight-bold'>".number_format($total,3)." VND</td>"; ?>
                                </tr>
                                
                            </tbody>
                        </table>
                                <h6 class="my-3 ml-3">Phương Thức Thanh Toán</h6>
                        <ul class="list-unstyled mt-4 mb-0">
                            <!-- <li>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="banktransfer" checked="checked" name="method" value="1" class="custom-control-input">
                                        <label class="custom-control-label" for="banktransfer">Thẻ ATM </label>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-3">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="chaquepayment" name="method" value="1" class="custom-control-input">
                                        <label class="custom-control-label" for="chaquepayment">Ví Momo</label>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-3">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="cashpayment" name="method" value="1" class="custom-control-input">
                                        <label class="custom-control-label" for="cashpayment">ZaloPay</label>
                                    </div>
                                </div>
                            </li> -->
                            <li>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="banktransfer" checked="checked" name="method" value="1" class="custom-control-input">
                                        <label class="custom-control-label" for="banktransfer">Thanh toán tiền mặt khi nhận hàng </label>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="mt-4 pt-2">
                            <input type="submit" class="btn btn-block btn-primary" value="Đặt Mua">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include("footer.php");
?>