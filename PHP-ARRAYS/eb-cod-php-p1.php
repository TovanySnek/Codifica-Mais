<?php
// 6

$listaNumeros = [5, 10, 12, 8, 4, 6, 3, 7, 2, 9];
$menorNumero = $listaNumeros[0];

for ($i = 0; $i < 9; $i++) {
    if ($listaNumeros[$i] < $menorNumero)
        $menorNumero = $listaNumeros[$i];
}

echo $menorNumero;

// 7

echo "Qual numero deseja multiplicar?";
$numero = trim(fgets(STDIN));  
for ($multiplicador = 0; $multiplicador < 9; $multiplicador ++) {
    echo $numero * $multiplicador;
}

// 8

$lista8 = [11,50,2,3,6];

for ($numeros = 0; $numeros < 4; $numeros++) {
    $resto = $lista8[$numeros] % 2;
    if ($resto = 0)
        $lista8[$numeros] == $par;
}   
for ($i= 0; $i < 4 ; $i ++) {
    $soma == $lista7[$numeros] + $par;
}

echo $soma;


// 10

$arrayNormal = ["Lorem", "Ipsum", 1, 2, 3];

for ($i= 0; $i < 4 ; $i ++) {
    echo $arrayNormal[$i] * -1;
}

// 11 

$array11 = [1, 2, 3, 4, 10, 7];

for ($i= 0; $i < 5 ; $i ++) {
    $arrayDuplicado = $array11[$i] * 2;
}

// 15

$array15 = [10, 30, 4, 52, 13, 76, 134];
$numero15 = 4;

for ($i= 0; $i < 6 ; $i ++) {
    if ($array15[$i] = $numero15)
        foreach($array15 as $indice) {
            echo "Numero encontrado na posição $indice";
        }
    else echo "Numero não encontrado";  
}
