-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 02 mai 2023 à 16:42
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `congobid_rdc`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--

CREATE TABLE `administrateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `identification_fiscale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poste` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interne` int(11) NOT NULL DEFAULT '1',
  `online` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `administrateur_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `administrateurs`
--

INSERT INTO `administrateurs` (`id`, `identification_fiscale`, `poste`, `interne`, `online`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `administrateur_id`) VALUES
(6, 'Sims007', 'Chef de service', 1, '0', '2023-04-27 11:48:19', '2023-04-27 11:48:19', NULL, NULL, NULL, 3, 97, 96),
(7, 'bidens08989', 'Chef de service adjoint', 1, '0', '2023-04-28 07:34:38', '2023-04-28 10:36:26', NULL, 96, NULL, 3, 98, 96);

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promouvoir` int(11) NOT NULL DEFAULT '0',
  `code_produit` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `prix_precedent` float DEFAULT NULL,
  `prix_marche` int(11) NOT NULL,
  `prix_min` int(11) DEFAULT NULL,
  `prix_max` int(11) DEFAULT NULL,
  `cout_livraison` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `infos_livraison` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `limite_enchere_auto` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_enchere_auto` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantite` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `salon` int(11) DEFAULT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `paquet_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `marque`, `promouvoir`, `code_produit`, `description`, `prix`, `prix_precedent`, `prix_marche`, `prix_min`, `prix_max`, `cout_livraison`, `infos_livraison`, `meta_description`, `meta_keywords`, `limite_enchere_auto`, `credit_enchere_auto`, `quantite`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `salon`, `categorie_id`, `paquet_id`) VALUES
(53, 'Or', 'MCK', 1, '2962804202316430615', 'Or pur 40 kara', 4000, NULL, 20000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2023-04-28 14:43:06', '2023-05-02 13:40:05', NULL, NULL, NULL, 3, 96, NULL, 2, 5),
(54, 'Iphone', 'Apple', 0, '196020520231244042', 'test', 200, NULL, 1000, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, '1', '2023-05-02 11:44:04', '2023-05-02 13:16:02', NULL, NULL, NULL, 3, 96, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `bideurs`
--

CREATE TABLE `bideurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `balance` int(11) NOT NULL,
  `nontransferable` int(11) NOT NULL DEFAULT '0',
  `bonus` int(11) NOT NULL DEFAULT '0',
  `roi` int(11) NOT NULL DEFAULT '0',
  `foudre` int(11) NOT NULL DEFAULT '0',
  `bouclier` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `paquet_id` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bideurs`
--

INSERT INTO `bideurs` (`id`, `balance`, `nontransferable`, `bonus`, `roi`, `foudre`, `bouclier`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `paquet_id`, `admin_id`) VALUES
(26, 40, 0, 1, 0, 0, 0, '2022-07-26 05:15:16', '2022-09-02 00:35:50', NULL, NULL, NULL, 3, 40, 1, NULL),
(27, 48, 0, 0, 0, 0, 0, '2022-07-26 05:20:15', '2022-07-27 16:36:28', NULL, NULL, NULL, 3, 41, 1, NULL),
(28, 60, 0, 0, 0, 0, 0, '2022-07-26 05:32:12', '2022-07-26 05:46:09', NULL, NULL, NULL, 3, 42, 1, NULL),
(29, 160, 0, 3, 0, 0, 0, '2022-07-26 13:53:39', '2022-07-28 01:24:17', NULL, NULL, NULL, 3, 43, 1, NULL),
(30, 2930, 0, 2, 0, 0, 0, '2022-07-26 14:08:38', '2022-07-26 16:22:01', NULL, NULL, NULL, 3, 44, 1, NULL),
(31, 750, 0, 0, 0, 0, 0, '2022-08-10 17:51:47', '2022-08-12 03:21:42', NULL, NULL, NULL, 3, 52, 1, 40),
(32, 40, 0, 0, 0, 0, 0, '2022-08-11 23:48:24', '2022-08-11 23:58:20', NULL, NULL, NULL, 3, 53, 1, 40),
(33, 136305, 0, 24, 0, 0, 0, '2022-08-29 14:36:57', '2022-09-29 04:25:42', NULL, NULL, NULL, 3, 54, 1, NULL),
(34, 75, 0, 0, 0, 0, 0, '2022-08-30 22:55:21', '2022-09-01 04:52:44', NULL, NULL, NULL, 3, 55, 1, NULL),
(35, 40, 0, 0, 0, 0, 0, '2022-08-31 05:14:27', '2022-08-31 19:17:00', NULL, NULL, NULL, 3, 56, 1, 40),
(36, 81, 0, 1, 0, 0, 0, '2022-08-31 23:48:02', '2022-09-01 04:58:55', NULL, NULL, NULL, 3, 57, 1, NULL),
(37, 18, 0, 6, 0, 0, 0, '2022-08-31 23:56:41', '2022-09-16 21:50:58', NULL, NULL, NULL, 3, 58, 1, NULL),
(38, 60, 0, 1, 0, 0, 0, '2022-09-01 00:01:46', '2022-09-01 05:12:48', NULL, NULL, NULL, 3, 59, 1, NULL),
(39, 40, 0, 0, 0, 0, 0, '2022-09-08 17:32:42', '2022-09-08 17:32:42', NULL, NULL, NULL, 3, 60, 1, NULL),
(40, 270, 0, 0, 0, 0, 0, '2022-09-13 22:20:55', '2022-09-13 22:33:29', NULL, NULL, NULL, 3, 61, 1, NULL),
(41, 300, 0, 0, 0, 0, 0, '2022-09-14 22:13:20', '2022-09-14 22:16:43', NULL, NULL, NULL, 3, 62, 1, NULL),
(42, 0, 0, 1, 0, 0, 0, '2022-09-14 22:56:13', '2022-09-14 23:17:30', NULL, NULL, NULL, 3, 63, 1, NULL),
(43, 30, 0, 2, 0, 0, 0, '2022-09-17 11:44:31', '2022-09-17 16:53:14', NULL, NULL, NULL, 3, 64, 1, NULL),
(44, 17, 0, 0, 0, 0, 0, '2022-09-19 19:28:23', '2022-09-19 20:30:59', NULL, NULL, NULL, 3, 65, 1, NULL),
(45, 90, 0, 5, 0, 0, 0, '2022-09-20 20:56:00', '2022-09-20 23:36:54', NULL, NULL, NULL, 3, 66, 1, NULL),
(46, 70, 0, 1, 0, 0, 0, '2022-09-25 23:17:40', '2022-09-25 23:18:30', NULL, NULL, NULL, 3, 67, 1, NULL),
(47, 270, 0, 0, 0, 0, 0, '2022-09-28 22:18:36', '2022-09-28 22:22:28', NULL, NULL, NULL, 3, 68, 1, NULL),
(48, 50, 0, 1, 0, 0, 0, '2022-09-28 22:28:42', '2022-09-28 22:33:33', NULL, NULL, NULL, 3, 69, 1, NULL),
(49, 3774, 0, 10, 0, 0, 0, '2022-09-28 22:47:30', '2022-10-02 19:48:25', NULL, NULL, NULL, 3, 70, 1, NULL),
(50, 412, 0, 3, 0, 0, 0, '2022-09-28 22:48:24', '2022-09-28 23:29:25', NULL, NULL, NULL, 3, 71, 1, NULL),
(51, 430, 0, 2, 0, 0, 0, '2022-09-28 22:48:52', '2022-09-28 23:28:42', NULL, NULL, NULL, 3, 72, 1, NULL),
(52, 150, 0, 4, 0, 0, 0, '2022-09-29 11:32:13', '2022-09-29 17:26:42', NULL, NULL, NULL, 3, 73, 1, NULL),
(53, 292, 0, 17, 0, 0, 0, '2022-09-29 14:23:22', '2022-09-29 17:18:38', NULL, NULL, NULL, 3, 74, 1, NULL),
(54, 250, 0, 1, 0, 0, 0, '2022-09-30 21:00:15', '2022-09-30 22:05:26', NULL, NULL, NULL, 3, 75, 1, NULL),
(55, 170, 0, 2, 0, 0, 0, '2022-09-30 23:01:48', '2022-09-30 23:22:46', NULL, NULL, NULL, 3, 76, 1, NULL),
(56, 0, 0, 2, 0, 0, 0, '2022-10-04 14:25:27', '2022-10-04 15:12:18', NULL, NULL, NULL, 3, 77, 1, NULL),
(57, 138, 0, 9, 0, 0, 0, '2022-10-04 14:33:19', '2022-12-13 16:44:46', NULL, NULL, NULL, 3, 78, 1, NULL),
(58, 470, 0, 2, 0, 0, 0, '2022-10-04 15:01:58', '2022-10-04 15:41:56', NULL, NULL, NULL, 3, 79, 1, NULL),
(59, 80, 0, 2, 0, 0, 0, '2022-10-05 14:42:24', '2022-10-05 15:13:00', NULL, NULL, NULL, 3, 80, 1, NULL),
(60, 148, 0, 0, 0, 0, 0, '2022-10-06 18:16:30', '2022-10-07 00:03:33', NULL, NULL, NULL, 3, 81, 1, NULL),
(61, 16808, 0, 2, 0, 0, 0, '2022-10-07 17:53:34', '2022-10-08 02:09:36', NULL, NULL, NULL, 3, 82, 1, NULL),
(62, 463, 0, 1, 0, 0, 0, '2022-10-07 19:41:11', '2022-10-20 23:27:05', NULL, NULL, NULL, 3, 83, 1, NULL),
(63, 70, 0, 0, 0, 0, 0, '2022-10-07 19:50:18', '2022-10-07 20:29:42', NULL, NULL, NULL, 3, 84, 1, NULL),
(64, 275, 0, 47, 0, 0, 0, '2022-10-08 20:14:37', '2022-12-16 13:00:31', NULL, NULL, NULL, 3, 85, 1, NULL),
(65, 40, 0, 0, 0, 0, 0, '2022-10-12 13:17:55', '2023-04-28 11:09:08', NULL, NULL, NULL, 2, 86, 1, 96),
(66, 40, 0, 0, 0, 0, 0, '2022-10-12 15:03:11', '2023-04-28 11:05:41', NULL, NULL, NULL, 3, 87, 1, 96),
(67, 60, 0, 2, 0, 0, 0, '2022-10-13 14:01:45', '2022-10-13 14:27:30', NULL, NULL, NULL, 3, 88, 1, NULL),
(68, 90, 0, 4, 0, 0, 0, '2022-10-14 19:03:30', '2022-10-14 19:25:29', NULL, NULL, NULL, 3, 89, 1, NULL),
(69, 1480, 0, 0, 0, 0, 0, '2022-10-20 23:21:21', '2022-10-21 09:48:52', NULL, NULL, NULL, 3, 90, 1, NULL),
(70, 1480, 0, 0, 0, 0, 0, '2022-10-20 23:24:42', '2022-10-21 09:49:34', NULL, NULL, NULL, 3, 91, 1, NULL),
(71, 30, 0, 1, 0, 0, 0, '2022-12-05 15:17:55', '2022-12-05 15:18:12', NULL, NULL, NULL, 3, 92, 1, NULL),
(72, 30, 0, 1, 0, 0, 0, '2022-12-09 15:09:32', '2022-12-09 15:09:45', NULL, NULL, NULL, 3, 93, 1, NULL),
(73, 30, 0, 4, 0, 0, 0, '2022-12-13 16:04:11', '2022-12-13 16:44:36', NULL, NULL, NULL, 3, 94, 1, NULL),
(74, 30, 0, 1, 0, 0, 0, '2022-12-13 16:42:25', '2022-12-13 16:44:09', NULL, NULL, NULL, 3, 95, 1, NULL),
(75, 40, 0, 0, 0, 0, 0, '2023-04-28 09:51:39', '2023-04-28 11:05:11', NULL, 96, NULL, 3, 99, 1, 96);

-- --------------------------------------------------------

--
-- Structure de la table `bids`
--

CREATE TABLE `bids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantite` int(11) NOT NULL,
  `valeur` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bid_statut_id` bigint(20) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bids`
--

INSERT INTO `bids` (`id`, `quantite`, `valeur`, `bid_statut_id`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(3, 10, '1', 1, '2022-03-09 21:28:45', '2022-08-11 00:36:47', NULL, 40, NULL, 3, 1),
(4, 80, '5', 1, '2022-03-09 21:39:42', '2022-03-09 21:39:42', NULL, NULL, NULL, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `bid_statuts`
--

CREATE TABLE `bid_statuts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bid_statuts`
--

INSERT INTO `bid_statuts` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'Normal', '2023-05-02 15:37:36', NULL),
(2, 'Non-transferable', '2023-05-02 15:38:58', NULL),
(3, 'Bonus', '2023-05-02 15:38:58', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `boucliers`
--

CREATE TABLE `boucliers` (
  `id` int(11) NOT NULL,
  `paquet_id` int(11) NOT NULL,
  `benefice` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `bid_prix` int(11) NOT NULL,
  `temps_blocage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `boucliers`
--

