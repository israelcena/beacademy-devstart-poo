<?php

declare(strict_types=1);

namespace App\Controller;

class ProductController
{
  public function listAction(): void
  {
    include "/application/public/projeto/src/View/product/list.php";
  }
  public function addAction(): void
  {
    include "/application/public/projeto/src/View/product/add.php";
  }
  public function removeAction(): void
  {
    include "/application/public/projeto/src/View/product/remove.php";
  }
  public function editAction(): void
  {
    include "/application/public/projeto/src/View/product/edit.php";
  }
}
