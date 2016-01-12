<?php
//application entry with debug and error reporting

//accessible only on localhost:

if (isset($_SERVER['HTTP_CLIENT_IP'])
    || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    || !(in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', 'fe80::1', '::1']) || php_sapi_name() === 'cli-server')
) {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}

//enable error reporting and display
error_reporting(E_ALL);
ini_set('display_errors','On');
$debug = true;
require_once '../vendor/autoload.php';
include_once '../src/Config/app.php';


//execute route
$router->dispatch();
