<?php

require_once "autoload.php";

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

$estoque = new Estoque();

while (true) {

    $opcao = exibirMenu();

    switch ($opcao) {
        case 1:
            echo "Adicionar um produto\n";
            $sku = readline("Digite o Código SKU do produto: ");
            $nome = readline("Digite o Nome do produto: ");
            $unidadeMedida = readline("Digite o peso e a unidade: ");
            $quantidade = readline("Digite a Quantidade: ");
            $preco = readline("Digite o Preço: ");
            $checarPerecivel = readline("O produto é perecivel? (SIM/NAO) ");
                if ($checarPerecivel == "SIM"){
                    $validade = readline("Digite a validade: ");
                    $novoProduto = new ProdutoPerecivel($nome, $sku, $unidadeMedida, $quantidade, $preco, $validade);
                } else
                $novoProduto = new Produto($nome, $sku, $unidadeMedida, $quantidade, $preco);
        
                $estoque->adicionarProduto($novoProduto);
                break;
        case 2:
            echo "Vender um produto\n";
            // Implemente aqui o código para a opção 2
            $selecaoVenda = readline("Digite o Código do produto a vender: ");
            $estoque->venderProduto( $selecaoVenda);

            break;
        case 3:
            echo "Verificar Estoque\n";
            // Implemente aqui o código para a opção 3

            $verificarId = readline("Digite o Código do produto que deseja verificar: ");
            $estoque->verificarEstoque($verificarId);

            break;
        case 4:
            echo "Listar o Estoque\n";
            // Implemente aqui o código para a opção 4

            $estoque->listarEstoque();

            break;
        case 5:
            
            echo "Deletar por SKU\n";
            $escolhaSku = readline("Digite o Código SKU do produto a deletar: ");
            $estoque->deletaSku($escolhaSku);
            break;
        case 6:
        
            echo "Quantidade de Produtos\n";
            $estoque->indicadorProduto();
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