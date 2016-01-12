<?php

error_reporting(E_ALL);
ini_set('display_errors','On');
$debug = true;
require_once '../vendor/autoload.php';
require_once '../src/Config/app.php';

$router->dispatch();
