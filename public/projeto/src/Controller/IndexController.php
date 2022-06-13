<?php

declare(strict_types=1);

namespace App\Controller;

class IndexController
{
  public function indexAction(): void
  {
    // echo __DIR__;
    include "/application/public/projeto/src/View/index/index.php";
  }

  public function loginAction(): void
  {
    include "/application/public/projeto/src/View/index/login.php";
  }
}
