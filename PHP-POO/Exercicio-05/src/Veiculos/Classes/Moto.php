<?php

namespace Codifica\Veiculos\Classes;

require_once 'Autoloader.php';

use Codifica\Veiculos\Classes\Veiculo;
use Codifica\Veiculos\Interface\VeiculoInterface;

class Moto extends Veiculo implements VeiculoInterface  {

    public function freiarRodaTraseira()
    {
        return "O motorista freiou a roda traseira\n";
    }

    public function acelerar()
    {
        return "A moto acelera rapidamente\n";
    }
   
    public function freiar()
    {
        return "A moto diminui de velocidade e para rapidamente\n";
    }

    public function exibirDetalhes()
    {
        echo $this->marca.PHP_EOL;
        echo $this->modelo.PHP_EOL;
        echo $this->anoFabricacao.PHP_EOL;
        
    }   
}