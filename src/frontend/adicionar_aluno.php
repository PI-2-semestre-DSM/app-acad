<?php
include("navbar.php");
include("login_ativo.php");


require_once('../backend/classes/aluno.class.php');

if (isset($_POST['submit'])) {

    $nome = $_POST["nome"];
    $tel = $_POST["tel"];
    $cpf = $_POST["cpf"];
    $idPlano = $_POST["plano"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadastra = new Aluno();
        /* $cadastra->(); */

        $cadastra->__destruct();

        header("Location: estoque.php");
        exit();
    }
}



?>


<body>

    <form class="form-horizontal" id="form_produto" action="#" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="nome">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do produto">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="desc">Descrição</label>
            <div class="col-sm-10">
                <input type="textarea" class="form-control" id="desc" name="desc" placeholder="Descrição do produto">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="precoCompra"></label>
            <div class="col-sm-10">
                <input type="number" step="0.01" class="form-control" id="precoCompra" name="precoCompra" placeholder="preço de compra">
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="precoVenda"></label>
                <div class="col-sm-10">
                    <input type="number" step="00.01" class="form-control" id="precoVenda" name="precoVenda" placeholder="preço de venda">
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="estoque"></label>
                    <div class="col-sm-10">
                        <input type="radio" id="html" name="fav_language" value="teste">
                        <label for="html">mensal</label><br>
                        <input type="radio" id="css" name="fav_language" value="CSS">
                        <label for="css">trimestral</label><br>
                        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                        <label for="javascript">semestral</label>
                        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                        <label for="javascript">semestral</label>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" id="submit" value="Cadastrar Produto" name="submit">
                        </div>
                    </div>
    </form>

</body>

</html>