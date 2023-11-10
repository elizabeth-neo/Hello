<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet/styleContactme.css">
    <title>Portfolio</title>
    <style>
        .additional-content {
            font-family: 'Lucida Calligraphy';
            font-size: 24px;
            text-align: center;
            color: #333; /* Adjust the color as needed */
            position: absolute;
            top: 80%; /* Adjust the top position */
            left: 50%;
            transform: translate(-50%, -50%); /* Adjust the transform */
            width: 100%;
        }
       
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="content">
        <div class="video-container">
            <video id="background-video" controls autoplay loop muted>
                <source src="Videos/production_id_5189814 (2160p)evening.mp4" type="video/mp4">
            </video>
            <div style="font-family: 'Lucida Calligraphy'; font-size: 50px;">
                <p style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -430%);"><u>Website Designs</u></p>
            </div>
            <div class="additional-content">
                <img src="Images/website1.png" alt="Your Image">
                <div style="font-family: Montserrat">
                <p>This is my website attempt I made, using adobe illustrator,</p>
                <p>during my Year 1 Semester 2 design module. This Graded</p>
                <p><b>Assignment was about us designing our portfolio website.</b></p>
                </div>
                <img src="Images/website2.png" alt="Your Image">
                <div style="font-family: Montserrat">
                <p>This is my website attempt I made, using adobe illustrator,</p>
                <p>during my Year 1 Semester 2 design module. This Graded</p>
                <p><b>Assignment was about us designing our portfolio website.</b></p>
                </div>
            </div>
    </div>

    <script>
        const logo = document.querySelector('.logo');
        const navbar = document.querySelector('.navbar');
        const link = document.querySelector('.navbar a');

        logo.addEventListener('mouseover', () => {
            logo.style.transform = 'rotate(360deg)';
            navbar.style.backgroundColor = 'black';
            navbar.style.color = 'white';
        });

        logo.addEventListener('mouseout', () => {
            logo.style.transform = 'rotate(0deg)';
            navbar.style.backgroundColor = 'white';
            navbar.style.color = 'black';
        });
    </script>
</body>
</html>
