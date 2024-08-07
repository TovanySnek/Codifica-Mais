<?php

require_once "autoload.php";
class Estoque{

    public $estoqueObjeto = [];

    public function adicionarProduto(Produto $produto)
    {
        $this->estoqueObjeto[] = $produto;
        echo "Produto adcionado com sucesso!\n";
      
        return ;
    }

    public function venderProduto($selecaoVenda)
    {
        foreach( $this->estoqueObjeto as $indice => $produto) {
            if ($produto->sku == $selecaoVenda){
                $this->estoqueObjeto[$indice]->quantidade -= 1;
            }
        }
    }

    public function verificarEstoque($verificarId)
    {
        foreach($this->estoqueObjeto as $indice => $produto){
            if ($produto->sku == $verificarId){
                if ($this->estoqueObjeto[$indice]->sku >> 0){
                    echo "O produto : $produto->nome está em estoque!\n";
                    echo "Estoque: $produto->quantidade";
                } else 
                echo "Produto não encontrado";
            }
        }
    }

    public function listarEstoque()
    {
        if(empty($this->estoqueObjeto)){
            echo "Estoque vazio!\n";
            
        } 
            foreach($this->estoqueObjeto as $produto){
                echo "SKU: $produto->sku ", "Nome: $produto->nome ", "Unidade de Medida: $produto->unidadeMedida ", "Quantidade: $produto->quantidade ", "Preço: $produto->preco ", "Validade:". $produto->validade??'' ."\n";
                //atributo dentro do objeto
        }
            foreach($this->estoqueObjeto as $produto){
                echo "SKU: $produto->sku ", "Nome: $produto->nome ", "Unidade de Medida: $produto->unidadeMedida ", "Quantidade: $produto->quantidade ", "Preço: $produto->preco \n";
            }
        
        
    }
    
    
    public function deletaSku($escolhaSku)
    {
        foreach($this->estoqueObjeto as $indice => $produto){
            if ($produto->sku == $escolhaSku){
                if ($this->estoqueObjeto[$indice]->quantidade >> 0) {
                    echo "Estoque maior que 0, deseja continuar?\n";
                    echo "\n";
                    echo "1. SIM 1\n";
                    echo "2. NÃO 2\n";
                    $opcaoSku = readline("Digite a sua escolha: ");
                        switch ($opcaoSku) {
                            case 1:
                                unset($this->estoqueObjeto[$indice]); //unset
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

    public function indicadorProduto()
    {
        echo 'Numero de Produtos distintos: ';
        echo count(array_keys($this->estoqueObjeto)) .PHP_EOL;

    }


}