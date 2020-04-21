<?php
session_start();

$app = [];
$app['config'] = require 'config.php';
$sitedetails = $app['config']['site'];
$api = $app['config']['private']['apiurl'];

require 'Router.php';
require 'Request.php';
require 'Function.php';

if (isset($_SESSION['login'])) {
    require 'UserFunction.php';
}