INSERT INTO `boucliers` (`id`, `paquet_id`, `benefice`, `prix`, `bid_prix`, `temps_blocage`) VALUES
(1, 1, 8, 30, 60, 8),
(2, 2, 10, 45, 90, 10),
(3, 3, 8, 40, 80, 10),
(4, 4, 10, 45, 90, 8),
(5, 5, 15, 50, 100, 15),
(6, 6, 15, 70, 140, 15);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `libelle`, `categorie_id`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'Informatique', 1, '2022-02-28 22:39:13', '2022-08-11 00:14:41', '2022-03-09 19:19:35', 1, 1, 3, 40),
(2, 'Outils', 1, '2022-02-28 22:42:01', '2023-05-02 13:52:02', '2022-03-10 00:08:46', 1, 1, 3, 96),
(5, 'Divers', 1, '2022-03-09 23:32:35', '2022-08-11 00:15:10', NULL, NULL, NULL, 3, 40),
(6, 'couture', 2, '2022-09-16 21:17:44', '2023-05-02 13:59:53', NULL, NULL, NULL, 3, 96),
(9, 'informatique', 3, '2022-09-16 21:23:09', '2023-05-02 14:02:50', '2023-05-02 14:02:50', 96, 96, 2, 40);

-- --------------------------------------------------------

--
-- Structure de la table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `destinateur_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `chat_encheres`
--

CREATE TABLE `chat_encheres` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text,
  `libelle` text NOT NULL,
  `enchere_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chat_encheres`
--

INSERT INTO `chat_encheres` (`id`, `user_id`, `content`, `libelle`, `enchere_id`, `updated_at`, `created_at`) VALUES
(57, 85, NULL, 'Salut ', 32, '2022-12-14 17:33:38', '2022-12-14 17:33:38');

-- --------------------------------------------------------

--
-- Structure de la table `clicks`
--

CREATE TABLE `clicks` (
  `id` int(11) NOT NULL,
  `paquet_id` int(11) NOT NULL,
  `prix` float NOT NULL,
  `prix_bid` int(11) NOT NULL,
  `benefice` int(11) NOT NULL,
  `temps_blocage` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clicks`
--

