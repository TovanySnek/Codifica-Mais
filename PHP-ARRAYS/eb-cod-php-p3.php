<?php

echo "digite a altura ";
$altura = trim(fgets(STDIN));

echo "digite a largura ";
$largura = trim(fgets(STDIN));

$area = $largura * $altura;
echo "a area é $area". PHP_EOL;

$perimetro = 2 * ($altura + $largura);
echo "o perimetro é $perimetro". PHP_EOL;