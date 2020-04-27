<?php
// SINGLE ROUTE CONTROLLERS
$router->get('login', 'controllers/public/Login.php');
// $router->get('locked', 'controllers/public/Locked.php');
// $router->get('resetaccount', 'controllers/public/PasswordReset.php');

// SINGLE ROUTE AFTER LOGIN CONTROLLERS
$router->get('', 'controllers/private/Dashboard.php');
$router->get('places', 'controllers/private/Places.php');
$router->get('bookings', 'controllers/private/Bookings.php');
$router->get('reviews', 'controllers/private/Reviews.php');
$router->get('users', 'controllers/private/Users.php');
$router->get('hosts', 'controllers/private/Hosts.php');
$router->get('subadmins', 'controllers/private/Subadmins.php');
$router->get('locations', 'controllers/private/Locations.php');

// MULTIPLE ROUTE CONTROLLERS

// PUBLIC POST ONLY ROUTE CONTROLLERS
$router->post('logout', 'controllers/post/Logout.php');
$router->post('adminlogin', 'controllers/post/Login.php');
$router->post('addusers', 'controllers/post/adduser.php');
