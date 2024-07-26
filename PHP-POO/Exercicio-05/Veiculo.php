<?php

namespace Veiculos\Classes;

class Veiculo {

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
