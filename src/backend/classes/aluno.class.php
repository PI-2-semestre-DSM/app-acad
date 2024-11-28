<?php
require("connection.class.php");

class Aluno
{
  private $conexao;

  public function __construct()
  {
    $conectarDB = new ConexaoBancoDeDados();
    $this->conexao = $conectarDB->obterConexao();
  }

  private function listaAlunos()
  {
    try {
      $sql = "SELECT a.id, a.nome, a.telefone, a.cpf, a.dataMatricula, a.ativo, p.tipoPlano , p.valor FROM alunos a JOIN planos p ON a.idPlano = p.id;";
      $alunos = $this->conexao->prepare($sql);
      $alunos->execute();
      return $alunos->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo "Erro: " . $e->getMessage();
      return false;
    }
  }

  private function trancarMatricula($idAluno)
  {
    try {
      $sql = "UPDATE alunos SET ativo = false WHERE :idAluno";

      $preparaQuery = $this->conexao->prepare($sql);

      $preparaQuery->execute([
        ':idAluno' => $idAluno
      ]);
      return true;
    } catch (PDOException $e) {
      echo "Erro atualizar matrícula: " . $e->getMessage();
      return false;
    }
  }

  // Adicionar método para atualizar dados do aluno (nome, cpf, telefone)

  public function obterListaDeAlunos()
  {
    return $this->listaAlunos();
  }

  public function obterTrancarMatricula($id)
  {
    return $this->trancarMatricula($id);
  }
}
