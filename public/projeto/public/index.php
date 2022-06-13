<?php
(ini_set('display_errors', 1));
include "../vendor/autoload.php";

use App\Controller\ErrorController;
use App\Controller\IndexController;
use App\Controller\ProductController;
// use App\Controller\CategoryController;

$url = explode("?", $_SERVER['REQUEST_URI'])[0];
echo $url;

$pe = new ErrorController();
$pe->notFoundAction();

$i = new IndexController();
$i->indexAction();
$i->loginAction();

$p = new ProductController();
$p->listAction();
$p->addAction();
$p->removeAction();
$p->editAction();

// $c = new CategoryController();
// $c->indexAction();
