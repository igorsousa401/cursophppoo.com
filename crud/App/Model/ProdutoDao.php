<?php

namespace App\Model;

class ProdutoDao {
    public function Create(Produto $p) {
        $sql = 'INSERT INTO produtos (nome, preco) VALUES (?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getPreco());

        $stmt->execute();
    }

    public function Read() {

        $sql = "SELECT * FROM produtos";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $resultado = $stmt->FetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        } else{
            return [];
        }


    }

    public function Update(Produto $p) {

        $sql = "UPDATE produtos SET nome = ?, preco = ? WHERE id = ?";

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getPreco());
        $stmt->bindValue(3, $p->getId());

        $stmt->execute();

        
    }

    public function Delete($id) {

        $sql = "DELETE FROM produtos WHERE id = ?";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        
    }
}