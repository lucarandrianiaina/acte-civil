-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 30 août 2024 à 14:54
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
-- Base de données : `acte_civil`
--

-- --------------------------------------------------------

--
-- Structure de la table `dece`
--

CREATE TABLE `dece` (
  `id_d` int(11) NOT NULL,
  `date_d` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `dece`
--

INSERT INTO `dece` (`id_d`, `date_d`) VALUES
(3, '2024-08-08'),
(4, '2024-08-09'),
(2, '2024-08-08'),
(5, '2024-08-08');

-- --------------------------------------------------------

--
-- Structure de la table `divorce`
--

CREATE TABLE `divorce` (
  `id_div` int(11) NOT NULL,
  `id_div_m` int(11) NOT NULL,
  `date_div` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `divorce`
--

INSERT INTO `divorce` (`id_div`, `id_div_m`, `date_div`) VALUES
(1, 1, '2024-08-14'),
(2, 1, '2024-08-14'),
(3, 3, '2024-08-16');

-- --------------------------------------------------------

--
-- Structure de la table `femme`
--

CREATE TABLE `femme` (
  `id_f` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `femme`
--

INSERT INTO `femme` (`id_f`) VALUES
(3),
(5),
(7);

-- --------------------------------------------------------

--
-- Structure de la table `homme`
--

CREATE TABLE `homme` (
  `id_h` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `homme`
--

INSERT INTO `homme` (`id_h`) VALUES
(1),
(2),
(4),
(6);

-- --------------------------------------------------------

--
-- Structure de la table `marriage`
--

CREATE TABLE `marriage` (
  `id_m` int(11) NOT NULL,
  `id_h_m` int(11) NOT NULL,
  `id_f_m` int(11) NOT NULL,
  `date_m` date NOT NULL,
  `divorce` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `marriage`
--

INSERT INTO `marriage` (`id_m`, `id_h_m`, `id_f_m`, `date_m`, `divorce`) VALUES
(1, 1, 5, '2024-08-08', 0),
(2, 6, 7, '2024-08-14', 0),
(3, 6, 7, '2024-08-07', 0),
(4, 1, 7, '2024-08-23', 0);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date_nais` date NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `nom_pere` varchar(255) NOT NULL,
  `nom_mere` varchar(255) NOT NULL,
  `dece` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `nom`, `date_nais`, `sexe`, `nom_pere`, `nom_mere`, `dece`) VALUES
(1, 'ramefiarison', '2024-08-01', 'male', 'rakotoarison', 'marie angel', 0),
(2, 'tafita', '2024-08-02', 'male', 'rakotoarinarivo', 'ravelomalala', 1),
(3, 'abdoul aziz', '2024-08-05', 'femele', 'rakotondrazaka', 'ravelomarie', 1),
(4, 'fenosoa', '2024-08-03', 'male', 'rakotovao', 'rasoa', 1),
(5, 'rakotondrazanany', '2024-08-02', 'femele', 'rakotoarison', 'ravelomalala', 1),
(6, 'randiambelo marie', '2024-08-02', 'male', 'randriambelo jean', 'marie', 0),
(7, 'avotra', '2024-08-08', 'femele', 'randriambelo jean', 'rasoa', 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_u` int(11) NOT NULL,
  `nom_u` varchar(255) NOT NULL,
  `mail_u` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_u`, `nom_u`, `mail_u`, `password`) VALUES
(1, 'tafita', 'qwerty@gmail.com', '$2y$10$RB7tcRk.m7Zb6BHK81FwL.8bDtJKXn787z9NUzA2yXX8PDPSAw2be'),
(2, 'luca', 'lucarandrianiaina95@gmail.com', '$2y$10$e/iHwyDFN9AGJR1Msi3Piu.IMA2C57jDWroVK0wKU0i/PW4Be65L6'),
(3, 'luca', 'lucarandrianiaina95@gmail.com', '$2y$10$n.E1v9mL0aBGSorxCsck9uPBkhheSlR2oTT8PDdT45yhEnkQ4KNcu'),
(4, 'qwerty', 'qwerty@gmail.com', '$2y$10$8V78b1KjJQ6rE3loR8486uGizE7dTRaCF.OwapNfzLBPhEkU/nr5.'),
(5, 'qwerty', 'qwerty@gmail.com', '$2y$10$3mqR09klx/TX0Z3N/fz28OuVJBRRdMb4u7iBvwj04TnlJYv.SkiOi');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `dece`
--
ALTER TABLE `dece`
  ADD KEY `id_d` (`id_d`);

--
-- Index pour la table `divorce`
--
ALTER TABLE `divorce`
  ADD PRIMARY KEY (`id_div`),
  ADD KEY `id_div_m` (`id_div_m`);

--
-- Index pour la table `femme`
--
ALTER TABLE `femme`
  ADD KEY `id_f` (`id_f`);

--
-- Index pour la table `homme`
--
ALTER TABLE `homme`
  ADD KEY `id_h` (`id_h`);

--
-- Index pour la table `marriage`
--
ALTER TABLE `marriage`
  ADD PRIMARY KEY (`id_m`),
  ADD KEY `id_h_m` (`id_h_m`,`id_f_m`),
  ADD KEY `id_f_m` (`id_f_m`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `divorce`
--
ALTER TABLE `divorce`
  MODIFY `id_div` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `marriage`
--
ALTER TABLE `marriage`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `dece`
--
ALTER TABLE `dece`
  ADD CONSTRAINT `dece_ibfk_1` FOREIGN KEY (`id_d`) REFERENCES `personne` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `divorce`
--
ALTER TABLE `divorce`
  ADD CONSTRAINT `divorce_ibfk_1` FOREIGN KEY (`id_div_m`) REFERENCES `marriage` (`id_m`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `femme`
--
ALTER TABLE `femme`
  ADD CONSTRAINT `femme_ibfk_1` FOREIGN KEY (`id_f`) REFERENCES `personne` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `homme`
--
ALTER TABLE `homme`
  ADD CONSTRAINT `homme_ibfk_1` FOREIGN KEY (`id_h`) REFERENCES `personne` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `marriage`
--
ALTER TABLE `marriage`
  ADD CONSTRAINT `marriage_ibfk_1` FOREIGN KEY (`id_h_m`) REFERENCES `homme` (`id_h`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marriage_ibfk_2` FOREIGN KEY (`id_f_m`) REFERENCES `femme` (`id_f`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
