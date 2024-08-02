<?php

require_once "autoload.php";


class Produto implements ProdutoInterface{

    protected $sku;
    protected $nome;
    protected $unidadeMedida;
    protected $quantidade;
    protected $preco;

    public function __construct($nome, $sku, $unidadeMedida, $quantidade, $preco)
    {
        $this->nome = $nome;
        $this->sku = $sku;
        $this->unidadeMedida = $unidadeMedida;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
    }

    public function getNome()
    {
       return $this->nome;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function getUnidadeMedida()
    {
        return $this->unidadeMedida;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function getPreco()
    {
        return $this->preco;
    }

}