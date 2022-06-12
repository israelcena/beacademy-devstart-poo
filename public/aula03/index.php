<?php
ini_set('display_errors', 1);
include "./Produto.php";
include "./Categoria.php";

$c1 = new Categoria("Calçados", "Calçados de corrida");
$c2 = new Categoria("Roupas", "Roupas de corrida");

$p1 = new Produto("Ténis", "Calçado", 100, $c1);
$p1->setDescricao("Ténis de corrida");
$p2 = new Produto("Calça", "Casual", 100.00, $c2);

var_dump($p1);
var_dump($p2);
