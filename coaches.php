<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coaches - ISOGYM</title>
    <link rel="stylesheet" href="coaches.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
 
<?php
$path = dirname(__FILE__) . '/navbar.php';
require $path;
?>

    <section class="coaches-section">
        <h1 class="title">Our Coaches</h1>
        <p class="subtitle">Professionals who will guide you to your best version.</p>
        <div class="coaches-container">
            <div class="coach-box">
                <img src="coache11.webp">
                <h3>Alexandre</h3>
                <span>Fitness & Conditioning</span>
                <a href="https://protrainer.fr/coach-sportif/auvergne-rhone-alpes/savoie/chambery/alexandre-73.html" class="btn">Contact</a>
            </div>
            <div class="coach-box">
                <img src="coache2.webp">
                <h3>Abdelkader</h3>
                <span>Strength Training</span>
                <a href="https://protrainer.fr/coach-sportif/ile-de-france/val-doise/herblay/abdel-95.html" class="btn">Contact</a>
            </div>
            <div class="coach-box">
                <img src="coache3.jpg">
                <h3>Vanick</h3>
                <span>Bodybuilding Expert</span>
                <a href="https://protrainer.fr/coach-sportif/occitanie/haute-garonne/toulouse/vanick-yoga-31.html" class="btn">Contact</a>
            </div>
            <div class="coach-box">
                <img src="coache4.webp">
                <h3>Alexandra</h3>
                <span>Nutrition & Fat Loss</span>
                <a href="https://protrainer.fr/coach-sportif/ile-de-france/seine-saint-denis/gagny/alexandra-yoga-93.html" class="btn">Contact</a>
            </div>
            <div class="coach-box">
                <img src="coache5.webp">
                <h3>Yohann</h3>
                <span>Crossfit & Power</span>
                <a href="https://protrainer.fr/coach-sportif/ile-de-france/val-de-marne/champigny-sur-marne/49.html" class="btn">Contact</a>
            </div>
            <div class="coach-box">
                <img src="coache6.webp">
                <h3>Wesly</h3>
                <span>Gym Training</span>
                <a href="https://protrainer.fr/coach-sportif/ile-de-france/paris/paris-1/wesley-75-92-93.html" class="btn">Contact</a>
            </div>
        </div>
    </section>
</body>
</html>
