<?php
require 'core/private/Optimizer.php';

$database = require 'core/private/Bootstrap.php';

require Router::load('core/public/routes.php')
    ->direct(Request::uri(), Request::method(), Request::count());

  
