-- MySQL dump 10.13  Distrib 8.0.16, for Linux (x86_64)
--
-- Host: localhost    Database: local
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `brand` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand`
--

LOCK TABLES `brand` WRITE;
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `add_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'lasa','রাজার সেটা ঠিক আছে।  কিন্তু জীবনটা তাদের গরীব প্রজার আর যে রাজপ্রাসাদে বসবাস করছেন সেটা এখন আস্ত ধ্বংসস্তুপ।  বলছিলাম, বারো ভূইয়াদের প্রধান ঈসা খাঁর ১৫তম বংশধর দেওয়ান জামাল দাদ খাঁর পরিবারের কথা।  কোনোমতে খেয়েপরে',1,'2020-06-09 19:56:18','2020-06-09 19:56:18');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `add_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Bata','fa fa-facebook','রাজার সেটা ঠিক আছে।  কিন্তু জীবনটা তাদের গরীব প্রজার আর যে রাজপ্রাসাদে বসবাস করছেন সেটা এখন আস্ত ধ্বংসস্তুপ।  বলছিলাম, বারো ভূইয়াদের প্রধান ঈসা খাঁর ১৫তম বংশধর দেওয়ান জামাল দাদ খাঁর পরিবারের কথা।  কোনোমতে খেয়েপরে',1,'2020-06-09 19:56:47','2020-06-09 19:56:47');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_logins`
--

DROP TABLE IF EXISTS `customer_logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `customer_logins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first-name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last-name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone-number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email-address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_logins`
--

LOCK TABLES `customer_logins` WRITE;
/*!40000 ALTER TABLE `customer_logins` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer_logins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (15,'2020_05_11_042805_create_category_table',1);
INSERT INTO `migrations` VALUES (25,'2020_05_11_045032_create_brands_table',2);
INSERT INTO `migrations` VALUES (35,'2020_05_12_114116_create_brand_table',3);
INSERT INTO `migrations` VALUES (46,'2014_10_12_000000_create_users_table',4);
INSERT INTO `migrations` VALUES (47,'2014_10_12_100000_create_password_resets_table',4);
INSERT INTO `migrations` VALUES (48,'2019_08_19_000000_create_failed_jobs_table',4);
INSERT INTO `migrations` VALUES (49,'2020_05_11_085836_create_categories_table',4);
INSERT INTO `migrations` VALUES (50,'2020_05_12_122000_create_brands_table',4);
INSERT INTO `migrations` VALUES (51,'2020_05_17_095648_create_products_table',4);
INSERT INTO `migrations` VALUES (52,'2020_06_03_194235_create_tests_table',4);
INSERT INTO `migrations` VALUES (53,'2020_06_09_145659_create_customer_logins_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Mobile',1,1,655.00,'রাজার সেটা ঠিক আছে।  কিন্তু জীবনটা তাদের গরীব প্রজার আর যে রাজপ্রাসাদে বসবাস করছেন সেটা এখন আস্ত ধ্বংসস্তুপ।  বলছিলাম, বারো ভূইয়াদের প্রধান ঈসা খাঁর ১৫তম বংশধর দেওয়ান জামাল দাদ খাঁর পরিবারের কথা।  কোনোমতে খেয়েপরে','রাজার সেটা ঠিক আছে।  কিন্তু জীবনটা তাদের গরীব প্রজার আর যে রাজপ্রাসাদে বসবাস করছেন সেটা এখন আস্ত ধ্বংসস্তুপ।  বলছিলাম, বারো ভূইয়াদের প্রধান ঈসা খাঁর ১৫তম বংশধর দেওয়ান জামাল দাদ খাঁর পরিবারের কথা।  কোনোমতে খেয়েপরে',1,'product-imags/2.jpg','2020-06-09 19:57:19','2020-06-09 19:57:19');
INSERT INTO `products` VALUES (2,'jama',1,1,56.00,'রাজার সেটা ঠিক আছে।  কিন্তু জীবনটা তাদের গরীব প্রজার আর যে রাজপ্রাসাদে বসবাস করছেন সেটা এখন আস্ত ধ্বংসস্তুপ।  বলছিলাম, বারো ভূইয়াদের প্রধান ঈসা খাঁর ১৫তম বংশধর দেওয়ান জামাল দাদ খাঁর পরিবারের কথা।  কোনোমতে খেয়েপরে','রাজার সেটা ঠিক আছে।  কিন্তু জীবনটা তাদের গরীব প্রজার আর যে রাজপ্রাসাদে বসবাস করছেন সেটা এখন আস্ত ধ্বংসস্তুপ।  বলছিলাম, বারো ভূইয়াদের প্রধান ঈসা খাঁর ১৫তম বংশধর দেওয়ান জামাল দাদ খাঁর পরিবারের কথা।  কোনোমতে খেয়েপরে',1,'product-imags/3.jpg','2020-06-09 19:57:52','2020-06-09 19:57:52');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tests`
--

DROP TABLE IF EXISTS `tests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tests`
--

LOCK TABLES `tests` WRITE;
/*!40000 ALTER TABLE `tests` DISABLE KEYS */;
/*!40000 ALTER TABLE `tests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Sujan Miya','liton123sarkar@gmail.com',NULL,'$2y$10$l4zW9Ecrxmw8ozgkmz5z7edAInNjtDDuAWtRXPN6u/PJCTuuE5o9y',NULL,'2020-06-09 20:03:14','2020-06-09 20:03:14');
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

-- Dump completed on 2020-06-10 11:30:54
