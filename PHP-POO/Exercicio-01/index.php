<?php

require_once "./Carro.php";

$meuCarro = new Carro("Volkswagen", "Gol", 2001);

echo $meuCarro->acelerar();

echo $meuCarro->freiar();