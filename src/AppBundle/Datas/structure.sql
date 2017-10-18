-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema michaelm2m
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema michaelm2m
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `michaelm2m` DEFAULT CHARACTER SET utf8 ;
USE `michaelm2m` ;

-- -----------------------------------------------------
-- Table `michaelm2m`.`util`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `michaelm2m`.`util` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NULL,
  `pwd` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `michaelm2m`.`article`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `michaelm2m`.`article` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `theTitle` VARCHAR(150) NULL,
  `theText` TEXT NULL,
  `theDate` TIMESTAMP NULL,
  `util_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_article_util_idx` (`util_id` ASC),
  CONSTRAINT `fk_article_util`
    FOREIGN KEY (`util_id`)
    REFERENCES `michaelm2m`.`util` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `michaelm2m`.`section`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `michaelm2m`.`section` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `theTitle` VARCHAR(100) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `theTitle_UNIQUE` (`theTitle` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `michaelm2m`.`article_has_section`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `michaelm2m`.`article_has_section` (
  `article_id` INT UNSIGNED NOT NULL,
  `section_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`article_id`, `section_id`),
  INDEX `fk_article_has_section_section1_idx` (`section_id` ASC),
  INDEX `fk_article_has_section_article1_idx` (`article_id` ASC),
  CONSTRAINT `fk_article_has_section_article1`
    FOREIGN KEY (`article_id`)
    REFERENCES `michaelm2m`.`article` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_article_has_section_section1`
    FOREIGN KEY (`section_id`)
    REFERENCES `michaelm2m`.`section` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
