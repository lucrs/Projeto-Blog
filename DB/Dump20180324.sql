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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'231213','213213','<p>23121321</p>\r\n','2018-03-24 00:00:00','alok_132a9135_fabio_tito-g1.jpg'),(2,'Alok faz baladão com novinhos, show pirotécnico e \'vibe top\' no Lollapalooza','Lucas','<p><span style=\"font-size:48px\"><span style=\"color:#d35400\">O</span></span>DJ brasileiro Alok certamente fez a entrada mais apote&oacute;tica dessa edi&ccedil;&atilde;o do Lollapalooza. Sua chegada ao Palco Perry, nesta sexta-feira (23), foi precedida da seguinte sequ&ecirc;ncia:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Contagem regressiva</li>\r\n	<li>Show pirot&eacute;cnico</li>\r\n	<li>Uma introdu&ccedil;&atilde;o em ingl&ecirc;s com frases como: &quot;Voc&ecirc;s est&atilde;o preparados?&quot;</li>\r\n	<li>Uma grava&ccedil;&atilde;o com a voz do pr&oacute;prio m&uacute;sico contando sua hist&oacute;ria de vida</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;O que faz seu cora&ccedil;&atilde;o vibrar mais forte? O meu &eacute; a m&uacute;sica&quot;, diz ele no texto narrado. O p&uacute;blico ouvia de olhinhos fechados.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><iframe allow=\"autoplay; encrypted-media\" allowfullscreen=\"\" frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/a-YFdKSIoAY?rel=0\" width=\"560\"></iframe></p>\r\n\r\n<p>&quot;Hear me now&quot;, hit que al&ccedil;ou Alok ao estrelato, foi gasto logo no in&iacute;cio, com rea&ccedil;&atilde;o hist&eacute;rica da plateia. Goiano de 26 anos, o DJ bombou com o assovio grudento e a letra simples da m&uacute;sica no ano passado.</p>\r\n\r\n<p>&quot;Hear me now&quot; o levou ao top 30 mundial do streaming, e fez a m&uacute;sica eletr&ocirc;nica brigar de igual para igual com funk e sertanejo no Brasil.</p>\r\n\r\n<p>Depois disso, ele virou o nome mais conhecido do g&ecirc;nero no pa&iacute;s, com a ajuda de uma penca de amigos famosos. Um anivers&aacute;rio do Neymar, os casamentos da atriz Marina Ruy Barbosa e do youtuber Whindersson Nunes e uma parceria com Simone e Simaria est&atilde;o em seu curr&iacute;culo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><iframe allow=\"autoplay; encrypted-media\" allowfullscreen=\"\" frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/3Nw8dxXTIlg\" width=\"560\"></iframe></p>\r\n\r\n<h2>&#39;Sem palavras pra essa vibe&#39;</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>A aus&ecirc;ncia de uma banda no palco &eacute; compensada com algumas firulas: chuva de serpentina, papel picado e muitos, muitos fogos de artif&iacute;cio, que esquentavam a plateia.</p>\r\n\r\n<p>No set, al&eacute;m das m&uacute;sicas pr&oacute;prias - &quot;Big jet plane&quot; e &quot;Fuego&quot; s&atilde;o outros hits -, Alok tocou remixes de Green Day, Oasis, The Temper Trap, Selena Gomez e outros. Intercalava com alguns gritos: &quot;Sem palavras pra essa vibe&quot;, &quot;Eu quero ver muita energia&quot; e &quot;Tem algu&eacute;m cansado a&iacute;?&quot;.</p>\r\n\r\n<p>N&atilde;o tinha ningu&eacute;m cansado. O Perry tem se mostrado um dos espa&ccedil;os mais animados do Lolla. A programa&ccedil;&atilde;o eletr&ocirc;nica atraiu muita gente nos &uacute;ltimos anos, e em 2018 a organiza&ccedil;&atilde;o trocou o palco de lugar e deu mais espa&ccedil;o para a plateia dan&ccedil;ar. O p&uacute;blico de Alok precisava mesmo.</p>\r\n\r\n<p>&quot;Sem d&uacute;vida um dos melhores dias da minha vida. Gratid&atilde;o, galera&quot;, finalizou o DJ.</p>\r\n','2018-03-24 00:00:00','alok_132a9135_fabio_tito-g1.jpg'),(3,'Grupo que inclui militares traficou pelo menos 40 armas em 40 dias, diz Polícia Civil do DF','Lucas','<p><span style=\"color:#d35400\"><span style=\"font-size:48px\">O</span></span>esquema de tr&aacute;fico de armas desarticulado nesta sexta-feira (23) no Distrito Federal movimentou pelo menos 40 armas, al&eacute;m de muni&ccedil;&atilde;o, nos &uacute;ltimos 40 dias, afirma a Pol&iacute;cia Civil. Ao todo, 25 pessoas foram detidas por suposto envolvimento nos crimes.</p>\r\n\r\n<p>De acordo com os investigadores, cinco suspeitos cumpriram servi&ccedil;o militar nas For&ccedil;as Armadas &ndash; um da reserva, tr&ecirc;s ex-militares e um que segue na ativa. O n&uacute;mero inclui o suposto chefe do esquema, Mauro de Souza Ferreira, que, segundo a Pol&iacute;cia Civil, serviu ao Ex&eacute;rcito e se apresentava como militar na hora de negociar o armamento.</p>\r\n\r\n<p>Em nota ao&nbsp;<strong>G1&nbsp;</strong>(<strong>veja &iacute;ntegra no fim do texto</strong>), o Comando Militar do Planalto (CMP) contestou a informa&ccedil;&atilde;o. Segundo o texto, Ferreira &quot;foi dispensado do Servi&ccedil;o Militar por excesso de contingente, isto &eacute;, n&atilde;o serviu ao Ex&eacute;rcito&quot;.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s2.glbimg.com/56FJ1qZbuS_L1ys0kpqydVk1rEY=/0x0:1700x1065/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2018/F/P/4eQAv4ROWxBvfLJFajAg/deco-pcdf.jpg\" style=\"height:405px; width:647px\" /></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>Segundo o delegado-chefe da Divis&atilde;o de Repress&atilde;o ao Crime Organizado do DF, Adriano Chaves Valente, o esquema de venda ilegal de armas funcionava a partir de tr&ecirc;s n&uacute;cleos: o dos militares, dos colecionadores de armas e dos criminosos.</p>\r\n\r\n<p>Mauro de Souza Ferreira, apontado como chefe do esquema, era respons&aacute;vel por comprar as armas dos colecionadores &ndash; dois deles eram militares &ndash; e revender aos criminosos.</p>\r\n\r\n<p>&ldquo;Ele estava se articulando para fazer o cadastro de colecionador e atirador, para evitar essa ponte com os militares. Tendo acesso mais f&aacute;cil &agrave;s armas, ele lucraria muito mais e inseriria mais armas no &lsquo;mundo do crime&rsquo;. Por isso, deflagramos a opera&ccedil;&atilde;o agora.&rdquo;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n','2018-03-24 00:00:00','whatsapp-image-2018-03-23-at-06.jpg'),(4,'Coreia do Norte concorda em realizar conversa de alto nível, diz Seul','Lucas','<p><span style=\"font-size:48px\"><span style=\"color:#d35400\">A</span></span>Coreia do Sul anunciou nesta sexta-feira (23) que a Coreia do Norte concordou em realizar conversas de alto n&iacute;vel no dia 29 de mar&ccedil;o, informa a ag&ecirc;ncia de not&iacute;cias Yonhap. O encontro ser&aacute; em Panmunjom, na zona desmilitarizada que separa as duas Coreias. Nesta reuni&atilde;o, as autoridades devem preparar a c&uacute;pula que ser&aacute; realizada entre os dois pa&iacute;ses em abril.</p>\r\n\r\n<p>Os pa&iacute;ses, que n&atilde;o conversavam desde 2015, voltaram a conversar em janeiro, quando representantes oficiais dos dois pa&iacute;ses se reuniram e a Coreia Norte anunciou que enviaria atletas ao Sul para Jogos de Inverno de Pyeongchang.</p>\r\n\r\n<p>O pa&iacute;s de Kim Jong-un tamb&eacute;m enviou&nbsp;<a href=\"https://g1.globo.com/mundo/noticia/presidente-sul-coreano-recebe-irma-do-lider-da-coreia-do-norte.ghtml\">uma comitiva de 22 pessoas</a>, entre elas o presidente honor&aacute;rio do Norte, Kim Yong-nam, e a irm&atilde; de Kim Jong-un, Kim Yo-jong. Durante a visita, Yo-jong entregou uma carta em nome de seu irm&atilde;o&nbsp;<a href=\"https://g1.globo.com/mundo/noticia/lider-norte-coreano-kim-jong-un-convida-presidente-da-coreia-do-sul-para-renuniao-em-pyongyang.ghtml\">convidando o presidente sul-coreano, Moon Jae-in</a>, para uma reuni&atilde;o em Pyongyang.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://s2.glbimg.com/yokgGRyTZt-5L-OXhuBNzqIaV74=/0x0:3000x2141/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2018/D/l/5lmQwwTBSdrO9nldc9Lw/carta-kim-jong-un.jpg\" style=\"height:463px; width:648px\" /></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>Ap&oacute;s a participa&ccedil;&atilde;o do pa&iacute;s vizinho nos Jogos de Inverno, Moon Jae-in tenta negociar uma solu&ccedil;&atilde;o diplom&aacute;tica para a tens&atilde;o gerada entre eles com o desenvolvimento de m&iacute;sseis de longo alcance e bombas nucleares por Pyongyang.</p>\r\n\r\n<p>Os sul-coreanos tamb&eacute;m est&atilde;o intermediando uma reaproxima&ccedil;&atilde;o entre a Coreia do Norte e os EUA. Neste m&ecirc;s, o presidente americano Donald Trump&nbsp;<a href=\"https://g1.globo.com/mundo/noticia/qual-a-importancia-da-reuniao-de-trump-e-kim-veja-esta-e-outras-perguntas.ghtml\">aceitou um convite de reuni&atilde;o</a>&nbsp;feito por Kim Jong-un. Esse encontro dever&aacute; ser realizado at&eacute; o final de maio. O local ainda n&atilde;o foi estabelecido.</p>\r\n','2018-03-24 00:00:00','carta-kim-jong-un.jpg');
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Lucas Rodrigues','lucas.mech@hotmail.com','11954632247','321321321','adcd7048512e64b48da55b027577886ee5a36350'),(2,'321321321','123321321@213213','231321321','3123213','adcd7048512e64b48da55b027577886ee5a36350');
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

-- Dump completed on 2018-03-24  5:09:41
