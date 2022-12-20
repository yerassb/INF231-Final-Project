<?php
    require_once 'php/connect.php';

    session_start();

    $_SESSION['prevpage'] = 'kitchen.php';

    $q = mysqli_query($connect, "SELECT * FROM ITEMS WHERE Item_Category = 'kitchen';");

    // echo mysqli_num_rows($q) . "\r\n";

    $items = array();

    while($row=mysqli_fetch_array($q)){
        $items[] = $row;
    }

    if(!empty($_GET["action"])){
        switch($_GET["action"]){
            case "add":
                if(array_key_exists('user', $_SESSION)){
                    mysqli_query($connect, "INSERT INTO BASKET VALUES ('" . $_SESSION['user'] .  "', " . $_GET['code'] . ")");       
                }
                else{
                    header("Location: login.html");
                }
            break;
        }
    }
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
    <script src="js/forbasket.js"></script>
    <title>For kitchen</title>
</head>
<body>
    <?php include('header.php'); ?>
    <div class="main">
        <div class="intro">
            <h2>Our best furniture for your kitchen: </h2>
        </div>
        <div class="content">
            <?php 
                for ($x = 0; $x < sizeof($items); $x++) {
                echo "
                    <form action=\"kitchen.php?action=add&code=" . $items[$x]['Item_ID'] . "\" method=\"post\">
                    <div class=\"card\" id = \"" . $x . "\">
                        <img class=\"item_img\" src=\"" . $items[$x]['Item_Image'] . "\" alt=\"item_img\">
                        <p class=\"item_name\">" . $items[$x]['Item_Name'] . "</p>
                        <div class=\"info\">
                            <p class=\"item_size\">" . $items[$x]['Item_Size'] . "</p>
                            <p class=\"item_price\">" . $items[$x]['Item_Price']. "</p>
                        </div>
                        <button class=\"tobasket\" type=\"submit\" value=\"" . $x . "\">Basket</button>
                    </div>
                    </form>
                ";
                }
            ?>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>