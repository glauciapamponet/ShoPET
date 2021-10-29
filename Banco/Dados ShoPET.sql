-- CATEGORIA
INSERT INTO `shopet`.`categoria` (`nomecat`) VALUES ('Decoração');
INSERT INTO `shopet`.`categoria` (`nomecat`) VALUES ('Acessórios');
INSERT INTO `shopet`.`categoria` (`nomecat`) VALUES ('Instrumentos');
INSERT INTO `shopet`.`categoria` (`nomecat`) VALUES ('Moda');
INSERT INTO `shopet`.`categoria` (`nomecat`) VALUES ('Alimentação');
INSERT INTO `shopet`.`categoria` (`nomecat`) VALUES ('Estudos');
INSERT INTO `shopet`.`categoria` (`nomecat`) VALUES ('Cargos');
INSERT INTO `shopet`.`categoria` (`nomecat`) VALUES ('Escritório');
INSERT INTO `shopet`.`categoria` (`nomecat`) VALUES ('Contas');
INSERT INTO `shopet`.`categoria` (`nomecat`) VALUES ('Eletrônicos');
INSERT INTO `shopet`.`categoria` (`nomecat`) VALUES ('Beleza');

-- PETIANOS
INSERT INTO `shopet`.`petiano` (`nomepetiano`) VALUES ('Stefany');
INSERT INTO `shopet`.`petiano` (`nomepetiano`) VALUES ('Furquim');
INSERT INTO `shopet`.`petiano` (`nomepetiano`) VALUES ('Glaucia');
INSERT INTO `shopet`.`petiano` (`nomepetiano`) VALUES ('Giovanna');
INSERT INTO `shopet`.`petiano` (`nomepetiano`) VALUES ('Thaís');
INSERT INTO `shopet`.`petiano` (`nomepetiano`) VALUES ('Cairolli');
INSERT INTO `shopet`.`petiano` (`nomepetiano`) VALUES ('Eler');
INSERT INTO `shopet`.`petiano` (`nomepetiano`) VALUES ('Alexandre');
INSERT INTO `shopet`.`petiano` (`nomepetiano`) VALUES ('Marin');
INSERT INTO `shopet`.`petiano` (`nomepetiano`) VALUES ('Sena');
INSERT INTO `shopet`.`petiano` (`nomepetiano`) VALUES ('João');
INSERT INTO `shopet`.`petiano` (`nomepetiano`) VALUES ('Caio');
INSERT INTO `shopet`.`petiano` (`nomepetiano`) VALUES ('Michelly');
INSERT INTO `shopet`.`petiano` (`nomepetiano`) VALUES ('PET');

-- PRODUTOS
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Almofada Nicholas Cage', '500.00', 'Acessórios', '1', '\\images\\Produtos\\1.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Pistola Stefanya', '500.00', 'Acessórios', '1', '\\images\\Produtos\\2.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Bandolim', '300.00', 'Instrumentos', '2', '\\images\\Produtos\\3.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Berrante', '500.00', 'Instrumentos', '2', '\\images\\Produtos\\4.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Camiseta Mickey Chapado', '35.00', 'Moda', '2', '\\images\\Produtos\\5.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Pão Frances - 1UN', '0.50', 'Alimentação', '14', '\\images\\Produtos\\6.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Porca ', '300.00', 'Decoração', '3', '\\images\\Produtos\\7.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Sobrinho da Glaucia (Sortido)', '1000.00', 'Acessórios', '3', '\\images\\Produtos\\8.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Curso de Teatro da Giovanna Arana', '600.00', 'Estudos', '4', '\\images\\Produtos\\9.jpg', '500', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Galão 25L de Mesa', '150.00', 'Acessórios', '4', '\\images\\Produtos\\10.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Bigode', '35.00', 'Moda', '4', '\\images\\Produtos\\11.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Gata', '120.00', 'Acessórios', '5', '\\images\\Produtos\\12.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Kit - Pintura de Cabelo', '70.00', 'Beleza', '5', '\\images\\Produtos\\13.jpg', '300', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Capa de Invisibilidade', '3000.00', 'Moda', '5', '\\images\\Produtos\\14.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Pumba ', '350.00', 'Decoração', '6', '\\images\\Produtos\\15.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Tiara de Cabelo', '35.00', 'Acessórios', '6', '\\images\\Produtos\\16.jpg', '2', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Chapéu de Agiota', '50.00', 'Moda', '6', '\\images\\Produtos\\17.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Balinha', '3.00', 'Alimentação', '6', '\\images\\Produtos\\18.jpg', '30', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Tenis do Tutor', '230.00', 'Moda', '7', '\\images\\Produtos\\19.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Caneca do Tutor', '50.00', 'Decoração', '7', '\\images\\Produtos\\20.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Cargo Senhor das Demandas', '3500.00', 'Cargos', '14', '\\images\\Produtos\\21.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Cargo Rei do Spotted', '3200.00', 'Cargos', '14', '\\images\\Produtos\\22.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Cargo Rei do W2M', '3500.00', 'Cargos', '14', '\\images\\Produtos\\23.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Cargo Paciente 0', '3000.00', 'Cargos', '14', '\\images\\Produtos\\24.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Cargo Banco Central PET', '3400.00', 'Cargos', '14', '\\images\\Produtos\\25.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Calendário Organizado', '2000.00', 'Escritório', '8', '\\images\\Produtos\\26.jpg', '50', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Alarme', '1500.00', 'Acessórios', '8', '\\images\\Produtos\\27.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Discord Organizado', '800.00', 'Contas', '8', '\\images\\Produtos\\28.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Drive Arrumado', '1300.00', 'Contas', '8', '\\images\\Produtos\\29.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Irmão', '270.00', 'Decoração', '9', '\\images\\Produtos\\30.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Microfone Quebrado', '30.00', 'Eletrônicos', '10', '\\images\\Produtos\\31.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Maleta de Levar Dinheiro', '80.00', 'Acessórios', '12', '\\images\\Produtos\\32.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Máscara - Lobisomem', '40.00', 'Moda', '11', '\\images\\Produtos\\33.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Narração', '35.00', 'Decoração', '11', '\\images\\Produtos\\34.jpg', '300', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Café do PET - 1 Chícara', '8.00', 'Alimentação', '14', '\\images\\Produtos\\35.jpg', '300', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Impressora Quebrada', '10.00', 'Eletrônicos', '14', '\\images\\Produtos\\36.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Otávio - 1UN', '100.00', 'Acessórios', '14', '\\images\\Produtos\\37.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Read Me Bem Feito', '1500.00', 'Escritório', '13', '\\images\\Produtos\\38.jpg', '2', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Planilha Compartilhada Alê e Michelly', '3000.00', 'Escritório', '14', '\\images\\Produtos\\39.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Coleção de Livros - PET Literário', '2000.00', 'Estudos', '14', '\\images\\Produtos\\40.jpg', '1', '1');
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Mapa do Drive PET-SI', '200.00', 'Escritório', '14', '\\images\\Produtos\\41.jpg', '1', '1');

-- STATUS
INSERT INTO `shopet`.`status` (`nomestatus`) VALUES ('Pedido Confirmado');
INSERT INTO `shopet`.`status` (`nomestatus`) VALUES ('Pedido Pago');
INSERT INTO `shopet`.`status` (`nomestatus`) VALUES ('Pedido Enviado');
INSERT INTO `shopet`.`status` (`nomestatus`) VALUES ('Pedido Entregue');
