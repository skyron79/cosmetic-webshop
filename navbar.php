

<!DOCTYPE html>
<html lang="en">
<head>
   <script src="https://kit.fontawesome.com/9fe4bfcebd.js" crossorigin="anonymous"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
a{
    text-decoration: none; 

     
 }
.logo-container{
    display: flex;
    justify-content: space-between;
    align-items: center;
     padding: 10px 20px;
    }

.sign-in, .sign-up {
        width: 120px;
        margin: 0 5px;
        background-color: transparent;
        padding: 5px;
        border: 2px solid #64230d; ;
        border-radius: 1vw;
        color: #64230d;;
        cursor: pointer;
}

.sign-in:hover, .sign-up:hover {
    background-color:#64230d;
        color: white;
        transition: 0.5s;
}
.icons{
    list-style: none;
    display: flex;
    gap: 20px;
}
</style>

<body>
    <nav nav class="navbar-container">
        <div class="logo-container">
            <img class="logo" src="./assets/pictures/images.jpg" alt="">

            <div class="sign-in-up">
               <a href="./login.php"> <button class="sign-in">Log In</button></a>
                <a href="./signup.php"><button class="sign-up">Sign Up</button></a>
            </div>
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
               <button class="icons"><i class="fa-solid fa-circle-user"></i></button>
               <button class="icons"><i class="fa-solid fa-heart"></i></button>
               <button class="icons"><i class="fa-solid fa-cart-shopping"></i></button>
            </ul>
        </div>
        </div>
    </nav>
</body>
</html> 