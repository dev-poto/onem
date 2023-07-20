-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 05, 2023 at 10:54 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onem`
--

-- --------------------------------------------------------

--
-- Table structure for table `demandeur`
--

DROP TABLE IF EXISTS `demandeur`;
CREATE TABLE IF NOT EXISTS `demandeur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `login` varchar(20) NOT NULL,
  `password` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` int NOT NULL,
  `rccm` varchar(255) NOT NULL,
  `nif` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `siegeSocial` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `idDemandeur` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idDemandeur` (`idDemandeur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `langue`
--

DROP TABLE IF EXISTS `langue`;
CREATE TABLE IF NOT EXISTS `langue` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `niveauEcrire` varchar(25) NOT NULL,
  `niveauLire` varchar(25) NOT NULL,
  `niveauParler` varchar(25) NOT NULL,
  `idDemandeur` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idDemandeur` (`idDemandeur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `offre`
--

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nomPoste` varchar(255) NOT NULL,
  `nomDomaine` varchar(255) NOT NULL,
  `EtudeRealise` varchar(255) NOT NULL,
  `approps` text NOT NULL,
  `objectifs` text NOT NULL,
  `competences` text NOT NULL,
  `typeContrat` varchar(255) NOT NULL,
  `lieuDepot` varchar(255) NOT NULL,
  `dateFinDepot` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `postuler`
--

DROP TABLE IF EXISTS `postuler`;
CREATE TABLE IF NOT EXISTS `postuler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `idDemandeur` int NOT NULL,
  `idOffre` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idDemandeur` (`idDemandeur`),
  KEY `idOffre` (`idOffre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `publier`
--

DROP TABLE IF EXISTS `publier`;
CREATE TABLE IF NOT EXISTS `publier` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `idEntreprise` int NOT NULL,
  `idOffre` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idEntreprise` (`idEntreprise`),
  KEY `idOffre` (`idOffre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`idDemandeur`) REFERENCES `demandeur` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `langue`
--
ALTER TABLE `langue`
  ADD CONSTRAINT `langue_ibfk_1` FOREIGN KEY (`idDemandeur`) REFERENCES `demandeur` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `postuler`
--
ALTER TABLE `postuler`
  ADD CONSTRAINT `postuler_ibfk_1` FOREIGN KEY (`idDemandeur`) REFERENCES `demandeur` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `postuler_ibfk_2` FOREIGN KEY (`idOffre`) REFERENCES `offre` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `publier`
--
ALTER TABLE `publier`
  ADD CONSTRAINT `publier_ibfk_1` FOREIGN KEY (`idEntreprise`) REFERENCES `entreprise` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `publier_ibfk_2` FOREIGN KEY (`idOffre`) REFERENCES `offre` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
