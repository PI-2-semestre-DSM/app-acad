<?php
require("../backend/classes/aluno.class.php");

$id = $_POST['id'];

$tranca = new Aluno();

$tranca->obterTrancarMatricula($id);

$tranca->__destruct();