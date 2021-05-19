-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 06 sep. 2020 à 13:43
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

DROP TABLE IF EXISTS `achat`;
CREATE TABLE IF NOT EXISTS `achat` (
  `achat_id` int(10) NOT NULL AUTO_INCREMENT,
  `livre_id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `date_achat` date NOT NULL,
  `prix` double NOT NULL,
  `etat` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`achat_id`),
  KEY `livre_id` (`livre_id`),
  KEY `client_id` (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `achat`
--

INSERT INTO `achat` (`achat_id`, `livre_id`, `client_id`, `date_achat`, `prix`, `etat`) VALUES
(1, 19, 4, '2020-08-28', 50, 'Nouveau'),
(2, 9, 4, '2020-08-28', 80, 'Nouveau');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` varchar(30) COLLATE utf8_bin NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `prenom` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `adresse` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `tel` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `cin` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `date_naissance` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `caution` int(10) DEFAULT NULL,
  `nb_emprunts` int(10) DEFAULT NULL,
  `emprunts` int(10) DEFAULT NULL,
  `permission` int(1) DEFAULT NULL,
  PRIMARY KEY (`client_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`client_id`, `username`, `password`, `nom`, `prenom`, `adresse`, `tel`, `cin`, `date_naissance`, `caution`, `nb_emprunts`, `emprunts`, `permission`) VALUES
(2, 'admin', 'admin', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 1),
(4, 'Boutzrout.Hanane-BIB', 'FcILTS2B', 'Boutzrout', 'Hanane', 'Hay El Farah, rue 88, n35, Casablanca ', '0664307921', 'BL146529', '1998-06-22', 100, 10, 5, NULL),
(17, 'Boutzrout.Yahya-BIB', 'jdPSqoyc', 'Boutzrout', 'Yahya', 'Hay El Farah, rue 88, n35, Casablanca ', '0664307921', 'BH450926', '2015-06-30', 20, 1, 1, NULL),
(21, 'Nejjar.Fatima-BIB', 'fj2qJbOS', 'Nejjar', 'Fatima', 'Hay Amal, rue 62, n365, Casablanca ', '0664672819', 'BF234571', '1995-11-03', 50, 5, NULL, NULL),
(22, 'John.Doe-BIB', '99hA48BE', 'John', 'Doe', 'Maarif 35, Casablanca, Maroc', '0643987623', 'BL984523', '1998-06-10', 100, 10, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

DROP TABLE IF EXISTS `emprunt`;
CREATE TABLE IF NOT EXISTS `emprunt` (
  `emprunt_id` int(10) NOT NULL AUTO_INCREMENT,
  `livre_id` int(10) DEFAULT NULL,
  `client_id` int(10) DEFAULT NULL,
  `date_emp` date DEFAULT NULL,
  `delais_emp` date DEFAULT NULL,
  `date_rendue` date DEFAULT NULL,
  PRIMARY KEY (`emprunt_id`),
  KEY `livre_id` (`livre_id`),
  KEY `client_id` (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `emprunt`
--

INSERT INTO `emprunt` (`emprunt_id`, `livre_id`, `client_id`, `date_emp`, `delais_emp`, `date_rendue`) VALUES
(19, 21, 4, '2020-08-28', '2020-09-05', NULL),
(18, 13, 17, '2020-08-26', '2020-09-03', '2020-08-29'),
(16, 12, 17, '2020-08-26', '2020-09-03', NULL),
(15, 6, 4, '2020-08-26', '2020-09-03', NULL),
(14, 10, 4, '2020-08-26', '2020-09-03', '2020-08-28'),
(13, 1, 4, '2020-08-26', '2020-09-03', NULL),
(12, 5, 4, '2020-08-10', '2020-08-18', NULL),
(24, 35, 22, '2020-08-29', '2020-09-06', NULL),
(23, 31, 4, '2020-08-29', '2020-09-06', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `livre_id` int(10) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `auteur` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `edition` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `img` varchar(100) COLLATE utf8_bin NOT NULL,
  `nb_copies` int(10) NOT NULL,
  PRIMARY KEY (`livre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`livre_id`, `titre`, `auteur`, `edition`, `type`, `img`, `nb_copies`) VALUES
(1, 'Cinq Petits Cochons ', 'Agatha Christie', 'Horeya', 'Roman policier', '1.jpg', 1),
(5, '1984', 'George Orwell', 'Planet', 'Roman dystopique', '2.jpg', 1),
(6, 'Les cheveux du diable', 'Warren Armstrong', 'Presses de la CP', 'Roman', '3.jpg', 5),
(7, 'Le dernier mot d\'un roi', 'Pierre Moustiers', 'France loisirs', 'Roman', '4.jpg', 3),
(9, 'Power of your subconscious mind', 'Dr Joseph Murphy', 'Amazing reads', 'Non fiction', '5.jpg', 6),
(10, 'Suspicion', 'David Ambrose', 'France loisirs', 'Suspense', '6.jpg', 3),
(11, 'DÃ©butantes diporcÃ©es', 'Plum Sykes', 'Fleuve Noir', 'Roman', '7.jpg', 2),
(12, 'L\'Ã®le au trÃ©sor', 'Robert Louis Stevenson', 'Grafylia', 'Roman', '8.jpg', 10),
(13, 'La bÃªte du Gevaudan', 'Abel Chevalley', 'J\'ai lu', 'Roman', '9.jpg', 3),
(14, 'Drame en trois actes', 'Agatha Christie', 'Horeya', 'Roman policier', '10.jpg', 5),
(15, 'Sauve-moi', 'Guillaume Musso', 'Pocket', 'Roman', '11.jpg', 6),
(16, 'La nuit de l\'erreur', 'Tahar Ben Jelloun', 'Points', 'Roman', '12.jpg', 4),
(17, 'Candide', 'Voltaire', 'Le livre de poche ', 'Classique', '13.jpg', 9),
(18, 'Aleph', 'Paulo Coelho', 'J\'ai lu', 'Roman', '14.jpg', 5),
(19, 'Brida', 'Paulo Coelho', 'J\'ai lu', 'Roman', '15.jpg', 6),
(20, 'Voyage au centre de la terre', 'Jules Verne', 'Symphonie', 'Roman', '16.jpg', 7),
(21, 'Pride and Prejudice', 'Jane Austen', 'Farus', 'Roman', '17.jpg', 5),
(22, 'The subtle art of not giving a f*ck', 'Mark Manson', 'Harper Collins', 'self-help', '18.jpg', 10),
(23, 'Everything is f*cked ', 'Mark Manson', 'Harper Collins', 'self-help', '19.jpg', 10),
(24, 'Ø§Ù„Ø¢Ù„Ø©', 'Ø¹Ù…Ø±Ùˆ Ø§Ù„Ø¬Ù†Ø¯ÙŠ', 'Ø¯Ø§Ø± Ø§Ù„Ø±Ø³Ù… Ø¨Ø§Ù„ÙƒÙ„Ù…Ø§Øª', 'Ø±ÙˆØ§ÙŠØ©', '20.jpg', 5),
(25, 'Ø§Ù„ÙŠÙˆÙ… Ø§Ù„Ù…ÙˆØ¹ÙˆØ¯', 'Ù†Ø¬ÙŠØ¨ Ø§Ù„ÙƒÙŠÙ„Ø§Ù†ÙŠ', 'Ø¯Ø§Ø± Ø§Ù„Ø£Ø¯Ø¨ Ø§Ù„Ø¹Ø±Ø¨ÙŠ', 'Ø±ÙˆØ§ÙŠØ©', '21.jpg', 2),
(26, 'Ù…Ø­Ø§ÙˆÙ„Ø© Ø¹ÙŠØ´', 'Ù…Ø­Ù…Ø¯ Ø²ÙØ²Ø§Ù', 'Ø§Ù„Ù…Ø±ÙƒØ² Ø§Ù„Ø«Ù‚Ø§ÙÙŠ Ø§Ù„Ø¹Ø±Ø¨ÙŠ', 'Ø±ÙˆØ§ÙŠØ©', '22.jpg', 3),
(27, 'Ø£ÙˆÙ„Ø§Ø¯ Ø­Ø§Ø±ØªÙ†Ø§ ', ' Ù†Ø¬ÙŠØ¨ Ù…Ø­ÙÙˆØ¸ ', 'Ø¯Ø§Ø± Ø§Ù„Ø´Ø¨Ø§Ø¨', 'Ø±ÙˆØ§ÙŠØ©', '23.jpg', 2),
(28, 'ÙÙ‚Ø· Ø¹Ù†Ø¯Ù…Ø§ Ø£Ù…ÙˆØª ÙÙŠ Ø¨Ø§Ø±ÙŠØ³  ', 'ÙŠØ­ÙŠÙ‰ Ø¹Ø·ÙŠØ©', 'Ø¯Ø§Ø± Ø§Ù„Ø±Ø³Ù… Ø¨Ø§Ù„ÙƒÙ„Ù…Ø§Øª', 'Ø±ÙˆØ§ÙŠØ©', '24.jpg', 2),
(29, 'Ù†Ø¸Ø±ÙŠØ© Ø§Ù„ÙØ³ØªÙ‚ ', 'ÙÙ‡Ø¯ Ø¹Ø§Ù…Ø± Ø§Ù„Ø£Ø­Ù…Ø¯ÙŠ', ' Ø§Ù„Ø­Ø¶Ø§Ø±Ø©', 'self-help', '25.jpg', 10),
(30, 'Ù…Ù…ÙŠØ² Ø¨Ø§Ù„Ø£ØµÙØ± ', ' Ø¥ØªØ´.Ø¬Ø§ÙƒØ³ÙˆÙ† Ø¨Ø±Ø§ÙˆÙ† Ùˆ Ø±ÙˆØªØ´ÙŠÙ„ Ø¨Ù†ÙŠÙ†Ø¬ØªÙˆÙ†', 'Ù…ÙƒØªØ¨Ø© Ø¬Ø±ÙŠØ±', 'self-help', '26.jpg', 10),
(31, '40 Ø£Ø±Ø¨Ø¹ÙˆÙ†  ', ' Ø£Ø­Ù…Ø¯ Ø§Ù„Ø´Ù‚ÙŠØ±ÙŠ', 'Ø¯Ø§Ø± Ø§Ù„Ø´Ø±ÙˆÙ‚', 'Ø³ÙŠØ±Ø© Ø°Ø§ØªÙŠØ©', '27.jpg', 10),
(32, 'Ù‚ÙˆØ§Ø¹Ø¯ Ø¬Ø§Ø±ØªÙŠÙ†  ', 'Ø¹Ù…Ø±Ùˆ Ø¹Ø¨Ø¯ Ø§Ù„Ø­Ù…ÙŠØ¯', 'Ø¹ØµÙŠØ± Ø§Ù„ÙƒØªØ¨', ' Ø±ÙˆØ§ÙŠØ©', '28.jpg', 10),
(33, 'Ù‚ÙˆØ§Ø¹Ø¯ Ø¬Ø§Ø±ØªÙŠÙ†2 Ø¯Ù‚Ø§Øª Ø§Ù„Ø´Ø§Ù…Ùˆ', 'Ø¹Ù…Ø±Ùˆ Ø¹Ø¨Ø¯ Ø§Ù„Ø­Ù…ÙŠØ¯', 'Ø¹ØµÙŠØ± Ø§Ù„ÙƒØªØ¨', ' Ø±ÙˆØ§ÙŠØ©', '29.jpg', 10),
(34, 'Ù‚ÙˆØ§Ø¹Ø¯ Ø¬Ø§Ø±ØªÙŠÙ† 3 Ø£Ù…ÙˆØ§Ø¬ Ø£ÙƒÙ…Ø§', 'Ø¹Ù…Ø±Ùˆ Ø¹Ø¨Ø¯ Ø§Ù„Ø­Ù…ÙŠØ¯', 'Ø¹ØµÙŠØ± Ø§Ù„ÙƒØªØ¨', ' Ø±ÙˆØ§ÙŠØ©', '30.jpg', 10),
(35, 'The secret', 'Rhonda Byrne', 'Hard Cover', 'self-help', '31.jpg', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
