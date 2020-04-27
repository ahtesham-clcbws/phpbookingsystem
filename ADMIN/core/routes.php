<?php
// SINGLE ROUTE CONTROLLERS
$router->get('login', 'controllers/public/Login.php');
// $router->get('locked', 'controllers/public/Locked.php');
// $router->get('resetaccount', 'controllers/public/PasswordReset.php');

// SINGLE ROUTE AFTER LOGIN CONTROLLERS
$router->get('', 'controllers/private/dashboard.php');

// MULTIPLE ROUTE CONTROLLERS

// PUBLIC POST ONLY ROUTE CONTROLLERS
$router->post('logout', 'controllers/post/Logout.php');
$router->post('adminlogin', 'controllers/post/Login.php');
$router->post('addusers', 'controllers/post/adduser.php');
