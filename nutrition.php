
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrition Programs - ISOGYM</title>
    <link rel="stylesheet" href="nutrition.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
  
<?php
$path = dirname(__FILE__) . '/navbar.php';
require $path;
?>

    <section class="nutrition-section">
        <div class="nutrition-header">
            <h1>Nutrition Programs</h1>
            <p>Healthy meal plans to complement your fitness journey</p>
        </div>
        <div class="nutrition-container">
            <div class="nutrition-card">
                <h2>Muscle Gain Nutrition</h2>
                <h3>High Protein</h3>
                <ul>
                    <li>Breakfast: Oats + Eggs</li>
                    <li>Lunch: Chicken + Brown Rice</li>
                    <li>Snack: Whey Shake + Almonds</li>
                    <li>Dinner: Salmon + Vegetables</li>
                </ul>
                <a href="https://files.verywellfit.com/meal-plans/Muscle-Gain-Meal-Plan.pdf" class="nutrition-btn">Download Plan</a>
            </div>
            <div class="nutrition-card">
                <h2>Fat Loss Nutrition</h2>
                <h3>Low Carb</h3>
                <ul>
                    <li>Breakfast: Egg Whites + Spinach</li>
                    <li>Lunch: Tuna Salad</li>
                    <li>Snack: Greek Yogurt</li>
                    <li>Dinner: Grilled Chicken + Veggies</li>
                </ul>
                <a href="#" class="nutrition-btn">Download Plan</a>
            </div>
            <div class="nutrition-card">
                <h2>Strength Nutrition</h2>
                <h3>Balanced Macros</h3>
                <ul>
                    <li>Breakfast: Protein Pancakes</li>
                    <li>Lunch: Beef + Quinoa</li>
                    <li>Snack: Protein Shake</li>
                    <li>Dinner: Chicken + Sweet Potato</li>
                </ul>
                <a href="#" class="nutrition-btn">Download Plan</a>
            </div>
            <div class="nutrition-card">
                <h2>Vegan Nutrition</h2>
                <h3>Plant-Based</h3>
                <ul>
                    <li>Breakfast: Smoothie Bowl</li>
                    <li>Lunch: Lentils + Brown Rice</li>
                    <li>Snack: Nuts & Seeds</li>
                    <li>Dinner: Tofu + Vegetables</li>
                </ul>
                <a href="#" class="nutrition-btn">Download Plan</a>
            </div>
        </div>
    </section>
</body>
</html>
