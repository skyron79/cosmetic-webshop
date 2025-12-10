<?php

include_once(__DIR__ . "/data.inc.php");

 $id = $_GET['id'];
  
  if(!is_numeric($id)){
    exit("Try Again");
  }

  $item = $collection[$id];




?>
<style>
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
  width: 33%;
  margin:auto;
}
.product-priceing{
  width: 40%;
  margin:auto;
}
.product-priceing h1{
  padding:20px;
}
.product-priceing h2{
  margin:20px;
}
.price{
  display:flex;
}
.product-description{

}


.product-image{
  text-align: center;
  height: 100%;
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
        <h1><?php echo ($item['name']); ?></h1>
        <h2> <?php echo ($item['price']) ?></h2>
      </div>
       
        <h2> Use case</h2>
        <p> <?php echo($item['category'])?> </p>
        <button class='add-btn'>add to cart</button>
    </section>

    <section class= 'product-image'>
    <img src="<?php echo $item['image']; ?>" alt="">
    </section>

    <section class='product-info'>
      <div class='product-description'>
        <h2>Description</h2>
        <p><?php echo $item['description'] ?></p>
      </div>
      <div class='product-ingredients'>
        <h2>Ingredients</h2>
        <?php foreach ($item['ingredients'] as $ingredient): ?>
        <p><?php echo htmlspecialchars($ingredient); ?></p>
        <?php endforeach; ?> 
      </div>
      <div><h2>Reviews</h2></div>
    </section>

  </div>
</body>
</html>

