<?php
use Pimple\Container;
use Application\Controller;
use Application\Service;

require_once '../vendor/autoload.php';
require_once '../application/config.php';

$loader = new Twig_Loader_Filesystem('../resources/views');
$twig = new Twig_Environment($loader, array(
    'cache' => '../storage/cache',
    'auto_reload' => true
));

$app = new Container();
$app['config.storage'] = $DBFile;

$app['service.storage'] = function ($app) {
    $service = new Service\StorageService();
    $service->setApp($app);
    return $service;
};
$app['controller.data'] = function ($app) {
    $controller = new Controller\DataController();
    $controller->setApp($app);
    $controller->setStorageService($app['service.storage']);
    return $controller;
};


echo $twig->render('index.twig.html', array('name' => 'Fabien'));