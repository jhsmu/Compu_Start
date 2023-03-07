--Creación de la Data Base

CREATE DATABASE compu_start;

----Creación de las tablas

CREATE TABLE cliente(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    imagen VARCHAR(80) NULL,
    nombre VARCHAR(60) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    direccion VARCHAR(60) NOT NULL,
    telefono INT(15) NOT NULL,
    email VARCHAR(80) NOT NULL,
    contraseña VARCHAR(100) NOT NULL
);

CREATE TABLE administrador(
    id_administrador INT(11) PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(60) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    email VARCHAR(80) NOT NULL,
    contraseña VARCHAR(100) NOT NULL
);

CREATE TABLE producto(
    id_producto INT(11) PRIMARY KEY AUTO_INCREMENT,
    serial VARCHAR(12) NOT NULL,
    producto VARCHAR(60) NOT NULL,
    descripcion TEXT NOT NULL,
    cantidad INT(11) NOT NULL,
    precio FLOAT(12,2),
    id_categoria INT(11) NOT NULL,
    id_marca INT(11) NOT NULL
);

CREATE TABLE proveedor(
    id_proveedor INT(11) PRIMARY KEY AUTO_INCREMENT,
    proveedor VARCHAR(50) NOT NULL,
    correo VARCHAR(45) NOT NULL,
    direccion_web VARCHAR(60) NOT NULL,
    direccion VARCHAR(60) NOT NULL
);

CREATE TABLE imagenes(
    id_imagenes INT(11) PRIMARY KEY AUTO_INCREMENT,
    producto_id INT(11)NOT NULL,
    url VARCHAR(80) NULL
);

CREATE TABLE categoria(
    id_categoria INT(11) PRIMARY KEY AUTO_INCREMENT,
    categoria VARCHAR(45) NOT NULL
);

CREATE TABLE marca(
    id_marca INT(11) PRIMARY KEY AUTO_INCREMENT,
    marca VARCHAR(45) NOT NULL
);

