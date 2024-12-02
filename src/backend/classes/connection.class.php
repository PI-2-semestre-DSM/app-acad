<?php
require_once("../backend/database.php");


/*require_once('../database.php');*/

class ConexaoBancoDeDados
{
  private $conexao;

  public function __construct()
  {
    $this->conectar();
  }

  private function conectar()
  {
    global $host, $user, $password, $database;
    try {
      $this->conexao = new PDO("mysql:host=$host;dbname=$database", $user, $password);
      $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo ("Falha na conexão: " . $e->getMessage());
      exit();
    }
  }

  public function obterConexao()
  {
    return $this->conexao;
  }

  public function __destruct()
  {
    $this->conexao = null;
  }
}
