<?php

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function acelerar() {
        echo "Acelerou!<br>";
    }

    public function parar() {
        echo "Parou!<br>";
    }

    public function __construct($modelo, $cor, $ano) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }
}

class Carro extends Veiculo{
    public function limparParabrisa() {
        echo "Limpando o Parabrisa do carro $this->modelo!<br>";
    }
}

class Moto extends Veiculo{
    public function darGrau() {
        echo "Dando grau na moto $this->modelo!<br>";
    }
}

$carro1 = new Carro("Prisma", "azul", 2020);
$carro1->acelerar();
$moto1 = new Moto("Hornet", "preta", 2022);
$moto1->parar();
$carro1->limparParabrisa();
$moto1->darGrau();