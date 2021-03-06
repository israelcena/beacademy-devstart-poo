<?php
(ini_set('display_errors', 1));
include "../vendor/autoload.php";

use App\Controller\ErrorController;
use App\Controller\IndexController;
use App\Controller\ProductController;

$url = explode("?", $_SERVER['REQUEST_URI'])[0];
echo $url;

function createRoute(string $controllerName, string $methodName){
    return[
        'controller' => $controllerName,
        'method' => $methodName,
    ];
}

$routes = [
    '/' => createRoute(IndexController::class, 'indexAction'),
    'produtos' => createRoute(ProductController::class, 'listAction'),
];

if (!isset($routes[$url])) {
    (new ErrorController())->notFoundAction();
    exit;
}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName())->$methodName();
