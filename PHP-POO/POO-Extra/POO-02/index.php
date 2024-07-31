<?php

require_once "Animal.php";
require_once "Mamifero.php";
require_once "Cachorro.php";
require_once "Gato.php";

$meuGato = new Gato("Mrow");

$meuGato->fazerAnimalEmitirSom() . PHP_EOL;

$meuCachorro = new Cachorro("Labrador");

$meuCachorro->fazerAnimalEmitirSom() . PHP_EOL;

