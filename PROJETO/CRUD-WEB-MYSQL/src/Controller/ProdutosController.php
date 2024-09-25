<?php

namespace App\Controller;

class ProdutosController{

    public function listar()
    {
        require __DIR__ . '/../conectar_banco.php';

        $produtos = $pdo->query('SELECT * FROM produto;')->fetchAll(\PDO::FETCH_ASSOC);

        require __DIR__ . "/../View/Produto/listar.php";
        
    }

    public function criar()
    {

        require __DIR__ . "/../View/Produto/criar.php";

    }
    public function salvar()
    {
        
        $dados = $_POST;

        require __DIR__ . '/../conectar_banco.php';

        $dados = 'INSERT INTO produto (nome, sku, unidade_medida_id, valor, quantidade, categoria_id) VALUES (?, ?, ?, ? ,? ,?)';
        $statement = $pdo->prepare($dados);
        $statement->bindValue(1, $_POST['nome']);
        $statement->bindValue(2, $_POST['sku']);
        $statement->bindValue(3, $_POST['unidade_medida_id']);
        $statement->bindValue(4, $_POST['valor']);
        $statement->bindValue(5, $_POST['quantidade']);
        $statement->bindValue(6, $_POST['categoria_id']);

        if ($statement->execute() === true) {
            header("Location: /produtos");
        }
    }
    public function editar()
    {

        require __DIR__ . '/../conectar_banco.php';

        $id = $_GET['id'];
        $statement = $pdo->prepare('SELECT * FROM produto WHERE id = ?;');
        $statement->bindValue(1, $id);
        $statement->execute();
        $produto = $statement->fetch(\PDO::FETCH_ASSOC);

        require __DIR__ . "/../View/Produto/editar.php";

    }
    public function atualizar()
    {

        require __DIR__ . '/../conectar_banco.php';
        $dados = $_POST;
        $id = $_GET['id'];
        $dados = "UPDATE produto SET nome = ?, sku = ?, unidade_medida_id = ?, valor = ?, quantidade = ?, categoria_id = ? WHERE id = $id";
        $statement = $pdo->prepare($dados);
        $statement->bindValue(1, $_POST['nome']);
        $statement->bindValue(2, $_POST['sku']);
        $statement->bindValue(3, $_POST['unidade_medida_id']);
        $statement->bindValue(4, $_POST['valor']);
        $statement->bindValue(5, $_POST['quantidade']);
        $statement->bindValue(6, $_POST['categoria_id']);

        if ($statement->execute() === true) {
            header("Location: /produtos");;   
        }

    }
    public function deletar()
    {
       
        require __DIR__ . '/../conectar_banco.php';
        $id = $_GET['id'];
        $sql = 'DELETE FROM produto WHERE id = ?';
        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();
        header("Location: /produtos");

    }
}

