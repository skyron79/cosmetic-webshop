<?php

$current_page = basename($_SERVER['PHP_SELF']);
include_once(__DIR__ . "/classes/Productrepository.php");
include_once(__DIR__ . "/classes/Categories.php");
// include_once(__DIR__. 'data.inc.php');

$productrepo = new ProductRepository();
$products = $productrepo->getAll();
$categories = new Categories();
$categoriesList = $categories->getAllCategories();

if (isset($_GET['category_id'])) {
    $categoryId = $_GET['category_id'];
    // Filter products by category ID
    // Assuming you have a method in ProductRepository to get products by category
    $products = $productrepo->filterByCategory($categoryId);
}


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
    
    .categories-container{
        display: flex;
        gap: 1rem;
        justify-content: center;
        margin-bottom: 2rem;
        margin-top: 2rem;

    }

    .categories-container a{
        text-decoration: none;
        color: black;
    }
    .categories-container a:hover, .categories-container a.active{
        color: #ef7d25ff;
        font-weight: bold;
        transition: 0.3s;
    }
    
    .category-title h1{
        color: #ef7d25ff;
        margin-bottom: 1rem;
        text-align: start;
        padding-left: 2rem;
        font-size: 2rem;
    }

    
</style>

<title>Product Card</title>
<body>
  
    <header>
        <?php include_once(__DIR__ . '/navbar.php'); ?>
    </header>
    <main class='body-products'>


        <section>
            <h1 style="text-align: center;">Our products</h1>
            

            <div class="categories-container">
                <a href="products.php"><h2>All</h2></a>
                <?php foreach ($categoriesList as $category): ?>
                    <a class="category-link" href="products.php?category_id=<?php echo $category['id']; ?>">
                        <div class="category-card"> 
                            <h2 class="category-name">
                                <?= htmlspecialchars($category['category_name']); ?>
                            </h2>
                        </div>
                    </a>
                <?php endforeach; ?>

            </div>

            <div class="category-title">
                <hr style="width: 20%; border: 2px solid #ef7d25ff; margin-bottom: 2rem;">
                <?php
                if (isset($categoryId)) {
                    $categoryName = '';
                    foreach ($categoriesList as $category) {
                        if ($category['id'] == $categoryId) {
                            $categoryName = $category['category_name'];
                            break;
                        }
                    }
                    echo "<h1 > " . htmlspecialchars($categoryName) . "</h1>";
                } else {
                    echo "<h1>All Products</h1>";
                }
                ?>
            </div>
        
         <div class="products-container">
            <?php foreach ($products as $product): ?>
                <a class="product-link" href="details.php?id=<?php  echo $product->getId();  ?>">
                    <div class="product-card">
                        <img src="https://picsum.photos/200/300" alt="Product Image" class="product-image" />

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