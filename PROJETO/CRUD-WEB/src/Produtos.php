<?php

require 'vendor/autoload.php';

class Produtos{

    public $estoqueObjeto = [];



    public function listarProdutos()
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

    public function criarProduto(Produto $produto)
    {
        $this->estoqueObjeto[] = $produto;
        echo "Produto adcionado com sucesso!\n";
      
        return ;
    }

    public function salvarProduto(){



    }

    public function editarProduto(){



    }

    public function atualizarProduto(){



    }

    public function deletarProduto($escolhaSku)
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


}

array_map(function ($item){
    return new Produto($item['id'],
        $item['tipo'],
        $item['nome'],
        $item['descricao'],
        $item['imagem'],
        $item['preco']
);
}, $produtos);

var_dump($dadosCafe);
exit();
