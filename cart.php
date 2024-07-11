<?php


session_start();
include "connection.php";

$user = $_SESSION["u"];

if (isset($user)) {
    // Loard  Cart

?>
    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dar">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="icon" type="image/png" href="Resources/img/favicon_icon.png">
        <title>Buy Clouth - Shoping Cart</title>
    </head>

    <body onload="loadCart();">
        <!-- nav Bar -->
        <?php include "navBar.php"; ?>
        <!-- nav Bar -->

        <div class="container mt-5">
            <div class="row" id="cartBody">

            </div>
        </div>


        <script src="script.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

    </body>

    </html>

<?php
} else {
    header("location: signIn.php");
}
