-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: 10.7.120.86    Database: Emat
-- ------------------------------------------------------
-- Server version	5.5.5-10.7.4-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `c_cultivos`
--

DROP TABLE IF EXISTS `c_cultivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `c_cultivos` (
  `id_ccultivo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_ccultivo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c_cultivos`
--

LOCK TABLES `c_cultivos` WRITE;
/*!40000 ALTER TABLE `c_cultivos` DISABLE KEYS */;
INSERT INTO `c_cultivos` VALUES (1,'LA GRANJA I');
/*!40000 ALTER TABLE `c_cultivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calibres`
--

DROP TABLE IF EXISTS `calibres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `calibres` (
  `id_calibre` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_calibre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calibres`
--

LOCK TABLES `calibres` WRITE;
/*!40000 ALTER TABLE `calibres` DISABLE KEYS */;
INSERT INTO `calibres` VALUES (1,'1/3'),(2,'1/2');
/*!40000 ALTER TABLE `calibres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calidades`
--

DROP TABLE IF EXISTS `calidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `calidades` (
  `id_calidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_calidad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calidades`
--

LOCK TABLES `calidades` WRITE;
/*!40000 ALTER TABLE `calidades` DISABLE KEYS */;
INSERT INTO `calidades` VALUES (1,'SALAR'),(2,'PREMIUM');
/*!40000 ALTER TABLE `calidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(12) COLLATE latin1_spanish_ci NOT NULL,
  `razon_social` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_fantasia` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `domicilio_comercial` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `clientes_unique` (`rut`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'1-9','RAZóN SOCIAL LTDA','NOMBRE DE FANTASíA','DOMICILIO COMERCIAL');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conservaciones`
--

DROP TABLE IF EXISTS `conservaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `conservaciones` (
  `id_conservacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_conservacion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conservaciones`
--

LOCK TABLES `conservaciones` WRITE;
/*!40000 ALTER TABLE `conservaciones` DISABLE KEYS */;
INSERT INTO `conservaciones` VALUES (1,'CONGELADO');
/*!40000 ALTER TABLE `conservaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `envases`
--

DROP TABLE IF EXISTS `envases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `envases` (
  `id_envase` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_envase`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `envases`
--

LOCK TABLES `envases` WRITE;
/*!40000 ALTER TABLE `envases` DISABLE KEYS */;
INSERT INTO `envases` VALUES (1,'CAJA DE 3 KG'),(2,'1 KG'),(3,'2 LBS');
/*!40000 ALTER TABLE `envases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `especies`
--

DROP TABLE IF EXISTS `especies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `especies` (
  `id_especie` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_especie`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `especies`
--

LOCK TABLES `especies` WRITE;
/*!40000 ALTER TABLE `especies` DISABLE KEYS */;
INSERT INTO `especies` VALUES (1,'TRUCHA'),(2,'SALMóN ATLáNTICO'),(3,'CORBINA');
/*!40000 ALTER TABLE `especies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guias_d_cab`
--

DROP TABLE IF EXISTS `guias_d_cab`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `guias_d_cab` (
  `id_guia` int(11) NOT NULL AUTO_INCREMENT,
  `num_guia` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `fecha_recepcion` date NOT NULL,
  `decla_jurada` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `decla_garantia` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `nulo` bit(1) DEFAULT b'0',
  `id_origen` int(11) NOT NULL DEFAULT 0,
  `origen` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id_guia`),
  UNIQUE KEY `guias_d_cab_unique` (`num_guia`,`id_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guias_d_cab`
--

LOCK TABLES `guias_d_cab` WRITE;
/*!40000 ALTER TABLE `guias_d_cab` DISABLE KEYS */;
INSERT INTO `guias_d_cab` VALUES (1,8976,3,'2024-04-05','',' Declaración de garantía',_binary '\0',2,'Chaiten'),(7,2365,1,'2024-04-15','.','..',_binary '\0',3,'Caleta bay'),(8,8977,3,'2024-04-08','','',_binary '\0',1,'LUDRIMAR');
/*!40000 ALTER TABLE `guias_d_cab` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guias_d_det`
--

DROP TABLE IF EXISTS `guias_d_det`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `guias_d_det` (
  `id_guia` int(11) NOT NULL DEFAULT 0,
  `id_especie` int(11) NOT NULL DEFAULT 0,
  `id_producto` int(11) NOT NULL DEFAULT 0,
  `id_conservacion` int(11) NOT NULL DEFAULT 0,
  `id_envase` int(11) NOT NULL DEFAULT 0,
  `unidades` int(11) NOT NULL DEFAULT 0,
  `peso` decimal(10,0) NOT NULL DEFAULT 0,
  `nulo` bit(1) NOT NULL DEFAULT b'0',
  `id_reg` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_reg`),
  UNIQUE KEY `guias_d_det_unique` (`id_guia`,`id_especie`,`id_producto`,`id_conservacion`,`id_envase`,`nulo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guias_d_det`
--

LOCK TABLES `guias_d_det` WRITE;
/*!40000 ALTER TABLE `guias_d_det` DISABLE KEYS */;
INSERT INTO `guias_d_det` VALUES (1,2,4,1,1,1600,4800,_binary '\0',1),(1,2,3,1,1,1200,3600,_binary '\0',7),(8,2,2,1,1,1200,3600,_binary '\0',9),(7,1,4,1,2,7000,7000,_binary '\0',10);
/*!40000 ALTER TABLE `guias_d_det` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu` (
  `nombre_menu` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `url` varchar(256) COLLATE latin1_spanish_ci DEFAULT NULL,
  `imagen` varchar(256) COLLATE latin1_spanish_ci DEFAULT NULL,
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `id_padre` int(11) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES ('Usuarios','Usuarios.php',NULL,1,2),('Especies','Especies.php',NULL,3,1),('Productos','Productos.php',NULL,4,1),('Calibres','Calibres.php',NULL,5,1),('Perfiles','Perfiles.php',NULL,6,2),('Perfiles de usuario','Perfiles.php','',7,2),('Configuración de acceso','Acceso.php',NULL,8,2),('Calidades','Calidades.php',NULL,9,1),('Conservaciones','Conservaciones.php',NULL,10,1),('Envases','Envases.php',NULL,11,1),('Clientes','Clientes.php',NULL,12,1),('Proveedores','Proveedores.php',NULL,13,1),('Ingreso guias de despacho','Guia_despacho.php',NULL,14,1),('Órdenes de trabajo','Ot.php',NULL,15,1),('Empaque','Empaque.php',NULL,16,3),('Centros de cultivo','C_cultivos.php',NULL,17,1),('Orígenes','Origenes.php',NULL,18,1),('Plantas de proceso','P_proceso.php',NULL,19,1);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_parent`
--

DROP TABLE IF EXISTS `menu_parent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_parent` (
  `padre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `id_padre` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_padre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_parent`
--

LOCK TABLES `menu_parent` WRITE;
/*!40000 ALTER TABLE `menu_parent` DISABLE KEYS */;
INSERT INTO `menu_parent` VALUES ('Configuración',1),('Administración',2),('Procesos',3);
/*!40000 ALTER TABLE `menu_parent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `origenes`
--

DROP TABLE IF EXISTS `origenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `origenes` (
  `id_origen` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_origen`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `origenes`
--

LOCK TABLES `origenes` WRITE;
/*!40000 ALTER TABLE `origenes` DISABLE KEYS */;
INSERT INTO `origenes` VALUES (1,'CENTRO DE CULTIVO'),(2,'PESCA EXTRACTIVA'),(3,'PLANTA PROCESADORA');
/*!40000 ALTER TABLE `origenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ot`
--

DROP TABLE IF EXISTS `ot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ot` (
  `id_ot` int(11) NOT NULL AUTO_INCREMENT,
  `id_guia` int(11) NOT NULL DEFAULT 0,
  `id_reg` int(11) NOT NULL DEFAULT 0,
  `lote` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `restricciones_origen` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id_ot`),
  UNIQUE KEY `ot_id_guia_IDX` (`id_guia`,`id_reg`) USING BTREE,
  KEY `ot_guias_d_det_FK` (`id_reg`),
  CONSTRAINT `ot_guias_d_cab_FK` FOREIGN KEY (`id_guia`) REFERENCES `guias_d_cab` (`id_guia`),
  CONSTRAINT `ot_guias_d_det_FK` FOREIGN KEY (`id_reg`) REFERENCES `guias_d_det` (`id_reg`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ot`
--

LOCK TABLES `ot` WRITE;
/*!40000 ALTER TABLE `ot` DISABLE KEYS */;
INSERT INTO `ot` VALUES (1,1,1,'Lote0235','Rusia'),(2,1,7,'Lote0235','Rusia'),(3,8,9,'1545','Rusia,USA');
/*!40000 ALTER TABLE `ot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfiles`
--

DROP TABLE IF EXISTS `perfiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfiles` (
  `perfil` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_perfil` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles`
--

LOCK TABLES `perfiles` WRITE;
/*!40000 ALTER TABLE `perfiles` DISABLE KEYS */;
INSERT INTO `perfiles` VALUES ('admin','Administradores'),('empaque','Empaque'),('oper','Operario empaque'),('super','Supervisores empaque');
/*!40000 ALTER TABLE `perfiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfiles_menus`
--

DROP TABLE IF EXISTS `perfiles_menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfiles_menus` (
  `perfil` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `id_menu` int(11) NOT NULL,
  `nulo` bit(1) DEFAULT b'0',
  PRIMARY KEY (`perfil`,`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles_menus`
--

LOCK TABLES `perfiles_menus` WRITE;
/*!40000 ALTER TABLE `perfiles_menus` DISABLE KEYS */;
INSERT INTO `perfiles_menus` VALUES ('admin',1,_binary '\0'),('admin',2,_binary '\0'),('admin',3,_binary '\0'),('admin',4,_binary ''),('admin',5,_binary '\0'),('admin',7,_binary '\0'),('admin',8,_binary '\0'),('admin',9,_binary '\0'),('admin',10,_binary '\0'),('admin',11,_binary '\0'),('admin',12,_binary '\0'),('admin',13,_binary '\0'),('admin',14,_binary '\0'),('admin',15,_binary '\0'),('admin',16,_binary '\0'),('admin',17,_binary '\0'),('admin',18,_binary '\0'),('admin',19,_binary '\0'),('empaque',1,_binary ''),('empaque',3,_binary ''),('empaque',4,_binary ''),('empaque',5,_binary ''),('empaque',16,_binary '\0'),('oper',16,_binary '\0');
/*!40000 ALTER TABLE `perfiles_menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfiles_usuarios`
--

DROP TABLE IF EXISTS `perfiles_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfiles_usuarios` (
  `usuario` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `perfil` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`usuario`,`perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles_usuarios`
--

LOCK TABLES `perfiles_usuarios` WRITE;
/*!40000 ALTER TABLE `perfiles_usuarios` DISABLE KEYS */;
INSERT INTO `perfiles_usuarios` VALUES ('admin','admin');
/*!40000 ALTER TABLE `perfiles_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plantas_proceso`
--

DROP TABLE IF EXISTS `plantas_proceso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plantas_proceso` (
  `id_planta` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `id_sernapesca` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_planta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plantas_proceso`
--

LOCK TABLES `plantas_proceso` WRITE;
/*!40000 ALTER TABLE `plantas_proceso` DISABLE KEYS */;
INSERT INTO `plantas_proceso` VALUES (1,'LUDRIMAR',10560),(2,'CALETA BAY',0);
/*!40000 ALTER TABLE `plantas_proceso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'SALAR'),(2,'ESQUELONES'),(3,'PORCIONES'),(4,'FILETE');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(12) COLLATE latin1_spanish_ci NOT NULL,
  `razon_social` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_fantasia` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `domicilio_comercial` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `conf_lote` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_proveedor`),
  UNIQUE KEY `clientes_unique` (`rut`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
INSERT INTO `proveedores` VALUES (1,'3-5','ALIMARES','ALIMARES','LAS INDUSTRIAS 100','AL'),(2,'4-5','ALCARES','ALCARES','LAS INDUSTRIAS S/N',NULL),(3,'5-7','SACHO','SACHO','CAMINO EL TEPUAL SIB NúMERO','SA');
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `contraseña` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL DEFAULT curdate(),
  `fecha_vencimiento` date DEFAULT (curdate() + interval 3 month),
  `rut` varchar(12) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `activo` smallint(6) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'admin','81dc9bdb52d04dc20036dbd8313ed055','2024-03-16','2024-06-16','2-7','Administador',1),(6,'usuario','674f3c2c1a8a6f90461e8a66fb5550ba','2024-03-18','2024-06-18','1-9','USUARIO DE PRUEBA',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zonas_extrativas`
--

DROP TABLE IF EXISTS `zonas_extrativas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zonas_extrativas` (
  `id_zona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_zona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zonas_extrativas`
--

LOCK TABLES `zonas_extrativas` WRITE;
/*!40000 ALTER TABLE `zonas_extrativas` DISABLE KEYS */;
/*!40000 ALTER TABLE `zonas_extrativas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'Emat'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-15 14:53:58
