<?php

namespace App\Controller;
class ProdutosController{

    public function listar()
    {

        require __DIR__ . "/../View/Produto/listar.php";
        
    }

    public function criar()
    {

        require __DIR__ . "/../View/Produto/criar.php";

    }
    public function salvar()
    {

        echo "teste";

    }
    public function editar()
    {

        require __DIR__ . "/../View/Produto/editar.php";

    }
    public function atualizar()
    {

        echo "teste";

    }
    public function deletar()
    {
       
        echo "teste";

    }
}

