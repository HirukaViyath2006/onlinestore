<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="Resources/img/favicon_icon.png">
    <link rel="stylesheet" href="bootstrap.css" />
    <title>Contact Form</title>
</head>

<body>
    <div id="preloader"></div>

    <nav class="NAV">
        <img src="Resources/img/216569_b_bitcoin_icon.png" class="LOGO">
        <ul>
            <li><a href="adminSignIn.php" class="text-info"></a></li>
            <li><a href="signIn.php" class="text-success">SIGN IN PAGE</a></li>
        </ul>
    </nav>


    <div class="by">
        <div class="contact-container">
            <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
                <div class="contact-left-title">
                    <h2>Contact Your Admin</h2>
                    <hr>
                </div>
                <input type="hidden" name="access_key" value="c8a9b073-31af-4318-8d9f-141fc3a130ed">
                <input type="text" name="name" placeholder="your Name" class="contact-inputs" required>
                <input type="email" name="email" placeholder="your Email" class="contact-inputs" required>
                <textarea name="massage" placeholder="Your Massege" class="contact-inputs" required></textarea>
                <button type="submit">Submit <img src="Resources/assets/arrow_icon.png" alt=""></button>

            </form>
            <div class="contact-right">
                <img src="Resources/assets/right_img.png" alt="">
            </div>

        </div>

    </div>

    <?php include "footer.php"; ?>


    <script>
        var loder = document.getElementById("preloader");

        window.addEventListener("load", function() {
            loder.style.display = "none";
        })
    </script>

</body>

</html>