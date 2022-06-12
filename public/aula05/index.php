<?php

(ini_set('display_errors', 1));

include "./Pessoa.php";
include "./Cliente.php";
include "./Gestor.php";
include "./GestorGeral.php";

include "./Validar.php";

$c1 = new Cliente("joao@asdsa.com", "123456");
$c1->setNome("João");
$c1->setDataCadastro("01/01/2019");

$cpf = "12345678910";
Validar::validarCpf($cpf);

$g1 = new Gestor("maria@email.com", "123456", 1000.50);
$g1->setNome("Maria");

$gg1 = new GestorGeral("geraldo@email.com", "123456", 20000.50);

var_dump($c1);
var_dump($g1);
var_dump($gg1);
