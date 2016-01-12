<?php
use Pimple\Container;
use Application\Services;
use Application\Controllers;

require_once '../vendor/autoload.php';
require_once '../Application/config.php';

$loader = new Twig_Loader_Filesystem('../Resources/views');
$twig = new Twig_Environment($loader, array(
    'cache' => '../Storage/cache',
    'auto_reload' => true,
    'debug' => $debug?true:false
));
if($debug){
    $twig->addExtension(new Twig_Extension_Debug());
}
$app = new Container();

//Environment variables
$app['config.storage'] = $DBFile;
$app['twig'] = $twig;

//Service providers
$app['service.storage'] = function ($app) {
    $service = new Services\StorageService();
    $service->setApp($app);
    $service->setStorageName($app['config.storage']);
    return $service;
};
$app['controller.data'] = function ($app) {
    $controller = new Controllers\DataController();
    $controller->setApp($app);
    $controller->setStorageService($app['service.storage']);
    return $controller;
};

//Router
$route = $_SERVER['REQUEST_URI'];
switch($route){
    case '/update':
        if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['people'])){
            return $app['controller.data']->saveData($_POST['people']);
        }
    break;
    default:
        return $app['controller.data']->index();
}

