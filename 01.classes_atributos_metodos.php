<?php

class Pessoa{
    public $nome;
    public $idade;
    public $peso;

    public function falar(){
        echo "$this->nome, de idade $this->idade, falou!!<br>";
    }
}

$igor = new Pessoa();
$igor->nome = "Igor Gabriel";
$igor->idade = 20;
$igor->peso = 90;

$igor->falar();
