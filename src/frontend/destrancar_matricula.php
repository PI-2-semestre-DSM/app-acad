<?php
require("../backend/classes/aluno.class.php");
include("login_ativo.php");

$id = $_POST['id'];

$tranca = new Aluno();
$tranca->obterDestrancarMatricula($id);

$tranca->__destruct();

header("Location: alunos.php");