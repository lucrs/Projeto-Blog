CREATE DATABASE  IF NOT EXISTS `painel` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `painel`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: painel
-- ------------------------------------------------------
-- Server version	5.7.20-log

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
  `image` longblob,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'sadsadsa','dsadsadsa','<p style=\"text-align:center\"><span style=\"color:#e67e22\"><span style=\"font-size:48px\">dsadsadsadsadsa</span></span></p>\r\n\r\n<p style=\"text-align:center\">dsadsadsadsadsa</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://cdn.corinthians.com.br/wp-content/themes/corinthian-wp-theme/assets/images/brasao.jpg\" style=\"height:147px; width:200px\" /></p>\r\n','2018-03-16 00:00:00',NULL),(2,'Lucas','Kycas','<p style=\"text-align:center\"><span style=\"font-size:48px\"><span style=\"color:#e74c3c\">Lucas gostoso</span></span></p>\r\n\r\n<p style=\"text-align:center\">Nao larga do meu p&eacute; e fica atras de mim</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://www.baltana.com/files/wallpapers-6/Blonde-Hair-HD-Wallpapers-20723.jpg\" style=\"float:left; height:250px; width:400px\" /></p>\r\n','2018-03-18 00:00:00',NULL),(3,'dsadsadsa','dsadasdsadsa','<p>dsadsadsadsadas</p>\r\n','2018-03-18 00:00:00','');
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

-- Dump completed on 2018-03-18 22:08:28
