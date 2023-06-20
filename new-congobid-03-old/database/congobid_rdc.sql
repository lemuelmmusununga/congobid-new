-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 20, 2023 at 01:46 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `congobid`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateurs`
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
-- Dumping data for table `administrateurs`
--

INSERT INTO `administrateurs` (`id`, `identification_fiscale`, `poste`, `interne`, `online`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `administrateur_id`) VALUES
(3, '00001', 'rien', 1, '0', '2022-08-10 17:06:57', '2022-08-11 03:05:59', NULL, NULL, NULL, 3, 49, 40),
(5, '0000', 'rien', 0, '0', '2022-08-10 17:22:50', '2022-08-10 17:23:52', NULL, NULL, NULL, 3, 51, 40);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promouvoir` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `prix_precedent` float DEFAULT NULL,
  `prix_marche` int(11) NOT NULL,
  `prix_min` int(11) NOT NULL,
  `prix_max` int(11) NOT NULL,
  `code_produit` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `salon` int(11) NOT NULL DEFAULT '0',
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `paquet_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `marque`, `promouvoir`, `description`, `prix`, `prix_precedent`, `prix_marche`, `prix_min`, `prix_max`, `code_produit`, `cout_livraison`, `infos_livraison`, `meta_description`, `meta_keywords`, `limite_enchere_auto`, `credit_enchere_auto`, `quantite`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `salon`, `categorie_id`, `paquet_id`) VALUES
(55, 'bitcon', 'Hp', 1, 'HTML tables allow web developers to arrange data into rows and columns. ... A table in HTML consists of table cells inside rows and columns.', 200, 189.516, 500, 167, 250, '', NULL, NULL, NULL, 'Iphone', NULL, NULL, '50', '2023-03-28 20:51:33', '2023-06-16 10:39:01', NULL, NULL, NULL, 3, 77, 0, 5, 1),
(57, 'camera', 'Hp', 1, 'Si vous utilisez un serveur proxy…\r\nVérifiez vos paramètres de proxy ou contactez votre administrateur réseau pour vous assurer que le serveur proxy fonctionne. Si vous ne pensez pas devoir utiliser de serveur proxy, procédez comme suit : Sélectionnez Applications > Préférences système > Réseau > Avancé > Proxys et désélectionnez les serveurs proxy sélectionnés.', 150, 150, 300, 100, 150, '', '150', 'Si vous utilisez un serveur proxy…\r\nVérifiez vos paramètres de proxy ou', NULL, NULL, '0', '0', '1', '2023-05-29 11:48:52', '2023-06-13 09:52:18', NULL, NULL, NULL, 3, 102, 0, 5, 1),
(58, 'camera 360', 'Hp', 1, 'Ensemble pour changer le monde : avec la fondation The Good Will Gift Initiative, vous pouvez aider à améliorer la vie des plus démunis et donner une chance aux enfants délaissés en les scolarisant. Chaque don compte et peut faire une grande différence. Rejoignez notre mouvement pour un avenir plus juste et solidaire !', 250, 249.208, 400, 133, 200, '', '0', 'rien', NULL, NULL, '0', '0', '1', '2023-06-12 11:39:32', '2023-06-14 14:31:43', NULL, NULL, NULL, 3, 77, 0, 5, 2),
(59, 'voiture', 'Toyota', 1, 'Ensure that the necessary dependencies or packages are installed. If you\'re using a framework like Laravel, it\'s important to have the required dependencies installed and up to date.', 800, 799.05, 30000, 10000, 15000, '', '0', 'Ensure that the necessary dependencies or packages are installed. If you\'re using a framework like Laravel, it\'s important to have the required dependencies installed and up to date.', NULL, NULL, '0', '0', '5', '2023-06-13 15:30:50', '2023-06-20 13:30:57', NULL, NULL, NULL, 3, 77, 0, 11, 3),
(65, 'voiture', 'Toyota', 0, 'Ensure that the necessary dependencies or packages are installed. If you\'re using a framework like Laravel, it\'s important to have the required dependencies installed and up to date.', 800, 30000, 30000, 10000, 15000, '7Sb1Ak7Sne', '0', 'Ensure that the necessary dependencies or packages are installed. If you\'re using a framework like Laravel, it\'s important to have the required dependencies installed and up to date.', NULL, NULL, '0', '0', '5', '2023-06-19 10:06:15', '2023-06-19 10:06:15', NULL, NULL, NULL, 3, 108, 1, 11, 3),
(66, 'voiture', 'Toyota', 0, 'Ensure that the necessary dependencies or packages are installed. If you\'re using a framework like Laravel, it\'s important to have the required dependencies installed and up to date.', 800, 800, 30000, 10000, 15000, 'mHt1A33xEG', '0', 'Ensure that the necessary dependencies or packages are installed. If you\'re using a framework like Laravel, it\'s important to have the required dependencies installed and up to date.', NULL, NULL, '0', '0', '5', '2023-06-19 11:34:59', '2023-06-19 11:34:59', NULL, NULL, NULL, 3, 96, 1, 11, 3),
(67, 'voiture', 'Toyota', 0, 'Ensure that the necessary dependencies or packages are installed. If you\'re using a framework like Laravel, it\'s important to have the required dependencies installed and up to date.', 800, 800, 30000, 10000, 15000, 'tdnbkNaSzG', '0', 'Ensure that the necessary dependencies or packages are installed. If you\'re using a framework like Laravel, it\'s important to have the required dependencies installed and up to date.', NULL, NULL, '0', '0', '5', '2023-06-19 11:53:58', '2023-06-19 11:53:58', NULL, NULL, NULL, 3, 96, 1, 11, 3),
(68, 'voiture', 'Toyota', 0, 'Ensure that the necessary dependencies or packages are installed. If you\'re using a framework like Laravel, it\'s important to have the required dependencies installed and up to date.', 800, 800, 30000, 10000, 15000, 'UReS32R2hy', '0', 'Ensure that the necessary dependencies or packages are installed. If you\'re using a framework like Laravel, it\'s important to have the required dependencies installed and up to date.', NULL, NULL, '0', '0', '5', '2023-06-19 12:02:19', '2023-06-19 12:02:19', NULL, NULL, NULL, 3, 108, 1, 11, 3),
(69, 'voiture', 'Toyota', 0, 'Ensure that the necessary dependencies or packages are installed. If you\'re using a framework like Laravel, it\'s important to have the required dependencies installed and up to date.', 800, 0, 30000, 10000, 15000, 'YpXJJYmIwU', '0', 'Ensure that the necessary dependencies or packages are installed. If you\'re using a framework like Laravel, it\'s important to have the required dependencies installed and up to date.', NULL, NULL, '0', '0', '5', '2023-06-19 12:57:40', '2023-06-19 13:28:06', NULL, NULL, NULL, 3, 96, 1, 11, 3);

-- --------------------------------------------------------

--
-- Table structure for table `bideurs`
--

CREATE TABLE `bideurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `balance` int(11) NOT NULL,
  `nontransferable` int(11) NOT NULL DEFAULT '0',
  `bonus` int(11) NOT NULL DEFAULT '0',
  `roi` int(11) NOT NULL DEFAULT '0',
  `foudre` int(11) NOT NULL DEFAULT '0',
  `bouclier` int(11) NOT NULL DEFAULT '0',
  `clicks` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `paquet_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bideurs`
--

INSERT INTO `bideurs` (`id`, `balance`, `nontransferable`, `bonus`, `roi`, `foudre`, `bouclier`, `clicks`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `paquet_id`, `admin_id`) VALUES
(26, 40, 0, 1, 5, 0, 0, 0, '2022-07-26 05:15:16', '2022-09-02 00:35:50', NULL, NULL, NULL, 3, 40, 1, NULL),
(27, 48, 0, 0, 0, 0, 0, 0, '2022-07-26 05:20:15', '2022-07-27 16:36:28', NULL, NULL, NULL, 3, 41, 1, NULL),
(28, 60, 0, 0, 0, 0, 0, 0, '2022-07-26 05:32:12', '2022-07-26 05:46:09', NULL, NULL, NULL, 3, 42, 1, NULL),
(29, 160, 0, 3, 0, 0, 0, 0, '2022-07-26 13:53:39', '2022-07-28 01:24:17', NULL, NULL, NULL, 3, 43, 1, NULL),
(30, 2930, 0, 2, 0, 0, 0, 0, '2022-07-26 14:08:38', '2022-07-26 16:22:01', NULL, NULL, NULL, 3, 44, 1, NULL),
(31, 750, 0, 0, 0, 0, 0, 0, '2022-08-10 17:51:47', '2022-08-12 03:21:42', NULL, NULL, NULL, 3, 52, 1, 40),
(32, 40, 0, 0, 0, 0, 0, 0, '2022-08-11 23:48:24', '2022-08-11 23:58:20', NULL, NULL, NULL, 3, 53, 1, 40),
(33, 136305, 0, 24, 0, 0, 0, 0, '2022-08-29 14:36:57', '2022-09-29 04:25:42', NULL, NULL, NULL, 3, 54, 1, NULL),
(34, 75, 0, 0, 0, 0, 0, 0, '2022-08-30 22:55:21', '2022-09-01 04:52:44', NULL, NULL, NULL, 3, 55, 1, NULL),
(35, 40, 0, 0, 0, 0, 0, 0, '2022-08-31 05:14:27', '2022-08-31 19:17:00', NULL, NULL, NULL, 3, 56, 1, 40),
(36, 81, 0, 1, 0, 0, 0, 0, '2022-08-31 23:48:02', '2022-09-01 04:58:55', NULL, NULL, NULL, 3, 57, 1, NULL),
(37, 18, 0, 6, 0, 0, 0, 0, '2022-08-31 23:56:41', '2022-09-16 21:50:58', NULL, NULL, NULL, 3, 58, 1, NULL),
(38, 60, 0, 1, 0, 0, 0, 0, '2022-09-01 00:01:46', '2022-09-01 05:12:48', NULL, NULL, NULL, 3, 59, 1, NULL),
(39, 40, 0, 0, 0, 0, 0, 0, '2022-09-08 17:32:42', '2022-09-08 17:32:42', NULL, NULL, NULL, 3, 60, 1, NULL),
(40, 270, 0, 0, 0, 0, 0, 0, '2022-09-13 22:20:55', '2022-09-13 22:33:29', NULL, NULL, NULL, 3, 61, 1, NULL),
(41, 300, 0, 0, 0, 0, 0, 0, '2022-09-14 22:13:20', '2022-09-14 22:16:43', NULL, NULL, NULL, 3, 62, 1, NULL),
(42, 0, 0, 1, 0, 0, 0, 0, '2022-09-14 22:56:13', '2022-09-14 23:17:30', NULL, NULL, NULL, 3, 63, 1, NULL),
(43, 30, 0, 2, 0, 0, 0, 0, '2022-09-17 11:44:31', '2022-09-17 16:53:14', NULL, NULL, NULL, 3, 64, 1, NULL),
(44, 17, 0, 0, 0, 0, 0, 0, '2022-09-19 19:28:23', '2022-09-19 20:30:59', NULL, NULL, NULL, 3, 65, 1, NULL),
(45, 90, 0, 5, 0, 0, 0, 0, '2022-09-20 20:56:00', '2022-09-20 23:36:54', NULL, NULL, NULL, 3, 66, 1, NULL),
(46, 70, 0, 1, 0, 0, 0, 0, '2022-09-25 23:17:40', '2022-09-25 23:18:30', NULL, NULL, NULL, 3, 67, 1, NULL),
(47, 270, 0, 0, 0, 0, 0, 0, '2022-09-28 22:18:36', '2022-09-28 22:22:28', NULL, NULL, NULL, 3, 68, 1, NULL),
(48, 50, 0, 1, 0, 0, 0, 0, '2022-09-28 22:28:42', '2022-09-28 22:33:33', NULL, NULL, NULL, 3, 69, 1, NULL),
(49, 3774, 0, 10, 0, 0, 0, 0, '2022-09-28 22:47:30', '2022-10-02 19:48:25', NULL, NULL, NULL, 3, 70, 1, NULL),
(50, 41200, 0, 3, 5, 0, 0, 0, '2022-09-28 22:48:24', '2022-09-28 23:29:25', NULL, NULL, NULL, 3, 71, 1, NULL),
(51, 430, 0, 2, 0, 0, 0, 0, '2022-09-28 22:48:52', '2022-09-28 23:28:42', NULL, NULL, NULL, 3, 72, 1, NULL),
(52, 150, 0, 4, 0, 0, 0, 0, '2022-09-29 11:32:13', '2022-09-29 17:26:42', NULL, NULL, NULL, 3, 73, 1, NULL),
(53, 292, 0, 17, 0, 0, 0, 0, '2022-09-29 14:23:22', '2022-09-29 17:18:38', NULL, NULL, NULL, 3, 74, 1, NULL),
(54, 250, 0, 1, 0, 0, 0, 0, '2022-09-30 21:00:15', '2022-09-30 22:05:26', NULL, NULL, NULL, 3, 75, 1, NULL),
(55, 170, 0, 2, 0, 0, 0, 0, '2022-09-30 23:01:48', '2022-09-30 23:22:46', NULL, NULL, NULL, 3, 76, 1, NULL),
(56, 2586, 0, 8, 0, 0, 0, 0, '2022-10-04 14:25:27', '2023-06-16 11:29:46', NULL, NULL, NULL, 3, 77, 1, NULL),
(57, 128, 0, 9, 0, 0, 0, 0, '2022-10-04 14:33:19', '2023-05-21 15:51:08', NULL, NULL, NULL, 3, 78, 1, NULL),
(58, 470, 0, 2, 0, 0, 0, 0, '2022-10-04 15:01:58', '2022-10-04 15:41:56', NULL, NULL, NULL, 3, 79, 1, NULL),
(59, 80, 0, 2, 0, 0, 0, 0, '2022-10-05 14:42:24', '2022-10-05 15:13:00', NULL, NULL, NULL, 3, 80, 1, NULL),
(60, 148, 0, 0, 0, 0, 0, 0, '2022-10-06 18:16:30', '2022-10-07 00:03:33', NULL, NULL, NULL, 3, 81, 1, NULL),
(61, 16808, 0, 2, 0, 0, 0, 0, '2022-10-07 17:53:34', '2022-10-08 02:09:36', NULL, NULL, NULL, 3, 82, 1, NULL),
(62, 463, 0, 1, 0, 0, 0, 0, '2022-10-07 19:41:11', '2022-10-20 23:27:05', NULL, NULL, NULL, 3, 83, 1, NULL),
(63, 70, 0, 0, 0, 0, 0, 0, '2022-10-07 19:50:18', '2022-10-07 20:29:42', NULL, NULL, NULL, 3, 84, 1, NULL),
(64, 275, 0, 47, 0, 0, 0, 0, '2022-10-08 20:14:37', '2022-12-16 13:00:31', NULL, NULL, NULL, 3, 85, 1, NULL),
(65, 1937, 0, 0, 0, 0, 0, 0, '2022-10-12 13:17:55', '2022-10-21 09:51:06', NULL, NULL, NULL, 3, 86, 1, NULL),
(66, 96, 0, 20, 0, 0, 0, 0, '2022-10-12 15:03:11', '2022-10-12 16:03:02', NULL, NULL, NULL, 3, 87, 1, NULL),
(67, 60, 0, 2, 0, 0, 0, 0, '2022-10-13 14:01:45', '2022-10-13 14:27:30', NULL, NULL, NULL, 3, 88, 1, NULL),
(68, 90, 0, 4, 0, 0, 0, 0, '2022-10-14 19:03:30', '2022-10-14 19:25:29', NULL, NULL, NULL, 3, 89, 1, NULL),
(69, 1480, 0, 0, 0, 0, 0, 0, '2022-10-20 23:21:21', '2022-10-21 09:48:52', NULL, NULL, NULL, 3, 90, 1, NULL),
(70, 1480, 0, 0, 0, 0, 0, 0, '2022-10-20 23:24:42', '2022-10-21 09:49:34', NULL, NULL, NULL, 3, 91, 1, NULL),
(71, 30, 0, 1, 0, 0, 0, 0, '2022-12-05 15:17:55', '2022-12-05 15:18:12', NULL, NULL, NULL, 3, 92, 1, NULL),
(72, 30, 0, 1, 0, 0, 0, 0, '2022-12-09 15:09:32', '2022-12-09 15:09:45', NULL, NULL, NULL, 3, 93, 1, NULL),
(73, 30, 0, 4, 0, 0, 0, 0, '2022-12-13 16:04:11', '2022-12-13 16:44:36', NULL, NULL, NULL, 3, 94, 1, NULL),
(74, 40, 0, 1, 0, 0, 0, 0, '2022-12-13 16:42:25', '2023-03-29 22:31:54', NULL, NULL, NULL, 3, 95, 1, NULL),
(75, 48080, 0, 16, 6, 0, 0, 0, '2023-03-14 20:08:54', '2023-06-20 13:30:57', NULL, NULL, NULL, 3, 96, 1, NULL),
(76, 40, 0, 0, 0, 0, 0, 0, '2023-03-31 19:16:30', '2023-04-13 22:43:02', NULL, NULL, NULL, 3, 98, NULL, NULL),
(77, 566, 0, 3, 0, 0, 0, 0, '2023-05-15 17:37:47', '2023-05-19 22:58:12', NULL, NULL, NULL, 3, 99, NULL, NULL),
(78, 0, 0, 1, 0, 0, 0, 0, '2023-05-21 12:58:37', '2023-05-21 14:00:53', NULL, NULL, NULL, 3, 100, NULL, NULL),
(79, 0, 0, 2, 0, 0, 0, 0, '2023-05-21 09:54:24', '2023-05-21 15:45:32', NULL, NULL, NULL, 3, 101, NULL, NULL),
(80, 30, 0, 0, 0, 0, 0, 0, '2023-05-21 17:34:43', '2023-05-21 17:35:03', NULL, NULL, NULL, 3, 102, NULL, NULL),
(81, 68, 0, 5, 0, 0, 0, 0, '2023-05-22 13:56:49', '2023-06-06 11:14:05', NULL, NULL, NULL, 3, 103, NULL, NULL),
(82, 30, 0, 1, 0, 0, 0, 0, '2023-05-22 16:04:53', '2023-05-22 16:05:19', NULL, NULL, NULL, 3, 104, NULL, NULL),
(83, 30, 0, 1, 0, 0, 0, 0, '2023-05-24 15:30:13', '2023-05-24 15:31:04', NULL, NULL, NULL, 3, 105, NULL, NULL),
(84, 50, 0, 1, 0, 0, 0, 0, '2023-05-29 12:25:57', '2023-05-29 13:30:40', NULL, NULL, NULL, 3, 106, NULL, NULL),
(85, 40, 0, 1, 0, 0, 0, 0, '2023-06-13 15:51:16', '2023-06-13 16:00:45', NULL, NULL, NULL, 3, 107, NULL, NULL),
(86, 161922, 0, 1, 0, 0, 0, 0, '2023-06-13 22:59:37', '2023-06-19 13:24:25', NULL, NULL, NULL, 3, 108, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantite` int(11) NOT NULL,
  `valeur` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `really_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `quantite`, `valeur`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `really_time`) VALUES
(3, 10, '1', '2022-03-09 21:28:45', '2022-08-11 00:36:47', NULL, 40, NULL, 3, 1, NULL),
(4, 80, '5', '2022-03-09 21:39:42', '2022-03-09 21:39:42', NULL, NULL, NULL, 3, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bloques`
--

CREATE TABLE `bloques` (
  `id` int(11) NOT NULL,
  `user_blocked` int(11) NOT NULL,
  `user_action` int(11) NOT NULL,
  `enchere_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloques`
--

INSERT INTO `bloques` (`id`, `user_blocked`, `user_action`, `enchere_id`, `created_at`, `updated_at`) VALUES
(19, 103, 77, 38, '2023-06-13 10:18:42', '2023-06-13 10:18:42'),
(20, 96, 108, 56, '2023-06-19 13:25:23', '2023-06-19 13:25:23'),
(21, 108, 96, 56, '2023-06-19 13:26:48', '2023-06-19 13:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `boucliers`
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
-- Dumping data for table `boucliers`
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
-- Table structure for table `categories`
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
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `libelle`, `categorie_id`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'telephone -tablette', 1, '2022-02-28 22:39:13', '2022-08-11 00:14:41', '2022-03-09 19:19:35', 1, 1, 3, 40),
(2, 'ordinateurs - pcs', 1, '2022-02-28 22:42:01', '2022-03-10 00:08:46', '2022-03-10 00:08:46', 1, 1, 2, 1),
(5, 'multimedias', 1, '2022-03-09 23:32:35', '2022-08-11 00:15:10', NULL, NULL, NULL, 3, 40),
(6, 'bijoux - montres', 2, '2022-09-16 21:17:44', '2022-09-16 21:17:44', NULL, NULL, NULL, 3, 40),
(9, 'vetements - chaussures', 3, '2022-09-16 21:23:09', '2022-09-16 21:23:09', NULL, NULL, NULL, 3, 40),
(10, 'electromenagers', 3, '2022-09-16 21:23:09', '2022-09-16 21:23:09', NULL, NULL, NULL, 3, 40),
(11, 'vehicules', 3, '2022-09-16 21:23:09', '2022-09-16 21:23:09', NULL, NULL, NULL, 3, 40),
(12, 'divers', 3, '2022-09-16 21:23:09', '2022-09-16 21:23:09', NULL, NULL, NULL, 3, 40);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
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
-- Table structure for table `chat_encheres`
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
-- Dumping data for table `chat_encheres`
--

INSERT INTO `chat_encheres` (`id`, `user_id`, `content`, `libelle`, `enchere_id`, `updated_at`, `created_at`) VALUES
(57, 85, NULL, 'Salut ', 32, '2022-12-14 17:33:38', '2022-12-14 17:33:38'),
(58, 77, NULL, 'salut', 38, '2023-06-09 14:44:14', '2023-06-09 14:44:14'),
(59, 77, NULL, 'y\'a des bideurs ?', 38, '2023-06-09 14:46:39', '2023-06-09 14:46:39'),
(60, 77, NULL, 'salut', 38, '2023-06-13 00:33:23', '2023-06-13 00:33:23'),
(61, 107, NULL, 'salut au premier', 40, '2023-06-13 15:54:10', '2023-06-13 15:54:10'),
(62, 108, NULL, 'salut', 56, '2023-06-19 13:25:03', '2023-06-19 13:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `clicks`
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
-- Dumping data for table `clicks`
--

INSERT INTO `clicks` (`id`, `paquet_id`, `prix`, `prix_bid`, `benefice`, `temps_blocage`) VALUES
(1, 1, 0.05, 1, 340, '00:00:00'),
(2, 2, 0.09, 2, 380, '00:00:00'),
(3, 3, 0.21, 1, 472, '00:00:00'),
(4, 4, 0.4, 1, 513, '00:00:00'),
(5, 5, 0.74, 1, 675, '00:00:00'),
(6, 6, 1.23, 1, 810, '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `click_autos`
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
-- Dumping data for table `click_autos`
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
-- Table structure for table `communiques`
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
-- Table structure for table `comptes`
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
-- Table structure for table `conditions`
--

CREATE TABLE `conditions` (
  `id` int(11) NOT NULL,
  `titre` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
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
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `telephone`, `content`, `email`, `created_at`, `updated_at`) VALUES
(4, 'Claude kalondji', '243818086893', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dignissimos adipisci necessitatibus, illo, officiis sequi harum, quod explicabo ipsam aut odit natus voluptate atque! Dolore explicabo omnis nisi vitae deleniti.', 'lem.musunga@gmail.com', '2022-08-12 04:02:16', '2022-08-11 14:02:16'),
(5, 'Claude kalondji', '0811246071', 'bonjour monsieur', 'lem.musunga@gmail.com', '2022-08-31 05:31:32', '2022-08-30 15:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
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
-- Table structure for table `data_rows`
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
-- Table structure for table `data_types`
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
-- Table structure for table `demandes`
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
-- Dumping data for table `demandes`
--

INSERT INTO `demandes` (`id`, `admin`, `name`, `telephone`, `nombre`, `state`, `payement`, `description`, `created_at`, `updated_at`) VALUES
(2, 40, 'root', '0811246072', 50, 1, 'MPSA', 'bonjour', '2022-08-11 18:07:39', '2022-08-11 06:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `departements`
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
-- Table structure for table `encheregagners`
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
-- Dumping data for table `encheregagners`
--

INSERT INTO `encheregagners` (`id`, `user_id`, `enchere_id`, `valeur_click`, `code`, `state`, `payed_by`, `updated_at`, `created_at`) VALUES
(689, 0, 0, 0, '', NULL, NULL, '2022-09-27 17:55:42', '2022-09-25 17:23:01'),
(690, 0, 0, 0, '', NULL, NULL, '2022-09-27 17:56:06', '2022-09-27 17:56:06'),
(691, 0, 0, 0, '', NULL, NULL, '2022-09-28 18:52:32', '2022-09-27 17:58:20'),
(692, 0, 0, 0, '', NULL, NULL, '2022-09-28 18:36:51', '2022-09-28 12:17:02'),
(693, 0, 0, 0, '', NULL, NULL, '2022-09-28 18:40:26', '2022-09-28 18:40:26'),
(694, 0, 0, 0, '', NULL, NULL, '2022-09-28 23:12:03', '2022-09-28 18:40:38'),
(695, 0, 0, 0, '', NULL, NULL, '2022-09-28 22:16:31', '2022-09-28 18:52:58'),
(696, 0, 0, 0, '', NULL, NULL, '2022-09-28 22:18:37', '2022-09-28 22:18:37'),
(697, 0, 0, 0, '', NULL, NULL, '2022-09-28 22:19:55', '2022-09-28 22:19:55'),
(698, 0, 0, 0, '', NULL, NULL, '2022-09-29 14:23:26', '2022-09-28 22:20:13'),
(699, 0, 0, 0, '', NULL, NULL, '2022-09-29 15:18:01', '2022-09-28 23:12:22'),
(700, 0, 0, 0, '', NULL, NULL, '2022-09-29 14:23:29', '2022-09-29 14:23:29'),
(701, 0, 0, 0, '', NULL, NULL, '2022-09-29 14:24:59', '2022-09-29 14:24:59'),
(702, 0, 0, 0, '', 1, NULL, '2022-09-29 14:16:33', '2022-09-29 14:26:07'),
(703, 0, 0, 0, '', 1, NULL, '2022-09-30 20:58:45', '2022-09-29 14:26:44'),
(704, 0, 0, 0, '', NULL, NULL, '2022-09-29 16:56:10', '2022-09-29 15:18:26'),
(705, 0, 0, 0, '', NULL, NULL, '2022-09-29 16:56:33', '2022-09-29 16:56:33'),
(706, 0, 0, 0, '', NULL, NULL, '2022-09-29 16:56:36', '2022-09-29 16:56:36'),
(707, 0, 0, 0, '', NULL, NULL, '2022-09-29 16:56:44', '2022-09-29 16:56:44'),
(708, 0, 0, 0, '', NULL, NULL, '2022-09-29 16:56:47', '2022-09-29 16:56:47'),
(709, 0, 0, 0, '', NULL, NULL, '2022-09-29 16:56:57', '2022-09-29 16:56:57'),
(710, 0, 0, 0, '', NULL, NULL, '2022-09-29 16:57:52', '2022-09-29 16:57:52'),
(711, 0, 0, 0, '', NULL, NULL, '2022-09-29 16:57:55', '2022-09-29 16:57:55'),
(712, 0, 0, 0, '', NULL, NULL, '2022-09-29 17:00:30', '2022-09-29 17:00:30'),
(713, 0, 0, 0, '', NULL, NULL, '2022-09-29 17:00:56', '2022-09-29 17:00:56'),
(714, 0, 0, 0, '', NULL, NULL, '2022-09-29 17:10:15', '2022-09-29 17:10:15'),
(715, 0, 0, 0, '', NULL, NULL, '2022-09-29 17:11:23', '2022-09-29 17:11:23'),
(716, 0, 0, 0, '', NULL, NULL, '2022-09-29 17:12:34', '2022-09-29 17:12:34'),
(717, 0, 0, 0, '', NULL, NULL, '2022-09-30 21:00:16', '2022-09-30 21:00:16'),
(718, 0, 0, 0, '', NULL, NULL, '2022-09-30 21:01:02', '2022-09-30 21:01:02'),
(719, 0, 0, 0, '', NULL, NULL, '2022-10-04 15:01:22', '2022-09-30 21:01:11'),
(720, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:05:17', '2022-09-30 22:05:17'),
(721, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:05:17', '2022-09-30 22:05:17'),
(722, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:05:26', '2022-09-30 22:05:26'),
(723, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:05:26', '2022-09-30 22:05:26'),
(724, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:06:02', '2022-09-30 22:06:02'),
(725, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:06:02', '2022-09-30 22:06:02'),
(726, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:06:11', '2022-09-30 22:06:11'),
(727, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:06:11', '2022-09-30 22:06:11'),
(728, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:06:37', '2022-09-30 22:06:37'),
(729, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:06:37', '2022-09-30 22:06:37'),
(730, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:06:47', '2022-09-30 22:06:47'),
(731, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:06:47', '2022-09-30 22:06:47'),
(732, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:07:08', '2022-09-30 22:07:08'),
(733, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:07:08', '2022-09-30 22:07:08'),
(734, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:07:19', '2022-09-30 22:07:19'),
(735, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:07:20', '2022-09-30 22:07:20'),
(736, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:08:18', '2022-09-30 22:08:18'),
(737, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:53:15', '2022-09-30 22:53:15'),
(738, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:53:35', '2022-09-30 22:53:35'),
(739, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:54:41', '2022-09-30 22:54:41'),
(740, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:56:01', '2022-09-30 22:56:01'),
(741, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:58:12', '2022-09-30 22:58:12'),
(742, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:58:43', '2022-09-30 22:58:43'),
(743, 0, 0, 0, '', NULL, NULL, '2022-09-30 22:59:26', '2022-09-30 22:59:26'),
(744, 0, 0, 0, '', NULL, NULL, '2022-09-30 23:00:00', '2022-09-30 23:00:00'),
(745, 0, 0, 0, '', NULL, NULL, '2022-09-30 23:01:00', '2022-09-30 23:01:00'),
(746, 0, 0, 0, '', NULL, NULL, '2022-09-30 23:01:50', '2022-09-30 23:01:50'),
(747, 0, 0, 0, '', NULL, NULL, '2022-09-30 23:02:43', '2022-09-30 23:02:43'),
(748, 0, 0, 0, '', NULL, NULL, '2022-09-30 23:02:54', '2022-09-30 23:02:54'),
(749, 0, 0, 0, '', NULL, NULL, '2022-09-30 23:02:59', '2022-09-30 23:02:59'),
(750, 0, 0, 0, '', NULL, NULL, '2022-09-30 23:05:26', '2022-09-30 23:05:26'),
(751, 0, 0, 0, '', NULL, NULL, '2022-09-30 23:08:12', '2022-09-30 23:08:12'),
(752, 0, 0, 0, '', NULL, NULL, '2022-09-30 23:10:27', '2022-09-30 23:10:27'),
(754, 0, 0, 0, '', NULL, NULL, '2022-10-04 15:01:59', '2022-10-04 15:01:59'),
(755, 0, 0, 0, '', NULL, NULL, '2022-10-04 15:04:04', '2022-10-04 15:04:04'),
(756, 0, 0, 0, '', NULL, NULL, '2022-10-14 19:54:48', '2022-10-04 15:04:15'),
(757, 0, 0, 0, '', NULL, NULL, '2022-10-13 12:24:49', '2022-10-13 12:24:49'),
(758, 0, 0, 0, '', NULL, NULL, '2022-10-13 12:24:56', '2022-10-13 12:24:56'),
(759, 0, 0, 0, '', NULL, NULL, '2022-10-13 12:25:10', '2022-10-13 12:25:10'),
(760, 0, 0, 0, '', NULL, NULL, '2022-10-13 12:28:31', '2022-10-13 12:28:31'),
(761, 0, 0, 0, '', NULL, NULL, '2022-10-13 12:41:45', '2022-10-13 12:41:45'),
(762, 0, 0, 0, '', NULL, NULL, '2022-10-13 12:47:53', '2022-10-13 12:47:53'),
(763, 0, 0, 0, '', NULL, NULL, '2022-10-13 12:48:40', '2022-10-13 12:48:40'),
(764, 0, 0, 0, '', NULL, NULL, '2022-10-13 13:25:41', '2022-10-13 13:25:41'),
(765, 0, 0, 0, '', NULL, NULL, '2022-10-13 14:00:15', '2022-10-13 14:00:15'),
(766, 0, 0, 0, '', NULL, NULL, '2022-10-13 14:00:43', '2022-10-13 14:00:43'),
(767, 0, 0, 0, '', NULL, NULL, '2022-10-13 14:00:59', '2022-10-13 14:00:59'),
(768, 0, 0, 0, '', NULL, NULL, '2022-10-13 14:01:46', '2022-10-13 14:01:46'),
(769, 83, 29, 6015, '', NULL, NULL, '2022-10-13 14:20:59', '2022-10-13 14:04:41'),
(770, 0, 0, 0, '', NULL, NULL, '2022-10-14 19:02:37', '2022-10-14 19:02:37'),
(771, 0, 0, 0, '', NULL, NULL, '2022-10-14 19:02:52', '2022-10-14 19:02:52'),
(772, 0, 0, 0, '', NULL, NULL, '2022-10-14 19:03:31', '2022-10-14 19:03:31'),
(773, 89, 30, 1470, '', NULL, NULL, '2022-10-14 19:26:37', '2022-10-14 19:03:39'),
(774, 0, 0, 0, '', NULL, NULL, '2022-10-14 20:20:55', '2022-10-14 20:20:55'),
(775, 0, 0, 0, '', NULL, NULL, '2022-10-14 20:21:54', '2022-10-14 20:21:54'),
(776, 0, 0, 0, '', NULL, NULL, '2022-10-14 20:22:07', '2022-10-14 20:22:07'),
(777, 0, 0, 0, '', NULL, NULL, '2022-10-14 20:24:19', '2022-10-14 20:24:19'),
(778, 0, 0, 0, '', NULL, NULL, '2022-11-15 15:25:00', '2022-11-15 15:25:00'),
(779, 0, 0, 0, '', NULL, NULL, '2022-11-15 15:26:11', '2022-11-15 15:26:11'),
(780, 0, 0, 0, '', NULL, NULL, '2022-11-15 15:26:35', '2022-11-15 15:26:35'),
(781, 0, 0, 0, '', NULL, NULL, '2022-11-15 15:31:19', '2022-11-15 15:31:19'),
(782, 85, 31, 368, '', 1, 77, '2022-12-14 13:12:30', '2022-11-15 15:31:44'),
(783, 0, 0, 0, '', NULL, NULL, '2022-11-29 13:23:58', '2022-11-29 13:23:58'),
(784, 0, 0, 0, '', NULL, NULL, '2022-11-29 13:34:10', '2022-11-29 13:34:10'),
(785, 0, 0, 0, '', NULL, NULL, '2022-11-29 13:34:51', '2022-11-29 13:34:51'),
(786, 0, 0, 0, '', NULL, NULL, '2022-11-29 13:55:45', '2022-11-29 13:55:45'),
(787, 0, 0, 0, '', NULL, NULL, '2022-12-02 23:46:15', '2022-12-02 23:46:15'),
(788, 0, 0, 0, '', NULL, NULL, '2022-12-14 17:28:24', '2022-12-02 23:46:43'),
(789, 0, 0, 0, '', NULL, NULL, '2022-12-09 15:02:30', '2022-12-09 15:02:30'),
(790, 0, 0, 0, '', NULL, NULL, '2022-12-13 16:38:01', '2022-12-09 15:02:43'),
(791, 0, 0, 0, '', NULL, NULL, '2022-12-13 16:38:35', '2022-12-13 16:38:35'),
(792, 0, 0, 0, '', NULL, NULL, '2022-12-13 16:39:05', '2022-12-13 16:39:05'),
(793, 0, 0, 0, '', NULL, NULL, '2022-12-13 16:39:14', '2022-12-13 16:39:14'),
(794, 85, 33, 117, '', NULL, NULL, '2022-12-14 13:03:15', '2022-12-13 16:39:22'),
(795, 0, 0, 0, '', NULL, NULL, '2022-12-14 17:28:46', '2022-12-14 17:28:46'),
(796, 85, 32, 567, '', NULL, NULL, '2022-12-14 17:35:05', '2022-12-14 17:29:01'),
(797, 0, 0, 0, '', NULL, NULL, '2023-03-27 19:21:50', '2023-03-27 19:21:50'),
(798, 0, 0, 0, '', NULL, NULL, '2023-03-27 19:50:40', '2023-03-27 19:50:40'),
(799, 0, 0, 0, '', NULL, NULL, '2023-03-27 20:02:25', '2023-03-27 20:02:25'),
(800, 0, 0, 0, '', NULL, NULL, '2023-03-27 20:14:21', '2023-03-27 20:14:21'),
(801, 0, 0, 0, '', NULL, NULL, '2023-03-27 20:15:07', '2023-03-27 20:15:07'),
(802, 0, 0, 0, '', NULL, NULL, '2023-03-27 20:22:44', '2023-03-27 20:22:44'),
(803, 0, 0, 0, '', NULL, NULL, '2023-03-27 20:23:26', '2023-03-27 20:23:26'),
(804, 0, 0, 0, '', NULL, NULL, '2023-03-27 20:46:32', '2023-03-27 20:46:32'),
(805, 0, 0, 0, '', NULL, NULL, '2023-03-27 20:46:44', '2023-03-27 20:46:44'),
(806, 0, 0, 0, '', NULL, NULL, '2023-03-27 20:46:54', '2023-03-27 20:46:54'),
(807, 0, 0, 0, '', NULL, NULL, '2023-03-27 20:51:05', '2023-03-27 20:51:05'),
(808, 0, 0, 0, '', NULL, NULL, '2023-03-27 22:37:25', '2023-03-27 22:37:25'),
(809, 0, 0, 0, '', NULL, NULL, '2023-03-27 22:58:24', '2023-03-27 22:58:24'),
(810, 0, 0, 0, '', NULL, NULL, '2023-03-29 18:51:42', '2023-03-29 18:51:42'),
(811, 0, 0, 0, '', NULL, NULL, '2023-03-29 19:02:41', '2023-03-29 19:02:41'),
(812, 0, 0, 0, '', NULL, NULL, '2023-04-04 23:07:59', '2023-04-04 23:07:59'),
(813, 0, 0, 0, '', NULL, NULL, '2023-04-04 23:13:05', '2023-04-04 23:13:05'),
(814, 0, 0, 0, '', NULL, NULL, '2023-04-04 23:16:53', '2023-04-04 23:16:53'),
(815, 0, 0, 0, '', NULL, NULL, '2023-04-04 23:18:48', '2023-04-04 23:18:48'),
(816, 0, 0, 0, '', NULL, NULL, '2023-04-04 23:19:06', '2023-04-04 23:19:06'),
(817, 0, 0, 0, '', NULL, NULL, '2023-04-04 23:54:07', '2023-04-04 23:54:07'),
(818, 0, 0, 0, '', NULL, NULL, '2023-04-04 23:54:28', '2023-04-04 23:54:28'),
(819, 0, 0, 0, '', NULL, NULL, '2023-04-07 23:07:41', '2023-04-07 23:07:41'),
(820, 0, 0, 0, '', NULL, NULL, '2023-04-07 23:08:19', '2023-04-07 23:08:19'),
(821, 0, 0, 0, '', NULL, NULL, '2023-05-02 17:38:30', '2023-05-02 17:38:30'),
(822, 0, 0, 0, '', NULL, NULL, '2023-05-02 17:49:18', '2023-05-02 17:49:18'),
(823, 0, 0, 0, '', NULL, NULL, '2023-05-02 18:00:00', '2023-05-02 18:00:00'),
(824, 0, 0, 0, '', NULL, NULL, '2023-05-02 18:00:46', '2023-05-02 18:00:46'),
(825, 0, 0, 0, '', NULL, NULL, '2023-05-02 18:01:39', '2023-05-02 18:01:39'),
(826, 0, 0, 0, '', NULL, NULL, '2023-05-02 18:03:51', '2023-05-02 18:03:51'),
(827, 0, 0, 0, '', NULL, NULL, '2023-05-02 18:23:51', '2023-05-02 18:23:51'),
(828, 0, 0, 0, '', NULL, NULL, '2023-05-02 18:24:39', '2023-05-02 18:24:39'),
(829, 0, 0, 0, '', NULL, NULL, '2023-05-02 18:26:01', '2023-05-02 18:26:01'),
(830, 0, 0, 0, '', NULL, NULL, '2023-05-02 18:26:31', '2023-05-02 18:26:31'),
(831, 0, 0, 0, '', NULL, NULL, '2023-05-02 18:36:20', '2023-05-02 18:36:20'),
(832, 0, 0, 0, '', NULL, NULL, '2023-05-02 18:38:51', '2023-05-02 18:38:51'),
(833, 0, 0, 0, '', NULL, NULL, '2023-05-02 18:45:11', '2023-05-02 18:45:11'),
(834, 0, 0, 0, '', NULL, NULL, '2023-05-02 18:47:37', '2023-05-02 18:47:37'),
(835, 0, 0, 0, '', NULL, NULL, '2023-05-02 18:48:14', '2023-05-02 18:48:14'),
(836, 0, 0, 0, '', NULL, NULL, '2023-05-02 18:48:48', '2023-05-02 18:48:48'),
(837, 0, 0, 0, '', NULL, NULL, '2023-05-02 18:50:09', '2023-05-02 18:50:09'),
(838, 0, 0, 0, '', NULL, NULL, '2023-05-02 18:55:34', '2023-05-02 18:55:34'),
(839, 0, 0, 0, '', NULL, NULL, '2023-05-02 19:21:42', '2023-05-02 19:21:42'),
(840, 0, 0, 0, '', NULL, NULL, '2023-05-02 19:27:10', '2023-05-02 19:27:10'),
(841, 0, 0, 0, '', NULL, NULL, '2023-05-02 19:29:05', '2023-05-02 19:29:05'),
(842, 0, 0, 0, '', NULL, NULL, '2023-05-02 19:36:22', '2023-05-02 19:36:22'),
(843, 0, 0, 0, '', NULL, NULL, '2023-05-02 19:36:45', '2023-05-02 19:36:45'),
(844, 0, 0, 0, '', NULL, NULL, '2023-05-02 19:37:08', '2023-05-02 19:37:08'),
(845, 0, 0, 0, '', NULL, NULL, '2023-05-02 19:38:06', '2023-05-02 19:38:06'),
(846, 0, 0, 0, '', NULL, NULL, '2023-05-02 19:38:27', '2023-05-02 19:38:27'),
(847, 0, 0, 0, '', NULL, NULL, '2023-05-02 19:38:49', '2023-05-02 19:38:49'),
(848, 0, 0, 0, '', NULL, NULL, '2023-05-02 19:40:13', '2023-05-02 19:40:13'),
(849, 0, 0, 0, '', NULL, NULL, '2023-05-02 19:42:43', '2023-05-02 19:42:43'),
(850, 0, 0, 0, '', NULL, NULL, '2023-05-02 19:43:06', '2023-05-02 19:43:06'),
(851, 0, 0, 0, '', NULL, NULL, '2023-05-02 19:43:45', '2023-05-02 19:43:45'),
(852, 0, 0, 0, '', NULL, NULL, '2023-05-02 19:55:45', '2023-05-02 19:55:45'),
(853, 0, 0, 0, '', NULL, NULL, '2023-05-02 19:56:04', '2023-05-02 19:56:04'),
(854, 0, 0, 0, '', NULL, NULL, '2023-05-02 19:56:38', '2023-05-02 19:56:38'),
(855, 0, 0, 0, '', NULL, NULL, '2023-05-02 20:03:08', '2023-05-02 20:03:08'),
(856, 0, 0, 0, '', NULL, NULL, '2023-05-02 20:03:56', '2023-05-02 20:03:56'),
(857, 0, 0, 0, '', NULL, NULL, '2023-05-02 20:04:07', '2023-05-02 20:04:07'),
(858, 0, 0, 0, '', NULL, NULL, '2023-05-02 20:10:10', '2023-05-02 20:10:10'),
(859, 0, 0, 0, '', NULL, NULL, '2023-05-02 20:12:51', '2023-05-02 20:12:51'),
(860, 0, 0, 0, '', NULL, NULL, '2023-05-02 20:19:44', '2023-05-02 20:19:44'),
(861, 0, 0, 0, '', NULL, NULL, '2023-05-02 20:38:43', '2023-05-02 20:38:43'),
(862, 0, 0, 0, '', NULL, NULL, '2023-05-02 20:52:24', '2023-05-02 20:52:24'),
(863, 0, 0, 0, '', NULL, NULL, '2023-05-02 20:52:43', '2023-05-02 20:52:43'),
(864, 0, 0, 0, '', NULL, NULL, '2023-05-02 20:54:49', '2023-05-02 20:54:49'),
(865, 0, 0, 0, '', NULL, NULL, '2023-05-02 20:55:05', '2023-05-02 20:55:05'),
(866, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:05:42', '2023-05-02 21:05:42'),
(867, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:05:49', '2023-05-02 21:05:49'),
(868, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:10:58', '2023-05-02 21:10:58'),
(869, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:25:10', '2023-05-02 21:25:10'),
(870, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:25:12', '2023-05-02 21:25:12'),
(871, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:25:14', '2023-05-02 21:25:14'),
(872, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:25:16', '2023-05-02 21:25:16'),
(873, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:25:17', '2023-05-02 21:25:17'),
(874, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:26:37', '2023-05-02 21:26:37'),
(875, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:28:36', '2023-05-02 21:28:36'),
(876, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:30:15', '2023-05-02 21:30:15'),
(877, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:31:12', '2023-05-02 21:31:12'),
(878, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:32:53', '2023-05-02 21:32:53'),
(879, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:33:49', '2023-05-02 21:33:49'),
(880, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:33:54', '2023-05-02 21:33:54'),
(881, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:34:46', '2023-05-02 21:34:46'),
(882, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:45:29', '2023-05-02 21:45:29'),
(883, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:45:37', '2023-05-02 21:45:37'),
(884, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:46:12', '2023-05-02 21:46:12'),
(885, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:49:38', '2023-05-02 21:49:38'),
(886, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:52:34', '2023-05-02 21:52:34'),
(887, 0, 0, 0, '', NULL, NULL, '2023-05-02 21:54:38', '2023-05-02 21:54:38'),
(888, 0, 0, 0, '', NULL, NULL, '2023-05-02 22:08:27', '2023-05-02 22:08:27'),
(889, 0, 0, 0, '', NULL, NULL, '2023-05-02 22:09:15', '2023-05-02 22:09:15'),
(890, 0, 0, 0, '', NULL, NULL, '2023-05-02 22:09:31', '2023-05-02 22:09:31'),
(891, 0, 0, 0, '', NULL, NULL, '2023-05-02 22:28:59', '2023-05-02 22:28:59'),
(892, 0, 0, 0, '', NULL, NULL, '2023-05-02 22:41:52', '2023-05-02 22:41:52'),
(893, 0, 0, 0, '', NULL, NULL, '2023-05-02 22:44:18', '2023-05-02 22:44:18'),
(894, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:10:57', '2023-05-02 23:10:57'),
(895, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:11:00', '2023-05-02 23:11:00'),
(896, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:11:05', '2023-05-02 23:11:05'),
(897, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:13:34', '2023-05-02 23:13:34'),
(898, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:14:05', '2023-05-02 23:14:05'),
(899, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:14:36', '2023-05-02 23:14:36'),
(900, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:14:53', '2023-05-02 23:14:53'),
(901, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:15:20', '2023-05-02 23:15:20'),
(902, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:15:51', '2023-05-02 23:15:51'),
(903, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:16:22', '2023-05-02 23:16:22'),
(904, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:16:31', '2023-05-02 23:16:31'),
(905, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:16:39', '2023-05-02 23:16:39'),
(906, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:18:26', '2023-05-02 23:18:26'),
(907, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:18:58', '2023-05-02 23:18:58'),
(908, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:19:32', '2023-05-02 23:19:32'),
(909, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:20:05', '2023-05-02 23:20:05'),
(910, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:20:39', '2023-05-02 23:20:39'),
(911, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:21:12', '2023-05-02 23:21:12'),
(912, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:21:39', '2023-05-02 23:21:39'),
(913, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:22:11', '2023-05-02 23:22:11'),
(914, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:22:44', '2023-05-02 23:22:44'),
(915, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:23:18', '2023-05-02 23:23:18'),
(916, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:23:50', '2023-05-02 23:23:50'),
(917, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:24:23', '2023-05-02 23:24:23'),
(918, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:24:56', '2023-05-02 23:24:56'),
(919, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:25:12', '2023-05-02 23:25:12'),
(920, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:25:45', '2023-05-02 23:25:45'),
(921, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:26:18', '2023-05-02 23:26:18'),
(922, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:26:51', '2023-05-02 23:26:51'),
(923, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:27:24', '2023-05-02 23:27:24'),
(924, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:27:57', '2023-05-02 23:27:57'),
(925, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:28:30', '2023-05-02 23:28:30'),
(926, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:29:03', '2023-05-02 23:29:03'),
(927, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:29:36', '2023-05-02 23:29:36'),
(928, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:30:08', '2023-05-02 23:30:08'),
(929, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:30:42', '2023-05-02 23:30:42'),
(930, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:31:14', '2023-05-02 23:31:14'),
(931, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:31:47', '2023-05-02 23:31:47'),
(932, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:32:20', '2023-05-02 23:32:20'),
(933, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:32:53', '2023-05-02 23:32:53'),
(934, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:33:26', '2023-05-02 23:33:26'),
(935, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:33:59', '2023-05-02 23:33:59'),
(936, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:34:32', '2023-05-02 23:34:32'),
(937, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:36:19', '2023-05-02 23:36:19'),
(938, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:40:12', '2023-05-02 23:40:12'),
(939, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:40:44', '2023-05-02 23:40:44'),
(940, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:41:17', '2023-05-02 23:41:17'),
(941, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:41:51', '2023-05-02 23:41:51'),
(942, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:42:24', '2023-05-02 23:42:24'),
(943, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:42:57', '2023-05-02 23:42:57'),
(944, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:43:30', '2023-05-02 23:43:30'),
(945, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:44:02', '2023-05-02 23:44:02'),
(946, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:44:34', '2023-05-02 23:44:34'),
(947, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:45:07', '2023-05-02 23:45:07'),
(948, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:45:40', '2023-05-02 23:45:40'),
(949, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:46:13', '2023-05-02 23:46:13'),
(950, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:46:46', '2023-05-02 23:46:46'),
(951, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:47:19', '2023-05-02 23:47:19'),
(952, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:47:52', '2023-05-02 23:47:52'),
(953, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:48:25', '2023-05-02 23:48:25'),
(954, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:48:58', '2023-05-02 23:48:58'),
(955, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:49:31', '2023-05-02 23:49:31'),
(956, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:50:04', '2023-05-02 23:50:04'),
(957, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:50:37', '2023-05-02 23:50:37'),
(958, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:51:09', '2023-05-02 23:51:09'),
(959, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:51:41', '2023-05-02 23:51:41'),
(960, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:52:14', '2023-05-02 23:52:14'),
(961, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:52:47', '2023-05-02 23:52:47'),
(962, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:53:20', '2023-05-02 23:53:20'),
(963, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:53:53', '2023-05-02 23:53:53'),
(964, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:54:26', '2023-05-02 23:54:26'),
(965, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:54:58', '2023-05-02 23:54:58'),
(966, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:55:31', '2023-05-02 23:55:31'),
(967, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:56:04', '2023-05-02 23:56:04'),
(968, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:56:37', '2023-05-02 23:56:37'),
(969, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:57:10', '2023-05-02 23:57:10'),
(970, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:57:43', '2023-05-02 23:57:43'),
(971, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:58:16', '2023-05-02 23:58:16'),
(972, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:58:25', '2023-05-02 23:58:25'),
(973, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:58:58', '2023-05-02 23:58:58'),
(974, 0, 0, 0, '', NULL, NULL, '2023-05-02 23:59:31', '2023-05-02 23:59:31'),
(975, 0, 0, 0, '', NULL, NULL, '2023-05-03 00:00:03', '2023-05-03 00:00:03'),
(976, 0, 0, 0, '', NULL, NULL, '2023-05-03 00:00:37', '2023-05-03 00:00:37'),
(977, 0, 0, 0, '', NULL, NULL, '2023-05-03 00:01:10', '2023-05-03 00:01:10'),
(978, 0, 0, 0, '', NULL, NULL, '2023-05-03 00:01:45', '2023-05-03 00:01:45'),
(979, 0, 0, 0, '', NULL, NULL, '2023-05-03 00:02:21', '2023-05-03 00:02:21'),
(980, 0, 0, 0, '', NULL, NULL, '2023-05-03 00:02:59', '2023-05-03 00:02:59'),
(981, 0, 0, 0, '', NULL, NULL, '2023-05-03 00:03:37', '2023-05-03 00:03:37'),
(982, 0, 0, 0, '', NULL, NULL, '2023-05-03 00:04:15', '2023-05-03 00:04:15'),
(983, 0, 0, 0, '', NULL, NULL, '2023-05-03 00:04:53', '2023-05-03 00:04:53'),
(984, 0, 0, 0, '', NULL, NULL, '2023-05-03 00:05:30', '2023-05-03 00:05:30'),
(985, 0, 0, 0, '', NULL, NULL, '2023-05-03 00:06:06', '2023-05-03 00:06:06'),
(986, 0, 0, 0, '', NULL, NULL, '2023-05-03 00:06:43', '2023-05-03 00:06:43'),
(987, 0, 0, 0, '', NULL, NULL, '2023-05-03 00:07:20', '2023-05-03 00:07:20'),
(988, 0, 0, 0, '', NULL, NULL, '2023-05-03 00:07:57', '2023-05-03 00:07:57'),
(989, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:47:45', '2023-05-03 16:47:45'),
(990, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:48:16', '2023-05-03 16:48:16'),
(991, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:48:49', '2023-05-03 16:48:49'),
(992, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:49:22', '2023-05-03 16:49:22'),
(993, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:49:55', '2023-05-03 16:49:55'),
(994, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:50:27', '2023-05-03 16:50:27'),
(995, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:50:59', '2023-05-03 16:50:59'),
(996, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:51:31', '2023-05-03 16:51:31'),
(997, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:52:03', '2023-05-03 16:52:03'),
(998, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:52:36', '2023-05-03 16:52:36'),
(999, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:53:09', '2023-05-03 16:53:09'),
(1000, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:53:41', '2023-05-03 16:53:41'),
(1001, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:54:13', '2023-05-03 16:54:13'),
(1002, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:54:46', '2023-05-03 16:54:46'),
(1003, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:55:18', '2023-05-03 16:55:18'),
(1004, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:55:51', '2023-05-03 16:55:51'),
(1005, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:56:23', '2023-05-03 16:56:23'),
(1006, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:56:56', '2023-05-03 16:56:56'),
(1007, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:57:28', '2023-05-03 16:57:28'),
(1008, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:58:00', '2023-05-03 16:58:00'),
(1009, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:58:32', '2023-05-03 16:58:32'),
(1010, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:59:04', '2023-05-03 16:59:04'),
(1011, 0, 0, 0, '', NULL, NULL, '2023-05-03 16:59:36', '2023-05-03 16:59:36'),
(1012, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:00:09', '2023-05-03 17:00:09'),
(1013, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:00:42', '2023-05-03 17:00:42'),
(1014, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:01:16', '2023-05-03 17:01:16'),
(1015, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:01:48', '2023-05-03 17:01:48'),
(1016, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:02:06', '2023-05-03 17:02:06'),
(1017, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:02:39', '2023-05-03 17:02:39'),
(1018, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:03:12', '2023-05-03 17:03:12'),
(1019, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:03:45', '2023-05-03 17:03:45'),
(1020, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:04:18', '2023-05-03 17:04:18'),
(1021, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:04:50', '2023-05-03 17:04:50'),
(1022, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:05:23', '2023-05-03 17:05:23'),
(1023, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:05:56', '2023-05-03 17:05:56'),
(1024, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:06:28', '2023-05-03 17:06:28'),
(1025, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:07:01', '2023-05-03 17:07:01'),
(1026, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:07:34', '2023-05-03 17:07:34'),
(1027, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:08:07', '2023-05-03 17:08:07'),
(1028, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:08:39', '2023-05-03 17:08:39'),
(1029, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:09:12', '2023-05-03 17:09:12'),
(1030, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:09:45', '2023-05-03 17:09:45'),
(1031, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:10:18', '2023-05-03 17:10:18'),
(1032, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:10:50', '2023-05-03 17:10:50'),
(1033, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:11:23', '2023-05-03 17:11:23'),
(1034, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:11:56', '2023-05-03 17:11:56'),
(1035, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:12:28', '2023-05-03 17:12:28'),
(1036, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:13:01', '2023-05-03 17:13:01'),
(1037, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:13:34', '2023-05-03 17:13:34'),
(1038, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:14:07', '2023-05-03 17:14:07'),
(1039, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:14:40', '2023-05-03 17:14:40'),
(1040, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:15:12', '2023-05-03 17:15:12'),
(1041, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:15:45', '2023-05-03 17:15:45'),
(1042, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:16:18', '2023-05-03 17:16:18'),
(1043, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:16:51', '2023-05-03 17:16:51'),
(1044, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:17:24', '2023-05-03 17:17:24'),
(1045, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:17:57', '2023-05-03 17:17:57'),
(1046, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:18:29', '2023-05-03 17:18:29'),
(1047, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:19:02', '2023-05-03 17:19:02'),
(1048, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:19:35', '2023-05-03 17:19:35'),
(1049, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:20:08', '2023-05-03 17:20:08'),
(1050, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:20:41', '2023-05-03 17:20:41'),
(1051, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:21:14', '2023-05-03 17:21:14'),
(1052, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:21:46', '2023-05-03 17:21:46'),
(1053, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:22:19', '2023-05-03 17:22:19'),
(1054, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:22:52', '2023-05-03 17:22:52'),
(1055, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:23:25', '2023-05-03 17:23:25'),
(1056, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:23:57', '2023-05-03 17:23:57'),
(1057, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:24:30', '2023-05-03 17:24:30'),
(1058, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:25:03', '2023-05-03 17:25:03'),
(1059, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:25:36', '2023-05-03 17:25:36'),
(1060, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:26:09', '2023-05-03 17:26:09'),
(1061, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:26:42', '2023-05-03 17:26:42'),
(1062, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:27:15', '2023-05-03 17:27:15'),
(1063, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:27:47', '2023-05-03 17:27:47'),
(1064, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:28:20', '2023-05-03 17:28:20'),
(1065, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:28:53', '2023-05-03 17:28:53'),
(1066, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:29:25', '2023-05-03 17:29:25'),
(1067, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:29:58', '2023-05-03 17:29:58'),
(1068, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:30:31', '2023-05-03 17:30:31'),
(1069, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:31:03', '2023-05-03 17:31:03'),
(1070, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:31:36', '2023-05-03 17:31:36'),
(1071, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:32:09', '2023-05-03 17:32:09'),
(1072, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:32:42', '2023-05-03 17:32:42'),
(1073, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:33:14', '2023-05-03 17:33:14'),
(1074, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:33:47', '2023-05-03 17:33:47'),
(1075, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:34:20', '2023-05-03 17:34:20'),
(1076, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:34:53', '2023-05-03 17:34:53'),
(1077, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:35:26', '2023-05-03 17:35:26'),
(1078, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:35:58', '2023-05-03 17:35:58'),
(1079, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:36:31', '2023-05-03 17:36:31'),
(1080, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:37:04', '2023-05-03 17:37:04'),
(1081, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:37:37', '2023-05-03 17:37:37'),
(1082, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:38:10', '2023-05-03 17:38:10'),
(1083, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:38:42', '2023-05-03 17:38:42'),
(1084, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:39:15', '2023-05-03 17:39:15'),
(1085, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:39:48', '2023-05-03 17:39:48'),
(1086, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:40:20', '2023-05-03 17:40:20'),
(1087, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:40:53', '2023-05-03 17:40:53'),
(1088, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:41:25', '2023-05-03 17:41:25'),
(1089, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:41:57', '2023-05-03 17:41:57'),
(1090, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:42:30', '2023-05-03 17:42:30'),
(1091, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:43:03', '2023-05-03 17:43:03'),
(1092, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:43:35', '2023-05-03 17:43:35'),
(1093, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:44:08', '2023-05-03 17:44:08'),
(1094, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:44:41', '2023-05-03 17:44:41'),
(1095, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:45:14', '2023-05-03 17:45:14'),
(1096, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:45:47', '2023-05-03 17:45:47'),
(1097, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:46:19', '2023-05-03 17:46:19'),
(1098, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:46:52', '2023-05-03 17:46:52'),
(1099, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:47:24', '2023-05-03 17:47:24'),
(1100, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:47:56', '2023-05-03 17:47:56'),
(1101, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:48:29', '2023-05-03 17:48:29'),
(1102, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:49:01', '2023-05-03 17:49:01'),
(1103, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:49:34', '2023-05-03 17:49:34'),
(1104, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:50:06', '2023-05-03 17:50:06'),
(1105, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:50:40', '2023-05-03 17:50:40'),
(1106, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:51:12', '2023-05-03 17:51:12'),
(1107, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:51:44', '2023-05-03 17:51:44'),
(1108, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:52:16', '2023-05-03 17:52:16'),
(1109, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:52:48', '2023-05-03 17:52:48'),
(1110, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:53:20', '2023-05-03 17:53:20'),
(1111, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:53:52', '2023-05-03 17:53:52'),
(1112, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:54:25', '2023-05-03 17:54:25'),
(1113, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:54:58', '2023-05-03 17:54:58'),
(1114, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:55:30', '2023-05-03 17:55:30'),
(1115, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:56:02', '2023-05-03 17:56:02'),
(1116, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:56:35', '2023-05-03 17:56:35'),
(1117, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:57:07', '2023-05-03 17:57:07'),
(1118, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:57:39', '2023-05-03 17:57:39'),
(1119, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:58:12', '2023-05-03 17:58:12'),
(1120, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:58:45', '2023-05-03 17:58:45'),
(1121, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:59:17', '2023-05-03 17:59:17'),
(1122, 0, 0, 0, '', NULL, NULL, '2023-05-03 17:59:51', '2023-05-03 17:59:51'),
(1123, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:00:23', '2023-05-03 18:00:23'),
(1124, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:00:55', '2023-05-03 18:00:55'),
(1125, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:01:28', '2023-05-03 18:01:28'),
(1126, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:02:01', '2023-05-03 18:02:01'),
(1127, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:02:33', '2023-05-03 18:02:33'),
(1128, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:03:06', '2023-05-03 18:03:06'),
(1129, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:03:39', '2023-05-03 18:03:39'),
(1130, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:04:10', '2023-05-03 18:04:10'),
(1131, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:04:42', '2023-05-03 18:04:42'),
(1132, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:05:14', '2023-05-03 18:05:14'),
(1133, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:05:47', '2023-05-03 18:05:47'),
(1134, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:06:20', '2023-05-03 18:06:20'),
(1135, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:06:53', '2023-05-03 18:06:53'),
(1136, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:07:25', '2023-05-03 18:07:25'),
(1137, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:07:57', '2023-05-03 18:07:57'),
(1138, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:08:30', '2023-05-03 18:08:30'),
(1139, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:09:02', '2023-05-03 18:09:02'),
(1140, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:09:35', '2023-05-03 18:09:35'),
(1141, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:10:07', '2023-05-03 18:10:07'),
(1142, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:10:40', '2023-05-03 18:10:40'),
(1143, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:11:13', '2023-05-03 18:11:13'),
(1144, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:11:45', '2023-05-03 18:11:45'),
(1145, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:12:17', '2023-05-03 18:12:17'),
(1146, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:12:50', '2023-05-03 18:12:50'),
(1147, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:13:23', '2023-05-03 18:13:23'),
(1148, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:13:56', '2023-05-03 18:13:56'),
(1149, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:14:27', '2023-05-03 18:14:27'),
(1150, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:15:00', '2023-05-03 18:15:00'),
(1151, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:15:32', '2023-05-03 18:15:32'),
(1152, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:16:06', '2023-05-03 18:16:06'),
(1153, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:16:38', '2023-05-03 18:16:38'),
(1154, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:17:11', '2023-05-03 18:17:11'),
(1155, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:17:44', '2023-05-03 18:17:44'),
(1156, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:18:17', '2023-05-03 18:18:17'),
(1157, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:18:49', '2023-05-03 18:18:49'),
(1158, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:19:22', '2023-05-03 18:19:22'),
(1159, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:19:55', '2023-05-03 18:19:55'),
(1160, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:20:28', '2023-05-03 18:20:28'),
(1161, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:21:01', '2023-05-03 18:21:01'),
(1162, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:21:33', '2023-05-03 18:21:33'),
(1163, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:22:06', '2023-05-03 18:22:06'),
(1164, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:22:39', '2023-05-03 18:22:39'),
(1165, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:23:12', '2023-05-03 18:23:12'),
(1166, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:23:45', '2023-05-03 18:23:45'),
(1167, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:24:18', '2023-05-03 18:24:18'),
(1168, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:24:51', '2023-05-03 18:24:51'),
(1169, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:25:24', '2023-05-03 18:25:24'),
(1170, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:25:56', '2023-05-03 18:25:56'),
(1171, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:26:29', '2023-05-03 18:26:29'),
(1172, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:27:02', '2023-05-03 18:27:02'),
(1173, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:27:35', '2023-05-03 18:27:35'),
(1174, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:28:08', '2023-05-03 18:28:08'),
(1175, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:28:41', '2023-05-03 18:28:41'),
(1176, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:29:14', '2023-05-03 18:29:14'),
(1177, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:29:47', '2023-05-03 18:29:47'),
(1178, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:30:18', '2023-05-03 18:30:18'),
(1179, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:30:51', '2023-05-03 18:30:51'),
(1180, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:31:23', '2023-05-03 18:31:23'),
(1181, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:31:56', '2023-05-03 18:31:56'),
(1182, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:32:29', '2023-05-03 18:32:29'),
(1183, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:33:01', '2023-05-03 18:33:01'),
(1184, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:33:34', '2023-05-03 18:33:34'),
(1185, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:34:06', '2023-05-03 18:34:06'),
(1186, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:34:39', '2023-05-03 18:34:39'),
(1187, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:35:12', '2023-05-03 18:35:12'),
(1188, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:35:45', '2023-05-03 18:35:45'),
(1189, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:36:18', '2023-05-03 18:36:18'),
(1190, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:36:52', '2023-05-03 18:36:52'),
(1191, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:37:24', '2023-05-03 18:37:24'),
(1192, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:37:57', '2023-05-03 18:37:57'),
(1193, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:38:30', '2023-05-03 18:38:30'),
(1194, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:39:03', '2023-05-03 18:39:03'),
(1195, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:39:36', '2023-05-03 18:39:36'),
(1196, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:40:08', '2023-05-03 18:40:08'),
(1197, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:40:41', '2023-05-03 18:40:41'),
(1198, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:41:14', '2023-05-03 18:41:14'),
(1199, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:41:47', '2023-05-03 18:41:47'),
(1200, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:42:20', '2023-05-03 18:42:20'),
(1201, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:42:51', '2023-05-03 18:42:51'),
(1202, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:43:23', '2023-05-03 18:43:23'),
(1203, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:43:56', '2023-05-03 18:43:56'),
(1204, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:44:29', '2023-05-03 18:44:29'),
(1205, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:45:02', '2023-05-03 18:45:02'),
(1206, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:45:34', '2023-05-03 18:45:34'),
(1207, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:46:07', '2023-05-03 18:46:07'),
(1208, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:46:40', '2023-05-03 18:46:40'),
(1209, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:47:13', '2023-05-03 18:47:13'),
(1210, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:47:44', '2023-05-03 18:47:44'),
(1211, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:48:17', '2023-05-03 18:48:17'),
(1212, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:48:49', '2023-05-03 18:48:49'),
(1213, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:49:22', '2023-05-03 18:49:22'),
(1214, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:49:55', '2023-05-03 18:49:55'),
(1215, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:50:28', '2023-05-03 18:50:28'),
(1216, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:51:00', '2023-05-03 18:51:00'),
(1217, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:51:32', '2023-05-03 18:51:32'),
(1218, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:52:05', '2023-05-03 18:52:05'),
(1219, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:52:38', '2023-05-03 18:52:38'),
(1220, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:53:11', '2023-05-03 18:53:11'),
(1221, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:53:44', '2023-05-03 18:53:44'),
(1222, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:54:16', '2023-05-03 18:54:16'),
(1223, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:54:49', '2023-05-03 18:54:49'),
(1224, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:55:20', '2023-05-03 18:55:20'),
(1225, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:55:53', '2023-05-03 18:55:53'),
(1226, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:56:26', '2023-05-03 18:56:26'),
(1227, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:56:59', '2023-05-03 18:56:59'),
(1228, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:57:32', '2023-05-03 18:57:32'),
(1229, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:58:04', '2023-05-03 18:58:04'),
(1230, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:58:36', '2023-05-03 18:58:36'),
(1231, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:59:09', '2023-05-03 18:59:09'),
(1232, 0, 0, 0, '', NULL, NULL, '2023-05-03 18:59:40', '2023-05-03 18:59:40'),
(1233, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:00:14', '2023-05-03 19:00:14'),
(1234, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:00:46', '2023-05-03 19:00:46'),
(1235, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:01:18', '2023-05-03 19:01:18'),
(1236, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:01:51', '2023-05-03 19:01:51'),
(1237, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:02:24', '2023-05-03 19:02:24'),
(1238, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:02:57', '2023-05-03 19:02:57'),
(1239, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:03:29', '2023-05-03 19:03:29'),
(1240, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:04:02', '2023-05-03 19:04:02'),
(1241, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:04:35', '2023-05-03 19:04:35'),
(1242, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:05:08', '2023-05-03 19:05:08'),
(1243, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:05:41', '2023-05-03 19:05:41'),
(1244, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:06:13', '2023-05-03 19:06:13'),
(1245, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:06:46', '2023-05-03 19:06:46'),
(1246, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:07:19', '2023-05-03 19:07:19'),
(1247, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:07:51', '2023-05-03 19:07:51'),
(1248, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:08:24', '2023-05-03 19:08:24'),
(1249, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:08:58', '2023-05-03 19:08:58'),
(1250, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:09:32', '2023-05-03 19:09:32'),
(1251, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:10:05', '2023-05-03 19:10:05'),
(1252, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:10:39', '2023-05-03 19:10:39'),
(1253, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:11:11', '2023-05-03 19:11:11'),
(1254, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:11:44', '2023-05-03 19:11:44'),
(1255, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:12:18', '2023-05-03 19:12:18'),
(1256, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:12:51', '2023-05-03 19:12:51'),
(1257, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:13:24', '2023-05-03 19:13:24'),
(1258, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:13:57', '2023-05-03 19:13:57'),
(1259, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:14:30', '2023-05-03 19:14:30'),
(1260, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:15:03', '2023-05-03 19:15:03'),
(1261, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:15:36', '2023-05-03 19:15:36'),
(1262, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:16:09', '2023-05-03 19:16:09'),
(1263, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:16:43', '2023-05-03 19:16:43'),
(1264, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:17:16', '2023-05-03 19:17:16'),
(1265, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:17:49', '2023-05-03 19:17:49'),
(1266, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:18:23', '2023-05-03 19:18:23'),
(1267, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:18:56', '2023-05-03 19:18:56'),
(1268, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:19:32', '2023-05-03 19:19:32'),
(1269, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:20:09', '2023-05-03 19:20:09'),
(1270, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:20:43', '2023-05-03 19:20:43'),
(1271, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:21:16', '2023-05-03 19:21:16'),
(1272, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:21:49', '2023-05-03 19:21:49'),
(1273, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:22:23', '2023-05-03 19:22:23'),
(1274, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:22:56', '2023-05-03 19:22:56'),
(1275, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:23:29', '2023-05-03 19:23:29'),
(1276, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:24:03', '2023-05-03 19:24:03'),
(1277, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:24:36', '2023-05-03 19:24:36'),
(1278, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:25:09', '2023-05-03 19:25:09'),
(1279, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:25:42', '2023-05-03 19:25:42'),
(1280, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:26:16', '2023-05-03 19:26:16'),
(1281, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:26:51', '2023-05-03 19:26:51'),
(1282, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:27:24', '2023-05-03 19:27:24'),
(1283, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:27:57', '2023-05-03 19:27:57'),
(1284, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:28:30', '2023-05-03 19:28:30'),
(1285, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:29:03', '2023-05-03 19:29:03'),
(1286, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:29:36', '2023-05-03 19:29:36'),
(1287, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:30:09', '2023-05-03 19:30:09'),
(1288, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:30:43', '2023-05-03 19:30:43'),
(1289, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:31:16', '2023-05-03 19:31:16'),
(1290, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:31:49', '2023-05-03 19:31:49'),
(1291, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:32:22', '2023-05-03 19:32:22'),
(1292, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:32:56', '2023-05-03 19:32:56'),
(1293, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:33:29', '2023-05-03 19:33:29'),
(1294, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:34:02', '2023-05-03 19:34:02'),
(1295, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:34:35', '2023-05-03 19:34:35'),
(1296, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:35:08', '2023-05-03 19:35:08'),
(1297, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:35:41', '2023-05-03 19:35:41'),
(1298, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:36:15', '2023-05-03 19:36:15'),
(1299, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:36:48', '2023-05-03 19:36:48'),
(1300, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:37:21', '2023-05-03 19:37:21'),
(1301, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:37:54', '2023-05-03 19:37:54'),
(1302, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:38:27', '2023-05-03 19:38:27'),
(1303, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:39:00', '2023-05-03 19:39:00'),
(1304, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:39:33', '2023-05-03 19:39:33'),
(1305, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:40:07', '2023-05-03 19:40:07'),
(1306, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:40:40', '2023-05-03 19:40:40'),
(1307, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:41:13', '2023-05-03 19:41:13'),
(1308, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:41:46', '2023-05-03 19:41:46'),
(1309, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:42:19', '2023-05-03 19:42:19'),
(1310, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:42:53', '2023-05-03 19:42:53'),
(1311, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:43:26', '2023-05-03 19:43:26'),
(1312, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:43:59', '2023-05-03 19:43:59'),
(1313, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:44:33', '2023-05-03 19:44:33'),
(1314, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:45:06', '2023-05-03 19:45:06'),
(1315, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:45:40', '2023-05-03 19:45:40'),
(1316, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:46:14', '2023-05-03 19:46:14'),
(1317, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:46:47', '2023-05-03 19:46:47'),
(1318, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:47:20', '2023-05-03 19:47:20'),
(1319, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:47:53', '2023-05-03 19:47:53'),
(1320, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:48:27', '2023-05-03 19:48:27'),
(1321, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:49:00', '2023-05-03 19:49:00'),
(1322, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:49:34', '2023-05-03 19:49:34'),
(1323, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:50:07', '2023-05-03 19:50:07'),
(1324, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:50:40', '2023-05-03 19:50:40'),
(1325, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:51:13', '2023-05-03 19:51:13'),
(1326, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:51:46', '2023-05-03 19:51:46'),
(1327, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:52:19', '2023-05-03 19:52:19'),
(1328, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:52:53', '2023-05-03 19:52:53'),
(1329, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:53:26', '2023-05-03 19:53:26'),
(1330, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:53:59', '2023-05-03 19:53:59'),
(1331, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:54:32', '2023-05-03 19:54:32'),
(1332, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:55:06', '2023-05-03 19:55:06'),
(1333, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:55:39', '2023-05-03 19:55:39'),
(1334, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:56:13', '2023-05-03 19:56:13'),
(1335, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:56:46', '2023-05-03 19:56:46'),
(1336, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:57:19', '2023-05-03 19:57:19'),
(1337, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:57:52', '2023-05-03 19:57:52'),
(1338, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:58:26', '2023-05-03 19:58:26'),
(1339, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:58:59', '2023-05-03 19:58:59'),
(1340, 0, 0, 0, '', NULL, NULL, '2023-05-03 19:59:33', '2023-05-03 19:59:33');
INSERT INTO `encheregagners` (`id`, `user_id`, `enchere_id`, `valeur_click`, `code`, `state`, `payed_by`, `updated_at`, `created_at`) VALUES
(1341, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:00:06', '2023-05-03 20:00:06'),
(1342, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:00:39', '2023-05-03 20:00:39'),
(1343, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:01:13', '2023-05-03 20:01:13'),
(1344, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:01:46', '2023-05-03 20:01:46'),
(1345, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:02:20', '2023-05-03 20:02:20'),
(1346, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:02:53', '2023-05-03 20:02:53'),
(1347, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:03:27', '2023-05-03 20:03:27'),
(1348, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:04:00', '2023-05-03 20:04:00'),
(1349, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:04:33', '2023-05-03 20:04:33'),
(1350, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:05:07', '2023-05-03 20:05:07'),
(1351, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:05:41', '2023-05-03 20:05:41'),
(1352, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:06:14', '2023-05-03 20:06:14'),
(1353, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:06:48', '2023-05-03 20:06:48'),
(1354, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:07:21', '2023-05-03 20:07:21'),
(1355, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:07:54', '2023-05-03 20:07:54'),
(1356, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:08:28', '2023-05-03 20:08:28'),
(1357, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:09:01', '2023-05-03 20:09:01'),
(1358, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:09:34', '2023-05-03 20:09:34'),
(1359, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:10:08', '2023-05-03 20:10:08'),
(1360, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:10:42', '2023-05-03 20:10:42'),
(1361, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:11:15', '2023-05-03 20:11:15'),
(1362, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:11:49', '2023-05-03 20:11:49'),
(1363, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:12:23', '2023-05-03 20:12:23'),
(1364, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:12:56', '2023-05-03 20:12:56'),
(1365, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:13:29', '2023-05-03 20:13:29'),
(1366, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:14:03', '2023-05-03 20:14:03'),
(1367, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:14:36', '2023-05-03 20:14:36'),
(1368, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:15:10', '2023-05-03 20:15:10'),
(1369, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:15:43', '2023-05-03 20:15:43'),
(1370, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:16:17', '2023-05-03 20:16:17'),
(1371, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:16:51', '2023-05-03 20:16:51'),
(1372, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:17:24', '2023-05-03 20:17:24'),
(1373, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:17:57', '2023-05-03 20:17:57'),
(1374, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:18:31', '2023-05-03 20:18:31'),
(1375, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:19:05', '2023-05-03 20:19:05'),
(1376, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:19:38', '2023-05-03 20:19:38'),
(1377, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:20:12', '2023-05-03 20:20:12'),
(1378, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:20:46', '2023-05-03 20:20:46'),
(1379, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:21:19', '2023-05-03 20:21:19'),
(1380, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:21:53', '2023-05-03 20:21:53'),
(1381, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:22:27', '2023-05-03 20:22:27'),
(1382, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:23:00', '2023-05-03 20:23:00'),
(1383, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:23:33', '2023-05-03 20:23:33'),
(1384, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:24:07', '2023-05-03 20:24:07'),
(1385, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:24:40', '2023-05-03 20:24:40'),
(1386, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:25:14', '2023-05-03 20:25:14'),
(1387, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:25:48', '2023-05-03 20:25:48'),
(1388, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:26:21', '2023-05-03 20:26:21'),
(1389, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:26:55', '2023-05-03 20:26:55'),
(1390, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:27:30', '2023-05-03 20:27:30'),
(1391, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:28:04', '2023-05-03 20:28:04'),
(1392, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:28:38', '2023-05-03 20:28:38'),
(1393, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:29:12', '2023-05-03 20:29:12'),
(1394, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:29:45', '2023-05-03 20:29:45'),
(1395, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:30:19', '2023-05-03 20:30:19'),
(1396, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:30:53', '2023-05-03 20:30:53'),
(1397, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:31:27', '2023-05-03 20:31:27'),
(1398, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:32:00', '2023-05-03 20:32:00'),
(1399, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:32:34', '2023-05-03 20:32:34'),
(1400, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:33:08', '2023-05-03 20:33:08'),
(1401, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:33:42', '2023-05-03 20:33:42'),
(1402, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:34:15', '2023-05-03 20:34:15'),
(1403, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:34:49', '2023-05-03 20:34:49'),
(1404, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:35:23', '2023-05-03 20:35:23'),
(1405, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:35:57', '2023-05-03 20:35:57'),
(1406, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:36:31', '2023-05-03 20:36:31'),
(1407, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:37:04', '2023-05-03 20:37:04'),
(1408, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:37:38', '2023-05-03 20:37:38'),
(1409, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:38:12', '2023-05-03 20:38:12'),
(1410, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:38:46', '2023-05-03 20:38:46'),
(1411, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:39:20', '2023-05-03 20:39:20'),
(1412, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:39:54', '2023-05-03 20:39:54'),
(1413, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:40:28', '2023-05-03 20:40:28'),
(1414, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:41:02', '2023-05-03 20:41:02'),
(1415, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:41:36', '2023-05-03 20:41:36'),
(1416, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:42:10', '2023-05-03 20:42:10'),
(1417, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:42:43', '2023-05-03 20:42:43'),
(1418, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:43:17', '2023-05-03 20:43:17'),
(1419, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:43:51', '2023-05-03 20:43:51'),
(1420, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:44:26', '2023-05-03 20:44:26'),
(1421, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:44:58', '2023-05-03 20:44:58'),
(1422, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:45:32', '2023-05-03 20:45:32'),
(1423, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:46:06', '2023-05-03 20:46:06'),
(1424, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:46:39', '2023-05-03 20:46:39'),
(1425, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:47:13', '2023-05-03 20:47:13'),
(1426, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:47:47', '2023-05-03 20:47:47'),
(1427, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:48:21', '2023-05-03 20:48:21'),
(1428, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:48:55', '2023-05-03 20:48:55'),
(1429, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:49:29', '2023-05-03 20:49:29'),
(1430, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:50:02', '2023-05-03 20:50:02'),
(1431, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:50:36', '2023-05-03 20:50:36'),
(1432, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:51:10', '2023-05-03 20:51:10'),
(1433, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:51:43', '2023-05-03 20:51:43'),
(1434, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:52:17', '2023-05-03 20:52:17'),
(1435, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:52:51', '2023-05-03 20:52:51'),
(1436, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:53:24', '2023-05-03 20:53:24'),
(1437, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:53:58', '2023-05-03 20:53:58'),
(1438, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:54:32', '2023-05-03 20:54:32'),
(1439, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:55:07', '2023-05-03 20:55:07'),
(1440, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:55:40', '2023-05-03 20:55:40'),
(1441, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:56:14', '2023-05-03 20:56:14'),
(1442, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:56:48', '2023-05-03 20:56:48'),
(1443, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:57:22', '2023-05-03 20:57:22'),
(1444, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:57:55', '2023-05-03 20:57:55'),
(1445, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:58:28', '2023-05-03 20:58:28'),
(1446, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:59:01', '2023-05-03 20:59:01'),
(1447, 0, 0, 0, '', NULL, NULL, '2023-05-03 20:59:34', '2023-05-03 20:59:34'),
(1448, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:00:07', '2023-05-03 21:00:07'),
(1449, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:00:41', '2023-05-03 21:00:41'),
(1450, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:01:14', '2023-05-03 21:01:14'),
(1451, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:01:47', '2023-05-03 21:01:47'),
(1452, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:02:20', '2023-05-03 21:02:20'),
(1453, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:02:53', '2023-05-03 21:02:53'),
(1454, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:03:26', '2023-05-03 21:03:26'),
(1455, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:03:59', '2023-05-03 21:03:59'),
(1456, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:04:32', '2023-05-03 21:04:32'),
(1457, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:05:05', '2023-05-03 21:05:05'),
(1458, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:05:38', '2023-05-03 21:05:38'),
(1459, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:06:11', '2023-05-03 21:06:11'),
(1460, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:06:44', '2023-05-03 21:06:44'),
(1461, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:07:17', '2023-05-03 21:07:17'),
(1462, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:07:50', '2023-05-03 21:07:50'),
(1463, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:08:23', '2023-05-03 21:08:23'),
(1464, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:08:56', '2023-05-03 21:08:56'),
(1465, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:09:29', '2023-05-03 21:09:29'),
(1466, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:10:02', '2023-05-03 21:10:02'),
(1467, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:10:35', '2023-05-03 21:10:35'),
(1468, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:11:08', '2023-05-03 21:11:08'),
(1469, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:11:41', '2023-05-03 21:11:41'),
(1470, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:12:14', '2023-05-03 21:12:14'),
(1471, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:12:47', '2023-05-03 21:12:47'),
(1472, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:13:20', '2023-05-03 21:13:20'),
(1473, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:13:53', '2023-05-03 21:13:53'),
(1474, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:14:26', '2023-05-03 21:14:26'),
(1475, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:14:59', '2023-05-03 21:14:59'),
(1476, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:15:32', '2023-05-03 21:15:32'),
(1477, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:16:05', '2023-05-03 21:16:05'),
(1478, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:16:43', '2023-05-03 21:16:43'),
(1479, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:17:18', '2023-05-03 21:17:18'),
(1480, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:17:52', '2023-05-03 21:17:52'),
(1481, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:18:25', '2023-05-03 21:18:25'),
(1482, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:18:58', '2023-05-03 21:18:58'),
(1483, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:19:32', '2023-05-03 21:19:32'),
(1484, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:20:06', '2023-05-03 21:20:06'),
(1485, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:20:40', '2023-05-03 21:20:40'),
(1486, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:21:14', '2023-05-03 21:21:14'),
(1487, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:21:47', '2023-05-03 21:21:47'),
(1488, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:22:20', '2023-05-03 21:22:20'),
(1489, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:22:54', '2023-05-03 21:22:54'),
(1490, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:23:26', '2023-05-03 21:23:26'),
(1491, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:23:59', '2023-05-03 21:23:59'),
(1492, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:24:32', '2023-05-03 21:24:32'),
(1493, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:25:05', '2023-05-03 21:25:05'),
(1494, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:25:43', '2023-05-03 21:25:43'),
(1495, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:26:18', '2023-05-03 21:26:18'),
(1496, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:26:52', '2023-05-03 21:26:52'),
(1497, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:27:25', '2023-05-03 21:27:25'),
(1498, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:27:59', '2023-05-03 21:27:59'),
(1499, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:28:33', '2023-05-03 21:28:33'),
(1500, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:29:06', '2023-05-03 21:29:06'),
(1501, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:29:40', '2023-05-03 21:29:40'),
(1502, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:30:13', '2023-05-03 21:30:13'),
(1503, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:30:47', '2023-05-03 21:30:47'),
(1504, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:31:21', '2023-05-03 21:31:21'),
(1505, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:31:54', '2023-05-03 21:31:54'),
(1506, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:32:28', '2023-05-03 21:32:28'),
(1507, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:33:02', '2023-05-03 21:33:02'),
(1508, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:33:35', '2023-05-03 21:33:35'),
(1509, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:34:09', '2023-05-03 21:34:09'),
(1510, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:34:43', '2023-05-03 21:34:43'),
(1511, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:35:17', '2023-05-03 21:35:17'),
(1512, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:35:51', '2023-05-03 21:35:51'),
(1513, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:36:25', '2023-05-03 21:36:25'),
(1514, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:36:59', '2023-05-03 21:36:59'),
(1515, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:37:32', '2023-05-03 21:37:32'),
(1516, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:38:06', '2023-05-03 21:38:06'),
(1517, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:38:40', '2023-05-03 21:38:40'),
(1518, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:39:13', '2023-05-03 21:39:13'),
(1519, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:39:47', '2023-05-03 21:39:47'),
(1520, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:40:21', '2023-05-03 21:40:21'),
(1521, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:40:54', '2023-05-03 21:40:54'),
(1522, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:41:28', '2023-05-03 21:41:28'),
(1523, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:42:01', '2023-05-03 21:42:01'),
(1524, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:42:35', '2023-05-03 21:42:35'),
(1525, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:43:10', '2023-05-03 21:43:10'),
(1526, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:43:43', '2023-05-03 21:43:43'),
(1527, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:44:17', '2023-05-03 21:44:17'),
(1528, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:44:51', '2023-05-03 21:44:51'),
(1529, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:45:25', '2023-05-03 21:45:25'),
(1530, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:45:59', '2023-05-03 21:45:59'),
(1531, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:46:33', '2023-05-03 21:46:33'),
(1532, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:47:06', '2023-05-03 21:47:06'),
(1533, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:47:40', '2023-05-03 21:47:40'),
(1534, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:48:13', '2023-05-03 21:48:13'),
(1535, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:48:47', '2023-05-03 21:48:47'),
(1536, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:49:20', '2023-05-03 21:49:20'),
(1537, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:49:54', '2023-05-03 21:49:54'),
(1538, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:50:27', '2023-05-03 21:50:27'),
(1539, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:51:00', '2023-05-03 21:51:00'),
(1540, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:51:34', '2023-05-03 21:51:34'),
(1541, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:52:07', '2023-05-03 21:52:07'),
(1542, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:52:41', '2023-05-03 21:52:41'),
(1543, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:53:14', '2023-05-03 21:53:14'),
(1544, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:53:48', '2023-05-03 21:53:48'),
(1545, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:54:22', '2023-05-03 21:54:22'),
(1546, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:54:54', '2023-05-03 21:54:54'),
(1547, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:55:28', '2023-05-03 21:55:28'),
(1548, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:56:01', '2023-05-03 21:56:01'),
(1549, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:56:35', '2023-05-03 21:56:35'),
(1550, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:57:08', '2023-05-03 21:57:08'),
(1551, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:57:42', '2023-05-03 21:57:42'),
(1552, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:58:15', '2023-05-03 21:58:15'),
(1553, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:58:49', '2023-05-03 21:58:49'),
(1554, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:59:22', '2023-05-03 21:59:22'),
(1555, 0, 0, 0, '', NULL, NULL, '2023-05-03 21:59:56', '2023-05-03 21:59:56'),
(1556, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:00:29', '2023-05-03 22:00:29'),
(1557, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:01:02', '2023-05-03 22:01:02'),
(1558, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:01:36', '2023-05-03 22:01:36'),
(1559, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:02:11', '2023-05-03 22:02:11'),
(1560, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:02:44', '2023-05-03 22:02:44'),
(1561, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:03:19', '2023-05-03 22:03:19'),
(1562, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:03:53', '2023-05-03 22:03:53'),
(1563, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:04:26', '2023-05-03 22:04:26'),
(1564, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:05:00', '2023-05-03 22:05:00'),
(1565, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:05:34', '2023-05-03 22:05:34'),
(1566, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:06:08', '2023-05-03 22:06:08'),
(1567, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:06:42', '2023-05-03 22:06:42'),
(1568, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:07:15', '2023-05-03 22:07:15'),
(1569, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:07:48', '2023-05-03 22:07:48'),
(1570, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:08:22', '2023-05-03 22:08:22'),
(1571, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:08:55', '2023-05-03 22:08:55'),
(1572, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:09:29', '2023-05-03 22:09:29'),
(1573, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:10:02', '2023-05-03 22:10:02'),
(1574, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:10:36', '2023-05-03 22:10:36'),
(1575, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:11:09', '2023-05-03 22:11:09'),
(1576, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:11:43', '2023-05-03 22:11:43'),
(1577, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:12:18', '2023-05-03 22:12:18'),
(1578, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:12:51', '2023-05-03 22:12:51'),
(1579, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:13:25', '2023-05-03 22:13:25'),
(1580, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:13:59', '2023-05-03 22:13:59'),
(1581, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:14:33', '2023-05-03 22:14:33'),
(1582, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:15:07', '2023-05-03 22:15:07'),
(1583, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:15:41', '2023-05-03 22:15:41'),
(1584, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:16:15', '2023-05-03 22:16:15'),
(1585, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:16:49', '2023-05-03 22:16:49'),
(1586, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:17:22', '2023-05-03 22:17:22'),
(1587, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:17:56', '2023-05-03 22:17:56'),
(1588, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:18:29', '2023-05-03 22:18:29'),
(1589, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:19:03', '2023-05-03 22:19:03'),
(1590, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:19:43', '2023-05-03 22:19:43'),
(1591, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:20:18', '2023-05-03 22:20:18'),
(1592, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:20:53', '2023-05-03 22:20:53'),
(1593, 96, 24, 85, '', NULL, NULL, '2023-05-04 23:28:34', '2023-05-03 22:22:23'),
(1594, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:24:28', '2023-05-03 22:24:28'),
(1595, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:25:36', '2023-05-03 22:25:36'),
(1596, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:25:41', '2023-05-03 22:25:41'),
(1597, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:26:40', '2023-05-03 22:26:40'),
(1598, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:27:37', '2023-05-03 22:27:37'),
(1599, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:28:37', '2023-05-03 22:28:37'),
(1600, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:30:45', '2023-05-03 22:30:45'),
(1601, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:31:15', '2023-05-03 22:31:15'),
(1602, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:31:49', '2023-05-03 22:31:49'),
(1603, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:32:23', '2023-05-03 22:32:23'),
(1604, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:32:56', '2023-05-03 22:32:56'),
(1605, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:33:30', '2023-05-03 22:33:30'),
(1606, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:34:04', '2023-05-03 22:34:04'),
(1607, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:34:38', '2023-05-03 22:34:38'),
(1608, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:35:11', '2023-05-03 22:35:11'),
(1609, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:35:45', '2023-05-03 22:35:45'),
(1610, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:36:19', '2023-05-03 22:36:19'),
(1611, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:36:53', '2023-05-03 22:36:53'),
(1612, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:37:26', '2023-05-03 22:37:26'),
(1613, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:38:04', '2023-05-03 22:38:04'),
(1614, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:38:39', '2023-05-03 22:38:39'),
(1615, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:39:14', '2023-05-03 22:39:14'),
(1616, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:39:50', '2023-05-03 22:39:50'),
(1617, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:40:26', '2023-05-03 22:40:26'),
(1618, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:40:59', '2023-05-03 22:40:59'),
(1619, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:41:35', '2023-05-03 22:41:35'),
(1620, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:42:02', '2023-05-03 22:42:02'),
(1621, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:42:28', '2023-05-03 22:42:28'),
(1622, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:43:02', '2023-05-03 22:43:02'),
(1623, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:43:38', '2023-05-03 22:43:38'),
(1624, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:44:12', '2023-05-03 22:44:12'),
(1625, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:44:46', '2023-05-03 22:44:46'),
(1626, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:45:20', '2023-05-03 22:45:20'),
(1627, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:45:54', '2023-05-03 22:45:54'),
(1628, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:46:27', '2023-05-03 22:46:27'),
(1629, 0, 0, 0, '', NULL, NULL, '2023-05-03 22:47:00', '2023-05-03 22:47:00'),
(1630, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:37:34', '2023-05-03 23:37:34'),
(1631, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:39:57', '2023-05-03 23:39:57'),
(1632, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:40:30', '2023-05-03 23:40:30'),
(1633, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:41:05', '2023-05-03 23:41:05'),
(1634, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:41:16', '2023-05-03 23:41:16'),
(1635, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:41:50', '2023-05-03 23:41:50'),
(1636, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:42:24', '2023-05-03 23:42:24'),
(1637, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:42:59', '2023-05-03 23:42:59'),
(1638, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:43:15', '2023-05-03 23:43:15'),
(1639, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:43:50', '2023-05-03 23:43:50'),
(1640, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:44:23', '2023-05-03 23:44:23'),
(1641, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:44:56', '2023-05-03 23:44:56'),
(1642, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:45:29', '2023-05-03 23:45:29'),
(1643, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:46:03', '2023-05-03 23:46:03'),
(1644, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:46:35', '2023-05-03 23:46:35'),
(1645, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:47:08', '2023-05-03 23:47:08'),
(1646, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:47:41', '2023-05-03 23:47:41'),
(1647, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:48:14', '2023-05-03 23:48:14'),
(1648, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:48:47', '2023-05-03 23:48:47'),
(1649, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:49:20', '2023-05-03 23:49:20'),
(1650, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:49:54', '2023-05-03 23:49:54'),
(1651, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:50:26', '2023-05-03 23:50:26'),
(1652, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:50:59', '2023-05-03 23:50:59'),
(1653, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:51:32', '2023-05-03 23:51:32'),
(1654, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:52:05', '2023-05-03 23:52:05'),
(1655, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:52:38', '2023-05-03 23:52:38'),
(1656, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:53:11', '2023-05-03 23:53:11'),
(1657, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:53:44', '2023-05-03 23:53:44'),
(1658, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:54:17', '2023-05-03 23:54:17'),
(1659, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:54:43', '2023-05-03 23:54:43'),
(1660, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:55:17', '2023-05-03 23:55:17'),
(1661, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:55:52', '2023-05-03 23:55:52'),
(1662, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:56:25', '2023-05-03 23:56:25'),
(1663, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:56:59', '2023-05-03 23:56:59'),
(1664, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:57:33', '2023-05-03 23:57:33'),
(1665, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:58:06', '2023-05-03 23:58:06'),
(1666, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:58:40', '2023-05-03 23:58:40'),
(1667, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:59:13', '2023-05-03 23:59:13'),
(1668, 0, 0, 0, '', NULL, NULL, '2023-05-03 23:59:46', '2023-05-03 23:59:46'),
(1669, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:00:19', '2023-05-04 00:00:19'),
(1670, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:00:53', '2023-05-04 00:00:53'),
(1671, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:01:25', '2023-05-04 00:01:25'),
(1672, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:01:58', '2023-05-04 00:01:58'),
(1673, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:02:31', '2023-05-04 00:02:31'),
(1674, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:03:04', '2023-05-04 00:03:04'),
(1675, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:03:37', '2023-05-04 00:03:37'),
(1676, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:04:10', '2023-05-04 00:04:10'),
(1677, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:04:43', '2023-05-04 00:04:43'),
(1678, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:05:17', '2023-05-04 00:05:17'),
(1679, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:05:49', '2023-05-04 00:05:49'),
(1680, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:06:22', '2023-05-04 00:06:22'),
(1681, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:06:56', '2023-05-04 00:06:56'),
(1682, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:07:28', '2023-05-04 00:07:28'),
(1683, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:08:02', '2023-05-04 00:08:02'),
(1684, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:08:36', '2023-05-04 00:08:36'),
(1685, 0, 0, 0, '', NULL, NULL, '2023-05-04 00:09:11', '2023-05-04 00:09:11'),
(1686, 0, 0, 0, '', NULL, NULL, '2023-05-04 17:35:10', '2023-05-04 17:35:10'),
(1687, 0, 0, 0, '', NULL, NULL, '2023-05-04 17:57:45', '2023-05-04 17:57:45'),
(1688, 0, 0, 0, '', NULL, NULL, '2023-05-04 17:58:14', '2023-05-04 17:58:14'),
(1689, 0, 0, 0, '', NULL, NULL, '2023-05-04 17:59:11', '2023-05-04 17:59:11'),
(1690, 0, 0, 0, '', NULL, NULL, '2023-05-04 17:59:19', '2023-05-04 17:59:19'),
(1691, 0, 0, 0, '', NULL, NULL, '2023-05-04 17:59:30', '2023-05-04 17:59:30'),
(1692, 0, 0, 0, '', NULL, NULL, '2023-05-04 17:59:35', '2023-05-04 17:59:35'),
(1693, 0, 0, 0, '', NULL, NULL, '2023-05-04 17:59:54', '2023-05-04 17:59:54'),
(1694, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:00:29', '2023-05-04 18:00:29'),
(1695, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:03:40', '2023-05-04 18:03:40'),
(1696, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:07:05', '2023-05-04 18:07:05'),
(1697, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:07:12', '2023-05-04 18:07:12'),
(1698, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:07:21', '2023-05-04 18:07:21'),
(1699, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:10:52', '2023-05-04 18:10:52'),
(1700, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:13:06', '2023-05-04 18:13:06'),
(1701, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:13:38', '2023-05-04 18:13:38'),
(1702, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:14:32', '2023-05-04 18:14:32'),
(1703, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:15:20', '2023-05-04 18:15:20'),
(1704, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:15:36', '2023-05-04 18:15:36'),
(1705, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:16:08', '2023-05-04 18:16:08'),
(1706, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:16:41', '2023-05-04 18:16:41'),
(1707, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:17:13', '2023-05-04 18:17:13'),
(1708, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:17:46', '2023-05-04 18:17:46'),
(1709, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:18:17', '2023-05-04 18:18:17'),
(1710, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:18:50', '2023-05-04 18:18:50'),
(1711, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:19:22', '2023-05-04 18:19:22'),
(1712, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:19:54', '2023-05-04 18:19:54'),
(1713, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:20:26', '2023-05-04 18:20:26'),
(1714, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:20:58', '2023-05-04 18:20:58'),
(1715, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:21:31', '2023-05-04 18:21:31'),
(1716, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:22:04', '2023-05-04 18:22:04'),
(1717, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:22:36', '2023-05-04 18:22:36'),
(1718, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:23:09', '2023-05-04 18:23:09'),
(1719, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:23:42', '2023-05-04 18:23:42'),
(1720, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:24:14', '2023-05-04 18:24:14'),
(1721, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:24:46', '2023-05-04 18:24:46'),
(1722, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:25:19', '2023-05-04 18:25:19'),
(1723, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:25:51', '2023-05-04 18:25:51'),
(1724, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:26:24', '2023-05-04 18:26:24'),
(1725, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:26:56', '2023-05-04 18:26:56'),
(1726, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:27:29', '2023-05-04 18:27:29'),
(1727, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:28:02', '2023-05-04 18:28:02'),
(1728, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:28:36', '2023-05-04 18:28:36'),
(1729, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:29:08', '2023-05-04 18:29:08'),
(1730, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:29:40', '2023-05-04 18:29:40'),
(1731, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:30:13', '2023-05-04 18:30:13'),
(1732, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:30:45', '2023-05-04 18:30:45'),
(1733, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:31:19', '2023-05-04 18:31:19'),
(1734, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:31:51', '2023-05-04 18:31:51'),
(1735, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:32:24', '2023-05-04 18:32:24'),
(1736, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:32:55', '2023-05-04 18:32:55'),
(1737, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:33:28', '2023-05-04 18:33:28'),
(1738, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:34:01', '2023-05-04 18:34:01'),
(1739, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:34:34', '2023-05-04 18:34:34'),
(1740, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:35:07', '2023-05-04 18:35:07'),
(1741, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:35:40', '2023-05-04 18:35:40'),
(1742, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:36:12', '2023-05-04 18:36:12'),
(1743, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:36:47', '2023-05-04 18:36:47'),
(1744, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:37:21', '2023-05-04 18:37:21'),
(1745, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:37:53', '2023-05-04 18:37:53'),
(1746, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:38:27', '2023-05-04 18:38:27'),
(1747, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:38:58', '2023-05-04 18:38:58'),
(1748, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:39:30', '2023-05-04 18:39:30'),
(1749, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:40:03', '2023-05-04 18:40:03'),
(1750, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:40:35', '2023-05-04 18:40:35'),
(1751, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:41:07', '2023-05-04 18:41:07'),
(1752, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:41:39', '2023-05-04 18:41:39'),
(1753, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:42:11', '2023-05-04 18:42:11'),
(1754, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:42:44', '2023-05-04 18:42:44'),
(1755, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:43:17', '2023-05-04 18:43:17'),
(1756, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:43:49', '2023-05-04 18:43:49'),
(1757, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:44:21', '2023-05-04 18:44:21'),
(1758, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:44:53', '2023-05-04 18:44:53'),
(1759, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:45:25', '2023-05-04 18:45:25'),
(1760, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:45:58', '2023-05-04 18:45:58'),
(1761, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:46:30', '2023-05-04 18:46:30'),
(1762, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:47:02', '2023-05-04 18:47:02'),
(1763, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:47:34', '2023-05-04 18:47:34'),
(1764, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:48:06', '2023-05-04 18:48:06'),
(1765, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:48:38', '2023-05-04 18:48:38'),
(1766, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:49:11', '2023-05-04 18:49:11'),
(1767, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:49:44', '2023-05-04 18:49:44'),
(1768, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:50:17', '2023-05-04 18:50:17'),
(1769, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:50:49', '2023-05-04 18:50:49'),
(1770, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:51:21', '2023-05-04 18:51:21'),
(1771, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:51:53', '2023-05-04 18:51:53'),
(1772, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:52:26', '2023-05-04 18:52:26'),
(1773, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:52:58', '2023-05-04 18:52:58'),
(1774, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:53:30', '2023-05-04 18:53:30'),
(1775, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:54:04', '2023-05-04 18:54:04'),
(1776, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:54:38', '2023-05-04 18:54:38'),
(1777, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:55:12', '2023-05-04 18:55:12'),
(1778, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:55:46', '2023-05-04 18:55:46'),
(1779, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:56:18', '2023-05-04 18:56:18'),
(1780, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:56:51', '2023-05-04 18:56:51'),
(1781, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:57:25', '2023-05-04 18:57:25'),
(1782, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:57:59', '2023-05-04 18:57:59'),
(1783, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:58:33', '2023-05-04 18:58:33'),
(1784, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:59:07', '2023-05-04 18:59:07'),
(1785, 0, 0, 0, '', NULL, NULL, '2023-05-04 18:59:42', '2023-05-04 18:59:42'),
(1786, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:00:14', '2023-05-04 19:00:14'),
(1787, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:00:47', '2023-05-04 19:00:47'),
(1788, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:01:21', '2023-05-04 19:01:21'),
(1789, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:01:53', '2023-05-04 19:01:53'),
(1790, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:02:25', '2023-05-04 19:02:25'),
(1791, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:02:59', '2023-05-04 19:02:59'),
(1792, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:03:33', '2023-05-04 19:03:33'),
(1793, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:04:06', '2023-05-04 19:04:06'),
(1794, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:04:40', '2023-05-04 19:04:40'),
(1795, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:05:15', '2023-05-04 19:05:15'),
(1796, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:05:48', '2023-05-04 19:05:48'),
(1797, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:06:21', '2023-05-04 19:06:21'),
(1798, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:06:54', '2023-05-04 19:06:54'),
(1799, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:07:27', '2023-05-04 19:07:27'),
(1800, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:08:00', '2023-05-04 19:08:00'),
(1801, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:08:33', '2023-05-04 19:08:33'),
(1802, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:09:06', '2023-05-04 19:09:06'),
(1803, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:09:39', '2023-05-04 19:09:39'),
(1804, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:10:11', '2023-05-04 19:10:11'),
(1805, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:10:43', '2023-05-04 19:10:43'),
(1806, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:11:17', '2023-05-04 19:11:17'),
(1807, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:11:51', '2023-05-04 19:11:51'),
(1808, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:12:24', '2023-05-04 19:12:24'),
(1809, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:12:57', '2023-05-04 19:12:57'),
(1810, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:13:30', '2023-05-04 19:13:30'),
(1811, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:14:03', '2023-05-04 19:14:03'),
(1812, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:14:35', '2023-05-04 19:14:35'),
(1813, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:15:08', '2023-05-04 19:15:08'),
(1814, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:15:43', '2023-05-04 19:15:43'),
(1815, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:16:18', '2023-05-04 19:16:18'),
(1816, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:16:50', '2023-05-04 19:16:50'),
(1817, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:17:23', '2023-05-04 19:17:23'),
(1818, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:17:55', '2023-05-04 19:17:55'),
(1819, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:18:27', '2023-05-04 19:18:27'),
(1820, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:19:00', '2023-05-04 19:19:00'),
(1821, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:19:33', '2023-05-04 19:19:33'),
(1822, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:20:05', '2023-05-04 19:20:05'),
(1823, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:20:36', '2023-05-04 19:20:36'),
(1824, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:21:09', '2023-05-04 19:21:09'),
(1825, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:21:42', '2023-05-04 19:21:42'),
(1826, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:22:15', '2023-05-04 19:22:15'),
(1827, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:22:50', '2023-05-04 19:22:50'),
(1828, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:23:22', '2023-05-04 19:23:22'),
(1829, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:23:56', '2023-05-04 19:23:56'),
(1830, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:24:31', '2023-05-04 19:24:31'),
(1831, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:25:04', '2023-05-04 19:25:04'),
(1832, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:25:20', '2023-05-04 19:25:20'),
(1833, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:25:55', '2023-05-04 19:25:55'),
(1834, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:26:27', '2023-05-04 19:26:27'),
(1835, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:27:01', '2023-05-04 19:27:01'),
(1836, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:27:34', '2023-05-04 19:27:34'),
(1837, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:28:06', '2023-05-04 19:28:06'),
(1838, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:28:39', '2023-05-04 19:28:39'),
(1839, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:29:11', '2023-05-04 19:29:11'),
(1840, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:29:43', '2023-05-04 19:29:43'),
(1841, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:30:15', '2023-05-04 19:30:15'),
(1842, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:33:23', '2023-05-04 19:33:23'),
(1843, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:33:58', '2023-05-04 19:33:58'),
(1844, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:34:30', '2023-05-04 19:34:30'),
(1845, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:35:04', '2023-05-04 19:35:04'),
(1846, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:35:37', '2023-05-04 19:35:37'),
(1847, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:36:11', '2023-05-04 19:36:11'),
(1848, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:36:44', '2023-05-04 19:36:44'),
(1849, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:37:17', '2023-05-04 19:37:17'),
(1850, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:37:51', '2023-05-04 19:37:51'),
(1851, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:38:25', '2023-05-04 19:38:25'),
(1852, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:38:58', '2023-05-04 19:38:58'),
(1853, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:39:30', '2023-05-04 19:39:30'),
(1854, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:40:03', '2023-05-04 19:40:03'),
(1855, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:40:36', '2023-05-04 19:40:36'),
(1856, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:40:52', '2023-05-04 19:40:52'),
(1857, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:41:25', '2023-05-04 19:41:25'),
(1858, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:41:57', '2023-05-04 19:41:57'),
(1859, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:42:31', '2023-05-04 19:42:31'),
(1860, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:43:03', '2023-05-04 19:43:03'),
(1861, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:43:36', '2023-05-04 19:43:36'),
(1862, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:44:10', '2023-05-04 19:44:10'),
(1863, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:44:44', '2023-05-04 19:44:44'),
(1864, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:45:17', '2023-05-04 19:45:17'),
(1865, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:45:50', '2023-05-04 19:45:50'),
(1866, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:46:22', '2023-05-04 19:46:22'),
(1867, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:46:55', '2023-05-04 19:46:55'),
(1868, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:47:28', '2023-05-04 19:47:28'),
(1869, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:48:00', '2023-05-04 19:48:00'),
(1870, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:48:33', '2023-05-04 19:48:33'),
(1871, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:49:08', '2023-05-04 19:49:08'),
(1872, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:49:42', '2023-05-04 19:49:42'),
(1873, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:50:15', '2023-05-04 19:50:15'),
(1874, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:50:49', '2023-05-04 19:50:49'),
(1875, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:51:22', '2023-05-04 19:51:22'),
(1876, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:51:56', '2023-05-04 19:51:56'),
(1877, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:52:30', '2023-05-04 19:52:30'),
(1878, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:53:04', '2023-05-04 19:53:04'),
(1879, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:53:37', '2023-05-04 19:53:37'),
(1880, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:54:10', '2023-05-04 19:54:10'),
(1881, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:54:44', '2023-05-04 19:54:44'),
(1882, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:55:19', '2023-05-04 19:55:19'),
(1883, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:55:53', '2023-05-04 19:55:53'),
(1884, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:56:26', '2023-05-04 19:56:26'),
(1885, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:56:59', '2023-05-04 19:56:59'),
(1886, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:57:32', '2023-05-04 19:57:32'),
(1887, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:58:04', '2023-05-04 19:58:04'),
(1888, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:58:36', '2023-05-04 19:58:36'),
(1889, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:59:08', '2023-05-04 19:59:08'),
(1890, 0, 0, 0, '', NULL, NULL, '2023-05-04 19:59:40', '2023-05-04 19:59:40'),
(1891, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:00:12', '2023-05-04 20:00:12'),
(1892, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:00:45', '2023-05-04 20:00:45'),
(1893, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:01:17', '2023-05-04 20:01:17'),
(1894, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:01:50', '2023-05-04 20:01:50'),
(1895, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:02:22', '2023-05-04 20:02:22'),
(1896, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:02:54', '2023-05-04 20:02:54'),
(1897, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:03:27', '2023-05-04 20:03:27'),
(1898, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:04:00', '2023-05-04 20:04:00'),
(1899, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:04:33', '2023-05-04 20:04:33'),
(1900, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:05:06', '2023-05-04 20:05:06'),
(1901, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:05:38', '2023-05-04 20:05:38'),
(1902, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:06:10', '2023-05-04 20:06:10'),
(1903, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:06:41', '2023-05-04 20:06:41'),
(1904, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:07:14', '2023-05-04 20:07:14'),
(1905, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:07:49', '2023-05-04 20:07:49'),
(1906, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:08:26', '2023-05-04 20:08:26'),
(1907, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:09:03', '2023-05-04 20:09:03'),
(1908, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:09:39', '2023-05-04 20:09:39'),
(1909, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:10:16', '2023-05-04 20:10:16'),
(1910, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:10:52', '2023-05-04 20:10:52'),
(1911, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:11:28', '2023-05-04 20:11:28'),
(1912, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:12:02', '2023-05-04 20:12:02'),
(1913, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:12:39', '2023-05-04 20:12:39'),
(1914, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:13:15', '2023-05-04 20:13:15'),
(1915, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:13:49', '2023-05-04 20:13:49'),
(1916, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:14:26', '2023-05-04 20:14:26'),
(1917, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:15:02', '2023-05-04 20:15:02'),
(1918, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:15:38', '2023-05-04 20:15:38'),
(1919, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:16:12', '2023-05-04 20:16:12'),
(1920, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:47:23', '2023-05-04 20:47:23'),
(1921, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:47:55', '2023-05-04 20:47:55'),
(1922, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:48:28', '2023-05-04 20:48:28'),
(1923, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:49:02', '2023-05-04 20:49:02'),
(1924, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:49:35', '2023-05-04 20:49:35'),
(1925, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:50:08', '2023-05-04 20:50:08'),
(1926, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:50:42', '2023-05-04 20:50:42'),
(1927, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:51:05', '2023-05-04 20:51:05'),
(1928, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:51:40', '2023-05-04 20:51:40'),
(1929, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:52:13', '2023-05-04 20:52:13'),
(1930, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:56:35', '2023-05-04 20:56:35'),
(1931, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:57:08', '2023-05-04 20:57:08'),
(1932, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:57:42', '2023-05-04 20:57:42'),
(1933, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:58:16', '2023-05-04 20:58:16'),
(1934, 0, 0, 0, '', NULL, NULL, '2023-05-04 20:58:49', '2023-05-04 20:58:49'),
(1935, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:02:05', '2023-05-04 21:02:05'),
(1936, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:03:01', '2023-05-04 21:03:01'),
(1937, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:03:13', '2023-05-04 21:03:13'),
(1938, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:03:45', '2023-05-04 21:03:45'),
(1939, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:04:19', '2023-05-04 21:04:19'),
(1940, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:04:52', '2023-05-04 21:04:52'),
(1941, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:05:25', '2023-05-04 21:05:25'),
(1942, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:05:58', '2023-05-04 21:05:58'),
(1943, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:06:32', '2023-05-04 21:06:32'),
(1944, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:07:05', '2023-05-04 21:07:05'),
(1945, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:07:39', '2023-05-04 21:07:39'),
(1946, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:08:12', '2023-05-04 21:08:12'),
(1947, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:08:45', '2023-05-04 21:08:45'),
(1948, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:09:18', '2023-05-04 21:09:18'),
(1949, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:09:52', '2023-05-04 21:09:52'),
(1950, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:10:25', '2023-05-04 21:10:25'),
(1951, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:10:58', '2023-05-04 21:10:58'),
(1952, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:11:32', '2023-05-04 21:11:32'),
(1953, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:12:05', '2023-05-04 21:12:05'),
(1954, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:12:38', '2023-05-04 21:12:38'),
(1955, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:13:12', '2023-05-04 21:13:12'),
(1956, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:13:45', '2023-05-04 21:13:45'),
(1957, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:14:18', '2023-05-04 21:14:18'),
(1958, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:14:51', '2023-05-04 21:14:51'),
(1959, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:15:25', '2023-05-04 21:15:25'),
(1960, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:15:58', '2023-05-04 21:15:58'),
(1961, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:16:33', '2023-05-04 21:16:33'),
(1962, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:17:05', '2023-05-04 21:17:05'),
(1963, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:17:38', '2023-05-04 21:17:38'),
(1964, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:18:13', '2023-05-04 21:18:13'),
(1965, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:18:47', '2023-05-04 21:18:47'),
(1966, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:19:21', '2023-05-04 21:19:21'),
(1967, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:19:55', '2023-05-04 21:19:55'),
(1968, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:20:29', '2023-05-04 21:20:29'),
(1969, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:21:03', '2023-05-04 21:21:03'),
(1970, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:21:37', '2023-05-04 21:21:37'),
(1971, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:22:11', '2023-05-04 21:22:11'),
(1972, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:31:26', '2023-05-04 21:31:26'),
(1973, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:31:58', '2023-05-04 21:31:58'),
(1974, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:32:31', '2023-05-04 21:32:31'),
(1975, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:33:04', '2023-05-04 21:33:04'),
(1976, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:33:37', '2023-05-04 21:33:37'),
(1977, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:34:12', '2023-05-04 21:34:12'),
(1978, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:34:44', '2023-05-04 21:34:44'),
(1979, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:35:18', '2023-05-04 21:35:18'),
(1980, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:35:51', '2023-05-04 21:35:51'),
(1981, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:36:26', '2023-05-04 21:36:26'),
(1982, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:36:59', '2023-05-04 21:36:59'),
(1983, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:37:34', '2023-05-04 21:37:34'),
(1984, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:38:07', '2023-05-04 21:38:07'),
(1985, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:38:40', '2023-05-04 21:38:40'),
(1986, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:39:13', '2023-05-04 21:39:13'),
(1987, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:39:46', '2023-05-04 21:39:46');
INSERT INTO `encheregagners` (`id`, `user_id`, `enchere_id`, `valeur_click`, `code`, `state`, `payed_by`, `updated_at`, `created_at`) VALUES
(1988, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:40:18', '2023-05-04 21:40:18'),
(1989, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:40:51', '2023-05-04 21:40:51'),
(1990, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:41:25', '2023-05-04 21:41:25'),
(1991, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:42:01', '2023-05-04 21:42:01'),
(1992, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:42:18', '2023-05-04 21:42:18'),
(1993, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:42:53', '2023-05-04 21:42:53'),
(1994, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:43:26', '2023-05-04 21:43:26'),
(1995, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:44:00', '2023-05-04 21:44:00'),
(1996, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:44:33', '2023-05-04 21:44:33'),
(1997, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:45:07', '2023-05-04 21:45:07'),
(1998, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:45:21', '2023-05-04 21:45:21'),
(1999, 0, 0, 0, '', NULL, NULL, '2023-05-04 21:49:23', '2023-05-04 21:49:23'),
(2000, 0, 0, 0, '', NULL, NULL, '2023-05-04 22:06:52', '2023-05-04 22:06:52'),
(2001, 0, 0, 0, '', NULL, NULL, '2023-05-04 22:12:38', '2023-05-04 22:12:38'),
(2002, 0, 0, 0, '', NULL, NULL, '2023-05-04 22:26:25', '2023-05-04 22:26:25'),
(2003, 0, 0, 0, '', NULL, NULL, '2023-05-04 22:48:18', '2023-05-04 22:48:18'),
(2004, 0, 0, 0, '', NULL, NULL, '2023-05-04 23:01:25', '2023-05-04 23:01:25'),
(2005, 96, 37, 53, '', NULL, NULL, '2023-06-16 11:29:46', '2023-05-04 23:18:33'),
(2006, 0, 0, 0, '', NULL, NULL, '2023-05-05 18:54:22', '2023-05-05 18:54:22'),
(2007, 0, 0, 0, '', NULL, NULL, '2023-05-05 18:57:31', '2023-05-05 18:57:31'),
(2008, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:00:29', '2023-05-05 19:00:29'),
(2009, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:08:25', '2023-05-05 19:08:25'),
(2010, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:14:18', '2023-05-05 19:14:18'),
(2011, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:14:48', '2023-05-05 19:14:48'),
(2012, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:15:19', '2023-05-05 19:15:19'),
(2013, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:15:49', '2023-05-05 19:15:49'),
(2014, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:16:19', '2023-05-05 19:16:19'),
(2015, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:16:51', '2023-05-05 19:16:51'),
(2016, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:17:22', '2023-05-05 19:17:22'),
(2017, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:17:53', '2023-05-05 19:17:53'),
(2018, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:18:24', '2023-05-05 19:18:24'),
(2019, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:18:54', '2023-05-05 19:18:54'),
(2020, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:19:26', '2023-05-05 19:19:26'),
(2021, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:19:57', '2023-05-05 19:19:57'),
(2022, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:20:28', '2023-05-05 19:20:28'),
(2023, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:20:59', '2023-05-05 19:20:59'),
(2024, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:21:30', '2023-05-05 19:21:30'),
(2025, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:22:01', '2023-05-05 19:22:01'),
(2026, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:22:32', '2023-05-05 19:22:32'),
(2027, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:23:03', '2023-05-05 19:23:03'),
(2028, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:23:34', '2023-05-05 19:23:34'),
(2029, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:24:05', '2023-05-05 19:24:05'),
(2030, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:24:36', '2023-05-05 19:24:36'),
(2031, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:25:06', '2023-05-05 19:25:06'),
(2032, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:25:37', '2023-05-05 19:25:37'),
(2033, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:26:08', '2023-05-05 19:26:08'),
(2034, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:26:39', '2023-05-05 19:26:39'),
(2035, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:27:10', '2023-05-05 19:27:10'),
(2036, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:30:30', '2023-05-05 19:30:30'),
(2037, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:30:51', '2023-05-05 19:30:51'),
(2038, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:31:04', '2023-05-05 19:31:04'),
(2039, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:32:16', '2023-05-05 19:32:16'),
(2040, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:32:27', '2023-05-05 19:32:27'),
(2041, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:32:34', '2023-05-05 19:32:34'),
(2042, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:32:48', '2023-05-05 19:32:48'),
(2043, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:33:20', '2023-05-05 19:33:20'),
(2044, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:33:22', '2023-05-05 19:33:22'),
(2045, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:33:29', '2023-05-05 19:33:29'),
(2046, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:33:43', '2023-05-05 19:33:43'),
(2047, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:34:14', '2023-05-05 19:34:14'),
(2048, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:34:45', '2023-05-05 19:34:45'),
(2049, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:35:16', '2023-05-05 19:35:16'),
(2050, 0, 0, 0, '', NULL, NULL, '2023-05-05 19:36:07', '2023-05-05 19:36:07'),
(2051, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:33:54', '2023-05-05 20:33:54'),
(2052, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:34:25', '2023-05-05 20:34:25'),
(2053, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:34:56', '2023-05-05 20:34:56'),
(2054, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:35:27', '2023-05-05 20:35:27'),
(2055, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:35:58', '2023-05-05 20:35:58'),
(2056, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:36:29', '2023-05-05 20:36:29'),
(2057, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:37:00', '2023-05-05 20:37:00'),
(2058, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:37:31', '2023-05-05 20:37:31'),
(2059, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:38:02', '2023-05-05 20:38:02'),
(2060, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:38:33', '2023-05-05 20:38:33'),
(2061, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:39:04', '2023-05-05 20:39:04'),
(2062, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:39:14', '2023-05-05 20:39:14'),
(2063, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:39:19', '2023-05-05 20:39:19'),
(2064, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:39:42', '2023-05-05 20:39:42'),
(2065, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:40:46', '2023-05-05 20:40:46'),
(2066, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:40:57', '2023-05-05 20:40:57'),
(2067, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:41:28', '2023-05-05 20:41:28'),
(2068, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:41:28', '2023-05-05 20:41:28'),
(2069, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:41:41', '2023-05-05 20:41:41'),
(2070, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:41:50', '2023-05-05 20:41:50'),
(2071, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:42:31', '2023-05-05 20:42:31'),
(2072, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:43:20', '2023-05-05 20:43:20'),
(2073, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:43:28', '2023-05-05 20:43:28'),
(2074, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:43:59', '2023-05-05 20:43:59'),
(2075, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:44:32', '2023-05-05 20:44:32'),
(2076, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:45:05', '2023-05-05 20:45:05'),
(2077, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:45:38', '2023-05-05 20:45:38'),
(2078, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:46:10', '2023-05-05 20:46:10'),
(2079, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:46:43', '2023-05-05 20:46:43'),
(2080, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:47:15', '2023-05-05 20:47:15'),
(2081, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:47:47', '2023-05-05 20:47:47'),
(2082, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:48:19', '2023-05-05 20:48:19'),
(2083, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:48:51', '2023-05-05 20:48:51'),
(2084, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:49:23', '2023-05-05 20:49:23'),
(2085, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:49:55', '2023-05-05 20:49:55'),
(2086, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:50:27', '2023-05-05 20:50:27'),
(2087, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:50:59', '2023-05-05 20:50:59'),
(2088, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:51:31', '2023-05-05 20:51:31'),
(2089, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:52:03', '2023-05-05 20:52:03'),
(2090, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:52:36', '2023-05-05 20:52:36'),
(2091, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:53:08', '2023-05-05 20:53:08'),
(2092, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:53:40', '2023-05-05 20:53:40'),
(2093, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:54:12', '2023-05-05 20:54:12'),
(2094, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:54:44', '2023-05-05 20:54:44'),
(2095, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:55:16', '2023-05-05 20:55:16'),
(2096, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:55:48', '2023-05-05 20:55:48'),
(2097, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:56:20', '2023-05-05 20:56:20'),
(2098, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:56:52', '2023-05-05 20:56:52'),
(2099, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:57:24', '2023-05-05 20:57:24'),
(2100, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:57:56', '2023-05-05 20:57:56'),
(2101, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:58:28', '2023-05-05 20:58:28'),
(2102, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:59:00', '2023-05-05 20:59:00'),
(2103, 0, 0, 0, '', NULL, NULL, '2023-05-05 20:59:32', '2023-05-05 20:59:32'),
(2104, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:00:04', '2023-05-05 21:00:04'),
(2105, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:00:36', '2023-05-05 21:00:36'),
(2106, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:01:08', '2023-05-05 21:01:08'),
(2107, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:01:40', '2023-05-05 21:01:40'),
(2108, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:02:12', '2023-05-05 21:02:12'),
(2109, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:02:43', '2023-05-05 21:02:43'),
(2110, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:03:16', '2023-05-05 21:03:16'),
(2111, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:03:49', '2023-05-05 21:03:49'),
(2112, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:04:22', '2023-05-05 21:04:22'),
(2113, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:04:55', '2023-05-05 21:04:55'),
(2114, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:05:00', '2023-05-05 21:05:00'),
(2115, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:05:35', '2023-05-05 21:05:35'),
(2116, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:06:09', '2023-05-05 21:06:09'),
(2117, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:06:42', '2023-05-05 21:06:42'),
(2118, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:07:16', '2023-05-05 21:07:16'),
(2119, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:07:49', '2023-05-05 21:07:49'),
(2120, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:08:24', '2023-05-05 21:08:24'),
(2121, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:08:56', '2023-05-05 21:08:56'),
(2122, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:09:29', '2023-05-05 21:09:29'),
(2123, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:10:04', '2023-05-05 21:10:04'),
(2124, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:10:11', '2023-05-05 21:10:11'),
(2125, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:10:41', '2023-05-05 21:10:41'),
(2126, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:11:05', '2023-05-05 21:11:05'),
(2127, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:11:26', '2023-05-05 21:11:26'),
(2128, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:12:01', '2023-05-05 21:12:01'),
(2129, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:12:34', '2023-05-05 21:12:34'),
(2130, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:13:06', '2023-05-05 21:13:06'),
(2131, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:13:39', '2023-05-05 21:13:39'),
(2132, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:14:13', '2023-05-05 21:14:13'),
(2133, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:14:46', '2023-05-05 21:14:46'),
(2134, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:15:19', '2023-05-05 21:15:19'),
(2135, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:15:52', '2023-05-05 21:15:52'),
(2136, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:16:25', '2023-05-05 21:16:25'),
(2137, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:17:04', '2023-05-05 21:17:04'),
(2138, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:17:36', '2023-05-05 21:17:36'),
(2139, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:18:08', '2023-05-05 21:18:08'),
(2140, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:19:48', '2023-05-05 21:19:48'),
(2141, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:20:20', '2023-05-05 21:20:20'),
(2142, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:20:53', '2023-05-05 21:20:53'),
(2143, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:21:26', '2023-05-05 21:21:26'),
(2144, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:21:59', '2023-05-05 21:21:59'),
(2145, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:22:33', '2023-05-05 21:22:33'),
(2146, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:23:06', '2023-05-05 21:23:06'),
(2147, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:23:39', '2023-05-05 21:23:39'),
(2148, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:24:12', '2023-05-05 21:24:12'),
(2149, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:24:45', '2023-05-05 21:24:45'),
(2150, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:25:18', '2023-05-05 21:25:18'),
(2151, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:25:51', '2023-05-05 21:25:51'),
(2152, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:26:24', '2023-05-05 21:26:24'),
(2153, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:26:57', '2023-05-05 21:26:57'),
(2154, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:27:30', '2023-05-05 21:27:30'),
(2155, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:28:03', '2023-05-05 21:28:03'),
(2156, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:28:37', '2023-05-05 21:28:37'),
(2157, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:32:22', '2023-05-05 21:32:22'),
(2158, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:32:54', '2023-05-05 21:32:54'),
(2159, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:33:28', '2023-05-05 21:33:28'),
(2160, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:34:02', '2023-05-05 21:34:02'),
(2161, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:34:34', '2023-05-05 21:34:34'),
(2162, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:35:11', '2023-05-05 21:35:11'),
(2163, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:35:44', '2023-05-05 21:35:44'),
(2164, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:36:17', '2023-05-05 21:36:17'),
(2165, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:36:49', '2023-05-05 21:36:49'),
(2166, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:37:21', '2023-05-05 21:37:21'),
(2167, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:37:54', '2023-05-05 21:37:54'),
(2168, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:38:28', '2023-05-05 21:38:28'),
(2169, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:39:01', '2023-05-05 21:39:01'),
(2170, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:39:35', '2023-05-05 21:39:35'),
(2171, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:40:08', '2023-05-05 21:40:08'),
(2172, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:40:40', '2023-05-05 21:40:40'),
(2173, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:41:09', '2023-05-05 21:41:09'),
(2174, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:41:34', '2023-05-05 21:41:34'),
(2175, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:42:07', '2023-05-05 21:42:07'),
(2176, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:42:14', '2023-05-05 21:42:14'),
(2177, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:42:45', '2023-05-05 21:42:45'),
(2178, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:43:18', '2023-05-05 21:43:18'),
(2179, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:43:50', '2023-05-05 21:43:50'),
(2180, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:44:23', '2023-05-05 21:44:23'),
(2181, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:44:56', '2023-05-05 21:44:56'),
(2182, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:45:29', '2023-05-05 21:45:29'),
(2183, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:46:02', '2023-05-05 21:46:02'),
(2184, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:46:36', '2023-05-05 21:46:36'),
(2185, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:47:08', '2023-05-05 21:47:08'),
(2186, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:47:40', '2023-05-05 21:47:40'),
(2187, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:48:14', '2023-05-05 21:48:14'),
(2188, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:48:37', '2023-05-05 21:48:37'),
(2189, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:49:10', '2023-05-05 21:49:10'),
(2190, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:49:43', '2023-05-05 21:49:43'),
(2191, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:50:17', '2023-05-05 21:50:17'),
(2192, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:50:51', '2023-05-05 21:50:51'),
(2193, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:51:24', '2023-05-05 21:51:24'),
(2194, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:51:57', '2023-05-05 21:51:57'),
(2195, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:52:30', '2023-05-05 21:52:30'),
(2196, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:53:03', '2023-05-05 21:53:03'),
(2197, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:53:37', '2023-05-05 21:53:37'),
(2198, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:54:10', '2023-05-05 21:54:10'),
(2199, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:54:43', '2023-05-05 21:54:43'),
(2200, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:55:16', '2023-05-05 21:55:16'),
(2201, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:55:49', '2023-05-05 21:55:49'),
(2202, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:56:22', '2023-05-05 21:56:22'),
(2203, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:56:55', '2023-05-05 21:56:55'),
(2204, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:57:27', '2023-05-05 21:57:27'),
(2205, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:58:01', '2023-05-05 21:58:01'),
(2206, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:58:34', '2023-05-05 21:58:34'),
(2207, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:59:07', '2023-05-05 21:59:07'),
(2208, 0, 0, 0, '', NULL, NULL, '2023-05-05 21:59:40', '2023-05-05 21:59:40'),
(2209, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:00:13', '2023-05-05 22:00:13'),
(2210, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:00:46', '2023-05-05 22:00:46'),
(2211, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:01:19', '2023-05-05 22:01:19'),
(2212, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:01:53', '2023-05-05 22:01:53'),
(2213, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:02:05', '2023-05-05 22:02:05'),
(2214, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:02:38', '2023-05-05 22:02:38'),
(2215, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:03:12', '2023-05-05 22:03:12'),
(2216, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:03:43', '2023-05-05 22:03:43'),
(2217, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:04:06', '2023-05-05 22:04:06'),
(2218, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:04:38', '2023-05-05 22:04:38'),
(2219, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:05:11', '2023-05-05 22:05:11'),
(2220, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:05:44', '2023-05-05 22:05:44'),
(2221, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:06:16', '2023-05-05 22:06:16'),
(2222, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:06:49', '2023-05-05 22:06:49'),
(2223, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:07:21', '2023-05-05 22:07:21'),
(2224, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:07:54', '2023-05-05 22:07:54'),
(2225, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:08:26', '2023-05-05 22:08:26'),
(2226, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:08:59', '2023-05-05 22:08:59'),
(2227, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:09:31', '2023-05-05 22:09:31'),
(2228, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:10:04', '2023-05-05 22:10:04'),
(2229, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:10:37', '2023-05-05 22:10:37'),
(2230, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:11:14', '2023-05-05 22:11:14'),
(2231, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:11:51', '2023-05-05 22:11:51'),
(2232, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:12:29', '2023-05-05 22:12:29'),
(2233, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:13:05', '2023-05-05 22:13:05'),
(2234, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:13:38', '2023-05-05 22:13:38'),
(2235, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:14:11', '2023-05-05 22:14:11'),
(2236, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:14:45', '2023-05-05 22:14:45'),
(2237, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:15:19', '2023-05-05 22:15:19'),
(2238, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:15:53', '2023-05-05 22:15:53'),
(2239, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:16:29', '2023-05-05 22:16:29'),
(2240, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:17:05', '2023-05-05 22:17:05'),
(2241, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:17:40', '2023-05-05 22:17:40'),
(2242, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:18:14', '2023-05-05 22:18:14'),
(2243, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:18:49', '2023-05-05 22:18:49'),
(2244, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:19:23', '2023-05-05 22:19:23'),
(2245, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:19:57', '2023-05-05 22:19:57'),
(2246, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:20:31', '2023-05-05 22:20:31'),
(2247, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:21:06', '2023-05-05 22:21:06'),
(2248, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:21:39', '2023-05-05 22:21:39'),
(2249, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:22:13', '2023-05-05 22:22:13'),
(2250, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:22:47', '2023-05-05 22:22:47'),
(2251, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:23:21', '2023-05-05 22:23:21'),
(2252, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:23:55', '2023-05-05 22:23:55'),
(2253, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:24:29', '2023-05-05 22:24:29'),
(2254, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:25:03', '2023-05-05 22:25:03'),
(2255, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:25:36', '2023-05-05 22:25:36'),
(2256, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:26:09', '2023-05-05 22:26:09'),
(2257, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:26:43', '2023-05-05 22:26:43'),
(2258, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:27:17', '2023-05-05 22:27:17'),
(2259, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:28:21', '2023-05-05 22:28:21'),
(2260, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:28:55', '2023-05-05 22:28:55'),
(2261, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:29:29', '2023-05-05 22:29:29'),
(2262, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:30:03', '2023-05-05 22:30:03'),
(2263, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:30:37', '2023-05-05 22:30:37'),
(2264, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:31:11', '2023-05-05 22:31:11'),
(2265, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:32:34', '2023-05-05 22:32:34'),
(2266, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:33:09', '2023-05-05 22:33:09'),
(2267, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:33:45', '2023-05-05 22:33:45'),
(2268, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:34:19', '2023-05-05 22:34:19'),
(2269, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:34:54', '2023-05-05 22:34:54'),
(2270, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:35:30', '2023-05-05 22:35:30'),
(2271, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:36:08', '2023-05-05 22:36:08'),
(2272, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:37:04', '2023-05-05 22:37:04'),
(2273, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:37:30', '2023-05-05 22:37:30'),
(2274, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:38:08', '2023-05-05 22:38:08'),
(2275, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:38:45', '2023-05-05 22:38:45'),
(2276, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:39:13', '2023-05-05 22:39:13'),
(2277, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:39:50', '2023-05-05 22:39:50'),
(2278, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:40:33', '2023-05-05 22:40:33'),
(2279, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:41:09', '2023-05-05 22:41:09'),
(2280, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:41:44', '2023-05-05 22:41:44'),
(2281, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:42:21', '2023-05-05 22:42:21'),
(2282, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:42:57', '2023-05-05 22:42:57'),
(2283, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:43:34', '2023-05-05 22:43:34'),
(2284, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:44:10', '2023-05-05 22:44:10'),
(2285, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:44:46', '2023-05-05 22:44:46'),
(2286, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:45:21', '2023-05-05 22:45:21'),
(2287, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:45:55', '2023-05-05 22:45:55'),
(2288, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:46:29', '2023-05-05 22:46:29'),
(2289, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:47:05', '2023-05-05 22:47:05'),
(2290, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:47:39', '2023-05-05 22:47:39'),
(2291, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:48:13', '2023-05-05 22:48:13'),
(2292, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:48:47', '2023-05-05 22:48:47'),
(2293, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:49:21', '2023-05-05 22:49:21'),
(2294, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:49:55', '2023-05-05 22:49:55'),
(2295, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:50:29', '2023-05-05 22:50:29'),
(2296, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:51:03', '2023-05-05 22:51:03'),
(2297, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:51:37', '2023-05-05 22:51:37'),
(2298, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:52:11', '2023-05-05 22:52:11'),
(2299, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:52:45', '2023-05-05 22:52:45'),
(2300, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:53:19', '2023-05-05 22:53:19'),
(2301, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:53:53', '2023-05-05 22:53:53'),
(2302, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:54:27', '2023-05-05 22:54:27'),
(2303, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:55:01', '2023-05-05 22:55:01'),
(2304, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:55:36', '2023-05-05 22:55:36'),
(2305, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:56:10', '2023-05-05 22:56:10'),
(2306, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:56:43', '2023-05-05 22:56:43'),
(2307, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:57:17', '2023-05-05 22:57:17'),
(2308, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:57:51', '2023-05-05 22:57:51'),
(2309, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:58:25', '2023-05-05 22:58:25'),
(2310, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:58:59', '2023-05-05 22:58:59'),
(2311, 0, 0, 0, '', NULL, NULL, '2023-05-05 22:59:33', '2023-05-05 22:59:33'),
(2312, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:00:07', '2023-05-05 23:00:07'),
(2313, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:00:41', '2023-05-05 23:00:41'),
(2314, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:01:15', '2023-05-05 23:01:15'),
(2315, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:01:49', '2023-05-05 23:01:49'),
(2316, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:02:24', '2023-05-05 23:02:24'),
(2317, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:02:57', '2023-05-05 23:02:57'),
(2318, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:03:31', '2023-05-05 23:03:31'),
(2319, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:04:06', '2023-05-05 23:04:06'),
(2320, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:04:39', '2023-05-05 23:04:39'),
(2321, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:05:13', '2023-05-05 23:05:13'),
(2322, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:05:47', '2023-05-05 23:05:47'),
(2323, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:06:21', '2023-05-05 23:06:21'),
(2324, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:06:55', '2023-05-05 23:06:55'),
(2325, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:07:29', '2023-05-05 23:07:29'),
(2326, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:08:04', '2023-05-05 23:08:04'),
(2327, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:08:38', '2023-05-05 23:08:38'),
(2328, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:09:13', '2023-05-05 23:09:13'),
(2329, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:09:47', '2023-05-05 23:09:47'),
(2330, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:10:21', '2023-05-05 23:10:21'),
(2331, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:10:55', '2023-05-05 23:10:55'),
(2332, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:11:29', '2023-05-05 23:11:29'),
(2333, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:19:22', '2023-05-05 23:19:22'),
(2334, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:19:59', '2023-05-05 23:19:59'),
(2335, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:20:31', '2023-05-05 23:20:31'),
(2336, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:21:04', '2023-05-05 23:21:04'),
(2337, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:21:37', '2023-05-05 23:21:37'),
(2338, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:22:09', '2023-05-05 23:22:09'),
(2339, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:22:42', '2023-05-05 23:22:42'),
(2340, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:23:16', '2023-05-05 23:23:16'),
(2341, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:23:48', '2023-05-05 23:23:48'),
(2342, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:24:21', '2023-05-05 23:24:21'),
(2343, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:24:42', '2023-05-05 23:24:42'),
(2344, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:25:15', '2023-05-05 23:25:15'),
(2345, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:25:48', '2023-05-05 23:25:48'),
(2346, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:26:21', '2023-05-05 23:26:21'),
(2347, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:26:54', '2023-05-05 23:26:54'),
(2348, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:27:27', '2023-05-05 23:27:27'),
(2349, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:27:59', '2023-05-05 23:27:59'),
(2350, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:28:33', '2023-05-05 23:28:33'),
(2351, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:29:06', '2023-05-05 23:29:06'),
(2352, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:31:27', '2023-05-05 23:31:27'),
(2353, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:32:00', '2023-05-05 23:32:00'),
(2354, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:33:05', '2023-05-05 23:33:05'),
(2355, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:33:06', '2023-05-05 23:33:06'),
(2356, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:33:39', '2023-05-05 23:33:39'),
(2357, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:34:15', '2023-05-05 23:34:15'),
(2358, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:34:52', '2023-05-05 23:34:52'),
(2359, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:35:25', '2023-05-05 23:35:25'),
(2360, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:35:57', '2023-05-05 23:35:57'),
(2361, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:36:29', '2023-05-05 23:36:29'),
(2362, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:37:01', '2023-05-05 23:37:01'),
(2363, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:37:33', '2023-05-05 23:37:33'),
(2364, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:37:45', '2023-05-05 23:37:45'),
(2365, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:38:43', '2023-05-05 23:38:43'),
(2366, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:39:02', '2023-05-05 23:39:02'),
(2367, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:39:24', '2023-05-05 23:39:24'),
(2368, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:40:33', '2023-05-05 23:40:33'),
(2369, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:41:05', '2023-05-05 23:41:05'),
(2370, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:41:33', '2023-05-05 23:41:33'),
(2371, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:42:03', '2023-05-05 23:42:03'),
(2372, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:42:32', '2023-05-05 23:42:32'),
(2373, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:43:04', '2023-05-05 23:43:04'),
(2374, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:43:37', '2023-05-05 23:43:37'),
(2375, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:43:54', '2023-05-05 23:43:54'),
(2376, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:44:27', '2023-05-05 23:44:27'),
(2377, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:45:00', '2023-05-05 23:45:00'),
(2378, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:45:14', '2023-05-05 23:45:14'),
(2379, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:45:47', '2023-05-05 23:45:47'),
(2380, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:46:21', '2023-05-05 23:46:21'),
(2381, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:46:54', '2023-05-05 23:46:54'),
(2382, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:47:21', '2023-05-05 23:47:21'),
(2383, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:47:57', '2023-05-05 23:47:57'),
(2384, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:48:13', '2023-05-05 23:48:13'),
(2385, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:49:14', '2023-05-05 23:49:14'),
(2386, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:49:32', '2023-05-05 23:49:32'),
(2387, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:50:43', '2023-05-05 23:50:43'),
(2388, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:52:02', '2023-05-05 23:52:02'),
(2389, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:52:29', '2023-05-05 23:52:29'),
(2390, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:52:56', '2023-05-05 23:52:56'),
(2391, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:54:32', '2023-05-05 23:54:32'),
(2392, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:54:49', '2023-05-05 23:54:49'),
(2393, 0, 0, 0, '', NULL, NULL, '2023-05-05 23:54:49', '2023-05-05 23:54:49'),
(2394, 0, 0, 0, '', NULL, NULL, '2023-05-06 00:04:41', '2023-05-06 00:04:41'),
(2395, 0, 0, 0, '', NULL, NULL, '2023-05-06 00:05:37', '2023-05-06 00:05:37'),
(2396, 0, 0, 0, '', NULL, NULL, '2023-05-06 00:06:43', '2023-05-06 00:06:43'),
(2397, 0, 0, 0, '', NULL, NULL, '2023-05-06 00:06:59', '2023-05-06 00:06:59'),
(2398, 0, 0, 0, '', NULL, NULL, '2023-05-06 00:08:15', '2023-05-06 00:08:15'),
(2399, 0, 0, 0, '', NULL, NULL, '2023-05-06 00:08:47', '2023-05-06 00:08:47'),
(2400, 0, 0, 0, '', NULL, NULL, '2023-05-08 18:18:45', '2023-05-08 18:18:45'),
(2401, 0, 0, 0, '', NULL, NULL, '2023-05-08 18:20:00', '2023-05-08 18:20:00'),
(2402, 0, 0, 0, '', NULL, NULL, '2023-05-08 18:20:41', '2023-05-08 18:20:41'),
(2403, 0, 0, 0, '', NULL, NULL, '2023-05-08 18:20:46', '2023-05-08 18:20:46'),
(2404, 0, 0, 0, '', NULL, NULL, '2023-05-08 18:22:21', '2023-05-08 18:22:21'),
(2405, 0, 0, 0, '', NULL, NULL, '2023-05-08 18:22:43', '2023-05-08 18:22:43'),
(2406, 0, 0, 0, '', NULL, NULL, '2023-05-08 18:23:27', '2023-05-08 18:23:27'),
(2407, 0, 0, 0, '', NULL, NULL, '2023-05-08 18:23:27', '2023-05-08 18:23:27'),
(2408, 0, 0, 0, '', NULL, NULL, '2023-05-08 18:23:54', '2023-05-08 18:23:54'),
(2409, 0, 0, 0, '', NULL, NULL, '2023-05-08 18:24:51', '2023-05-08 18:24:51'),
(2410, 0, 0, 0, '', NULL, NULL, '2023-05-08 18:31:55', '2023-05-08 18:31:55'),
(2411, 0, 0, 0, '', NULL, NULL, '2023-05-08 18:32:17', '2023-05-08 18:32:17'),
(2412, 0, 0, 0, '', NULL, NULL, '2023-05-08 20:05:05', '2023-05-08 20:05:05'),
(2413, 0, 0, 0, '', NULL, NULL, '2023-05-08 20:55:20', '2023-05-08 20:55:20'),
(2414, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:11:47', '2023-05-08 21:11:47'),
(2415, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:15:03', '2023-05-08 21:15:03'),
(2416, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:15:54', '2023-05-08 21:15:54'),
(2417, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:17:07', '2023-05-08 21:17:07'),
(2418, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:22:59', '2023-05-08 21:22:59'),
(2419, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:23:13', '2023-05-08 21:23:13'),
(2420, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:23:59', '2023-05-08 21:23:59'),
(2421, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:24:20', '2023-05-08 21:24:20'),
(2422, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:29:01', '2023-05-08 21:29:01'),
(2423, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:29:08', '2023-05-08 21:29:08'),
(2424, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:31:56', '2023-05-08 21:31:56'),
(2425, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:32:23', '2023-05-08 21:32:23'),
(2426, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:34:37', '2023-05-08 21:34:37'),
(2427, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:37:12', '2023-05-08 21:37:12'),
(2428, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:39:31', '2023-05-08 21:39:31'),
(2429, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:40:58', '2023-05-08 21:40:58'),
(2430, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:41:22', '2023-05-08 21:41:22'),
(2431, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:45:24', '2023-05-08 21:45:24'),
(2432, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:47:16', '2023-05-08 21:47:16'),
(2433, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:47:36', '2023-05-08 21:47:36'),
(2434, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:47:57', '2023-05-08 21:47:57'),
(2435, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:52:21', '2023-05-08 21:52:21'),
(2436, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:53:28', '2023-05-08 21:53:28'),
(2437, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:54:01', '2023-05-08 21:54:01'),
(2438, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:57:13', '2023-05-08 21:57:13'),
(2439, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:57:59', '2023-05-08 21:57:59'),
(2440, 0, 0, 0, '', NULL, NULL, '2023-05-08 21:58:59', '2023-05-08 21:58:59'),
(2441, 0, 0, 0, '', NULL, NULL, '2023-05-08 22:00:07', '2023-05-08 22:00:07'),
(2442, 0, 0, 0, '', NULL, NULL, '2023-05-08 22:08:19', '2023-05-08 22:08:19'),
(2443, 0, 0, 0, '', NULL, NULL, '2023-05-08 22:14:56', '2023-05-08 22:14:56'),
(2444, 0, 0, 0, '', NULL, NULL, '2023-05-08 22:21:19', '2023-05-08 22:21:19'),
(2445, 0, 0, 0, '', NULL, NULL, '2023-05-08 22:21:53', '2023-05-08 22:21:53'),
(2446, 0, 0, 0, '', NULL, NULL, '2023-05-08 22:22:08', '2023-05-08 22:22:08'),
(2447, 0, 0, 0, '', NULL, NULL, '2023-05-08 22:22:32', '2023-05-08 22:22:32'),
(2448, 0, 0, 0, '', NULL, NULL, '2023-05-08 22:22:46', '2023-05-08 22:22:46'),
(2449, 0, 0, 0, '', NULL, NULL, '2023-05-08 22:23:08', '2023-05-08 22:23:08'),
(2450, 0, 0, 0, '', NULL, NULL, '2023-05-08 22:25:42', '2023-05-08 22:25:42'),
(2451, 0, 0, 0, '', NULL, NULL, '2023-05-08 22:28:45', '2023-05-08 22:28:45'),
(2452, 0, 0, 0, '', NULL, NULL, '2023-05-08 22:39:22', '2023-05-08 22:39:22'),
(2453, 0, 0, 0, '', NULL, NULL, '2023-05-08 22:54:03', '2023-05-08 22:54:03'),
(2454, 0, 0, 0, '', NULL, NULL, '2023-05-08 22:54:54', '2023-05-08 22:54:54'),
(2455, 0, 0, 0, '', NULL, NULL, '2023-05-08 22:58:14', '2023-05-08 22:58:14'),
(2456, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:01:26', '2023-05-08 23:01:26'),
(2457, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:01:35', '2023-05-08 23:01:35'),
(2458, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:01:51', '2023-05-08 23:01:51'),
(2459, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:02:35', '2023-05-08 23:02:35'),
(2460, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:14:58', '2023-05-08 23:14:58'),
(2461, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:16:55', '2023-05-08 23:16:55'),
(2462, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:25:57', '2023-05-08 23:25:57'),
(2463, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:26:24', '2023-05-08 23:26:24'),
(2464, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:26:52', '2023-05-08 23:26:52'),
(2465, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:28:15', '2023-05-08 23:28:15'),
(2466, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:29:52', '2023-05-08 23:29:52'),
(2467, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:30:39', '2023-05-08 23:30:39'),
(2468, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:34:47', '2023-05-08 23:34:47'),
(2469, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:36:35', '2023-05-08 23:36:35'),
(2470, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:38:13', '2023-05-08 23:38:13'),
(2471, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:38:49', '2023-05-08 23:38:49'),
(2472, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:40:19', '2023-05-08 23:40:19'),
(2473, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:41:26', '2023-05-08 23:41:26'),
(2474, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:41:50', '2023-05-08 23:41:50'),
(2475, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:42:08', '2023-05-08 23:42:08'),
(2476, 0, 0, 0, '', NULL, NULL, '2023-05-08 23:43:18', '2023-05-08 23:43:18'),
(2477, 0, 0, 0, '', NULL, NULL, '2023-05-09 00:07:47', '2023-05-09 00:07:47'),
(2478, 0, 0, 0, '', NULL, NULL, '2023-05-09 00:08:23', '2023-05-09 00:08:23'),
(2479, 0, 0, 0, '', NULL, NULL, '2023-05-09 00:10:56', '2023-05-09 00:10:56'),
(2480, 0, 0, 0, '', NULL, NULL, '2023-05-09 00:12:03', '2023-05-09 00:12:03'),
(2481, 0, 0, 0, '', NULL, NULL, '2023-05-09 00:13:27', '2023-05-09 00:13:27'),
(2482, 0, 0, 0, '', NULL, NULL, '2023-05-09 00:14:16', '2023-05-09 00:14:16'),
(2483, 0, 0, 0, '', NULL, NULL, '2023-05-09 00:16:15', '2023-05-09 00:16:15'),
(2484, 0, 0, 0, '', NULL, NULL, '2023-05-09 00:17:39', '2023-05-09 00:17:39'),
(2485, 0, 0, 0, '', NULL, NULL, '2023-05-09 00:19:01', '2023-05-09 00:19:01'),
(2486, 0, 0, 0, '', NULL, NULL, '2023-05-09 00:23:07', '2023-05-09 00:23:07'),
(2487, 0, 0, 0, '', NULL, NULL, '2023-05-09 00:23:39', '2023-05-09 00:23:39'),
(2488, 0, 0, 0, '', NULL, NULL, '2023-05-09 04:02:47', '2023-05-09 04:02:47'),
(2489, 0, 0, 0, '', NULL, NULL, '2023-05-09 04:03:31', '2023-05-09 04:03:31'),
(2490, 0, 0, 0, '', NULL, NULL, '2023-05-09 04:06:03', '2023-05-09 04:06:03'),
(2491, 0, 0, 0, '', NULL, NULL, '2023-05-09 04:20:53', '2023-05-09 04:20:53'),
(2492, 0, 0, 0, '', NULL, NULL, '2023-05-09 04:21:17', '2023-05-09 04:21:17'),
(2493, 0, 0, 0, '', NULL, NULL, '2023-05-09 04:22:30', '2023-05-09 04:22:30'),
(2494, 0, 0, 0, '', NULL, NULL, '2023-05-09 09:53:47', '2023-05-09 09:53:47'),
(2495, 0, 0, 0, '', NULL, NULL, '2023-05-09 09:54:31', '2023-05-09 09:54:31'),
(2496, 0, 0, 0, '', NULL, NULL, '2023-05-09 09:55:44', '2023-05-09 09:55:44'),
(2497, 0, 0, 0, '', NULL, NULL, '2023-05-09 09:57:30', '2023-05-09 09:57:30'),
(2498, 0, 0, 0, '', NULL, NULL, '2023-05-09 09:58:00', '2023-05-09 09:58:00'),
(2499, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:04:25', '2023-05-09 10:04:25'),
(2500, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:06:43', '2023-05-09 10:06:43'),
(2501, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:10:54', '2023-05-09 10:10:54'),
(2502, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:11:29', '2023-05-09 10:11:29'),
(2503, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:12:21', '2023-05-09 10:12:21'),
(2504, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:12:48', '2023-05-09 10:12:48'),
(2505, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:13:04', '2023-05-09 10:13:04'),
(2506, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:13:18', '2023-05-09 10:13:18'),
(2507, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:13:46', '2023-05-09 10:13:46'),
(2508, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:15:27', '2023-05-09 10:15:27'),
(2509, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:26:14', '2023-05-09 10:26:14'),
(2510, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:28:01', '2023-05-09 10:28:01'),
(2511, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:28:32', '2023-05-09 10:28:32'),
(2512, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:30:47', '2023-05-09 10:30:47'),
(2513, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:31:04', '2023-05-09 10:31:04'),
(2514, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:32:17', '2023-05-09 10:32:17'),
(2515, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:33:49', '2023-05-09 10:33:49'),
(2516, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:34:42', '2023-05-09 10:34:42'),
(2517, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:36:36', '2023-05-09 10:36:36'),
(2518, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:36:48', '2023-05-09 10:36:48'),
(2519, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:37:51', '2023-05-09 10:37:51'),
(2520, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:39:56', '2023-05-09 10:39:56'),
(2521, 0, 0, 0, '', NULL, NULL, '2023-05-09 10:40:40', '2023-05-09 10:40:40'),
(2522, 0, 0, 0, '', NULL, NULL, '2023-05-09 11:35:54', '2023-05-09 11:35:54'),
(2523, 0, 0, 0, '', NULL, NULL, '2023-05-09 11:37:13', '2023-05-09 11:37:13'),
(2524, 0, 0, 0, '', NULL, NULL, '2023-05-09 11:37:51', '2023-05-09 11:37:51'),
(2525, 0, 0, 0, '', NULL, NULL, '2023-05-09 11:39:01', '2023-05-09 11:39:01'),
(2526, 0, 0, 0, '', NULL, NULL, '2023-05-09 11:39:27', '2023-05-09 11:39:27'),
(2527, 0, 0, 0, '', NULL, NULL, '2023-05-09 11:41:39', '2023-05-09 11:41:39'),
(2528, 0, 0, 0, '', NULL, NULL, '2023-05-09 11:41:52', '2023-05-09 11:41:52'),
(2529, 0, 0, 0, '', NULL, NULL, '2023-05-09 11:42:30', '2023-05-09 11:42:30'),
(2530, 0, 0, 0, '', NULL, NULL, '2023-05-09 11:42:40', '2023-05-09 11:42:40'),
(2531, 0, 0, 0, '', NULL, NULL, '2023-05-09 11:44:05', '2023-05-09 11:44:05'),
(2532, 0, 0, 0, '', NULL, NULL, '2023-05-09 17:16:54', '2023-05-09 17:16:54'),
(2533, 0, 0, 0, '', NULL, NULL, '2023-05-09 17:17:20', '2023-05-09 17:17:20'),
(2534, 0, 0, 0, '', NULL, NULL, '2023-05-09 17:18:11', '2023-05-09 17:18:11'),
(2535, 0, 0, 0, '', NULL, NULL, '2023-05-09 17:20:23', '2023-05-09 17:20:23'),
(2536, 0, 0, 0, '', NULL, NULL, '2023-05-09 17:21:44', '2023-05-09 17:21:44'),
(2537, 0, 0, 0, '', NULL, NULL, '2023-05-09 17:25:14', '2023-05-09 17:25:14'),
(2538, 0, 0, 0, '', NULL, NULL, '2023-05-09 17:28:24', '2023-05-09 17:28:24'),
(2539, 0, 0, 0, '', NULL, NULL, '2023-05-09 17:29:01', '2023-05-09 17:29:01'),
(2540, 0, 0, 0, '', NULL, NULL, '2023-05-09 17:49:30', '2023-05-09 17:49:30'),
(2541, 0, 0, 0, '', NULL, NULL, '2023-05-09 17:50:03', '2023-05-09 17:50:03'),
(2542, 0, 0, 0, '', NULL, NULL, '2023-05-09 17:52:32', '2023-05-09 17:52:32'),
(2543, 0, 0, 0, '', NULL, NULL, '2023-05-09 17:55:57', '2023-05-09 17:55:57'),
(2544, 0, 0, 0, '', NULL, NULL, '2023-05-09 17:59:13', '2023-05-09 17:59:13'),
(2545, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:00:24', '2023-05-09 18:00:24'),
(2546, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:01:03', '2023-05-09 18:01:03'),
(2547, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:01:11', '2023-05-09 18:01:11'),
(2548, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:01:53', '2023-05-09 18:01:53'),
(2549, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:02:27', '2023-05-09 18:02:27'),
(2550, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:03:19', '2023-05-09 18:03:19'),
(2551, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:04:34', '2023-05-09 18:04:34'),
(2552, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:05:42', '2023-05-09 18:05:42'),
(2553, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:06:49', '2023-05-09 18:06:49'),
(2554, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:07:05', '2023-05-09 18:07:05'),
(2555, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:07:50', '2023-05-09 18:07:50'),
(2556, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:08:08', '2023-05-09 18:08:08'),
(2557, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:11:05', '2023-05-09 18:11:05'),
(2558, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:11:39', '2023-05-09 18:11:39'),
(2559, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:11:54', '2023-05-09 18:11:54'),
(2560, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:12:19', '2023-05-09 18:12:19'),
(2561, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:14:08', '2023-05-09 18:14:08'),
(2562, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:14:52', '2023-05-09 18:14:52'),
(2563, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:15:33', '2023-05-09 18:15:33'),
(2564, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:18:42', '2023-05-09 18:18:42'),
(2565, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:19:01', '2023-05-09 18:19:01'),
(2566, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:27:21', '2023-05-09 18:27:21'),
(2567, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:41:20', '2023-05-09 18:41:20'),
(2568, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:43:23', '2023-05-09 18:43:23'),
(2569, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:45:16', '2023-05-09 18:45:16'),
(2570, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:46:07', '2023-05-09 18:46:07'),
(2571, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:54:41', '2023-05-09 18:54:41'),
(2572, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:56:06', '2023-05-09 18:56:06'),
(2573, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:56:52', '2023-05-09 18:56:52'),
(2574, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:58:50', '2023-05-09 18:58:50'),
(2575, 0, 0, 0, '', NULL, NULL, '2023-05-09 18:59:37', '2023-05-09 18:59:37'),
(2576, 0, 0, 0, '', NULL, NULL, '2023-05-09 19:05:23', '2023-05-09 19:05:23'),
(2577, 0, 0, 0, '', NULL, NULL, '2023-05-09 19:09:58', '2023-05-09 19:09:58'),
(2578, 0, 0, 0, '', NULL, NULL, '2023-05-09 19:11:11', '2023-05-09 19:11:11'),
(2579, 0, 0, 0, '', NULL, NULL, '2023-05-09 19:11:51', '2023-05-09 19:11:51'),
(2580, 0, 0, 0, '', NULL, NULL, '2023-05-09 19:12:17', '2023-05-09 19:12:17'),
(2581, 0, 0, 0, '', NULL, NULL, '2023-05-09 19:13:47', '2023-05-09 19:13:47'),
(2582, 0, 0, 0, '', NULL, NULL, '2023-05-09 19:14:01', '2023-05-09 19:14:01'),
(2583, 0, 0, 0, '', NULL, NULL, '2023-05-09 19:35:54', '2023-05-09 19:35:54'),
(2584, 0, 0, 0, '', NULL, NULL, '2023-05-09 19:38:04', '2023-05-09 19:38:04'),
(2585, 0, 0, 0, '', NULL, NULL, '2023-05-09 19:39:32', '2023-05-09 19:39:32'),
(2586, 0, 0, 0, '', NULL, NULL, '2023-05-09 19:49:27', '2023-05-09 19:49:27'),
(2587, 0, 0, 0, '', NULL, NULL, '2023-05-09 19:54:58', '2023-05-09 19:54:58'),
(2588, 0, 0, 0, '', NULL, NULL, '2023-05-09 19:55:24', '2023-05-09 19:55:24'),
(2589, 0, 0, 0, '', NULL, NULL, '2023-05-09 19:56:19', '2023-05-09 19:56:19'),
(2590, 0, 0, 0, '', NULL, NULL, '2023-05-09 19:56:42', '2023-05-09 19:56:42'),
(2591, 0, 0, 0, '', NULL, NULL, '2023-05-09 19:58:15', '2023-05-09 19:58:15'),
(2592, 0, 0, 0, '', NULL, NULL, '2023-05-09 20:20:24', '2023-05-09 20:20:24'),
(2593, 0, 0, 0, '', NULL, NULL, '2023-05-09 20:23:12', '2023-05-09 20:23:12'),
(2594, 0, 0, 0, '', NULL, NULL, '2023-05-09 20:25:32', '2023-05-09 20:25:32'),
(2595, 0, 0, 0, '', NULL, NULL, '2023-05-09 20:25:45', '2023-05-09 20:25:45'),
(2596, 0, 0, 0, '', NULL, NULL, '2023-05-09 20:26:24', '2023-05-09 20:26:24'),
(2597, 0, 0, 0, '', NULL, NULL, '2023-05-09 20:26:45', '2023-05-09 20:26:45'),
(2598, 0, 0, 0, '', NULL, NULL, '2023-05-09 20:27:01', '2023-05-09 20:27:01'),
(2599, 0, 0, 0, '', NULL, NULL, '2023-05-09 20:36:21', '2023-05-09 20:36:21'),
(2600, 0, 0, 0, '', NULL, NULL, '2023-05-09 20:59:03', '2023-05-09 20:59:03'),
(2601, 0, 0, 0, '', NULL, NULL, '2023-05-09 22:03:32', '2023-05-09 22:03:32'),
(2602, 0, 0, 0, '', NULL, NULL, '2023-05-09 22:13:07', '2023-05-09 22:13:07'),
(2603, 0, 0, 0, '', NULL, NULL, '2023-05-09 22:14:51', '2023-05-09 22:14:51'),
(2604, 0, 0, 0, '', NULL, NULL, '2023-05-09 22:20:15', '2023-05-09 22:20:15'),
(2605, 0, 0, 0, '', NULL, NULL, '2023-05-09 22:22:51', '2023-05-09 22:22:51'),
(2606, 0, 0, 0, '', NULL, NULL, '2023-05-09 22:23:26', '2023-05-09 22:23:26'),
(2607, 0, 0, 0, '', NULL, NULL, '2023-05-09 22:23:33', '2023-05-09 22:23:33'),
(2608, 0, 0, 0, '', NULL, NULL, '2023-05-09 22:24:26', '2023-05-09 22:24:26'),
(2609, 0, 0, 0, '', NULL, NULL, '2023-05-09 22:24:53', '2023-05-09 22:24:53'),
(2610, 0, 0, 0, '', NULL, NULL, '2023-05-09 22:32:59', '2023-05-09 22:32:59'),
(2611, 0, 0, 0, '', NULL, NULL, '2023-05-09 22:53:22', '2023-05-09 22:53:22'),
(2612, 0, 0, 0, '', NULL, NULL, '2023-05-09 22:58:22', '2023-05-09 22:58:22'),
(2613, 0, 0, 0, '', NULL, NULL, '2023-05-09 22:59:07', '2023-05-09 22:59:07'),
(2614, 0, 0, 0, '', NULL, NULL, '2023-05-10 16:57:22', '2023-05-10 16:57:22'),
(2615, 0, 0, 0, '', NULL, NULL, '2023-05-10 18:16:24', '2023-05-10 18:16:24'),
(2616, 0, 0, 0, '', NULL, NULL, '2023-05-10 18:16:31', '2023-05-10 18:16:31'),
(2617, 0, 0, 0, '', NULL, NULL, '2023-05-10 18:22:29', '2023-05-10 18:22:29'),
(2618, 0, 0, 0, '', NULL, NULL, '2023-05-10 18:35:17', '2023-05-10 18:35:17'),
(2619, 0, 0, 0, '', NULL, NULL, '2023-05-10 23:27:20', '2023-05-10 23:27:20'),
(2620, 0, 0, 0, '', NULL, NULL, '2023-05-11 17:07:09', '2023-05-11 17:07:09'),
(2621, 0, 0, 0, '', NULL, NULL, '2023-05-11 17:16:09', '2023-05-11 17:16:09'),
(2622, 0, 0, 0, '', NULL, NULL, '2023-05-11 17:58:19', '2023-05-11 17:58:19'),
(2623, 0, 0, 0, '', NULL, NULL, '2023-05-11 18:44:26', '2023-05-11 18:44:26'),
(2624, 0, 0, 0, '', NULL, NULL, '2023-05-11 19:17:55', '2023-05-11 19:17:55'),
(2625, 0, 0, 0, '', NULL, NULL, '2023-05-11 19:38:34', '2023-05-11 19:38:34'),
(2626, 0, 0, 0, '', NULL, NULL, '2023-05-11 19:41:21', '2023-05-11 19:41:21'),
(2627, 0, 0, 0, '', NULL, NULL, '2023-05-11 19:42:45', '2023-05-11 19:42:45'),
(2628, 0, 0, 0, '', NULL, NULL, '2023-05-11 19:42:56', '2023-05-11 19:42:56'),
(2629, 0, 0, 0, '', NULL, NULL, '2023-05-11 19:45:49', '2023-05-11 19:45:49'),
(2630, 0, 0, 0, '', NULL, NULL, '2023-05-11 20:09:46', '2023-05-11 20:09:46'),
(2631, 0, 0, 0, '', NULL, NULL, '2023-05-11 20:12:47', '2023-05-11 20:12:47'),
(2632, 0, 0, 0, '', NULL, NULL, '2023-05-11 20:14:42', '2023-05-11 20:14:42'),
(2633, 0, 0, 0, '', NULL, NULL, '2023-05-11 20:31:58', '2023-05-11 20:31:58'),
(2634, 0, 0, 0, '', NULL, NULL, '2023-05-11 20:32:33', '2023-05-11 20:32:33');
INSERT INTO `encheregagners` (`id`, `user_id`, `enchere_id`, `valeur_click`, `code`, `state`, `payed_by`, `updated_at`, `created_at`) VALUES
(2635, 0, 0, 0, '', NULL, NULL, '2023-05-11 20:34:42', '2023-05-11 20:34:42'),
(2636, 0, 0, 0, '', NULL, NULL, '2023-05-11 20:35:34', '2023-05-11 20:35:34'),
(2637, 0, 0, 0, '', NULL, NULL, '2023-05-11 20:36:03', '2023-05-11 20:36:03'),
(2638, 0, 0, 0, '', NULL, NULL, '2023-05-11 20:36:20', '2023-05-11 20:36:20'),
(2639, 0, 0, 0, '', NULL, NULL, '2023-05-11 20:36:40', '2023-05-11 20:36:40'),
(2640, 0, 0, 0, '', NULL, NULL, '2023-05-11 20:37:05', '2023-05-11 20:37:05'),
(2641, 0, 0, 0, '', NULL, NULL, '2023-05-11 20:38:41', '2023-05-11 20:38:41'),
(2642, 0, 0, 0, '', NULL, NULL, '2023-05-11 20:40:14', '2023-05-11 20:40:14'),
(2643, 0, 0, 0, '', NULL, NULL, '2023-05-11 20:41:59', '2023-05-11 20:41:59'),
(2644, 0, 0, 0, '', NULL, NULL, '2023-05-11 20:53:24', '2023-05-11 20:53:24'),
(2645, 0, 0, 0, '', NULL, NULL, '2023-05-11 20:58:57', '2023-05-11 20:58:57'),
(2646, 0, 0, 0, '', NULL, NULL, '2023-05-11 21:05:48', '2023-05-11 21:05:48'),
(2647, 0, 0, 0, '', NULL, NULL, '2023-05-11 21:23:03', '2023-05-11 21:23:03'),
(2648, 0, 0, 0, '', NULL, NULL, '2023-05-11 21:24:18', '2023-05-11 21:24:18'),
(2649, 0, 0, 0, '', NULL, NULL, '2023-05-11 21:24:50', '2023-05-11 21:24:50'),
(2650, 0, 0, 0, '', NULL, NULL, '2023-05-11 21:25:30', '2023-05-11 21:25:30'),
(2651, 0, 0, 0, '', NULL, NULL, '2023-05-11 21:26:34', '2023-05-11 21:26:34'),
(2652, 0, 0, 0, '', NULL, NULL, '2023-05-11 21:26:54', '2023-05-11 21:26:54'),
(2653, 0, 0, 0, '', NULL, NULL, '2023-05-11 21:27:18', '2023-05-11 21:27:18'),
(2654, 0, 0, 0, '', NULL, NULL, '2023-05-11 21:36:24', '2023-05-11 21:36:24'),
(2655, 0, 0, 0, '', NULL, NULL, '2023-05-11 21:48:20', '2023-05-11 21:48:20'),
(2656, 0, 0, 0, '', NULL, NULL, '2023-05-11 21:52:07', '2023-05-11 21:52:07'),
(2657, 0, 0, 0, '', NULL, NULL, '2023-05-11 21:57:17', '2023-05-11 21:57:17'),
(2658, 0, 0, 0, '', NULL, NULL, '2023-05-11 21:58:57', '2023-05-11 21:58:57'),
(2659, 0, 0, 0, '', NULL, NULL, '2023-05-11 22:01:50', '2023-05-11 22:01:50'),
(2660, 0, 0, 0, '', NULL, NULL, '2023-05-11 22:08:05', '2023-05-11 22:08:05'),
(2661, 0, 0, 0, '', NULL, NULL, '2023-05-11 22:34:41', '2023-05-11 22:34:41'),
(2662, 0, 0, 0, '', NULL, NULL, '2023-05-11 22:35:02', '2023-05-11 22:35:02'),
(2663, 0, 0, 0, '', NULL, NULL, '2023-05-11 22:35:18', '2023-05-11 22:35:18'),
(2664, 0, 0, 0, '', NULL, NULL, '2023-05-11 22:57:30', '2023-05-11 22:57:30'),
(2665, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:21:20', '2023-05-15 17:21:20'),
(2666, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:22:01', '2023-05-15 17:22:01'),
(2667, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:23:42', '2023-05-15 17:23:42'),
(2668, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:23:47', '2023-05-15 17:23:47'),
(2669, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:24:04', '2023-05-15 17:24:04'),
(2670, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:25:48', '2023-05-15 17:25:48'),
(2671, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:31:23', '2023-05-15 17:31:23'),
(2672, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:33:13', '2023-05-15 17:33:13'),
(2673, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:35:02', '2023-05-15 17:35:02'),
(2674, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:36:35', '2023-05-15 17:36:35'),
(2675, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:36:46', '2023-05-15 17:36:46'),
(2676, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:36:51', '2023-05-15 17:36:51'),
(2677, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:37:48', '2023-05-15 17:37:48'),
(2678, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:38:34', '2023-05-15 17:38:34'),
(2679, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:39:08', '2023-05-15 17:39:08'),
(2680, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:49:56', '2023-05-15 17:49:56'),
(2681, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:51:02', '2023-05-15 17:51:02'),
(2682, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:51:33', '2023-05-15 17:51:33'),
(2683, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:52:10', '2023-05-15 17:52:10'),
(2684, 0, 0, 0, '', NULL, NULL, '2023-05-15 17:52:20', '2023-05-15 17:52:20'),
(2685, 0, 0, 0, '', NULL, NULL, '2023-05-15 18:00:43', '2023-05-15 18:00:43'),
(2686, 0, 0, 0, '', NULL, NULL, '2023-05-15 18:15:32', '2023-05-15 18:15:32'),
(2687, 0, 0, 0, '', NULL, NULL, '2023-05-15 18:19:48', '2023-05-15 18:19:48'),
(2688, 0, 0, 0, '', NULL, NULL, '2023-05-15 18:19:53', '2023-05-15 18:19:53'),
(2689, 0, 0, 0, '', NULL, NULL, '2023-05-15 18:20:19', '2023-05-15 18:20:19'),
(2690, 0, 0, 0, '', NULL, NULL, '2023-05-15 18:21:04', '2023-05-15 18:21:04'),
(2691, 0, 0, 0, '', NULL, NULL, '2023-05-15 18:29:35', '2023-05-15 18:29:35'),
(2692, 0, 0, 0, '', NULL, NULL, '2023-05-15 18:29:49', '2023-05-15 18:29:49'),
(2693, 0, 0, 0, '', NULL, NULL, '2023-05-15 18:30:15', '2023-05-15 18:30:15'),
(2694, 0, 0, 0, '', NULL, NULL, '2023-05-15 18:31:19', '2023-05-15 18:31:19'),
(2695, 0, 0, 0, '', NULL, NULL, '2023-05-15 18:58:21', '2023-05-15 18:58:21'),
(2696, 0, 0, 0, '', NULL, NULL, '2023-05-15 19:04:08', '2023-05-15 19:04:08'),
(2697, 0, 0, 0, '', NULL, NULL, '2023-05-15 19:04:16', '2023-05-15 19:04:16'),
(2698, 0, 0, 0, '', NULL, NULL, '2023-05-15 19:06:20', '2023-05-15 19:06:20'),
(2699, 0, 0, 0, '', NULL, NULL, '2023-05-15 19:08:08', '2023-05-15 19:08:08'),
(2700, 0, 0, 0, '', NULL, NULL, '2023-05-15 19:08:24', '2023-05-15 19:08:24'),
(2701, 0, 0, 0, '', NULL, NULL, '2023-05-15 19:21:42', '2023-05-15 19:21:42'),
(2702, 0, 0, 0, '', NULL, NULL, '2023-05-15 19:22:19', '2023-05-15 19:22:19'),
(2703, 0, 0, 0, '', NULL, NULL, '2023-05-15 19:26:51', '2023-05-15 19:26:51'),
(2704, 0, 0, 0, '', NULL, NULL, '2023-05-15 19:28:25', '2023-05-15 19:28:25'),
(2705, 0, 0, 0, '', NULL, NULL, '2023-05-15 19:30:22', '2023-05-15 19:30:22'),
(2706, 0, 0, 0, '', NULL, NULL, '2023-05-15 19:50:45', '2023-05-15 19:50:45'),
(2707, 0, 0, 0, '', NULL, NULL, '2023-05-15 19:51:11', '2023-05-15 19:51:11'),
(2708, 0, 0, 0, '', NULL, NULL, '2023-05-15 20:09:44', '2023-05-15 20:09:44'),
(2709, 0, 0, 0, '', NULL, NULL, '2023-05-15 20:17:22', '2023-05-15 20:17:22'),
(2710, 0, 0, 0, '', NULL, NULL, '2023-05-15 20:20:13', '2023-05-15 20:20:13'),
(2711, 0, 0, 0, '', NULL, NULL, '2023-05-15 20:21:16', '2023-05-15 20:21:16'),
(2712, 0, 0, 0, '', NULL, NULL, '2023-05-15 20:21:34', '2023-05-15 20:21:34'),
(2713, 0, 0, 0, '', NULL, NULL, '2023-05-15 20:22:50', '2023-05-15 20:22:50'),
(2714, 0, 0, 0, '', NULL, NULL, '2023-05-15 20:24:22', '2023-05-15 20:24:22'),
(2715, 0, 0, 0, '', NULL, NULL, '2023-05-15 20:26:59', '2023-05-15 20:26:59'),
(2716, 0, 0, 0, '', NULL, NULL, '2023-05-15 20:29:20', '2023-05-15 20:29:20'),
(2717, 0, 0, 0, '', NULL, NULL, '2023-05-15 20:32:16', '2023-05-15 20:32:16'),
(2718, 0, 0, 0, '', NULL, NULL, '2023-05-15 20:33:23', '2023-05-15 20:33:23'),
(2719, 0, 0, 0, '', NULL, NULL, '2023-05-15 21:03:23', '2023-05-15 21:03:23'),
(2720, 0, 0, 0, '', NULL, NULL, '2023-05-16 00:04:58', '2023-05-16 00:04:58'),
(2721, 0, 0, 0, '', NULL, NULL, '2023-05-16 00:05:42', '2023-05-16 00:05:42'),
(2722, 0, 0, 0, '', NULL, NULL, '2023-05-16 16:52:30', '2023-05-16 16:52:30'),
(2723, 0, 0, 0, '', NULL, NULL, '2023-05-16 16:52:59', '2023-05-16 16:52:59'),
(2724, 0, 0, 0, '', NULL, NULL, '2023-05-16 16:53:08', '2023-05-16 16:53:08'),
(2725, 0, 0, 0, '', NULL, NULL, '2023-05-16 16:53:33', '2023-05-16 16:53:33'),
(2726, 0, 0, 0, '', NULL, NULL, '2023-05-16 16:54:06', '2023-05-16 16:54:06'),
(2727, 0, 0, 0, '', NULL, NULL, '2023-05-16 16:54:16', '2023-05-16 16:54:16'),
(2728, 0, 0, 0, '', NULL, NULL, '2023-05-16 16:55:24', '2023-05-16 16:55:24'),
(2729, 0, 0, 0, '', NULL, NULL, '2023-05-16 17:23:45', '2023-05-16 17:23:45'),
(2730, 0, 0, 0, '', NULL, NULL, '2023-05-16 18:44:43', '2023-05-16 18:44:43'),
(2731, 0, 0, 0, '', NULL, NULL, '2023-05-16 18:44:55', '2023-05-16 18:44:55'),
(2732, 0, 0, 0, '', NULL, NULL, '2023-05-16 18:45:21', '2023-05-16 18:45:21'),
(2733, 0, 0, 0, '', NULL, NULL, '2023-05-16 18:47:13', '2023-05-16 18:47:13'),
(2734, 0, 0, 0, '', NULL, NULL, '2023-05-16 18:54:33', '2023-05-16 18:54:33'),
(2735, 0, 0, 0, '', NULL, NULL, '2023-05-16 19:25:24', '2023-05-16 19:25:24'),
(2736, 0, 0, 0, '', NULL, NULL, '2023-05-16 19:25:46', '2023-05-16 19:25:46'),
(2737, 0, 0, 0, '', NULL, NULL, '2023-05-16 19:33:00', '2023-05-16 19:33:00'),
(2738, 0, 0, 0, '', NULL, NULL, '2023-05-16 19:36:20', '2023-05-16 19:36:20'),
(2739, 0, 0, 0, '', NULL, NULL, '2023-05-16 19:36:45', '2023-05-16 19:36:45'),
(2740, 0, 0, 0, '', NULL, NULL, '2023-05-16 19:37:02', '2023-05-16 19:37:02'),
(2741, 0, 0, 0, '', NULL, NULL, '2023-05-16 19:37:21', '2023-05-16 19:37:21'),
(2742, 0, 0, 0, '', NULL, NULL, '2023-05-16 19:38:39', '2023-05-16 19:38:39'),
(2743, 0, 0, 0, '', NULL, NULL, '2023-05-16 19:38:49', '2023-05-16 19:38:49'),
(2744, 0, 0, 0, '', NULL, NULL, '2023-05-16 19:41:02', '2023-05-16 19:41:02'),
(2745, 0, 0, 0, '', NULL, NULL, '2023-05-16 19:47:01', '2023-05-16 19:47:01'),
(2746, 0, 0, 0, '', NULL, NULL, '2023-05-16 19:47:14', '2023-05-16 19:47:14'),
(2747, 0, 0, 0, '', NULL, NULL, '2023-05-16 19:47:30', '2023-05-16 19:47:30'),
(2748, 0, 0, 0, '', NULL, NULL, '2023-05-16 20:01:50', '2023-05-16 20:01:50'),
(2749, 0, 0, 0, '', NULL, NULL, '2023-05-16 20:02:01', '2023-05-16 20:02:01'),
(2750, 0, 0, 0, '', NULL, NULL, '2023-05-16 20:02:20', '2023-05-16 20:02:20'),
(2751, 0, 0, 0, '', NULL, NULL, '2023-05-16 20:03:33', '2023-05-16 20:03:33'),
(2752, 0, 0, 0, '', NULL, NULL, '2023-05-16 20:03:52', '2023-05-16 20:03:52'),
(2753, 0, 0, 0, '', NULL, NULL, '2023-05-16 20:04:47', '2023-05-16 20:04:47'),
(2754, 0, 0, 0, '', NULL, NULL, '2023-05-16 20:05:05', '2023-05-16 20:05:05'),
(2755, 0, 0, 0, '', NULL, NULL, '2023-05-16 20:18:30', '2023-05-16 20:18:30'),
(2756, 0, 0, 0, '', NULL, NULL, '2023-05-16 20:21:31', '2023-05-16 20:21:31'),
(2757, 0, 0, 0, '', NULL, NULL, '2023-05-16 20:23:45', '2023-05-16 20:23:45'),
(2758, 0, 0, 0, '', NULL, NULL, '2023-05-16 20:45:07', '2023-05-16 20:45:07'),
(2759, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:00:19', '2023-05-16 21:00:19'),
(2760, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:00:50', '2023-05-16 21:00:50'),
(2761, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:01:56', '2023-05-16 21:01:56'),
(2762, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:02:13', '2023-05-16 21:02:13'),
(2763, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:04:54', '2023-05-16 21:04:54'),
(2764, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:06:27', '2023-05-16 21:06:27'),
(2765, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:06:39', '2023-05-16 21:06:39'),
(2766, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:07:04', '2023-05-16 21:07:04'),
(2767, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:07:26', '2023-05-16 21:07:26'),
(2768, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:15:38', '2023-05-16 21:15:38'),
(2769, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:16:04', '2023-05-16 21:16:04'),
(2770, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:16:30', '2023-05-16 21:16:30'),
(2771, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:17:10', '2023-05-16 21:17:10'),
(2772, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:19:47', '2023-05-16 21:19:47'),
(2773, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:20:17', '2023-05-16 21:20:17'),
(2774, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:20:59', '2023-05-16 21:20:59'),
(2775, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:32:38', '2023-05-16 21:32:38'),
(2776, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:33:00', '2023-05-16 21:33:00'),
(2777, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:33:38', '2023-05-16 21:33:38'),
(2778, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:33:46', '2023-05-16 21:33:46'),
(2779, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:50:40', '2023-05-16 21:50:40'),
(2780, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:51:49', '2023-05-16 21:51:49'),
(2781, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:56:42', '2023-05-16 21:56:42'),
(2782, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:56:56', '2023-05-16 21:56:56'),
(2783, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:57:12', '2023-05-16 21:57:12'),
(2784, 0, 0, 0, '', NULL, NULL, '2023-05-16 21:59:16', '2023-05-16 21:59:16'),
(2785, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:00:43', '2023-05-16 22:00:43'),
(2786, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:05:34', '2023-05-16 22:05:34'),
(2787, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:06:29', '2023-05-16 22:06:29'),
(2788, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:15:48', '2023-05-16 22:15:48'),
(2789, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:17:07', '2023-05-16 22:17:07'),
(2790, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:19:09', '2023-05-16 22:19:09'),
(2791, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:20:48', '2023-05-16 22:20:48'),
(2792, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:21:54', '2023-05-16 22:21:54'),
(2793, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:22:54', '2023-05-16 22:22:54'),
(2794, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:44:39', '2023-05-16 22:44:39'),
(2795, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:45:21', '2023-05-16 22:45:21'),
(2796, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:45:46', '2023-05-16 22:45:46'),
(2797, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:46:07', '2023-05-16 22:46:07'),
(2798, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:47:35', '2023-05-16 22:47:35'),
(2799, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:47:59', '2023-05-16 22:47:59'),
(2800, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:52:05', '2023-05-16 22:52:05'),
(2801, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:52:20', '2023-05-16 22:52:20'),
(2802, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:52:44', '2023-05-16 22:52:44'),
(2803, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:53:41', '2023-05-16 22:53:41'),
(2804, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:54:13', '2023-05-16 22:54:13'),
(2805, 0, 0, 0, '', NULL, NULL, '2023-05-16 22:54:53', '2023-05-16 22:54:53'),
(2806, 0, 0, 0, '', NULL, NULL, '2023-05-16 23:13:33', '2023-05-16 23:13:33'),
(2807, 0, 0, 0, '', NULL, NULL, '2023-05-16 23:13:45', '2023-05-16 23:13:45'),
(2808, 0, 0, 0, '', NULL, NULL, '2023-05-16 23:13:56', '2023-05-16 23:13:56'),
(2809, 0, 0, 0, '', NULL, NULL, '2023-05-16 23:14:22', '2023-05-16 23:14:22'),
(2810, 0, 0, 0, '', NULL, NULL, '2023-05-16 23:15:12', '2023-05-16 23:15:12'),
(2811, 0, 0, 0, '', NULL, NULL, '2023-05-16 23:15:40', '2023-05-16 23:15:40'),
(2812, 0, 0, 0, '', NULL, NULL, '2023-05-16 23:15:51', '2023-05-16 23:15:51'),
(2813, 0, 0, 0, '', NULL, NULL, '2023-05-16 23:16:06', '2023-05-16 23:16:06'),
(2814, 0, 0, 0, '', NULL, NULL, '2023-05-16 23:16:41', '2023-05-16 23:16:41'),
(2815, 0, 0, 0, '', NULL, NULL, '2023-05-16 23:17:12', '2023-05-16 23:17:12'),
(2816, 0, 0, 0, '', NULL, NULL, '2023-05-16 23:21:26', '2023-05-16 23:21:26'),
(2817, 0, 0, 0, '', NULL, NULL, '2023-05-16 23:21:37', '2023-05-16 23:21:37'),
(2818, 0, 0, 0, '', NULL, NULL, '2023-05-16 23:21:58', '2023-05-16 23:21:58'),
(2819, 0, 0, 0, '', NULL, NULL, '2023-05-16 23:22:29', '2023-05-16 23:22:29'),
(2820, 0, 0, 0, '', NULL, NULL, '2023-05-16 23:32:40', '2023-05-16 23:32:40'),
(2821, 0, 0, 0, '', NULL, NULL, '2023-05-16 23:33:02', '2023-05-16 23:33:02'),
(2822, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:21:54', '2023-05-18 18:21:54'),
(2823, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:23:44', '2023-05-18 18:23:44'),
(2824, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:24:08', '2023-05-18 18:24:08'),
(2825, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:27:17', '2023-05-18 18:27:17'),
(2826, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:27:24', '2023-05-18 18:27:24'),
(2827, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:28:12', '2023-05-18 18:28:12'),
(2828, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:28:19', '2023-05-18 18:28:19'),
(2829, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:28:48', '2023-05-18 18:28:48'),
(2830, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:29:20', '2023-05-18 18:29:20'),
(2831, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:29:45', '2023-05-18 18:29:45'),
(2832, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:30:27', '2023-05-18 18:30:27'),
(2833, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:33:43', '2023-05-18 18:33:43'),
(2834, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:34:13', '2023-05-18 18:34:13'),
(2835, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:34:52', '2023-05-18 18:34:52'),
(2836, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:35:27', '2023-05-18 18:35:27'),
(2837, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:35:38', '2023-05-18 18:35:38'),
(2838, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:36:11', '2023-05-18 18:36:11'),
(2839, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:37:28', '2023-05-18 18:37:28'),
(2840, 0, 0, 0, '', NULL, NULL, '2023-05-18 18:41:03', '2023-05-18 18:41:03'),
(2841, 0, 0, 0, '', NULL, NULL, '2023-05-18 21:20:17', '2023-05-18 21:20:17'),
(2842, 0, 0, 0, '', NULL, NULL, '2023-05-18 21:20:28', '2023-05-18 21:20:28'),
(2843, 0, 0, 0, '', NULL, NULL, '2023-05-18 21:21:24', '2023-05-18 21:21:24'),
(2844, 0, 0, 0, '', NULL, NULL, '2023-05-18 21:22:40', '2023-05-18 21:22:40'),
(2845, 0, 0, 0, '', NULL, NULL, '2023-05-18 21:27:04', '2023-05-18 21:27:04'),
(2846, 0, 0, 0, '', NULL, NULL, '2023-05-18 21:27:22', '2023-05-18 21:27:22'),
(2847, 0, 0, 0, '', NULL, NULL, '2023-05-18 21:27:31', '2023-05-18 21:27:31'),
(2848, 0, 0, 0, '', NULL, NULL, '2023-05-18 21:28:00', '2023-05-18 21:28:00'),
(2849, 0, 0, 0, '', NULL, NULL, '2023-05-18 21:28:59', '2023-05-18 21:28:59'),
(2850, 0, 0, 0, '', NULL, NULL, '2023-05-18 21:34:34', '2023-05-18 21:34:34'),
(2851, 0, 0, 0, '', NULL, NULL, '2023-05-18 21:35:00', '2023-05-18 21:35:00'),
(2852, 0, 0, 0, '', NULL, NULL, '2023-05-18 22:17:06', '2023-05-18 22:17:06'),
(2853, 0, 0, 0, '', NULL, NULL, '2023-05-18 22:19:03', '2023-05-18 22:19:03'),
(2854, 0, 0, 0, '', NULL, NULL, '2023-05-18 22:20:23', '2023-05-18 22:20:23'),
(2855, 0, 0, 0, '', NULL, NULL, '2023-05-18 22:26:51', '2023-05-18 22:26:51'),
(2856, 0, 0, 0, '', NULL, NULL, '2023-05-18 22:28:49', '2023-05-18 22:28:49'),
(2857, 0, 0, 0, '', NULL, NULL, '2023-05-18 22:29:09', '2023-05-18 22:29:09'),
(2858, 0, 0, 0, '', NULL, NULL, '2023-05-18 22:38:20', '2023-05-18 22:38:20'),
(2859, 0, 0, 0, '', NULL, NULL, '2023-05-18 22:41:57', '2023-05-18 22:41:57'),
(2860, 0, 0, 0, '', NULL, NULL, '2023-05-18 22:57:35', '2023-05-18 22:57:35'),
(2861, 0, 0, 0, '', NULL, NULL, '2023-05-18 22:57:56', '2023-05-18 22:57:56'),
(2862, 0, 0, 0, '', NULL, NULL, '2023-05-18 22:58:20', '2023-05-18 22:58:20'),
(2863, 0, 0, 0, '', NULL, NULL, '2023-05-18 22:58:30', '2023-05-18 22:58:30'),
(2864, 0, 0, 0, '', NULL, NULL, '2023-05-18 22:58:55', '2023-05-18 22:58:55'),
(2865, 0, 0, 0, '', NULL, NULL, '2023-05-18 22:59:42', '2023-05-18 22:59:42'),
(2866, 0, 0, 0, '', NULL, NULL, '2023-05-18 22:59:56', '2023-05-18 22:59:56'),
(2867, 0, 0, 0, '', NULL, NULL, '2023-05-18 23:11:15', '2023-05-18 23:11:15'),
(2868, 0, 0, 0, '', NULL, NULL, '2023-05-18 23:12:00', '2023-05-18 23:12:00'),
(2869, 0, 0, 0, '', NULL, NULL, '2023-05-18 23:12:16', '2023-05-18 23:12:16'),
(2870, 0, 0, 0, '', NULL, NULL, '2023-05-18 23:13:00', '2023-05-18 23:13:00'),
(2871, 0, 0, 0, '', NULL, NULL, '2023-05-18 23:17:49', '2023-05-18 23:17:49'),
(2872, 0, 0, 0, '', NULL, NULL, '2023-05-18 23:18:37', '2023-05-18 23:18:37'),
(2873, 0, 0, 0, '', NULL, NULL, '2023-05-18 23:27:38', '2023-05-18 23:27:38'),
(2874, 0, 0, 0, '', NULL, NULL, '2023-05-18 23:28:28', '2023-05-18 23:28:28'),
(2875, 0, 0, 0, '', NULL, NULL, '2023-05-18 23:50:22', '2023-05-18 23:50:22'),
(2876, 0, 0, 0, '', NULL, NULL, '2023-05-18 23:56:25', '2023-05-18 23:56:25'),
(2877, 0, 0, 0, '', NULL, NULL, '2023-05-18 23:56:40', '2023-05-18 23:56:40'),
(2878, 0, 0, 0, '', NULL, NULL, '2023-05-18 23:59:50', '2023-05-18 23:59:50'),
(2879, 0, 0, 0, '', NULL, NULL, '2023-05-19 00:04:18', '2023-05-19 00:04:18'),
(2880, 0, 0, 0, '', NULL, NULL, '2023-05-19 18:06:10', '2023-05-19 18:06:10'),
(2881, 0, 0, 0, '', NULL, NULL, '2023-05-19 18:12:15', '2023-05-19 18:12:15'),
(2882, 0, 0, 0, '', NULL, NULL, '2023-05-19 19:31:01', '2023-05-19 19:31:01'),
(2883, 0, 0, 0, '', NULL, NULL, '2023-05-19 20:19:12', '2023-05-19 20:19:12'),
(2884, 0, 0, 0, '', NULL, NULL, '2023-05-19 20:22:22', '2023-05-19 20:22:22'),
(2885, 0, 0, 0, '', NULL, NULL, '2023-05-19 20:26:48', '2023-05-19 20:26:48'),
(2886, 0, 0, 0, '', NULL, NULL, '2023-05-19 20:27:34', '2023-05-19 20:27:34'),
(2887, 0, 0, 0, '', NULL, NULL, '2023-05-19 20:27:54', '2023-05-19 20:27:54'),
(2888, 0, 0, 0, '', NULL, NULL, '2023-05-19 20:28:26', '2023-05-19 20:28:26'),
(2889, 0, 0, 0, '', NULL, NULL, '2023-05-19 20:52:24', '2023-05-19 20:52:24'),
(2890, 0, 0, 0, '', NULL, NULL, '2023-05-19 20:54:58', '2023-05-19 20:54:58'),
(2891, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:22:31', '2023-05-19 21:22:31'),
(2892, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:29:59', '2023-05-19 21:29:59'),
(2893, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:30:37', '2023-05-19 21:30:37'),
(2894, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:32:30', '2023-05-19 21:32:30'),
(2895, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:33:43', '2023-05-19 21:33:43'),
(2896, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:34:33', '2023-05-19 21:34:33'),
(2897, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:34:56', '2023-05-19 21:34:56'),
(2898, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:46:15', '2023-05-19 21:46:15'),
(2899, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:48:20', '2023-05-19 21:48:20'),
(2900, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:50:07', '2023-05-19 21:50:07'),
(2901, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:54:37', '2023-05-19 21:54:37'),
(2902, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:55:29', '2023-05-19 21:55:29'),
(2903, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:56:37', '2023-05-19 21:56:37'),
(2904, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:56:54', '2023-05-19 21:56:54'),
(2905, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:57:25', '2023-05-19 21:57:25'),
(2906, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:57:38', '2023-05-19 21:57:38'),
(2907, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:58:00', '2023-05-19 21:58:00'),
(2908, 0, 0, 0, '', NULL, NULL, '2023-05-19 21:58:18', '2023-05-19 21:58:18'),
(2909, 0, 0, 0, '', NULL, NULL, '2023-05-19 22:10:44', '2023-05-19 22:10:44'),
(2910, 0, 0, 0, '', NULL, NULL, '2023-05-19 22:14:18', '2023-05-19 22:14:18'),
(2911, 0, 0, 0, '', NULL, NULL, '2023-05-19 22:16:09', '2023-05-19 22:16:09'),
(2912, 0, 0, 0, '', NULL, NULL, '2023-05-19 22:16:46', '2023-05-19 22:16:46'),
(2913, 0, 0, 0, '', NULL, NULL, '2023-05-19 22:18:42', '2023-05-19 22:18:42'),
(2914, 0, 0, 0, '', NULL, NULL, '2023-05-19 22:25:46', '2023-05-19 22:25:46'),
(2915, 0, 0, 0, '', NULL, NULL, '2023-05-19 22:29:43', '2023-05-19 22:29:43'),
(2916, 0, 0, 0, '', NULL, NULL, '2023-05-19 22:30:13', '2023-05-19 22:30:13'),
(2917, 0, 0, 0, '', NULL, NULL, '2023-05-19 22:57:04', '2023-05-19 22:57:04'),
(2918, 0, 0, 0, '', NULL, NULL, '2023-05-19 22:58:02', '2023-05-19 22:58:02'),
(2919, 0, 0, 0, '', NULL, NULL, '2023-05-19 22:58:13', '2023-05-19 22:58:13'),
(2920, 0, 0, 0, '', NULL, NULL, '2023-05-21 06:25:00', '2023-05-21 06:25:00'),
(2921, 0, 0, 0, '', NULL, NULL, '2023-05-21 06:26:05', '2023-05-21 06:26:05'),
(2922, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:17:58', '2023-05-21 13:17:58'),
(2923, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:21:31', '2023-05-21 13:21:31'),
(2924, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:23:47', '2023-05-21 13:23:47'),
(2925, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:25:20', '2023-05-21 13:25:20'),
(2926, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:25:45', '2023-05-21 13:25:45'),
(2927, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:26:45', '2023-05-21 13:26:45'),
(2928, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:30:18', '2023-05-21 13:30:18'),
(2929, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:31:45', '2023-05-21 13:31:45'),
(2930, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:37:58', '2023-05-21 13:37:58'),
(2931, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:39:51', '2023-05-21 13:39:51'),
(2932, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:41:38', '2023-05-21 13:41:38'),
(2933, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:41:56', '2023-05-21 13:41:56'),
(2934, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:43:52', '2023-05-21 13:43:52'),
(2935, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:44:44', '2023-05-21 13:44:44'),
(2936, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:45:00', '2023-05-21 13:45:00'),
(2937, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:48:35', '2023-05-21 13:48:35'),
(2938, 0, 0, 0, '', NULL, NULL, '2023-05-21 13:52:46', '2023-05-21 13:52:46'),
(2939, 0, 0, 0, '', NULL, NULL, '2023-05-21 14:00:42', '2023-05-21 14:00:42'),
(2940, 0, 0, 0, '', NULL, NULL, '2023-05-21 14:00:53', '2023-05-21 14:00:53'),
(2941, 0, 0, 0, '', NULL, NULL, '2023-05-21 14:01:18', '2023-05-21 14:01:18'),
(2942, 0, 0, 0, '', NULL, NULL, '2023-05-21 14:01:32', '2023-05-21 14:01:32'),
(2943, 0, 0, 0, '', NULL, NULL, '2023-05-21 14:01:47', '2023-05-21 14:01:47'),
(2944, 0, 0, 0, '', NULL, NULL, '2023-05-21 14:02:13', '2023-05-21 14:02:13'),
(2945, 0, 0, 0, '', NULL, NULL, '2023-05-21 14:02:38', '2023-05-21 14:02:38'),
(2946, 0, 0, 0, '', NULL, NULL, '2023-05-21 12:09:07', '2023-05-21 12:09:07'),
(2947, 0, 0, 0, '', NULL, NULL, '2023-05-21 12:09:21', '2023-05-21 12:09:21'),
(2948, 0, 0, 0, '', NULL, NULL, '2023-05-21 12:09:46', '2023-05-21 12:09:46'),
(2949, 0, 0, 0, '', NULL, NULL, '2023-05-21 12:09:50', '2023-05-21 12:09:50'),
(2950, 0, 0, 0, '', NULL, NULL, '2023-05-21 12:09:53', '2023-05-21 12:09:53'),
(2951, 0, 0, 0, '', NULL, NULL, '2023-05-21 15:42:29', '2023-05-21 15:42:29'),
(2952, 0, 0, 0, '', NULL, NULL, '2023-05-21 15:42:42', '2023-05-21 15:42:42'),
(2953, 0, 0, 0, '', NULL, NULL, '2023-05-21 15:43:58', '2023-05-21 15:43:58'),
(2954, 0, 0, 0, '', NULL, NULL, '2023-05-21 15:44:03', '2023-05-21 15:44:03'),
(2955, 0, 0, 0, '', NULL, NULL, '2023-05-21 15:45:25', '2023-05-21 15:45:25'),
(2956, 0, 0, 0, '', NULL, NULL, '2023-05-21 15:46:10', '2023-05-21 15:46:10'),
(2957, 0, 0, 0, '', NULL, NULL, '2023-05-21 15:50:39', '2023-05-21 15:50:39'),
(2958, 0, 0, 0, '', NULL, NULL, '2023-05-21 15:50:41', '2023-05-21 15:50:41'),
(2959, 0, 0, 0, '', NULL, NULL, '2023-05-21 15:51:15', '2023-05-21 15:51:15'),
(2960, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:13:27', '2023-05-21 17:13:27'),
(2961, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:13:37', '2023-05-21 17:13:37'),
(2962, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:13:40', '2023-05-21 17:13:40'),
(2963, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:13:46', '2023-05-21 17:13:46'),
(2964, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:15:52', '2023-05-21 17:15:52'),
(2965, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:32:24', '2023-05-21 17:32:24'),
(2966, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:32:53', '2023-05-21 17:32:53'),
(2967, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:34:44', '2023-05-21 17:34:44'),
(2968, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:34:44', '2023-05-21 17:34:44'),
(2969, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:35:03', '2023-05-21 17:35:03'),
(2970, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:45:14', '2023-05-21 17:45:14'),
(2971, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:45:14', '2023-05-21 17:45:14'),
(2972, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:45:27', '2023-05-21 17:45:27'),
(2973, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:45:27', '2023-05-21 17:45:27'),
(2974, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:45:27', '2023-05-21 17:45:27'),
(2975, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:45:27', '2023-05-21 17:45:27'),
(2976, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:45:59', '2023-05-21 17:45:59'),
(2977, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:45:59', '2023-05-21 17:45:59'),
(2978, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:46:55', '2023-05-21 17:46:55'),
(2979, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:46:55', '2023-05-21 17:46:55'),
(2980, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:47:09', '2023-05-21 17:47:09'),
(2981, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:47:09', '2023-05-21 17:47:09'),
(2982, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:47:34', '2023-05-21 17:47:34'),
(2983, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:47:34', '2023-05-21 17:47:34'),
(2984, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:47:43', '2023-05-21 17:47:43'),
(2985, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:47:43', '2023-05-21 17:47:43'),
(2986, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:47:52', '2023-05-21 17:47:52'),
(2987, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:47:52', '2023-05-21 17:47:52'),
(2988, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:47:56', '2023-05-21 17:47:56'),
(2989, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:47:56', '2023-05-21 17:47:56'),
(2990, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:48:00', '2023-05-21 17:48:00'),
(2991, 0, 0, 0, '', NULL, NULL, '2023-05-21 17:48:00', '2023-05-21 17:48:00'),
(2992, 0, 0, 0, '', NULL, NULL, '2023-05-21 23:24:02', '2023-05-21 23:24:02'),
(2993, 0, 0, 0, '', NULL, NULL, '2023-05-21 23:24:02', '2023-05-21 23:24:02'),
(2994, 0, 0, 0, '', NULL, NULL, '2023-05-22 13:55:07', '2023-05-22 13:55:07'),
(2995, 0, 0, 0, '', NULL, NULL, '2023-05-22 13:56:49', '2023-05-22 13:56:49'),
(2996, 0, 0, 0, '', NULL, NULL, '2023-05-22 13:57:09', '2023-05-22 13:57:09'),
(2997, 0, 0, 0, '', NULL, NULL, '2023-05-22 14:01:20', '2023-05-22 14:01:20'),
(2998, 0, 0, 0, '', NULL, NULL, '2023-05-22 14:02:01', '2023-05-22 14:02:01'),
(2999, 0, 0, 0, '', NULL, NULL, '2023-05-22 14:02:50', '2023-05-22 14:02:50'),
(3000, 0, 0, 0, '', NULL, NULL, '2023-05-22 14:10:52', '2023-05-22 14:10:52'),
(3001, 0, 0, 0, '', NULL, NULL, '2023-05-22 14:11:53', '2023-05-22 14:11:53'),
(3002, 0, 0, 0, '', NULL, NULL, '2023-05-22 14:59:01', '2023-05-22 14:59:01'),
(3003, 0, 0, 0, '', NULL, NULL, '2023-05-22 15:31:15', '2023-05-22 15:31:15'),
(3004, 0, 0, 0, '', NULL, NULL, '2023-05-22 15:54:18', '2023-05-22 15:54:18'),
(3005, 0, 0, 0, '', NULL, NULL, '2023-05-22 15:54:33', '2023-05-22 15:54:33'),
(3006, 0, 0, 0, '', NULL, NULL, '2023-05-22 15:55:00', '2023-05-22 15:55:00'),
(3007, 0, 0, 0, '', NULL, NULL, '2023-05-22 15:55:31', '2023-05-22 15:55:31'),
(3008, 0, 0, 0, '', NULL, NULL, '2023-05-22 15:58:44', '2023-05-22 15:58:44'),
(3009, 0, 0, 0, '', NULL, NULL, '2023-05-22 15:59:24', '2023-05-22 15:59:24'),
(3010, 0, 0, 0, '', NULL, NULL, '2023-05-22 16:01:20', '2023-05-22 16:01:20'),
(3011, 0, 0, 0, '', NULL, NULL, '2023-05-22 16:03:36', '2023-05-22 16:03:36'),
(3012, 0, 0, 0, '', NULL, NULL, '2023-05-22 16:04:54', '2023-05-22 16:04:54'),
(3013, 0, 0, 0, '', NULL, NULL, '2023-05-22 16:05:03', '2023-05-22 16:05:03'),
(3014, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:28:50', '2023-05-24 15:28:50'),
(3015, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:30:14', '2023-05-24 15:30:14'),
(3016, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:30:22', '2023-05-24 15:30:22'),
(3017, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:31:15', '2023-05-24 15:31:15'),
(3018, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:32:07', '2023-05-24 15:32:07'),
(3019, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:33:01', '2023-05-24 15:33:01'),
(3020, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:38:57', '2023-05-24 15:38:57'),
(3021, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:39:54', '2023-05-24 15:39:54'),
(3022, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:40:48', '2023-05-24 15:40:48'),
(3023, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:41:41', '2023-05-24 15:41:41'),
(3024, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:42:36', '2023-05-24 15:42:36'),
(3025, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:43:29', '2023-05-24 15:43:29'),
(3026, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:44:22', '2023-05-24 15:44:22'),
(3027, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:50:37', '2023-05-24 15:50:37'),
(3028, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:51:30', '2023-05-24 15:51:30'),
(3029, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:52:23', '2023-05-24 15:52:23'),
(3030, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:53:16', '2023-05-24 15:53:16'),
(3031, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:54:09', '2023-05-24 15:54:09'),
(3032, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:55:09', '2023-05-24 15:55:09'),
(3033, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:56:02', '2023-05-24 15:56:02'),
(3034, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:56:55', '2023-05-24 15:56:55'),
(3035, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:57:48', '2023-05-24 15:57:48'),
(3036, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:58:41', '2023-05-24 15:58:41'),
(3037, 0, 0, 0, '', NULL, NULL, '2023-05-24 15:59:12', '2023-05-24 15:59:12'),
(3038, 0, 0, 0, '', NULL, NULL, '2023-05-24 16:00:06', '2023-05-24 16:00:06'),
(3039, 0, 0, 0, '', NULL, NULL, '2023-05-24 16:00:59', '2023-05-24 16:00:59'),
(3040, 0, 0, 0, '', NULL, NULL, '2023-05-24 16:01:52', '2023-05-24 16:01:52'),
(3041, 0, 0, 0, '', NULL, NULL, '2023-05-24 16:02:45', '2023-05-24 16:02:45'),
(3042, 0, 0, 0, '', NULL, NULL, '2023-05-24 16:03:38', '2023-05-24 16:03:38'),
(3043, 0, 0, 0, '', NULL, NULL, '2023-05-24 16:04:31', '2023-05-24 16:04:31'),
(3044, 0, 0, 0, '', NULL, NULL, '2023-05-24 16:05:24', '2023-05-24 16:05:24'),
(3045, 0, 0, 0, '', NULL, NULL, '2023-05-24 16:06:17', '2023-05-24 16:06:17'),
(3046, 0, 0, 0, '', NULL, NULL, '2023-05-24 16:07:10', '2023-05-24 16:07:10'),
(3047, 0, 0, 0, '', NULL, NULL, '2023-05-24 16:08:03', '2023-05-24 16:08:03'),
(3048, 0, 0, 0, '', NULL, NULL, '2023-05-24 16:08:56', '2023-05-24 16:08:56'),
(3049, 0, 0, 0, '', NULL, NULL, '2023-05-24 16:09:50', '2023-05-24 16:09:50'),
(3050, 0, 0, 0, '', NULL, NULL, '2023-05-26 12:30:35', '2023-05-26 12:30:35'),
(3051, 0, 0, 0, '', NULL, NULL, '2023-05-26 12:31:44', '2023-05-26 12:31:44'),
(3052, 0, 0, 0, '', NULL, NULL, '2023-05-26 12:36:52', '2023-05-26 12:36:52'),
(3053, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:45:11', '2023-05-26 14:45:11'),
(3054, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:47:30', '2023-05-26 14:47:30'),
(3055, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:47:40', '2023-05-26 14:47:40'),
(3056, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:47:42', '2023-05-26 14:47:42'),
(3057, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:48:11', '2023-05-26 14:48:11'),
(3058, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:48:22', '2023-05-26 14:48:22'),
(3059, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:49:34', '2023-05-26 14:49:34'),
(3060, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:50:27', '2023-05-26 14:50:27'),
(3061, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:51:20', '2023-05-26 14:51:20'),
(3062, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:52:15', '2023-05-26 14:52:15'),
(3063, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:52:28', '2023-05-26 14:52:28'),
(3064, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:53:23', '2023-05-26 14:53:23'),
(3065, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:54:20', '2023-05-26 14:54:20'),
(3066, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:55:17', '2023-05-26 14:55:17'),
(3067, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:56:13', '2023-05-26 14:56:13'),
(3068, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:57:06', '2023-05-26 14:57:06'),
(3069, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:57:27', '2023-05-26 14:57:27'),
(3070, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:58:23', '2023-05-26 14:58:23'),
(3071, 0, 0, 0, '', NULL, NULL, '2023-05-26 14:59:19', '2023-05-26 14:59:19'),
(3072, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:00:12', '2023-05-26 15:00:12'),
(3073, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:01:05', '2023-05-26 15:01:05'),
(3074, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:01:55', '2023-05-26 15:01:55'),
(3075, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:02:50', '2023-05-26 15:02:50'),
(3076, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:03:43', '2023-05-26 15:03:43'),
(3077, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:04:36', '2023-05-26 15:04:36'),
(3078, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:05:17', '2023-05-26 15:05:17'),
(3079, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:06:12', '2023-05-26 15:06:12'),
(3080, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:07:09', '2023-05-26 15:07:09'),
(3081, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:07:42', '2023-05-26 15:07:42'),
(3082, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:08:37', '2023-05-26 15:08:37'),
(3083, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:09:31', '2023-05-26 15:09:31'),
(3084, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:10:23', '2023-05-26 15:10:23'),
(3085, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:11:19', '2023-05-26 15:11:19'),
(3086, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:12:11', '2023-05-26 15:12:11'),
(3087, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:13:06', '2023-05-26 15:13:06'),
(3088, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:14:00', '2023-05-26 15:14:00'),
(3089, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:14:54', '2023-05-26 15:14:54'),
(3090, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:15:49', '2023-05-26 15:15:49'),
(3091, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:16:42', '2023-05-26 15:16:42'),
(3092, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:17:36', '2023-05-26 15:17:36'),
(3093, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:18:16', '2023-05-26 15:18:16'),
(3094, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:18:38', '2023-05-26 15:18:38'),
(3095, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:19:33', '2023-05-26 15:19:33'),
(3096, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:20:28', '2023-05-26 15:20:28'),
(3097, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:21:21', '2023-05-26 15:21:21'),
(3098, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:22:15', '2023-05-26 15:22:15'),
(3099, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:23:10', '2023-05-26 15:23:10'),
(3100, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:24:03', '2023-05-26 15:24:03'),
(3101, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:24:56', '2023-05-26 15:24:56'),
(3102, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:25:49', '2023-05-26 15:25:49'),
(3103, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:29:22', '2023-05-26 15:29:22'),
(3104, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:30:15', '2023-05-26 15:30:15'),
(3105, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:31:12', '2023-05-26 15:31:12'),
(3106, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:31:47', '2023-05-26 15:31:47'),
(3107, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:32:42', '2023-05-26 15:32:42'),
(3108, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:34:19', '2023-05-26 15:34:19'),
(3109, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:35:12', '2023-05-26 15:35:12'),
(3110, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:36:07', '2023-05-26 15:36:07'),
(3111, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:37:01', '2023-05-26 15:37:01'),
(3112, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:37:55', '2023-05-26 15:37:55'),
(3113, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:38:51', '2023-05-26 15:38:51'),
(3114, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:39:45', '2023-05-26 15:39:45'),
(3115, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:40:38', '2023-05-26 15:40:38'),
(3116, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:41:32', '2023-05-26 15:41:32'),
(3117, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:42:25', '2023-05-26 15:42:25'),
(3118, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:43:18', '2023-05-26 15:43:18'),
(3119, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:44:12', '2023-05-26 15:44:12'),
(3120, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:45:06', '2023-05-26 15:45:06'),
(3121, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:45:59', '2023-05-26 15:45:59'),
(3122, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:46:54', '2023-05-26 15:46:54'),
(3123, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:47:47', '2023-05-26 15:47:47'),
(3124, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:56:46', '2023-05-26 15:56:46'),
(3125, 0, 0, 0, '', NULL, NULL, '2023-05-26 15:57:39', '2023-05-26 15:57:39'),
(3126, 0, 0, 0, '', NULL, NULL, '2023-05-26 16:58:35', '2023-05-26 16:58:35'),
(3127, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:10:55', '2023-05-27 02:10:55'),
(3128, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:11:39', '2023-05-27 02:11:39'),
(3129, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:12:34', '2023-05-27 02:12:34'),
(3130, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:13:28', '2023-05-27 02:13:28'),
(3131, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:14:23', '2023-05-27 02:14:23'),
(3132, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:15:17', '2023-05-27 02:15:17'),
(3133, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:16:11', '2023-05-27 02:16:11'),
(3134, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:17:04', '2023-05-27 02:17:04'),
(3135, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:17:59', '2023-05-27 02:17:59'),
(3136, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:18:56', '2023-05-27 02:18:56'),
(3137, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:19:50', '2023-05-27 02:19:50'),
(3138, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:20:45', '2023-05-27 02:20:45'),
(3139, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:21:39', '2023-05-27 02:21:39'),
(3140, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:22:34', '2023-05-27 02:22:34'),
(3141, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:23:27', '2023-05-27 02:23:27'),
(3142, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:24:21', '2023-05-27 02:24:21'),
(3143, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:25:15', '2023-05-27 02:25:15'),
(3144, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:26:07', '2023-05-27 02:26:07'),
(3145, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:27:03', '2023-05-27 02:27:03'),
(3146, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:27:29', '2023-05-27 02:27:29'),
(3147, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:31:31', '2023-05-27 02:31:31'),
(3148, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:31:41', '2023-05-27 02:31:41'),
(3149, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:32:10', '2023-05-27 02:32:10'),
(3150, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:33:03', '2023-05-27 02:33:03'),
(3151, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:33:31', '2023-05-27 02:33:31'),
(3152, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:34:26', '2023-05-27 02:34:26'),
(3153, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:35:19', '2023-05-27 02:35:19'),
(3154, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:36:12', '2023-05-27 02:36:12'),
(3155, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:37:05', '2023-05-27 02:37:05'),
(3156, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:38:00', '2023-05-27 02:38:00'),
(3157, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:38:53', '2023-05-27 02:38:53'),
(3158, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:39:47', '2023-05-27 02:39:47'),
(3159, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:40:40', '2023-05-27 02:40:40'),
(3160, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:41:34', '2023-05-27 02:41:34'),
(3161, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:42:27', '2023-05-27 02:42:27'),
(3162, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:43:20', '2023-05-27 02:43:20'),
(3163, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:44:14', '2023-05-27 02:44:14'),
(3164, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:45:08', '2023-05-27 02:45:08'),
(3165, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:46:02', '2023-05-27 02:46:02'),
(3166, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:46:58', '2023-05-27 02:46:58'),
(3167, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:47:55', '2023-05-27 02:47:55'),
(3168, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:48:54', '2023-05-27 02:48:54'),
(3169, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:49:48', '2023-05-27 02:49:48'),
(3170, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:50:41', '2023-05-27 02:50:41'),
(3171, 0, 0, 0, '', NULL, NULL, '2023-05-27 02:51:34', '2023-05-27 02:51:34'),
(3172, 0, 0, 0, '', NULL, NULL, '2023-05-27 03:05:44', '2023-05-27 03:05:44'),
(3173, 0, 0, 0, '', NULL, NULL, '2023-05-27 03:06:37', '2023-05-27 03:06:37'),
(3174, 0, 0, 0, '', NULL, NULL, '2023-05-27 03:07:30', '2023-05-27 03:07:30'),
(3175, 0, 0, 0, '', NULL, NULL, '2023-05-27 03:08:25', '2023-05-27 03:08:25'),
(3176, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:14:46', '2023-05-29 12:14:46'),
(3177, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:25:57', '2023-05-29 12:25:57'),
(3178, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:35:38', '2023-05-29 12:35:38'),
(3179, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:36:11', '2023-05-29 12:36:11'),
(3180, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:37:03', '2023-05-29 12:37:03'),
(3181, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:37:58', '2023-05-29 12:37:58'),
(3182, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:38:51', '2023-05-29 12:38:51'),
(3183, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:39:45', '2023-05-29 12:39:45'),
(3184, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:40:38', '2023-05-29 12:40:38'),
(3185, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:41:31', '2023-05-29 12:41:31'),
(3186, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:42:25', '2023-05-29 12:42:25'),
(3187, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:43:18', '2023-05-29 12:43:18'),
(3188, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:44:49', '2023-05-29 12:44:49'),
(3189, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:45:42', '2023-05-29 12:45:42'),
(3190, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:46:35', '2023-05-29 12:46:35'),
(3191, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:47:28', '2023-05-29 12:47:28'),
(3192, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:48:23', '2023-05-29 12:48:23'),
(3193, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:49:16', '2023-05-29 12:49:16'),
(3194, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:50:12', '2023-05-29 12:50:12'),
(3195, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:51:19', '2023-05-29 12:51:19'),
(3196, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:52:17', '2023-05-29 12:52:17'),
(3197, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:53:18', '2023-05-29 12:53:18'),
(3198, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:54:16', '2023-05-29 12:54:16'),
(3199, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:55:11', '2023-05-29 12:55:11'),
(3200, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:56:09', '2023-05-29 12:56:09'),
(3201, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:57:02', '2023-05-29 12:57:02'),
(3202, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:58:01', '2023-05-29 12:58:01'),
(3203, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:58:53', '2023-05-29 12:58:53'),
(3204, 0, 0, 0, '', NULL, NULL, '2023-05-29 12:59:46', '2023-05-29 12:59:46'),
(3205, 0, 0, 0, '', NULL, NULL, '2023-05-29 13:00:39', '2023-05-29 13:00:39'),
(3206, 0, 0, 0, '', NULL, NULL, '2023-05-29 13:01:32', '2023-05-29 13:01:32'),
(3207, 0, 0, 0, '', NULL, NULL, '2023-05-29 13:02:26', '2023-05-29 13:02:26'),
(3208, 0, 0, 0, '', NULL, NULL, '2023-05-29 13:03:19', '2023-05-29 13:03:19'),
(3209, 0, 0, 0, '', NULL, NULL, '2023-05-29 13:04:13', '2023-05-29 13:04:13'),
(3210, 0, 0, 0, '', NULL, NULL, '2023-05-29 13:05:07', '2023-05-29 13:05:07'),
(3211, 0, 0, 0, '', NULL, NULL, '2023-05-29 13:05:22', '2023-05-29 13:05:22'),
(3212, 0, 0, 0, '', NULL, NULL, '2023-05-29 13:20:13', '2023-05-29 13:20:13'),
(3213, 0, 0, 0, '', NULL, NULL, '2023-05-29 13:23:59', '2023-05-29 13:23:59'),
(3214, 0, 0, 0, '', NULL, NULL, '2023-05-29 13:30:40', '2023-05-29 13:30:40'),
(3215, 0, 0, 0, '', NULL, NULL, '2023-05-29 13:31:25', '2023-05-29 13:31:25'),
(3216, 0, 0, 0, '', NULL, NULL, '2023-05-29 13:31:46', '2023-05-29 13:31:46'),
(3217, 0, 0, 0, '', NULL, NULL, '2023-05-29 13:32:03', '2023-05-29 13:32:03'),
(3218, 0, 0, 0, '', NULL, NULL, '2023-05-29 13:32:07', '2023-05-29 13:32:07'),
(3219, 0, 0, 0, '', NULL, NULL, '2023-05-29 14:25:01', '2023-05-29 14:25:01'),
(3220, 0, 0, 0, '', NULL, NULL, '2023-05-29 15:13:08', '2023-05-29 15:13:08'),
(3221, 0, 0, 0, '', NULL, NULL, '2023-05-29 15:14:00', '2023-05-29 15:14:00'),
(3222, 0, 0, 0, '', NULL, NULL, '2023-05-29 15:14:40', '2023-05-29 15:14:40'),
(3223, 0, 0, 0, '', NULL, NULL, '2023-05-29 15:14:55', '2023-05-29 15:14:55'),
(3224, 0, 0, 0, '', NULL, NULL, '2023-05-29 15:21:55', '2023-05-29 15:21:55'),
(3225, 0, 0, 0, '', NULL, NULL, '2023-05-29 15:22:04', '2023-05-29 15:22:04'),
(3226, 0, 0, 0, '', NULL, NULL, '2023-05-29 15:22:10', '2023-05-29 15:22:10'),
(3227, 0, 0, 0, '', NULL, NULL, '2023-05-29 15:22:20', '2023-05-29 15:22:20'),
(3228, 0, 0, 0, '', NULL, NULL, '2023-05-29 15:22:37', '2023-05-29 15:22:37'),
(3229, 0, 0, 0, '', NULL, NULL, '2023-05-29 15:22:47', '2023-05-29 15:22:47'),
(3230, 0, 0, 0, '', NULL, NULL, '2023-05-29 15:50:44', '2023-05-29 15:50:44'),
(3231, 0, 0, 0, '', NULL, NULL, '2023-05-29 15:50:58', '2023-05-29 15:50:58'),
(3232, 0, 0, 0, '', NULL, NULL, '2023-05-29 15:51:12', '2023-05-29 15:51:12'),
(3233, 0, 0, 0, '', NULL, NULL, '2023-05-29 15:51:50', '2023-05-29 15:51:50'),
(3234, 0, 0, 0, '', NULL, NULL, '2023-05-29 17:48:21', '2023-05-29 17:48:21'),
(3235, 0, 0, 0, '', NULL, NULL, '2023-05-29 17:50:58', '2023-05-29 17:50:58'),
(3236, 0, 0, 0, '', NULL, NULL, '2023-05-29 17:55:51', '2023-05-29 17:55:51'),
(3237, 0, 0, 0, '', NULL, NULL, '2023-06-13 23:04:27', '2023-05-30 13:03:26'),
(3238, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:12:55', '2023-05-30 23:12:55'),
(3239, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:13:50', '2023-05-30 23:13:50'),
(3240, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:14:19', '2023-05-30 23:14:19'),
(3241, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:15:14', '2023-05-30 23:15:14'),
(3242, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:16:15', '2023-05-30 23:16:15'),
(3243, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:17:10', '2023-05-30 23:17:10'),
(3244, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:18:05', '2023-05-30 23:18:05'),
(3245, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:19:00', '2023-05-30 23:19:00'),
(3246, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:19:53', '2023-05-30 23:19:53'),
(3247, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:20:48', '2023-05-30 23:20:48'),
(3248, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:21:43', '2023-05-30 23:21:43'),
(3249, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:22:41', '2023-05-30 23:22:41'),
(3250, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:23:44', '2023-05-30 23:23:44'),
(3251, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:24:49', '2023-05-30 23:24:49'),
(3252, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:25:46', '2023-05-30 23:25:46'),
(3253, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:26:47', '2023-05-30 23:26:47'),
(3254, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:27:42', '2023-05-30 23:27:42'),
(3255, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:28:37', '2023-05-30 23:28:37'),
(3256, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:29:33', '2023-05-30 23:29:33'),
(3257, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:30:29', '2023-05-30 23:30:29'),
(3258, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:31:23', '2023-05-30 23:31:23'),
(3259, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:32:20', '2023-05-30 23:32:20'),
(3260, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:33:15', '2023-05-30 23:33:15'),
(3261, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:34:08', '2023-05-30 23:34:08'),
(3262, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:35:03', '2023-05-30 23:35:03'),
(3263, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:35:24', '2023-05-30 23:35:24'),
(3264, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:36:23', '2023-05-30 23:36:23'),
(3265, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:37:19', '2023-05-30 23:37:19'),
(3266, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:38:16', '2023-05-30 23:38:16'),
(3267, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:39:11', '2023-05-30 23:39:11'),
(3268, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:40:07', '2023-05-30 23:40:07'),
(3269, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:41:01', '2023-05-30 23:41:01'),
(3270, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:41:55', '2023-05-30 23:41:55'),
(3271, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:42:53', '2023-05-30 23:42:53'),
(3272, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:43:50', '2023-05-30 23:43:50'),
(3273, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:44:43', '2023-05-30 23:44:43'),
(3274, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:45:45', '2023-05-30 23:45:45'),
(3275, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:46:46', '2023-05-30 23:46:46'),
(3276, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:47:47', '2023-05-30 23:47:47'),
(3277, 0, 0, 0, '', NULL, NULL, '2023-05-30 23:48:45', '2023-05-30 23:48:45'),
(3278, 0, 0, 0, '', NULL, NULL, '2023-06-13 23:04:27', '2023-06-12 18:22:09'),
(3279, 0, 0, 0, '', NULL, NULL, '2023-06-13 15:45:31', '2023-06-13 15:45:31'),
(3280, 0, 0, 0, '', NULL, NULL, '2023-06-13 15:46:40', '2023-06-13 15:46:40'),
(3281, 0, 0, 0, '', NULL, NULL, '2023-06-13 15:47:08', '2023-06-13 15:47:08');
INSERT INTO `encheregagners` (`id`, `user_id`, `enchere_id`, `valeur_click`, `code`, `state`, `payed_by`, `updated_at`, `created_at`) VALUES
(3282, 0, 0, 0, '', NULL, NULL, '2023-06-13 15:51:16', '2023-06-13 15:51:16'),
(3283, 107, 40, 1, '', NULL, NULL, '2023-06-13 22:57:45', '2023-06-13 15:53:35'),
(3284, 0, 0, 0, '', NULL, NULL, '2023-06-13 23:06:30', '2023-06-13 23:06:30'),
(3285, 0, 0, 0, '', NULL, NULL, '2023-06-13 23:06:30', '2023-06-13 23:06:30'),
(3286, 108, 38, 0, '', NULL, NULL, '2023-06-13 23:10:16', '2023-06-13 23:06:42'),
(3287, 0, 0, 0, '', NULL, NULL, '2023-06-13 23:11:10', '2023-06-13 23:11:10'),
(3288, 0, 0, 0, '', NULL, NULL, '2023-06-13 23:13:53', '2023-06-13 23:13:53'),
(3289, 0, 0, 0, '', NULL, NULL, '2023-06-13 23:15:28', '2023-06-13 23:15:28'),
(3290, 0, 0, 0, '', NULL, NULL, '2023-06-13 23:16:13', '2023-06-13 23:16:13'),
(3291, 0, 0, 0, '', NULL, NULL, '2023-06-14 13:56:19', '2023-06-14 13:56:19'),
(3292, 0, 0, 0, '', NULL, NULL, '2023-06-14 14:11:17', '2023-06-14 14:11:17'),
(3293, 0, 0, 0, '', NULL, NULL, '2023-06-14 14:11:41', '2023-06-14 14:11:41'),
(3294, 96, 39, 43, '', NULL, NULL, '2023-06-15 12:42:18', '2023-06-14 14:12:54'),
(3295, 0, 0, 0, '', NULL, NULL, '2023-06-19 11:26:08', '2023-06-19 11:26:08'),
(3296, 0, 0, 0, '', NULL, NULL, '2023-06-19 11:34:11', '2023-06-19 11:34:11'),
(3297, 108, 50, 0, '', NULL, NULL, '2023-06-19 11:34:22', '2023-06-19 11:34:22'),
(3298, 96, 55, 0, '', NULL, NULL, '2023-06-19 12:02:39', '2023-06-19 12:02:19'),
(3299, 96, 56, 155, '', NULL, NULL, '2023-06-19 13:28:17', '2023-06-19 12:57:40'),
(3300, 96, 62, 1, '', NULL, NULL, '2023-06-20 13:31:31', '2023-06-20 12:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `encheres`
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
  `prix_enchere` float DEFAULT NULL,
  `really_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `encheres`
--

INSERT INTO `encheres` (`id`, `click`, `favoris`, `favori_salon`, `date_debut`, `heure_debut`, `state`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `article_id`, `paquet_id`, `participant`, `munite`, `seconde`, `prix`, `prix_enchere`, `really_time`) VALUES
(37, '0', 0, 0, '2023-06-16 09:03:00', NULL, 0, '2023-03-28 20:51:33', '2023-06-16 12:14:52', NULL, NULL, NULL, 3, 55, 1, 10000, 0, -1, 200, 210.484, 25),
(38, '0', 0, 0, '2023-06-13 23:00:00', NULL, 0, '2023-05-29 11:48:52', '2023-06-14 13:57:42', NULL, NULL, NULL, 3, 57, 1, 100000, 0, -1, 150, 0, 25),
(39, '0', 0, 0, '2023-06-15 12:41:00', NULL, 0, '2023-06-12 11:39:32', '2023-06-15 13:09:51', NULL, NULL, NULL, 3, 58, 2, 2, 0, -1, 250, 0.792235, 25),
(62, '0', 0, 0, '2023-06-20 12:53:00', NULL, 0, '2023-06-20 12:52:07', '2023-06-20 13:31:56', NULL, NULL, NULL, 0, 59, 0, NULL, 13, 9, NULL, 0.950119, 15);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `faqs`
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
-- Table structure for table `favoris`
--

CREATE TABLE `favoris` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `favoris` int(11) NOT NULL,
  `enchere_id` int(11) NOT NULL,
  `etat` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favoris`
--

INSERT INTO `favoris` (`id`, `user_id`, `favoris`, `enchere_id`, `etat`, `updated_at`, `created_at`) VALUES
(105, 11, 0, 2, NULL, '2022-05-04 05:08:59', '2022-04-28 00:26:37'),
(106, 11, 1, 3, NULL, '2022-05-03 11:07:40', '2022-04-28 00:27:17'),
(107, 14, 0, 3, NULL, '2022-07-20 11:44:17', '2022-04-28 06:31:01'),
(108, 14, 0, 2, NULL, '2022-07-20 11:39:45', '2022-04-29 11:32:45'),
(109, 11, 1, 1, NULL, '2022-05-02 15:01:14', '2022-05-02 15:01:14'),
(110, 24, 1, 2, NULL, '2022-05-13 11:34:28', '2022-05-13 11:31:04'),
(111, 32, 0, 3, NULL, '2022-07-07 12:35:12', '2022-07-07 12:35:05'),
(112, 44, 1, 2, NULL, '2022-07-26 00:50:51', '2022-07-26 00:36:01'),
(113, 44, 1, 1, NULL, '2022-07-26 00:50:44', '2022-07-26 00:44:10'),
(114, 44, 1, 3, NULL, '2022-07-26 00:44:38', '2022-07-26 00:44:38'),
(115, 43, 1, 1, NULL, '2022-07-27 02:46:49', '2022-07-27 02:23:39'),
(116, 40, 1, 10, NULL, '2022-08-09 03:19:31', '2022-08-09 03:19:31'),
(117, 40, 1, 13, NULL, '2022-08-09 03:30:36', '2022-08-09 03:30:36'),
(118, 55, 0, 2, NULL, '2022-08-30 11:05:09', '2022-08-30 11:05:02'),
(119, 56, 1, 2, NULL, '2022-08-30 15:27:24', '2022-08-30 15:27:16'),
(120, 59, 1, 2, NULL, '2022-08-31 15:01:11', '2022-08-31 15:01:11'),
(121, 58, 1, 16, NULL, '2022-09-01 10:37:00', '2022-09-01 10:37:00'),
(122, 54, 1, 24, NULL, '2022-09-20 13:25:39', '2022-09-20 13:24:16'),
(123, 77, 1, 2, NULL, '2022-10-04 14:30:32', '2022-10-04 14:30:32'),
(124, 78, 1, 2, NULL, '2022-10-04 14:36:56', '2022-10-04 14:36:50'),
(125, 85, 0, 3, NULL, '2022-10-08 21:00:42', '2022-10-08 20:24:47'),
(126, 85, 1, 2, NULL, '2022-10-14 19:39:49', '2022-10-10 10:48:29'),
(127, 83, 1, 2, NULL, '2022-10-12 12:15:43', '2022-10-12 12:15:41'),
(128, 85, 0, 29, NULL, '2022-10-13 12:48:22', '2022-10-13 12:48:14'),
(130, 96, 0, 33, 1, '2023-04-12 17:30:05', '2023-04-12 15:55:50'),
(131, 98, 1, 33, 1, '2023-04-13 14:42:54', '2023-04-13 14:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `foudres`
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
-- Dumping data for table `foudres`
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
-- Table structure for table `gagnants`
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
-- Dumping data for table `gagnants`
--

INSERT INTO `gagnants` (`id`, `lien`, `state`, `paye_by`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `enchere_id`, `administrateur_id`) VALUES
(1, 'adad', 1, 0, '2022-03-10 23:50:19', '2022-03-10 23:50:19', NULL, NULL, NULL, 3, 11, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `historiques`
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
-- Dumping data for table `historiques`
--

INSERT INTO `historiques` (`id`, `action`, `type`, `destination_id`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'Enregistrement d\'un article', 5, 11, '2022-08-08 17:42:20', '2022-08-08 17:42:20', NULL, NULL, NULL, 3, 40),
(2, 'Suppression d\'un article', 5, 5, '2022-08-08 17:51:50', '2022-08-08 17:51:50', NULL, NULL, NULL, 3, 40),
(3, 'Suppression d\'un article', 5, 9, '2022-08-08 17:52:02', '2022-08-08 17:52:02', NULL, NULL, NULL, 3, 40),
(4, 'Suppression d\'un article', 5, 8, '2022-08-08 17:52:15', '2022-08-08 17:52:15', NULL, NULL, NULL, 3, 40),
(5, 'Suppression d\'un article', 5, 10, '2022-08-08 17:52:30', '2022-08-08 17:52:30', NULL, NULL, NULL, 3, 40),
(6, 'Suppression d\'un article', 5, 7, '2022-08-08 17:52:41', '2022-08-08 17:52:41', NULL, NULL, NULL, 3, 40),
(7, 'Enregistrement d\'un article', 5, 12, '2022-08-09 03:07:01', '2022-08-09 03:07:01', NULL, NULL, NULL, 3, 40),
(8, 'Enregistrement d\'un article', 5, 13, '2022-08-09 03:17:55', '2022-08-09 03:17:55', NULL, NULL, NULL, 3, 40),
(9, 'Enregistrement d\'un article', 5, 14, '2022-08-09 12:13:36', '2022-08-09 12:13:36', NULL, NULL, NULL, 3, 40),
(10, 'Enregistrement d\'un article', 5, 24, '2022-08-09 12:34:09', '2022-08-09 12:34:09', NULL, NULL, NULL, 3, 40),
(11, 'Enregistrement d\'un article', 5, 25, '2022-08-09 18:35:39', '2022-08-09 18:35:39', NULL, NULL, NULL, 3, 40),
(12, 'Enregistrement d\'un article', 5, 26, '2022-08-10 00:14:39', '2022-08-10 00:14:39', NULL, NULL, NULL, 3, 40),
(13, 'Enregistrement d\'un article', 5, 27, '2022-08-10 00:17:59', '2022-08-10 00:17:59', NULL, NULL, NULL, 3, 40),
(14, 'Enregistrement d\'un article', 5, 28, '2022-08-10 00:28:58', '2022-08-10 00:28:58', NULL, NULL, NULL, 3, 40),
(15, 'Suppression d\'un article', 5, 28, '2022-08-10 00:31:30', '2022-08-10 00:31:30', NULL, NULL, NULL, 3, 40),
(16, 'Réactivation d\'un article', 5, 28, '2022-08-10 00:36:05', '2022-08-10 00:36:05', NULL, NULL, NULL, 3, 40),
(17, 'Suppression d\'un article', 5, 28, '2022-08-10 00:36:51', '2022-08-10 00:36:51', NULL, NULL, NULL, 3, 40),
(18, 'Réactivation d\'un article', 5, 28, '2022-08-10 00:37:16', '2022-08-10 00:37:16', NULL, NULL, NULL, 3, 40),
(19, 'Suppression d\'un article', 5, 28, '2022-08-10 00:39:47', '2022-08-10 00:39:47', NULL, NULL, NULL, 3, 40),
(20, 'Réactivation d\'un article', 5, 28, '2022-08-10 00:40:20', '2022-08-10 00:40:20', NULL, NULL, NULL, 3, 40),
(21, 'Suppression d\'un article', 5, 26, '2022-08-10 00:40:38', '2022-08-10 00:40:38', NULL, NULL, NULL, 3, 40),
(22, 'Suppression d\'un article', 5, 25, '2022-08-10 00:40:43', '2022-08-10 00:40:43', NULL, NULL, NULL, 3, 40),
(23, 'Création du compte agent', 1, 49, '2022-08-11 00:06:57', '2022-08-11 00:06:57', NULL, NULL, NULL, 3, 40),
(24, 'Création du compte agent', 1, 51, '2022-08-11 00:22:50', '2022-08-11 00:22:50', NULL, NULL, NULL, 3, 40),
(25, 'Modification du compte agent', 1, 51, '2022-08-11 00:23:52', '2022-08-11 00:23:52', NULL, NULL, NULL, 3, 40),
(26, 'Réactivation d\'une catégorie', 3, 2, '2022-08-11 00:38:43', '2022-08-11 00:38:43', NULL, NULL, NULL, 3, 40),
(27, 'Modification d\'une catégorie', 3, 6, '2022-08-11 00:40:21', '2022-08-11 00:40:21', NULL, NULL, NULL, 3, 40),
(28, 'Création du compte bideur', 2, 52, '2022-08-11 00:51:47', '2022-08-11 00:51:47', NULL, NULL, NULL, 3, 40),
(29, 'Modification d\'une sous-catégorie', 4, 1, '2022-08-11 07:14:41', '2022-08-11 07:14:41', NULL, NULL, NULL, 3, 40),
(30, 'Modification d\'une sous-catégorie', 4, 5, '2022-08-11 07:15:11', '2022-08-11 07:15:11', NULL, NULL, NULL, 3, 40),
(31, 'Réactivation d\'un taux de conversion', 6, 3, '2022-08-11 07:36:46', '2022-08-11 07:36:46', NULL, NULL, NULL, 3, 40),
(32, 'Réactivation d\'un taux de conversion', 6, 3, '2022-08-11 07:36:48', '2022-08-11 07:36:48', NULL, NULL, NULL, 3, 40),
(33, 'Modification du compte agent', 1, 49, '2022-08-11 10:05:28', '2022-08-11 10:05:28', NULL, NULL, NULL, 3, 40),
(34, 'Modification du compte agent', 1, 49, '2022-08-11 10:05:59', '2022-08-11 10:05:59', NULL, NULL, NULL, 3, 40),
(35, 'Création du compte bideur', 2, 53, '2022-08-12 06:48:24', '2022-08-12 06:48:24', NULL, NULL, NULL, 3, 40),
(36, 'Modification du compte bideur', 2, 53, '2022-08-12 06:58:21', '2022-08-12 06:58:21', NULL, NULL, NULL, 3, 40),
(37, 'Suppression d\'un demandeur de bid ,montant demandé est de750', 5, 52, '2022-08-12 10:30:21', '2022-08-12 10:30:21', NULL, NULL, NULL, 3, 40),
(38, 'Suppression de la requette pedro :  : 243818086893', 5, 40, '2022-08-12 10:57:06', '2022-08-12 10:57:06', NULL, NULL, NULL, 3, 40),
(39, 'Suppression de la requette Claude kalondji : Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dignissimos adipisci necessitatibus, illo, officiis sequi harum, quod explicabo ipsam aut odit natus voluptate atque! Dolore explicabo omnis nisi vitae deleniti. : 243818086893', 5, 40, '2022-08-12 11:04:33', '2022-08-12 11:04:33', NULL, NULL, NULL, 3, 40),
(40, 'Modification d\'un article', 5, 27, '2022-08-12 11:20:17', '2022-08-12 11:20:17', NULL, NULL, NULL, 3, 40),
(41, 'Payement du gagnant Musunga Alex , enchere: PS5 id: 44declaré non payé', 5, 40, '2022-08-12 12:07:10', '2022-08-12 12:07:10', NULL, NULL, NULL, 3, 40),
(42, 'Payement du gagnant Musunga Alex , enchere: Ordinateur portable id: 43', 5, 40, '2022-08-12 12:07:15', '2022-08-12 12:07:15', NULL, NULL, NULL, 3, 40),
(43, 'Suppression du gagnant Musunga Alex id : 44', 5, 40, '2022-08-12 12:15:47', '2022-08-12 12:15:47', NULL, NULL, NULL, 3, 40),
(44, 'Enregistrement d\'un article', 5, 30, '2022-08-31 10:21:22', '2022-08-31 10:21:22', NULL, NULL, NULL, 3, 40),
(45, 'Modification d\'un article', 5, 30, '2022-08-31 12:37:39', '2022-08-31 12:37:39', NULL, NULL, NULL, 3, 40),
(46, 'Modification d\'un article', 5, 30, '2022-09-01 01:20:49', '2022-09-01 01:20:49', NULL, NULL, NULL, 3, 40),
(47, 'Modification du compte bideur', 2, 56, '2022-09-01 02:17:00', '2022-09-01 02:17:00', NULL, NULL, NULL, 3, 40),
(48, 'Enregistrement d\'un article', 5, 31, '2022-09-02 07:28:26', '2022-09-02 07:28:26', NULL, NULL, NULL, 3, 40),
(49, 'Enregistrement d\'un article', 5, 32, '2022-09-02 07:35:07', '2022-09-02 07:35:07', NULL, NULL, NULL, 3, 40),
(50, 'Enregistrement d\'un article', 5, 33, '2022-09-08 00:09:44', '2022-09-08 00:09:44', NULL, NULL, NULL, 3, 40),
(51, 'Enregistrement d\'un article', 5, 34, '2022-09-08 01:26:23', '2022-09-08 01:26:23', NULL, NULL, NULL, 3, 40),
(52, 'Enregistrement d\'un article', 5, 38, '2022-09-16 06:45:40', '2022-09-16 06:45:40', NULL, NULL, NULL, 3, 40),
(53, 'Suppression d\'un article', 5, 38, '2022-09-16 06:53:48', '2022-09-16 06:53:48', NULL, NULL, NULL, 3, 40),
(54, 'Création d\'une sous-catégorie', 4, 9, '2022-09-16 21:23:09', '2022-09-16 21:23:09', NULL, NULL, NULL, 3, 40),
(55, 'Enregistrement d\'un article', 5, 37, '2022-09-16 21:31:57', '2022-09-16 21:31:57', NULL, NULL, NULL, 3, 40),
(56, 'Enregistrement d\'un article', 5, 38, '2022-09-16 21:36:09', '2022-09-16 21:36:09', NULL, NULL, NULL, 3, 40),
(57, 'Enregistrement d\'un article', 5, 39, '2022-09-16 21:45:49', '2022-09-16 21:45:49', NULL, NULL, NULL, 3, 40),
(58, 'Modification d\'un article', 5, 3, '2022-09-17 10:54:51', '2022-09-17 10:54:51', NULL, NULL, NULL, 3, 40),
(59, 'Enregistrement d\'un article', 5, 40, '2022-09-19 17:59:12', '2022-09-19 17:59:12', NULL, NULL, NULL, 3, 40),
(60, 'Enregistrement d\'un article', 5, 41, '2022-09-19 18:14:14', '2022-09-19 18:14:14', NULL, NULL, NULL, 3, 40),
(61, 'Modification d\'un article', 5, 3, '2022-09-20 19:15:52', '2022-09-20 19:15:52', NULL, NULL, NULL, 3, 40),
(62, 'Modification d\'un article', 5, 2, '2022-09-20 19:38:35', '2022-09-20 19:38:35', NULL, NULL, NULL, 3, 40),
(63, 'Enregistrement d\'un article', 5, 42, '2022-09-20 19:42:36', '2022-09-20 19:42:36', NULL, NULL, NULL, 3, 40),
(64, 'Enregistrement d\'un article', 5, 43, '2022-09-22 21:10:25', '2022-09-22 21:10:25', NULL, NULL, NULL, 3, 40),
(65, 'Enregistrement d\'un article', 5, 44, '2022-09-30 20:58:33', '2022-09-30 20:58:33', NULL, NULL, NULL, 3, 40),
(66, 'Suppression d\'un article', 5, 44, '2022-09-30 22:08:07', '2022-09-30 22:08:07', NULL, NULL, NULL, 3, 40),
(67, 'Suppression du gagnant Nzeza id : 86', 5, 85, '2022-10-13 12:18:43', '2022-10-13 12:18:43', NULL, NULL, NULL, 3, 85),
(68, 'Enregistrement d\'un article', 5, 45, '2022-10-13 12:20:41', '2022-10-13 12:20:41', NULL, NULL, NULL, 3, 85),
(69, 'Enregistrement d\'un article', 5, 46, '2022-10-13 12:28:25', '2022-10-13 12:28:25', NULL, NULL, NULL, 3, 85),
(70, 'Suppression d\'un article', 5, 46, '2022-10-13 12:39:19', '2022-10-13 12:39:19', NULL, NULL, NULL, 3, 85),
(71, 'Enregistrement d\'un article', 5, 47, '2022-10-13 12:41:37', '2022-10-13 12:41:37', NULL, NULL, NULL, 3, 85),
(72, 'Modification d\'un article', 5, 47, '2022-10-13 13:24:49', '2022-10-13 13:24:49', NULL, NULL, NULL, 3, 85),
(73, 'Modification d\'un article', 5, 47, '2022-10-13 13:25:35', '2022-10-13 13:25:35', NULL, NULL, NULL, 3, 85),
(74, 'Enregistrement d\'un article', 5, 48, '2022-10-14 19:02:15', '2022-10-14 19:02:15', NULL, NULL, NULL, 3, 85),
(75, 'Modification d\'un article', 5, 2, '2022-10-14 19:36:35', '2022-10-14 19:36:35', NULL, NULL, NULL, 3, 85),
(76, 'Enregistrement d\'un article', 5, 49, '2022-11-15 15:24:37', '2022-11-15 15:24:37', NULL, NULL, NULL, 3, 77),
(77, 'Modification d\'un article', 5, 49, '2022-11-22 11:55:21', '2022-11-22 11:55:21', NULL, NULL, NULL, 3, 77),
(78, 'Enregistrement d\'un article', 5, 50, '2022-11-29 13:00:41', '2022-11-29 13:00:41', NULL, NULL, NULL, 3, 77),
(79, 'Payement du gagnant Pro , enchere: WESTON id: 85', 5, 77, '2022-11-29 13:03:26', '2022-11-29 13:03:26', NULL, NULL, NULL, 3, 77),
(80, 'Payement du gagnant Pro , enchere: WESTON id: 85declaré non payé', 5, 77, '2022-11-29 13:03:38', '2022-11-29 13:03:38', NULL, NULL, NULL, 3, 77),
(81, 'Payement du gagnant Pro , enchere: WESTON id: 85', 5, 77, '2022-11-29 13:03:47', '2022-11-29 13:03:47', NULL, NULL, NULL, 3, 77),
(82, 'Enregistrement d\'un article', 5, 51, '2022-12-09 15:02:18', '2022-12-09 15:02:18', NULL, NULL, NULL, 3, 77),
(83, 'Enregistrement d\'un article', 5, 52, '2023-03-27 17:24:10', '2023-03-27 17:24:10', NULL, NULL, NULL, 3, 77),
(84, 'Enregistrement d\'un article', 5, 53, '2023-03-27 22:57:37', '2023-03-27 22:57:37', NULL, NULL, NULL, 3, 77),
(85, 'Modification d\'un article', 5, 53, '2023-03-27 22:58:08', '2023-03-27 22:58:08', NULL, NULL, NULL, 3, 77),
(86, 'Enregistrement d\'un article', 5, 54, '2023-03-28 20:29:51', '2023-03-28 20:29:51', NULL, NULL, NULL, 3, 77),
(87, 'Enregistrement d\'un article', 5, 55, '2023-03-28 20:51:33', '2023-03-28 20:51:33', NULL, NULL, NULL, 3, 77),
(88, 'Enregistrement d\'un article', 5, 56, '2023-04-04 23:04:54', '2023-04-04 23:04:54', NULL, NULL, NULL, 3, 77),
(89, 'Enregistrement d\'un article', 5, 57, '2023-05-29 11:48:52', '2023-05-29 11:48:52', NULL, NULL, NULL, 3, 102),
(90, 'Enregistrement d\'un article', 5, 58, '2023-06-12 11:39:32', '2023-06-12 11:39:32', NULL, NULL, NULL, 3, 77),
(91, 'Enregistrement d\'un article', 5, 59, '2023-06-13 15:30:50', '2023-06-13 15:30:50', NULL, NULL, NULL, 3, 77);

-- --------------------------------------------------------

--
-- Table structure for table `images`
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
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `lien`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `article_id`) VALUES
(2, 'PS5_2.webp', '2022-03-01 06:41:19', '2022-03-01 06:41:19', NULL, NULL, NULL, 3, 1, 2),
(3, 'Ordinateur iod_3.webp', '2022-03-10 03:55:55', '2022-03-10 03:55:55', NULL, NULL, NULL, 3, 1, 3),
(41, 'Ordinateur.webp', '2022-09-19 17:59:10', '2022-09-19 17:59:10', NULL, NULL, NULL, 3, 40, 40),
(42, 'iphone.webp', '2022-09-19 18:14:11', '2022-09-19 18:14:11', NULL, NULL, NULL, 3, 40, 41),
(43, 'amerique.webp', '2022-09-20 19:42:36', '2022-09-20 19:42:36', NULL, NULL, NULL, 3, 40, 42),
(44, 'lunettes.webp', '2022-09-22 21:10:24', '2022-09-22 21:10:24', NULL, NULL, NULL, 3, 40, 43),
(45, 'Iphone 13.webp', '2022-09-30 20:58:33', '2022-09-30 22:08:07', '2022-09-30 22:08:07', 40, 40, 2, 40, 44),
(46, 'television.webp', '2022-10-13 12:20:41', '2022-10-13 12:20:41', NULL, NULL, NULL, 3, 85, 45),
(47, 'BARUA.webp', '2022-10-13 12:28:25', '2022-10-13 12:39:19', '2022-10-13 12:39:19', 85, 85, 2, 85, 46),
(48, 'STYLO INTELLIGENT.webp', '2022-10-13 12:41:37', '2022-10-13 12:41:37', NULL, NULL, NULL, 3, 85, 47),
(49, 'Iphone.webp', '2022-10-14 19:02:15', '2022-10-14 19:02:15', NULL, NULL, NULL, 3, 85, 48),
(50, 'WESTON.webp', '2022-11-15 15:24:37', '2022-11-15 15:24:37', NULL, NULL, NULL, 3, 77, 49),
(51, 'PROJECTER.webp', '2022-11-29 13:00:40', '2022-11-29 13:00:40', NULL, NULL, NULL, 3, 77, 50),
(52, 'GAME.webp', '2022-12-09 15:02:18', '2022-12-09 15:02:18', NULL, NULL, NULL, 3, 77, 51),
(53, 'Tables.webp', '2023-03-27 17:24:10', '2023-03-27 17:24:10', NULL, NULL, NULL, 3, 77, 52),
(54, 'camera.webp', '2023-03-27 22:57:37', '2023-03-27 22:57:37', NULL, NULL, NULL, 3, 77, 53),
(55, 'camara.webp', '2023-03-28 20:29:51', '2023-03-28 20:29:51', NULL, NULL, NULL, 3, 77, 54),
(56, 'bitcon.webp', '2023-03-28 20:51:33', '2023-03-28 20:51:33', NULL, NULL, NULL, 3, 77, 55),
(57, 'Tablette.webp', '2023-04-04 23:04:54', '2023-04-04 23:04:54', NULL, NULL, NULL, 3, 77, 56),
(58, 'camera.webp', '2023-05-29 11:48:52', '2023-05-29 11:48:52', NULL, NULL, NULL, 3, 102, 57),
(59, 'camera 360.webp', '2023-06-12 11:39:32', '2023-06-12 11:39:32', NULL, NULL, NULL, 3, 77, 58),
(60, 'voiture.webp', '2023-06-13 15:30:50', '2023-06-13 15:30:50', NULL, NULL, NULL, 3, 77, 59);

-- --------------------------------------------------------

--
-- Table structure for table `instructions`
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
-- Dumping data for table `instructions`
--

INSERT INTO `instructions` (`id`, `titre`, `description`, `lien`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'Comment bider ?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nam nisi ducimus itaque? Exercitationem mollitia amet id similique ipsum cum corrupti incidunt. Tempore commodi a eum dolor nihil reprehenderit repellat!Animi, voluptas laboriosam. Ipsum iusto reiciendis aperiam cum explicabo vero cupiditate id animi eligendi quod. Libero, ducimus dolorum consequuntur incidunt quidem natus molestiae praesentium officia, reiciendis accusantium a, deleniti voluptatem!', 'commer', '2022-03-16 03:25:47', '2022-03-16 03:25:47', NULL, NULL, NULL, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
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
-- Table structure for table `messages`
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
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `libelle`, `read`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `salon_id`, `user_id`) VALUES
(12, '', 0, '2022-05-03 10:47:10', '2022-05-03 10:47:10', NULL, NULL, NULL, NULL, NULL, 11),
(19, 'ewf', 0, '2022-09-09 04:17:30', '2022-09-09 04:17:30', NULL, NULL, NULL, NULL, NULL, 58),
(20, 'bonjour', 0, '2022-09-09 04:21:54', '2022-09-09 04:21:54', NULL, NULL, NULL, NULL, NULL, 58),
(21, 'wifjewrlf', 0, '2022-09-09 04:22:21', '2022-09-09 04:22:21', NULL, NULL, NULL, NULL, NULL, 58),
(22, 'salut', 0, '2022-09-07 04:36:27', '2022-09-09 04:36:27', NULL, NULL, NULL, NULL, NULL, 55),
(23, 'bonjour', 0, '2022-09-20 23:42:26', '2022-09-20 23:42:26', NULL, NULL, NULL, NULL, NULL, 66),
(24, 'bonjour frere', 0, '2022-09-20 23:43:58', '2022-09-20 23:43:58', NULL, NULL, NULL, NULL, NULL, 66),
(25, 'bonjour', 0, '2022-09-28 13:12:49', '2022-09-28 13:12:49', NULL, NULL, NULL, NULL, NULL, 54),
(26, 'salut', 0, '2023-04-29 00:18:37', '2023-04-29 00:18:37', NULL, NULL, NULL, NULL, NULL, 96),
(27, 'he', 0, '2023-04-29 00:19:23', '2023-04-29 00:19:23', NULL, NULL, NULL, NULL, NULL, 96),
(28, 'vbb', 0, '2023-04-29 00:20:57', '2023-04-29 00:20:57', NULL, NULL, NULL, NULL, NULL, 96),
(29, 'gtrhtrh', 0, '2023-04-29 00:21:10', '2023-04-29 00:21:10', NULL, NULL, NULL, NULL, NULL, 96),
(30, 'hjy3tygd4', 0, '2023-04-29 00:21:27', '2023-04-29 00:21:27', NULL, NULL, NULL, NULL, NULL, 96),
(31, 'pedro', 0, '2023-04-29 00:21:35', '2023-04-29 00:21:35', NULL, NULL, NULL, NULL, NULL, 96),
(32, 'pr\\edro\n', 0, '2023-04-29 00:22:20', '2023-04-29 00:22:20', NULL, NULL, NULL, NULL, NULL, 96),
(33, 'rdfrtvtgvyhujmik,jubthgbyhbbyhu', 0, '2023-04-29 00:22:30', '2023-04-29 00:22:30', NULL, NULL, NULL, NULL, NULL, 96),
(34, 'salut groupe', 0, '2023-05-10 17:57:21', '2023-05-10 17:57:21', NULL, NULL, NULL, NULL, NULL, 96),
(35, 'salut\n', 0, '2023-06-12 13:01:45', '2023-06-12 13:01:45', NULL, NULL, NULL, NULL, NULL, 77);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(11) NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
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
-- Table structure for table `news`
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
-- Table structure for table `newsletters`
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
-- Dumping data for table `newsletters`
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
-- Table structure for table `notifications`
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
-- Dumping data for table `notifications`
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
(51, 'Pro Participation  au salon iphone effectuer', 0, NULL, 85, '2022-12-16 13:00:13', '2022-12-16 13:00:13', NULL, NULL, NULL, NULL, NULL),
(52, 'Jxj Participation  au salon bitcon effectuer', 0, NULL, 96, '2023-03-28 22:47:54', '2023-03-28 22:47:54', NULL, NULL, NULL, NULL, NULL),
(53, 'Jxj Participation  au salon bitcon effectuer', 0, NULL, 96, '2023-03-29 00:11:35', '2023-03-29 00:11:35', NULL, NULL, NULL, NULL, NULL),
(54, 'Jxj Participation  au salon bitcon effectuer', 0, NULL, 96, '2023-03-29 19:45:15', '2023-03-29 19:45:15', NULL, NULL, NULL, NULL, NULL),
(55, 'Jxj Participation  au salon bitcon effectuer', 0, NULL, 96, '2023-03-29 21:05:35', '2023-03-29 21:05:35', NULL, NULL, NULL, NULL, NULL),
(56, 'Jxj Participation  au salon bitcon effectuer', 0, NULL, 96, '2023-03-29 21:11:27', '2023-03-29 21:11:27', NULL, NULL, NULL, NULL, NULL),
(57, 'Jxj vous a envoyé 10 bids', 0, NULL, 95, '2023-03-29 22:31:54', '2023-03-29 22:31:54', NULL, NULL, NULL, NULL, 96),
(58, 'Jxj vous a envoyé de(s) option() ', 0, NULL, 98, '2023-03-31 19:20:10', '2023-03-31 19:20:10', NULL, NULL, NULL, NULL, 96),
(59, 'Jxj vous a envoyé de(s) option() ', 0, NULL, 98, '2023-03-31 19:29:34', '2023-03-31 19:29:34', NULL, NULL, NULL, NULL, 96),
(60, 'Jxj vous a envoyé de(s) option() ', 0, NULL, 98, '2023-03-31 20:13:08', '2023-03-31 20:13:08', NULL, NULL, NULL, NULL, 96),
(61, 'Jxj vous a envoyé de(s) option() ', 0, NULL, 98, '2023-03-31 20:14:34', '2023-03-31 20:14:34', NULL, NULL, NULL, NULL, 96),
(62, 'Jxj vous a envoyé de(s) option() ', 0, NULL, 98, '2023-03-31 20:22:55', '2023-03-31 20:22:55', NULL, NULL, NULL, NULL, 96),
(63, 'Jxj vous a envoyé de(s) option() ', 0, NULL, 98, '2023-03-31 20:23:37', '2023-03-31 20:23:37', NULL, NULL, NULL, NULL, 96),
(64, 'Jxj vous a envoyé de(s) option() ', 0, NULL, 98, '2023-03-31 20:37:29', '2023-03-31 20:37:29', NULL, NULL, NULL, NULL, 96),
(65, 'Jxj vous a envoyé de(s) option() ', 0, NULL, 98, '2023-03-31 20:44:19', '2023-03-31 20:44:19', NULL, NULL, NULL, NULL, 96),
(66, 'Jxj vous a envoyé de(s) option() ', 0, NULL, 98, '2023-03-31 20:45:18', '2023-03-31 20:45:18', NULL, NULL, NULL, NULL, 96),
(67, 'AvatarGuer Participation  au salon bitcon effectuer', 0, NULL, 98, '2023-04-04 22:56:52', '2023-04-04 22:56:52', NULL, NULL, NULL, NULL, NULL),
(68, 'AvatarGuer Participation  au salon bitcon effectuer', 0, NULL, 98, '2023-04-04 22:57:34', '2023-04-04 22:57:34', NULL, NULL, NULL, NULL, NULL),
(69, 'AvatarGuer Participation  au salon bitcon effectuer', 0, NULL, 98, '2023-04-04 22:58:47', '2023-04-04 22:58:47', NULL, NULL, NULL, NULL, NULL),
(70, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-04-11 23:21:29', '2023-04-11 23:21:29', NULL, NULL, NULL, NULL, NULL),
(71, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-04-11 23:22:15', '2023-04-11 23:22:15', NULL, NULL, NULL, NULL, NULL),
(72, 'AvatarGuer Participation  au salon  effectuer', 0, NULL, 98, '2023-04-12 00:24:18', '2023-04-12 00:24:18', NULL, NULL, NULL, NULL, NULL),
(73, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-04-12 22:59:21', '2023-04-12 22:59:21', NULL, NULL, NULL, NULL, NULL),
(74, 'Vous etiez participant a l\'enchere du lot 50 de GAME Malheuresement le quota de 100 personnes n\'a pas éte atteint la retenu de 10 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-04-13 18:21:15', '2023-04-13 18:21:15', NULL, NULL, NULL, NULL, 96),
(75, 'AvatarGuer Participation  au salon  effectuer', 0, NULL, 98, '2023-04-13 21:43:25', '2023-04-13 21:43:25', NULL, NULL, NULL, NULL, NULL),
(76, 'Vous etiez participant a l\'enchere du lot 51 de GAME Malheuresement le quota de 100 personnes n\'a pas éte atteint la retenu de 10 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-04-13 21:45:47', '2023-04-13 21:45:47', NULL, NULL, NULL, NULL, 98),
(77, 'AvatarGuer Participation  au salon  effectuer', 0, NULL, 98, '2023-04-13 21:49:09', '2023-04-13 21:49:09', NULL, NULL, NULL, NULL, NULL),
(78, 'Vous etiez participant a l\'enchere du lot 52 de GAME Malheuresement le quota de 100 personnes n\'a pas éte atteint la retenu de 10 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-04-13 21:49:21', '2023-04-13 21:49:21', NULL, NULL, NULL, NULL, 98),
(79, 'AvatarGuer Participation  au salon  effectuer', 0, NULL, 98, '2023-04-13 21:49:52', '2023-04-13 21:49:52', NULL, NULL, NULL, NULL, NULL),
(80, 'Vous etiez participant a l\'enchere du lot 53 de GAME Malheuresement le quota de 100 personnes n\'a pas éte atteint la retenu de 10 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-04-13 21:51:49', '2023-04-13 21:51:49', NULL, NULL, NULL, NULL, 98),
(81, 'AvatarGuer Participation  au salon  effectuer', 0, NULL, 98, '2023-04-13 21:56:57', '2023-04-13 21:56:57', NULL, NULL, NULL, NULL, NULL),
(82, 'Vous etiez participant a l\'enchere du lot 54 de GAME Malheuresement le quota de 100 personnes n\'a pas éte atteint la retenu de 1 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-04-13 22:08:23', '2023-04-13 22:08:23', NULL, NULL, NULL, NULL, 98),
(83, 'AvatarGuer Participation  au salon  effectuer', 0, NULL, 98, '2023-04-13 22:09:46', '2023-04-13 22:09:46', NULL, NULL, NULL, NULL, NULL),
(84, 'Avatar Le Grand Participation  au salon game effectuer', 0, NULL, 96, '2023-04-13 23:30:27', '2023-04-13 23:30:27', NULL, NULL, NULL, NULL, NULL),
(85, 'Vous etiez participant a l\'enchere du lot 55 de GAME Malheuresement le quota de 100 personnes n\'a pas éte atteint la retenu de 1 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-04-27 18:12:29', '2023-04-27 18:12:29', NULL, NULL, NULL, NULL, 96),
(86, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-04-27 18:28:59', '2023-04-27 18:28:59', NULL, NULL, NULL, NULL, NULL),
(87, 'Vous etiez participant a l\'enchere du lot 56 de GAME Malheuresement le quota de 100 personnes n\'a pas éte atteint la retenu de 1 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-04-27 20:55:38', '2023-04-27 20:55:38', NULL, NULL, NULL, NULL, 96),
(88, 'Avatar Le Grand vous a envoyé de(s) option() ', 0, NULL, 99, '2023-05-16 23:34:47', '2023-05-16 23:34:47', NULL, NULL, NULL, NULL, 96),
(89, 'Avatar Participation  au salon  effectuer', 0, NULL, 77, '2023-06-12 12:46:38', '2023-06-12 12:46:38', NULL, NULL, NULL, NULL, NULL),
(90, 'Avatar Participation  au salon camera-360 effectuer', 0, NULL, 77, '2023-06-12 12:56:48', '2023-06-12 12:56:48', NULL, NULL, NULL, NULL, NULL),
(91, 'Avatar Participation  au salon  effectuer', 0, NULL, 77, '2023-06-12 13:03:07', '2023-06-12 13:03:07', NULL, NULL, NULL, NULL, NULL),
(92, 'Avatar Participation  au salon  effectuer', 0, NULL, 77, '2023-06-12 15:01:36', '2023-06-12 15:01:36', NULL, NULL, NULL, NULL, NULL),
(93, 'Avatar Le Grand Participation  au salon bitcon effectuer', 0, NULL, 96, '2023-06-15 10:38:31', '2023-06-15 10:38:31', NULL, NULL, NULL, NULL, NULL),
(94, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-15 12:03:10', '2023-06-15 12:03:10', NULL, NULL, NULL, NULL, NULL),
(95, 'Adan Participation  au salon camera effectuer', 0, NULL, 108, '2023-06-15 13:41:30', '2023-06-15 13:41:30', NULL, NULL, NULL, NULL, NULL),
(96, 'Adan Participation  au salon camera-360 effectuer', 0, NULL, 108, '2023-06-15 13:43:51', '2023-06-15 13:43:51', NULL, NULL, NULL, NULL, NULL),
(97, 'Vous etiez participant a l\'enchere du lot 1 de camera 360 Malheuresement le quota de 10000 personnes n\'a pas éte atteint la retenu de 20 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-16 11:29:46', '2023-06-16 11:29:46', NULL, NULL, NULL, NULL, 77),
(98, 'Vous etiez participant a l\'enchere du lot 2 de bitcon Malheuresement le quota de 10000 personnes n\'a pas éte atteint la retenu de 25 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-16 11:29:46', '2023-06-16 11:29:46', NULL, NULL, NULL, NULL, 77),
(99, 'Vous etiez participant a l\'enchere du lot 2 de bitcon Malheuresement le quota de 10000 personnes n\'a pas éte atteint la retenu de 25 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-16 11:29:46', '2023-06-16 11:29:46', NULL, NULL, NULL, NULL, 96),
(100, 'Vous etiez participant a l\'enchere du lot 3 de camera Malheuresement le quota de 100000 personnes n\'a pas éte atteint la retenu de 2 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-16 11:29:46', '2023-06-16 11:29:46', NULL, NULL, NULL, NULL, 108),
(101, 'Vous etiez participant a l\'enchere du lot 4 de camera 360 Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 400 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-16 11:29:46', '2023-06-16 11:29:46', NULL, NULL, NULL, NULL, 96),
(102, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-16 12:55:13', '2023-06-16 12:55:13', NULL, NULL, NULL, NULL, NULL),
(103, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-16 13:42:25', '2023-06-16 13:42:25', NULL, NULL, NULL, NULL, NULL),
(104, 'Vous etiez participant a l\'enchere du lot 8 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-16 13:55:59', '2023-06-16 13:55:59', NULL, NULL, NULL, NULL, 96),
(105, 'Adan Participation  au salon voiture effectuer', 0, NULL, 108, '2023-06-16 15:09:14', '2023-06-16 15:09:14', NULL, NULL, NULL, NULL, NULL),
(106, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-16 15:19:04', '2023-06-16 15:19:04', NULL, NULL, NULL, NULL, NULL),
(107, 'Vous etiez participant a l\'enchere du lot 9 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 400 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-16 15:42:24', '2023-06-16 15:42:24', NULL, NULL, NULL, NULL, 108),
(108, 'Vous etiez participant a l\'enchere du lot 9 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 400 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-16 15:42:24', '2023-06-16 15:42:24', NULL, NULL, NULL, NULL, 96),
(109, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-16 15:54:43', '2023-06-16 15:54:43', NULL, NULL, NULL, NULL, NULL),
(110, 'Vous etiez participant a l\'enchere du lot 10 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-16 16:04:14', '2023-06-16 16:04:14', NULL, NULL, NULL, NULL, 96),
(111, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-16 16:55:16', '2023-06-16 16:55:16', NULL, NULL, NULL, NULL, NULL),
(112, 'Adan Participation  au salon voiture effectuer', 0, NULL, 108, '2023-06-16 16:55:33', '2023-06-16 16:55:33', NULL, NULL, NULL, NULL, NULL),
(113, 'Vous etiez participant a l\'enchere du lot 11 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-16 17:34:37', '2023-06-16 17:34:37', NULL, NULL, NULL, NULL, 96),
(114, 'Vous etiez participant a l\'enchere du lot 11 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-16 17:34:37', '2023-06-16 17:34:37', NULL, NULL, NULL, NULL, 108),
(115, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-17 23:25:38', '2023-06-17 23:25:38', NULL, NULL, NULL, NULL, NULL),
(116, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-17 23:35:04', '2023-06-17 23:35:04', NULL, NULL, NULL, NULL, NULL),
(117, 'Vous etiez participant a l\'enchere du lot 12 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-17 23:45:03', '2023-06-17 23:45:03', NULL, NULL, NULL, NULL, 96),
(118, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-17 23:46:20', '2023-06-17 23:46:20', NULL, NULL, NULL, NULL, NULL),
(119, 'Adan Participation  au salon voiture effectuer', 0, NULL, 108, '2023-06-17 23:48:02', '2023-06-17 23:48:02', NULL, NULL, NULL, NULL, NULL),
(120, 'Vous etiez participant a l\'enchere du lot 13 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-18 06:32:31', '2023-06-18 06:32:31', NULL, NULL, NULL, NULL, 96),
(121, 'Vous etiez participant a l\'enchere du lot 13 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-18 06:32:31', '2023-06-18 06:32:31', NULL, NULL, NULL, NULL, 108),
(122, 'Adan Participation  au salon  effectuer', 0, NULL, 108, '2023-06-18 06:33:44', '2023-06-18 06:33:44', NULL, NULL, NULL, NULL, NULL),
(123, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-18 06:38:44', '2023-06-18 06:38:44', NULL, NULL, NULL, NULL, NULL),
(124, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-18 06:40:52', '2023-06-18 06:40:52', NULL, NULL, NULL, NULL, NULL),
(125, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-18 06:43:49', '2023-06-18 06:43:49', NULL, NULL, NULL, NULL, NULL),
(126, 'Vous etiez participant a l\'enchere du lot 14 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-18 06:44:37', '2023-06-18 06:44:37', NULL, NULL, NULL, NULL, 108),
(127, 'Vous etiez participant a l\'enchere du lot 14 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-18 06:44:37', '2023-06-18 06:44:37', NULL, NULL, NULL, NULL, 96),
(128, 'Adan Participation  au salon  effectuer', 0, NULL, 108, '2023-06-18 06:45:47', '2023-06-18 06:45:47', NULL, NULL, NULL, NULL, NULL),
(129, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-18 06:46:30', '2023-06-18 06:46:30', NULL, NULL, NULL, NULL, NULL),
(130, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-18 06:48:33', '2023-06-18 06:48:33', NULL, NULL, NULL, NULL, NULL),
(131, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-18 06:49:09', '2023-06-18 06:49:09', NULL, NULL, NULL, NULL, NULL),
(132, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-18 06:52:15', '2023-06-18 06:52:15', NULL, NULL, NULL, NULL, NULL),
(133, 'Vous etiez participant a l\'enchere du lot 15 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-18 07:32:56', '2023-06-18 07:32:56', NULL, NULL, NULL, NULL, 108),
(134, 'Vous etiez participant a l\'enchere du lot 15 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-18 07:32:56', '2023-06-18 07:32:56', NULL, NULL, NULL, NULL, 96),
(135, 'Adan Participation  au salon  effectuer', 0, NULL, 108, '2023-06-19 04:11:51', '2023-06-19 04:11:51', NULL, NULL, NULL, NULL, NULL),
(136, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-19 04:54:18', '2023-06-19 04:54:18', NULL, NULL, NULL, NULL, NULL),
(137, 'Adan Participation  au salon  effectuer', 0, NULL, 108, '2023-06-19 04:57:54', '2023-06-19 04:57:54', NULL, NULL, NULL, NULL, NULL),
(138, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-19 04:58:22', '2023-06-19 04:58:22', NULL, NULL, NULL, NULL, NULL),
(139, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-19 04:59:30', '2023-06-19 04:59:30', NULL, NULL, NULL, NULL, NULL),
(140, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-19 05:05:51', '2023-06-19 05:05:51', NULL, NULL, NULL, NULL, NULL),
(141, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-19 05:06:30', '2023-06-19 05:06:30', NULL, NULL, NULL, NULL, NULL),
(142, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-19 05:08:10', '2023-06-19 05:08:10', NULL, NULL, NULL, NULL, NULL),
(143, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-19 05:08:55', '2023-06-19 05:08:55', NULL, NULL, NULL, NULL, NULL),
(144, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-19 05:09:18', '2023-06-19 05:09:18', NULL, NULL, NULL, NULL, NULL),
(145, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-19 05:10:33', '2023-06-19 05:10:33', NULL, NULL, NULL, NULL, NULL),
(146, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-19 05:12:37', '2023-06-19 05:12:37', NULL, NULL, NULL, NULL, NULL),
(147, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-19 05:14:03', '2023-06-19 05:14:03', NULL, NULL, NULL, NULL, NULL),
(148, 'Vous etiez participant a l\'enchere du lot 17 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-19 10:01:28', '2023-06-19 10:01:28', NULL, NULL, NULL, NULL, 108),
(149, 'Vous etiez participant a l\'enchere du lot 17 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-19 10:01:28', '2023-06-19 10:01:28', NULL, NULL, NULL, NULL, 96),
(150, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-19 10:04:44', '2023-06-19 10:04:44', NULL, NULL, NULL, NULL, NULL),
(151, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-19 10:04:44', '2023-06-19 10:04:44', NULL, NULL, NULL, NULL, NULL),
(152, 'Adan Participation  au salon voiture effectuer', 0, NULL, 108, '2023-06-19 10:06:15', '2023-06-19 10:06:15', NULL, NULL, NULL, NULL, NULL),
(153, 'Vous etiez participant a l\'enchere du lot 18 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-19 10:13:10', '2023-06-19 10:13:10', NULL, NULL, NULL, NULL, 96),
(154, 'Vous etiez participant a l\'enchere du lot 18 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-19 10:13:10', '2023-06-19 10:13:10', NULL, NULL, NULL, NULL, 108),
(155, 'Vous etiez participant a l\'enchere du lot 19 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-19 10:13:10', '2023-06-19 10:13:10', NULL, NULL, NULL, NULL, 96),
(156, 'Adan Participation  au salon voiture effectuer', 0, NULL, 108, '2023-06-19 11:34:21', '2023-06-19 11:34:21', NULL, NULL, NULL, NULL, NULL),
(157, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-19 11:34:59', '2023-06-19 11:34:59', NULL, NULL, NULL, NULL, NULL),
(158, 'Vous etiez participant a l\'enchere du lot 16 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-19 11:35:19', '2023-06-19 11:35:19', NULL, NULL, NULL, NULL, 108),
(159, 'Vous etiez participant a l\'enchere du lot 16 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-19 11:35:19', '2023-06-19 11:35:19', NULL, NULL, NULL, NULL, 96),
(160, 'Adan Participation  au salon  effectuer', 0, NULL, 108, '2023-06-19 11:53:27', '2023-06-19 11:53:27', NULL, NULL, NULL, NULL, NULL),
(161, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-19 11:53:58', '2023-06-19 11:53:58', NULL, NULL, NULL, NULL, NULL),
(162, 'Vous etiez participant a l\'enchere du lot 20 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-19 11:58:40', '2023-06-19 11:58:40', NULL, NULL, NULL, NULL, 108),
(163, 'Vous etiez participant a l\'enchere du lot 20 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-19 11:58:40', '2023-06-19 11:58:40', NULL, NULL, NULL, NULL, 96),
(164, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-19 12:01:52', '2023-06-19 12:01:52', NULL, NULL, NULL, NULL, NULL),
(165, 'Adan Participation  au salon voiture effectuer', 0, NULL, 108, '2023-06-19 12:02:19', '2023-06-19 12:02:19', NULL, NULL, NULL, NULL, NULL),
(166, 'Vous etiez participant a l\'enchere du lot 21 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-19 12:08:44', '2023-06-19 12:08:44', NULL, NULL, NULL, NULL, 96),
(167, 'Vous etiez participant a l\'enchere du lot 21 de voiture Malheuresement le quota de 2 personnes n\'a pas éte atteint la retenu de 15000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-19 12:08:44', '2023-06-19 12:08:44', NULL, NULL, NULL, NULL, 108),
(168, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-19 12:19:38', '2023-06-19 12:19:38', NULL, NULL, NULL, NULL, NULL),
(169, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-19 12:23:47', '2023-06-19 12:23:47', NULL, NULL, NULL, NULL, NULL),
(170, 'Avatar Le Grand Participation  au salon voiture effectuer', 0, NULL, 96, '2023-06-19 12:57:40', '2023-06-19 12:57:40', NULL, NULL, NULL, NULL, NULL),
(171, 'Vous etiez participant a l\'enchere du lot 22 de voiture Malheuresement le quota de 1 personnes n\'a pas éte atteint la retenu de 30000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-20 11:21:36', '2023-06-20 11:21:36', NULL, NULL, NULL, NULL, 96),
(172, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-20 11:24:20', '2023-06-20 11:24:20', NULL, NULL, NULL, NULL, NULL),
(173, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-20 11:25:48', '2023-06-20 11:25:48', NULL, NULL, NULL, NULL, NULL),
(174, 'Vous etiez participant a l\'enchere du lot 24 de voiture Malheuresement le quota de 1 personnes n\'a pas éte atteint la retenu de 30000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-20 11:28:20', '2023-06-20 11:28:20', NULL, NULL, NULL, NULL, 96),
(175, 'Vous etiez participant a l\'enchere du lot 25 de voiture Malheuresement le quota de 1 personnes n\'a pas éte atteint la retenu de 30000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-20 11:28:20', '2023-06-20 11:28:20', NULL, NULL, NULL, NULL, 96),
(176, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-20 11:50:43', '2023-06-20 11:50:43', NULL, NULL, NULL, NULL, NULL),
(177, 'Vous etiez participant a l\'enchere du lot 26 de voiture Malheuresement le quota de 1 personnes n\'a pas éte atteint la retenu de 30000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-20 12:31:24', '2023-06-20 12:31:24', NULL, NULL, NULL, NULL, 96),
(178, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-20 12:32:30', '2023-06-20 12:32:30', NULL, NULL, NULL, NULL, NULL),
(179, 'Vous etiez participant a l\'enchere du lot 27 de voiture Malheuresement le quota de 1 personnes n\'a pas éte atteint la retenu de 30000 bibs a été retourné sur votre compte.', 0, NULL, NULL, '2023-06-20 12:36:23', '2023-06-20 12:36:23', NULL, NULL, NULL, NULL, 96),
(180, 'Avatar Le Grand Participation  au salon  effectuer', 0, NULL, 96, '2023-06-20 12:52:07', '2023-06-20 12:52:07', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `paquet_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `roi` int(11) NOT NULL,
  `foudre` int(11) NOT NULL,
  `click` int(11) NOT NULL,
  `bouclier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `paquet_id`, `created_at`, `updated_at`, `user_id`, `roi`, `foudre`, `click`, `bouclier`) VALUES
(26, 1, '2023-03-31 12:45:18', '2023-03-31 20:45:18', 98, 18, 18, 19, 14),
(27, 2, '2023-03-31 12:14:34', '2023-03-31 20:14:34', 98, 0, 0, 0, 0),
(28, 3, '2023-03-31 12:14:34', '2023-03-31 20:14:34', 98, 0, 0, 0, 0),
(29, 4, '2023-03-31 19:16:30', '2023-03-31 19:16:30', 98, 0, 0, 0, 0),
(30, 5, '2023-03-31 12:14:34', '2023-03-31 20:14:34', 98, 0, 0, 0, 0),
(31, 6, '2023-03-31 12:14:34', '2023-03-31 20:14:34', 98, 0, 0, 0, 0),
(62, 1, '2023-05-18 15:18:35', '2023-05-18 23:18:35', 99, 0, 1, 1, 1),
(63, 2, '2023-05-15 17:37:47', '2023-05-15 17:37:47', 99, 0, 0, 0, 0),
(64, 3, '2023-05-15 17:37:47', '2023-05-15 17:37:47', 99, 0, 0, 0, 0),
(65, 4, '2023-05-15 17:37:47', '2023-05-15 17:37:47', 99, 0, 0, 0, 0),
(66, 5, '2023-05-15 17:37:47', '2023-05-15 17:37:47', 99, 0, 0, 0, 0),
(67, 6, '2023-05-15 17:37:47', '2023-05-15 17:37:47', 99, 0, 0, 0, 0),
(68, 1, '2023-05-21 06:00:53', '2023-05-21 14:00:53', 100, 1, 0, 0, 0),
(69, 2, '2023-05-21 12:58:37', '2023-05-21 12:58:37', 100, 0, 0, 0, 0),
(70, 3, '2023-05-21 12:58:37', '2023-05-21 12:58:37', 100, 0, 0, 0, 0),
(71, 4, '2023-05-21 12:58:37', '2023-05-21 12:58:37', 100, 0, 0, 0, 0),
(72, 5, '2023-05-21 12:58:37', '2023-05-21 12:58:37', 100, 0, 0, 0, 0),
(73, 6, '2023-05-21 12:58:37', '2023-05-21 12:58:37', 100, 0, 0, 0, 0),
(74, 1, '2023-05-21 09:54:24', '2023-05-21 09:54:24', 101, 0, 0, 0, 0),
(75, 2, '2023-05-21 09:54:24', '2023-05-21 09:54:24', 101, 0, 0, 0, 0),
(76, 3, '2023-05-21 09:54:24', '2023-05-21 09:54:24', 101, 0, 0, 0, 0),
(77, 4, '2023-05-21 09:54:24', '2023-05-21 09:54:24', 101, 0, 0, 0, 0),
(78, 5, '2023-05-21 09:54:24', '2023-05-21 09:54:24', 101, 0, 0, 0, 0),
(79, 6, '2023-05-21 09:54:24', '2023-05-21 09:54:24', 101, 0, 0, 0, 0),
(80, 1, '2023-05-21 17:34:43', '2023-05-21 17:34:43', 102, 0, 0, 0, 0),
(81, 2, '2023-05-21 17:34:43', '2023-05-21 17:34:43', 102, 0, 0, 0, 0),
(82, 3, '2023-05-21 17:34:43', '2023-05-21 17:34:43', 102, 0, 0, 0, 0),
(83, 4, '2023-05-21 17:34:43', '2023-05-21 17:34:43', 102, 0, 0, 0, 0),
(84, 5, '2023-05-21 17:34:43', '2023-05-21 17:34:43', 102, 0, 0, 0, 0),
(85, 6, '2023-05-21 17:34:43', '2023-05-21 17:34:43', 102, 0, 0, 0, 0),
(86, 1, '2023-06-06 11:15:00', '2023-06-06 11:15:00', 103, 0, 0, 0, 1),
(87, 2, '2023-05-22 13:56:49', '2023-05-22 13:56:49', 103, 0, 0, 0, 0),
(88, 3, '2023-05-22 13:56:49', '2023-05-22 13:56:49', 103, 0, 0, 0, 0),
(89, 4, '2023-05-22 13:56:49', '2023-05-22 13:56:49', 103, 0, 0, 0, 0),
(90, 5, '2023-05-22 13:56:49', '2023-05-22 13:56:49', 103, 0, 0, 0, 0),
(91, 6, '2023-05-22 13:56:49', '2023-05-22 13:56:49', 103, 0, 0, 0, 0),
(92, 1, '2023-05-22 16:04:53', '2023-05-22 16:04:53', 104, 0, 0, 0, 0),
(93, 2, '2023-05-22 16:04:53', '2023-05-22 16:04:53', 104, 0, 0, 0, 0),
(94, 3, '2023-05-22 16:04:53', '2023-05-22 16:04:53', 104, 0, 0, 0, 0),
(95, 4, '2023-05-22 16:04:53', '2023-05-22 16:04:53', 104, 0, 0, 0, 0),
(96, 5, '2023-05-22 16:04:53', '2023-05-22 16:04:53', 104, 0, 0, 0, 0),
(97, 6, '2023-05-22 16:04:53', '2023-05-22 16:04:53', 104, 0, 0, 0, 0),
(98, 1, '2023-05-24 15:30:13', '2023-05-24 15:30:13', 105, 0, 0, 0, 0),
(99, 2, '2023-05-24 15:30:13', '2023-05-24 15:30:13', 105, 0, 0, 0, 0),
(100, 3, '2023-05-24 15:30:13', '2023-05-24 15:30:13', 105, 0, 0, 0, 0),
(101, 4, '2023-05-24 15:30:13', '2023-05-24 15:30:13', 105, 0, 0, 0, 0),
(102, 5, '2023-05-24 15:30:13', '2023-05-24 15:30:13', 105, 0, 0, 0, 0),
(103, 6, '2023-05-24 15:30:13', '2023-05-24 15:30:13', 105, 0, 0, 0, 0),
(104, 1, '2023-05-29 12:25:57', '2023-05-29 12:25:57', 106, 0, 0, 0, 0),
(105, 2, '2023-05-29 12:25:57', '2023-05-29 12:25:57', 106, 0, 0, 0, 0),
(106, 3, '2023-05-29 12:25:57', '2023-05-29 12:25:57', 106, 0, 0, 0, 0),
(107, 4, '2023-05-29 12:25:57', '2023-05-29 12:25:57', 106, 0, 0, 0, 0),
(108, 5, '2023-05-29 12:25:57', '2023-05-29 12:25:57', 106, 0, 0, 0, 0),
(109, 6, '2023-05-29 12:25:57', '2023-05-29 12:25:57', 106, 0, 0, 0, 0),
(110, 1, '2023-06-02 13:32:59', '2023-06-02 13:32:59', 96, 1, 0, 1, 0),
(111, 1, '2023-06-13 10:18:42', '2023-06-13 10:18:42', 77, 0, 0, 0, 1),
(112, 1, '2023-06-13 15:51:16', '2023-06-13 15:51:16', 107, 0, 0, 0, 0),
(113, 2, '2023-06-13 15:51:16', '2023-06-13 15:51:16', 107, 0, 0, 0, 0),
(114, 3, '2023-06-13 15:51:16', '2023-06-13 15:51:16', 107, 0, 0, 0, 0),
(115, 4, '2023-06-13 15:51:16', '2023-06-13 15:51:16', 107, 0, 0, 0, 0),
(116, 5, '2023-06-13 15:51:16', '2023-06-13 15:51:16', 107, 0, 0, 0, 0),
(117, 6, '2023-06-13 15:51:16', '2023-06-13 15:51:16', 107, 0, 0, 0, 0),
(118, 1, '2023-06-13 22:59:37', '2023-06-13 22:59:37', 108, 0, 0, 0, 0),
(119, 2, '2023-06-13 22:59:37', '2023-06-13 22:59:37', 108, 0, 0, 0, 0),
(120, 3, '2023-06-19 13:25:23', '2023-06-19 13:25:23', 108, 0, 0, 0, 0),
(121, 4, '2023-06-13 22:59:37', '2023-06-13 22:59:37', 108, 0, 0, 0, 0),
(122, 5, '2023-06-13 22:59:37', '2023-06-13 22:59:37', 108, 0, 0, 0, 0),
(123, 6, '2023-06-13 22:59:37', '2023-06-13 22:59:37', 108, 0, 0, 0, 0),
(124, 2, '2023-06-14 14:29:43', '2023-06-14 14:29:43', 96, 0, 1, 0, 0),
(125, 0, '2023-06-19 13:07:40', '2023-06-19 13:07:40', 96, 0, 2, 0, 0),
(126, 3, '2023-06-19 13:26:48', '2023-06-19 13:26:48', 96, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
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
-- Table structure for table `paquets`
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
-- Dumping data for table `paquets`
--

INSERT INTO `paquets` (`id`, `libelle`, `nombre_enchere`, `duree`, `treve`, `guerre`, `prix`, `prix_intervalle`, `min`, `click`, `roi`, `foudre`, `bouclier`, `max`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'Simba', 0, 55, 5, 20, 0, '0 - 200', 1, 5, '00:05:05.05', '00:00:00.00', '00:00:00.00', 200, '2022-02-15 03:45:20', '2022-03-10 03:11:52', NULL, 1, NULL, 3, 1),
(2, 'Benda', 0, 120, 6, 21, 0, '201 - 500', 201, 5, '00:04:10.88', '00:00:00.00', '00:00:00.00', 500, '2022-02-15 03:45:44', '2022-08-11 00:38:43', NULL, 40, NULL, 3, 1),
(3, 'Turbo', 0, 160, 5, 25, 0, '501 - 1500', 501, 10, '00:01:02.25', '00:00:00.00', '00:00:00.00', 1000, '2022-02-15 05:32:59', '2022-03-12 07:34:53', NULL, 1, NULL, 3, 1),
(4, 'Beton', 0, 180, 6, 26, 0, '1501 - 2500', 1001, 15, '00:02:04.88', '00:00:00.00', '00:00:00.00', 2000, '2022-02-15 05:33:28', '2022-03-10 02:59:19', NULL, 1, NULL, 3, 1),
(5, 'Bulldozer', 0, 200, 10, 25, 0, '2501 - 5000', 2001, 20, '00:08:00.75', '00:00:00.00', '00:00:00.00', 5000, '2022-02-15 05:34:14', '2022-03-10 02:59:19', NULL, 1, NULL, 3, 1),
(6, 'Sukisa', 0, 250, 10, 45, 0, '5001 - 10000', 5001, 25, '00:04:00.22', '00:00:00.00', '00:00:00.00', 10000, '2022-02-15 05:44:00', '2022-08-11 00:40:21', NULL, 1, NULL, 3, 40);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('lem.musungafd@gmail.com', '$2y$10$aG6P2VIS9aVPmne.CcptQ.BeSJZ6zGrK2rph6XIsULBMDm.y2lSuq', '2022-04-28 03:59:15'),
('pedro@congobid.com', '$2y$10$i6eqnY3Fe0JZwYjE.OFWre1yuXUEBZ6MIER0bbTlYpleurybkAy7W', '2022-05-05 09:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `pays`
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
-- Table structure for table `permissions`
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
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `pivot_bideur_encheres`
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
-- Dumping data for table `pivot_bideur_encheres`
--

INSERT INTO `pivot_bideur_encheres` (`id`, `valeur`, `click_seconde`, `roi`, `foudre`, `clicks`, `bouclier`, `favoris`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `enchere_id`, `time_bid_auto`, `automatique`, `temps_bid_auto`, `time_bouclier`, `time_roi`, `time_foudre`) VALUES
(165, 1, 0, 0, 0, 0, 0, 0, '2023-06-13 15:51:28', '2023-06-13 16:00:46', NULL, NULL, NULL, 3, 107, 40, NULL, 0, 0, NULL, NULL, NULL),
(166, 0, 0, 0, 0, 0, 0, 0, '2023-06-13 22:59:54', '2023-06-13 22:59:54', NULL, NULL, NULL, 3, 108, 40, NULL, 0, 0, NULL, NULL, NULL),
(167, 0, 0, 0, 0, 0, 0, 0, '2023-06-13 23:06:42', '2023-06-13 23:06:42', NULL, NULL, NULL, 3, 108, 38, NULL, 0, 0, NULL, NULL, NULL),
(168, 43, 0, 0, 0, 0, 0, 0, '2023-06-14 14:11:50', '2023-06-14 14:32:57', NULL, NULL, NULL, 3, 96, 39, NULL, 0, 0, NULL, NULL, 0),
(169, 53, 0, 0, 0, 0, 0, 0, '2023-06-15 10:38:31', '2023-06-16 10:39:01', NULL, NULL, NULL, 3, 96, 37, NULL, 0, 0, NULL, NULL, NULL),
(170, 0, 0, 0, 0, 0, 0, 0, '2023-06-15 12:03:10', '2023-06-15 12:03:10', NULL, NULL, NULL, 3, 96, 39, NULL, 0, 0, NULL, NULL, NULL),
(171, 0, 0, 0, 0, 0, 0, 0, '2023-06-15 13:41:30', '2023-06-15 13:41:30', NULL, NULL, NULL, 3, 108, 38, NULL, 0, 0, NULL, NULL, NULL),
(172, 0, 0, 0, 0, 0, 0, 0, '2023-06-16 12:55:13', '2023-06-16 12:55:13', NULL, NULL, NULL, 3, 96, 40, NULL, 0, 0, NULL, NULL, NULL),
(173, 0, 0, 0, 0, 0, 0, 0, '2023-06-16 13:42:25', '2023-06-16 13:42:25', NULL, NULL, NULL, 3, 96, 40, NULL, 0, 0, NULL, NULL, NULL),
(174, 0, 0, 0, 0, 0, 0, 0, '2023-06-16 15:09:14', '2023-06-16 15:09:14', NULL, NULL, NULL, 3, 108, 40, NULL, 0, 0, NULL, NULL, NULL),
(175, 0, 0, 0, 0, 0, 0, 0, '2023-06-16 15:19:04', '2023-06-16 15:19:04', NULL, NULL, NULL, 3, 96, 40, NULL, 0, 0, NULL, NULL, NULL),
(176, 0, 0, 0, 0, 0, 0, 0, '2023-06-16 15:54:43', '2023-06-16 15:54:43', NULL, NULL, NULL, 3, 96, 40, NULL, 0, 0, NULL, NULL, NULL),
(177, 0, 0, 0, 0, 0, 0, 0, '2023-06-16 16:55:16', '2023-06-16 16:55:16', NULL, NULL, NULL, 3, 96, 40, NULL, 0, 0, NULL, NULL, NULL),
(178, 0, 0, 0, 0, 0, 0, 0, '2023-06-16 16:55:33', '2023-06-16 16:55:33', NULL, NULL, NULL, 3, 108, 40, NULL, 0, 0, NULL, NULL, NULL),
(179, 0, 0, 0, 0, 0, 0, 0, '2023-06-17 23:25:38', '2023-06-17 23:25:38', NULL, NULL, NULL, 3, 96, 40, NULL, 0, 0, NULL, NULL, NULL),
(180, 0, 0, 0, 0, 0, 0, 0, '2023-06-17 23:35:04', '2023-06-17 23:35:04', NULL, NULL, NULL, 3, 96, 40, NULL, 0, 0, NULL, NULL, NULL),
(181, 0, 0, 0, 0, 0, 0, 0, '2023-06-17 23:46:20', '2023-06-17 23:46:20', NULL, NULL, NULL, 3, 96, 40, NULL, 0, 0, NULL, NULL, NULL),
(182, 0, 0, 0, 0, 0, 0, 0, '2023-06-17 23:48:02', '2023-06-17 23:48:02', NULL, NULL, NULL, 3, 108, 40, NULL, 0, 0, NULL, NULL, NULL),
(185, 0, 0, 0, 0, 0, 0, 0, '2023-06-18 06:40:52', '2023-06-18 06:40:52', NULL, NULL, NULL, 3, 96, 48, NULL, 0, 0, NULL, NULL, NULL),
(186, 0, 0, 0, 0, 0, 0, 0, '2023-06-18 06:43:49', '2023-06-18 06:43:49', NULL, NULL, NULL, 3, 96, 48, NULL, 0, 0, NULL, NULL, NULL),
(192, 0, 0, 0, 0, 0, 0, 0, '2023-06-18 06:50:49', '2023-06-18 06:50:49', NULL, NULL, NULL, 3, 96, 49, NULL, 0, 0, NULL, NULL, NULL),
(193, 0, 0, 0, 0, 0, 0, 0, '2023-06-18 06:52:15', '2023-06-18 06:52:15', NULL, NULL, NULL, 3, 96, 49, NULL, 0, 0, NULL, NULL, NULL),
(205, 0, 0, 0, 0, 0, 0, 0, '2023-06-19 05:12:36', '2023-06-19 05:12:36', NULL, NULL, NULL, 3, 96, 51, NULL, 0, 0, NULL, NULL, NULL),
(206, 0, 0, 0, 0, 0, 0, 0, '2023-06-19 05:14:03', '2023-06-19 05:14:03', NULL, NULL, NULL, 3, 96, 51, NULL, 0, 0, NULL, NULL, NULL),
(207, 0, 0, 0, 0, 0, 0, 0, '2023-06-19 10:04:44', '2023-06-19 10:04:44', NULL, NULL, NULL, 3, 96, 52, NULL, 0, 0, NULL, NULL, NULL),
(208, 0, 0, 0, 0, 0, 0, 0, '2023-06-19 10:04:44', '2023-06-19 10:04:44', NULL, NULL, NULL, 3, 96, 53, NULL, 0, 0, NULL, NULL, NULL),
(209, 0, 0, 0, 0, 0, 0, 0, '2023-06-19 10:06:15', '2023-06-19 10:06:15', NULL, NULL, NULL, 3, 108, 52, NULL, 0, 0, NULL, NULL, NULL),
(210, 0, 0, 0, 0, 0, 0, 0, '2023-06-19 11:34:21', '2023-06-19 11:34:21', NULL, NULL, NULL, 3, 108, 50, NULL, 0, 0, NULL, NULL, NULL),
(211, 0, 0, 0, 0, 0, 0, 0, '2023-06-19 11:34:59', '2023-06-19 11:34:59', NULL, NULL, NULL, 3, 96, 50, NULL, 0, 0, NULL, NULL, NULL),
(212, 0, 0, 0, 0, 0, 0, 0, '2023-06-19 11:53:27', '2023-06-19 11:53:27', NULL, NULL, NULL, 3, 108, 54, NULL, 0, 0, NULL, NULL, NULL),
(213, 0, 0, 0, 0, 0, 0, 0, '2023-06-19 11:53:58', '2023-06-19 11:53:58', NULL, NULL, NULL, 3, 96, 54, NULL, 0, 0, NULL, NULL, NULL),
(214, 0, 0, 0, 0, 0, 0, 0, '2023-06-19 12:01:52', '2023-06-19 12:01:52', NULL, NULL, NULL, 3, 96, 55, NULL, 0, 0, NULL, NULL, NULL),
(215, 0, 0, 0, 0, 0, 0, 0, '2023-06-19 12:02:19', '2023-06-19 12:02:19', NULL, NULL, NULL, 3, 108, 55, NULL, 0, 0, NULL, NULL, NULL),
(218, 175, 0, 0, 0, 0, 0, 0, '2023-06-19 12:57:40', '2023-06-19 13:28:54', NULL, NULL, NULL, 3, 96, 56, NULL, 0, 0, NULL, NULL, 115),
(219, 45, 0, 0, 0, 0, 0, 0, '2023-06-19 13:09:26', '2023-06-19 13:26:48', NULL, NULL, NULL, 3, 108, 56, NULL, 0, 0, NULL, NULL, 42),
(220, 0, 0, 0, 0, 0, 0, 0, '2023-06-20 11:24:20', '2023-06-20 11:24:20', NULL, NULL, NULL, 3, 96, 58, NULL, 0, 0, NULL, NULL, NULL),
(221, 0, 0, 0, 0, 0, 0, 0, '2023-06-20 11:25:48', '2023-06-20 11:25:48', NULL, NULL, NULL, 3, 96, 59, NULL, 0, 0, NULL, NULL, NULL),
(222, 0, 0, 0, 0, 0, 0, 0, '2023-06-20 11:50:43', '2023-06-20 11:50:43', NULL, NULL, NULL, 3, 96, 60, NULL, 0, 0, NULL, NULL, NULL),
(223, 0, 0, 0, 0, 0, 0, 0, '2023-06-20 12:32:30', '2023-06-20 12:32:30', NULL, NULL, NULL, 3, 96, 61, NULL, 0, 0, NULL, NULL, NULL),
(224, 1, 0, 0, 0, 0, 0, 0, '2023-06-20 12:52:07', '2023-06-20 13:30:57', NULL, NULL, NULL, 3, 96, 62, NULL, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pivot_bideur_paquets`
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
-- Dumping data for table `pivot_bideur_paquets`
--

INSERT INTO `pivot_bideur_paquets` (`id`, `state`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `paquet_id`) VALUES
(0, 1, NULL, NULL, NULL, NULL, NULL, 4, 11, 1),
(1, 1, NULL, NULL, NULL, NULL, NULL, 4, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pivot_clients_salons`
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

--
-- Dumping data for table `pivot_clients_salons`
--

INSERT INTO `pivot_clients_salons` (`id`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `salon_id`, `enchere_id`, `valeur`, `roi`, `foudre`, `clicks`, `bouclier`, `time_bouclier`, `time_roi`, `time_foudre`, `time_bid_auto`, `montant`, `creator`) VALUES
(58, '2023-06-20 12:52:07', '2023-06-20 12:52:07', NULL, NULL, NULL, 3, 96, 28, 62, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 30000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `politiques`
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
-- Dumping data for table `politiques`
--

INSERT INTO `politiques` (`id`, `titre`, `content`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'dd', 'dad', '2022-03-24 00:43:51', '2022-03-24 00:43:51', NULL, NULL, NULL, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
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
-- Table structure for table `promotions`
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
-- Table structure for table `rois`
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
-- Dumping data for table `rois`
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'Root', 'Root', '2022-02-15 02:45:03', '2022-02-15 02:45:03'),
(2, 'SuperAdmin', 'Super Administrateur', '2022-02-15 02:50:18', '2022-02-15 02:50:18'),
(3, 'Admin', 'Administrateur', '2022-02-15 02:52:48', '2022-02-15 02:52:48'),
(4, 'SuperUser', 'Super Utilisateur', '2022-02-15 02:55:25', '2022-02-15 02:55:25'),
(5, 'User', 'Utilisateur', '2022-02-15 02:59:14', '2022-02-15 02:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `salons`
--

CREATE TABLE `salons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `limite` int(11) DEFAULT '20',
  `debut_enchere` datetime DEFAULT NULL,
  `enchere_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `state` int(11) NOT NULL DEFAULT '0',
  `montant` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salons`
--

INSERT INTO `salons` (`id`, `libelle`, `limite`, `debut_enchere`, `enchere_id`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `article_id`, `user_id`, `state`, `montant`) VALUES
(28, 'Salon #59', 1, '2023-06-20 13:53:00', 62, '2023-06-20 12:52:07', '2023-06-20 12:52:07', NULL, NULL, NULL, 3, 59, 96, 1, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `salon_likes`
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
-- Dumping data for table `salon_likes`
--

INSERT INTO `salon_likes` (`id`, `user_id`, `salon_id`, `favoris`, `enchere_id`, `updated_at`, `created_at`) VALUES
(1, 54, 3, 1, 3, '2022-08-30 05:08:39', '2022-08-29 21:51:08'),
(2, 54, 2, 0, 2, '2022-08-30 05:08:40', '2022-08-29 22:24:42');

-- --------------------------------------------------------

--
-- Table structure for table `sanctions`
--

CREATE TABLE `sanctions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paquet_id` int(11) NOT NULL,
  `enchere_id` int(50) NOT NULL,
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
-- Dumping data for table `sanctions`
--

INSERT INTO `sanctions` (`id`, `paquet_id`, `enchere_id`, `santance`, `duree`, `tous`, `suspendu_by`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `statut`, `salon_id`, `user_id`) VALUES
(306, 1, 38, 'foudre', '00:00:00', 0, 77, '2023-06-13 10:18:42', '2023-06-13 10:18:42', NULL, NULL, NULL, NULL, 1, NULL, 103),
(307, 1, 38, 'foudre', '00:00:00', 0, 103, '2023-06-13 10:18:42', '2023-06-13 10:18:42', NULL, NULL, NULL, NULL, 1, NULL, 78),
(308, 1, 38, 'foudre', '00:00:00', 0, 77, '2023-06-13 10:18:42', '2023-06-13 10:18:42', NULL, NULL, NULL, NULL, 1, NULL, 78),
(309, 3, 56, 'foudre', '00:00:00', 0, 108, '2023-06-19 13:25:23', '2023-06-19 13:25:55', '2023-06-19 13:25:55', NULL, NULL, NULL, 1, NULL, 96),
(310, 3, 56, 'foudre', '00:00:00', 0, 96, '2023-06-19 13:26:48', '2023-06-19 13:26:48', NULL, NULL, NULL, NULL, 1, NULL, 108);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
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
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ntkdKb1bPhodxmahoGGrnskPI5y4Y4XtiQsvjC67', 96, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidDFFZ1BlZDQ4bThneFBnRHMwd0hEWVN2UmVNREVpUTR5SGl5S3JuOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWwvdXBkYXRlL1Byb0RqLzk2Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6OTY7czo3OiJjb3VudGVyIjtpOjE7fQ==', 1687268193);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
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
-- Table structure for table `sexes`
--

CREATE TABLE `sexes` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sexes`
--

INSERT INTO `sexes` (`id`, `nom`) VALUES
(1, 'masculin'),
(2, 'feminin'),
(3, 'personnalisé');

-- --------------------------------------------------------

--
-- Table structure for table `sources`
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
-- Table structure for table `statuts`
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
-- Dumping data for table `statuts`
--

INSERT INTO `statuts` (`id`, `libelle`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`) VALUES
(1, 'En attente', '2022-02-15 03:05:36', '2022-02-15 03:05:36', NULL, NULL, NULL),
(2, 'Suspendu', '2022-02-15 03:13:36', '2022-02-15 03:13:36', NULL, NULL, NULL),
(3, 'Validé', '2022-02-15 03:25:52', '2022-02-15 03:25:52', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `translations`
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
-- Table structure for table `types_comptes`
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
-- Table structure for table `types_coupons`
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
-- Table structure for table `users`
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
  `etat_civil` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pointure` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `nom`, `prenom`, `username`, `provider_id`, `telephone`, `sexe`, `email`, `avatar`, `date_naissance`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `settings`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_conneted_at`, `last_seen`, `etat_civil`, `pointure`) VALUES
(77, 1, 'Pro', NULL, 'Avatar', NULL, '0811246071', '', NULL, 'jeunesse.png', NULL, NULL, '$2y$10$MPI/Pc.zAZ5Hyrp13Cc9dOOA6.OPeRopJ14/w0Lk5dn2nofNe.JWe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-04 14:25:27', '2023-06-18 10:55:52', NULL, NULL, NULL, 3, NULL, '2023-06-18 10:55:52', NULL, NULL),
(78, 5, 'Ka', NULL, 'Lka', NULL, '0898008855', '', NULL, 'logo.jpg', NULL, NULL, '$2y$10$MPI/Pc.zAZ5Hyrp13Cc9dOOA6.OPeRopJ14/w0Lk5dn2nofNe.JWe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-04 14:33:19', '2023-05-21 17:48:50', NULL, NULL, NULL, 3, '2023-05-21 14:15:40', '2023-05-21 17:48:50', NULL, NULL),
(79, 5, 'sc', NULL, 'avatar24', NULL, '0814579179', '', NULL, '', NULL, NULL, '$2y$10$EmWNvzv.AsmjHPa9f4GPSei4VPRXwkebFVxq1fg8.11R1c7.SdYry', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-04 15:01:58', '2022-10-04 16:52:21', NULL, NULL, NULL, 3, '2022-10-04 15:01:59', '2022-10-04 16:52:21', NULL, NULL),
(80, 5, 'Musunga Alex', NULL, 'lmpro240598', NULL, '55555555547755', '', NULL, '', NULL, NULL, '$2y$10$V56jpedsjRH0ZnObsciPDe7DEDJZjFecKhWNH35sNoiyHNc6K5DS2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-05 14:42:24', '2022-10-05 16:37:26', NULL, NULL, NULL, 3, '2022-10-05 14:42:24', '2022-10-05 16:37:26', NULL, NULL),
(81, 5, 'Musunga Alex', NULL, 'avatar2405', NULL, '00000000000000', '', NULL, '', NULL, NULL, '$2y$10$OOvBa2ilueUVaf6pYldDge/ex2P9/fv5eF1MxqTGCOO81aVy2IZ3O', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-06 18:16:30', '2022-10-25 15:51:43', NULL, NULL, NULL, 3, '2022-10-06 18:16:32', '2022-10-25 15:51:43', NULL, NULL),
(82, 5, 'asf', NULL, 'lmpro24855', NULL, '11111285558535', '', NULL, '', NULL, NULL, '$2y$10$3TcfrEgtlOYWFb16xV0ahePQBjwYQVflc.7yYvNCMbWSmdDOIB9Gy', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-07 17:53:34', '2022-10-08 02:21:29', NULL, NULL, NULL, 3, '2022-10-07 17:53:35', '2022-10-08 02:21:29', NULL, NULL),
(83, 5, 'Masikini', NULL, 'Le destructeur 01', NULL, '0814119017', '', NULL, '3E883501-F4D8-421E-9B0F-222028C263E7.jpeg', NULL, NULL, '$2y$10$O/03kSIRO2JZWJcdAhm4TOyfbFOIhEsYJSZcYH1uxvsxXFZwNDVui', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-07 19:41:11', '2023-01-06 11:25:00', NULL, NULL, NULL, 3, NULL, '2023-01-06 11:25:00', NULL, NULL),
(84, 5, 'Pro', NULL, 'Ava', NULL, '081124579179', '', NULL, '', NULL, NULL, '$2y$10$Ihdce055UXLvpMmuQfA3HeKY3idZD.pgC63scjrYVoVfWDNe7EKV6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-07 19:50:18', '2022-10-07 20:33:47', NULL, NULL, NULL, 3, '2022-10-07 19:50:19', '2022-10-07 20:33:47', NULL, NULL),
(85, 5, 'Pro', NULL, 'Pro', NULL, '22222222222222', '', NULL, 'F4E_1345.JPG', NULL, NULL, '$2y$10$49CnaP1mUqu6ynKN6CTmk./rfE9lrxzdDUS.fl8ekBiSPJNpb/nsG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-08 20:14:37', '2023-01-31 23:19:30', NULL, NULL, NULL, 3, '2022-12-14 17:28:46', '2023-01-31 23:19:30', NULL, NULL),
(86, 5, 'Nzeza', NULL, 'Powerful', NULL, '0817045726', '', NULL, '', NULL, NULL, '$2y$10$Of7hid3APVUnOtIJPknqTeoVRbWQGr8l4J0CXGC70bZiUBZYf.Q82', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-12 13:17:55', '2022-10-21 09:51:12', NULL, NULL, NULL, 3, NULL, '2022-10-21 09:51:12', NULL, NULL),
(87, 5, 'Wema', NULL, 'Josewema', NULL, '+243822677755', '', NULL, '', NULL, NULL, '$2y$10$V1bD0eanlK9kNPNtr7LdA.3OwDU5CKDwRxXztbwxgnagpgLJlls.m', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-12 15:03:11', '2022-10-12 17:19:06', NULL, NULL, NULL, 3, '2022-10-12 15:03:12', '2022-10-12 17:19:06', NULL, NULL),
(88, 1, 'Pro', NULL, 'Ava2405', NULL, '08111249071', '', NULL, '', NULL, NULL, '$2y$10$0JaM2CDSaZHzdS0n99abg.Me98ZyhXkSYc4aoWR0u2X35K5hR8C8q', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-13 14:01:45', '2022-10-13 14:31:04', NULL, NULL, NULL, 3, '2022-10-13 14:01:46', '2022-10-13 14:31:04', NULL, NULL),
(89, 5, 'Musique', NULL, 'Av24', NULL, '081124307111', '', NULL, 'IMG_20200517_184942_323.jpg', NULL, NULL, '$2y$10$SInxGmHP9.vg2MpbnCPAsO34R97g2/Xv6oEF7S8FOKa/sdkSKjx7.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-14 19:03:30', '2022-10-14 19:35:01', NULL, NULL, NULL, 3, NULL, '2022-10-14 19:35:01', NULL, NULL),
(90, 5, 'Mwanza', NULL, 'Blood', NULL, '0822787442', '', NULL, '', NULL, NULL, '$2y$10$WDz/sNjnbIgAh3SNAQbe6e142v6uXPEIHrnhdSeLXhXs2w1KlbzQW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-20 23:21:21', '2022-10-21 09:49:03', NULL, NULL, NULL, 3, NULL, '2022-10-21 09:49:03', NULL, NULL),
(91, 5, 'Ngelesi', NULL, 'F60', NULL, '0991952443', '', NULL, '', NULL, NULL, '$2y$10$U4xATAJn.//OKxy3CZO19OTm3Xlln..pG7aR0wGHKdIq0ldzFlFVi', NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-20 23:24:42', '2022-10-21 09:49:57', NULL, NULL, NULL, 3, NULL, '2022-10-21 09:49:57', NULL, NULL),
(92, 5, 'Salue', NULL, 'Salue', NULL, '81123456789', '', NULL, '', NULL, NULL, '$2y$10$CVYgS35A1RyAMCi1aRFWzeu.asUPdKEoDKqkyh1a/VZ8nbCaItww6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-05 15:17:55', '2022-12-05 15:27:09', NULL, NULL, NULL, 3, '2022-12-05 15:17:56', '2022-12-05 15:27:09', NULL, NULL),
(93, 5, 'JHFDKGFJ', NULL, 'HD', NULL, '0999999991', '', NULL, '', NULL, NULL, '$2y$10$57c1fIgzvcvPPY.IR.hsWu1avhRqBVutQvGEszmn9gpIiO0yA5TOS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-09 15:09:32', '2022-12-09 16:25:14', NULL, NULL, NULL, 3, '2022-12-09 15:09:32', '2022-12-09 16:25:14', NULL, NULL),
(94, 5, 'G', NULL, 'O', NULL, '88888888888888', '', NULL, '', NULL, NULL, '$2y$10$AotGy9/SF5Q/2n5bxIQ3O.u6DqY5BXLGIW0PfBOyT6/MJgcJ8k6Rm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-13 16:04:11', '2022-12-14 13:25:28', NULL, NULL, NULL, 3, '2022-12-13 16:04:12', '2022-12-14 13:25:28', NULL, NULL),
(95, 5, 'Ntumba', NULL, 'Jayntmb', NULL, '990579420', '', NULL, '', NULL, NULL, '$2y$10$lPyZajwZb6utwRd0OWF5gu7NwEgJrJINk61eKmZnJnF7JAiGwKauC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-13 16:42:25', '2022-12-13 16:46:19', NULL, NULL, NULL, 3, '2022-12-13 16:42:26', '2022-12-13 16:46:19', NULL, NULL),
(96, 5, 'ProDj', NULL, 'Avatar Le Grand', NULL, '081124607999', '3', 'lem.musunga@gmail.comttt', 'lh.png', NULL, NULL, '$2y$10$0JaM2CDSaZHzdS0n99abg.Me98ZyhXkSYc4aoWR0u2X35K5hR8C8q', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-14 20:08:54', '2023-06-20 13:36:33', NULL, NULL, NULL, 3, '2023-06-19 04:54:08', '2023-06-20 13:36:33', NULL, NULL),
(98, 5, 'Pro', 'dsvfe', 'AvatarGuer', NULL, '081124607222', '', NULL, '1.png', NULL, NULL, '$2y$10$aCkkjn9.bEGuee0c01FQrOxiqNRHoQOz1iCm/8O7Zye1ywR247rHG', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-31 19:16:30', '2023-04-13 23:19:52', NULL, NULL, NULL, 3, NULL, '2023-04-13 23:19:52', NULL, NULL),
(99, 5, 'simeo', NULL, 'sim\'s', NULL, '0811246081', '', NULL, 'a.png', NULL, NULL, '$2y$10$b2SaZ7edBzvZGAki6Mn/B.dDQ2u5LGNCOjhvwlKE39xN26uye0yYG', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-15 17:37:47', '2023-05-19 23:59:17', NULL, NULL, NULL, 3, '2023-05-15 17:37:48', '2023-05-19 23:59:17', NULL, NULL),
(100, 5, 'bl', NULL, 'black', NULL, '0811245071', '', NULL, '', NULL, NULL, '$2y$10$DCCD.T5JHVOmQDAX8AiXc..QWVeQRxxYQURbiGh027rmmBluSVwuu', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-21 12:58:37', '2023-05-21 16:49:35', NULL, NULL, NULL, 3, '2023-05-21 12:58:38', '2023-05-21 16:49:35', NULL, NULL),
(101, 5, 'Crus', NULL, 'Crus', NULL, '0811247071', '', NULL, '', NULL, NULL, '$2y$10$ghqZDyUKVq./rsV1fRtO0O4HgaiT5vTPqsityLOEUtHHecNPA.ky6', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-21 09:54:23', '2023-05-21 15:46:45', NULL, NULL, NULL, 3, '2023-05-21 09:54:25', '2023-05-21 15:46:45', NULL, NULL),
(102, 1, 'cruz', NULL, 'cranne', NULL, '0811246073', '', NULL, '', NULL, NULL, '$2y$10$J5Em0H9F3H8OQEwLF9UM8ebj/IOKYKp7eCakWmncCigrXp697avd.', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-21 17:34:43', '2023-05-29 11:48:53', NULL, NULL, NULL, 3, '2023-05-21 17:34:44', '2023-05-29 11:48:53', NULL, NULL),
(103, 5, 'creuss', NULL, 'simeo', NULL, '08112460724', '', NULL, '', NULL, NULL, '$2y$10$tBWb2sZcx0xF2aLfaUuazeIsI/s9ydVKzlH5mVMFTLVtbZwd5Yqsm', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-22 13:56:49', '2023-06-06 16:11:58', NULL, NULL, NULL, 3, '2023-05-26 14:48:11', '2023-06-06 16:11:58', NULL, NULL),
(104, 5, 'kabengele', NULL, 'yas', NULL, '08112460725', '', NULL, '', NULL, NULL, '$2y$10$PF8A/wM9BjRT.bT/Fy2XMeAkARlDNZSQR4PQj/rmMur3ZiDPMK1fW', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-22 16:04:53', '2023-05-22 16:05:36', NULL, NULL, NULL, 3, '2023-05-22 16:04:54', '2023-05-22 16:05:36', NULL, NULL),
(105, 5, 'daniko', NULL, 'dan', NULL, '0811246072', '', NULL, '', NULL, NULL, '$2y$10$1UA2aB/eM8sgJdZdIZK01ufexEhAbKN0VV8.6nvU8.Y97zkYxp.KG', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-24 15:30:13', '2023-05-24 16:10:01', NULL, NULL, NULL, 3, '2023-05-24 15:30:14', '2023-05-24 16:10:01', NULL, NULL),
(106, 5, 'prode', NULL, 'prode', NULL, '0811246801', '', NULL, '', NULL, NULL, '$2y$10$tiZNnRbFZM501AmedbG7bOM1i5pMdZ03/t5v8iaP9rFVqZsX4CB3i', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-29 12:25:57', '2023-05-29 18:34:13', NULL, NULL, NULL, 3, '2023-05-29 12:25:57', '2023-05-29 18:34:13', NULL, NULL),
(107, 5, 'alex', NULL, 'ryanne', NULL, '0812446071', '', NULL, '', NULL, NULL, '$2y$10$wPxweZ4oosM3LFJ1P68hUeTD30SJsqAs/TbofAgKXinZBtaaCVUWm', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-13 15:51:16', '2023-06-13 16:32:33', NULL, NULL, NULL, 3, '2023-06-13 15:51:16', '2023-06-13 16:32:33', NULL, NULL),
(108, 5, 'mososo', NULL, 'Adan', NULL, '0811246080', '', NULL, '', NULL, NULL, '$2y$10$lZyNIx1LnfDpWR.ZgoR0vu/aSohQBlVjTC1XvvPl4Ejl9g8d61A82', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-13 22:59:37', '2023-06-19 14:53:38', NULL, NULL, NULL, 3, '2023-06-13 22:59:38', '2023-06-19 14:53:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrateurs`
--
ALTER TABLE `administrateurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `administrateurs_statut_id_foreign` (`statut_id`),
  ADD KEY `administrateurs_user_id_foreign` (`user_id`),
  ADD KEY `administrateurs_administrateur_id_foreign` (`administrateur_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_statut_id_foreign` (`statut_id`),
  ADD KEY `articles_user_id_foreign` (`user_id`),
  ADD KEY `articles_categorie_id_foreign` (`categorie_id`),
  ADD KEY `articles_paquet_id_foreign` (`paquet_id`);

--
-- Indexes for table `bideurs`
--
ALTER TABLE `bideurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bideurs_statut_id_foreign` (`statut_id`),
  ADD KEY `bideurs_user_id_foreign` (`user_id`),
  ADD KEY `bideurs_paquet_id_foreign` (`paquet_id`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bids_statut_id_foreign` (`statut_id`),
  ADD KEY `bids_user_id_foreign` (`user_id`);

--
-- Indexes for table `bloques`
--
ALTER TABLE `bloques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boucliers`
--
ALTER TABLE `boucliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_statut_id_foreign` (`statut_id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chats_statut_id_foreign` (`statut_id`),
  ADD KEY `chats_user_id_foreign` (`user_id`);

--
-- Indexes for table `chat_encheres`
--
ALTER TABLE `chat_encheres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clicks`
--
ALTER TABLE `clicks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `click_autos`
--
ALTER TABLE `click_autos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communiques`
--
ALTER TABLE `communiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `communiques_statut_id_foreign` (`statut_id`),
  ADD KEY `communiques_user_id_foreign` (`user_id`);

--
-- Indexes for table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comptes_statut_id_foreign` (`statut_id`),
  ADD KEY `comptes_user_id_foreign` (`user_id`),
  ADD KEY `comptes_types_compte_id_foreign` (`types_compte_id`);

--
-- Indexes for table `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupons_statut_id_foreign` (`statut_id`),
  ADD KEY `coupons_user_id_foreign` (`user_id`),
  ADD KEY `coupons_types_coupon_id_foreign` (`types_coupon_id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demandes`
--
ALTER TABLE `demandes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departements_statut_id_foreign` (`statut_id`),
  ADD KEY `departements_user_id_foreign` (`user_id`);

--
-- Indexes for table `encheregagners`
--
ALTER TABLE `encheregagners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `encheres`
--
ALTER TABLE `encheres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historiques`
--
ALTER TABLE `historiques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paquets`
--
ALTER TABLE `paquets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pivot_bideur_encheres`
--
ALTER TABLE `pivot_bideur_encheres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pivot_clients_salons`
--
ALTER TABLE `pivot_clients_salons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salons`
--
ALTER TABLE `salons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salon_likes`
--
ALTER TABLE `salon_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanctions`
--
ALTER TABLE `sanctions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sexes`
--
ALTER TABLE `sexes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrateurs`
--
ALTER TABLE `administrateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `bideurs`
--
ALTER TABLE `bideurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bloques`
--
ALTER TABLE `bloques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `boucliers`
--
ALTER TABLE `boucliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_encheres`
--
ALTER TABLE `chat_encheres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `clicks`
--
ALTER TABLE `clicks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `communiques`
--
ALTER TABLE `communiques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `demandes`
--
ALTER TABLE `demandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `encheregagners`
--
ALTER TABLE `encheregagners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3301;

--
-- AUTO_INCREMENT for table `encheres`
--
ALTER TABLE `encheres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `historiques`
--
ALTER TABLE `historiques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `pivot_bideur_encheres`
--
ALTER TABLE `pivot_bideur_encheres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `pivot_clients_salons`
--
ALTER TABLE `pivot_clients_salons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salons`
--
ALTER TABLE `salons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sanctions`
--
ALTER TABLE `sanctions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;

--
-- AUTO_INCREMENT for table `sexes`
--
ALTER TABLE `sexes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;
