-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 02 Janvier 2013 à 04:18
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

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
-- Structure de la table `annoce_e`
--

CREATE TABLE IF NOT EXISTS `annoce_e` (
  `id_e` int(11) NOT NULL AUTO_INCREMENT,
  `entreprise_e` varchar(50) NOT NULL,
  `desc_entr_e` varchar(200) NOT NULL,
  `nbr_poste_e` int(11) NOT NULL,
  `lieu_e` varchar(200) NOT NULL,
  `date_depot_e` date NOT NULL,
  `secteur_e` varchar(80) NOT NULL,
  `niveau_e` varchar(80) NOT NULL,
  `tel_e` varchar(20) NOT NULL,
  `type_contrat_e` varchar(50) NOT NULL,
  `remuniration_e` varchar(40) NOT NULL,
  `email_e` varchar(100) NOT NULL,
  `ville_e` varchar(60) NOT NULL,
  `attitude` varchar(30) NOT NULL,
  `langitude` varchar(30) NOT NULL,
  `image_e` varchar(80) NOT NULL,
  `site_e` varchar(100) NOT NULL,
  `id_r` int(11) NOT NULL,
  PRIMARY KEY (`id_e`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `annoce_e`
--

INSERT INTO `annoce_e` (`id_e`, `entreprise_e`, `desc_entr_e`, `nbr_poste_e`, `lieu_e`, `date_depot_e`, `secteur_e`, `niveau_e`, `tel_e`, `type_contrat_e`, `remuniration_e`, `email_e`, `ville_e`, `attitude`, `langitude`, `image_e`, `site_e`, `id_r`) VALUES
(1, 'Renault Maroc', 'prÃ©sente depuis 84 ans au Maroc, commercialise les vÃ©hicules des marques Renault et Dacia.', 100, 'Casablanca', '2012-12-26', 'MÃ©canique', 'bac+4', '+21222240000', 'CDI', '7000 Ã  8000', 'RenaultMaroc@gmail.com', 'Rabat', '33.5333333', '-7.5833333', '', 'www.RenaultMaroc.ma', 0),
(4, ' CRIT Maroc', 'CRIT Maroc, acteur global en RH intervient autour de trois principaux domaines: - Recrutement, - Travail Temporaire, - Externalisation RH', 30, 'Agdal, Rabat, Maroc', '2012-12-22', 'Ressources Humaines', 'bac+5', '+212537830000', 'CDD', '7000 Ã  8000', ' CRIT.Maroc@gmail.com', 'Rabat', '33.9933499', '-6.8485009', '', 'www. CRITMaroc.ma', 0),
(6, 'STMicroelectronics', 'Grande Multinationale, une des leaders mondiaux de l industrie micro-Ã©lectronique.', 20, '', '2012-12-21', 'Maintenance et QualitÃ©', 'bac+5', '+21222260078', 'CDI', '9000 Ã  8000', 'STMicroelectronics@gmail.com', 'Casablanca', '""', '', '', 'www.STMicroelectronics.ma', 0);

-- --------------------------------------------------------

--
-- Structure de la table `annonce_c`
--

CREATE TABLE IF NOT EXISTS `annonce_c` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `organisme_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_depot_c` varchar(20) NOT NULL,
  `date_fin_c` varchar(20) NOT NULL,
  `date_c` varchar(20) NOT NULL,
  `desc_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image_c` varchar(50) CHARACTER SET utf8 NOT NULL,
  `niveau_c` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lieu_c` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tel_c` varchar(225) CHARACTER SET utf8 NOT NULL,
  `pieces_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ville_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `domaine_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `condition_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `attitude` varchar(255) CHARACTER SET utf8 NOT NULL,
  `langitude` varchar(255) CHARACTER SET utf8 NOT NULL,
  `site_c` varchar(20) CHARACTER SET utf8 NOT NULL,
  `id_r` int(11) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Contenu de la table `annonce_c`
--

INSERT INTO `annonce_c` (`id_c`, `organisme_c`, `date_depot_c`, `date_fin_c`, `date_c`, `desc_c`, `image_c`, `niveau_c`, `lieu_c`, `email_c`, `tel_c`, `pieces_c`, `ville_c`, `domaine_c`, `condition_c`, `attitude`, `langitude`, `site_c`, `id_r`) VALUES
(47, 'LycÃ© Hassan 2', '0000-00-00', '0000-00-00', '0000-00-00', 'Concour des olympiques des mathÃ©matiques', '', 'terminal', 'Rue El Qadi Ayad, Marrakech', 'hassan2@yahoo.com', '+212524123456', '----------', 'Marrakech', 'MathÃ©matique', 'avoir plus de 14 ans', '31.6300342', '-8.0124608', 'www.hassan2.site.ma', 0),
(49, 'MinistÃ©re de l enseignement', '0000-00-00', '0000-00-00', '0000-00-00', 'Concours de recrutement de 5 ingÃ©nieurs en Informatique', '', 'BAC+5', 'Rabat', 'minsiter@site.ma', '+212 05 37 21 75 01', 'acte de naissance,4 photos', 'rabat', 'Informatique', 'Avoir une expÃ©rience de 3 ans au minimum ', '34.0150490', '-6.8327200', 'www.minister.recherc', 0),
(51, 'FacultÃ© des Sciences et Techniquess', '0000-00-00', '0000-00-00', '0000-00-00', 'Concours daccÃ©s au cycle d ingÃ©nieur IRISI ', '', 'BAC+2', 'FSTG,Marrakech, Maroc', 'fstg@site.com', '+212524567809', 'RelevÃ©s de note des deux annees, Acte de naissance, 2 photos, Photocopie de l Attestation de rÃ©ussite ', 'Marrakech', 'Informatique ', 'Validation des deux annes avec  deux mension Bien', '31.6333333', '-8.0000000', 'www.fstg-marrakech.a', 0);

-- --------------------------------------------------------

--
-- Structure de la table `annonce_f`
--

CREATE TABLE IF NOT EXISTS `annonce_f` (
  `id_f` int(11) NOT NULL AUTO_INCREMENT,
  `desc_f` varchar(255) NOT NULL,
  `secteur_f` varchar(60) NOT NULL,
  `dure_f` int(11) NOT NULL,
  `organisation_f` varchar(200) NOT NULL,
  `lieu_f` varchar(200) NOT NULL,
  `nbr_poste_f` int(11) NOT NULL,
  `ville_f` varchar(60) NOT NULL,
  `email_f` varchar(100) NOT NULL,
  `tel_f` varchar(30) NOT NULL,
  `resp_f` varchar(100) NOT NULL,
  `attitude` varchar(60) NOT NULL,
  `langitude` varchar(60) NOT NULL,
  `image_f` varchar(50) NOT NULL,
  `date_depot_f` date NOT NULL,
  `site_f` varchar(100) NOT NULL,
  `id_r` int(11) NOT NULL,
  PRIMARY KEY (`id_f`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `annonce_f`
--

INSERT INTO `annonce_f` (`id_f`, `desc_f`, `secteur_f`, `dure_f`, `organisation_f`, `lieu_f`, `nbr_poste_f`, `ville_f`, `email_f`, `tel_f`, `resp_f`, `attitude`, `langitude`, `image_f`, `date_depot_f`, `site_f`, `id_r`) VALUES
(1, 'Formation en autocad', 'GÃ©nie Civil ', 4, 'Serge RICHARD', 'Tanger, Maroc', 50, 'Tanger', 'SergeRICHARD@gmail.com', '+212.639.569.751', 'M. Jean Pierre', '35.7666667', '-5.8000000', '', '2012-12-22', 'Serge RICHARD', 0),
(2, 'Formation excel', 'Informatique', 2, 'Iraki', 'Etablissement PrivÃ© Al Iraki,marrakech', 20, 'Marrakech', 'ecole.iraki@gmail.ma', '+212.679.599.751', 'Mr. AMJAD Saad', '31.6786433', '-8.0002484', '', '2012-12-19', 'iraki.marrakech@site.ma', 0),
(4, 'Formation Electronique', 'Electronique', 3, 'FacultÃ© des sciences et technique', 'FSTG,112 Boulevard Abdelkrim Al Khattabi, Marrakech ', 25, 'Marrakech', 'fstg@yahoo.fr', '+212.629.599.563', 'Mr.RAKRAK Said', '31.6675103', '-8.0110888', '', '2012-12-22', 'fstg.site.ma', 0);

-- --------------------------------------------------------

--
-- Structure de la table `annonce_s`
--

CREATE TABLE IF NOT EXISTS `annonce_s` (
  `id_s` int(11) NOT NULL AUTO_INCREMENT,
  `niveau_s` varchar(50) NOT NULL,
  `secteur_s` varchar(70) NOT NULL,
  `dure_s` varchar(40) NOT NULL,
  `entreprise_s` varchar(100) NOT NULL,
  `remunere` varchar(40) NOT NULL,
  `nbr_poste` int(11) NOT NULL,
  `desc_entr_s` varchar(200) NOT NULL,
  `date_depot_s` date NOT NULL,
  `demarrage_s` date NOT NULL,
  `lieu_s` varchar(200) NOT NULL,
  `email_s` varchar(100) NOT NULL,
  `ville_s` varchar(80) NOT NULL,
  `tel_s` varchar(30) NOT NULL,
  `attitude` varchar(30) NOT NULL,
  `langitude` varchar(30) NOT NULL,
  `mission_s` varchar(200) NOT NULL,
  `image_s` varchar(80) NOT NULL,
  `site_s` varchar(100) NOT NULL,
  `id_r` int(11) NOT NULL,
  PRIMARY KEY (`id_s`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `annonce_s`
--

INSERT INTO `annonce_s` (`id_s`, `niveau_s`, `secteur_s`, `dure_s`, `entreprise_s`, `remunere`, `nbr_poste`, `desc_entr_s`, `date_depot_s`, `demarrage_s`, `lieu_s`, `email_s`, `ville_s`, `tel_s`, `attitude`, `langitude`, `mission_s`, `image_s`, `site_s`, `id_r`) VALUES
(1, 'bac+3', 'Informatique', '60', 'OCP', 'Oui', 20, 'Stage technicien ', '2012-12-14', '2013-06-01', 'Office Nationale de l ElectricitÃ©, Casablanca, Grand Casablanca, Maroc', 'ocp@gmail.com', 'Casablanca', '+212.345.457.801', '33.5844405', '-7.6244178', 'RÃ©alisation d un site web de l agence sous PHP', '', 'www.ofe.site.ma', 0),
(2, 'bac+2', 'Management', '30', 'ONCF', 'Non', 10, 'Office National des chemins de ferre ', '2012-12-22', '0000-00-00', 'L Office national des chemins de fer, Rue Abderrahmane Ghafiki, Rabat, Rabat-SalÃ©-Zemmour-Zair, Morocco', 'ONCF.m@gmail.com', 'Rabat', '+21209504403', '0', '0', 'Plan de management d un produit', '', 'www.oncf.ma', 0),
(10, 'l', 'll', 'l', 'll', 'l', 0, 'll', '2013-01-02', '0000-00-00', 'l', 'yjh@jhj.jjjj', 'l', '8888888888', '40.7772208', '-73.8724920', 'l', 'kjjj.jpg', 'll', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `compte_admin`
--

INSERT INTO `compte_admin` (`id_a`, `nom_a`, `prenom_a`, `email_a`, `pass_a`) VALUES
(1, 'asri', 'hiba', 'asri.hiba@gmail.com', 'hiba'),
(2, 'berkane', 'adnane', 'adnane710@hotmail.com', '123456');

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
  `dernier_connexion` datetime NOT NULL,
  PRIMARY KEY (`id_r`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `compte_recruteur`
--

INSERT INTO `compte_recruteur` (`id_r`, `nom_r`, `prenom_r`, `civilite_r`, `email`, `pass_r`, `departement`, `fonction`, `tel_r`, `fax_r`, `dernier_connexion`) VALUES
(2, 'Ahmed', 'Alaoui', 'm', 'yassine.amilr@gmail.com', 'admin', 'informatique', 'Chef de departement', '0661234567', '0537352426', '2012-12-26 00:00:00'),
(4, 'Alami', 'Sara', 'Mlle', 's.Alami@gmail.com', '123', 'Management', 'Comtabilité', '+21265678990', '+21237896754', '2012-12-27 20:20:02');

-- --------------------------------------------------------

--
-- Structure de la table `compte_utilisateur`
--

CREATE TABLE IF NOT EXISTS `compte_utilisateur` (
  `nom_u` varchar(20) CHARACTER SET utf8 NOT NULL,
  `prenom_u` varchar(20) CHARACTER SET utf8 NOT NULL,
  `date_n` date NOT NULL,
  `civilite_u` varchar(4) CHARACTER SET utf8 NOT NULL,
  `email_u` varchar(30) CHARACTER SET utf8 NOT NULL,
  `pass_u` varchar(12) CHARACTER SET utf8 NOT NULL,
  `secteur_u` varchar(30) CHARACTER SET utf8 NOT NULL,
  `niveau` varchar(20) CHARACTER SET utf8 NOT NULL,
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `dernier_connexion` datetime NOT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Contenu de la table `compte_utilisateur`
--

INSERT INTO `compte_utilisateur` (`nom_u`, `prenom_u`, `date_n`, `civilite_u`, `email_u`, `pass_u`, `secteur_u`, `niveau`, `id_u`, `dernier_connexion`) VALUES
('AMIL', 'Yassine', '2013-01-13', 'm', 'yassine.amil@gmail.com', 'admin', 'informatique', 'bac+3', 3, '2013-01-02 03:09:27'),
('Idrissi', 'Mohammed', '1978-03-26', 'M', 'I.Mohammed@gmail.com', '123', 'Electronique', 'Doctorant', 31, '2012-12-29 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `concour`
--

CREATE TABLE IF NOT EXISTS `concour` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `organisme_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_depot_c` datetime NOT NULL,
  `date_fin_c` varchar(20) CHARACTER SET utf8 NOT NULL,
  `date_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `desc_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `niveau_c` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lieu_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tel_c` varchar(225) CHARACTER SET utf8 NOT NULL,
  `pieces_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ville_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `domaine_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `condition_c` varchar(255) CHARACTER SET utf8 NOT NULL,
  `attitude` varchar(255) CHARACTER SET utf8 NOT NULL,
  `langitude` varchar(255) CHARACTER SET utf8 NOT NULL,
  `site_c` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Contenu de la table `concour`
--

INSERT INTO `concour` (`id_c`, `organisme_c`, `date_depot_c`, `date_fin_c`, `date_c`, `desc_c`, `image_c`, `niveau_c`, `lieu_c`, `email_c`, `tel_c`, `pieces_c`, `ville_c`, `domaine_c`, `condition_c`, `attitude`, `langitude`, `site_c`) VALUES
(47, 'LycÃ© Hassan 2', '0000-00-00 00:00:00', '18/01/2012', '22/01/2012', 'Concour des olympiades des mathÃ©matiques', '62984448.jpg', 'autres', 'hassan 2,Rue El Qadi Ayad, Marrakech', 'hassan2@yahoo.com', '+212.524.123.456', '-', 'Marrakech', 'MathÃ©matique', 'avoir plus de 14 ans', '31.6300342', '-8.0124608', 'hassan2.site.ma'),
(49, 'MinistÃ©re de lenseignement', '0000-00-00 00:00:00', '20/10/2012', '27/12/2012', 'Concours de recrutement de 5 ingÃ©nieurs', 'Ministere-de-l-Enseignement-superieur-de-la-recherche-scientifique-et-de-la-formation-des-cadres.jpg', 'BAC+5', 'Rue Idriss Al Akbar - Hassan ', 'minsiter@site.ma', '+212 05 37 21 75 01', 'acte de naissance,4 photos', 'rabat', 'Informatique', 'agÃ© de plus de 24 ans', '34.2552345', '-6.5848768', 'minister.recherche.s'),
(51, 'facultÃ© des sciences et techniques', '0000-00-00 00:00:00', '05/27/2012', '06/06/2012', 'Concour de dÃ©veloppement des application mobile', 'fs.png', 'BAC+2', 'FST,av abdelkarim elkhatabi,marrakech', 'fstg@site.com', '+21212345678', 'RelevÃ©s de note des deux annÃ©es,Acte de naissance,2 photos', 'Marrakech', 'Informatique', 'validation des deux annÃ©es avec au moins deux mensions par semestre', '31.6333333', '-8.0000000', 'fstg-marrakech.ac.ma'),
(59, 'hhhh', '2012-12-27 00:00:00', '12/01/2012', '12/17/2012', 'dhd,jdkd', 'Chrysanthemum.jpg', 'bac', 'Rabat', 'ibtissam-ibtissam@hotmail.com', '12345', 'rfuikl', 'Marrakech', 'informatique', 'jknhggtvcgdtg', '34.0150490', '-6.8327200', 'bhxjxd'),
(60, 'hhhh', '0000-00-00 00:00:00', '12/01/2012', '12/17/2012', 'dhd,jdkd', 'Chrysanthemum.jpg', 'bac', 'Rabat', 'ibtissam-ibtissam@hotmail.com', '12345', 'rfuikl', 'Marrakech', 'informatique', 'jknhggtvcgdtg', '34.0150490', '-6.8327200', 'bhxjxd'),
(61, 'hhhh', '2012-12-27 18:00:00', '12/01/2012', '12/17/2012', 'dhd,jdkd', 'Chrysanthemum.jpg', 'bac', 'Rabat', 'ibtissam-ibtissam@hotmail.com', '12345', 'rfuikl', 'Marrakech', 'informatique', 'jknhggtvcgdtg', '34.0150490', '-6.8327200', 'bhxjxd'),
(62, 'hhhh', '0000-00-00 00:00:00', '12/01/2012', '12/17/2012', 'dhd,jdkd', 'Chrysanthemum.jpg', 'bac', 'Rabat', 'ibtissam-ibtissam@hotmail.com', '12345', 'rfuikl', 'Marrakech', 'informatique', 'jknhggtvcgdtg', '34.0150490', '-6.8327200', 'bhxjxd'),
(63, 'hhhh', '0000-00-00 00:00:00', '12/01/2012', '12/17/2012', 'dhd,jdkd', 'Chrysanthemum.jpg', 'bac', 'Rabat', 'ibtissam-ibtissam@hotmail.com', '12345', 'rfuikl', 'Marrakech', 'informatique', 'jknhggtvcgdtg', '34.0150490', '-6.8327200', 'bhxjxd'),
(65, 'adnane', '2012-12-27 18:22:00', '12/01/2012', '12/17/2012', 'gvssklsjklx', 'Chrysanthemum.jpg', 'bac+2', 'tghjk', 'grace-moonlight@hotmail.com', '+21212345678', 'hdksdmls', 'Marrakech', 'informatique', 'hdjkddml', '40.3037000', '36.3639000', 'bhxjxd'),
(66, 'adnane', '2012-12-27 18:23:21', '12/01/2012', '12/17/2012', 'gvssklsjklx', 'Chrysanthemum.jpg', 'bac+2', 'tghjk', 'grace-moonlight@hotmail.com', '+21212345678', 'hdksdmls', 'Marrakech', 'informatique', 'hdjkddml', '40.3037000', '36.3639000', 'bhxjxd');

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
  `entreprise_e` varchar(255) CHARACTER SET utf8 NOT NULL,
  `desc_entr_e` text CHARACTER SET utf8 NOT NULL,
  `nbr_poste_e` int(11) NOT NULL,
  `lieu_e` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_depot_e` datetime DEFAULT NULL,
  `secteur_e` varchar(50) CHARACTER SET utf8 NOT NULL,
  `niveau_e` varchar(20) CHARACTER SET utf8 NOT NULL,
  `tel_e` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type_contrat_e` varchar(255) CHARACTER SET utf8 NOT NULL,
  `renumeration_e` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email_e` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ville_e` varchar(255) CHARACTER SET utf8 NOT NULL,
  `attitude` varchar(255) CHARACTER SET utf8 NOT NULL,
  `langitude` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image_e` varchar(255) CHARACTER SET utf8 NOT NULL,
  `site_e` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_e`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `emploi`
--

INSERT INTO `emploi` (`id_e`, `entreprise_e`, `desc_entr_e`, `nbr_poste_e`, `lieu_e`, `date_depot_e`, `secteur_e`, `niveau_e`, `tel_e`, `type_contrat_e`, `renumeration_e`, `email_e`, `ville_e`, `attitude`, `langitude`, `image_e`, `site_e`) VALUES
(17, 'OCP', 'Recrutement pour administration rÃ©seau', 10, 'OCP,casablanca', '0000-00-00 00:00:00', 'RÃ©seau', 'bac+2', '+21234567890', 'CDD', '8000dh Ã  9000dh', 'ocp.casablanca@site.com', 'Casablanca', '32.8802866', '-6.9135889', 'ocp.jpg', 'ocp.site.ma'),
(18, 'ONA', 'recrutement pour poste chef de projettt', 2, 'ONA,casablanca', '0000-00-00 00:00:00', 'Informatique', 'bac+2', '+212522346790', 'CDI', '9000dh Ã  10000dh', 'ONA.maroc@site.com', 'Casablanca', '33.5333333', '-7.5833333', 'ONA.gif', 'ona.maroc.site.com'),
(19, 'tetts', 'tetts', 10, 'Marrakech', '2012-12-29 14:54:11', 'tetts', 'bac+2', '1234567890', 'tetts', '2000dh Ã  2500dh', 'jaaba.ibtissamj@gmail.com', 'Rabat', '31.6333333', '-8.0000000', 'Penguins.jpg', 'wgfh');

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
  `lieu_f` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nbr_poste_f` int(11) NOT NULL,
  `ville_f` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email_f` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tel_f` varchar(255) CHARACTER SET utf8 NOT NULL,
  `resp_f` varchar(255) CHARACTER SET utf8 NOT NULL,
  `attitude` varchar(255) CHARACTER SET utf8 NOT NULL,
  `langitude` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image_f` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_depot_f` datetime NOT NULL,
  `site_f` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_f`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id_f`, `desc_f`, `secteur_f`, `dure_f`, `organisation_f`, `lieu_f`, `nbr_poste_f`, `ville_f`, `email_f`, `tel_f`, `resp_f`, `attitude`, `langitude`, `image_f`, `date_depot_f`, `site_f`) VALUES
(11, 'Apprentissage hardware', 'Electronique', 3, 'ENSA', 'ENSA Marrrakech,av Abdelkarim ', 19, 'Marrakech', 'ibtissam-ibtissam@hotmail.com', '+21212345678', 'Mr. ALOUI', '31.6468375', '-8.0203307', 'ensa.gif', '0000-00-00 00:00:00', 'ensa.site.ma'),
(12, 'Apprentissage du finance X', 'Finance', 2, 'ENCG', 'ENCG,Boulevard Allal Al Fassi,marrakech', 20, 'Marrakech', 'iraki@gmail.com', '+212524567843', 'MMe.Iraki', '31.6516671', '-8.0027188', 'encgm.jpg', '0000-00-00 00:00:00', 'encgm.site.ma'),
(13, 'apprentissage Excel', 'Civil', 3, 'INWI', 'INWI,117, avenue 2mars. Casablanca', 7, 'Casablanca', 'amjad.s@yahoo.fr', '+2125346721', 'Mr.Amjad', '33.5333333', '-7.5833333', 'inwi.jpg', '0000-00-00 00:00:00', 'INWI.site.ma'),
(14, 'apprentissge Excel', 'Economie', 2, 'BMCE ', 'BMCE,lissasfa,casablanca', 4, 'Casablanca', 'bmce@sote.com', '+212522345678', 'M.Latifi', '33.5333333', '-7.5833333', 'bmce.jpg', '0000-00-00 00:00:00', 'bmce.site.ma'),
(15, 'tetts', 'tetts', 30, 'tetts', 'tetts', 4, 'KÃ©nitra', 'ibtissam-ibtissam@hotmail.com', '+21212345678', 'Mr. ALOUI', '-36.3679230', '149.8472152', 'Desert.jpg', '2012-12-29 14:52:26', 'tetts'),
(16, 'tetts', 'tetts', 30, 'tetts', 'tetts', 4, 'KÃ©nitra', 'ibtissam-ibtissam@hotmail.com', '+21212345678', 'Mr. ALOUI', '-36.3679230', '149.8472152', 'Desert.jpg', '2012-12-29 14:53:22', 'tetts');

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `idf` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `sujet` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `date_depot` date NOT NULL,
  `idu` int(11) NOT NULL,
  PRIMARY KEY (`idf`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `forum`
--

INSERT INTO `forum` (`idf`, `titre`, `sujet`, `type`, `date_depot`, `idu`) VALUES
(1, 'ENSA Marrakech', 'SVP quand il y''aura le concours d''accés au 3ème année de cette année?', 'concours', '2012-12-30', 3),
(2, 'recherche d''emploi', 'Je suis diplomé en finance et je cherche un emploi temporaire.', 'emplois', '2012-12-29', 3),
(6, 'Cherche de formation', 'Je cherche une formation sur PHP', 'formations', '2012-12-31', 3),
(7, 'demande de stage', 'Je demande un stage en informatique.', 'stages', '2013-01-01', 3),
(9, 'cherche des prof', 'SociÃ©tÃ© SUPINF cherche un prof pour des cours de soir tel:0999999999', 'formations', '2013-01-01', 3),
(10, 'test', 'test', 'emplois', '2013-01-01', 3),
(11, 'conn', 'conn', 'concours', '2013-01-01', 3),
(12, 'jjjjjjjjjjjj', 'jjjjjjjjjjjjjjjjjjjjjj', 'concours', '2013-01-02', 3);

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE IF NOT EXISTS `reponse` (
  `idr` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `sujet` text NOT NULL,
  `idu` int(11) NOT NULL,
  `idf` int(11) NOT NULL,
  `date_depot` date NOT NULL,
  PRIMARY KEY (`idr`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Contenu de la table `reponse`
--

INSERT INTO `reponse` (`idr`, `titre`, `sujet`, `idu`, `idf`, `date_depot`) VALUES
(33, 'ok', 'okokok', 3, 2, '2013-01-01'),
(34, 'ok', 'ok', 3, 1, '2013-01-01'),
(35, 'ok', 'ok', 3, 10, '2013-01-01'),
(36, 'rcon', 'rcon', 3, 11, '2013-01-01'),
(39, 'hhhhhh', 'hhhhhhhhhhh', 3, 7, '2013-01-01'),
(40, 'ok', 'je suis dispo', 3, 9, '2013-01-01');

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE IF NOT EXISTS `stage` (
  `id_s` int(11) NOT NULL AUTO_INCREMENT,
  `niveau_s` varchar(20) CHARACTER SET utf8 NOT NULL,
  `secteur_s` varchar(30) CHARACTER SET utf8 NOT NULL,
  `dure_s` int(11) NOT NULL,
  `entreprise_s` varchar(255) CHARACTER SET utf8 NOT NULL,
  `remunere` varchar(3) CHARACTER SET utf8 NOT NULL,
  `nbr_poste` int(11) NOT NULL,
  `desc_entr_s` varchar(300) CHARACTER SET utf8 NOT NULL,
  `date_depot_s` datetime NOT NULL,
  `demarrage_s` date NOT NULL,
  `lieu_s` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email_s` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ville_s` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tel_s` varchar(255) CHARACTER SET utf8 NOT NULL,
  `attitude` varchar(255) CHARACTER SET utf8 NOT NULL,
  `langitude` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mission_s` varchar(100) CHARACTER SET utf8 NOT NULL,
  `image_s` varchar(255) CHARACTER SET utf8 NOT NULL,
  `site_s` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_s`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Contenu de la table `stage`
--

INSERT INTO `stage` (`id_s`, `niveau_s`, `secteur_s`, `dure_s`, `entreprise_s`, `remunere`, `nbr_poste`, `desc_entr_s`, `date_depot_s`, `demarrage_s`, `lieu_s`, `email_s`, `ville_s`, `tel_s`, `attitude`, `langitude`, `mission_s`, `image_s`, `site_s`) VALUES
(28, 'bac+3', 'Economie', 1, 'BMCE', 'Oui', 2, 'Stage technicien', '2012-12-04 00:00:00', '2013-08-01', 'SiÃ©ge C - BMCE Banque, Casablanca, Grand Casablanca, Maroc', 'BMCE@gmail.com', 'Casabalanca', '+212.345.457.801', '33.5333333', '-7.5833333', 'controler la gestion de dÃ©pot d argent', 'bmce.jpg', 'bmce.casablanca.site'),
(29, 'bac+5', 'RÃ©seau', 6, 'ONA', 'Oui', 1, 'Stage de fin d Ã©tude', '2012-12-03 00:00:00', '2013-01-08', 'Inwi, Boulevard d Anfa, Casablanca, Grand Casablanca, Maroc', 'ona@hotmail.com', 'Casablanca', '+212.345.457.432', '33.5935236', '-7.6305839', 'Administration du rÃ©seau de l entreprise avec NAGIOS', 'ONA.gif', 'ona.site.ma'),
(30, 'tetts', 'tetts', 3, 'fsttttttt', 'Oui', 12, 'tetts', '2012-12-29 14:55:16', '2012-12-30', 'Rabat', 'jaaba.ibtissamj@gmail.com', 'KÃ©nitra', '01234567', '34.0150490', '-6.8327200', 'tetts', 'Desert.jpg', 'tetts'),
(32, 'hh', 'kkkk', 30, 'kk', 'oui', 7, 'kkkkkk', '2013-01-01 00:00:00', '2013-12-11', 'Marrakech', 'yjh@jhj.jjjj', 'kkkkk', '9999999999', '31.6333333', '-8.0000000', 'JJJJ', '', 'jj');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
