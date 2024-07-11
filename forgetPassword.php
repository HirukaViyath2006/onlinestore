<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Resources/img/favicon_icon.png">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <title>Buy Cloth - Forget Password</title>
</head>

<body>


    <div class="hero">

        <div>
            <img src="Resources/assets/blue-sky-with-clouds-frame-vector-image_189483-185.avif" class="back-name" type="png">
        </div>
        <nav class="NAV">
            <img src="Resources/img/216569_b_bitcoin_icon.png" class="LOGO">
            <ul>
                <li><a href="signIn.php">SIGN IN</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
            </ul>
        </nav>


        <div class="signIn_body">
            <!--Sign In Box -->
            <div class="signIn_Box container-glass container-glass" id="signInBox">

                <h2 class="text-center">forget Password</h2>

                <div class="mt-4 ">
                    <label for="form-label">Email:</label>
                    <input type="email" class="form-control" id="e" placeholder="Jonathan@icloud or email.com" />
                </div>

                <div class="d-none" id="msgDiv">
                    <div class="alert alert-danger" id="msg"></div>
                </div>

                <div class="mt-4">
                    <button class="btn btn-secondary col-12" onclick="forgetPassword();">Send Email</button>
                </div>

            </div>
            <!--Sign In Box-->

        </div>

    </div>



    <script src="script.js"></script>
</body>

</html>