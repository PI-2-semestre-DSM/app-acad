<?php
class Pagamento
{
  private $conexao;
  public function __construct()
  {
    $conectarDB = new ConexaoBancoDeDados();
    $this->conexao = $conectarDB->obterConexao();
  }

  private function registrarPgtoMensalidade($idAluno, $idPlano, $dataPagamento)
  {
    try {
      $sql = "INSERT INTO pagamentosMensalidade (idAluno, idPlano, dataPagamento) VALUES (:idAluno, :idPlano, :dataPagamento)";

      $preparaQuery = $this->conexao->prepare($sql);

      $preparaQuery->execute([
        ':idAluno' => $idAluno,
        ':idPlano' => $idPlano,
        ':dataPagamento' => $dataPagamento,
      ]);
      return true;
    } catch (PDOException $e) {
      echo "Erro ao registrar pagamento: " . $e->getMessage();
      return false;
    }
  }

  public function registrarPagamento($idAluno, $idPlano, $dataPagamento)
  {
    $this->registrarPgtoMensalidade($idAluno, $idPlano, $dataPagamento);
  }
}
