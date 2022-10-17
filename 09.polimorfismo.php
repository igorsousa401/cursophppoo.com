<?php

class Animal{

    public function Andar() {
        echo "O animal Andou!";
    }

    public function Correr() {
        echo "O animal Correu!";
    }
}

class Cavalo extends Animal{

    public function Andar() {
        $this->Correr();
        
    }
}

$cavalo = new Cavalo();
$cavalo->Andar();