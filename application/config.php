<?php
require_once('env.php');

if($debug){
    error_reporting(E_ALL);
    ini_set('display_errors','On');
}else{
    error_reporting(E_ALL);
    ini_set('display_errors','Off');
    ini_set('log_errors', 'On');
}