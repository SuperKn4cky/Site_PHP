-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le :  ven. 10 nov. 2023 à 18:36
-- Version du serveur :  10.11.5-MariaDB-1:10.11.5+maria~ubu2204
-- Version de PHP :  7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `initiation_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_publication` date NOT NULL,
  `auteur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`titre`, `contenu`, `date_publication`, `auteur`) VALUES
('test', 'test', '2023-11-10', 'test'),
('Test', 'Ceci est un test', '2023-11-10', 'Moi'),
('aliben', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis temporibus velit veniam nulla neque pariatur perspiciatis alias. Omnis atque, nulla odio rerum modi, accusantium quas eos aut consequuntur repudiandae, repellat in! Suscipit impedit laboriosam quos atque error alias, omnis voluptatibus accusantium quaerat molestias? Sint eligendi, enim eveniet asperiores accusantium illum deserunt facilis obcaecati aut! Quam sed neque tempore quod, voluptate nulla! Ullam cum accusamus adipisci amet sint? Voluptates est accusantium exercitationem sit tempore libero, odio ullam necessitatibus praesentium quas ut! Voluptas placeat eveniet est ab vero! Iste ullam similique, eaque possimus earum soluta necessitatibus facilis molestiae nostrum mollitia eveniet aperiam officia ex magni tempore vel laudantium quod nisi modi eius hic incidunt! Provident tempora deleniti sapiente reiciendis voluptas dignissimos vitae officia. Earum nesciunt porro doloribus eum repellat harum delectus, maiores, vitae eius dolores accusamus distinctio fuga officiis facilis laborum ab quasi provident numquam dolorem voluptates? Eos neque illo quas, impedit non architecto a modi soluta fugiat vero placeat ratione dolorem harum perferendis, dolore explicabo cum aut beatae at dignissimos, velit dolor eligendi esse? Aliquam nihil blanditiis quibusdam, perspiciatis mollitia minus provident! Laboriosam quam dolores magni expedita quos ipsum ut tenetur quae aspernatur? Ullam, ea consequuntur ratione pariatur odio temporibus cum, dolore non excepturi laudantium, voluptatum est eius quisquam numquam hic iste soluta! Saepe itaque quo recusandae rem maxime in commodi aspernatur rerum officiis dolorem dolore eum amet quasi explicabo voluptate fugit voluptatibus quia, eligendi reprehenderit nulla perferendis? Minus iste quasi aliquam repellendus aut consequuntur consequatur dolorem, architecto at numquam hic possimus totam ut doloribus deleniti quae amet inventore pariatur! Illo, libero! Impedit libero totam provident. Corporis incidunt, molestias fugit cumque vitae nostrum voluptas nisi culpa atque consequuntur iure explicabo autem perspiciatis est sint quis inventore architecto impedit accusantium maiores eligendi veniam aperiam placeat voluptatibus! Asperiores rerum voluptate eum debitis molestias?', '2023-11-10', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(2, 'test', 'test', 'test@gmail.com', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff', 'user'),
(3, 'admin', 'admin', 'admin@gmail.com', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
