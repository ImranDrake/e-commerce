-- MySQL dump 10.13  Distrib 8.0.33, for macos12.6 (x86_64)
--
-- Host: localhost    Database: fasiondb
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `cart_models`
--

DROP TABLE IF EXISTS `cart_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cart_models` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_models_id` bigint unsigned NOT NULL,
  `category_models_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_models_product_models_id_foreign` (`product_models_id`),
  KEY `cart_models_category_models_id_foreign` (`category_models_id`),
  CONSTRAINT `cart_models_category_models_id_foreign` FOREIGN KEY (`category_models_id`) REFERENCES `category_models` (`id`) ON DELETE CASCADE,
  CONSTRAINT `cart_models_product_models_id_foreign` FOREIGN KEY (`product_models_id`) REFERENCES `product_models` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart_models`
--

LOCK TABLES `cart_models` WRITE;
/*!40000 ALTER TABLE `cart_models` DISABLE KEYS */;
INSERT INTO `cart_models` VALUES (1,'2023-07-18 04:43:20','2023-07-18 04:43:20',1,1),(2,'2023-07-18 04:43:28','2023-07-18 04:43:28',1,1),(3,'2023-07-18 05:05:56','2023-07-18 05:05:56',3,1),(4,'2023-07-18 05:19:55','2023-07-18 05:19:55',2,1),(5,'2023-07-18 05:23:32','2023-07-18 05:23:32',5,1),(6,'2023-07-18 05:23:36','2023-07-18 05:23:36',4,1);
/*!40000 ALTER TABLE `cart_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_models`
--

DROP TABLE IF EXISTS `category_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_models` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_models`
--

LOCK TABLES `category_models` WRITE;
/*!40000 ALTER TABLE `category_models` DISABLE KEYS */;
INSERT INTO `category_models` VALUES (1,'MENs',NULL,NULL),(2,'KIDs',NULL,NULL),(3,'SLEEPWEAR',NULL,NULL),(4,'DRESSES',NULL,NULL),(5,'HOME',NULL,NULL),(6,'ACCESSORIES',NULL,NULL),(7,'SLEEPWEAR',NULL,NULL),(8,'WOMENs',NULL,NULL);
/*!40000 ALTER TABLE `category_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `color_models`
--

DROP TABLE IF EXISTS `color_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `color_models` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `color_models`
--

LOCK TABLES `color_models` WRITE;
/*!40000 ALTER TABLE `color_models` DISABLE KEYS */;
INSERT INTO `color_models` VALUES (1,'#5F9EA0',NULL,NULL),(2,'#8B4513',NULL,NULL),(3,'#778899',NULL,NULL);
/*!40000 ALTER TABLE `color_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
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
-- Table structure for table `fasion_stores`
--

DROP TABLE IF EXISTS `fasion_stores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fasion_stores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pas_wd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fasion_stores`
--

LOCK TABLES `fasion_stores` WRITE;
/*!40000 ALTER TABLE `fasion_stores` DISABLE KEYS */;
/*!40000 ALTER TABLE `fasion_stores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_06_20_110417_create_fasion_stores_table',1),(6,'2023_06_21_102244_create_site_models_table',1),(7,'2023_06_21_102354_create_user_models_table',1),(8,'2023_06_21_102434_create_category_models_table',1),(9,'2023_06_21_102535_create_product_models_table',1),(10,'2023_06_21_102546_create_cart_models_table',1),(11,'2023_06_21_102557_create_color_models_table',1),(12,'2023_06_21_102606_create_size_models_table',1),(13,'2023_06_21_103212_create_price_models_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `price_models`
--

DROP TABLE IF EXISTS `price_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `price_models` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `price_models` int NOT NULL,
  `product_models_id` bigint unsigned NOT NULL,
  `color_models_id` bigint unsigned NOT NULL,
  `size_models_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `price_models_product_models_id_foreign` (`product_models_id`),
  KEY `price_models_color_models_id_foreign` (`color_models_id`),
  KEY `price_models_size_models_id_foreign` (`size_models_id`),
  CONSTRAINT `price_models_color_models_id_foreign` FOREIGN KEY (`color_models_id`) REFERENCES `color_models` (`id`) ON DELETE CASCADE,
  CONSTRAINT `price_models_product_models_id_foreign` FOREIGN KEY (`product_models_id`) REFERENCES `product_models` (`id`) ON DELETE CASCADE,
  CONSTRAINT `price_models_size_models_id_foreign` FOREIGN KEY (`size_models_id`) REFERENCES `size_models` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `price_models`
--

LOCK TABLES `price_models` WRITE;
/*!40000 ALTER TABLE `price_models` DISABLE KEYS */;
INSERT INTO `price_models` VALUES (1,1200,1,1,1,NULL,NULL),(2,1400,1,1,2,NULL,NULL),(3,1600,1,1,3,NULL,NULL),(4,1800,1,1,4,NULL,NULL),(5,1250,1,2,1,NULL,NULL),(6,1450,1,2,2,NULL,NULL),(7,1650,1,2,3,NULL,NULL),(8,1850,1,2,4,NULL,NULL),(9,1150,1,3,1,NULL,NULL),(10,1350,1,3,2,NULL,NULL),(11,1550,1,3,3,NULL,NULL),(12,1750,1,3,4,NULL,NULL),(29,1200,2,1,1,NULL,NULL),(30,1400,2,1,2,NULL,NULL),(31,1600,2,1,3,NULL,NULL),(32,1800,2,1,4,NULL,NULL),(33,1250,2,2,1,NULL,NULL),(34,1450,2,2,2,NULL,NULL),(35,1650,2,2,3,NULL,NULL),(36,1850,2,2,4,NULL,NULL),(37,1150,2,3,1,NULL,NULL),(38,1250,2,3,2,NULL,NULL),(39,1450,2,3,3,NULL,NULL),(40,1650,2,3,4,NULL,NULL),(45,1200,3,1,1,NULL,NULL),(46,1400,3,1,2,NULL,NULL),(47,1600,3,1,3,NULL,NULL),(48,1800,3,1,4,NULL,NULL),(49,1250,3,2,1,NULL,NULL),(50,1450,3,2,2,NULL,NULL),(51,1650,3,2,3,NULL,NULL),(52,1850,3,2,4,NULL,NULL),(53,1150,3,3,1,NULL,NULL),(54,1350,3,3,2,NULL,NULL),(55,1550,3,3,3,NULL,NULL),(56,1750,3,3,4,NULL,NULL),(57,1200,4,1,1,NULL,NULL),(58,1400,4,1,2,NULL,NULL),(59,1600,4,1,3,NULL,NULL),(60,1800,4,1,4,NULL,NULL),(61,1250,4,2,1,NULL,NULL),(62,1450,4,2,2,NULL,NULL),(63,1650,4,2,3,NULL,NULL),(64,1850,4,2,4,NULL,NULL),(65,1150,4,3,1,NULL,NULL),(66,1350,4,3,2,NULL,NULL),(67,1550,4,3,3,NULL,NULL),(68,1750,4,3,4,NULL,NULL),(69,1200,5,1,1,NULL,NULL),(70,1400,5,1,2,NULL,NULL),(71,1600,5,1,3,NULL,NULL),(72,1800,5,1,4,NULL,NULL),(73,1250,5,2,1,NULL,NULL),(74,1450,5,2,2,NULL,NULL),(75,1650,5,2,3,NULL,NULL),(76,1850,5,2,4,NULL,NULL),(77,1150,5,3,1,NULL,NULL),(78,1350,5,3,2,NULL,NULL),(79,1550,5,3,3,NULL,NULL),(80,1750,5,3,4,NULL,NULL);
/*!40000 ALTER TABLE `price_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_models`
--

DROP TABLE IF EXISTS `product_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_models` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fav` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_models`
--

LOCK TABLES `product_models` WRITE;
/*!40000 ALTER TABLE `product_models` DISABLE KEYS */;
INSERT INTO `product_models` VALUES (1,'product1','product.png',NULL,NULL,NULL),(2,'product2','kids.svg',NULL,NULL,NULL),(3,'product3','sportswear.svg',NULL,NULL,NULL),(4,'product4','home.svg',NULL,NULL,NULL),(5,'product5','womens.svg',NULL,NULL,NULL);
/*!40000 ALTER TABLE `product_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_models`
--

DROP TABLE IF EXISTS `site_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `site_models` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `filepath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sitename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_models`
--

LOCK TABLES `site_models` WRITE;
/*!40000 ALTER TABLE `site_models` DISABLE KEYS */;
/*!40000 ALTER TABLE `site_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `size_models`
--

DROP TABLE IF EXISTS `size_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `size_models` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `size_models`
--

LOCK TABLES `size_models` WRITE;
/*!40000 ALTER TABLE `size_models` DISABLE KEYS */;
INSERT INTO `size_models` VALUES (1,'39',NULL,NULL),(2,'40',NULL,NULL),(3,'41',NULL,NULL),(4,'42',NULL,NULL);
/*!40000 ALTER TABLE `size_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_models`
--

DROP TABLE IF EXISTS `user_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_models` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_models_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_models`
--

LOCK TABLES `user_models` WRITE;
/*!40000 ALTER TABLE `user_models` DISABLE KEYS */;
INSERT INTO `user_models` VALUES (1,'Imran','imran@gmail.com',NULL,'$2y$10$smIZ6N5YPDoAAFIHZ9B76.jZSsmTrRyWgCLh.EiXD4NyE4LukLuwu',NULL,'2023-07-15 04:57:13','2023-07-15 04:57:13');
/*!40000 ALTER TABLE `user_models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
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
INSERT INTO `users` VALUES (1,'imran','imran@gmail.com',NULL,'$2y$10$1FUc.8/4DMGWCxMAVHGxneXFkJT6/Oh2tH4atn7soA98Fztonnk5O',NULL,'2023-07-15 05:03:09','2023-07-15 05:03:09');
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

-- Dump completed on 2023-07-18 16:26:15
