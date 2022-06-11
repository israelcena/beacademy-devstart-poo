<?php

include "./Aluno.php";
include "./Curso.php";
include "./Disciplina.php";
include "./Professor.php";

$a1 = new Aluno();
$a1->nome = "Davi";
$a1->cpf = "321321321";
$a1->nome .= " Nunes";

$cursoPHP = new Curso();
$cursoPHP->nome = "Introduçao ao PHP";
$cursoPHP->cargaHoraria = 90;
$cursoPHP->descricao = "Curso para aprender o mínimo de php e menor tempo";

echo "<h1>Aluno: {$a1->nome}</h1>";
