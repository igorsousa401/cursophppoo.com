<?php

class Produtos {
    public $nome;
    public $valor;

    public function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}


class Carrinho {

    public $produtos;


    public function adicionar(Produtos $produto) {
        $this->produtos[] = $produto;
    }

    public function exibir() {
        foreach($this->produtos as $produto) {
            echo $produto->nome."<br>";
            echo $produto->valor."<hr>";
        }
    }
}

$produto1 = new Produtos("Notebook", 1500);
$produto2 = new Produtos("Smartphone", 2000);

$carrinho = new Carrinho();
$carrinho->adicionar($produto1);
$carrinho->adicionar($produto2);

$carrinho->exibir();