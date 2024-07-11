<?php

session_start();
$user = $_SESSION["u"];
include "connection.php";

if (isset($user)) {
?>

    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dar">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="Resources/img/favicon_icon.png">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bootstrap.css" />
        <title>Buy Cloth - Order Hitory</title>
    </head>

    <body>
        <!-- nav Bar -->
        <?php include "navBar.php"; ?>
        <!-- nav Bar -->

        <div class="container mt-5">
            <div class="row">

                <?php
                $rs = Database::search("SELECT * FROM `order_history` WHERE `user_id` = '" . $user["id"] . "'");
                $num = $rs->num_rows;

                if ($num > 0) {
                    //Not Empty

                ?>

                    <div class="mb-3 mt-4">
                        <h3>Order History</h3>
                    </div>


                    <?php

                    for ($i = 0; $i < $num; $i++) {
                        $d = $rs->fetch_assoc();

                    ?>

                        <!-- Order History -->
                        <div class="p-3 border border-3 rounded-3 bg-body-tertiary mb-4 signIn_Box container-glass container-glass">
                            <div>
                                <h5>Order ID <span class="text-info">#<?php echo $d["order_id"] ?></span> </h5>
                                <p><?php echo $d["order_date"] ?></p>
                            </div>

                            <div class="ps-5 pe-5">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $rs2 = Database::search("SELECT * FROM `order_item` INNER JOIN `stock` ON 
                                    `order_item`.`stock_id` = `stock`.`id` INNER JOIN `product` 
                                    ON `stock`.`product_id` = `product`.`id` WHERE `order_item`.`order_history_ohid` = '" . $d["ohid"] . "'");

                                    $num2 = $rs2->num_rows;

                                    for ($j = 0; $j < $num2; $j++) {
                                        $d2 = $rs2->fetch_assoc();

                                    ?>
                                        <tr>
                                            <td><?php echo $d2["name"] ?></td>
                                            <td><?php echo $d2["oi_qty"] ?></td>
                                            <td>Rs. <?php echo ($d2["price"] * $d2["oi_qty"]) ?></td>
                                        </tr>

                                    <?php
                                    }

                                    ?>

                                </table>
                            </div>

                            <div class="d-flex flex-column align-items-end pe-5">
                                <h4>Deliver Fee: <span class="text-muted">500</span></h4>
                                <h4>Net Total Rs: <span class="text-warning"><?php echo $d["amount"] ?></span></h4>
                            </div>
                        </div>
                        <!-- Order History -->



                    <?php
                    }
                    ?>
                <?php
                } else {
                    // Empty
                ?>
                    <div class="col-12 text-center mt-5">
                        <h2>You have Not Placed any order !...</h2>
                        <a href="index.php" class="btn btn-primary">Start Shiping</a>
                    </div>

                <?php
                }
                ?>

            </div>
        </div>

        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>


<?php

} else {
    header("location: signIn.php");
}


?>