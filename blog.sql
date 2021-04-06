-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 06 avr. 2021 à 13:30
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `author`, `date`, `category`, `keywords`) VALUES
(1, 'Je suis un titre d\'article', 'Je suis le contenu d\'un article', 'Je suis l\'auteur de l\'article', '2021-04-09', 'Je duis la catégorie de l\'article', 'Je suis un mot clef'),
(2, 'CETTE FEMME DE 40 ANS EN PARAIT 52 GRACE A CETTE CREME SECRETE A BASE DE BAVE DESCARGOT', 'signskjfgndfkjgndfgnfidgnfdjgdfbgidfbgjdfngkjdfgndfijbgndgn', 'Jean valjean', '2021-04-23', 'Arnaque', 'bave d\'escargot'),
(3, 'uiyui', 'uiyui', 'yuiyui', '2021-04-06', 'yuiyi', 'uyiyuiy'),
(4, 'uiyui', 'uiyui', 'yuiyui', '2021-04-06', 'yuiyi', 'uyiyuiy'),
(5, 'sdfsdfsd', 'fsdfsd', 'fsdfsdf', '2021-04-06', 'sdfsdf', 'sdfsdfsd');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$6$rounds=5000$ydhbnctqklopmfha$uPSAReA8Zkhv8QO9BoLEY7Y8U9bOWdCarVIDawX/LRbL4dW7/Ir/wjShmB4FP1.aKAul/DKCKoZLRGBnz1.FV/');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
