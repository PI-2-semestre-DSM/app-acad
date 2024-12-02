<?php
include("navbar.php");
include("login_ativo.php");
?>
    <div class="titulo"><h1>Estoque</h1></div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    
                </tr>
                <tr>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    
                </tr>
                <tr>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    
                </tr>
            </tbody>
        </table>
        <div class="button-container text-center">
            <button  class="btn btn-primary"><a href="adicionar_prod.php" style="text-decoration:none; color:#FFF">Adicionar Produtos</a></button>
            <button class="btn btn-secondary"><a href="pagina_inicial.php" style="text-decoration:none; color:#FFF">Voltar</a></button>
        </div>
    </div>

   
</body>
</html>