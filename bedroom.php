<?php
    require_once 'php/connect.php';

    session_start();

    $_SESSION['prevpage'] = 'bedroom.php';

    $q = mysqli_query($connect, "SELECT * FROM ITEMS WHERE Item_Category = 'bedroom';");

    // echo mysqli_num_rows($q) . "\r\n";

    $items = array();

    while($row=mysqli_fetch_array($q)){
        $items[] = $row;
    }
    // echo $items[0]['Item_ID'];
    // echo $items[0]['Item_Name'];
    // echo $items[1]['Item_ID'];
    // echo $items[1]['Item_Name'];
    // echo $items[0]["Item_Image"];
    // echo print_r($items);
    // $mobilesStr = implode(',', $items);
    // echo $mobilesStr;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bedroom.css">
    <link rel="stylesheet" href="css/mainfont.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>For bedroom</title>
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
        <div class="intro">
            <h2>Our best furniture for your bedroom: </h2>
        </div>
        <div class="content">
            <?php 
                for ($x = 0; $x < sizeof($items); $x++) {
                echo "
                    <div class=\"card\" id = \"" . $x . "\">
                        <img class=\"item_img\" src=\"" . $items[$x]['Item_Image'] . "\" alt=\"item_img\">
                        <p class=\"item_name\">" . $items[$x]['Item_Name'] . "</p>
                        <p class=\"item_price\">" . $items[$x]['Item_Price']. "</p>
                        <button class=\"tobasket\">Basket</button>
                    </div>
                ";
                }
            ?>
        </div>
    </div>
</body>
</html>