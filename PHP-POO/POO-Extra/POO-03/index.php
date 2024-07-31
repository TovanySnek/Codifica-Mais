<?php

require_once "Funcionario.php";
require_once "FuncionarioBase.php";
require_once "FuncionarioHorista.php";
require_once "FuncionarioMensalista.php";

$novoFuncionarioHorista = new FuncionarioHorista("Jorge", 100, 240, 14);

$novoFuncionarioHorista->calcularSalario();

echo $novoFuncionarioHorista->exibirInformacoes();

$novoFuncionarioMensalista = new FuncionarioMensalista("Joana", 5100);

$novoFuncionarioMensalista->calcularSalario();

echo $novoFuncionarioMensalista->exibirInformacoes();