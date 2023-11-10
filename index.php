<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheet/styleIndex.css">
        <title>Your Website</title>
    </head>
    <style>

    </style>
    <body>
        <?php include "navbar.php"; ?>

        <div>
            <div>
                <video id="background-video" autoplay loop muted>
                    <source src="Videos/video (2160p).mp4" type="video/mp4">
                </video>
                <div class="content">
                                    <div>
                <h3 class='h3_intro'>Hi I'm</h3>
                <h1>Elizabeth Neo</h1>
                <h3 class='h3_role'>An aspiring UI/UX designer</h3>
                </div>
                    <div class="content_welcome">
                        <h2>Welcome!</h2>
                        <hr class="hr_wel" id="scrollLine">
                        <p>Hi I'm Elizabeth and Neo is my surname. Currently, I'm a student</br>
                            under Republic Polytechnic in Singapore, pursuing a diploma in</br>
                            Digital Design and Development. Feel free to explore further :)</p>
                        <hr style="background-color: black;height: 6px; width: 200px;border:none;">
                    </div>

                    <div class="grid-container-about">
                        <div class="image-box">
                            <img style="transform:rotate(45deg);position:absolute;left: 300px;top:1170px;" src="Images/girl.png" alt="Your Image">
                        </div>
                        <div class="content_aboutme" style="padding-bottom:15px">
                            <p style="font-size: 40px;font-weight: bold">ABOUT ME</p>
                            <hr style="background-color: white;height: 6px; width: 150px;border:none;margin-right: 510px;margin-top: -40px">
                            <p style="font-size: 30px;">
                                Want to know more about me,</br>
                                my interests, values and skills? </br>
                                Click on the procced button
                                below.</br>
                            </p>
                            <a href="aboutme.php" class="button">Proceed</a>
                        </div>
                    </div>
                    <div class="grid-container-portfolio">
                        <div class="content_portfolio" style="padding-bottom:15px">
                            <p style="font-size: 40px;font-weight: bold">PORTFOLIO</p>
                            <hr style="background-color: black;height: 6px; width: 150px;border:none;margin-left: 510px;margin-top: -40px">
                            <p style="font-size: 30px;">
                                Click on the proceed button to</br>
                                look and run through my work</br>
                                journey of website designs, </br>
                                illustrations and more!</br>
                            </p>
                            <a href="portfolio.php" class="button">Proceed</a>
                        </div>
                        <div class="image-box">
                            <img src="your-image.jpg" alt="Your Image">
                        </div>
                    </div>

                    <div class="grid-container-contact">
                        <div class="image-box">
                            <img src="your-image.jpg" alt="Your Image">
                        </div>
                        <div class="content_contactme" style="padding-bottom:15px">
                            <p style="font-size: 40px;font-weight: bold">CONTACT ME</p>
                            <hr style="background-color: black;height: 6px; width: 150px;border:none;margin-right: 510px;margin-top: -40px">
                            <p style="font-size: 30px;">
                            Contact me by my socials or </br>
                            send a message directly in an </br>
                            instant! Just click on the proceed </br>
                            button below. </br>
                            </p>
                            <a href="contactme.php" class="button">Proceed</a>
                        </div>
                    </div>
                <div>
                    <p class="footer"><a href="#">GO BACK</a></p>
                </div>
                </div>
            </div>
        </div>

        <script>
const logo = document.querySelector('.logo');
const body = document.querySelector('body');
const navbar = document.querySelector('.navbar');

logo.addEventListener('mouseover', () => {
    logo.style.transform = 'rotate(360deg)';
//    body.style.filter = 'grayscale(100%)'; // Apply grayscale to the body
    navbar.style.backgroundColor = 'black';
    navbar.style.color = 'white';
});

logo.addEventListener('mouseout', () => {
    logo.style.transform = 'rotate(0deg)';
//    body.style.filter = 'grayscale(0%)'; // Remove the grayscale effect
    navbar.style.backgroundColor = 'white';
    navbar.style.color = 'black';
});
        </script>
        
    </body>
</html>
