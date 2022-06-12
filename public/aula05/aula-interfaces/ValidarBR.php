<?php

declare(strict_types=1);

class ValidarBR implements Validar
{
  public function validarDocumento(string $documento): void
  {
    if (strlen($documento) != 11) {
      throw new Exception("Documento inválido");
    }
  }

  public function validarNome(string $nome): void
  {
    if (strlen($nome) < 3) {
      throw new Exception("Nome inválido");
    }
  }

  public function validarCodigoPostal(string $cep): void
  {
    if (strlen($cep) != 8) {
      throw new Exception("CEP inválido");
    }
  }
}
