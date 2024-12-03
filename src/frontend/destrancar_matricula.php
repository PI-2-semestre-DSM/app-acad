<?php
require("../backend/classes/aluno.class.php");

$id = $_POST['id'];

$tranca = new Aluno();
print_r($id);
echo '   ';
$tranca->obterDestrancarMatricula($id);

$tranca->__destruct();