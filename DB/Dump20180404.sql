CREATE DATABASE  IF NOT EXISTS `painel` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `painel`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: painel
-- ------------------------------------------------------
-- Server version	5.7.21-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `data` datetime NOT NULL,
  `comentario` longtext NOT NULL,
  PRIMARY KEY (`id_comentario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` VALUES (1,'Admin','2018-04-04 00:00:00','Muito bom'),(2,'User','2018-04-04 00:00:00','Legal!!!');
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` longtext NOT NULL,
  `autor` varchar(45) NOT NULL,
  `conteudo` longtext NOT NULL,
  `data` datetime NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Polícia descobre \'Casa da Moeda\' falsa na Zona Leste de SP','Lucas','<p style=\"text-align:center\"><span style=\"color:#e67e22\"><span style=\"font-size:48px\">P</span></span>oliciais da 5&ordf; Delegacia Patrim&ocirc;nio (Investiga&ccedil;&otilde;es sobre Roubo a Bancos) estouram na tarde desta ter&ccedil;a-feira (3) uma casa da moeda falsa em Cidade Tiradentes, na Zona Leste de S&atilde;o Paulo. A produ&ccedil;&atilde;o de moedas de R$ 0,50 e R$ 1 contava com equipamentos de beneficiamento de metais, presas e matrizes. Dois homens foram presos.</p>\r\n\r\n<p style=\"text-align:center\">A descoberta da ind&uacute;stria de moedas falsas surgiu durante apura&ccedil;&otilde;es de atividade de crime organizado. Os policiais tentavam localizar um dep&oacute;sito de armas quando encontraram o esquema. Os dois presos respondem por falsifica&ccedil;&atilde;o de moeda.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s2.glbimg.com/GyF6DmrX3Cp5hffRnYJr-UZIXMw=/0x0:1700x1065/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2018/g/x/qbeNpWSuSNAynC8TqXnA/maquinas1.jpg\" style=\"height:406px; width:648px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s2.glbimg.com/rFnILslDHsvzGuURmhfw0VWfZo0=/0x0:1700x1065/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2018/s/A/tXLu5ATDKuBk4QBnctZQ/maquinas3.jpg\" style=\"height:406px; width:648px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s2.glbimg.com/OcIYJxEQmd9WFniXfyImfWKO5yI=/0x0:1700x1065/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2018/7/B/LTXAzASYOZ3Ijube0zdw/maquinas4.jpg\" style=\"height:406px; width:648px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:22px\"><strong>Outra casa de falsifica&ccedil;&atilde;o</strong></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Em mar&ccedil;o, dois homens foram presos uma casa na Zona Sul de S&atilde;o Paulo falsificando dinheiro em casa. O lugar&nbsp;<a href=\"https://g1.globo.com/sp/sao-paulo/noticia/policia-prende-dupla-em-casa-da-moeda-clandestina-na-zona-sul-de-sp.ghtml\">tinha tantas c&eacute;dulas que ficou conhecido como Casa da Moeda do bairro</a>&nbsp;da Sa&uacute;de.</p>\r\n\r\n<p>Segundo a pol&iacute;cia, no local havia o equivalente a R$ 3,62 milh&otilde;es, US$ 4,3 mil e 100 euros.</p>\r\n\r\n<p>Dentro da casa simples, no lugar de m&oacute;veis havia m&aacute;quinas impressoras, papel e tinta, a mat&eacute;ria-prima do crime. Folhas que tinham acabado de ser impressas e que os fals&aacute;rios ainda iam cortar nota por nota.</p>\r\n','2018-04-04 00:00:00','maquinas2.jpg'),(2,'EUA anunciam tarifas sobre US$ 50 bilhões de importações da China','Lucas','<p><span style=\"font-size:48px\"><span style=\"color:#e67e22\">A </span></span>administra&ccedil;&atilde;o do presidente dos EUA, Donald Trump, disse nesta ter&ccedil;a-feira (3) que vai impor tarifas de 25% em cerca de 1.300 produtos importados da China. Os itens que ser&atilde;o tributados s&atilde;o produtos m&eacute;dicos, de tecnologia industrial e transporte. As&nbsp;<a href=\"https://g1.globo.com/economia/noticia/trump-anuncia-medidas-contra-importacoes-da-china.ghtml\">medidas haviam sido anunciadas no dia 22 de mar&ccedil;o, mas os EUA ainda n&atilde;o tinham informado a lista de produtos tributados</a>.</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://g1.globo.com/economia/noticia/trump-anuncia-medidas-contra-importacoes-da-china.ghtml\">Trump anuncia medidas contra China e vai impor tarifas a importa&ccedil;&otilde;es</a></li>\r\n	<li><a href=\"https://g1.globo.com/economia/noticia/china-adota-tarifas-sobre-produtos-dos-eua-e-tensao-comercial-aumenta.ghtml\">China adota tarifas sobre produtos dos EUA e tens&atilde;o comercial aumenta</a></li>\r\n</ul>\r\n\r\n<p>A divulga&ccedil;&atilde;o da lista acontece no dia seguinte ao&nbsp;<a href=\"https://g1.globo.com/economia/noticia/china-adota-tarifas-sobre-produtos-dos-eua-e-tensao-comercial-aumenta.ghtml\">an&uacute;ncio feito pela China de impor novas tarifas sobre 128 produtos norte-americanos</a>, de carne su&iacute;na congelada e vinho a certas frutas e nozes, ampliando a disputa entre as duas maiores economias do mundo em resposta &agrave;s tarifas dos EUA sobre as importa&ccedil;&otilde;es de a&ccedil;o e alum&iacute;nio. Elas afetam um valor total de US$ 3 bilh&otilde;es em produtos.</p>\r\n\r\n<p>Nesta ter&ccedil;a-feira, a&nbsp;<a href=\"https://g1.globo.com/economia/noticia/china-notifica-omc-sobre-imposicao-de-tarifas-contra-os-eua.ghtml\">China notificou a Organiza&ccedil;&atilde;o Mundial do Com&eacute;rcio (OMC) sobre suas medidas contra os EUA,</a>&nbsp;que s&atilde;o uma retalia&ccedil;&atilde;o a taxa&ccedil;&otilde;es dos EUA ao pa&iacute;s.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s2.glbimg.com/4XsVjkF6aeOO_XiSkE1YdQ6JpX0=/0x0:3500x2333/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2018/y/g/PdIcTbS6eBfiV9EwANoQ/2018-04-03t022944z-800744373-rc15deb0d240-rtrmadp-3-usa-trade-china.jpg\" style=\"height:432px; width:648px\" /></p>\r\n\r\n<p>O escrit&oacute;rio do Representante de Com&eacute;rcio dos EUA (USTR, na sigla em ingl&ecirc;s) revelou uma lista de produtos chineses, em maioria vendidos a empresas e n&atilde;o ao consumidor final, que representam quase US$ 50 bilh&otilde;es de importa&ccedil;&otilde;es anuais.</p>\r\n\r\n<p>Essa tributa&ccedil;&atilde;o pode impactar as cadeias de fornecimento de muitos fabricantes. A lista vai de produtos qu&iacute;micos a diodos emissores de luz, motocicletas e dispositivos odontol&oacute;gicos.</p>\r\n\r\n<p>As tarifas visam for&ccedil;ar mudan&ccedil;as nas pol&iacute;ticas do governo chin&ecirc;s que, segundo o USTR, resultam na transfer&ecirc;ncia &quot;n&atilde;o econ&ocirc;mica&quot; da propriedade intelectual dos EUA para empresas chinesas. No relat&oacute;rio,&nbsp;<a href=\"https://g1.globo.com/economia/tecnologia/noticia/por-que-os-eua-acusam-a-china-de-usar-hackers-para-roubar-segredos-industriais-entenda.ghtml\">os EUA acusam a China de usar hackers para roubar segredos industriais</a>&nbsp;de empresas americanas.</p>\r\n\r\n<p>A investiga&ccedil;&atilde;o da ag&ecirc;ncia autorizando as tarifas alega que a China tem sistematicamente procurado se apropriar indevidamente da propriedade intelectual dos EUA por meio de exig&ecirc;ncias de joint venture, regras injustas de licenciamento de tecnologia, compras de empresas de tecnologia dos EUA com financiamento estatal e roubo.</p>\r\n\r\n<p>A China negou que suas leis exijam transfer&ecirc;ncias de tecnologia e amea&ccedil;ou retaliar quaisquer tarifas norte-americanas com san&ccedil;&otilde;es comerciais pr&oacute;prias, com alvos potenciais como soja, aeronaves ou equipamento pesado dos EUA.</p>\r\n\r\n<h2>Retalia&ccedil;&atilde;o da China</h2>\r\n\r\n<p>Um documento de quinta-feira (29) mostrou que a&nbsp;<a href=\"https://g1.globo.com/economia/noticia/china-notifica-omc-sobre-imposicao-de-tarifas-contra-os-eua.ghtml\">China notificou a Organiza&ccedil;&atilde;o Mundial do Com&eacute;rcio (OMC)</a>&nbsp;de que est&aacute; impondo tarifas retaliat&oacute;rias equivalentes a US$ 611,5 milh&otilde;es sobre importa&ccedil;&otilde;es dos Estados Unidos que somam US$ 2,75 bilh&otilde;es, incluindo carne de porco, nozes e etanol, em resposta &agrave;s sobretaxas dos EUA sobre as importa&ccedil;&otilde;es de a&ccedil;o e alum&iacute;nio.</p>\r\n','2018-04-04 00:00:00','2018-03-25t223359z_1252958935_rc12492d8740_rtrmadp_3_usa-trump_cwWmh5W.jpg'),(3,'Mega-Sena pode pagar R$ 40 milhões nesta quarta','Lucas','<p><span style=\"font-size:48px\"><span style=\"color:#e67e22\">A</span></span> Caixa sorteia nesta quarta-feira (4) o concurso 2.028 da Mega-Sena. O pr&ecirc;mio est&aacute; estimado em R$ 40 milh&otilde;es para quem acertar as seis dezenas. O sorteio ocorre &agrave;s 20h (hor&aacute;rio de Bras&iacute;lia) desta quarta-feira (28) em Seara (SC).</p>\r\n\r\n<p>De acordo com a Caixa Econ&ocirc;mica Federal, o valor integral do pr&ecirc;mio, na poupan&ccedil;a, rende mensalmente R$ 154 mil em rendimentos. Tamb&eacute;m &eacute; poss&iacute;vel comprar, segundo o banco, 10 apartamentos de luxo.</p>\r\n\r\n<h2>Para apostar na Mega-Sena</h2>\r\n\r\n<p>As apostas podem ser feitas at&eacute; as 19h (de Bras&iacute;lia) do dia do sorteio, em qualquer lot&eacute;rica do pa&iacute;s. A aposta m&iacute;nima custa R$ 3,50.</p>\r\n\r\n<h2>Probabilidades</h2>\r\n\r\n<p>A probabilidade de vencer em cada concurso varia de acordo com o n&uacute;mero de dezenas jogadas e do tipo de aposta realizada. Para a aposta simples, com apenas seis dezenas, com pre&ccedil;o de R$ 3,50, a probabilidade de ganhar o pr&ecirc;mio milion&aacute;rio &eacute; de 1 em 50.063.860, segundo a Caixa.</p>\r\n\r\n<p>J&aacute; para uma aposta com 15 dezenas (limite m&aacute;ximo), com o pre&ccedil;o de R$ 17.517,50, a probabilidade de acertar o pr&ecirc;mio &eacute; de 1 em 10.003, ainda segundo a Caixa.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s2.glbimg.com/dbWgHL5bOPWm4Peg2KX2v8POMik=/0x0:4032x3024/1600x0/smart/filters:strip_icc()/s.glbimg.com/jo/g1/f/original/2017/02/07/img_3263.jpg\" style=\"height:486px; width:648px\" /></p>\r\n','2018-04-04 00:00:00','img_3263.jpg'),(5,'Comandante do Exército diz que \'compartilha anseio de repúdio à impunidade\'','Lucas','<p><span style=\"font-size:48px\"><span style=\"color:#e67e22\">S</span></span>em citar o julgamento do habeas corpus preventivo do ex-presidente Luiz In&aacute;cio Lula da Silva, previsto para esta quarta-feira (4) no Supremo Tribunal Federal, o comandante do Ex&eacute;rcito, general Eduardo Villas Boas, fez um coment&aacute;rio nesta ter&ccedil;a-feira (3) em &quot;rep&uacute;dio &agrave; impunidade&quot;.</p>\r\n\r\n<p>Nesta quarta, o STF decidir&aacute; se autoriza ou n&atilde;o a pris&atilde;o do ex-presidente, condenado por corrup&ccedil;&atilde;o e lavagem de dinheiro pelo Tribunal Regional Federal da 4&ordf; Regi&atilde;o (TRF-4), de segunda inst&acirc;ncia.</p>\r\n\r\n<p>Em duas mensagens consecutivas publicadas no Twitter, o general indaga se h&aacute; quem pense &quot;no bem do pa&iacute;s&quot;.</p>\r\n\r\n<p>&quot;Asseguro &agrave; Na&ccedil;&atilde;o que o Ex&eacute;rcito Brasileiro julga compartilhar o anseio de todos os cidad&atilde;os de bem de rep&uacute;dio &agrave; impunidade e de respeito &agrave; Constitui&ccedil;&atilde;o, &agrave; paz social e &agrave; Democracia, bem como se mant&eacute;m atento &agrave;s suas miss&otilde;es institucionais&quot;, disse na primeira mensagem.</p>\r\n\r\n<p>Logo depois, em novo post, questionou: &quot;O Ex&eacute;rcito Brasileiro julga compartilhar o anseio de todos os cidad&atilde;os de bem de rep&uacute;dio &agrave; impunidade e de respeito &agrave; Constitui&ccedil;&atilde;o, &agrave; paz social e &agrave; Democracia, bem como se mant&eacute;m atento &agrave;s suas miss&otilde;es institucionais. Nessa situa&ccedil;&atilde;o que vive o Brasil, resta perguntar &agrave;s institui&ccedil;&otilde;es e ao povo quem realmente est&aacute; pensando no bem do Pa&iacute;s e das gera&ccedil;&otilde;es futuras e quem est&aacute; preocupado apenas com interesses pessoais?&quot;.</p>\r\n','2018-04-04 00:00:00','general-villas-boas.jpg');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nivel` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@admin.com','11954632247','244.758.138-67','adcd7048512e64b48da55b027577886ee5a36350','1'),(2,'User','user@user.com','11936040403','169.947.418-42','adcd7048512e64b48da55b027577886ee5a36350','0'),(3,'User2','user2@user.com','1198852723','858.115.788-22','adcd7048512e64b48da55b027577886ee5a36350','0');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-04  5:09:53
