<?php
use Pimple\Container;

require_once '../vendor/autoload.php';
require_once '../application/config.php';

$loader = new Twig_Loader_Filesystem('../resources/views');
$twig = new Twig_Environment($loader, array(
    'cache' => '../storage/cache',
    'auto_reload' => true
));

$app = new Container();

echo $twig->render('index.twig.html', array('name' => 'Fabien'));