<?php

    if(!isset($_POST['username']) && !isset($_POST['pass'])){
        header('location:/login');
    }

    require_once __DIR__ . '/../model/Login.php';

    $user = $_POST['username'];
    $pass = $_POST['pass'];

    session_start();

    if(Login::connect($user, $pass)){
        $_SESSION['user'] = 'true';
        header('location:/cpanel');
    }
    else{
        $_SESSION['user'] = 'false';
        header('location:/login');
    }




