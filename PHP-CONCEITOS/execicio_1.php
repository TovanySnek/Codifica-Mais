<?php 
// 1

echo "digite o primeiro numero";
$primeiro_numero = trim(fgets(STDIN));
echo "digite o segundo numero";
$segundo_numero = trim(fgets(STDIN));
$total = $primeiro_numero + $segundo_numero;
echo "O valor da soma é $total";

// 2

$nota1 = 9;
$nota2 = 7;
$nota3 = 4;
$media = $nota1 + $nota2 + $nota3 / 3;

echo $media;

// 3

echo "digite a sua idade";
$idade = trim(fgets(STDIN));
if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}

// 4

$numero = 10;

while ($numero >= 1) {
        echo "#$numero" . PHP_EOL;
        $numero --;
}

// 5

echo "Qual numero quer verificar?";
$PInumero = trim(fgets(STDIN));
$resto = $PInumero % 2;
if ($resto == 0) {
    echo "seu numero é par";
} else {
    echo "seu numero é impar";
}

// 7

echo "digite o numero multiplicador";
$multiplicador = trim(fgets(STDIN));
for ($i = 1; $i < 10; $i++) {
    echo "$multiplicador x $i = " . $multiplicador * $i . PHP_EOL;
}

// 9

$valor = 1;
echo "Qual numero deseja verificar?";
$numeroprimo = trim(fgets(STDIN));
while ($valor <= $numeroprimo) {
    if ($numeroprimo % $valor = 0)
        $divisao ++;
    $valor ++;
    if ($divisao = 2) {
        echo "o numero é primo";
    }else {
        echo "o numero não é primo";
    }
}