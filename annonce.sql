-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 16 nov. 2021 à 01:42
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `id_categorie`, `id_annonceur`, `titre`, `prix`, `suface`, `ville`, `description`, `date_creation`, `photoExt`, `photoSalon`, `photoChambre`) VALUES
(7, 2, 5, 'Ventre de villa', '35 250 000 FCFA', 500, 'San-Pedro', 'Pres de la mère vous avez une vu sur le port et sur la ville de Sans Pedro, cette Villa est une maison haut standing, elle conviendra que se soir pour y habiter ou pour des vacance c\'est le meilleur choix', '2016-11-21 00:00:00', 'Ventre de villa_202111169768.jpg', 'Ventre de villa_202111169768.jpg', 'Ventre de villa_202111169768.jpg');

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
  `mdp` text,
  `date_creation_compte` datetime DEFAULT NULL,
  `avatar` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annonceur`
--

INSERT INTO `annonceur` (`id`, `pseudo`, `nom_prenom`, `mail`, `mdp`, `date_creation_compte`, `avatar`) VALUES
(1, 'BaazZ', 'Yao N\'goran', 'admin@h', '$2y$10$FwwQ7ZaScgghVGqyAWZtJeNxFpTrnm5JpCNzcxtgZMxGJfpRtSxkC', '2021-08-07 20:09:55', 'BaazZ_2021080758840.jpg'),
(2, 'VaporMax', 'Momo', 'momocach@gmail.com', '$2y$10$mKEI/tOXYr7H8Qnk7WPbEOr2lDLf3RkgH4.NmP6LoexEcCe9mD9i2', '2021-08-07 20:23:25', 'VaporMax_2021080773626.png'),
(3, 'Yaya', 'toure', 'yaya@gmail.com', '$2y$10$3AGTLBFXhW17TfdOX/9JnO7/ECAZSo47NOWRXVFlMbEi6sna0KiJq', '2021-08-07 21:37:36', 'Yaya_2021080792570.jpg'),
(4, 'Yao', 'Eloge', 'root@k', '$2y$10$vdfHWVCKbNoaeA3p2ZEHGua.D7oiDs/y2GOgkJrh3q1zcEMVXjBnu', '2021-11-03 04:51:31', 'Yao_2021110363519.jpg'),
(5, 'Yao1', 'Eloge', 'yaoeloge@gmail.com', '$2y$10$TYtfUrSzSbd8c5EJ.pF8IeEIQAjxWQp4/rcSyJlY53/19SFpojfdC', '2021-11-03 15:32:44', 'Yao1_2021110315004.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `immo_categorie`
--

INSERT INTO `immo_categorie` (`id`, `titre`, `date_creation`) VALUES
(1, 'Appartement', '2021-08-02 23:59:36'),
(2, 'Villa', '2021-08-02 23:59:36'),
(3, 'Maison', '2021-08-03 01:13:49'),
(4, 'Studio', '2021-08-09 01:13:49'),
(6, 'Bureaux', '2021-08-02 23:59:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
