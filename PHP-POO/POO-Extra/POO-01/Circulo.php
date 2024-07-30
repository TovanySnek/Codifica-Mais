<?php

require_once 'Forma.php';

class Circulo extends Forma {

    public function calcularArea()
    {
        $pi = 3.14159;
        $area = $pi * $this->largura;
        return $area;
    }

}