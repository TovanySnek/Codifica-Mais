<?php

require_once "./Produto.php";

$Produto = new Produto("Detergente", 15.99, 10);

$Produto->alterarPreco(20.00);
$Produto->ajustarEstoque(5);
$Produto->exibirDetalhes();

echo $Produto->exibirDetalhes();