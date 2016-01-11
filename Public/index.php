<?php
use Pimple\Container;
use Application\Services;
use Application\Controllers;

require_once '../vendor/autoload.php';
require_once '../Application/config.php';

$loader = new Twig_Loader_Filesystem('../Resources/views');
$twig = new Twig_Environment($loader, array(
    'cache' => '../Storage/cache',
    'auto_reload' => true
));

$app = new Container();
$app['config.storage'] = $DBFile;

$app['service.storage'] = function ($app) {
    $service = new Services\StorageService();
    $service->setApp($app);
    return $service;
};
$app['controller.data'] = function ($app) {
    $controller = new Controllers\DataController();
    $controller->setApp($app);
    $controller->setStorageService($app['service.storage']);
    return $controller;
};
$controller = new Controllers\DataController();
$route = $_SERVER['REQUEST_URI'];

switch($route){
    case '/':
        return $app['controller.data']->index();
        break;
    case '/update':
        if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['data'])){
            return $app['controller.data']->saveData($_POST['data']);
        }
}

//echo $twig->render('index.twig.html', array('name' => 'Fabien'));