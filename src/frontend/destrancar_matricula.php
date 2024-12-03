<?php
require("../backend/classes/aluno.class.php");
include("login_ativo.php");

$id = $_POST['id'];

$tranca = new Aluno();
print_r($id);
echo '   ';
$tranca->obterDestrancarMatricula($id);

$tranca->__destruct();