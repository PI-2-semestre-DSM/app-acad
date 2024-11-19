CREATE TRIGGER `verifica_estoque` BEFORE INSERT ON `produtosvendas`
 FOR EACH ROW BEGIN
    DECLARE estoque_atual INT;

    SELECT estoque INTO estoque_atual
    FROM produtos
    WHERE id = NEW.id;

    IF estoque_atual < NEW.quantidade THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Estoque insuficiente para realizar a venda.';
    END IF;
END