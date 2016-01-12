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
$router = new \Klein\Klein();
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
    $service->setStorageName($app['config.storage']);
    return $service;
};
$app['controller.data'] = function ($app) {
    $controller = new Controllers\DataController();
    $controller->setApp($app);
    $controller->setStorageService($app['service.storage']);
    return $controller;
};

$router->respond('GET', '/', function() use ($app) {
    return $app['controller.data']->index();
});
$router->respond('POST', '/update', function () use ($app) {
    return $app['controller.data']->saveData($_POST['people']);
});
$router->dispatch();
