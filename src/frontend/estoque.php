<?php
include("navbar.php");
include("login_ativo.php");
require("../backend/classes/products.class.php");

?>

<div class="titulo">
    <h1>Estoque</h1>
</div>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>venda</th>
                <th>Estoque</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $cria_tabela = new Produtos();




            if ($cria_tabela != null) {

                foreach ($cria_tabela->obterProdutos() as $row) {


                    $id = $row['id'];
                    $titulo = $row['titulo'];
                    $desc = $row['descricao'];
                    $precoC = $row['precoCompra'];
                    $precoV = $row['precoVenda'];
                    $estoque = $row['estoque'];
                    echo "<tr>
                  <td contenteditable='true'>$titulo</td>
                  <td contenteditable='true'>$desc</td>
                  <td contenteditable='true'>$precoC</td>
                  <td contenteditable='true'>$precoV</td>
                  <td contenteditable='true'>$estoque</td>
                  <form id='deleta'>
                  <input name='id' value='$id' type='hidden'>
                  <td><button formmethod='POST' formaction='deleta.php' name='$id' type='submit'>Deletar</button></td>
                  </form>
              </tr>";
                }
            }

            $cria_tabela->__destruct();
            ?>



        </tbody>
    </table>


    <div class="button-container text-center">
        <button class="btn btn-primary"><a href="adicionar_prod.php" style="text-decoration:none; color:#FFF">Adicionar
                Produtos</a></button>
        <button class="btn btn-secondary"><a href="pagina_inicial.php"
                style="text-decoration:none; color:#FFF">Voltar</a></button>

    </div>
</div>


</body>

</html>