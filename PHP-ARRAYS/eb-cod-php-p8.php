<?php

$churrascoItems = [
    ["Picanha"],
    ["Pão de Alho"], 
    ["Guarana"], 
    ["Queijo Qualho"] 
];

$churrascoPreco = [
    [50],
    [13], 
    [10], 
    [23] 
];
$valorTotal = 0;

for ($churrascoPreco = 0; $churrascoPreco <= 4; $churrascoPreco ++) {
    $valorTotal == $churrascoPreco + $valorTotal;
}

$nParticipantes = 10;

$valorIndivual = 0;
function calcularPreco($valorTotal,$nParticipantes) {
    $valorIndividual = $valorTotal / $nParticipantes;
    return $valorIndividual;
}
echo $valorIndivual;