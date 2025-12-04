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
   margin-top: 12rem;
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

    <section class='details'>
        <h1><?php echo ($item['name']); ?></h1>
    </section>
</body>
</html>