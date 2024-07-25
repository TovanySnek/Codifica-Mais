<?php

require_once "./ContaBancaria.php";

$Conta = new ContaBancaria(001, "Jorge");

$Conta->depositar(5500);
$Conta->sacar(3500);
$Conta->exibirSaldo();

echo $Conta->exibirSaldo();