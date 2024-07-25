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
        echo $this->nome.PHP_EOL;
        echo $this->preco.PHP_EOL;
        echo $this->quantidadeEstoque.PHP_EOL;
        
    }    
}