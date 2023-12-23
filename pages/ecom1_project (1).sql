-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 23 déc. 2023 à 03:25
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecom1_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `street_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `street_nb` int NOT NULL,
  `city` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `province` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `zip_code` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `order_has_product`
--

DROP TABLE IF EXISTS `order_has_product`;
CREATE TABLE IF NOT EXISTS `order_has_product` (
  `order_id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`product_id`,`order_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `quantity`, `price`, `img_url`, `description`) VALUES
(11, 'Baskets ', 3, '999.99', '..\\styles\\image1.jpeg', 'basket Maddy à logo et à deux tons'),
(12, 'Baskets ', 3, '500.00', '..\\styles\\images 2.jpeg', 'basket noir à logo et à deux tons'),
(13, 'Baskets ', 3, '500.00', '..\\styles\\images 3.jpeg', 'basket noir blanc à logo et à deux tons'),
(14, 'louis vuitton', 3, '800.00', '..\\styles\\louis vuitton1.png', 'basket rouge blanc à logo et à deux tons'),
(15, 'louis vuitton', 3, '999.99', '..\\styles\\louis2.jpeg', 'basket noir blanc à logo et à deux tons'),
(16, 'louis vuitton', 4, '500.00', '..\\styles\\louis3.jpeg', 'basket de couleur à logo et à deux tons ');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `name`, `description`) VALUES
(1, 'super admi', 'super admin'),
(2, 'admin', 'admin'),
(3, 'client', 'client');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `fname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `billing_address_id` bigint NOT NULL,
  `shipping_address_id` bigint NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` bigint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `user_name`, `email`, `pwd`, `fname`, `lname`, `billing_address_id`, `shipping_address_id`, `token`, `role_id`) VALUES
(3, 'admin', 'sadeufotsing2002@gmail.com', '99b6cf40c3d4a66589337d7231f39717eb3ab044', 'william', 'precieu', 0, 0, 'a2f835e856dc1c2bdc3bc0b9b3736e726a7b8b24b7d1f5d01349a4dfd1578052', 2),
(4, 'miskinole2002   ', 'sadeufotsing2002@gmail.com', '99b6cf40c3d4a66589337d7231f39717eb3ab044', 'fotsing', 'sadeu', 0, 0, 'd198895fe02bac6ac09d812f9f56d39ff14f9c32b203fa3d983778c5b34ccc75', 3),
(5, 'vanessa123', 'vanessa@gmail.com', '99b6cf40c3d4a66589337d7231f39717eb3ab044', 'vanessa', 'kamdjom', 0, 0, '94550a2821b59ed2e3622b0404cc85f4d1f806a1c533be210d50705d6dcf343b', 3),
(6, 'toto', 'nankogeraldine@gmail.com', 'iut', 'tat', 'tata', 0, 0, '', 3),
(7, 'geraldine', 'nankogeraldine@gmail.com', '99b6cf40c3d4a66589337d7231f39717eb3ab044', 'marie', 'nanko', 0, 0, '6ffd3ba9dc48f71ebf973cfff203c08fdb188fa6d8e0cdc33cd728b674d651bc', 3),
(8, 'ruan123', 'ruanemilson@gmail.com', '99b6cf40c3d4a66589337d7231f39717eb3ab044', 'emilson', 'ruan', 0, 0, '9dd7a00cdc04160033a3bbc6af07d83bcd9342c85afeaaf6d96b53702485af9c', 2),
(9, 'jay', 'ruanemilson@gmail.com', '99b6cf40c3d4a66589337d7231f39717eb3ab044', 'emilson', 'fotso', 0, 0, '', 3),
(10, 'mamita', 'ruanemilson@gmail.com', '99b6cf40c3d4a66589337d7231f39717eb3ab044', 'emilson', '  fotso', 0, 0, '', 3),
(12, 'papy', 'papy@gmail.com', '99b6cf40c3d4a66589337d7231f39717eb3ab044', 'narciss', 'oumbe', 0, 0, '', 3);

-- --------------------------------------------------------

--
-- Structure de la table `user_order`
--

DROP TABLE IF EXISTS `user_order`;
CREATE TABLE IF NOT EXISTS `user_order` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `ref` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `user_id` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `order_has_product`
--
ALTER TABLE `order_has_product`
  ADD CONSTRAINT `order_id` FOREIGN KEY (`order_id`) REFERENCES `user_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user_order`
--
ALTER TABLE `user_order`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
