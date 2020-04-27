<?php

checkLogin();
$route = getURL();
$pagetitle = 'Places';


if ($_GET == null && !isset($route[1])) {

    require 'views/global/header.view.php';

    echo '<section class="content"><div class="container-fluid">';
    require 'views/global/breadcrumb.view.php';
    require 'views/places/all.view.php';
    echo '</div></section>';

    $pagescripts = '<script src="../../assets/js/app.min.js"></script>
    <script src="../../assets/js/table.min.js"></script>
    <script src="../../assets/js/admin.js"></script>
    <script src="../../assets/js/pages/tables/jquery-datatable.js"></script>';

    require 'views/global/footer.view.php';
} elseif ($route[1] == 'add') {
} elseif ($route[1] == 'waiting') {
} elseif ($route[1] == 'blocked') {
} elseif (isset($_GET) && $route[1] == 'edit') {
}
