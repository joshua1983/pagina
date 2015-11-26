# Host: 127.0.0.1  (Version: 5.6.24)
# Date: 2015-11-26 16:50:03
# Generator: MySQL-Front 5.3  (Build 4.214)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "almacen"
#

DROP TABLE IF EXISTS `almacen`;
CREATE TABLE `almacen` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "almacen"
#

INSERT INTO `almacen` VALUES (1,'almacen1','cabecera','78766','josue.barrios@gmail.com');

#
# Structure for table "colores_fabricas"
#

DROP TABLE IF EXISTS `colores_fabricas`;
CREATE TABLE `colores_fabricas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `ruta` varchar(255) DEFAULT NULL,
  `fabrica` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "colores_fabricas"
#

INSERT INTO `colores_fabricas` VALUES (1,'Color 1',NULL,NULL);

#
# Structure for table "fabricas"
#

DROP TABLE IF EXISTS `fabricas`;
CREATE TABLE `fabricas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `telefono` varchar(255) NOT NULL DEFAULT '',
  `direccion` varchar(255) NOT NULL DEFAULT '',
  `ruta` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "fabricas"
#

INSERT INTO `fabricas` VALUES (1,'fabrica 1','4446677','san francisco','img/fabricas/logo1.png'),(2,'fabrica 2','558866','san francisco','img/fabricas/logo2.png');

#
# Structure for table "lineas"
#

DROP TABLE IF EXISTS `lineas`;
CREATE TABLE `lineas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `ruta` varchar(255) NOT NULL DEFAULT '',
  `fabrica` int(11) NOT NULL DEFAULT '0',
  `fecha_lanz` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "lineas"
#

INSERT INTO `lineas` VALUES (1,'linea 1','img/fabricas/zapatilla1.png',1,'2016-01-01'),(2,'linea 2','img/fabricas/zapatilla2.png',1,'2016-01-01'),(3,'linea 2','img/fabricas/zapatilla3.png',2,'2015-12-01');

#
# Structure for table "login"
#

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `tipo` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "login"
#

INSERT INTO `login` VALUES (1,'almacen','123','Almacen 1','0');

#
# Structure for table "pedidos"
#

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `almacen` int(11) DEFAULT NULL,
  `zapato` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "pedidos"
#

INSERT INTO `pedidos` VALUES (5,1,0,0,0,'2015-11-26 16:48:42');

#
# Structure for table "zapato"
#

DROP TABLE IF EXISTS `zapato`;
CREATE TABLE `zapato` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL DEFAULT '',
  `fabrica` int(11) DEFAULT NULL,
  `linea` int(11) DEFAULT NULL,
  `zuela` varchar(255) DEFAULT NULL,
  `capellada` varchar(255) DEFAULT NULL,
  `adorno` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `precio` int(11) NOT NULL DEFAULT '0',
  `render` varchar(255) DEFAULT NULL,
  `almacen` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "zapato"
#

INSERT INTO `zapato` VALUES (1,'zapato1',1,1,NULL,NULL,NULL,NULL,100,'img/fabricas/zapatilla1.png',1);
