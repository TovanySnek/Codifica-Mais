<?php

echo"Digite o primeiro numero inteiro";
$numeroa = trim(fgets(STDIN));
echo"Digite o segundo numero inteiro";
$numerob = trim(fgets(STDIN));
while ($numeroa > $numerob) {
    echo "Primeiro numero mair que o segundo, digite novamente";
    echo"Digite o primeiro numero inteiro";
    $numeroa = trim(fgets(STDIN));
    echo"Digite o segundo numero inteiro";
    $numerob = trim(fgets(STDIN));
}
$soma = 0;
for ($contador = $numeroa; $contador < $numerob; $contador++) {
    if ($contador % 2 != 0) {
        $soma = $contador + $soma;
    }
}
echo $soma;
