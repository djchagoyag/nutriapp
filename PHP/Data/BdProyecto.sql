DROP DATABASE IF EXISTS `proyectoo`
CREATE DATABASE  IF NOT EXISTS `proyectoo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `proyectoo`;
-- MySQL dump 10.13  Distrib 8.0.18, for macos10.14 (x86_64)
--
-- Host: localhost    Database: proyectoo
-- ------------------------------------------------------
-- Server version	5.7.25

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
-- Table structure for table `antecedentes_familiares`
--

DROP TABLE IF EXISTS `antecedentes_familiares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `antecedentes_familiares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_enfermedad` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `familiar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opcion` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tipo_enfermedad_idx` (`id_enfermedad`),
  KEY `fk_usuario_idx` (`id_usuario`),
  CONSTRAINT `fk_tipo_enfermedad` FOREIGN KEY (`id_enfermedad`) REFERENCES `ct_tipo_enfermedad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_usuario_ef` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `antecedentes_familiares`
--

LOCK TABLES `antecedentes_familiares` WRITE;
/*!40000 ALTER TABLE `antecedentes_familiares` DISABLE KEYS */;
INSERT INTO `antecedentes_familiares` VALUES (89,7,38,'-','2'),(90,8,38,'-','2'),(91,9,38,'-','2'),(92,10,38,'-','2'),(93,11,38,'-','2'),(94,12,38,'-','2'),(95,13,38,'-','2'),(96,1,38,'-','-');
/*!40000 ALTER TABLE `antecedentes_familiares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `antecedentes_personales`
--

DROP TABLE IF EXISTS `antecedentes_personales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `antecedentes_personales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_enfermedad` int(11) NOT NULL,
  `sintoma` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opcion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarioo_idx` (`id_usuario`),
  KEY `fk_enfermedad_personal_idx` (`id_enfermedad`),
  CONSTRAINT `fk_enfermedad_personal` FOREIGN KEY (`id_enfermedad`) REFERENCES `ct_tipo_enfermedad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_u` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `antecedentes_personales`
--

