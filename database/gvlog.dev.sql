-- MySQL dump 10.13  Distrib 8.0.32, for macos12.6 (arm64)
--
-- Host: localhost    Database: gvlog
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `admin_menu`
--

DROP TABLE IF EXISTS `admin_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_menu` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int NOT NULL DEFAULT '0',
  `order` int NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_menu`
--

LOCK TABLES `admin_menu` WRITE;
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
INSERT INTO `admin_menu` VALUES (1,0,7,'Dashboard','fa-bar-chart','/',NULL,NULL,'2023-03-06 08:02:22'),(2,0,8,'Admin','fa-tasks','',NULL,NULL,'2023-03-06 08:02:22'),(3,2,9,'Users','fa-users','auth/users',NULL,NULL,'2023-03-06 08:02:22'),(4,2,10,'Roles','fa-user','auth/roles',NULL,NULL,'2023-03-06 08:02:22'),(5,2,11,'Permission','fa-ban','auth/permissions',NULL,NULL,'2023-03-06 08:02:22'),(6,2,12,'Menu','fa-bars','auth/menu',NULL,NULL,'2023-03-06 08:02:22'),(7,2,13,'Operation log','fa-history','auth/logs',NULL,NULL,'2023-03-06 08:02:22'),(8,0,2,'Category','fa-archive','/categories',NULL,'2023-03-06 07:59:38','2023-03-06 08:00:45'),(9,0,1,'Post','fa-book','/posts',NULL,'2023-03-06 07:59:52','2023-03-06 08:00:39'),(10,0,3,'Tag','fa-tags','/tags',NULL,'2023-03-06 08:00:10','2023-03-06 08:00:45'),(11,0,4,'Static Content','fa-bars','/static-contents',NULL,'2023-03-06 08:01:02','2023-03-06 08:02:22'),(12,0,5,'Message','fa-commenting','/contact-messages',NULL,'2023-03-06 08:01:39','2023-03-06 08:02:22'),(13,0,6,'Menu','fa-bookmark','/menus',NULL,'2023-03-06 08:02:06','2023-03-06 08:02:22');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_operation_log`
--

