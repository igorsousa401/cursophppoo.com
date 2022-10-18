<?php


class Pessoa {
    private $dados = [];

    public function __set($nome, $value) {
        $this->dados[$nome] = $value;
    }

    public function __get($nome) {
        return $this->dados[$nome];
    }

    public function __toString() {
        return "Tentei exibir o objeto!";
    }

    public function __invoke() {
        return "O objeto como function!";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Igor";
$pessoa->idade = 20;
$pessoa->sexo = "masculino";
echo $pessoa->nome."<br>";
echo $pessoa->idade."<br>";
echo $pessoa->sexo."<br>";

echo $pessoa."<br>";
echo $pessoa();