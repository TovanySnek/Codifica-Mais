<?php

echo "digite o tipo de temperatura (C / F) ";
$tempTipo = trim(fgets(STDIN));

if ($tempTipo ='C') {
    echo "digite a temperatura em celsius para transformar em farenheit ";
    $tempCF = trim(fgets(STDIN));
    $tempCF = ($tempCF * 9 / 5) + 32;
    echo $tempCF. PHP_EOL;
} elseif ($tempTipo = 'F') {
    echo "digite a temperatura em farenheit para transformar em celsius ";
    $tempFC = trim(fgets(STDIN));
    $tempFC = ($tempFC -32) * 5 / 9;
    echo $tempFC. PHP_EOL;
} else {
    echo "Valor Invalido". PHP_EOL;;
}
