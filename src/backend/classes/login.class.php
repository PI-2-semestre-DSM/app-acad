<?php
require('connection.class.php');
class Login
{
  private $conexao;

  public function __construct()
  {
    $conectarDB = new ConexaoBancoDeDados();
    $this->conexao = $conectarDB->obterConexao();
  }

  public function obterConexao()
  {
    return $this->conexao;
  }

  public function verificarCredenciais($nomeDeUsuario, $senha)
  {
    try {
      $sql = "SELECT nomeDeUsuario, senha FROM usuarios WHERE nomeDeUsuario = :nomeDeUsuario";

      $preparaQuery = $this->conexao->prepare($sql);

      $preparaQuery->execute([
        ':nomeDeUsuario' => $nomeDeUsuario,
      ]);

      // Se for possível implementar hash de senha na criação do usuário. 
      // No entanto o sistema é de usuário único, sem maiores problemas por enquanto.
      if ($preparaQuery->rowCount() > 0) {
        $usuario = $preparaQuery->fetch(PDO::FETCH_ASSOC);
        print_r($usuario["senha"]);
        if (($senha == $usuario["senha"])) {
          return true;
        } else {
          echo "Credenciais incorretas / senha inválida...";
          return false;
        }
      } else {
        echo "Usuário não encontrado...";
        return false;
      }
    } catch (PDOException $e) {
      echo "Erro ao fazer login: " . $e->getMessage();
      return false;
    }
  }

  public function __destruct()
  {
    $this->conexao = null;
  }
}
