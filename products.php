<?php
include 'navbar.php';
include_once(__DIR__ . '/data.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<title>Product Card</title>
<body>
    <section>
        <h1 style="text-align: center;">our products</h1>

         <div class="products-container">
          <?php foreach ($collection as $key => $product): ?>
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
</body>
</html>