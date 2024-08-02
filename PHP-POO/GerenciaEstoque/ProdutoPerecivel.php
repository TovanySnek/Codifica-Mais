<?php

require_once "autoload.php";

class ProdutoPerecivel extends Produto implements ProdutoInterface{
   
    protected $validade;

    public function __construct($validade)
    {
        $this->validade = $validade;
    }

    public function getValidade()
    {
        return $this->validade;
    }

}