<?php

session_start();
include "connection.php";

if (isset($_SESSION["a"])) {

?>
    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="Resources/img/favicon_icon.png">
        <title>Stock - Admin Panel</title>
    </head>

    <body class="adminBody">

        <?php
        include "adminNavBar.php";
        ?>

        <div class="container-fluid">

            <div class="row">
                <div class="col-5 offset-1">

                    <h2 class="text-center">Product Registeration</h2>

                    <div class="mb-3">
                        <label class="form-label" for="pname">Product Name</label>
                        <input type="text" class="form-control" id="pname">
                    </div>

                    <div class="row">

                        <div class="mb-3 col-6">
                            <label class="form-label" for="">Brand</label>
                            <select class="form-select" id="bname">
                                <option value="0">Select</option>

                                <?php
                                $rs = Database::search("SELECT * FROM `brand`");
                                $num = $rs->num_rows;

                                for ($x = 0; $x < $num; $x++) {

                                    $data = $rs->fetch_assoc();
                                ?>

                                    <option value="<?php echo ($data["brand_id"]); ?>"><?php echo $data["brand_name"] ?></option>
                                <?php

                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3 col-6">
                            <label class="form-label" for="">Catogary</label>
                            <select class="form-select" id="catogary">
                                <option value="0">Select</option>

                                <?php
                                $rs = Database::search("SELECT * FROM `catogary`");
                                $num = $rs->num_rows;

                                for ($x = 0; $x < $num; $x++) {

                                    $data = $rs->fetch_assoc();
                                ?>

                                    <option value="<?php echo ($data["catogary_id"]); ?>"><?php echo $data["catogary_name"] ?></option>
                                <?php

                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3 col-6">
                            <label class="form-label" for="">Color</label>
                            <select class="form-select" id="color">
                                <option value="0">Select</option>

                                <?php
                                $rs = Database::search("SELECT * FROM `color`");
                                $num = $rs->num_rows;

                                for ($x = 0; $x < $num; $x++) {

                                    $data = $rs->fetch_assoc();
                                ?>

                                    <option value="<?php echo ($data["color_id"]); ?>"><?php echo $data["color_name"] ?></option>

                                <?php

                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3 col-6">
                            <label class="form-label" for="">Size</label>
                            <select class="form-select" id="size">
                                <option value="0">Select</option>

                                <?php
                                $rs = Database::search("SELECT * FROM `size`");
                                $num = $rs->num_rows;

                                for ($x = 0; $x < $num; $x++) {

                                    $data = $rs->fetch_assoc();
                                ?>

                                    <option value="<?php echo $data["size_id"] ?>"><?php echo $data["size_name"] ?></option>

                                <?php

                                }
                                ?>
                            </select>
                        </div>


                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Description</label>
                        <textarea class="form-control" rows="1" id="description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Product Image</label>
                        <input type="file" class="form-control" id="imageUploder">
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-secondary" onclick="regProduct();">Register Product</button>
                    </div>

                </div>

                <div class="row col-5">

                    <h2 class="text-center">Stock Update</h2>

                    <div class="mb-3 col-10 offset-1">
                        <label class="form-label" for="">Product Name</label>
                        <select class="form-select" id="selectProduct">
                            <?php

                            $rs = Database::search("SELECT * FROM `product`");
                            $num = $rs->num_rows;

                            for ($x = 0; $x < $num; $x++) { 
                                $data = $rs->fetch_assoc();
                                ?>
                                <option value="<?php echo $data["id"] ?>"><?php echo $data["name"] ?></option>
                                <?php
                            }
                            
                            ?>
                        </select>
                    </div>

                    <div class="mb-3 col-10 offset-1">
                        <label class="form-label" for="">Qty :</label>
                        <input type="text" class="form-control" id="qty">
                    </div>

                    <div class="mb-3 col-10 offset-1">
                        <label class="form-label" for="">Unit Price :</label>
                        <input type="text" class="form-control" id="uprice">
                    </div>

                    <div class="mt-2 col-10 offset-1">
                        <button class="btn btn-secondary col-12" onclick="updateStock();">Update Stock</button>
                    </div>

                </div>


            </div>

        </div>

        <!-- Footer -->
        <div class="fixed-bottom col-12">
            <p class="text-center">&copy; 2024 Online Store.lk || All Right Reserved</p>
        </div>
        <!-- Footer -->

        <script src="script.js"></script>
    </body>

    </html>

<?php

} else {
    echo ("You're Not an admin");
}

?>