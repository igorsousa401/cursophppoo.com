<?php
require_once 'vendor/autoload.php';

$produto = new App\Model\Produto();
$produto->setId(8);
$produto->setNome("Violão");
$produto->setPreco(600);

$produtoDao = new App\Model\ProdutoDao();
$produtoDao->Delete(2);
$produtoDao->Read();

foreach($produtoDao->Read() as $produto) {
    echo "Produto: ".$produto['nome']."<br>";
    echo "Preço: ".$produto['preco']."<br>";
    echo "<hr>";
}
