-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Jeu 13 Décembre 2012 à 23:33
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `thefinder`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte_admin`
--

CREATE TABLE IF NOT EXISTS `compte_admin` (
  `id_a` int(11) NOT NULL AUTO_INCREMENT,
  `nom_a` varchar(20) CHARACTER SET utf8 NOT NULL,
  `prenom_a` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email_a` varchar(30) CHARACTER SET utf8 NOT NULL,
  `pass_a` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `compte_recruteur`
--

CREATE TABLE IF NOT EXISTS `compte_recruteur` (
  `id_r` int(11) NOT NULL AUTO_INCREMENT,
  `nom_r` varchar(20) CHARACTER SET utf8 NOT NULL,
  `prenom_r` varchar(20) CHARACTER SET utf8 NOT NULL,
  `civilite_r` varchar(4) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `pass_r` varchar(12) CHARACTER SET utf8 NOT NULL,
  `departement` varchar(30) CHARACTER SET utf8 NOT NULL,
  `fonction` varchar(40) CHARACTER SET utf8 NOT NULL,
  `tel_r` varchar(14) CHARACTER SET utf8 NOT NULL,
  `fax_r` varchar(14) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_r`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `compte_recruteur`
--

INSERT INTO `compte_recruteur` (`id_r`, `nom_r`, `prenom_r`, `civilite_r`, `email`, `pass_r`, `departement`, `fonction`, `tel_r`, `fax_r`) VALUES
(1, 'djs', 'fgshj', 'Mr', 'gdjks', 'fghj', 'info', 'fjsllsks', '1234', '121234');

-- --------------------------------------------------------

--
-- Structure de la table `compte_utilisateur`
--

CREATE TABLE IF NOT EXISTS `compte_utilisateur` (
  `nom_u` varchar(20) CHARACTER SET utf8 NOT NULL,
  `prenom_u` varchar(20) CHARACTER SET utf8 NOT NULL,
  `age_u` int(11) NOT NULL,
  `civilite_u` varchar(4) CHARACTER SET utf8 NOT NULL,
  `email_u` varchar(30) CHARACTER SET utf8 NOT NULL,
  `pass_u` varchar(12) CHARACTER SET utf8 NOT NULL,
  `secteur_u` varchar(30) CHARACTER SET utf8 NOT NULL,
  `niveau` varchar(20) CHARACTER SET utf8 NOT NULL,
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `CV_u` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `compte_utilisateur`
--

INSERT INTO `compte_utilisateur` (`nom_u`, `prenom_u`, `age_u`, `civilite_u`, `email_u`, `pass_u`, `secteur_u`, `niveau`, `id_u`, `CV_u`) VALUES
('jaaba', 'ibtissam', 24, 'Mlle', 'jaaba.ibtissam@gmail.com', '24031991', 'info', 'bac+4', 2, '');

-- --------------------------------------------------------

--
-- Structure de la table `concour`
--

CREATE TABLE IF NOT EXISTS `concour` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `organisme_c` varchar(30) CHARACTER SET utf8 NOT NULL,
  `date_depot_c` varchar(20) CHARACTER SET utf8 NOT NULL,
  `date_fin_c` varchar(20) CHARACTER SET utf8 NOT NULL,
  `date_c` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `desc_c` text CHARACTER SET utf8 NOT NULL,
  `niveau_c` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lieu_c` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email_c` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tel_c` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pieces_c` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ville_c` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `domaine_c` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `condition_c` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `attitude` varchar(255) NOT NULL,
  `langitude` varchar(255) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Contenu de la table `concour`
--

INSERT INTO `concour` (`id_c`, `organisme_c`, `date_depot_c`, `date_fin_c`, `date_c`, `desc_c`, `niveau_c`, `lieu_c`, `email_c`, `tel_c`, `pieces_c`, `ville_c`, `domaine_c`, `condition_c`, `attitude`, `langitude`) VALUES
(33, 'fsthpm', '12/10/2012', '12/04/2012', '12/05/2012', 'jkh', 'jhk', 'poi', 'jh', 'jkb', 'jh', 'jk', 'jh', 'jh', '', ''),
(34, ';,nb', '12/15/2012', '12/18/2012', '12/05/2012', 'n,b', 'jb', ';nj', 'n,b', 'nb,', 'nb', 'b', 'n,b', 'nb,', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id_m` int(11) NOT NULL,
  `objet_m` varchar(50) NOT NULL,
  `email_m` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id_m`, `objet_m`, `email_m`, `message`) VALUES
(0, 'h', 'asri.hiba@gmail.com', 'bonjour'),
(1, 'h', 'asri.hiba@gmail.com', 'bonjour');

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

CREATE TABLE IF NOT EXISTS `emploi` (
  `id_e` int(11) NOT NULL AUTO_INCREMENT,
  `entreprise_e` varchar(30) CHARACTER SET utf8 NOT NULL,
  `desc_entr_e` text CHARACTER SET utf8 NOT NULL,
  `nbr_poste_e` int(11) NOT NULL,
  `lieu_e` varchar(30) CHARACTER SET utf8 NOT NULL,
  `date_depot_e` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `secteur_e` varchar(50) CHARACTER SET utf8 NOT NULL,
  `niveau_e` varchar(20) CHARACTER SET utf8 NOT NULL,
  `tel_e` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type_contrat_e` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `renumeration_e` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_e` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ville_e` varchar(255) NOT NULL,
  `attitude` varchar(255) NOT NULL,
  `langitude` varchar(255) NOT NULL,
  PRIMARY KEY (`id_e`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `emploi`
--

INSERT INTO `emploi` (`id_e`, `entreprise_e`, `desc_entr_e`, `nbr_poste_e`, `lieu_e`, `date_depot_e`, `secteur_e`, `niveau_e`, `tel_e`, `type_contrat_e`, `renumeration_e`, `email_e`, `Ville_e`, `attitude`, `langitude`) VALUES
(4, 'sdlksq', 'jqskjsc', 10, 'rabat', 'jsss', 'hsjks', 'ksd', '', '', '', '', '', '', ''),
(5, 'fstgggggggggggggg', 'jsks', 300, 'casaaaaa', '12/07/2012', 'infoooooo', 'bac + 3', '', '', '', '', '', '', ''),
(6, 'fstgggggggggggggg', 'sl', 10, 'jsks', '12/07/2012', 'infoooooo', 'bac + 3', '', '', '', '', '', '', ''),
(7, 'Adnane', 'adnane', 1000, 'marrakech', '12/07/2012', 'adnane', 'adnane', '', '', '', '', '', '', ''),
(8, 'gkn', 'b', 34, 'jn', 'nj', 'njb', 'jkb', 'n;b', 'nb', 'jb', 'hnb', 'hb', '', ''),
(9, 'A', ';nb', 0, ',nb', '12/18/2012', 'n;b', 'n, b', ' b v', 'n,b', 'nb', 'nb', 'b,', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id_f` int(11) NOT NULL AUTO_INCREMENT,
  `desc_f` text CHARACTER SET utf8 NOT NULL,
  `secteur_f` varchar(30) CHARACTER SET utf8 NOT NULL,
  `dure_f` int(11) NOT NULL,
  `organisation_f` varchar(25) CHARACTER SET utf8 NOT NULL,
  `lieu_f` varchar(30) CHARACTER SET utf8 NOT NULL,
  `nbr_poste_f` int(11) NOT NULL,
  `ville_f` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_f` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel_f` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `resp_f` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `attitude` varchar(255) NOT NULL,
  `langitude` varchar(255) NOT NULL,
  PRIMARY KEY (`id_f`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id_f`, `desc_f`, `secteur_f`, `dure_f`, `organisation_f`, `lieu_f`, `nbr_poste_f`, `ville_f`, `email_f`, `tel_f`, `resp_f`, `attitude`, `langitude`) VALUES
(2, 'test', 'ma3raftch', 3, 'test', 'test', 10, '', '', '', '', '', ''),
(4, 'sdf', 'df', 34, 'fdgpm', 'dcv', 45, 'dsf', 'ds', 'fv', 'dsf', '', ''),
(5, 'fgfg', 'fg', 0, 'dfg', 'fg', 0, 'dsf', 'njkhb', 'njhb', 'nbjh', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE IF NOT EXISTS `stage` (
  `id_s` int(11) NOT NULL AUTO_INCREMENT,
  `niveau_s` varchar(20) CHARACTER SET utf8 NOT NULL,
  `secteur_s` varchar(30) CHARACTER SET utf8 NOT NULL,
  `dure_s` int(11) NOT NULL,
  `entreprise_s` varchar(30) CHARACTER SET utf8 NOT NULL,
  `remunere` varchar(3) CHARACTER SET utf8 NOT NULL,
  `nbr_poste` int(11) NOT NULL,
  `desc_entr_s` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date_depot_s` date NOT NULL,
  `demarrage_s` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lieu_s` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email_s` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ville_s` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel_s` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `attitude` varchar(255) NOT NULL,
  `langitude` varchar(255) NOT NULL,
  PRIMARY KEY (`id_s`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `stage`
--

INSERT INTO `stage` (`id_s`, `niveau_s`, `secteur_s`, `dure_s`, `entreprise_s`, `remunere`, `nbr_poste`, `desc_entr_s`, `date_depot_s`, `demarrage_s`, `lieu_s`, `email_s`, `ville_s`, `tel_s`, `attitude`, `langitude`) VALUES
(1, 'bac+2', 'info', 3, 'fst', 'fst', 12, 'fst', '2012-12-26', '2012-12-27', 'kech', '', '', '', '', ''),
(2, 'test', 'test', 10, 'test', 'oui', 10, 'hs', '0000-00-00', 'jqkq', 'test', '', '', '', '', ''),
(3, 'zebal', 'zebal', 0, 'zebal', 'oui', 10, 'zebal', '0000-00-00', 'jqkq', 'test', '', '', '', '', ''),
(4, 'test', 'test', 10, 'test', 'oui', 10, 'lsz', '0000-00-00', 'jqkq', 'kxwxw', '', '', '', '', ''),
(5, '', '', 0, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', ''),
(6, 'jkb', 'jb', 0, 'n, ', 'jbn', 0, 'n,b ', '0000-00-00', '', '', '', '', '', '', ''),
(7, 'fdgff', 'fv', 45, 'fglm', 'fg', 56, 'fdg', '2012-12-20', 'fgf', 'fg', 'fgb', 'fb', 'fv', 'fv', 'fv'),
(8, '', '', 0, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', ''),
(9, '', '', 0, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', ''),
(10, '', '', 0, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', ''),
(11, '', '', 0, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', ''),
(12, '', '', 0, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', ''),
(13, '', '', 0, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', ''),
(14, '', '', 0, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', ''),
(15, '', '', 0, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', ''),
(16, '', '', 0, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', ''),
(17, '', '', 0, '', '', 0, '', '0000-00-00', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
