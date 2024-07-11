<?php


include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Resources/img/favicon_icon.png">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <title>Buy Cloth.com</title>
</head>

<body onload="loadProduct(0);">

    <div id="preloader"></div>

    <!-- nav Bar -->
    <?php include "navBar.php"; ?>
    <!-- nav Bar -->

    <!--basic serch -->
    <div class="container d-flex justify-content-end mt-5 mb-3">
        <div class="col-3 mt-3">
            <input type="text" class="form-control" placeholder="Product Name" id="product" onkeyup="searchProduct(0)">
        </div>
        <button class="btn btn-outline-info col-1 ms-2 mt-3" onclick="viewFilter();">Filters</button>
    </div>
    <!--basic serch -->

    <!--Advanced serch -->
    <div class="d-none" id="filterId">
        <div class="border border-light mt-4 p-5 col-10 offset-1 rounded-4">

            <div class="row col-12">
                <div class="row col-6 ms-auto">
                    <label class="col-3 form-label">Color :</label>
                    <select class="form-select col-9" id="color">
                        <option value="0">Select Color</option>
                        <?php
                        $rs = Database::search("SELECT * FROM `color`");
                        $num = $rs->num_rows;

                        for ($i = 0; $i < $num; $i++) {
                            $d = $rs->fetch_assoc();
                        ?>

                            <option value="<?php echo $d["color_id"] ?>"><?php echo $d["color_name"] ?></option>

                        <?php
                        }
                        ?>

                    </select>
                </div>

                <div class="row col-6 ms-auto">
                    <label class="col-3 form-label">Category :</label>
                    <select class="form-select  col-9" id="cat">
                        <option value="0">Select Catagory</option>
                        <?php
                        $rs2 = Database::search("SELECT * FROM `catogary`");
                        $num2 = $rs2->num_rows;

                        for ($i = 0; $i < $num2; $i++) {
                            $d2 = $rs2->fetch_assoc();

                        ?>
                            <option value="<?php echo $d2["catogary_id"] ?>"><?php echo $d2["catogary_name"] ?></option>

                        <?php
                        }
                        ?>
                    </select>
                </div>

            </div>

            <div class="row col-12 mt-4">
                <div class="row col-6 ms-auto">
                    <label class="col-3 form-label">Brand :</label>
                    <select class="form-select col-9" id="brand">
                        <option value="0">Select Brand</option>
                        <?php
                        $rs3 = Database::search("SELECT * FROM `brand`");
                        $num3 = $rs3->num_rows;

                        for ($i = 0; $i < $num3; $i++) {
                            $d3 = $rs3->fetch_assoc();

                        ?>

                            <option value="<?php echo $d3["brand_id"] ?>"><?php echo $d3["brand_name"] ?></option>

                        <?php

                        }

                        ?>
                    </select>
                </div>

                <div class="row col-6 ms-auto">
                    <label class="col-3 form-label">Size :</label>
                    <select class="form-select col-9" id="size">
                        <option value="0">Select Size</option>

                        <?php
                        $rs4 = Database::search("SELECT * FROM `size`");
                        $num4 = $rs4->num_rows;

                        for ($i = 0; $i < $num4; $i++) {
                            $d4 = $rs4->fetch_assoc();

                        ?>

                            <option value="<?php echo $d4["size_id"] ?>"><?php echo $d4["size_name"] ?></option>

                        <?php

                        }

                        ?>

                    </select>
                </div>

            </div>

            <div class="mt-4 row col-12 m-auto">
                <div class="col-5">
                    <input type="text" class="form-control" placeholder="Min price" id="min" />
                </div>

                <div class="col-5">
                    <input type="text" class="form-control" placeholder="Max price" id="max" />
                </div>
                <button class="btn btn-outline-danger col-2" onclick="advSearchProduct(0);">Search</button>

            </div>
        </div>
    </div>
    <!--Advanced serch -->

    <!-- Carousel -->
    <div class="col-12 d-none d-lg-block mb-3">
        <div class="row">

            <div id="carouselExampleIndicators" class="offset-2 col-8 carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Resources/dark theme icon/posterimg.jpg" class="d-block img-thumbnail poster-img-1" />
                        <div class="carousel-caption d-none d-md-block poster-caption">
                            <h5 class="poster-title">Welcome to Buy Clouth</h5>
                            <p class="poster-txt">The World's Best Online Store By One Click.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Resources/dark theme icon/sale 1.webp" class="d-block img-thumbnail poster-img-1" />
                    </div>
                    <div class="carousel-item">
                        <img src="Resources/dark theme icon/posterimg3.jpg" class="d-block img-thumbnail poster-img-1" />
                        <div class="carousel-caption d-none d-md-block poster-caption-1">
                            <h5 class="poster-title">Be Free.....</h5>
                            <p class="poster-txt">Experience the Lowest Delivery Costs With Us.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </div>
    <!-- Carousel -->


    <!--Load Product -->
    <div class="row col-10 offset-1" id="pid"></div>
    <!--Load Product -->

    <?php include "footer.php"; ?>


    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        var loder = document.getElementById("preloader");

        window.addEventListener("load", function() {
            loder.style.display = "none";
        })
    </script>
</body>

</html>