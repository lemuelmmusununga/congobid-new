-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 18 mars 2022 à 15:50
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

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
  `administrateur_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `administrateurs`
--

INSERT INTO `administrateurs` (`id`, `identification_fiscale`, `poste`, `interne`, `online`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `administrateur_id`) VALUES
(1, '243818086892', 'Directeur Administratrif', 1, '0', '2022-02-16 08:27:39', '2022-03-08 14:55:51', NULL, NULL, NULL, 3, 1, NULL),
(2, '243818086890', 'Web Designer', 1, '0', '2022-02-28 14:32:51', '2022-03-11 15:25:55', '2022-03-11 15:25:55', 1, 1, 2, 4, 1);

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
  `paquet_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `marque`, `promouvoir`, `code_produit`, `description`, `prix`, `prix_marche`, `prix_min`, `prix_max`, `cout_livraison`, `infos_livraison`, `meta_description`, `meta_keywords`, `limite_enchere_auto`, `credit_enchere_auto`, `quantite`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `categorie_id`, `paquet_id`) VALUES
(1, 'Ordinateur portable', 'HP', 1, '11280220221540281', 'Descro^', 500, 1000, 333, 500, '0', 'dgzd', 'hvhef', 'zndbzd', '0', '0', '10', '2022-02-28 14:40:28', '2022-02-28 14:40:28', NULL, NULL, NULL, 3, 1, 1, 2),
(2, 'PS5', 'Konami', 0, '11280220221541192', 'bdbzd', 800, 1600, 533, 800, '0', 'zkfdz', 'ughiuhg', 'eae', '0', '0', '100', '2022-02-28 14:41:19', '2022-02-28 14:41:19', NULL, NULL, NULL, 3, 1, 1, 3),
(3, 'Ordinateur iod', 'zdzd', 1, '21090320221255553', 'b dfdh', 1000, 2000, 3, 5, '0', 'djbqdj', 'daud', 'zhdva', '2', '0', '80', '2022-03-09 11:55:55', '2022-03-09 11:55:55', NULL, NULL, NULL, 3, 1, 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `bideurs`
--

CREATE TABLE `bideurs` (
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
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bideurs`
--

INSERT INTO `bideurs` (`id`, `balance`, `nontransferable`, `bonus`, `roi`, `foudre`, `bouclier`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `paquet_id`, `admin_id`) VALUES
(2, 370, 100, 40, 2, 12, 1, '2022-03-09 09:46:01', '2022-03-15 14:06:47', NULL, 1, NULL, 3, 11, 2, 1);

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
(3, 10, '1', '2022-03-09 13:28:45', '2022-03-09 16:11:25', '2022-03-09 16:11:25', 1, 1, 2, 1),
(4, 80, '5', '2022-03-09 13:39:42', '2022-03-09 13:39:42', NULL, NULL, NULL, 3, 1);

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
(1, 'Informatique', '2022-02-28 14:39:13', '2022-03-09 11:19:35', '2022-03-09 11:19:35', 1, 1, 2, 1),
(2, 'Outils', '2022-02-28 14:42:01', '2022-03-09 16:08:46', '2022-03-09 16:08:46', 1, 1, 2, 1),
(5, 'Simba gdgdg', '2022-03-09 15:32:35', '2022-03-09 15:32:35', NULL, NULL, NULL, 3, 1);

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
-- Structure de la table `encheres`
--

CREATE TABLE `encheres` (
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
  `paquet_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `encheres`
--

INSERT INTO `encheres` (`id`, `click`, `favoris`, `date_debut`, `heure_debut`, `state`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `article_id`, `paquet_id`) VALUES
(1, '0', 6, '2022-03-18', '12:00:00', 1, '2022-02-28 14:40:28', '2022-03-15 14:32:13', NULL, NULL, NULL, 3, 1, 2),
(2, '0', 1, '2022-03-20', '13:00:00', 1, '2022-02-28 14:41:19', '2022-03-15 14:32:09', NULL, NULL, NULL, 3, 2, 3),
(3, '0', 0, '2022-03-18', '13:29:00', 1, '2022-03-09 11:55:55', '2022-03-09 11:55:55', NULL, NULL, NULL, 3, 3, 4);

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
-- Structure de la table `foudres`
--

CREATE TABLE `foudres` (
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
  `enchere_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gagnants`
--

CREATE TABLE `gagnants` (
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
  `administrateur_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `gagnants`
--

INSERT INTO `gagnants` (`id`, `lien`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `enchere_id`, `administrateur_id`) VALUES
(1, 'adad', '2022-03-10 15:50:19', '2022-03-10 15:50:19', NULL, NULL, NULL, 3, 11, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `historiques`
--

CREATE TABLE `historiques` (
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
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `historiques`
--

INSERT INTO `historiques` (`id`, `action`, `type`, `destination_id`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'Réactivation du compte agent', 1, 9, '2022-03-10 09:10:00', '2022-03-10 09:10:00', NULL, NULL, NULL, 3, 1),
(2, 'Suppression du compte agent', 1, 9, '2022-03-10 09:11:17', '2022-03-10 09:11:17', NULL, NULL, NULL, 3, 1),
(3, 'Réactivation du compte agent', 1, 9, '2022-03-10 09:11:36', '2022-03-10 09:11:36', NULL, NULL, NULL, 3, 1),
(4, 'Suppression du compte agent', 1, 9, '2022-03-10 09:11:39', '2022-03-10 09:11:39', NULL, NULL, NULL, 3, 1),
(5, 'Réactivation du compte agent', 1, 9, '2022-03-10 09:54:14', '2022-03-10 09:54:14', NULL, NULL, NULL, 3, 1),
(6, 'Activation du compte agent', 1, 4, '2022-03-10 13:02:01', '2022-03-10 13:02:01', NULL, NULL, NULL, 3, 1),
(7, 'Réactivation du compte bideur', 2, 11, '2022-03-10 13:55:47', '2022-03-10 13:55:47', NULL, NULL, NULL, 3, 1),
(8, 'Suppression du compte bideur', 2, 11, '2022-03-10 13:56:13', '2022-03-10 13:56:13', NULL, NULL, NULL, 3, 1),
(9, 'Réactivation du compte bideur', 2, 11, '2022-03-10 13:56:17', '2022-03-10 13:56:17', NULL, NULL, NULL, 3, 1),
(10, 'Connexion à son compte', 0, 11, '2022-03-11 10:01:19', '2022-03-11 10:01:19', NULL, NULL, NULL, 3, 11),
(11, 'Connexion à son compte', 0, 11, '2022-03-11 10:04:19', '2022-03-11 10:04:19', NULL, NULL, NULL, 3, 11),
(12, 'Suppression du compte agent', 1, 9, '2022-03-11 15:22:09', '2022-03-11 15:22:09', NULL, NULL, NULL, 3, 1),
(13, 'Réactivation du compte agent', 1, 9, '2022-03-11 15:22:15', '2022-03-11 15:22:15', NULL, NULL, NULL, 3, 1),
(14, 'Suppression du compte agent', 1, 4, '2022-03-11 15:25:55', '2022-03-11 15:25:55', NULL, NULL, NULL, 3, 1),
(15, 'Modification d\'une catégorie', 3, 2, '2022-03-11 15:34:43', '2022-03-11 15:34:43', NULL, NULL, NULL, 3, 1),
(16, 'Modification d\'une catégorie', 3, 3, '2022-03-11 15:34:53', '2022-03-11 15:34:53', NULL, NULL, NULL, 3, 1);

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
(3, 'Ordinateur iod_3.webp', '2022-03-09 11:55:55', '2022-03-09 11:55:55', NULL, NULL, NULL, 3, 1, 3);

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
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `salon_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_01_20_010306_create_statuts_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(5, '2016_01_01_000000_add_voyager_user_fields', 1),
(6, '2016_01_01_000000_create_data_types_table', 1),
(7, '2016_01_01_000000_create_posts_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(17, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(18, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(19, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(20, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(21, '2017_08_05_000000_add_group_to_settings_table', 1),
(22, '2017_11_26_013050_add_user_role_relationship', 1),
(23, '2017_11_26_015000_create_user_roles_table', 1),
(24, '2018_03_11_000000_add_user_settings', 1),
(25, '2018_03_14_000000_add_details_to_data_types_table', 1),
(26, '2018_03_16_000000_make_settings_value_nullable', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(29, '2022_01_11_002805_create_administrateurs_table', 1),
(30, '2022_01_18_034450_create_paquets_table', 1),
(31, '2022_01_19_002858_create_categories_table', 1),
(32, '2022_01_19_002942_create_articles_table', 1),
(33, '2022_01_20_003053_create_salons_table', 1),
(34, '2022_01_20_153233_create_sessions_table', 1),
(35, '2022_01_21_002909_create_bids_table', 1),
(36, '2022_01_21_113414_create_bideurs_table', 1),
(37, '2022_01_21_113611_create_types_comptes_table', 1),
(38, '2022_01_21_114155_create_images_table', 1),
(39, '2022_01_21_123415_create_pivot_clients_salons_table', 1),
(40, '2022_01_21_124544_create_types_coupons_table', 1),
(41, '2022_01_21_124603_create_coupons_table', 1),
(42, '2022_01_21_193323_create_comptes_table', 1),
(43, '2022_01_22_062808_create_encheres_table', 1),
(44, '2022_01_24_115253_create_newsletters_table', 1),
(45, '2022_01_24_115552_create_news_table', 1),
(46, '2022_01_24_120154_create_pages_table', 1),
(47, '2022_01_24_130730_create_departements_table', 1),
(48, '2022_01_24_133117_create_sources_table', 1),
(49, '2022_01_24_135421_create_pays_table', 1),
(50, '2022_02_03_102044_create_sanctions_table', 1),
(51, '2022_02_03_103427_create_messages_table', 1),
(52, '2022_02_03_104000_create_chats_table', 1),
(53, '2022_02_03_104734_create_rois_table', 1),
(54, '2022_02_03_105001_create_foudres_table', 1),
(55, '2022_02_04_121349_add_google_id_column', 1),
(56, '2022_02_07_093640_create_promotions_table', 1),
(57, '2022_02_14_113134_create_gagnants_table', 1),
(58, '2022_02_14_113403_create_instructions_table', 1),
(60, '2022_02_16_135750_create_communiques_table', 1),
(61, '2022_02_21_111111_create_notifications_table', 1),
(62, '2022_03_08_161339_create_historiques_table', 2),
(64, '2022_03_18_132834_create_faqs_table', 3),
(65, '2022_02_16_135301_create_pivot_bideur_encheres_table', 4);

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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'roger@gmail.com', '2022-03-09 17:12:14', '2022-03-09 16:12:39', '2022-03-09 16:12:39', 1, 1, 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
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
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `prix` int(11) NOT NULL,
  `min` int(11) DEFAULT NULL,
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

INSERT INTO `paquets` (`id`, `libelle`, `nombre_enchere`, `duree`, `prix`, `min`, `max`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`) VALUES
(1, 'Simba', 10, 55, 10, 1, 200, '2022-02-14 11:45:20', '2022-03-09 11:11:52', NULL, 1, NULL, 3, 1),
(2, 'Benda', 20, 120, 30, 201, 500, '2022-02-14 11:45:44', '2022-03-11 15:34:43', '2022-03-09 16:08:54', 1, 1, 2, 1),
(3, 'Turbo', 30, 160, 50, 501, 1000, '2022-02-14 13:32:59', '2022-03-11 15:34:53', NULL, 1, NULL, 3, 1),
(4, 'Beton', 40, 180, 40, 1001, 2000, '2022-02-14 13:33:28', '2022-03-09 10:59:19', NULL, 1, NULL, 3, 1),
(5, 'Bulldozer', 50, 200, 50, 2001, 5000, '2022-02-14 13:34:14', '2022-03-09 10:59:19', NULL, 1, NULL, 3, 1),
(6, 'Sukisa', 10, 250, 60, 5001, NULL, '2022-02-14 13:44:00', '2022-03-09 10:59:19', NULL, 1, NULL, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `enchere_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pivot_bideur_encheres`
--

INSERT INTO `pivot_bideur_encheres` (`id`, `valeur`, `roi`, `foudre`, `bouclier`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`, `user_id`, `enchere_id`) VALUES
(1, 10, 0, 0, 0, '2022-03-18 13:45:42', '2022-03-18 13:45:42', NULL, NULL, NULL, 3, 11, 1),
(2, 318, 0, 0, 0, '2022-03-18 13:48:40', '2022-03-18 13:48:40', NULL, NULL, NULL, 3, 11, 3);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_updated_at` int(11) DEFAULT NULL,
  `id_deleted_at` int(11) DEFAULT NULL,
  `statut_id` bigint(20) UNSIGNED NOT NULL,
  `enchere_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `limite` int(11) NOT NULL DEFAULT '20',
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
(1, 'Salon #1', 20, NULL, NULL, '2022-02-28 14:40:28', '2022-02-28 14:40:28', NULL, NULL, NULL, 3, 1),
(2, 'Salon #2', 20, NULL, NULL, '2022-02-28 14:41:19', '2022-02-28 14:41:19', NULL, NULL, NULL, 3, 2),
(3, 'Salon #3', 20, NULL, NULL, '2022-03-09 11:55:55', '2022-03-09 11:55:55', NULL, NULL, NULL, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `sanctions`
--

CREATE TABLE `sanctions` (
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
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `statut_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `nom`, `username`, `provider_id`, `telephone`, `sexe`, `email`, `avatar`, `date_naissance`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `settings`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `deleted_at`, `id_updated_at`, `id_deleted_at`, `statut_id`) VALUES
(1, 1, 'Roger Mutoto', 'Seymour', NULL, '243818086892', 'Masculin', 'admin@admin.com', '243818086892.webp', '2020-09-02', NULL, '$2y$10$T4fbBuit8NcQiTp3Snu5uewP7lM6hEUeS.F/.7r..Pu66zO6BmyPO', NULL, NULL, 'Is9i9SEbyKW69wl7gnzDOUuRk7CZ3eawWyJixRwM1WIkk8jwjlAAwofypvQ9', NULL, NULL, '', '2022-01-24 07:06:55', '2022-03-08 14:55:51', NULL, NULL, NULL, 3),
(4, 3, 'Pedrien Kinkani', 'Pedro', NULL, '243818086890', 'Masculin', 'pedro@congobid.com', '243818086890.webp', '2022-02-02', NULL, '$2y$10$T4fbBuit8NcQiTp3Snu5uewP7lM6hEUeS.F/.7r..Pu66zO6BmyPO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-28 14:32:51', '2022-03-11 15:25:55', '2022-03-11 15:25:55', 1, 1, 2),
(11, 5, 'Musunga Alex', 'LmPro', NULL, '243818086893', 'Masculin', 'alex@gmail.com', '243818086893.webp', '2010-02-10', NULL, '$2y$10$T4fbBuit8NcQiTp3Snu5uewP7lM6hEUeS.F/.7r..Pu66zO6BmyPO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-09 09:46:01', '2022-03-10 13:56:17', NULL, 1, NULL, 3);

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
  ADD UNIQUE KEY `administrateurs_identification_fiscale_unique` (`identification_fiscale`),
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departements_statut_id_foreign` (`statut_id`),
  ADD KEY `departements_user_id_foreign` (`user_id`);

--
-- Index pour la table `encheres`
--
ALTER TABLE `encheres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `encheres_statut_id_foreign` (`statut_id`),
  ADD KEY `encheres_article_id_foreign` (`article_id`),
  ADD KEY `encheres_paquet_id_foreign` (`paquet_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faqs_statut_id_foreign` (`statut_id`),
  ADD KEY `faqs_user_id_foreign` (`user_id`);

--
-- Index pour la table `foudres`
--
ALTER TABLE `foudres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foudres_statut_id_foreign` (`statut_id`),
  ADD KEY `foudres_bideur_id_foreign` (`bideur_id`),
  ADD KEY `foudres_user_id_foreign` (`user_id`),
  ADD KEY `foudres_enchere_id_foreign` (`enchere_id`);

--
-- Index pour la table `gagnants`
--
ALTER TABLE `gagnants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gagnants_statut_id_foreign` (`statut_id`),
  ADD KEY `gagnants_user_id_foreign` (`user_id`),
  ADD KEY `gagnants_enchere_id_foreign` (`enchere_id`),
  ADD KEY `gagnants_administrateur_id_foreign` (`administrateur_id`);

--
-- Index pour la table `historiques`
--
ALTER TABLE `historiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historiques_statut_id_foreign` (`statut_id`),
  ADD KEY `historiques_user_id_foreign` (`user_id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_statut_id_foreign` (`statut_id`),
  ADD KEY `images_user_id_foreign` (`user_id`),
  ADD KEY `images_article_id_foreign` (`article_id`);

--
-- Index pour la table `instructions`
--
ALTER TABLE `instructions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructions_statut_id_foreign` (`statut_id`),
  ADD KEY `instructions_user_id_foreign` (`user_id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Index pour la table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_statut_id_foreign` (`statut_id`),
  ADD KEY `messages_salon_id_foreign` (`salon_id`),
  ADD KEY `messages_user_id_foreign` (`user_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_statut_id_foreign` (`statut_id`),
  ADD KEY `news_user_id_foreign` (`user_id`);

--
-- Index pour la table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletters_email_unique` (`email`),
  ADD KEY `newsletters_statut_id_foreign` (`statut_id`),
  ADD KEY `newsletters_user_id_foreign` (`user_id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_statut_id_foreign` (`statut_id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_statut_id_foreign` (`statut_id`),
  ADD KEY `pages_user_id_foreign` (`user_id`);

--
-- Index pour la table `paquets`
--
ALTER TABLE `paquets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paquets_statut_id_foreign` (`statut_id`),
  ADD KEY `paquets_user_id_foreign` (`user_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pays_libelle_unique` (`libelle`),
  ADD UNIQUE KEY `pays_index_unique` (`index`),
  ADD KEY `pays_statut_id_foreign` (`statut_id`),
  ADD KEY `pays_user_id_foreign` (`user_id`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Index pour la table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `pivot_bideur_encheres`
--
ALTER TABLE `pivot_bideur_encheres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_bideur_encheres_statut_id_foreign` (`statut_id`),
  ADD KEY `pivot_bideur_encheres_user_id_foreign` (`user_id`),
  ADD KEY `pivot_bideur_encheres_enchere_id_foreign` (`enchere_id`);

--
-- Index pour la table `pivot_clients_salons`
--
ALTER TABLE `pivot_clients_salons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_clients_salons_statut_id_foreign` (`statut_id`),
  ADD KEY `pivot_clients_salons_user_id_foreign` (`user_id`),
  ADD KEY `pivot_clients_salons_salon_id_foreign` (`salon_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Index pour la table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promotions_statut_id_foreign` (`statut_id`),
  ADD KEY `promotions_user_id_foreign` (`user_id`);

--
-- Index pour la table `rois`
--
ALTER TABLE `rois`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rois_statut_id_foreign` (`statut_id`),
  ADD KEY `rois_enchere_id_foreign` (`enchere_id`),
  ADD KEY `rois_user_id_foreign` (`user_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Index pour la table `salons`
--
ALTER TABLE `salons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salons_statut_id_foreign` (`statut_id`),
  ADD KEY `salons_article_id_foreign` (`article_id`);

--
-- Index pour la table `sanctions`
--
ALTER TABLE `sanctions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanctions_statut_id_foreign` (`statut_id`),
  ADD KEY `sanctions_user_id_foreign` (`user_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Index pour la table `sources`
--
ALTER TABLE `sources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sources_statut_id_foreign` (`statut_id`),
  ADD KEY `sources_user_id_foreign` (`user_id`);

--
-- Index pour la table `statuts`
--
ALTER TABLE `statuts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Index pour la table `types_comptes`
--
ALTER TABLE `types_comptes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `types_comptes_statut_id_foreign` (`statut_id`),
  ADD KEY `types_comptes_user_id_foreign` (`user_id`);

--
-- Index pour la table `types_coupons`
--
ALTER TABLE `types_coupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `types_coupons_statut_id_foreign` (`statut_id`),
  ADD KEY `types_coupons_user_id_foreign` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_telephone_unique` (`telephone`),
  ADD KEY `users_statut_id_foreign` (`statut_id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Index pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateurs`
--
ALTER TABLE `administrateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `bideurs`
--
ALTER TABLE `bideurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT pour la table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `encheres`
--
ALTER TABLE `encheres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `foudres`
--
ALTER TABLE `foudres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gagnants`
--
ALTER TABLE `gagnants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `historiques`
--
ALTER TABLE `historiques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `instructions`
--
ALTER TABLE `instructions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `paquets`
--
ALTER TABLE `paquets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pivot_bideur_encheres`
--
ALTER TABLE `pivot_bideur_encheres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `pivot_clients_salons`
--
ALTER TABLE `pivot_clients_salons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rois`
--
ALTER TABLE `rois`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `salons`
--
ALTER TABLE `salons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `sanctions`
--
ALTER TABLE `sanctions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sources`
--
ALTER TABLE `sources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `statuts`
--
ALTER TABLE `statuts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `types_comptes`
--
ALTER TABLE `types_comptes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `types_coupons`
--
ALTER TABLE `types_coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `administrateurs`
--
ALTER TABLE `administrateurs`
  ADD CONSTRAINT `administrateurs_administrateur_id_foreign` FOREIGN KEY (`administrateur_id`) REFERENCES `administrateurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `administrateurs_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `administrateurs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_paquet_id_foreign` FOREIGN KEY (`paquet_id`) REFERENCES `paquets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `bideurs`
--
ALTER TABLE `bideurs`
  ADD CONSTRAINT `bideurs_paquet_id_foreign` FOREIGN KEY (`paquet_id`) REFERENCES `paquets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bideurs_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bideurs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `bids`
--
ALTER TABLE `bids`
  ADD CONSTRAINT `bids_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bids_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chats_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `communiques`
--
ALTER TABLE `communiques`
  ADD CONSTRAINT `communiques_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `communiques_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD CONSTRAINT `comptes_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comptes_types_compte_id_foreign` FOREIGN KEY (`types_compte_id`) REFERENCES `types_comptes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comptes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `coupons`
--
ALTER TABLE `coupons`
  ADD CONSTRAINT `coupons_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coupons_types_coupon_id_foreign` FOREIGN KEY (`types_coupon_id`) REFERENCES `types_coupons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coupons_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `departements`
--
ALTER TABLE `departements`
  ADD CONSTRAINT `departements_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `departements_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `encheres`
--
ALTER TABLE `encheres`
  ADD CONSTRAINT `encheres_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `encheres_paquet_id_foreign` FOREIGN KEY (`paquet_id`) REFERENCES `paquets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `encheres_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faqs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `foudres`
--
ALTER TABLE `foudres`
  ADD CONSTRAINT `foudres_bideur_id_foreign` FOREIGN KEY (`bideur_id`) REFERENCES `bideurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foudres_enchere_id_foreign` FOREIGN KEY (`enchere_id`) REFERENCES `encheres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foudres_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foudres_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `gagnants`
--
ALTER TABLE `gagnants`
  ADD CONSTRAINT `gagnants_administrateur_id_foreign` FOREIGN KEY (`administrateur_id`) REFERENCES `administrateurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gagnants_enchere_id_foreign` FOREIGN KEY (`enchere_id`) REFERENCES `encheres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gagnants_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gagnants_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `historiques`
--
ALTER TABLE `historiques`
  ADD CONSTRAINT `historiques_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historiques_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `images_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `images_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `instructions`
--
ALTER TABLE `instructions`
  ADD CONSTRAINT `instructions_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `instructions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_salon_id_foreign` FOREIGN KEY (`salon_id`) REFERENCES `salons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `newsletters`
--
ALTER TABLE `newsletters`
  ADD CONSTRAINT `newsletters_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `newsletters_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `paquets`
--
ALTER TABLE `paquets`
  ADD CONSTRAINT `paquets_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `paquets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `pays`
--
ALTER TABLE `pays`
  ADD CONSTRAINT `pays_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pays_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `pivot_bideur_encheres`
--
ALTER TABLE `pivot_bideur_encheres`
  ADD CONSTRAINT `pivot_bideur_encheres_enchere_id_foreign` FOREIGN KEY (`enchere_id`) REFERENCES `encheres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pivot_bideur_encheres_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pivot_bideur_encheres_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `pivot_clients_salons`
--
ALTER TABLE `pivot_clients_salons`
  ADD CONSTRAINT `pivot_clients_salons_salon_id_foreign` FOREIGN KEY (`salon_id`) REFERENCES `salons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pivot_clients_salons_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pivot_clients_salons_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `promotions`
--
ALTER TABLE `promotions`
  ADD CONSTRAINT `promotions_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `promotions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rois`
--
ALTER TABLE `rois`
  ADD CONSTRAINT `rois_enchere_id_foreign` FOREIGN KEY (`enchere_id`) REFERENCES `encheres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rois_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rois_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `salons`
--
ALTER TABLE `salons`
  ADD CONSTRAINT `salons_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salons_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sanctions`
--
ALTER TABLE `sanctions`
  ADD CONSTRAINT `sanctions_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanctions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sources`
--
ALTER TABLE `sources`
  ADD CONSTRAINT `sources_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sources_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `types_comptes`
--
ALTER TABLE `types_comptes`
  ADD CONSTRAINT `types_comptes_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `types_comptes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `types_coupons`
--
ALTER TABLE `types_coupons`
  ADD CONSTRAINT `types_coupons_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `types_coupons_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `users_statut_id_foreign` FOREIGN KEY (`statut_id`) REFERENCES `statuts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
