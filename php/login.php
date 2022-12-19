<?php
    require_once("connect.php");

    session_start();

    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    if($username != preg_replace("/[^A-Za-z0-9 ]/", '', $username)){
        header("Location: ../login.html");
    }
    
    $q = mysqli_query($connect, "SELECT * FROM USERS WHERE USERNAME = '$username' AND PASSWORD = '$password';");

    if(mysqli_num_rows($q) > 0){
        echo "Hello $username, welcome";

        $_SESSION['user'] = $username;

        header('Location: ../' .$_SESSION['prevpage']);
    }
    else echo "incorrect login or password";

?>