-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 14 fév. 2025 à 13:44
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `casiers`
--

DROP TABLE IF EXISTS `casiers`;
CREATE TABLE IF NOT EXISTS `casiers` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `occupation` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `idUtilisateur` int NOT NULL,
  `idMenu` int NOT NULL,
  `idCasier` int NOT NULL,
  `progression` int NOT NULL,
  `codeRetrait` varchar(5) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `idUtilisateur` (`idUtilisateur`),
  KEY `idMenu` (`idMenu`),
  KEY `idCasier` (`idCasier`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(15) NOT NULL,
  `prix` float NOT NULL,
  `sandwich` varchar(20) NOT NULL,
  `accompagnement` varchar(20) NOT NULL,
  `boisson` varchar(20) NOT NULL,
  `imgSand` varchar(20) NOT NULL,
  `imgAcc` varchar(20) NOT NULL,
  `imgBois` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `identifiant` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mdp` varchar(1024) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`Id`, `nom`, `prenom`, `telephone`, `mail`, `identifiant`, `mdp`) VALUES
(1, 'PESTANA', 'Miguel', '1122334455', 'miguelpestana@gmail.fr', 'paonita', 'miguel123'),
(2, 'TOSSOU', 'Stéphane', '1234512345', 'stephanetossou@gmail.fr', 'stephane', 'stephane123'),
(3, 'JOHANATHAN', 'Mohanathas', '9876543210', 'mohanathasjohanathas@gmail.fr', 'mohanathas', 'mohanathas123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
