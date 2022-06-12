<?php

ini_set('display_errors', 1);

include "./Aluno.php";
include "./Curso.php";
include "./Disciplina.php";
include "./Professor.php";


$p1 = new Professor();
$p1->nome = "Israel";
$p1->cpf = "3213213-21";
$p1->salario = "1000";

var_dump($p1);
