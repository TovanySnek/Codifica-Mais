<?php

require_once 'Autoloader.php';

use Veiculos\Classes\Carro;

$meuCarro = new Carro("Volkswagen", "Gol", 2001);

echo $meuCarro->acelerar() . PHP_EOL;

echo $meuCarro->freiar() . PHP_EOL;

echo $meuCarro->abrirPortaMala() . PHP_EOL;

echo $meuCarro->exibirDetalhes() . PHP_EOL;