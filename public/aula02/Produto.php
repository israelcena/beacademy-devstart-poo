<?php

declare(strict_types=1);

class Produto
{
  private string $nome;
  private string $tipo;
  private float $valor;

  public function getNome(): string
  {
    return $this->nome;
  }

  public function setNome(string $novoNome): void
  {
    $this->nome = $novoNome;
  }


  public function getTipo(): string
  {
    return $this->tipo;
  }

  public function setTipo(string $novoTipo): void
  {
    $this->tipo = $novoTipo;
  }


  public function getValor(): float
  {
    return $this->valor;
  }

  public function setValor(float $novoValor): void
  {
    if ($novoValor <= 0) {
      die("O Valor não pode ser menor que 0");
    }
    $this->valor = $novoValor;
  }
}
