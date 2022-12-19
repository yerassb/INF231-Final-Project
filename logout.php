<?php
    require_once 'php/connect.php';
    
    session_start();
    session_reset();

    header('Location: mainpage.html');

?>