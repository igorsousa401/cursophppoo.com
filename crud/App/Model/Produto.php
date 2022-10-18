<?php

namespace App\Model;

class Produto {
    private $id, $nome, $preco;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
       $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($n){
       $this->nome = $n;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($p){
        $this->preco = $p;
     }
}