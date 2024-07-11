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
        <title>Online Store - Admin Dashboard</title>
    </head>

    <body class="adminBody">

        <!-- nav Bar -->
        <?php include "adminNavBar.php"; ?>
        <!-- nav Bar -->

        <div class="col-10">
            <h2 class="text-center">Reports</h2>

            <div class="row mt-5">
                <div class="col-4 mt-5">
                    <a href="adminReportStock.php"><button class="btn btn-outline-success col-12">Stock Reports</button></a>
                </div>

                <div class="col-4 mt-5">
                    <a href="adminReportProduct.php"><button class="btn btn-outline-success col-12">Product Reports</button></a>
                </div>

                <div class="col-4 mt-5">
                    <a href="adminReportUser.php"><button class="btn btn-outline-success col-12">User Reports</button></a>
                </div>



            </div>

        </div>




        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </body>

    </html>

<?php

} else {
    // Login 
    echo ("You are not a Valid Admin");
}
