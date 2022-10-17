<?php

class Pessoa {
    public $idade;

    public function __clone() {
        echo "Objeto Clonado!<br>";
    }
}

$pessoa1 = new Pessoa();
$pessoa1->idade = 25;

$pessoa2 = clone $pessoa1;
$pessoa2->idade = 35;
echo $pessoa1->idade."<br>";