LOCK TABLES `antecedentes_personales` WRITE;
/*!40000 ALTER TABLE `antecedentes_personales` DISABLE KEYS */;
INSERT INTO `antecedentes_personales` VALUES (68,38,1,'','-'),(69,38,3,'','2'),(70,38,2,'','2'),(71,38,4,'','-'),(72,38,5,'','2'),(73,38,6,'','2');
/*!40000 ALTER TABLE `antecedentes_personales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asig_grupo`
--

DROP TABLE IF EXISTS `asig_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asig_grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `frutas` int(11) DEFAULT NULL,
  `verduras` int(11) DEFAULT NULL,
  `cereales` int(11) DEFAULT NULL,
  `lacteos` int(11) DEFAULT NULL,
  `leguminosas` int(11) DEFAULT NULL,
  `aceites` int(11) DEFAULT NULL,
  `azucares` int(11) DEFAULT NULL,
  `carnes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usu_idx` (`id_usuario`),
  CONSTRAINT `id_usu` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asig_grupo`
--

LOCK TABLES `asig_grupo` WRITE;
/*!40000 ALTER TABLE `asig_grupo` DISABLE KEYS */;
INSERT INTO `asig_grupo` VALUES (22,38,4,4,4,4,4,4,4,4);
/*!40000 ALTER TABLE `asig_grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asignacion_grupo`
--

DROP TABLE IF EXISTS `asignacion_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asignacion_grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_grup_idx` (`id_usuario`),
  KEY `fk_id_grupo_grup_idx` (`id_grupo`),
  CONSTRAINT `fk_id_grupo_grup` FOREIGN KEY (`id_grupo`) REFERENCES `grupo_alimento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_usuario_grup` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignacion_grupo`
--

LOCK TABLES `asignacion_grupo` WRITE;
/*!40000 ALTER TABLE `asignacion_grupo` DISABLE KEYS */;
/*!40000 ALTER TABLE `asignacion_grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ct_signos_clinicos`
--

DROP TABLE IF EXISTS `ct_signos_clinicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ct_signos_clinicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ct_signos_clinicos`
--

LOCK TABLES `ct_signos_clinicos` WRITE;
/*!40000 ALTER TABLE `ct_signos_clinicos` DISABLE KEYS */;
INSERT INTO `ct_signos_clinicos` VALUES (1,'piel',NULL),(2,'ojos',NULL),(3,'boca',NULL),(4,'lengua',NULL),(5,'cabello',NULL),(6,'uñas',NULL),(7,'alergias',NULL),(8,'mareos',NULL),(9,'dolor_cabeza',NULL),(10,'aversion',NULL),(11,'gustos',NULL),(12,'intolerancia',NULL),(13,'articulaciones',NULL);
/*!40000 ALTER TABLE `ct_signos_clinicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ct_tipo_enfermedad`
--

DROP TABLE IF EXISTS `ct_tipo_enfermedad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ct_tipo_enfermedad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ct_tipo_enfermedad`
--

LOCK TABLES `ct_tipo_enfermedad` WRITE;
/*!40000 ALTER TABLE `ct_tipo_enfermedad` DISABLE KEYS */;
INSERT INTO `ct_tipo_enfermedad` VALUES (1,'padecimiento',NULL),(2,'actual',NULL),(3,'respiratorias',NULL),(4,'tratamiento_actual',NULL),(5,'desparacitaciones',NULL),(6,'cirugias',NULL),(7,'diabetes',NULL),(8,'hipertension',NULL),(9,'ecv',NULL),(10,'dislipidemias',NULL),(11,'acido_urico',NULL),(12,'cancer',NULL),(13,'calculos',NULL),(14,'otro',NULL);
/*!40000 ALTER TABLE `ct_tipo_enfermedad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `distribucion_grupo`
--

DROP TABLE IF EXISTS `distribucion_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `distribucion_grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario_grupo` int(11) NOT NULL,
  `cantidad` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_comida` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_usuario_grupo_idx` (`id_usuario_grupo`),
  CONSTRAINT `fk_id_usuario_grupo` FOREIGN KEY (`id_usuario_grupo`) REFERENCES `asignacion_grupo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `distribucion_grupo`
--

LOCK TABLES `distribucion_grupo` WRITE;
/*!40000 ALTER TABLE `distribucion_grupo` DISABLE KEYS */;
/*!40000 ALTER TABLE `distribucion_grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo_alimento`
--

DROP TABLE IF EXISTS `grupo_alimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grupo_alimento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo_alimento`
--

LOCK TABLES `grupo_alimento` WRITE;
/*!40000 ALTER TABLE `grupo_alimento` DISABLE KEYS */;
INSERT INTO `grupo_alimento` VALUES (1,'frutas'),(2,'verduras'),(3,'cereales'),(4,'lacteos'),(5,'carnes'),(6,'leguiminosas'),(7,'aceites'),(8,'azucares');
/*!40000 ALTER TABLE `grupo_alimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historial_indicadores`
--

DROP TABLE IF EXISTS `historial_indicadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `historial_indicadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `cintura` int(11) DEFAULT NULL,
  `cadera` int(11) DEFAULT NULL,
  `peso` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `imc` int(11) DEFAULT NULL,
  `gct_porciento` int(11) DEFAULT NULL,
  `gct_kilogramos` int(11) DEFAULT NULL,
  `musculo_porciento` int(11) DEFAULT NULL,
  `musculo_kilogramos` int(11) DEFAULT NULL,
  `kilocalorias` int(11) DEFAULT NULL,
  `edad_metabolica` int(11) DEFAULT NULL,
  `grasa_visceral` int(11) DEFAULT NULL,
  `presion` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pulso` int(11) DEFAULT NULL,
  `observaciones` varchar(100) CHARACTER SET armscii8 DEFAULT NULL,
  `morfologia` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `muñeca` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `complexion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_usuario_ind_idx` (`id_usuario`),
  CONSTRAINT `fk_id_usuario_ind` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historial_indicadores`
--

LOCK TABLES `historial_indicadores` WRITE;
/*!40000 ALTER TABLE `historial_indicadores` DISABLE KEYS */;
INSERT INTO `historial_indicadores` VALUES (12,'2020-02-14 08:08:42',98,NULL,89,38,56,24,NULL,45,NULL,2000,34,56,'100/70',13,NULL,'2','23','45');
/*!40000 ALTER TABLE `historial_indicadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `porcion`
--

DROP TABLE IF EXISTS `porcion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `porcion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `porcion`
--

LOCK TABLES `porcion` WRITE;
/*!40000 ALTER TABLE `porcion` DISABLE KEYS */;
/*!40000 ALTER TABLE `porcion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'paciente'),(3,'nutriologo');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `signos_clinicos`
--

DROP TABLE IF EXISTS `signos_clinicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `signos_clinicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `nivel` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_signo` int(11) NOT NULL,
  `lugar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sintoma` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sig_idx` (`id_signo`),
  KEY `fk_usu_idx` (`id_usuario`),
  CONSTRAINT `fk_sig` FOREIGN KEY (`id_signo`) REFERENCES `ct_signos_clinicos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_usu` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `signos_clinicos`
--

LOCK TABLES `signos_clinicos` WRITE;
/*!40000 ALTER TABLE `signos_clinicos` DISABLE KEYS */;
INSERT INTO `signos_clinicos` VALUES (40,38,'3',1,'',''),(41,38,'2',2,'',''),(42,38,'2',3,'',''),(43,38,'2',6,'',''),(44,38,'3',4,'',''),(45,38,'2',5,'',''),(46,38,'',7,'',''),(47,38,'2',8,'',''),(48,38,'2',9,'',''),(49,38,'',10,'','-'),(50,38,'',11,'','-'),(51,38,'',12,'','-'),(52,38,'2',13,'','-');
/*!40000 ALTER TABLE `signos_clinicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_porcion`
--

DROP TABLE IF EXISTS `tipo_porcion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_porcion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_porcion`
--

LOCK TABLES `tipo_porcion` WRITE;
/*!40000 ALTER TABLE `tipo_porcion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_porcion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido_paterno` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido_materno` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` int(30) DEFAULT NULL,
  `estatura` int(11) DEFAULT NULL,
  `id_rol` int(11) NOT NULL,
  `contraseña` blob,
  `escolaridad` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado_civil` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_rol_idx` (`id_rol`),
  CONSTRAINT `fk_rol` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contiene los usuarios registrados en la plataforma, identificados por rol';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Sebastián','Acosta','Baños',23,'sebastian@correo.com',1256789032,134,1,NULL,'Licenciatura','Solteros'),(2,'Rosa','Viva','De Santa',45,'rosa@correo.com',1256789032,145,1,NULL,'Posgrado','Solteros'),(3,'Alondra','Famadas','Malaguilla',32,'alondra@correo.com',1256789032,165,1,NULL,'Licenciatura','Solteros'),(4,'Tania','Lopez','Fernandez',19,'tania@correo.com',1256789032,170,1,NULL,'Posgrado','Solteros'),(5,'Fernanda','Rodriguez','Gonzalez',20,'fer@correo.com',1256789032,158,1,NULL,'Licenciatura','Solteros'),(6,'Diana','Mendez','Perez',21,'diana@correo.com',1256789032,165,1,NULL,'Posgrado','Solteros'),(7,'Araceli','Loza','Mena',22,'araceli@correo.com',1256789032,145,1,NULL,'Licenciatura','Solteros'),(8,'Violeta','Nuñez','Chavez',23,'vio@correo.com',1256789032,167,1,NULL,'Posgrado','Solteros'),(9,'Margarita','Heredia','Lagunes',24,'magos@correo.com',1256789032,170,1,NULL,'Licenciatura','Solteros'),(10,'Leticia','Cortes','Aguilar',45,'lety@correo.com',1256789032,170,1,NULL,'Licenciatura','Casados'),(11,'Roberto','Ramos','Espejo',26,'roberto@correo.com',1256789032,167,1,NULL,'Licenciatura','Casados'),(12,'Armando','García','Silva',27,'armando@correo.com',1256789032,161,1,NULL,'Licenciatura','Casados'),(13,'Gabriel','Orozco','Aguilar',28,'f¡gabo@correo.com',1256789032,170,1,NULL,'Licenciatura','Casados'),(14,'Alfredo','Trejo','Prado',29,'alfredo@correo.com',1256789032,158,1,NULL,'Licenciatura','Casados'),(15,'Sergio','Lara','Merè',24,'sergio@correo.com',1256789032,159,1,NULL,'Licenciatura','Casados'),(16,'Oscar','Lunar','Moreno',20,'oscar@correo.com',1256789032,170,1,NULL,'Licenciatura','Casados'),(17,'Alicia','Reveles','Gonzalez',21,'alicia@correo.com',1256789032,167,1,NULL,'Posgrado','Casados'),(18,'Yeimi','Munguía','Ortega',22,'yeimi@correo.com',1256789032,158,1,NULL,'Posgrado','Casados'),(19,'Regina','Fuentes','Romero',23,'regina@correo.com',1256789032,159,1,NULL,'Posgrado','Casados'),(20,'Elena','Moreno','Reyes',24,'elena@correo.com',1256789032,170,1,NULL,'Posgrado','Casados'),(21,'Miriam','Baez','Reyes',25,'miri@correo.com',1256789032,159,1,NULL,'Posgrado','Casados'),(22,'Lourdes','Salvador','Sánchez',26,'lulu@correo.com',1256789032,158,1,NULL,'Posgrado','Casados'),(23,'Mayra','Vega','Peinaod',27,'may@correo.com',1256789032,165,1,NULL,'Posgrado','Solteros'),(24,'Cynthia','Zamora','Reyes',28,'cynthia@correo.com',1256789032,167,1,NULL,'Posgrado','Solteros'),(25,'Ofelia','Jimenez','Fuentes',29,'ofe@correo.com',1256789032,167,1,NULL,'Licenciatura','Solteros'),(26,'Jemima','Garcia','Torres',30,'jemi@correo.com',1256789032,158,1,NULL,'Licenciatura','Solteros'),(27,'Maria','Rojas','Peinado',31,'ma@correo.com',1256789032,170,1,NULL,'Licenciatura','Solteros'),(28,'Berenice','Fuentes','Reveles',32,'bere@correo.com',1256789032,167,1,NULL,'Licenciatura','Solteros'),(29,'Diego','Chavez','Arreguin',33,'di@correo.com',1256789032,158,1,NULL,'Licenciatura','Solteros'),(30,'David','Delgado','Orozco',34,'davis@correo.com',1256789032,159,1,NULL,'Licenciatura','Solteros'),(31,'Ramses','Flores','Trejo',35,'ramses@correo.com',1256789032,145,1,NULL,'Licenciatura','Solteros'),(32,'Angel','Espejo','Fuentes',36,'angel@correo.com',1256789032,159,1,NULL,'Licenciatura','Solteros'),(33,'Irving','Lagunes','Aguayo',37,'irving@correo.com',1256789032,165,1,NULL,'Posgrado','Solteros'),(34,'Antonio','Garcia','Silva',38,'toño@correo.com',1256789032,159,1,NULL,'Posgrado','Casados'),(35,'Lorena','De Jesus','Heredia',21,'lorena@correo.com',1256789032,170,1,NULL,'Posgrado','Casados'),(36,'Daniela','Herrera','Lopez',24,'danny@correo.com',1256789032,165,1,NULL,'Posgrado','Casados'),(37,'Monica','Ferreira','Garcia',22,'mony@correo.com',1256789032,158,1,NULL,'Posgrado','Casados'),(38,'Pedro','Cuevas','Luna',26,'pedro@correo.com',1256789032,165,1,NULL,'Posgrado','Casados');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-14  2:11:02
