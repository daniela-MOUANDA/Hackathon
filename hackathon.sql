-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 10 fév. 2025 à 05:52
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
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id_anonce` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `date_anonce` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `défis`
--

CREATE TABLE `défis` (
  `id_defi` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `date_annonce` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gagnants`
--

CREATE TABLE `gagnants` (
  `id_gagnant` int(11) NOT NULL,
  `id_equipe` int(11) DEFAULT NULL,
  `id_recompense` int(11) DEFAULT NULL,
  `date_attribution` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `juges`
--

CREATE TABLE `juges` (
  `id_juge` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `expertise` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `membres_équipe`
--

CREATE TABLE `membres_équipe` (
  `id_equipe` int(11) NOT NULL,
  `id_participant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déclencheurs `membres_équipe`
--
DELIMITER $$
CREATE TRIGGER `trg_limit_team_size` BEFORE INSERT ON `membres_équipe` FOR EACH ROW BEGIN
    DECLARE count_members INT;
    
    -- Compte le nombre de membres déjà présents dans l'équipe
    SELECT COUNT(*) INTO count_members 
      FROM Membres_Équipe 
     WHERE id_equipe = NEW.id_equipe;
     
    IF count_members >= 4 THEN
        SIGNAL SQLSTATE '45000'
            SET MESSAGE_TEXT = 'Une équipe ne peut avoir plus de 4 membres.';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `mentors`
--

CREATE TABLE `mentors` (
  `id_mentor` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `expertise` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

CREATE TABLE `participants` (
  `id_participant` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `institution` varchar(100) DEFAULT NULL,
  `role` enum('developpeur','technicien_reseau','marketeur') NOT NULL,
  `age` int(11) DEFAULT NULL CHECK (`age` >= 18),
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(100) DEFAULT NULL,
  `doc_justificatif` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rapport_impact`
--

CREATE TABLE `rapport_impact` (
  `id_rapport` int(11) NOT NULL,
  `titre_rapport` varchar(200) NOT NULL,
  `contenu_rapport` text DEFAULT NULL,
  `date_publication` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ressources`
--

CREATE TABLE `ressources` (
  `id_ressource` int(11) NOT NULL,
  `nom_ressource` varchar(100) NOT NULL,
  `lien_ressource` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `retours_expérience`
--

CREATE TABLE `retours_expérience` (
  `id_retour` int(11) NOT NULL,
  `id_participant` int(11) DEFAULT NULL,
  `commentaires` text DEFAULT NULL,
  `note` int(11) DEFAULT NULL CHECK (`note` between 1 and 5),
  `date_soumission` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `récompenses`
--

CREATE TABLE `récompenses` (
  `id_recompense` int(11) NOT NULL,
  `nom_recompense` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions_mentorat`
--

CREATE TABLE `sessions_mentorat` (
  `id_session` int(11) NOT NULL,
  `id_equipe` int(11) DEFAULT NULL,
  `id_mentor` int(11) DEFAULT NULL,
  `date_session` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `soumissions`
--

CREATE TABLE `soumissions` (
  `id_soumission` int(11) NOT NULL,
  `id_equipe` int(11) DEFAULT NULL,
  `id_defi` int(11) DEFAULT NULL,
  `description_prototype` text DEFAULT NULL,
  `lien_presentation` varchar(255) DEFAULT NULL,
  `date_soumission` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `équipes`
--

CREATE TABLE `équipes` (
  `id_equipe` int(11) NOT NULL,
  `nom_equipe` varchar(100) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `évaluations`
--

CREATE TABLE `évaluations` (
  `id_evaluation` int(11) NOT NULL,
  `id_soumission` int(11) DEFAULT NULL,
  `id_juge` int(11) DEFAULT NULL,
  `score_innovation` int(11) DEFAULT NULL CHECK (`score_innovation` between 0 and 30),
  `score_utilite` int(11) DEFAULT NULL CHECK (`score_utilite` between 0 and 25),
  `score_presentation` int(11) DEFAULT NULL CHECK (`score_presentation` between 0 and 20),
  `score_collaboration` int(11) DEFAULT NULL CHECK (`score_collaboration` between 0 and 15),
  `score_prototype` int(11) DEFAULT NULL CHECK (`score_prototype` between 0 and 10),
  `score_total` int(11) DEFAULT NULL,
  `commentaires` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id_anonce`);

--
-- Index pour la table `défis`
--
ALTER TABLE `défis`
  ADD PRIMARY KEY (`id_defi`);

--
-- Index pour la table `gagnants`
--
ALTER TABLE `gagnants`
  ADD PRIMARY KEY (`id_gagnant`),
  ADD KEY `id_equipe` (`id_equipe`),
  ADD KEY `id_recompense` (`id_recompense`);

--
-- Index pour la table `juges`
--
ALTER TABLE `juges`
  ADD PRIMARY KEY (`id_juge`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `membres_équipe`
--
ALTER TABLE `membres_équipe`
  ADD PRIMARY KEY (`id_equipe`,`id_participant`),
  ADD UNIQUE KEY `id_participant` (`id_participant`);

--
-- Index pour la table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id_mentor`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id_participant`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `rapport_impact`
--
ALTER TABLE `rapport_impact`
  ADD PRIMARY KEY (`id_rapport`);

--
-- Index pour la table `ressources`
--
ALTER TABLE `ressources`
  ADD PRIMARY KEY (`id_ressource`);

--
-- Index pour la table `retours_expérience`
--
ALTER TABLE `retours_expérience`
  ADD PRIMARY KEY (`id_retour`),
  ADD KEY `id_participant` (`id_participant`);

--
-- Index pour la table `récompenses`
--
ALTER TABLE `récompenses`
  ADD PRIMARY KEY (`id_recompense`);

--
-- Index pour la table `sessions_mentorat`
--
ALTER TABLE `sessions_mentorat`
  ADD PRIMARY KEY (`id_session`),
  ADD KEY `id_equipe` (`id_equipe`),
  ADD KEY `id_mentor` (`id_mentor`);

--
-- Index pour la table `soumissions`
--
ALTER TABLE `soumissions`
  ADD PRIMARY KEY (`id_soumission`),
  ADD KEY `id_equipe` (`id_equipe`),
  ADD KEY `id_defi` (`id_defi`);

--
-- Index pour la table `équipes`
--
ALTER TABLE `équipes`
  ADD PRIMARY KEY (`id_equipe`);

--
-- Index pour la table `évaluations`
--
ALTER TABLE `évaluations`
  ADD PRIMARY KEY (`id_evaluation`),
  ADD KEY `id_soumission` (`id_soumission`),
  ADD KEY `id_juge` (`id_juge`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id_anonce` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `défis`
--
ALTER TABLE `défis`
  MODIFY `id_defi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gagnants`
--
ALTER TABLE `gagnants`
  MODIFY `id_gagnant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `juges`
--
ALTER TABLE `juges`
  MODIFY `id_juge` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id_mentor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `participants`
--
ALTER TABLE `participants`
  MODIFY `id_participant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rapport_impact`
--
ALTER TABLE `rapport_impact`
  MODIFY `id_rapport` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ressources`
--
ALTER TABLE `ressources`
  MODIFY `id_ressource` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `retours_expérience`
--
ALTER TABLE `retours_expérience`
  MODIFY `id_retour` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `récompenses`
--
ALTER TABLE `récompenses`
  MODIFY `id_recompense` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sessions_mentorat`
--
ALTER TABLE `sessions_mentorat`
  MODIFY `id_session` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `soumissions`
--
ALTER TABLE `soumissions`
  MODIFY `id_soumission` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `équipes`
--
ALTER TABLE `équipes`
  MODIFY `id_equipe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `évaluations`
--
ALTER TABLE `évaluations`
  MODIFY `id_evaluation` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `gagnants`
--
ALTER TABLE `gagnants`
  ADD CONSTRAINT `gagnants_ibfk_1` FOREIGN KEY (`id_equipe`) REFERENCES `équipes` (`id_equipe`),
  ADD CONSTRAINT `gagnants_ibfk_2` FOREIGN KEY (`id_recompense`) REFERENCES `récompenses` (`id_recompense`);

--
-- Contraintes pour la table `membres_équipe`
--
ALTER TABLE `membres_équipe`
  ADD CONSTRAINT `membres_équipe_ibfk_1` FOREIGN KEY (`id_equipe`) REFERENCES `équipes` (`id_equipe`),
  ADD CONSTRAINT `membres_équipe_ibfk_2` FOREIGN KEY (`id_participant`) REFERENCES `participants` (`id_participant`);

--
-- Contraintes pour la table `retours_expérience`
--
ALTER TABLE `retours_expérience`
  ADD CONSTRAINT `retours_expérience_ibfk_1` FOREIGN KEY (`id_participant`) REFERENCES `participants` (`id_participant`);

--
-- Contraintes pour la table `sessions_mentorat`
--
ALTER TABLE `sessions_mentorat`
  ADD CONSTRAINT `sessions_mentorat_ibfk_1` FOREIGN KEY (`id_equipe`) REFERENCES `équipes` (`id_equipe`),
  ADD CONSTRAINT `sessions_mentorat_ibfk_2` FOREIGN KEY (`id_mentor`) REFERENCES `mentors` (`id_mentor`);

--
-- Contraintes pour la table `soumissions`
--
ALTER TABLE `soumissions`
  ADD CONSTRAINT `soumissions_ibfk_1` FOREIGN KEY (`id_equipe`) REFERENCES `équipes` (`id_equipe`),
  ADD CONSTRAINT `soumissions_ibfk_2` FOREIGN KEY (`id_defi`) REFERENCES `défis` (`id_defi`);

--
-- Contraintes pour la table `évaluations`
--
ALTER TABLE `évaluations`
  ADD CONSTRAINT `évaluations_ibfk_1` FOREIGN KEY (`id_soumission`) REFERENCES `soumissions` (`id_soumission`),
  ADD CONSTRAINT `évaluations_ibfk_2` FOREIGN KEY (`id_juge`) REFERENCES `juges` (`id_juge`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
