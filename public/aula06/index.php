<?php

ini_set('display_errors', 1);

include 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '';

for ($i = 0; $i < 10; $i++) {
  $html .= '<p>ó o pente! ' . $i . '</p>';
}

$dompdf->loadHtml('<h1>Letra da Música ó o pente</h1>' . $html);

$dompdf->render();

$dompdf->stream();
