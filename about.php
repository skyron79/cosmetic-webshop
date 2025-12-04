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
/**first section */
    .brand-section {
        height: 100vh;
        background-image: url('./assets/pictures/brandImage.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: start;
        align-items:center;
        color: white;
        text-align: start;
        letter-spacing: 2px;
    }
      .brand-text{
       margin-left: 3em;
    }
    .brand-text h1{
        text-transform: uppercase;
        font-size: 100px;
    }

/**second section */
    .category-section{ 
        display: flex; 
    } 
    .upper-container{ 
        width: 100vw; 
    } 
    .lower-container-img{ 
        position: absolute; 
        height:100vh; 
        width: auto; 
    } 
    .lower-text{ 
        position: relative; 
    } 
    .left-div{ 
        width: 100vw; 
        height:100vh; 
        position: absolute; 
    }
    .categories{
        height:100vh;
        position: relative;
    }
    .text-container{
        padding-top: 60%;
    }
    .text-container h2{
     text-transform: uppercase;
     writing-mode: vertical-rl;
    font-size: 50px;
    }
    .text-container p  {

        margin:2em;
    }   
    
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
            <p style="color: white; width:50%;"> Malukayi Cosmetics is a skincare brand created for every shade of beauty — from the lightest tones to the deepest complexions. We believe that true skincare begins with nature, which is why our formulas are powered by pure, high-quality ingredients, including botanicals sourced straight from the heart of Africa. 
                Our mission is simple: to deliver effective, gentle, and authentic skincare that celebrates diversity and empowers confidence. With Malukayi Cosmetics, you don’t just treat your skin — you honor it.</p>
        </div>
        </section>

        <section class="categories">
         <div class="category-section">

          
            <div class="upper-container">
                <div class="lower-container">
                    <img class="lower-container-img" src="./assets/pictures/face.jpg" alt="">
                    <div class="lower-text">  
                    <div class='text-container'>
                        <h2 style="color: white;">
                        Elongi
                        </h2>
                        <br>
                        <p style="color: white;"> ELONGI is your go-to for balanced facial care, powered by clean ingredients that brighten, 
                            smooth, and revitalize all skin tones. Gentle, effective, and deeply nourishing.</p>  
                        </div>
                    </div>
                </div>
            </div>

            <div class="upper-container">
                <div class="lower-container">
                    <img class="lower-container-img" src="./assets/pictures/body.png" alt="">
                    <div class="lower-text"> 
                        <div class='text-container'>
                            <h2 style="color: white;">
                                Nzoto
                            </h2>
                            <br>
                            <p style="color: white;"> NZOTO brings you rich, natural body care infused with African botanicals that hydrate, 
                                protect, and restore your skin’s natural glow. For softness you can feel and confidence that radiates.</p>  
                        </div>
                    </div>  
                </div>
            </div>

            <div class="upper-container"> 
                <div class="lower-container">
                    <img class="lower-container-img" src="./assets/pictures/suki.jpg" alt="">
                    <div class="lower-text">   
                        <div class='text-container'>
                            <h2 style="color: white;">  
                            Suki
                            </h2>
                            <br>
                            <br>
                            <br>
                            <p style="color: white;"> SUKI offers gentle, nutrient-packed hair care designed to boost growth, enhance shine, and keep every strand healthy — whether curly, 
                                coily, wavy, or straight. Pure care for every texture.</p> 
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
</body>
</html>