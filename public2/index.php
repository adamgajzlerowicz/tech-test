<?php

error_reporting(E_ALL);
ini_set('display_errors','Off');
ini_set('log_errors', 'On');
$debug = false;

require_once '../vendor/autoload.php';
require_once '../src/Config/app.php';

$router->dispatch();
