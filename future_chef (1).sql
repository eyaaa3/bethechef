-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 mai 2024 à 17:28
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `future_chef`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(8) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `sexe` char(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `niv_acc` int(1) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom`, `prenom`, `sexe`, `email`, `niv_acc`, `mdp`) VALUES
(14686868, 'ramzi', 'golden', 'm', 'admin1@gmail.com', 1, 'pass123');

-- --------------------------------------------------------

--
-- Structure de la table `chef`
--

CREATE TABLE `chef` (
  `id_chef` int(8) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `sexe` char(1) NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `experience` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chef`
--

INSERT INTO `chef` (`id_chef`, `nom`, `prenom`, `sexe`, `date_naissance`, `email`, `mdp`, `experience`) VALUES
(363, 'jemaa', 'mo', 'm', '2023-03-15', 'jema@gmail.com', '32250170a0dca92d53ec9624f336ca24', 2),
(12222, 'adee', 'ee', 'm', '2024-05-10', 'adem@gmail.com', '32250170a0dca92d53ec9624f336ca24', 1),
(25311333, 'imed', 'imed', 'm', '2024-05-02', 'imed@gmail.com', '32250170a0dca92d53ec9624f336ca24', 3),
(46618225, 'eya', 'bouabdallah', 'm', '2024-05-11', 'eyabou@gmail.com', '32250170a0dca92d53ec9624f336ca24', 2);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_formation` int(3) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `programme` text NOT NULL,
  `duree` int(3) NOT NULL,
  `prix` int(4) NOT NULL,
  `date_formation` date NOT NULL,
  `num_chef` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `titre`, `programme`, `duree`, `prix`, `date_formation`, `num_chef`) VALUES
(4, 'Formation Master Classe Gâteau 3D', '*Les génoises (Daquoise pistache/noisette, Genoise nature/cacao..) *Les crèmes (Crème de base Goût pistache/noisette/chocolat..)', 6, 180, '2024-10-12', 363),
(24, 'Formation en Entremets', '* Entremet Caramelia , Entremet Plaisir,Entremet Intense Chocolat, Entremet Citron Meringue *Glaçage Miroir ,Glaçage Rocher ,Effets Velours ..', 3, 120, '2024-12-20', 363),
(255, 'Formation Gateau fin d\'année', 'Opera , Othello pistach chocolat ,Metisse noisette , Courant D’air Nougatine a la crème fruit sec ,Russe fruits rouge , Bûche chocolat orange', 3, 700, '2024-05-16', 363);

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `id_recette` int(3) NOT NULL,
  `titre` varchar(40) NOT NULL,
  `ingredient` text NOT NULL,
  `preparation` text NOT NULL,
  `temp_prep` int(3) NOT NULL,
  `nb_personnes` int(4) NOT NULL,
  `num_chef` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`id_recette`, `titre`, `ingredient`, `preparation`, `temp_prep`, `nb_personnes`, `num_chef`) VALUES
(69, 'Gaufres sans oeufs', '250ml de lait,15ml de jus de citron,150g de farine ,40 g de cassonade,15ml de fécule de maïs,5ml de poudre à pâte,2,5ml de bicarbonate de soude,1g de sel,45ml d’huile végétale', ':Mélanger lait et jus de citron, laisser reposer. Mélanger ingrédients secs dans un bol, ajouter lait-citron et huile.Laisser reposer la pâte, puis cuire dans un gaufrier jusqu\'à dorure.', 31, 3, 363),
(444, 'Cookies', '150g de farine,5g levure chimique,100 g sucre ,100g beurre,100g chocolat,10g sucre vanille', 'Préchauffer le four à 180°C. Mélanger beurre, sucre, œuf, sucre vanillé, levure, farine et pépites de chocolat. Former des boules de pâte sur une plaque et cuire 10 minutes jusqu\'à brunissement des bords.', 20, 3, 363);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(8) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `sexe` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `nom`, `prenom`, `email`, `mdp`, `sexe`) VALUES
(123123, 'hellooo', 'halo', 'helo@gmail.com', '32250170a0dca92d53ec9624f336ca24', 'm'),
(1234123, 'wahida', 'ben achour', 'wahida@gmail.com', '32250170a0dca92d53ec9624f336ca24', 'm'),
(12345666, 'amenu', 'bb', 'past@gmail.com', 'pass123', 'm'),
(14141414, 'SparkleHubb', 'test', 'test@gmail.com', 'pass123', 'm'),
(14253696, 'wihebb', 'ahmed', 'wiheb@gmail.com', '32250170a0dca92d53ec9624f336ca24', 'm'),
(14536922, 'work', 'haya', 'haya@gmail.com', 'pass123', 'm'),
(25888888, 'eyaa', 'bouabdallahh', 'sou@gmail.com', '9be40402f45736bcb9502225fad5ec9b', 'm'),
(85858585, 'molka', 'cherni', 'molkaa@gmail.com', '$2y$10$QM4XAWhgi.oGPpgukts1ZeSucIqnXpFOtE69lZ7XHQ.rbHVvc.gBa', 'm');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateurs` int(4) NOT NULL,
  `type` int(3) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `n_cin` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateurs`, `type`, `adresse`, `mdp`, `nom`, `n_cin`) VALUES
(1, 1, 'admin1@gmail.com', 'pass123', 'ramzi', 14686868),
(11, 2, 'helo@gmail.com', '32250170a0dca92d53ec9624f336ca24', 'hellooo', 123123),
(15, 2, 'molkaa@gmail.com', '$2y$10$QM4XAWhgi.oGPpgukts1ZeSucIqnXpFOtE69lZ7XHQ.rbHVvc.gBa', 'molka', 85858585),
(23, 3, 'imed@gmail.com', '32250170a0dca92d53ec9624f336ca24', 'imed', 25311333),
(24, 3, 'eyabou@gmail.com', '32250170a0dca92d53ec9624f336ca24', 'eya', 46618225),
(25, 3, 'adem@gmail.com', '32250170a0dca92d53ec9624f336ca24', 'adee', 12222),
(26, 3, 'jema@gmail.com', '32250170a0dca92d53ec9624f336ca24', 'jemaa', 363),
(27, 2, 'sou@gmail.com', '9be40402f45736bcb9502225fad5ec9b', 'eyaa', 25888888),
(30, 2, 'wiheb@gmail.com', '32250170a0dca92d53ec9624f336ca24', 'wihebb', 14253696),
(31, 2, 'wahida@gmail.com', '32250170a0dca92d53ec9624f336ca24', 'wahida', 1234123);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`id_chef`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_formation`),
  ADD UNIQUE KEY `titre` (`titre`);

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`id_recette`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateurs`),
  ADD UNIQUE KEY `adresse` (`adresse`),
  ADD UNIQUE KEY `n_cin` (`n_cin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15151516;

--
-- AUTO_INCREMENT pour la table `chef`
--
ALTER TABLE `chef`
  MODIFY `id_chef` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46618226;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `id_recette` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=445;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85858586;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateurs` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
