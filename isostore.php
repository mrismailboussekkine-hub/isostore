
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISOSTORE - Supplements</title>
    <link rel="stylesheet" href="isostore.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
<?php
$path = dirname(__FILE__) . '/navbar.php';
require $path;
?>

    <section class="store-header">
        <h1 class="title">ISO STORE</h1>
        <p class="subtitle">Premium Supplements To Boost Your Training</p>
    </section>
    <section class="categories">
        <h2>Categories</h2>
        <div class="cat-container">
            <div class="cat-box"><i class="ri-barbell-fill"></i> Protein</div>
            <div class="cat-box"><i class="ri-fire-fill"></i> Pre Workout</div>
            <div class="cat-box"><i class="ri-capsule-fill"></i> Creatine</div>
            <div class="cat-box"><i class="ri-flask-fill"></i> Amino & BCAA</div>
        </div>
    </section>
    <section class="products">
        <h2>Supplements</h2>
        <div class="product-container">
            <div class="product-box">
                <img src="elite.webp">
                <h3>Elite whey 100% </h3>
                <p>High-quality whey for muscle growth & recovery.</p>
                <span class="price">799 DH</span>
                <a href="https://www.fitnutrition.ma/elite-100-whey-907g/" class="buy">Buy Now</a>
            </div>
            <div class="product-box">
                <img src="creatine.webp">
                <h3>Creatine Monohydrate 500gr</h3>
                <p>Increase power, strength & performance.</p>
                <span class="price">549 DH</span>
                <a href="#" class="buy">Buy Now</a>
            </div>
            <div class="product-box">
                <img src="c4.webp">
                <h3>C4 Original pré workout 30 Serving</h3>
                <p>Explosive energy & powerful pump.</p>
                <span class="price">300 DH</span>
                <a href="#" class="buy">Buy Now</a>
            </div>
            <div class="product-box">
                <img src="BCAA-GLUTAMINE-XPRESS-min-1.webp">
                <h3>BCAA + GLUTAMINE XPRESS</h3>
                <p>Improve recovery & endurance.</p>
                <span class="price">299 DH</span>
                <a href="#" class="buy">Buy Now</a>
            </div>
            <div class="product-box">
                <img src="mass3.webp">
                <h3>Critical Mass 2.4 KG Applied Nutrition</h3>
                <p>Gain weight and muscle fast.</p>
                <span class="price">899 DH</span>
                <a href="#" class="buy">Buy Now</a>
            </div>
            <div class="product-box">
                <img src="omega3.webp">
                <h3>Omega-3 100 softgels</h3>
                <p>Supports heart, joints & recovery.</p>
                <span class="price">239 DH</span>
                <a href="#" class="buy">Buy Now</a>
            </div>
        </div>
    </section>
    <section class="offers">
        <h2>Best Offers</h2>
        <div class="offer-box">
            <img src="pack-a.webp">
            <div class="offer-text">
                <h3>🔥 Mega Muscle Pack</h3>
                <p>Whey Protein + Creatine + BCAA</p>
                <span class="offer-price">Only 1200 DH</span>
                <a href="#" class="buy">Get Offer</a>
            </div>
        </div>
    </section>
</body>
</html>
