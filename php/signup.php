<?php
    session_start();
    require_once "connect.php";

    $username = $_POST['username'];
    
    $check_for_username = mysqli_query($connect, "SELECT * FROM USERS WHERE USERNAME = '$username'");
    
    if(mysqli_num_rows($check_for_username) > 0){
        $_SESSION["error_message"] = "user already exists";
        header("Location: ../signup.html");
    }
    
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $gender = $_POST["gender"];

    echo "username: $username email: $email password: $password gender: $gender";

    $q = mysqli_query($connect, "INSERT INTO users VALUES('$username', '$email', '$password', '$gender');");

    header("Location: ../login.html");
?>