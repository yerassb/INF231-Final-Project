<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
<div class = "header">
        <a href="index.php" style="font-size: 1.4em">DM Home</a>
        <div class="menu">
            <a href="categories.php">Categories</a>
            <a href="brands.html">Brands</a>
            <a href="catalogue.php">Catalogue</a>
            <a href="about.php">About</a>
            <a href="library.html">Library</a>
        </div>
        <div class="headerbtns">
            <?php 
                if(array_key_exists('user', $_SESSION)){
                    echo "<a href=\"Basket.php\">Basket</a>";
                    echo "<a href=\"logout.php\">Log Out</a>";
                } 
                else{
                    echo "<a href=\"login.html\">Log In</a>";
                }
            ?>
        </div>
    </div>
</body>
</html>