
CREATE TABLE `departamento` (
  `CODIGO` int(11) NOT NULL,
  `NOMBRE` varchar(250) DEFAULT NULL,
  `REGION` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `departamento` (`CODIGO`, `NOMBRE`, `REGION`) VALUES
(1, 'Guatemala', 1),
(2, 'Baja Verapaz', 2),
(3, 'Izabal', 3),
(4, 'Jalapa', 4),
(5, 'Sacatepequez', 5),
(6, 'Quetzaltenango', 6),
(7, 'Quiche', 7),
(8, 'Peten', 8);



CREATE TABLE `empleado` (
  `DPI` int(11) NOT NULL,
  `NOMBRE` varchar(250) DEFAULT NULL,
  `TELEFONO` varchar(250) DEFAULT NULL,
  `SALARIO` float(8,2) DEFAULT NULL,
  `MUNICIPIO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `empleado` (`DPI`, `NOMBRE`, `TELEFONO`, `SALARIO`, `MUNICIPIO`) VALUES
(1220, 'Jose Martinez', '24206080', 12000.00, 3),
(2194, 'Claudia Palencia', '24206080', 12000.00, 5),
(2349, 'Maria Orozco', '66394150', 12000.00, 4),
(3003, 'Sofia Martinez', '35094567', 15000.00, 3),
(3004, 'Pedro Ortiz', ' 35094568', 21500.00, 1),
(3470, 'Jorge Lemus', '24206080', 12000.00, 3),
(3541, 'Miguel Barrios', '24206080', 12000.00, 6),
(5601, 'Luis Levi', '24206080', 12000.00, 8),
(5674, 'Carlos Perez', '54325678', 12000.00, 2);



CREATE TABLE `municipio` (
  `CODIGO` int(11) NOT NULL,
  `NOMBRE` varchar(250) DEFAULT NULL,
  `DEPARTAMENTO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `municipio` (`CODIGO`, `NOMBRE`, `DEPARTAMENTO`) VALUES
(1, 'Villa Nueva', 1),
(2, 'Mixco', 1),
(3, 'Guatemala', 1),
(4, 'Salcaja', 6),
(5, 'Coatepeque', 6),
(6, 'Puerto Barrios', 3),
(7, 'Jojotenango', 5),
(8, 'Flores', 8);



CREATE TABLE `region` (
  `CODIGO` int(11) NOT NULL,
  `NOMBRE` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `region` (`CODIGO`, `NOMBRE`) VALUES
(1, 'Metropolitana'),
(2, 'Norte'),
(3, 'Nor-Oriente'),
(4, 'Sur-Oriente'),
(5, 'Central'),
(6, 'Sur-Occidente'),
(7, 'Nor-Occidente'),
(8, 'Peten');

ALTER TABLE `departamento`
  ADD PRIMARY KEY (`CODIGO`),
  ADD KEY `REGION` (`REGION`);

ALTER TABLE `empleado`
  ADD PRIMARY KEY (`DPI`),
  ADD KEY `MUNICIPIO` (`MUNICIPIO`);

ALTER TABLE `municipio`
  ADD PRIMARY KEY (`CODIGO`),
  ADD KEY `DEPARTAMENTO` (`DEPARTAMENTO`);

ALTER TABLE `region`
  ADD PRIMARY KEY (`CODIGO`);
ALTER TABLE `departamento`
  MODIFY `CODIGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `municipio`
  MODIFY `CODIGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `region`
  MODIFY `CODIGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `departamento`
  ADD CONSTRAINT `departamento_ibfk_1` FOREIGN KEY (`REGION`) REFERENCES `region` (`CODIGO`);

ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`MUNICIPIO`) REFERENCES `municipio` (`CODIGO`);

ALTER TABLE `municipio`
  ADD CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`DEPARTAMENTO`) REFERENCES `departamento` (`CODIGO`);
COMMIT;

