USE `ShoPET`;

DELIMITER $$
USE `ShoPET`$$
CREATE DEFINER = CURRENT_USER TRIGGER `ShoPET`.`categoria_BEFORE_DELETE` BEFORE DELETE ON `categoria` FOR EACH ROW
BEGIN
DELETE FROM produto WHERE OLD.nomecat = produto.nomecat;
END$$

USE `ShoPET`$$
CREATE DEFINER = CURRENT_USER TRIGGER `ShoPET`.`petiano_BEFORE_DELETE` BEFORE DELETE ON `petiano` FOR EACH ROW
BEGIN
DELETE FROM produto WHERE OLD.idpetiano = produto.idpetiano;
END$$

USE `ShoPET`$$
CREATE DEFINER = CURRENT_USER TRIGGER `ShoPET`.`produto_BEFORE_DELETE` BEFORE DELETE ON `produto` FOR EACH ROW
BEGIN
DELETE FROM grupopedido WHERE OLD.idproduto = grupopedido.idproduto;
DELETE FROM carrinho WHERE OLD.idproduto = carrinho.idproduto;
END$$

USE `ShoPET`$$
CREATE DEFINER = CURRENT_USER TRIGGER `ShoPET`.`cliente_BEFORE_DELETE` BEFORE DELETE ON `cliente` FOR EACH ROW
BEGIN
DELETE FROM usuario WHERE usuario.idcliente = OLD.idcliente;
DELETE FROM pedido WHERE pedido.idcliente = OLD.idcliente;
DELETE FROM carrinho WHERE carrinho.idcliente = OLD.idcliente;
END$$

USE `ShoPET`$$
CREATE DEFINER = CURRENT_USER TRIGGER `ShoPET`.`pedido_BEFORE_DELETE` BEFORE DELETE ON `pedido` FOR EACH ROW
BEGIN
DELETE FROM grupopedido WHERE OLD.idpedido = grupopedido.idpedido;
END$$


DELIMITER ;