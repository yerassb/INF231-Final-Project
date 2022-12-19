<?php
    session_start();
    require_once 'php/connect.php';
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
    <?php include ('header.php'); ?>
    <div class="main">
        <div class="text"><h2>Your Basket</h2></div>
        <div class="content">
            <?php 
                if(!array_key_exists('user', $_SESSION)){
                    header("Location: login.html");
                }
                $q = mysqli_query($connect, "SELECT item_ID FROM BASKET WHERE username = '" . $_SESSION['user'] . "';");
                if(mysqli_num_rows($q) > 0){
                    $ids = array();

                    while($row=mysqli_fetch_array($q)){
                        $ids[] = $row;
                    }
                    
                    for ($x = 0; $x < sizeof($ids); $x++) {
                        // echo $ids[0]['item_ID'];
                        // echo $ids[1]['item_ID'];
                        $qs = mysqli_query($connect, "SELECT * FROM ITEMS WHERE Item_ID = " . $ids[$x]['item_ID'] . "; ");
                        
                        $item = mysqli_fetch_array($qs);
                        
                        echo "
                        <div class=\"cart-item\">
                            <img class=\"item-img\" src=\"" . $item["Item_Image"] . "\" alt=\"\">
                            <div class=\"name\">" . $item["Item_Name"] . "</div>
                            <div class=\"price\">" . $item["Item_Price"] . "</div>
                        </div>    
                        ";
                    }
                    
                }
                
                else{
                    echo "Your basket is empty";
                }
            ?>
        </div>
    </div>
</body>
</html>