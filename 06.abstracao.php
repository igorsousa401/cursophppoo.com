<?php

abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s) {
        $this->saldo = $s;
        echo "Saldo Inicial: $this->saldo.<br>";
    }
    public function getSaldo() {
        return $this->saldo;
    }

    abstract protected function Sacar($s);

    abstract protected function Depositar($d);
}

class Itau extends Banco{
    public function Sacar($s){
        $this->saldo -= $s;
        echo "Sacou $s, ficou com : ".$this->saldo."<br>";
    }
    
    public function Depositar($d) {
        $this->saldo += $d;
        echo "Depositou $d, ficou com : ".$this->saldo."<br>";
    }
}

$itau = new Itau();
$itau->setSaldo(1000);
$itau->Sacar(500);
$itau->Depositar(1000);
