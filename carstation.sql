# Host: localhost  (Version 5.5.5-10.4.28-MariaDB)
# Date: 2024-10-16 17:40:59
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "garaje"
#

DROP TABLE IF EXISTS `garaje`;
CREATE TABLE `garaje` (
  `id_garaje` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `zona` varchar(255) DEFAULT NULL,
  `latitud` varchar(255) DEFAULT NULL,
  `longitud` varchar(255) DEFAULT NULL,
  `plaza` int(11) DEFAULT NULL,
  `hora_inicio` time DEFAULT '00:00:00',
  `hora_final` time DEFAULT '00:00:00',
  `estado` enum('activo','inactivo') DEFAULT 'inactivo',
  PRIMARY KEY (`id_garaje`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "garaje"
#

INSERT INTO `garaje` VALUES (6,1,'av ayacucho y av herionas','central','-17.3928761','-66.158764',6,'07:00:00','18:00:00','activo');

#
# Structure for table "pago"
#

DROP TABLE IF EXISTS `pago`;
CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `precio` double(10,2) DEFAULT 0.00,
  `img` varchar(255) DEFAULT NULL,
  `estado` enum('por comprobar','eliminado','verificado') DEFAULT NULL,
  PRIMARY KEY (`id_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "pago"
#


#
# Structure for table "paquete"
#

DROP TABLE IF EXISTS `paquete`;
CREATE TABLE `paquete` (
  `id_paquete` int(11) NOT NULL AUTO_INCREMENT,
  `horas` int(11) DEFAULT NULL,
  `precio` double(10,2) DEFAULT 0.00,
  `tipo` enum('vehiculo','moto','bicicleta') DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT NULL,
  PRIMARY KEY (`id_paquete`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "paquete"
#

INSERT INTO `paquete` VALUES (1,2000,500.00,'vehiculo','activo'),(2,1000,250.00,'vehiculo','activo'),(3,500,100.00,'vehiculo','activo');

#
# Structure for table "plaza"
#

DROP TABLE IF EXISTS `plaza`;
CREATE TABLE `plaza` (
  `id_plaza` int(11) NOT NULL AUTO_INCREMENT,
  `id_garaje` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT 'activo',
  PRIMARY KEY (`id_plaza`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "plaza"
#

INSERT INTO `plaza` VALUES (1,6,1,'inactivo'),(2,6,2,'activo'),(3,6,3,'activo'),(4,6,4,'activo'),(5,6,5,'activo'),(6,6,6,'activo');

#
# Structure for table "reserva"
#

DROP TABLE IF EXISTS `reserva`;
CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_garaje` int(11) DEFAULT NULL,
  `id_plaza` int(11) DEFAULT NULL,
  `reserva_cod` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora_inicio_r` time DEFAULT NULL,
  `hora_final_r` time DEFAULT NULL,
  `placa` varchar(10) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT 'activo',
  `id_pago` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_reserva`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "reserva"
#

INSERT INTO `reserva` VALUES (4,1,6,2,'VPCD0L67AX','2024-10-16','16:51:00','17:52:00','123ABC','','','activo',NULL);

#
# Structure for table "ticket"
#

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `id_paquete` int(11) DEFAULT NULL,
  `cliente` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `placa` varchar(10) DEFAULT NULL,
  `horas` int(11) DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT NULL,
  PRIMARY KEY (`id_ticket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "ticket"
#


#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `contra` varchar(255) DEFAULT NULL,
  `rol` enum('system','admin','user') DEFAULT 'user',
  `celular` varchar(15) DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT 'activo',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'ivan','magneaquinoivan@gmail.com','$2y$05$K4QlUehwRS8kN5v/ASzwwu2IHfgAiasu3.rXnknaLFpAVXoOuQYWi','admin','77777777','activo');
