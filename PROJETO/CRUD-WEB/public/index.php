<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controller\ProdutosController;

$produto = new ProdutosController();

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
 //       '8' => 'm²',
  //  ];

    $_SESSION['produtos'] = [[
        'id' => "#000001",
        'categoria' => "Vestuário",
        'sku' => "123456",   
        'nome' => "Camisa Codifica+",
        'quantidade' => "Quantidade: 100" 

    ],[
        'id' => '#000002',
        'categoria' => 'Eletrodomésticos',
        'sku' => '123457',
        'nome' => 'Geladeira',
        'quantidade' => 'Quantidade: 5'

    ],[
        'id' => '#000003',
        'categoria' => 'Eletrônicos',
        'sku' => '124487',
        'nome' => 'Smartphone',
        'quantidade' => 'Quantidade: 15'
    ]
];
          //  'id' => 1,
         //   'nome' => 'Smartphone',
         //   'sku' => '123456',
           // 'unidade_medida_id' => '1',
          //  'valor' => 1500.00,
         //   'quantidade' => 10,
          //  'categoria_id' => '1',
      //  ],[
       //     'id' => 2,
       //     'nome' => 'Geladeira',
       //     'sku' => '123457',
          //  'unidade_medida_id' => '2',
          //  'valor' => 2500.00,
       //     'quantidade' => 5,
           // 'categoria_id' => '2',
      //  ],
    //];

    // Redireciona para a página de listagem
    //header('Location: listagem.php');

?>