INSERT INTO `clicks` (`id`, `paquet_id`, `prix`, `prix_bid`, `benefice`, `temps_blocage`) VALUES
(1, 1, 0.05, 1, 340, '00:00:00'),
(2, 1, 0.09, 2, 380, '00:00:00'),
(3, 3, 0.21, 1, 472, '00:00:00'),
(4, 4, 0.4, 1, 513, '00:00:00'),
(5, 5, 0.74, 1, 675, '00:00:00'),
(6, 6, 1.23, 1, 810, '00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `click_autos`
--

CREATE TABLE `click_autos` (
  `id` int(11) NOT NULL,
  `paquet_id` int(11) NOT NULL,
  `bid_prix` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `benefice` int(11) NOT NULL,
  `temps_bidage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `click_autos`
--

INSERT INTO `click_autos` (`id`, `paquet_id`, `bid_prix`, `prix`, `benefice`, `temps_bidage`) VALUES
(1, 1, 100, 10, 2400, 8),
(2, 2, 120, 12, 2400, 8),
(3, 3, 300, 15, 2400, 10),
(4, 4, 314, 17, 2400, 10),
(5, 5, 400, 20, 2400, 12),
(6, 6, 450, 25, 2400, 12);

-- --------------------------------------------------------

--
-- Structure de la table `communiques`
--

CREATE TABLE `communiques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `types_compte_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `conditions`
--

CREATE TABLE `conditions` (
  `id` int(11) NOT NULL,
  `titre` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `telephone`, `content`, `email`, `created_at`, `updated_at`) VALUES
(4, 'Claude kalondji', '243818086893', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dignissimos adipisci necessitatibus, illo, officiis sequi harum, quod explicabo ipsam aut odit natus voluptate atque! Dolore explicabo omnis nisi vitae deleniti.', 'lem.musunga@gmail.com', '2023-05-02 09:31:59', '2022-08-11 14:02:16'),
(5, 'Claude kalondji', '0811246071', 'bonjour monsieur', 'lem.musunga@gmail.com', '2023-05-02 09:31:59', '2022-08-30 15:31:32');

-- --------------------------------------------------------

--
-- Structure de la table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `economie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usage_unique` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `un_compte` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date_expiration` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `types_coupon_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

CREATE TABLE `demandes` (
  `id` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `nombre` int(11) NOT NULL,
  `state` int(11) DEFAULT NULL,
  `payement` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demandes`
--

INSERT INTO `demandes` (`id`, `admin`, `name`, `telephone`, `nombre`, `state`, `payement`, `description`, `created_at`, `updated_at`) VALUES
(2, 40, 'root', '0811246072', 50, 1, 'MPSA', 'bonjour', '2023-05-02 09:31:59', '2022-08-11 06:14:08');

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE `departements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `encheregagners`
--

CREATE TABLE `encheregagners` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `enchere_id` int(11) NOT NULL,
  `valeur_click` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `payed_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `encheregagners`
--

INSERT INTO `encheregagners` (`id`, `user_id`, `enchere_id`, `valeur_click`, `code`, `state`, `payed_by`, `updated_at`, `created_at`) VALUES
(689, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-25 17:23:01'),
(690, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-27 17:56:06'),
(691, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-27 17:58:20'),
(692, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-28 12:17:02'),
(693, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-28 18:40:26'),
(694, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-28 18:40:38'),
(695, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-28 18:52:58'),
(696, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-28 22:18:37'),
(697, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-28 22:19:55'),
(698, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-28 22:20:13'),
(699, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-28 23:12:22'),
(700, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-29 14:23:29'),
(701, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-29 14:24:59'),
(702, 0, 0, 0, '', 1, NULL, '2023-05-02 09:31:59', '2022-09-29 14:26:07'),
(703, 0, 0, 0, '', 1, NULL, '2023-05-02 09:31:59', '2022-09-29 14:26:44'),
(704, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-29 15:18:26'),
(705, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-29 16:56:33'),
(706, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-29 16:56:36'),
(707, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-29 16:56:44'),
(708, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-29 16:56:47'),
(709, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-29 16:56:57'),
(710, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-29 16:57:52'),
(711, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-29 16:57:55'),
(712, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-29 17:00:30'),
(713, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-29 17:00:56'),
(714, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-29 17:10:15'),
(715, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-29 17:11:23'),
(716, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-29 17:12:34'),
(717, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 21:00:16'),
(718, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 21:01:02'),
(719, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 21:01:11'),
(720, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:05:17'),
(721, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:05:17'),
(722, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:05:26'),
(723, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:05:26'),
(724, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:06:02'),
(725, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:06:02'),
(726, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:06:11'),
(727, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:06:11'),
(728, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:06:37'),
(729, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:06:37'),
(730, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:06:47'),
(731, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:06:47'),
(732, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:07:08'),
(733, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:07:08'),
(734, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:07:19'),
(735, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:07:20'),
(736, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:08:18'),
(737, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:53:15'),
(738, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:53:35'),
(739, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:54:41'),
(740, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:56:01'),
(741, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:58:12'),
(742, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:58:43'),
(743, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 22:59:26'),
(744, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 23:00:00'),
(745, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 23:01:00'),
(746, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 23:01:50'),
(747, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 23:02:43'),
(748, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 23:02:54'),
(749, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 23:02:59'),
(750, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 23:05:26'),
(751, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 23:08:12'),
(752, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-09-30 23:10:27'),
(754, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-04 15:01:59'),
(755, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-04 15:04:04'),
(756, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-04 15:04:15'),
(757, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-13 12:24:49'),
(758, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-13 12:24:56'),
(759, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-13 12:25:10'),
(760, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-13 12:28:31'),
(761, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-13 12:41:45'),
(762, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-13 12:47:53'),
(763, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-13 12:48:40'),
(764, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-13 13:25:41'),
(765, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-13 14:00:15'),
(766, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-13 14:00:43'),
(767, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-13 14:00:59'),
(768, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-13 14:01:46'),
(769, 83, 29, 6015, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-13 14:04:41'),
(770, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-14 19:02:37'),
(771, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-14 19:02:52'),
(772, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-14 19:03:31'),
(773, 89, 30, 1470, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-14 19:03:39'),
(774, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-14 20:20:55'),
(775, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-14 20:21:54'),
(776, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-14 20:22:07'),
(777, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-10-14 20:24:19'),
(778, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-11-15 15:25:00'),
(779, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-11-15 15:26:11'),
(780, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-11-15 15:26:35'),
(781, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-11-15 15:31:19'),
(782, 85, 31, 368, '', 1, 77, '2023-05-02 09:31:59', '2022-11-15 15:31:44'),
(783, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-11-29 13:23:58'),
(784, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-11-29 13:34:10'),
(785, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-11-29 13:34:51'),
(786, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-11-29 13:55:45'),
(787, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-12-02 23:46:15'),
(788, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-12-02 23:46:43'),
(789, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-12-09 15:02:30'),
(790, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-12-09 15:02:43'),
(791, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-12-13 16:38:35'),
(792, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-12-13 16:39:05'),
(793, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-12-13 16:39:14'),
(794, 85, 33, 117, '', NULL, NULL, '2023-05-02 09:31:59', '2022-12-13 16:39:22'),
(795, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2022-12-14 17:28:46'),
(796, 85, 32, 567, '', NULL, NULL, '2023-05-02 09:31:59', '2022-12-14 17:29:01'),
(797, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2023-04-26 12:39:05'),
(798, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2023-04-26 12:39:07'),
(799, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2023-04-26 12:39:08'),
(800, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2023-04-26 12:39:33'),
(801, 0, 0, 0, '', NULL, NULL, '2023-05-02 09:31:59', '2023-04-26 12:42:46');

-- --------------------------------------------------------

--
-- Structure de la table `encheres`
--

CREATE TABLE `encheres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `click` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `favoris` int(11) NOT NULL,
  `favori_salon` int(11) NOT NULL,
  `date_debut` timestamp NULL DEFAULT NULL,
  `heure_debut` time DEFAULT NULL,
  `state` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `paquet_id` bigint(20) UNSIGNED NOT NULL,
  `participant` int(11) DEFAULT NULL,
  `munite` int(11) DEFAULT NULL,
  `seconde` int(11) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `prix_enchere` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `encheres`
--

INSERT INTO `encheres` (`id`, `click`, `favoris`, `favori_salon`, `date_debut`, `heure_debut`, `state`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `article_id`, `paquet_id`, `participant`, `munite`, `seconde`, `prix`, `prix_enchere`) VALUES
(1, '0', 0, 0, '2023-05-03 13:15:00', '14:15:00', 0, '2023-05-02 13:16:02', '2023-05-02 13:16:02', NULL, NULL, NULL, 3, 54, 1, 5, NULL, NULL, NULL, NULL),
(2, '0', 0, 0, '2023-05-05 13:16:00', '14:16:00', 0, '2023-05-02 13:16:21', '2023-05-02 13:40:05', NULL, NULL, NULL, 3, 53, 5, 22, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `envoies`
--

CREATE TABLE `envoies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `number` bigint(20) NOT NULL,
  `admin_id` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bid_statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponses` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `favoris` int(11) NOT NULL,
  `enchere_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`id`, `user_id`, `favoris`, `enchere_id`, `updated_at`, `created_at`) VALUES
(105, 11, 0, 2, '2022-05-04 05:08:59', '2022-04-28 00:26:37'),
(106, 11, 1, 3, '2022-05-03 11:07:40', '2022-04-28 00:27:17'),
(107, 14, 0, 3, '2022-07-20 11:44:17', '2022-04-28 06:31:01'),
(108, 14, 0, 2, '2022-07-20 11:39:45', '2022-04-29 11:32:45'),
(109, 11, 1, 1, '2022-05-02 15:01:14', '2022-05-02 15:01:14'),
(110, 24, 1, 2, '2022-05-13 11:34:28', '2022-05-13 11:31:04'),
(111, 32, 0, 3, '2022-07-07 12:35:12', '2022-07-07 12:35:05'),
(112, 44, 1, 2, '2022-07-26 00:50:51', '2022-07-26 00:36:01'),
(113, 44, 1, 1, '2022-07-26 00:50:44', '2022-07-26 00:44:10'),
(114, 44, 1, 3, '2022-07-26 00:44:38', '2022-07-26 00:44:38'),
(115, 43, 1, 1, '2022-07-27 02:46:49', '2022-07-27 02:23:39'),
(116, 40, 1, 10, '2022-08-09 03:19:31', '2022-08-09 03:19:31'),
(117, 40, 1, 13, '2022-08-09 03:30:36', '2022-08-09 03:30:36'),
(118, 55, 0, 2, '2022-08-30 11:05:09', '2022-08-30 11:05:02'),
(119, 56, 1, 2, '2022-08-30 15:27:24', '2022-08-30 15:27:16'),
(120, 59, 1, 2, '2022-08-31 15:01:11', '2022-08-31 15:01:11'),
(121, 58, 1, 16, '2022-09-01 10:37:00', '2022-09-01 10:37:00'),
(122, 54, 1, 24, '2022-09-20 13:25:39', '2022-09-20 13:24:16'),
(123, 77, 1, 2, '2022-10-04 14:30:32', '2022-10-04 14:30:32'),
(124, 78, 1, 2, '2022-10-04 14:36:56', '2022-10-04 14:36:50'),
(125, 85, 0, 3, '2022-10-08 21:00:42', '2022-10-08 20:24:47'),
(126, 85, 1, 2, '2022-10-14 19:39:49', '2022-10-10 10:48:29'),
(127, 83, 1, 2, '2022-10-12 12:15:43', '2022-10-12 12:15:41'),
(128, 85, 0, 29, '2022-10-13 12:48:22', '2022-10-13 12:48:14');

-- --------------------------------------------------------

--
-- Structure de la table `foudres`
--

CREATE TABLE `foudres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paquet_id` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `prix_deblocage` float NOT NULL,
  `bid_deblocage` int(11) NOT NULL,
  `bid_prix` int(11) NOT NULL,
  `benefice` int(11) NOT NULL,
  `temps_blocage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `foudres`
--

INSERT INTO `foudres` (`id`, `paquet_id`, `prix`, `prix_deblocage`, `bid_deblocage`, `bid_prix`, `benefice`, `temps_blocage`) VALUES
(1, 1, 2, 1, 10, 20, 40, 10),
(2, 2, 3, 1.5, 30, 60, 40, 10),
(3, 3, 4, 2, 40, 80, 40, 10),
(4, 4, 6, 3, 60, 30, 40, 10),
(5, 5, 8, 4, 80, 160, 40, 10),
(6, 6, 10, 5, 100, 200, 40, 10);

-- --------------------------------------------------------

--
-- Structure de la table `gagnants`
--

CREATE TABLE `gagnants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `paye_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `enchere_id` bigint(20) UNSIGNED NOT NULL,
  `administrateur_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `gagnants`
--

INSERT INTO `gagnants` (`id`, `lien`, `state`, `paye_by`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `enchere_id`, `administrateur_id`) VALUES
(1, 'adad', 1, 0, '2022-03-10 23:50:19', '2022-03-10 23:50:19', NULL, NULL, NULL, 3, 11, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `historiques`
--

CREATE TABLE `historiques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `action` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL DEFAULT '3',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `historiques`
--

INSERT INTO `historiques` (`id`, `action`, `type`, `destination_id`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'Création du compte agent', 1, 97, '2023-04-27 11:48:19', '2023-04-27 11:48:19', NULL, NULL, NULL, 3, 96),
(2, 'Création du compte agent', 1, 98, '2023-04-28 07:34:38', '2023-04-28 07:34:38', NULL, NULL, NULL, 3, 96),
(3, 'Modification du compte agent', 1, 98, '2023-04-28 09:11:14', '2023-04-28 09:11:14', NULL, NULL, NULL, 3, 96),
(4, 'Modification du compte agent', 1, 98, '2023-04-28 09:38:08', '2023-04-28 09:38:08', NULL, NULL, NULL, 3, 96),
(5, 'Création du compte bideur', 2, 99, '2023-04-28 09:51:40', '2023-04-28 09:51:40', NULL, NULL, NULL, 3, 96),
(6, 'Modification du compte agent', 1, 98, '2023-04-28 10:33:04', '2023-04-28 10:33:04', NULL, NULL, NULL, 3, 96),
(7, 'Modification du compte agent', 1, 98, '2023-04-28 10:35:17', '2023-04-28 10:35:17', NULL, NULL, NULL, 3, 96),
(8, 'Modification du compte agent', 1, 98, '2023-04-28 10:35:44', '2023-04-28 10:35:44', NULL, NULL, NULL, 3, 96),
(9, 'Réactivation du compte agent', 1, 98, '2023-04-28 10:36:06', '2023-04-28 10:36:06', NULL, NULL, NULL, 3, 96),
(10, 'Modification du compte agent', 1, 98, '2023-04-28 10:36:26', '2023-04-28 10:36:26', NULL, NULL, NULL, 3, 96),
(11, 'Modification du compte bideur', 2, 99, '2023-04-28 10:52:41', '2023-04-28 10:52:41', NULL, NULL, NULL, 3, 96),
(12, 'Modification du compte bideur', 2, 99, '2023-04-28 11:01:07', '2023-04-28 11:01:07', NULL, NULL, NULL, 3, 96),
(13, 'Modification du compte bideur', 2, 99, '2023-04-28 11:05:00', '2023-04-28 11:05:00', NULL, NULL, NULL, 3, 96),
(14, 'Activation du compte bideur', 2, 99, '2023-04-28 11:05:11', '2023-04-28 11:05:11', NULL, NULL, NULL, 3, 96),
(15, 'Modification du compte bideur', 2, 87, '2023-04-28 11:05:41', '2023-04-28 11:05:41', NULL, NULL, NULL, 3, 96),
(16, 'Modification du compte bideur', 2, 86, '2023-04-28 11:06:43', '2023-04-28 11:06:43', NULL, NULL, NULL, 3, 96),
(17, 'Modification du compte bideur', 2, 86, '2023-04-28 11:09:08', '2023-04-28 11:09:08', NULL, NULL, NULL, 3, 96),
(18, 'Enregistrement d\'un article', 5, 53, '2023-04-28 14:43:06', '2023-04-28 14:43:06', NULL, NULL, NULL, 3, 96),
(19, 'Réactivation d\'un article', 5, 44, '2023-04-28 14:49:08', '2023-04-28 14:49:08', NULL, NULL, NULL, 3, 96),
(20, 'Enregistrement d\'un article', 5, 54, '2023-05-02 11:44:04', '2023-05-02 11:44:04', NULL, NULL, NULL, 3, 96),
(21, 'Modification d\'une sous-catégorie', 4, 2, '2023-05-02 13:52:02', '2023-05-02 13:52:02', NULL, NULL, NULL, 3, 96),
(22, 'Modification d\'une sous-catégorie', 4, 6, '2023-05-02 13:59:53', '2023-05-02 13:59:53', NULL, NULL, NULL, 3, 96),
(23, 'Suppression d\'une sous-catégorie', 4, 9, '2023-05-02 14:02:45', '2023-05-02 14:02:45', NULL, NULL, NULL, 3, 96),
(24, 'Réactivation d\'une sous-catégorie', 4, 9, '2023-05-02 14:02:49', '2023-05-02 14:02:49', NULL, NULL, NULL, 3, 96),
(25, 'Suppression d\'une sous-catégorie', 4, 9, '2023-05-02 14:02:50', '2023-05-02 14:02:50', NULL, NULL, NULL, 3, 96);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `lien`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `article_id`) VALUES
(2, 'PS5_2.webp', '2022-03-01 06:41:19', '2022-03-01 06:41:19', NULL, NULL, NULL, 3, 1, 2),
(3, 'Ordinateur iod_3.webp', '2022-03-10 03:55:55', '2022-03-10 03:55:55', NULL, NULL, NULL, 3, 1, 3),
(41, 'Ordinateur.webp', '2022-09-19 17:59:10', '2022-09-19 17:59:10', NULL, NULL, NULL, 3, 40, 40),
(42, 'iphone.webp', '2022-09-19 18:14:11', '2022-09-19 18:14:11', NULL, NULL, NULL, 3, 40, 41),
(43, 'amerique.webp', '2022-09-20 19:42:36', '2022-09-20 19:42:36', NULL, NULL, NULL, 3, 40, 42),
(44, 'lunettes.webp', '2022-09-22 21:10:24', '2022-09-22 21:10:24', NULL, NULL, NULL, 3, 40, 43),
(45, 'Iphone 13.webp', '2022-09-30 20:58:33', '2023-04-28 14:49:08', NULL, 96, NULL, 3, 40, 44),
(46, 'television.webp', '2022-10-13 12:20:41', '2022-10-13 12:20:41', NULL, NULL, NULL, 3, 85, 45),
(47, 'BARUA.webp', '2022-10-13 12:28:25', '2022-10-13 12:39:19', '2022-10-13 12:39:19', 85, 85, 2, 85, 46),
(48, 'STYLO INTELLIGENT.webp', '2022-10-13 12:41:37', '2022-10-13 12:41:37', NULL, NULL, NULL, 3, 85, 47),
(49, 'Iphone.webp', '2022-10-14 19:02:15', '2022-10-14 19:02:15', NULL, NULL, NULL, 3, 85, 48),
(50, 'WESTON.webp', '2022-11-15 15:24:37', '2022-11-15 15:24:37', NULL, NULL, NULL, 3, 77, 49),
(51, 'PROJECTER.webp', '2022-11-29 13:00:40', '2022-11-29 13:00:40', NULL, NULL, NULL, 3, 77, 50),
(52, 'GAME.webp', '2022-12-09 15:02:18', '2022-12-09 15:02:18', NULL, NULL, NULL, 3, 77, 51),
(54, '53_0.jpg', '2023-04-28 14:43:06', '2023-04-28 14:43:06', NULL, NULL, NULL, 1, 96, 53),
(55, '53_1.png', '2023-04-28 14:43:06', '2023-04-28 14:43:06', NULL, NULL, NULL, 1, 96, 53),
(56, '53_2.jpg', '2023-04-28 14:43:06', '2023-04-28 14:43:06', NULL, NULL, NULL, 1, 96, 53),
(57, '54_0.jpeg', '2023-05-02 11:44:04', '2023-05-02 11:44:04', NULL, NULL, NULL, 1, 96, 54);

-- --------------------------------------------------------

--
-- Structure de la table `instructions`
--

CREATE TABLE `instructions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `instructions`
--

INSERT INTO `instructions` (`id`, `titre`, `description`, `lien`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'Comment bider ?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nam nisi ducimus itaque? Exercitationem mollitia amet id similique ipsum cum corrupti incidunt. Tempore commodi a eum dolor nihil reprehenderit repellat!Animi, voluptas laboriosam. Ipsum iusto reiciendis aperiam cum explicabo vero cupiditate id animi eligendi quod. Libero, ducimus dolorum consequuntur incidunt quidem natus molestiae praesentium officia, reiciendis accusantium a, deleniti voluptatem!', 'commer', '2022-03-16 03:25:47', '2022-03-16 03:25:47', NULL, NULL, NULL, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED DEFAULT NULL,
  `salon_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `libelle`, `read`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `salon_id`, `user_id`) VALUES
(12, '', 0, '2022-05-03 10:47:10', '2022-05-03 10:47:10', NULL, NULL, NULL, NULL, NULL, 11),
(19, 'ewf', 0, '2022-09-09 04:17:30', '2022-09-09 04:17:30', NULL, NULL, NULL, NULL, NULL, 58),
(20, 'bonjour', 0, '2022-09-09 04:21:54', '2022-09-09 04:21:54', NULL, NULL, NULL, NULL, NULL, 58),
(21, 'wifjewrlf', 0, '2022-09-09 04:22:21', '2022-09-09 04:22:21', NULL, NULL, NULL, NULL, NULL, 58),
(22, 'salut', 0, '2022-09-07 04:36:27', '2022-09-09 04:36:27', NULL, NULL, NULL, NULL, NULL, 55),
(23, 'bonjour', 0, '2022-09-20 23:42:26', '2022-09-20 23:42:26', NULL, NULL, NULL, NULL, NULL, 66),
(24, 'bonjour frere', 0, '2022-09-20 23:43:58', '2022-09-20 23:43:58', NULL, NULL, NULL, NULL, NULL, 66),
(25, 'bonjour', 0, '2022-09-28 13:12:49', '2022-09-28 13:12:49', NULL, NULL, NULL, NULL, NULL, 54);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(11) NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(0, '2014_01_20_010306_create_statuts_table', 1),
(0, '2014_10_12_000000_create_users_table', 1),
(0, '2014_10_12_100000_create_password_resets_table', 1),
(0, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(0, '2016_01_01_000000_add_voyager_user_fields', 1),
(0, '2016_01_01_000000_create_data_types_table', 1),
(0, '2016_01_01_000000_create_posts_table', 1),
(0, '2016_05_19_173453_create_menu_table', 1),
(0, '2016_10_21_190000_create_roles_table', 1),
(0, '2016_10_21_190000_create_settings_table', 1),
(0, '2016_11_30_135954_create_permission_table', 1),
(0, '2016_11_30_141208_create_permission_role_table', 1),
(0, '2016_12_26_201236_data_types__add__server_side', 1),
(0, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(0, '2017_01_14_005015_create_translations_table', 1),
(0, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(0, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(0, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(0, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(0, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(0, '2017_08_05_000000_add_group_to_settings_table', 1),
(0, '2017_11_26_013050_add_user_role_relationship', 1),
(0, '2017_11_26_015000_create_user_roles_table', 1),
(0, '2018_03_11_000000_add_user_settings', 1),
(0, '2018_03_14_000000_add_details_to_data_types_table', 1),
(0, '2018_03_16_000000_make_settings_value_nullable', 1),
(0, '2019_08_19_000000_create_failed_jobs_table', 1),
(0, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(0, '2022_01_11_002805_create_administrateurs_table', 1),
(0, '2022_01_18_034450_create_paquets_table', 1),
(0, '2022_01_19_002858_create_categories_table', 1),
(0, '2022_01_19_002942_create_articles_table', 1),
(0, '2022_01_20_003053_create_salons_table', 1),
(0, '2022_01_20_153233_create_sessions_table', 1),
(0, '2022_01_21_002909_create_bids_table', 1),
(0, '2022_01_21_113414_create_bideurs_table', 1),
(0, '2022_01_21_113611_create_types_comptes_table', 1),
(0, '2022_01_21_114155_create_images_table', 1),
(0, '2022_01_21_123415_create_pivot_clients_salons_table', 1),
(0, '2022_01_21_124544_create_types_coupons_table', 1),
(0, '2022_01_21_124603_create_coupons_table', 1),
(0, '2022_01_21_193323_create_comptes_table', 1),
(0, '2022_01_22_062808_create_encheres_table', 1),
(0, '2022_01_24_115253_create_newsletters_table', 1),
(0, '2022_01_24_115552_create_news_table', 1),
(0, '2022_01_24_120154_create_pages_table', 1),
(0, '2022_01_24_130730_create_departements_table', 1),
(0, '2022_01_24_133117_create_sources_table', 1),
(0, '2022_01_24_135421_create_pays_table', 1),
(0, '2022_02_03_102044_create_sanctions_table', 1),
(0, '2022_02_03_103427_create_messages_table', 1),
(0, '2022_02_03_104000_create_chats_table', 1),
(0, '2022_02_03_104734_create_rois_table', 1),
(0, '2022_02_03_105001_create_foudres_table', 1),
(0, '2022_02_04_121349_add_google_id_column', 1),
(0, '2022_02_07_093640_create_promotions_table', 1),
(0, '2022_02_14_113134_create_gagnants_table', 1),
(0, '2022_02_14_113403_create_instructions_table', 1),
(0, '2022_02_16_135750_create_communiques_table', 1),
(0, '2022_02_21_111111_create_notifications_table', 1),
(0, '2022_03_08_161339_create_historiques_table', 2),
(0, '2022_03_18_132834_create_faqs_table', 3),
(0, '2022_02_16_135301_create_pivot_bideur_encheres_table', 4);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL DEFAULT '5',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'roger@gmail.com', '2022-03-10 09:12:14', '2022-03-10 08:12:39', '2022-03-10 08:12:39', 1, 1, 2, NULL),
(2, NULL, '2022-07-26 12:20:15', '2022-07-26 12:20:15', NULL, NULL, NULL, 3, 41),
(3, NULL, '2022-07-26 12:32:12', '2022-07-26 12:32:12', NULL, NULL, NULL, 3, 42),
(4, NULL, '2022-07-26 20:53:40', '2022-07-26 20:53:40', NULL, NULL, NULL, 3, 43),
(5, NULL, '2022-07-26 21:08:39', '2022-07-26 21:08:39', NULL, NULL, NULL, 3, 44),
(6, NULL, '2022-09-28 22:47:30', '2022-09-28 22:47:30', NULL, NULL, NULL, 3, 70),
(7, NULL, '2022-09-28 22:48:24', '2022-09-28 22:48:24', NULL, NULL, NULL, 3, 71),
(8, NULL, '2022-10-07 19:41:11', '2022-10-07 19:41:11', NULL, NULL, NULL, 3, 83),
(9, NULL, '2022-10-20 23:21:21', '2022-10-20 23:21:21', NULL, NULL, NULL, 3, 90),
(10, NULL, '2022-10-20 23:24:42', '2022-10-20 23:24:42', NULL, NULL, NULL, 3, 91),
(11, NULL, '2022-12-09 15:09:32', '2022-12-09 15:09:32', NULL, NULL, NULL, 3, 93),
(12, NULL, '2022-12-13 16:04:11', '2022-12-13 16:04:11', NULL, NULL, NULL, 3, 94),
(13, NULL, '2022-12-13 16:42:25', '2022-12-13 16:42:25', NULL, NULL, NULL, 3, 95);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` int(11) NOT NULL DEFAULT '0',
  `type` int(11) DEFAULT NULL,
  `notification_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `public`, `type`, `notification_id`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(3, 'CongoBid Vous informe que sa nouvelle plateforme est maintenant disponible', 1, NULL, NULL, '2022-09-01 02:57:16', NULL, NULL, NULL, NULL, 0, NULL),
(5, 'Musunga Alex vous a envoyé 10 bids', 0, NULL, 59, '2022-09-01 11:42:08', '2022-09-01 11:42:08', NULL, NULL, NULL, NULL, 54),
(9, 'lmpro28 vous a envoyé 11 bids', 0, NULL, 57, '2022-09-01 11:58:55', '2022-09-01 11:58:55', NULL, NULL, NULL, NULL, 59),
(11, 'Seymoure02 Participation  au salon ordinateur effectuer', 0, NULL, 58, '2022-09-06 03:28:26', '2022-09-06 03:28:26', NULL, NULL, NULL, NULL, NULL),
(12, 'Seymoure02 Participation  au salon ordinateur-iod effectuer', 0, NULL, 58, '2022-09-06 03:29:59', '2022-09-06 03:29:59', NULL, NULL, NULL, NULL, NULL),
(13, 'Seymoure02 Participation  au salon Ordinateur effectuer', 0, NULL, 58, '2022-09-14 02:04:33', '2022-09-14 02:04:33', NULL, NULL, NULL, NULL, NULL),
(14, 'Seymoure02 Participation  au salon Ordinateur effectuer', 0, NULL, 58, '2022-09-14 04:20:27', '2022-09-14 04:20:27', NULL, NULL, NULL, NULL, NULL),
(15, 'Seymoure02 Participation  au salon Ordinateur effectuer', 0, NULL, 58, '2022-09-14 05:09:47', '2022-09-14 05:09:47', NULL, NULL, NULL, NULL, NULL),
(16, 'Seymour\'; Participation  au salon ordinateur effectuer', 0, NULL, 61, '2022-09-14 05:21:05', '2022-09-14 05:21:05', NULL, NULL, NULL, NULL, NULL),
(17, 'Seymoure02 Participation  au salon television effectuer', 0, NULL, 58, '2022-09-16 21:50:43', '2022-09-16 21:50:43', NULL, NULL, NULL, NULL, NULL),
(24, '45 Participation  au salon iphone effectuer', 0, NULL, 65, '2022-09-19 19:33:46', '2022-09-19 19:33:46', NULL, NULL, NULL, NULL, NULL),
(25, '45 Participation  au salon iphone effectuer', 0, NULL, 65, '2022-09-19 20:31:00', '2022-09-19 20:31:00', NULL, NULL, NULL, NULL, NULL),
(26, 'lmpro Participation  au salon iphone effectuer', 0, NULL, 54, '2022-09-20 19:07:34', '2022-09-20 19:07:34', NULL, NULL, NULL, NULL, NULL),
(27, 'lmpro Participation  au salon iphone effectuer', 0, NULL, 54, '2022-09-20 19:08:48', '2022-09-20 19:08:48', NULL, NULL, NULL, NULL, NULL),
(30, 'jh Participation  au salon iphone effectuer', 0, NULL, 66, '2022-09-20 20:57:38', '2022-09-20 20:57:38', NULL, NULL, NULL, NULL, NULL),
(31, 'jh Participation  au salon iphone effectuer', 0, NULL, 66, '2022-09-20 21:27:46', '2022-09-20 21:27:46', NULL, NULL, NULL, NULL, NULL),
(32, 'lmpro Participation  au salon iphone effectuer', 0, NULL, 54, '2022-09-27 09:30:01', '2022-09-27 09:30:01', NULL, NULL, NULL, NULL, NULL),
(33, 'lmpro Participation  au salon iphone effectuer', 0, NULL, 54, '2022-09-27 09:31:17', '2022-09-27 09:31:17', NULL, NULL, NULL, NULL, NULL),
(34, 'lmpro Participation  au salon iphone effectuer', 0, NULL, 54, '2022-09-27 09:35:03', '2022-09-27 09:35:03', NULL, NULL, NULL, NULL, NULL),
(35, 'lmpro Participation  au salon iphone effectuer', 0, NULL, 54, '2022-09-27 09:35:31', '2022-09-27 09:35:31', NULL, NULL, NULL, NULL, NULL),
(36, 'lmpro Participation  au salon iphone effectuer', 0, NULL, 54, '2022-09-27 09:49:05', '2022-09-27 09:49:05', NULL, NULL, NULL, NULL, NULL),
(37, 'lmpro Participation  au salon iphone effectuer', 0, NULL, 54, '2022-09-27 09:49:46', '2022-09-27 09:49:46', NULL, NULL, NULL, NULL, NULL),
(38, 'lmpro Participation  au salon iphone effectuer', 0, NULL, 54, '2022-09-27 09:50:07', '2022-09-27 09:50:07', NULL, NULL, NULL, NULL, NULL),
(39, 'lmpro Participation  au salon iphone effectuer', 0, NULL, 54, '2022-09-27 09:59:16', '2022-09-27 09:59:16', NULL, NULL, NULL, NULL, NULL),
(40, 'lmpro Participation  au salon iphone effectuer', 0, NULL, 54, '2022-09-27 21:02:35', '2022-09-27 21:02:35', NULL, NULL, NULL, NULL, NULL),
(41, 'Makambo Participation  au salon iphone effectuer', 0, NULL, 72, '2022-09-28 22:54:32', '2022-09-28 22:54:32', NULL, NULL, NULL, NULL, NULL),
(42, 'Lka Participation  au salon iphone effectuer', 0, NULL, 70, '2022-10-02 19:48:25', '2022-10-02 19:48:25', NULL, NULL, NULL, NULL, NULL),
(43, 'Le destructeur 01 Participation  au salon iphone effectuer', 0, NULL, 83, '2022-10-11 14:16:16', '2022-10-11 14:16:16', NULL, NULL, NULL, NULL, NULL),
(44, 'Le destructeur 01 Participation  au salon iphone effectuer', 0, NULL, 83, '2022-10-11 14:17:04', '2022-10-11 14:17:04', NULL, NULL, NULL, NULL, NULL),
(45, 'Le destructeur 01 vous a envoyé 150 bids', 0, NULL, 86, '2022-10-20 23:13:33', '2022-10-20 23:13:33', NULL, NULL, NULL, NULL, 83),
(46, 'Powerful Participation  au salon iphone effectuer', 0, NULL, 86, '2022-10-20 23:19:32', '2022-10-20 23:19:32', NULL, NULL, NULL, NULL, NULL),
(47, 'Blood Participation  au salon iphone effectuer', 0, NULL, 90, '2022-10-20 23:23:13', '2022-10-20 23:23:13', NULL, NULL, NULL, NULL, NULL),
(48, 'F60 Participation  au salon iphone effectuer', 0, NULL, 91, '2022-10-20 23:26:12', '2022-10-20 23:26:12', NULL, NULL, NULL, NULL, NULL),
(49, 'Le destructeur 01 Participation  au salon iphone effectuer', 0, NULL, 83, '2022-10-20 23:27:05', '2022-10-20 23:27:05', NULL, NULL, NULL, NULL, NULL),
(50, 'Pro Participation  au salon iphone effectuer', 0, NULL, 85, '2022-12-16 12:51:44', '2022-12-16 12:51:44', NULL, NULL, NULL, NULL, NULL),
(51, 'Pro Participation  au salon iphone effectuer', 0, NULL, 85, '2022-12-16 13:00:13', '2022-12-16 13:00:13', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `paquet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `temps_option` time NOT NULL,
  `temps_restant` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `paquets`
--

CREATE TABLE `paquets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_enchere` int(11) NOT NULL,
  `duree` int(11) NOT NULL,
  `treve` int(11) NOT NULL,
  `guerre` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `prix_intervalle` text COLLATE utf8mb4_unicode_ci,
  `min` int(11) DEFAULT NULL,
  `click` int(11) DEFAULT NULL,
  `roi` time(2) NOT NULL,
  `foudre` time(2) NOT NULL,
  `bouclier` time(2) NOT NULL,
  `max` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `paquets`
--

INSERT INTO `paquets` (`id`, `libelle`, `nombre_enchere`, `duree`, `treve`, `guerre`, `prix`, `prix_intervalle`, `min`, `click`, `roi`, `foudre`, `bouclier`, `max`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'Simba', 10, 55, 5, 20, 10, '0 - 200', 1, 5, '00:05:05.05', '00:00:00.00', '00:00:00.00', 200, '2022-02-15 03:45:20', '2022-03-10 03:11:52', NULL, 1, NULL, 3, 1),
(2, 'Benda', 20, 120, 6, 21, 30, '201 - 500', 201, 5, '00:04:10.88', '00:00:00.00', '00:00:00.00', 500, '2022-02-15 03:45:44', '2022-08-11 00:38:43', NULL, 40, NULL, 3, 1),
(3, 'Turbo', 30, 160, 5, 25, 50, '501 - 1500', 501, 10, '00:01:02.25', '00:00:00.00', '00:00:00.00', 1000, '2022-02-15 05:32:59', '2022-03-12 07:34:53', NULL, 1, NULL, 3, 1),
(4, 'Beton', 40, 180, 6, 26, 40, '1501 - 2500', 1001, 15, '00:02:04.88', '00:00:00.00', '00:00:00.00', 2000, '2022-02-15 05:33:28', '2022-03-10 02:59:19', NULL, 1, NULL, 3, 1),
(5, 'Bulldozer', 50, 200, 10, 25, 50, '2501 - 5000', 2001, 20, '00:08:00.75', '00:00:00.00', '00:00:00.00', 5000, '2022-02-15 05:34:14', '2022-03-10 02:59:19', NULL, 1, NULL, 3, 1),
(6, 'Sukisa', 10, 250, 10, 45, 60, '5001 - 10000', 5001, 25, '00:04:00.22', '00:00:00.00', '00:00:00.00', 10000, '2022-02-15 05:44:00', '2022-08-11 00:40:21', NULL, 1, NULL, 3, 40);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('lem.musungafd@gmail.com', '$2y$10$aG6P2VIS9aVPmne.CcptQ.BeSJZ6zGrK2rph6XIsULBMDm.y2lSuq', '2022-04-28 03:59:15'),
('pedro@congobid.com', '$2y$10$i6eqnY3Fe0JZwYjE.OFWre1yuXUEBZ6MIER0bbTlYpleurybkAy7W', '2022-05-05 09:23:06');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `index` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pivot_bideur_encheres`
--

CREATE TABLE `pivot_bideur_encheres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `valeur` int(11) NOT NULL DEFAULT '0',
  `click_seconde` int(11) NOT NULL DEFAULT '0',
  `roi` int(11) NOT NULL DEFAULT '0',
  `foudre` int(11) NOT NULL DEFAULT '0',
  `clicks` int(11) NOT NULL DEFAULT '0',
  `bouclier` int(11) NOT NULL DEFAULT '0',
  `favoris` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `enchere_id` bigint(20) UNSIGNED NOT NULL,
  `time_bid_auto` timestamp NULL DEFAULT NULL,
  `automatique` int(11) NOT NULL DEFAULT '0',
  `temps_bid_auto` int(11) DEFAULT '0',
  `time_bouclier` int(11) DEFAULT NULL,
  `time_roi` timestamp NULL DEFAULT NULL,
  `time_foudre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pivot_bideur_encheres`
--

INSERT INTO `pivot_bideur_encheres` (`id`, `valeur`, `click_seconde`, `roi`, `foudre`, `clicks`, `bouclier`, `favoris`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `enchere_id`, `time_bid_auto`, `automatique`, `temps_bid_auto`, `time_bouclier`, `time_roi`, `time_foudre`) VALUES
(99, 0, 0, 0, 0, 0, 0, 0, '2022-10-20 23:27:05', '2022-10-20 23:27:05', NULL, NULL, NULL, 3, 83, 23, NULL, 0, 0, NULL, NULL, NULL),
(100, 0, 0, 0, 0, 0, 0, 0, '2022-11-15 15:31:42', '2022-11-15 15:31:42', NULL, NULL, NULL, 3, 78, 31, NULL, 0, 0, NULL, NULL, NULL),
(101, 368, 5, 0, 1, 0, 0, 0, '2022-11-16 11:46:47', '2022-12-14 13:12:20', NULL, NULL, NULL, 3, 85, 31, NULL, 0, 0, NULL, NULL, 6),
(107, 0, 0, 0, 0, 0, 0, 0, '2022-12-13 16:39:22', '2022-12-13 16:44:57', NULL, NULL, NULL, 3, 94, 33, NULL, 0, 0, NULL, NULL, NULL),
(108, 0, 0, 0, 0, 0, 0, 0, '2022-12-13 16:39:25', '2022-12-13 16:44:56', NULL, NULL, NULL, 3, 78, 33, NULL, 0, 0, NULL, NULL, NULL),
(109, 0, 0, 0, 0, 0, 0, 0, '2022-12-13 16:43:49', '2022-12-13 16:44:57', NULL, NULL, NULL, 3, 95, 33, NULL, 0, 0, NULL, NULL, NULL),
(110, 117, 8, 0, 0, 0, 0, 0, '2022-12-14 13:00:50', '2022-12-14 13:03:11', NULL, NULL, NULL, 3, 85, 33, NULL, 0, 0, NULL, NULL, NULL),
(111, 567, 5, 0, 0, 0, 0, 0, '2022-12-14 17:29:01', '2022-12-14 17:34:38', NULL, NULL, NULL, 3, 85, 32, NULL, 0, 0, NULL, NULL, NULL),
(113, 0, 0, 0, 0, 0, 0, 0, '2022-12-16 13:00:12', '2022-12-16 13:00:12', NULL, NULL, NULL, 3, 85, 23, NULL, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `pivot_bideur_paquets`
--

CREATE TABLE `pivot_bideur_paquets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `paquet_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pivot_bideur_paquets`
--

INSERT INTO `pivot_bideur_paquets` (`id`, `state`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `paquet_id`) VALUES
(0, 1, NULL, NULL, NULL, NULL, NULL, 4, 11, 1),
(1, 1, NULL, NULL, NULL, NULL, NULL, 4, 11, 1);

-- --------------------------------------------------------

--
-- Structure de la table `pivot_clients_salons`
--

CREATE TABLE `pivot_clients_salons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL DEFAULT '3',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `salon_id` bigint(20) UNSIGNED NOT NULL,
  `enchere_id` int(11) NOT NULL,
  `valeur` int(11) NOT NULL,
  `roi` int(11) NOT NULL DEFAULT '0',
  `foudre` int(11) NOT NULL DEFAULT '0',
  `clicks` int(11) NOT NULL DEFAULT '0',
  `bouclier` int(11) NOT NULL DEFAULT '0',
  `time_bouclier` timestamp NULL DEFAULT NULL,
  `time_roi` timestamp NULL DEFAULT NULL,
  `time_foudre` timestamp NULL DEFAULT NULL,
  `time_bid_auto` timestamp NULL DEFAULT NULL,
  `montant` int(11) DEFAULT NULL,
  `creator` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `politiques`
--

CREATE TABLE `politiques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `politiques`
--

INSERT INTO `politiques` (`id`, `titre`, `content`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'dd', 'dad', '2022-03-24 00:43:51', '2022-03-24 00:43:51', NULL, NULL, NULL, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sujet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rois`
--

CREATE TABLE `rois` (
  `id` int(11) NOT NULL,
  `paquet_id` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `prix_deblocage` float NOT NULL,
  `bid_deblocage` int(11) NOT NULL,
  `bid_prix` int(11) NOT NULL,
  `temps_blocage` time NOT NULL,
  `benefice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rois`
--

INSERT INTO `rois` (`id`, `paquet_id`, `prix`, `prix_deblocage`, `bid_deblocage`, `bid_prix`, `temps_blocage`, `benefice`) VALUES
(1, 1, 3, 0.2, 2, 30, '00:10:00', 50),
(2, 2, 5, 0.4, 4, 50, '00:15:00', 50),
(3, 3, 7, 0.4, 4, 70, '00:15:00', 50),
(4, 4, 10, 0.5, 5, 100, '00:15:00', 50),
(5, 5, 15, 0.7, 7, 150, '00:15:00', 50),
(6, 6, 20, 1, 10, 200, '00:15:00', 50);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'Root', 'Root', '2022-02-15 02:45:03', '2022-02-15 02:45:03'),
(2, 'SuperAdmin', 'Super Administrateur', '2022-02-15 02:50:18', '2022-02-15 02:50:18'),
(3, 'Admin', 'Administrateur', '2022-02-15 02:52:48', '2022-02-15 02:52:48'),
(4, 'SuperUser', 'Super Utilisateur', '2022-02-15 02:55:25', '2022-02-15 02:55:25'),
(5, 'User', 'Utilisateur', '2022-02-15 02:59:14', '2022-02-15 02:59:14');

-- --------------------------------------------------------

--
-- Structure de la table `salons`
--

CREATE TABLE `salons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `limite` int(11) DEFAULT '20',
  `debut_enchere` time DEFAULT NULL,
  `fin_enchere` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0',
  `montant` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `salon_likes`
--

CREATE TABLE `salon_likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `salon_id` int(11) NOT NULL,
  `favoris` int(11) NOT NULL,
  `enchere_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `salon_likes`
--

INSERT INTO `salon_likes` (`id`, `user_id`, `salon_id`, `favoris`, `enchere_id`, `updated_at`, `created_at`) VALUES
(1, 54, 3, 1, 3, '2023-05-02 09:32:00', '2022-08-29 21:51:08'),
(2, 54, 2, 0, 2, '2023-05-02 09:32:00', '2022-08-29 22:24:42');

-- --------------------------------------------------------

--
-- Structure de la table `sanctions`
--

CREATE TABLE `sanctions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paquet_id` int(11) NOT NULL,
  `enchere_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `santance` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree` time NOT NULL,
  `tous` int(11) NOT NULL DEFAULT '0',
  `suspendu_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED DEFAULT NULL,
  `statut` int(11) DEFAULT NULL,
  `salon_id` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sanctions`
--

INSERT INTO `sanctions` (`id`, `paquet_id`, `enchere_id`, `santance`, `duree`, `tous`, `suspendu_by`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `statut`, `salon_id`, `user_id`) VALUES
(80, 6, '2', 'foudre', '00:00:00', 1, 14, '2022-04-30 10:26:00', '2022-05-03 11:25:25', '2022-05-03 11:25:25', NULL, NULL, NULL, 1, 0, 11),
(81, 3, '3', 'foudre', '00:00:00', 0, 14, '2022-04-30 13:33:18', '2022-04-30 13:33:18', NULL, NULL, NULL, 1, 1, 0, 18),
(82, 3, '3', 'foudre', '00:00:00', 0, 14, '2022-04-30 13:33:32', '2022-04-30 13:33:32', NULL, NULL, NULL, NULL, 1, 0, 15),
(83, 3, '3', 'foudre', '00:00:00', 0, 14, '2022-04-30 13:35:05', '2022-04-30 13:35:05', NULL, NULL, NULL, NULL, 1, 0, 19),
(84, 3, '2', 'foudre', '00:00:00', 1, 14, '2022-04-30 13:35:39', '2022-05-07 03:03:16', '2022-05-07 03:03:16', NULL, NULL, NULL, 1, 0, 11),
(85, 3, '3', 'foudre', '00:00:00', 0, 21, '2022-04-30 13:40:01', '2022-04-30 13:41:27', '2022-04-30 13:41:27', NULL, NULL, 1, 1, 0, 14),
(86, 1, '1', 'foudre', '00:00:00', 0, 11, '2022-05-03 08:33:55', '2022-05-03 08:33:55', NULL, NULL, NULL, NULL, 1, 0, 20),
(87, 6, '2', 'foudre', '00:00:00', 0, 11, '2022-05-03 11:25:38', '2022-05-03 22:38:23', '2022-05-03 22:38:23', NULL, NULL, NULL, 1, 0, 14),
(88, 3, '3', 'foudre', '00:00:00', 0, 14, '2022-05-10 03:36:09', '2022-05-10 03:36:09', NULL, NULL, NULL, NULL, 1, 0, 11),
(89, 6, '2', 'foudre', '00:00:00', 0, 14, '2022-07-20 09:56:37', '2022-07-20 09:56:37', NULL, NULL, NULL, NULL, 1, 0, 26),
(90, 6, '2', 'foudre', '00:00:00', 0, 14, '2022-07-20 10:30:35', '2022-07-20 10:30:35', NULL, NULL, NULL, NULL, 1, 0, 25),
(91, 1, '1', 'foudre', '00:00:00', 0, 43, '2022-07-27 23:14:13', '2022-07-27 23:14:13', NULL, NULL, NULL, NULL, 1, 0, 40),
(92, 1, '1', 'foudre', '00:00:00', 0, 43, '2022-07-27 23:20:34', '2022-07-27 23:20:34', NULL, NULL, NULL, NULL, 1, 0, 44),
(93, 5, '14', 'foudre', '00:00:00', 0, 54, '2022-08-31 12:45:20', '2022-09-01 01:35:33', '2022-09-01 02:35:33', NULL, NULL, NULL, 1, NULL, 56),
(94, 5, '14', 'roi', '00:15:00', 0, 56, '2022-09-01 02:04:32', '2022-09-01 02:04:32', NULL, NULL, NULL, NULL, 1, NULL, 55),
(95, 5, '14', 'roi', '00:15:00', 0, 56, '2022-09-01 02:04:33', '2022-09-01 02:04:33', NULL, NULL, NULL, NULL, 1, NULL, 55),
(96, 5, '14', 'roi', '00:15:00', 0, 56, '2022-09-01 02:04:33', '2022-09-01 02:04:33', NULL, NULL, NULL, NULL, 1, NULL, 55),
(97, 5, '14', 'roi', '00:15:00', 0, 54, '2022-09-01 02:22:42', '2022-09-01 02:22:42', NULL, NULL, NULL, NULL, 1, NULL, 56),
(98, 5, '14', 'roi', '00:15:00', 0, 54, '2022-09-01 02:27:08', '2022-09-01 02:27:08', NULL, NULL, NULL, NULL, 1, NULL, 56),
(99, 5, '14', 'roi', '00:15:00', 0, 54, '2022-09-01 02:30:38', '2022-09-01 02:30:38', NULL, NULL, NULL, NULL, 1, NULL, 56),
(100, 5, '14', 'roi', '00:15:00', 0, 58, '2022-09-01 07:06:18', '2022-09-01 07:06:33', '2022-09-01 08:06:33', NULL, NULL, NULL, 1, NULL, 59),
(101, 5, '14', 'roi', '00:15:00', 0, 58, '2022-09-01 07:06:19', '2022-09-01 07:06:19', NULL, NULL, NULL, NULL, 1, NULL, 57),
(102, 5, '14', 'roi', '00:15:00', 0, 58, '2022-09-01 07:06:19', '2022-09-01 07:06:19', NULL, NULL, NULL, NULL, 1, NULL, 56),
(103, 5, '14', 'roi', '00:15:00', 0, 58, '2022-09-01 07:06:20', '2022-09-01 07:06:20', NULL, NULL, NULL, NULL, 1, NULL, 54),
(104, 5, '14', 'foudre', '00:00:00', 0, 58, '2022-09-01 07:19:52', '2022-09-01 07:20:15', '2022-09-01 08:20:15', NULL, NULL, NULL, 1, NULL, 59),
(105, 5, '14', 'foudre', '00:00:00', 0, 59, '2022-09-01 07:23:02', '2022-09-01 07:23:02', NULL, NULL, NULL, NULL, 1, NULL, 58),
(106, 6, '2', 'foudre', '00:00:00', 0, 58, '2022-09-09 06:01:38', '2022-09-09 06:01:38', NULL, NULL, NULL, NULL, 1, NULL, 44),
(107, 6, '2', 'foudre', '00:00:00', 0, 58, '2022-09-16 05:39:20', '2022-09-16 05:39:20', NULL, NULL, NULL, NULL, 1, NULL, 62),
(108, 2, '24', 'foudre', '00:00:00', 0, 66, '2022-09-20 21:02:43', '2022-09-20 21:02:43', NULL, NULL, NULL, NULL, 1, NULL, 54),
(109, 3, '2', 'foudre', '00:00:00', 0, 54, '2022-09-28 04:29:45', '2022-09-28 04:29:45', NULL, NULL, NULL, NULL, 1, NULL, 11),
(110, 3, '3', 'roi', '00:15:00', 0, 70, '2022-09-28 23:21:10', '2022-09-28 23:21:45', '2022-09-28 23:21:45', NULL, NULL, NULL, 1, NULL, 71),
(111, 3, '3', 'roi', '00:15:00', 0, 70, '2022-09-28 23:21:10', '2022-09-28 23:21:10', NULL, NULL, NULL, NULL, 1, NULL, 69),
(112, 3, '3', 'roi', '00:15:00', 0, 70, '2022-09-28 23:21:10', '2022-09-28 23:21:10', NULL, NULL, NULL, NULL, 1, NULL, 68),
(113, 3, '3', 'roi', '00:15:00', 0, 71, '2022-09-28 23:21:25', '2022-09-28 23:22:33', '2022-09-28 23:22:33', NULL, NULL, NULL, 1, NULL, 70),
(114, 3, '3', 'roi', '00:15:00', 0, 71, '2022-09-28 23:21:25', '2022-09-28 23:21:25', NULL, NULL, NULL, NULL, 1, NULL, 69),
(115, 3, '3', 'roi', '00:15:00', 0, 71, '2022-09-28 23:21:25', '2022-09-28 23:21:25', NULL, NULL, NULL, NULL, 1, NULL, 68),
(116, 3, '3', 'roi', '00:15:00', 0, 71, '2022-09-28 23:26:32', '2022-09-28 23:26:32', NULL, NULL, NULL, NULL, 1, NULL, 70),
(117, 3, '3', 'roi', '00:15:00', 0, 71, '2022-09-28 23:26:32', '2022-09-28 23:26:32', NULL, NULL, NULL, NULL, 1, NULL, 69),
(118, 3, '3', 'roi', '00:15:00', 0, 71, '2022-09-28 23:26:32', '2022-09-28 23:26:32', NULL, NULL, NULL, NULL, 1, NULL, 68),
(119, 3, '2', 'roi', '00:15:00', 0, 74, '2022-09-29 14:27:25', '2022-09-29 14:27:55', '2022-09-29 14:27:55', NULL, NULL, NULL, 1, NULL, 70),
(120, 3, '2', 'roi', '00:15:00', 0, 70, '2022-09-29 14:40:28', '2022-09-29 14:41:02', '2022-09-29 14:41:02', NULL, NULL, NULL, 1, NULL, 74),
(121, 3, '2', 'roi', '00:15:00', 0, 70, '2022-09-29 14:44:48', '2022-09-29 14:45:55', '2022-09-29 14:45:55', NULL, NULL, NULL, 1, NULL, 74),
(122, 3, '2', 'foudre', '00:00:00', 0, 74, '2022-09-29 15:00:54', '2022-09-29 17:14:12', '2022-09-29 17:14:12', NULL, NULL, NULL, 1, NULL, 70),
(123, 3, '2', 'foudre', '00:00:00', 0, 82, '2022-10-07 21:13:29', '2022-10-07 21:13:29', NULL, NULL, NULL, NULL, 1, NULL, 81),
(124, 3, '2', 'foudre', '00:00:00', 0, 82, '2022-10-07 21:37:50', '2022-10-07 21:37:50', NULL, NULL, NULL, NULL, 1, NULL, 80),
(125, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 13:10:56', '2022-10-13 17:22:25', '2022-10-13 17:22:25', NULL, NULL, NULL, 1, NULL, 85),
(126, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 13:10:56', '2022-10-12 13:10:56', NULL, NULL, NULL, NULL, 1, NULL, 82),
(127, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:19:50', '2022-10-12 13:20:37', '2022-10-12 13:20:37', NULL, NULL, NULL, 1, NULL, 83),
(128, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:19:50', '2022-10-13 17:22:31', '2022-10-13 17:22:31', NULL, NULL, NULL, 1, NULL, 85),
(129, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:19:50', '2022-10-12 13:19:50', NULL, NULL, NULL, NULL, 1, NULL, 82),
(130, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 13:21:00', '2022-10-12 13:21:21', '2022-10-12 13:21:21', NULL, NULL, NULL, 1, NULL, 86),
(131, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 13:21:00', '2022-10-13 17:22:35', '2022-10-13 17:22:35', NULL, NULL, NULL, 1, NULL, 85),
(132, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 13:21:00', '2022-10-12 13:21:00', NULL, NULL, NULL, NULL, 1, NULL, 82),
(133, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:21:35', '2022-10-12 13:22:01', '2022-10-12 13:22:01', NULL, NULL, NULL, 1, NULL, 83),
(134, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:21:35', '2022-10-13 17:22:39', '2022-10-13 17:22:39', NULL, NULL, NULL, 1, NULL, 85),
(135, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:21:35', '2022-10-12 13:21:35', NULL, NULL, NULL, NULL, 1, NULL, 82),
(136, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:21:35', '2022-10-12 13:22:06', '2022-10-12 13:22:06', NULL, NULL, NULL, 1, NULL, 83),
(137, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:21:35', '2022-10-13 17:22:44', '2022-10-13 17:22:44', NULL, NULL, NULL, 1, NULL, 85),
(138, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:21:35', '2022-10-12 13:21:35', NULL, NULL, NULL, NULL, 1, NULL, 82),
(139, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 13:26:42', '2022-10-12 14:43:47', '2022-10-12 14:43:47', NULL, NULL, NULL, 1, NULL, 78),
(140, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 13:26:42', '2022-10-12 13:27:59', '2022-10-12 13:27:59', NULL, NULL, NULL, 1, NULL, 86),
(141, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 13:26:42', '2022-10-13 17:22:50', '2022-10-13 17:22:50', NULL, NULL, NULL, 1, NULL, 85),
(142, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 13:26:42', '2022-10-12 13:26:42', NULL, NULL, NULL, NULL, 1, NULL, 82),
(143, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:28:09', '2022-10-12 14:43:54', '2022-10-12 14:43:54', NULL, NULL, NULL, 1, NULL, 78),
(144, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:28:09', '2022-10-12 13:29:32', '2022-10-12 13:29:32', NULL, NULL, NULL, 1, NULL, 83),
(145, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:28:09', '2022-10-13 17:22:53', '2022-10-13 17:22:53', NULL, NULL, NULL, 1, NULL, 85),
(146, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:28:09', '2022-10-12 13:28:09', NULL, NULL, NULL, NULL, 1, NULL, 82),
(147, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:29:44', '2022-10-12 14:44:00', '2022-10-12 14:44:00', NULL, NULL, NULL, 1, NULL, 78),
(148, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:29:44', '2022-10-12 13:29:56', '2022-10-12 13:29:56', NULL, NULL, NULL, 1, NULL, 83),
(149, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:29:44', '2022-10-13 17:22:58', '2022-10-13 17:22:58', NULL, NULL, NULL, 1, NULL, 85),
(150, 3, '2', 'roi', '00:15:00', 0, 86, '2022-10-12 13:29:44', '2022-10-12 13:29:44', NULL, NULL, NULL, NULL, 1, NULL, 82),
(151, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 13:30:09', '2022-10-12 14:44:28', '2022-10-12 14:44:28', NULL, NULL, NULL, 1, NULL, 78),
(152, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 13:30:09', '2022-10-12 13:31:08', '2022-10-12 13:31:08', NULL, NULL, NULL, 1, NULL, 86),
(153, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 13:30:09', '2022-10-13 17:23:01', '2022-10-13 17:23:01', NULL, NULL, NULL, 1, NULL, 85),
(154, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 13:30:09', '2022-10-12 13:30:09', NULL, NULL, NULL, NULL, 1, NULL, 82),
(155, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 14:45:04', '2022-10-12 14:45:04', NULL, NULL, NULL, NULL, 1, NULL, 86),
(156, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 14:45:04', '2022-10-12 15:56:15', '2022-10-12 15:56:15', NULL, NULL, NULL, 1, NULL, 83),
(157, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 14:45:04', '2022-10-13 17:23:07', '2022-10-13 17:23:07', NULL, NULL, NULL, 1, NULL, 85),
(158, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 14:45:04', '2022-10-12 14:45:04', NULL, NULL, NULL, NULL, 1, NULL, 82),
(159, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 14:45:26', '2022-10-12 14:45:26', NULL, NULL, NULL, NULL, 1, NULL, 86),
(160, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 14:45:26', '2022-10-12 15:56:31', '2022-10-12 15:56:31', NULL, NULL, NULL, 1, NULL, 83),
(161, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 14:45:26', '2022-10-13 17:23:11', '2022-10-13 17:23:11', NULL, NULL, NULL, 1, NULL, 85),
(162, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 14:45:26', '2022-10-12 14:45:26', NULL, NULL, NULL, NULL, 1, NULL, 82),
(163, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 15:09:26', '2022-10-12 15:10:12', '2022-10-12 15:10:12', NULL, NULL, NULL, 1, NULL, 87),
(164, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 15:09:26', '2022-10-12 15:09:26', NULL, NULL, NULL, NULL, 1, NULL, 86),
(165, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 15:09:26', '2022-10-12 15:56:45', '2022-10-12 15:56:45', NULL, NULL, NULL, 1, NULL, 83),
(166, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 15:09:26', '2022-10-13 17:23:16', '2022-10-13 17:23:16', NULL, NULL, NULL, 1, NULL, 85),
(167, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 15:09:26', '2022-10-12 15:09:26', NULL, NULL, NULL, NULL, 1, NULL, 82),
(168, 3, '2', 'roi', '00:15:00', 0, 87, '2022-10-12 15:10:47', '2022-10-12 15:50:27', '2022-10-12 15:50:27', NULL, NULL, NULL, 1, NULL, 78),
(169, 3, '2', 'roi', '00:15:00', 0, 87, '2022-10-12 15:10:47', '2022-10-12 15:10:47', NULL, NULL, NULL, NULL, 1, NULL, 86),
(170, 3, '2', 'roi', '00:15:00', 0, 87, '2022-10-12 15:10:47', '2022-10-12 15:56:50', '2022-10-12 15:56:50', NULL, NULL, NULL, 1, NULL, 83),
(171, 3, '2', 'roi', '00:15:00', 0, 87, '2022-10-12 15:10:47', '2022-10-13 17:24:51', '2022-10-13 17:24:51', NULL, NULL, NULL, 1, NULL, 85),
(172, 3, '2', 'roi', '00:15:00', 0, 87, '2022-10-12 15:10:47', '2022-10-12 15:10:47', NULL, NULL, NULL, NULL, 1, NULL, 82),
(173, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 15:50:45', '2022-10-12 15:51:20', '2022-10-12 15:51:20', NULL, NULL, NULL, 1, NULL, 87),
(174, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 15:50:45', '2022-10-12 15:50:45', NULL, NULL, NULL, NULL, 1, NULL, 86),
(175, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 15:50:45', '2022-10-12 15:56:54', '2022-10-12 15:56:54', NULL, NULL, NULL, 1, NULL, 83),
(176, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 15:50:45', '2022-10-13 17:25:00', '2022-10-13 17:25:00', NULL, NULL, NULL, 1, NULL, 85),
(177, 3, '2', 'roi', '00:15:00', 0, 78, '2022-10-12 15:50:45', '2022-10-12 15:50:45', NULL, NULL, NULL, NULL, 1, NULL, 82),
(178, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 15:58:33', '2022-10-12 15:58:36', '2022-10-12 15:58:36', NULL, NULL, NULL, 1, NULL, 87),
(179, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 15:58:33', '2022-10-12 15:59:32', '2022-10-12 15:59:32', NULL, NULL, NULL, 1, NULL, 78),
(180, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 15:58:33', '2022-10-12 15:58:33', NULL, NULL, NULL, NULL, 1, NULL, 86),
(181, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 15:58:33', '2022-10-13 17:25:06', '2022-10-13 17:25:06', NULL, NULL, NULL, 1, NULL, 85),
(182, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 15:58:33', '2022-10-12 15:58:33', NULL, NULL, NULL, NULL, 1, NULL, 82),
(183, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 15:59:09', '2022-10-12 15:59:13', '2022-10-12 15:59:13', NULL, NULL, NULL, 1, NULL, 87),
(184, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 15:59:09', '2022-10-12 15:59:52', '2022-10-12 15:59:52', NULL, NULL, NULL, 1, NULL, 78),
(185, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 15:59:09', '2022-10-12 15:59:09', NULL, NULL, NULL, NULL, 1, NULL, 86),
(186, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 15:59:09', '2022-10-12 15:59:09', NULL, NULL, NULL, NULL, 1, NULL, 85),
(187, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-12 15:59:09', '2022-10-12 15:59:09', NULL, NULL, NULL, NULL, 1, NULL, 82),
(188, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:04:12', '2022-10-12 16:04:12', NULL, NULL, NULL, NULL, 1, NULL, 87),
(189, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:04:12', '2022-10-12 16:21:13', '2022-10-12 16:21:13', NULL, NULL, NULL, 1, NULL, 78),
(190, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:04:12', '2022-10-12 16:11:09', '2022-10-12 16:11:09', NULL, NULL, NULL, 1, NULL, 86),
(191, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:04:12', '2022-10-12 16:04:12', NULL, NULL, NULL, NULL, 1, NULL, 85),
(192, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:04:12', '2022-10-12 16:04:12', NULL, NULL, NULL, NULL, 1, NULL, 82),
(193, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:04:15', '2022-10-12 16:04:15', NULL, NULL, NULL, NULL, 1, NULL, 87),
(194, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:04:15', '2022-10-12 16:21:30', '2022-10-12 16:21:30', NULL, NULL, NULL, 1, NULL, 78),
(195, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:04:15', '2022-10-12 16:11:18', '2022-10-12 16:11:18', NULL, NULL, NULL, 1, NULL, 86),
(196, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:04:15', '2022-10-12 16:04:15', NULL, NULL, NULL, NULL, 1, NULL, 85),
(197, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:04:15', '2022-10-12 16:04:15', NULL, NULL, NULL, NULL, 1, NULL, 82),
(198, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:05:26', '2022-10-12 16:05:26', NULL, NULL, NULL, NULL, 1, NULL, 87),
(199, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:05:26', '2022-10-12 16:21:36', '2022-10-12 16:21:36', NULL, NULL, NULL, 1, NULL, 78),
(200, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:05:26', '2022-10-12 16:11:23', '2022-10-12 16:11:23', NULL, NULL, NULL, 1, NULL, 86),
(201, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:05:26', '2022-10-12 16:05:26', NULL, NULL, NULL, NULL, 1, NULL, 85),
(202, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:05:26', '2022-10-12 16:05:26', NULL, NULL, NULL, NULL, 1, NULL, 82),
(203, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:11:56', '2022-10-12 16:11:56', NULL, NULL, NULL, NULL, 1, NULL, 87),
(204, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:11:56', '2022-10-12 16:21:41', '2022-10-12 16:21:41', NULL, NULL, NULL, 1, NULL, 78),
(205, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:11:56', '2022-10-12 16:12:11', '2022-10-12 16:12:11', NULL, NULL, NULL, 1, NULL, 86),
(206, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:11:56', '2022-10-12 16:11:56', NULL, NULL, NULL, NULL, 1, NULL, 85),
(207, 3, '3', 'roi', '00:15:00', 0, 83, '2022-10-12 16:11:56', '2022-10-12 16:11:56', NULL, NULL, NULL, NULL, 1, NULL, 82),
(208, 3, '3', 'roi', '00:15:00', 0, 86, '2022-10-12 16:13:04', '2022-10-12 16:13:04', NULL, NULL, NULL, NULL, 1, NULL, 87),
(209, 3, '3', 'roi', '00:15:00', 0, 86, '2022-10-12 16:13:04', '2022-10-12 16:21:45', '2022-10-12 16:21:45', NULL, NULL, NULL, 1, NULL, 78),
(210, 3, '3', 'roi', '00:15:00', 0, 86, '2022-10-12 16:13:04', '2022-10-12 16:13:54', '2022-10-12 16:13:54', NULL, NULL, NULL, 1, NULL, 83),
(211, 3, '3', 'roi', '00:15:00', 0, 86, '2022-10-12 16:13:04', '2022-10-12 16:13:04', NULL, NULL, NULL, NULL, 1, NULL, 85),
(212, 3, '3', 'roi', '00:15:00', 0, 86, '2022-10-12 16:13:04', '2022-10-12 16:13:04', NULL, NULL, NULL, NULL, 1, NULL, 82),
(213, 3, '3', 'roi', '00:15:00', 0, 86, '2022-10-12 16:13:31', '2022-10-12 16:13:31', NULL, NULL, NULL, NULL, 1, NULL, 87),
(214, 3, '3', 'roi', '00:15:00', 0, 86, '2022-10-12 16:13:31', '2022-10-12 16:21:51', '2022-10-12 16:21:51', NULL, NULL, NULL, 1, NULL, 78),
(215, 3, '3', 'roi', '00:15:00', 0, 86, '2022-10-12 16:13:31', '2022-10-12 16:14:10', '2022-10-12 16:14:10', NULL, NULL, NULL, 1, NULL, 83),
(216, 3, '3', 'roi', '00:15:00', 0, 86, '2022-10-12 16:13:31', '2022-10-12 16:13:31', NULL, NULL, NULL, NULL, 1, NULL, 85),
(217, 3, '3', 'roi', '00:15:00', 0, 86, '2022-10-12 16:13:31', '2022-10-12 16:13:31', NULL, NULL, NULL, NULL, 1, NULL, 82),
(218, 1, '29', 'roi', '00:10:00', 0, 83, '2022-10-13 14:12:45', '2022-10-13 14:12:45', NULL, NULL, NULL, NULL, 1, NULL, 87),
(219, 1, '29', 'roi', '00:10:00', 0, 83, '2022-10-13 14:12:45', '2022-10-13 14:12:45', NULL, NULL, NULL, NULL, 1, NULL, 78),
(220, 1, '29', 'roi', '00:10:00', 0, 83, '2022-10-13 14:12:45', '2022-10-13 14:12:45', NULL, NULL, NULL, NULL, 1, NULL, 86),
(221, 1, '29', 'roi', '00:10:00', 0, 83, '2022-10-13 14:12:45', '2022-10-13 14:15:38', '2022-10-13 14:15:38', NULL, NULL, NULL, 1, NULL, 85),
(222, 1, '29', 'roi', '00:10:00', 0, 83, '2022-10-13 14:12:45', '2022-10-13 14:12:45', NULL, NULL, NULL, NULL, 1, NULL, 82),
(223, 1, '29', 'roi', '00:10:00', 0, 83, '2022-10-13 14:14:11', '2022-10-13 14:14:11', NULL, NULL, NULL, NULL, 1, NULL, 87),
(224, 1, '29', 'roi', '00:10:00', 0, 83, '2022-10-13 14:14:11', '2022-10-13 14:14:11', NULL, NULL, NULL, NULL, 1, NULL, 78),
(225, 1, '29', 'roi', '00:10:00', 0, 83, '2022-10-13 14:14:11', '2022-10-13 14:14:11', NULL, NULL, NULL, NULL, 1, NULL, 86),
(226, 1, '29', 'roi', '00:10:00', 0, 83, '2022-10-13 14:14:11', '2022-10-13 14:15:45', '2022-10-13 14:15:45', NULL, NULL, NULL, 1, NULL, 85),
(227, 1, '29', 'roi', '00:10:00', 0, 83, '2022-10-13 14:14:11', '2022-10-13 14:14:11', NULL, NULL, NULL, NULL, 1, NULL, 82),
(228, 1, '29', 'roi', '00:10:00', 0, 85, '2022-10-13 14:17:40', '2022-10-13 14:17:40', NULL, NULL, NULL, NULL, 1, NULL, 87),
(229, 1, '29', 'roi', '00:10:00', 0, 85, '2022-10-13 14:17:40', '2022-10-13 14:17:40', NULL, NULL, NULL, NULL, 1, NULL, 78),
(230, 1, '29', 'roi', '00:10:00', 0, 85, '2022-10-13 14:17:40', '2022-10-13 14:17:40', NULL, NULL, NULL, NULL, 1, NULL, 86),
(231, 1, '29', 'roi', '00:10:00', 0, 85, '2022-10-13 14:17:40', '2022-10-13 14:20:31', '2022-10-13 14:20:31', NULL, NULL, NULL, 1, NULL, 83),
(232, 1, '29', 'roi', '00:10:00', 0, 85, '2022-10-13 14:17:40', '2022-10-13 14:17:40', NULL, NULL, NULL, NULL, 1, NULL, 82),
(233, 1, '29', 'roi', '00:10:00', 0, 83, '2022-10-13 14:20:59', '2022-10-13 14:20:59', NULL, NULL, NULL, NULL, 1, NULL, 87),
(234, 1, '29', 'roi', '00:10:00', 0, 83, '2022-10-13 14:20:59', '2022-10-13 14:20:59', NULL, NULL, NULL, NULL, 1, NULL, 78),
(235, 1, '29', 'roi', '00:10:00', 0, 83, '2022-10-13 14:20:59', '2022-10-13 14:20:59', NULL, NULL, NULL, NULL, 1, NULL, 86),
(236, 1, '29', 'roi', '00:10:00', 0, 83, '2022-10-13 14:20:59', '2022-10-13 14:20:59', NULL, NULL, NULL, NULL, 1, NULL, 85),
(237, 1, '29', 'roi', '00:10:00', 0, 83, '2022-10-13 14:20:59', '2022-10-13 14:20:59', NULL, NULL, NULL, NULL, 1, NULL, 82),
(238, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-13 14:30:46', '2022-10-13 14:30:46', NULL, NULL, NULL, NULL, 1, NULL, 88),
(239, 3, '2', 'roi', '00:15:00', 0, 83, '2022-10-13 14:31:12', '2022-10-13 14:31:12', NULL, NULL, NULL, NULL, 1, NULL, 88);

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('dkNsueg1UsMb0PVVBGgYYQQerSW0BLTEH4Bnx9fl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibmlyOTdGZ1E5YUJjNHFZWDV2bHd2czN0UFY3QjltV2VPMEFzTGNpTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1675165592),
('TRBCQ4Srd08zTHmPnqR13RgeWwjygrDq45IOb1eF', 85, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiY1NDQzRFdVZRb3AzUWRIRTVUbkxwOFVaS3JBbENnUDdMYkRBSUZETiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6ODU7fQ==', 1675174771),
('Eky9E7uqOX9xrREoLpNfL4ctLbQdKYP07I1mtHgk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiY3pWb1licjl4V2p4b3ZIbnBmaHJSMXo2dFZnSU85Z2hxUWxFNXVEUyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1676503883),
('xXPs4K9Dg0uN5lm3dGpe12aNQlqkmICzlUo0S13L', NULL, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN0ZZSlFEZHJGcGg1RWtmUGU4U3NiQ01IS1phUXNZNk9tb2pSZUZ5aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1678291459),
('nYrASv3s23XuSVLhrHLr4Q9KmtN016GPtfmjn0bn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidGx5OG5Sd2tJUklDSUFZUXRXUlo0cjMxc3A4YVFzTUpyMzdvTUdpWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1678379446);

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sources`
--

CREATE TABLE `sources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplementaire` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `statuts`
--

CREATE TABLE `statuts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `statuts`
--

INSERT INTO `statuts` (`id`, `libelle`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`) VALUES
(1, 'En attente', '2022-02-15 03:05:36', '2022-02-15 03:05:36', NULL, NULL, NULL),
(2, 'Suspendu', '2022-02-15 03:13:36', '2022-02-15 03:13:36', NULL, NULL, NULL),
(3, 'Validé', '2022-02-15 03:25:52', '2022-02-15 03:25:52', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `types_comptes`
--

CREATE TABLE `types_comptes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `types_coupons`
--

CREATE TABLE `types_coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nom` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `date_naissance` date DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_conneted_at` timestamp NULL DEFAULT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `etat_civil` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `nom`, `prenom`, `username`, `provider_id`, `telephone`, `sexe`, `email`, `avatar`, `date_naissance`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `settings`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_conneted_at`, `last_seen`, `etat_civil`) VALUES
(77, 1, 'Pro', NULL, 'Avatar', NULL, '0811246071', '', NULL, '', NULL, NULL, '$2y$10$MPI/Pc.zAZ5Hyrp13Cc9dOOA6.OPeRopJ14/w0Lk5dn2nofNe.JWe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-04 14:25:27', '2022-12-09 15:08:40', NULL, NULL, NULL, 3, NULL, '2022-12-09 15:08:40', NULL),
(78, 5, 'Ka', NULL, 'Lka', NULL, '0898008855', '', NULL, 'logo.jpg', NULL, NULL, '$2y$10$MPI/Pc.zAZ5Hyrp13Cc9dOOA6.OPeRopJ14/w0Lk5dn2nofNe.JWe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-04 14:33:19', '2022-12-13 16:46:45', NULL, NULL, NULL, 3, '2022-10-12 15:22:20', '2022-12-13 16:46:45', NULL),
(79, 5, 'sc', NULL, 'avatar24', NULL, '0814579179', '', NULL, '', NULL, NULL, '$2y$10$EmWNvzv.AsmjHPa9f4GPSei4VPRXwkebFVxq1fg8.11R1c7.SdYry', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-04 15:01:58', '2022-10-04 16:52:21', NULL, NULL, NULL, 3, '2022-10-04 15:01:59', '2022-10-04 16:52:21', NULL),
(80, 5, 'Musunga Alex', NULL, 'lmpro240598', NULL, '55555555547755', '', NULL, '', NULL, NULL, '$2y$10$V56jpedsjRH0ZnObsciPDe7DEDJZjFecKhWNH35sNoiyHNc6K5DS2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-05 14:42:24', '2022-10-05 16:37:26', NULL, NULL, NULL, 3, '2022-10-05 14:42:24', '2022-10-05 16:37:26', NULL),
(81, 5, 'Musunga Alex', NULL, 'avatar2405', NULL, '00000000000000', '', NULL, '', NULL, NULL, '$2y$10$3ajpHSR5hm3oj8qT2J3nTe46hLfs2htLCviddhKpUSOwLbEfB9KLW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-06 18:16:30', '2023-04-28 13:00:09', NULL, NULL, NULL, 3, '2022-10-06 18:16:32', '2023-04-28 13:00:09', NULL),
(82, 5, 'asf', NULL, 'lmpro24855', NULL, '11111285558535', '', NULL, '', NULL, NULL, '$2y$10$3TcfrEgtlOYWFb16xV0ahePQBjwYQVflc.7yYvNCMbWSmdDOIB9Gy', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-07 17:53:34', '2022-10-08 02:21:29', NULL, NULL, NULL, 3, '2022-10-07 17:53:35', '2022-10-08 02:21:29', NULL),
(83, 5, 'Masikini', NULL, 'Le destructeur 01', NULL, '0814119017', '', NULL, '3E883501-F4D8-421E-9B0F-222028C263E7.jpeg', NULL, NULL, '$2y$10$O/03kSIRO2JZWJcdAhm4TOyfbFOIhEsYJSZcYH1uxvsxXFZwNDVui', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-07 19:41:11', '2023-01-06 11:25:00', NULL, NULL, NULL, 3, NULL, '2023-01-06 11:25:00', NULL),
(84, 5, 'Pro', NULL, 'Ava', NULL, '081124579179', '', NULL, '', NULL, NULL, '$2y$10$Ihdce055UXLvpMmuQfA3HeKY3idZD.pgC63scjrYVoVfWDNe7EKV6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-07 19:50:18', '2022-10-07 20:33:47', NULL, NULL, NULL, 3, '2022-10-07 19:50:19', '2022-10-07 20:33:47', NULL),
(85, 5, 'Pro', NULL, 'Pro', NULL, '22222222222222', '', NULL, 'F4E_1345.JPG', NULL, NULL, '$2y$10$49CnaP1mUqu6ynKN6CTmk./rfE9lrxzdDUS.fl8ekBiSPJNpb/nsG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-08 20:14:37', '2023-01-31 23:19:30', NULL, NULL, NULL, 3, '2022-12-14 17:28:46', '2023-01-31 23:19:30', NULL),
(86, 5, 'Nzeza', 'ZAZA', 'Powerful', NULL, '0817045726', 'Féminin', NULL, '86.webp', NULL, NULL, '$2y$10$/mCxxauAEsptaAQu..9WH.qMCLTONGuNXu4TGLNCe/OhHKDHLrezG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-12 13:17:55', '2023-04-28 11:09:08', NULL, NULL, NULL, 2, NULL, '2022-10-21 09:51:12', NULL),
(87, 5, 'Wema', 'Moi', 'Josewema', NULL, '+243822677755', 'Féminin', NULL, '87.webp', NULL, NULL, '$2y$10$GIpEbQLo4tGh0K0gcVYrD./q2EL2Lk1NoMWVxIU9mBvq.Dd.E40pm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-12 15:03:11', '2023-04-28 11:05:41', NULL, NULL, NULL, 3, '2022-10-12 15:03:12', '2022-10-12 17:19:06', NULL),
(88, 5, 'Pro', NULL, 'Ava2405', NULL, '08111249071', '', NULL, '', NULL, NULL, '$2y$10$qrewVUcJjoQqaWn0OErtTuzCDBsHqrE2UJWWC2gDgaz.44ZzpjlLa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-13 14:01:45', '2022-10-13 14:31:04', NULL, NULL, NULL, 3, '2022-10-13 14:01:46', '2022-10-13 14:31:04', NULL),
(89, 5, 'Musique', NULL, 'Av24', NULL, '081124307111', '', NULL, 'IMG_20200517_184942_323.jpg', NULL, NULL, '$2y$10$SInxGmHP9.vg2MpbnCPAsO34R97g2/Xv6oEF7S8FOKa/sdkSKjx7.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-14 19:03:30', '2022-10-14 19:35:01', NULL, NULL, NULL, 3, NULL, '2022-10-14 19:35:01', NULL),
(90, 5, 'Mwanza', NULL, 'Blood', NULL, '0822787442', '', NULL, '', NULL, NULL, '$2y$10$WDz/sNjnbIgAh3SNAQbe6e142v6uXPEIHrnhdSeLXhXs2w1KlbzQW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-20 23:21:21', '2022-10-21 09:49:03', NULL, NULL, NULL, 3, NULL, '2022-10-21 09:49:03', NULL),
(91, 5, 'Ngelesi', NULL, 'F60', NULL, '0991952443', '', NULL, '', NULL, NULL, '$2y$10$U4xATAJn.//OKxy3CZO19OTm3Xlln..pG7aR0wGHKdIq0ldzFlFVi', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-20 23:24:42', '2022-10-21 09:49:57', NULL, NULL, NULL, 3, NULL, '2022-10-21 09:49:57', NULL),
(92, 5, 'Salue', NULL, 'Salue', NULL, '81123456789', '', NULL, '', NULL, NULL, '$2y$10$CVYgS35A1RyAMCi1aRFWzeu.asUPdKEoDKqkyh1a/VZ8nbCaItww6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-05 15:17:55', '2022-12-05 15:27:09', NULL, NULL, NULL, 3, '2022-12-05 15:17:56', '2022-12-05 15:27:09', NULL),
(93, 5, 'JHFDKGFJ', NULL, 'HD', NULL, '0999999991', '', NULL, '', NULL, NULL, '$2y$10$57c1fIgzvcvPPY.IR.hsWu1avhRqBVutQvGEszmn9gpIiO0yA5TOS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-09 15:09:32', '2022-12-09 16:25:14', NULL, NULL, NULL, 3, '2022-12-09 15:09:32', '2022-12-09 16:25:14', NULL),
(94, 5, 'G', NULL, 'O', NULL, '88888888888888', '', NULL, '', NULL, NULL, '$2y$10$AotGy9/SF5Q/2n5bxIQ3O.u6DqY5BXLGIW0PfBOyT6/MJgcJ8k6Rm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-13 16:04:11', '2022-12-14 13:25:28', NULL, NULL, NULL, 3, '2022-12-13 16:04:12', '2022-12-14 13:25:28', NULL),
(95, 5, 'Ntumba', NULL, 'Jayntmb', NULL, '990579420', '', NULL, '', NULL, NULL, '$2y$10$lPyZajwZb6utwRd0OWF5gu7NwEgJrJINk61eKmZnJnF7JAiGwKauC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-13 16:42:25', '2022-12-13 16:46:19', NULL, NULL, NULL, 3, '2022-12-13 16:42:26', '2022-12-13 16:46:19', NULL),
(96, 1, 'Lord', NULL, 'Lordyke12', NULL, '828580212', '', NULL, '', NULL, NULL, '$2y$10$3ajpHSR5hm3oj8qT2J3nTe46hLfs2htLCviddhKpUSOwLbEfB9KLW', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-24 14:25:13', '2023-05-02 16:37:18', NULL, NULL, NULL, 3, '2023-04-28 09:51:43', '2023-05-02 16:37:18', NULL),
(97, 3, 'Siméon zilou', NULL, 'simszilou', NULL, '0903600740', 'Masculin', 'simszilou@conbid.cd', '0903600740.webp', '1989-04-28', NULL, '$2y$10$f8krhlLM/N7oVx/hIU5wH.kqEhEa7KDheYO20W5Q2MFm7fpLlagCK', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-27 11:48:19', '2023-04-27 11:48:19', NULL, NULL, NULL, 3, NULL, NULL, NULL),
(98, 4, 'Bla', 'Lenny', 'bidens008', NULL, '0903600749', 'Masculin', 'lennybla@pharmansdrc.com', '98.webp', '1999-03-29', NULL, '$2y$10$HqrOw6lU5J9hybZbybxc0eVRUTlGGE9SwsTRbVBrTcoal15SDzwwK', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-28 07:34:38', '2023-04-28 10:36:26', NULL, 96, NULL, 3, NULL, NULL, NULL),
(99, 5, 'Paul', 'Jean', 'jp243', NULL, '+24390389088', 'Masculin', NULL, '99.webp', '1993-04-14', NULL, '$2y$10$g3eBQjgBIEB/AktrZp5/.etGj8FmE9yZRkYWwJx6d7RuQnJ7wLCrK', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-28 09:51:39', '2023-04-28 11:05:11', NULL, 96, NULL, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateurs`
--
ALTER TABLE `administrateurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `administrateurs_statut_id_foreign` (`statut_id`),
  ADD KEY `administrateurs_user_id_foreign` (`user_id`),
  ADD KEY `administrateurs_administrateur_id_foreign` (`administrateur_id`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_code_produit_unique` (`code_produit`),
  ADD KEY `articles_statut_id_foreign` (`statut_id`),
  ADD KEY `articles_user_id_foreign` (`user_id`),
  ADD KEY `articles_categorie_id_foreign` (`categorie_id`),
  ADD KEY `articles_paquet_id_foreign` (`paquet_id`);

--
-- Index pour la table `bideurs`
--
ALTER TABLE `bideurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bideurs_statut_id_foreign` (`statut_id`),
  ADD KEY `bideurs_user_id_foreign` (`user_id`),
  ADD KEY `bideurs_paquet_id_foreign` (`paquet_id`);

--
-- Index pour la table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bids_statut_id_foreign` (`statut_id`),
  ADD KEY `bids_user_id_foreign` (`user_id`);

--
-- Index pour la table `bid_statuts`
--
ALTER TABLE `bid_statuts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `boucliers`
--
ALTER TABLE `boucliers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_statut_id_foreign` (`statut_id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Index pour la table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chats_statut_id_foreign` (`statut_id`),
  ADD KEY `chats_user_id_foreign` (`user_id`);

--
-- Index pour la table `chat_encheres`
--
ALTER TABLE `chat_encheres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clicks`
--
ALTER TABLE `clicks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `click_autos`
--
ALTER TABLE `click_autos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `communiques`
--
ALTER TABLE `communiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `communiques_statut_id_foreign` (`statut_id`),
  ADD KEY `communiques_user_id_foreign` (`user_id`);

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comptes_statut_id_foreign` (`statut_id`),
  ADD KEY `comptes_user_id_foreign` (`user_id`),
  ADD KEY `comptes_types_compte_id_foreign` (`types_compte_id`);

--
-- Index pour la table `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupons_statut_id_foreign` (`statut_id`),
  ADD KEY `coupons_user_id_foreign` (`user_id`),
  ADD KEY `coupons_types_coupon_id_foreign` (`types_coupon_id`);

--
-- Index pour la table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Index pour la table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departements_statut_id_foreign` (`statut_id`),
  ADD KEY `departements_user_id_foreign` (`user_id`);

--
-- Index pour la table `encheregagners`
--
ALTER TABLE `encheregagners`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `encheres`
--
ALTER TABLE `encheres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `envoies`
--
ALTER TABLE `envoies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `historiques`
--
ALTER TABLE `historiques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paquets`
--
ALTER TABLE `paquets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pivot_bideur_encheres`
--
ALTER TABLE `pivot_bideur_encheres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pivot_clients_salons`
--
ALTER TABLE `pivot_clients_salons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `salons`
--
ALTER TABLE `salons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `salon_likes`
--
ALTER TABLE `salon_likes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sanctions`
--
ALTER TABLE `sanctions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateurs`
--
ALTER TABLE `administrateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `bideurs`
--
ALTER TABLE `bideurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `bid_statuts`
--
ALTER TABLE `bid_statuts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `boucliers`
--
ALTER TABLE `boucliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `chat_encheres`
--
ALTER TABLE `chat_encheres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `clicks`
--
ALTER TABLE `clicks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `communiques`
--
ALTER TABLE `communiques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `demandes`
--
ALTER TABLE `demandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `encheregagners`
--
ALTER TABLE `encheregagners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=802;

--
-- AUTO_INCREMENT pour la table `encheres`
--
ALTER TABLE `encheres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `envoies`
--
ALTER TABLE `envoies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT pour la table `historiques`
--
ALTER TABLE `historiques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `pivot_bideur_encheres`
--
ALTER TABLE `pivot_bideur_encheres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT pour la table `pivot_clients_salons`
--
ALTER TABLE `pivot_clients_salons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `salons`
--
ALTER TABLE `salons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `sanctions`
--
ALTER TABLE `sanctions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;
