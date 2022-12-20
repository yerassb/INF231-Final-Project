-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 09:52 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frontendfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `username` varchar(255) NOT NULL,
  `item_ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`username`, `item_ID`) VALUES
('rootuser', 13);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Item_ID` int NOT NULL,
  `Item_Name` varchar(255) NOT NULL,
  `Item_Desc` varchar(255) NOT NULL,
  `Item_Image` blob,
  `Item_Price` double NOT NULL,
  `Item_Category` varchar(45) NOT NULL,
  `Item_Size` varchar(45) NOT NULL,
  `Country` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_ID`, `Item_Name`, `Item_Desc`, `Item_Image`, `Item_Price`, `Item_Category`, `Item_Size`, `Country`) VALUES
(1, 'Wardrobe 3D Vega, Kraft white, Horizon (Russia)', 'An incredibly stylish and spacious wardrobe will become an indispensable accent in your bedroom. It is distinguished by its functionality and concise design. It is much easier to maintain order with such furniture.', 0x696d672f6974656d5f696d67732f6974656d5f312e6a7067, 286.28, 'bedroom', '1200x500x2200', 'Russia'),
(2, 'Shoe cabinet 3D PORTO, Gianni Svetly, BRV Brest (Belarus)', 'Shoe cabinet right from the Belarus. It\'s very incredible', 0x696d672f6974656d5f696d67732f6974656d5f322e6a7067, 110.24, 'bedroom', '750x185x1260', 'Belarus'),
(3, 'Chest of drawers 4YA Snowley, White, MaiStar (Belarus)', 'A white chest of drawers with 4 drawers from the Snowley collection from the MyStar furniture factory Laconic design that will harmoniously fit into any interior, whether it is a bedroom or any other room in the house.', 0x696d672f6974656d5f696d67732f6974656d5f332e6a7067, 121.7, 'bedroom', '802x480x1000', 'Belarus'),
(4, 'Snowley desk, White , MaiStar (Belarus)', 'A white snowlery desk from one of the companies MaiStar', 0x696d672f6974656d5f696d67732f6974656d5f342e6a7067, 34.01, 'bedroom', '500x900x750', 'Belarus'),
(5, 'Linen closet 2D Snowley, White, MaiStar (Belarus)', 'A spacious and ergonomic wardrobe will become a colorful addition to your hallway, bedroom or nursery. It will fit seamlessly into any interior, adding a little comfort and functional saturation', 0x696d672f6974656d5f696d67732f6974656d5f352e6a7067, 175.17, 'bedroom', '902x580x1800', 'Belarus'),
(6, 'Single Meta bed with mattress holder, Grey, Square (Russia)', 'Good quality furniture. DMHome - prices for life', 0x696d672f6974656d5f696d67732f6974656d5f362e6a7067, 85.55, 'bedroom', '910x2010x700', 'Russia'),
(7, 'Wardrobe 3D Alyona, Milk Oak, Imperial (Russia)', 'An elegant wardrobe for Alain\'s clothes will be a good addition to the bedroom interior. Its stylish design immediately attracts attention, gives the room a special charm', 0x696d672f6974656d5f696d67732f6974656d5f372e6a7067, 134.74, 'bedroom', '1202x466x1905', 'Russia'),
(8, 'Wardrobe 3D Alyona, White, Imperial (Russia)', 'An elegant wardrobe for Alain\'s clothes will be a good addition to the bedroom interior. Its stylish design immediately attracts attention, gives the room a special charm', 0x696d672f6974656d5f696d67732f6974656d5f382e6a7067, 134.74, 'bedroom', '1202x466x1905', 'Russia'),
(9, 'Wardrobe 4D Alyona, Milk Oak, Imperial (Russia)', 'An elegant wardrobe for Alain\'s clothes will be a good addition to the bedroom interior. Its stylish design immediately attracts attention, gives the room a special charm.', 0x696d672f6974656d5f696d67732f6974656d5f392e6a7067, 192.49, 'bedroom', '1602x466x1905', 'Russia'),
(10, 'Loft 1800 Kitchen Furniture Set, Kraft white/Grey, Fanta Furniture(Russia)', 'The Loft kitchen set is a series of furniture suitable for any room. The kitchen has all the necessary qualities to create a functional and comfortable space. Strong and reliable construction, wear-resistant and durable surfaces.', 0x696d672f6974656d5f696d67732f6974656d5f31302e6a7067, 342.18, 'kitchen', '2600x5476x2888', 'Russia'),
(11, 'Kitchen furniture set Rosalia 1700, Wenge Oak Milky Oak, SV Furniture(Russia)', 'The Rosalia kitchen set is a ready-made solution for a kitchen with a width of 1.7 m, which is a set of two work tables and two hinged cabinets. ', 0x696d672f6974656d5f696d67732f6974656d5f31312e6a7067, 192.48, 'kitchen', '3400x2280x2956', 'Russia'),
(12, 'Kitchen furniture set Rosalia 1700, Ash Shimo light/Shimo dark, SV Furniture(Russia)', 'The Rosalia kitchen set is a ready-made solution for a kitchen with a width of 1.7 m, which is a set of two work tables and two hinged cabinets. ', 0x696d672f6974656d5f696d67732f6974656d5f31322e6a7067, 192.48, 'kitchen', '3400x738x2736', 'Russia'),
(13, 'Kitchen furniture Set 2000, Grey/Madura Oak, Anrex (Belarus)', 'Attention: The countertop, dryer and sink are not included in this product, and are purchased separately!', 0x696d672f6974656d5f696d67732f6974656d5f31332e6a7067, 250.22, 'kitchen', '3400x738x2736', 'Belarus');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Gender` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `Gender`) VALUES
('asdfasdf', 'erasberdimurat2004@gmail.com', 'fc7432d4b75fd1e6872ef9c2ebed7a42', 'male'),
('cooluser', 'email@outlook.co', 'mypassword', 'male'),
('rootuser', 'root@root.ru', '54b37af0b235a7187f665f16e79b86b0', 'genderOther');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`username`,`item_ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Item_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
