-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 17 fév. 2021 à 16:52
-- Version du serveur :  5.7.33-0ubuntu0.18.04.1
-- Version de PHP : 7.3.15-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `live-38_benoitpat_PizzaMamma`
--

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`id`, `pseudo`, `email`, `password`, `registration_date`) VALUES
(3, 'pseudo1', 'psudo@gmail.com', '$2y$10$ap2awcMJ.vjbyJxVykg6LOSUqzosJWpK9XGW.E12ZbJrG0OfF92.u', '2021-02-03'),
(4, 'Biloute', 'biloute@gmail.fr', '$2y$10$V05yKZ5f8ARIvQHsteK5FeKsOVw9wfsA15sCGf2UKKQgVa.9C1jXa', '2021-02-11'),
(5, 'test', 'test@test.com', '$2y$10$O5V1emBqKl3U.rXB09E5Eu1yBlKh.iSG4.BymE1SlWUSsI803rtTC', '2021-02-11'),
(6, 'ben', 'ben@gmail.com', '$2y$10$kVShBdvSjFKFUwkKjgcIMec/a35DEp2p14KVm3nwrpKGphT.18zp.', '2021-02-15'),
(7, 'test2', 'test2@gmail.fr', '$2y$10$onAgVLb1iAoeXHXHNak.NuoQmLRk6IGlrUPuwOLkF8QBZ8TsxJJCS', '2021-02-17'),
(8, 'bob', 'bob@bob.fr', '$2y$10$oWGP2/JUY7FxjJ6qcyuErei2fCKH3E.lmrUW4y9GXdAlZeQFLASuS', '2021-02-17');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `order` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `date`, `order`, `totalprice`) VALUES
(1, 6, '2021-02-08', '1 biere une pizza', 15.5);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredients` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `type`, `name`, `ingredients`, `price`) VALUES
(1, 'pizza', 'Regina', 'Tomate, mozzarella, champignon, jambon blanc, olives', 9.8),
(2, 'pizza', 'Romana', 'Tomate, mozzarella, anchois, câpres à queue, olives', 9.8),
(3, 'pizza', 'Daniela', 'Tomate, mozzarella, San Daniel 18 mois après cuisson, copeaux de parmigiano, pousses d\'épinards', 13.8),
(4, 'pizza', 'Colonnata', 'Tomate, mozzarella, speck légèrement fumé, roquette et lard de Colonnata après cuisson', 13.8),
(5, 'pizza', 'Napolitaine', 'Tomate, mozzarella, basilic frais', 8.9),
(6, 'pizza', 'diavola', 'Tomate, mozzarella, champignons, schiacciata piquante', 11.8),
(7, 'pizza', 'Salmone', 'sauce parmigiano a l\'aneth, saumon fumé par nos soins, tomates cerises et pousses d\'épinards', 14.2),
(8, 'pizza', 'melanos', 'Sauce parmigiano à la truffe, jambon cuit Alfière à la truffe, roquette et parmigiano après cuisson', 15.8),
(9, 'pizza', '4 fromaggi', 'Sauce parmigiano, gorgonzola, taleggio, mozzarella, noix, tomates cerises et roquette', 14.2),
(10, 'pizza', 'Mortadella', 'Pesto, mozzarella, mortadelle de Bologne après cuisson, roquette et tomates confites', 12.8),
(11, 'pizza', 'la Végétarienne', 'Pesto, légumes de saison cuits et en pickles, parmigiano', 11.8),
(12, 'dessert', 'Tiramisu maison', '', 6),
(13, 'dessert', 'Cheese cake', 'citron ou vanille', 6),
(14, 'dessert', 'Panna cotta ', 'aux fruits exotiques', 6),
(15, 'dessert', 'Pizza sucrée', 'pâte à tartiner maison', 6.5),
(16, 'dessert', 'Baba Flambé', 'flambé à l\'Amaretto', 6.5),
(17, 'dessert', 'cassata sicilienne', '', 6.5),
(18, 'dessert', 'tarte au citron à l\'italienne', '', 7.5),
(19, 'dessert', 'cannoli à la vanille ', '', 5.6),
(54, 'boisson', 'Vittel 50cl', '', 2.7),
(55, 'boisson', 'Badoit 50cl', '', 2.9),
(56, 'boisson', 'Leffe 25cl', '', 3.2),
(57, 'boisson', 'Hoegaarden 25cl', '', 3.5),
(58, 'biere', 'Duvel 25cl', '', 3.7),
(59, 'boisson', 'Coca-cola 33cl', '', 3.3),
(60, 'boisson', 'Coca-cola light 33cl', '', 3.3),
(61, 'boisson', 'Oasis 33cl', '', 3.3),
(62, 'boisson', 'Sprite 33cl', '', 3.3),
(63, 'boisson', 'Orangina 33cl', '', 3.3);

-- --------------------------------------------------------

--
-- Structure de la table `products_orders`
--

CREATE TABLE `products_orders` (
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products_orders`
--
ALTER TABLE `products_orders`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Contraintes pour la table `products_orders`
--
ALTER TABLE `products_orders`
  ADD CONSTRAINT `products_orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `products_orders_ibfk_3` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
