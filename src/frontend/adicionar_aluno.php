<?php
include("navbar.php");
require_once("login_ativo.php");
require_once('../backend/classes/aluno.class.php');


if (isset($_POST['submit'])) {
    $nome = $_POST["nome"];
    $tel = $_POST["tel"];
    $cpf = $_POST["cpf"];
    $idPlano = $_POST["idPlano"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadastra = new Aluno();
        $cadastra->matricularAluno($nome, $tel, $cpf, $idPlano);
        $cadastra->__destruct();

        header("Location: alunos.php");
        exit();
    }
} ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula de alunos</title>
</head>

<body>
    <form class="form-horizontal" id="form_aluno" action="#" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="nome">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do aluno">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="tel">Telefone</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="tel" name="tel" placeholder="Telefone (somente numeros)">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="cpf">CPF</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="estoque"></label>
                <div class="col-sm-10">
                    <input type="radio" id="html" name="idPlano" value="1">
                    <label for="html">Mensal</label><br>
                    <input type="radio" id="css" name="idPlano" value="2">
                    <label for="css">Trimestral</label><br>
                    <input type="radio" id="javascript" name="idPlano" value="3">
                    <label for="javascript">Semestral</label><br>
                    <input type="radio" id="javascript" name="idPlano" value="4">
                    <label for="javascript">Anual</label>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-default" id="submit" value="Matricular aluno" name="submit">
                    </div>
                </div>
    </form>
</body>

</html>