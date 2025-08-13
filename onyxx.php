<?php
// PHP code to handle dynamic content (like iPhone model and price)
$product_name = "iPhone 14 Pro";
$product_price = "$999";
$product_description = "The latest iPhone with cutting-edge features like a 48MP camera, Dynamic Island, and A16 Bionic chip.";
$cta_text = "Buy Now";
$cta_link = "#cta";
$learn_more_text = "Learn More";
$learn_more_link = "#features";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the new iPhone 14 Pro with amazing features.">
    <title>Buy <?php echo $product_name; ?></title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <h1><?php echo $product_name; ?></h1>
            <p class="price"><?php echo $product_price; ?></p>
            <p class="description"><?php echo $product_description; ?></p>
            <a href="<?php echo $cta_link; ?>" class="cta-button"><?php echo $cta_text; ?></a>
            <a href="<?php echo $learn_more_link; ?>" class="learn-more"><?php echo $learn_more_text; ?></a>
        </div>
    </header>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <h2>Key Features</h2>
            <ul>
                <li>48MP Camera</li>
                <li>A16 Bionic Chip</li>
                <li>Dynamic Island</li>
                <li>Super Retina XDR Display</li>
                <li>5G Connectivity</li>
            </ul>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta" id="cta">
        <div class="container">
            <h2>Ready to Upgrade?</h2>
            <p>Get your iPhone 14 Pro now and enjoy the future of mobile technology!</p>
            <a href="https://www.apple.com" class="cta-button">Buy Now</a>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Your Company | All rights reserved</p>
        </div>
    </footer>

</body>
</html>
