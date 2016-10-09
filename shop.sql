-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2016 at 10:55 AM
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
(7, 'Fruit de la fragmentation', 'Permet de séparer ton corps en plusieurs morceau', 2000, 1, 10, './img/fruit_de_la_fragmentation.png'),
(8, 'Fruit de la girafe', 'Rend ton corps à moitié girafe', 2000, 2, 8, './img/fruit_de_la_girafe.jpg'),
(9, 'Fruit du léopard', 'Rend ton corps à moitié léopard', 6000, 2, 3, './img/fruit_du_leopard.jpg'),
(10, 'Fruit du feu', 'Te permet de changer ton corps en feu', 10000, 3, 2, './img/fruit_du_feu.png'),
(11, 'Fruit du sable', 'Te permet de changer ton corps en sable', 7000, 3, 2, './img/fruit_du_sable.png');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
