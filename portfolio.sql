-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 11 juin 2018 à 19:18
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact_information`
--

CREATE TABLE `contact_information` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pictures_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `locality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `education_training`
--

CREATE TABLE `education_training` (
  `id` int(11) NOT NULL,
  `institute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subjects_studied` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_start` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `education_training`
--

INSERT INTO `education_training` (`id`, `institute`, `subjects_studied`, `date_start`, `end_date`, `user_id`) VALUES
(1, 'Technobel', 'Web Developpement', '2018-01-15 00:00:00', '2018-07-17 00:00:00', 3),
(2, ':lfjgdlfj', 'dskjhgsk', '2013-01-01 00:00:00', '2013-01-01 00:00:00', 4);

-- --------------------------------------------------------

--
-- Structure de la table `fosusers`
--

CREATE TABLE `fosusers` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `lacality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `fosusers`
--

INSERT INTO `fosusers` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `name`, `phone`, `picture`, `street`, `number`, `lacality`, `postal`, `country`) VALUES
(3, 'Lionel', 'lionel', 'dabee.lionel@gmail.com', 'dabee.lionel@gmail.com', 1, NULL, '$2y$13$yxw5bveIWt/wmKsjqRl2Sul1gRDuI09MeR7wUkNgBySAg0O3UglFm', '2018-06-11 17:44:36', NULL, NULL, 'a:0:{}', 'Dabee', '0473286699', '', 'rue du Roptay', 8, 'Bievre', '5555', 'Belgique'),
(4, 'test1', 'test1', 'test@gmail.com', 'test@gmail.com', 1, NULL, '$2y$13$MIqYX5ItuNmKKItuQvLem.XF620/2.WQ/3PUPy.JBd4.V.XEbkE26', '2018-06-11 18:58:16', NULL, NULL, 'a:0:{}', 'nametest', '45747647', NULL, 'fdghdsfh', 4, 'kjgjhgu', '54645', 'kjgkjgiyu');

-- --------------------------------------------------------

--
-- Structure de la table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int(11) NOT NULL,
  `entitled` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descriptive` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `hobbies`
--

INSERT INTO `hobbies` (`id`, `entitled`, `descriptive`, `user_id`) VALUES
(1, 'Pratique du piano', 'blablabla', 3);

-- --------------------------------------------------------

--
-- Structure de la table `linguistic_knowledge`
--

CREATE TABLE `linguistic_knowledge` (
  `id` int(11) NOT NULL,
  `languages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `linguistic_knowledge`
--

INSERT INTO `linguistic_knowledge` (`id`, `languages`, `level`, `user_id`) VALUES
(1, 'Anglais', 'Moyen', 3);

-- --------------------------------------------------------

--
-- Structure de la table `professional_activities`
--

CREATE TABLE `professional_activities` (
  `id` int(11) NOT NULL,
  `profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `employer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_entry` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `tasks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `professional_activities`
--

INSERT INTO `professional_activities` (`id`, `profession`, `employer`, `date_of_entry`, `end_date`, `tasks`, `user_id`) VALUES
(2, 'Manager', 'Sun7 Presse', '2014-11-20 00:00:00', '2017-04-15 00:00:00', 'blabla', 3);

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `entitled` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descriptive` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact_information`
--
ALTER TABLE `contact_information`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `education_training`
--
ALTER TABLE `education_training`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5D06F406A76ED395` (`user_id`);

--
-- Index pour la table `fosusers`
--
ALTER TABLE `fosusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_514F67C292FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_514F67C2A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_514F67C2C05FB297` (`confirmation_token`);

--
-- Index pour la table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_38CA341DA76ED395` (`user_id`);

--
-- Index pour la table `linguistic_knowledge`
--
ALTER TABLE `linguistic_knowledge`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DA555DDFA76ED395` (`user_id`);

--
-- Index pour la table `professional_activities`
--
ALTER TABLE `professional_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_829CD75CA76ED395` (`user_id`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact_information`
--
ALTER TABLE `contact_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `education_training`
--
ALTER TABLE `education_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `fosusers`
--
ALTER TABLE `fosusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `linguistic_knowledge`
--
ALTER TABLE `linguistic_knowledge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `professional_activities`
--
ALTER TABLE `professional_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `education_training`
--
ALTER TABLE `education_training`
  ADD CONSTRAINT `FK_5D06F406A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fosusers` (`id`);

--
-- Contraintes pour la table `hobbies`
--
ALTER TABLE `hobbies`
  ADD CONSTRAINT `FK_38CA341DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `fosusers` (`id`);

--
-- Contraintes pour la table `linguistic_knowledge`
--
ALTER TABLE `linguistic_knowledge`
  ADD CONSTRAINT `FK_DA555DDFA76ED395` FOREIGN KEY (`user_id`) REFERENCES `fosusers` (`id`);

--
-- Contraintes pour la table `professional_activities`
--
ALTER TABLE `professional_activities`
  ADD CONSTRAINT `FK_829CD75CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `fosusers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
