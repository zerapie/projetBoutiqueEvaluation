-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 29 mars 2021 à 16:14
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bikestores`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `sous_categorie_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `category_id` (`category_id`),
  KEY `sous_categorie_id` (`sous_categorie_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `sous_categorie_id`, `category_id`, `price`) VALUES
(1, 'Trek 820 - 2016', 9, 6, '379.99'),
(2, 'Ritchey Timberwolf Frameset - 2016', 5, 6, '749.99'),
(3, 'Surly Wednesday Frameset - 2016', 8, 6, '999.99'),
(4, 'Trek Fuel EX 8 29 - 2016', 9, 6, '2899.99'),
(5, 'Heller Shagamaw Frame - 2016', 3, 6, '1320.99'),
(6, 'Surly Ice Cream Truck Frameset - 2016', 8, 6, '469.99'),
(7, 'Trek Slash 8 27.5 - 2016', 9, 6, '3999.99'),
(8, 'Trek Remedy 29 Carbon Frameset - 2016', 9, 6, '1799.99'),
(9, 'Trek Conduit+ - 2016', 9, 5, '2999.99'),
(12, 'Electra Townie Original 21D - 2016', 1, 3, '549.99'),
(13, 'Electra Cruiser 1 (24-Inch) - 2016', 1, 3, '269.99'),
(14, 'Electra Girl\'s Hawaii 1 (16-inch) - 2015/2016', 1, 3, '269.99'),
(15, 'Electra Moto 1 - 2016', 1, 3, '529.99'),
(16, 'Electra Townie Original 7D EQ - 2016', 1, 3, '599.99'),
(21, 'Electra Cruiser 1 (24-Inch) - 2016', 1, 1, '269.99'),
(22, 'Electra Girl\'s Hawaii 1 (16-inch) - 2015/2016', 1, 1, '269.99'),
(23, 'Electra Girl\'s Hawaii 1 (20-inch) - 2015/2016', 1, 1, '299.99'),
(24, 'Electra Townie Original 21D - 2016', 1, 2, '549.99'),
(25, 'Electra Townie Original 7D - 2015/2016', 1, 2, '499.99'),
(26, 'Electra Townie Original 7D EQ - 2016', 1, 2, '599.99'),
(27, 'Surly Big Dummy Frameset - 2017', 8, 6, '999.99'),
(28, 'Surly Karate Monkey 27.5+ Frameset - 2017', 8, 6, '2499.99'),
(29, 'Trek X-Caliber 8 - 2017', 9, 6, '999.99'),
(30, 'Surly Ice Cream Truck Frameset - 2017', 8, 6, '999.99'),
(31, 'Surly Wednesday - 2017', 8, 6, '1632.99'),
(32, 'Trek Farley Alloy Frameset - 2017', 9, 6, '469.99'),
(33, 'Surly Wednesday Frameset - 2017', 8, 6, '469.99'),
(34, 'Trek Session DH 27.5 Carbon Frameset - 2017', 9, 6, '469.99'),
(35, 'Sun Bicycles Spider 3i - 2017', 7, 6, '832.99'),
(36, 'Surly Troll Frameset - 2017', 8, 6, '832.99'),
(37, 'Haro Flightline One ST - 2017', 2, 6, '379.99'),
(38, 'Haro Flightline Two 26 Plus - 2017', 2, 6, '549.99'),
(39, 'Trek Stache 5 - 2017', 9, 6, '1499.99'),
(40, 'Trek Fuel EX 9.8 29 - 2017', 9, 6, '4999.99'),
(41, 'Haro Shift R3 - 2017', 2, 6, '1469.99'),
(42, 'Trek Fuel EX 5 27.5 Plus - 2017', 9, 6, '2299.99'),
(43, 'Trek Fuel EX 9.8 27.5 Plus - 2017', 9, 6, '5299.99'),
(44, 'Haro SR 1.1 - 2017', 2, 6, '539.99'),
(45, 'Haro SR 1.2 - 2017', 2, 6, '869.99'),
(46, 'Haro SR 1.3 - 2017', 2, 6, '1409.99'),
(47, 'Trek Remedy 9.8 - 2017', 9, 6, '5299.99'),
(48, 'Trek Emonda S 4 - 2017', 9, 7, '1499.99'),
(49, 'Trek Domane SL 6 - 2017', 9, 7, '3499.99'),
(50, 'Trek Silque SLR 7 Women\'s - 2017', 9, 7, '5999.99'),
(51, 'Trek Silque SLR 8 Women\'s - 2017', 9, 7, '6499.99'),
(52, 'Surly Steamroller - 2017', 8, 7, '875.99'),
(53, 'Surly Ogre Frameset - 2017', 8, 7, '749.99'),
(54, 'Trek Domane SL Disc Frameset - 2017', 9, 7, '3199.99'),
(55, 'Trek Domane S 6 - 2017', 9, 7, '2699.99'),
(56, 'Trek Domane SLR 6 Disc - 2017', 9, 7, '5499.99'),
(57, 'Trek Emonda S 5 - 2017', 9, 7, '1999.99'),
(58, 'Trek Madone 9.2 - 2017', 9, 7, '4999.99'),
(59, 'Trek Domane S 5 Disc - 2017', 9, 7, '2599.99'),
(60, 'Sun Bicycles ElectroLite - 2017', 7, 5, '1559.99'),
(61, 'Trek Powerfly 8 FS Plus - 2017', 9, 5, '4999.99'),
(62, 'Trek Boone 7 - 2017', 9, 4, '3499.99'),
(63, 'Trek Boone Race Shop Limited - 2017', 9, 4, '3499.99'),
(64, 'Electra Townie Original 7D - 2017', 1, 3, '489.99'),
(65, 'Sun Bicycles Lil Bolt Type-R - 2017', 7, 3, '346.99'),
(66, 'Sun Bicycles Revolutions 24 - 2017', 7, 3, '250.99'),
(67, 'Sun Bicycles Revolutions 24 - Girl\'s - 2017', 7, 3, '250.99'),
(68, 'Sun Bicycles Cruz 3 - 2017', 7, 3, '449.99'),
(69, 'Sun Bicycles Cruz 7 - 2017', 7, 3, '416.99'),
(70, 'Electra Amsterdam Original 3i - 2015/2017', 1, 3, '659.99'),
(71, 'Sun Bicycles Atlas X-Type - 2017', 7, 3, '416.99'),
(72, 'Sun Bicycles Biscayne Tandem 7 - 2017', 7, 3, '619.99'),
(73, 'Sun Bicycles Brickell Tandem 7 - 2017', 7, 3, '749.99'),
(74, 'Electra Cruiser Lux 1 - 2017', 1, 3, '439.99'),
(75, 'Electra Cruiser Lux Fat Tire 1 Ladies - 2017', 1, 3, '599.99'),
(76, 'Electra Girl\'s Hawaii 1 16\" - 2017', 1, 3, '299.99'),
(77, 'Electra Glam Punk 3i Ladies\' - 2017', 1, 3, '799.99'),
(78, 'Sun Bicycles Biscayne Tandem CB - 2017', 7, 3, '647.99'),
(79, 'Sun Bicycles Boardwalk (24-inch Wheels) - 2017', 7, 3, '402.99'),
(80, 'Sun Bicycles Brickell Tandem CB - 2017', 7, 3, '761.99'),
(81, 'Electra Amsterdam Fashion 7i Ladies\' - 2017', 1, 3, '1099.99'),
(82, 'Electra Amsterdam Original 3i Ladies\' - 2017', 1, 3, '659.99'),
(83, 'Trek Boy\'s Kickster - 2015/2017', 9, 1, '149.99'),
(84, 'Sun Bicycles Lil Kitt\'n - 2017', 7, 1, '109.99'),
(85, 'Haro Downtown 16 - 2017', 2, 1, '329.99'),
(86, 'Trek Girl\'s Kickster - 2017', 9, 1, '149.99'),
(87, 'Trek Precaliber 12 Boys - 2017', 9, 1, '189.99'),
(88, 'Trek Precaliber 12 Girls - 2017', 9, 1, '189.99'),
(89, 'Trek Precaliber 16 Boys - 2017', 9, 1, '209.99'),
(90, 'Trek Precaliber 16 Girls - 2017', 9, 1, '209.99'),
(91, 'Trek Precaliber 24 (21-Speed) - Girls - 2017', 9, 1, '349.99'),
(92, 'Haro Shredder 20 - 2017', 2, 1, '209.99'),
(93, 'Haro Shredder 20 Girls - 2017', 2, 1, '209.99'),
(94, 'Haro Shredder Pro 20 - 2017', 2, 1, '249.99'),
(95, 'Electra Girl\'s Hawaii 1 16\" - 2017', 1, 1, '299.99'),
(96, 'Electra Moto 3i (20-inch) - Boy\'s - 2017', 1, 1, '349.99'),
(97, 'Electra Savannah 3i (20-inch) - Girl\'s - 2017', 1, 1, '349.99'),
(98, 'Electra Straight 8 3i (20-inch) - Boy\'s - 2017', 1, 1, '489.99'),
(99, 'Electra Sugar Skulls 1 (20-inch) - Girl\'s - 2017', 1, 1, '299.99'),
(100, 'Electra Townie 3i EQ (20-inch) - Boys\' - 2017', 1, 1, '489.99'),
(101, 'Electra Townie 7D (20-inch) - Boys\' - 2017', 1, 1, '339.99'),
(102, 'Electra Townie Original 7D - 2017', 1, 2, '489.99'),
(103, 'Sun Bicycles Streamway 3 - 2017', 7, 2, '551.99'),
(104, 'Sun Bicycles Streamway - 2017', 7, 2, '481.99'),
(105, 'Sun Bicycles Streamway 7 - 2017', 7, 2, '533.99'),
(106, 'Sun Bicycles Cruz 3 - 2017', 7, 2, '449.99'),
(107, 'Sun Bicycles Cruz 7 - 2017', 7, 2, '416.99'),
(108, 'Sun Bicycles Cruz 3 - Women\'s - 2017', 7, 2, '449.99'),
(109, 'Sun Bicycles Cruz 7 - Women\'s - 2017', 7, 2, '416.99'),
(110, 'Sun Bicycles Drifter 7 - 2017', 7, 2, '470.99'),
(111, 'Sun Bicycles Drifter 7 - Women\'s - 2017', 7, 2, '470.99'),
(112, 'Trek 820 - 2018', 9, 6, '379.99'),
(113, 'Trek Marlin 5 - 2018', 9, 6, '489.99'),
(114, 'Trek Marlin 6 - 2018', 9, 6, '579.99'),
(115, 'Trek Fuel EX 8 29 - 2018', 9, 6, '3199.99'),
(116, 'Trek Marlin 7 - 2017/2018', 9, 6, '749.99'),
(117, 'Trek Ticket S Frame - 2018', 9, 6, '1469.99'),
(118, 'Trek X-Caliber 8 - 2018', 9, 6, '999.99'),
(119, 'Trek Kids\' Neko - 2018', 9, 6, '469.99'),
(120, 'Trek Fuel EX 7 29 - 2018', 9, 6, '2499.99'),
(121, 'Surly Krampus Frameset - 2018', 8, 6, '2499.99'),
(122, 'Surly Troll Frameset - 2018', 8, 6, '2499.99'),
(123, 'Trek Farley Carbon Frameset - 2018', 9, 6, '999.99'),
(124, 'Surly Krampus - 2018', 8, 6, '1499.00'),
(125, 'Trek Kids\' Dual Sport - 2018', 9, 6, '469.99'),
(126, 'Surly Big Fat Dummy Frameset - 2018', 8, 6, '469.99'),
(127, 'Surly Pack Rat Frameset - 2018', 8, 6, '469.99'),
(128, 'Surly ECR 27.5 - 2018', 8, 6, '1899.00'),
(129, 'Trek X-Caliber 7 - 2018', 9, 6, '919.99'),
(130, 'Trek Stache Carbon Frameset - 2018', 9, 6, '919.99'),
(131, 'Heller Bloodhound Trail - 2018', 3, 6, '2599.00'),
(132, 'Trek Procal AL Frameset - 2018', 9, 6, '1499.99'),
(133, 'Trek Procaliber Frameset - 2018', 9, 6, '1499.99'),
(134, 'Trek Remedy 27.5 C Frameset - 2018', 9, 6, '1499.99'),
(135, 'Trek X-Caliber Frameset - 2018', 9, 6, '1499.99'),
(136, 'Trek Procaliber 6 - 2018', 9, 6, '1799.99'),
(137, 'Heller Shagamaw GX1 - 2018', 3, 6, '2599.00'),
(138, 'Trek Fuel EX 5 Plus - 2018', 9, 6, '2249.99'),
(139, 'Trek Remedy 7 27.5 - 2018', 9, 6, '2999.99'),
(140, 'Trek Remedy 9.8 27.5 - 2018', 9, 6, '4999.99'),
(141, 'Trek Stache 5 - 2018', 9, 6, '1599.99'),
(142, 'Trek Fuel EX 8 29 XT - 2018', 9, 6, '3199.99'),
(143, 'Trek Domane ALR 3 - 2018', 9, 7, '1099.99'),
(144, 'Trek Domane ALR 4 Disc - 2018', 9, 7, '1549.99'),
(145, 'Trek Domane ALR 5 Disc - 2018', 9, 7, '1799.99'),
(146, 'Trek Domane SLR 6 - 2018', 9, 7, '4999.99'),
(147, 'Trek Domane ALR 5 Gravel - 2018', 9, 7, '1799.99'),
(240, 'Electra Townie Commute 27D Ladies - 2018', 1, 3, '899.99'),
(241, 'Electra Townie Commute 8D - 2018', 1, 3, '749.99'),
(242, 'Electra Townie Commute 8D Ladies\' - 2018', 1, 3, '699.99'),
(243, 'Electra Townie Original 21D EQ Ladies\' - 2018', 1, 3, '679.99'),
(244, 'Electra Townie Original 21D Ladies\' - 2018', 1, 3, '559.99'),
(245, 'Electra Townie Original 3i EQ - 2017/2018', 1, 3, '659.99'),
(246, 'Electra Townie Original 3i EQ Ladies\' - 2018', 1, 3, '639.99'),
(247, 'Electra Townie Original 7D EQ - 2018', 1, 3, '599.99'),
(248, 'Electra Townie Original 7D EQ Ladies\' - 2017/2018', 1, 3, '599.99'),
(249, 'Electra White Water 3i - 2018', 1, 3, '749.99'),
(250, 'Electra Townie Go! 8i - 2017/2018', 1, 3, '2599.99'),
(251, 'Electra Townie Commute Go! - 2018', 1, 3, '2999.99'),
(252, 'Electra Townie Commute Go! Ladies\' - 2018', 1, 3, '2999.99'),
(253, 'Electra Townie Go! 8i Ladies\' - 2018', 1, 3, '2599.99'),
(254, 'Electra Townie Balloon 3i EQ - 2017/2018', 1, 3, '749.99'),
(255, 'Electra Townie Balloon 7i EQ Ladies\' - 2017/2018', 1, 3, '899.99'),
(256, 'Electra Townie Commute 27D - 2018', 1, 3, '899.99'),
(257, 'Electra Amsterdam Fashion 3i Ladies\' - 2017/2018', 1, 3, '899.99'),
(260, 'Electra Townie Balloon 3i EQ Ladies\' - 2018', 1, 3, '799.99'),
(261, 'Electra Townie Balloon 7i EQ - 2018', 1, 3, '899.99'),
(262, 'Trek MT 201 - 2018', 9, 1, '249.99'),
(263, 'Strider Classic 12 Balance Bike - 2018', 6, 1, '89.99'),
(264, 'Strider Sport 16 - 2018', 6, 1, '249.99'),
(265, 'Strider Strider 20 Sport - 2018', 6, 1, '289.99'),
(266, 'Trek Superfly 20 - 2018', 9, 1, '399.99'),
(267, 'Trek Precaliber 12 Girl\'s - 2018', 9, 1, '199.99'),
(268, 'Trek Kickster - 2018', 9, 1, '159.99'),
(269, 'Trek Precaliber 12 Boy\'s - 2018', 9, 1, '199.99'),
(270, 'Trek Precaliber 16 Boy\'s - 2018', 9, 1, '209.99'),
(271, 'Trek Precaliber 16 Girl\'s - 2018', 9, 1, '209.99'),
(272, 'Trek Precaliber 20 6-speed Boy\'s - 2018', 9, 1, '289.99'),
(273, 'Trek Precaliber 20 6-speed Girl\'s - 2018', 9, 1, '289.99'),
(274, 'Trek Precaliber 20 Boy\'s - 2018', 9, 1, '229.99'),
(275, 'Trek Precaliber 20 Girl\'s - 2018', 9, 1, '229.99'),
(276, 'Trek Precaliber 24 (7-Speed) - Boys - 2018', 9, 1, '319.99'),
(277, 'Trek Precaliber 24 21-speed Boy\'s - 2018', 9, 1, '369.99'),
(278, 'Trek Precaliber 24 21-speed Girl\'s - 2018', 9, 1, '369.99'),
(279, 'Trek Precaliber 24 7-speed Girl\'s - 2018', 9, 1, '319.99'),
(280, 'Trek Superfly 24 - 2017/2018', 9, 1, '489.99'),
(281, 'Electra Cruiser 7D (24-Inch) Ladies\' - 2016/2018', 1, 1, '319.99'),
(282, 'Electra Cyclosaurus 1 (16-inch) - Boy\'s - 2018', 1, 1, '279.99'),
(283, 'Electra Heartchya 1 (20-inch) - Girl\'s - 2018', 1, 1, '319.99'),
(284, 'Electra Savannah 1 (20-inch) - Girl\'s - 2018', 1, 1, '319.99'),
(285, 'Electra Soft Serve 1 (16-inch) - Girl\'s - 2018', 1, 1, '279.99'),
(286, 'Electra Starship 1 16\" - 2018', 1, 1, '279.99'),
(287, 'Electra Straight 8 1 (16-inch) - Boy\'s - 2018', 1, 1, '279.99'),
(288, 'Electra Straight 8 1 (20-inch) - Boy\'s - 2018', 1, 1, '389.99'),
(289, 'Electra Superbolt 1 20\" - 2018', 1, 1, '319.99'),
(290, 'Electra Superbolt 3i 20\" - 2018', 1, 1, '369.99'),
(291, 'Electra Sweet Ride 1 (20-inch) - Girl\'s - 2018', 1, 1, '319.99');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
