<?php

class Veiculo1 {
    protected $modelo;
    public $cor;
    public $ano;

    private function acelerar() {
        echo "Acelerou!<br>";
    }

    public function parar() {
        echo "Parou!<br>";
    }
    
    public function setModelo($m) {
        $this->modelo = $m;
    }
    public function getModelo() {
        return $this->modelo;
    }
    public function exibir() {
        $this->acelerar();
    }
}

class Carro1 extends Veiculo1{
}

class Moto1 extends Veiculo1{
}

$carro1 = new Carro1();
$carro1->setModelo("Prisma");
echo $carro1->getModelo()."<br>";
$carro1->exibir();