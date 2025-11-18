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
  <style>
    *{
      overflow-x: hidden;
    }
   a{
    font-family: poppins, sans-serif;
    text-decoration: none;
   }

   .products-container{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 20px;
   }

    .product-card {
        
      margin: 20px;
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 300px;
      transition: transform 0.2s ease;
    
    }

    .product-card:hover {
      transform: translateY(-5px);
    }

    .product-image {
      width: 100%;
      height: 220px;
      object-fit: cover;
    }

    .product-info {
      padding: 16px;
    }

    .product-title {
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 8px;
      color: #111827;
    }

    .product-desc {
      font-size: 0.9rem;
      color: #6b7280;
      margin-bottom: 12px;
    }

    .product-price {
      font-size: 1.1rem;
      font-weight: 500;
      color: #10b981;
      margin-bottom: 16px;
    }

    .buy-btn {
      display: inline-block;
      background: #3b82f6;
      color: #fff;
      text-decoration: none;
      padding: 10px 16px;
      border-radius: 8px;
      font-size: 0.95rem;
     transition: background 0.3s ease;
    }

    .buy-btn:hover {
      background: #2563eb;
    }
  </style>
<body>
    <section>
        <h1 style="text-align: center;">our products</h1>
         <div class="products-container">
          <?php foreach ($colletion as $key => $product): ?>
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