SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS mipaggames;

USE mipaggames;

DROP TABLE IF EXISTS catjuegos;

CREATE TABLE `catjuegos` (
  `idcategoria` int(10) NOT NULL AUTO_INCREMENT,
  `nombrecat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idcategoria`),
  KEY `nombrecat` (`nombrecat`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO catjuegos VALUES("2","Carreras");
INSERT INTO catjuegos VALUES("3","Deportes");
INSERT INTO catjuegos VALUES("5","fantasy");
INSERT INTO catjuegos VALUES("1","First Person Shoter");
INSERT INTO catjuegos VALUES("6","mundo libre");
INSERT INTO catjuegos VALUES("8","terror");



DROP TABLE IF EXISTS eventos;

CREATE TABLE `eventos` (
  `idevento` int(10) NOT NULL AUTO_INCREMENT,
  `nombreeve` varchar(50) DEFAULT NULL,
  `lugareve` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `nomjuego` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idevento`),
  KEY `nombreeve` (`nombreeve`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO eventos VALUES("1","Evento APEX GOLD","online","2022-08-25","Apex");
INSERT INTO eventos VALUES("2","Evento Gears 3","online","2022-07-25","Gears of War");
INSERT INTO eventos VALUES("3","Evento F1 race","online","2022-09-21","F1 2021 THE OFFICIAL VIDEOGAME");
INSERT INTO eventos VALUES("4","fonite ultimate","online","2022-09-24","Fornite");
INSERT INTO eventos VALUES("7","gamegame","online","2022-10-09","FIFA");



DROP TABLE IF EXISTS juegos;

CREATE TABLE `juegos` (
  `idjuego` int(10) NOT NULL AUTO_INCREMENT,
  `nomjuego` varchar(50) DEFAULT NULL,
  `versionjuego` varchar(50) DEFAULT NULL,
  `consola` varchar(50) DEFAULT NULL,
  `añodejuego` varchar(4) DEFAULT NULL,
  `idcategoria` int(10) DEFAULT NULL,
  PRIMARY KEY (`idjuego`),
  KEY `idcategoria` (`idcategoria`),
  KEY `nomjuego` (`nomjuego`),
  CONSTRAINT `juegos_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `catjuegos` (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO juegos VALUES("1","Apex","2022","PC","2022","1");
INSERT INTO juegos VALUES("2","Gears of War","2021","XBOX","2021","1");
INSERT INTO juegos VALUES("3","F1 2021 THE OFFICIAL VIDEOGAME","2021","XBOX","2021","2");
INSERT INTO juegos VALUES("5","mario bros","94","nintendo","2000","3");
INSERT INTO juegos VALUES("7","FIFA","2018","xbox","2018","3");
INSERT INTO juegos VALUES("8","minecraft","2020","pc","2020","6");



DROP TABLE IF EXISTS participantes;

CREATE TABLE `participantes` (
  `idparticipante` int(10) NOT NULL AUTO_INCREMENT,
  `nombrejuego` varchar(50) DEFAULT NULL,
  `nombreus` varchar(50) DEFAULT NULL,
  `nombreeve` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `idjuego` int(10) DEFAULT NULL,
  PRIMARY KEY (`idparticipante`),
  KEY `idjuego` (`idjuego`),
  CONSTRAINT `participantes_ibfk_1` FOREIGN KEY (`idjuego`) REFERENCES `juegos` (`idjuego`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO participantes VALUES("1","F1 2021 THE OFFICIAL VIDEOGAME","Israel","Evento F1 race","2022-09-21","3");
INSERT INTO participantes VALUES("2","F1 2021 THE OFFICIAL VIDEOGAME","Diego","Evento F1 race","2022-09-21","3");
INSERT INTO participantes VALUES("3","F1 2021 THE OFFICIAL VIDEOGAME","Jose Saul","Evento F1 race","2022-09-21","3");
INSERT INTO participantes VALUES("4","Apex","fernando","EVENTO APEX GOLD","2022-08-25","1");
INSERT INTO participantes VALUES("6","minecraft","fernando","gamegame","2022-10-09","7");



DROP TABLE IF EXISTS resultados;

CREATE TABLE `resultados` (
  `idresul` int(10) NOT NULL AUTO_INCREMENT,
  `nombreeve` varchar(50) DEFAULT NULL,
  `usuario` varchar(6) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `idevento` int(10) DEFAULT NULL,
  PRIMARY KEY (`idresul`),
  KEY `idevento` (`idevento`),
  CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`idevento`) REFERENCES `eventos` (`idevento`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

INSERT INTO resultados VALUES("1","Evento F1 race","rur838","2022-09-21","3");
INSERT INTO resultados VALUES("2","Evento F1 race","ydr525","2022-09-21","3");
INSERT INTO resultados VALUES("3","Evento F1 race","jos425","2022-09-21","3");
INSERT INTO resultados VALUES("4","EVENTO APEX GOLD","fmc438","2022-08-25","1");
INSERT INTO resultados VALUES("6","gamegame","fer438","2022-10-09","7");



DROP TABLE IF EXISTS totus;

CREATE TABLE `totus` (
  `TotalUsuariosRegistrados` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO totus VALUES("9");



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `idusuario` int(10) NOT NULL AUTO_INCREMENT,
  `nombreus` varchar(50) DEFAULT NULL,
  `apellidopatus` varchar(50) DEFAULT NULL,
  `apellidomatus` varchar(50) DEFAULT NULL,
  `cuatri` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contraseña` varchar(8) DEFAULT NULL,
  `carrera` varchar(100) DEFAULT NULL,
  `usuario` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `nombreus` (`nombreus`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

INSERT INTO usuarios VALUES("2","Diego","Ruiz","Osoñoz","tercero","al222110525@gmail.com","rudieg25","TICs area de Desarrollo de Software Multiplataforma","ydr525");
INSERT INTO usuarios VALUES("3","Jose Saul","Alvrez","Hernandez","tercero","al222110321@gmail.com","jsaha425","TICs area de Desarrollo de Software Multiplataforma","jos425");
INSERT INTO usuarios VALUES("4","fernando","manjarrez","Cedillo","tercero","al222111438@gmail.com","1234","TICs area de Infraestructura de Redes Digitales","fer438");
INSERT INTO usuarios VALUES("39","Mauricio","Alvarez","Hernandez","primero","al222110456@gmail.com","qwertyui","Mantenimiento Industrial","bnm765");
INSERT INTO usuarios VALUES("40","diego","franco","villagomez","tercero","al222110987@gmail.com","osbhtdfg","TICs area de Desarrollo de Software Multiplataforma","dieg98");
INSERT INTO usuarios VALUES("44","dfgffdafda","df","dfg","dfdfg","gafda@gmail.com","sqadretr","TICs area de Desarrollo de Software Multiplataforma","fdsere");
INSERT INTO usuarios VALUES("46","Hugo","Vilchis","Montero","noveno","al222110638@gmail.com","jsht5463","Mantenimiento","hvm736");
INSERT INTO usuarios VALUES("47","Israel","Ruiz ","Osoñoz","tercero","al222110736@gmail.com","6520e96e","TICs area de Desarrollo de Software Multiplataforma","iro888");
INSERT INTO usuarios VALUES("50","kevin","chamacho","lopez","quinto","al2527266@gmail.com","624b61ac","Negocios area Ventas","hgs765");



DROP TABLE IF EXISTS usuarioyjuego;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarioyjuego` AS (select `us`.`nombreus` AS `nombreus`,`us`.`usuario` AS `usuario`,`ev`.`nombreeve` AS `nombreeve`,`ev`.`nomjuego` AS `nomjuego` from ((((`usuarios` `us` join `eventos` `ev`) join `resultados` `re`) join `participantes` `par`) join `juegos` `jg`) where `us`.`usuario` = `re`.`usuario` and `re`.`nombreeve` = `par`.`nombreeve` and `par`.`idjuego` = `jg`.`idjuego` and `jg`.`nomjuego` = `ev`.`nomjuego` and `us`.`idusuario` = 4);

INSERT INTO usuarioyjuego VALUES("fernando","fer438","gamegame","FIFA");



SET FOREIGN_KEY_CHECKS=1;