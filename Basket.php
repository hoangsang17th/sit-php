<div class="container-fluid mt-3 pt-2">
    <div class="row mb-3">
        <div class="col-12 text-center">
        <?php
            $counts = 0;
            if(isset($_SESSION['cart'])){
                $items = $_SESSION['cart'];
                $counts = count($items);
            }
            echo "<a href='Shop-Cart.php' class='btn btn-outline-primary'><i class='fas fa-shopping-basket'> </i> ".$counts." Sản Phẩm</a>";
        ?>
        </div>
    </div>
</div>