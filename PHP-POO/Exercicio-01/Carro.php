<?php

class Carro {

    private $marca;
    private $modelo;
    private $anoFabricacao;
    private $velocidade;

    public function __construct($marca, $modelo, $anoFabricacao)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anoFabricacao = $anoFabricacao;
    }

    public function acelerar()
    {
        $this->velocidade = "Positiva";
        return "O carro está acelerando e a velocidade é $this->velocidade\n";
    }
   
    public function freiar()
    {
        $this->velocidade = "Negativa";
        return "O carro está freiando e a velocidade é $this->velocidade\n";
    }
}