<?php

// session_destroy();
// session_start();
// $sid = session_id();

// $data['username'] = 'ahtesham';
// $data['email'] = 'ahtesham@mail.com';
// $data['password'] = '23988725';

// $a['userdata'] = $data;

// $_SESSION[$sid] = $a;

// print_r(json_encode($_SESSION));

// die();
$route = getURL();

if(isset($_SESSION['login']) && !isset($route[1])){
    require 'hosting/dashboard.php';
}elseif(isset($_SESSION['login']) && $route[1] == 'calendar'){
    require 'hosting/calendar.php';
}else{
    header('location: /');
}
