<?php

function getPlacesList()
{
    $data = 'http://localhost:8080/api/properties/read.php';
        $ch = curl_init($data);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
        $response = curl_exec($ch);
        return json_decode($response);
}

function seperateData($data)
{
    return explode(",", $data);
}

function searchList($get)
{
    if ($get) {
        $data = 'http://localhost:8080/api/business/search.php?p=1&c=1&q=day&rating=0&p=1&limit=2';
    } else {
        $data = 'http://localhost:8080/api/business/search.php';
    }
    return file_get_contents($data);
}

function categoryList()
{
    $data = 'http://localhost:8080/api/business/category.php';
    return file_get_contents($data);
}

function userLogin($login)
{
    $url = 'http://localhost:8080/api/login.php';
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