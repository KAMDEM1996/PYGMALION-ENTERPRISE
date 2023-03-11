-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 27 fév. 2023 à 16:16
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `agri-wars`
--
CREATE DATABASE IF NOT EXISTS `agri-wars` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `agri-wars`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--
-- Création : jeu. 23 fév. 2023 à 14:00
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idAd` int(150) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id administrateur',
  `NomAd` varchar(50) NOT NULL COMMENT 'nom admin',
  `PrenomAd` varchar(50) NOT NULL COMMENT 'prenom admin',
  `mdp` varchar(50) NOT NULL COMMENT 'mots de passe',
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'periode d''inscription',
  PRIMARY KEY (`idAd`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='table administrateur site';

--
-- RELATIONS POUR LA TABLE `admin`:
--

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` VALUES(1, 'Kamdem Fokom', 'Bismarck', '25f9e794323b453885f5181f1b624d0b', '2023-02-23 14:53:59');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--
-- Création : sam. 25 fév. 2023 à 20:57
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(150) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id commentaire',
  `comment_subject` text NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(11) NOT NULL DEFAULT 1,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COMMENT='table notification';

--
-- RELATIONS POUR LA TABLE `comments`:
--

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` VALUES(3, 'test2', 'ras', 1, '2023-02-25 21:06:57');

-- --------------------------------------------------------

--
-- Structure de la table `encyclopedie`
--
-- Création : jeu. 23 fév. 2023 à 14:40
--

DROP TABLE IF EXISTS `encyclopedie`;
CREATE TABLE IF NOT EXISTS `encyclopedie` (
  `id` int(150) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `Fichiers` text NOT NULL,
  `doc` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='table des encyclopedies enregistrer';

--
-- RELATIONS POUR LA TABLE `encyclopedie`:
--

-- --------------------------------------------------------

--
-- Structure de la table `engins`
--
-- Création : jeu. 23 fév. 2023 à 14:09
--

DROP TABLE IF EXISTS `engins`;
CREATE TABLE IF NOT EXISTS `engins` (
  `id` int(150) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identifiant propriétaire engins',
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `engins` varchar(50) NOT NULL,
  `prixlocation` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='table propriétaire d''engins';

--
-- RELATIONS POUR LA TABLE `engins`:
--

-- --------------------------------------------------------

--
-- Structure de la table `formateurs`
--
-- Création : sam. 25 fév. 2023 à 17:18
--

DROP TABLE IF EXISTS `formateurs`;
CREATE TABLE IF NOT EXISTS `formateurs` (
  `idfor` int(150) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identifiant formateurs activé',
  `idt` int(150) UNSIGNED NOT NULL COMMENT 'identifiant formateurs non activé',
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `fichiers` text NOT NULL,
  `formation` text NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`idfor`),
  KEY `idt` (`idt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='table d''activation des formateurs';

--
-- RELATIONS POUR LA TABLE `formateurs`:
--

-- --------------------------------------------------------

--
-- Structure de la table `free`
--
-- Création : jeu. 23 fév. 2023 à 14:35
--

DROP TABLE IF EXISTS `free`;
CREATE TABLE IF NOT EXISTS `free` (
  `idf` int(150) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identifiant non-actif de l''utilisateur inscrit',
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `fichiers` text NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`idf`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='table utilisateurs inscrits non actif';

--
-- RELATIONS POUR LA TABLE `free`:
--

--
-- Déchargement des données de la table `free`
--

INSERT INTO `free` VALUES(1, 'KAMDEM FOKOM', 'BISMARCK', '697276646', 'kamdemfokombismarck@gmail.com', 'gomez', 'Cameroun', 'douala', 'profile/KAMDEM FOKOM.jpg', 'recu/KAMDEM FOKOM.pdf', '25f9e794323b453885f5181f1b624d0b', '2023-02-23 16:20:46');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--
-- Création : jeu. 23 fév. 2023 à 20:54
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(150) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sender_id` int(150) UNSIGNED NOT NULL,
  `receiver_id` int(150) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='table tchat';

--
-- RELATIONS POUR LA TABLE `messages`:
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--
-- Création : jeu. 23 fév. 2023 à 14:44
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idProd` int(150) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identifiant des produits',
  `codeprod` varchar(100) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `qteprod` varchar(100) NOT NULL,
  `puprod` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`idProd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='table des produits enrégistrer';

--
-- RELATIONS POUR LA TABLE `produit`:
--

-- --------------------------------------------------------

--
-- Structure de la table `publicite`
--
-- Création : lun. 27 fév. 2023 à 08:45
--

DROP TABLE IF EXISTS `publicite`;
CREATE TABLE IF NOT EXISTS `publicite` (
  `idIM` int(150) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`idIM`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COMMENT='table des images publicitaires';

--
-- RELATIONS POUR LA TABLE `publicite`:
--

--
-- Déchargement des données de la table `publicite`
--

INSERT INTO `publicite` VALUES(1, 'BIKE/IMG-20230105-WA0014.jpg', '2023-02-27 08:52:24');
INSERT INTO `publicite` VALUES(2, 'BIKE/IMG-20230105-WA0014.jpg', '2023-02-27 08:58:27');

-- --------------------------------------------------------

--
-- Structure de la table `teacher`
--
-- Création : jeu. 23 fév. 2023 à 14:31
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `idt` int(150) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identifiant enseignant',
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `fichiers` text NOT NULL,
  `formation` text NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`idt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='table enseignants/formateurs';

--
-- RELATIONS POUR LA TABLE `teacher`:
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--
-- Création : sam. 25 fév. 2023 à 17:08
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idU` int(150) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'identifiant utilisateur s''étant enrégistrer et activé',
  `idf` int(150) UNSIGNED NOT NULL COMMENT 'utilisateur s''étant juste enrégistrer',
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `fichiers` text NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`idU`),
  KEY `idf` (`idf`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='table utilisateur activé';

--
-- RELATIONS POUR LA TABLE `user`:
--

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` VALUES(1, 1, 'KAMDEM FOKOM', 'BISMARCK', '697276646', 'kamdemfokombismarck@gmail.com', 'gomez', 'Cameroun', 'douala', 'profile/KAMDEM FOKOM.jpg', 'recu/KAMDEM FOKOM.pdf', '25f9e794323b453885f5181f1b624d0b', '2023-02-25 17:05:55');


--
-- Métadonnées
--
USE `phpmyadmin`;

--
-- Métadonnées pour la table admin
--

--
-- Métadonnées pour la table comments
--

--
-- Métadonnées pour la table encyclopedie
--

--
-- Métadonnées pour la table engins
--

--
-- Métadonnées pour la table formateurs
--

--
-- Métadonnées pour la table free
--

--
-- Métadonnées pour la table messages
--

--
-- Métadonnées pour la table produit
--

--
-- Métadonnées pour la table publicite
--

--
-- Métadonnées pour la table teacher
--

--
-- Métadonnées pour la table user
--

--
-- Métadonnées pour la base de données agri-wars
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
