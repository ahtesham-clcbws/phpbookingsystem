<?php

$route = getURL();

if(!isset($route[1])){
    require 'hosting/dashboard.php';
}elseif(isset($_SESSION['login']) && $route[1] == 'calendar'){
    require 'hosting/calendar.php';
}