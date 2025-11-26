<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<style>
    .search-form{
        display: flex;
        justify-content: center;
        width: 100%;

    }
    .search-form input{
        padding: 10px;
        border: none;
        border-bottom: 2px solid #64230d;
        width: 70%;
        display: block;
        margin-bottom: 50px;

    }
    .search-form button {
        background: linear-gradient(currentColor 0 0) 
        bottom left/
        var(--underline-width, 0%) 0.1em
        no-repeat;
        font-size: larger;
        transition: 0.5s; 
        border: none;
        margin: 33px;
    }
    .search-form button:hover {
        color: #FF802C !important;
        --underline-width: 100%;
    }

</style>
<body>
    <section>
        <form class="search-form" action="" method="post">
            <input type="text" name="search" placeholder="Search...">
            <button type="submit">Search</button>
        </form>

        
    </section>
</body>
</html>