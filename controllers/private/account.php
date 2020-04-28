<?php

$route = getURL();

if(isset($_SESSION['login']) && $route[1] == 'hostplace'){
    require 'account/host/host-property.php';
}elseif(isset($_SESSION['login']) && $route[1] == 'hosting'){
    require 'account/host/dashboard.php';
}