<?php

require_once 'vendor/autoload.php';
require_once 'DataProvider.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));
$dataProvider = new DataProvider();
$data = $dataProvider->provide();
$template = $twig->loadTemplate('index.html.twig');

echo $template->render(array('rooms' => $data));
