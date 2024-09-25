<?php


require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/Helper.php';
require __DIR__ . '/../src/conectar_banco.php';  

session_start();

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
if ($caminho == '/produtos/salvar') {
    return $produto->salvar();
}
if ($caminho == '/produtos/deletar') {
    return $produto->deletar();
}
if ($caminho == '/produtos/atualizar') {
    return $produto->atualizar();
}

echo "Página não encontrada :(";
header('Location: /produtos');



?>