<?php

class RelatorioVendas
{
    private $conn;

    // Construtor recebe a conexão do banco de dados
    public function __construct($dbConnection)
    {
        $this->conn = $dbConnection;
    }

    /**
     * Chama a stored procedure para gerar o relatório de vendas em um intervalo de datas.
     *
     * @param string $dataInicio Data de início no formato 'YYYY-MM-DD'
     * @param string $dataFim Data de fim no formato 'YYYY-MM-DD'
     * @return array Retorna um array com os resultados do relatório ou false em caso de erro
     */
    public function gerarRelatorio($dataInicio, $dataFim)
    {
        try {
            // Chama a stored procedure passando as datas como parâmetros
            $sql = "CALL relatorio_vendas_periodo(:data_inicio, :data_fim)";
            $stmt = $this->conn->prepare($sql);

            // Bind dos parâmetros
            $stmt->bindParam(':data_inicio', $dataInicio, PDO::PARAM_STR);
            $stmt->bindParam(':data_fim', $dataFim, PDO::PARAM_STR);

            // Executa a stored procedure
            $stmt->execute();

            // Armazena os resultados
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $resultados;
        } catch (PDOException $e) {
            echo "Erro ao gerar relatório: " . $e->getMessage();
            return false;
        }
    }
}
