<?php
include_once(__DIR__ . "/classes/Productrepository.php");
// include_once(__DIR__. 'data.inc.php');

$productrepo = new ProductRepository();
$products = $productrepo->getAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>malukayi cosmetics</title>
</head>

<style>
    .body-products{
         margin-top: 12rem;
    }
</style>

<title>Product Card</title>
<body>
  
    <header>
        <?php include_once(__DIR__ . '/navbar.php'); ?>
    </header>
    <main class='body-products'>
        <!-- <section>
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
        </section> -->

        <section>
        <h1 style="text-align: center;">Our products</h1>

        <div class="products-container">
            <?php foreach ($products as $product): ?>
                <a class="product-link" href="details.php">
                    <div class="product-card">

                        <div class="product-info">
                            <h2 class="product-title">
                                <?= htmlspecialchars($product->getName()); ?>
                            </h2>

                            <p class="product-desc">
                                <?= htmlspecialchars($product->getDescription()); ?>
                            </p>

                            <div class="product-price">
                                €<?= number_format($product->getPrice(), 2); ?>
                            </div>

                            <span class="buy-btn">Buy Now</span>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </section>


    </main>
</body>
</html>