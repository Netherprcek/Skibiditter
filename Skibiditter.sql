-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: truckit
-- ------------------------------------------------------
-- Server version	8.0.38

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id_comment` int NOT NULL AUTO_INCREMENT,
  `id_post` int DEFAULT NULL,
  `comment_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_parentComment` int DEFAULT NULL,
  `likes` int unsigned DEFAULT '0',
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,26,'Dogshit comment','Elon_Cuck','2024-07-30 13:37:14',NULL,0),(2,26,'Sorry, I didnt want to be mean','Elon_Cuck','2024-07-30 14:37:14',NULL,0),(3,26,'asd','Netherprcek','2024-08-05 11:35:46',NULL,0),(4,26,'hmm','Netherprcek','2024-08-05 11:38:59',NULL,0),(5,27,'Hmmm','Netherprcek','2024-08-05 12:27:16',NULL,0),(6,27,'Elon approves','Elon_Cuck','2024-08-06 07:18:38',NULL,0),(7,32,'Poopy kaka','Netherprcek','2024-08-06 07:46:52',NULL,0),(8,35,'Komentar roku','Netherprcek','2024-08-06 10:46:48',NULL,0),(10,11,'Testerino Testerino Testerino Testerino Testerino Testerino Testerino Testerino Testerino Testerino Testerino Testerino Testerino ','Netherprcek','2024-08-07 10:32:53',NULL,0),(11,11,'Testerino Testerino Testerino Testerino Testerino Testerino Testerino Testerino ','Netherprcek','2024-08-07 10:33:00',NULL,0),(12,37,'Kokot','Netherprcek','2024-08-10 20:28:31',NULL,0),(14,36,'asd','Netherprcek','2024-08-17 09:32:06',NULL,0),(15,37,'Skibidi','Skibidi','2024-08-17 11:55:41',NULL,0),(16,65,'Nice comment! <3','Netherprcek','2024-08-21 18:00:20',NULL,0),(17,85,'I like you mr. Elon','Elon_Cuck','2024-08-22 15:33:18',NULL,0),(18,85,'Mmm yes yes yees','Elon_Cuck','2024-08-22 15:33:30',NULL,0),(19,65,'ASdaSD','Elon_Cuck','2024-08-22 18:12:11',NULL,0),(33,79,'Skibidi','Elon_Cuck','2024-08-22 22:52:42',NULL,0),(35,79,'ASDASD','Elon_Cuck','2024-08-23 00:21:12',NULL,1),(36,79,'Hmm can I like this?','Elon_Cuck','2024-08-23 00:24:08',35,0),(37,89,':(','Netherprcek','2024-08-23 00:50:12',NULL,0),(38,89,'aaaasd','Netherprcek','2024-08-23 11:48:36',NULL,1),(39,79,'gay','Netherprcek','2024-08-23 11:58:45',35,1),(40,79,'ads','Netherprcek','2024-08-23 12:12:48',36,0),(41,72,'Omg that is Walter Whitest!','Netherprcek','2024-08-23 12:14:51',NULL,0),(42,72,'Yes you are correct!','Netherprcek','2024-08-23 12:15:00',41,1),(43,36,'AAAAAA','Netherprcek','2024-08-23 12:15:21',14,0),(44,89,'asdasdsads','Netherprcek','2024-08-23 13:12:48',38,1),(45,90,'So seggzy','Netherprcek','2024-08-23 13:56:10',NULL,1),(46,90,'<3','Netherprcek','2024-08-23 13:56:28',45,1);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `follows`
--

DROP TABLE IF EXISTS `follows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `follows` (
  `id` int NOT NULL AUTO_INCREMENT,
  `follower_id` bigint unsigned NOT NULL,
  `followed_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_follow` (`follower_id`,`followed_id`),
  KEY `fk_followed` (`followed_id`),
  CONSTRAINT `fk_followed` FOREIGN KEY (`followed_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `fk_follower` FOREIGN KEY (`follower_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `follows`
--

LOCK TABLES `follows` WRITE;
/*!40000 ALTER TABLE `follows` DISABLE KEYS */;
INSERT INTO `follows` VALUES (21,7,5,'2024-08-09 13:50:49'),(38,4,7,'2024-08-16 14:27:18'),(52,6,3,'2024-08-17 11:07:43'),(55,6,2,'2024-08-17 11:07:44'),(58,6,1,'2024-08-17 16:29:59'),(62,6,7,'2024-08-19 12:25:47'),(63,6,4,'2024-08-19 12:31:11'),(106,5,7,'2024-08-21 15:52:28'),(108,4,2,'2024-08-21 17:40:45'),(115,4,6,'2024-08-21 18:21:46'),(116,4,3,'2024-08-21 18:22:07'),(122,8,5,'2024-08-21 18:56:58'),(123,5,8,'2024-08-21 19:35:42'),(124,5,1,'2024-08-22 15:29:50'),(125,5,4,'2024-08-22 15:46:54'),(126,5,6,'2024-08-23 00:40:23'),(127,4,5,'2024-08-23 00:49:08');
/*!40000 ALTER TABLE `follows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `likes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `id_post` int DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `likescol` varchar(45) DEFAULT NULL,
  `id_comment` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`id_post`),
  KEY `id_post` (`id_post`),
  CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=317 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
INSERT INTO `likes` VALUES (189,7,33,'2024-08-09 17:22:22',NULL,0),(192,7,11,'2024-08-09 17:22:25',NULL,0),(193,7,35,'2024-08-09 18:48:41',NULL,0),(195,7,37,'2024-08-10 22:26:58',NULL,0),(196,7,36,'2024-08-10 22:27:00',NULL,0),(207,4,37,'2024-08-17 11:27:03',NULL,0),(210,4,36,'2024-08-17 11:31:41',NULL,0),(211,6,37,'2024-08-17 13:52:56',NULL,0),(213,6,33,'2024-08-17 19:31:50',NULL,0),(214,6,58,'2024-08-19 12:31:35',NULL,0),(219,5,57,'2024-08-21 17:52:45',NULL,0),(221,5,37,'2024-08-21 17:52:48',NULL,0),(228,4,65,'2024-08-21 20:32:27',NULL,0),(229,4,64,'2024-08-21 20:32:28',NULL,0),(238,5,NULL,'2024-08-23 01:54:34',NULL,0),(239,5,NULL,'2024-08-23 01:54:37',NULL,0),(240,5,NULL,'2024-08-23 01:56:40',NULL,0),(241,5,NULL,'2024-08-23 01:59:20',NULL,0),(242,5,NULL,'2024-08-23 01:59:22',NULL,0),(243,5,NULL,'2024-08-23 01:59:36',NULL,0),(244,5,NULL,'2024-08-23 01:59:37',NULL,0),(245,5,NULL,'2024-08-23 01:59:38',NULL,0),(246,5,NULL,'2024-08-23 02:00:20',NULL,0),(247,5,NULL,'2024-08-23 02:00:21',NULL,0),(248,5,NULL,'2024-08-23 02:00:47',NULL,0),(251,5,NULL,'2024-08-23 02:03:01',NULL,0),(260,5,NULL,'2024-08-23 02:08:42',NULL,NULL),(261,5,NULL,'2024-08-23 02:08:45',NULL,NULL),(262,5,NULL,'2024-08-23 02:13:02',NULL,NULL),(263,5,NULL,'2024-08-23 02:13:03',NULL,NULL),(269,5,NULL,'2024-08-23 02:15:44',NULL,NULL),(270,5,NULL,'2024-08-23 02:15:46',NULL,NULL),(271,5,NULL,'2024-08-23 02:15:47',NULL,NULL),(272,5,NULL,'2024-08-23 02:17:45',NULL,NULL),(275,5,NULL,'2024-08-23 02:19:29',NULL,NULL),(276,5,NULL,'2024-08-23 02:19:32',NULL,NULL),(277,5,NULL,'2024-08-23 02:19:36',NULL,NULL),(280,5,NULL,'2024-08-23 02:24:09',NULL,NULL),(281,5,NULL,'2024-08-23 02:24:11',NULL,NULL),(282,5,NULL,'2024-08-23 02:26:43',NULL,NULL),(283,5,NULL,'2024-08-23 02:26:44',NULL,NULL),(290,5,79,'2024-08-23 02:29:38',NULL,NULL),(291,5,NULL,'2024-08-23 02:31:42',NULL,35),(292,5,NULL,'2024-08-23 02:31:47',NULL,NULL),(307,4,NULL,'2024-08-23 14:10:21',NULL,39),(308,4,NULL,'2024-08-23 14:15:02',NULL,42),(311,4,NULL,'2024-08-23 15:12:45',NULL,38),(312,4,NULL,'2024-08-23 15:12:49',NULL,44),(314,4,90,'2024-08-23 15:51:45',NULL,NULL),(315,4,NULL,'2024-08-23 15:56:19',NULL,45),(316,4,NULL,'2024-08-23 15:56:30',NULL,46);
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id_post` int NOT NULL AUTO_INCREMENT,
  `post_text` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes` int DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id_post`),
  UNIQUE KEY `idposts_UNIQUE` (`id_post`),
  KEY `user_id_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (11,'This is me!','Elon_Cuck',1,'2024-07-31 15:31:58','https://pbs.twimg.com/profile_images/1815749056821346304/jS8I28PL_400x400.jpg',5),(33,'asd','Netherprcek',3,'2024-08-06 10:08:27','https://static.vecteezy.com/system/resources/thumbnails/009/273/280/small_2x/concept-of-loneliness-and-disappointment-in-love-sad-man-sitting-element-of-the-picture-is-decorated-by-nasa-free-photo.jpg',4),(35,'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa','Netherprcek',4,'2024-08-06 10:22:55','https://cdn-images-1.medium.com/fit/t/1600/480/1*AmI9wRbXrfIWGESx6eEiTw.gif',4),(36,'I love skibidi','Netherprcek',2,'2024-08-07 19:31:39','',4),(37,'Amazon ftw','Jeff_Bezos',4,'2024-08-09 12:36:04','',7),(57,'letsgo','Skibidi',1,'2024-08-17 18:32:51','https://conquestcapped.com/image/cache/catalog/wow/transmogs/pve-sets/paladin-tier-2-transmog-set-630x400.png',6),(58,'asd','Skibidi',1,'2024-08-17 18:39:26','',6),(62,'Lets test recent activity 1','Skibidi',0,'2024-08-19 14:37:41','',6),(63,'Lets test recent activity 2','Skibidi',0,'2024-08-19 14:37:45','',6),(64,'Lets test recent activity 3','Skibidi',1,'2024-08-19 14:37:47','',6),(65,'Lets test recent activity 4','Skibidi',1,'2024-08-19 14:37:50','',6),(70,'oioioii','Elon_Cuck',0,'2024-08-20 18:36:50','/storage/uploads/posts/Hills of Hulinwood.jpg',5),(72,'This is him!','Elon_Cuck',0,'2024-08-21 12:59:20','/storage/uploads/posts/myfile (1).png',5),(79,'https://www.google.com/','Honzig_Heil',1,'2024-08-21 20:37:33','/storage/uploads/posts/googlelogo_color_160x56dp.png',8),(89,'You have been gnomed!','Netherprcek',0,'2024-08-23 02:50:02','/storage/uploads/posts/gnomed.jpg',4),(90,'80s af','Netherprcek',1,'2024-08-23 15:51:38','/storage/uploads/posts/80s.jfif',4);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('ah0gI1Digt1qM5HSnxh05XLgr1Xga4iGKK6d6a3N',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRGo2OFVEYjZDVzVkNmRzV1BsQnNhQUFVNFQ2eVhFV1lVNzl5c1BDYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1722001456),('Nq9PmG5qgQYy3UCjkVYE92fshCIi5hucXiLFzvmc',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoicEFvTFVsY3FXYXhySWFSeWl3QlJ4d3I4THR2WUtWUHk2NXo3WTYyViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1721992766);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `user_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT 'https://as2.ftcdn.net/v2/jpg/04/10/43/77/1000_F_410437733_hdq4Q3QOH9uwh0mcqAhRFzOKfrCR24Ta.jpg',
  `background` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8h2oOjIdv_4fLvne5PhLMWNJ99_N2UZPFZg&s',
  `bio` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `following` int unsigned DEFAULT '0',
  `followers` int unsigned DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Skibiditnik','$2y$10$YutJzwnyfEcgI20oomjHMuknTKqvakzHw.RIXduT4Blb/U4IPLZFm',NULL,'2024-07-28 13:37:14',NULL,'https://as2.ftcdn.net/v2/jpg/04/10/43/77/1000_F_410437733_hdq4Q3QOH9uwh0mcqAhRFzOKfrCR24Ta.jpg','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8h2oOjIdv_4fLvne5PhLMWNJ99_N2UZPFZg&s',NULL,0,2),(2,'Smradoch','$2y$10$9GBKJ1oy.6o7WzeSf0h0A.I/.z6Z4p/MuoVZNio70bSl3B1f2yK9q',NULL,'2024-07-28 16:12:25',NULL,'https://as2.ftcdn.net/v2/jpg/04/10/43/77/1000_F_410437733_hdq4Q3QOH9uwh0mcqAhRFzOKfrCR24Ta.jpg','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8h2oOjIdv_4fLvne5PhLMWNJ99_N2UZPFZg&s',NULL,0,2),(3,'Sas','$2y$10$jQL2emwlGxuqmaGgg2T8u.qNpYCHwGVkzaYKW8o./JwVB7GIKEv8u',NULL,'2024-07-28 16:12:51',NULL,'https://as2.ftcdn.net/v2/jpg/04/10/43/77/1000_F_410437733_hdq4Q3QOH9uwh0mcqAhRFzOKfrCR24Ta.jpg','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8h2oOjIdv_4fLvne5PhLMWNJ99_N2UZPFZg&s',NULL,0,2),(4,'Netherprcek','$2y$10$ZUEz/myGiARNX2JU3gYBZOEMxdayidvmsvukUrbJFnplasKxT874m',NULL,'2024-07-30 16:00:21','2024-08-20 14:12:20','/storage/uploads/avatars/80s.jfif','/storage/uploads/backgrounds/gnomik.jfif','Wubba Lubba Dub Dubaaa',5,2),(5,'Elon_Cuck','$2y$10$j62roOtb4qw61r7rDjlQj.yALdO7LSKbDdytxZ3TdTYHPtrqO80fa',NULL,'2024-07-31 09:59:44','2024-08-20 16:17:44','/storage/uploads/avatars/stew.jpg','/storage/uploads/backgrounds/Hills of Hulinwood.jpg','Cybercuckardf',5,3),(6,'Skibidi','$2y$10$KDmt0i2QUFS7P1XtQO0wYOcCXlRUvYnlJa7Z05TdBQNEU72GWzMOK',NULL,'2024-08-06 21:47:48','2024-08-19 10:34:24','https://pbs.twimg.com/profile_images/566069934/Spell_Holy_HolyBolt_400x400.png','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTd7mVyvOEcglDPTZ-KRaa2hWy2JPLOXf54Zw&s',NULL,5,2),(7,'Jeff_Bezos','$2y$10$KSBAH6TxKBs9Q3vg.jFnfuMXXOBEGzAU60sbsaWs/4nJgGXxbd996',NULL,'2024-08-09 10:34:32',NULL,'https://pbs.twimg.com/profile_images/1591558315254890500/ETIHb4Nl_400x400.jpg','https://pbs.twimg.com/profile_banners/15506669/1448361938/1500x500',NULL,1,3),(8,'Honzig_Heil','$2y$10$OinWaTs/qTbFMBmtjbGsAO8FVgrYeefteDyJ2pw5zTkaMXItLl.F.',NULL,'2024-08-21 18:33:15',NULL,'/storage/uploads/avatars/HonzigHeil.png','/storage/uploads/backgrounds/HonzigHeilBanner.png','Big bio, letsgo',1,1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'truckit'
--

--
-- Dumping routines for database 'truckit'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-23 15:58:39
