<?php
include("navbar.php");
include("login_ativo.php");
?>

    
<div class="titulo"><h1>Cadastrar Aluno</h1></div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>CPF</th>
                    <th>Plano</th>
                    <th>Data Matricula</th>
                    <th>Ativo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true">00/00/0000</td>
                    <td contenteditable="true">-</td>
                </tr>
                </tr>
            </tbody>
        </table>
        <div class="button-container text-center">
            <button class="btn btn-primary">Cadastrar</button>
            <button class="btn btn-secondary">Voltar</button>
        </div>
    </div>

    <script>
        function adicionarLinha() {
            const tabela = document.querySelector("tbody");
            const novaLinha = document.createElement("tr");
            novaLinha.innerHTML = `
                <td contenteditable="true"></td>
                <td contenteditable="true"></td>
                <td contenteditable="true"></td>
                <td contenteditable="true" style="border: 2px solid blue;"></td>
                <td contenteditable="true"></td>
                <td contenteditable="true">00/00/0000</td>
                <td contenteditable="true">-</td>
            `;
            tabela.appendChild(novaLinha);
        }
    </script>
</body>
</html>
