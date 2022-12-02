-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 02 déc. 2022 à 14:12
-- Version du serveur : 8.0.27
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `database`
--

-- --------------------------------------------------------

--
-- Structure de la table `passwordrecover`
--

DROP TABLE IF EXISTS `passwordrecover`;
CREATE TABLE IF NOT EXISTS `passwordrecover` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `tokenUser` varchar(255) NOT NULL,
  `tokenRecov` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `uploaded_files`
--

DROP TABLE IF EXISTS `uploaded_files`;
CREATE TABLE IF NOT EXISTS `uploaded_files` (
  `ID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_token` varchar(255) NOT NULL,
  `game_name` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `descript` varchar(255) DEFAULT NULL,
  `extension` varchar(5) NOT NULL,
  `serial_no` int UNSIGNED NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `uploaded_files_pending`
--

DROP TABLE IF EXISTS `uploaded_files_pending`;
CREATE TABLE IF NOT EXISTS `uploaded_files_pending` (
  `ID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_token` varchar(255) NOT NULL,
  `game_name` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `descript` varchar(255) DEFAULT NULL,
  `extension` varchar(255) NOT NULL,
  `serial_no` int UNSIGNED NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `avatar_path` varchar(50) DEFAULT NULL,
  `user_token` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `users_logs`
--

DROP TABLE IF EXISTS `users_logs`;
CREATE TABLE IF NOT EXISTS `users_logs` (
  `ID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `total_uploads` int UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `video_comments`
--

DROP TABLE IF EXISTS `video_comments`;
CREATE TABLE IF NOT EXISTS `video_comments` (
  `ID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_token` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
