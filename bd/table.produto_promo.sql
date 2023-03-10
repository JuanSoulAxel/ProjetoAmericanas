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
  `preco_antigo` varchar(10) NOT NULL,
  `porcentagem` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto_promo`
--

LOCK TABLES `produto_promo` WRITE;
/*!40000 ALTER TABLE `produto_promo` DISABLE KEYS */;
INSERT INTO `produto_promo` VALUES (6,'7ecd35fad943a4a5fd0354c7c2292aa7.png','Micro-ondas 20L MRAS21, Potência 700W, 10 Níveis de Potência e Função','480,00','600,00',20),(7,'0fa8ead666e157ad2e78dc8a79ebea21.png','Electric Fan, Ceiling Fan, Ventilador mult-fort','180,90','212,82',15),(8,'a9b38bfdb6bd8e115d1b3961c0afa3e5.png','Controle xbox novo, botoes diversos e tinta boa','150,00','163,04',8),(9,'3098b00bc7af213909ed16334260700a.png','Lanterna decorativa 100vps contagem 310v estilo antigo e rustico joanino','80,50','101,90',21),(10,'9ec103b49766dda04600d44a376cdf94.png','Figurinha decorativa do superman, liga da justiça, 40x40, nova formação da liga','9,60','10,00',4),(11,'91e5e7b8af4aac6123fd08208d0bd20f.jpg','Volante Gamer Com Pedal Force Driving Ps4/ps3/pc/xbox Dazz','95,25','102,42',7),(12,'75650ad66d3377530678583ae79fb3e8.png','Smartphone Xiaomi Redmi Note 11s 128GB Câmera Quádrupla','1670,00','2569,23',35),(13,'8c5972365dcb8364988137dc3a02829d.png','Globo terrestre continente 16cm, Tecnodidattica - CX 1 UN','75,10','83,44',10);
/*!40000 ALTER TABLE `produto_promo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-12 16:47:20
