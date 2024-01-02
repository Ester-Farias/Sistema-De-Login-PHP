<?php
    session_start();
    unset($_SESSION["usuario"]);
    unset($_SESSION["nome"]);
    unset($_SESSION["tipo"]);
    $_SESSION['accessDenied'] = false;
    usleep(50000);
    header("location: index.php");
    exit;


?>