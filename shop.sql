-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2016 at 07:40 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(140) DEFAULT NULL,
  `price` double NOT NULL,
  `category_id` int(4) NOT NULL,
  `stock` int(6) DEFAULT NULL,
  `image` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name`, `description`, `price`, `category_id`, `stock`, `image`) VALUES
(6, 'Fruit du Gum Gum', 'Rend ton corps élastique', 5000, 1, 3, './img/fruit_du_gum_gum.jpg'),
(7, 'Fruit de la fragmentation', 'Te permet de séparer ton corps en plusieurs morceau', 3000, 1, 10, './img/fruit_de_la_fragmentation.png'),
(8, 'Fruit de la girafe', 'Te permet de te transformer en girafe', 3000, 2, 8, './img/fruit_de_la_girafe.jpg'),
(9, 'Fruit du léopard', 'Te permet de te transformer en léopard', 6000, 2, 3, './img/fruit_du_leopard.jpg'),
(10, 'Fruit du feu', 'Te permet de changer ton corps en feu', 10000, 3, 2, './img/fruit_du_feu.png'),
(11, 'Fruit du sable', 'Te permet de changer ton corps en sable', 7000, 3, 2, './img/fruit_du_sable.png'),
(12, 'Fruit du Fil', 'Te permet de créer des fils à volonté', 7000, 1, 2, './img/fruitdufil.png'),
(13, 'Fruit du Bistouri', 'Te permet de créer une sphère où tu peux tout faire', 7000, 1, 2, './img/fruitdubistouri.jpg'),
(16, 'Fruit de la Tortue', 'Te permet d\'avoir une carapace indestructible', 3000, 2, 5, './img/fruitdelatortue.jpg'),
(17, 'Fruit du Fouisseur', 'Te permet de te transformer en taupe', 3000, 2, 5, './img/fruitdufouisseur.jpg'),
(18, 'Fruit du Gaz', 'Rend ton corps gazeux', 5000, 3, 3, './img/fruitdugaz.png'),
(19, 'Fruit du Magma', 'Te permet de transformer ton corps em magma', 8000, 3, 2, './img/fruitdumagma.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
