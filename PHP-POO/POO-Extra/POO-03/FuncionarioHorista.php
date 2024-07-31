<?php

require_once "Funcionario.php";
require_once "FuncionarioBase.php";


class FuncionarioHorista extends FuncionarioBase implements FuncionarioInterface{
   
    protected $nome;
    protected $salarioBase;
    private $horasTrabalhadas;
    private $taxaHora;
    private $salarioCalculado;

    public function __construct($nome, $salarioBase, $horasTrabalhadas, $taxaHora)
    {
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
        $this->horasTrabalhadas = $horasTrabalhadas;
        $this->taxaHora = $taxaHora;
        $this->salarioCalculado = 0;
    }

    public function calcularSalario()
    {
        $this->salarioCalculado = $this->horasTrabalhadas * $this->taxaHora + $this->salarioBase;
        return $this->salarioCalculado;
    }

    public function exibirInformacoes()
    {
        echo $this->salarioCalculado.PHP_EOL;
        echo $this->nome.PHP_EOL;

    }


}