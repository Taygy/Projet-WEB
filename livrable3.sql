-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 02 avr. 2023 à 14:38
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `livrable3`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id_adresse` int(10) UNSIGNED NOT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `code_postal` varchar(5) DEFAULT NULL,
  `adresse_complete` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`id_adresse`, `ville`, `code_postal`, `adresse_complete`) VALUES
(23, 'Allemagne-en-Provence', '04500', '65 Rue de la provencale'),
(32, 'Saint-laurent du var', '06700', '80 Allée des Tonnelles'),
(36, 'Grasse', '06130', '70 Route de Pegomas'),
(40, 'Saint Laurent du Var', '06700', '50 Rue de la soie '),
(41, 'Saint Laurent du Var', '06700', '50 Rue de la soie '),
(42, 'Aubignosc', '04200', '99 Boulevard de matignon'),
(43, 'Nice', '06200', '80 emmanuelle Groot '),
(44, 'Grasse', '06130', '33 avenue des colombes'),
(45, 'Cannes', '06300', '25 Chemin des merveilles');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id_avis` int(10) UNSIGNED NOT NULL,
  `commentaire` varchar(50) DEFAULT NULL,
  `note` int(11) DEFAULT NULL,
  `id_membre` int(11) NOT NULL,
  `id_entreprise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id_avis`, `commentaire`, `note`, `id_membre`, `id_entreprise`) VALUES
