<?php
$data = getPlacesList();

// print_r($data[0]->title);

// $amen = json_decode($data[0]->amenities);

// print_r($amen->basic[0]->name);

// die();


require 'views/global/header.view.php';
require 'views/public/home.view.php';
require 'views/global/footer.view.php';