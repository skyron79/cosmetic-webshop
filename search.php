<?php
include_once(__DIR__ . "/classes/Productrepository.php");
$productrepo = new ProductRepository();


if (!empty($_GET['search'])) {
    $products = $productrepo->searchByName($_GET['search']);
 
   
} else {
    $products = [];
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
    .search-form{
        display: flex;
        justify-content: center;
        width: 100%;

    }
    .search-form input{
        padding: 10px;
        border: none;
        border-bottom: 2px solid #64230d;
        width: 70%;
        display: block;
        margin-bottom: 50px;

    }
    .search-form button {
        background: linear-gradient(currentColor 0 0) 
        bottom left/
        var(--underline-width, 0%) 0.1em
        no-repeat;
        font-size: larger;
        transition: 0.5s; 
        border: none;
        margin: 33px;
    }
    .search-form button:hover {
        color: #FF802C !important;
        --underline-width: 100%;
    }

    .body-products{
         margin-top: 12rem;
    }

</style>


<body>
    <header>
        <?php include_once(__DIR__ . '/navbar.php'); ?>
    </header>

 <main class='body-products'>

    <section>
        <form class="search-form" action="" method="GET">
            <input 
                type="text" 
                name="search" 
                placeholder="Search..."
                value="<?php echo $_GET['search'] ?? ''; ?>" >
            <button type="submit">Search</button>
        </form>
    </section>

    <section>
        <div class="products-container">
            <?php if (empty($products)): ?>
            <p style="text-align:center;">No products found</p>
            <?php endif; ?>

            <?php foreach ($products as $product ): ?>
                <a class="product-link"href="details.php?id=<?php echo $product->getId(); ?>">
                <div class="product-card">
                <img 
                    src="https://picsum.photos/200/300" 
                    alt="Product Image"
                    class="product-image"
                />

                <div class="product-info">
                    <h2 class="product-title">
                        <?php echo $product->getName(); ?>
                    </h2>

                    <p class="product-desc">
                        <?php echo $product->getDescription(); ?>
                    </p>

                    <div class="product-price">
                        € <?php echo number_format($product->getPrice(), 2); ?>
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