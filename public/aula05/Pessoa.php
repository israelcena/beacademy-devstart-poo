<?php

declare(strict_types=1);

abstract class Pessoa
{
  private readonly string $cpf;
  private string $nome;

  public function __construct(
    private string $email,
    private string $senha,
  ) {
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function setNome(string $nome): void
  {
    $this->nome = $nome;
  }

  public function getCpf(): string
  {
    return $this->cpf;
  }

  public function setCpf(string $cpf): void
  {
    $this->cpf = $cpf;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function setEmail(string $email): void
  {
    $this->email = $email;
  }

  public function getSenha(): string
  {
    return $this->senha;
  }

  public function setSenha(string $senha): void
  {
    $this->senha = $senha;
  }
}