DROP TABLE IF EXISTS `admin_operation_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_operation_log` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_operation_log_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_operation_log`
--

LOCK TABLES `admin_operation_log` WRITE;
/*!40000 ALTER TABLE `admin_operation_log` DISABLE KEYS */;
INSERT INTO `admin_operation_log` VALUES (1,1,'admin','GET','127.0.0.1','[]','2023-03-06 04:42:25','2023-03-06 04:42:25'),(2,1,'admin/auth/menu','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 04:42:32','2023-03-06 04:42:32'),(3,1,'admin/auth/menu','GET','127.0.0.1','[]','2023-03-06 07:59:16','2023-03-06 07:59:16'),(4,1,'admin/auth/menu','POST','127.0.0.1','{\"parent_id\":\"0\",\"title\":\"Category\",\"icon\":\"fa-archive\",\"uri\":\"\\/categories\",\"roles\":[\"1\",null],\"permission\":null,\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\"}','2023-03-06 07:59:38','2023-03-06 07:59:38'),(5,1,'admin/auth/menu','GET','127.0.0.1','[]','2023-03-06 07:59:38','2023-03-06 07:59:38'),(6,1,'admin/auth/menu','POST','127.0.0.1','{\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\",\"_order\":\"[{\\\"id\\\":8},{\\\"id\\\":1},{\\\"id\\\":2,\\\"children\\\":[{\\\"id\\\":3},{\\\"id\\\":4},{\\\"id\\\":5},{\\\"id\\\":6},{\\\"id\\\":7}]}]\"}','2023-03-06 07:59:43','2023-03-06 07:59:43'),(7,1,'admin/auth/menu','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 07:59:43','2023-03-06 07:59:43'),(8,1,'admin/auth/menu','POST','127.0.0.1','{\"parent_id\":\"0\",\"title\":\"Post\",\"icon\":\"fa-bars\",\"uri\":\"\\/posts\",\"roles\":[\"1\",null],\"permission\":null,\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\"}','2023-03-06 07:59:52','2023-03-06 07:59:52'),(9,1,'admin/auth/menu','GET','127.0.0.1','[]','2023-03-06 07:59:52','2023-03-06 07:59:52'),(10,1,'admin/auth/menu','POST','127.0.0.1','{\"parent_id\":\"0\",\"title\":\"Tag\",\"icon\":\"fa-tags\",\"uri\":\"\\/tags\",\"roles\":[\"1\",null],\"permission\":null,\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\"}','2023-03-06 08:00:10','2023-03-06 08:00:10'),(11,1,'admin/auth/menu','GET','127.0.0.1','[]','2023-03-06 08:00:10','2023-03-06 08:00:10'),(12,1,'admin/auth/menu','POST','127.0.0.1','{\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\",\"_order\":\"[{\\\"id\\\":9},{\\\"id\\\":10},{\\\"id\\\":8},{\\\"id\\\":1},{\\\"id\\\":2,\\\"children\\\":[{\\\"id\\\":3},{\\\"id\\\":4},{\\\"id\\\":5},{\\\"id\\\":6},{\\\"id\\\":7}]}]\"}','2023-03-06 08:00:14','2023-03-06 08:00:14'),(13,1,'admin/auth/menu','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:00:14','2023-03-06 08:00:14'),(14,1,'admin/auth/menu/9/edit','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:00:16','2023-03-06 08:00:16'),(15,1,'admin/auth/menu/9','PUT','127.0.0.1','{\"parent_id\":\"0\",\"title\":\"Post\",\"icon\":\"fa-book\",\"uri\":\"\\/posts\",\"roles\":[\"1\",null],\"permission\":null,\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/127.0.0.1:8002\\/admin\\/auth\\/menu\"}','2023-03-06 08:00:39','2023-03-06 08:00:39'),(16,1,'admin/auth/menu','GET','127.0.0.1','[]','2023-03-06 08:00:39','2023-03-06 08:00:39'),(17,1,'admin/auth/menu','POST','127.0.0.1','{\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\",\"_order\":\"[{\\\"id\\\":9},{\\\"id\\\":8},{\\\"id\\\":10},{\\\"id\\\":1},{\\\"id\\\":2,\\\"children\\\":[{\\\"id\\\":3},{\\\"id\\\":4},{\\\"id\\\":5},{\\\"id\\\":6},{\\\"id\\\":7}]}]\"}','2023-03-06 08:00:45','2023-03-06 08:00:45'),(18,1,'admin/auth/menu','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:00:45','2023-03-06 08:00:45'),(19,1,'admin/auth/menu','POST','127.0.0.1','{\"parent_id\":\"0\",\"title\":\"Static Content\",\"icon\":\"fa-bars\",\"uri\":\"\\/static-contents\",\"roles\":[\"1\",null],\"permission\":null,\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\"}','2023-03-06 08:01:02','2023-03-06 08:01:02'),(20,1,'admin/auth/menu','GET','127.0.0.1','[]','2023-03-06 08:01:03','2023-03-06 08:01:03'),(21,1,'admin/auth/menu','POST','127.0.0.1','{\"parent_id\":\"0\",\"title\":\"Message\",\"icon\":\"fa-commenting\",\"uri\":\"\\/contact-messages\",\"roles\":[\"1\",null],\"permission\":null,\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\"}','2023-03-06 08:01:39','2023-03-06 08:01:39'),(22,1,'admin/auth/menu','GET','127.0.0.1','[]','2023-03-06 08:01:39','2023-03-06 08:01:39'),(23,1,'admin/auth/menu','POST','127.0.0.1','{\"parent_id\":\"0\",\"title\":\"Menu\",\"icon\":\"fa-bookmark\",\"uri\":\"\\/menus\",\"roles\":[\"1\",null],\"permission\":null,\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\"}','2023-03-06 08:02:06','2023-03-06 08:02:06'),(24,1,'admin/auth/menu','GET','127.0.0.1','[]','2023-03-06 08:02:06','2023-03-06 08:02:06'),(25,1,'admin/auth/menu','POST','127.0.0.1','{\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\",\"_order\":\"[{\\\"id\\\":9},{\\\"id\\\":8},{\\\"id\\\":10},{\\\"id\\\":11},{\\\"id\\\":12},{\\\"id\\\":13},{\\\"id\\\":1},{\\\"id\\\":2,\\\"children\\\":[{\\\"id\\\":3},{\\\"id\\\":4},{\\\"id\\\":5},{\\\"id\\\":6},{\\\"id\\\":7}]}]\"}','2023-03-06 08:02:22','2023-03-06 08:02:22'),(26,1,'admin/auth/menu','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:02:22','2023-03-06 08:02:22'),(27,1,'admin/auth/menu','GET','127.0.0.1','[]','2023-03-06 08:02:24','2023-03-06 08:02:24'),(28,1,'admin','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:02:35','2023-03-06 08:02:35'),(29,1,'admin','GET','127.0.0.1','[]','2023-03-06 08:14:44','2023-03-06 08:14:44'),(30,1,'admin/categories','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:14:45','2023-03-06 08:14:45'),(31,1,'admin/posts','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:14:47','2023-03-06 08:14:47'),(32,1,'admin/static-contents','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:14:48','2023-03-06 08:14:48'),(33,1,'admin/contact-messages','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:14:49','2023-03-06 08:14:49'),(34,1,'admin/menus','GET','127.0.0.1','[]','2023-03-06 08:16:11','2023-03-06 08:16:11'),(35,1,'admin/categories','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:19:58','2023-03-06 08:19:58'),(36,1,'admin/categories/create','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:20:01','2023-03-06 08:20:01'),(37,1,'admin/categories','POST','127.0.0.1','{\"name\":\"Back end\",\"slug\":null,\"description\":\"https:\\/\\/roadmap.sh\\/backend\",\"status\":\"on\",\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\",\"_previous_\":\"http:\\/\\/127.0.0.1:8002\\/admin\\/categories\"}','2023-03-06 08:22:09','2023-03-06 08:22:09'),(38,1,'admin/categories/create','GET','127.0.0.1','[]','2023-03-06 08:22:09','2023-03-06 08:22:09'),(39,1,'admin/categories','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:22:37','2023-03-06 08:22:37'),(40,1,'admin/menus','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:22:47','2023-03-06 08:22:47'),(41,1,'admin/menus/create','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:23:00','2023-03-06 08:23:00'),(42,1,'admin/menus','POST','127.0.0.1','{\"display_name\":\"Back end\",\"url\":\"\\/category\\/back-end\",\"child\":null,\"order\":\"1\",\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\",\"_previous_\":\"http:\\/\\/127.0.0.1:8002\\/admin\\/menus\"}','2023-03-06 08:23:23','2023-03-06 08:23:23'),(43,1,'admin/menus','GET','127.0.0.1','[]','2023-03-06 08:23:23','2023-03-06 08:23:23'),(44,1,'admin/categories','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:23:25','2023-03-06 08:23:25'),(45,1,'admin/categories/create','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:23:28','2023-03-06 08:23:28'),(46,1,'admin/categories','POST','127.0.0.1','{\"name\":\"Front-end\",\"slug\":null,\"description\":\"https:\\/\\/roadmap.sh\\/frontend\",\"status\":\"on\",\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\",\"_previous_\":\"http:\\/\\/127.0.0.1:8002\\/admin\\/categories\"}','2023-03-06 08:23:51','2023-03-06 08:23:51'),(47,1,'admin/categories','GET','127.0.0.1','[]','2023-03-06 08:23:51','2023-03-06 08:23:51'),(48,1,'admin/tags','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:23:54','2023-03-06 08:23:54'),(49,1,'admin/tags/create','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:23:57','2023-03-06 08:23:57'),(50,1,'admin/tags','POST','127.0.0.1','{\"name\":\"PHP\",\"slug\":null,\"status\":\"on\",\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\",\"_previous_\":\"http:\\/\\/127.0.0.1:8002\\/admin\\/tags\"}','2023-03-06 08:24:06','2023-03-06 08:24:06'),(51,1,'admin/tags','GET','127.0.0.1','[]','2023-03-06 08:24:06','2023-03-06 08:24:06'),(52,1,'admin/tags/create','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:24:08','2023-03-06 08:24:08'),(53,1,'admin/tags','POST','127.0.0.1','{\"name\":\"Javascript\",\"slug\":null,\"status\":\"on\",\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\",\"_previous_\":\"http:\\/\\/127.0.0.1:8002\\/admin\\/tags\"}','2023-03-06 08:24:17','2023-03-06 08:24:17'),(54,1,'admin/tags','GET','127.0.0.1','[]','2023-03-06 08:24:17','2023-03-06 08:24:17'),(55,1,'admin/categories','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:25:07','2023-03-06 08:25:07'),(56,1,'admin/posts','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:25:08','2023-03-06 08:25:08'),(57,1,'admin/posts/create','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-06 08:25:10','2023-03-06 08:25:10'),(58,1,'admin/posts','POST','127.0.0.1','{\"categories\":[\"1\",null],\"title\":\"Understand the fundamentals of a Class\",\"slug\":null,\"description\":\"A Class is the most essential of Object Oriented Programming (OOP). Basically OOP is a technique that organize multiple Classes to solve a specific programming\",\"content\":\"<p>A Class is the most essential of Object Oriented Programming (OOP). Basically OOP is a technique that organize multiple Classes to solve a specific programming problem.<\\/p><p>A Class is a combination of multiple variables and functions that represent a specific object.<\\/p><p>Variables in Class we call Properties.<\\/p><p>Functions in Class we call Methods.<\\/p><p>Each Properties and Methods have their own types and rule of access. Which devide into 3 basic rules:<\\/p><ul><li><b><i style=\\\"color: rgb(227, 55, 55);\\\">Public<\\/i><\\/b>: allow to access anywhere outside class initialization.<\\/li><li><i><b style=\\\"color: rgb(227, 55, 55);\\\">Protected<\\/b><\\/i>: allow to access in Parent and child classes.<\\/li><li><b><i style=\\\"color: rgb(227, 55, 55);\\\">Private<\\/i><\\/b>: allow to access inside class only.<\\/li><\\/ul><p>A class need to be initialize to become an object, at this time this class can be use to perform its purpose, in programming we use <code>new<\\/code> keyword to do that. However, we can access directly a property or a modethod without initialize the class by keyword <code>static<\\/code> or for properties we can use keyword <code>const<\\/code> which is represent as a constant.<\\/p><pre><code class=\\\"lang-php\\\">Class Cat {\\r\\n\\tpublic const NAME = \'my-cat\';\\r\\n\\tprivate $furColor;\\r\\n\\tprivate $hungry = false; \\r\\n\\r\\n\\tpublic static function getFurColor() {\\r\\n\\t\\treturn $this-&gt;furColor;\\r\\n\\t}\\r\\n\\r\\n\\tpublic function eat() {\\r\\n\\t\\t$this-&gt;hungry = true;\\r\\n\\r\\n\\t\\treturn $this-&gt;hungry;\\r\\n\\t}\\r\\n}\\r\\n\\r\\n$myCatFur = Cat::getFurColor();\\r\\n$myCat = new Cat();\\r\\n$mycat-&gt;eat();<br><\\/code><\\/pre><p>In OOP, we have some type of classes that can not be initialized which mean we can not use <code>new<\\/code> or call its proerties and methods as static. These classes can only be extended by other classes.&nbsp;<\\/p><ul><li>&nbsp;Abstract Class<\\/li><li>Interface<\\/li><li>Trait<br><\\/li><\\/ul>\",\"tags\":[\"1\",null],\"status\":\"on\",\"_token\":\"tvA728L6ny5oG3AClO06xm0eN93t6LzONDH9iGtH\",\"_previous_\":\"http:\\/\\/127.0.0.1:8002\\/admin\\/posts\"}','2023-03-06 08:34:05','2023-03-06 08:34:05'),(59,1,'admin/posts','GET','127.0.0.1','[]','2023-03-06 08:34:05','2023-03-06 08:34:05'),(60,1,'admin','GET','127.0.0.1','[]','2023-03-10 07:35:11','2023-03-10 07:35:11'),(61,1,'admin/posts','GET','127.0.0.1','{\"_pjax\":\"#pjax-container\"}','2023-03-10 07:35:17','2023-03-10 07:35:17');
/*!40000 ALTER TABLE `admin_operation_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_permissions`
--

DROP TABLE IF EXISTS `admin_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_permissions` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `http_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `http_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_permissions_name_unique` (`name`),
  UNIQUE KEY `admin_permissions_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` VALUES (1,'All permission','*','','*',NULL,NULL),(2,'Dashboard','dashboard','GET','/',NULL,NULL),(3,'Login','auth.login','','/auth/login\r\n/auth/logout',NULL,NULL),(4,'User setting','auth.setting','GET,PUT','/auth/setting',NULL,NULL),(5,'Auth management','auth.management','','/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs',NULL,NULL);
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_role_menu`
--

DROP TABLE IF EXISTS `admin_role_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_role_menu` (
  `role_id` int NOT NULL,
  `menu_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_menu_role_id_menu_id_index` (`role_id`,`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_role_menu`
--

LOCK TABLES `admin_role_menu` WRITE;
/*!40000 ALTER TABLE `admin_role_menu` DISABLE KEYS */;
INSERT INTO `admin_role_menu` VALUES (1,2,NULL,NULL),(1,8,NULL,NULL),(1,9,NULL,NULL),(1,10,NULL,NULL),(1,11,NULL,NULL),(1,12,NULL,NULL),(1,13,NULL,NULL),(1,2,NULL,NULL),(1,8,NULL,NULL),(1,9,NULL,NULL),(1,10,NULL,NULL),(1,11,NULL,NULL),(1,12,NULL,NULL),(1,13,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_role_permissions`
--

