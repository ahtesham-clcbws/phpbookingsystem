<?php

function getPlacesList($api)
{
    $data = $api . '/api/properties/read.php';
    $ch = curl_init($data);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($ch);
    return json_decode($response);
}

function getPlace($post, $api)
{
    $data =  $api . '/api/properties/readSingle.php';
    $ch = curl_init($data);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($ch);
    return $response;
}

function getURL()
{
    return explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
}

function seperateData($data)
{
    return explode(",", $data);
}

function searchPlace($data, $api){
    
    $daterange = explode(" to ", $data['daterange']);

    $get['checkin'] = $daterange[0];
    $get['checkout'] = $daterange[1];
    $get['location'] = $data['location'];
    $get['adults'] = $data['persons']["'adults'"];
    $get['children'] = $data['persons']["'children'"];
    $get['infants'] = $data['persons']["'infants'"];
    $get['guests'] = $data['persons']["'guests'"];
    $get['totalguests'] = $data['persons']["'totalguests'"];

    $url =  $api . '/api/properties/search.php';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $get);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($ch);
    return $response;
}

function userLogin($api, $login)
{
    $url = $api.'/api/auth/user.login.php';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $login);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($ch);
    // $aaaa = json_decode($response);
    // $decoded['userdata'] = array($aaaa);
    return $response;
}

function checkSession() {
    $sId = session_id();
    if (isset($session_object) && $session_object = $_SESSION[$sId]) {
        return $session_object;
    } elseif (!isset($session_object) || $session_object != $_SESSION[$sId]) {
        // MATCH SESSION WITH DATABASE SESSION
        // $_SESSION[$sId]['sessionInfo'][
            // ['id]
            // ['sessionID']
            // ['createdAt']
        // ]

    }
}