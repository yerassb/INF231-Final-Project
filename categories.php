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
    <?php include('header.php'); ?>
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
        
    </div>
    <?php include('footer.php'); ?>
</body>
</html>