-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 12 nov. 2020 à 19:27
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

-- Expliquation fichier sql de notre site de vente : 
-- on vérifie si il y a pas déjà une base données otaku si c'est le cas elle sera alors détruite
-- on créer ensuite la base données otaku
-- puis on se postionne sur la base donnée otaku afin que les tables 
-- qui seront crées soient propre à la base de données otaku
-- et pour finir on crée toutes nos tables en insérant toutes les données nescessaires
-- au fonctionnement du site 

DROP DATABASE IF EXISTS `otaku`;
CREATE DATABASE IF NOT EXISTS `otaku`;
USE `otaku`;

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
-- Structure de la table `categorie_quiz`
--

DROP TABLE IF EXISTS `categorie_quiz`;
CREATE TABLE IF NOT EXISTS `categorie_quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie_quiz`
--

INSERT INTO `categorie_quiz` (`id`, `nom`) VALUES
(1, 'Php'),
(2, 'Sql'),
(3, 'Html'),
(4, 'Css'),
(5, 'OnePiece');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `element`
--

INSERT INTO `element` (`id`, `image`, `titre`, `lien`, `id_categorie`, `id_sous_categorie`, `id_sous_sous_categorie`, `id_type`) VALUES
(1, 'ressources/my_hero_academia_picture.jpg', 'Saison 3 Episode 3 Vostfr', 'https://animedigitalnetwork.fr/video/my-hero-academia-saison-3/8944-episode-3-kota', 1, 1, 9, 1),
(2, 'ressources/default.png', 'naruto to boruto: shinobi striker pax east 2018 reactions', 'https://www.youtube.com/embed/lcMMBZB_Eag', 1, 1, 11, 2),
(3, 'ressources/black_clover_picture.jpg', 'Black Clover 151 vostfr', 'https://www.otakufr.com/Black-Clover-Vostfr/151/', 1, 1, 9, 1);

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texte` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `reponse` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `quiz`
--

INSERT INTO `quiz` (`id`, `texte`, `role`, `id_categorie`, `reponse`, `id_question`) VALUES
(1, 'Que signifie PHP ?', 'Question', 1, 0, 1),
(2, 'Hyper Text Preprocessor', 'Reponse', 1, 0, 1),
(3, 'Private HyperText Preprocessor', 'Reponse', 1, 0, 1),
(4, 'HyperText Preprocessor', 'Reponse', 1, 1, 1),
(5, 'Power HyperText Preprocessor', 'Reponse', 1, 0, 1),
(6, 'Quelle est la dernière version de Php ?', 'Question', 1, 0, 2),
(7, '7.2', 'Reponse', 1, 0, 2),
(8, '7.4', 'Reponse', 1, 1, 2),
(9, '8.0', 'Reponse', 1, 0, 2),
(10, '7.3', 'Reponse', 1, 0, 2),
(13, 'Que signifie Html ?', 'Question', 3, 0, 3),
(14, 'HText Markup Language', 'Reponse', 3, 0, 3),
(15, 'Hypertext Markup Language', 'Reponse', 3, 1, 3),
(16, 'Hyper Markup Language', 'Reponse', 3, 0, 3),
(17, 'Hoho Markup Language', 'Reponse', 3, 0, 3),
(18, 'Quelle est la dernière version de Html ?', 'Question', 3, 0, 4),
(19, '4', 'Reponse', 3, 0, 4),
(20, '5', 'Reponse', 3, 1, 4),
(21, '6', 'Reponse', 3, 0, 4),
(22, '1', 'Reponse', 3, 0, 4);

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
