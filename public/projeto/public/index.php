<?php
(ini_set('display_errors', 1));
include "../vendor/autoload.php";

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;

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
