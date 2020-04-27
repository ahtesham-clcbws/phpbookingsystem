<?php

checkLogin();

require 'views/global/header.view.php';

echo '<section class="content"><div class="container-fluid">';
require 'views/global/breadcrumb.view.php';
require 'views/pages/Dashboard.view.php';
echo '</div></section>';

$pagescripts = '<script src="../../assets/js/chart.min.js"></script>
<script src="../../assets/js/bundles/echart/echarts.js"></script>
<script src="../../assets/js/pages/dashboard/dashboard2.js"></script>
<script src="../../assets/js/pages/todo/todo.js"></script>
<script src="../../assets/js/pages/charts/jquery-knob.js"></script>';

require 'views/global/footer.view.php';