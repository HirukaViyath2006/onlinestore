<?php

include "connection.php";

$stockId = $_GET["s"];

//echo($stockId);

if (isset($stockId)) {

    $q = "SELECT * FROM `stock` INNER JOIN `product` ON `stock`.`product_id` = `product`.`id` INNER JOIN `brand` ON `product`.`brand_id` = `brand`.`brand_id` INNER JOIN `color` ON `product`.`color_id` = `color`.`color_id` INNER JOIN `catogary` ON `product`.`catogary_id` = `catogary`.catogary_id INNER JOIN `size` ON `product`.`size_id` = `size`.size_id 
    WHERE `stock`.`id` = '" . $stockId . "'";

    $rs = Database::search($q);
    $d = $rs->fetch_assoc();

?>
    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="icon" type="image/png" href="Resources/img/favicon_icon.png">
        <title>Buy Cloth</title>
    </head>

    <body>
        <!-- nav Bar -->
        <?php include "navBar.php" ?>
        <!-- nav Bar -->

        <div class="hero">

            <div>
                <img src="Resources/assets/kids-clothes-accessories-wooden-background-copy-space-kids-clothes-accessories-wooden-background-100512175.webp" class="back-name" type="png">
            </div>


            <div class="adminBody col-12">
                <div class="col-8 row shadow-lg p-5  rounded-2 m-auto HV">

                    <div class="col-6">
                        <img src="<?php echo $d["path"] ?>" width="300px" class="rounded-3 shadow-lg" />
                    </div>
                    <div class="col-6">
                        <h3 class="text text-danger"><?php echo $d["name"] ?></h3>
                        <h5 class="mt-3">Brand : <?php echo $d["brand_name"] ?></h5>
                        <h6 class="mt-3">Catogory : <?php echo $d["catogary_name"] ?></h6>
                        <h6 class="mt-3">Color : <?php echo $d["color_name"] ?></h6>
                        <h6 class="mt-3">Size : <?php echo $d["size_name"] ?></h6>
                        <p class="mt-3">Description : <?php echo $d["description"] ?></p>
                        <div class="row mt-5">
                            <div class="col-2">
                                <input type="text" placeholder="Qty" class="form-control" id="qty" />
                            </div>
                            <div class="col-6 mt-2">
                                <h6 class="text-warning">Availabel Quantity : <?php echo $d["qty"] ?></h6>
                            </div>
                        </div>
                        <h5 class="mt-3">Price : <?php echo $d["price"] ?></h5>
                        <div class="d-flex justify-content-center mt-5">
                            <button class="btn btn-primary col-6" onclick="addtoCart('<?php echo $d['id'] ?>');">Add To Cart</button>
                            <button class="btn btn-danger col-6 ms-2" onclick="buyNow('<?php echo $d['id'] ?>');">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>




        </div>


        <?php include "footer.php"; ?>

        <script src="script.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
    </body>

    </html>


<?php

} else {
    header("location: index.php");
}

?>