<?php 
echo "Olá mundo!";

echo " Meu primeiro programa em PHP!";

$idade = 21;
$idade10anos = $idade + 10; // -  * / subtração multiplicação divisão
$numeroDePessoas = 2;

echo $idade .PHP_EOL;
echo $idade10anos;
// ** potencia  % resto
// 100.00 double, float
echo "AAAAaaaASFDhdnfLKJDSg socorr corororo oscosoc os oaos " . $idade . " nnnmmrmroro anos mroow meow\n";
echo "AAAAaaaASFDhdnfLKJDSg socorr corororo oscosoc os oaos $idade nnnmmrmroro anos mroow meow\n";

echo "Olá mundo!\n";

echo "\t Eu tenho $idade anos.\n";

echo "Eu tenho $idade anos.";

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar, se tiver mais de 18 anos\n";


//if ($idade == 18 || $idade > 18) {
//    echo "Você tem $idade anos." . PHP_EOL;
//    echo "Pode entrar";
//}

//if ($idade >= 18 && condicao == true) {
//    echo "Você tem $idade anos." . PHP_EOL;
//    echo "Pode entrar";
//}

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}
//if ($idade >= 18) {
//    echo "Você tem $idade anos. Pode entrar sozinho.";
//} else {
//    if ($idade >= 16 && $numeroDePessoas > 1) {
//        echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
//    } else {
//        echo "Você só tem $idade anos. Você não pode entrar";
//    }
//}

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar" . PHP_EOL;
}

$contador = 1;

while ($contador <= 15) {
        echo "#$contador" . PHP_EOL;
        $contador = $contador + 1;
}

for ($contador = 1; $contador <= 15; $contador ++) {
    echo "#$contador" . PHP_EOL;
}

for ($contador = 1; $contador <= 15; $contador ++) {
    if ($contador == 13) {
        continue; //
    } 
    echo "#$contador" . PHP_EOL;
}

for ($contador = 1; $contador <= 15; $contador ++) {
    if ($contador == 13) {
        break; //
    } 
    echo "#$contador" . PHP_EOL;
}

for ($contador = 1; $contador <100; $contador++) {
    if ($contador % 2 != 0) {
        echo $contador . PHP_EOL;
    }
}
$multiplicador = 3;

for ($i = 1; $i < 10; $i++) {
    echo "$multiplicador x $i = " . $multiplicador * $i . PHP_EOL;
}

$peso = 60;
$altura = 1.74;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado";