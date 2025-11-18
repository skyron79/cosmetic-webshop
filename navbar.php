
<?php
$current_page = basename($_SERVER['PHP_SELF']);
echo $current_page;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <script src="https://kit.fontawesome.com/9fe4bfcebd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav nav class="navbar-container">
        <div class="logo-container">
            <img class="logo" src="./assets/pictures/images.jpg" alt="">
        </div>
        <br>
        <hr>
        <div class="links-container">
          <ul class="navbar">
            <li><a href="./index.php" class="<?= $current_page === 'index.php' ? 'active' : '' ?>">Home</a></li>
            <li><a href="./about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About</a></li>
            <li><a href="./products.php" class="<?= $current_page == 'products.php' ? 'active' : '' ?>">Products</a></li>
            <li><a href="./search.php" class="<?= $current_page == 'search.php' ? 'active' : '' ?>">Search</a></li>
         </ul>

        <div>
            <ul class="icons">
               <button><i class="fa-solid fa-circle-user"></i></button>
               <button><i class="fa-solid fa-heart"></i></button>
               <button><i class="fa-solid fa-cart-shopping"></i></button>
            </ul>
        </div>
        </div>
    </nav>
</body>
</html>