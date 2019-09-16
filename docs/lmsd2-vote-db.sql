-- MySQL Script generated by MySQL Workbench
-- mar. 10 sept. 2019 11:50:48 CEST
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema lmsd2-vote
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `rating`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rating` (
  `quote_id` INT UNSIGNED NOT NULL,
  `vote_up` INT UNSIGNED NULL DEFAULT 0,
  `vote_down` INT UNSIGNED NULL DEFAULT 0,
  PRIMARY KEY (`quote_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vote`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vote` (
  `vote_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` INT UNSIGNED NOT NULL,
  `quote` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`vote_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `rating_has_vote`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rating_has_vote` (
  `rating_quote_id` INT UNSIGNED NOT NULL,
  `vote_vote_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`rating_quote_id`, `vote_vote_id`),
  INDEX `fk_rating_has_vote_vote1_idx` (`vote_vote_id` ASC),
  INDEX `fk_rating_has_vote_rating_idx` (`rating_quote_id` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
