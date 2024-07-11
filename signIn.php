<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="Resources/img/favicon_icon.png">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />

    <title>Buy Cloth.com</title>
</head>

<body>

    <div id="preloader"></div>

    <div class="hero">

        <div>
            <video autoplay loop muted plays-inline class="back-name">
                <source src="Resources/video/3917742-uhd_4096_2160_25fps.mp4" type="video/mp4">
            </video>
        </div>
        <nav class="NAV">
            <img src="Resources/img/216569_b_bitcoin_icon.png" class="LOGO">
            <ul>

                <li><a href="adminSignIn.php">ADMIN PANEL</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
            </ul>
        </nav>

        <div class="signIn_body">

            <!--Sign In Box -->
            <div class="signIn_Box container-glass container-glass" id="signInBox">

                <h2 class="text-center text-light">Sign In</h2>

                <?php

                $username = "";
                $password = "";

                if (isset($_COOKIE["username"])) {
                    $username = $_COOKIE["username"];
                }

                if (isset($_COOKIE["password"])) {
                    $password = $_COOKIE["password"];
                }

                ?>

                <div class="mt-3 text-light">
                    <label for="form-label">Username:</label>
                    <input type="text" class="form-control" id="un" value="<?php echo $username ?>" placeholder="Jonathan" />
                </div>

                <div class="mt-2 text-light">
                    <label for="form-label">Password:</label>
                    <input type="password" class="form-control" id="pw" value="<?php echo $password ?>" placeholder="*********" />
                </div>

                <div class="mt-2 mb-2 text-light">
                    <input type="checkbox" class="form-check-input" id="rm" />
                    <label for="form-label">Remember Me</label>
                </div>

                <div class="d-none" id="msgDiv2">
                    <div class="alert alert-danger" id="msg2"></div>
                </div>

                <div class="mt2">
                    <button class="btn btn-secondary col-12" onclick="signIn();">Sign In</button>
                </div>

                <div class="mt-2">
                    <a href="forgetPassword.php"><button class="btn btn-outline-info col-12 btn-sm">Forget Password</button></a>
                </div>

                <div class="mt-2">
                    <button class="btn btn-outline-secondary col-12 text-light" onclick="chageView();">New to Onlinestore? Please Sign Up</button>
                </div>
            </div>
            <!--Sign In Box-->

            <!--Sign Up Box-->
            <div class="signUp_Box d-none container-glass" id="signUpBox">

                <h2 class="text-center text-light">Sign Up</h2>

                <div class="row">

                    <div class="mt-3 col-6 text-light">
                        <label for="form-label">First Name :</label>
                        <input type="text" class="form-control" id="fname" placeholder="Jonathan" />
                    </div>

                    <div class="mt-3 col-6 text-light">
                        <label for="form-label">Last Name :</label>
                        <input type="text" class="form-control" id="lname" placeholder="Mark" />
                    </div>

                </div>

                <div class="mt-3 text-light">
                    <label for="form-label">Email :</label>
                    <input type="email" class="form-control" id="email" placeholder="Jonathan@icolud.com" />
                </div>

                <div class="mt-3 text-light">
                    <label for="form-label">Mobile :</label>
                    <input type="text" class="form-control" id="mobile" placeholder="+54710778678" />
                </div>

                <div class="mt-3 text-light">
                    <label for="form-label">Username :</label>
                    <input type="text" class="form-control" id="username" placeholder="Jonathan2006" />
                </div>

                <div class="mt-3 mb-3 text-light">
                    <label for="form-label">Password :</label>
                    <input type="password" class="form-control" id="password" placeholder="*********" />
                </div>

                <div class="d-none" id="msgDiv1">
                    <div class="alert alert-danger" id="msg1"></div>
                </div>

                <div class="mt-3">
                    <button class="btn btn-secondary col-12" onclick="signUp();">Sign Up</button>
                </div>

                <div class="mt-2">
                    <button class="btn btn-outline-secondary col-12 text-light" onclick="chageView();">Alredy Have an account?Please Sign In </button>
                </div>


            </div>
            <!--Sign Up Box-->


        </div>


    </div>

    <script src="script.js"></script>


    <script>
        var loder = document.getElementById("preloader");

        window.addEventListener("load", function() {
            loder.style.display = "none";
        })
    </script>
</body>

</html>