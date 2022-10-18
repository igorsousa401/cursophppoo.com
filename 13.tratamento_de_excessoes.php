<?php

class Newsletter {

    public function cadastrarEmail ($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Email Inválido!", 1);
        } else{
            echo "Email cadastrado com sucesso!";
        }
    }
}

$newsletter = new Newsletter();
try{
    $newsletter->cadastrarEmail("dev.igorsousa@");
} catch(Exception $e){
    echo "Erro: ".$e->getMessage()."<br>";
    echo "Código: ".$e->getCode()."<br>";
    echo "Linha: ".$e->getLine()."<br>";
    echo "Arquivo: ".$e->getFile()."<br>";
}