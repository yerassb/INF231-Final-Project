<?php
    require_once 'php/connect.php';

    session_abort();

    header('Location: mainpage.html');

?>