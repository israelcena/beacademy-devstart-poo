<?php

declare(strict_types=1);

class Produto
{
  private string $nome;
  private string $tipo;
  private float $valor;
  private string $descricao;
  private readonly Categoria $categoria;

  public function __construct(string $nome, string $tipo, float $valor, Categoria $categoria)
  {
    $this->nome = $nome;
    $this->tipo = $tipo;
    $this->valor = $valor;
    $this->categoria = $categoria;
  }

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


  public function getDescricao(): string
  {
    return $this->descricao;
  }

  public function setDescricao(string $descricao): void
  {
    $this->descricao = $descricao;
  }


  public function getCategoria(): Categoria
  {
    return $this->categoria;
  }

  public function setCategoria(Categoria $novaCategoria): void
  {
    $this->categoria = $novaCategoria;
  }
}
