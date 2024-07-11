<?php

session_start();

if (isset($_SESSION["a"])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="icon" type="image/png" href="Resources/img/favicon_icon.png">
        <title>Buy Cloth - Admin Dashboard</title>
    </head>

    <body class="adminBody" onload="loadChart();">

        <!-- nav Bar -->
        <?php include "adminNavBar.php"; ?>
        <!-- nav Bar -->

        <!-- Chart -->
        <div style="width: 400px;">
            <h2 class="text-center">Most Sold Product</h2>
            <canvas id="myChart"></canvas>
        </div>
        <!-- Chart -->


        <!-- Footer -->
        <div class="fixed-bottom col-12">
            <p class="text-center">&copy; 2024 Online Store.lk || All Right Reserved</p>
        </div>
        <!-- Footer -->

        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>

<?php


} else {
    // Login 
    echo ("You are not a Valid Admin");
}
