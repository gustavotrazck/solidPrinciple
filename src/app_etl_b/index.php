<?php

require __DIR__ . "/vendor/autoload.php";

use App\Leitor;
## Open/ Closed Principle ##
$leitor = new Leitor();
$leitor->setDiretorio(__DIR__ .'/arquivos');
$leitor->setArquivo('dados.csv');
$arrCsv = $leitor->lerArquivo();
$leitor->setArquivo('dados.txt');
$arrTxt = $leitor->lerArquivo();

echo "<pre>";
print_r(array_merge($arrCsv, $arrTxt));
