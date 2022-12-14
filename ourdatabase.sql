-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: frontendfinal
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `basket`
--

DROP TABLE IF EXISTS `basket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `basket` (
  `username` varchar(255) NOT NULL,
  `item_ID` int NOT NULL,
  PRIMARY KEY (`username`,`item_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `basket`
--

LOCK TABLES `basket` WRITE;
/*!40000 ALTER TABLE `basket` DISABLE KEYS */;
INSERT INTO `basket` VALUES ('rootuser',13);
/*!40000 ALTER TABLE `basket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `items` (
  `Item_ID` int NOT NULL,
  `Item_Name` varchar(255) NOT NULL,
  `Item_Desc` varchar(255) NOT NULL,
  `Item_Image` blob,
  `Item_Price` double NOT NULL,
  `Item_Category` varchar(45) NOT NULL,
  `Item_Size` varchar(45) NOT NULL,
  `Country` varchar(45) NOT NULL,
  PRIMARY KEY (`Item_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'Wardrobe 3D Vega, Kraft white, Horizon (Russia)','An incredibly stylish and spacious wardrobe will become an indispensable accent in your bedroom. It is distinguished by its functionality and concise design. It is much easier to maintain order with such furniture.',_binary 'img/item_imgs/item_1.jpg',286.28,'bedroom','1200x500x2200','Russia'),(2,'Shoe cabinet 3D PORTO, Gianni Svetly, BRV Brest (Belarus)','Shoe cabinet right from the Belarus. It\'s very incredible',_binary 'img/item_imgs/item_2.jpg',110.24,'bedroom','750x185x1260','Belarus'),(3,'Chest of drawers 4YA Snowley, White, MaiStar (Belarus)','A white chest of drawers with 4 drawers from the Snowley collection from the MyStar furniture factory Laconic design that will harmoniously fit into any interior, whether it is a bedroom or any other room in the house.',_binary 'img/item_imgs/item_3.jpg',121.7,'bedroom','802x480x1000','Belarus'),(4,'Snowley desk, White , MaiStar (Belarus)','A white snowlery desk from one of the companies MaiStar',_binary 'img/item_imgs/item_4.jpg',34.01,'bedroom','500x900x750','Belarus'),(5,'Linen closet 2D Snowley, White, MaiStar (Belarus)','A spacious and ergonomic wardrobe will become a colorful addition to your hallway, bedroom or nursery. It will fit seamlessly into any interior, adding a little comfort and functional saturation',_binary 'img/item_imgs/item_5.jpg',175.17,'bedroom','902x580x1800','Belarus'),(6,'Single Meta bed with mattress holder, Grey, Square (Russia)','Good quality furniture. DMHome - prices for life',_binary 'img/item_imgs/item_6.jpg',85.55,'bedroom','910x2010x700','Russia'),(7,'Wardrobe 3D Alyona, Milk Oak, Imperial (Russia)','An elegant wardrobe for Alain\'s clothes will be a good addition to the bedroom interior. Its stylish design immediately attracts attention, gives the room a special charm',_binary 'img/item_imgs/item_7.jpg',134.74,'bedroom','1202x466x1905','Russia'),(8,'Wardrobe 3D Alyona, White, Imperial (Russia)','An elegant wardrobe for Alain\'s clothes will be a good addition to the bedroom interior. Its stylish design immediately attracts attention, gives the room a special charm',_binary 'img/item_imgs/item_8.jpg',134.74,'bedroom','1202x466x1905','Russia'),(9,'Wardrobe 4D Alyona, Milk Oak, Imperial (Russia)','An elegant wardrobe for Alain\'s clothes will be a good addition to the bedroom interior. Its stylish design immediately attracts attention, gives the room a special charm.',_binary 'img/item_imgs/item_9.jpg',192.49,'bedroom','1602x466x1905','Russia'),(10,'Loft 1800 Kitchen Furniture Set, Kraft white/Grey, Fanta Furniture(Russia)','The Loft kitchen set is a series of furniture suitable for any room. The kitchen has all the necessary qualities to create a functional and comfortable space. Strong and reliable construction, wear-resistant and durable surfaces.',_binary 'img/item_imgs/item_10.jpg',342.18,'kitchen','2600x5476x2888','Russia'),(11,'Kitchen furniture set Rosalia 1700, Wenge Oak Milky Oak, SV Furniture(Russia)','The Rosalia kitchen set is a ready-made solution for a kitchen with a width of 1.7 m, which is a set of two work tables and two hinged cabinets. ',_binary 'img/item_imgs/item_11.jpg',192.48,'kitchen','3400x2280x2956','Russia'),(12,'Kitchen furniture set Rosalia 1700, Ash Shimo light/Shimo dark, SV Furniture(Russia)','The Rosalia kitchen set is a ready-made solution for a kitchen with a width of 1.7 m, which is a set of two work tables and two hinged cabinets. ',_binary 'img/item_imgs/item_12.jpg',192.48,'kitchen','3400x738x2736','Russia'),(13,'Kitchen furniture Set 2000, Grey/Madura Oak, Anrex (Belarus)','Attention: The countertop, dryer and sink are not included in this product, and are purchased separately!',_binary 'img/item_imgs/item_13.jpg',250.22,'kitchen','3400x738x2736','Belarus');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Gender` varchar(45) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('asdfasdf','erasberdimurat2004@gmail.com','fc7432d4b75fd1e6872ef9c2ebed7a42','male'),('cooluser','email@outlook.co','mypassword','male'),('rootuser','root@root.ru','54b37af0b235a7187f665f16e79b86b0','genderOther');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-20 12:42:24
