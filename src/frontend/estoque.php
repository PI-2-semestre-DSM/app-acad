<?php
include("navbar.php");
include("login_ativo.php");
?>

    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Ativo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true" style="border: 2px solid blue;"></td>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
                </tr>
                <tr>
                    <td contenteditable="true"></td>
                    <td contenteditable="true"></td>
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
                    <td contenteditable="true"></td>
                    <td contenteditable="true">-</td>
                </tr>
            </tbody>
        </table>
        <div class="button-container text-center">
            <button onclick="adicionarLinha()" class="btn btn-primary">Adicionar Aluno</button>
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
                <td contenteditable="true"></td>
            `;
            tabela.appendChild(novaLinha);
        }
    </script>
</body>
</html>