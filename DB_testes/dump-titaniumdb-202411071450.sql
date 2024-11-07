-- MariaDB dump 10.19  Distrib 10.11.6-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: titaniumdb
-- ------------------------------------------------------
-- Server version	10.11.6-MariaDB-0+deb12u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alunos`
--

DROP TABLE IF EXISTS `alunos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `idPlano` int(11) NOT NULL,
  `dataMatriculo` datetime DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `idPlano` (`idPlano`),
  CONSTRAINT `alunos_ibfk_1` FOREIGN KEY (`idPlano`) REFERENCES `planos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alunos`
--

LOCK TABLES `alunos` WRITE;
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` VALUES
(1,'João Silva','11987654321','12345678901',1,'2023-01-15 10:00:00',1),
(2,'Maria Oliveira','11912345678','23456789012',2,'2023-02-20 11:30:00',1),
(3,'Carlos Souza','11987651234','34567890123',3,'2023-03-10 15:45:00',1),
(4,'Ana Lima','11923456789','45678901234',4,'2023-04-05 09:20:00',1),
(5,'Lucas Pereira','11934567890','56789012345',1,'2023-05-18 13:00:00',0),
(6,'Gabriela Martins','11987654324','56789012346',2,'2023-10-01 09:00:00',1),
(7,'Rodrigo Costa','11923456790','67890123457',3,'2023-10-05 12:30:00',1),
(8,'Patricia Almeida','11934567892','78901234568',4,'2023-10-10 14:00:00',1),
(9,'Fernanda Rocha','11945678901','89012345679',1,'2023-10-12 16:00:00',1),
(10,'Mário Barbosa','11956789012','90123456780',2,'2023-10-15 18:30:00',1),
(11,'Juliana Ferreira','11967890123','01234567891',3,'2023-10-20 10:00:00',0),
(12,'Ricardo Souza','11978901234','12345678902',4,'2023-11-01 11:30:00',1),
(13,'Eduarda Lima','11989012345','23456789013',2,'2023-11-05 13:15:00',1),
(14,'Paulo Henrique','11923456791','23456789014',2,'2023-11-01 15:30:00',1),
(15,'Cláudia Mendes','11934567893','34567890124',1,'2023-11-05 16:00:00',1),
(16,'Julio Cesar','11945678902','45678901235',4,'2023-11-10 18:00:00',1),
(17,'Mariana Costa','11956789013','56789012346',3,'2023-11-12 10:30:00',1),
(18,'Thiago Oliveira','11967890134','67890123457',2,'2023-11-15 14:00:00',1),
(19,'Larissa Pereira','11978901245','78901234568',4,'2023-11-20 11:15:00',1),
(20,'Rodrigo Fonseca','11989012356','89012345679',1,'2023-11-25 17:30:00',0),
(21,'Vera Santos','11990123456','90123456780',3,'2023-12-01 13:00:00',1);
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagamentosMensalidades`
--

DROP TABLE IF EXISTS `pagamentosMensalidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagamentosMensalidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAluno` int(11) NOT NULL,
  `idPlano` int(11) NOT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAluno` (`idAluno`),
  KEY `idPlano` (`idPlano`),
  CONSTRAINT `pagamentosMensalidades_ibfk_1` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`id`),
  CONSTRAINT `pagamentosMensalidades_ibfk_2` FOREIGN KEY (`idPlano`) REFERENCES `planos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagamentosMensalidades`
--

LOCK TABLES `pagamentosMensalidades` WRITE;
/*!40000 ALTER TABLE `pagamentosMensalidades` DISABLE KEYS */;
INSERT INTO `pagamentosMensalidades` VALUES
(1,1,1,'2023-06-01 10:00:00'),
(2,2,2,'2023-06-02 10:30:00'),
(3,3,3,'2023-06-03 11:00:00'),
(4,4,4,'2023-06-04 11:30:00'),
(5,5,1,'2023-06-05 12:00:00'),
(6,1,1,'2023-10-01 09:00:00'),
(7,2,3,'2023-10-05 12:00:00'),
(8,3,4,'2023-10-10 13:00:00'),
(9,4,2,'2023-10-12 16:30:00'),
(10,5,2,'2023-10-15 17:30:00'),
(11,6,3,'2023-10-20 11:30:00'),
(12,7,4,'2023-10-22 12:00:00'),
(13,8,2,'2023-11-05 11:30:00'),
(14,1,2,'2023-11-02 10:00:00'),
(15,2,1,'2023-11-07 10:30:00'),
(16,3,4,'2023-11-09 11:00:00'),
(17,4,3,'2023-11-11 12:00:00'),
(18,5,2,'2023-11-13 12:30:00'),
(19,6,3,'2023-11-17 13:00:00'),
(20,7,1,'2023-11-19 13:30:00'),
(21,8,4,'2023-11-21 14:00:00');
/*!40000 ALTER TABLE `pagamentosMensalidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planos`
--

DROP TABLE IF EXISTS `planos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipoPlano` varchar(10) DEFAULT NULL,
  `valor` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planos`
