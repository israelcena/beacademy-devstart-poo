<?php

ini_set('display_errors', 1);

include 'vendor/autoload.php';

use Classes\Config\Usuario as UsuarioConfig;

$us2 = new UsuarioConfig();

var_dump($us2);

echo "Tudo ok";
