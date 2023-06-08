-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 11 août 2022 à 17:18
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
  `interne` int(11) NOT NULL DEFAULT 1,
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
(3, '00001', 'rien', 1, '0', '2022-08-10 10:06:57', '2022-08-10 20:05:59', NULL, NULL, NULL, 3, 49, 40),
(5, '0000', 'rien', 0, '0', '2022-08-10 10:22:50', '2022-08-10 10:23:52', NULL, NULL, NULL, 3, 51, 40);

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promouvoir` int(11) NOT NULL DEFAULT 0,
  `code_produit` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `prix_marche` int(11) NOT NULL,
  `prix_min` int(11) NOT NULL,
  `prix_max` int(11) NOT NULL,
  `cout_livraison` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `infos_livraison` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `paquet_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `marque`, `promouvoir`, `code_produit`, `description`, `prix`, `prix_marche`, `prix_min`, `prix_max`, `cout_livraison`, `infos_livraison`, `meta_description`, `meta_keywords`, `limite_enchere_auto`, `credit_enchere_auto`, `quantite`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `categorie_id`, `paquet_id`) VALUES
(1, 'Ordinateur portable', 'HP', 1, '11030420220424014', 'Ordinateur portable\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quisquam aliquam ducimus! Accusamus commodi obcaecati consequuntur veritatis. Temporibus voluptatem, iste odit, at ea voluptatibus nemo adipisci obcaecati aspernatur aut debitis!\r\nDucimus atque iusto aut eligendi itaque voluptatem! Quos odio at, incidunt totam asperiores facilis ad et autem aut voluptatem! Excepturi aliquid eaque inventore totam repellat ut nisi laudantium soluta suscipit.\r\nIure beatae nulla iusto vero earum similique necessitatibus officiis magnam optio quis ratione eveniet quod a doloremque cum consequuntur, tempora, unde ipsa labore! Quam dolor fuga tempora labore quod modi?', 500, 1000, 333, 500, '0', 'dgzd', 'zndbzd', 'zndbzd', '0', '0', '10', '2022-02-28 14:40:28', '2022-04-03 03:24:01', NULL, NULL, NULL, 3, 1, 1, 1),
(2, 'PS5', 'Konami', 0, '11030420220421414', 'PS5\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quisquam aliquam ducimus! Accusamus commodi obcaecati consequuntur veritatis. Temporibus voluptatem, iste odit, at ea voluptatibus nemo adipisci obcaecati aspernatur aut debitis!\r\nDucimus atque iusto aut eligendi itaque voluptatem! Quos odio at, incidunt totam asperiores facilis ad et autem aut voluptatem! Excepturi aliquid eaque inventore totam repellat ut nisi laudantium soluta suscipit.\r\nIure beatae nulla iusto vero earum similique necessitatibus officiis magnam optio quis ratione eveniet quod a doloremque cum consequuntur, tempora, unde ipsa labore! Quam dolor fuga tempora labore quod modi?', 800, 1600, 533, 800, '0', 'zkfdz', 'eae', 'eae', '0', '0', '100', '2022-02-28 14:41:19', '2022-04-03 03:21:41', NULL, NULL, NULL, 3, 1, 1, 6),
(3, 'Ordinateur iod', 'zdzd', 1, '21030420220437014', 'Ordinateur iod\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quisquam aliquam ducimus! Accusamus commodi obcaecati consequuntur veritatis. Temporibus voluptatem, iste odit, at ea voluptatibus nemo adipisci obcaecati aspernatur aut debitis!\r\nDucimus atque iusto aut eligendi itaque voluptatem! Quos odio at, incidunt totam asperiores facilis ad et autem aut voluptatem! Excepturi aliquid eaque inventore totam repellat ut nisi laudantium soluta suscipit.\r\nIure beatae nulla iusto vero earum similique necessitatibus officiis magnam optio quis ratione eveniet quod a doloremque cum consequuntur, tempora, unde ipsa labore! Quam dolor fuga tempora labore quod modi?', 1000, 2000, 667, 1000, '0', 'djbqdj', 'zhdva', 'zhdva', '0', '0', '80', '2022-03-09 11:55:55', '2022-04-03 03:37:01', NULL, NULL, NULL, 3, 1, 2, 3),
(25, 'pc', 'hp', 0, '140080820222135364', 'juste un teste', 50, 1000, 333, 500, NULL, NULL, NULL, 'root', NULL, NULL, '5', '2022-08-09 04:35:36', '2022-08-09 10:40:43', '2022-08-09 10:40:43', 40, 40, 2, 40, 1, 1),
(26, 'iphone', 'samsumg', 0, '140090820220314395', 'iphone', 4, 450, 150, 225, NULL, NULL, NULL, 'root', NULL, NULL, '5', '2022-08-09 10:14:39', '2022-08-09 10:40:38', '2022-08-09 10:40:38', 40, 40, 2, 40, 1, 1),
(27, 'lunettes', 'samsumg', 0, '140110820221420158', 'lunnette de soleil', 20, 45, 15, 23, '0', NULL, 'root', 'root', '0', '0', '5', '2022-08-09 10:17:59', '2022-08-11 21:20:15', NULL, NULL, NULL, 3, 40, 1, 1),
(28, 'Ordinateurs', 'hp', 0, '140090820220328587', 'les pc en encherire', 20, 650, 217, 325, NULL, NULL, NULL, 'root', NULL, NULL, '50', '2022-08-09 10:28:58', '2022-08-09 10:40:20', NULL, 40, NULL, 3, 40, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `bideurs`
--

CREATE TABLE `bideurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `balance` int(11) NOT NULL,
  `nontransferable` int(11) NOT NULL DEFAULT 0,
  `bonus` int(11) NOT NULL DEFAULT 0,
  `roi` int(11) NOT NULL DEFAULT 0,
  `foudre` int(11) NOT NULL DEFAULT 0,
  `bouclier` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `paquet_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bideurs`
--

INSERT INTO `bideurs` (`id`, `balance`, `nontransferable`, `bonus`, `roi`, `foudre`, `bouclier`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `paquet_id`, `admin_id`) VALUES
(26, 60, 0, 1, 0, 0, 0, '2022-07-25 22:15:16', '2022-08-09 20:35:05', NULL, NULL, NULL, 3, 40, 1, NULL),
(27, 48, 0, 0, 0, 0, 0, '2022-07-25 22:20:15', '2022-07-27 09:36:28', NULL, NULL, NULL, 3, 41, 1, NULL),
(28, 60, 0, 0, 0, 0, 0, '2022-07-25 22:32:12', '2022-07-25 22:46:09', NULL, NULL, NULL, 3, 42, 1, NULL),
(29, 160, 0, 3, 0, 0, 0, '2022-07-26 06:53:39', '2022-07-27 18:24:17', NULL, NULL, NULL, 3, 43, 1, NULL),
(30, 2930, 0, 2, 0, 0, 0, '2022-07-26 07:08:38', '2022-07-26 09:22:01', NULL, NULL, NULL, 3, 44, 1, NULL),
(31, 750, 0, 0, 0, 0, 0, '2022-08-10 10:51:47', '2022-08-11 20:21:42', NULL, NULL, NULL, 3, 52, 1, 40),
(32, 40, 0, 0, 0, 0, 0, '2022-08-11 16:48:24', '2022-08-11 16:58:20', NULL, NULL, NULL, 3, 53, 1, 40);

-- --------------------------------------------------------

--
-- Structure de la table `bids`
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
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bids`
--

INSERT INTO `bids` (`id`, `quantite`, `valeur`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(3, 10, '1', '2022-03-09 13:28:45', '2022-08-10 17:36:47', NULL, 40, NULL, 3, 1),
(4, 80, '5', '2022-03-09 13:39:42', '2022-03-09 13:39:42', NULL, NULL, NULL, 3, 1);

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
  `temps_blocage` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `boucliers`
--

INSERT INTO `boucliers` (`id`, `paquet_id`, `benefice`, `prix`, `bid_prix`, `temps_blocage`) VALUES
(1, 1, 8, 30, 60, '00:08:00'),
(2, 2, 10, 45, 90, '00:10:00'),
(3, 3, 8, 40, 80, '00:10:00'),
(4, 4, 10, 45, 90, '00:08:00'),
(5, 5, 15, 50, 100, '00:15:00'),
(6, 6, 15, 70, 140, '00:15:00');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `categories` (`id`, `libelle`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'Informatique', '2022-02-28 14:39:13', '2022-08-10 17:14:41', '2022-03-09 11:19:35', 1, 1, 3, 40),
(2, 'Outils', '2022-02-28 14:42:01', '2022-03-09 16:08:46', '2022-03-09 16:08:46', 1, 1, 2, 1),
(5, 'Simba', '2022-03-09 15:32:35', '2022-08-10 17:15:10', NULL, NULL, NULL, 3, 40);

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

--
-- Déchargement des données de la table `chats`
--

INSERT INTO `chats` (`id`, `libelle`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `destinateur_id`) VALUES
(1, 'sfsf', '2022-03-10 16:10:22', '2022-03-10 16:10:22', NULL, NULL, NULL, 3, 11, NULL);

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `telephone`, `content`, `email`, `created_at`, `updated_at`) VALUES
(4, 'Claude kalondji', '243818086893', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dignissimos adipisci necessitatibus, illo, officiis sequi harum, quod explicabo ipsam aut odit natus voluptate atque! Dolore explicabo omnis nisi vitae deleniti.', 'lem.musunga@gmail.com', '2022-08-11 21:02:16', '2022-08-11 14:02:16');

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
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
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
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demandes`
--

INSERT INTO `demandes` (`id`, `admin`, `name`, `telephone`, `nombre`, `state`, `payement`, `description`, `created_at`, `updated_at`) VALUES
(2, 40, 'root', '0811246072', 50, 1, 'MPSA', 'bonjour', '2022-08-11 11:07:39', '2022-08-10 23:14:08');

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
  `code` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `payed_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `encheregagners`
--

INSERT INTO `encheregagners` (`id`, `user_id`, `enchere_id`, `valeur_click`, `code`, `state`, `payed_by`, `updated_at`, `created_at`) VALUES
(125, 43, 1, 1025, '10251ye', 1, 40, '2022-08-11 22:07:15', '2022-07-25 20:43:29');

-- --------------------------------------------------------

--
-- Structure de la table `encheres`
--

CREATE TABLE `encheres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `click` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `favoris` int(11) NOT NULL,
  `date_debut` timestamp NULL DEFAULT NULL,
  `heure_debut` time DEFAULT NULL,
  `state` int(11) NOT NULL DEFAULT 0,
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

INSERT INTO `encheres` (`id`, `click`, `favoris`, `date_debut`, `heure_debut`, `state`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `article_id`, `paquet_id`, `participant`, `munite`, `seconde`, `prix`, `prix_enchere`) VALUES
(1, '0', 25, '2022-07-27 08:55:00', '12:55:00', 0, '2022-02-28 14:40:28', '2022-08-11 21:21:33', NULL, NULL, NULL, 3, 1, 1, 1, 0, 0, 500, 53.3333),
(2, '0', 12, '2022-07-26 09:30:00', '23:01:00', 0, '2022-05-13 13:41:19', '2022-07-26 09:21:12', NULL, NULL, NULL, 3, 2, 6, 20, 13, 28, 800, 0),
(3, '0', 21, '2022-07-26 21:20:00', '14:49:00', 0, '2022-03-09 11:55:55', '2022-07-26 07:44:39', NULL, NULL, NULL, 3, 3, 3, 20, 10, 0, 1000, 0),
(10, '0', 1, '2022-08-10 06:34:00', NULL, 1, '2022-08-09 04:35:38', '2022-08-09 10:40:43', '2022-08-09 10:40:43', 40, 40, 2, 25, 1, NULL, 14, 34, NULL, NULL),
(11, '0', 0, '2022-08-09 20:32:00', NULL, 0, '2022-08-09 10:14:39', '2022-08-09 10:40:38', '2022-08-09 10:40:38', 40, 40, 2, 26, 1, NULL, 22, 16, NULL, NULL),
(12, '0', 0, '2022-08-12 02:19:00', NULL, 0, '2022-08-09 10:17:59', '2022-08-11 21:20:17', NULL, NULL, NULL, 3, 27, 1, NULL, 22, 17, NULL, NULL),
(13, '0', 1, '2022-08-11 03:28:00', NULL, 0, '2022-08-09 10:28:58', '2022-08-09 10:40:20', NULL, 40, NULL, 3, 28, 1, NULL, 20, 28, NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(117, 40, 1, 13, '2022-08-09 03:30:36', '2022-08-09 03:30:36');

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
(1, 'adad', 1, 0, '2022-03-10 15:50:19', '2022-03-10 15:50:19', NULL, NULL, NULL, 3, 11, 1, 1);

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
  `statut_id` bigint(20) UNSIGNED NOT NULL DEFAULT 3,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `historiques`
--

INSERT INTO `historiques` (`id`, `action`, `type`, `destination_id`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'Enregistrement d\'un article', 5, 11, '2022-08-08 03:42:20', '2022-08-08 03:42:20', NULL, NULL, NULL, 3, 40),
(2, 'Suppression d\'un article', 5, 5, '2022-08-08 03:51:50', '2022-08-08 03:51:50', NULL, NULL, NULL, 3, 40),
(3, 'Suppression d\'un article', 5, 9, '2022-08-08 03:52:02', '2022-08-08 03:52:02', NULL, NULL, NULL, 3, 40),
(4, 'Suppression d\'un article', 5, 8, '2022-08-08 03:52:15', '2022-08-08 03:52:15', NULL, NULL, NULL, 3, 40),
(5, 'Suppression d\'un article', 5, 10, '2022-08-08 03:52:30', '2022-08-08 03:52:30', NULL, NULL, NULL, 3, 40),
(6, 'Suppression d\'un article', 5, 7, '2022-08-08 03:52:41', '2022-08-08 03:52:41', NULL, NULL, NULL, 3, 40),
(7, 'Enregistrement d\'un article', 5, 12, '2022-08-08 13:07:01', '2022-08-08 13:07:01', NULL, NULL, NULL, 3, 40),
(8, 'Enregistrement d\'un article', 5, 13, '2022-08-08 13:17:55', '2022-08-08 13:17:55', NULL, NULL, NULL, 3, 40),
(9, 'Enregistrement d\'un article', 5, 14, '2022-08-08 22:13:36', '2022-08-08 22:13:36', NULL, NULL, NULL, 3, 40),
(10, 'Enregistrement d\'un article', 5, 24, '2022-08-08 22:34:09', '2022-08-08 22:34:09', NULL, NULL, NULL, 3, 40),
(11, 'Enregistrement d\'un article', 5, 25, '2022-08-09 04:35:39', '2022-08-09 04:35:39', NULL, NULL, NULL, 3, 40),
(12, 'Enregistrement d\'un article', 5, 26, '2022-08-09 10:14:39', '2022-08-09 10:14:39', NULL, NULL, NULL, 3, 40),
(13, 'Enregistrement d\'un article', 5, 27, '2022-08-09 10:17:59', '2022-08-09 10:17:59', NULL, NULL, NULL, 3, 40),
(14, 'Enregistrement d\'un article', 5, 28, '2022-08-09 10:28:58', '2022-08-09 10:28:58', NULL, NULL, NULL, 3, 40),
(15, 'Suppression d\'un article', 5, 28, '2022-08-09 10:31:30', '2022-08-09 10:31:30', NULL, NULL, NULL, 3, 40),
(16, 'Réactivation d\'un article', 5, 28, '2022-08-09 10:36:05', '2022-08-09 10:36:05', NULL, NULL, NULL, 3, 40),
(17, 'Suppression d\'un article', 5, 28, '2022-08-09 10:36:51', '2022-08-09 10:36:51', NULL, NULL, NULL, 3, 40),
(18, 'Réactivation d\'un article', 5, 28, '2022-08-09 10:37:16', '2022-08-09 10:37:16', NULL, NULL, NULL, 3, 40),
(19, 'Suppression d\'un article', 5, 28, '2022-08-09 10:39:47', '2022-08-09 10:39:47', NULL, NULL, NULL, 3, 40),
(20, 'Réactivation d\'un article', 5, 28, '2022-08-09 10:40:20', '2022-08-09 10:40:20', NULL, NULL, NULL, 3, 40),
(21, 'Suppression d\'un article', 5, 26, '2022-08-09 10:40:38', '2022-08-09 10:40:38', NULL, NULL, NULL, 3, 40),
(22, 'Suppression d\'un article', 5, 25, '2022-08-09 10:40:43', '2022-08-09 10:40:43', NULL, NULL, NULL, 3, 40),
(23, 'Création du compte agent', 1, 49, '2022-08-10 10:06:57', '2022-08-10 10:06:57', NULL, NULL, NULL, 3, 40),
(24, 'Création du compte agent', 1, 51, '2022-08-10 10:22:50', '2022-08-10 10:22:50', NULL, NULL, NULL, 3, 40),
(25, 'Modification du compte agent', 1, 51, '2022-08-10 10:23:52', '2022-08-10 10:23:52', NULL, NULL, NULL, 3, 40),
(26, 'Réactivation d\'une catégorie', 3, 2, '2022-08-10 10:38:43', '2022-08-10 10:38:43', NULL, NULL, NULL, 3, 40),
(27, 'Modification d\'une catégorie', 3, 6, '2022-08-10 10:40:21', '2022-08-10 10:40:21', NULL, NULL, NULL, 3, 40),
(28, 'Création du compte bideur', 2, 52, '2022-08-10 10:51:47', '2022-08-10 10:51:47', NULL, NULL, NULL, 3, 40),
(29, 'Modification d\'une sous-catégorie', 4, 1, '2022-08-10 17:14:41', '2022-08-10 17:14:41', NULL, NULL, NULL, 3, 40),
(30, 'Modification d\'une sous-catégorie', 4, 5, '2022-08-10 17:15:11', '2022-08-10 17:15:11', NULL, NULL, NULL, 3, 40),
(31, 'Réactivation d\'un taux de conversion', 6, 3, '2022-08-10 17:36:46', '2022-08-10 17:36:46', NULL, NULL, NULL, 3, 40),
(32, 'Réactivation d\'un taux de conversion', 6, 3, '2022-08-10 17:36:48', '2022-08-10 17:36:48', NULL, NULL, NULL, 3, 40),
(33, 'Modification du compte agent', 1, 49, '2022-08-10 20:05:28', '2022-08-10 20:05:28', NULL, NULL, NULL, 3, 40),
(34, 'Modification du compte agent', 1, 49, '2022-08-10 20:05:59', '2022-08-10 20:05:59', NULL, NULL, NULL, 3, 40),
(35, 'Création du compte bideur', 2, 53, '2022-08-11 16:48:24', '2022-08-11 16:48:24', NULL, NULL, NULL, 3, 40),
(36, 'Modification du compte bideur', 2, 53, '2022-08-11 16:58:21', '2022-08-11 16:58:21', NULL, NULL, NULL, 3, 40),
(37, 'Suppression d\'un demandeur de bid ,montant demandé est de750', 5, 52, '2022-08-11 20:30:21', '2022-08-11 20:30:21', NULL, NULL, NULL, 3, 40),
(38, 'Suppression de la requette pedro :  : 243818086893', 5, 40, '2022-08-11 20:57:06', '2022-08-11 20:57:06', NULL, NULL, NULL, 3, 40),
(39, 'Suppression de la requette Claude kalondji : Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dignissimos adipisci necessitatibus, illo, officiis sequi harum, quod explicabo ipsam aut odit natus voluptate atque! Dolore explicabo omnis nisi vitae deleniti. : 243818086893', 5, 40, '2022-08-11 21:04:33', '2022-08-11 21:04:33', NULL, NULL, NULL, 3, 40),
(40, 'Modification d\'un article', 5, 27, '2022-08-11 21:20:17', '2022-08-11 21:20:17', NULL, NULL, NULL, 3, 40),
(41, 'Payement du gagnant Musunga Alex , enchere: PS5 id: 44declaré non payé', 5, 40, '2022-08-11 22:07:10', '2022-08-11 22:07:10', NULL, NULL, NULL, 3, 40),
(42, 'Payement du gagnant Musunga Alex , enchere: Ordinateur portable id: 43', 5, 40, '2022-08-11 22:07:15', '2022-08-11 22:07:15', NULL, NULL, NULL, 3, 40),
(43, 'Suppression du gagnant Musunga Alex id : 44', 5, 40, '2022-08-11 22:15:47', '2022-08-11 22:15:47', NULL, NULL, NULL, 3, 40);

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
(1, 'Ordinateur portable_1.webp', '2022-02-28 14:40:28', '2022-02-28 14:40:28', NULL, NULL, NULL, 3, 1, 1),
(2, 'PS5_2.webp', '2022-02-28 14:41:19', '2022-02-28 14:41:19', NULL, NULL, NULL, 3, 1, 2),
(3, 'Ordinateur iod_3.webp', '2022-03-09 11:55:55', '2022-03-09 11:55:55', NULL, NULL, NULL, 3, 1, 3),
(4, 'television_5.webp', '2022-08-08 03:34:54', '2022-08-08 03:51:49', '2022-08-08 03:51:49', 40, 40, 2, 40, 5),
(5, 'television_6.webp', '2022-08-08 03:37:25', '2022-08-08 03:37:25', NULL, NULL, NULL, 3, 40, 6),
(6, 'television_7.webp', '2022-08-08 03:38:25', '2022-08-08 03:52:41', '2022-08-08 03:52:41', 40, 40, 2, 40, 7),
(7, 'television_8.webp', '2022-08-08 03:39:17', '2022-08-08 03:52:14', '2022-08-08 03:52:14', 40, 40, 2, 40, 8),
(8, 'television_9.webp', '2022-08-08 03:39:58', '2022-08-08 03:52:01', '2022-08-08 03:52:01', 40, 40, 2, 40, 9),
(9, 'television_10.webp', '2022-08-08 03:40:42', '2022-08-08 03:52:26', '2022-08-08 03:52:26', 40, 40, 2, 40, 10),
(10, 'television_11.webp', '2022-08-08 03:42:18', '2022-08-08 03:42:18', NULL, NULL, NULL, 3, 40, 11),
(11, 'television_12.webp', '2022-08-08 13:07:00', '2022-08-08 13:07:00', NULL, NULL, NULL, 3, 40, 12),
(12, 'Ordinateur_13.webp', '2022-08-08 13:17:55', '2022-08-08 13:17:55', NULL, NULL, NULL, 3, 40, 13),
(13, 'ps8_14.webp', '2022-08-08 22:13:36', '2022-08-08 22:13:36', NULL, NULL, NULL, 3, 40, 14),
(14, 'Ordinateur_16.webp', '2022-08-08 22:32:08', '2022-08-08 22:32:08', NULL, NULL, NULL, 3, 40, 16),
(15, 'Ordinateur_17.webp', '2022-08-08 22:32:49', '2022-08-08 22:32:49', NULL, NULL, NULL, 3, 40, 17),
(16, 'Ordinateur_18.webp', '2022-08-08 22:33:01', '2022-08-08 22:33:01', NULL, NULL, NULL, 3, 40, 18),
(17, 'Ordinateur_19.webp', '2022-08-08 22:33:05', '2022-08-08 22:33:05', NULL, NULL, NULL, 3, 40, 19),
(18, 'Ordinateur_20.webp', '2022-08-08 22:33:12', '2022-08-08 22:33:12', NULL, NULL, NULL, 3, 40, 20),
(19, 'Ordinateur_21.webp', '2022-08-08 22:33:25', '2022-08-08 22:33:25', NULL, NULL, NULL, 3, 40, 21),
(20, 'Ordinateur_22.webp', '2022-08-08 22:33:40', '2022-08-08 22:33:40', NULL, NULL, NULL, 3, 40, 22),
(21, 'Ordinateur_23.webp', '2022-08-08 22:33:47', '2022-08-08 22:33:47', NULL, NULL, NULL, 3, 40, 23),
(22, 'Ordinateur_24.webp', '2022-08-08 22:34:09', '2022-08-08 22:34:09', NULL, NULL, NULL, 3, 40, 24),
(23, 'pc_25.webp', '2022-08-09 04:35:37', '2022-08-09 10:40:43', '2022-08-09 10:40:43', 40, 40, 2, 40, 25),
(24, 'iphone_26.webp', '2022-08-09 10:14:39', '2022-08-09 10:40:38', '2022-08-09 10:40:38', 40, 40, 2, 40, 26),
(25, 'lunettes.webp', '2022-08-09 10:17:59', '2022-08-09 10:17:59', NULL, NULL, NULL, 3, 40, 27),
(26, 'Ordinateurs.webp', '2022-08-09 10:28:58', '2022-08-09 10:40:20', NULL, 40, NULL, 3, 40, 28);

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
(1, 'Comment bider ?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nam nisi ducimus itaque? Exercitationem mollitia amet id similique ipsum cum corrupti incidunt. Tempore commodi a eum dolor nihil reprehenderit repellat!Animi, voluptas laboriosam. Ipsum iusto reiciendis aperiam cum explicabo vero cupiditate id animi eligendi quod. Libero, ducimus dolorum consequuntur incidunt quidem natus molestiae praesentium officia, reiciendis accusantium a, deleniti voluptatem!', 'commer', '2022-03-15 13:25:47', '2022-03-15 13:25:47', NULL, NULL, NULL, 3, 1);

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
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` int(11) NOT NULL DEFAULT 0,
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
(1, 'bonjour', 0, '2022-04-06 22:27:20', '2022-04-06 22:27:20', NULL, NULL, NULL, NULL, NULL, 11),
(2, 'bonjour a tous !', 0, '2022-04-19 20:46:09', '2022-04-19 20:46:09', NULL, NULL, NULL, NULL, NULL, 1),
(3, 'pour toi', 0, '2022-04-28 03:16:44', '2022-04-28 03:16:44', NULL, NULL, NULL, NULL, NULL, 4),
(4, 'frgtrgvffr', 0, '2022-04-29 23:17:43', '2022-04-29 23:17:43', NULL, NULL, NULL, NULL, NULL, 14),
(5, 'slqu', 0, '2022-05-02 20:19:04', '2022-05-02 20:19:04', NULL, NULL, NULL, NULL, NULL, 11),
(6, '', 0, '2022-05-02 20:29:22', '2022-05-02 20:29:22', NULL, NULL, NULL, NULL, NULL, 11),
(7, '', 0, '2022-05-02 20:29:30', '2022-05-02 20:29:30', NULL, NULL, NULL, NULL, NULL, 11),
(8, '', 0, '2022-05-02 20:29:33', '2022-05-02 20:29:33', NULL, NULL, NULL, NULL, NULL, 11),
(9, '', 0, '2022-05-02 20:29:34', '2022-05-02 20:29:34', NULL, NULL, NULL, NULL, NULL, 11),
(10, '', 0, '2022-05-02 20:29:36', '2022-05-02 20:29:36', NULL, NULL, NULL, NULL, NULL, 11),
(11, '', 0, '2022-05-02 20:47:01', '2022-05-02 20:47:01', NULL, NULL, NULL, NULL, NULL, 11),
(12, '', 0, '2022-05-02 20:47:10', '2022-05-02 20:47:10', NULL, NULL, NULL, NULL, NULL, 11);

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
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL DEFAULT 5,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'roger@gmail.com', '2022-03-09 17:12:14', '2022-03-09 16:12:39', '2022-03-09 16:12:39', 1, 1, 2, NULL),
(NULL, NULL, '2022-07-25 22:20:15', '2022-07-25 22:20:15', NULL, NULL, NULL, 3, 41),
(NULL, NULL, '2022-07-25 22:32:12', '2022-07-25 22:32:12', NULL, NULL, NULL, 3, 42),
(NULL, NULL, '2022-07-26 06:53:40', '2022-07-26 06:53:40', NULL, NULL, NULL, 3, 43),
(NULL, NULL, '2022-07-26 07:08:39', '2022-07-26 07:08:39', NULL, NULL, NULL, 3, 44);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL,
  `notification_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `min` int(11) DEFAULT NULL,
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

INSERT INTO `paquets` (`id`, `libelle`, `nombre_enchere`, `duree`, `treve`, `guerre`, `prix`, `min`, `roi`, `foudre`, `bouclier`, `max`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'Simba', 10, 55, 5, 20, 10, 1, '00:05:05.05', '00:00:00.00', '00:00:00.00', 200, '2022-02-14 11:45:20', '2022-03-09 11:11:52', NULL, 1, NULL, 3, 1),
(2, 'Benda', 20, 120, 6, 21, 30, 201, '00:04:10.88', '00:00:00.00', '00:00:00.00', 500, '2022-02-14 11:45:44', '2022-08-10 10:38:43', NULL, 40, NULL, 3, 1),
(3, 'Turbo', 30, 160, 5, 25, 50, 501, '00:01:02.25', '00:00:00.00', '00:00:00.00', 1000, '2022-02-14 13:32:59', '2022-03-11 15:34:53', NULL, 1, NULL, 3, 1),
(4, 'Beton', 40, 180, 6, 26, 40, 1001, '00:02:04.88', '00:00:00.00', '00:00:00.00', 2000, '2022-02-14 13:33:28', '2022-03-09 10:59:19', NULL, 1, NULL, 3, 1),
(5, 'Bulldozer', 50, 200, 10, 25, 50, 2001, '00:08:00.75', '00:00:00.00', '00:00:00.00', 5000, '2022-02-14 13:34:14', '2022-03-09 10:59:19', NULL, 1, NULL, 3, 1),
(6, 'Sukisa', 10, 250, 10, 45, 60, 5001, '00:04:00.22', '00:00:00.00', '00:00:00.00', 10000, '2022-02-14 13:44:00', '2022-08-10 10:40:21', NULL, 1, NULL, 3, 40);

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
('lem.musungafd@gmail.com', '$2y$10$aG6P2VIS9aVPmne.CcptQ.BeSJZ6zGrK2rph6XIsULBMDm.y2lSuq', '2022-04-27 13:59:15'),
('pedro@congobid.com', '$2y$10$i6eqnY3Fe0JZwYjE.OFWre1yuXUEBZ6MIER0bbTlYpleurybkAy7W', '2022-05-04 19:23:06');

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `valeur` int(11) NOT NULL DEFAULT 0,
  `roi` int(11) NOT NULL DEFAULT 0,
  `foudre` int(11) NOT NULL DEFAULT 0,
  `clicks` int(11) NOT NULL DEFAULT 0,
  `bouclier` int(11) NOT NULL DEFAULT 0,
  `favoris` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `enchere_id` bigint(20) UNSIGNED NOT NULL,
  `time_bid_auto` timestamp NULL DEFAULT NULL,
  `time_bouclier` timestamp NULL DEFAULT NULL,
  `time_roi` timestamp NULL DEFAULT NULL,
  `time_foudre` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pivot_bideur_encheres`
--

INSERT INTO `pivot_bideur_encheres` (`id`, `valeur`, `roi`, `foudre`, `clicks`, `bouclier`, `favoris`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `enchere_id`, `time_bid_auto`, `time_bouclier`, `time_roi`, `time_foudre`) VALUES
(336, 178, 0, 0, 0, 0, 0, '2022-07-26 08:29:26', '2022-07-26 09:21:23', NULL, NULL, NULL, 3, 44, 2, NULL, NULL, NULL, NULL),
(337, 1, 0, 0, 0, 0, 0, '2022-07-26 09:21:54', '2022-07-26 09:22:01', NULL, NULL, NULL, 3, 44, 1, NULL, NULL, NULL, NULL),
(338, 1027, 1, 0, 0, 0, 1, '2022-07-26 17:58:08', '2022-07-27 18:29:01', NULL, NULL, NULL, 3, 43, 12, NULL, NULL, '2022-07-27 09:47:56', '2022-07-27 09:13:54'),
(339, 125, 0, 0, 0, 0, 0, '2022-07-26 18:55:30', '2022-07-26 18:59:44', NULL, NULL, NULL, 3, 40, 12, NULL, NULL, NULL, NULL),
(340, 0, 0, 0, 0, 0, 0, '2022-08-09 10:30:41', '2022-08-09 10:30:41', NULL, NULL, NULL, 3, 40, 13, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `pivot_bideur_paquets`
--

CREATE TABLE `pivot_bideur_paquets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state` int(11) NOT NULL DEFAULT 1,
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
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `salon_id` bigint(20) UNSIGNED NOT NULL
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
(1, 'dd', 'dad', '2022-03-23 10:43:51', '2022-03-23 10:43:51', NULL, NULL, NULL, 3, 1);

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
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
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
(1, 'Root', 'Root', '2022-02-14 10:45:03', '2022-02-14 10:45:03'),
(2, 'SuperAdmin', 'Super Administrateur', '2022-02-14 10:50:18', '2022-02-14 10:50:18'),
(3, 'Admin', 'Administrateur', '2022-02-14 10:52:48', '2022-02-14 10:52:48'),
(4, 'SuperUser', 'Super Utilisateur', '2022-02-14 10:55:25', '2022-02-14 10:55:25'),
(5, 'User', 'Utilisateur', '2022-02-14 10:59:14', '2022-02-14 10:59:14');

-- --------------------------------------------------------

--
-- Structure de la table `salons`
--

CREATE TABLE `salons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `limite` int(11) NOT NULL DEFAULT 20,
  `debut_enchere` timestamp NULL DEFAULT NULL,
  `fin_enchere` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `salons`
--

INSERT INTO `salons` (`id`, `libelle`, `limite`, `debut_enchere`, `fin_enchere`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `article_id`) VALUES
(1, 'Salon #1', 20, NULL, NULL, '2022-02-28 14:40:28', '2022-04-03 03:24:01', NULL, NULL, NULL, 3, 1),
(2, 'Salon #2', 2, NULL, NULL, '2022-02-28 14:41:19', '2022-04-03 03:21:41', NULL, NULL, NULL, 3, 2),
(3, 'Salon #3', 15, NULL, NULL, '2022-03-09 11:55:55', '2022-04-03 03:37:01', NULL, NULL, NULL, 3, 3),
(4, 'Salon #', 20, NULL, NULL, '2022-08-08 03:37:25', '2022-08-08 03:37:25', NULL, NULL, NULL, 3, 6),
(5, 'Salon #', 20, NULL, NULL, '2022-08-08 03:38:26', '2022-08-08 03:52:41', '2022-08-08 03:52:41', 40, 40, 2, 7),
(6, 'Salon #', 20, NULL, NULL, '2022-08-08 03:39:18', '2022-08-08 03:52:15', '2022-08-08 03:52:15', 40, 40, 2, 8),
(7, 'Salon #', 20, NULL, NULL, '2022-08-08 03:39:59', '2022-08-08 03:52:01', '2022-08-08 03:52:01', 40, 40, 2, 9),
(8, 'Salon #', 20, NULL, NULL, '2022-08-08 03:40:42', '2022-08-08 03:52:28', '2022-08-08 03:52:28', 40, 40, 2, 10),
(9, 'Salon #', 20, NULL, NULL, '2022-08-08 03:42:19', '2022-08-08 03:42:19', NULL, NULL, NULL, 3, 11),
(10, 'Salon #', 20, NULL, NULL, '2022-08-08 13:07:01', '2022-08-08 13:07:01', NULL, NULL, NULL, 3, 12),
(11, 'Salon #', 20, NULL, NULL, '2022-08-08 13:17:55', '2022-08-08 13:17:55', NULL, NULL, NULL, 3, 13),
(12, 'Salon #', 20, NULL, NULL, '2022-08-08 22:13:36', '2022-08-08 22:13:36', NULL, NULL, NULL, 3, 14),
(13, 'Salon #', 20, NULL, NULL, '2022-08-08 22:32:08', '2022-08-08 22:32:08', NULL, NULL, NULL, 3, 16),
(14, 'Salon #', 20, NULL, NULL, '2022-08-08 22:32:49', '2022-08-08 22:32:49', NULL, NULL, NULL, 3, 17),
(15, 'Salon #', 20, NULL, NULL, '2022-08-08 22:33:01', '2022-08-08 22:33:01', NULL, NULL, NULL, 3, 18),
(16, 'Salon #', 20, NULL, NULL, '2022-08-08 22:33:05', '2022-08-08 22:33:05', NULL, NULL, NULL, 3, 19),
(17, 'Salon #', 20, NULL, NULL, '2022-08-08 22:33:12', '2022-08-08 22:33:12', NULL, NULL, NULL, 3, 20),
(18, 'Salon #', 20, NULL, NULL, '2022-08-08 22:33:25', '2022-08-08 22:33:25', NULL, NULL, NULL, 3, 21),
(19, 'Salon #', 20, NULL, NULL, '2022-08-08 22:33:40', '2022-08-08 22:33:40', NULL, NULL, NULL, 3, 22),
(20, 'Salon #', 20, NULL, NULL, '2022-08-08 22:33:47', '2022-08-08 22:33:47', NULL, NULL, NULL, 3, 23),
(21, 'Salon #', 20, NULL, NULL, '2022-08-08 22:34:09', '2022-08-08 22:34:09', NULL, NULL, NULL, 3, 24),
(22, 'Salon #', 20, NULL, NULL, '2022-08-09 04:35:37', '2022-08-09 10:40:43', '2022-08-09 10:40:43', 40, 40, 2, 25),
(23, 'Salon #', 20, NULL, NULL, '2022-08-09 10:14:39', '2022-08-09 10:40:38', '2022-08-09 10:40:38', 40, 40, 2, 26),
(24, 'Salon #27', 20, NULL, NULL, '2022-08-09 10:17:59', '2022-08-11 21:20:16', NULL, NULL, NULL, 3, 27),
(25, 'Salon #', 20, NULL, NULL, '2022-08-09 10:28:58', '2022-08-09 10:40:20', NULL, 40, NULL, 3, 28);

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
  `tous` int(11) NOT NULL DEFAULT 0,
  `suspendu_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED DEFAULT NULL,
  `statut` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sanctions`
--

INSERT INTO `sanctions` (`id`, `paquet_id`, `enchere_id`, `santance`, `duree`, `tous`, `suspendu_by`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `statut`, `user_id`) VALUES
(80, 6, '2', 'foudre', '00:00:00', 1, 14, '2022-04-29 20:26:00', '2022-05-02 21:25:25', '2022-05-02 21:25:25', NULL, NULL, NULL, 1, 11),
(81, 3, '3', 'foudre', '00:00:00', 0, 14, '2022-04-29 23:33:18', '2022-04-29 23:33:18', NULL, NULL, NULL, 1, 1, 18),
(82, 3, '3', 'foudre', '00:00:00', 0, 14, '2022-04-29 23:33:32', '2022-04-29 23:33:32', NULL, NULL, NULL, NULL, 1, 15),
(83, 3, '3', 'foudre', '00:00:00', 0, 14, '2022-04-29 23:35:05', '2022-04-29 23:35:05', NULL, NULL, NULL, NULL, 1, 19),
(84, 3, '2', 'foudre', '00:00:00', 1, 14, '2022-04-29 23:35:39', '2022-05-06 13:03:16', '2022-05-06 13:03:16', NULL, NULL, NULL, 1, 11),
(85, 3, '3', 'foudre', '00:00:00', 0, 21, '2022-04-29 23:40:01', '2022-04-29 23:41:27', '2022-04-29 23:41:27', NULL, NULL, 1, 1, 14),
(86, 1, '1', 'foudre', '00:00:00', 0, 11, '2022-05-02 18:33:55', '2022-05-02 18:33:55', NULL, NULL, NULL, NULL, 1, 20),
(87, 6, '2', 'foudre', '00:00:00', 0, 11, '2022-05-02 21:25:38', '2022-05-03 08:38:23', '2022-05-03 08:38:23', NULL, NULL, NULL, 1, 14),
(88, 3, '3', 'foudre', '00:00:00', 0, 14, '2022-05-09 13:36:09', '2022-05-09 13:36:09', NULL, NULL, NULL, NULL, 1, 11),
(89, 6, '2', 'foudre', '00:00:00', 0, 14, '2022-07-19 19:56:37', '2022-07-19 19:56:37', NULL, NULL, NULL, NULL, 1, 26),
(90, 6, '2', 'foudre', '00:00:00', 0, 14, '2022-07-19 20:30:35', '2022-07-19 20:30:35', NULL, NULL, NULL, NULL, 1, 25),
(91, 1, '1', 'foudre', '00:00:00', 0, 43, '2022-07-27 09:14:13', '2022-07-27 09:14:13', NULL, NULL, NULL, NULL, 1, 40),
(92, 1, '1', 'foudre', '00:00:00', 0, 43, '2022-07-27 09:20:34', '2022-07-27 09:20:34', NULL, NULL, NULL, NULL, 1, 44);

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
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
(1, 'En attente', '2022-02-14 11:05:36', '2022-02-14 11:05:36', NULL, NULL, NULL),
(2, 'Suspendu', '2022-02-14 11:13:36', '2022-02-14 11:13:36', NULL, NULL, NULL),
(3, 'Validé', '2022-02-14 11:25:52', '2022-02-14 11:25:52', NULL, NULL, NULL);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(11, 5, 'lk', 'lka', 'lka', NULL, NULL, '', NULL, '243818086890.webp', NULL, NULL, '$2y$10$9VRcuiYxL0HNgfTPTLKnYOwl45ktSSd14iMCuJ9mP6T5ZQFDgZovi', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-25 22:32:12', '2022-07-25 22:46:09', NULL, NULL, NULL, 3, '2022-05-24 13:40:28', NULL, NULL),
(40, 1, 'Musunga Alex', NULL, 'Seymour', NULL, '0811246071', '', NULL, '243818086890.webp', NULL, NULL, '$2y$10$ndaWK3UZC42Elv3aj8l25.spEE27iWPdC2gDhVxKxwQHS6sJWoOmu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-25 22:15:16', '2022-08-11 22:15:47', NULL, NULL, NULL, 3, NULL, '2022-08-11 22:15:47', NULL),
(41, 5, 'Musunga Alexdcz', NULL, 'Seymourzdcz', NULL, '0811246071666', '', NULL, '243818086890.webp', NULL, NULL, '$2y$10$vYmHA/pL9js.VzaMDMZk/O2KLz.VpKACp5WrUzDYGf0aD0jmOE8YO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-25 22:20:15', '2022-07-25 22:20:38', NULL, NULL, NULL, 3, NULL, NULL, NULL),
(43, 5, 'Musunga Alex', NULL, 'lmpro240598', NULL, '08112460711', '', NULL, '243818086894.webp', NULL, NULL, '$2y$10$vV4.vdDAtp0idOCj9Ux0cunJgzsYYEAV.i99q5L/PDiO6zDIxNRPS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 06:53:38', '2022-08-10 19:38:49', NULL, NULL, NULL, 3, '2022-05-24 13:40:28', '2022-08-10 19:38:49', NULL),
(44, 5, 'Musunga Alex', NULL, 'avatar', NULL, '08112460702', '', 'lm@congobid.com', '243818086890.webp', NULL, NULL, '$2y$10$DCvugOXdZQyoF/nT./77RuxmStr3WBpTIPGVD5l47MiECzIvcaXzi', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 07:08:38', '2022-07-26 09:20:14', NULL, NULL, NULL, 3, '2022-05-24 13:40:28', NULL, NULL),
(49, 4, 'pedro', NULL, 'pedrien', NULL, '243818086891', 'Masculin', 'lemuel.musunga@gmail.com', '243818086891.webp', '2022-08-10', NULL, '$2y$10$Uz7ggsx8Iyqeg5zScvMivuJp76lMZ2phnMgrS0d3YbRDGjY4934kq', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-10 10:06:57', '2022-08-10 20:05:58', NULL, NULL, NULL, 3, NULL, NULL, NULL),
(51, 3, 'army musunga', NULL, 'ajboy', NULL, '243811246071', 'Masculin', 'army.musunga@gmail.com', '0811246071.webp', '2022-08-17', NULL, '$2y$10$Ix5vieEM4CTGgpGCLanKqerHml3QPO70Pz5fO65LA0SpKY6hlXxKK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-10 10:22:50', '2022-08-10 10:23:52', NULL, NULL, NULL, 3, NULL, NULL, NULL),
(52, 5, 'pedrokiss', NULL, 'pedrienkisisis', NULL, '243818086898', 'Masculin', 'adminpedro@newtech-rdc.net', '243818086898.webp', '2022-08-11', NULL, '$2y$10$H0Nib12DF.Nmtt/dBf6P5ujlUwgD3GiCqDHbtXSeCUa5vfU1Og9.6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-10 10:51:47', '2022-08-10 10:51:47', NULL, NULL, NULL, 3, NULL, NULL, NULL),
(53, 5, 'Claude kalala', NULL, 'kCC', NULL, '0811246075', 'Féminin', 'kb@gmail.com', '0811246075.webp', '2022-08-05', NULL, '$2y$10$eniLdZej0eKk3HnH4Z.8S.nEYJTYIILT/SCF5L3Fn4ZI1KPrj7PZC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-11 16:48:24', '2022-08-11 21:21:33', NULL, NULL, NULL, 3, '2022-08-11 21:21:33', '2022-08-11 21:21:33', NULL);

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
-- Index pour la table `boucliers`
--
ALTER TABLE `boucliers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_libelle_unique` (`libelle`),
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
-- Index pour la table `pivot_bideur_encheres`
--
ALTER TABLE `pivot_bideur_encheres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `salons`
--
ALTER TABLE `salons`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `bideurs`
--
ALTER TABLE `bideurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `demandes`
--
ALTER TABLE `demandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `encheregagners`
--
ALTER TABLE `encheregagners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT pour la table `encheres`
--
ALTER TABLE `encheres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT pour la table `historiques`
--
ALTER TABLE `historiques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `pivot_bideur_encheres`
--
ALTER TABLE `pivot_bideur_encheres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;

--
-- AUTO_INCREMENT pour la table `salons`
--
ALTER TABLE `salons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `sanctions`
--
ALTER TABLE `sanctions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
