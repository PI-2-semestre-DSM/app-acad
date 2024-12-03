<?php
require_once("../backend/classes/aluno.class.php");
include("login_ativo.php");

$id = $_POST['id'];

$tranca = new Aluno();

$tranca->obterTrancarMatricula($id);

$tranca->__destruct();
header("Location: alunos.php");
