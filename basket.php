<?php
    require_once 'php/connect.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mainfont.css">
    <link rel="stylesheet" href="css/basket.css">
    <title>Basket</title>
</head>
<body>
    <div class = "header">
        <a href="mainpage.html" style="font-size: 1.4em">DM Home</a>
        <div class="menu">
            <a href="categories.php">Categories</a>
            <a href="brands.html">Brands</a>
            <a href="catalogue.html">Catalogue</a>
            <a href="about.html">About</a>
            <a href="library.html">Library</a>
        </div>
        <div class="headerbtns">
            <?php 
                if(array_key_exists('user', $_SESSION)){
                    echo "<a href=\"Basket.php\">Basket</a>";
                    echo "<a href=\"logout.php\">Log Out</a>";
                } 
                else{
                    echo "<a href=\"signup.html\">Log In</a>";
                }
            ?>
        </div>
    </div>
    <div class="main">
        <div class="text"><h2>Your Basket</h2></div>
        <div class="content">
            
        </div>
    </div>
</body>
</html>