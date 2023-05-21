-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 21 mai 2023 à 19:36
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `titre` varchar(140) NOT NULL,
  `contenu` text NOT NULL,
  `date` datetime NOT NULL,
  `tag` varchar(140) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `user_prenom` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `user_nom` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `user_pseudo` varchar(20) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `user_password` text CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `user_prenom`, `user_nom`, `user_pseudo`, `user_email`, `user_password`) VALUES
(1, 'Benjamin', 'Condette', 'gref', 'benjamin.condette@free.fr', '$2y$10$tXg34g1SEyjx.yZJrX34d.POp81OjpKloVTICcEJJAgfuYbwvSF5y'),
(2, 'Benjamin', 'Condette', 'fesf', 'benjamin.condette@free.fr', '$2y$10$Q1whSkaR/l5GkiW/M73Md.oC9n7f0LAJAwG52aXQknynTK7jWaKfK'),
(3, 'Benjamin', 'Condette', 'ezeza', 'benjamin.condette@free.fr', '$2y$10$VAD3gHswTlhtZSqOnE8ni.666Fjhk03YTnKP8QK05y8SZy3rkOCZa'),
(4, 'ezez', 'ezez', 'ezez', 'ezez', '$2y$10$8UFOXM5wlDgEaL64Zbqge.WKEhj7zPiqDzbElbn.DgahhR.KjJMMq'),
(5, 'fe', 'fe', 'fe', 'fe', '$2y$10$oE08RDpLE.WKPNBnz9ARmepm6vTp34j9YgvXqPro0IqUib1d5NYpG'),
(6, 'fe', 'fe', 'fe', 'fe', '$2y$10$GEoGCwYA/KHkVpUGpu.IU.a2yeN6hoOYnqXI3ualjIcAmfjLdXOG6'),
(7, 'fezf', 'zfezef', 'zefzefzef', 'zefzefzef', '$2y$10$Aqcpi1D0BzrpcmSm0Evc3OJ0bfTP14eBzsnYHmWDmbMxLHg4agSAu');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
