<?php

class Pedido {
    public $numero;
    public $cliente;
}

class Cliente{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Igor Gabriel";
$cliente->endereco = "Rua doze de Outubro, nº 93";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente;

$dados = [
    'numero' => $pedido->numero,
    'nome do cliente' => $pedido->cliente->nome,
    'endereco' => $pedido->cliente->endereco
];

var_dump($dados);