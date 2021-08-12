-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 05 août 2021 à 20:25
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE `achat` (
  `id_a` int(11) NOT NULL,
  `id_f` int(11) NOT NULL,
  `date_a` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `achat`
--

INSERT INTO `achat` (`id_a`, `id_f`, `date_a`) VALUES
(82, 4, '0000-00-00'),
(83, 7, '2015-07-27'),
(84, 3, '2015-07-27'),
(85, 7, '2015-07-27'),
(87, 7, '2015-10-13'),
(88, 1, '2021-07-05'),
(123, 17, '2021-07-07'),
(124, 17, '2021-07-08'),
(125, 17, '2021-07-07'),
(126, 17, '2021-07-07'),
(127, 17, '2021-07-07'),
(128, 17, '2021-07-07'),
(129, 17, '2021-07-08'),
(130, 17, '2021-07-08'),
(131, 17, '2021-07-08'),
(132, 17, '2021-07-08'),
(133, 17, '2021-07-08'),
(134, 17, '2021-07-26'),
(135, 17, '2021-07-26'),
(136, 17, '2021-07-26'),
(137, 21, '2021-07-26'),
(138, 17, '2021-08-01'),
(139, 17, '2021-08-05'),
(140, 17, '2021-08-05'),
(141, 17, '2021-08-05'),
(142, 17, '2021-08-05'),
(143, 17, '2021-08-05'),
(144, 17, '2021-08-05');

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id_a` int(11) NOT NULL,
  `nom_u` varchar(255) DEFAULT NULL,
  `prenom_u` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id_a`, `nom_u`, `prenom_u`, `image`) VALUES
