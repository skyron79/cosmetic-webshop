<?php
include_once __DIR__ . "/classes/ProductRepository.php";
include_once __DIR__ . "/classes/Reviews.php";

$productRepo= new ProductRepository();

  if(!isset($_GET['id'])||!is_numeric($_GET['id'])){
   die("invalid product ID");
  }
  
  $id = $_GET['id'];

  $product = $productRepo->getById($id);

  if (!$product) {
    die("Product not found");
}
?>
<style>
  h1{
    font-size: 2rem;
    color: #64230d;
  }
  .details{
   margin-top: 10rem;
   display: flex;
    justify-content: center;
   gap:30px;
   
  }
  .product-image img{
    height:100%;
  }
  .add-btn{
      
        width: 60%;
        margin: 20%;
        background-color: transparent;
        padding: 5px;
        border: 2px solid #ef7d25ff;
        border-radius: 1vw;
        color: #ef7d25ff;
        cursor: pointer;
        text-align:center;
  }
  .add-btn:hover{
        background-color:#ef7d25ff;
        color: white;
        transition: 0.5s;
  }
  .product-info{
  width: 50%;
  margin: 2rem;
  }
  .product-priceing{
    text-align:center;
    width: 50%;
    margin: 2rem;
  }
  .product-priceing h1{
  padding:20px;
  }
  .product-priceing h2{
  margin:20px;
  }
  .product-image{
    text-align: center;
    height: 100%;
  } 
  .product-description, .product-ingredients{
    margin-bottom: 20px;
  }
  .product-reviews{
    margin-top: 5rem;
    padding: 2rem;
  }
  #review{
        border: none;
        border-bottom: 1px solid #64230d;
        width: 70%;
        display: block;
        margin-bottom: 20px;
  }
  .review-form{
    display:flex;
    flex-direction: column;
    align-items: center;
  }
  .review-form input[type="submit"] {
        background: linear-gradient(currentColor 0 0) 
        bottom left/
        var(--underline-width, 0%) 0.1em
        no-repeat;
        font-size: larger;
        transition: 0.5s; 
        border: none;
        margin: 33px;
    }
  .review-form input[type="submit"]:hover {
        color: #FF802C !important;
        --underline-width: 100%;
    }
  .date{
      font-size: 0.8rem;
      color: #ff802c7e;
    } 
  .username{
      padding-bottom: 0.5rem; ;
    }

    .submit-button{
        width: 20%;
        text-align: center;
        background-color: transparent;
        padding: 5px;
        border: 2px solid #ef7d25ff;
        border-radius: 1vw;
        color: #ef7d25ff;;
        cursor: pointer;
        text-decoration: none;
    }

    .submit-button:hover {
        background-color:#ef7d25ff;
        color: white;
        transition: 0.5s;
    }
  textarea{
    resize: none;
  }  

</style>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   <title>malukayi cosmetics</title>
   
</head>
<body>
  <header>
    <?php include 'navbar.php';?>
  </header>
  <div class="details">
  
    <section class="product-priceing">
      <div class="price">
        <h2><?php echo $product->getName(); ?></h2>
        <h2> <?php echo $product->getPrice(); ?> €</h2>
      </div>
        <button class='add-btn' data-productid="<?= (int)$id ?>">add to cart</button>
    </section>

    <section class= 'product-image'>
      <img src="https://picsum.photos/200/300" alt="">
    </section>

    <section class='product-info'>
      <div class='product-description'>
        <h2>Description</h2>
        <p><?php echo $product->getDescription(); ?></p>
      </div>
      <div class='product-ingredients'>
        <h2>Ingredients</h2>
        <?php foreach (explode(',', $product->getIngredients()) as $ingredient): ?>
        <p><?php echo htmlspecialchars($ingredient); ?></p>
        <?php endforeach; ?> 
      </div>
    </section>

  </div>
    <section class='product-reviews'>

       <div class="review-form"> 
          <label for="review">Write a review:</label><br>
          <textarea id="review" name="review" ></textarea>


          <a  href="#" 
              class="submit-button" 
              id="submit-review" 
              data-productid="<?= (int)$id ?>">Submit
          </a>
       </div>


       <div id="reviews"></div>
       

    </section>
  
</body>
<script src="app.js"></script>
</html>

