<?php
use Pimple\Container;
use Controllers\DataController;
use Services\StorageService;
use Klein\Klein;

require_once '../env.php';

$loader = new Twig_Loader_Filesystem('../src/Resources/views');
$twig = new Twig_Environment($loader, array(
    'cache' => '../storage/cache',
    'auto_reload' => true,
    'debug' => $debug?true:false
));
$router = new Klein();
if($debug){
    $twig->addExtension(new Twig_Extension_Debug());
}
$app = new Container();

//Environment variables
$app['config.storage'] = $DBFile;
$app['twig'] = $twig;

//Service providers
$app['service.storage'] = function ($app) {
    $service = new StorageService();
    $service->setStorageName($app['config.storage']);
    return $service;
};
$app['controller.data'] = function ($app) {
    $controller = new DataController();
    $controller->setApp($app);
    $controller->setStorageService($app['service.storage']);
    return $controller;
};

$router->respond('POST', '/update', function () use ($app) {
    return $app['controller.data']->saveData($_POST['people']);
});
$router->respond(function() use ($app) {
    return $app['controller.data']->index();
});