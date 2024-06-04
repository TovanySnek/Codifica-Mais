<?php


function calculoDesconto($valor, $desconto){
    $valorDesconto = ($valor * $desconto) / 100;
    $valorFinal = $valor - $valorDesconto;
    return $valorFinal;
    echo $valorFinal;

}

echo "digite o valor original do produto ". PHP_EOL;
$valor = trim(fgets(STDIN));
echo "digite a porcentagem do desconto ". PHP_EOL;
$desconto = trim(fgets(STDIN));

calculoDesconto($valor, $desconto);
