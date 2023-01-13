-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 13 jan. 2023 à 10:25
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `espace_membres`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `mdp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `mdp`) VALUES
(9, 'User1', '7c222fb2927d828af22f592134e8932480637c0d'),
(2, 'Carter', '81fe8bfe87576c3ecb22426f8e57847382917acf'),
(3, 'Talita', '81fe8bfe87576c3ecb22426f8e57847382917acf'),
(4, 'NAWEL', '9048ead9080d9b27d6b2b6ed363cbf8cce795f7f'),
(8, 'Mouss', '7c222fb2927d828af22f592134e8932480637c0d'),
(7, 'Moustapha', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(23, 'abcd', '7c222fb2927d828af22f592134e8932480637c0d'),
(12, 'Sultana', 'c456f62a9afd90ec1450964a9e862abf1afe657d'),
(22, 'Mouss', '425af12a0743502b322e93a015bcf868e324d56a'),
(21, 'Carter', 'eb7f77b6fd7c5354610a56fd7e5958755376a3b8'),
(20, 'quiestce', 'b44dda1dadd351948fcace1856ed97366e679239');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
