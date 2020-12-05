-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2020 a las 13:31:51
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nomina_hs`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_CARGO` (IN `_ID_CARGO` INT, IN `_NOMBRE` VARCHAR(60), IN `ACCION` VARCHAR(60))  BEGIN
	CASE ACCION
		WHEN 'NUEVO' THEN
			INSERT INTO CARGO (ID_CARGO, NOMBRE_CARGO)
            VALUES (_ID_CARGO, _NOMBRE_CARGO);
        WHEN 'EDITAR' THEN    
            UPDATE CARGO SET
            ID_CARGO=_ID_CARGO, NOMBRE_CARGO=_NOMBRE_CARGO
            WHERE ID_CARGO=_ID_CARGO;
		WHEN 'CONSULTAR' THEN 
			SELECT * FROM CARGO WHERE ID_CARGO=_ID_CARGO;
		WHEN 'ELIMINAR' THEN 
			DELETE FROM CARGO WHERE ID_CARGO=_ID_CARGO;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_CONTRATO` (IN `_ID_CONTRATO` INT, IN `_TIPO_CONTRATO` VARCHAR(60), IN `_DESCRIPCION` VARCHAR(100), IN `ACCION` VARCHAR(60))  BEGIN
	CASE ACCION
		WHEN 'NUEVO' THEN
			INSERT INTO CONTRATO (ID_CONTRATO, TIPO_CONTRATO, DESCRIPCION)
            VALUES (_ID_CONTRATO, _TIPO_CONTRATO, _DESCRIPCION);
        WHEN 'EDITAR' THEN    
            UPDATE CONTRATO SET
            ID_CONTRATO=_ID_CONTRATO, TIPO_CONTRATO=_TIPO_CONTRATO, DESCRIPCION=_DESCRIPCION
            WHERE ID_CONTRATO=_ID_CONTRATO;
		WHEN 'CONSULTAR' THEN 
			SELECT * FROM CONTRATO WHERE ID_CONTRATO=_ID_CONTRATO;
		WHEN 'ELIMINAR' THEN 
			DELETE FROM CONTRATO WHERE ID_CONTRATO=_ID_CONTRATO;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_DEPARTAMENTO` (IN `_ID_DPTO` INT, IN `_NOMBRE_DPTO` VARCHAR(60), IN `_DESCRIPCION_DPTO` VARCHAR(150), IN `ACCION` VARCHAR(60))  BEGIN
	CASE ACCION
		WHEN 'NUEVO' THEN
			INSERT INTO DEPARTAMENTO (ID_DPTO, NOMBRE_DPTO, DESCRIPCION)
            VALUES (_ID_DPTO, _NOMBRE_DPTO, _DESCRIPCION);
        WHEN 'EDITAR' THEN    
            UPDATE DEPARTAMENTO SET
            ID_DPTO=_ID_DPTO, NOMBRE_DPTO=_NOMBRE_DPTO, DESCRIPCION=_DESCRIPCION
            WHERE ID_DPTO=_ID_DPTO;
		WHEN 'CONSULTAR' THEN 
			SELECT * FROM DEPARTAMENTO WHERE ID_DPTO=_ID_DPTO;
		WHEN 'ELIMINAR' THEN 
			DELETE FROM DEPARTAMENTO WHERE ID_DPTO=_ID_DPTO;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_EMPLEADO` (IN `_ID_EMPLEADO` INT, IN `_NOMBRES` VARCHAR(30), IN `_APELLIDOS` VARCHAR(50), IN `_FECHA_INGRESO` DATETIME, IN `_DIRECCION` VARCHAR(100), IN `_TELEFONO` VARCHAR(100), IN `_SALARIO` INT, IN `_ID_CARGO_FK` INT, IN `_ID_OBRA_FK` INT, IN `_ID_CONTRATO_FK` INT, IN `_ID_DEPARTAMENTO_FK` INT, IN `ACCION` VARCHAR(60))  BEGIN
	CASE ACCION
		WHEN 'NUEVO' THEN
			INSERT INTO EMPLEADO (ID_EMPLEADO, NOMBRES, APELLIDOS, FECHA_INGRESO, DIRECCION, TELEFONO, SALARIO, ID_CARGO_FK, ID_OBRA_FK, ID_CONTRATO_FK, ID_DEPARTAMENTO_FK)
            VALUES (_ID_EMPLEADO, _NOMBRES, _APELLIDOS, _FECHA_INGRESO, _DIRECCION, _TELEFONO, _SALARIO, _ID_CARGO_FK, _ID_OBRA_FK, _ID_CONTRATO_FK, _ID_DEPARTAMENTO_FK);
        WHEN 'EDITAR' THEN    
            UPDATE EMPLEADO SET
            ID_EMPLEADO=_ID_EMPLEADO, NOMBRES=_NOMBRES, APELLIDOS=_APELLIDOS, FECHA_INGRESO=_FECHA_INGRESO, DIRECCION=_DIRECCION, TELEFONO=_TELEFONO, SALARIO=_SALARIO, ID_CARGO_FK=_ID_CARGO_FK, ID_OBRA_FK=_ID_OBRA_FK, ID_CONTRATO_FK=_ID_CONTRATO_FK, ID_DEPARTAMENTO_FK=_ID_DEPARTAMENTO_FK
            WHERE ID_EMPLEADO=_ID_EMPLEADO;
		WHEN 'CONSULTAR' THEN 
			SELECT * FROM EMPLEADO WHERE ID_EMPLEADO=_ID_EMPLEADO;
		WHEN 'ELIMINAR' THEN 
			DELETE FROM EMPLEADO WHERE ID_EMPLEADO=_ID_EMPLEADO;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_NOVEDAD` (IN `_ID_NOVEDAD` INT, IN `_ID_USUARIOS_FK` INT, IN `_TIPO_NOVEDAD_FK` INT, IN `_ID_EMPLEADO_FK` INT, IN `_DIAS` DATETIME, IN `_VALOR` INT, IN `ACCION` VARCHAR(60))  BEGIN
	CASE ACCION
		WHEN 'NUEVO' THEN
			INSERT INTO NOVEDAD (ID_NOVEDAD, ID_USUARIOS_FK, TIPO_NOVEDAD_FK, ID_EMPLEADO_FK, DIAS, VALOR)
            VALUES (_ID_NOVEDAD, _ID_USUARIOS_FK, _TIPO_NOVEDAD_FK, _ID_EMPLEADO_FK, _DIAS, _VALOR);
        WHEN 'EDITAR' THEN    
            UPDATE NOVEDAD SET
            ID_NOVEDAD=_ID_NOVEDAD, ID_USUARIOS_FK=_ID_USUARIOS_FK, TIPO_NOVEDAD_FK=_TIPO_NOVEDAD_FK, ID_EMPLEADO_FK=_ID_EMPLEADO_FK, DIAS=_DIAS, VALOR=_VALOR
            WHERE ID_NOVEDAD=_ID_NOVEDAD;
		WHEN 'CONSULTAR' THEN 
			SELECT * FROM NOVEDAD WHERE ID_NOVEDAD=_ID_NOVEDAD;
		WHEN 'ELIMINAR' THEN 
			DELETE FROM NOVEDAD WHERE ID_NOVEDAD=_ID_NOVEDAD;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_OBRA` (IN `_ID_OBRA` INT, IN `_NOMBRE_OBRA` VARCHAR(60), IN `_REPRESENTANTE` VARCHAR(60), IN `_DIRECCION_OBRA` VARCHAR(150), IN `ACCION` VARCHAR(60))  BEGIN
	CASE ACCION
		WHEN 'NUEVO' THEN
			INSERT INTO OBRA (ID_OBRA, NOMBRE_OBRA, REPRESENTANTE, DIRECCION_OBRA)
            VALUES (_ID_OBRA, _NOMBRE_OBRA, _REPRESENTANTE, _DIRECCION_OBRA);
        WHEN 'EDITAR' THEN    
            UPDATE OBRA SET
            ID_OBRA=_ID_OBRA, NOMBRE_OBRA=_NOMBRE_OBRA, REPRESENTANTE=_REPRESENTANTE, DIRECCION_OBRA=_DIRECCION_OBRA
            WHERE ID_USUARIOS = _ID_USUARIOS;
		WHEN 'CONSULTAR' THEN 
			SELECT * FROM OBRA WHERE ID_OBRA=_ID_OBRA;
		WHEN 'ELIMINAR' THEN 
			DELETE FROM OBRA WHERE ID_OBRA=_ID_OBRA;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_ROL` (IN `_ID_ROL` INT, IN `_NOMBRE` VARCHAR(60), IN `_ESTADO_ROL` INT, IN `ACCION` VARCHAR(60))  BEGIN
	CASE ACCION
		WHEN 'NUEVO' THEN
			INSERT INTO ROL (ID_ROL, NOMBRE, ESTADO_ROL)
            VALUES (_ID_ROL, _NOMBRE, _ESTADO_ROL);
        WHEN 'EDITAR' THEN    
            UPDATE ROL SET
            ID_ROL=_ID_ROL, NOMBRE=_NOMBRE, ESTADO_ROL=_ESTADO_ROL
            WHERE ID_ROL=_ID_ROL;
		WHEN 'CONSULTAR' THEN 
			SELECT * FROM ROL WHERE ID_ROL=_ID_ROL;
		WHEN 'ELIMINAR' THEN 
			DELETE FROM ROL WHERE ID_ROL=_ID_ROL;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_TNOVEDAD` (IN `_ID_TIPONOVEDAD` INT, IN `_NOMBRE_TN` VARCHAR(60), IN `_DESCRIPCION` VARCHAR(200), IN `ACCION` VARCHAR(60))  BEGIN
	CASE ACCION
		WHEN 'NUEVO' THEN
			INSERT INTO TIPO_NOVEDAD (ID_TIPONOVEDAD, NOMBRE_TN, DESCRIPCION)
            VALUES (_ID_TIPONOVEDAD, _NOMBRE_TN, _DESCRIPCION);
        WHEN 'EDITAR' THEN    
            UPDATE TIPO_NOVEDAD SET
            ID_TIPONOVEDAD=_ID_TIPONOVEDAD, NOMBRE_TN=_NOMBRE_TN, DESCRIPCION=_DESCRIPCION
            WHERE ID_TIPONOVEDAD=_ID_TIPONOVEDAD;
		WHEN 'CONSULTAR' THEN 
			SELECT * FROM TIPO_NOVEDAD WHERE ID_TIPONOVEDAD=_ID_TIPONOVEDAD;
		WHEN 'ELIMINAR' THEN 
			DELETE FROM TIPO_NOVEDAD WHERE ID_TIPONOVEDAD=_ID_TIPONOVEDAD;
    END CASE;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PROC_USUARIOS` (IN `_ID_USUARIOS` INT, IN `_ID_ROL_FK` INT, IN `_CONTRASEÑA` VARCHAR(30), IN `_ESTADO` INT, IN `ACCION` VARCHAR(60))  BEGIN
	CASE ACCION
		WHEN 'NUEVO' THEN
			INSERT INTO USUARIOS (ID_USUARIOS, ID_ROL_FK, CONTRASEÑA, ESTADO)
            VALUES (_ID_USUARIOS, _ID_ROL_FK, _CONTRASEÑA, _ESTADO);
        WHEN 'EDITAR' THEN    
            UPDATE USUARIOS SET
            ID_USUARIOS=_ID_USUARIOS, ID_ROL_FK=_ID_ROL_FK, CONTRASEÑA=_CONTRASEÑA, ESTADO=_ESTADO
            WHERE ID_USUARIOS = _ID_USUARIOS;
		WHEN 'CONSULTAR' THEN 
			SELECT * FROM USUARIOS WHERE ID_USUARIOS = _ID_USUARIOS;
		WHEN 'ELIMINAR' THEN 
			DELETE FROM USUARIOS WHERE ID_USUARIOS = _ID_USUARIOS;
    END CASE;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `ID_CARGO` int(11) NOT NULL,
  `NOMBRE_CARGO` varchar(60) NOT NULL,
  `ESTADO_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`ID_CARGO`, `NOMBRE_CARGO`, `ESTADO_ID`) VALUES
(1, 'GERENTE', 1),
(2, 'EMPLEADO', 1),
(3, 'SUPERVISOR', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `ID_CONTRATO` int(11) NOT NULL,
  `TIPO_CONTRATO` varchar(60) NOT NULL,
  `DESCRIPCION` varchar(100) NOT NULL,
  `ESTADO_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`ID_CONTRATO`, `TIPO_CONTRATO`, `DESCRIPCION`, `ESTADO_ID`) VALUES
