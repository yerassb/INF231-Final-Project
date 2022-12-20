<?php
    require_once 'php/connect.php';
    
    session_start();

    unset($_SESSION['user']);

    header('Location: index.php');

?>