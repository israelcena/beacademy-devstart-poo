<?php

ini_set('display_errors', 1);

include 'vendor/autoload.php';

use Classes\Config\Usuario as UsuarioConfig;
use Classes\Categoria as Cat;
use Classes\Config\Falses\Falsa as FalsaConfig;

$us2 = new UsuarioConfig();
$c1 = new Cat();
$f1 = new FalsaConfig();

var_dump($us2);
var_dump($c1);
var_dump($f1);

echo "Tudo ok";
