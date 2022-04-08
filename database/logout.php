<?php
    include("../path.php");
    session_start();

    unset($_SESSION['id']);
    unset($_SESSION['permission']);
    unset($_SESSION['email']);
    unset($_SESSION['companyName']);
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);
    unset($_SESSION['message']);
    unset($_SESSION['type']);
    session_destroy();

    header('location: ' . BASE_URL . 'Starter/index.php');
    exit();
?>