--
-- Base de datos: `compu_start`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE categoria
(
  `id_categoria` int
(11) NOT NULL,
  `categoria` varchar
(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO categoria (id_categoria,categoria) VALUES
(1, 'Memorias RAM'),
(2, 'Perifericos'),
(3, 'Portatiles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente`
(
  `email` varchar
(80) NOT NULL,
  `imagen` varchar
(80) DEFAULT NULL,
  `apellido` varchar
(50) NOT NULL,
  `nombre` varchar
(60) NOT NULL,
  `direccion` varchar
(100) NOT NULL,
  `telefono` int
(15) NOT NULL,
  `contrasenia` varchar
(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra`
(
  `id_compra` int
(11) NOT NULL,
  `id_proveedor` int
(11) NOT NULL,
  `total` decimal
(12,2) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE `detalle_compra`
(
  `id_detalle_compra` int
(11) NOT NULL,
  `id_compra` int
(11) NOT NULL,
  `id_producto` int
(11) NOT NULL,
  `cantidad` int
(11) NOT NULL,
  `valor` decimal
(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta`
(
  `idDetalleVenta` int 
  (11) PRIMARY KEY AUTO_INCREMENT,
  `id_venta` int
(11) NOT NULL,
  `id_producto` int
(11) NOT NULL,
  `cantidad_venta` int
(11) NOT NULL,
  `total` decimal
(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE imagenes(
  `id_producto` int
(11) NOT NULL,
  `url` varchar
(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO imagenes (id_producto,url) VALUES
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca`
(
  `id_marca` int
(11) NOT NULL,
  `marca` varchar
(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO marca (id_marca,marca) VALUES
(1, 'Samsung'),
(2, 'Crucial'),
(3, 'AOC'),
(4, 'HyperX'),
(5, 'Logitech');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto`
(
  `id_producto` int
(11) NOT NULL,
  `serial` varchar
(12) NOT NULL,
  `producto` varchar
(60) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `cantidad` int
(11) NOT NULL,
  `precio` decimal
(12,2) NOT NULL,
  `id_categoria` int
(11) NOT NULL,
  `id_marca` int
(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO producto (id_producto, serial, producto, descripcion, cantidad, precio, id_categoria, id_marca) VALUES
(1, 'A123456789', 'Monitor LG de 27 pulgadas', 'Pantalla led de 27\".\r\nTiene una resolución de 1920px-1080px.\r\nRelación de aspecto de 16:9.\r\nPanel IPS.\r\nSu brillo es de 250cd/m².\r\nTipos de conexión: 2 HDMI 1.4, DisplayPort 1.2, VGA, Jack 3.5 mm.\r\nEs giratorio y reclinable.\r\nComodidad visual en todo momento.', 35, '20', 2, 3),
(2, 'A123456788', 'Monitor AOC 24 pulgadas', 'Pantalla LCD de 23.8\".\r\nTiene una resolución de 1920px-1080px.\r\nRelación de aspecto de 16:9.\r\nPanel IPS.\r\nSu brillo es de 250cd/m².\r\nTipos de conexión: HDMI 1.4, VGA/D-Sub, Jack 3.5 mm.', 10, '35', 2, 3),
(3, 'A123456787', 'Teclado Mecanico HyperX Alloy Origins 65', 'Consolas de juegos compatibles: ps5 y ps4 y xbox series x|s y xbox one.\r\nFunción antighosting incorporada.\r\nTipo de teclado: mecánico.\r\nTecla cilíndrica.\r\nCon conector USB.\r\nCon cable removible.\r\nMedidas: 315.06mm de ancho, 105.5mm de alto y 36.94mm de profundidad.\r\nIndispensable para tus actividades.\r\nLas imágenes pueden ser ilustrativas.', 40, '20', 2, 4),
(4, 'A123456786', 'Teclado gamer HyperX Alloy Elite 2', 'Consolas de juegos compatibles: ps5, ps4, xbox series xis y xbox one.\r\nContiene teclado numérico.\r\nFunción antighosting incorporada.\r\nCon conector USB 2.0.', 23, '15', 2, 4),
(5, 'A123456785', 'Mouse de juego Logitech G Series Hero G502 negro', 'Utiliza cable.\r\nPosee rueda de desplazamiento.\r\nCon luces para mejorar la experiencia de uso.\r\nCon sensor óptico.\r\nResolución de 25600dpi.\r\nControl inteligente y navegación fácil.', 13, '10', 2, 5),
(6, 'A123456784', 'Mouse logitech', 'Logitech G203\r\nMouse cableado.\r\nSensor de 8.000 DPI.\r\nRGB Lightsync personalizable y vibrante.\r\nSeis botones.', 23, '8', 2, 5),
(7, 'B123456789', 'Memoria RAM 4gb', 'Marca: Crucial.\r\nCapacidad: 4GB,8GB.\r\nTipo: DDR3 DDR3L.\r\nNúmero de pines: DDR3 204pins.\r\nTipo de equipo compatible: Portatil.', 12, '14', 1, 2),
(8, 'B123456788', 'Memoria RAM 8gb', 'Optimiza el rendimiento de tu máquina con la tecnología DDR3 SDRAM.\r\nMemoria con formato DIMM.\r\nAlcanza una velocidad de 1333 MHz.\r\nApta para computadoras de escritorio.\r\nLínea DDR3 2GB.\r\nCuenta con una tasa de transferencia de 10600 MB/s.\r\nCompatible con Intel Core, AMD.', 23, '20', 1, 2),
(9, 'B123456787', 'Memoria RAM 8gb', 'Optimiza el rendimiento de tu máquina con la tecnología DDR4.\r\nMemoria con formato SODIMM.\r\nAlcanza una velocidad de 2666 MHz.\r\nApta para notebooks.', 31, '25', 1, 2),
(10, 'B123456786', 'Memoria RAM 4gb', 'Optimiza el rendimiento de tu máquina con la tecnología DDR4 SDRAM.\r\nMemoria con formato SODIMM.\r\nAlcanza una velocidad de 2666 MHz.\r\nCuenta con una tasa de transferencia de 21300 MB/s.', 8, '10', 1, 1),
(11, 'B123456785', 'Memoria RAM 4gb', 'Optimiza el rendimiento de tu máquina con la tecnología DDR3L.\r\nMemoria con formato SODIMM.\r\nAlcanza una velocidad de 1600 MHz.\r\nApta para notebooks.\r\nCuenta con una tasa de transferencia de 12800 MB/s.', 23, '12', 1, 1),
(12, 'B123456784', 'Memoria RAM 4gb', 'Marca: Samsung.\r\nCapacidad total: 4 GB.\r\nVelocidad: 600 MHz.\r\nTeconología: DDR3.\r\nFormato: SODIMM.', 17, '15', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor`
(
  `id_proveedor` int
(11) NOT NULL,
  `proveedor` varchar
(50) NOT NULL,
  `correo` varchar
(45) NOT NULL,
  `web` varchar
(45) DEFAULT NULL,
  `direccion` varchar
(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

INSERT INTO proveedor (id_proveedor, proveedor, correo, web, direccion) VALUES
(1,'INTEL','intel@gmail.com', 'www.intel.com.co', 'Calle 35 #80A-26'),
(2,'RYZEM','ryzem@gmail.com', 'www.ryzem.com.co', 'Calle 36 con Carrera 58-32'),
(3,'NVIDIA','nvidia@gmail.com', 'www.nvidia.com.co', 'Calle 35 #80D-65 Edf. INTEL');

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta`
(
  `id_venta` int
(11) NOT NULL,
  `cliente` varchar
(50) NOT NULL,
  `total` decimal
  (12,2) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp
() ON
UPDATE current_timestamp()
) ENGINE
=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
ADD PRIMARY KEY
(`id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
ADD PRIMARY KEY
(`email`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
ADD PRIMARY KEY
(`id_compra`),
ADD KEY `proveedor_idx`
(`id_proveedor`);

--
-- Indices de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
ADD PRIMARY KEY
(`id_detalle_compra`),
ADD KEY `compra_idx`
(`id_compra`),
ADD KEY `det_compra_idx`
(`id_producto`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
ADD KEY `venta_idx`
(`id_venta`),
ADD KEY `producto_idx`
(`id_producto`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
ADD KEY `imagen_idx`
(`id_producto`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
ADD PRIMARY KEY
(`id_marca`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
ADD PRIMARY KEY
(`id_producto`),
ADD UNIQUE KEY `serial_UNIQUE`
(`serial`),
ADD KEY `categoria_idx`
(`id_categoria`),
ADD KEY `marca_idx`
(`id_marca`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
ADD PRIMARY KEY
(`id_proveedor`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
ADD PRIMARY KEY
(`id_venta`),
ADD KEY `cliente_idx`
(`cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int
(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  MODIFY `id_detalle_compra` int
(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int
(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int
(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
ADD CONSTRAINT `proveedor` FOREIGN KEY
(`id_proveedor`) REFERENCES `proveedor`
(`id_proveedor`) ON
DELETE NO ACTION ON
UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
ADD CONSTRAINT `compra` FOREIGN KEY
(`id_compra`) REFERENCES `compra`
(`id_compra`) ON
DELETE NO ACTION ON
UPDATE NO ACTION,
ADD CONSTRAINT `det_compra` FOREIGN KEY
(`id_producto`) REFERENCES `producto`
(`id_producto`) ON
DELETE NO ACTION ON
UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
ADD CONSTRAINT `producto` FOREIGN KEY
(`id_producto`) REFERENCES `producto`
(`id_producto`) ON
DELETE NO ACTION ON
UPDATE NO ACTION,
ADD CONSTRAINT `venta` FOREIGN KEY
(`id_venta`) REFERENCES `venta`
(`id_venta`) ON
DELETE NO ACTION ON
UPDATE NO ACTION;

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
ADD CONSTRAINT `imagen` FOREIGN KEY
(`id_producto`) REFERENCES `producto`
(`id_producto`) ON
DELETE NO ACTION ON
UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
ADD CONSTRAINT `categoria` FOREIGN KEY
(`id_categoria`) REFERENCES `categoria`
(`id_categoria`) ON
DELETE NO ACTION ON
UPDATE NO ACTION,
ADD CONSTRAINT `marca` FOREIGN KEY
(`id_marca`) REFERENCES `marca`
(`id_marca`) ON
DELETE NO ACTION ON
UPDATE NO ACTION;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
ADD CONSTRAINT `cliente` FOREIGN KEY
(`cliente`) REFERENCES `cliente`
(`email`) ON
DELETE NO ACTION ON
UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
