-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: americanas
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `produto_promo`
--

DROP TABLE IF EXISTS `produto_promo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto_promo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(50) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `preco` varchar(10) NOT NULL,
  `porcentagem` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto_promo`
--

LOCK TABLES `produto_promo` WRITE;
/*!40000 ALTER TABLE `produto_promo` DISABLE KEYS */;
INSERT INTO `produto_promo` VALUES (1,'df41db438c52a2bbd1811c92595e73cd.png','Micro-ondas 20L MRAS21, Potência 700W, 10 Níveis de Potência e Função','471,63',15),(2,'6703294abf256e69549fac3a5035f17d.png','Electric Fan, Ceiling Fan, Ventilador mult-fort','199,90',30),(3,'7ea656da1aee10b7e58288b9532afa59.png','Controle xbox novo, botoes diversos e tinta boa','40,90',8),(4,'2c719439f0a4b5c7693266b780b98a7f.png','Lanterna decorativa 100vps contagem 310v estilo antigo e rustico joanino','205,60',22),(5,'bf271de57fa92de8a7a48c4058ea9a1e.png','Figurinha decorativa do superman, liga da justiça, 40x40, nova formação da liga','10,00',4);
/*!40000 ALTER TABLE `produto_promo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'americanas'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-09 20:24:31
