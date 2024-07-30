<?php

class Forma{

    protected  $altura;
    protected  $largura;

    public function __construct($altura, $largura)
    {
        $this->altura = $altura;
        $this->largura = $largura;
    }

    public function calcularArea()
    {
        return 0;
    }

}