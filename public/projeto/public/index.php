<?php
(ini_set('display_errors', 1));
include "../vendor/autoload.php";

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;

$i = new IndexController();
$i->indexAction();

$p = new ProductController();
$p->indexAction();

$c = new CategoryController();
$c->indexAction();
