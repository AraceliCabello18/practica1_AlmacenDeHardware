create database almacenDeHardware;
use almacenDeHardware;

CREATE TABLE `t_almacen` (
  `id_almacen` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(245) NOT NULL,
  `modelo` VARCHAR(245) NOT NULL,
  `serie` VARCHAR(255) NOT NULL,
  `capacidad` VARCHAR(255) NOT NULL,
  `descripcion` VARCHAR(255) NOT NULL,
  `imagen` VARCHAR(255) NOT NULL,
  `extension` VARCHAR(245) NOT NULL,
  PRIMARY KEY (`id_almacen`));