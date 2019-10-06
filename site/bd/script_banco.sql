-- MySQL Workbench Synchronization
-- Generated: 2019-09-16 21:16
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: M

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE DATABASE IF NOT EXISTS `mydb_reciclagem`;

--USE `mydb_reciclagem`;

CREATE TABLE IF NOT EXISTS `mydb_reciclagem`.`reciclagem` (
  `idreciclagem` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_rua` VARCHAR(45) NULL DEFAULT NULL,
  `numero` INT(11) NULL DEFAULT NULL,
  `CEP` INT(11) NULL DEFAULT NULL,
  `bairro` VARCHAR(45) NULL DEFAULT NULL,
  `cidade` VARCHAR(45) NULL DEFAULT NULL,
  `estado` VARCHAR(45) NULL DEFAULT NULL,
  `link_foto_sit_lixo` VARCHAR(45) NULL DEFAULT NULL,
  `latitude` INT(11) NOT NULL,
  `logitude` INT(11) NOT NULL,
  `comentario` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idreciclagem`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
