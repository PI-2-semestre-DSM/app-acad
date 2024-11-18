CREATE TRIGGER `atualizaEstoque` AFTER INSERT ON `produtosvendas`
 FOR EACH ROW BEGIN
    UPDATE produtos
    SET estoque = estoque - NEW.quantidade
    WHERE id = NEW.idProduto;
END