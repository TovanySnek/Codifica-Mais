<?php

$valorCompra = 345;
$percentualDesconto = 10;

function aplicarDesconto($valorCompra, $percentualDesconto) {
    $valorFinal = ($valorCompra * $percentualDesconto) / 100;
    return $valorFinal;
}

function calcularDescontoProgressivo($valorCompra){
    if ($valorCompra < 100) {
        $percentualDesconto = 0;
    } elseif ($valorCompra <= 500) {
        $percentualDesconto = 10;
    } else
    $percentualDesconto = 20;
    return $percentualDesconto;
}
echo "digite o valor da compra";
$valorCompra = trim(fgets(STDIN));

echo $valorCompra(calcularDescontoProgressivo($valorCompra));