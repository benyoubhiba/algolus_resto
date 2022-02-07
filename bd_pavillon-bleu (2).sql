-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 04 mai 2019 à 19:28
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_pavillon-bleu`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `visiteur` varchar(100) NOT NULL,
  `avis` text NOT NULL,
  `Etoiles` int(11) NOT NULL,
  `validation` varchar(10) NOT NULL DEFAULT 'false',
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `nom_cart` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `activation` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`id_cart`, `nom_cart`, `image`, `activation`) VALUES
(29, 'carte du Printemps au Pavillon Bleu à la Varenne Saint Hilaire', '1553531387-apropos.jpg', 1),
(32, 'Carte du Printemps au Pavillon Bleu à la Varenne Saint Hilaire', '1553773684-bg2.jpg', 1),
(36, 'TOUS NOS PLATS ET DESSERTS SONT FAITS MAISON', '1556535617-9.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `detaille`
--

CREATE TABLE `detaille` (
  `id_detaille` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `image` text NOT NULL,
  `id_cart` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `detaille`
--

INSERT INTO `detaille` (`id_detaille`, `titre`, `prix`, `image`, `id_cart`, `id_menu`) VALUES
(21, 'Oeuf de ferme « parfait » Mikado d&#039;asperges vertes à l&#039;huile d&#039;olive au thym', 18, 'avatar.png', 29, 0),
(5, 'Saumon fumé au foin, crème d&#039;Isigny ,blinis ', 18, 'avatar.png', 29, 0),
(6, 'Velouté de langoustines du Finistère', 18, 'avatar.png', 29, 0),
(7, 'Carpaccio de bar mariné de fenouil sauvage et pommes rattes givrées', 18, 'avatar.png', 29, 0),
(8, 'Ravioles de fois gras de canard,velouté fin de volaille', 18, 'avatar.png', 29, 11),
(9, 'Ou retour à la terre:', 8000, 'avatar.png', 17, 0),
(16, 'redwan', 8000, 'avatar.png', 17, 0),
(55, 'Terrine de canard à la façon « Fernand Daint »    ', 18, 'avatar.png', 36, 0),
(15, 'reda', 18, 'avatar.png', 17, 0),
(19, 'Ou retour à la terre:', 6000, 'avatar.png', 17, 0),
(14, 'sh', 100, 'avatar.png', 17, 0),
(17, '103', 100, 'avatar.png', 17, 0),
(18, 'Ou retour à la terre:', 6000, 'avatar.png', 17, 0),
(54, 'Saumon d’Ecosse fumé au foin, blinis et crème d’alsigny          ', 18, 'avatar.png', 36, 0),
(20, 'Carpaccio de bar mariné de fenouil sauvage et pommes rattes givrées', 18, 'avatar.png', 29, 0),
(22, 'Marbré de foie gras Landais, chutney de figues aux éclats de nougatines et citrons confits', 28, 'avatar.png', 29, 0),
(23, 'Saint Jacques Normande poêlées, beurre Nantais ', 28, 'avatar.png', 29, 0),
(24, 'Bar rôti à la nacre,beurre d&#039;algues', 38, 'avatar.png', 29, 0),
(25, 'Ragoût malin de queues de langoustines, asperges et morilles de printemps œuf de poule', 68, 'avatar.png', 29, 0),
(26, 'Ou retour à la terre:', 48, 'avatar.png', 29, 0),
(27, 'Fricassée de homard bleu,petits légumes ', 98, 'avatar.png', 29, 0),
(28, 'Fricassée de volaille fermière du Périgord à la crème d&#039;Estragon ', 28, 'avatar.png', 29, 0),
(29, 'Tête de veau, jeunes légumes, sauce gribiche ', 28, 'avatar.png', 29, 0),
(30, 'Lapereau farci au comté, crème de cèpes ', 28, 'avatar.png', 29, 0),
(31, 'Boeuf maturé 30 jours blonde d&#039;Aquitaine, gratin Dauphinois', 28, 'avatar.png', 29, 0),
(32, 'Tournedos Rossini foie gras de canard, sauce truffes ', 48, 'avatar.png', 29, 13),
(33, 'Ris de veau au sautoir à la crème', 48, 'avatar.png', 29, 13),
(34, 'Fromages affinés fermiers AOC ', 20, 'avatar.png', 29, 20),
(35, 'Fromages affinés fermiers AOC ', 20, 'avatar.png', 29, 20),
(36, 'Fromages affinés fermiers AOC ', 18, 'avatar.png', 29, 0),
(37, 'Tartelette crème de citron aux agrumes ', 18, 'avatar.png', 29, 0),
(44, 'sh', 8000, 'avatar.png', 17, 0),
(39, 'Tarte fine aux pommes, glace vanille ', 18, 'avatar.png', 29, 0),
(40, 'Baba au vieux rhum, crème de la passion,sorbet noix de coco ', 18, 'avatar.png', 29, 0),
(42, 'tajine', 40, 'avatar.png', 33, 23),
(43, 'tajine kefta', 50, 'avatar.png', 33, 23),
(47, 'sh', 100, 'avatar.png', 32, 0),
(46, 'sh', 18, 'avatar.png', 32, 0),
(48, 'kawazaki', 8000, 'avatar.png', 34, 0),
(49, 'kawazaki', 8000, 'avatar.png', 34, 0),
(50, 'Désirs gourmands:', 6000, 'avatar.png', 29, 0),
(51, 'kawazaki', 52143, 'avatar.png', 29, 0),
(52, 'kawazaki', 52143, 'avatar.png', 29, 0),
(53, '--', 0, 'avatar.png', 29, 0),
(56, 'Mivado d’asperges, ouf de poule parfait                       ', 18, 'avatar.png', 36, 0),
(57, 'Fraicheur de tourteaux de Trouville/mer ', 24, 'avatar.png', 36, 0),
(58, '!fgij', 0, 'avatar.png', 36, 0);

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `id_cart` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id_menu`, `titre`, `id_cart`) VALUES
(1, 'Pour démarrer:', NULL),
(2, 'En route pour la mer:', NULL),
(3, 'Ou retour à la terre:', NULL),
(4, 'En supplément pour agrémenter vos plats:', NULL),
(19, 'sh', 17),
(17, 'kawazakiff55', 17),
(18, 'lkù,kko kj', 17),
(28, '**', 36),
(23, 'tajine', 33),
(27, '--', 36);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_user` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Mail` varchar(320) CHARACTER SET ascii NOT NULL,
  `login` varchar(20) NOT NULL,
  `mot_passe` varchar(50) NOT NULL,
  `profil` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_user`, `Nom`, `Prenom`, `Mail`, `login`, `mot_passe`, `profil`) VALUES
(1, 'admin', 'admin', 'geoffroy.contact@gc-terrasses.fr', 'admin', '18c6d818ae35a3e8279b5330eda01498', 'admin'),
(11, 'redwane', 'ADMIN', '123456', 'admin', '73acd9a5972130b75066c82595a1fae3', 'admin'),
(12, 'redwane', 'ADMIN', 'redwaneberah@gmail.com', 'admin', '0192023a7bbd73250516f069df18b500', 'admin'),
(13, 'redwane', 'ADMIN', 'redwanberah@gmail.com', 'redwane', '67e5f975b83503530cc093f2d59f54dc', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Index pour la table `detaille`
--
ALTER TABLE `detaille`
  ADD PRIMARY KEY (`id_detaille`),
  ADD KEY `detaille_cart_id_cart_fk` (`id_cart`),
  ADD KEY `detaille_menu_id_menu_fk` (`id_menu`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `cart___fk` (`id_cart`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT pour la table `detaille`
--
ALTER TABLE `detaille`
  MODIFY `id_detaille` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
