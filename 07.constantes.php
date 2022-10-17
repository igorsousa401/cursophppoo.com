<?php

use Pessoa as GlobalPessoa;

class Pessoa {
    const nome = "Igor";

    public function exibirNome() {
        echo self::nome;
    }
}

class Igor extends Pessoa{
    const nome = "Gabriel";

    public function exibirNome() {
        echo parent::nome;
    }
}
$igor = new Igor();
$igor->exibirNome();