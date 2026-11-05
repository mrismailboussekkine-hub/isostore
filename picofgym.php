
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pic of Gym</title>
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<?php
$path = dirname(__FILE__) . '/navbar.php';
require $path;
?>

    <section class="gallery-section">
        <h1 class="title">Gym Gallery</h1>
        <p class="subtitle">Look inside ISOGYM — professional equipment, clean space, motivation everywhere.</p>
        <div class="gallery-container">
            <div class="gallery-box"><img src="img6.jpg"></div>
            <div class="gallery-box"><img src="gym1img.jpg"></div>
            <div class="gallery-box"><img src="img2.jpg"></div>
            <div class="gallery-box"><img src="img3.jpg"></div>
            <div class="gallery-box"><img src="img4.jpg"></div>
            <div class="gallery-box"><img src="img5.jpeg"></div>
        </div>
    </section>
</body>
</html>
