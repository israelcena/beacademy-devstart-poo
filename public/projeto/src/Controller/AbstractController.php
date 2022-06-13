<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
  public function render(string $viewName): void
  {
    include "/application/public/projeto/src/View/{$viewName}.php";
  }
}
