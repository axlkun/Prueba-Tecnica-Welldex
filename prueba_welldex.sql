-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: importaciones
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `aduanas`
--

DROP TABLE IF EXISTS `aduanas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `aduanas` (
  `id_aduanas` int NOT NULL AUTO_INCREMENT,
  `numero` varchar(45) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id_aduanas`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aduanas`
--

LOCK TABLES `aduanas` WRITE;
/*!40000 ALTER TABLE `aduanas` DISABLE KEYS */;
INSERT INTO `aduanas` VALUES (2,' 10','Messi '),(3,' 77','Arnold '),(4,' 100','Puerto '),(5,' 101','Zoey '),(6,' 55','Saltillo '),(7,' 44','CDMX '),(8,' 1','Aduana Terrestre de Nuevo Laredo Tamaulipas '),(9,' 2','Aduana Terrestre de Ciudad Juarez, Chihuahua '),(10,' 3','Aduana Terrestre de Tijuana, Baja California '),(11,' 4','Aduana de Lazaro Cardenas '),(12,' 5','Aduana de Altamira '),(13,' 43','Aduana de Veracruz '),(14,' 47','Aduana de México '),(15,' 16','Aduana de Manzanillo ');
/*!40000 ALTER TABLE `aduanas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buques`
--

DROP TABLE IF EXISTS `buques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `buques` (
  `id_buques` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id_buques`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buques`
--

LOCK TABLES `buques` WRITE;
/*!40000 ALTER TABLE `buques` DISABLE KEYS */;
INSERT INTO `buques` VALUES (1,' Titanic '),(2,' The big one '),(3,' Gran ola '),(4,' Portacontenedores '),(5,' Buque de carga general '),(6,' Buque granelero '),(7,' Buque de cargas quimicas '),(8,' Buque de ganado ');
/*!40000 ALTER TABLE `buques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estatus`
--

DROP TABLE IF EXISTS `estatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estatus` (
  `id_estatus` int NOT NULL AUTO_INCREMENT,
  `numero` varchar(45) NOT NULL,
  `estatus` varchar(45) NOT NULL,
  PRIMARY KEY (`id_estatus`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estatus`
--

LOCK TABLES `estatus` WRITE;
/*!40000 ALTER TABLE `estatus` DISABLE KEYS */;
INSERT INTO `estatus` VALUES (1,'1','Alta'),(2,'2','En espera de zarpe'),(3,'3','En trayecto'),(4,'4','En atraque'),(5,'5','Descargo'),(6,'6','Descargada');
/*!40000 ALTER TABLE `estatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exportadores`
--

DROP TABLE IF EXISTS `exportadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `exportadores` (
  `id_exportadores` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `pais` varchar(255) NOT NULL,
  PRIMARY KEY (`id_exportadores`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exportadores`
--

LOCK TABLES `exportadores` WRITE;
/*!40000 ALTER TABLE `exportadores` DISABLE KEYS */;
INSERT INTO `exportadores` VALUES (1,'Proveedor','China'),(2,'Ye','Estados Unidos'),(3,'Hola','Lejos'),(4,'Supp','Holanda'),(7,' Export','Belgica '),(8,' Global Trade','Estados Unidos '),(9,' Comercial Global','Peru '),(10,' Trap n Export','Argentina '),(11,' Minomino','Japon '),(12,' Kang Export','China ');
/*!40000 ALTER TABLE `exportadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `importadores`
--

DROP TABLE IF EXISTS `importadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `importadores` (
  `id_importadores` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `BL` varchar(255) NOT NULL,
  PRIMARY KEY (`id_importadores`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `importadores`
--

LOCK TABLES `importadores` WRITE;
/*!40000 ALTER TABLE `importadores` DISABLE KEYS */;
INSERT INTO `importadores` VALUES (2,' Mayoreo MX','BL667654Fg '),(3,' Kikomo Importadores','BHJ556 '),(4,' Asociacion Nacional de Importadores','TTSTUJ565 '),(5,' Importadora Orient Mex','777HGR '),(6,' Grupo Importador','654TFGHM ');
/*!40000 ALTER TABLE `importadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mercancía`
--

DROP TABLE IF EXISTS `mercancía`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mercancía` (
  `id_mercancia` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `pesoBruto` decimal(10,2) NOT NULL,
  `volumen` decimal(10,2) NOT NULL,
  `numeroBultos` int NOT NULL,
  `numeroUnidades` int NOT NULL,
  `dimensiones` varchar(255) NOT NULL,
  `marcas` varchar(255) NOT NULL,
  `tipoEmbalaje` varchar(255) NOT NULL,
  PRIMARY KEY (`id_mercancia`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mercancía`
--

LOCK TABLES `mercancía` WRITE;
/*!40000 ALTER TABLE `mercancía` DISABLE KEYS */;
INSERT INTO `mercancía` VALUES (1,' Es un contenedor de ropa, precisamente hoodies',4.00,56.00,34,500,'40 x 70','Marca personal','contenedores '),(2,' Contenedor con productos para mascotas',500.00,677.00,50,50,'70 x 80','Petco y Pet friendly','Contenedores '),(3,' Importacion textil variada',100.00,455.00,20,400,'10 x 20','Marca personal Highest','Cajas '),(4,' Importacion de electrodomesticos y tecnologia',30.00,400.00,10,10,'10 x 5','Toshiba, Samsung, Razer, Logitech, Huntsman','Cajas reforzadas ');
/*!40000 ALTER TABLE `mercancía` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `naviera`
--

DROP TABLE IF EXISTS `naviera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `naviera` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `naviera`
--

LOCK TABLES `naviera` WRITE;
/*!40000 ALTER TABLE `naviera` DISABLE KEYS */;
INSERT INTO `naviera` VALUES (2,' Navy '),(3,' Meritus '),(4,' Agencia Consignataria '),(5,' Naverman Internacional '),(6,' Petvar '),(7,' CH Maritime ');
/*!40000 ALTER TABLE `naviera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `operaciones_importación`
--

DROP TABLE IF EXISTS `operaciones_importación`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `operaciones_importación` (
  `id_operacion` int NOT NULL AUTO_INCREMENT,
  `referencia` int NOT NULL,
  `flete` decimal(10,2) NOT NULL,
  `formaPago` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `receptor` varchar(255) NOT NULL,
  `numero_booking` varchar(255) DEFAULT NULL,
  `estatus_id_estatus` int NOT NULL,
  `mercancía_id_mercancia` int NOT NULL,
  `terminales_id_terminales` int NOT NULL,
  `exportadores_id_exportadores` int NOT NULL,
  `rutas_id_ruta` int NOT NULL,
  `naviera_id` int NOT NULL,
  `operadores_id_operadores` int NOT NULL,
  `importadores_id_importadores` int NOT NULL,
  `buques_id_buques` int NOT NULL,
  `recargos_id_recargos` int NOT NULL,
  PRIMARY KEY (`id_operacion`),
  KEY `fk_operaciones_importación_mercancía1_idx` (`mercancía_id_mercancia`),
  KEY `fk_operaciones_importación_terminales1_idx` (`terminales_id_terminales`),
  KEY `fk_operaciones_importación_exportadores1_idx` (`exportadores_id_exportadores`),
  KEY `fk_operaciones_importación_rutas1_idx` (`rutas_id_ruta`),
  KEY `fk_operaciones_importación_naviera1_idx` (`naviera_id`),
  KEY `fk_operaciones_importación_operadores1_idx` (`operadores_id_operadores`),
  KEY `fk_operaciones_importación_importadores1_idx` (`importadores_id_importadores`),
  KEY `fk_operaciones_importación_buques1_idx` (`buques_id_buques`),
  KEY `fk_operaciones_importación_recargos1_idx` (`recargos_id_recargos`),
  KEY `fk_operaciones_importación_estatus1_idx` (`estatus_id_estatus`),
  CONSTRAINT `fk_operaciones_importación_buques1` FOREIGN KEY (`buques_id_buques`) REFERENCES `buques` (`id_buques`),
  CONSTRAINT `fk_operaciones_importación_estatus1` FOREIGN KEY (`estatus_id_estatus`) REFERENCES `estatus` (`id_estatus`),
  CONSTRAINT `fk_operaciones_importación_exportadores1` FOREIGN KEY (`exportadores_id_exportadores`) REFERENCES `exportadores` (`id_exportadores`),
  CONSTRAINT `fk_operaciones_importación_importadores1` FOREIGN KEY (`importadores_id_importadores`) REFERENCES `importadores` (`id_importadores`),
  CONSTRAINT `fk_operaciones_importación_mercancía1` FOREIGN KEY (`mercancía_id_mercancia`) REFERENCES `mercancía` (`id_mercancia`),
  CONSTRAINT `fk_operaciones_importación_naviera1` FOREIGN KEY (`naviera_id`) REFERENCES `naviera` (`id`),
  CONSTRAINT `fk_operaciones_importación_operadores1` FOREIGN KEY (`operadores_id_operadores`) REFERENCES `operadores` (`id_operadores`),
  CONSTRAINT `fk_operaciones_importación_recargos1` FOREIGN KEY (`recargos_id_recargos`) REFERENCES `recargos` (`id_recargos`),
  CONSTRAINT `fk_operaciones_importación_rutas1` FOREIGN KEY (`rutas_id_ruta`) REFERENCES `rutas` (`id_ruta`),
  CONSTRAINT `fk_operaciones_importación_terminales1` FOREIGN KEY (`terminales_id_terminales`) REFERENCES `terminales` (`id_terminales`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `operaciones_importación`
--

LOCK TABLES `operaciones_importación` WRITE;
/*!40000 ALTER TABLE `operaciones_importación` DISABLE KEYS */;
INSERT INTO `operaciones_importación` VALUES (6,23,435435.00,'Transferencia','Citrus','There','6500',4,1,1,2,1,2,1,2,2,2),(7,34432,25667.00,'Efectivo','Operador','Empre','2233',1,1,1,4,1,2,1,2,2,2),(8,6432,105000.00,'Transferencia','Empresa SA','Carti','2000',1,1,2,7,3,3,1,2,4,2),(9,333,40000.00,'VISA','Calzado MX','Trav','3453',2,3,3,4,2,3,2,4,5,2);
/*!40000 ALTER TABLE `operaciones_importación` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `operadores`
--

DROP TABLE IF EXISTS `operadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `operadores` (
  `id_operadores` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id_operadores`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `operadores`
--

LOCK TABLES `operadores` WRITE;
/*!40000 ALTER TABLE `operadores` DISABLE KEYS */;
INSERT INTO `operadores` VALUES (1,' Operador SA '),(2,' Ransa '),(3,' NAL Worldwide '),(4,' AOLM Asociacion '),(5,' Nowport ');
/*!40000 ALTER TABLE `operadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recargos`
--

DROP TABLE IF EXISTS `recargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recargos` (
  `id_recargos` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_recargos`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recargos`
--

LOCK TABLES `recargos` WRITE;
/*!40000 ALTER TABLE `recargos` DISABLE KEYS */;
INSERT INTO `recargos` VALUES (1,' El uso de espacio extra hora y la manipulacion de los contenedores',4800.00),(2,' Ninguno',0.00),(3,' Manipulacion en terminal de contenedores',5000.00),(4,' Resguardo de mercancia',10000.00),(5,' Espacio extra en el buque',5000.00),(6,' Reforzamiento de embalaje',2000.00);
/*!40000 ALTER TABLE `recargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rutas`
--

DROP TABLE IF EXISTS `rutas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rutas` (
  `id_ruta` int NOT NULL AUTO_INCREMENT,
  `puertoEmbarque` varchar(255) NOT NULL,
  `puertoDesembarque` varchar(255) NOT NULL,
  `paisOrigen` varchar(255) NOT NULL,
  `paisDestino` varchar(255) NOT NULL,
  `fechaZarpe` date NOT NULL,
  `fechaArribo` date NOT NULL,
  `aduanas_id_aduanas` int NOT NULL,
  PRIMARY KEY (`id_ruta`),
  KEY `fk_rutas_aduanas1_idx` (`aduanas_id_aduanas`),
  CONSTRAINT `fk_rutas_aduanas1` FOREIGN KEY (`aduanas_id_aduanas`) REFERENCES `aduanas` (`id_aduanas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rutas`
--

LOCK TABLES `rutas` WRITE;
/*!40000 ALTER TABLE `rutas` DISABLE KEYS */;
INSERT INTO `rutas` VALUES (1,' Hong kong','Veracruz','México','Mexico','2022-12-23','2022-12-23',6),(2,' Hong Kong','Veracruz','China','Mexico','2022-12-29','2023-01-07',13),(3,' Japon','Manzanillo','Japon','Mexico','2022-12-22','2022-12-29',15);
/*!40000 ALTER TABLE `rutas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terminales`
--

DROP TABLE IF EXISTS `terminales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `terminales` (
  `id_terminales` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id_terminales`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terminales`
--

LOCK TABLES `terminales` WRITE;
/*!40000 ALTER TABLE `terminales` DISABLE KEYS */;
INSERT INTO `terminales` VALUES (1,' Maritima 3 '),(2,' Terminal de Manzanillo '),(3,' Terminal de Veracruz '),(4,' Terminal de Lazaro Cardenas '),(5,' Terminal de Ensenada ');
/*!40000 ALTER TABLE `terminales` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-30 22:32:07
