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
INSERT INTO `shopet`.`produto` (`nomeprod`, `precoprod`, `nomecat`, `idpetiano`, `pathimage`, `estoque`, `status_dispo`) VALUES ('Café do PET - 1 Xícara', '8.00', 'Alimentação', '14', '\\images\\Produtos\\35.jpg', '300', '1');
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

-- DESCRICAO
ALTER TABLE `produto` ADD `desc` varchar(500);
UPDATE `shopet`.`produto` SET `desc` = 'Almofada mágica toda nicolas cagezinha com lantejoulas.<br>Afinal, quem nunca quis ter Nicolas Cage te observando 24 horas por dia?' WHERE (`idproduto` = '1');
UPDATE `shopet`.`produto` SET `desc` = 'Violência não é a resposta.<br>Ela é a pergunta e a resposta é \"sim\".<br>Adquira JÁ Stefanya, a pistola da Stefany. Ideal para ameaças!<br>OBS: SHOPET não se responsabiliza por quais atos não condizentes com a lei realizados com auxilio do produto.' WHERE (`idproduto` = '2');
UPDATE `shopet`.`produto` SET `desc` = 'Equipe SHOPET lamenta decepcionar, mas: não, não é o bigulim do Furquim.' WHERE (`idproduto` = '3');
UPDATE `shopet`.`produto` SET `desc` = 'Ideal para convocação de cornos. Contudo, para tocar exige muita pratica e o título de corno-mestre.' WHERE (`idproduto` = '4');
UPDATE `shopet`.`produto` SET `desc` = 'Sério, Furquim, de onde veio essa foto?' WHERE (`idproduto` = '5');
UPDATE `shopet`.`produto` SET `desc` = 'Famoso PÃO.<br>Adquirindo 51 unidades você ganha um café do PET de brinde!' WHERE (`idproduto` = '6');
UPDATE `shopet`.`produto` SET `desc` = 'Porca de pelúcia com mais idade que metade dos petianos atuais. O produto é acompanhado de um espírito possessor.<br>OBS: roupinha de anjo não inclusa.' WHERE (`idproduto` = '7');
UPDATE `shopet`.`produto` SET `desc` = 'Receba, aleatoriamente, 1 unidade de sobrinho. Talvez o sobrenome da Glaucia, talvez o literal sobrinho dela.' WHERE (`idproduto` = '8');
UPDATE `shopet`.`produto` SET `desc` = 'O famoso, o grandíssimo e único Curso de Teatro da Giovanna Arana. Adquirindo esse curso você automaticamente será empurrado para tarefas sob a justificativa de \"ah, você fez 5 anos de teatro\".<br>Bônus de item: adquira popularidade entre os professores do curso.' WHERE (`idproduto` = '9');
UPDATE `shopet`.`produto` SET `desc` = 'No final de toda ata de reunião geral do PET-SI consta os dizeres \"bebam água\". Giovanna leva hidratação a sério e você deveria também. Comece agora obtendo o galão de 15L da Giovanna Arana!' WHERE (`idproduto` = '10');
UPDATE `shopet`.`produto` SET `desc` = 'Item da skin \"Giovanno, o esquerdomacho\". O bigode do Giovanno acrescenta um boost na confiaça para que você possa falar qualquer coisa como se tivesse 100% de razão.' WHERE (`idproduto` = '11');
UPDATE `shopet`.`produto` SET `desc` = 'Gata Medusa. Às vezes ela tenta se comunicar atrás de mensagens criptografadas.<br>\"aksj8e4rgf iowRF89YFTegbmv\" - disse ela certa vez, quando teve a chance de usar o teclado.<br>O grupo PET-SI trabalha para decifrar tal criptografia e assim entender os segredos que a gata tenta revelar. ' WHERE (`idproduto` = '12');
UPDATE `shopet`.`produto` SET `desc` = 'Produto ideal para destruir seu cabelo! O kit inclui todas as cores do arco-íris, com exceção do laranja.<br>OBS: Não garantimos fidelidade de cores. Às vezes os verdes se tornam amarelos e os cabelos loiros podem ficar laranja. ' WHERE (`idproduto` = '13');
UPDATE `shopet`.`produto` SET `desc` = '[descrição invisível]' WHERE (`idproduto` = '14');
UPDATE `shopet`.`produto` SET `desc` = 'É o Pumba. Do Cairolli.<br>OBS: catarro no nariz não incluso, não se deixa enganar pelas imagens do conjunto de livros do PET.' WHERE (`idproduto` = '15');
UPDATE `shopet`.`produto` SET `desc` = 'Útil até para os mais carecas!' WHERE (`idproduto` = '16');
UPDATE `shopet`.`produto` SET `desc` = 'Você pode até tentar, mas mesmo com o chapéu ninguém nunca vai ser grande como ele, o maior agiota que o PET já teve. ' WHERE (`idproduto` = '17');
UPDATE `shopet`.`produto` SET `desc` = 'Faça como Vitor Cairolli e ande sempre com balinhas nos bolsos!' WHERE (`idproduto` = '18');
UPDATE `shopet`.`produto` SET `desc` = 'Tênis da sorte do maior corredor que a EACH já viu. Quando usado, o item adiciona +5 pontos de mobilidade.' WHERE (`idproduto` = '19');
UPDATE `shopet`.`produto` SET `desc` = 'Excelente para tomar um cafézinho do PET.' WHERE (`idproduto` = '20');
UPDATE `shopet`.`produto` SET `desc` = 'Adquirindo o cargo no servidor do PET no Discord você fica responsável por 90% das demandas de todos projetos e comissões do PET-SI.<br>Se tornar O Senhor das Demandas é um caminho sem volta. As demandas nunca param, mesmo depois de você sair do PET. Lhe desejamos boa sorte.<br>Bônus: Seu segundo nome será Felipão.<br>Portador original do cargo: Felipe Furquim' WHERE (`idproduto` = '21');
UPDATE `shopet`.`produto` SET `desc` = 'Mesmo com o cargo de Rei do Spotted no servidor do PET no Discord, ShoPET não garante que você de fato receberá spotteds. Ou você é o Rei do Spotted, ou você simplesmente não é. <br> Portador original do cargo: Otávio Nunes, passado para Giovanna Arana na nova geração.' WHERE (`idproduto` = '22');
UPDATE `shopet`.`produto` SET `desc` = 'O cargo de Rei do W2M no servidor do PET no Discord implica em proatividade e disposição em sempre realizar reuniões além, claro, de ser sinônimo de organização. Adquira já e seja como ele, seja como o Rei. <br> Portador original do cargo: Alexandre Kenji.' WHERE (`idproduto` = '23');
UPDATE `shopet`.`produto` SET `desc` = 'Com o cargo de Paciente 0 no servidor do PET no Discord você pode falar sem nunca saber se está ou não sendo ouvido! O cargo de Paciente 0 te dá acesso irrestrito à Síndrome de Sena. <br> Contraindicações: microfones saudáveis podem ser afetados. <br> Portador original do cargo: Guilherme Sena.' WHERE (`idproduto` = '24');
UPDATE `shopet`.`produto` SET `desc` = 'O cargo de Banco Central do PET no servidor do PET no Discord não é relacionado a patrocínios ou ao controle do dinheiro da entidade, mas sim a artes. Afinal, por que conseguir dinheiro se eu posso desenhar meu próprio dinheiro? <br> Portadora original: Thaís Bonjorni.' WHERE (`idproduto` = '25');
UPDATE `shopet`.`produto` SET `desc` = 'O Calendário do Alê é um item mágico no qual não importa quantos compromissos você tenha, ou se a quantidade demandada excede as 24 horas diárias, pois com este calendário você sempre arranjará tempo para TUDO! <br> O produto vem autografado pelo próprio Alê.' WHERE (`idproduto` = '26');
UPDATE `shopet`.`produto` SET `desc` = 'Dê tempo ao tempo com o cronômetro do Alê! Adquira AGORA e receba alguns minutinhos extras.' WHERE (`idproduto` = '27');
UPDATE `shopet`.`produto` SET `desc` = 'Cansado de dezenas de servidores do Discord acumulados? Desanimado em procurar um servidor específico em meio a uma bagunça? Pois com o Discord do Alê seus problemas serão resolvidos! Utilizando o Discord do Alê, você se tornará um exemplo em organização!' WHERE (`idproduto` = '28');
UPDATE `shopet`.`produto` SET `desc` = 'Com o Drive do Alê você nunca mais terá de se preocupar com documentos desorganizados. ' WHERE (`idproduto` = '29');
UPDATE `shopet`.`produto` SET `desc` = 'Já se sentiu sozinho? Ou com sede e não havia ninguém para buscar água para você? Garanta agora o Marinzinho e resolva seus problemas. Às vezes ocorrem aparições especiais do Marinzinho em reuniões do PET. ' WHERE (`idproduto` = '30');
UPDATE `shopet`.`produto` SET `desc` = 'Melhor que o terceiro cafézinho só o quarto cafézinho,não é? Compre agora, o famoso cafézinho do PET, pra quando você estiver com sono durante sua rotina acadêmica ou simplesmente apreciar o sabor dos grãos petianenses, esse café faz montanhas se moverem e EPs completarem quase sozinhos, num passe de mágica. <br>Atenção: não beba somente café no seu dia, beba água também!<br><br>Xícara não inclusa' WHERE (`idproduto` = '35');
UPDATE `shopet`.`produto` SET `desc` = 'Você já estava fazendo alguma tarefa, se exercitando ou até jogando e se sentiu um pouco desmotivado? Então esse produto é pra você! Adquira agora a sua prórpia narração pessoal do João!!<br>Você nunca mais vai ficar triste com uma narração pessoal, imagine como sua vida será melhor com o João narrando todos os seus passos em tempo real, 24 horas por dia!' WHERE (`idproduto` = '34');
UPDATE `shopet`.`produto` SET `desc` = 'Todos nós já sofremos com uma impressora em casa, sempre que precisamos ela decide que o cartucho de tinta acabou, mesmo que você tenha trocado essa semana.<br>Pra você relembrar os bons tempos passando raiva na salinha com a impressora, compre agora mesmo a impressora quebrada do PET, um item raro de colecionador, quem sabe você consiga alivar a sua raiva batendo nela.' WHERE (`idproduto` = '36');
UPDATE `shopet`.`produto` SET `desc` = 'Grandes poderes vem com grandes responsabilidades, se você é um empreendedor júnior, que aos 23 anos já possui um carro de luxo e casa própria comprando ações e investindo na internet, esse produto é pra você!<br>Com a Maleta de Levar Dinheiro, você não precisa se preocupar com o seu dinheiro, sua tecnologia de segurança PETsecurity garante que nínguem, além de Caio, consiga ter acesso a sua grana!' WHERE (`idproduto` = '32');
UPDATE `shopet`.`produto` SET `desc` = 'Mulher Triângulo? Shrek Saxofonista? Xícara de Café fugindo da polícia? O que é isso? Um episódio de Simpsons? Não, é algo muito melhor!<br>Todas essas celebridades citadas podem ser encontradas nos livros do PET Literário, projeto secreto do PET-SI, compre agora para se divertir com as histórias e conhecer mais personagens!<br>Apoio psicológico não incluido.' WHERE (`idproduto` = '40');
UPDATE `shopet`.`produto` SET `desc` = 'Otávio.' WHERE (`idproduto` = '37');
UPDATE `shopet`.`produto` SET `desc` = 'Mapas são essenciais para não se perder, certo? Bom... esse, nem tanto. Adquira agora a relíquia do PET-SI: o mapa desatualizado do Drive. Ele sempre estará lá para mostrar o caminho errado do que você precisa!' WHERE (`idproduto` = '41');
UPDATE `shopet`.`produto` SET `desc` = 'Se juntos já causam, imagine juntos!<br>Todo o domínio sobre a organização está nesse produto, dois petianos renomados pela sua organização se juntaram para fazer o item mais organizado do mundo, cuidado com seus olhos, você pode danificar a vista com a organização.' WHERE (`idproduto` = '39');
UPDATE `shopet`.`produto` SET `desc` = 'Equipe ShoPET alerta: nunca confie em lobisomens.' WHERE (`idproduto` = '33');
UPDATE `shopet`.`produto` SET `desc` = '¢นi໓ค໓໐ ¢໐๓ ค ๑นคli໓ค໓ē ໓ēŞŞē ๓i¢r໐f໐ຖē, คŞ pēŞŞ໐คŞ ຖค໐ งค໐ ēຖtēຖ໓ēr น๓ค pคlคงrค' WHERE (`idproduto` = '31');
UPDATE `shopet`.`produto` SET `desc` = 'Os boatos são verdadeiros, você irá chorar de emoção ao ler esse readme e talvez até esqueça o que você estava fazendo antes de ler.' WHERE (`idproduto` = '38');

<<<<<<< HEAD

-- TIPOPAG

INSERT INTO `shopet`.`tipopag` (`idtipopag`, `tipopag`) VALUES ('1', 'Boleto');
INSERT INTO `shopet`.`tipopag` (`idtipopag`, `tipopag`) VALUES ('2', 'PIX');
=======
-- TIPO PAGAMENTO
INSERT INTO shopet.tipopag (idtipopag, tipopag) VALUES ('1', 'Boleto');
INSERT INTO shopet.tipopag (idtipopag, tipopag) VALUES ('2', 'PIX');
>>>>>>> 0ba838c12e0e088aecddd2c66ffec617fff382b6
