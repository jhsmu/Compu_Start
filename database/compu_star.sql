CREATE TABLE
`categoria`
(
  `id_categoria` INT
(11) NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR
(50) NOT NULL,
  PRIMARY KEY
(`id_categoria`))
ENGINE = InnoDB
DEFAULT CHARACTER
SET = utf8mb4;


-- -----------------------------------------------------
-- Table `compu_start`.`cliente`
-- -----------------------------------------------------
CREATE TABLE
`cliente`
(
  `email` VARCHAR
(80) NOT NULL,
  `apellido` VARCHAR
(50) NOT NULL,
  `nombre` VARCHAR
(60) NOT NULL,
  `direccion` VARCHAR
(100) NOT NULL,
  `telefono` INT
(11) NOT NULL,
  `contrasenia` VARCHAR
(100) NOT NULL,
  PRIMARY KEY
(`email`))
ENGINE = InnoDB
DEFAULT CHARACTER
SET = utf8mb4;


-- -----------------------------------------------------
-- Table `compu_start`.`proveedor`
-- -----------------------------------------------------
CREATE TABLE
`proveedor`
(
  `id_proveedor` INT
(11) NOT NULL AUTO_INCREMENT,
  `proveedor` VARCHAR
(50) NOT NULL,
  `correo` VARCHAR
(45) NOT NULL,
  `web` VARCHAR
(45) NULL DEFAULT NULL,
  `direccion` VARCHAR
(50) NOT NULL,
  PRIMARY KEY
(`id_proveedor`))
ENGINE = InnoDB
DEFAULT CHARACTER
SET = utf8mb4;


-- -----------------------------------------------------
-- Table `compu_start`.`compra`
-- -----------------------------------------------------
CREATE TABLE
`compra`
(
  `id_compra` INT
(11) NOT NULL AUTO_INCREMENT,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `total` DECIMAL (2,0) NOT NULL,
  `id_proveedor` INT
(11) NOT NULL,
  PRIMARY KEY
(`id_compra`),
  INDEX `proveedor_idx`
(`id_proveedor` ASC) ,
  CONSTRAINT `proveedor`
    FOREIGN KEY
(`id_proveedor`)
    REFERENCES `compu_start`.`proveedor`
(`id_proveedor`)
    ON
DELETE NO ACTION
    ON
UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER
SET = utf8mb4;


-- -----------------------------------------------------
-- Table `compu_start`.`marca`
-- -----------------------------------------------------
CREATE TABLE
`marca`
(
  `id_marca` INT
(11) NOT NULL AUTO_INCREMENT,
  `marca` VARCHAR
(50) NOT NULL,
  PRIMARY KEY
(`id_marca`))
ENGINE = InnoDB
DEFAULT CHARACTER
SET = utf8mb4;


-- -----------------------------------------------------
-- Table `compu_start`.`producto`
-- -----------------------------------------------------
CREATE TABLE
`producto`
(
  `id_producto` INT
(11) NOT NULL AUTO_INCREMENT,
  `serial` VARCHAR
(12) NOT NULL,
  `producto` VARCHAR
(60) NOT NULL,
  `descripcion` TEXT NULL DEFAULT NULL,
  `cantidad` INT
(11) NOT NULL,
  `precio` DECIMAL
(2,0) NOT NULL,
  `id_categoria` INT
(11) NOT NULL,
  `id_marca` INT
(11) NOT NULL,
  PRIMARY KEY
(`id_producto`),
  UNIQUE INDEX `serial_UNIQUE`
(`serial` ASC) ,
  INDEX `categoria_idx`
(`id_categoria` ASC) ,
  INDEX `marca_idx`
(`id_marca` ASC) ,
  CONSTRAINT `categoria`
    FOREIGN KEY
(`id_categoria`)
    REFERENCES `compu_start`.`categoria`
(`id_categoria`)
    ON
DELETE NO ACTION
    ON
UPDATE NO ACTION,
  CONSTRAINT `marca`
    FOREIGN KEY
(`id_marca`)
    REFERENCES `compu_start`.`marca`
(`id_marca`)
    ON
DELETE NO ACTION
    ON
UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER
SET = utf8mb4;


-- -----------------------------------------------------
-- Table `compu_start`.`detalle_compra`
-- -----------------------------------------------------
CREATE TABLE
`detalle_compra`
(
  `id_detalle_compra` INT
(11) NOT NULL AUTO_INCREMENT,
  `id_compra` INT
(11) NOT NULL,
  `id_producto` INT
(11) NOT NULL,
  `cantidad` DECIMAL
(2,0) NOT NULL,
  `valor` DECIMAL
(2,0) NOT NULL,
  PRIMARY KEY
(`id_detalle_compra`),
  INDEX `compra_idx`
(`id_compra` ASC) ,
  INDEX `det_compra_idx`
(`id_producto` ASC) ,
  CONSTRAINT `compra`
    FOREIGN KEY
(`id_compra`)
    REFERENCES `compu_start`.`compra`
(`id_compra`)
    ON
DELETE NO ACTION
    ON
UPDATE NO ACTION,
  CONSTRAINT `det_compra`
    FOREIGN KEY
(`id_producto`)
    REFERENCES `compu_start`.`producto`
(`id_producto`)
    ON
DELETE NO ACTION
    ON
UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER
SET = utf8mb4;


-- -----------------------------------------------------
-- Table `compu_start`.`venta`
-- -----------------------------------------------------
CREATE TABLE
`venta`
(
  `id_venta` INT
(11) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR
(50) NOT NULL,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  PRIMARY KEY
(`id_venta`),
  INDEX `cliente_idx`
(`email` ASC) ,
  CONSTRAINT `cliente`
    FOREIGN KEY
(`email`)
    REFERENCES `compu_start`.`cliente`
(`apellido`)
    ON
DELETE NO ACTION
    ON
UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER
SET = utf8mb4;


-- -----------------------------------------------------
-- Table `compu_start`.`detalle_venta`
-- -----------------------------------------------------
CREATE TABLE
`detalle_venta`
(
  `id_venta` INT
(11) NOT NULL,
  `id_producto` INT
(11) NOT NULL,
  `cantidad_venta` INT
(11) NOT NULL,
  `total` DECIMAL
(2,0) NOT NULL,
  INDEX `venta_idx`
(`id_venta` ASC) ,
  INDEX `producto_idx`
(`id_producto` ASC) ,
  CONSTRAINT `producto`
    FOREIGN KEY
(`id_producto`)
    REFERENCES `compu_start`.`producto`
(`id_producto`)
    ON
DELETE NO ACTION
    ON
UPDATE NO ACTION,
  CONSTRAINT `venta`
    FOREIGN KEY
(`id_venta`)
    REFERENCES `compu_start`.`venta`
(`id_venta`)
    ON
DELETE NO ACTION
    ON
UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER
SET = utf8mb4;


-- -----------------------------------------------------
-- Table `compu_start`.`imagenes`
-- -----------------------------------------------------
CREATE TABLE
`imagenes`
(
  `id_producto` INT
(11) NOT NULL,
  `url` VARCHAR
(80) NULL DEFAULT NULL,
  INDEX `imagen_idx`
(`id_producto` ASC) ,
  CONSTRAINT `imagen`
    FOREIGN KEY
(`id_producto`)
    REFERENCES `compu_start`.`producto`
(`id_producto`)
