-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2024 at 12:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wine_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'SubAdmin'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Gary', 'admin@123', 'garybhanot@gmail.com', 1, '2024-03-10 21:06:08', '2024-03-10 21:17:31'),
(2, 'Milin', 'admin@123', 'milinvaniyawala@gmail.com', 2, '2024-03-10 21:06:08', '2024-03-10 21:17:41'),
(3, 'Abhishek', 'admin@123', 'abhishekgaur@gmail.com', 3, '2024-03-10 21:06:08', '2024-03-10 21:17:50'),
(4, 'rahul', 'b71b2c8fc5106df9c44e55730e603aea', 'rahulpatel@gmail.com', 1, '2024-03-11 01:24:45', '2024-03-11 01:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `vineyards`
--

CREATE TABLE `vineyards` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vineyards`
--

INSERT INTO `vineyards` (`id`, `name`, `region`) VALUES
(1, 'Chateau Lafite', 'Bordeaux'),
(2, 'Domaine de la Romanée-Conti', 'Burgundy'),
(3, 'Screaming Eagle', 'Napa Valley'),
(4, 'Penfolds', 'Barossa Valley'),
(5, 'Opus One', 'Napa Valley'),
(6, 'Torres', 'Penedès'),
(7, 'Casillero del Diablo', 'Maipo Valley'),
(8, 'Cloudy Bay', 'Marlborough'),
(9, 'Concha y Toro', 'Maipo Valley'),
(10, 'Antinori', 'Tuscany');

-- --------------------------------------------------------

--
-- Table structure for table `wines`
--

CREATE TABLE `wines` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `vineyard_id` int(11) DEFAULT NULL,
  `rating` decimal(3,1) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wines`
--

INSERT INTO `wines` (`id`, `name`, `type_id`, `vineyard_id`, `rating`, `price`, `image`) VALUES
(21, 'Chateau Lafite Rothschild', 1, 1, 94.0, 1000.00, 'https://www.canadianliquorstore.ca/cdn/shop/files/8827805-7.jpg?v=1685330184&width=3750'),
(22, 'Domaine de la Romanée-Conti Romanée-Conti', 1, 2, 98.0, 5000.00, 'https://image.harrods.com/domaine-de-la-romanee-conti-romanee-conti-grand-cru-2020-75cl-burgundy-france_19907008_47825818_2048.jpg'),
(23, 'Screaming Eagle Cabernet Sauvignon', 1, 3, 97.0, 3000.00, 'https://auction.zachys.com/ItemImages/000034/34884a_lg.jpeg'),
(24, 'Penfolds Grange', 1, 4, 95.0, 600.00, 'https://images.vivino.com/thumbs/vWBHfmvHSeu_Z9EaR1eAhw_pb_600x600.png'),
(25, 'Opus One Cabernet Sauvignon', 1, 5, 92.0, 400.00, 'https://cdn.shopify.com/s/files/1/2479/4148/products/8253642-OPUS-ONE-2016_1600x.jpg?v=1675362874'),
(26, 'Torres Mas La Plana', 1, 6, 91.0, 200.00, 'https://elhorreopr.com/image/cache/catalog/products/720034-600x600.jpg'),
(27, 'Casillero del Diablo Reserva Privada', 1, 7, 88.0, 50.00, 'https://walmartcr.vtexassets.com/arquivos/ids/499944-800-450?v=638415023393830000&width=800&height=450&aspect=true'),
(28, 'Cloudy Bay Sauvignon Blanc', 2, 8, 90.0, 30.00, 'https://www.everythingwine.ca/media/catalog/product/3/0/304469_cloudy_bay_sauv_blanc.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700'),
(29, 'Concha y Toro Don Melchor Cabernet Sauvignon', 1, 9, 89.0, 80.00, 'https://www.myicellar.com/imgstore/s52/don-melchor-concha-y-toro-don-melchor-cabernet-sauvignon-2015-13977.jpg?z=1111'),
(30, 'Antinori Tignanello', 1, 10, 93.0, 150.00, 'https://www.parcellewine.shop/wp-content/uploads/1690/75/antinori-tignanello-1986-antinori-discover-the-latest-fashion-trends-and-order-now_0.jpg'),
(31, 'Domaine Weinbach Gewürztraminer', 2, 10, 88.0, 40.00, 'https://horizonlives3.diageohorizon.com/PR1600/media/images/bottles/imported/B08740%20Gewurztraminer,%20Grand%20Cru,%20Furstentum,%20Weinbach%20copy.jpg'),
(32, 'Dom Pérignon Brut', 4, 9, 96.0, 300.00, 'https://www.mybottleshop.au/media/catalog/product/d/o/dom-perignon-2003-brut-vintage-champagne-1-5ltr_1_1.jpg'),
(33, 'Château d\'Yquem Sauternes', 5, 6, 97.0, 500.00, 'https://marketwines.ca/wp-content/uploads/2023/02/Chateau-Yquem-2010.jpg'),
(34, 'Taylor\'s Vintage Port', 6, 5, 95.0, 100.00, 'https://aem.lcbo.com/content/dam/lcbo/products/0/4/6/9/046946.jpg.thumb.1280.1280.jpg'),
(35, 'Ruinart Blanc de Blancs Champagne', 4, 1, 92.0, 80.00, 'https://www.granchateaux.ch/media/catalog/product/cache/413dcc74255263d80df2abd4a737fce6/f/r/frch073_1.jpg'),
(36, 'Bodegas Valdespino Pedro Ximénez Sherry', 6, 5, 91.0, 60.00, 'https://www.mycellars.com.au/wp-content/uploads/2017/06/valdespino-el-candado-pedro-ximenez-sherry-new.jpg'),
(37, 'Louis Roederer Cristal Brut Champagne', 4, 7, 94.0, 400.00, 'https://cdn.shopify.com/s/files/1/0956/4184/files/1996LouisRoedererCristalVintageBrutChampagne.jpg?height=645&pad_color=fff&v=1694818784&width=465'),
(38, 'Chateau Musar Rouge', 1, 4, 90.0, 50.00, 'https://applejack.com/site/images/Chateau-Musar-Levantine-de-Musar-Rouge-750-ml_1.png'),
(39, 'Cloudy Bay Te Koko', 2, 8, 91.0, 60.00, 'https://thechampagnecompany.com/media/catalog/product/cache/fff7f3f83de0de5d4401f282ee5171d0/c/l/cloudy_bay_te_koko_2016_1.jpg'),
(40, 'Dom Pérignon Rosé', 4, 2, 95.0, 400.00, 'https://www.n-wines.com/wp-content/uploads/2022/09/Dom-Perignon-Rose-Luminous-2006-Magnum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wine_types`
--

CREATE TABLE `wine_types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wine_types`
--

INSERT INTO `wine_types` (`id`, `name`) VALUES
(5, 'Dessert'),
(6, 'Fortified'),
(7, 'Other'),
(1, 'Red'),
(3, 'Rosé'),
(4, 'Sparkling'),
(2, 'White');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `vineyards`
--
ALTER TABLE `vineyards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `wines`
--
ALTER TABLE `wines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `vineyard_id` (`vineyard_id`);

--
-- Indexes for table `wine_types`
--
ALTER TABLE `wine_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vineyards`
--
ALTER TABLE `vineyards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wines`
--
ALTER TABLE `wines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `wine_types`
--
ALTER TABLE `wine_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

--
-- Constraints for table `wines`
--
ALTER TABLE `wines`
  ADD CONSTRAINT `wines_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `wine_types` (`id`),
  ADD CONSTRAINT `wines_ibfk_2` FOREIGN KEY (`vineyard_id`) REFERENCES `vineyards` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
