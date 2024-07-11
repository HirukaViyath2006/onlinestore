<?php
session_start();

if (isset($_SESSION["a"])) {

?>

    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="icon" type="image/png" href="Resources/img/favicon_icon.png">
        <title>Document</title>
    </head>

    <body class="adminBody">
        <!-- nav Bar -->
        <?php include "adminNavBar.php"; ?>
        <!-- nav Bar -->

        <div class="col-10">
            <h2 class="text-center">Product Management</h2>

            <div class="row">

                <!-- Brand Register -->
                <div class="col-4 offset-1 mt-4 ms-1 me-auto">
                    <label for="form-label">Brand :</label>
                    <input type="text" class="form-control mb-3" id="brand">

                    <div class="d-none" id="msgDiv1" onclick="reload();">
                        <div class="alert alert-danger" id="msg1"></div>
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-outline-info col-12" onclick="brandReg();">Brand Register</button>
                    </div>

                </div>
                <!-- Brand Register -->

                <!-- Catogary Register -->
                <div class="col-4 offset-1 mt-4">
                    <label for="form-label">Catogary :</label>
                    <input type="text" class="form-control mb-3" id="cat">

                    <div class="d-none" id="msgDiv2" onclick="reload();">
                        <div class="alert alert-danger" id="msg2"></div>
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-outline-info col-12" onclick="catogaryReg();">Catogary Register</button>
                    </div>

                </div>
                <!-- Catogary Register -->

            </div>

            <div class="row mt-5">
                <!-- color Register -->
                <div class="col-4 offset-1 mt-4 ms-1 me-auto">
                    <label for="form-label">Color :</label>
                    <input type="text" class="form-control mb-3" id="color">

                    <div class="d-none" id="msgDiv3" onclick="reload();">
                        <div class="alert alert-warning" id="msg3"></div>
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-outline-info col-12" onclick="colorReg();">Color Register</button>
                    </div>

                </div>
                <!-- color Register -->

                <!-- Size Register -->
                <div class="col-4 offset-1 mt-4">
                    <label for="form-label">Size :</label>
                    <input type="text" class="form-control mb-3" id="size">

                    <div class="d-none" id="msgDiv4" onclick="reload();">
                        <div class="alert alert-danger" id="msg4"></div>
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-outline-info col-12" onclick="sizeReg();">Size Register</button>
                    </div>

                </div>
                <!-- Size Register -->

            </div>

        </div>




        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>




<?php


} else {
    echo ("You Are Not a Vaild admin");
}


?>