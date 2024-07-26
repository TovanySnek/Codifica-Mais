<?php

namespace Codifica\Veiculos\Classes;

require_once 'Autoloader.php';

use Codifica\Veiculos\Interface\VeiculoInterface;

class Veiculo implements VeiculoInterface{

    protected  $marca;
    protected  $modelo;
    protected $anoFabricacao;

    public function __construct($marca, $modelo, $anoFabricacao)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anoFabricacao = $anoFabricacao;
    }

    public function acelerar()
    {
    
    }
   
    public function freiar()
    {
    
    }

    public function exibirDetalhes()
    {

    }
}
