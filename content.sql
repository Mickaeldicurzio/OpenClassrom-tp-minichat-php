-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 08 Mai 2018 à 01:01
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.2.4-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tpminichat`
--

-- --------------------------------------------------------

--
-- Structure de la table `content`
--

CREATE TABLE `content` (
  `user` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `content`
--

INSERT INTO `content` (`user`, `message`, `date`) VALUES
('mdicurzio', 'mon premier message', '2018-05-08 00:04:08'),
('mdicurzio', 'mon deuxième message', '2018-05-08 00:04:08'),
('mdicurzio', 'mon test de date', '2018-05-08 00:06:51'),
('jean-louiz', 'mon deuxieme test de date', '2018-05-08 00:07:24'),
('jean-louiz', 'mon deuxieme test de date', '2018-05-08 00:07:40'),
('robert', 'test de order by date', '2018-05-08 00:09:28'),
('mdicurzio', 'adaaa', '2018-05-08 00:38:06'),
('mdicurzio', 'test pour le coockie', '2018-05-08 00:44:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
