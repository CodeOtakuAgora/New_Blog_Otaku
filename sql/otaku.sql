-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 10 nov. 2020 à 23:39
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `otaku`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'admin', '$2y$12$Omx9WMNQwXaoD6P/mCnlt.eh98Vabsq8cBa3UumtViavJfIFvl9Cq');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'NEWS'),
(2, 'GALLERIE');

-- --------------------------------------------------------

--
-- Structure de la table `element`
--

DROP TABLE IF EXISTS `element`;
CREATE TABLE IF NOT EXISTS `element` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_sous_categorie` int(11) NOT NULL,
  `id_sous_sous_categorie` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `element`
--

INSERT INTO `element` (`id`, `image`, `titre`, `lien`, `id_categorie`, `id_sous_categorie`, `id_sous_sous_categorie`, `id_type`) VALUES
(1, 'https://image.animedigitalnetwork.fr/license/mha/tv2/web/affiche_600x856.jpg', 'Saison 3 Episode 3 Vostfr', 'https://animedigitalnetwork.fr/video/my-hero-academia-saison-3/8944-episode-3-kota', 1, 1, 9, 1),
(2, 'ressources/default.png', 'Visuel Non Disponible', 'https://www.youtube.com/embed/lcMMBZB_Eag', 1, 1, 11, 2);

-- --------------------------------------------------------

--
-- Structure de la table `sous_categorie`
--

DROP TABLE IF EXISTS `sous_categorie`;
CREATE TABLE IF NOT EXISTS `sous_categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sous_categorie`
--

INSERT INTO `sous_categorie` (`id`, `nom`, `id_categorie`) VALUES
(1, 'News', 1),
(2, 'Videos', 1),
(3, 'Sources', 1),
(4, 'Autres', 1),
(5, 'Lieux', 2),
(6, 'Autres', 2);

-- --------------------------------------------------------

--
-- Structure de la table `sous_sous_categorie`
--

DROP TABLE IF EXISTS `sous_sous_categorie`;
CREATE TABLE IF NOT EXISTS `sous_sous_categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_sous_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sous_sous_categorie`
--

INSERT INTO `sous_sous_categorie` (`id`, `nom`, `id_categorie`, `id_sous_categorie`) VALUES
(1, 'MugiwaraStore', 2, 5),
(2, 'TokyoTower', 2, 5),
(3, 'Autres', 2, 5),
(4, 'Tokyo2015', 2, 6),
(5, 'Tokyo2016', 2, 6),
(6, 'Tokyo2017', 2, 6),
(7, 'Achats', 2, 6),
(8, 'Autres', 2, 6),
(9, 'Animes', 1, 1),
(10, 'Mangas', 1, 1),
(11, 'JeuxVideos', 1, 1),
(12, 'VideoActu', 1, 2),
(13, 'VideoAnimeMangas', 1, 2),
(14, 'VideoFigurine', 1, 2),
(15, 'VideoAutre', 1, 2),
(16, 'Youtubers', 1, 3),
(17, 'Sites', 1, 3),
(18, 'Potos', 1, 4),
(19, 'Formations', 1, 4),
(20, 'ChainesYoutube', 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `nom`) VALUES
(1, 'Lien'),
(2, 'Video');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
