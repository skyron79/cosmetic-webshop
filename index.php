<?php
include_once(__DIR__ . '/data.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>malukayi cosmetics</title>
</head>

<style>
    .hero-section {
        height: 100vh;
        background-image: url('./assets/pictures/homepageImg.png');
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: start;
        align-items:center;
        color: white;
        text-align: start;
        letter-spacing: 2px;
    
    }
    .hero-section div{
        margin-left: 3em;
        text-align: start;
        width: 40%;
    }
    .hero-section h1{
        font-size: 80px;
    }
    .best-sellers-container{
        height: 100vh;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
    }
</style>

<body>
<section>
    <header>
        <?php include_once(__DIR__ . '/navbar.php'); ?>
    </header>
    <main>
        <section class="hero-section">
        <div>
            <h1>
                Glow in Your True Shade.
            </h1>
            <p>Nature-powered skincare crafted for every skin tone — clean, inclusive, and enriched with African botanicals. 
                Discover the beauty of balance with Malukayi Cosmetics.</p>
        </div>
        </section>

        <section class="best-sellers-container">

            <div class="best-sellers">   
                <h2 style="text-align: center; margin-top: 50px; color: #64230d;">Best Sellers</h2>
                <div class="products-container">
                <?php 
                    $count=0;
                    foreach ($collection as $key => $product ): 
                        if($count >= 4) break ;
                    $count++;
                 ?>
                
                    <a class="product-link" href="details.php?id=<?php echo $key; ?>">
                    <div class="product-card">
                    <img src="<?php echo $product['image']; ?>" alt="Product Image" class="product-image" />
                    <div class="product-info">
                    <h2 class="product-title"><?php echo $product['name']; ?></h2>
                    <p class="product-desc"><?php echo $product['description']; ?></p>
                    <div class="product-price">€<?php echo $product['price']; ?></div>
                    <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                    </div>
                    </a>
                <?php endforeach; ?>
            </div>   
        </section>
    </main>

   
    




</body>
</html>