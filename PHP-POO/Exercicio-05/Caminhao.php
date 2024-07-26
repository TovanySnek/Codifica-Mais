<?php

namespace Veiculos\Classes;

class Caminhao extends Veiculo implements VeiculoInterface {

    public function puxarCarga()
    {
        return "o caminhão esta puxando carga\n";
    }

    public function acelerar()
    {
        return "O caminhao aumenta de velocidade muito devagar\n";
    }
   
    public function freiar()
    {
        return "O caminhao freia e demora em parar\n";
    }

    public function exibirDetalhes()
    {
        echo $this->marca.PHP_EOL;
        echo $this->modelo.PHP_EOL;
        echo $this->anoFabricacao.PHP_EOL;
        
    }    
}