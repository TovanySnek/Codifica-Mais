<?php

require_once "Animal.php";
require_once "Mamifero.php";

class Cachorro extends Mamifero implements AnimalInterface {

    public function fazerSom()
    {
        return "Latido\n";
    }
  
    public function fazerAnimalEmitirSom()
    {
        echo $this->fazerSom();
    }
}