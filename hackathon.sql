-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 11 fév. 2025 à 20:14
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hackathon`
--

-- --------------------------------------------------------

--
-- Structure de la table `equipes`
--

CREATE TABLE `equipes` (
  `id` int(11) NOT NULL,
  `nom_equipe` varchar(100) DEFAULT NULL,
  `description_equipe` text DEFAULT NULL,
  `document_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `matricule` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `equipes`
--

INSERT INTO `equipes` (`id`, `nom_equipe`, `description_equipe`, `document_path`, `created_at`, `matricule`) VALUES
(9, 'boussengu jacques', 'fdh', NULL, '2025-02-11 18:46:06', '66SKD3BJ'),
(10, 'boussengu jacques', 'fdh', NULL, '2025-02-11 18:47:51', 'EY6QDOGD'),
(11, 'boussengu jacques', 'fdh', NULL, '2025-02-11 18:51:07', '4WMV1OEE'),
(12, 'boussengu jacques', 'f', NULL, '2025-02-11 18:54:40', 'DGVNF7OR'),
(13, 'r', 'g', NULL, '2025-02-11 18:57:24', '7FEFLNAQ'),
(14, 'g', 'dkde', NULL, '2025-02-11 19:12:13', '7YDJA1OI');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `equipe_id` int(11) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `is_chef` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `equipe_id`, `nom`, `prenom`, `email`, `role`, `is_chef`, `created_at`) VALUES
(1, 9, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'developpeur', 1, '2025-02-11 18:46:06'),
(2, 9, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'developpeur', 0, '2025-02-11 18:46:06'),
(3, 9, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'technicien_reseau', 0, '2025-02-11 18:46:06'),
(4, 9, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'marketeur', 0, '2025-02-11 18:46:06'),
(5, 10, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'developpeur', 1, '2025-02-11 18:47:51'),
(6, 10, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'developpeur', 0, '2025-02-11 18:47:51'),
(7, 10, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'technicien_reseau', 0, '2025-02-11 18:47:51'),
(8, 10, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'marketeur', 0, '2025-02-11 18:47:51'),
(9, 11, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'developpeur', 1, '2025-02-11 18:51:07'),
(10, 11, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'developpeur', 0, '2025-02-11 18:51:07'),
(11, 11, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'technicien_reseau', 0, '2025-02-11 18:51:07'),
(12, 11, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'marketeur', 0, '2025-02-11 18:51:07'),
(13, 12, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'developpeur', 1, '2025-02-11 18:54:40'),
(14, 12, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'developpeur', 0, '2025-02-11 18:54:40'),
(15, 12, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'technicien_reseau', 0, '2025-02-11 18:54:40'),
(16, 12, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'marketeur', 0, '2025-02-11 18:54:40'),
(17, 13, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'developpeur', 1, '2025-02-11 18:57:24'),
(18, 13, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'developpeur', 0, '2025-02-11 18:57:24'),
(19, 13, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'technicien_reseau', 0, '2025-02-11 18:57:24'),
(20, 13, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'marketeur', 0, '2025-02-11 18:57:24'),
(21, 14, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'developpeur', 1, '2025-02-11 19:12:13'),
(22, 14, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'developpeur', 0, '2025-02-11 19:12:13'),
(23, 14, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'technicien_reseau', 0, '2025-02-11 19:12:13'),
(24, 14, 'jacques', 'boussengu', 'jacquesboussengui@gmail.com', 'marketeur', 0, '2025-02-11 19:12:13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipe_id` (`equipe_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `equipes`
--
ALTER TABLE `equipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `membres`
--
ALTER TABLE `membres`
  ADD CONSTRAINT `membres_ibfk_1` FOREIGN KEY (`equipe_id`) REFERENCES `equipes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
