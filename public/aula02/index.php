<?php
ini_set('display_errors', 1);
include "./Produto.php";

$p1 = new Produto();
$p1->setNome("Tênis");
$p1->setTipo("Corrida");
$p1->setValor(90.20);


$p2 = new Produto();
$p2->setNome("Calça");
$p2->setTipo("Jens");
$p2->setValor(100.20);

var_dump($p1);
var_dump($p2);
