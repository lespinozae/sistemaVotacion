create database votacionesdb;
USE `votacionesdb` ;

-- -----------------------------------------------------
-- Table `votacionesdb`.`estudiantes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `votacionesdb`.`estudiantes` ;

CREATE TABLE IF NOT EXISTS `votacionesdb`.`estudiantes` (
  `carnet` INT NOT NULL,
  `pnombre` VARCHAR(50) NOT NULL,
  `papellido` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`carnet`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `votacionesdb`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `votacionesdb`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `votacionesdb`.`usuarios` (
  `cod` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`cod`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `votacionesdb`.`categorias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `votacionesdb`.`categorias` ;

CREATE TABLE IF NOT EXISTS `votacionesdb`.`categorias` (
  `codCategoria` INT NOT NULL AUTO_INCREMENT,
  `descripcionCategoria` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`codCategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `votacionesdb`.`proyectos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `votacionesdb`.`proyectos` ;

CREATE TABLE IF NOT EXISTS `votacionesdb`.`proyectos` (
  `codProyecto` INT NOT NULL AUTO_INCREMENT,
  `nombreProyecto` VARCHAR(100) NOT NULL,
  `estudiantes_carnet` INT NOT NULL,
  `categorias_codCategoria` INT NOT NULL,
  PRIMARY KEY (`codProyecto`),
  CONSTRAINT `fk_proyectos_estudiantes1`
    FOREIGN KEY (`estudiantes_carnet`)
    REFERENCES `votacionesdb`.`estudiantes` (`carnet`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_proyectos_categorias1`
    FOREIGN KEY (`categorias_codCategoria`)
    REFERENCES `votacionesdb`.`categorias` (`codCategoria`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE INDEX `fk_proyectos_estudiantes1_idx` ON `votacionesdb`.`proyectos` (`estudiantes_carnet` ASC);

CREATE INDEX `fk_proyectos_categorias1_idx` ON `votacionesdb`.`proyectos` (`categorias_codCategoria` ASC);


-- -----------------------------------------------------
-- Table `votacionesdb`.`votacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `votacionesdb`.`votacion` ;

CREATE TABLE IF NOT EXISTS `votacionesdb`.`votacion` (
  `codVotacion` INT NOT NULL AUTO_INCREMENT,
  `estudiantes_carnet` INT NOT NULL,
  `proyectos_codProyecto` INT NOT NULL,
  PRIMARY KEY (`codVotacion`),
  CONSTRAINT `fk_votacion_estudiantes1`
    FOREIGN KEY (`estudiantes_carnet`)
    REFERENCES `votacionesdb`.`estudiantes` (`carnet`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_votacion_proyectos1`
    FOREIGN KEY (`proyectos_codProyecto`)
    REFERENCES `votacionesdb`.`proyectos` (`codProyecto`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

CREATE INDEX `fk_votacion_estudiantes1_idx` ON `votacionesdb`.`votacion` (`estudiantes_carnet` ASC);

CREATE INDEX `fk_votacion_proyectos1_idx` ON `votacionesdb`.`votacion` (`proyectos_codProyecto` ASC);