(1, 'ba', 'Aziz', 'test'),
(2, 'seck', 'Lamin', 'test'),
(3, 'Diagne', 'Madieye', 'test'),
(4, 'Fall', 'Cheikh', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `br`
--

CREATE TABLE `br` (
  `id_br` int(11) NOT NULL,
  `id_cpt` int(11) NOT NULL,
  `date` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `br`
--

INSERT INTO `br` (`id_br`, `id_cpt`, `date`) VALUES
(9, 2, '2021-07-30'),
(10, 1, '2021-07-30'),
(11, 2, '2021-07-30'),
(12, 1, '2021-07-30'),
(13, 3, '2021-07-30'),
(14, 4, '2021-07-30'),
(15, 1, '2021-07-30'),
(16, 1, '2021-07-30'),
(17, 1, '2021-07-30'),
(18, 2, '2021-07-30'),
(19, 1, '2021-07-30'),
(20, 1, '2021-07-30'),
(21, 0, '2021-07-30'),
(22, 1, '2021-07-30'),
(23, 3, '2021-07-30'),
(24, 1, '2021-07-30'),
(25, 1, '2021-07-30'),
(26, 0, '2021-07-30'),
(27, 2, '2021-07-30'),
(28, 4, '2021-07-30'),
(29, 1, '2021-07-31'),
(30, 3, '2021-07-31'),
(31, 1, '2021-07-31'),
(32, 3, '2021-07-31'),
(33, 4, '2021-07-31'),
(34, 0, '2021-07-31'),
(35, 0, '2021-07-31'),
(36, 0, '2021-07-31'),
(37, 0, '2021-07-31'),
(38, 0, '2021-07-31'),
(39, 0, '2021-07-31'),
(40, 0, '2021-07-31'),
(41, 0, '2021-07-31'),
(42, 1, '2021-07-31'),
(43, 3, '2021-07-31'),
(44, 1, '2021-07-31'),
(45, 2, '2021-07-31'),
(46, 2, '2021-07-31'),
(47, 1, '2021-07-31'),
(48, 1, '2021-07-31'),
(49, 4, '2021-07-31'),
(50, 1, '2021-08-01'),
(53, 1, '2021-08-01'),
(54, 1, '2021-08-01'),
(55, 2, '2021-08-01'),
(56, 2, '2021-08-01'),
(57, 2, '2021-08-01'),
(58, 2, '2021-08-01'),
(59, 2, '2021-08-01'),
(60, 2, '2021-08-01'),
(62, 2, '2021-08-01'),
(63, 2, '2021-08-02'),
(64, 2, '2021-08-02'),
(65, 6, '2021-08-02'),
(66, 2, '2021-08-02'),
(67, 1, '2021-08-02'),
(69, 2, '2021-08-02'),
(70, 1, '2021-08-02'),
(71, 2, '2021-08-02'),
(72, 2, '2021-08-02'),
(73, 2, '2021-08-02'),
(74, 2, '2021-08-02'),
(75, 2, '2021-08-02'),
(76, 2, '2021-08-02'),
(77, 2, '2021-08-03'),
(78, 2, '2021-08-03'),
(79, 2, '2021-08-03'),
(80, 0, '2021-08-03'),
(81, 0, '2021-08-03'),
(82, 0, '2021-08-03'),
(83, 0, '2021-08-03'),
(84, 0, '2021-08-03'),
(85, 2, '2021-08-03'),
(86, 2, '2021-08-03'),
(87, 2, '2021-08-03'),
(88, 1, '2021-08-03'),
(89, 1, '2021-08-03'),
(90, 2, '2021-08-03'),
(91, 2, '2021-08-03'),
(92, 1, '2021-08-03'),
(93, 2, '2021-08-03'),
(94, 2, '2021-08-03'),
(95, 2, '2021-08-04'),
(96, 31, '2021-08-04'),
(97, 30, '2021-08-04'),
(98, 30, '2021-08-04'),
(99, 30, '2021-08-04'),
(100, 30, '2021-08-04'),
(101, 30, '2021-08-04'),
(102, 30, '2021-08-04'),
(103, 30, '2021-08-04'),
(104, 30, '2021-08-04'),
(105, 30, '2021-08-04'),
(106, 6, '2021-08-05'),
(107, 6, '2021-08-05'),
(108, 6, '2021-08-05'),
(109, 6, '2021-08-05'),
(110, 6, '2021-08-05'),
(111, 6, '2021-08-05'),
(112, 6, '2021-08-05'),
(113, 6, '2021-08-05'),
(114, 6, '2021-08-05'),
(115, 6, '2021-08-05'),
(116, 10, '2021-08-05'),
(117, 10, '2021-08-05'),
(118, 6, '2021-08-05'),
(119, 2, '2021-08-05'),
(120, 11, '2021-08-05');

-- --------------------------------------------------------

--
-- Structure de la table `centre`
--

CREATE TABLE `centre` (
  `id_c` int(11) NOT NULL,
  `nom_centre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `centre`
--

INSERT INTO `centre` (`id_c`, `nom_centre`) VALUES
(1, 'PA'),
(2, 'DP'),
(3, 'GW');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_clt` int(11) NOT NULL,
  `CIN` varchar(200) NOT NULL,
  `Nom` varchar(20) DEFAULT NULL,
  `Prenom` varchar(200) NOT NULL,
  `tele` varchar(20) DEFAULT NULL,
  `Adresse` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_clt`, `CIN`, `Nom`, `Prenom`, `tele`, `Adresse`) VALUES
(51, 'AD85584', 'Mansouri', 'Zakaria', '06959995', 'hay inbiaat sale'),
(52, 'AE8549', 'Ahmed', 'Safrioui', '058498984', 'Hay takadoum Rabat'),
(53, 'AB28841', 'Bouazaoui', 'Ali', '054894958', 'Hay karima Sale'),
(54, 'BE184568', 'Asrii', 'youness', '0654985', ''),
(55, 'DR15649', 'Jarfi', 'said', '068848984', ''),
(56, 'SD54187', 'Bazoui', 'Mohamed', '058494', 'sale'),
(58, 'Autre', 'Autre', 'Autre', 'Autre', 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id_cpt` int(11) UNSIGNED NOT NULL,
  `login` char(15) NOT NULL,
  `nom_u` char(30) NOT NULL,
  `prenom_u` char(30) NOT NULL,
  `password` char(30) NOT NULL,
  `centre` char(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id_cpt`, `login`, `nom_u`, `prenom_u`, `password`, `centre`) VALUES
(1, 'Admin', 'Ndiaye', 'Cheikh', 'admin', 'PA'),
(2, 'ba', 'Ba', 'Aziz', 'test', 'DK'),
(3, 'test', 'Dieye', 'Sadikh', 'test', 'KM'),
(4, 'test', 'Fall', 'Ibou', 'test', 'DP'),
(5, 'test', 'Ba', 'Laye', 'test', 'GW'),
(6, 'Admin', 'Ndiaye', 'Cheikh', 'admin', 'PA'),
(7, 'test', 'Ba', 'Aziz', 'test', 'PA'),
(8, 'test', 'Dieye', 'Sadikh', 'test', 'KM'),
(9, 'test', 'Fall', 'Ibou', 'test', 'DP'),
(10, 'test', 'Ba', 'Laye', 'test', 'GW'),
(11, 'log', 'sarr', 'binta', 'test', 'GW');

-- --------------------------------------------------------

--
-- Structure de la table `compte_autorise`
--

CREATE TABLE `compte_autorise` (
  `id_c` int(11) NOT NULL,
  `id_cpt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte_autorise`
--

INSERT INTO `compte_autorise` (`id_c`, `id_cpt`) VALUES
(1, 24),
(1, 25),
(1, 26),
(2, 24),
(2, 26),
(2, 27),
(3, 25);

-- --------------------------------------------------------

--
-- Structure de la table `detail_compte`
--

CREATE TABLE `detail_compte` (
  `id_cpt` int(11) NOT NULL,
  `nom_u` varchar(255) DEFAULT NULL,
  `prenom_u` varchar(255) DEFAULT NULL,
  `Nom_centre` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `d_achat`
--

CREATE TABLE `d_achat` (
  `id_da` int(11) NOT NULL,
  `id_a` int(11) NOT NULL,
  `id_m` int(11) NOT NULL,
  `qte_a` int(11) NOT NULL,
  `im` varchar(255) DEFAULT NULL,
  `dda` varchar(255) DEFAULT NULL,
  `dde` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `d_achat`
--

INSERT INTO `d_achat` (`id_da`, `id_a`, `id_m`, `qte_a`, `im`, `dda`, `dde`) VALUES
(1, 129, 83, 45, '45', 'kjklm', 'fghj'),
(2, 129, 0, 0, '', '', ''),
(3, 129, 0, 0, '', '', ''),
(4, 129, 0, 0, '', '', ''),
(5, 129, 0, 0, '', '', ''),
(6, 129, 0, 0, '', '', ''),
(7, 129, 0, 0, '', '', ''),
(8, 129, 0, 0, '', '', ''),
(9, 129, 0, 0, '', '', ''),
(10, 129, 0, 0, '', '', ''),
(11, 129, 0, 0, '', '', ''),
(12, 129, 0, 0, '', '', ''),
(13, 129, 0, 0, '', '', ''),
(14, 129, 0, 0, '', '', ''),
(15, 129, 0, 0, '', '', ''),
(16, 129, 0, 0, '', '', ''),
(17, 129, 0, 0, '', '', ''),
(18, 129, 0, 0, '', '', ''),
(19, 129, 0, 0, '', '', ''),
(20, 129, 0, 0, '', '', ''),
(21, 129, 0, 0, '', '', ''),
(22, 129, 0, 0, '', '', ''),
(23, 129, 0, 0, '', '', ''),
(24, 129, 0, 0, '', '', ''),
(25, 129, 0, 0, '', '', ''),
(26, 129, 0, 0, '', '', ''),
(27, 129, 0, 0, '', '', ''),
(28, 129, 0, 0, '', '', ''),
(29, 129, 0, 0, '', '', ''),
(30, 129, 0, 0, '', '', ''),
(31, 129, 0, 0, '', '', ''),
(32, 129, 0, 0, '', '', ''),
(33, 129, 0, 0, '', '', ''),
(34, 129, 0, 0, '', '', ''),
(35, 130, 83, 47, '456', '', ''),
(36, 130, 83, 456, '56', '', ''),
(37, 130, 83, 0, '', '', ''),
(38, 131, 84, 45, '56', '', NULL),
(39, 133, 24, 456, 'ghjkl', '', NULL),
(40, 133, 0, 0, '', '', NULL),
(41, 133, 0, 0, '', '', NULL),
(42, 133, 0, 0, '', '', NULL),
(43, 133, 0, 0, '', '', NULL),
(44, 133, 0, 0, '', '', NULL),
(45, 133, 0, 0, '', '', NULL),
(46, 133, 0, 0, '', '', NULL),
(47, 133, 0, 0, '', '', NULL),
(48, 133, 0, 0, '', '', NULL),
(49, 133, 0, 0, '', '', NULL),
(50, 133, 0, 0, '', '', NULL),
(51, 133, 0, 0, '', '', NULL),
(52, 133, 0, 0, '', '', NULL),
(53, 133, 0, 0, '', '', NULL),
(54, 133, 0, 0, '', '', NULL),
(55, 133, 0, 0, '', '', NULL),
(56, 133, 0, 0, '', '', NULL),
(57, 133, 0, 0, '', '', NULL),
(58, 133, 0, 0, '', '', NULL),
(59, 133, 0, 0, '', '', NULL),
(60, 133, 0, 0, '', '', NULL),
(61, 133, 0, 0, '', '', NULL),
(62, 133, 0, 0, '', '', NULL),
(63, 133, 0, 0, '', '', NULL),
(64, 133, 33, 45, '12', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `d_br`
--

CREATE TABLE `d_br` (
  `id_d_br` int(11) NOT NULL,
  `id_br` int(11) NOT NULL,
  `centre` varchar(255) NOT NULL,
  `agent` int(11) NOT NULL,
  `id_agent` varchar(255) NOT NULL,
  `im` varchar(255) DEFAULT NULL,
  `dap` date DEFAULT NULL,
  `den` date DEFAULT NULL,
  `mo` varchar(255) DEFAULT NULL,
  `mmht` bigint(255) DEFAULT NULL,
  `mmttc` bigint(255) DEFAULT NULL,
  `nin` varchar(255) DEFAULT NULL,
  `dat` varchar(255) DEFAULT NULL,
  `adr` varchar(255) DEFAULT NULL,
  `cni` bigint(255) DEFAULT NULL,
  `ddcni` date DEFAULT NULL,
  `ppo` varchar(255) DEFAULT NULL,
  `ddppo` date DEFAULT NULL,
  `tel1` bigint(11) DEFAULT NULL,
  `tel2` bigint(11) DEFAULT NULL,
  `rib1` varchar(255) DEFAULT NULL,
  `rib2` varchar(255) DEFAULT NULL,
  `cmt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `d_br`
--

INSERT INTO `d_br` (`id_d_br`, `id_br`, `centre`, `agent`, `id_agent`, `im`, `dap`, `den`, `mo`, `mmht`, `mmttc`, `nin`, `dat`, `adr`, `cni`, `ddcni`, `ppo`, `ddppo`, `tel1`, `tel2`, `rib1`, `rib2`, `cmt`) VALUES
(4, 53, '', 0, '', 'kgrrl', '2021-08-11', '2021-08-12', 'fjjfj', 456666, 456555, 'fghjk', 'cvhjk', 'dfghj', 754, '2021-08-12', 'sdfghj', '2021-08-13', 754, 896542, 'dfgh', 'fghb', 'dcvb'),
(5, 53, '', 0, '', 'dfgh', '2021-08-03', '2021-08-14', 'xcfgvh', 875, 852, 'ertfg', 'dfghj', 'dfghj', 856, '2021-08-11', 'fghj', '2021-08-19', 785, 785, 'ghj', 'gvhbj', 'gvhj'),
(8, 57, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(9, 57, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(10, 57, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(11, 57, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(12, 57, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(13, 57, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(14, 58, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(15, 58, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(16, 59, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(17, 53, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(18, 53, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(19, 53, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(20, 53, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(21, 53, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(22, 53, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(24, 62, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(30, 62, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(31, 62, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(32, 64, '', 0, '', 'ef', '2021-08-01', '2021-08-01', 'fe', 555, 456, 'eff', 'fff', 'efefe', 0, '2021-08-05', 'fef', '2021-08-12', 4646, 5656, 'fe', 'f', 'f'),
(33, 64, '', 0, '', 'ffjvdjkjkjk', '2021-08-03', '2021-08-05', 'hvuvvhvh', 7885, 55544, 'dvhdjhd', 'dvhvh', 'jhdvjhdj', 46565, '2021-08-06', 'vjdvjdj', '2021-08-28', 55555, 6565656, 'bdvdh', 'dvhvhdh', 'dhvhh'),
(34, 65, '', 0, '', 'sdss', '2021-07-31', '2021-08-01', 'ddf', 454545, 545, 'hr', 'grgr', 'grg', 454, '2021-08-01', 'fbf', '2021-08-01', 545, 56, 'df', 'gg', 'g'),
(35, 66, '', 0, '', 'frkfrk', '2021-08-05', '2021-08-04', 'hfhe', 4556, 4566, 'enenen', 'jejej', 'ehhe', 4565, '2021-08-12', 'hehe', '2021-08-06', 445, 4456, 'jeek', 'jeje', 'eje'),
(36, 67, '', 0, '', 'ejejeejej', '2021-08-05', '2021-08-13', 'eheheh', 114545, 55656, 'ehehehj', 'ehejhejh', 'jkeejkjk', 5454545, '2021-08-12', 'ejheh', '2021-08-11', 565656, 56564, 'ejhejhjh', 'jeejhejh', 'ejejh'),
(38, 69, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(39, 70, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(40, 70, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(41, 71, '', 0, '', 'rjj', '2021-08-03', '2021-08-03', 'hjf', 456, 56, 'fvfv', 'dbb', 'ee', 655, '2021-08-04', 'dbdbb', '2021-08-10', 5555, 55555, 'bd', 'b', 'db'),
(42, 72, '', 0, '', 'fehfehfeh', '2021-08-03', '2021-08-02', 'djkfedj', 555656, 45454554, 'kkckcdkl', 'jcdjjjh', 'hdhvjhvvh', 12454545, '2021-08-02', 'ndjjdjk', '2021-08-02', 5454545, 4444, 'ncncdn', 'cdccd', 'cdn'),
(43, 84, '', 0, '', 'fkvfkfvk', '2021-08-03', '2021-08-03', 'kdvkvkdk', 4555555555555, 4555555555, 'hhhhhhhhhh', 'jjjjjj', 'jkkkkkkkk', 44444444, '2021-08-11', 'jhhhhhh', '2021-08-04', 45555555, 544444, 'bnnnnnn', 'nnn', 'nnnnn'),
(44, 85, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(45, 85, '', 0, '', 'jdj', '2021-08-03', '2021-08-13', 'k', 55, 55, 'kk', 'k', 'kll', 0, '2021-08-03', 'jhjh', '2021-08-04', 44545, 555, 'jhjh', 'ljkj', 'ghhg'),
(46, 88, '', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(47, 104, '', 0, '', 'jjjjj', '2021-08-04', '2021-08-04', 'vdhjsjh', 45455, 545, 'dfvjjsvd', 'bvhsvdb', 'jkfvkdsjk', 455, '2021-08-12', 'bsdfvb', '2021-08-12', 55, 564554, 'sbhvh', 'nsdv', 'bvhsdbh'),
(48, 115, 'PA', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(49, 115, 'PA', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(50, 115, 'PA', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(51, 115, 'PA', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(52, 115, 'PA', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(53, 115, 'PA', 0, '', 'jn', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(54, 116, 'GW', 0, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(55, 116, 'GW', 10, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(56, 116, 'GW', 10, '', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(57, 116, 'GW', 10, '', 'dfgh', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(58, 116, 'GW', 10, 'GW10', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(59, 116, 'GW', 10, 'GW10', 'fghjkl', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(61, 119, 'DK', 2, 'DK2', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(62, 119, 'DK', 2, 'DK2', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(63, 119, 'DK', 2, 'DK2', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(64, 119, 'DK', 2, 'DK2', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(65, 119, 'DK', 2, 'DK2', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(66, 119, 'DK', 2, 'DK2', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(67, 119, 'DK', 2, 'DK2', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(68, 119, 'DK', 2, 'DK2', '', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(69, 119, 'DK', 2, 'DK2', 'llklk', '2021-08-05', '2021-08-05', 'vdfdqdksdksddkkvdkvkdvdkdkvkdkddvkdkdkdd', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', ''),
(70, 119, 'DK', 2, 'DK2', 'xsxù', '0000-00-00', '0000-00-00', '', 0, 0, '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `d_compte`
--

CREATE TABLE `d_compte` (
  `id_cpt` int(11) NOT NULL,
  `id_c` int(11) NOT NULL,
  `id_a` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `d_compte`
--

INSERT INTO `d_compte` (`id_cpt`, `id_c`, `id_a`, `password`) VALUES
(1, 1, 1, 'test'),
(2, 2, 2, 'test'),
(3, 3, 3, 'test'),
(4, 3, 3, 'test');

-- --------------------------------------------------------

--
-- Structure de la table `d_vente`
--

CREATE TABLE `d_vente` (
  `id_dv` int(11) NOT NULL,
  `id_v` int(11) NOT NULL,
  `id_m` int(11) NOT NULL,
  `qte_v` int(11) NOT NULL,
  `prix_v` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `d_vente`
--

INSERT INTO `d_vente` (`id_dv`, `id_v`, `id_m`, `qte_v`, `prix_v`) VALUES
(39, 36, 24, 10, 50),
(40, 36, 36, 5, 75),
(43, 38, 25, 2, 40),
(44, 39, 36, 2, 120),
(45, 39, 36, 2, 130),
(46, 36, 25, 6, 396),
(47, 36, 25, 3, 195),
(48, 45, 39, 0, 0),
(49, 50, 24, 1, 1),
(50, 51, 25, 2, 4),
(51, 51, 25, 2, 4),
(52, 51, 41, 0, 0),
(53, 56, 83, 1, 4),
(54, 64, 24, 2, 10),
(55, 64, 24, 1, 2),
(56, 65, 24, 1, 2),
(57, 65, 24, 4, 8);

-- --------------------------------------------------------

--
-- Structure de la table `foo`
--

CREATE TABLE `foo` (
  `FooCode` varchar(16) DEFAULT NULL,
  `Name` varchar(128) DEFAULT NULL,
  `LocalizationCode` varchar(128) GENERATED ALWAYS AS ('Foo.' + `FooCode`) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `foo`
--

INSERT INTO `foo` (`FooCode`, `Name`) VALUES
('lo', 'ba'),
('po', 'ka');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id_f` int(11) NOT NULL,
  `nom_f` varchar(55) NOT NULL,
  `tele_f` varchar(55) NOT NULL,
  `adresse_f` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id_f`, `nom_f`, `tele_f`, `adresse_f`) VALUES
(17, 'PA', '', ''),
(18, 'KM', '', ''),
(19, 'GW', '', ''),
(20, 'Leona', '', ''),
(21, 'KW', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `id_m` int(11) NOT NULL,
  `code_barre` varchar(200) NOT NULL,
  `desg` varchar(55) NOT NULL,
  `form` varchar(55) NOT NULL,
  `famille` varchar(200) NOT NULL,
  `Prix_u` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`id_m`, `code_barre`, `desg`, `form`, `famille`, `Prix_u`) VALUES
(24, '11112', 'DOLIPRANE 1 g', 'Comprimé effervescent sécable', 'DOLIPRANE ', 15),
(25, '2222', 'DOLIPRANE 1 g ', 'Suppositoire', 'DOLIPRANE', 20),
(26, '33333', 'DOLIPRANE 100 mg', ' Sachet', 'DOLIPRANE', 22),
(27, '44444', 'DICLO PHARMA 5 100 mg ', ' Suppositoire', 'DICLO PHARMA 5', 50),
(29, '66666', 'ACIDAC 150 mg ', ' Comprimé', 'ACIDAC', 100),
(30, '7777', 'ACIDAC 300 mg', ' Comprimé', 'ACIDAC ', 23),
(31, '8888', 'ALIVIAR 50 mg', 'Gélule', 'ALIVIAR', 100),
(32, '9999', 'ALPHA-KADOL', ' Pommade', 'ALPHA-KADOL', 10),
(33, '10000', 'AMOXIL 1 g ', 'Comprimé dispersible', 'AMOXIL ', 70),
(34, '100012', 'AMOXIL 125 mg ', 'Poudre pour sirop', 'AMOXIL ', 90),
(35, '10111', 'AMOXIL 250 mg ', 'Poudre pour sirop', 'AMOXIL', 80),
(36, '1121211', 'ANDOL 1000 mg ', 'Comprimé effervescent', 'ANDOL', 60),
(37, '122205', 'ANDRIOL 40 mg', 'Capsule', 'ANDRIOL ', 152);

-- --------------------------------------------------------

--
-- Structure de la table `person`
--

CREATE TABLE `person` (
  `id` int(11) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `person`
--

INSERT INTO `person` (`id`, `first_name`, `age`, `gender`) VALUES
(1, 'Bob', 25, 'M'),
(2, 'Jane', 20, 'F'),
(3, 'Jack', 30, 'M'),
(4, 'Bill', 32, 'M'),
(5, 'Nick', 22, 'M'),
(6, 'Kathy', 18, 'F'),
(7, 'Steve', 36, 'M'),
(8, 'Anne', 25, 'F');

-- --------------------------------------------------------

--
-- Structure de la table `t1`
--

CREATE TABLE `t1` (
  `prefix` char(4) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t1`
--

INSERT INTO `t1` (`prefix`, `id`) VALUES
('KM', 1),
('KM', 2),
('PA', 1),
('PA', 2);

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE `test` (
  `id_cpt` int(11) NOT NULL DEFAULT 0,
  `login` varchar(266) CHARACTER SET latin1 NOT NULL,
  `nom_u` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `prenom_u` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id_cpt`, `login`, `nom_u`, `prenom_u`, `password`, `image`) VALUES
(1, 'PA1', 'ba', 'Aziz', 'test', 'test'),
(2, 'GW2', 'seck', 'Lamin', 'test', 'test'),
(3, 'DP3', 'Diagne', 'Madieye', 'test', 'test'),
(4, 'DP3', 'Diagne', 'Madieye', 'test', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE `vente` (
  `id_v` int(11) NOT NULL,
  `id_clt` int(11) NOT NULL,
  `date_v` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vente`
--

INSERT INTO `vente` (`id_v`, `id_clt`, `date_v`) VALUES
(36, 54, '2015-07-27'),
(38, 56, '2015-07-27'),
(39, 56, '2015-07-27'),
(40, 56, '2021-07-03'),
(41, 51, '2021-07-03'),
(42, 51, '2021-07-03'),
(43, 51, '2021-07-03'),
(44, 51, '2021-07-05'),
(45, 51, '2021-07-05'),
(46, 52, '2021-07-05'),
(47, 51, '2021-07-05'),
(48, 51, '2021-07-05'),
(49, 51, '2021-07-06'),
(50, 51, '2021-07-06'),
(51, 54, '2021-07-06'),
(52, 51, '2021-07-06'),
(53, 51, '2021-07-06'),
(54, 51, '2021-07-06'),
(55, 51, '2021-07-06'),
(56, 51, '2021-07-08'),
(57, 51, '2021-07-08'),
(58, 51, '2021-07-17'),
(59, 51, '2021-07-17'),
(60, 51, '2021-08-05'),
(61, 51, '2021-08-05'),
(62, 51, '2021-08-05'),
(63, 51, '2021-08-05'),
(64, 51, '2021-08-05'),
(65, 51, '2021-08-05');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achat`
--
ALTER TABLE `achat`
  ADD PRIMARY KEY (`id_a`),
  ADD KEY `achat_ibfk_2` (`id_f`);

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id_a`);

--
-- Index pour la table `br`
--
ALTER TABLE `br`
  ADD PRIMARY KEY (`id_br`);

--
-- Index pour la table `centre`
--
ALTER TABLE `centre`
  ADD PRIMARY KEY (`id_c`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_clt`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`centre`,`id_cpt`);

--
-- Index pour la table `compte_autorise`
--
ALTER TABLE `compte_autorise`
  ADD PRIMARY KEY (`id_c`,`id_cpt`),
  ADD KEY `id_cpt` (`id_cpt`);

--
-- Index pour la table `detail_compte`
--
ALTER TABLE `detail_compte`
  ADD PRIMARY KEY (`id_cpt`);

--
-- Index pour la table `d_achat`
--
ALTER TABLE `d_achat`
  ADD PRIMARY KEY (`id_da`);

--
-- Index pour la table `d_br`
--
ALTER TABLE `d_br`
  ADD PRIMARY KEY (`id_d_br`);

--
-- Index pour la table `d_compte`
--
ALTER TABLE `d_compte`
  ADD PRIMARY KEY (`id_cpt`),
  ADD KEY `id_c` (`id_c`),
  ADD KEY `id_a` (`id_a`);

--
-- Index pour la table `d_vente`
--
ALTER TABLE `d_vente`
  ADD PRIMARY KEY (`id_dv`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`id_f`);

--
-- Index pour la table `t1`
--
ALTER TABLE `t1`
  ADD PRIMARY KEY (`prefix`,`id`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`id_v`),
  ADD KEY `vente_ibfk_1` (`id_clt`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achat`
--
ALTER TABLE `achat`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `br`
--
ALTER TABLE `br`
  MODIFY `id_br` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT pour la table `centre`
--
ALTER TABLE `centre`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_clt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id_cpt` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `detail_compte`
--
ALTER TABLE `detail_compte`
  MODIFY `id_cpt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `d_achat`
--
ALTER TABLE `d_achat`
  MODIFY `id_da` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `d_br`
--
ALTER TABLE `d_br`
  MODIFY `id_d_br` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT pour la table `d_compte`
--
ALTER TABLE `d_compte`
  MODIFY `id_cpt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `d_vente`
--
ALTER TABLE `d_vente`
  MODIFY `id_dv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `id_f` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `t1`
--
ALTER TABLE `t1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vente`
--
ALTER TABLE `vente`
  MODIFY `id_v` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
