<?php

declare(strict_types=1);

class Gestor extends Pessoa
{
  private float $salario;
  private string $horario;

  public function __construct(string $email, string $senha, float $salario)
  {
    parent::__construct($email, $senha);
    $this->salario = $salario;
  }

  public function getSalario(): float
  {
    return $this->salario;
  }

  public function setSalario(float $salario): void
  {
    $this->salario = $salario;
  }
}
