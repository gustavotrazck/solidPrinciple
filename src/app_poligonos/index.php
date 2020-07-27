<?php

require __DIR__ . "/vendor/autoload.php";

use App\poligonos\Retangulo;
use App\poligonos\Quadrado;
use App\poligonos\Paralelogramo;
use App\Poligono;

$poligono = new Poligono();
$forma = new Paralelogramo();
$forma->setTipo(new Retangulo());
$poligono->setForma($forma);
$poligono->getForma()->getTipo()->setAltura(5);
$poligono->getForma()->getTipo()->setLargura(10);

echo "<h3> Área do retângulo " . $poligono->getForma()->getArea() . "</h3>";
$poligono = new Poligono();
$forma = new Paralelogramo();
$forma->setTipo(new Quadrado());
$poligono->setForma($forma);
$poligono->getForma()->getTipo()->setLargura(10);

echo "<h3> Área do retângulo " . $poligono->getForma()->getArea() . "</h3>";



// $retangulo = new Retangulo();
// $retangulo->setAltura(5);
// $retangulo->setLargura(10);

// echo "<h3> Área do retângulo " . $retangulo->getArea() . "</h3>";

// $quadrado = new Quadrado();
// $quadrado->setAltura(5);
// $quadrado->setLargura(10);

// echo "<h3> Área do quadrado " . $quadrado->getArea() . "</h3>";

// $retangulo = new Quadrado();
// $retangulo->setAltura(5);
// $retangulo->setLargura(10);

// echo "<h3> Área do retângulo com a classe quadrado " . $retangulo->getArea() . "</h3>";
