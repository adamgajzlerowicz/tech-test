<?php
//public entry point for the application.
//enables error reporting, but only to the log
error_reporting(E_ALL);
ini_set('display_errors','Off');
ini_set('log_errors', 'On');
$debug = false;

//build application
require_once '../vendor/autoload.php';
require_once '../src/Config/app.php';

//execute route
$router->dispatch();
