<?php

require_once "Funcionario.php";
require_once "FuncionarioBase.php";


class FuncionarioMensalista extends FuncionarioBase implements FuncionarioInterface{



    public function calcularSalario()
    {
        return $this->salarioBase;
    }

    public function exibirInformacoes()
    {
        echo $this->salarioBase.PHP_EOL;
        echo $this->nome.PHP_EOL;

    }


}