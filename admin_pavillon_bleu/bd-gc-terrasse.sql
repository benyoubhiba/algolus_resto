-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 23 Mars 2019 à 09:11
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd-gc-terrasse`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

CREATE TABLE `accueil` (
  `id_accueil` int(11) NOT NULL,
  `titre_services` text,
  `description_services` mediumtext,
  `activer_apropos` int(11) NOT NULL DEFAULT '1',
  `titre_apropos` varchar(100) DEFAULT NULL,
  `contenu_apropos` longtext,
  `media_apropos` text,
  `alt_img_apropos` varchar(600) DEFAULT NULL,
  `btn_apropos` varchar(70) NOT NULL,
  `lien_btn_apropos` varchar(200) NOT NULL,
  `msg_marketing` text,
  `text_btn_msg_marketing` varchar(100) DEFAULT NULL,
  `lien_btn_msg_marketing` varchar(600) DEFAULT NULL,
  `bg_msg_marketing` varchar(200) NOT NULL,
  `activer_msg_marketing` int(11) NOT NULL DEFAULT '1',
  `formulaire_contact` int(11) NOT NULL DEFAULT '1',
  `title_seo` text,
  `description_seo` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `accueil`
--

INSERT INTO `accueil` (`id_accueil`, `titre_services`, `description_services`, `activer_apropos`, `titre_apropos`, `contenu_apropos`, `media_apropos`, `alt_img_apropos`, `btn_apropos`, `lien_btn_apropos`, `msg_marketing`, `text_btn_msg_marketing`, `lien_btn_msg_marketing`, `bg_msg_marketing`, `activer_msg_marketing`, `formulaire_contact`, `title_seo`, `description_seo`) VALUES
(1, '', '', 1, 'LE BOIS, UN MATÉRIAU NOBLE POUR EMBELLIR LES ESPACES INTÉRIEURS ET EXTÉRIEURS', '&lt;p dir=&quot;ltr&quot; style=&quot;box-sizing: border-box; margin: 0pt 0px 15pt; font-family: Lato, SansSerif; font-size: 16px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; line-height: 1.38;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; font-family: Arial; font-size: 12pt; vertical-align: baseline; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; white-space: pre-wrap;&quot;&gt;GC Terrasses, entreprise individuelle basée sur Sainte Soulle, réalise tout type d’aménagements, principalement en bois, afin d’agencer et d’embellir vos espaces intérieurs et extérieurs.&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-family: Lato, SansSerif; font-size: 16px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify;&quot;&gt;&lt;span id=&quot;docs-internal-guid-53ce64aa-7fff-6b18-f325-405f8ab98fd6&quot; style=&quot;box-sizing: border-box; font-weight: inherit; font-style: inherit; vertical-align: baseline; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent;&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;p dir=&quot;ltr&quot; style=&quot;box-sizing: border-box; margin: 0pt 0px 15pt; font-family: Lato, SansSerif; font-size: 16px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; text-align: justify; line-height: 1.38;&quot;&gt;&lt;span style=&quot;box-sizing: border-box; font-family: Arial; font-size: 12pt; vertical-align: baseline; margin: 0px; padding: 0px; border: 0px; outline: 0px; background: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; white-space: pre-wrap;&quot;&gt;Une équipe de menuisiers ayant été formée de l’ossature bois à l’agencement, s’occupe de réaliser vos poses de terrasses bois et plages de piscine, de parquets, la réalisation d’abris en tout genre (abris de jardin, carport, bûchers…), la réalisation de placards et dressings sur mesure et bien d’autres projets….&lt;/span&gt;&lt;/p&gt;', 'bg-parallax8.jpg', 'LE BOIS, UN MATÉRIAU NOBLE POUR EMBELLIR LES ESPACES INTÉRIEURS ET EXTÉRIEURS', '', '', '&lt;p&gt;Après s’être fait connaître dans le domaine de la terrasse bois, nous avons décidé de nous développer en intérieur avec la pose de parquets (flottants, collés et cloués) et la réalisation de dressings, placards et meubles, toujours dans un soucis de réaliser des prestations sur mesures et personnelles à chacun.&lt;/p&gt;', '', '', '', 1, 1, 'GC TERRASSES : Spécialiste de l’aménagement en bois à Sainte Soulle', 'Notre entreprise  réalise tout type d’aménagements, principalement en bois, afin d’agencer et d’embellir vos espaces intérieurs et extérieurs');

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE `actualites` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(100) CHARACTER SET utf8 NOT NULL,
  `url` mediumtext COLLATE latin1_general_cs NOT NULL,
  `auteur` text COLLATE latin1_general_cs NOT NULL,
  `resume` mediumtext CHARACTER SET utf8 NOT NULL,
  `contenu` longtext CHARACTER SET utf8 NOT NULL,
  `date_pub` date DEFAULT NULL,
  `categorie` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT 'sans catégorie',
  `image_contenu` text COLLATE latin1_general_cs NOT NULL,
  `date_modif` datetime DEFAULT NULL,
  `date_archivage` datetime DEFAULT NULL,
  `image_min` text COLLATE latin1_general_cs,
  `archive` tinyint(1) NOT NULL DEFAULT '0',
  `id_categorie` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

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
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_cat` int(11) NOT NULL,
  `libelle` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id_cat`, `libelle`) VALUES
(2, 'test');

-- --------------------------------------------------------

--
-- Structure de la table `galerie`
--

CREATE TABLE `galerie` (
  `id_galerie` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `activation` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `galerie`
--

INSERT INTO `galerie` (`id_galerie`, `nom`, `activation`) VALUES
(1, 'Nos réalisation', 1),
(2, 'galerie-accueil', 1),
(3, 'terrasse bois sous-galerie 1', 1),
(4, 'abris sur mesure', 1),
(5, 'Bardages et pergolas bois', 1),
(6, 'parquet et lambris', 1),
(7, 'Agencement Intérieur', 1),
(8, 'Agencement Intérieur sous-galerie 1', 1),
(9, 'Agencement Intérieur sous-galerie 2', 1),
(10, 'Agencement Intérieur autre section', 1),
(11, 'terrasse bois ', 1),
(12, 'terrasse bois sous-galerie 2', 1);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `alt_image` text NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id_image`, `image`, `alt_image`, `ordre`) VALUES
(1, '1550830984-gcterasse2.jpg', 'GC Terrasses', 1),
(2, '1550831012-gcterasse3.jpg', 'GC Terrasses', 1),
(3, '1550831031-gcterasse4.jpg', 'GC Terrasses', 1),
(4, '1550831051-gcterasse5.jpg', 'GC Terrasses', 1),
(5, '1550844036-home-1.jpg', 'GC Terrasses', 1),
(6, '1550844066-home-2.jpg', 'GC Terrasses', 1),
(7, '1550844094-home-3.jpg', 'GC Terrasses', 1),
(8, '1551171185-terrasseBois1.jpg', 'terrasse bois', 1),
(9, '1551171216-terrasseBois2.jpg', 'terrasse bois', 1),
(10, '1551171255-terrasseBois4.jpg', 'terrasse bois', 1),
(11, '1551172590-abris1.jpg', 'abris sur mesure', 1),
(12, '1551172620-abris-5.jpg', 'abris sur mesure', 1),
(13, '1551172636-abris6.jpg', 'abris sur mesure', 1),
(14, '1551175792-abris-4.jpg', 'abris sur mesure', 1),
(15, '1551179954-pergolas1.jpg', 'Bardages et pergolas bois', 1),
(16, '1551180013-pergolas.jpg', 'Bardages et pergolas bois', 1),
(17, '1551180037-pergolas5.jpg', 'Bardages et pergolas bois', 1),
(18, '1551180072-pergolas4.jpg', 'Bardages et pergolas bois', 1),
(19, '1551181204-parquelambris3.jpeg', 'PARQUET ET LAMBRIS', 1),
(20, '1551181252-parquetLambris4.jpg', 'PARQUET ET LAMBRIS', 1),
(21, '1551181288-parquetLambris_1.jpg', 'PARQUET ET LAMBRIS', 1),
(22, '1551181320-parquetLambris.jpg', 'PARQUET ET LAMBRIS', 1),
(23, '1551181355-parquelambris2.jpeg', 'PARQUET ET LAMBRIS', 1),
(24, '1551186662-agencement11.jpg', ' AGENCEMENT INTÉRIEUR', 1),
(25, '1551186813-Slide2.jpg', 'agencement intérieur', 1),
(26, '1551187076-amenagment-int-s4.jpg', 'agencement intérieur', 1),
(27, '1551187105-amenagment-int-s1.jpg', 'agencement intérieur', 1),
(28, '1551187211-Mur-Slid1.jpg', 'agencement intérieur', 1),
(29, '1551187228-Mur-Slid2.jpg', 'agencement intérieur', 1),
(30, '1551191337-amenagment-int-s3.jpg', 'agencement intérieur', 1),
(31, '1551191846-agencement2.jpg', 'agencement intérieur', 1),
(32, '1551194253-agencement3d.png', 'agencement intérieur', 1),
(33, '1551194269-agencement3d1.png', 'agencement intérieur', 1),
(34, '1551196312-terass-bois.jpg', 'terrasse bois', 1),
(35, '1551196333-terass-bois1.jpg', 'terrasse bois', 1),
(36, '1551196334-terass-bois1.jpg', 'terrasse bois', 1),
(37, '1551196352-terass-bois2.jpg', 'terrasse bois', 1),
(38, '1551196368-terass-bois3.jpg', 'terrasse bois', 1),
(39, '1551196496-composite4.jpg', 'terrasse bois', 1),
(40, '1551196516-composite.jpg', 'terrasse bois', 1),
(41, '1551196543-composite1.jpg', 'terrasse bois', 1),
(42, '1551196563-composite2.jpg', 'terrasse bois', 1),
(43, '1551196575-composite3.jpg', 'terrasse bois', 1),
(44, '1551259869-gcterasse1-min.jpg', 'GC Terrasses', 1);

