<?php

declare(strict_types=1);

class ValidarUS implements Validar
{
  public function validarNome(string $nome): void
  {
    if (strlen($nome) < 3) {
      throw new Exception("Nome inválido");
    }
  }

  public function validarDocumento(string $documento): void
  {
    if (strlen($documento) != 9) {
      throw new Exception("Documento inválido");
    }
  }

  public function validarCodigoPostal(string $cep): void
  {
    if (strlen($cep) != 5) {
      throw new Exception("CEP inválido");
    }
  }
}
