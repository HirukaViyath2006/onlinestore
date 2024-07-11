<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="Resources/img/favicon_icon.png">
    <title>Buy Cloth AdminPanel</title>
</head>

<body>

    <div id="preloader"></div>


    <div class="hero">
        <div>
            <video autoplay loop muted plays-inline class="back-name">
                <source src="Resources/video/3129671-uhd_3840_2160_30fps.mp4" type="video/mp4">
            </video>
        </div>
        <nav class="NAV">
            <img src="Resources/img/216569_b_bitcoin_icon.png" class="LOGO">
            <ul>
                <li><a href="SignIn.php">Sign In</a></li>
            </ul>
        </nav>

        <div class="signInBody ">

            <div class="adminSignIn_Box container-glass">

                <h2 class="text-center text-danger">Admin Loging</h2>

                <div class="mt-3 text-light">
                    <label for="form-label">Username :</label>
                    <input type="text" class="form-control" placeholder="EX: Jonathan Mark" id="un" />
                </div>

                <div class="mt-3 mb-3 text-light">
                    <label for="form-label">Password :</label>
                    <input type="password" class="form-control" placeholder="EX: ***************" id="pw" />
                </div>

                <div class="d-none" id="msgDiv">
                    <div class="alert alert-danger" id="msg"></div>
                </div>

                <div class="mt-4">
                    <button class="btn btn-secondary col-12" onclick="adminSignIn();">Sign In</button>
                </div>

            </div>

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