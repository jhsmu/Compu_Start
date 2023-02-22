CREATE TABLE IF NOT EXISTS `compu_star`.`categoria` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_categoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compu_star`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compu_star`.`producto` (
  `id_producto` INT NOT NULL AUTO_INCREMENT,
  `serial` VARCHAR(12) NOT NULL,
  `producto` VARCHAR(60) NOT NULL,
  `descripcion` TEXT NULL,
  `cantidad` INT NOT NULL,
  `precio` DECIMAL(2) NOT NULL,
  `id_categoria` INT NOT NULL,
  PRIMARY KEY (`id_producto`),
  INDEX `categoria_idx` (`id_categoria` ASC) ,
  UNIQUE INDEX `serial_UNIQUE` (`serial` ASC) ,
  CONSTRAINT `categoria`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `compu_star`.`categoria` (`id_categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compu_star`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compu_star`.`cliente` (
  `usuario` VARCHAR(50) NOT NULL,
  `nombre` VARCHAR(60) NOT NULL,
  `email` VARCHAR(80) NOT NULL,
  `direccion` VARCHAR(100) NOT NULL,
  `telefono` INT NOT NULL,
  `contrasenia` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compu_star`.`venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compu_star`.`venta` (
  `id_venta` INT NOT NULL AUTO_INCREMENT,
  `cliente` VARCHAR(50) NOT NULL,
  `fecha` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id_venta`),
  INDEX `cliente_idx` (`cliente` ASC) ,
  CONSTRAINT `cliente`
    FOREIGN KEY (`cliente`)
    REFERENCES `compu_star`.`cliente` (`usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compu_star`.`detalle_venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compu_star`.`detalle_venta` (
  `id_venta` INT NOT NULL,
  `id_producto` INT NOT NULL,
  `cantidad_venta` INT NOT NULL,
  `total` DECIMAL(2) NOT NULL,
  INDEX `venta_idx` (`id_venta` ASC) ,
  INDEX `producto_idx` (`id_producto` ASC) ,
  CONSTRAINT `venta`
    FOREIGN KEY (`id_venta`)
    REFERENCES `compu_star`.`venta` (`id_venta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `producto`
    FOREIGN KEY (`id_producto`)
    REFERENCES `compu_star`.`producto` (`id_producto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compu_star`.`proveedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compu_star`.`proveedor` (
  `id_proveedor` INT NOT NULL AUTO_INCREMENT,
  `proveedor` VARCHAR(50) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `web` VARCHAR(45) NULL,
  `direccion` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_proveedor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compu_star`.`productos_proveedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compu_star`.`productos_proveedor` (
  `id_producto` INT NOT NULL,
  `id_proveedor` INT NOT NULL,
  INDEX `proveedor_idx` (`id_proveedor` ASC) ,
  INDEX `product_provee_idx` (`id_producto` ASC) ,
  CONSTRAINT `proveedor`
    FOREIGN KEY (`id_proveedor`)
    REFERENCES `compu_star`.`proveedor` (`id_proveedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `product_provee`
    FOREIGN KEY (`id_producto`)
    REFERENCES `compu_star`.`producto` (`id_producto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;