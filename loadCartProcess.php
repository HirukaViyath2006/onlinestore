<?php


include "connection.php";
session_start();
$user = $_SESSION["u"];
$netTotal = 0;

$rs = Database::search("SELECT * FROM `cart` INNER JOIN `stock` ON `cart`.`stock_id` = `stock`.`id` INNER JOIN `product` ON `stock`.`product_id` = `product`.`id` INNER JOIN 
`color` ON `product`.`color_id` = `color`.`color_id` INNER JOIN 
`size` ON `product`.`size_id` = `size`.`size_id` WHERE 
`cart`.`user_id` = '" . $user["id"] . "'");

$num = $rs->num_rows;

if ($num > 0) {

?>
    <!-- Cart Load Here -->

    <div class="mb-4 mt-4">
        <h3 class="d-flex flex-column align-items-center text-dark">Shoping Cart</h3>
        <hr>
    </div>

    <?php

    for ($i = 0; $i < $num; $i++) {
        $d = $rs->fetch_assoc();
        $total = $d["price"] * $d["cart_qty"];
        $netTotal += $total;

    ?>
        <!-- Cart Items -->
        <div class="col-12 border border-3 rounded-5 p-3 mb-2 d-flex justify-content-between signIn_Box container-glass container-glass">
            <div class="d-flex align-items-center col-5">
                <img src="<?php echo $d["path"] ?>" class="rounded-4" width="200px">
                <div class="ms-5">
                    <h4><?php echo $d["name"] ?></h4>
                    <p class="text-muted mb-0 mt-3"> <?php echo $d["color_name"] ?></p>
                    <p class="text-muted"> <?php echo $d["size_name"] ?></p>
                    <h5 class="text-warning"> <?php echo $d["price"] ?></h5>
                </div>
            </div>
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-dark btn-sm" onclick="decrementCartQty('<?php echo $d['cart_id'] ?>');">-</button>
                <input type="number" id="qty<?php echo $d["cart_id"] ?>" class="form-control form-control-sm text-center" style="max-width: 100px;" value="<?php echo $d["cart_qty"] ?>" disabled>
                <button class="btn btn-dark btn-sm" onclick="incrementCartQty('<?php echo $d['cart_id'] ?>');">+</button>
            </div>
            <div class="d-flex align-items-center">
                <h4>Total: <span class="text-warning">Rs:<?php echo $total ?></span></h4>
            </div>
            <div class="d-flex align-items-center">
                <button class="btn btn-danger btn-sm" onclick="removeCart('<?php echo $d['cart_id'] ?>');">X</button>
            </div>

        </div>
        <!-- Cart Items -->
    <?php

    }

    ?>

    <div class="col-12 mt-4">
        <hr>
    </div>

    <!-- Check Out -->
    <div class="d-flex flex-column align-items-center">
        <h6>Number of Items: <span class="text-info"><?php echo $num ?></span></h6>
        <h5>Deliver fee: <span class="text-muted">Rs: 500</span></h5>
        <h3>Net Total: <span class="text-warning">Rs: <?php echo ($netTotal + 500) ?></span></h3>
        <button class="btn btn-success col-12 mt-3 mb-4" onclick="checkOut();">CHECKOUT</button>
    </div>
    <!-- Check Out -->

<?php
} else {
?>
    <!-- Empty Cart -->
    <div class="col-12 text-center mt-5">
        <h2>Your Cart Is Empty!...</h2>
        <a href="index.php" class="btn btn-primary">Start Shopping</a>
    </div>
    <!-- Empty Cart -->
<?php
}
