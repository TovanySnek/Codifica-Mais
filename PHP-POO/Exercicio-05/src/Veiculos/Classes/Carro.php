<?php

namespace Codifica\Veiculos\Classes;

require_once 'Autoloader.php';

use Codifica\Veiculos\Classes\Veiculo;
use Codifica\Veiculos\Interface\VeiculoInterface;

class Carro extends Veiculo implements VeiculoInterface {

    public function abrirPortaMala()
    {
        return "O carro está abrindo o porta mala\n";
    }

    public function acelerar()
    {
        return "O carro aumenta de velocidade em tempo medio\n";
    }
   
    public function freiar()
    {
        return "O carro diminui de velocidade em tempo medio\n";
    }

    public function exibirDetalhes()
    {
        echo $this->marca.PHP_EOL;
        echo $this->modelo.PHP_EOL;
        echo $this->anoFabricacao.PHP_EOL;
        
    }   
}
