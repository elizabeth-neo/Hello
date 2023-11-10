<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet/styleContactme.css">
    <title>Portfolio</title>
    <style>
        body{
            overflow: hidden;
            margin: 0; /* Reset margin to ensure no extra space */
        }
        .oval {
            width: 1500px; /* Adjust the width of the oval */
            height: 450px; /* Adjust the height of the oval */
            background-color: #13EB0C; /* Change the background color as needed */
            border-radius: 100% / 100%; /* Adjust the radii to make it an oval */
            position: absolute;
            bottom: -280px; /* Adjust the bottom position */
            left: 50%;
            transform: translateX(-50%);
        }
        .additional-content {
            font-family: 'Lucida Calligraphy';
            font-size: 24px;
            text-align: center;
            color: #333; /* Adjust the color as needed */
            position: absolute;
            top: 40%; /* Adjust the top position */
            left: 50%;
            transform: translate(-50%, -50%); /* Adjust the transform */
            width: 100%;
        }
        
        .down-arrow-button {
            position: absolute;
            top: 370%; /* Adjust the top position */
            left: 530%;
            transform: translate(-50%, -50%);
            padding: 30px; /* Adjust padding as needed */
            display: inline-block;
            position: relative;
        }

        .down-arrow {
            border-left: 40px solid transparent;
            border-right:40px solid transparent;
            border-top: 60px solid #333; /* Adjust arrow color as needed */
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
            <div class="oval"></div>
            <div class="additional-content">
                <div style="font-family: Montserrat">
                <p>These are my attempts on website designs</p>
                <p>for over 2 years using different software.</p>
                <p><b>Click on the button to proceed.</b></p>
                </div>
            </div>
            <a href="websitedesign.php">
                <div class="down-arrow-button">
        <div class="down-arrow"></div>
            </a>
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