DROP TABLE IF EXISTS `admin_role_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_role_permissions` (
  `role_id` int NOT NULL,
  `permission_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_permissions_role_id_permission_id_index` (`role_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_role_permissions`
--

LOCK TABLES `admin_role_permissions` WRITE;
/*!40000 ALTER TABLE `admin_role_permissions` DISABLE KEYS */;
INSERT INTO `admin_role_permissions` VALUES (1,1,NULL,NULL),(1,1,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_role_users`
--

DROP TABLE IF EXISTS `admin_role_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_role_users` (
  `role_id` int NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_users_role_id_user_id_index` (`role_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_role_users`
--

LOCK TABLES `admin_role_users` WRITE;
/*!40000 ALTER TABLE `admin_role_users` DISABLE KEYS */;
INSERT INTO `admin_role_users` VALUES (1,1,NULL,NULL),(1,1,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_roles`
--

DROP TABLE IF EXISTS `admin_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_roles` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_roles_name_unique` (`name`),
  UNIQUE KEY `admin_roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` VALUES (1,'Administrator','administrator','2023-03-06 04:40:47','2023-03-06 04:40:47');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_user_permissions`
--

DROP TABLE IF EXISTS `admin_user_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_user_permissions` (
  `user_id` int NOT NULL,
  `permission_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_user_permissions_user_id_permission_id_index` (`user_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_user_permissions`
--

LOCK TABLES `admin_user_permissions` WRITE;
/*!40000 ALTER TABLE `admin_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'admin','$2y$10$pwh.84EpKDfUAJnv9BDqeuondTJ1grlJOhLHpIaI5lPm1bORZsOF6','Administrator',NULL,'YhAdOxzTHAZpX3ptTA90j416PcwnXjenMV3YDV1pm7vN1Bt54jt1CsEp3nOt','2023-03-06 04:40:47','2023-03-06 04:40:47');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Back end','back-end','https://roadmap.sh/backend','publish','2023-03-06 08:22:09','2023-03-06 08:22:09'),(2,'Front-end','front-end','https://roadmap.sh/frontend','publish','2023-03-06 08:23:51','2023-03-06 08:23:51');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_post`
--

DROP TABLE IF EXISTS `category_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_post` (
  `category_id` bigint NOT NULL,
  `post_id` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_post`
--

LOCK TABLES `category_post` WRITE;
/*!40000 ALTER TABLE `category_post` DISABLE KEYS */;
INSERT INTO `category_post` VALUES (1,1),(1,1);
/*!40000 ALTER TABLE `category_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_messages`
--

DROP TABLE IF EXISTS `contact_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_messages`
--

LOCK TABLES `contact_messages` WRITE;
/*!40000 ALTER TABLE `contact_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_messages` ENABLE KEYS */;
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
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `logs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `mapping_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapping_entity` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `display_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `child` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Back end','/category/back-end',NULL,'2023-03-06 08:23:23','2023-03-06 08:23:23',1),(2,'Front-end','/category/front-end',NULL,'2023-03-06 08:23:51','2023-03-06 08:23:51',NULL);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_04_173148_create_admin_tables',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2022_12_25_132627_create_categories_table',1),(7,'2022_12_25_132654_create_tags_table',1),(8,'2022_12_25_132718_create_posts_table',1),(9,'2022_12_28_143208_create_menus_table',1),(10,'2022_12_28_143446_create_contact_messages_table',1),(11,'2022_12_28_143641_create_logs_table',1),(12,'2022_12_28_143706_create_static_contents_table',1),(13,'2023_02_25_131910_set_nullable',2),(14,'2023_02_25_133325_add_orders',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
-- Table structure for table `post_tag`
--

DROP TABLE IF EXISTS `post_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_tag` (
  `post_id` bigint NOT NULL,
  `tag_id` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tag`
--

LOCK TABLES `post_tag` WRITE;
/*!40000 ALTER TABLE `post_tag` DISABLE KEYS */;
INSERT INTO `post_tag` VALUES (1,1),(1,1);
/*!40000 ALTER TABLE `post_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Understand the fundamentals of a Class','understand-the-fundamentals-of-a-class','A Class is the most essential of Object Oriented Programming (OOP). Basically OOP is a technique that organize multiple Classes to solve a specific programming','<p>A Class is the most essential of Object Oriented Programming (OOP). Basically OOP is a technique that organize multiple Classes to solve a specific programming problem.</p><p>A Class is a combination of multiple variables and functions that represent a specific object.</p><p>Variables in Class we call Properties.</p><p>Functions in Class we call Methods.</p><p>Each Properties and Methods have their own types and rule of access. Which devide into 3 basic rules:</p><ul><li><b><i style=\"color: rgb(227, 55, 55);\">Public</i></b>: allow to access anywhere outside class initialization.</li><li><i><b style=\"color: rgb(227, 55, 55);\">Protected</b></i>: allow to access in Parent and child classes.</li><li><b><i style=\"color: rgb(227, 55, 55);\">Private</i></b>: allow to access inside class only.</li></ul><p>A class need to be initialize to become an object, at this time this class can be use to perform its purpose, in programming we use <code>new</code> keyword to do that. However, we can access directly a property or a modethod without initialize the class by keyword <code>static</code> or for properties we can use keyword <code>const</code> which is represent as a constant.</p><pre><code class=\"lang-php\">Class Cat {\r\n	public const NAME = \'my-cat\';\r\n	private $furColor;\r\n	private $hungry = false; \r\n\r\n	public static function getFurColor() {\r\n		return $this-&gt;furColor;\r\n	}\r\n\r\n	public function eat() {\r\n		$this-&gt;hungry = true;\r\n\r\n		return $this-&gt;hungry;\r\n	}\r\n}\r\n\r\n$myCatFur = Cat::getFurColor();\r\n$myCat = new Cat();\r\n$mycat-&gt;eat();<br></code></pre><p>In OOP, we have some type of classes that can not be initialized which mean we can not use <code>new</code> or call its proerties and methods as static. These classes can only be extended by other classes.&nbsp;</p><ul><li>&nbsp;Abstract Class</li><li>Interface</li><li>Trait<br></li></ul>','publish','images/Class Example.png','2023-03-06 08:34:05','2023-03-06 08:34:05');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `static_contents`
--

DROP TABLE IF EXISTS `static_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `static_contents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `static_contents`
--

LOCK TABLES `static_contents` WRITE;
/*!40000 ALTER TABLE `static_contents` DISABLE KEYS */;
/*!40000 ALTER TABLE `static_contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'PHP','php','publish','2023-03-06 08:24:06','2023-03-06 08:24:06'),(2,'Javascript','javascript','publish','2023-03-06 08:24:17','2023-03-06 08:24:17');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2023-03-10 21:52:34
