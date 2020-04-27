<?php

// REQUIRED MAIN FUNCTIONS
function checkLogin(){    
    // if (!isset($_SESSION['login'])) {
    //     echo '<script>window.location="/login";</script>';
    // }
}
function getURL()
{
    return explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
}

function userLogin($api, $login)
{
    $url = $api.'/api/admin/login.php';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $login);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($ch);
    return $response;
}

function afterLogin()
{
    'http://localhost:8080/api/login.php'->afterLogin();
}
