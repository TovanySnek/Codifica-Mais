<?php

require_once "autoload.php";

class ProdutoPerecivel extends Produto {
   
    protected $validade;

    public function __construct($nome, $sku, $unidadeMedida, $quantidade, $preco,$validade)
    {
        parent::__construct($nome, $sku, $unidadeMedida, $quantidade, $preco);
        $this->validade = $validade;
    }

    public function getValidade()
    {
        return $this->validade;
    }

}