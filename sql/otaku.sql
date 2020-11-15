-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 15 nov. 2020 à 17:52
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
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `element`
--

INSERT INTO `element` (`id`, `image`, `titre`, `lien`, `id_categorie`, `id_sous_categorie`, `id_sous_sous_categorie`, `id_type`) VALUES
(6, 'ressources/test/munou na nana_276x0.jpg', 'Munou na Nana 06 Vostfr', 'https://www.otakufr.com/Munou-na-Nana-Vostfr/6/', 1, 1, 9, 1),
(5, 'ressources/test/boruto-visual-2-27_276x0.jpg', 'Boruto 173 Vostfr', 'https://www.otakufr.com/Boruto-Vostfr/173/', 1, 1, 9, 1),
(4, 'ressources/test/one piece vostfr_1_276x0.jpg', 'One Piece 949 Vostfr', 'https://www.otakufr.com/One-Piece-Vostfr/949/', 1, 1, 9, 1),
(7, 'ressources/test/golden-kamuy-saison-3-vostfr-otakufr_276x0.jpg', 'Golden Kamuy S3 06 Vostfr', 'https://www.otakufr.com/Golden-Kamuy-Saison-3-Vostfr/6/', 1, 1, 9, 1),
(8, 'ressources/test/black-clover_276x0.jpg', 'Black Clover 151 vostfr', 'https://www.otakufr.com/Black-Clover-Vostfr/151/', 1, 1, 9, 1),
(9, 'ressources/test/enen-no-shouboutai-ni-no-shou-vostfr_276x0.jpg', 'Fire Force S2 20 Vostfr', 'https://www.otakufr.com/Enen-no-Shouboutai-Ni-no-Shou-Saison-2-Vostfr/20/', 1, 1, 9, 1),
(10, 'ressources/test/jujutsu-kaisen-vostfr-otakufr_276x0.jpg', 'Jujutsu Kaisen 07 Vostfr', 'https://www.otakufr.com/Jujutsu-Kaisen-Vostfr/7/', 1, 1, 9, 1),
(11, 'ressources/test/haikyu !! to the top_276x0.jpg', 'Haikyuu S4 20 Vostfr', 'https://www.otakufr.com/Haikyuu-Saison-4-Vostfr/20/', 1, 1, 9, 1),
(12, 'ressources/test/fairy-tail.jpg', 'Fairy Tail 100 Years Quest 68 VF ', 'https://www.lelscan-vf.me/manga/fairy-tail-100-years-quest/68', 1, 1, 10, 1),
(13, 'ressources/test/black_clover.jpg', 'Black Clover 271 VF ', 'https://www.lelscan-vf.me/manga/black-clover/271', 1, 1, 10, 1),
(14, 'ressources/test/snk.jpg', 'Shingeki No Kyojin 134 VF ', 'https://www.lelscan-vf.me/manga/shingeki-no-kyojin/134', 1, 1, 10, 1),
(15, 'ressources/test/eden-zero.jpg', 'Eden\'s Zero 118 VF ', 'https://www.lelscan-vf.me/manga/edens-zero/118', 1, 1, 10, 1),
(16, 'ressources/test/one-piece.jpg', 'One Piece 995 VF ', 'https://www.lelscan-vf.me/manga/one-piece/995', 1, 1, 10, 1),
(17, 'ressources/test/kingdom.jpg', 'Kingdom 660 VF ', 'https://www.lelscan-vf.me/manga/kingdom/660', 1, 1, 10, 1),
(18, 'ressources/test/mha.jpg', 'My Hero Academia 291 VF ', 'https://www.lelscan-vf.me/manga/my-hero-academia/291', 1, 1, 10, 1),
(19, 'https://i.ytimg.com/vi/a1_NBPfCfic/maxresdefault.jpg', 'Répertoire', 'http://mugiwarastore.net/', 2, 5, 1, 1),
(20, 'http://4.bp.blogspot.com/-QgMop3QYdhU/UZyEI0BKnEI/AAAAAAAAEkA/N7Dr4b0NP5k/s1600/100.jpg', 'Site Officiel', 'http://www.mugiwara-store.com/store', 2, 5, 1, 1),
(21, 'http://www.volonte-d.com/forum/styles/subsilver2/imageset/BanniereVolonte.png', 'Informations Supplémentaires', 'http://www.volonte-d.com/evenements/mugiwarastore.php', 2, 5, 1, 1),
(22, 'https://jpninfo.com/wp-content/uploads/2016/07/tokyo-one-piece-tower.jpg', 'Notes/Sondages', 'https://www.tripadvisor.fr/Attraction_Review-g1066451-d7804866-Reviews-Tokyo_One_Piece_Tower-Minato_Tokyo_Tokyo_Prefecture_Kanto.html', 2, 5, 2, 1),
(23, 'https://i.ytimg.com/vi/GWYbb8DHQEY/maxresdefault.jpg', 'Site Officiel', 'https://onepiecetower.tokyo/', 2, 5, 2, 1),
(24, 'https://www.naturalnews.com/gallery/640/Logos/Wikipedia-Logo-on-Black.jpg', 'Informations Supplémentaires', 'https://fr.wikipedia.org/wiki/Tokyo_One_Piece_Tower', 2, 5, 2, 1),
(25, 'http://www.shonenjump.com/e/_common/_image/cmn/logo.gif', 'Site Officiel Magazine', 'http://www.shonenjump.com/j/jumpshop/', 2, 5, 3, 1),
(26, 'https://japanese-school-asahi.com/wp-content/uploads/2016/12/img_8550.jpg', 'Notes/Sondages Mandarake', 'https://www.vivrelejapon.com/ville-tokyo/mandarake', 2, 5, 3, 1),
(27, 'https://asianbeat.com/files/2011/11/f4eaf82459f618.jpg', 'Site Officiel Mandarake', 'http://www.ici-japon.com/voyage-japon/shopping-au-japon/mandarake/', 2, 5, 3, 1),
(28, 'https://www.naturalnews.com/gallery/640/Logos/Wikipedia-Logo-on-Black.jpg', 'Informations Supplémentaires Magazine', 'http://www.naruto-one.com/manga-4-weekly-shonen-jump', 2, 5, 3, 1),
(29, 'https://www.naturalnews.com/gallery/640/Logos/Wikipedia-Logo-on-Black.jpg', 'Informations Supplémentaires Mandarake', 'https://en.wikipedia.org/wiki/Mandarake', 2, 5, 3, 1),
(31, 'ressources/test/default.jpg', 'Vlog Tokyo 2015 #1', 'https://www.youtube.com/embed/UNmlt6OQXmA', 2, 6, 4, 2),
(32, 'ressources/test/default.jpg', 'Vlog Tokyo 2015 #2', 'https://www.youtube.com/embed/a-L85JWjDWU', 2, 6, 4, 2),
(33, 'ressources/test/default.jpg', 'Vlog Tokyo 2015 #3', 'https://www.youtube.com/embed/PV7c4VWby1I', 2, 6, 4, 2),
(34, 'ressources/test/default.jpg', 'Vlog Tokyo 2015 #4', 'https://www.youtube.com/embed/sklkFPbqelA', 2, 6, 4, 2),
(35, 'ressources/test/default.jpg', 'Vlog Tokyo 2016 #1', 'https://www.youtube.com/embed/ZvUdJgmvvOU', 2, 6, 5, 2),
(36, 'ressources/test/default.jpg', 'Vlog Tokyo 2016 #2', 'https://www.youtube.com/embed/ua4rUO4b8bw', 2, 6, 5, 2),
(37, 'ressources/test/default.jpg', 'Vlog Tokyo 2016 #3', 'https://www.youtube.com/embed/OW1I5UfxJB8', 2, 6, 5, 2),
(38, 'ressources/test/default.jpg', 'Vlog Tokyo 2016 #4', 'https://www.youtube.com/embed/G7iuP1wXQ98', 2, 6, 5, 2),
(39, 'ressources/test/default.jpg', 'Vlog Tokyo 2016 #5', 'https://www.youtube.com/embed/l6DshRVz6_c', 2, 6, 5, 2),
(40, 'ressources/test/default.jpg', 'Vlog Tokyo 2016 #6', 'https://www.youtube.com/embed/bjdkybZDdKo', 2, 6, 5, 2),
(41, 'ressources/test/default.jpg', 'Vlog Tokyo 2017 #1', 'https://www.youtube.com/embed/-3gEyzPQe4E', 2, 6, 6, 2),
(42, 'ressources/test/default.jpg', 'Vlog Tokyo 2017 #2', 'https://www.youtube.com/embed/b8DNo2ZfEAw', 2, 6, 6, 2),
(43, 'ressources/test/default.jpg', 'Vlog Tokyo Achats #1', 'https://www.youtube.com/embed/kjyhc65arBQ', 2, 6, 7, 2),
(44, 'ressources/test/default.jpg', 'Vlog Tokyo Achats #2', 'https://www.youtube.com/embed/NeOhW7xbHPI', 2, 6, 7, 2),
(45, 'ressources/test/default.jpg', 'Vlog Tokyo Achats #3', 'https://www.youtube.com/embed/p3ik5OW-4sY', 2, 6, 7, 2),
(46, 'ressources/test/default.jpg', 'Vlog Japon #1', 'https://www.youtube.com/embed/bgInMvOzi_U', 2, 6, 8, 2),
(47, 'ressources/test/default.jpg', 'Vlog Japon #2', 'https://www.youtube.com/embed/64mdOMf-UJE', 2, 6, 8, 2),
(48, 'ressources/test/default.jpg', 'Actu Jeux Vidéo #1', 'https://www.youtube.com/embed/lcMMBZB_Eag', 1, 1, 11, 2),
(49, 'ressources/test/default.jpg', 'Vidéo Actu  #1', 'https://www.youtube.com/embed/AWmitn08fUY', 1, 2, 12, 2),
(50, 'ressources/test/default.jpg', 'Vidéo Actu  #2', 'https://www.youtube.com/embed/y_5Be8yOev8', 1, 2, 12, 2),
(51, 'ressources/test/default.jpg', 'Vidéo Actu  #3', 'https://www.youtube.com/embed/pYCEwvgfyeE', 1, 2, 12, 2),
(52, 'ressources/test/default.jpg', 'Vidéo Actu  #4', 'https://www.youtube.com/embed/QyTXKi9greA', 1, 2, 12, 2),
(53, 'ressources/test/default.jpg', 'Vidéo Review #1', 'https://www.youtube.com/embed/NyoO5y4WUME', 1, 2, 13, 2),
(54, 'ressources/test/default.jpg', 'Vidéo Review #2', 'https://www.youtube.com/embed/gVoyGrbUCC8', 1, 2, 13, 2),
(55, 'ressources/test/default.jpg', 'Vidéo Figurines #1', 'https://www.youtube.com/embed/x2ilK28ElBM', 1, 2, 14, 2),
(56, 'ressources/test/default.jpg', 'Vidéo Figurines #2', 'https://www.youtube.com/embed/fykoinwHhJs', 1, 2, 14, 2),
(57, 'ressources/test/default.jpg', 'Vidéo Figurines #3', 'https://www.youtube.com/embed/AS3KpJ8mOwg', 1, 2, 14, 2),
(58, 'ressources/test/default.jpg', 'Vidéo Figurines #4', 'https://www.youtube.com/embed/KMcnN8UhST0', 1, 2, 14, 2),
(59, 'https://yt3.ggpht.com/-QURPqQH7vss/AAAAAAAAAAI/AAAAAAAAAAA/8bEArjj1zZ8/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Réflexions Super Approfondies', 'https://www.youtube.com/user/LeChefOtaku', 1, 3, 16, 1),
(60, 'https://yt3.ggpht.com/-f-vipi2GrG8/AAAAAAAAAAI/AAAAAAAAAAA/iBQUtZa-vjU/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Actualité Animés', 'https://www.youtube.com/user/luccassTV', 1, 3, 16, 1),
(61, 'https://yt3.ggpht.com/-1CLLl4Jo4R8/AAAAAAAAAAI/AAAAAAAAAAA/lY0FSmJymFM/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Reviews Master', 'https://www.youtube.com/user/Gonzaroo', 1, 3, 16, 1),
(62, 'https://yt3.ggpht.com/-lLxBx0_HIaw/AAAAAAAAAAI/AAAAAAAAAAA/kdVwyN1ozog/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Passioné', 'https://www.youtube.com/channel/UCTjWcZLsOsiWVxnTRFaZ3dw', 1, 3, 16, 1),
(63, 'https://yt3.ggpht.com/-_am1D_vWWxg/AAAAAAAAAAI/AAAAAAAAAAA/C8DO1P2g6pY/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Fans Incontestés', 'https://www.youtube.com/channel/UCu2e-o9q5_hZgPHCv8m1Qzg', 1, 3, 16, 1),
(64, 'https://yt3.ggpht.com/-jSvCO4jcg-A/AAAAAAAAAAI/AAAAAAAAAAA/bk8GsFM4gZ4/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Nouvelles Générations', 'https://www.youtube.com/channel/UCnY8mXSa7TMDNvwB2yRkX0Q', 1, 3, 16, 1),
(65, 'https://yt3.ggpht.com/-jSvCO4jcg-A/AAAAAAAAAAI/AAAAAAAAAAA/bk8GsFM4gZ4/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Site Officiel Fans', 'http://allbluechannel.com/', 1, 3, 17, 1),
(66, 'https://yt3.ggpht.com/-lLxBx0_HIaw/AAAAAAAAAAI/AAAAAAAAAAA/kdVwyN1ozog/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Site Internet Fans', 'https://one-piece-passion.com/', 1, 3, 17, 1),
(67, 'https://yt3.ggpht.com/-1hPXHZaJQaE/AAAAAAAAAAI/AAAAAAAAAAA/Ih3FDiKU5vQ/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Informatique=>Connaissances', 'https://www.youtube.com/channel/UCy4Fl8QiJf1sLdEpijp3hsQ', 1, 4, 18, 1),
(68, 'https://yt3.ggpht.com/-TozJQvBCQtA/AAAAAAAAAAI/AAAAAAAAAAA/Cdw5QflZlLA/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Gaming=>Divetissement', 'https://www.youtube.com/channel/UCYwcsJoShGMSTYfxouxazAA', 1, 4, 18, 1),
(69, 'https://yt3.ggpht.com/-Bb0FuuvCCO8/AAAAAAAAAAI/AAAAAAAAAAA/ApiL1AJINE8/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Informatique=>Compétences', 'https://www.youtube.com/user/FullGuyX/featured', 1, 4, 18, 1),
(70, 'https://besthqwallpapers.com/Uploads/30-10-2017/26335/thumb2-the-seven-deadly-japonese-manga-characters-nanatsu-no-taizai-warrior.jpg', 'Lives Twitch Foufou Fortnite', 'https://www.twitch.tv/hax_fifou92', 1, 4, 18, 1),
(71, 'https://yt3.ggpht.com/-TozJQvBCQtA/AAAAAAAAAAI/AAAAAAAAAAA/Cdw5QflZlLA/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Lives twitch Gaming', 'https://www.twitch.tv/dexusmbm', 1, 4, 18, 1),
(72, 'https://www.vehem.fr/wp-content/uploads/2015/11/openclassrooms-1080x638.jpg', 'Formations Online Gratuites', 'https://openclassrooms.com/', 1, 4, 19, 1),
(73, 'https://about.udemy.com/wp-content/uploads/2016/07/about-default.png', 'Formations Online Payantes', 'https://www.udemy.com/', 1, 4, 19, 1),
(74, 'https://yt3.ggpht.com/-EyN4GM8J-VY/AAAAAAAAAAI/AAAAAAAAAAA/hzzfWYNsg14/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Cybersécurité', 'https://www.youtube.com/channel/UCYnvxJ-PKiGXo_tYXpWAC-w', 1, 4, 20, 1),
(75, 'https://yt3.ggpht.com/-t-SIpMnqZpA/AAAAAAAAAAI/AAAAAAAAAAA/imeoUQBxoGA/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Nouvelles Technologies', 'https://www.youtube.com/channel/UCOLNDRtP8tUK5i-6jLO0r4Q', 1, 4, 20, 1),
(76, 'https://yt3.ggpht.com/-aIZ1l8ek27w/AAAAAAAAAAI/AAAAAAAAAAA/fv8ukbvuneI/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Concentré De Web', 'https://www.youtube.com/user/grafikarttv', 1, 4, 20, 1),
(77, 'https://yt3.ggpht.com/-q0ymE8zLJsY/AAAAAAAAAAI/AAAAAAAAAAA/63WDYDJQFL8/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Développeur FrontEnd/BackEnd', 'https://www.youtube.com/user/primfxdesign', 1, 4, 20, 1),
(78, 'https://yt3.ggpht.com/-zEXPjVfQo08/AAAAAAAAAAI/AAAAAAAAAAA/xiqG3qu4RoU/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Développeur C# (Unity3d)', 'https://www.youtube.com/channel/UCJRwb5W4ZzG43J5_dViL6Fw', 1, 4, 20, 1),
(79, 'https://yt3.ggpht.com/-N6DAQEYYhsE/AAAAAAAAAAI/AAAAAAAAAAA/2PtNhYbt0NQ/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Développeur Java (Android Studio)', 'https://www.youtube.com/user/Gravenilvectuto', 1, 4, 20, 1),
(80, 'https://yt3.ggpht.com/-uh8vMFjGwo4/AAAAAAAAAAI/AAAAAAAAAAA/u23xIGsuwRs/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Développeur IOS (Xcode)', 'https://www.youtube.com/user/theiphoneretro/featured', 1, 4, 20, 1),
(81, 'https://yt3.ggpht.com/-VipKSwFmvKg/AAAAAAAAAAI/AAAAAAAAAAA/Dg4aQEO6duc/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Développeur moins divers', 'https://www.youtube.com/user/hounwanou1993', 1, 4, 20, 1),
(82, 'https://yt3.ggpht.com/-JyZSPQcZP3g/AAAAAAAAAAI/AAAAAAAAAAA/xuepX-Xng9A/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Développeur Javascript', 'https://www.youtube.com/user/ucisko', 1, 4, 20, 1),
(83, 'https://yt3.ggpht.com/-FBtrngefxbs/AAAAAAAAAAI/AAAAAAAAAAA/deVNOYXWR-Y/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Développeur très divers', 'https://www.youtube.com/channel/UC0FIKAE7xORm6Y91kWbg4cA', 1, 4, 20, 1),
(84, 'https://yt3.ggpht.com/-SMPkNwwwDAo/AAAAAAAAAAI/AAAAAAAAAAA/aKkGsywwLoQ/s288-mo-c-c0xffffffff-rj-k-no/photo.jpg', 'Astuces SEO', 'https://www.youtube.com/channel/UCtKmS9gzTEKUBXJ5rGGxPkA', 1, 4, 20, 1);

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