--

LOCK TABLES `planos` WRITE;
/*!40000 ALTER TABLE `planos` DISABLE KEYS */;
INSERT INTO `planos` VALUES
(1,'Mensal',100.00),
(2,'Trimestral',270.00),
(3,'Semestral',500.00),
(4,'Anual',900.00);
/*!40000 ALTER TABLE `planos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `precoCompra` decimal(5,2) DEFAULT NULL,
  `precoVenda` decimal(5,2) DEFAULT NULL,
  `estoque` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES
(1,'Whey Protein','Suplemento de proteína para ganho muscular',80.00,120.00,25),
(2,'BCAA','Suplemento de aminoácidos para recuperação muscular',30.00,50.00,40),
(3,'Creatina','Suplemento para aumento de força e desempenho',40.00,70.00,30),
(4,'Pré-treino','Suplemento para aumento de energia e foco no treino',25.00,45.00,20),
(5,'Glutamina','Aminoácido para fortalecimento do sistema imunológico',35.00,60.00,15),
(6,'Multivitamínico','Suplemento para aumentar a imunidade e disposição',30.00,55.00,60),
(7,'Iso Whey','Proteína isolada de soro de leite para ganho de massa muscular',100.00,150.00,30),
(8,'Termogênico','Suplemento para aceleração do metabolismo e emagrecimento',45.00,80.00,40),
(9,'L-Carnitina Líquida','Suplemento líquido para aumentar a queima de gordura',50.00,90.00,25),
(10,'BCAA + Glutamina','Combinação de aminoácidos para recuperação muscular e prevenção de catabolismo',35.00,60.00,35),
(11,'L-Glutamina','Aminoácido para recuperação muscular e prevenção de catabolismo',35.00,60.00,40),
(12,'Colágeno Tipo 2','Colágeno para articulações e saúde da pele',40.00,65.00,50),
(13,'HMB','Suplemento para aumento de massa muscular magra',70.00,120.00,30),
(14,'Ácido Linoleico Conjugado','Suplemento para queima de gordura e manutenção muscular',45.00,75.00,25),
(15,'L-Arginina','Aminoácido para vasodilatação e aumento de desempenho físico',40.00,70.00,45);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtosVendas`
--

DROP TABLE IF EXISTS `produtosVendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtosVendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idProduto` int(11) NOT NULL,
  `idVenda` int(11) NOT NULL,
  `valorUnitario` decimal(5,2) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idProduto` (`idProduto`),
  KEY `idVenda` (`idVenda`),
  CONSTRAINT `produtosVendas_ibfk_1` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`id`),
  CONSTRAINT `produtosVendas_ibfk_2` FOREIGN KEY (`idVenda`) REFERENCES `vendas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtosVendas`
--

LOCK TABLES `produtosVendas` WRITE;
/*!40000 ALTER TABLE `produtosVendas` DISABLE KEYS */;
INSERT INTO `produtosVendas` VALUES
(1,1,1,120.00,2),
(2,2,2,50.00,1),
(3,3,3,70.00,1),
(4,1,4,120.00,1),
(5,4,5,45.00,3),
(6,2,1,55.00,3),
(7,3,2,80.00,2),
(8,4,3,90.00,1),
(9,5,4,60.00,2),
(10,1,5,55.00,1),
(11,6,6,150.00,1),
(12,3,7,80.00,1),
(13,7,8,60.00,1);
/*!40000 ALTER TABLE `produtosVendas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendas`
--

DROP TABLE IF EXISTS `vendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAluno` int(11) NOT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAluno` (`idAluno`),
  CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`idAluno`) REFERENCES `alunos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendas`
--

LOCK TABLES `vendas` WRITE;
/*!40000 ALTER TABLE `vendas` DISABLE KEYS */;
INSERT INTO `vendas` VALUES
(1,1,'2023-06-01 14:00:00'),
(2,2,'2023-06-05 16:30:00'),
(3,3,'2023-06-10 10:15:00'),
(4,1,'2023-06-15 12:45:00'),
(5,4,'2023-06-20 18:30:00'),
(6,1,'2023-10-05 10:15:00'),
(7,2,'2023-10-08 14:30:00'),
(8,3,'2023-10-12 16:45:00'),
(9,4,'2023-10-14 11:00:00'),
(10,5,'2023-10-20 12:20:00'),
(11,6,'2023-10-22 13:50:00'),
(12,7,'2023-10-25 10:30:00'),
(13,8,'2023-11-05 11:00:00'),
(14,1,'2023-11-02 11:00:00'),
(15,2,'2023-11-07 14:30:00'),
(16,3,'2023-11-09 16:45:00'),
(17,4,'2023-11-11 10:00:00'),
(18,5,'2023-11-13 12:15:00'),
(19,6,'2023-11-17 14:30:00'),
(20,7,'2023-11-19 15:00:00'),
(21,8,'2023-11-21 16:45:00');
/*!40000 ALTER TABLE `vendas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'titaniumdb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-07 14:50:10
