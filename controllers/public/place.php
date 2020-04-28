<?php

$result = getURL();

$_POST['id'] = $result[1];

$data = getPlace($_POST, $api);

var_dump($data);
die();

require 'views/global/header.view.php';
require 'views/public/place.view.php';
require 'views/global/footer.view.php';