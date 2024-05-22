<?php

$ultimonumero = 0;
echo"digite o numero";
$numero = trim(fgets(STDIN));
while ($numero != "-1") {
    echo $numero;
    if ($numero <= $ultimonumero) {
        $numero = $numeromenor;
        $numero = $ultimonumero;
    } elseif ($numero >= $ultimonumero) {
        $numero = $numeromaior;
        $numero = $ultimonumero;
    }
    
}
echo "O numero maior é $numeromaior \n";
echo "O numero menor é $numeromenor \n";