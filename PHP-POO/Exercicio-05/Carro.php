<?php

namespace Veiculos\Classes;

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
