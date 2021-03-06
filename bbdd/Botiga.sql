-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2022 at 06:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Botiga`
--

-- --------------------------------------------------------

--
-- Table structure for table `Album`
--

CREATE TABLE `Album` (
  `id` int(1) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `preu_cd` decimal(6,2) NOT NULL,
  `preu_vinil` decimal(6,2) NOT NULL,
  `preu_mp3` decimal(6,2) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `alt_foto` varchar(50) NOT NULL,
  `descripcio` varchar(1000) NOT NULL,
  `estil_id` int(1) NOT NULL,
  `artista` varchar(50) NOT NULL,
  `segell` varchar(50) NOT NULL,
  `data_publicacio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Album`
--

INSERT INTO `Album` (`id`, `nom`, `preu_cd`, `preu_vinil`, `preu_mp3`, `foto`, `alt_foto`, `descripcio`, `estil_id`, `artista`, `segell`, `data_publicacio`) VALUES
(1, '569', '14.00', '20.00', '4.00', './media/569.jpg', 'portada 569', '569 es el sexto álbum de estudio de la banda de rock japonesa GO! GO! 7188. El título es un juego de palabras con la pronunciación japonesa de 569 que suena como el inglés Go Rock You.', 1, 'GO!GO!7188', 'BMG', '2007-10-24'),
(2, 'After hours', '14.00', '20.00', '4.00', './media/After_hours.jpg', 'portada After hours', 'After Hours es el cuarto álbum de estudio del cantante canadiense The Weeknd. Fue lanzado el 20 de marzo de 2020 por XO y Republic Records.', 2, 'The Weekend', 'XO, Republic Records', '2020-03-20'),
(3, 'Greatest Hits', '14.00', '20.00', '4.00', './media/Bon_Jovi.jpg', 'portada Bon Jovi', 'Greatest Hits es el segundo recopilatorio de grandes éxitos de la banda de Rock estadounidense Bon Jovi. Este recopilatorio abarca canciones desde 1984 hasta 2010. El recopilatorio fue editado el 9 de noviembre de 2010.​', 1, 'Bon Jovi', 'Island Records', '2010-10-29'),
(4, 'Cold Heart', '14.00', '20.00', '4.00', './media/Cold_Heart.jpg', 'portada Cold Heart', 'Cold Heart es una canción de los cantantes británicos Elton John y Dua Lipa, remezclado por el trío australiano de música electrónica Pnau, y lanzado a través de EMI y Mercury Records el 13 de agosto de 2021 como primer sencillo del 32.º álbum de estudio de John El Lockdown Sessions.', 1, 'Elton John', 'EMI, Mercury Records', '2021-08-13'),
(5, 'Don\'t Shoot Me, I\'m Only the Piano Player', '14.00', '20.00', '4.00', './media/Dont_Shoot_Me.jpg', 'portada Don\'t shoot me', 'Don\'t Shoot Me, I\'m Only the Piano Player es el sexto álbum de Elton John, editado en 1973 por DJM Records. Al igual que el álbum anterior, fue grabado en el Château d\'Hérouville, cerca de París, las sesiones tuvieron lugar unos pocos meses después de las de Honky Château.', 1, 'Elton John', 'DJM Records', '1973-01-22'),
(6, 'Higher Power', '14.00', '20.00', '4.00', './media/Higher_Power.jpg', 'portada Higher power', 'Higher Power es una canción de la banda de rock británica Coldplay de su noveno álbum de estudio Music of the Spheres.3​ Fue lanzado el 7 de mayo de 2021. La canción fue escrita por los cuatro miembros de la banda, producida por Max Martin y coproducida por Oscar Holter y Bill Rahko.', 2, 'Coldplay', '	Parlophone', '2021-05-07'),
(7, 'Honky Chateau', '14.00', '20.00', '4.00', './media/Honky_Chateau.jpg', 'Honky chateau', 'Honky Château es el quinto álbum de Elton John, editado por DJM en 1972. John grabó el LP en el castillo francés de Hérouville, cerca de París. El violinista francés Jean-Luc Ponty participa en dos canciones \"Mellow\" y \"Amy\", siendo los únicos detalles orquestados del disco.', 1, 'Elton John', 'Uni Records', '1972-05-19'),
(8, 'Shivers', '14.00', '20.00', '4.00', './media/Shivers.png', 'portada shivers', 'Edward Christopher Sheeran, más conocido como Ed Sheeran, es un músico y cantante británico.​ A corta edad, comenzó a cantar en la iglesia a la que asistía y también aprendió a tocar la guitarra. A los dieciséis años abandonó la escuela secundaria, y se trasladó a Londres para proseguir una carrera artística.', 2, 'Ed Sheeran', 'Uni Records', '2021-09-01'),
(9, 'Voy a pasarmelo bien', '14.00', '20.00', '4.00', './media/Voy_a_pasarmelo_bien.jpg', 'portada Voy a pasarmelo bien', 'Voy a pasármelo bien es el nombre del quinto álbum de estudio de la banda española de rock Hombres G. Fue grabado en el verano de 1989 en los estudios Torres Sonido y Eurosonic de Madrid, España y en los Air Studios de Londres, Inglaterra.', 1, 'Hombres G', 'Warner Music Spain', '1989-01-01'),
(10, 'The arrival of the birds', '14.00', '20.00', '4.00', './media/The_Arrival_of_the_Birds.jpg', 'portada The arrival of the birds', 'The Cinematic Orchestra es un grupo inglés de música fundado en 1999 por Jason Swinscoe, cuyo estilo se mueve en el llamado nu jazz, fusionando diversos elementos.\n\nLas grabaciones del conjunto se publican en el sello independiente Ninja Tune. Además, de Jason Swinscoe, la banda está formada por el exmiembro de DJ Food, PC (Patrick Carpenter) a los platos; Tom Chant, quien toca el saxofón y el teclado; el bajista Phil France y el batería Daniel Howard. Fueron miembros de la banda Luke Flowers y T. Daniel Howard como baterías, Jamie Coleman como trompeta, y Alex James tocando el piano. ', 4, 'The Cinematic Orchestra', 'DJ Food', '2008-01-01'),
(11, 'The four seasons', '14.00', '20.00', '4.00', './media/The_Four_Seasons.jpg', 'portada The four seasons', 'Las cuatro estaciones (en italiano: Le quattro stagioni) es un grupo de cuatro conciertos para violín y orquesta (cada uno está dedicado a una estación: La primavera, El verano, El otoño y El invierno) del compositor italiano Antonio Vivaldi.\r\n<br /><br /><br />\r\nCompuestos alrededor del año 1721, fueron publicados por el editor Michel-Charles Le Cène en 1725 en Ámsterdam, junto con otros ocho conciertos para violín, como Il cimento dell\'armonia e dell\'inventione («Concurso entre Armonía e Invención»), Op. 8. El propio Vivaldi afirmó, en la dedicatoria al conde Morzin, que habían sido compuestas con anterioridad: los diversos manuscritos encontrados presentan algunas diferencias que confirman lo declarado por el autor.', 4, 'Antonio Vivaldi', 'Independent', '1723-01-01'),
(12, 'The razor\'s edge', '14.00', '20.00', '4.00', './media/The_Razors_Edge.jpg', 'portada The razor\'s edge', 'The Razors Edge —en español: El filo de las navajas— es el duodécimo álbum de estudio de la banda de Hard Rock AC/DC editado en septiembre de 1990. Con la producción de Bruce Fairbairn y la nueva incorporación del baterista Chris Slade, significó el regreso del conjunto a los primeros puestos de las listas de ventas.', 2, 'AC/DC', 'Atco Records', '1990-09-21'),
(13, 'Rage against the machine', '14.00', '20.00', '4.00', './media/Rage_against_the_machine.jpg', 'portada Rage against the machine', 'Un album que mola molt', 1, '', '', '1992-11-03'),
(14, 'The battle of Los Angeles', '14.00', '20.00', '4.00', './media/The_battle_of_los_angeles.jpg', 'portada The battle of Los Angeles', 'The Battle of Los Angeles es el tercer álbum de estudio de la banda estadounidense de rap metal Rage Against the Machine. Fue lanzado el 2 de noviembre de 1999, un día antes del séptimo aniversario del lanzamiento de álbum debut, y exactamente tres años después de Evil Empire.', 1, 'Rage Against The Machine', 'Epic Records', '1999-11-02'),
(15, 'Giant steps', '14.00', '20.00', '3.00', './media/giant_steps.jpeg', 'Portada Giant steps', 'Giant Steps es el quinto álbum de estudio de John Coltrane como líder. El álbum, su primera grabación para Atlantic Records, fue grabado entre mayo y diciembre de 1959, coincidiendo con las fechas en las cuales Coltrane participaba en el clásico Kind of Blue de Miles Davis. Precisamente estuvo acompañado de otros tres músicos que aparecen en ambas grabaciones, los miembros del Quinteto de Miles Davis Paul Chambers, Wynton Kelly y Jimmy Cobb.2​\r\n< /br>\r\nEn el 2003, en una edición especial, la revista Rolling Stone posicionó el álbum en el puesto 102 de su lista de los 500 mejores álbumes de todos los tiempos.', 3, 'John Coltrane', 'Atlantic', '1960-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `Comandes`
--

CREATE TABLE `Comandes` (
  `id` int(1) NOT NULL,
  `usr_id` int(1) NOT NULL,
  `data` datetime(1) NOT NULL,
  `import_total` decimal(5,2) NOT NULL,
  `total_elements` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Comandes`