(1, 'ACTIVO', 'EL CONTRATO SE ENCUENTRA ACTIVO', 1),
(2, 'INACTIVO', 'EL CONTRATO SE ENCUENTRA INACTIVO', 1),
(3, 'EN ESPERA', 'EL CONTRATO SE ENCUENTRA EN ESPERA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `ID_DPTO` int(11) NOT NULL,
  `NOMBRE_DPTO` varchar(60) NOT NULL,
  `DESCRIPCION_DPTO` varchar(150) NOT NULL,
  `ESTADO_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`ID_DPTO`, `NOMBRE_DPTO`, `DESCRIPCION_DPTO`, `ESTADO_ID`) VALUES
(1, 'SUPERVISIÓN', 'SUPERVISION DE LOS DEPARTAMENTOS', 1),
(2, 'CONSTRUCCIÓN', 'CONSTRUCCION DE OBRA', 1),
(3, 'ENCARGADO DE OBRA', 'ENCARGADO DE GESTIONAR LAS OBRAS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `ID_EMPLEADO` int(11) NOT NULL,
  `NOMBRES` varchar(30) NOT NULL,
  `APELLIDOS` varchar(50) NOT NULL,
  `FECHA_INGRESO` datetime NOT NULL,
  `DIRECCION` varchar(100) NOT NULL,
  `TELEFONO` varchar(11) NOT NULL,
  `SALARIO` int(11) NOT NULL,
  `ID_CARGO_FK` int(11) NOT NULL,
  `ID_OBRA_FK` int(11) NOT NULL,
  `ID_CONTRATO_FK` int(11) NOT NULL,
  `ID_DEPARTAMENTO_FK` int(11) NOT NULL,
  `ESTADO_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`ID_EMPLEADO`, `NOMBRES`, `APELLIDOS`, `FECHA_INGRESO`, `DIRECCION`, `TELEFONO`, `SALARIO`, `ID_CARGO_FK`, `ID_OBRA_FK`, `ID_CONTRATO_FK`, `ID_DEPARTAMENTO_FK`, `ESTADO_ID`) VALUES
