<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Resources/img/favicon_icon.png">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <title>Buy Cloth - Reset Password</title>
</head>

<body>

    <div class="hero">

        <div>
            <img src="Resources/assets/blue-sky-with-clouds-frame-vector-image_189483-185.avif" class="back-name" type="png">
        </div>
        <nav class="NAV">
            <img src="Resources/img/216569_b_bitcoin_icon.png" class="LOGO">
            <ul>
                <li><a href="#"></a></li>
                <li><a href="contact.php">CONTACT US</a></li>
            </ul>
        </nav>

        <div class="signIn_body">
            <!--rest In Box -->
            <div class="signIn_Box container-glass container-glass" id="signInBox">

                <h2 class="text-center">Reset Password</h2>

                <div class="d-none">
                    <input type="hidden" id="vcode" value="<?php echo ($_GET["vcode"]) ?>" />
                </div>

                <div class="mt-4 mb-4">
                    <label for="form-label">Password:</label>
                    <input type="password" class="form-control" id="np" placeholder="***********" />
                </div>

                <div class="mt-4 mb-4">
                    <label for="form-label">Re-enter Password:</label>
                    <input type="password" class="form-control" id="np2" placeholder="***********" />
                </div>

                <div class="d-none" id="msgDiv">
                    <div class="alert alert-danger" id="msg"></div>
                </div>

                <div class="mt-4">
                    <button class="btn btn-secondary col-12" onclick="resetPassword();">Update</button>
                </div>

            </div>
            <!--reset In Box-->


        </div>

    </div>



    <script src="script.js"></script>
</body>

</html>