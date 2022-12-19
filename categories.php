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
    <link rel="stylesheet" href="css/categories.css">
    <title>Categories</title>
</head>
<body>
    <div class = "header">
        <a href="mainpage.html" style="font-size: 1.4em">DM Home</a>
        <div class="menu">
            <a href="categories.html">Categories</a>
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
        <a href="kitchen.php">
            <div class="kitchen" >
                <h2>KITCHEN</h2>
            </div>
        </a>
        <a href="bedroom.php">
            <div class="bedroom">
                <h2>BEDROOM</h2>
            </div>
        </a>
        <a href="kidsroom.php">
            <div class="kids-room">
                <h2>CHILDREN'S ROOM</h2>
            </div>
        </a>
        <a href="diningroom.php">
            <div class="dining-room">
                <h2>DINING ROOM</h2>
            </div>
        </a>
    </div>
</body>
</html>