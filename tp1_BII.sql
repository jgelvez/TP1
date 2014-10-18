CREATE DATABASE  IF NOT EXISTS `tp1_BII` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tp1_BII`;
-- MySQL dump 10.13  Distrib 5.6.19, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: tp1_BII
-- ------------------------------------------------------
-- Server version	5.6.19-0ubuntu0.14.04.1

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
-- Temporary view structure for view `LugaresCantComentarios`
--

DROP TABLE IF EXISTS `LugaresCantComentarios`;
/*!50001 DROP VIEW IF EXISTS `LugaresCantComentarios`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `LugaresCantComentarios` AS SELECT 
 1 AS `nombre_lugar`,
 1 AS `count(comentario.idcomentario)`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `UsuariosComunes`
--

DROP TABLE IF EXISTS `UsuariosComunes`;
/*!50001 DROP VIEW IF EXISTS `UsuariosComunes`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `UsuariosComunes` AS SELECT 
 1 AS `nombre`,
 1 AS `apellido`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `idcategoria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` char(10) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentario`
--

DROP TABLE IF EXISTS `comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentario` (
  `idcomentario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha_hora` datetime NOT NULL,
  `detalle` text NOT NULL,
  `lugar_idlugar` int(10) unsigned NOT NULL,
  `usuario_idusuario` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idcomentario`),
  KEY `fk_comentario_lugar1_idx` (`lugar_idlugar`),
  KEY `fk_comentario_usuario1_idx` (`usuario_idusuario`),
  CONSTRAINT `fk_comentario_lugar1` FOREIGN KEY (`lugar_idlugar`) REFERENCES `lugar` (`idlugar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_comentario_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentario`
--

LOCK TABLES `comentario` WRITE;
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `tp1_BII`.`comentario_BEFORE_UPDATE` BEFORE UPDATE ON `comentario` FOR EACH ROW 
begin
insert into comentario set fecha_hora=NOW();

end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `foto`
--

DROP TABLE IF EXISTS `foto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foto` (
  `idfoto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hash_foto` char(40) DEFAULT NULL,
  `usuario_idusuario` int(10) unsigned NOT NULL,
  `lugar_idlugar` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idfoto`),
  KEY `fk_foto_lugar1_idx` (`lugar_idlugar`),
  KEY `fk_foto_usuario1_idx` (`usuario_idusuario`),
  CONSTRAINT `fk_foto_lugar1` FOREIGN KEY (`lugar_idlugar`) REFERENCES `lugar` (`idlugar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_foto_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foto`
--

LOCK TABLES `foto` WRITE;
/*!40000 ALTER TABLE `foto` DISABLE KEYS */;
/*!40000 ALTER TABLE `foto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lugar`
--

DROP TABLE IF EXISTS `lugar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lugar` (
  `idlugar` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idusuario` int(10) unsigned NOT NULL,
  `categoria_idcategoria` int(10) unsigned NOT NULL,
  `nombre_lugar` char(15) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `latitud` varchar(45) NOT NULL,
  `longitud` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `foto_perfil` char(60) NOT NULL,
  PRIMARY KEY (`idlugar`),
  KEY `fk_lugar_categoria1_idx` (`categoria_idcategoria`),
  KEY `fk_lugar_usuario1_idx` (`idusuario`),
  CONSTRAINT `fk_lugar_categoria1` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_lugar_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugar`
--

LOCK TABLES `lugar` WRITE;
/*!40000 ALTER TABLE `lugar` DISABLE KEYS */;
/*!40000 ALTER TABLE `lugar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `idrol` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_rol` char(10) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idusuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` char(10) NOT NULL,
  `apellido` char(10) NOT NULL,
  `usuario_nombre` char(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fecha_nac` date NOT NULL,
  `foto_perfil` char(60) NOT NULL,
  `contrasena` char(40) NOT NULL,
  `rol` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `usuario_nombre_UNIQUE` (`usuario_nombre`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_usuario_rol1_idx` (`rol`),
  CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`rol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Julian','Gelvez','jogelvez','gelvez30@gmail.com','1985-08-22','46546','1234',0),(3,'Juan','Enriquez','jeenriquez','elchuchu@gmail.com','1987-02-16','0','12345',0),(4,'Patito','Strada','patty','patty@gati','0000-00-00','0','123456',0);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `tp1_BII`.`usuario_BEFORE_DELETE` BEFORE DELETE ON `usuario` FOR EACH ROW
begin
	insert into `usuarios_baja`(nombre,apellido,baja)
    values (old.nombre, old.apellido, now());
end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `usuario_has_lugar`
--

DROP TABLE IF EXISTS `usuario_has_lugar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario_has_lugar` (
  `idusuario_has_lugar` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_idusuario` int(10) unsigned NOT NULL,
  `lugar_idlugar` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idusuario_has_lugar`),
  KEY `fk_usuario_has_lugar_lugar1_idx` (`lugar_idlugar`),
  KEY `fk_usuario_has_lugar_usuario1_idx` (`usuario_idusuario`),
  CONSTRAINT `fk_usuario_has_lugar_lugar1` FOREIGN KEY (`lugar_idlugar`) REFERENCES `lugar` (`idlugar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_has_lugar_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_has_lugar`
--

LOCK TABLES `usuario_has_lugar` WRITE;
/*!40000 ALTER TABLE `usuario_has_lugar` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario_has_lugar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios_baja`
--

DROP TABLE IF EXISTS `usuarios_baja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios_baja` (
  `idusuarios_baja` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` char(10) DEFAULT NULL,
  `apellido` char(10) DEFAULT NULL,
  `baja` datetime DEFAULT NULL,
  PRIMARY KEY (`idusuarios_baja`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios_baja`
--

LOCK TABLES `usuarios_baja` WRITE;
/*!40000 ALTER TABLE `usuarios_baja` DISABLE KEYS */;
INSERT INTO `usuarios_baja` VALUES (1,'Pablo','Carro','2014-10-17 11:47:03');
/*!40000 ALTER TABLE `usuarios_baja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `LugaresCantComentarios`
--

/*!50001 DROP VIEW IF EXISTS `LugaresCantComentarios`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `LugaresCantComentarios` AS select `lugar`.`nombre_lugar` AS `nombre_lugar`,count(`comentario`.`idcomentario`) AS `count(comentario.idcomentario)` from (`lugar` join `comentario` on((`comentario`.`lugar_idlugar` = `lugar`.`idlugar`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `UsuariosComunes`
--

/*!50001 DROP VIEW IF EXISTS `UsuariosComunes`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `UsuariosComunes` AS select `usuario`.`nombre` AS `nombre`,`usuario`.`apellido` AS `apellido` from (`usuario` join `rol` on((`usuario`.`rol` = `rol`.`idrol`))) where (`rol`.`tipo_rol` = 'usuario') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-18 18:56:46
