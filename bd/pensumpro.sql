/*
SQLyog Enterprise v12.4.1 (64 bit)
MySQL - 10.1.13-MariaDB : Database - pensumpro
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pensumpro` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pensumpro`;

/*Table structure for table `bitacora_ingresos` */

DROP TABLE IF EXISTS `bitacora_ingresos`;

CREATE TABLE `bitacora_ingresos` (
  `id_bit` int(11) NOT NULL AUTO_INCREMENT,
  `id_us` int(11) NOT NULL,
  PRIMARY KEY (`id_bit`),
  KEY `id_us` (`id_us`),
  CONSTRAINT `bitacora_ingresos_ibfk_1` FOREIGN KEY (`id_us`) REFERENCES `usuario` (`id_us`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bitacora_ingresos` */

/*Table structure for table `carrera` */

DROP TABLE IF EXISTS `carrera`;

CREATE TABLE `carrera` (
  `id_ca` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) NOT NULL,
  PRIMARY KEY (`id_ca`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `carrera` */

insert  into `carrera`(`id_ca`,`nombre`) values 
(1,'Ingenieria');

/*Table structure for table `facultad` */

DROP TABLE IF EXISTS `facultad`;

CREATE TABLE `facultad` (
  `id_facultad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_f` varchar(100) NOT NULL,
  PRIMARY KEY (`id_facultad`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `facultad` */

insert  into `facultad`(`id_facultad`,`nombre_f`) values 
(1,'Ingenierias'),
(2,'Odontologia'),
(3,'Medicina'),
(4,'Derecho'),
(6,'Ciencias');

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(7) DEFAULT NULL,
  `nombre` varchar(500) DEFAULT NULL,
  `uv` int(11) DEFAULT NULL,
  `id_facultad` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id_materia`),
  KEY `id_facultad` (`id_facultad`),
  CONSTRAINT `materia_ibfk_2` FOREIGN KEY (`id_facultad`) REFERENCES `facultad` (`id_facultad`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `materia` */

insert  into `materia`(`id_materia`,`codigo`,`nombre`,`uv`,`id_facultad`,`estado`) values 
(20,'0001','Matematica I',3,1,0),
(21,'0002','Matematica II',3,1,0),
(22,'0003','Anatomia',3,3,0),
(26,'2552','Ingles',4,2,0),
(27,'2552','Matematica I',4,6,0),
(28,'0002','Ingles',4,4,0),
(29,'132','Contabilidad',4,2,0),
(30,'0005','Estadistica',4,4,0);

/*Table structure for table `tipo_usuario` */

DROP TABLE IF EXISTS `tipo_usuario`;

CREATE TABLE `tipo_usuario` (
  `id_tpus` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(250) NOT NULL,
  PRIMARY KEY (`id_tpus`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tipo_usuario` */

insert  into `tipo_usuario`(`id_tpus`,`tipo`) values 
(1,'Administrador'),
(2,'Usuario'),
(3,'Alumno');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id_us` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(500) NOT NULL,
  `contra` varchar(500) NOT NULL,
  `id_tpus` int(11) NOT NULL,
  PRIMARY KEY (`id_us`),
  KEY `id_tpus` (`id_tpus`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tpus`) REFERENCES `tipo_usuario` (`id_tpus`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id_us`,`usuario`,`contra`,`id_tpus`) values 
(3,'10121996','10121996',1);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `apellido` varchar(300) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `edad` decimal(3,0) NOT NULL,
  `numero_tel` varchar(12) NOT NULL,
  `email_alum` varchar(500) NOT NULL,
  `id_us` int(11) NOT NULL,
  PRIMARY KEY (`id_alumno`),
  KEY `id_us` (`id_us`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_us`) REFERENCES `usuario` (`id_us`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

/*Table structure for table `usuarios1` */

DROP TABLE IF EXISTS `usuarios1`;

CREATE TABLE `usuarios1` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `apellido` varchar(300) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `edad` decimal(3,0) NOT NULL,
  `numero_tel` varchar(12) NOT NULL,
  `email_usua` varchar(500) NOT NULL,
  `id_us` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_us` (`id_us`),
  CONSTRAINT `usuarios1_ibfk_1` FOREIGN KEY (`id_us`) REFERENCES `usuario` (`id_us`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuarios1` */

/*Table structure for table `usuarios2` */

DROP TABLE IF EXISTS `usuarios2`;

CREATE TABLE `usuarios2` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL,
  `apellido` varchar(300) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `edad` decimal(3,0) NOT NULL,
  `numero_tel` varchar(12) NOT NULL,
  `email_admin` varchar(500) NOT NULL,
  `id_us` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`),
  KEY `id_us` (`id_us`),
  CONSTRAINT `usuarios2_ibfk_1` FOREIGN KEY (`id_us`) REFERENCES `usuario` (`id_us`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios2` */

insert  into `usuarios2`(`id_admin`,`nombre`,`apellido`,`foto`,`sexo`,`edad`,`numero_tel`,`email_admin`,`id_us`) values 
(3,'kevin Elias','Benitez Prudencio','Captura_de_pantalla_(166)1.png','Masculino',22,'22222222','k@g.com',3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
