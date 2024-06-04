<?php

echo "digite o valor da conta ";
$valorConta = trim(fgets(STDIN));

echo "digite a porcentagem da gorgeta ";
$porcentagem = trim(fgets(STDIN));

$valorGorjeta = ($porcentagem / $valorConta) * 100;
echo $valorGorjeta . PHP_EOL;

$total = $valorConta + $valorGorjeta;
echo $total;