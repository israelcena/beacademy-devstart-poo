<?php

ini_set('display_errors', 1);

include 'classes/Categoria.php';
include 'classes/Produto.php';
include 'classes/Usuario.php';
include 'classes/Cliente.php';
include 'classes/Gestor.php';
include 'classes/Config/Usuario.php';

use Classes\Config\Usuario as UsuarioConfig;

$us1 = new Classes\Usuario();
// $us2 = new Classes\Config\Usuario();
$us2 = new UsuarioConfig();

var_dump($us1);
var_dump($us2);

echo "Tudo ok";
