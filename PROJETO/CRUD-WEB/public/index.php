<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/Helper.php';

session_start();

use App\Controller\ProdutosController;

$produto = new ProdutosController();

if (empty($_SESSION)) {
    $_SESSION['produtos'] = [
        1 => [
        'id' => 1,
        'categoria' => "Vestuário",
        'sku' => 123456,   
        'nome' => "Camisa Codifica+",
        'quantidade' => 100 

    ], // 2 => [
    //       'id' => 2,
    //      'categoria' => 'Eletrodomésticos',
    //       'sku' => 123457,
    //      'nome' => 'Geladeira',
    //      'quantidade' => 5

    // ],  3 => [
    //      'id' => 3,
    //      'categoria' => 'Eletrônicos',
    //     'sku' => 124487,
    //     'nome' => 'Smartphone',
    //      'quantidade' => 15
    //  ]
    //  id' => 1,
    // 'nome' => 'Smartphone',
    // 'sku' => '123456',
    // 'unidade_medida_id' => '1',
    // 'valor' => 1500.00,
    // 'quantidade' => 10,
    // 'categoria_id' => '1',
    //  
    // 'id' => 2,
    // 'nome' => 'Geladeira',
    // 'sku' => '123457',
    // 'unidade_medida_id' => '2',
    // 'valor' => 2500.00,
    // 'quantidade' => 5,
    // 'categoria_id' => '2',
];}


$caminho = rtrim($_SERVER['PATH_INFO'], '/');

if ($caminho == '/produtos/criar') {    
    return $produto->criar();
}
if ($caminho == '/produtos/editar') {
    return $produto->editar();
}
if ($caminho == '/produtos') {
    return $produto->listar();
}
if ($caminho == '/produtos/salvar') {
    return $produto->salvar();
}
if ($caminho == '/produtos/deletar') {
    return $produto->deletar();
}

echo "Página não encontrada :(";
header('Location: /produtos');


    // Define o array de categorias, unidades de medida e produtos
    //   $_SESSION['categorias'] = [
    //      '1' => 'Eletrônicos',
    //      '2' => 'Eletrodomésticos',
    //      '3' => 'Móveis',
    //      '4' => 'Decoração',
    //      '5' => 'Vestuário',
    //      '7' => 'Outros'
    //  ];

    //  $_SESSION['unidades_medidas'] = [
    //      '1' => 'Un',
    //      '2' => 'Kg',
    //      '3' => 'g',
    //      '4' => 'L',
    //      '5' => 'mm',
    //      '6' => 'cm',
    //      '7' => 'm',
    //      '8' => 'm²',
    //  ];



    // Redireciona para a página de listagem
    //header('Location: listagem.php');

?>