<?php
$jobcardsdata = getPlacesList($api);

require 'views/global/header.view.php';

require 'views/public/home.view.php';

$pagescripts = '<script src="/assets/js/home.js"></script>';

require 'views/global/footer.view.php';