-- --------------------------------------------------------

--
-- Structure de la table `img_galerie`
--

CREATE TABLE `img_galerie` (
  `id_img_galerie` int(11) NOT NULL,
  `id_img` int(11) NOT NULL,
  `id_galerie` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `img_galerie`
--

INSERT INTO `img_galerie` (`id_img_galerie`, `id_img`, `id_galerie`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 2),
(6, 6, 2),
(7, 7, 2),
(8, 6, 3),
(9, 8, 3),
(10, 9, 3),
(11, 10, 3),
(12, 11, 4),
(13, 12, 4),
(14, 13, 4),
(16, 14, 4),
(17, 7, 5),
(18, 15, 5),
(19, 16, 5),
(20, 17, 5),
(21, 18, 5),
(22, 19, 6),
(23, 20, 6),
(24, 21, 6),
(25, 22, 6),
(26, 23, 6),
(27, 19, 7),
(28, 21, 7),
(29, 24, 7),
(39, 30, 8),
(40, 31, 7),
(32, 26, 8),
(33, 27, 8),
(34, 28, 9),
(35, 29, 9),
(41, 32, 10),
(42, 33, 10),
(43, 34, 11),
(44, 35, 11),
(45, 37, 11),
(46, 38, 11),
(47, 39, 12),
(48, 40, 12),
(49, 41, 12),
(50, 42, 12),
(51, 43, 12),
(52, 44, 1);

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `id_page` int(11) NOT NULL,
  `titre_service` varchar(70) NOT NULL,
  `accroche` varchar(200) NOT NULL,
  `baniere` varchar(200) NOT NULL,
  `activer_titre_descrip` int(11) NOT NULL DEFAULT '1',
  `titre_page` varchar(100) NOT NULL DEFAULT '',
  `description_page` text NOT NULL,
  `activer_section_avant_pied_page` int(11) NOT NULL DEFAULT '1',
  `section_avant_pied_page` text NOT NULL,
  `img_arriere_plan` varchar(100) NOT NULL DEFAULT '',
  `text_btn_section_avant_pied_page` varchar(100) NOT NULL DEFAULT '',
  `lien_btn_section_avant_pied_page` varchar(200) NOT NULL DEFAULT '',
  `title_seo` text NOT NULL,
  `description_seo` text NOT NULL,
  `lien` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `page`
--

INSERT INTO `page` (`id_page`, `titre_service`, `accroche`, `baniere`, `activer_titre_descrip`, `titre_page`, `description_page`, `activer_section_avant_pied_page`, `section_avant_pied_page`, `img_arriere_plan`, `text_btn_section_avant_pied_page`, `lien_btn_section_avant_pied_page`, `title_seo`, `description_seo`, `lien`) VALUES
(1, 'TERRASSE BOIS', 'TERRASSE BOIS', '1550766079-bg-parallax1.jpg', 1, '', '', 0, '', '', '', '', 'Les terrasses bois, une multitude de possibilité chez GC TERRASSES', 'Nous procédons à la fourniture et à la pose de terrasses en bois ou matière composite pour abords de piscine, jardins', 'terrasse-bois'),
(2, 'ABRIS SUR MESURE', 'ABRIS SUR MESURE', '1550766507-bg-parallax1.jpg', 1, 'Autres travaux d’intérieur', '', 1, '', '', '', '', 'Fabrication des abris sur mesure chez GC TERRASSES à Sainte Soulle', 'Les abris de jardins en bois sont devenus indispensables dans vos jardins ou vos cours afin d’y ranger tout le matériel d’entretien de jardin, les vélos, les équipements extérieurs d’été', 'abris-sur-mesure'),
(3, 'MEZZANINE ET PERGOLAS BOIS', 'MEZZANINE ET PERGOLAS BOIS', '1550767256-bg-parallax1.jpg', 0, '', '', 1, '', '', '', '', 'la pergola bois vous offre un espace à vivre naturellement préservé du soleil. ', 'Le bardage est la solution efficace et design pour l’habillage de vos cloisons extérieures, vos ossatures bois ou lors d’isolation par l’extérieur ', 'mezzanine-et-pergolas-bois'),
(4, 'PARQUET ET LAMBRIS', 'PARQUET ET LAMBRIS', '1550767328-bg-parallax1.jpg', 1, '', '', 1, '', '', '', '', 'Entreprise spécialisée dans la pose de parquet et de lambris à Sainte Soulle', 'La pose de parquet est une prestation qui peut paraître d’un premier regard. Notre entreprise  propose des gammes de parquets et de lambris', 'parquet-et-lambris'),
(5, 'AGENCEMENT INTÉRIEUR', 'AGENCEMENT INTÉRIEUR', '1550767485-bg-parallax1.jpg', 1, 'Autres travaux d’intérieur', '', 1, '', '', '', '', 'Entreprise spécialisé dans la menuiserie et l&#039;agencement d&#039;intérieur', 'Geoffroy Cureau est en mesure de vous proposer ses services quant à la réalisation de vos aménagements intérieurs.', 'agencement-interieur'),
(8, 'Nos Réalisations', 'NOS RÉALISATIONS', 'bg-parallax1.jpg', 1, '', '', 1, '', '', '', '', 'Nos réalisations d&#039;aménagement extérieur chez GC TERRASSES à Sainte Soulle', 'Découvrez en photos toutes les réalisations d&#039;aménagements en bois réalisées par Geoffroy Cureau et son équipe.', 'quelques-realisations');

-- --------------------------------------------------------

--
-- Structure de la table `page_contact`
--

CREATE TABLE `page_contact` (
  `id_contact` int(11) NOT NULL,
  `baniere` varchar(200) NOT NULL,
  `accroche` varchar(100) NOT NULL,
  `telephone1` varchar(20) NOT NULL,
  `telephone2` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `fax1` varchar(20) NOT NULL,
  `fax2` varchar(20) NOT NULL,
  `adresse1` varchar(70) NOT NULL,
  `lien_map_adresse1` text NOT NULL,
  `adresse2` text NOT NULL,
  `lien_map_adresse2` text NOT NULL,
  `email` text NOT NULL,
  `email_cc` text NOT NULL,
  `title_seo` text NOT NULL,
  `description_seo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `page_contact`
--

INSERT INTO `page_contact` (`id_contact`, `baniere`, `accroche`, `telephone1`, `telephone2`, `mobile`, `fax1`, `fax2`, `adresse1`, `lien_map_adresse1`, `adresse2`, `lien_map_adresse2`, `email`, `email_cc`, `title_seo`, `description_seo`) VALUES
(1, 'bg-parallax1.jpg', 'CONTACT', '0604512024', '', '', '', '', ' 57 Rue Chemin Vert 17220 SAINTE SOULLE', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2762.347653540971!2d-1.0237379849012231!3d46.18364009317077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48014b6050bd059d%3A0x22edc98c26e52a84!2s57+Rue+du+Chemin+Vert%2C+17220+Sainte-Soulle%2C+France!5e0!3m2!1sfr!2sma!4v1551199427000"  width=100% height=300%  frameborder="0" style="border:0" allowfullscreen></iframe>', '', '', 'geoffroy.contact@gc-terrasses.fr', '', 'Contactez notre entreprise GC Terrasses  spécialiste de l’aménagement bois à Sainte Soulle', 'N&#039;hésitez pas à nous contacter directement par téléphone ou via notre formulaire de contact pour tous vos projets en neuf et en rénovation.');

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

CREATE TABLE `partenaire` (
  `id_partenaire` int(11) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `lien` varchar(100) NOT NULL,
  `title_seo` text NOT NULL,
  `description_seo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `section_page`
--

CREATE TABLE `section_page` (
  `id_section` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `media` varchar(200) NOT NULL DEFAULT '',
  `galerie_sec` int(11) NOT NULL DEFAULT '0',
  `alt_image` text,
  `contenu` longtext NOT NULL,
  `text_btn1` varchar(100) NOT NULL,
  `lien_btn1` varchar(200) NOT NULL,
  `text_btn2` varchar(100) DEFAULT NULL,
  `lien_btn2` varchar(200) DEFAULT NULL,
  `activer` int(11) NOT NULL DEFAULT '1',
  `id_page` int(11) NOT NULL DEFAULT '0',
  `id_accueil` int(11) NOT NULL DEFAULT '0',
  `titre_sous_section` varchar(70) DEFAULT NULL,
  `img_sous_section` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `section_page`
--

INSERT INTO `section_page` (`id_section`, `titre`, `media`, `galerie_sec`, `alt_image`, `contenu`, `text_btn1`, `lien_btn1`, `text_btn2`, `lien_btn2`, `activer`, `id_page`, `id_accueil`, `titre_sous_section`, `img_sous_section`) VALUES
(3, 'Abris de jardin et garage', '1550766732-abris3.jpg', 0, 'Abris de jardin et garage', '&lt;h3&gt;Réalisation de carport&lt;/h3&gt;&lt;p&gt;Que ce soit pour abriter vos véhicules (voitures, campings-cars, caravanes…), ou pour vos équipements extérieur, je vous accompagne dans l’élaboration de votre carport. De la prise de cote, en passant par le dessin 3D, le choix des matériaux, tout est mis en place pour satisfaire vos projets.&lt;/p&gt;', '', '', '', '', 1, 2, 0, NULL, NULL),
(4, 'LES ABRIS EN KIT', '1550766809-abris4.jpg', 0, 'LES ABRIS EN KIT', '&lt;p&gt;Les abris de jardins en bois sont devenus indispensables dans vos jardins ou vos cours afin d’y ranger tout le matériel d’entretien de jardin, les vélos, les équipements extérieurs d’été…&lt;/p&gt;&lt;p&gt;Il existe de nombreux modèles en kit qui vous sont proposés. Cependant leur pose se révèle souvent plus complexe que cela en à l’air. En effet soit par manque d’outillage, soit par manque d’aptitude à bricoler, ces modèles peuvent se révéler être un véritable casse-tête pour le particulier.&lt;/p&gt;&lt;p&gt;C’est pourquoi, je vous propose mes services pour la pose de ce type d’abris en kit. Disposant de l’outillage nécessaire ainsi que l’expérience des modèles à assembler, votre abris sera vite sur pied et étanche afin d’en profiter dans les meilleurs conditions.&lt;/p&gt;', '', '', '', '', 1, 2, 0, NULL, NULL),
(64, 'Bardages et pergolas bois', '', 5, NULL, '&lt;p&gt;Concernant l’étanchéité de votre abris, j’utilise des panneaux imitation tuile ou je réalise celle-ci avec du bardeau bitumé. Pour les projets les plus poussés il est bien entendu possible de réaliser la couverture au moyen de tuiles.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Les abris de jardins, je réalise toujours, dans cet esprit du “sur mesure” vos carport pour abriter voitures, camping-car, caravanes…. mais aussi des bûchers, abris vélos, pergolas….&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Le bardage est la solution efficace et design pour l’habillage de vos cloisons extérieures, vos ossatures bois ou lors d’isolation par l’extérieur. Je m’occupe donc de votre pose de bardage en bois, métallique ou composite.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;Quelques surfaces en bardage bois ou composite !&lt;/p&gt;', '', '', '', '', 1, 3, 0, NULL, NULL),
(67, 'Pose de parquets', '', 6, NULL, '&lt;h2 style=&quot;box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; vertical-align: baseline; padding: 20px 0px; border: 0px; outline: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;&lt;span style=&quot;color: rgb(181, 99, 8);&quot;&gt;La pose de parquets&lt;/span&gt;&lt;/h2&gt;&lt;p style=&quot;box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;Choisir un type de parquet n’est pas aussi simple que l’on pourrait le penser. Plusieurs paramètres doivent être pris en compte au même titre que le budget afin de faire ce choix. En effet on peut trouver des parquets à coller, à clouer ou à emboîtement (dit pose flottante). Je vais en quelques mots vous donner quelques aspects de chaque type de pose.&lt;/p&gt;&lt;h2 style=&quot;box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; vertical-align: baseline; padding: 20px 0px; border: 0px; outline: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;&lt;span style=&quot;color: rgb(181, 99, 8);&quot;&gt;La pose de parquets flottants&lt;/span&gt;&lt;/h2&gt;&lt;p style=&quot;box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;Elle se pratique pour des modèles en massif ou contrecollés. C’est la pose la plus rapide, donc en terme de coût, la moins chère au m2. L’avantage est qu’on peut en cas de besoin démonter sans risquer d’abîmer les lames. L’inconvénient est qu’en cas de chauffage au sol, le choix de lames adaptée est moindre. Il est bon à savoir que ce type de pose nécessite la mise en place d’une sous-couche adaptée au modèle choisi.&lt;/p&gt;&lt;h2 style=&quot;box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; vertical-align: baseline; padding: 20px 0px; border: 0px; outline: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;&lt;span style=&quot;color: rgb(181, 99, 8);&quot;&gt;La pose collée&lt;/span&gt;&lt;/h2&gt;&lt;p style=&quot;box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;Elle est un peu plus longue notamment en raison des temps de séchage à respecter. Une bonne pose collée, c’est à dire intégralement (comme pour du sol souple) et non pas uniquement dans les rainures, ajoutée à un parquet massif vous apportera une durée de vie et une résistance supérieure. Ce type de pose est recommandée en cas de chauffage au sol, afin que la chaleur soit redistribuée par le biais des lames.&lt;/p&gt;&lt;h2 style=&quot;box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; vertical-align: baseline; padding: 20px 0px; border: 0px; outline: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;&lt;span style=&quot;color: rgb(181, 99, 8);&quot;&gt;La pose clouée&lt;/span&gt;&lt;/h2&gt;&lt;p style=&quot;box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;Nécessite également un peu plus de temps que la pause flottante du fait du tassotage à réaliser ainsi que de l’isolation à positionner. Cette pose est donc recommandée pour rajouter une isolation lors d’une rénovation de sol.&lt;/p&gt;&lt;p style=&quot;box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; vertical-align: baseline; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;&quot;&gt;Comme vous pouvez le constater, chaque situation et chaque projet est différent, c’est pourquoi, je vous accompagne tout au long de votre réflexion et vous aide à choisir les bons matériaux&lt;/p&gt;', '', '', '', '', 1, 4, 0, NULL, NULL),
(75, '', '1551196780-bg-parallax8.jpg', 0, '', '&lt;p&gt;&lt;br&gt;Je vous apporte toute mon expertise en aménagement extérieur en bois afin de réaliser votre espace extérieur personnalisé. En effet afin de rendre votre terrasse bois unique et correspondant à vos attentes, il est ainsi possible de réaliser des réservations pour de futurs plantations mais également d’intégrer des arbres ou fleurs existantes. L’utilisation de cailloux ou galets décoratifs en périphérie extérieure ou intégrés dans des réservations permet de lier plusieurs matériaux de familles à la base totalement différentes pour un rendu des plus esthétique.&lt;/p&gt;', '', '', '', '', 1, 1, 0, NULL, NULL),
(76, '', '', 11, NULL, '', '', '', '', '', 1, 1, 0, NULL, NULL),
(77, 'Les terrasses en composites', '', 12, NULL, '&lt;p&gt;&lt;span id=&quot;docs-internal-guid-f5bbfd5e-7fff-8aab-86b5-4466d4887c13&quot;&gt;&lt;span style=&quot;font-size: 12pt; font-family: Arial; color: rgb(50, 50, 50); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;&quot;&gt;Une autre alternative est possible quant à l’aménagement des terrasses en bois. Il s’agit des terrasses en lame de composite. En effet, face à une clientèle ne souhaitant pas voir le bois grisé avec les U.V du soleil, et souhaitant une terrasse avec le moins d’entretien possibles, les lames composites sont une réelle alternative. Cependant les lames composites ne sont pas toutes adaptées à la bonne durée de vie de votre terrasse. Seuls les lames en composite massif se révèlent être la solution adaptée pour une terrasse longue durée. Les composites alvéolés présentent sur le long terme des déformations ou un passage des couleurs. Une fois de plus je me ferais un plaisir de vous apporter mes conseils en terme de composite et je vous proposerais des lames fabriquées et distribuées par des fournisseurs nationaux et européens reconnus pour leur qualité et leur sériosité dans ce domaine.&lt;/span&gt;&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', '', '', '', '', 1, 1, 0, NULL, NULL),
(11, 'LES TERRASSES BOIS, UNE MULTITUDE DE POSSIBILITÉ', '1550843844-home2.jpg', 0, 'LES TERRASSES BOIS, UNE MULTITUDE DE POSSIBILITÉ', '&lt;p&gt;La terrasse bois est l’activité principale de notre société. C’est un univers particulier que nous maîtrisons depuis plusieurs années. Les possibilités sont nombreuses, tant par le choix des essences (exotiques, feuillus, résineux, composite…) que par les types de pose (vissage, fixations invisibles). La configuration de votre terrain et de votre environnement rentre également en compte afin de vous proposer un aménagement de qualité et adapté à vos besoins.&lt;br&gt;&amp;nbsp;&lt;/p&gt;', 'EN SAVOIR +', 'https://www.gc-terrasses.fr/terass-bois', '', '', 1, 0, 1, NULL, NULL),
(12, 'LES AMÉNAGEMENTS COMPLÉMENTAIRES', '1550843880-A.jpg', 0, 'LES AMÉNAGEMENTS COMPLÉMENTAIRES', '&lt;p&gt;Le bois est un matériau qui permet d’exploiter au maximum vos espaces extérieurs. En effet, la réalisation de pergolas, de clôtures bois et d’abris en tout genre vous permettent de profiter pleinement de vos extérieurs selon les saisons. De plus, le choix du bois permet de personnaliser et d’améliorer vos projets au fil du temps.&lt;br&gt;&amp;nbsp;&lt;/p&gt;', 'EN SAVOIR +', 'https://www.gc-terrasses.fr/agencement-interieur', '', '', 1, 0, 1, NULL, NULL),
(13, 'LA POSE DE PARQUETS', '1550842668-home-paralex.jpg', 0, 'LA POSE DE PARQUETS', '&lt;p&gt;La pose de parquet est une prestation qui peut paraître d’un premier regard, simple mais qui nécessite en fait un certain nombre de connaissances et d’outillages afin d’avoir un rendu impeccable . Tout comme pour les terrasses bois, les matériaux peuvent être d’un budget conséquent et il est donc dommage de se passer d’un poseur de qualité et de gâcher plusieurs m2 avec une multitude de ratés.&lt;br&gt;&amp;nbsp;&lt;/p&gt;', 'EN SAVOIR +', 'https://www.gc-terrasses.fr/parquet-et-lambris', '', '', 1, 0, 1, 'LE BOIS, UNE MULTITUDE DE POSSIBILITÉ', '1551097357-Slide3.jpg'),
(14, 'LES AMÉNAGEMENTS INTÉRIEURS', '1550842746-home4.jpg', 0, 'LES AMÉNAGEMENTS INTÉRIEURS', '&lt;p&gt;&lt;span style=&quot;text-align: justify;&quot;&gt;&lt;font face=&quot;Arial&quot;&gt;Personnaliser ces espaces intérieurs est devenu quelque chose de fréquents d’une part car il s’agit d’un effet général à tout type d’achat et d’autre part du fait que beaucoup de projets de rénovations sont conditionnées par des dimensions hors standard. C’est pourquoi nous avons décidé de proposer à nos clients de réaliser leurs mobiliers (meuble TV, colonnes de salle de bain, bibliothèques…) ainsi que leurs espaces de rangements (dressings, placards…).&lt;/font&gt;&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', 'EN SAVOIR +', 'https://www.gc-terrasses.fr/agencement-interieur', '', '', 1, 0, 1, 'PROFITEZ D&#039;UN ESPACE PLUS OPTIMISÉ', '1551097946-terrassement.jpg'),
(22, 'UNE PRISE EN MAIN COMPLÈTE DE VOTRE PROJET', '', 2, 'UNE PRISE EN MAIN COMPLÈTE DE VOTRE PROJET', '&lt;p&gt;&lt;strong&gt;Depuis notre premier contact, nous mettons tout en oeuvre pour vous accompagner dans vos projets. Nous étudions votre projet en vous proposant les matériaux adaptés à vos goûts et à votre budget. Les possibilités sont multiples et nous vous proposons des plans et rendus en 3D afin de vous aider à vous projeter dans le résultat de vos travaux.&lt;/strong&gt;&lt;br&gt;&amp;nbsp;&lt;/p&gt;', '', '', '', '', 1, 0, 1, NULL, NULL),
(63, '', '', 4, NULL, '', '', '', '', '', 1, 2, 0, NULL, NULL),
(84, 'titre de la galerie 1', '', 2, NULL, '', '', '', '', '', 1, 8, 0, NULL, NULL),
(68, '', '', 7, NULL, '', '', '', '', '', 1, 5, 0, NULL, NULL),
(74, 'Les terrasses bois, une multitude de possibilité', '', 3, NULL, '&lt;p&gt;&lt;span id=&quot;docs-internal-guid-54b685eb-7fff-0734-c82d-7bcfa059b06c&quot;&gt;&lt;span style=&quot;font-size: 12pt; font-family: Arial; color: rgb(50, 50, 50); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;&quot;&gt;La terrasse bois est un univers bien spécifique de la menuiserie générale. En effet, tant dans les systèmes de pose que dans les essences, il existe de nombreuses façons de réaliser une terrasse bois. Ainsi il est possible de réaliser une terrasse sur une dalle béton existante mais aussi sur des terrains meubles ou sur pilotis. Vous avez également la possibilité d’opter pour des terrasses à fixations visibles ou invisibles. Concernant les essences de bois utilisés il existe 2 grandes familles: – les résineux – les bois exotiques. La différence entre ces deux catégories se manifeste aussi bien par l’aspect esthétique des lames mais également par leur durée de vie. Une terrasse en pin (ou autre résine) possède une durée de vie de 10 à 15 ans (pour une pose qui respecte les règles de l’art). Une terrasse en bois exotique peut durer plus de 25 ans si les normes de pose ont bien été respectées.&lt;/span&gt;&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', '', '', '', '', 1, 1, 0, NULL, NULL),
(71, '', '', 8, NULL, '&lt;h2 dir=&quot;ltr&quot; style=&quot;line-height:1.32;margin-top:0pt;margin-bottom:0pt;padding:15pt 0pt 15pt 0pt;&quot;&gt;&lt;span style=&quot;font-size:13.999999999999998pt;font-family:Arial;color:#b56308;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;&quot;&gt;Les Aménagements Intérieurs&lt;/span&gt;&lt;/h2&gt;&lt;p dir=&quot;ltr&quot; style=&quot;line-height:1.38;margin-top:0pt;margin-bottom:0pt;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:12pt;font-family:Arial;color:#6a6a6a;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;&quot;&gt;Fort de mon expérience dans le neuf, comme dans la rénovation, je suis en mesure de vous proposer mes services quant à la réalisation de vos aménagements intérieurs. N’hésitez pas à me confier vos projets de dressings, buanderies, placards, et étagères en tout genre. J’étudie l’ensemble de vos projets avec en plus la possibilité de vous les dessiner en 3D afin de faire les bons choix concernant les matières, les couleurs et l’optimisation du projet dans sa globalité.&lt;/span&gt;&lt;/p&gt;&lt;h2 dir=&quot;ltr&quot; style=&quot;line-height:1.32;margin-top:0pt;margin-bottom:0pt;padding:15pt 0pt 15pt 0pt;&quot;&gt;&lt;span style=&quot;font-size:13.999999999999998pt;font-family:Arial;color:#b56308;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;&quot;&gt;Les Aménagements sur Mesure&lt;/span&gt;&lt;/h2&gt;&lt;p&gt;&lt;span id=&quot;docs-internal-guid-790df842-7fff-1ba7-dffd-465ccafc839b&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;p dir=&quot;ltr&quot; style=&quot;line-height:1.38;margin-top:0pt;margin-bottom:0pt;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:12pt;font-family:Arial;color:#6a6a6a;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;&quot;&gt;Il est fréquent, en rénovation de maisons plus anciennes, de rencontrer des espaces ou des renfoncements pas adaptés à des dressings standards. De plus dans ce type de maison ancienne, les murs et/ou sols peuvent rencontrer bon nombres de défauts. C’est là que j’interviens pour vous fournir un aménagement personnel selon votre future utilisation. Ainsi vous disposerez d’un dressing adapté à votre espace inutilisé, liant l’esthétique à l’optimisation de l’espace.&lt;/span&gt;&lt;/p&gt;', '', '', '', '', 1, 5, 0, NULL, NULL),
(72, '', '', 9, NULL, '&lt;h2 dir=&quot;ltr&quot; style=&quot;line-height:1.32;margin-top:0pt;margin-bottom:0pt;text-align: justify;padding:15pt 0pt 15pt 0pt;&quot;&gt;&lt;span style=&quot;font-size:13.999999999999998pt;font-family:Arial;color:#b56308;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;&quot;&gt;Les Habillages Muraux&lt;/span&gt;&lt;/h2&gt;&lt;p dir=&quot;ltr&quot; style=&quot;line-height:1.38;margin-top:0pt;margin-bottom:0pt;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:12pt;font-family:Arial;color:#6a6a6a;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;&quot;&gt;Afin de trancher avec des solutions simples et communes à tous, comme la peinture ou les tapisseries, nous vous permettons l’originalité et la possibilité de personnaliser vos murs intérieurs avec la pose de clair voie. Dans l’exemple ci-contre il s’agit d’un clair voie en Red Cedar, une essence de bois utilisée essentiellement pour la pose verticale du fait de sa légèreté.&lt;/span&gt;&lt;/p&gt;&lt;h2 dir=&quot;ltr&quot; style=&quot;line-height:1.32;margin-top:0pt;margin-bottom:0pt;text-align: justify;padding:15pt 0pt 15pt 0pt;&quot;&gt;&lt;span style=&quot;font-size:13.999999999999998pt;font-family:Arial;color:#b56308;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;&quot;&gt;La Pose de Sols Souples&lt;/span&gt;&lt;/h2&gt;&lt;p dir=&quot;ltr&quot; style=&quot;line-height:1.38;margin-top:0pt;margin-bottom:0pt;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:12pt;font-family:Arial;color:#6a6a6a;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;&quot;&gt;La pose de sol souple tel que la pose de lames vinyles, est la solution efficace afin de rénover vos sols intérieurs à moindre coût. Ce type de matériaux nécessite tout de même une expérience et un savoir faire tant dans sa mise en place que dans les coupes à réaliser.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span id=&quot;docs-internal-guid-9d354039-7fff-f336-25d3-4e19b4a21ce0&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;', '', '', '', '', 1, 5, 0, NULL, NULL),
(73, 'Des plans en 3D pour une meilleure visualisation des projets avant la réalisation\r\n', '', 10, NULL, '', '', '', '', '', 1, 5, 0, NULL, NULL),
(78, '', '', 1, NULL, '', '', '', '', '', 1, 8, 0, NULL, NULL),
(80, 'LES ABRIS SUR MESURE', '', 0, 'LES ABRIS SUR MESURE', '&lt;p&gt;Cependant, il faut tout de même porter attention sur certains aspects des abris en kit. Souvent ceux ci sont vendus en bois brut c’est à dire qu’ils n’ont pas été traités pour résister aux intempéries et à l’humidité. C’est pourquoi sur les notices de montages, il est expliqué qu’il faut soit les peindre ou les lasurer; ce qui représente un budget supplémentaire au coût d’achat de votre abris.&lt;/p&gt;&lt;p&gt;Pour faire face à ces aspects je vous propose donc mes services quant à la création de vos abris de jardin sur mesure. L’avantage étant que les bois utilisés sont des bois traités en classe 4 ce qui permet à votre abris de résister à l’humidité et aux épisodes pluvieux. La couche de peinture ou de vernis devient facultative.&lt;/p&gt;&lt;p&gt;De plus, vous ne serez plus bloqué par des abris aux dimensions imposées par les fabricants et revendeurs. Ainsi je réalise vos abris selon vos dimensions tout en vous proposant différents bardages: pin classe 4, douglas, mélèze, red cedar, exotique et même composite pour l’habillage extérieur de votre cabanon.&lt;/p&gt;&lt;p&gt;Concernant l’étanchéité de votre abris, j’utilise des panneaux imitation tuile ou je réalise celle ci avec du bardeau bitumé. Pour les projets les plus poussés il est bien entendu possible de réaliser la couverture au moyen de tuiles.&lt;/p&gt;', '', '', '', '', 1, 2, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_service` varchar(200) NOT NULL,
  `alt_image` text NOT NULL,
  `text_btn` varchar(100) NOT NULL,
  `lien_btn` varchar(200) NOT NULL,
  `activer` int(11) NOT NULL DEFAULT '1',
  `id_accueil` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`id_service`, `titre`, `description`, `image_service`, `alt_image`, `text_btn`, `lien_btn`, `activer`, `id_accueil`) VALUES
(1, 'Terrasse bois/composite', '&lt;p&gt;la réalisation de vos salons de jardin, construction d&#039;abri de jardin ou de pergolas&lt;/p&gt;', '1551369486-terrassement.jpg', 'Terrasse bois/composite', 'Lire plus', 'https://www.gc-terrasses.fr/terass-bois', 1, 1),
(2, 'Abri de jardin/ossature bois', '&lt;p&gt;Développer votre espace de vie et votre confort. Je réalise tout type de travaux liés au bois&lt;/p&gt;', '1550759563-abri.jpg', 'Abri de jardin/ossature bois', 'Lire plus', 'https://www.gc-terrasses.fr/abris-sur-mesure', 1, 1),
(3, 'Pergola', '&lt;p&gt;Un escalier et des gardes corps entièrement en bois exotique avec une mise en place de tube inox 17mm&lt;/p&gt;', '1550759719-escalier.jpg', 'Pergola', 'Lire plus', 'https://www.gc-terrasses.fr/agencement-interieur', 1, 1),
(4, 'Bureau d’études/ rendu 3D', '&lt;p&gt;J&#039;étudie l&#039;ensemble de vos projets avec en plus la possibilité de vous les dessiner en 3D&lt;/p&gt;', '1550759849-service1.jpg', 'Bureau d’études/ rendu 3D', 'Lire plus', 'https://www.gc-terrasses.fr/agencement-interieur', 1, 1),
(5, 'Pose de parquet', '&lt;p&gt;Un dressing adapté à votre espace inutilisé, liant l&#039;esthétique à l&#039;optimisation de l&#039;espace.&lt;/p&gt;', '1550759998-service2.jpg', 'Pose de parquet', 'Lire plus', 'https://www.gc-terrasses.fr/agencement-interieur', 1, 1),
(6, 'Dressing et aménagements intérieurs', '&lt;p&gt;Nous confiez vos projets de dressings, &amp;nbsp;buanderies, placards, et étagères en tout genre.&lt;/p&gt;', '1550760074-agencement2.jpg', 'Dressing et aménagements intérieurs', 'Lire plus', 'https://www.gc-terrasses.fr/agencement-interieur', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `accroche` varchar(200) NOT NULL,
  `sous_accroche` varchar(200) NOT NULL,
  `text_btn` varchar(100) NOT NULL,
  `lien_btn` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `ordre` int(11) NOT NULL,
  `activer` int(11) NOT NULL,
  `id_accueil` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `slide`
--

INSERT INTO `slide` (`id_slide`, `accroche`, `sous_accroche`, `text_btn`, `lien_btn`, `image`, `ordre`, `activer`, `id_accueil`) VALUES
(12, 'Aménagements  Extérieur', 'Améliorez votre mode de vie en aménageant votre extérieur en faisant appel à GEOFFROY CUREAU', 'Contactez-nous', 'https://www.gc-terrasses.fr/contact', '1550757236-Slid5Home.jpg', 3, 1, 1),
(10, 'Aménagements Intérieurs', 'Design en 3D, faire les bons choix concernant les matières, et les couleurs', 'Contactez-nous', 'https://www.gc-terrasses.fr/contact', '1550757109-Slide2.jpg', 3, 1, 1),
(11, 'Aménagements Extérieur', '                        Améliorez votre mode de vie en aménageant votre extérieur  en faisant appel à GEOFFROY CUREAU', 'Contactez-nous', 'https://www.gc-terrasses.fr/contact', '1550757176-Slide3.jpg', 3, 1, 1),
(6, 'GEOFFROY CUREAU Terrasses', 'le professionnel du bois pour pour l’aménagement de votre extérieur en France', 'Contactez-nous', 'https://www.gc-terrasses.fr/contact', '1550756866-Slide1.jpg', 3, 1, 1);

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
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_user`, `Nom`, `Prenom`, `Mail`, `login`, `mot_passe`, `profil`) VALUES
(1, 'admin', 'admin', 'geoffroy.contact@gc-terrasses.fr', 'admin', '18c6d818ae35a3e8279b5330eda01498', 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `accueil`
--
ALTER TABLE `accueil`
  ADD PRIMARY KEY (`id_accueil`);

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `categorie` (`categorie`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`id_galerie`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `img_galerie`
--
ALTER TABLE `img_galerie`
  ADD PRIMARY KEY (`id_img_galerie`),
  ADD KEY `galerie_fk` (`id_galerie`),
  ADD KEY `id_img` (`id_img`,`id_galerie`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id_page`);

--
-- Index pour la table `page_contact`
--
ALTER TABLE `page_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD PRIMARY KEY (`id_partenaire`);

--
-- Index pour la table `section_page`
--
ALTER TABLE `section_page`
  ADD PRIMARY KEY (`id_section`),
  ADD KEY `fk_foreign_key_accueilsp` (`id_page`),
  ADD KEY `fk_accueil` (`id_accueil`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `fk_foreign_key_accueil` (`id_accueil`);

--
-- Index pour la table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`),
  ADD KEY `fk_foreign_key_accueilslide` (`id_accueil`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `accueil`
--
ALTER TABLE `accueil`
  MODIFY `id_accueil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `id_galerie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT pour la table `img_galerie`
--
ALTER TABLE `img_galerie`
  MODIFY `id_img_galerie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `page_contact`
--
ALTER TABLE `page_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `partenaire`
--
ALTER TABLE `partenaire`
  MODIFY `id_partenaire` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `section_page`
--
ALTER TABLE `section_page`
  MODIFY `id_section` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
