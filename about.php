<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Resources/img/favicon_icon.png">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <script src="https://kit.fontawesome.com/b677b315d3.js" crossorigin="anonymous"></script>
    <title>About Us</title>
</head>

<body>
    <div>
        <h2 class="text-center text-success">BUY CLOTH</h2>
    </div>
    <div class="about">
        <div class="testimonial">
            <div class="testimonial-text">
                <div class="user-text">
                    <i class="fas fa-quote-left"></i>
                    <p>FashionEcom is an innovative online clothing startup
                        focused on direct-to-consumer sales.
                        We specialize in customizable fashion, allowing
                        customers to create unique, made-to-order pieces
                        through our e-commerce platform.</p>
                    <span>JONATHN MARK, CEO BUY CLOTH</span>
                </div>
                <div class="user-text active-text">
                    <i class="fas fa-quote-left"></i>
                    <p>BUY CLOTH Fashion is a leading retail brand
                        specializing in trendy and sustainable fashion for
                        men, women, and children. With over 200 stores
                        worldwide, XYZ Fashion is committed to providing
                        high-quality, eco-friendly products that appeal to
                        fashion-forward consumers.</p>
                    <span>Lucas Arthur, HR BUY CLOTH</span>
                </div>
                <div class="user-text">
                    <i class="fas fa-quote-left"></i>
                    <p>The CEO will lead FashionEcom through its next phase of growth, focusing
                        on scaling operations, enhancing customer
                        experience, and driving revenue growth. This role requires a visionary
                        leader with a strong background in
                        e-commerce and digital marketing.</p>
                    <span>Henry Wiliam, MD BUY CLOTH</span>
                </div>
                <div class="user-text">
                    <i class="fas fa-quote-left"></i>
                    <p>BUY CLOTH is a sustainable fashion company dedicated to creating
                        stylish, eco-friendly apparel using recycled and organic materials.
                        We are committed to reducing our environmental footprint
                        and promoting ethical production practices.</p>
                    <span>Abigail Alic, CTO BUY CLOTH</span>
                </div>
                <div class="user-text">
                    <i class="fas fa-quote-left"></i>
                    <p>The CEO will be responsible for the overall vision, strategy,
                        and execution of the company's growth and operations. This
                        individual will lead the senior management team, drive business
                        development, and ensure the brand continues to lead in
                        fashion innovation and sustainability.</p>
                    <span>Amelia Ava, TL BUY CLOTH</span>
                </div>

            </div>
            <div class="testimonial-pic">
                <img src="Resources/discription/user1.png" class="user-pic" onclick="showReview();">
                <img src="Resources/discription/user2.png" class="user-pic active-pic" onclick="showReview();">
                <img src="Resources/discription/user3.png" class="user-pic" onclick="showReview();">
                <img src="Resources/discription/user4.png" class="user-pic" onclick="showReview();">
                <img src="Resources/discription/user5.png" class="user-pic" onclick="showReview();">

            </div>


        </div>

    </div>

    <script>
        let userTexts = document.getElementsByClassName("user-text");
        let userPics = document.getElementsByClassName("user-pic");

        function showReview() {
            for (userPic of userPics) {
                userPic.classList.remove("active-pic");
            }
            for (userText of userTexts) {
                userText.classList.remove("active-text");
            }
            let i = Array.from(userPics).indexOf(event.target);

            userPics[i].classList.add("active-pic");
            userTexts[i].classList.add("active-text");
        }
    </script>

    <?php include "footer.php"; ?>

</body>

</html>