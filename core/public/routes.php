<?php
// SINGLE ROUTE CONTROLLERS
$router->get('', 'controllers/public/index.php');
$router->get('search', 'controllers/public/search.php');
$router->get('become-host', 'controllers/public/becomehost.php');
$router->get('signin', 'controllers/public/signin.php');
$router->get('signup', 'controllers/public/signup.php');
$router->get('logout', 'controllers/public/logout.php');

// MULTIPLE, PUBLIC & PRIVATE ROUTE CONTROLLERS
    $router->get('place', 'controllers/public/place.php');
    $router->get('users', 'controllers/public/users.php');
    $router->get('experiences', 'controllers/public/experiences.php');
    $router->get('locations', 'controllers/public/locations.php');

    $router->get('hosting', 'controllers/private/host.php');
    $router->get('account', 'controllers/private/account.php');

// PUBLIC POST ONLY ROUTE CONTROLLERS
$router->post('userlogin', 'controllers/post/userlogin.php');
$router->post('userregister', 'controllers/post/userregister.php');
