<?php
ini_set('display_errors', '1'); // Ativa a exibição de erros
ini_set('display_startup_errors', '1'); // Ativa a exibição de erros de inicialização
error_reporting(E_ALL); // Exibe todos os erros, avisos e notificações
include("navbar.php");
require_once("login_ativo.php");
require_once("../backend/classes/aluno.class.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Alunos</title>
</head>

<body>
    <div class="titulo">
        <h1>Alunos</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Plano</th>
                    <th>Endereço</th>
                    <th>Ativo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cria_tabela = new Aluno();
                if ($cria_tabela != null) {

                    foreach ($cria_tabela->obterListaDeAlunos() as $row) {
                        $id = $row['id'];
                        $nome = $row['nome'];
                        $tel = $row['telefone'];
                        $cpf = $row['cpf'];
                        $plano = $row['tipoPlano'];
                        // fazer conversão de plano id para tipo de plano, fazer o msm para ativo
                        $matricula = $row['dataMatricula'];
                        $ativo = $row['ativo'];


                        if ($ativo == 0) {
                            $ativoresultado = 'nao';
                        } else {
                            $ativoresultado = 'sim';
                        }

                        if ($ativoresultado == 'sim') {
                            echo "
                            <tr>
                            <td>$nome</td>
                            <td>$tel</td>
                            <td>$cpf</td>
                            <td>$plano</td>
                            <td>$matricula</td>
                            <td>$ativoresultado</td>
                            <form id='deleta'>
                            <input name='id' value='$id' type='hidden'>
                            <td><button formmethod='POST' formaction='trancar_matricula.php' name='$id' type='submit'>Trancar</button></td>
                            </form>
                            </tr>";
                        } else {
                            echo "
                            <tr>
                            <td>$nome</td>
                            <td>$tel</td>
                            <td>$cpf</td>
                            <td>$plano</td>
                            <td>$matricula</td>
                            <td>$ativoresultado</td>
                            <form id='deleta'>
                            <input name='id' value='$id' type='hidden'>
                            <td><button formmethod='POST' formaction='Destrancar_matricula.php' name='$id' type='submit'>Destrancar</button></td>
                            </form>
                            </tr>";
                        }
                    }
                }
                $cria_tabela->__destruct();
                ?>
            </tbody>
        </table>
        <div class="button-container text-center">
            <button class="btn btn-primary"><a href="adicionar_aluno.php" style="text-decoration:none; color:#FFF">Adicionar
                    Alunos</a></button>
            <button class="btn btn-secondary"><a href="pagina_inicial.php"
                    style="text-decoration:none; color:#FFF">Voltar</a></button>
        </div>
    </div>

</body>

</html>