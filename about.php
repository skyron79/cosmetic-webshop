<?php

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
    .brand-section {
        height: 100vh;
        background-image: url('./assets/pictures/brandImage.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: end;
        align-items:center;
        color: white;
        text-align: end;
        font-size: 3rem;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
    
    }

      .brand-text{
       margin-right: 3em;
    }
    .brand-text h1{
        font-size: 150px;
    }
    .category-section{ display: flex; } 
    .upper-container{ width: 100vw; } 
    .lower-container-img{ position: absolute; height:100vh; width: auto; } 
    .lower-text{ position: relative; } 
    .left-div{ width: 100vw; height:100vh; position: absolute; }

    
</style>
<body>
    
    <header>
        <?php include_once(__DIR__ . '/navbar.php'); ?>
    </header>

    <main>
        <section class="brand-section">
        <div class="brand-text">
            <h1 style="color: white;">
               Brand
            </h1>
            <br>
            <p style="color: white;"> for black and lightskins</p>
        </div>
        </section>

        <section class="category-section">

            <div class="upper-container">
                <div class="lower-container">
                    <img class="lower-container-img" src="./assets/pictures/face.jpg" alt="">
                   
                    <div class="lower-text">  

                    <h1 style="color: white;">Categories</h1>
                    <h1 style="color: white;">
                    Brand
                    </h1>
                    <br>
                    <p style="color: white;"> for black and lightskins</p> 
                    </div>
                </div>
            </div>


            <div class="upper-container">
                <div class="lower-container">
                    <img class="lower-container-img" src="./assets/pictures/body.png" alt="">
                    <div class="lower-text">   
                    <h1 style="color: white;">
                    Brand
                    </h1>
                    <br>
                    <p style="color: white;"> for black and lightskins</p> 
                    </div>
                </div>
               
            </div>

            <div class="upper-container"> 
                <div class="lower-container">
                    <img class="lower-container-img" src="./assets/pictures/suki.jpg" alt="">
                    <div class="lower-text">   
                    <h1 style="color: white;">
                    Brand
                    </h1>
                    <br>
                    <p style="color: white;"> for black and lightskins</p> 
                    </div>
                </div>
            </div>

        </section>
    </main>
</body>
</html>