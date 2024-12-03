<?php
require("../backend/classes/products.class.php");

$id = $_POST['id'];

$deleta = new Produtos();

$deleta->fazerDelecaoProduto($id);

$deleta->__destruct();