<?php

class Venda
{
    private $conn;

    // Construtor recebe a conexão do banco de dados
    public function __construct($dbConnection)
    {
        $this->conn = $dbConnection;
    }

    /**
     * Registrar uma venda no banco de dados.
     *
     * @param int $idProduto ID do produto vendido
     * @param int $quantidadeVendida Quantidade vendida
     * @return bool Retorna true se a venda foi registrada com sucesso, false caso contrário
     */
    public function registrarVenda($idProduto, $quantidade)
    {
        try {
            // Query para inserir a venda
            $sql = "INSERT INTO produtosvendas (idProduto, quantidade) VALUES (:idProduto, :quantidade)";

            // Preparar a consulta
            $stmt = $this->conn->prepare($sql);

            // Associar os parâmetros
            $stmt->bindParam(':idProduto', $idProduto, PDO::PARAM_INT);
            $stmt->bindParam(':quantidade', $quantidade, PDO::PARAM_INT);

            // Executar a consulta
            if ($stmt->execute()) {
                return true; // Venda registrada com sucesso
            } else {
                return false; // Falha ao registrar a venda
            }
        } catch (PDOException $e) {
            if (strpos($e->getMessage(), 'Estoque insuficiente') !== false) {
                echo "Erro: Estoque insuficiente para este produto.";
            } else {
                echo "Erro ao registrar venda: " . $e->getMessage();
            }
            return false;
        }
        
    }
}