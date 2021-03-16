-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 16, 2021 at 01:24 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filrouge_goodmorning`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210304090342', '2021-03-04 09:11:27', 84),
('DoctrineMigrations\\Version20210304105639', '2021-03-04 10:58:59', 107),
('DoctrineMigrations\\Version20210310181516', '2021-03-10 18:20:38', 62),
('DoctrineMigrations\\Version20210310192406', '2021-03-10 19:25:08', 119),
('DoctrineMigrations\\Version20210315103044', '2021-03-15 10:31:16', 132);

-- --------------------------------------------------------

--
-- Table structure for table `formule`
--

CREATE TABLE `formule` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formule`
--

INSERT INTO `formule` (`id`, `name`) VALUES
(1, 'Classic'),
(2, 'Silver'),
(3, 'Gold');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `illustration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `illustration`, `subtitle`, `description`, `price`) VALUES
(1, 'croissant', 'croissant-au-beurre', '963950d09db346c03228b97411642f07b9584d1b.jpg', 'croissant au beurre', 'croissant au beurre fait maison', 130),
(2, 'pain au chocolat', 'pain-au-chocolat', '2b9906192c1e2c07d1a5a1720f3a82f58c147f43.jpg', 'pain au chocolat traditionnel', 'La formule traditionnelle', 110),
(3, 'pain au chocolat', 'pain-au-chocolat-au-beurre', '2ad2eecee8ff2eded2bc7f73670942eb22b2f9b8.jpg', 'pain au chocolat au beurre', 'le haut de gamme de la viennoiserie', 130),
(4, 'baguette maison', 'baguette-maison', 'da7deffad905265d85bc625b12f2f605ade180a4.jpg', 'baguette maison', 'La baguette maison', 110),
(5, 'pain au raisin', 'pain-au-raisin', '9854d331c4b0f2f1562c15fe830db5e0fce6f992.jpg', 'pain au raisin', 'Un formidable pain au raisin', 140),
(6, 'Pain de tradition', 'pain-de-tradition', '8936dec877cc5c3b896565ae29f961a10c37c609.jpg', 'Pain de tradition', 'Du fait maison spécialement pour vous', 180),
(7, 'pack baguette', 'pack-baguette', 'c13c073657575c90301e5d49a82068607481e1c3.jpg', 'pack de 3 baguettes', '3 baguettes au prix de 2 en prenant ce pack', 230),
(8, 'pack pain au chocolat', 'pack-pain-au-chocolat', '37820c20df395372b87212f9ec5e9d11262a60ff.jpg', 'pack 4 pain au chocolat', 'en prenant cette formule vous avez un pain au chocolat gratuit', 390),
(9, 'ultimate pack', 'ultimate-pack', '19b39cbdea474b9140de51470e116b725ecf2a81.jpg', 'ultimate pack 10x10', '10 pain au chocolat et 10 croissants, un pack ultime pour famille et entreprise  5€ de remise', 1880);

-- --------------------------------------------------------

--
-- Table structure for table `product_formule`
--

CREATE TABLE `product_formule` (
  `product_id` int(11) NOT NULL,
  `formule_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_formule`
--

INSERT INTO `product_formule` (`product_id`, `formule_id`) VALUES
(1, 2),
(1, 3),
(2, 2),
(2, 3),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(4, 3),
(5, 2),
(5, 3),
(6, 1),
(6, 2),
(6, 3),
(7, 3),
(8, 2),
(8, 3),
(9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `firstname`, `lastname`) VALUES
(3, 'gold@hotmail.fr', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$KzvLmEWPcNXNvf7MUBvSRw$0HCnbIF6g7wPtRolUtqsRU9keHp9zGuskgJ4gfwj2lQ', 'golddj972', 'Mada'),
(5, 'vjgold972@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$zeWHLQgMFDjLeqvv4nOkdQ$xZRKODAdCf3DynVbHpbYZUcukhaNudF0wF05nr2acIQ', 'gold', 'gaetan'),
(6, 'admin@gmail.com', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$dIlgwCjJl4miD1Zti94cTg$NlM5opZ43AWpPLd63yeuCrDaTruwTBIGE5HJDvAcplA', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `formule`
--
ALTER TABLE `formule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_formule`
--
ALTER TABLE `product_formule`
  ADD PRIMARY KEY (`product_id`,`formule_id`),
  ADD KEY `IDX_B18587284584665A` (`product_id`),
  ADD KEY `IDX_B18587282A68F4D1` (`formule_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formule`
--
ALTER TABLE `formule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_formule`
--
ALTER TABLE `product_formule`
  ADD CONSTRAINT `FK_B18587282A68F4D1` FOREIGN KEY (`formule_id`) REFERENCES `formule` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B18587284584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
