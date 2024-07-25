<?php

class Produto{

    private $nome;
    private $preco;
    private $quantidadeEstoque;
    
    public function __construct($nome, $preco, $quantidadeEstoque)
    {   
        $this->nome = $nome;
        $this->preco = $preco;  
        $this->quantidadeEstoque = $quantidadeEstoque;
    }
    
    public function alterarPreco($novoPreco)
    {
        $this->preco = $novoPreco;
    }
    
    public function ajustarEstoque($quantidade)
    {
        $this->quantidadeEstoque = $quantidade;
    }
    
    public function exibirDetalhes()
    {
        return $this->nome.PHP_EOL;
        return $this->preco.PHP_EOL;
        return $this->quantidadeEstoque.PHP_EOL;
    }    
}