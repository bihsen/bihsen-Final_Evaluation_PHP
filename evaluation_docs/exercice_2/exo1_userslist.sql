-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 19, 2019 at 02:06 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exo1_userslist`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` enum('Mlle','Mme','M') NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `gender`, `firstname`, `lastname`, `email`, `birthdate`, `city`) VALUES
(1, 'Mlle', 'Agnès', 'Richard', 'a.richard@hotmail.fr', '1982-04-13', 'Moulin-la-Forêt'),
(2, 'Mlle', 'Nathalie', 'Clement', 'nath.clement@free.fr', '1984-02-11', 'Nanterre'),
(3, 'M', 'Yves', 'Duval', 'yvesduval@yahoo.fr', '1978-06-21', 'RoussetBourg'),
(4, 'Mme', 'Marguerite', 'Raynaud', 'marguerite.ray@orange.fr', '1954-10-17', 'Vidal'),
(5, 'Mme', 'Gabrielle', 'Pascal', 'gabiepascal320@wanadoo.fr', '1973-02-23', 'Saint-Pierre'),
(6, 'M', 'Benjamin', 'Carre', 'carre_benj@voila.fr', '1977-03-30', 'Bordeaux'),
(7, 'Mme', 'Catherine', 'Leduc', 'leduc.cathie@gmail.com', '1977-09-16', 'Costa'),
(8, 'M', 'Noël', 'Cordier', 'cordier226@free.fr', '1958-01-30', 'Rolland-sur-Mer'),
(9, 'M', 'Raymond', 'Chovait', 'raym.chauvait756@wanadoo.fr', '1973-08-01', 'St-Nazaire'),
(10, 'M', 'Thomas', 'Dias', 'tomtom.d@live.fr', '1989-08-07', 'Besnardville'),
(11, 'Mme', 'Olivia', 'Bouvet', 'olbouv27@orange.fr', '1983-08-14', 'Le Mans'),
(12, 'M', 'Tristan', 'Andre', 'tristan267@noos.fr', '1994-06-16', 'Limoges'),
(13, 'Mme', 'Bernadette', 'Maillet', 'maillet.bernadette@orange.fr', '1936-10-27', 'Gerstheim'),
(14, 'M', 'Maurice', 'Rochet', 'marochet@hotmail.fr', '1957-10-29', 'Marchandnec'),
(15, 'M', 'Édouard', 'Pereira', 'ed.pereira@gmail.com', '1964-10-01', 'Vendome');

-- --------------------------------------------------------

--
-- Table structure for table `vehicules`
--

DROP TABLE IF EXISTS `vehicules`;
CREATE TABLE IF NOT EXISTS `vehicules` (
  `vehicule_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `year` year(4) NOT NULL,
  `color` varchar(30) NOT NULL,
  PRIMARY KEY (`vehicule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicules`
--

INSERT INTO `vehicules` (`vehicule_id`, `brand`, `model`, `year`, `color`) VALUES
(4, 'audi', 'a3', 2005, 'white'),
(5, 'last test', 'any', 2000, 'green');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
