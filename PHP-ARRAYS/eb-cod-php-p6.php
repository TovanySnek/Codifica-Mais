<?php


echo "digite o seu peso em kg ";
$peso = trim(fgets(STDIN));
echo "digite a sua altura em metros ";
$altura = trim(fgets(STDIN));

$imc = $peso / ($altura * $altura);

echo "seu IMC é $imc. Você está claffisificado como: ";

if ($imc < 18.5) {
    echo "Magreza";
} elseif ($imc < 25) {
    echo "Normal";
} elseif ($imc < 29.9) {
    echo "Sobrepeso";
} elseif ($imc < 34.9) {
    echo "Obesidade grau I";
} elseif ($imc < 39.9) {
    echo "Obesidade grau II";
} else {
    echo "Obesidade grau III";
}
