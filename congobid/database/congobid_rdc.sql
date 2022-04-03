-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 03, 2022 at 10:42 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `congobid_rdc`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateurs`
--

DROP TABLE IF EXISTS `administrateurs`;
CREATE TABLE IF NOT EXISTS `administrateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `identification_fiscale` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `administrateur_id` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `administrateurs_identification_fiscale_unique` (`identification_fiscale`),
  KEY `administrateurs_statut_id_foreign` (`statut_id`),
  KEY `administrateurs_user_id_foreign` (`user_id`),
  KEY `administrateurs_administrateur_id_foreign` (`administrateur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrateurs`
--

INSERT INTO `administrateurs` (`id`, `identification_fiscale`, `poste`, `interne`, `online`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `administrateur_id`) VALUES
(1, '243818086892', 'Directeur Administratrif', 1, '0', '2022-02-16 08:27:39', '2022-03-08 14:55:51', NULL, NULL, NULL, 3, 1, NULL),
(2, '243818086890', 'Web Designer', 1, '0', '2022-02-28 14:32:51', '2022-03-11 15:25:55', '2022-03-11 15:25:55', 1, 1, 2, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promouvoir` int(11) NOT NULL DEFAULT '0',
  `code_produit` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `prix_marche` int(11) NOT NULL,
  `prix_min` int(11) NOT NULL,
  `prix_max` int(11) NOT NULL,
  `cout_livraison` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `infos_livraison` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `limite_enchere_auto` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_enchere_auto` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantite` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `paquet_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `articles_code_produit_unique` (`code_produit`),
  KEY `articles_statut_id_foreign` (`statut_id`),
  KEY `articles_user_id_foreign` (`user_id`),
  KEY `articles_categorie_id_foreign` (`categorie_id`),
  KEY `articles_paquet_id_foreign` (`paquet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `marque`, `promouvoir`, `code_produit`, `description`, `prix`, `prix_marche`, `prix_min`, `prix_max`, `cout_livraison`, `infos_livraison`, `meta_description`, `meta_keywords`, `limite_enchere_auto`, `credit_enchere_auto`, `quantite`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `categorie_id`, `paquet_id`) VALUES
(1, 'Ordinateur portable', 'HP', 1, '11030420220424014', 'Ordinateur portable\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quisquam aliquam ducimus! Accusamus commodi obcaecati consequuntur veritatis. Temporibus voluptatem, iste odit, at ea voluptatibus nemo adipisci obcaecati aspernatur aut debitis!\r\nDucimus atque iusto aut eligendi itaque voluptatem! Quos odio at, incidunt totam asperiores facilis ad et autem aut voluptatem! Excepturi aliquid eaque inventore totam repellat ut nisi laudantium soluta suscipit.\r\nIure beatae nulla iusto vero earum similique necessitatibus officiis magnam optio quis ratione eveniet quod a doloremque cum consequuntur, tempora, unde ipsa labore! Quam dolor fuga tempora labore quod modi?', 500, 1000, 333, 500, '0', 'dgzd', 'zndbzd', 'zndbzd', '0', '0', '10', '2022-02-28 14:40:28', '2022-04-03 03:24:01', NULL, NULL, NULL, 3, 1, 1, 1),
(2, 'PS5', 'Konami', 0, '11030420220421414', 'PS5\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quisquam aliquam ducimus! Accusamus commodi obcaecati consequuntur veritatis. Temporibus voluptatem, iste odit, at ea voluptatibus nemo adipisci obcaecati aspernatur aut debitis!\r\nDucimus atque iusto aut eligendi itaque voluptatem! Quos odio at, incidunt totam asperiores facilis ad et autem aut voluptatem! Excepturi aliquid eaque inventore totam repellat ut nisi laudantium soluta suscipit.\r\nIure beatae nulla iusto vero earum similique necessitatibus officiis magnam optio quis ratione eveniet quod a doloremque cum consequuntur, tempora, unde ipsa labore! Quam dolor fuga tempora labore quod modi?', 800, 1600, 533, 800, '0', 'zkfdz', 'eae', 'eae', '0', '0', '100', '2022-02-28 14:41:19', '2022-04-03 03:21:41', NULL, NULL, NULL, 3, 1, 1, 3),
(3, 'Ordinateur iod', 'zdzd', 1, '21030420220437014', 'Ordinateur iod\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quisquam aliquam ducimus! Accusamus commodi obcaecati consequuntur veritatis. Temporibus voluptatem, iste odit, at ea voluptatibus nemo adipisci obcaecati aspernatur aut debitis!\r\nDucimus atque iusto aut eligendi itaque voluptatem! Quos odio at, incidunt totam asperiores facilis ad et autem aut voluptatem! Excepturi aliquid eaque inventore totam repellat ut nisi laudantium soluta suscipit.\r\nIure beatae nulla iusto vero earum similique necessitatibus officiis magnam optio quis ratione eveniet quod a doloremque cum consequuntur, tempora, unde ipsa labore! Quam dolor fuga tempora labore quod modi?', 1000, 2000, 667, 1000, '0', 'djbqdj', 'zhdva', 'zhdva', '0', '0', '80', '2022-03-09 11:55:55', '2022-04-03 03:37:01', NULL, NULL, NULL, 3, 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `bideurs`
--

DROP TABLE IF EXISTS `bideurs`;
CREATE TABLE IF NOT EXISTS `bideurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `balance` int(11) NOT NULL DEFAULT '0',
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
  `admin_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bideurs_statut_id_foreign` (`statut_id`),
  KEY `bideurs_user_id_foreign` (`user_id`),
  KEY `bideurs_paquet_id_foreign` (`paquet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bideurs`
--

INSERT INTO `bideurs` (`id`, `balance`, `nontransferable`, `bonus`, `roi`, `foudre`, `bouclier`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `paquet_id`, `admin_id`) VALUES
(2, 370, 100, 41, 2, 12, 1, '2022-03-09 09:46:01', '2022-04-03 09:29:45', NULL, 1, NULL, 3, 11, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

DROP TABLE IF EXISTS `bids`;
CREATE TABLE IF NOT EXISTS `bids` (
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
  PRIMARY KEY (`id`),
  KEY `bids_statut_id_foreign` (`statut_id`),
  KEY `bids_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `quantite`, `valeur`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(3, 10, '1', '2022-03-09 13:28:45', '2022-03-09 16:11:25', '2022-03-09 16:11:25', 1, 1, 2, 1),
(4, 80, '5', '2022-03-09 13:39:42', '2022-03-09 13:39:42', NULL, NULL, NULL, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_libelle_unique` (`libelle`),
  KEY `categories_statut_id_foreign` (`statut_id`),
  KEY `categories_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `libelle`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'Informatique', '2022-02-28 14:39:13', '2022-03-09 11:19:35', '2022-03-09 11:19:35', 1, 1, 2, 1),
(2, 'Outils', '2022-02-28 14:42:01', '2022-03-09 16:08:46', '2022-03-09 16:08:46', 1, 1, 2, 1),
(5, 'Simba gdgdg', '2022-03-09 15:32:35', '2022-03-09 15:32:35', NULL, NULL, NULL, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

DROP TABLE IF EXISTS `chats`;
CREATE TABLE IF NOT EXISTS `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `destinateur_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `chats_statut_id_foreign` (`statut_id`),
  KEY `chats_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `libelle`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `destinateur_id`) VALUES
(1, 'sfsf', '2022-03-10 16:10:22', '2022-03-10 16:10:22', NULL, NULL, NULL, 3, 11, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `communiques`
--

DROP TABLE IF EXISTS `communiques`;
CREATE TABLE IF NOT EXISTS `communiques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `communiques_statut_id_foreign` (`statut_id`),
  KEY `communiques_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comptes`
--

DROP TABLE IF EXISTS `comptes`;
CREATE TABLE IF NOT EXISTS `comptes` (
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
  `types_compte_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comptes_statut_id_foreign` (`statut_id`),
  KEY `comptes_user_id_foreign` (`user_id`),
  KEY `comptes_types_compte_id_foreign` (`types_compte_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
CREATE TABLE IF NOT EXISTS `coupons` (
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
  `types_coupon_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `coupons_statut_id_foreign` (`statut_id`),
  KEY `coupons_user_id_foreign` (`user_id`),
  KEY `coupons_types_coupon_id_foreign` (`types_coupon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
CREATE TABLE IF NOT EXISTS `data_rows` (
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
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
CREATE TABLE IF NOT EXISTS `data_types` (
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departements`
--

DROP TABLE IF EXISTS `departements`;
CREATE TABLE IF NOT EXISTS `departements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `departements_statut_id_foreign` (`statut_id`),
  KEY `departements_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `encheres`
--

DROP TABLE IF EXISTS `encheres`;
CREATE TABLE IF NOT EXISTS `encheres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `click` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `favoris` int(11) NOT NULL,
  `date_debut` date DEFAULT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `encheres`
--

INSERT INTO `encheres` (`id`, `click`, `favoris`, `date_debut`, `heure_debut`, `state`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `article_id`, `paquet_id`) VALUES
(1, '0', 14, '2022-04-08', '12:00:00', 0, '2022-02-28 14:40:28', '2022-04-03 03:47:46', NULL, NULL, NULL, 3, 1, 1),
(2, '0', 1, '2022-04-05', '13:00:00', 0, '2022-02-28 14:41:19', '2022-04-03 03:21:41', NULL, NULL, NULL, 3, 2, 3),
(3, '0', 3, '2022-04-03', '13:29:00', 1, '2022-03-09 11:55:55', '2022-04-03 05:13:51', NULL, NULL, NULL, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponses` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foudres`
--

DROP TABLE IF EXISTS `foudres`;
CREATE TABLE IF NOT EXISTS `foudres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `duree` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `bideur_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `enchere_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gagnants`
--

DROP TABLE IF EXISTS `gagnants`;
CREATE TABLE IF NOT EXISTS `gagnants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `enchere_id` bigint(20) UNSIGNED NOT NULL,
  `administrateur_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gagnants`
--

INSERT INTO `gagnants` (`id`, `lien`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `enchere_id`, `administrateur_id`) VALUES
(1, 'adad', '2022-03-10 15:50:19', '2022-03-10 15:50:19', NULL, NULL, NULL, 3, 11, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `historiques`
--

DROP TABLE IF EXISTS `historiques`;
CREATE TABLE IF NOT EXISTS `historiques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL DEFAULT '3',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `lien`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `article_id`) VALUES
(1, 'Ordinateur portable_1.webp', '2022-02-28 14:40:28', '2022-02-28 14:40:28', NULL, NULL, NULL, 3, 1, 1),
(2, 'PS5_2.webp', '2022-02-28 14:41:19', '2022-02-28 14:41:19', NULL, NULL, NULL, 3, 1, 2),
(3, 'Ordinateur iod_3.webp', '2022-03-09 11:55:55', '2022-03-09 11:55:55', NULL, NULL, NULL, 3, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `instructions`
--

DROP TABLE IF EXISTS `instructions`;
CREATE TABLE IF NOT EXISTS `instructions` (
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
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructions`
--

INSERT INTO `instructions` (`id`, `titre`, `description`, `lien`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'Comment bider ?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nam nisi ducimus itaque? Exercitationem mollitia amet id similique ipsum cum corrupti incidunt. Tempore commodi a eum dolor nihil reprehenderit repellat!Animi, voluptas laboriosam. Ipsum iusto reiciendis aperiam cum explicabo vero cupiditate id animi eligendi quod. Libero, ducimus dolorum consequuntur incidunt quidem natus molestiae praesentium officia, reiciendis accusantium a, deleniti voluptatem!', 'commer', '2022-03-15 13:25:47', '2022-03-15 13:25:47', NULL, NULL, NULL, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
CREATE TABLE IF NOT EXISTS `menu_items` (
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
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `salon_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(11) NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  KEY `id` (`id`)
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

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
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
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL DEFAULT '5',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'roger@gmail.com', '2022-03-09 17:12:14', '2022-03-09 16:12:39', '2022-03-09 16:12:39', 1, 1, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` int(11) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL,
  `notification_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
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
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paquets`
--

DROP TABLE IF EXISTS `paquets`;
CREATE TABLE IF NOT EXISTS `paquets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_enchere` int(11) NOT NULL,
  `duree` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paquets`
--

INSERT INTO `paquets` (`id`, `libelle`, `nombre_enchere`, `duree`, `prix`, `min`, `max`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'Simba', 10, 55, 10, 1, 200, '2022-02-14 11:45:20', '2022-03-09 11:11:52', NULL, 1, NULL, 3, 1),
(2, 'Benda', 20, 120, 30, 201, 500, '2022-02-14 11:45:44', '2022-03-11 15:34:43', '2022-03-09 16:08:54', 1, 1, 2, 1),
(3, 'Turbo', 30, 160, 50, 501, 1000, '2022-02-14 13:32:59', '2022-03-11 15:34:53', NULL, 1, NULL, 3, 1),
(4, 'Beton', 40, 180, 40, 1001, 2000, '2022-02-14 13:33:28', '2022-03-09 10:59:19', NULL, 1, NULL, 3, 1),
(5, 'Bulldozer', 50, 200, 50, 2001, 5000, '2022-02-14 13:34:14', '2022-03-09 10:59:19', NULL, 1, NULL, 3, 1),
(6, 'Sukisa', 10, 250, 60, 5001, NULL, '2022-02-14 13:44:00', '2022-03-09 10:59:19', NULL, 1, NULL, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `index` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pivot_bideur_encheres`
--

DROP TABLE IF EXISTS `pivot_bideur_encheres`;
CREATE TABLE IF NOT EXISTS `pivot_bideur_encheres` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `valeur` int(11) NOT NULL DEFAULT '0',
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pivot_bideur_encheres`
--

INSERT INTO `pivot_bideur_encheres` (`id`, `valeur`, `roi`, `foudre`, `clicks`, `bouclier`, `favoris`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `enchere_id`) VALUES
(24, 0, 0, 0, 0, 0, 1, '2022-04-03 07:01:18', '2022-04-03 07:01:18', NULL, NULL, NULL, 3, 17, 2),
(29, 120, 0, 0, 0, 0, 0, '2022-04-03 09:29:37', '2022-04-03 09:39:52', NULL, NULL, NULL, 3, 11, 3),
(64, 0, 0, 0, 0, 0, 0, '2022-04-03 09:41:05', '2022-04-03 09:41:05', NULL, NULL, NULL, 3, 11, 3),
(65, 0, 0, 0, 0, 0, 1, '2022-04-03 09:41:23', '2022-04-03 09:41:23', NULL, NULL, NULL, 3, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pivot_bideur_paquets`
--

DROP TABLE IF EXISTS `pivot_bideur_paquets`;
CREATE TABLE IF NOT EXISTS `pivot_bideur_paquets` (
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

-- --------------------------------------------------------

--
-- Table structure for table `pivot_clients_salons`
--

DROP TABLE IF EXISTS `pivot_clients_salons`;
CREATE TABLE IF NOT EXISTS `pivot_clients_salons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `salon_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `politiques`
--

DROP TABLE IF EXISTS `politiques`;
CREATE TABLE IF NOT EXISTS `politiques` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `politiques_statut_id_foreign` (`statut_id`),
  KEY `politiques_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `politiques`
--

INSERT INTO `politiques` (`id`, `titre`, `content`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'dd', 'dad', '2022-03-23 10:43:51', '2022-03-23 10:43:51', NULL, NULL, NULL, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

DROP TABLE IF EXISTS `promotions`;
CREATE TABLE IF NOT EXISTS `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sujet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rois`
--

DROP TABLE IF EXISTS `rois`;
CREATE TABLE IF NOT EXISTS `rois` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `enchere_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'Root', 'Root', '2022-02-14 10:45:03', '2022-02-14 10:45:03'),
(2, 'SuperAdmin', 'Super Administrateur', '2022-02-14 10:50:18', '2022-02-14 10:50:18'),
(3, 'Admin', 'Administrateur', '2022-02-14 10:52:48', '2022-02-14 10:52:48'),
(4, 'SuperUser', 'Super Utilisateur', '2022-02-14 10:55:25', '2022-02-14 10:55:25'),
(5, 'User', 'Utilisateur', '2022-02-14 10:59:14', '2022-02-14 10:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `salons`
--

DROP TABLE IF EXISTS `salons`;
CREATE TABLE IF NOT EXISTS `salons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `limite` int(11) NOT NULL DEFAULT '20',
  `debut_enchere` timestamp NULL DEFAULT NULL,
  `fin_enchere` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salons`
--

INSERT INTO `salons` (`id`, `libelle`, `limite`, `debut_enchere`, `fin_enchere`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `article_id`) VALUES
(1, 'Salon #1', 20, NULL, NULL, '2022-02-28 14:40:28', '2022-04-03 03:24:01', NULL, NULL, NULL, 3, 1),
(2, 'Salon #2', 20, NULL, NULL, '2022-02-28 14:41:19', '2022-04-03 03:21:41', NULL, NULL, NULL, 3, 2),
(3, 'Salon #3', 20, NULL, NULL, '2022-03-09 11:55:55', '2022-04-03 03:37:01', NULL, NULL, NULL, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sanctions`
--

DROP TABLE IF EXISTS `sanctions`;
CREATE TABLE IF NOT EXISTS `sanctions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree` int(11) NOT NULL,
  `tous` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sources`
--

DROP TABLE IF EXISTS `sources`;
CREATE TABLE IF NOT EXISTS `sources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplementaire` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuts`
--

DROP TABLE IF EXISTS `statuts`;
CREATE TABLE IF NOT EXISTS `statuts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuts`
--

INSERT INTO `statuts` (`id`, `libelle`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`) VALUES
(1, 'En attente', '2022-02-14 11:05:36', '2022-02-14 11:05:36', NULL, NULL, NULL),
(2, 'Suspendu', '2022-02-14 11:13:36', '2022-02-14 11:13:36', NULL, NULL, NULL),
(3, 'Validé', '2022-02-14 11:25:52', '2022-02-14 11:25:52', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
CREATE TABLE IF NOT EXISTS `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types_comptes`
--

DROP TABLE IF EXISTS `types_comptes`;
CREATE TABLE IF NOT EXISTS `types_comptes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types_coupons`
--

DROP TABLE IF EXISTS `types_coupons`;
CREATE TABLE IF NOT EXISTS `types_coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nom` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `date_naissance` date DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `nom`, `username`, `provider_id`, `telephone`, `sexe`, `email`, `avatar`, `date_naissance`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `settings`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`) VALUES
(1, 1, 'Roger Mutoto', 'Seymour', NULL, '243818086892', 'Masculin', 'admin@admin.com', '243818086892.webp', '2020-09-02', NULL, '$2y$10$T4fbBuit8NcQiTp3Snu5uewP7lM6hEUeS.F/.7r..Pu66zO6BmyPO', NULL, NULL, 'Is9i9SEbyKW69wl7gnzDOUuRk7CZ3eawWyJixRwM1WIkk8jwjlAAwofypvQ9', NULL, NULL, '', '2022-01-24 07:06:55', '2022-03-08 14:55:51', NULL, NULL, NULL, 3),
(4, 3, 'Pedrien Kinkani', 'Pedro', NULL, '243818086890', 'Masculin', 'pedro@congobid.com', '243818086890.webp', '2022-02-02', NULL, '$2y$10$T4fbBuit8NcQiTp3Snu5uewP7lM6hEUeS.F/.7r..Pu66zO6BmyPO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-28 14:32:51', '2022-03-11 15:25:55', '2022-03-11 15:25:55', 1, 1, 2),
(11, 5, 'Musunga Alex', 'LmPro', NULL, '243818086893', 'Masculin', 'alex@gmail.com', '243818086893.webp', '2010-02-10', NULL, '$2y$10$T4fbBuit8NcQiTp3Snu5uewP7lM6hEUeS.F/.7r..Pu66zO6BmyPO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-09 09:46:01', '2022-03-10 13:56:17', NULL, 1, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE IF NOT EXISTS `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
