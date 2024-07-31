<?php

require_once "Funcionario.php";


class FuncionarioBase implements FuncionarioInterface{

    protected $nome;
    protected $salarioBase;

    public function __construct($nome, $salarioBase)
    {
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    public function calcularSalario()
    {
    
    }

    public function exibirInformacoes()
    {
    
    }


}