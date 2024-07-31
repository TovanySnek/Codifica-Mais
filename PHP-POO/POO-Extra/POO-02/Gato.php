<?php

require_once "Animal.php";
require_once "Mamifero.php";

class Gato extends Mamifero implements AnimalInterface {

    public function fazerSom()
    {
        return "Meow\n";
    }

    public function fazerAnimalEmitirSom()
    {
        echo $this->fazerSom();
    }

  
}