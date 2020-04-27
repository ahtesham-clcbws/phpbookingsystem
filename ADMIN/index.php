<?php


$database = require 'core/Bootstrap.php';

require Router::load('core/routes.php')
    ->direct(Request::uri(), Request::method(), Request::count());

  
