<?php

require_once "Animal.php";


class Mamifero implements AnimalInterface{

    protected  $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function fazerSom()
    {
    
    }

}