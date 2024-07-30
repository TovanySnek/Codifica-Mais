<?php

require_once 'Forma.php';
require_once 'Circulo.php';
require_once 'Retangulo.php';


$formaRetangulo = new Retangulo(14, 53);

echo $formaRetangulo->calcularArea() . PHP_EOL;

$formaCirculo = new Circulo(10, 10);

echo $formaCirculo->calcularArea() . PHP_EOL;

