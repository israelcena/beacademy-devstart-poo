<?php

(ini_set('display_errors', 1));

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';

$br = new ValidarBR();
$br->validarDocumento("12345678910");

$us = new ValidarUS();
$us->validarDocumento("123456789");
