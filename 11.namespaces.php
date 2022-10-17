<?php
require 'classes/produto.php';
require 'models/produto.php';

use \classes\Produto as ProdutoClasses;
use \models\Produto as ProdutoModels;

$produto1 = new ProdutoModels();
$produto1->mostrarDetalhes();

$produto2 = new ProdutoClasses();
$produto2->mostrarDetalhes();