<?php
$jobcardsdata = getPlacesList($api);

require 'views/global/header.view.php';

require 'views/public/home.view.php';

$pagescripts = '<script src="/assets/plugins/flatpickr/dist/flatpickr.min.js"></script>
<script src="/assets/js/home.js"></script>';

$pagestyles = '<link rel="stylesheet" href="/assets/plugins/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="/assets/css/home.css">';

require 'views/global/footer.view.php';