--

INSERT INTO `Comandes` (`id`, `usr_id`, `data`, `import_total`, `total_elements`) VALUES
(1, 1, '2021-11-13 16:37:22.0', '11.55', 1),
(2, 2, '2021-11-25 16:37:22.0', '11.55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Estil`
--

CREATE TABLE `Estil` (
  `id` int(1) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Estil`
--

INSERT INTO `Estil` (`id`, `nom`) VALUES
(1, 'Rock'),
(2, 'Pop'),
(3, 'Jazz'),
(4, 'Classica');

-- --------------------------------------------------------

--
-- Table structure for table `Linies_comanda`
--

CREATE TABLE `Linies_comanda` (
  `id` int(1) NOT NULL,
  `comanda_id` int(1) NOT NULL,
  `album_id` int(1) NOT NULL,
  `quantitat` int(1) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `preu` decimal(4,2) NOT NULL,
  `Format` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Linies_comanda`
--

INSERT INTO `Linies_comanda` (`id`, `comanda_id`, `album_id`, `quantitat`, `nom`, `preu`, `Format`) VALUES
(1, 1, 1, 1, 'album', '11.55', '');

-- --------------------------------------------------------

--
-- Table structure for table `Usuaris`
--

CREATE TABLE `Usuaris` (
  `id` int(1) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `direcció` varchar(50) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passwd` varchar(256) NOT NULL,
  `sesion_id` varchar(50) DEFAULT '""'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Usuaris`
--

INSERT INTO `Usuaris` (`id`, `nom`, `direcció`, `cp`, `email`, `passwd`, `sesion_id`) VALUES
(1, 'Jaume', 'Casa seva', '08924', 'Jaume@ajuntamentdesantaco.cat', 'contrasenya', 'd'),
(2, 'Joan', 'Casa seva', '08195', 'Jaume@ajuntamentdesantqgat.cat', 'contrasenya', ''),
(3, 'Xavier', 'C/ Eduard Maristany', '08912', 'xavierperezbdn@gmail.com', '$2y$10$FnvEbiCg0F762f295WUMJeLU0Boh//3DbxQ920yD9FM9xaw5bvcJa', ''),
(4, 'Prova', 'la contra es q', '12345', 'q@q.q', '$2y$10$VuFVpORG5CHqALjYfC6VXuV4rdaNuH7v.dQOzA9.OiHHKgafLQgSy', 'roub9fbtqp4vjo0l1n3a22shfi'),
(5, 'k', 'khj', '13245', 'a@a.a', '$2y$10$car9M3NrAV0kp8gFwBM7VOF/y2i15uVc1b5vChbLKpfegoBzsINEK', '\"\"'),
(6, 'fds', 'sfd', '12345', 'xavierperezdbdn@gmail.com', '$2y$10$k/09rQdWqmZ/RkNsSTNDeu8c/x6tjse1MDZqfHXVoxbBUIqzNaqX6', '\"\"'),
(7, 'ty', 'sdf', '12345', 'qq@dsc.v', '$2y$10$BWKiZzmBtvZKC7HAV5DthenwujaCtRwhnX1hytj6bMKaVsvpGVXNm', '\"\"'),
(8, '&lt;xz', 'sdomfds', '46553', 'q@dww.dokv', '$2y$10$shQLF1IRpS86N.ZEwAqlj.his2djL3x29Oukiuv.7KD1s4DhSsWu6', '\"\"'),
(9, 'ads', '65421', '21546', 'rwe@dfsg.fygh', '$2y$10$a8pxOEcAqDPNm.VzWWo57O6etlRYGVy/ka.c1VprsWrlBIzYQA4kW', '\"\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Album`
--
ALTER TABLE `Album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estil` (`estil_id`);

--
-- Indexes for table `Comandes`
--
ALTER TABLE `Comandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuari` (`usr_id`) USING BTREE;

--
-- Indexes for table `Estil`
--
ALTER TABLE `Estil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Linies_comanda`
--
ALTER TABLE `Linies_comanda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comanda_id` (`comanda_id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `Usuaris`
--
ALTER TABLE `Usuaris`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Album`
--
ALTER TABLE `Album`
  ADD CONSTRAINT `estil_id` FOREIGN KEY (`estil_id`) REFERENCES `Estil` (`id`);

--
-- Constraints for table `Comandes`
--
ALTER TABLE `Comandes`
  ADD CONSTRAINT `fa` FOREIGN KEY (`usr_id`) REFERENCES `Usuaris` (`id`);

--
-- Constraints for table `Linies_comanda`
--
ALTER TABLE `Linies_comanda`
  ADD CONSTRAINT `Linies_comanda_ibfk_1` FOREIGN KEY (`comanda_id`) REFERENCES `Comandes` (`id`),
  ADD CONSTRAINT `album` FOREIGN KEY (`album_id`) REFERENCES `Album` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
