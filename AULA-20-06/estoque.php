<?php

$estoque = [
    [
    'sku' => 'GRA-001',
    'nome' => 'Arroz 5kg',
    'unidade_medida' => '5kg',
    'quantidade' => 50,
    'preco' => 37.95
    ],
    [
    'sku' => 'GRA-002',
    'nome' => 'Feijão Preto 1kg',
    'unidade_medida' => '1kg',
    'quantidade' => 30,
    'preco' => 8.99
    ],
    [
    'sku' => 'MAS-003',
    'nome' => 'Macarrão Espaguete 500g',
    'unidade_medida' => '500g',
    'quantidade' => 100,
    'preco' => 9.99
    ],
    [
    'sku' => 'MAN-004',
    'nome' => 'Óleo de Soja 900ml',
    'unidade_medida' => '900ml',
    'quantidade' => 60,
    'preco' => 6.98
    ],
    [
    'sku' => 'GRA-005',
    'nome' => 'Açúcar Refinado 1kg',
    'unidade_medida' => '1kg',
    'quantidade' => 80,
    'preco' => 4.98
    ],
    [
    'sku' => 'GRA-006',
    'nome' => 'Sal Refinado 1kg',
    'unidade_medida' => '1kg',
    'quantidade' => 40,
    'preco' => 4.5
    ],
    [
    'sku' => 'GRA-007',
    'nome' => 'Café Torrado e Moído 500g',
    'unidade_medida' => '500g',
    'quantidade' => 20,
    'preco' => 16.98
    ],
    [
    'sku' => 'BEB-008',
    'nome' => 'Leite UHT Integral 1L',
    'unidade_medida' => '1L',
    'quantidade' => 70,
    'preco' => 6.99
    ],
    [
    'sku' => 'GRA-009',
    'nome' => 'Farinha de Trigo 1kg',
    'unidade_medida' => '1kg',
    'quantidade' => 90,
    'preco' => 5.45
    ],
    [
    'sku' => 'PRO-010',
    'nome' => 'Molho de Tomate',
    'unidade_medida' => '340g',
    'quantidade' => 50,
    'preco' => 3.99
    ]
];

// Implemente aqui o código


function adicionarProduto(&$estoque, $sku, $nome, $unidade , $quantidade, $preco) {
    $estoque[] = [
        'sku' => $sku,
        'nome' => $nome,
        'unidade_medida' => $unidade,
        'quantidade' => $quantidade,
        'preco' => $preco

    ];
    echo "Produto adcionado com sucesso!\n";
    return $estoque; $sku; $nome; $unidade; $quantidade; $preco;
}

function venderProduto(&$estoque, $selecaoVenda) {
    foreach($estoque as $indice => $produto) {
        if ($produto['sku'] == $selecaoVenda){
            $estoque[$indice]['quantidade'] -= 1;
        }
    }
}

function verificarEstoque(&$estoque, $verificarId) {
    foreach($estoque as $indice => $produto){
        if ($produto['sku'] == $verificarId){
            if ($estoque[$indice]['sku'] >> 0){
                echo "O produto : $produto[nome] está em estoque!\n";
                echo "Estoque: $produto[quantidade]";
            } else 
            echo "Produto não encontrado";
        }
    }
}

function listarEstoque(&$estoque) {
    if(empty($estoque)){
        echo "Estoque vazio!\n";
        return;
    }

foreach($estoque as $produto){
    echo "SKU: $produto[sku] ", "Nome: $produto[nome] ", "Unidade de Medida: $produto[unidade_medida] ", "Quantidade: $produto[quantidade] ", "Preço: $produto[preco] \n";
}
}

function deletaSku(&$estoque, $escolhaSku) {
    foreach($estoque as $indice => $produto){
        if ($produto['sku'] == $escolhaSku){
            if ($estoque[$indice]['quantidade'] >> 0) {
                echo "Estoque maior que 0, deseja continuar?\n";
                echo "\n";
                echo "1. SIM 1\n";
                echo "2. NÃO 2\n";
                $opcaoSku = readline("Digite a sua escolha: ");
                    switch ($opcaoSku) {
                        case 1:
                            unset($estoque[$indice]); //unset
                            break;
                        case 2:
                            echo "Cancelado";
                            exit;
                        default:
                            echo "Opção inválida, por favor tente novamente.\n";
                            break;
                    }
                
            }
        }
    }
    return;
}

function indicadorProduto(&$estoque){
    echo 'Numero de Produtos distintos: ';
    echo count(array_keys($estoque)) .PHP_EOL;


}

// Função para exibir o menu e obter a escolha do usuário
function exibirMenu()
{
    echo "\n";
    echo "Escolha uma das opções abaixo:\n";
    echo "1. Adicionar um produto 1\n";
    echo "2. Vender um produto 2\n";
    echo "3. Verificar Estoque 3\n";
    echo "4. Listar o Estoque 4\n";
    echo "5. Deletar por SKU 5\n";
    echo "6. Quantidade de Produtos 6\n";
    echo "7.  7\n";
    echo "8. Sair\n";
    $opcao = readline("Digite a sua escolha: ");
    return $opcao;
}

while (true) {

    $opcao = exibirMenu();

    switch ($opcao) {
        case 1:
            echo "Adicionar um produto\n";
            $sku = readline("Digite o Código SKU do produto: ");
            $nome = readline("Digite o Nome do produto: ");
            $unidade = readline("Digite o peso e a unidade: ");
            $quantidade = readline("Digite a Quantidade: ");
            $preco = readline("Digite o Preço: ");
            adicionarProduto($estoque, $sku, $nome, $unidade , $quantidade, $preco);
            break;
        case 2:
            echo "Vender um produto\n";
            // Implemente aqui o código para a opção 2
            $selecaoVenda = readline("Digite o Código do produto a vender: ");
            venderProduto($estoque, $selecaoVenda);

            break;
        case 3:
            echo "Verificar Estoque\n";
            // Implemente aqui o código para a opção 3

            $verificarId = readline("Digite o Código do produto que deseja verificar: ");
            verificarEstoque($estoque, $verificarId);

            break;
        case 4:
            echo "Listar o Estoque\n";
            // Implemente aqui o código para a opção 4

            listarEstoque($estoque);

            break;
        case 5:
            
            echo "Deletar por SKU\n";
            $escolhaSku = readline("Digite o Código SKU do produto a deletar: ");
            deletaSku($estoque, $escolhaSku);
            break;
        case 6:
        
            echo "Quantidade de Produtos\n";
            indicadorProduto($estoque);
            break;
        
        case 7:

            echo " \n";
            break;

        case 8:
            echo "Saindo...\n";
            exit; // Sai do loop e encerra o script
        default:
            echo "Opção inválida, por favor tente novamente.\n";
            break;
    }
}


//$sku_procurado = 'GRA-006';
//$array = ['PRO-010','PRO-011'];
//$key = array_search('PRO-011', $array);
//echo "$key\n";