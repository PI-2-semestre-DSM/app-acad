<?php
require_once("connection.class.php");

class Aluno
{
  private $conexao;

  public function __construct()
  {
    $conectarDB = new ConexaoBancoDeDados();
    $this->conexao = $conectarDB->obterConexao();
  }

  private function novoAluno($nome, $telefone, $cpf, $idPlano)
  {
    try {
      $sql = "INSERT INTO alunos (nome, telefone, cpf, idPlano, dataMatricula) VALUES (:nome, :telefone, :cpf, :idPlano, :dataMatricula)";
      $now = date("Y-m-d H:i:s");

      $preparaQuery = $this->conexao->prepare($sql);

      $preparaQuery->execute([
        ':nome' => $nome,
        ':telefone' => $telefone,
        ':cpf' => $cpf,
        ':idPlano' => $idPlano,
        ':dataMatricula' => $now,
      ]);

      return true;
    } catch (PDOException $e) {
      echo "Erro ao matricular aluno: " . $e->getMessage();
      return false;
    }
  }



  private function listaAlunos()
  {
    try {
      $sql = "SELECT a.id, a.nome, a.telefone, a.cpf, a.dataMatricula, a.ativo, p.tipoPlano , p.valor FROM alunos a JOIN planos p ON a.idPlano = p.id ORDER BY a.id;";
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
      $sql = "UPDATE alunos SET ativo = false WHERE id = :idAluno";

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
  private function destrancarMatricula($idAluno)
  {
    try {
      $sql = "UPDATE alunos SET ativo = true WHERE id = :idAluno";

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
  public function obterDestrancarMatricula($id)
  {
    return $this->destrancarMatricula($id);
  }
  public function __destruct()
  {
    $this->conexao = null;
  }

  public function matricularAluno($nome, $telefone, $cpf, $tipoPlano)
  {
    $this->novoAluno($nome, $telefone, $cpf, $tipoPlano);
  }
}
