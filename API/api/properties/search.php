<?php

$get = '';

if($_POST){
    $get = $_POST;
}elseif($_GET){
    $get = $_GET;
}

$get['checkin'];
$get['checkout'];
$get['location'];
$get['adults'];
$get['children'];
$get['infants'];
$get['guests'];
$get['totalguests'];
