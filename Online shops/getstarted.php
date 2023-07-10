<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mains.css">
    <script src="script.js"></script>
    <title>Hero Component Example</title>
    <style>
        .hero {
            background-image: url('path/to/hero-image.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 18px;
            margin-bottom: 40px;
        }
        
        .hero a {
            background-color: #ffffff;
            color: #000000;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
        }
        .slideshow-container {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
        }
        
        .slideshow-slide {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .slideshow-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="hero">
        <div class="hero-content">
            <h1>Welcome to our Website</h1>
            <p>Discover amazing products and services.</p>
            <a href="JNR.php">Get Started</a>
        </div>
    </div>
    <!-- Rest of the page content goes here -->


   
    <div class="slideshow-container">
        <?php
        // Image paths or URLs
        $images = [
            'img/addidas4.jpeg',
            'img/jordans3.jpeg',
            'img/nike3.jpeg',
        ];
        
        foreach ($images as $image) {
            echo '<div class="slideshow-slide"><img src="' . $image . '" alt=""></div>';
        }
        ?>
    </div>

    <script>
        var slides = document.querySelectorAll('.slideshow-slide');
        var currentSlide = 0;
        
        function showSlide() {
            for (var i = 0; i < slides.length; i++) {
                slides[i].style.display = 'none';
            }
            slides[currentSlide].style.display = 'block';
        }
        
        function nextSlide() {
            currentSlide++;
            if (currentSlide >= slides.length) {
                currentSlide = 0;
            }
            showSlide();
        }
        
        setInterval(nextSlide, 3000); // Automatically switch slides every 3 seconds
        
        showSlide(); // Display the initial slide
    </script>


</body>
</html>

