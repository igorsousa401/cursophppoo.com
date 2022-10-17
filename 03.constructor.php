<?php

class Login1{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){
        $this->email = $email;
        $this->senha = $senha;
        $this->nome = $nome;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function logar(){
        if($this->email == "dev.igorsousa@gmail.com" and $this->senha == "flamengo123") {
            echo "Logado com sucesso!!";
        } else{
            echo "Dados inválidos!!";
        }
    }
}

$logar = new Login1("dev.igorsousa@gmail.com", "flamengo123", "Igor Gabriel");
$logar->logar();
echo "<br>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();
echo "<br>";
echo $logar->getNome();
