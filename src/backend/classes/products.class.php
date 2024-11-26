<?php
require('connection.class.php');
class Produtos
{
  private $conexao;

  public function __construct()
  {
    $conectarDB = new ConexaoBancoDeDados();
    $this->conexao = $conectarDB->obterConexao();
  }

  private function criarProduto($titulo, $descricao, $precoCompra, $precoVenda, $estoque)
  {
    if ($this->pesquisarProduto($titulo)) {
      echo "Produto já existente!";
      exit();
    }

    try {
      $sql = "INSERT INTO produtos (titulo, descricao, precoCompra, precoVenda, estoque) VALUES (:titulo, :descricao, :precoCompra, :precoVenda, :estoque) = :nomeDeUsuario";

      $preparaQuery = $this->conexao->prepare($sql);

      $preparaQuery->execute([
        ':titulo' => $titulo,
        ':descricao' => $descricao,
        ':precoCompra' => $precoCompra,
        ':precoVenda' => $precoVenda,
        ':estoque' => $estoque,
      ]);

      return true;
    } catch (PDOException $e) {
      echo "Erro ao fazer login: " . $e->getMessage();
      return false;
    }
  }

  private function listaDeProdutos()
  {
    try {
      $sql = "SELECT * FROM produtos";
      $produtos = $this->conexao->prepare($sql);
      $produtos->execute();
      return $produtos->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo "Erro: " . $e->getMessage();
      return false;
    }
  }

  private function deletarProduto($idProduto)
  {
    try {
      $sql = "DELETE FROM produto WHERE id=:id";

      $preparaQuery = $this->conexao->prepare($sql);

      $preparaQuery->execute([
        ':id' => $idProduto
      ]);

      if ($preparaQuery->rowCount() > 0) {
        echo "Produto deletado com sucesso!";
      } else {
        echo "Produto de ID $idProduto não encontrado.";
      }
    } catch (PDOException $e) {
      echo "Erro ao deletar o produto: " . $e->getMessage();
    }
  }

  public function obterProdutos()
  {
    return $this->listaDeProdutos();
  }

  public function novoProduto($titulo, $descricao, $precoCompra, $precoVenda, $estoque)
  {
    $this->criarProduto($titulo, $descricao, $precoCompra, $precoVenda, $estoque);
  }

  public function fazerDelecaoProduto($id)
  {
    $this->deletarProduto($id);
  }

  private function pesquisarProduto($titulo)
  {
    try {
      $sql = "SELECT titulo FROM produtos WHERE titulo = :titulo";
      $preparaQuery = $this->conexao->prepare($sql);
      $preparaQuery->execute([
        ":titulo" => $titulo
      ]);

      $verificacao = ($preparaQuery->rowCount() == 0) ? false : true;
      return $verificacao;
    } catch (PDOException $e) {
      echo "Erro ao encontrar produto: " . $e->getMessage();
    }
  }
}
