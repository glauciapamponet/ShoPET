-- MySQL Script generated by MySQL Workbench
-- Sat Oct 16 18:36:46 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema ShoPET
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ShoPET
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ShoPET` DEFAULT CHARACTER SET utf8 ;
USE `ShoPET` ;

-- -----------------------------------------------------
-- Table `ShoPET`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ShoPET`.`categoria` (
  `nomecat` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`nomecat`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ShoPET`.`petiano`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ShoPET`.`petiano` (
  `idpetiano` INT NOT NULL AUTO_INCREMENT,
  `nomepetiano` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idpetiano`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ShoPET`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ShoPET`.`produto` (
  `idproduto` INT NOT NULL AUTO_INCREMENT,
  `nomeprod` VARCHAR(45) NOT NULL,
  `precoprod` DOUBLE(10,2) NOT NULL,
  `nomecat` VARCHAR(45) NOT NULL,
  `idpetiano` INT NOT NULL,
  `pathimage` VARCHAR(150) NOT NULL,
  `estoque` INT NOT NULL,
  `status_dispo` BINARY(1) NOT NULL,
  PRIMARY KEY (`idproduto`),
  INDEX `fkcateg_idx` (`nomecat` ASC) VISIBLE,
  INDEX `fkpetiano_idx` (`idpetiano` ASC) VISIBLE,
  CONSTRAINT `fkcateg`
    FOREIGN KEY (`nomecat`)
    REFERENCES `ShoPET`.`categoria` (`nomecat`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkpetiano`
    FOREIGN KEY (`idpetiano`)
    REFERENCES `ShoPET`.`petiano` (`idpetiano`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ShoPET`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ShoPET`.`cliente` (
  `idcliente` INT NOT NULL AUTO_INCREMENT,
  `nomecliente` VARCHAR(45) NOT NULL,
  `datanascliente` DATE NOT NULL,
  `emailcliente` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ShoPET`.`pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ShoPET`.`pedido` (
  `idpedido` INT NOT NULL AUTO_INCREMENT,
  `idcliente` INT NOT NULL,
  `idtipopag` INT NOT NULL,
  `valortotal` DOUBLE(10,2) NOT NULL,
  PRIMARY KEY (`idpedido`),
  INDEX `fk_pedcli_idx` (`idcliente` ASC) VISIBLE,
  CONSTRAINT `fk_pedcli`
    FOREIGN KEY (`idcliente`)
    REFERENCES `ShoPET`.`cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ShoPET`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ShoPET`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `idcliente` INT NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idusuario`),
  INDEX `fk_logincli_idx` (`idcliente` ASC) VISIBLE,
  CONSTRAINT `fk_logincli`
    FOREIGN KEY (`idcliente`)
    REFERENCES `ShoPET`.`cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ShoPET`.`grupopedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ShoPET`.`grupopedido` (
  `idgrupopedido` INT NOT NULL AUTO_INCREMENT,
  `idproduto` INT NOT NULL,
  `idpedido` INT NOT NULL,
  `quantidade` INT NOT NULL,
  `subtotal` DOUBLE(5,2) NOT NULL,
  PRIMARY KEY (`idgrupopedido`),
  INDEX `fk_produtoitem_idx` (`idproduto` ASC) VISIBLE,
  INDEX `fk2_produtopedido_idx` (`idpedido` ASC) VISIBLE,
  CONSTRAINT `fk_produtoitem`
    FOREIGN KEY (`idproduto`)
    REFERENCES `ShoPET`.`produto` (`idproduto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk2_produtopedido`
    FOREIGN KEY (`idpedido`)
    REFERENCES `ShoPET`.`pedido` (`idpedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ShoPET`.`carrinho`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ShoPET`.`carrinho` (
  `idcliente` INT NOT NULL,
  `idproduto` INT NOT NULL,
  `quantidade` INT NOT NULL,
  PRIMARY KEY (`idcliente`, `idproduto`),
  INDEX `fkcarrinho2_idx` (`idproduto` ASC) VISIBLE,
  CONSTRAINT `fkcarrinho`
    FOREIGN KEY (`idcliente`)
    REFERENCES `ShoPET`.`cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkcarrinho2`
    FOREIGN KEY (`idproduto`)
    REFERENCES `ShoPET`.`produto` (`idproduto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ShoPET`.`status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ShoPET`.`status` (
  `nomestatus` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`nomestatus`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ShoPET`.`logstatus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ShoPET`.`logstatus` (
  `idlogstatus` INT NOT NULL AUTO_INCREMENT,
  `idpedido` INT NOT NULL,
  `nomestatus` VARCHAR(30) NOT NULL,
  `atualizacao` DATETIME NOT NULL,
  PRIMARY KEY (`idlogstatus`),
  INDEX `fk_status_idx` (`nomestatus` ASC) VISIBLE,
  INDEX `fkstatsPedido_idx` (`idpedido` ASC) VISIBLE,
  CONSTRAINT `fk_status`
    FOREIGN KEY (`nomestatus`)
    REFERENCES `ShoPET`.`status` (`nomestatus`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fkstatsPedido`
    FOREIGN KEY (`idpedido`)
    REFERENCES `ShoPET`.`pedido` (`idpedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE TABLE `shopet`.`endcli` (
  `idend` INT NOT NULL AUTO_INCREMENT,
  `idcliente` INT NOT NULL,
  `enderecocli` VARCHAR(100) NOT NULL,
  `cepcli` VARCHAR(45) NOT NULL,
  `cidadecli` VARCHAR(45) NOT NULL,
  `estadocli` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idend`),
  INDEX `fkcli_idx` (`idcliente` ASC) VISIBLE,
  CONSTRAINT `fkcli`
    FOREIGN KEY (`idcliente`)
    REFERENCES `shopet`.`cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
    
CREATE TABLE `shopet`.`endpedido` (
  `idendpedido` INT NOT NULL AUTO_INCREMENT,
  `idpedido` INT NOT NULL,
  `enderecoped` VARCHAR(100) NOT NULL,
  `telefone` VARCHAR(45) NULL,
  `cidadeped` VARCHAR(45) NOT NULL,
  `estadoped` VARCHAR(45) NOT NULL,
  `nomedest` VARCHAR(45) NOT NULL,
  `ceped` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idendpedido`),
  INDEX `fkpedido_idx` (`idpedido` ASC) VISIBLE,
  CONSTRAINT `fkpedido`
    FOREIGN KEY (`idpedido`)
    REFERENCES `shopet`.`pedido` (`idpedido`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

USE `ShoPET`;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
