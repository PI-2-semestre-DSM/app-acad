<?php
include("navbar.php");
include("login_ativo.php");


require_once('../backend/classes/products.class.php');
require_once('../backend/classes/connection.class.php');


if (isset($_POST['submit'])) {

    $nome = $_POST["nome"];
    $desc = $_POST["desc"];
    $precoC = $_POST["precoCompra"];
    $precoV = $_POST["precoVenda"];
    $estoque = $_POST["estoque"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadastra = new produtos();
        $cadastra->criarProduto($nome, $desc, $precoC, $precoV, $estoque);

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
                        <input type="number" step="00.01" class="form-control" id="estoque" name="estoque" placeholder="Numero de itens">
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" id="submit" value="Cadastrar Produto" name="submit">
                        </div>
                    </div>
    </form>

</body>

</html>