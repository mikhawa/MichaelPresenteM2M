-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 18 Octobre 2017 à 08:45
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `michaelm2m`
--

--
-- Contenu de la table `section`
--

INSERT INTO `section` (`id`, `theTitle`) VALUES
(5, 'Cinqeums'),
(2, 'Deums'),
(1, 'Prems'),
(4, 'quatreums'),
(3, 'Treums');

--
-- Contenu de la table `util`
--

INSERT INTO `util` (`id`, `login`, `pwd`) VALUES
(1, 'Jo', 'Jo'),
(2, 'Fred', 'Fred'),
(3, 'Nabil', 'Nabil'),
(4, 'Camille', 'Camille');

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `theTitle`, `theText`, `theDate`, `util_id`) VALUES
(1, 'Welcome to\r\nSymfony 3.3.10', 'Your application is now ready. You can start working on it at: \r\n\r\nE:\\WEB2017\\symfony\\MichaelPresenteM2M\\', '2017-10-18 08:47:00', 1);

--
-- Contenu de la table `article_has_section`
--

INSERT INTO `article_has_section` (`article_id`, `section_id`) VALUES
(1, 4),
(1, 5);


SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