(4, 'ANDRES', 'RINCON', '0000-00-00 00:00:00', 'cra 78 hg', '302541', 900000, 1, 2, 3, 1, 1),
(5, 'SANTIAGO', 'RINCON', '0000-00-00 00:00:00', 'cra 78 hg', '302541', 900000, 2, 3, 1, 2, 1),
(6, 'FELIPE', 'RINCON', '0000-00-00 00:00:00', 'cra 78 hg', '302541', 900000, 3, 1, 2, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `ID_ESTADO` int(11) NOT NULL,
  `ESTADO` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`ID_ESTADO`, `ESTADO`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO'),
(3, 'EN PROGRESO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

CREATE TABLE `novedad` (
  `ID_NOVEDAD` int(11) NOT NULL,
  `ID_USUARIOS_FK` int(11) NOT NULL,
  `TIPO_NOVEDAD_FK` int(11) NOT NULL,
  `EMPLEADOFK` int(11) NOT NULL,
  `DIAS` datetime NOT NULL,
  `VALOR` int(11) NOT NULL,
  `ESTADO_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `novedad`
--

INSERT INTO `novedad` (`ID_NOVEDAD`, `ID_USUARIOS_FK`, `TIPO_NOVEDAD_FK`, `EMPLEADOFK`, `DIAS`, `VALOR`, `ESTADO_ID`) VALUES
(1, 4, 3, 4, '0000-00-00 00:00:00', 50000, 1),
(2, 5, 2, 5, '0000-00-00 00:00:00', 50000, 1),
(3, 6, 1, 6, '0000-00-00 00:00:00', 50000, 1),
(4, 6, 1, 6, '0000-00-00 00:00:00', 50000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra`
--

CREATE TABLE `obra` (
  `ID_OBRA` int(11) NOT NULL,
  `NOMBRE_OBRA` varchar(60) NOT NULL,
  `REPRESENTANTE` varchar(60) NOT NULL,
  `DIRECCION_OBRA` varchar(150) NOT NULL,
  `ESTADO_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`ID_OBRA`, `NOMBRE_OBRA`, `REPRESENTANTE`, `DIRECCION_OBRA`, `ESTADO_ID`) VALUES
(1, 'CASTILLA II', 'ANDRES RODRIGUEZ', 'CRA 90 K', 1),
(2, 'CASTILLA III', 'ANDRES RODRIGUEZ', 'CRA 100 K', 1),
(3, 'CASTILLA IV', 'ANDRES RODRIGUEZ', 'CRA 150 K', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `ID_ROL` int(11) NOT NULL,
  `NOMBRE` varchar(60) NOT NULL,
  `ESTADO_ROL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`ID_ROL`, `NOMBRE`, `ESTADO_ROL`) VALUES
(1, 'Administrador', 1),
(2, 'Empleado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_novedad`
--

CREATE TABLE `tipo_novedad` (
  `ID_TIPONOVEDAD` int(11) NOT NULL,
  `NOMBRE_TN` varchar(60) NOT NULL,
  `DESCRIPCION` varchar(200) NOT NULL,
  `ESTADO_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_novedad`
--

INSERT INTO `tipo_novedad` (`ID_TIPONOVEDAD`, `NOMBRE_TN`, `DESCRIPCION`, `ESTADO_ID`) VALUES
(1, 'Hora Extra', 'SE ENCUENTRA ACTIVO', 1),
(2, 'INACTIVO', 'SE ENCUENTRA INACTIVO', 1),
(3, 'EN ESPERA', 'SE ENCUENTRA EN ESPERA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `ID_ROL_FK` int(11) NOT NULL,
  `CONTRASEÑA` varchar(30) NOT NULL,
  `ESTADO_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `ID_ROL_FK`, `CONTRASEÑA`, `ESTADO_ID`) VALUES
(4, 1, 'andres123', 1),
(5, 2, 'santiago123', 1),
(6, 2, 'felipe123', 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_cargo`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_cargo` (
`ID_CARGO` int(11)
,`NOMBRE_CARGO` varchar(60)
,`ESTADO_ID` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_contrato`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_contrato` (
`ID_CONTRATO` int(11)
,`TIPO_CONTRATO` varchar(60)
,`DESCRIPCION` varchar(100)
,`ESTADO_ID` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_datoscar`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_datoscar` (
`ID_CARGO` int(11)
,`NOMBRE_CARGO` varchar(60)
,`ESTADO_ID` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_datoscon`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_datoscon` (
`ID_CONTRATO` int(11)
,`TIPO_CONTRATO` varchar(60)
,`DESCRIPCION` varchar(100)
,`ESTADO_ID` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_datosdpto`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_datosdpto` (
`ID_DPTO` int(11)
,`NOMBRE_DPTO` varchar(60)
,`DESCRIPCION_DPTO` varchar(150)
,`ESTADO_ID` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_datosemp`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_datosemp` (
`ID_EMPLEADO` int(11)
,`NOMBRES` varchar(30)
,`APELLIDOS` varchar(50)
,`FECHA_INGRESO` datetime
,`DIRECCION` varchar(100)
,`TELEFONO` varchar(11)
,`SALARIO` int(11)
,`ID_CARGO_FK` int(11)
,`ID_OBRA_FK` int(11)
,`ID_CONTRATO_FK` int(11)
,`ID_DEPARTAMENTO_FK` int(11)
,`ESTADO_ID` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_datosnov`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_datosnov` (
`ID_NOVEDAD` int(11)
,`ID_USUARIOS_FK` int(11)
,`TIPO_NOVEDAD_FK` int(11)
,`EMPLEADOFK` int(11)
,`DIAS` datetime
,`VALOR` int(11)
,`ESTADO_ID` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vista_datosobra`
--

CREATE TABLE `vista_datosobra` (
  `ID_OBRA` int(11) NOT NULL DEFAULT '0',
  `NOMBRE_OBRA` varchar(60) NOT NULL,
  `REPRESENTANTE` varchar(60) NOT NULL,
  `DIRECCION_OBRA` varchar(150) NOT NULL,
  `ESTADO_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vista_datosobra`
--

INSERT INTO `vista_datosobra` (`ID_OBRA`, `NOMBRE_OBRA`, `REPRESENTANTE`, `DIRECCION_OBRA`, `ESTADO_ID`) VALUES
(3, 'CASTILLA IV', 'ANDRES RODRIGUEZ', 'CRA 150 K', 1),
(2, 'CASTILLA III', 'ANDRES RODRIGUEZ', 'CRA 100 K', 1),
(1, 'CASTILLA II', 'ANDRES RODRIGUEZ', 'CRA 90 K', 1);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_datosrol`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_datosrol` (
`ID_ROL` int(11)
,`NOMBRE` varchar(60)
,`ESTADO_ROL` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_datostn`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_datostn` (
`ID_TIPONOVEDAD` int(11)
,`NOMBRE_TN` varchar(60)
,`DESCRIPCION` varchar(200)
,`ESTADO_ID` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_datosusu`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_datosusu` (
`ID_USUARIO` int(11)
,`ID_ROL_FK` int(11)
,`CONTRASEÑA` varchar(30)
,`ESTADO_ID` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_dpto`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_dpto` (
`ID_DPTO` int(11)
,`NOMBRE_DPTO` varchar(60)
,`DESCRIPCION_DPTO` varchar(150)
,`ESTADO_ID` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_empleados`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_empleados` (
`ID_EMPLEADO` int(11)
,`NOMBRES` varchar(30)
,`APELLIDOS` varchar(50)
,`FECHA_INGRESO` datetime
,`DIRECCION` varchar(100)
,`TELEFONO` varchar(11)
,`SALARIO` int(11)
,`ID_CARGO_FK` int(11)
,`ID_OBRA_FK` int(11)
,`ID_CONTRATO_FK` int(11)
,`ID_DEPARTAMENTO_FK` int(11)
,`ESTADO_ID` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_novedad`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_novedad` (
`ID_NOVEDAD` int(11)
,`ID_USUARIOS_FK` int(11)
,`TIPO_NOVEDAD_FK` int(11)
,`EMPLEADOFK` int(11)
,`DIAS` datetime
,`VALOR` int(11)
,`ESTADO_ID` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_obra`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_obra` (
`ID_OBRA` int(11)
,`NOMBRE_OBRA` varchar(60)
,`REPRESENTANTE` varchar(60)
,`DIRECCION_OBRA` varchar(150)
,`ESTADO_ID` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_rol`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_rol` (
`ID_ROL` int(11)
,`NOMBRE` varchar(60)
,`ESTADO_ROL` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_tn`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_tn` (
`ID_TIPONOVEDAD` int(11)
,`NOMBRE_TN` varchar(60)
,`DESCRIPCION` varchar(200)
,`ESTADO_ID` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_usuarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_usuarios` (
`ID_USUARIO` int(11)
,`ID_ROL_FK` int(11)
,`CONTRASEÑA` varchar(30)
,`ESTADO_ID` int(11)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_cargo`
--
DROP TABLE IF EXISTS `vista_cargo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_cargo`  AS  select `cargo`.`ID_CARGO` AS `ID_CARGO`,`cargo`.`NOMBRE_CARGO` AS `NOMBRE_CARGO`,`cargo`.`ESTADO_ID` AS `ESTADO_ID` from `cargo` where (`cargo`.`ID_CARGO` = 1) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_contrato`
--
DROP TABLE IF EXISTS `vista_contrato`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_contrato`  AS  select `contrato`.`ID_CONTRATO` AS `ID_CONTRATO`,`contrato`.`TIPO_CONTRATO` AS `TIPO_CONTRATO`,`contrato`.`DESCRIPCION` AS `DESCRIPCION`,`contrato`.`ESTADO_ID` AS `ESTADO_ID` from `contrato` where (`contrato`.`ID_CONTRATO` = 1) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_datoscar`
--
DROP TABLE IF EXISTS `vista_datoscar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_datoscar`  AS  select `cargo`.`ID_CARGO` AS `ID_CARGO`,`cargo`.`NOMBRE_CARGO` AS `NOMBRE_CARGO`,`cargo`.`ESTADO_ID` AS `ESTADO_ID` from `cargo` order by `cargo`.`ID_CARGO` desc ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_datoscon`
--
DROP TABLE IF EXISTS `vista_datoscon`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_datoscon`  AS  select `contrato`.`ID_CONTRATO` AS `ID_CONTRATO`,`contrato`.`TIPO_CONTRATO` AS `TIPO_CONTRATO`,`contrato`.`DESCRIPCION` AS `DESCRIPCION`,`contrato`.`ESTADO_ID` AS `ESTADO_ID` from `contrato` order by `contrato`.`ID_CONTRATO` desc ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_datosdpto`
--
DROP TABLE IF EXISTS `vista_datosdpto`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_datosdpto`  AS  select `departamento`.`ID_DPTO` AS `ID_DPTO`,`departamento`.`NOMBRE_DPTO` AS `NOMBRE_DPTO`,`departamento`.`DESCRIPCION_DPTO` AS `DESCRIPCION_DPTO`,`departamento`.`ESTADO_ID` AS `ESTADO_ID` from `departamento` order by `departamento`.`ID_DPTO` desc ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_datosemp`
--
DROP TABLE IF EXISTS `vista_datosemp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_datosemp`  AS  select `empleado`.`ID_EMPLEADO` AS `ID_EMPLEADO`,`empleado`.`NOMBRES` AS `NOMBRES`,`empleado`.`APELLIDOS` AS `APELLIDOS`,`empleado`.`FECHA_INGRESO` AS `FECHA_INGRESO`,`empleado`.`DIRECCION` AS `DIRECCION`,`empleado`.`TELEFONO` AS `TELEFONO`,`empleado`.`SALARIO` AS `SALARIO`,`empleado`.`ID_CARGO_FK` AS `ID_CARGO_FK`,`empleado`.`ID_OBRA_FK` AS `ID_OBRA_FK`,`empleado`.`ID_CONTRATO_FK` AS `ID_CONTRATO_FK`,`empleado`.`ID_DEPARTAMENTO_FK` AS `ID_DEPARTAMENTO_FK`,`empleado`.`ESTADO_ID` AS `ESTADO_ID` from `empleado` order by `empleado`.`ID_EMPLEADO` desc ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_datosnov`
--
DROP TABLE IF EXISTS `vista_datosnov`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_datosnov`  AS  select `novedad`.`ID_NOVEDAD` AS `ID_NOVEDAD`,`novedad`.`ID_USUARIOS_FK` AS `ID_USUARIOS_FK`,`novedad`.`TIPO_NOVEDAD_FK` AS `TIPO_NOVEDAD_FK`,`novedad`.`EMPLEADOFK` AS `EMPLEADOFK`,`novedad`.`DIAS` AS `DIAS`,`novedad`.`VALOR` AS `VALOR`,`novedad`.`ESTADO_ID` AS `ESTADO_ID` from `novedad` order by `novedad`.`ID_NOVEDAD` desc ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_datosrol`
--
DROP TABLE IF EXISTS `vista_datosrol`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_datosrol`  AS  select `rol`.`ID_ROL` AS `ID_ROL`,`rol`.`NOMBRE` AS `NOMBRE`,`rol`.`ESTADO_ROL` AS `ESTADO_ROL` from `rol` order by `rol`.`ID_ROL` desc ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_datostn`
--
DROP TABLE IF EXISTS `vista_datostn`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_datostn`  AS  select `tipo_novedad`.`ID_TIPONOVEDAD` AS `ID_TIPONOVEDAD`,`tipo_novedad`.`NOMBRE_TN` AS `NOMBRE_TN`,`tipo_novedad`.`DESCRIPCION` AS `DESCRIPCION`,`tipo_novedad`.`ESTADO_ID` AS `ESTADO_ID` from `tipo_novedad` order by `tipo_novedad`.`ID_TIPONOVEDAD` desc ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_datosusu`
--
DROP TABLE IF EXISTS `vista_datosusu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_datosusu`  AS  select `usuarios`.`ID_USUARIO` AS `ID_USUARIO`,`usuarios`.`ID_ROL_FK` AS `ID_ROL_FK`,`usuarios`.`CONTRASEÑA` AS `CONTRASEÑA`,`usuarios`.`ESTADO_ID` AS `ESTADO_ID` from `usuarios` order by `usuarios`.`ID_USUARIO` desc ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_dpto`
--
DROP TABLE IF EXISTS `vista_dpto`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_dpto`  AS  select `departamento`.`ID_DPTO` AS `ID_DPTO`,`departamento`.`NOMBRE_DPTO` AS `NOMBRE_DPTO`,`departamento`.`DESCRIPCION_DPTO` AS `DESCRIPCION_DPTO`,`departamento`.`ESTADO_ID` AS `ESTADO_ID` from `departamento` where (`departamento`.`ID_DPTO` = 1) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_empleados`
--
DROP TABLE IF EXISTS `vista_empleados`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_empleados`  AS  select `empleado`.`ID_EMPLEADO` AS `ID_EMPLEADO`,`empleado`.`NOMBRES` AS `NOMBRES`,`empleado`.`APELLIDOS` AS `APELLIDOS`,`empleado`.`FECHA_INGRESO` AS `FECHA_INGRESO`,`empleado`.`DIRECCION` AS `DIRECCION`,`empleado`.`TELEFONO` AS `TELEFONO`,`empleado`.`SALARIO` AS `SALARIO`,`empleado`.`ID_CARGO_FK` AS `ID_CARGO_FK`,`empleado`.`ID_OBRA_FK` AS `ID_OBRA_FK`,`empleado`.`ID_CONTRATO_FK` AS `ID_CONTRATO_FK`,`empleado`.`ID_DEPARTAMENTO_FK` AS `ID_DEPARTAMENTO_FK`,`empleado`.`ESTADO_ID` AS `ESTADO_ID` from `empleado` where (`empleado`.`ID_EMPLEADO` = 1) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_novedad`
--
DROP TABLE IF EXISTS `vista_novedad`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_novedad`  AS  select `novedad`.`ID_NOVEDAD` AS `ID_NOVEDAD`,`novedad`.`ID_USUARIOS_FK` AS `ID_USUARIOS_FK`,`novedad`.`TIPO_NOVEDAD_FK` AS `TIPO_NOVEDAD_FK`,`novedad`.`EMPLEADOFK` AS `EMPLEADOFK`,`novedad`.`DIAS` AS `DIAS`,`novedad`.`VALOR` AS `VALOR`,`novedad`.`ESTADO_ID` AS `ESTADO_ID` from `novedad` where (`novedad`.`ID_NOVEDAD` = 1) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_obra`
--
DROP TABLE IF EXISTS `vista_obra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_obra`  AS  select `obra`.`ID_OBRA` AS `ID_OBRA`,`obra`.`NOMBRE_OBRA` AS `NOMBRE_OBRA`,`obra`.`REPRESENTANTE` AS `REPRESENTANTE`,`obra`.`DIRECCION_OBRA` AS `DIRECCION_OBRA`,`obra`.`ESTADO_ID` AS `ESTADO_ID` from `obra` where (`obra`.`ID_OBRA` = 1) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_rol`
--
DROP TABLE IF EXISTS `vista_rol`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_rol`  AS  select `rol`.`ID_ROL` AS `ID_ROL`,`rol`.`NOMBRE` AS `NOMBRE`,`rol`.`ESTADO_ROL` AS `ESTADO_ROL` from `rol` where (`rol`.`ID_ROL` = 1) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_tn`
--
DROP TABLE IF EXISTS `vista_tn`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_tn`  AS  select `tipo_novedad`.`ID_TIPONOVEDAD` AS `ID_TIPONOVEDAD`,`tipo_novedad`.`NOMBRE_TN` AS `NOMBRE_TN`,`tipo_novedad`.`DESCRIPCION` AS `DESCRIPCION`,`tipo_novedad`.`ESTADO_ID` AS `ESTADO_ID` from `tipo_novedad` where (`tipo_novedad`.`ID_TIPONOVEDAD` = 1) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_usuarios`
--
DROP TABLE IF EXISTS `vista_usuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_usuarios`  AS  select `usuarios`.`ID_USUARIO` AS `ID_USUARIO`,`usuarios`.`ID_ROL_FK` AS `ID_ROL_FK`,`usuarios`.`CONTRASEÑA` AS `CONTRASEÑA`,`usuarios`.`ESTADO_ID` AS `ESTADO_ID` from `usuarios` where (`usuarios`.`ID_USUARIO` = 1) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`ID_CARGO`),
  ADD KEY `ESTADO_ID` (`ESTADO_ID`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`ID_CONTRATO`),
  ADD KEY `ESTADO_ID` (`ESTADO_ID`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`ID_DPTO`),
  ADD KEY `ESTADO_ID` (`ESTADO_ID`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`ID_EMPLEADO`),
  ADD KEY `ESTADO_ID` (`ESTADO_ID`),
  ADD KEY `ID_CARGO_FK` (`ID_CARGO_FK`),
  ADD KEY `ID_OBRA_FK` (`ID_OBRA_FK`),
  ADD KEY `ID_CONTRATO_FK` (`ID_CONTRATO_FK`),
  ADD KEY `ID_DEPARTAMENTO_FK` (`ID_DEPARTAMENTO_FK`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`ID_ESTADO`);

--
-- Indices de la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD PRIMARY KEY (`ID_NOVEDAD`),
  ADD KEY `ESTADO_ID` (`ESTADO_ID`),
  ADD KEY `ID_USUARIOS_FK` (`ID_USUARIOS_FK`),
  ADD KEY `TIPO_NOVEDAD_FK` (`TIPO_NOVEDAD_FK`),
  ADD KEY `NOVEMPLEADOFK` (`EMPLEADOFK`);

--
-- Indices de la tabla `obra`
--
ALTER TABLE `obra`
  ADD PRIMARY KEY (`ID_OBRA`),
  ADD KEY `ESTADO_ID` (`ESTADO_ID`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`ID_ROL`),
  ADD KEY `ESTADO_ROL` (`ESTADO_ROL`);

--
-- Indices de la tabla `tipo_novedad`
--
ALTER TABLE `tipo_novedad`
  ADD PRIMARY KEY (`ID_TIPONOVEDAD`),
  ADD KEY `ESTADO_ID` (`ESTADO_ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD KEY `ESTADO_ID` (`ESTADO_ID`),
  ADD KEY `ID_ROL_FK` (`ID_ROL_FK`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `ID_CARGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `ID_CONTRATO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `ID_DPTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `ID_ESTADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `novedad`
--
ALTER TABLE `novedad`
  MODIFY `ID_NOVEDAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `obra`
--
ALTER TABLE `obra`
  MODIFY `ID_OBRA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `ID_ROL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_novedad`
--
ALTER TABLE `tipo_novedad`
  MODIFY `ID_TIPONOVEDAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD CONSTRAINT `cargo_ibfk_1` FOREIGN KEY (`ESTADO_ID`) REFERENCES `estado` (`ID_ESTADO`);

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`ESTADO_ID`) REFERENCES `estado` (`ID_ESTADO`);

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `departamento_ibfk_1` FOREIGN KEY (`ESTADO_ID`) REFERENCES `estado` (`ID_ESTADO`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`ESTADO_ID`) REFERENCES `estado` (`ID_ESTADO`),
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`ID_CARGO_FK`) REFERENCES `cargo` (`ID_CARGO`),
  ADD CONSTRAINT `empleado_ibfk_3` FOREIGN KEY (`ID_OBRA_FK`) REFERENCES `obra` (`ID_OBRA`),
  ADD CONSTRAINT `empleado_ibfk_4` FOREIGN KEY (`ID_CONTRATO_FK`) REFERENCES `contrato` (`ID_CONTRATO`),
  ADD CONSTRAINT `empleado_ibfk_5` FOREIGN KEY (`ID_DEPARTAMENTO_FK`) REFERENCES `departamento` (`ID_DPTO`);

--
-- Filtros para la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD CONSTRAINT `NOVEMPLEADOFK` FOREIGN KEY (`EMPLEADOFK`) REFERENCES `empleado` (`ID_EMPLEADO`),
  ADD CONSTRAINT `novedad_ibfk_1` FOREIGN KEY (`ESTADO_ID`) REFERENCES `estado` (`ID_ESTADO`),
  ADD CONSTRAINT `novedad_ibfk_2` FOREIGN KEY (`ID_USUARIOS_FK`) REFERENCES `usuarios` (`ID_USUARIO`),
  ADD CONSTRAINT `novedad_ibfk_3` FOREIGN KEY (`TIPO_NOVEDAD_FK`) REFERENCES `tipo_novedad` (`ID_TIPONOVEDAD`);

--
-- Filtros para la tabla `obra`
--
ALTER TABLE `obra`
  ADD CONSTRAINT `obra_ibfk_1` FOREIGN KEY (`ESTADO_ID`) REFERENCES `estado` (`ID_ESTADO`);

--
-- Filtros para la tabla `rol`
--
ALTER TABLE `rol`
  ADD CONSTRAINT `rol_ibfk_1` FOREIGN KEY (`ESTADO_ROL`) REFERENCES `estado` (`ID_ESTADO`);

--
-- Filtros para la tabla `tipo_novedad`
--
ALTER TABLE `tipo_novedad`
  ADD CONSTRAINT `tipo_novedad_ibfk_1` FOREIGN KEY (`ESTADO_ID`) REFERENCES `estado` (`ID_ESTADO`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ESTADO_ID`) REFERENCES `estado` (`ID_ESTADO`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`ID_ROL_FK`) REFERENCES `rol` (`ID_ROL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
