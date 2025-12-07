-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 07 déc. 2025 à 19:57
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
-- Base de données : `mon_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `categorie` varchar(100) DEFAULT NULL,
  `auteur` varchar(100) DEFAULT NULL,
  `date_publication` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `categorie`, `auteur`, `date_publication`) VALUES
(1, 'La gastronomie marocaine : un patrimoine vivant', 'La cuisine marocaine est un mélange unique de saveurs andalouses, berbères et orientales. Le couscous, le tajine et la pastilla témoignent d\'une richesse culinaire transmise de génération en génération.', 'Culture', 'Rachid El Mekkaoui', '2025-01-15'),
(2, 'Le thé à la menthe : plus qu’une boisson', 'Au Maroc, le thé à la menthe représente l\'hospitalité et le partage. Il accompagne les discussions familiales, les réunions entre amis et même les négociations commerciales.', 'Traditions', 'Amina Benhaddou', '2025-02-01'),
(3, 'Les merveilles cachées de Chefchaouen', 'Chefchaouen, la ville bleue, est connue pour ses ruelles peintes d\'un bleu éclatant. Nichée dans les montagnes du Rif, elle attire chaque année des visiteurs du monde entier.', 'Voyage', 'Youssef El Idrissi', '2025-02-10');

-- --------------------------------------------------------

--
-- Structure de la table `t_billet`
--

CREATE TABLE `t_billet` (
  `BIL_ID` int(11) NOT NULL,
  `BIL_DATE` datetime NOT NULL,
  `BIL_TITRE` varchar(255) NOT NULL,
  `BIL_CONTENU` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `t_billet`
--

INSERT INTO `t_billet` (`BIL_ID`, `BIL_DATE`, `BIL_TITRE`, `BIL_CONTENU`) VALUES
(1, '2025-11-21 09:50:16', 'Premier billet', 'Bonjour monde ! Ceci est le premier billet sur\r\nmon blog.'),
(2, '2025-11-21 09:50:17', 'Au travail', 'Il faut enrichir ce blog dès maintenant.'),
(3, '2025-12-04 21:11:42', 'La magie des médinas marocaines', 'Les médinas du Maroc racontent des siècles d’histoire... entre artisanat, traditions et poésie du quotidien.'),
(4, '2025-12-04 21:11:42', 'L’évolution de la littérature marocaine moderne', 'La littérature marocaine ne cesse de se transformer, portée par de nouveaux écrivains et des thèmes actuels.'),
(5, '2025-12-04 21:11:42', 'Pourquoi lire plus en 2025 ?', 'Dans un monde numérique rapide, la lecture reste une échappatoire essentielle pour nourrir l’esprit.'),
(6, '2025-12-04 21:11:42', 'La poésie marocaine : un patrimoine vivant', 'La poésie marocaine continue de vibrer au travers de ses festivals, ses poètes et sa transmission orale.');

-- --------------------------------------------------------

--
-- Structure de la table `t_commentaire`
--

CREATE TABLE `t_commentaire` (
  `COM_ID` int(11) NOT NULL,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTEUR` varchar(100) NOT NULL,
  `COM_CONTENU` text NOT NULL,
  `BIL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `t_commentaire`
--

INSERT INTO `t_commentaire` (`COM_ID`, `COM_DATE`, `COM_AUTEUR`, `COM_CONTENU`, `BIL_ID`) VALUES
(1, '2025-11-21 09:50:17', 'A. Nonyme', 'Bravo pour ce début', 1),
(2, '2025-11-21 09:50:17', 'Moi', 'Merci ! Je vais continuer sur ma lancée', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t_billet`
--
ALTER TABLE `t_billet`
  ADD PRIMARY KEY (`BIL_ID`);

--
-- Index pour la table `t_commentaire`
--
ALTER TABLE `t_commentaire`
  ADD PRIMARY KEY (`COM_ID`),
  ADD KEY `BIL_ID` (`BIL_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `t_billet`
--
ALTER TABLE `t_billet`
  MODIFY `BIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `t_commentaire`
--
ALTER TABLE `t_commentaire`
  MODIFY `COM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_commentaire`
--
ALTER TABLE `t_commentaire`
  ADD CONSTRAINT `t_commentaire_ibfk_1` FOREIGN KEY (`BIL_ID`) REFERENCES `t_billet` (`BIL_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
