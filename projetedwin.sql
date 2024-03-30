-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 30 mars 2024 à 15:07
-- Version du serveur : 5.7.42
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetedwin`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

DROP TABLE IF EXISTS `abonnement`;
CREATE TABLE IF NOT EXISTS `abonnement` (
  `Id_Abonnement` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `prix` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`Id_Abonnement`),
  UNIQUE KEY `Nom` (`Nom`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`Id_Abonnement`, `Nom`, `prix`) VALUES
(1, 'Fit Pro', 12.99),
(2, 'Fit Basic', 0.00);

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

DROP TABLE IF EXISTS `activite`;
CREATE TABLE IF NOT EXISTS `activite` (
  `ID_Acti` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `Description` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`ID_Acti`),
  UNIQUE KEY `Nom` (`Nom`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`ID_Acti`, `Nom`, `Description`) VALUES
(1, 'Natation', 'Entrainement à la vitesse et à l\'endurance évoluant en fonction du niveau du participant.'),
(2, 'Course à pied', 'Entrainements basés sur un objectif de distance variant entre 10, 21 et 42 kilomètres.'),
(3, 'Musculation', 'Entrainements basés sur un objectif de développements de différents groupes musculaires.');

-- --------------------------------------------------------

--
-- Structure de la table `plan_entrainement`
--

DROP TABLE IF EXISTS `plan_entrainement`;
CREATE TABLE IF NOT EXISTS `plan_entrainement` (
  `ID_Plan` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_plan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `activité` int(11) DEFAULT NULL,
  `Description` varchar(500) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`ID_Plan`),
  UNIQUE KEY `Nom_plan` (`Nom_plan`),
  KEY `sport` (`activité`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `plan_entrainement`
--

INSERT INTO `plan_entrainement` (`ID_Plan`, `Nom_plan`, `activité`, `Description`) VALUES
(1, 'Niveau 1', 1, 'Echauffement sur 3 longueurs. Séance composée de 12 longueurs en nage libre, puis une longueur en dos crawlé, une longueur en crawl, et une longueur en brasse. Toutes les longueurs de la séance sont séparées par 20 secondes de repos.'),
(2, 'Niveau 2', 1, 'Echauffement sur 3 longueurs. Séance composée de 16 longueurs en nage libre, puis 2 longueurs en dos crawlé, 2 longueurs en crawl, et 2 longueurs en brasse.'),
(3, '10 Km', 2, 'Lundi : Endurance fondamentale pendant 30 minutes. Mercredi : Entrainement fractionné pendant 30 minutes. Samedi : Sortie longue d\'une heure.'),
(4, '21 Km', 2, 'Lundi : Endurance fondamentale pendant 45 minutes. Mercredi : Entrainement fractionné pendant 45 minutes. Samedi : Sortie longue d\'une heure 30.'),
(5, '42 Km', 2, 'Lundi : Endurance fondamentale pendant une heure. Mercredi : Entrainement fractionné pendant une heure. Samedi : Sortie longue de 2 heures.'),
(6, 'Haut du corps', 3, 'Mardi : Pectoraux et Epaules. Vendredi : Dos, Biceps et Triceps'),
(7, 'Bas du corps', 3, 'Mardi : Quadriceps et Fessiers. Vendredi : Ischios et Mollets'),
(8, 'Full Body', 3, 'Lundi : Pectoraux et Triceps. Mardi : Dos et Biceps. Jeudi : Jambes. Samedi : Epaules');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id_U` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Mot_de_passe` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Role` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nom` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `prenom` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `abonnement` int(11) NOT NULL,
  `sport_pratique` int(11) NOT NULL,
  `Taille` int(3) DEFAULT NULL,
  `Poids` decimal(5,2) DEFAULT NULL,
  `genre` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `photo` longblob,
  `Banni` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id_U`),
  UNIQUE KEY `email` (`email`),
  KEY `abonnement` (`abonnement`),
  KEY `sport_pratique` (`sport_pratique`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déclencheurs `users`
--
DROP TRIGGER IF EXISTS `user_roles_creation`;
DELIMITER $$
CREATE TRIGGER `user_roles_creation` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO user_roles (user_id, role_id) VALUES (NEW.Id_U, 1)
$$
DELIMITER ;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `plan_entrainement`
--
ALTER TABLE `plan_entrainement`
  ADD CONSTRAINT `plan_entrainement_ibfk_1` FOREIGN KEY (`activité`) REFERENCES `activite` (`ID_Acti`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`abonnement`) REFERENCES `abonnement` (`Id_Abonnement`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`sport_pratique`) REFERENCES `plan_entrainement` (`ID_Plan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
