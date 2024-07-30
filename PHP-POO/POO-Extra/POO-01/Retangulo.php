<?php

require_once 'Forma.php';

class Retangulo extends Forma {

    public function calcularArea()
    {
        $area = $this->altura * $this->largura;
        return $area;
    }

}