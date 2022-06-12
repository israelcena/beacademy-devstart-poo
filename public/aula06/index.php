<?php

ini_set('display_errors', 1);

include 'vendor/autoload.php';

use Classes\Config\Usuario as UsuarioConfig;
use Classes\Categoria as Cat;

$us2 = new UsuarioConfig();
$c1 = new Cat();

var_dump($us2);
var_dump($c1);

echo "Tudo ok";
