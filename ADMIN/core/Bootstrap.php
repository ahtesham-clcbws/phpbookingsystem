<?php
date_default_timezone_set("Asia/Kolkata");
session_start();

$app = [];
$app['config'] = require 'config.php';
$sitedetails = $app['config']['site'];
$api = $app['config']['private']['apiurl'];
$logo = $sitedetails['logosidebar'];
$logologin = $sitedetails['logologin'];
$logotext = $sitedetails['logotext'];
$sitetitle = $sitedetails['title'];
$pagetitle = 'Dashboard';

require 'Router.php';
require 'Request.php';
require 'Function.php';

if (isset($_SESSION['admin'])) {
    require 'AdminFunction.php';
}

if (isset($_SESSION['subadmin'])) {
    require 'SubadminFunction.php';
}
