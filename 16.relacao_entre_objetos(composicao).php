<?php

class Pessoa {
    public function atribuirNome($nome) {
        return "O nome da Pessoa é $nome.";
    }
}

class Exibe{
    public $pessoa;
    public $nome;

    public function __construct($nome) {
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }
    
    public function exibir() {
        echo $this->pessoa->atribuirNome($this->nome);
    }
}

$exibirNome = new Exibe("Igor Gabriel");
$exibirNome->exibir();