<?php
/*
 * Application config file: config and service provider
 *
 */
namespace Config;

use Pimple\Container;
use Controllers\DataController;
use Services\StorageService;
use Klein\Klein;


require_once '../env.php';
$debug = $config['debug'];
/*
 * Configure twig
 */
$loader = new \Twig_Loader_Filesystem('../src/Resources/views');
$twig = new \Twig_Environment($loader, array(
    'cache' => '../storage/cache',
    'auto_reload' => true,
    'debug' => $debug?true:false
));

if($debug){
    //enable in debug for Twig dump() function
    $twig->addExtension(new \Twig_Extension_Debug());
}
/*
 * Instantiate router
 */
$router = new Klein();

/*
 * Create new pimple container for dependency injection
 */
$app = new Container();

/*
 * Environment variables
 */
$app['config.storage'] = $config['DBFile'];
$app['twig'] = $twig;

/*
 * Build services and provide them from the Container
 */
$app['service.storage'] = function () use ($app) {
    $service = new StorageService();
    $service->setStorageName($app['config.storage']);
    return $service;
};
$app['controller.data'] = function () use ($app) {
    $controller = new DataController();
    $controller->setApp($app);
    $controller->setStorageService($app['service.storage']);
    return $controller;
};

/*
 * Build routes
 */
$router->respond('POST', '/update', function () use ($app) {
    return $app['controller.data']->saveData($_POST['people']);
});
$router->respond('GET', '/show/[:id]', function ($request) use ($app) {
    return $app['controller.data']->showAction($request->id);
});
//in addition always display this route:
$router->respond(function () use ($app) {
    return $app['controller.data']->index();
});
