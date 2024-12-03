<?php
require("../backend/classes/products.class.php");
include("login_ativo.php");

$id = $_POST['id'];

$deleta = new Produtos();

$deleta->fazerDelecaoProduto($id);

$deleta->__destruct();
header("Location: estoque.php");
