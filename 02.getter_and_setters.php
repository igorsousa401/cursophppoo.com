<?php

class Login{
    private $email;
    private $senha;

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

$logar = new Login();
$logar->setEmail("dev.igorsousa()//@gmail.com");
$logar->setSenha("flamengo123");
$logar->logar();
echo "<br>";
echo $logar->getEmail();