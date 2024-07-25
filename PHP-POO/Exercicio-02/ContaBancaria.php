<?php

class ContaBancaria{

private $numeroConta;
private $nomeTitular;
private $saldo;

public function __construct($numeroConta, $nomeTitular)
{
    $this->numeroConta = $numeroConta;
    $this->nomeTitular = $nomeTitular;
    $this->saldo = 0;
}

public function depositar($quantia)
{
    if ($quantia < 0) {
        echo "Valor precisa ser positivo";
        return;
    }
    $this->saldo += $quantia;
}

public function sacar($quantia)
{
    if ($quantia > $this->saldo) {
        echo "Saldo indisponível";
        return;
    }
    $this->saldo -= $quantia;
}

public function exibirSaldo()
{
    return $this->saldo;
}
}