(1, 'commentaire de zinzin', 8, 1, 1),
(8, 'azfazfazf', 7, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `id_competence` int(10) UNSIGNED NOT NULL,
  `competence` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id_competence`, `competence`) VALUES
(1, 'Back-end'),
(2, 'Front-end'),
(3, 'Developpement d\'application'),
(4, 'Finops'),
(5, 'Devops'),
(6, 'Excel'),
(7, 'Dev-Ops'),
(9, 'Frontend');

-- --------------------------------------------------------

--
-- Structure de la table `competences_acquises`
--

CREATE TABLE `competences_acquises` (
  `id_membre` int(11) NOT NULL,
  `id_competence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `competences_acquises`
--

INSERT INTO `competences_acquises` (`id_membre`, `id_competence`) VALUES
(4, 1),
(10, 9),
(11, 2);

-- --------------------------------------------------------

--
-- Structure de la table `competences_requises`
--

CREATE TABLE `competences_requises` (
  `id_offre` int(11) NOT NULL,
  `id_competence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `competences_requises`
--

INSERT INTO `competences_requises` (`id_offre`, `id_competence`) VALUES
(11, 1);

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

CREATE TABLE `ecole` (
  `id_ecole` int(10) UNSIGNED NOT NULL,
  `centre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ecole`
--

INSERT INTO `ecole` (`id_ecole`, `centre`) VALUES
(1, 'Nice'),
(2, 'Valbonne');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id_entreprise` int(10) UNSIGNED NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `description_entreprise` varchar(1500) DEFAULT NULL,
  `secteur` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `confiance` int(11) DEFAULT NULL,
  `nombre_employes` bigint(20) DEFAULT NULL,
  `logo` varchar(1000) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id_entreprise`, `nom`, `description_entreprise`, `secteur`, `mail`, `confiance`, `nombre_employes`, `logo`, `visible`) VALUES
(21, 'Amadeus', 'Amadeus vous connecte à l’écosystème du voyage pour permettre à votre entreprise et à vos partenaires de nouvelles opportunités de développement', 'Généraliste', 'amadeus@gmail.com', 90, 320, 'amadeus.png', 1),
(27, 'Thales', 'Thales, leader de la cybersécurité et de la protection de données Cyber Solutions Quel que soit votre domaine d’activité, votre niveau de confidentialité des données, vos exigences réglementaires', 'BTP', 'thales@gmail.com', 85, 63, 'thales.png', 1),
(28, 'Cesi ', 'Le CESI (anciennement centre des études supérieures industrielles), aussi connu sous le nom CESI École d\'ingénieurs, est l\'une des 204 écoles d\'ingénieurs françaises accréditées au 1er septembre 2020 à délivrer un diplôme d\'ingénieur', 'Informatique', 'cesi@viacesi.fr', 99, 52, 'logoce.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `etudiants_recrutes`
--

CREATE TABLE `etudiants_recrutes` (
  `id_membre` int(11) NOT NULL,
  `id_entreprise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etudie`
--

CREATE TABLE `etudie` (
  `id_membre` int(11) NOT NULL,
  `id_ecole` int(11) NOT NULL,
  `promotion` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudie`
--

INSERT INTO `etudie` (`id_membre`, `id_ecole`, `promotion`) VALUES
(4, 1, 'CPIA2'),
(8, 1, 'CPIA1'),
(10, 2, 'CPIA5'),
(11, 1, 'CPIA2');

-- --------------------------------------------------------

--
-- Structure de la table `localise_entreprise`
--

CREATE TABLE `localise_entreprise` (
  `id_entreprise` int(11) NOT NULL,
  `id_adresse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `localise_entreprise`
--

INSERT INTO `localise_entreprise` (`id_entreprise`, `id_adresse`) VALUES
(21, 23),
(27, 42),
(28, 43),
(29, 44);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(10) UNSIGNED NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `mdp_chiffre` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `etudiant` tinyint(1) DEFAULT NULL,
  `pilote` tinyint(1) DEFAULT NULL,
  `id_adresse` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `nom`, `prenom`, `mail`, `mdp_chiffre`, `admin`, `etudiant`, `pilote`, `id_adresse`) VALUES
(4, 'Cordier', 'Thomas', 'thomas.cordier@viacesi.fr', '$2y$10$aXb.Yn0MtuWa2fM8jkgBhumEToLBWdnxN7zkjfWl39q.IB2vtPaBm', 1, NULL, NULL, 32),
(8, 'Bonturi', 'Sylvain', 'sylvain.bont@viacesi.fr', '$2y$10$0QB9E/8/RTrJBaj1fNV1NusYpVLbvQVhYT2FWj4vaHdXt0oei8jra', NULL, NULL, 1, 36),
(10, 'Girod', 'Valentin', 'valentin.girod@viacesi.fr', '$2y$10$vgVU18f8aqFTyKnjMDrc8uKTpNGbEz1YP47gYkuKpAeEhVPq/yPxC', NULL, 1, NULL, 41),
(11, 'Nasri', 'Malek', 'malek.nasri@viacesi.fr', '$2y$10$C2YsYSaGzqc6pHsEA6d81OKM2qNLlISuMeZxFCTpcISrIqmMn.PYq', NULL, 1, NULL, 45);

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `id_offre` int(10) UNSIGNED NOT NULL,
  `titre` varchar(50) DEFAULT NULL,
  `duree` varchar(50) DEFAULT NULL,
  `remuneration` decimal(6,2) DEFAULT NULL,
  `description_offre` varchar(1500) DEFAULT NULL,
  `nombre_places` smallint(6) DEFAULT NULL,
  `id_entreprise` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`id_offre`, `titre`, `duree`, `remuneration`, `description_offre`, `nombre_places`, `id_entreprise`) VALUES
(11, 'Dev Back-End', '3 Semaines', '5.50', 'Ce stage est un stage qui demande des connaissance enBackEnd afin de réaliser un site web pour une nouvelle entreprise cliente chez nous..', 1, 21);

-- --------------------------------------------------------

--
-- Structure de la table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_membre` int(11) NOT NULL,
  `id_offre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `wishlist`
--

INSERT INTO `wishlist` (`id_membre`, `id_offre`) VALUES
(4, 11);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id_adresse`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id_avis`);

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id_competence`);

--
-- Index pour la table `ecole`
--
ALTER TABLE `ecole`
  ADD PRIMARY KEY (`id_ecole`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id_entreprise`);

--
-- Index pour la table `etudiants_recrutes`
--
ALTER TABLE `etudiants_recrutes`
  ADD PRIMARY KEY (`id_membre`,`id_entreprise`);

--
-- Index pour la table `etudie`
--
ALTER TABLE `etudie`
  ADD PRIMARY KEY (`id_membre`,`id_ecole`);

--
-- Index pour la table `localise_entreprise`
--
ALTER TABLE `localise_entreprise`
  ADD PRIMARY KEY (`id_entreprise`,`id_adresse`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`),
  ADD KEY `mail` (`mail`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id_offre`);

--
-- Index pour la table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_membre`,`id_offre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id_adresse` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id_avis` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `id_competence` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `ecole`
--
ALTER TABLE `ecole`
  MODIFY `id_ecole` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id_entreprise` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `id_offre` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
