-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 13 nov. 2024 à 15:14
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chenil`
--

-- --------------------------------------------------------

--
-- Structure de la table `dog`
--

CREATE TABLE `dog` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `age` int(11) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `color` varchar(10) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dog`
--

INSERT INTO `dog` (`id`, `name`, `age`, `breed`, `color`, `image`) VALUES
(1, 'Cosmo', 1, 'Golden', '#feffcc', 'https://static.wikia.nocookie.net/marvelthemeparkuniverse/images/2/24/Guardians_of_the_Galaxy_-_Mission_BREAKOUT%21_%28attraction%29_006.jpg'),
(2, 'Imma', 3, 'Créole', 'marron', 'https://images.ctfassets.net/b85ozb2q358o/6aUWpjrNSxRAMjZhw87ls0/67cd06567e7688a70cfc6af1e3cb5096/berger_cr__ole_3_278465463.jpeg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `dog`
--
ALTER TABLE `dog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dog`
--
ALTER TABLE `dog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
