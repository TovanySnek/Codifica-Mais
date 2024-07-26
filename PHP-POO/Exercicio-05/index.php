<?php


require_once 'Autoloader.php';

use Codifica\Veiculos\Classes\Veiculo;
use Codifica\Veiculos\Interface\VeiculoInterface;
use Codifica\Veiculos\Classes\Carro;
use Codifica\Veiculos\Classes\Moto;
use Codifica\Veiculos\Classes\Caminhao;


$meuCarro = new Carro("Volkswagen", "Gol", 2001);

echo $meuCarro->acelerar() . PHP_EOL;

echo $meuCarro->freiar() . PHP_EOL;

echo $meuCarro->abrirPortaMala() . PHP_EOL;

echo $meuCarro->exibirDetalhes() . PHP_EOL;