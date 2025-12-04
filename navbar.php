<?php
session_start();
$current_page = basename($_SERVER['PHP_SELF']);
include_once(__DIR__ . "/classes/customer.php");

$customer = new Customer();

// $logOut = $customer->logout();

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <script src="https://kit.fontawesome.com/9fe4bfcebd.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.navbar{
    list-style: none;
    display: flex;
    gap: 30px;
    justify-content: center;
    align-items: center;
    font-size: 1.2rem;
    font-weight: 500;
}
.navbar li a {
    text-decoration: none;
    color: grey;
    padding: 5px 10px;
    border-radius: 5px;
}

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
        border: 2px solid #ef7d25ff;
        border-radius: 1vw;
        color: #ef7d25ff;;
        cursor: pointer;
}

.sign-in:hover, .sign-up:hover {
        background-color:#ef7d25ff;
        color: white;
        transition: 0.5s;
}
.icons{
    list-style: none;
    display: flex;
    gap: 20px;
}
.navbar-container{
    margin:auto;
    width: 100%;
    padding: 0px 15px;
    font-size: 1.2rem;
    font-weight: 500;
    background:transparent;
    position: absolute;
}

.icons button{
    background-color: transparent;
    border: none;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
}
.login-link {
    color: grey;
}
.login-link:hover {
    color: #ef7d25ff;
    font-weight: bold;
    transition: 0.3s;
}

</style>

<body>
    <div class="container">
    <nav class="navbar-container">
        <div class="logo-container">
              <div>   
                <?php 
                if(isset($_SESSION['username'])){
                    echo "<h2 style=\"color: #ef7d25ff;\">" . $_SESSION['username'] . "</h2>";
                } else {
                    echo "<h2 style=\"color: grey;\">Welcome, guest! Please <a  class=\"login-link\" href='login.php'>log in.</a></h2>";
                }
                ?>
            </div>

            <img class="logo" src="./assets/pictures/images.jpg" alt="">

            <?php
            if(isset($_SESSION['username'])){
                echo "<form action=\"logout.php\" method=\"post\">
                <button class=\"sign-in\">Log Out</button>
                </form>";

            } else {
                echo "<div class=\"sign-in-up\">
                <a href=\"./signup.php\"> <button class=\"sign-up\">Sign Up</button></a>
                </div>";

            } ?>
        </div>
        <hr>

        <div class="links-container">
          <ul class="navbar">
            <li><a href="./index.php" class="<?= $current_page === 'index.php' ? 'active' : '' ?>">Home</a></li>
            <li><a href="./about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About</a></li>
            <li><a href="./products.php" class="<?= $current_page == 'products.php' ? 'active' : '' ?>">Products</a></li>
            <li><a href="./search.php" class="<?= $current_page == 'search.php' ? 'active' : '' ?>">Search</a></li>
         </ul>
        </div>
    </nav>
    </div>
</body>
</html> 