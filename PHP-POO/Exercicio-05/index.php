<?php

spl_autoload_register(function (string $Veiculo){
    $caminhoArquivo = str_replace('Veiculos\\Classes', 'src', $Veiculo);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $Veiculo);
    $caminhoArquivo .= "Veiculo.php";
}

$meuVeiculo = new Carro("Volkswagen", "Gol", 2001);

echo $meuVeiculo->acelerar();

echo $meuVeiculo->freiar();

echo $meuVeiculo->abrirPortaMala();

echo $meuVeiculo->exibirDetalhes();