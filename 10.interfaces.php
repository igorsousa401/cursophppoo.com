<?php

interface Crud{
    public function Create($data);
    public function Read();
    public function Update();
    public function Delete();
}

class Noticia implements Crud{
    public function Create($data) {
        // Lógica para criar uma notícia
    }

    public function Read() {
        // Lógica para ler uma notícia
    }

    public function Update() {
        // Lógica para atualizar uma notícia
    }

    public function Delete() {
        // Lógica para deletar uma notícia
    }
}