CREATE TABLE compra(
    id_compra INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_proveedor INT(11) NOT NULL,
    total FLOAT(12,2) NOT NULL,
    fecha timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

CREATE TABLE detalle_compra(
    id_detalle_compra INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_compra INT(11) NOT NULL,
    id_producto INT(11) NOT NULL,
    cantidad INT(11) NOT NULL,
    valor FLOAT(12,2) NOT NULL
);

CREATE TABLE venta(
    id_venta INT(11) PRIMARY KEY AUTO_INCREMENT,
    cliente INT(11) NOT NULL,
    total FLOAT(12,2) NOT NULL,
    fecha timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

CREATE TABLE detalle_venta(
    id_detalle_venta INT(11) PRIMARY KEY AUTO_INCREMENT,
    id_venta INT(11) NOT NULL,
    id_producto INT(11) NOT NULL,
    cantidad_venta INT(11) NOT NULL,
    total FLOAT(12,2) NOT NULL
);

ALTER TABLE producto ADD FOREIGN KEY(id_categoria)
REFERENCES categoria(id_categoria);

ALTER TABLE producto ADD FOREIGN KEY(id_marca)
REFERENCES marca(id_marca);

ALTER TABLE imagenes ADD FOREIGN KEY(producto_id)
REFERENCES producto(id_producto);

ALTER TABLE compra ADD FOREIGN KEY(id_proveedor)
REFERENCES proveedor(id_proveedor);

ALTER TABLE detalle_compra ADD FOREIGN KEY(id_compra)
REFERENCES compra(id_compra);

ALTER TABLE detalle_compra ADD FOREIGN KEY(id_producto)
REFERENCES producto(id_producto);

ALTER TABLE venta ADD FOREIGN KEY(cliente)
REFERENCES cliente(id);

ALTER TABLE detalle_venta ADD FOREIGN KEY(id_venta)
REFERENCES venta(id_venta);

ALTER TABLE detalle_venta ADD FOREIGN KEY(id_producto)
REFERENCES producto(id_producto);

INSERT INTO cliente (nombre, apellido, direccion, telefono, email, contraseña) VALUES
('Usuario', 'Prueba', 'Torre Norte SENA', 3001234567, 'usuario@gmail.com', 'Usuario12345');

INSERT INTO administrador (nombre, apellido, email, contraseña) VALUES
('Freymer', 'Sepulveda', 'administrador1@gmail.com', 'Administrador12345'),
('Jhonatan', 'Mena', 'administrador2@gmail.com', 'Administrador12345'),
('Leandro', 'Pastor', 'administrador3@gmail.com', 'Administrador12345'),
('Santiago', 'Quiñonez', 'administrador4@gmail.com', 'Administrador12345'),
('Santiago', 'Naranjo', 'administrador5@gmail.com', 'Administrador12345'),
('Oswaldo', 'Natera', 'administrador6@gmail.com', 'Administrador12345'),
('Miguel', 'Zapata', 'administrador7@gmail.com', 'Administrador12345'),
('Diego', 'Montoya', 'administrador8@gmail.com', 'Administrador12345');

INSERT INTO proveedor (proveedor, correo, direccion_web, direccion) VALUES
('INTEL','intel@gmail.com', 'www.intel.com.co', 'Calle 35 #80A-26'),
('RYZEM','ryzem@gmail.com', 'www.ryzem.com.co', 'Calle 36 con Carrera 58-32'),
('NVIDIA','nvidia@gmail.com', 'www.nvidia.com.co', 'Calle 35 #80D-65 Edf. INTEL');

INSERT INTO marca (marca) VALUES
('Samsung'),
('Crucial'),
('AOC'),
('HyperX'),
('Logitech');

INSERT INTO categoria (categoria) VALUES
('Memorias RAM'),
('Perifericos'),
('Portatiles');

INSERT INTO producto (serial, producto, descripcion, cantidad, precio, id_categoria, id_marca) VALUES
('A123456789', 'Monitor LG de 27 pulgadas', 'Pantalla led de 27\".\r\nTiene una resolución de 1920px-1080px.\r\nRelación de aspecto de 16:9.\r\nPanel IPS.\r\nSu brillo es de 250cd/m².\r\nTipos de conexión: 2 HDMI 1.4, DisplayPort 1.2, VGA, Jack 3.5 mm.\r\nEs giratorio y reclinable.\r\nComodidad visual en todo momento.', 35, '20', 2, 3),
('A123456788', 'Monitor AOC 24 pulgadas', 'Pantalla LCD de 23.8\".\r\nTiene una resolución de 1920px-1080px.\r\nRelación de aspecto de 16:9.\r\nPanel IPS.\r\nSu brillo es de 250cd/m².\r\nTipos de conexión: HDMI 1.4, VGA/D-Sub, Jack 3.5 mm.', 10, '35', 2, 3),
('A123456787', 'Teclado Mecanico HyperX Alloy Origins 65', 'Consolas de juegos compatibles: ps5 y ps4 y xbox series x|s y xbox one.\r\nFunción antighosting incorporada.\r\nTipo de teclado: mecánico.\r\nTecla cilíndrica.\r\nCon conector USB.\r\nCon cable removible.\r\nMedidas: 315.06mm de ancho, 105.5mm de alto y 36.94mm de profundidad.\r\nIndispensable para tus actividades.\r\nLas imágenes pueden ser ilustrativas.', 40, '20', 2, 4),
('A123456786', 'Teclado gamer HyperX Alloy Elite 2', 'Consolas de juegos compatibles: ps5, ps4, xbox series xis y xbox one.\r\nContiene teclado numérico.\r\nFunción antighosting incorporada.\r\nCon conector USB 2.0.', 23, '15', 2, 4),
('A123456785', 'Mouse de juego Logitech G Series Hero G502 negro', 'Utiliza cable.\r\nPosee rueda de desplazamiento.\r\nCon luces para mejorar la experiencia de uso.\r\nCon sensor óptico.\r\nResolución de 25600dpi.\r\nControl inteligente y navegación fácil.', 13, '10', 2, 5),
('A123456784', 'Mouse logitech', 'Logitech G203\r\nMouse cableado.\r\nSensor de 8.000 DPI.\r\nRGB Lightsync personalizable y vibrante.\r\nSeis botones.', 23, '8', 2, 5),
('B123456789', 'Memoria RAM 4gb', 'Marca: Crucial.\r\nCapacidad: 4GB,8GB.\r\nTipo: DDR3 DDR3L.\r\nNúmero de pines: DDR3 204pins.\r\nTipo de equipo compatible: Portatil.', 12, '14', 1, 2),
('B123456788', 'Memoria RAM 8gb', 'Optimiza el rendimiento de tu máquina con la tecnología DDR3 SDRAM.\r\nMemoria con formato DIMM.\r\nAlcanza una velocidad de 1333 MHz.\r\nApta para computadoras de escritorio.\r\nLínea DDR3 2GB.\r\nCuenta con una tasa de transferencia de 10600 MB/s.\r\nCompatible con Intel Core, AMD.', 23, '20', 1, 2),
('B123456787', 'Memoria RAM 8gb', 'Optimiza el rendimiento de tu máquina con la tecnología DDR4.\r\nMemoria con formato SODIMM.\r\nAlcanza una velocidad de 2666 MHz.\r\nApta para notebooks.', 31, '25', 1, 2),
('B123456786', 'Memoria RAM 4gb', 'Optimiza el rendimiento de tu máquina con la tecnología DDR4 SDRAM.\r\nMemoria con formato SODIMM.\r\nAlcanza una velocidad de 2666 MHz.\r\nCuenta con una tasa de transferencia de 21300 MB/s.', 8, '10', 1, 1),
('B123456785', 'Memoria RAM 4gb', 'Optimiza el rendimiento de tu máquina con la tecnología DDR3L.\r\nMemoria con formato SODIMM.\r\nAlcanza una velocidad de 1600 MHz.\r\nApta para notebooks.\r\nCuenta con una tasa de transferencia de 12800 MB/s.', 23, '12', 1, 1),
('B123456784', 'Memoria RAM 4gb', 'Marca: Samsung.\r\nCapacidad total: 4 GB.\r\nVelocidad: 600 MHz.\r\nTeconología: DDR3.\r\nFormato: SODIMM.', 17, '15', 1, 1);

INSERT INTO imagenes (producto_id,url) VALUES
(1, '777964.webp'),
(1, '55889.webp'),
(1, '460986.webp'),
(1, '729731.webp'),
(2, '189963.jpg'),
(2, '84100.webp'),
(2, '297712.webp'),
(3, '714623.webp'),
(4, '858191.webp'),
(3, '50516.webp'),
(4, '295169.webp'),
(4, '886012.webp'),
(5, '29679.webp'),
(5, '899444.webp'),
(5, '449204.webp'),
(5, '252777.webp'),
(6, '340097.jpg'),
(6, '672621.jpg'),
(6, '858864.jpg'),
(7, '416274.jpg'),
(7, '303505.jpg'),
(8, '970337.webp'),
(9, '694239.webp'),
(10, '10656.webp'),
(11, '650779.webp'),
(12, '379804.webp');