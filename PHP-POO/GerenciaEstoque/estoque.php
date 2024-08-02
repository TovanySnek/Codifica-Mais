<?php



class Estoque{

    public function adicionarProduto($sku, $nome, $unidadeMedida , $quantidade, $preco)
    {
        $estoque[] = [
            'sku' => $sku,
            'nome' =>  $nome,
            'unidade_medida' =>  $unidadeMedida,
            'quantidade' =>  $quantidade,
            'preco' =>  $preco
        ];
        echo "Produto adcionado com sucesso!\n";
        return $estoque; $sku; $nome; $unidadeMedida; $quantidade; $preco;
    }

    public function venderProduto($estoque, $selecaoVenda)
    {
        foreach($estoque as $indice => $produto) {
            if ($produto['sku'] == $selecaoVenda){
                $estoque[$indice]['quantidade'] -= 1;
            }
        }
    }

    public function verificarEstoque($estoque, $verificarId)
    {
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

    public function listarEstoque()
    {
        if(empty($estoque)){
            echo "Estoque vazio!\n";
            
        }
        foreach($estoque as $produto){
            echo "SKU: $produto[sku] ", "Nome: $produto[nome] ", "Unidade de Medida: $produto[unidade_medida] ", "Quantidade: $produto[quantidade] ", "Preço: $produto[preco] \n";
        }
        
    }
    
    
    public function deletaSku($estoque, $escolhaSku)
    {
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

    public function indicadorProduto($estoque)
    {
        echo 'Numero de Produtos distintos: ';
        echo count(array_keys($estoque)) .PHP_EOL;

    }


}