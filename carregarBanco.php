<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, '');

$sql = "
DROP DATABASE IF EXISTS compras;

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `compras` DEFAULT CHARACTER SET utf8 ;
USE `compras` ;

CREATE TABLE IF NOT EXISTS `compras`.`compras` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `item` VARCHAR(255) NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `compras`.`compromissos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(255) NULL,
  `data` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;";

if ($conn->multi_query($sql) === TRUE) {
    header("location: index.php");
} else {
    echo "Erro ao executar o script: " . $conn->error;
}



