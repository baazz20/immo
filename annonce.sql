-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 17 nov. 2021 à 18:03
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `annonce`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `peudo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `peudo`, `nom`, `password`) VALUES
(1, 'admin', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) NOT NULL,
  `id_annonceur` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `prix` text NOT NULL,
  `suface` double NOT NULL,
  `ville` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_creation` datetime NOT NULL,
  `photoExt` varchar(225) NOT NULL,
  `photoSalon` varchar(225) NOT NULL,
  `photoChambre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `id_categorie`, `id_annonceur`, `titre`, `prix`, `suface`, `ville`, `description`, `date_creation`, `photoExt`, `photoSalon`, `photoChambre`) VALUES
(27, 2, 13, 'Location de Villa', '5 250 000 FCFA', 600, 'San-Pedro', '\"L\'endroit est vraiment sympa. Vous pouvez l\'utiliser tous les dimanches lorsque vous allez à la pêche. C\'est tellement génial.\"', '2021-11-17 17:28:36', 'Location de Villa_20211117644.jpg', 'Location de Villa_20211117644.jpg', 'Location de Villa_20211117644.jpg'),
(28, 1, 15, 'Vente d\'Appartement', '5 250 000 FCFA', 500, 'Soubré', '\"L\'endroit est vraiment sympa. Vous pouvez l\'utiliser tous les dimanches lorsque vous allez à la pêche. C\'est tellement génial.', '2021-11-17 17:39:27', 'Vente d\'Appartement_2021111713839.jpg', 'Vente d\'Appartement_2021111713839.jpg', 'Vente d\'Appartement_2021111713839.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `annonceur`
--

DROP TABLE IF EXISTS `annonceur`;
CREATE TABLE IF NOT EXISTS `annonceur` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) DEFAULT NULL,
  `nom_prenom` varchar(50) DEFAULT NULL,
  `mail` varchar(191) DEFAULT NULL,
  `tel` varchar(255) NOT NULL,
  `mdp` text,
  `date_creation_compte` datetime DEFAULT NULL,
  `avatar` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annonceur`
--

INSERT INTO `annonceur` (`id`, `pseudo`, `nom_prenom`, `mail`, `tel`, `mdp`, `date_creation_compte`, `avatar`) VALUES
(13, 'Yao', 'Eloge', 'yaoeloge@gmail.com', '0707076277', '$2y$10$uzNWTHzptBLfWv2W7KPN/.NVUrtvFmgoxm6.Q03OIfg9HBcXYf2nG', '2021-11-17 17:16:57', 'Yao_2021111742234.jpg'),
(15, 'Gohi', 'Marlène', 'gohi@gmail.com', '0725635868', '$2y$10$onG/rj8ZH8/Va6/CVJ9eJ.FqVdbVTNFtZGu0pSRXHTKBQGxDcXmgC', '2021-11-17 17:38:16', 'Gohi_2021111788776.png');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_topic` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `text` text NOT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_annonce` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `immo_categorie`
--

DROP TABLE IF EXISTS `immo_categorie`;
CREATE TABLE IF NOT EXISTS `immo_categorie` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `immo_categorie`
--

INSERT INTO `immo_categorie` (`id`, `titre`, `date_creation`) VALUES
(1, 'Appartement', '2021-08-02 23:59:36'),
(2, 'Villa', '2021-08-02 23:59:36'),
(3, 'Maison', '2021-08-03 01:13:49'),
(4, 'Studio', '2021-08-09 01:13:49'),
(6, 'Bureaux', '2021-08-02 23:59:36'),
(7, 'Duplex', '2021-11-17 03:25:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
