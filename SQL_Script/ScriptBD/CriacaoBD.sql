SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `agendaFotografo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `agendaFotografo` ;

CREATE TABLE IF NOT EXISTS `agendaFotografo`.`Jobs` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `nomeDoProjeto` VARCHAR(200) NOT NULL,
  `nomeDoFotografo` VARCHAR(200) NOT NULL,
  `nomeDoCliente` VARCHAR(200) NULL DEFAULT NULL,
  `nomeDoModelo` VARCHAR(200) NULL DEFAULT NULL,
  `dataDeInicio` VARCHAR(45) NULL DEFAULT NULL,
  `dataDeFinalizacao` VARCHAR(45) NULL DEFAULT NULL,
  `observacoes` VARCHAR(500) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
