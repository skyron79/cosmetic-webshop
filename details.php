<?php
include 'navbar.php';
include_once(__DIR__ . "/data.inc.php");

 $id = $_GET['id'];
  
  if(!is_numeric($id)){
    exit("Try Again");
  }

  $item = $collection[$id];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1><?php echo ($item['name']); ?></h1>
</body>
</html>