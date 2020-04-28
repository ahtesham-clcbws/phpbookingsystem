<?php

require 'views/private/host/inc/header.view.php';

require 'views/private/host/calendar.view.php';

$pagestyles = '<link rel="stylesheet" href="/assets/plugins/fullcalendar/core/main.css">
<link rel="stylesheet" href="/assets/plugins/fullcalendar/daygrid/main.css">
<style>
.fc-scroller.fc-day-grid-container {
    overflow: auto !important;
    height: auto !important;
  }
</style>';

$pagescripts = '<script src="/assets/plugins/fullcalendar/core/main.js"></script>
<script src="/assets/plugins/fullcalendar/daygrid/main.js"></script>
<script src="/assets/js/fullcalendar.js"></script>';

require 'views/private/host/inc/footer.view.php';
