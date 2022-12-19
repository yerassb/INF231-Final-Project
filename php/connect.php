<?php
    $connect = mysqli_connect('localhost', 'root', 'UltraHardParol2004', 'frontendfinal');
    
    // mysqli_query($connect, "INSERT INTO USERS VALUES ('cooluser', 'email@outlook.co', 'mypassword', 'male');");
    if(!$connect){
        die("Connection failed");
    }
    // echo "Connected~\n";
?>