<?php

namespace App;
class Produtos{

    public function listarProdutos()
    {

        
        
    }

    public function criarProduto()
    {



    }
    public function salvarProduto()
    {



    }
    public function editarProduto()
    {



    }
    public function atualizarProduto()
    {



    }
    public function deletarProduto()
    {
       


    }
}

array_map(function ($item){
    return new Produtos($item['id'],
        $item['tipo'],
        $item['nome'],
        $item['descricao'],
        $item['imagem'],
        $item['preco']
);
}, $produtos);

var_dump($dadosCafe);
exit();
