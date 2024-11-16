DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `relatorio_vendas_periodo`(IN data_inicio DATE, IN data_fim DATE)
BEGIN
    SELECT 
        v.data_venda,
        p.nome AS produto,
        pv.quantidade,
        (pv.quantidade * p.preco) AS total_venda
    FROM 
        vendas v, produtosvendas pv
    INNER JOIN 
        produtos p ON pv.idProduto = p.id AND pv.idVenda = v.id
    WHERE
        v.data BETWEEN data_inicio AND data_fim
    ORDER BY 
        v.data DESC;
END$$
DELIMITER ;