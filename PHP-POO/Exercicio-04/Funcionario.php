<?php

class Funcionario{

    private $nome;
    private $cargo;
    private $salario;
    
    public function __construct($nome, $cargo, $salario)
    {   
        $this->nome = $nome;
        $this->cargo = $cargo;  
        $this->salario = $salario;
    }
    
    public function ajustarSalario($novoSalario)
    {
        $this->salario = $novoSalario;
    }
    
    public function alterarCargo($novoCargo)
    {
        $this->cargo = $novoCargo;
    }
    
    public function exibirDetalhes()
    {
        echo $this->nome.PHP_EOL;
        echo $this->salario.PHP_EOL;
        echo $this->cargo.PHP_EOL;
    }    
}