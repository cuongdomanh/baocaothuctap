-- MySQL dump 10.15  Distrib 10.0.29-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.0.29-MariaDB-0ubuntu0.16.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `content` longtext,
  `is_deleted` tinyint(1) DEFAULT '0',
  `is_correct` int(10) DEFAULT NULL,
  `answer_batch_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`answer_batch_id`),
  KEY `fk_answer_answer_batch1_idx` (`answer_batch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=422 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer`
--

LOCK TABLES `answer` WRITE;
/*!40000 ALTER TABLE `answer` DISABLE KEYS */;
INSERT INTO `answer` VALUES (343,NULL,'                                                                                                                                    2                                            \n                                        \n                                        \n                                        \n                                        ',0,1,111),(344,NULL,'                                                                                                                                       3                                         \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,111),(345,NULL,'                                                                                                                                          4                                          \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,111),(346,NULL,'                                            2               \r\n                                        ',0,1,112),(347,NULL,'                                                                                        \r\n                 1                       \r\n                                        ',0,0,112),(348,NULL,'                                            4                                 \r\n                                        ',0,0,112),(349,NULL,'                                             3                                             \r\n                                        \r\n                                        ',0,0,112),(350,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Hình học                                            \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',1,0,113),(351,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            HÌnh đối xứng                                            \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',1,0,113),(352,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Bản đồ                                             \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',1,1,113),(353,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             Chân dài 9X trong \'tập đoàn\' ma túy từng đóng MV với Đan Trường\r\n00:32 03/06/2017\r\n\r\n3\r\n Trong 4 cô gái vừa bị cơ quan điều tra tạm giam, Vũ Hoàng Anh Ngọc (hay còn gọi là Ngọc Miu) là người từng đóng MV của nhiều ca sĩ nổi tiếng.\r\nXem chi tiết quảng cáo Bỏ qua quảng cáo sau 4s\r\nMV Người thay thế của Đan Trường Trong MV Người thay thế, chân dài vừa bị bắt giữ Ngọc Miu có dịp cộng tác bên Đan Trường.\r\nCông an TP.HCM vừa ra lệnh bắt giữ 15 đối tượng điều hành đường dây sản xuất ma túy lớn nhất cả nước. Trong số các bị can này có chân dài 9X Vũ Hoàng Anh Ngọc (hay còn gọi là Ngọc Miu).\r\n\r\nCơ quan điều tra cho biết với vai trò là bạn gái ông trùm Văn Kính Dương, Ngọc Miu tham gia trực tiếp vào quá trình sản xuất và tàng trữ ma túy đá. Nghi phạm thường xuyên cất giữ từ 10.000 đến 15.000 viên thuốc lắc tại nhà để tiện giao dịch mua bán.\r\n\r\nĐiều đáng nói là trước khi bị bắt, Ngọc Miu được coi là hot girl có tiếng một thời tại TP.HCM.                 \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',1,0,113),(354,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            VIêt Nam                                           \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',1,1,114),(355,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Sao hỏa                                            \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',1,0,114),(356,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Mỹ                                            \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',1,0,114),(357,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             Nga                                             \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',1,0,114),(358,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                             thành phố hồ chí minh                                    \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',1,0,115),(359,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                đồng nai                                            \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',1,1,115),(360,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    hà nội                                                                                                                                                                                                                                                                       \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',1,0,115),(361,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               vũng tàu                                                                                                                                                                                                                                                                           \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',1,0,115),(362,NULL,'                                                                                                                                                                                                                                                                                                                                                                             ád                               \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,116),(363,NULL,'                                                                                                                                                                                                                                                                                                                                                                ád                                            \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,1,116),(364,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                            \r\n                          ádz              \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,116),(365,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                                     \r\n                                        sadas\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,116),(366,NULL,'                                                                                        \r\n                     muon                   \r\n                                        ',0,0,117),(367,NULL,'                                                                                        \r\n                     khong                    \r\n                                        ',0,0,117),(368,NULL,'                                                                                        \r\n                     deo                   \r\n                                        ',0,0,117),(369,NULL,'                                                                                          \r\n                        dmm                \r\n                                        ',0,0,117),(370,NULL,'                                                                                        hoho                                            \r\n                                        \r\n                                        \r\n                                        ',0,0,118),(371,NULL,'                                                                                        nono                                            \r\n                                        \r\n                                        \r\n                                        ',0,0,118),(372,NULL,'                                                                                        xoxo                                            \r\n                                        \r\n                                        \r\n                                        ',0,0,118),(373,NULL,'                                                                                          gogo                                             \r\n                                        \r\n                                        \r\n                                        ',0,0,118),(374,NULL,'                                                                                                                                                                                                                                                                                                            X        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,119),(375,NULL,'                                                                                                                                                                                                                                                                                                                    Z\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,1,119),(376,NULL,'                                                                                                                                                                                                                                                                                                                    \r\n                                        M\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,119),(377,NULL,'                                                                                                                                                                                                                                                                                                                           \r\n                             H           \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,119),(378,NULL,'                                                                                                                                                                                                                                                                                                                    \r\n            Y                            \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,120),(379,NULL,'                                                                                                                                                                                                                                                                                                                    \r\n                                        K\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,120),(380,NULL,'                                                                                                                                                                                                                                                                                                                  N  \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,1,120),(381,NULL,'                                                                                                                                                                                                                                                                                                                           \r\n                                        H\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,120),(382,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                            \r\n                                        a1\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,1,121),(383,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                            \r\n                                        a\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,121),(384,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                            \r\n                                     a   \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,121),(385,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                                     \r\n                                        a\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,121),(386,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                            \r\n                        b                \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,122),(387,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                            \r\n                                        b\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,1,122),(388,NULL,'                                                                                                                                                                                                                                                                                                                                                                                             bb               \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,122),(389,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                                     \r\n                                        b\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,122),(390,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                            \r\n                      c                  \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,123),(391,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                            \r\n                             c           \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,123),(392,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                            \r\n                                        c\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,1,123),(393,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                                     \r\n                                        c\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,123),(394,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                            \r\n                                        d\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,124),(395,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                            \r\n                                        d\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,124),(396,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                            \r\n                                        d\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,0,124),(397,NULL,'                                                                                                                                                                                                                                                                                                                                                                                                                     \r\n                                        c\r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        \r\n                                        ',0,1,124),(398,NULL,'1                                            \r\n                                        ',0,0,125),(399,NULL,'                                            \r\n    2                                    ',0,1,125),(400,NULL,'                                            \r\n 3                                       ',0,0,125),(401,NULL,'                                             \r\n4                                        ',0,0,125),(402,NULL,'X                                            \r\n                                        ',0,1,126),(403,NULL,'A                                            \r\n                                        ',0,0,126),(404,NULL,' B                                           \r\n                                        ',0,0,126),(405,NULL,'c                                             \r\n                                        ',0,0,126),(406,NULL,'b                                     \r\n                                        ',0,0,127),(407,NULL,' d                                           \r\n                                        ',0,0,127),(408,NULL,'a                                            \r\n                                        ',0,0,127),(409,NULL,'   e                                          \r\n                                        ',0,1,127),(410,NULL,'a                                            \r\n                                        ',0,0,128),(411,NULL,'b                                            \r\n                                        ',0,1,128),(412,NULL,'h                                            \r\n                                        ',0,0,128),(413,NULL,'q                                             \r\n                                        ',0,0,128),(414,NULL,'a',0,0,129),(415,NULL,'b',0,1,129),(416,NULL,'c',0,0,129),(417,NULL,'d',0,0,129),(418,NULL,'x',0,0,130),(419,NULL,'y',0,0,130),(420,NULL,'a',0,0,130),(421,NULL,'d',0,1,130);
/*!40000 ALTER TABLE `answer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answer_batch`
--

DROP TABLE IF EXISTS `answer_batch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer_batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `title` text,
  `sub_score` int(10) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`question_id`),
  KEY `fk_answer_batch_questions1_idx` (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer_batch`
--

LOCK TABLES `answer_batch` WRITE;
/*!40000 ALTER TABLE `answer_batch` DISABLE KEYS */;
INSERT INTO `answer_batch` VALUES (113,100,'Câu 65',10,0,1),(114,100,'Câu 66',10,0,1),(115,100,'Câu 67',10,0,1),(116,100,'Câu 68',0,0,1),(117,101,'câu 1 : ',10,0,0),(118,102,'câu 2 : ',10,0,0),(119,103,'câu 10',10,2,0),(120,103,'câu 20',10,2,0),(121,104,'cau 12',10,2,0),(122,104,'cau 12',10,2,0),(123,104,'cau 14',10,2,0),(124,104,'cau 15',10,2,0),(125,105,'cau 1 ',1,0,0),(126,106,'câu1',1,0,0),(127,106,'câu 2',1,0,0),(128,106,'cau3',3,0,0),(129,107,'câu1',1,0,0),(130,107,'câu2',1,0,0);
/*!40000 ALTER TABLE `answer_batch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answer_fomular`
--

DROP TABLE IF EXISTS `answer_fomular`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answer_fomular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_id` int(11) NOT NULL,
  `formular_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`answer_id`,`formular_id`),
  KEY `fk_answer_fomular_formular1_idx` (`formular_id`),
  KEY `fk_answer_fomular_answer1_idx` (`answer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answer_fomular`
--

LOCK TABLES `answer_fomular` WRITE;
/*!40000 ALTER TABLE `answer_fomular` DISABLE KEYS */;
/*!40000 ALTER TABLE `answer_fomular` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'Đỗ Mạnh Cường','djỗ-manh-cuờng',1,0,'2017-05-05 19:15:35','2017-05-05 19:45:55');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `batch-test`
--

DROP TABLE IF EXISTS `batch-test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `batch-test` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `test_id` int(10) unsigned NOT NULL,
  `batch_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`test_id`,`batch_id`),
  KEY `fk_batch-test_batches1_idx` (`batch_id`),
  KEY `fk_batch-test_tests1_idx` (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `batch-test`
--

LOCK TABLES `batch-test` WRITE;
/*!40000 ALTER TABLE `batch-test` DISABLE KEYS */;
INSERT INTO `batch-test` VALUES (123,8,10,'2017-05-21 19:30:18','2017-05-21 19:30:18'),(124,9,10,'2017-05-21 19:30:18','2017-05-21 19:30:18'),(146,10,12,'2017-06-12 13:57:10','2017-06-12 13:57:10'),(149,14,16,'2017-06-19 03:17:35','2017-06-19 03:17:35'),(151,13,15,'2017-06-20 07:18:08','2017-06-20 07:18:08');
/*!40000 ALTER TABLE `batch-test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `batch_comments`
--

DROP TABLE IF EXISTS `batch_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `batch_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(110) NOT NULL,
  `question_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `batches_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`batches_id`),
  KEY `fk_batch_comments_batches1_idx` (`batches_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `batch_comments`
--

LOCK TABLES `batch_comments` WRITE;
/*!40000 ALTER TABLE `batch_comments` DISABLE KEYS */;
INSERT INTO `batch_comments` VALUES (88,'cuong','admin@gmail.com','huy ','http://smartbook.dev/usertest/12-b/10/bai-thi-1-tiet-',101,0,0,'2017-06-14 16:20:58','2017-06-14 16:20:58',0),(89,'cuong','admin@gmail.com','123abc','http://smartbook.dev/usertest/12-b/10/bai-thi-1-tiet-',101,0,0,'2017-06-14 16:21:12','2017-06-14 16:21:12',0),(90,'cuong','admin@gmail.com','kinh vcc\r\n','http://smartbook.dev/usertest/12-b/10/bai-thi-1-tiet-',101,0,0,'2017-06-14 16:24:47','2017-06-14 16:24:47',0),(91,'cuong','admin@gmail.com','asdas','http://smartbook.dev/usertest/12-b/10/bai-thi-1-tiet-',101,0,0,'2017-06-14 16:55:16','2017-06-14 16:55:16',0),(92,'cuong','admin@gmail.com','xxxxxxxxxxxxxxx','http://smartbook.dev/usertest/12-b/10/bai-thi-1-tiet-',101,0,0,'2017-06-14 16:55:22','2017-06-14 16:55:22',0),(93,'cuong','admin@gmail.com','ffffff','http://smartbook.dev/usertest/12-b/10/bai-thi-1-tiet-',102,0,0,'2017-06-14 17:50:24','2017-06-14 17:50:24',0),(94,'Đỗ Mạnh Cường','khongten667@gmail.com','','http://smartbook.dev/usertest/12-b/10/bai-thi-1-tiet-',101,0,0,'2017-06-14 17:54:32','2017-06-14 17:54:32',0),(95,'cuong','admin@gmail.com','xsafasdfasdf','http://smartbook.dev/usertest/12-b/10/bai-thi-1-tiet-',101,0,0,'2017-06-15 02:38:18','2017-06-15 02:38:18',0),(96,'cuong','admin@gmail.com','jjalsdjf','http://smartbook.dev/usertest/12-b/10/bai-thi-1-tiet-',104,0,0,'2017-06-15 02:40:05','2017-06-15 02:40:05',0),(97,'cuong','admin@gmail.com','cau ỏi at hrhay ','http://smartbook.dev/usertest/12-b/10/bai-thi-1-tiet-',104,0,0,'2017-06-15 06:58:50','2017-06-15 06:58:50',0),(98,'Đỗ Mạnh Cường','khongten667@gmail.com','hay','http://smartbook.dev/usertest/12-b/10/bai-thi-1-tiet-',103,0,0,'2017-06-15 13:38:03','2017-06-15 13:38:03',0),(99,'cuong','admin@gmail.com','baif thi hay \r\n','http://smartbook.dev/usertest/16-b/14/de-thi-sinh-h%E1%BB%8Dc-',105,0,0,'2017-06-19 05:42:13','2017-06-19 05:42:13',0),(100,'cuong','admin@gmail.com','bai thi nay kho \r\n','http://smartbook.dev/usertest/16-b/14/de-thi-sinh-h%E1%BB%8Dc-',105,0,0,'2017-06-19 05:43:25','2017-06-19 05:43:25',0);
/*!40000 ALTER TABLE `batch_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `batch_tag`
--

DROP TABLE IF EXISTS `batch_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `batch_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` int(10) unsigned NOT NULL,
  `batch_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`tag_id`,`batch_id`),
  KEY `fk_batch_tag_tags1_idx` (`tag_id`),
  KEY `fk_batch_tag_batches1_idx` (`batch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `batch_tag`
--

LOCK TABLES `batch_tag` WRITE;
/*!40000 ALTER TABLE `batch_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `batch_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `batches`
--

DROP TABLE IF EXISTS `batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `batches` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(20,2) NOT NULL,
  `discount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(225) NOT NULL,
  `user_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `countview` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `batches`
--

LOCK TABLES `batches` WRITE;
/*!40000 ALTER TABLE `batches` DISABLE KEYS */;
INSERT INTO `batches` VALUES (10,'tệp đề tiếng anh ','tep-de-tieng-anh-',100000.00,'10','uploads/batch/28d7b55e86d83d34dd98e4863a245941.jpg',1,47,NULL,0,1,'2017-05-16 11:31:02','2017-05-26 00:18:23'),(11,'đề thi sinh học ','de-thi-sinh-học-',10000.00,'10','uploads/batch/ff6894059dee2aaabb0a525d68863105.jpg',1,47,NULL,1,1,'2017-05-18 21:19:26','2017-05-26 00:18:17'),(12,'đề thi đại học ','de-thi-dai-học-',10000.00,'10','uploads/batch/9cc7689016bfc52329970bd5a8f91363.jpg',1,48,NULL,1,0,'2017-05-26 01:22:40','2017-06-12 13:57:10'),(13,'đề thi đại học ','de-thi-dai-học-',10000.00,'10','uploads/batch/9cc7689016bfc52329970bd5a8f91363.jpg',1,48,NULL,0,1,'2017-05-26 01:22:40','2017-06-07 07:04:10'),(14,'đề thi đại học ','de-thi-dai-học-',10000.00,'10','uploads/batch/9cc7689016bfc52329970bd5a8f91363.jpg',1,48,NULL,1,1,'2017-05-26 01:22:40','2017-06-07 07:04:06'),(15,'đề thi lớp 12 van hoc','de-thi-lớp-12-van-hoc',100000.00,'10','uploads/batch/e521a64e86fe744cb79888c73724bc9e.jpg',1,47,10,1,0,'2017-06-19 02:48:16','2017-06-20 07:18:08'),(16,'tệp đề thi khối B ','tep-de-thi-khối-b-',100000.00,'10','uploads/batch/e3467580f360d589aa9498d6144d35e6.jpg',1,47,11,0,0,'2017-06-19 03:17:10','2017-06-19 03:17:10');
/*!40000 ALTER TABLE `batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_author`
--

DROP TABLE IF EXISTS `book_author`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_author` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(10) unsigned NOT NULL,
  `author_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`book_id`,`author_id`),
  KEY `fk_book_author_books1_idx` (`book_id`),
  KEY `fk_book_author_authors1_idx` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_author`
--

LOCK TABLES `book_author` WRITE;
/*!40000 ALTER TABLE `book_author` DISABLE KEYS */;
INSERT INTO `book_author` VALUES (16,79,1,'2017-05-05 19:45:56','2017-05-05 19:45:56'),(17,80,1,'2017-05-05 19:45:56','2017-05-05 19:45:56'),(19,82,1,'2017-05-05 19:45:56','2017-05-05 19:45:56'),(20,83,1,'2017-05-05 19:45:56','2017-05-05 19:45:56'),(21,84,1,'2017-05-05 19:45:56','2017-05-05 19:45:56'),(23,86,1,'2017-05-05 19:45:56','2017-05-05 19:45:56'),(31,90,1,'2017-05-16 08:35:46','2017-05-16 08:35:46'),(32,89,1,'2017-05-16 08:36:26','2017-05-16 08:36:26'),(35,85,1,'2017-05-16 08:36:56','2017-05-16 08:36:56'),(36,81,1,'2017-05-16 08:37:06','2017-05-16 08:37:06'),(37,87,1,'2017-05-16 11:14:17','2017-05-16 11:14:17'),(38,91,1,'2017-06-05 08:10:56','2017-06-05 08:10:56'),(40,88,1,'2017-06-06 04:10:59','2017-06-06 04:10:59'),(43,93,1,'2017-06-26 07:07:32','2017-06-26 07:07:32');
/*!40000 ALTER TABLE `book_author` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_comments`
--

DROP TABLE IF EXISTS `book_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(10) unsigned NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(110) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_comments`
--

LOCK TABLES `book_comments` WRITE;
/*!40000 ALTER TABLE `book_comments` DISABLE KEYS */;
INSERT INTO `book_comments` VALUES (2,89,'nguyen van a','nguyen van a ','',0,1,0,'2017-05-05 20:22:50','2017-05-05 20:22:50'),(3,89,'khongten667@gmail.com','sachs rat hay \r\n','',0,1,0,'2017-05-05 20:23:15','2017-05-05 20:23:15'),(4,88,'','sada','',0,1,0,'2017-06-14 15:02:02','2017-06-14 15:02:02'),(5,88,'','aaa','',0,1,0,'2017-06-14 15:02:09','2017-06-14 15:02:09'),(6,88,'','aaa','',0,1,0,'2017-06-14 15:05:09','2017-06-14 15:05:09'),(7,88,'','aaa','',0,1,0,'2017-06-14 15:05:31','2017-06-14 15:05:31'),(8,88,'huy2@gmail.com','xyz','http://smartbook.dev/book/88/sach-khoa-h%E1%BB%8Dc-than-bi',0,1,0,'2017-06-14 15:07:37','2017-06-14 15:07:37');
/*!40000 ALTER TABLE `book_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_tag`
--

DROP TABLE IF EXISTS `book_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`book_id`,`tag_id`),
  KEY `fk_book_tag_books1_idx` (`book_id`),
  KEY `fk_book_tag_tags1_idx` (`tag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_tag`
--

LOCK TABLES `book_tag` WRITE;
/*!40000 ALTER TABLE `book_tag` DISABLE KEYS */;
INSERT INTO `book_tag` VALUES (46,79,2,'2017-05-02 09:34:12','2017-05-02 09:34:12'),(47,80,2,'2017-05-02 09:34:12','2017-05-02 09:34:12'),(49,82,2,'2017-05-02 09:34:12','2017-05-02 09:34:12'),(50,83,2,'2017-05-02 09:34:12','2017-05-02 09:34:12'),(52,86,2,'2017-05-02 09:34:12','2017-05-02 09:34:12'),(54,79,1,'2017-05-02 09:34:25','2017-05-02 09:34:25'),(55,80,1,'2017-05-02 09:34:25','2017-05-02 09:34:25'),(57,82,1,'2017-05-02 09:34:25','2017-05-02 09:34:25'),(58,83,1,'2017-05-02 09:34:25','2017-05-02 09:34:25'),(59,84,1,'2017-05-02 09:34:25','2017-05-02 09:34:25'),(61,86,1,'2017-05-02 09:34:25','2017-05-02 09:34:25'),(64,79,5,'2017-05-02 10:01:21','2017-05-02 10:01:21'),(65,82,5,'2017-05-02 10:01:22','2017-05-02 10:01:22'),(72,79,6,'2017-05-05 21:18:36','2017-05-05 21:18:36'),(73,82,6,'2017-05-05 21:18:36','2017-05-05 21:18:36'),(84,90,1,'2017-05-16 08:35:46','2017-05-16 08:35:46'),(85,90,4,'2017-05-16 08:35:46','2017-05-16 08:35:46'),(86,89,1,'2017-05-16 08:36:26','2017-05-16 08:36:26'),(89,85,1,'2017-05-16 08:36:55','2017-05-16 08:36:55'),(90,85,2,'2017-05-16 08:36:55','2017-05-16 08:36:55'),(91,85,5,'2017-05-16 08:36:55','2017-05-16 08:36:55'),(92,85,6,'2017-05-16 08:36:55','2017-05-16 08:36:55'),(93,81,1,'2017-05-16 08:37:06','2017-05-16 08:37:06'),(94,81,2,'2017-05-16 08:37:06','2017-05-16 08:37:06'),(95,87,1,'2017-05-16 11:14:17','2017-05-16 11:14:17'),(96,91,1,'2017-06-05 08:10:56','2017-06-05 08:10:56'),(97,91,2,'2017-06-05 08:10:56','2017-06-05 08:10:56'),(98,91,4,'2017-06-05 08:10:56','2017-06-05 08:10:56'),(100,88,2,'2017-06-06 04:10:59','2017-06-06 04:10:59'),(103,93,6,'2017-06-26 07:07:31','2017-06-26 07:07:31');
/*!40000 ALTER TABLE `book_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(20,2) NOT NULL,
  `discount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `pages` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `categories_id` int(11) unsigned NOT NULL DEFAULT '0',
  `publish_date` date DEFAULT NULL,
  `reprint` int(11) NOT NULL,
  `unit_id` int(10) unsigned NOT NULL,
  `is_hot` int(11) DEFAULT NULL,
  `is_top` int(11) DEFAULT NULL,
  `is_best` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`categories_id`,`unit_id`),
  KEY `fk_books_categories1_idx` (`categories_id`),
  KEY `fk_books_units1_idx` (`unit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (79,'Sách Văn học Trong Nước','sach-van-học-trong-nuớc',10000000.00,'10','<p>as</p>\r\n','810aa25fb9fde44b2498626779213944.png','<p>Placing a young child at the center of a narrative is a tricky move. Children are, well, childish, full of faulty observations and unreliable conclusions. And then there&rsquo;s the practical matter of motoring a plot along when &mdash; as in Victor Lodato&rsquo;s new novel, &ldquo;Edgar and Lucy&rdquo; &mdash; the child in question is an 8-year-old loner who can&rsquo;t remember important phone numbers or, because he has albinism, even go outside without pharmaceutical-grade sunscreen. A novel requires some kind of trouble, and watching a child navigate peril is harder on the heart than observing adult woes. It can feel facile, this ostensible shortcut to empathy, and requires a certain authority to prevent the whole enterprise from tipping into implausibility or soppy sentimentality.</p>\r\n',0,123,213,32,'2016-12-03',2,2,1,1,0,1,0,'2017-06-21 21:06:07','2017-05-05 19:23:53'),(80,'Sách Văn học Nước Ngoài','sach-van-học-nuớc-ngoai',2000.00,'20','<p>2123</p>\r\n','b5b8d7376c043eddec6e4afb4d1eec51.png','<p>123</p>\r\n',213,213,23,2,'2016-12-03',2,1,1,1,0,1,0,'2017-03-21 21:06:42','2017-05-04 02:24:40'),(81,'Truyện ngắn – Tản văn','truyen-ngắn-–-tản-van',10000000.00,'10','<p>abc</p>\r\n','b92aa9a5b19a05df2785188d3d69b061.png','<p>asd</p>\r\n',2,213,123,44,'2016-12-03',23,1,1,0,1,1,0,'2017-03-21 21:07:45','2017-05-16 08:37:05'),(82,'Sách Thiếu Nhi','sach-thieu-nhi',123.00,'12','<p>123</p>\r\n','d12b36f1f2febf455461125391557a6d.png','<p>213</p>\r\n',213,231,213,1,'2016-12-03',123,1,0,1,1,1,0,'2017-03-21 21:08:32','2017-05-04 02:24:40'),(83,'Truyện tranh','truyen-tranh',99999.00,'123','<p>123</p>\r\n','b19a468eb4d7192c4ff0d7d967e175e8.png','<p>123</p>\r\n',212,213123123,213,2,'2016-12-03',23,1,1,1,0,1,0,'2017-03-21 21:09:44','2017-05-15 20:38:35'),(84,'Sách Phát Triển Bản Thân','sach-phat-triển-bản-than',213.00,'22','<p>213</p>\r\n','8d715b0b01e1d53db359da57155d3bab.png','<p>123</p>\r\n',123,123,213,28,'2016-12-03',213,1,1,1,0,1,0,'2017-03-21 21:10:41','2017-04-25 21:51:43'),(85,'Nuôi dạy con','nuoi-day-con',1000000000.00,'12','<p>12</p>\r\n','61e24725956ace0d41c846b8d0107547.jpg','<p>213</p>\r\n',133,123,100,44,'2016-12-03',213,1,0,0,1,1,0,'2017-03-21 21:11:33','2017-05-16 08:36:55'),(86,'Sách nấu ăn','sach-nau-an',213.00,'123','<p>123</p>\r\n','72699ea418ef4a3e8617642b74f7ed69.png','<p>213</p>\r\n',213,213,213,1,'2016-12-03',2,1,1,0,0,1,0,'2017-03-21 21:12:09','2017-03-21 21:12:09'),(87,'Sách Thường Thức – Đời Sống','sach-thuờng-thuc-–-djời-sống',22.00,'2','<p>213123</p>\r\n','cc455c0c11ac9caa51254100c7ff49a6.png','<p>213</p>\r\n',21321,213123,2132,43,'2016-12-03',213,2,0,1,0,1,0,'2017-03-21 21:13:06','2017-05-16 11:14:17'),(88,'Sách Khoa học Thần Bí','sach-khoa-học-than-bi',100000.00,'0','<p>123</p>\r\n','95d72f2dfc5e370dbc848e24f4bfa457.png','<p>213</p>\r\n',5,123,123,43,'2016-12-03',213,2,0,1,0,1,0,'2017-03-21 21:14:04','2017-06-06 04:10:59'),(89,'sach hay ','sach-hay-',1212.00,'11','<p>cuoons sach hay nhat moi thoi dai&nbsp;</p>\r\n','01dfc06269c80c416cc9f088beca482a.jpg','<p>neu ban khong doc cuon sach nay thi dung la sai lam&nbsp;</p>\r\n',12121,123,1,43,'2016-01-01',121211,2,1,0,1,1,1,'2017-04-30 03:30:23','2017-06-05 07:29:15'),(90,'sách hay ','sach-hay-',100000.00,'10','<p>một cuốn s&aacute;ch rất hay bạn n&ecirc;n đọc&nbsp;</p>\r\n','675b109a50304763683a059602a0e412.jpg','<p>cuốn s&aacute;ch n&agrave;y l&agrave; cuốn n&oacute;i về cuộc đời của billgate , tuổi thơ của &ocirc;ng đ&atilde; sống như n&agrave;o v&agrave; l&agrave;m sao &ocirc;ng l&agrave; một người vĩ đại ! c&ugrave;ng t&igrave;m hiểu th&ocirc;i&nbsp;</p>\r\n',11,123,1111,44,'2016-01-01',2,1,1,1,1,1,1,'2017-05-13 07:34:18','2017-06-05 07:29:20'),(91,'Sách cho mọi nhà','sach-cho-mọi-nha',100.00,'5','<p>S&aacute;ch d&agrave;nh cho người lớn</p>\r\n','f3ccdd27d2000e3f9255a7e3e2c48800.jpg','<p>Hay v&agrave; chất lượng</p>\r\n',25,1,20,43,'2017-06-14',3,2,0,1,0,1,0,'2017-06-05 08:10:56','2017-06-05 08:10:56'),(92,'sách van học ','sach-van-học-',10000.00,'10','<p>cuốn s&aacute;ch tuyệt vời&nbsp;</p>\r\n','eec0447b8944954ad9150db350553ec4.jpg','<p>cuoons s&aacute;ch n&agrave;y b&aacute;n rất chạy tr&ecirc;n tị trường</p>\r\n',100,NULL,NULL,43,'2017-06-15',0,2,0,0,0,1,0,'2017-06-15 09:17:23','2017-06-26 07:08:44'),(93,'sach van hocj ','sach-van-hocj-',10000.00,'10','<p>cuốn s&aacute;ch n&agrave;y cực kỳ hay lu&ocirc;n&nbsp;</p>\r\n','bd83868427ebd9d9299a3f3c5d8437d5.jpg','<p>s&aacute;ch abc</p>\r\n',8,NULL,NULL,43,'2017-06-23',0,2,1,1,1,1,0,'2017-06-23 17:58:23','2017-06-26 07:16:13');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL,
  `type` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (39,'sách','sach',1,0,0,0,'2017-05-16 08:13:57','2017-05-16 08:31:19'),(40,'khóa học ','khoa-học-',1,0,0,1,'2017-05-16 08:14:12','2017-05-16 08:14:12'),(41,'phòng thi ','phong-thi-',1,0,0,3,'2017-05-16 08:14:24','2017-05-16 08:14:24'),(42,'Luyện Đề','luyen-dje',1,0,0,2,'2017-05-16 08:14:39','2017-06-07 07:09:33'),(43,'sách văn học ','sach-van-học-',1,0,39,0,'2017-05-16 08:14:53','2017-05-16 08:14:53'),(45,'khóa học tiếng anh ','khoa-học-tieng-anh-',1,0,40,1,'2017-05-16 08:15:20','2017-05-16 08:15:20'),(46,'khóa học oline','khoa-học-oline',1,0,40,1,'2017-05-16 08:15:31','2017-05-16 08:15:31'),(47,'tài liệu thi lớp 12','tai-lieu-thi-lớp-12',1,0,42,2,'2017-05-16 08:15:46','2017-05-16 08:15:46'),(49,'phòng thi toán học ','phong-thi-toan-học-',1,0,41,3,'2017-05-16 08:16:14','2017-05-16 08:16:14'),(50,'phong thi sinh học ','phong-thi-sinh-học-',1,0,41,3,'2017-05-16 08:16:27','2017-05-16 08:16:27'),(51,'đề thi đại học ','de-thi-dai-học-',1,0,42,2,'2017-06-22 03:32:05','2017-06-22 03:32:05');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `config_batch`
--

DROP TABLE IF EXISTS `config_batch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `config_batch` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `batch_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config_batch`
--

LOCK TABLES `config_batch` WRITE;
/*!40000 ALTER TABLE `config_batch` DISABLE KEYS */;
/*!40000 ALTER TABLE `config_batch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `status` tinyint(4) DEFAULT '1',
  `is_deleted` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'dmm','0944512030','hahahha','123abc',1,0,'2017-06-12 02:44:59','2017-06-12 02:44:59'),(2,'','','','',1,0,'2017-06-21 02:29:16','2017-06-21 02:29:16');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_batch`
--

DROP TABLE IF EXISTS `course_batch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_batch` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(10) unsigned NOT NULL,
  `batch_id` int(10) unsigned NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`course_id`,`batch_id`),
  KEY `fk_course_batch_courses1_idx` (`course_id`),
  KEY `fk_course_batch_batches1_idx` (`batch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_batch`
--

LOCK TABLES `course_batch` WRITE;
/*!40000 ALTER TABLE `course_batch` DISABLE KEYS */;
INSERT INTO `course_batch` VALUES (11,3,11,'0','2017-05-21 08:22:34','2017-05-21 08:22:34'),(12,8,10,'0','2017-05-21 19:30:18','2017-05-21 19:30:18'),(13,13,16,'0','2017-06-19 05:44:59','2017-06-19 05:44:59'),(16,13,15,'0','2017-06-20 07:18:08','2017-06-20 07:18:08');
/*!40000 ALTER TABLE `course_batch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_book`
--

DROP TABLE IF EXISTS `course_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `encode` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_book`
--

LOCK TABLES `course_book` WRITE;
/*!40000 ALTER TABLE `course_book` DISABLE KEYS */;
/*!40000 ALTER TABLE `course_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_comment`
--

DROP TABLE IF EXISTS `course_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(110) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `courses_id` int(10) unsigned NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`courses_id`),
  KEY `fk_course_comment_courses1_idx` (`courses_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_comment`
--

LOCK TABLES `course_comment` WRITE;
/*!40000 ALTER TABLE `course_comment` DISABLE KEYS */;
INSERT INTO `course_comment` VALUES (1,'cuongdomanh','cuongdomanh@gmail.com','khóa học tuyệt vời nhất mà tôi từng biết','',0,11,1,0,'2017-05-03 11:22:35','2017-05-03 11:22:35'),(2,'cuong','khongten667@gmail.com','khoa hoc rat hay \r\n','',0,11,1,0,'2017-05-05 22:45:35','2017-05-05 22:45:35'),(3,'huy1@gmail.com','huy1@gmail.com','123','',0,11,1,0,'2017-06-14 13:47:06','2017-06-14 13:47:06'),(4,'hu','huy1@gmail.com','123abc','http://smartbook.dev/course/10/khoa-h%E1%BB%8Dc-ng%E1%BA%AFn-han-',0,10,1,0,'2017-06-14 15:12:52','2017-06-14 15:12:52');
/*!40000 ALTER TABLE `course_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_tag`
--

DROP TABLE IF EXISTS `course_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` int(10) unsigned NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`tag_id`,`course_id`),
  KEY `fk_course_tag_tags1_idx` (`tag_id`),
  KEY `fk_course_tag_courses1_idx` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_tag`
--

LOCK TABLES `course_tag` WRITE;
/*!40000 ALTER TABLE `course_tag` DISABLE KEYS */;
INSERT INTO `course_tag` VALUES (71,1,9,0,0,'2017-05-14 07:13:24','2017-05-14 07:13:24'),(72,2,9,0,0,'2017-05-14 07:13:24','2017-05-14 07:13:24'),(73,3,9,0,0,'2017-05-14 07:13:24','2017-05-14 07:13:24'),(74,6,9,0,0,'2017-05-14 07:13:24','2017-05-14 07:13:24'),(115,1,10,0,0,'2017-05-16 08:37:56','2017-05-16 08:37:56'),(116,2,10,0,0,'2017-05-16 08:37:56','2017-05-16 08:37:56'),(117,3,10,0,0,'2017-05-16 08:37:56','2017-05-16 08:37:56'),(118,4,10,0,0,'2017-05-16 08:37:57','2017-05-16 08:37:57'),(125,1,7,0,0,'2017-05-16 08:38:20','2017-05-16 08:38:20'),(126,2,7,0,0,'2017-05-16 08:38:20','2017-05-16 08:38:20'),(127,3,7,0,0,'2017-05-16 08:38:20','2017-05-16 08:38:20'),(132,1,5,0,0,'2017-05-16 08:38:38','2017-05-16 08:38:38'),(133,2,5,0,0,'2017-05-16 08:38:38','2017-05-16 08:38:38'),(134,3,5,0,0,'2017-05-16 08:38:38','2017-05-16 08:38:38'),(145,1,11,0,0,'2017-05-16 08:43:05','2017-05-16 08:43:05'),(146,2,11,0,0,'2017-05-16 08:43:05','2017-05-16 08:43:05'),(147,3,11,0,0,'2017-05-16 08:43:05','2017-05-16 08:43:05'),(148,1,6,0,0,'2017-05-16 11:14:04','2017-05-16 11:14:04'),(149,2,6,0,0,'2017-05-16 11:14:05','2017-05-16 11:14:05'),(150,3,6,0,0,'2017-05-16 11:14:05','2017-05-16 11:14:05'),(151,6,6,0,0,'2017-05-16 11:14:05','2017-05-16 11:14:05'),(152,1,12,0,0,'2017-05-16 11:14:33','2017-05-16 11:14:33'),(153,2,12,0,0,'2017-05-16 11:14:34','2017-05-16 11:14:34'),(154,3,12,0,0,'2017-05-16 11:14:34','2017-05-16 11:14:34'),(155,4,12,0,0,'2017-05-16 11:14:34','2017-05-16 11:14:34'),(156,5,12,0,0,'2017-05-16 11:14:34','2017-05-16 11:14:34'),(157,6,12,0,0,'2017-05-16 11:14:34','2017-05-16 11:14:34'),(158,1,8,0,0,'2017-05-17 20:33:46','2017-05-17 20:33:46'),(159,2,8,0,0,'2017-05-17 20:33:46','2017-05-17 20:33:46'),(160,3,8,0,0,'2017-05-17 20:33:46','2017-05-17 20:33:46'),(173,1,3,0,0,'2017-05-21 08:22:34','2017-05-21 08:22:34'),(174,2,3,0,0,'2017-05-21 08:22:34','2017-05-21 08:22:34'),(175,3,3,0,0,'2017-05-21 08:22:34','2017-05-21 08:22:34'),(176,6,3,0,0,'2017-05-21 08:22:34','2017-05-21 08:22:34'),(177,1,4,0,0,'2017-06-06 09:03:52','2017-06-06 09:03:52'),(178,2,4,0,0,'2017-06-06 09:03:52','2017-06-06 09:03:52'),(179,3,4,0,0,'2017-06-06 09:03:52','2017-06-06 09:03:52'),(180,6,13,0,0,'2017-06-19 05:44:59','2017-06-19 05:44:59'),(181,3,13,0,0,'2017-06-19 05:44:59','2017-06-19 05:44:59');
/*!40000 ALTER TABLE `course_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_video`
--

DROP TABLE IF EXISTS `course_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_video` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(10) unsigned NOT NULL,
  `video_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`course_id`,`video_id`),
  KEY `fk_course_video_videos1_idx` (`video_id`),
  KEY `fk_course_video_courses1_idx` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_video`
--

LOCK TABLES `course_video` WRITE;
/*!40000 ALTER TABLE `course_video` DISABLE KEYS */;
INSERT INTO `course_video` VALUES (17,3,14,'2017-04-25 00:39:18','2017-04-25 00:39:18'),(18,4,14,'2017-04-25 00:39:18','2017-04-25 00:39:18'),(19,5,14,'2017-04-25 00:39:18','2017-04-25 00:39:18'),(20,6,14,'2017-04-25 00:39:18','2017-04-25 00:39:18'),(21,7,14,'2017-04-25 00:39:19','2017-04-25 00:39:19'),(22,8,14,'2017-04-25 00:39:19','2017-04-25 00:39:19'),(23,3,13,'2017-04-25 00:39:31','2017-04-25 00:39:31'),(24,4,13,'2017-04-25 00:39:31','2017-04-25 00:39:31'),(25,5,13,'2017-04-25 00:39:31','2017-04-25 00:39:31'),(26,6,13,'2017-04-25 00:39:31','2017-04-25 00:39:31'),(27,7,13,'2017-04-25 00:39:31','2017-04-25 00:39:31'),(28,8,13,'2017-04-25 00:39:32','2017-04-25 00:39:32'),(47,3,16,'2017-05-05 09:33:11','2017-05-05 09:33:11'),(48,4,16,'2017-05-05 09:33:11','2017-05-05 09:33:11'),(49,5,16,'2017-05-05 09:33:11','2017-05-05 09:33:11'),(50,6,16,'2017-05-05 09:33:11','2017-05-05 09:33:11'),(51,7,16,'2017-05-05 09:33:11','2017-05-05 09:33:11'),(52,8,16,'2017-05-05 09:33:11','2017-05-05 09:33:11'),(89,3,19,'2017-05-16 03:24:59','2017-05-16 03:24:59'),(90,4,19,'2017-05-16 03:24:59','2017-05-16 03:24:59'),(91,5,19,'2017-05-16 03:24:59','2017-05-16 03:24:59'),(92,6,19,'2017-05-16 03:24:59','2017-05-16 03:24:59'),(93,7,19,'2017-05-16 03:24:59','2017-05-16 03:24:59'),(94,8,19,'2017-05-16 03:24:59','2017-05-16 03:24:59'),(95,9,19,'2017-05-16 03:24:59','2017-05-16 03:24:59'),(96,10,19,'2017-05-16 03:24:59','2017-05-16 03:24:59'),(97,11,19,'2017-05-16 03:24:59','2017-05-16 03:24:59'),(98,3,18,'2017-05-16 03:29:27','2017-05-16 03:29:27'),(99,4,18,'2017-05-16 03:29:27','2017-05-16 03:29:27'),(100,5,18,'2017-05-16 03:29:27','2017-05-16 03:29:27'),(101,6,18,'2017-05-16 03:29:27','2017-05-16 03:29:27'),(102,7,18,'2017-05-16 03:29:27','2017-05-16 03:29:27'),(103,8,18,'2017-05-16 03:29:27','2017-05-16 03:29:27'),(104,9,18,'2017-05-16 03:29:28','2017-05-16 03:29:28'),(105,10,18,'2017-05-16 03:29:28','2017-05-16 03:29:28'),(106,11,18,'2017-05-16 03:29:28','2017-05-16 03:29:28'),(107,3,20,'2017-05-16 03:30:44','2017-05-16 03:30:44'),(108,4,20,'2017-05-16 03:30:44','2017-05-16 03:30:44'),(109,5,20,'2017-05-16 03:30:44','2017-05-16 03:30:44'),(110,6,20,'2017-05-16 03:30:44','2017-05-16 03:30:44'),(111,7,20,'2017-05-16 03:30:44','2017-05-16 03:30:44'),(112,8,20,'2017-05-16 03:30:44','2017-05-16 03:30:44'),(113,9,20,'2017-05-16 03:30:44','2017-05-16 03:30:44'),(114,10,20,'2017-05-16 03:30:44','2017-05-16 03:30:44'),(115,11,20,'2017-05-16 03:30:44','2017-05-16 03:30:44'),(116,9,21,'2017-06-04 00:11:44','2017-06-04 00:11:44');
/*!40000 ALTER TABLE `course_video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(225) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_video` varchar(225) DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `categories_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (2,'Khoa hoc giai tri','khoa hoc giai tri','uploads/course/810aa25fb9fde44b2498626779213944.png','DAAAAAA',NULL,'AAAAAAA','25','AAAAA',1,0,1,1,NULL,'2017-03-31 02:16:03'),(3,'Khoa hoc tieng anh','khoa-hoc-tieng-anh','uploads/course/f3ccdd27d2000e3f9255a7e3e2c48800.jpg','<p>Day la khoa hoc tieng anh</p>\r\n',NULL,'<p>Khoa hoc hay</p>\r\n','15000','10',1,45,1,0,'2017-03-31 02:23:48','2017-05-21 08:17:18'),(4,'Khoa hoc ke toan','khoa-hoc-ke-toan','uploads/course/156005c5baf40ff51a327f1c34f2975b.jpg','<p>Khoa hoc ke toan cho moi nguoi&nbsp;</p>\r\n',NULL,'<p>Hay</p>\r\n','100000','15',1,45,1,0,'2017-03-31 02:27:22','2017-06-06 09:03:52'),(5,'Khoa hoc tre con','khoa-hoc-tre-con','uploads/course/799bad5a3b514f096e69bbc4a7896cd9.jpg','<p>Khoa hoc tre con</p>\r\n',NULL,'<p>Chi danh cho tre con</p>\r\n','1000','5',1,0,1,0,'2017-03-31 02:28:18','2017-03-31 02:28:18'),(6,'Khoa hoc ke toan tong hop','khoa-hoc-ke-toan-tong-hop','uploads/course/d0096ec6c83575373e3a21d129ff8fef.jpg','<p>Khoa hoc ke toan tong hop</p>\r\n',NULL,'<p>Kho lam</p>\r\n','15000','15',1,45,0,0,'2017-03-31 02:29:08','2017-05-16 11:14:03'),(7,'Khoa hoc tieng nhat so cap 3','khoa-hoc-tieng-nhat-so-cap-3','uploads/course/10fb15c77258a991b0028080a64fb42d.png','<p>TIeng nhat so cap</p>\r\n',NULL,'<p>Hay va de</p>\r\n','20000','25',1,0,1,0,'2017-03-31 02:31:50','2017-03-31 02:31:50'),(8,'Khoa hoc tieng nhat cho nguoi di lam','khoa-hoc-tieng-nhat-cho-nguoi-di-lam','uploads/course/61633bf12b536b5735ab1b0327584019.png','<p><iframe allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/KpbuBO7jcIw\" width=\"640\"></iframe>&nbsp;</p>\r\n','uploads/videos/5164acf60c7bc8111be345fa0b03505e.mp4','<p><em><span style=\"font-size:14pt\">Bạn c&oacute; biết rằng</span></em><em><span style=\"font-size:14pt\">&hellip;</span></em></p>\r\n\r\n<p><span style=\"font-size:14pt\"><strong>&gt;&nbsp;</strong>Mức th&ugrave; lao trung b&igrave;nh của nghề&nbsp;<strong>phi&ecirc;n dịch</strong>&nbsp;từ $15-20 /giờ&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><strong>&gt;&nbsp;</strong></span><span style=\"font-size:14pt\"><strong>Phi&ecirc;n dịch vi&ecirc;n</strong>&nbsp;c&oacute; thương hiệu tại c&aacute;c&nbsp;<strong>sự kiện</strong>&nbsp;lớn v&agrave; đ&ograve;i hỏi chuy&ecirc;n m&ocirc;n cao c&oacute; thể hơn $100 đ&ocirc; la/giờ</span></p>\r\n\r\n<p><em><span style=\"font-size:14pt\">------------------------</span></em></p>\r\n\r\n<p><em><span style=\"font-size:14pt\">Nhiều người cho rằng</span></em><em><span style=\"font-size:14pt\">&hellip;</span></em></p>\r\n\r\n<p><span style=\"font-size:14pt\">&ldquo;P</span><span style=\"font-size:14pt\">hi&ecirc;n dịch vi&ecirc;n th&ocirc;ng thạo&nbsp;<strong>NGOẠI NGỮ&nbsp;</strong>l&agrave; c&oacute; thể l&agrave;m phi&ecirc;n dịch được</span><span style=\"font-size:14pt\">&rdquo;</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">Đ&oacute; l&agrave; một quan niệm&nbsp;<strong>SAI LẦM</strong></span><span style=\"font-size:14pt\">!</span></p>\r\n\r\n<p><em><span style=\"font-size:14pt\">Phi&ecirc;n dịch vi&ecirc;n c&ograve;n cần nhiều hơn thế&hellip;</span></em></p>\r\n\r\n<p><strong><span style=\"font-size:14pt\">-------------------</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:14pt\">L&agrave;m thế n&agrave;o để:</span></strong></p>\r\n\r\n<p><span style=\"font-size:14pt\"><strong>&gt;&nbsp;</strong>R&egrave;n luyện kỹ năng, phương ph&aacute;p l&agrave;m việc của&nbsp;<strong>ng&agrave;nh phi&ecirc;n dịch</strong></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><strong>&gt;&nbsp;</strong>Diễn đạt &yacute; tưởng phức tạp từ n<strong>g&ocirc;n ngữ</strong>&nbsp;nguồn</span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><strong>&gt;&nbsp;</strong>Th&iacute;ch ứng với c&aacute;c h&igrave;nh thức phi&ecirc;n dịch thực địa, phi&ecirc;n dịch tại c&aacute;c cuộc họp 1-1, phi&ecirc;n dịch huấn luyện, hội thảo</span></p>\r\n\r\n<p><strong><span style=\"font-size:14pt\">Với kh&oacute;a học &ldquo;</span></strong><strong><span style=\"font-size:14pt\">PHI&Ecirc;N DỊCH SỰ KIỆN TH&Agrave;NH C&Ocirc;NG&rdquo;&nbsp;</span></strong><strong><span style=\"font-size:14pt\">của Giảng vi&ecirc;n&nbsp;</span></strong><span style=\"font-size:14pt\">Nguyễn Duy Bảo Khang&nbsp;<strong>sẽ đem lại cho bạn những kiến thức thực tiễn nhất, th&ocirc;ng qua những nội dung ch&iacute;nh sau:</strong></span></p>\r\n\r\n<p><span style=\"font-size:14pt\">1.&nbsp;</span><span style=\"font-size:14pt\">Giới thiệu: nghề phi&ecirc;n dịch v&agrave; nhu cầu trong x&atilde; hội hiện đại</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">2.&nbsp;</span><span style=\"font-size:14pt\">Giao tiếp với diễn giả, th&iacute;nh giả. Chuẩn bị trước sự kiện</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">3.&nbsp;</span><span style=\"font-size:14pt\">T&igrave;nh huống phi&ecirc;n dịch thực địa</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">4.&nbsp;</span><span style=\"font-size:14pt\">T&igrave;nh huống phi&ecirc;n dịch hội thảo lớn</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">5.&nbsp;</span><span style=\"font-size:14pt\">R&egrave;n luyện ng&ocirc;n ngữ, giọng n&oacute;i v&agrave; kĩ năng trong phi&ecirc;n dịch</span></p>\r\n\r\n<p><strong><span style=\"font-size:14pt\">-------------------</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:14pt\">Lợi &iacute;ch kh&oacute;a học:</span></strong></p>\r\n\r\n<p><span style=\"font-size:14pt\">-&nbsp;</span><span style=\"font-size:14pt\">Tăng tốc độ phản xạ v&agrave; khả năng đa nhiệm (multitasking)</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">-&nbsp;</span><span style=\"font-size:14pt\">Tăng khả năng diễn đạt &yacute; tưởng phức tạp từ ng&ocirc;n ngữ nguồn</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">-&nbsp;</span><span style=\"font-size:14pt\">Học hỏi từ chuy&ecirc;n gia trong ng&agrave;nh với kinh nghiệm phi&ecirc;n dịch hơn 15 năm</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">B&ecirc;n cạnh c&aacute;c kiến thức kể tr&ecirc;n, Kyna.vn c&ograve;n đem đến cho bạn một trải nghiệm học tập v&ocirc; c&ugrave;ng th&uacute; vị:</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">-&nbsp;</span><span style=\"font-size:14pt\">Được học linh hoạt mọi l&uacute;c, mọi nơi tr&ecirc;n nhiều thiết bị như m&aacute;y t&iacute;nh, điện thoại, m&aacute;y t&iacute;nh bảng,...</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">-&nbsp;</span><span style=\"font-size:14pt\">Được tham gia thảo luận v&agrave; đặt c&acirc;u hỏi cho giảng vi&ecirc;n kh&ocirc;ng kh&aacute;c g&igrave; c&aacute;c kh&oacute;a học trực tiếp.</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">-&nbsp;</span><span style=\"font-size:14pt\">Chỉ cần thanh to&aacute;n học ph&iacute; một lần để sở hữu kh&oacute;a học trọn đời, c&oacute; thể học lại bất cứ khi n&agrave;o t&ugrave;y th&iacute;ch.</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">H&atilde;y đăng k&yacute; ngay để nắm bắt xu hướng marketing trong thời đại mới. Ch&uacute;c bạn c&oacute; được nhiều kiến thức bổ &iacute;ch khi</span></p>\r\n','15000','25',1,45,1,0,'2017-03-31 02:32:19','2017-05-17 20:33:45'),(9,'nguyen van A ','nguyen-van-a-','uploads/course/396ef7d23bb35e7c09c8091ad4ea7bf1.jpg','',NULL,'<p>khoas hocj hay&nbsp;</p>\r\n','123456','12',1,29,0,0,'2017-04-30 03:32:55','2017-05-14 07:13:23'),(10,'khoa học ngắn hạn ','khoa-học-ngắn-han-','uploads/course/95f9103cba6abfc939c4a87a7ab8ef50.png','','uploads/videos/9eda259a47bf1a510a25468a4ab89c56.mp4','<p>nội dung&nbsp;</p>\r\n','200000','20',1,29,0,0,'2017-04-30 03:35:52','2017-05-16 04:25:38'),(11,'khoa hoc dac biet ','khoa-hoc-dac-biet-','uploads/course/4601e52781847d135919bf2aa062e675.png','<p><iframe allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/lcE43XBpN8U\" width=\"640\"></iframe></p>\r\n',NULL,'<p><em><span style=\"font-size:14pt\">Bạn c&oacute; biết rằng</span></em><em><span style=\"font-size:14pt\">&hellip;</span></em></p>\r\n\r\n<p><span style=\"font-size:14pt\"><strong>&gt;&nbsp;</strong>Mức th&ugrave; lao trung b&igrave;nh của nghề&nbsp;<strong>phi&ecirc;n dịch</strong>&nbsp;từ $15-20 /giờ&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><strong>&gt;&nbsp;</strong></span><span style=\"font-size:14pt\"><strong>Phi&ecirc;n dịch vi&ecirc;n</strong>&nbsp;c&oacute; thương hiệu tại c&aacute;c&nbsp;<strong>sự kiện</strong>&nbsp;lớn v&agrave; đ&ograve;i hỏi chuy&ecirc;n m&ocirc;n cao c&oacute; thể hơn $100 đ&ocirc; la/giờ</span></p>\r\n\r\n<p><em><span style=\"font-size:14pt\">------------------------</span></em></p>\r\n\r\n<p><em><span style=\"font-size:14pt\">Nhiều người cho rằng</span></em><em><span style=\"font-size:14pt\">&hellip;</span></em></p>\r\n\r\n<p><span style=\"font-size:14pt\">&ldquo;P</span><span style=\"font-size:14pt\">hi&ecirc;n dịch vi&ecirc;n th&ocirc;ng thạo&nbsp;<strong>NGOẠI NGỮ&nbsp;</strong>l&agrave; c&oacute; thể l&agrave;m phi&ecirc;n dịch được</span><span style=\"font-size:14pt\">&rdquo;</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">Đ&oacute; l&agrave; một quan niệm&nbsp;<strong>SAI LẦM</strong></span><span style=\"font-size:14pt\">!</span></p>\r\n\r\n<p><em><span style=\"font-size:14pt\">Phi&ecirc;n dịch vi&ecirc;n c&ograve;n cần nhiều hơn thế&hellip;</span></em></p>\r\n\r\n<p><strong><span style=\"font-size:14pt\">-------------------</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:14pt\">L&agrave;m thế n&agrave;o để:</span></strong></p>\r\n\r\n<p><span style=\"font-size:14pt\"><strong>&gt;&nbsp;</strong>R&egrave;n luyện kỹ năng, phương ph&aacute;p l&agrave;m việc của&nbsp;<strong>ng&agrave;nh phi&ecirc;n dịch</strong></span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><strong>&gt;&nbsp;</strong>Diễn đạt &yacute; tưởng phức tạp từ n<strong>g&ocirc;n ngữ</strong>&nbsp;nguồn</span></p>\r\n\r\n<p><span style=\"font-size:14pt\"><strong>&gt;&nbsp;</strong>Th&iacute;ch ứng với c&aacute;c h&igrave;nh thức phi&ecirc;n dịch thực địa, phi&ecirc;n dịch tại c&aacute;c cuộc họp 1-1, phi&ecirc;n dịch huấn luyện, hội thảo</span></p>\r\n\r\n<p><strong><span style=\"font-size:14pt\">Với kh&oacute;a học &ldquo;</span></strong><strong><span style=\"font-size:14pt\">PHI&Ecirc;N DỊCH SỰ KIỆN TH&Agrave;NH C&Ocirc;NG&rdquo;&nbsp;</span></strong><strong><span style=\"font-size:14pt\">của Giảng vi&ecirc;n&nbsp;</span></strong><span style=\"font-size:14pt\">Nguyễn Duy Bảo Khang&nbsp;<strong>sẽ đem lại cho bạn những kiến thức thực tiễn nhất, th&ocirc;ng qua những nội dung ch&iacute;nh sau:</strong></span></p>\r\n\r\n<p><span style=\"font-size:14pt\">1.&nbsp;</span><span style=\"font-size:14pt\">Giới thiệu: nghề phi&ecirc;n dịch v&agrave; nhu cầu trong x&atilde; hội hiện đại</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">2.&nbsp;</span><span style=\"font-size:14pt\">Giao tiếp với diễn giả, th&iacute;nh giả. Chuẩn bị trước sự kiện</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">3.&nbsp;</span><span style=\"font-size:14pt\">T&igrave;nh huống phi&ecirc;n dịch thực địa</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">4.&nbsp;</span><span style=\"font-size:14pt\">T&igrave;nh huống phi&ecirc;n dịch hội thảo lớn</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">5.&nbsp;</span><span style=\"font-size:14pt\">R&egrave;n luyện ng&ocirc;n ngữ, giọng n&oacute;i v&agrave; kĩ năng trong phi&ecirc;n dịch</span></p>\r\n\r\n<p><strong><span style=\"font-size:14pt\">-------------------</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:14pt\">Lợi &iacute;ch kh&oacute;a học:</span></strong></p>\r\n\r\n<p><span style=\"font-size:14pt\">-&nbsp;</span><span style=\"font-size:14pt\">Tăng tốc độ phản xạ v&agrave; khả năng đa nhiệm (multitasking)</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">-&nbsp;</span><span style=\"font-size:14pt\">Tăng khả năng diễn đạt &yacute; tưởng phức tạp từ ng&ocirc;n ngữ nguồn</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">-&nbsp;</span><span style=\"font-size:14pt\">Học hỏi từ chuy&ecirc;n gia trong ng&agrave;nh với kinh nghiệm phi&ecirc;n dịch hơn 15 năm</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">B&ecirc;n cạnh c&aacute;c kiến thức kể tr&ecirc;n, Kyna.vn c&ograve;n đem đến cho bạn một trải nghiệm học tập v&ocirc; c&ugrave;ng th&uacute; vị:</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">-&nbsp;</span><span style=\"font-size:14pt\">Được học linh hoạt mọi l&uacute;c, mọi nơi tr&ecirc;n nhiều thiết bị như m&aacute;y t&iacute;nh, điện thoại, m&aacute;y t&iacute;nh bảng,...</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">-&nbsp;</span><span style=\"font-size:14pt\">Được tham gia thảo luận v&agrave; đặt c&acirc;u hỏi cho giảng vi&ecirc;n kh&ocirc;ng kh&aacute;c g&igrave; c&aacute;c kh&oacute;a học trực tiếp.</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">-&nbsp;</span><span style=\"font-size:14pt\">Chỉ cần thanh to&aacute;n học ph&iacute; một lần để sở hữu kh&oacute;a học trọn đời, c&oacute; thể học lại bất cứ khi n&agrave;o t&ugrave;y th&iacute;ch.<img alt=\"\" src=\"/ckfinder/userfiles/images/2.jpg\" style=\"border-style:solid; border-width:1px; height:90px; width:100px\" />&nbsp;ban c&oacute; thể đangư k&yacute; hocj ngay từ b&acirc;y giờ&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:14pt\">H&atilde;y đăng k&yacute; ngay để nắm bắt xu hướng marketing trong thời đại mới. Ch&uacute;c bạn c&oacute; được nhiều kiến thức bổ &iacute;ch khi&nbsp;</span><a href=\"https://kyna.vn/danh-sach-khoa-hoc\" rel=\"noopener\" style=\"box-sizing: inherit; background-color: transparent; color: rgb(80, 173, 78); touch-action: manipulation;\" target=\"_blank\"><strong><span style=\"font-size:14pt\">học tại kyna.vn</span></strong></a><strong><span style=\"font-size:14pt\">.</span></strong></p>\r\n','120000','11',1,46,0,0,'2017-04-30 05:10:54','2017-05-16 08:43:05'),(12,'khóa học hóa học ','khoa-học-hoa-học-','uploads/course/28d7b55e86d83d34dd98e4863a245941.jpg','<p><iframe allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/4kbg-BC4640\" width=\"640\"></iframe></p>\r\n','uploads/videos/99da0f65930f7334a3907d5e2997e01c.mp4','<p>kh&oacute;a học n&agrave;y thật l&agrave; th&uacute; vị&nbsp;</p>\r\n','1000000','10',1,46,0,1,'2017-05-16 03:52:43','2017-06-05 07:35:09'),(13,'khóa học cho mọi nhà ','khoa-học-cho-mọi-nha-','uploads/course/eec0447b8944954ad9150db350553ec4.jpg',NULL,'uploads/videos/a23bf66cdc86d439a4f687f3fdb329dc.mp4','<p>kh&oacute;a học tuyệt vời&nbsp;</p>\r\n','100000','10',1,45,1,0,'2017-06-19 05:44:59','2017-06-19 05:44:59');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folders`
--

DROP TABLE IF EXISTS `folders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `folders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folders`
--

LOCK TABLES `folders` WRITE;
/*!40000 ALTER TABLE `folders` DISABLE KEYS */;
INSERT INTO `folders` VALUES (1,'video moi ','video-moi-',0,1,1,'2017-03-21 19:51:21','2017-06-22 10:03:11'),(2,'video đep','video-dep',0,1,1,'2017-03-21 22:05:06','2017-06-22 10:03:15'),(3,'video hay ','video-hay-',0,1,1,'2017-03-21 22:05:20','2017-06-22 10:03:22'),(4,'bai1','bai1',1,1,0,'2017-05-30 00:14:39','2017-05-30 00:14:39'),(5,'bai 2','bai-2',0,1,1,'2017-05-30 00:15:38','2017-06-22 10:03:27'),(6,'bai3','bai3',1,1,0,'2017-06-07 08:35:46','2017-06-07 08:37:45'),(7,'video hay nhat ','video-hay-nhat-',1,1,0,'2017-06-22 10:02:39','2017-06-22 10:02:39');
/*!40000 ALTER TABLE `folders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formular`
--

DROP TABLE IF EXISTS `formular`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `type` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formular`
--

LOCK TABLES `formular` WRITE;
/*!40000 ALTER TABLE `formular` DISABLE KEYS */;
INSERT INTO `formular` VALUES (65,'18d9a880-65a0-4b02-b8df-69282d6d5749.jpg','uploads/formular/afee6b1386d9c09ecc8cd3cc6d87d164.jpg',NULL,352,0),(66,'18028_1195602_67649_image.png','uploads/formular/bd9c42b32e7fa203b6a8828e4126cc542017-06-09 09:44:36.png',101,NULL,0),(67,'18028_1195602_67649_image.png','uploads/formular/bd9c42b32e7fa203b6a8828e4126cc542017-06-09 10:27:59.png',102,NULL,0);
/*!40000 ALTER TABLE `formular` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(10) unsigned NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `format` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`book_id`),
  KEY `fk_images_books1_idx` (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (79,68,'qepO_Kana2.jpeg','image/jpeg','jpeg','53.1 Kb','qepO_Kana2.jpeg',1,1,'2017-03-21 01:10:29','2017-03-21 01:26:21'),(80,68,'DV5l_Kana3.jpg','image/jpeg','jpg','34.0 Kb','DV5l_Kana3.jpg',1,1,'2017-03-21 01:10:29','2017-03-21 01:30:01'),(81,69,'g2zB_Kana2.jpeg','image/jpeg','jpeg','53.1 Kb','g2zB_Kana2.jpeg',1,1,'2017-03-21 01:11:29','2017-03-21 01:30:08'),(82,69,'Ej0q_Kana3.jpg','image/jpeg','jpg','34.0 Kb','Ej0q_Kana3.jpg',1,1,'2017-03-21 01:11:29','2017-03-21 01:30:04'),(83,69,'uploads/images/4670ee39ab8238f341eb43a23758c1d5.jpg','image/jpeg','jpg','50.5 Kb','4670ee39ab8238f341eb43a23758c1d5.jpg',1,0,'2017-03-21 01:27:19','2017-03-21 01:27:19'),(84,70,'uploads/images/c6591288a3a358188a898cd08407b639.jpeg','image/jpeg','jpeg','53.1 Kb','c6591288a3a358188a898cd08407b639.jpeg',1,0,'2017-03-21 01:37:42','2017-03-21 01:37:42'),(85,70,'uploads/images/e16b070e63f38796b3a7586a291ff98f.jpg','image/jpeg','jpg','34.0 Kb','e16b070e63f38796b3a7586a291ff98f.jpg',1,0,'2017-03-21 01:37:42','2017-03-21 01:37:42'),(86,71,'uploads/images/c6591288a3a358188a898cd08407b639.jpeg','image/jpeg','jpeg','53.1 Kb','c6591288a3a358188a898cd08407b639.jpeg',1,0,'2017-03-21 01:47:28','2017-03-21 01:47:28'),(87,71,'uploads/images/e16b070e63f38796b3a7586a291ff98f.jpg','image/jpeg','jpg','34.0 Kb','e16b070e63f38796b3a7586a291ff98f.jpg',1,0,'2017-03-21 01:47:28','2017-03-21 01:47:28'),(88,89,'uploads/images/f3ccdd27d2000e3f9255a7e3e2c48800.jpg','image/jpeg','jpg','31.6 Kb','f3ccdd27d2000e3f9255a7e3e2c48800.jpg',1,0,'2017-04-30 03:30:23','2017-04-30 03:30:23'),(89,90,'uploads/images/8fb04e494c0e8f5daf3771ed9cbf26d5.png','image/png','png','180.3 Kb','8fb04e494c0e8f5daf3771ed9cbf26d5.png',1,0,'2017-05-13 07:34:18','2017-05-13 07:34:18'),(90,91,'uploads/images/c1cf807a3497b6857cf250befd08ae77.jpg','image/jpeg','jpg','47.4 Kb','c1cf807a3497b6857cf250befd08ae77.jpg',1,0,'2017-06-05 08:10:56','2017-06-05 08:10:56'),(91,91,'uploads/images/fa245eef3d3da1880c225f235fbd823c.jpg','image/jpeg','jpg','34.0 Kb','fa245eef3d3da1880c225f235fbd823c.jpg',1,0,'2017-06-05 08:10:56','2017-06-05 08:10:56'),(92,92,'uploads/images/22bcc90ed44b8cd0a0a3abfebf6a9999.jpg','image/jpeg','jpg','37.5 Kb','22bcc90ed44b8cd0a0a3abfebf6a9999.jpg',1,0,'2017-06-15 09:17:23','2017-06-15 09:17:23'),(93,92,'uploads/images/f4009e89dbf5edeb2446173f7edf3405.jpg','image/jpeg','jpg','60.4 Kb','f4009e89dbf5edeb2446173f7edf3405.jpg',1,0,'2017-06-15 09:17:24','2017-06-15 09:17:24'),(94,92,'uploads/images/b60c3ba3c9d909c6ccf690f6a54b1393.jpg','image/jpeg','jpg','58.7 Kb','b60c3ba3c9d909c6ccf690f6a54b1393.jpg',1,0,'2017-06-15 09:17:24','2017-06-15 09:17:24'),(95,93,'uploads/images/ec358829695b12ffe8fbee79f0b3a561.jpg','image/jpeg','jpg','60.4 Kb','ec358829695b12ffe8fbee79f0b3a561.jpg',1,0,'2017-06-23 17:58:24','2017-06-23 17:58:24'),(96,93,'uploads/images/06f08f1a846cae8b0bd2ea77324782d8.jpg','image/jpeg','jpg','58.7 Kb','06f08f1a846cae8b0bd2ea77324782d8.jpg',1,0,'2017-06-23 17:58:24','2017-06-23 17:58:24'),(97,93,'uploads/images/e569356b41bcf272924e26316a8e44a2.png','image/png','png','364.5 Kb','e569356b41bcf272924e26316a8e44a2.png',1,0,'2017-06-23 17:58:24','2017-06-23 17:58:24');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `key_batch`
--

DROP TABLE IF EXISTS `key_batch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `key_batch` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `batch_id` int(10) unsigned NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `key` varchar(225) DEFAULT NULL,
  `count_view` int(11) DEFAULT '0',
  PRIMARY KEY (`id`,`batch_id`),
  KEY `fk_key_batch_batches1_idx` (`batch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `key_batch`
--

LOCK TABLES `key_batch` WRITE;
/*!40000 ALTER TABLE `key_batch` DISABLE KEYS */;
INSERT INTO `key_batch` VALUES (1,1,1,0,NULL,'2017-05-03 11:47:01','123456',20),(2,1,4,0,'2017-04-27 01:49:14','2017-04-27 02:50:46','',0),(3,1,5,0,'2017-04-27 01:51:30','2017-04-27 08:08:21','123456789',0),(4,1,6,0,'2017-04-27 08:05:46','2017-04-27 08:06:56','abc123456789',10),(5,1,7,0,'2017-05-03 01:53:44','2017-05-03 01:53:44','0123456abcdef',20),(6,1,8,0,'2017-05-11 10:05:01','2017-05-11 10:05:01','0919929292',15),(7,1,9,0,'2017-05-11 18:12:09','2017-05-11 18:12:09','000000',20),(8,1,10,0,'2017-05-16 11:31:03','2017-05-16 11:31:03','0213456789',2000),(9,1,11,0,'2017-05-18 21:19:26','2017-05-18 21:19:26','0213456',3),(10,1,12,0,'2017-05-26 01:22:40','2017-05-26 01:22:40','0213456789',10);
/*!40000 ALTER TABLE `key_batch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2017_01_22_190244_entrust_setup_tables',1),(2,'2017_02_25_193122_add_module_column_to_permission_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_detail` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(10) unsigned NOT NULL,
  `order_id` int(11) unsigned NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `batch_id` int(10) unsigned NOT NULL,
  `room_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `number` int(11) DEFAULT '0',
  PRIMARY KEY (`id`,`book_id`,`order_id`,`course_id`,`batch_id`),
  KEY `fk_order_detail_orders1_idx` (`order_id`),
  KEY `fk_order_detail_books1_idx` (`book_id`),
  KEY `fk_order_detail_batches1_idx` (`batch_id`),
  KEY `fk_order_detail_courses1_idx` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=189 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_detail`
--

LOCK TABLES `order_detail` WRITE;
/*!40000 ALTER TABLE `order_detail` DISABLE KEYS */;
INSERT INTO `order_detail` VALUES (170,0,140,13,0,0,'2017-06-19 06:24:23','2017-06-19 06:24:23',0),(171,0,141,0,16,0,'2017-06-19 06:49:18','2017-06-19 06:49:18',0),(172,0,142,0,16,0,'2017-06-19 06:52:26','2017-06-19 06:52:26',0),(173,0,143,0,16,0,'2017-06-19 07:04:26','2017-06-19 07:04:26',0),(174,0,144,0,15,0,'2017-06-20 06:47:20','2017-06-20 06:47:20',0),(175,0,145,0,15,0,'2017-06-20 07:04:06','2017-06-20 07:04:06',0),(176,0,146,13,0,0,'2017-06-20 07:12:58','2017-06-20 07:12:58',0),(177,0,147,13,0,0,'2017-06-20 07:14:47','2017-06-20 07:14:47',0),(178,0,148,0,0,1,'2017-06-20 07:39:25','2017-06-20 07:39:25',0),(179,0,149,13,0,0,'2017-06-20 09:54:41','2017-06-20 09:54:41',0),(180,0,150,13,0,0,'2017-06-23 04:05:55','2017-06-23 04:05:55',0),(181,0,151,13,0,0,'2017-06-23 04:08:38','2017-06-23 04:08:38',0),(182,0,152,13,0,0,'2017-06-23 06:47:03','2017-06-23 06:47:03',0),(183,0,153,13,0,0,'2017-06-25 04:48:45','2017-06-25 04:48:45',0),(184,93,154,0,0,0,'2017-06-26 04:37:36','2017-06-26 04:37:36',1),(185,0,155,13,0,0,'2017-06-26 07:11:39','2017-06-26 07:11:39',0),(186,93,156,0,0,0,'2017-06-26 07:16:00','2017-06-26 07:16:00',1),(187,0,157,13,0,0,'2017-06-26 07:53:46','2017-06-26 07:53:46',0),(188,0,158,0,16,0,'2017-06-26 09:17:25','2017-06-26 09:17:25',0);
/*!40000 ALTER TABLE `order_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `receive_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `receive_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` double(20,2) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `discount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT '1',
  `user_id` int(10) unsigned NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_orders_users1_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (140,'cuong','cau giay','0123456789','admin@gmail.com',90000.00,'course','0','0','',0,1,0,'2017-06-19 06:24:23','2017-06-20 07:03:26'),(141,'cuong','cau giay','0123456789','admin@gmail.com',90000.00,'batch','0','0','',0,1,0,'2017-06-19 06:49:18','2017-06-20 07:00:06'),(142,'Đỗ Mạnh Cường','khongten667@gmail.com','0','khongten667@gmail.com',90000.00,'batch','0','0','',2,31,0,'2017-06-19 06:52:26','2017-06-19 06:53:30'),(143,'cuong','cau giay','0123456789','admin@gmail.com',90000.00,'batch','0','0','',0,1,0,'2017-06-19 07:04:26','2017-06-20 06:59:45'),(144,'cuong','cau giay','0123456789','admin@gmail.com',90000.00,'batch','0','0','',2,1,0,'2017-06-20 06:47:19','2017-06-23 06:43:28'),(145,'cuong','cau giay','0123456789','admin@gmail.com',90000.00,'batch','0','0','',2,1,0,'2017-06-20 07:04:06','2017-06-20 07:16:09'),(146,'cuong','cau giay','0123456789','admin@gmail.com',90000.00,'course','0','0','',1,1,0,'2017-06-20 07:12:58','2017-06-20 07:12:58'),(147,'cuong','cau giay','0123456789','admin@gmail.com',90000.00,'course','0','0','',0,1,0,'2017-06-20 07:14:47','2017-06-20 07:14:47'),(148,'cuong','cau giay','0123456789','admin@gmail.com',100000.00,'room','0','0','',2,1,0,'2017-06-20 07:39:25','2017-06-20 07:39:53'),(149,'cuong','cau giay','0123456789','admin@gmail.com',90000.00,'course','0','0','',3,1,0,'2017-06-20 09:54:41','2017-06-21 04:29:45'),(150,'cuong','cau giay','0123456789','admin@gmail.com',90000.00,'course','0','0','',0,1,0,'2017-06-23 04:05:55','2017-06-23 04:05:55'),(151,'Đỗ Mạnh Cường','khongten667@gmail.com','0','khongten667@gmail.com',90000.00,'course','0','0','',2,31,0,'2017-06-23 04:08:38','2017-06-25 04:50:54'),(152,'Đỗ Mạnh Cường','khongten667@gmail.com','0','khongten667@gmail.com',90000.00,'course','0','0','',2,31,0,'2017-06-23 06:47:03','2017-06-23 06:47:59'),(153,'Đỗ Mạnh Cường','khongten667@gmail.com','0','khongten667@gmail.com',90000.00,'course','0','0','',2,31,0,'2017-06-25 04:48:44','2017-06-25 04:59:20'),(154,'Đỗ Mạnh Cường','khongten667@gmail.com','0','khongten667@gmail.com',54000.00,'book','0','0','',2,31,0,'2017-06-26 04:37:36','2017-06-26 04:39:07'),(155,'Đỗ Mạnh Cường','khongten667@gmail.com','0','khongten667@gmail.com',90000.00,'course','0','0','',0,31,0,'2017-06-26 07:11:39','2017-06-26 07:11:39'),(156,'Đỗ Mạnh Cường','khongten667@gmail.com','0','khongten667@gmail.com',54000.00,'book','0','0','',2,31,0,'2017-06-26 07:15:59','2017-06-26 07:16:18'),(157,'Đỗ Mạnh Cường','khongten667@gmail.com','0','khongten667@gmail.com',90000.00,'course','0','0','',2,31,0,'2017-06-26 07:53:46','2017-06-26 07:54:13'),(158,'Đỗ Mạnh Cường','khongten667@gmail.com','0','khongten667@gmail.com',90000.00,'batch','0','0','',2,31,0,'2017-06-26 09:17:25','2017-06-26 09:22:10');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,2),(2,2),(3,2),(4,2),(5,2),(5,4),(6,2),(6,4),(7,2),(7,4),(8,2),(8,4),(9,2),(10,2),(11,2),(12,2),(13,2),(14,2),(15,2),(16,2),(17,2),(17,3),(18,2),(18,3),(19,2),(19,3),(20,2),(20,3),(25,2),(26,2),(27,2),(28,2),(29,2),(30,2),(31,2),(32,2),(33,2),(34,2),(35,2),(36,2);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `module` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'role-list','role','Display Role Listing','See only Listing Of Role','2017-02-24 17:11:34','2017-02-25 05:54:07'),(2,'role-create','role','Create Role','Create New Role','2017-02-24 17:11:34','2017-02-25 05:54:07'),(3,'role-edit','role','Edit Role','Edit Role','2017-02-24 17:11:34','2017-02-25 05:54:07'),(4,'role-delete','role','Delete Role','Delete Role','2017-02-24 17:11:34','2017-02-25 05:54:07'),(5,'course-list','course','Display course Listing','See only Listing Of Item','2017-02-24 17:11:34','2017-02-25 05:54:07'),(6,'course-create','course','Create course','Create New Item','2017-02-24 17:11:34','2017-02-25 05:54:08'),(7,'course-edit','course','Edit course','Edit Item','2017-02-24 17:11:34','2017-02-25 05:54:08'),(8,'course-delete','course','Delete course','Delete Item','2017-02-24 17:11:34','2017-02-25 05:54:08'),(9,'user-list','user','User List','Permission user-list for user module','2017-02-25 05:48:29','2017-02-25 06:04:24'),(10,'user-create','user','User Create','Permission user-create for user module','2017-02-25 05:48:29','2017-02-25 06:04:24'),(11,'user-edit','user','User Edit','Permission user-edit for user module','2017-02-25 05:48:29','2017-02-25 06:04:24'),(12,'user-delete','user','User Delete','Permission user-delete for user module','2017-02-25 05:48:29','2017-02-25 06:04:24'),(13,'category-list','category','CATEGORY LIST','Permission category-list for category module','2017-02-26 21:21:08','2017-02-26 21:21:08'),(14,'category-create','category','CATEGORY CREATE','Permission category-create for category module','2017-02-26 21:21:08','2017-02-26 21:21:08'),(15,'category-edit','category','CATEGORY EDIT','Permission category-edit for category module','2017-02-26 21:21:08','2017-02-26 21:21:08'),(16,'category-delete','category','CATEGORY DELETE','Permission category-delete for category module','2017-02-26 21:21:08','2017-02-26 21:21:08'),(17,'pay-list','pay','pay LIST','Permission pay-list for ringtone module','2017-02-26 22:39:23','2017-02-26 22:39:23'),(18,'pay-create','pay','pay CREATE','Permission pay-create for ringtone module','2017-02-26 22:39:23','2017-02-26 22:39:23'),(19,'pay-edit','pay','PAY EDIT','Permission pay-edit for ringtone module','2017-02-26 22:39:23','2017-02-26 22:39:23'),(20,'pay-delete','pay','PAY DELETE','Permission pay-delete for ringtone module','2017-02-26 22:39:23','2017-02-26 22:39:23'),(21,'setting-list','setting','SETTING LIST','Permission setting-list for setting module','2017-02-27 05:29:48','2017-02-27 05:29:48'),(22,'setting-create','setting','SETTING CREATE','Permission setting-create for setting module','2017-02-27 05:29:48','2017-02-27 05:29:48'),(23,'setting-edit','setting','SETTING EDIT','Permission setting-edit for setting module','2017-02-27 05:29:48','2017-02-27 05:29:48'),(24,'setting-delete','setting','SETTING DELETE','Permission setting-delete for setting module','2017-02-27 05:29:48','2017-02-27 05:29:48'),(25,'book-list','book','Display book Listing','See only Listing Of Item',NULL,NULL),(26,'book-create','book','book course','Create New Item',NULL,NULL),(27,'book-edit','book','edit book','edit book',NULL,NULL),(28,'book-delete','book','delete book','delete book ',NULL,NULL),(29,'test-list','test','list test','list test',NULL,NULL),(30,'test-create','test','create test','create test',NULL,NULL),(31,'test-edit','test','edit test','edit test',NULL,NULL),(32,'test-delete','test','delete test','delete test',NULL,NULL),(33,'room-list','room','list room','list room',NULL,NULL),(34,'room-create','room','create room ','create room ',NULL,NULL),(35,'room-edit','room','edit room','edit room',NULL,NULL),(36,'room-delete','room','delete room','delete room',NULL,NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`users_id`),
  KEY `fk_profiles_users1_idx` (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,1,'cuong','domanh','2017-05-02','cau giay','0123456789',1,0,NULL,NULL),(9,13,'cuong','domanh',NULL,'cau giay','0123456789',1,0,'2017-05-16 11:04:33','2017-05-16 11:04:33'),(10,18,'yen gio','hai',NULL,'caugiay','1689354023',1,0,'2017-05-17 03:08:54','2017-05-17 03:08:54'),(11,19,'abc','ljlj',NULL,'jl','0123',1,0,'2017-05-17 03:33:03','2017-05-17 03:33:03'),(12,20,'aaaa','aaaa',NULL,'aaaa','aaa',1,0,'2017-05-17 03:34:27','2017-05-17 03:34:27'),(13,21,'k','k',NULL,'k','22222',1,0,'2017-05-17 18:45:40','2017-05-17 18:45:40'),(14,22,'nguyen van a','aaa',NULL,'cau giay','1689354023',1,0,'2017-05-20 00:55:30','2017-05-20 00:55:30'),(15,23,'cuongdomanh1','cuong',NULL,'caugiay','0123456',1,0,'2017-05-24 02:02:56','2017-05-24 02:02:56'),(16,25,'cuongdomanh1234','cuon',NULL,'cg','012345699',1,0,'2017-05-24 03:49:21','2017-05-24 03:49:21'),(17,26,'nva','nv',NULL,'lang','0123456',1,0,'2017-05-25 01:46:38','2017-05-25 01:46:38'),(18,31,'Đỗ Mạnh Cường','Đỗ Mạnh Cường',NULL,'khongten667@gmail.com','0',1,0,'2017-06-16 10:19:17','2017-06-16 10:19:17'),(19,32,'Shini Vanchido','Shini Vanchido',NULL,'','0',1,0,'2017-06-16 14:50:49','2017-06-16 14:50:49');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_comment`
--

DROP TABLE IF EXISTS `question_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_comment`
--

LOCK TABLES `question_comment` WRITE;
/*!40000 ALTER TABLE `question_comment` DISABLE KEYS */;
INSERT INTO `question_comment` VALUES (57,101,1,'thu 6 ngay 13 thnag 2',1,'2017-06-12 02:41:39','2017-06-12 03:08:11'),(58,101,1,'ádsa',0,'2017-06-12 14:15:25','2017-06-12 14:15:25'),(59,101,1,'CAU NAY BI SAI',0,'2017-06-12 14:16:57','2017-06-12 14:16:57'),(60,101,1,'CAU NAY BI SAI',0,'2017-06-12 14:16:58','2017-06-12 14:16:58'),(61,102,1,'trai tim o dau ',0,'2017-06-12 14:17:34','2017-06-12 14:17:34'),(62,101,1,'asda',0,'2017-06-12 14:17:51','2017-06-12 14:17:51'),(63,101,1,'asda',0,'2017-06-12 14:17:56','2017-06-12 14:17:56'),(64,102,1,'sadsa',0,'2017-06-12 14:18:20','2017-06-12 14:18:20'),(65,102,1,'sai roi nhe',0,'2017-06-12 14:34:41','2017-06-12 14:34:41');
/*!40000 ALTER TABLE `question_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_formular`
--

DROP TABLE IF EXISTS `question_formular`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_formular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formular_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `status` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` int(1) DEFAULT '0',
  PRIMARY KEY (`id`,`formular_id`,`question_id`),
  KEY `fk_question_formular_questions1_idx` (`question_id`),
  KEY `fk_question_formular_fomular1_idx` (`formular_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_formular`
--

LOCK TABLES `question_formular` WRITE;
/*!40000 ALTER TABLE `question_formular` DISABLE KEYS */;
/*!40000 ALTER TABLE `question_formular` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) DEFAULT NULL,
  `test_id` int(10) unsigned NOT NULL,
  `content` longtext,
  `explain` longtext,
  `score` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` int(1) DEFAULT '0',
  PRIMARY KEY (`id`,`test_id`),
  KEY `fk_questions_tests1_idx` (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (100,NULL,10,'<table align=\"center\" class=\"picture\" style=\"-webkit-font-smoothing:antialiased; background-attachment:initial; background-clip:initial; background-image:initial; background-origin:initial; background-position:initial; background-repeat:initial; background-size:initial; border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; color:rgb(85, 85, 85); font-family:helvetica,arial,sans-serif; font-size:14px; line-height:20px; margin:14px 0px; outline:0px; padding:0px; text-rendering:geometricPrecision; text-size-adjust:100%; vertical-align:baseline; width:560px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\"><img alt=\"Can canh xuong san xuat trong rung cua \'tap doan\' ma tuy lon nhat nuoc hinh anh 1\" src=\"http://znews-photo-td.zadn.vn/w1024/Uploaded/mfzhr/2017_06_02/map_dongnai_traco.jpg\" style=\"background:transparent; border:0px; box-sizing:border-box; display:block; height:auto; margin:0px; max-width:100%; outline:0px; padding:0px; text-rendering:geometricPrecision; text-size-adjust:100%; vertical-align:baseline; width:560px\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:baseline\">\r\n			<p>Căn nh&agrave; được &quot;tập đo&agrave;n&quot; ma t&uacute;y lớn nhất nước chọn l&agrave;m xưởng sản xuất nằm ở x&atilde; Tr&agrave; Cổ, huyện miền n&uacute;i T&acirc;n Ph&uacute;, Đồng Nai.&nbsp;</p>\r\n\r\n			<p>65.H&Igrave;nh n&agrave;y l&agrave; h&igrave;nh g&igrave; ?</p>\r\n\r\n			<p>66.ĐỊa phận n&agrave;y ở đ&acirc;u ?</p>\r\n\r\n			<p>67. dấu khoanh tr&ograve;n ở địa phận n&agrave;o &nbsp;?</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n','<p>65. Chỉ l&agrave; h&igrave;nh th&ocirc;i m&agrave; :&quot;&gt;<br />\r\n66. Việt nam<br />\r\n67. Khong</p>\r\n',40,1,'2017-06-02 20:42:29','2017-06-03 23:47:42',1),(101,NULL,10,'<p>xyz</p>\r\n','<p>ok babe :3</p>\r\n',10,1,'2017-06-09 02:44:36','2017-06-09 02:44:36',0),(102,NULL,10,'<p>lollol</p>\r\n','<p>abc xyz</p>\r\n',10,1,'2017-06-09 03:27:59','2017-06-09 03:27:59',0),(103,NULL,10,'<p>ABC</p>\r\n','<p>TIM X</p>\r\n',20,1,'2017-06-09 07:31:39','2017-06-09 07:31:39',0),(104,NULL,10,'<p>`sum(a+b)=((a**x)/2)`</p>\r\n','<p>ax+b</p>\r\n',40,1,'2017-06-12 16:27:15','2017-06-15 08:51:13',0),(105,NULL,14,'<p>1+1=?</p>\r\n','<p>2</p>\r\n',10,0,'2017-06-19 03:18:07','2017-06-19 03:18:07',0),(106,NULL,13,'<p>`sum(a+b)=int(x+y)`</p>\r\n','<p>`x+y(sum(a+b))`</p>\r\n',5,0,'2017-06-20 06:45:27','2017-06-20 06:45:27',0),(107,NULL,13,'<p>`sum(a+b)=x/y`</p>\r\n','<p>x**y=2</p>\r\n',2,0,'2017-06-23 15:45:22','2017-06-23 15:45:22',0);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (1,2),(13,4),(14,4);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (2,'admin','admin','quyen cao nhat','2017-05-16 23:50:43','2017-05-16 23:50:43'),(3,'quan lý hóa đơn ','quan ly hoa đơn','quan lý hóa đơn','2017-05-17 01:24:11','2017-05-17 01:24:11'),(4,'quản lý khóa học ','quản lý khóa học ','quản lý khóa học ','2017-06-16 06:51:04','2017-06-16 06:51:04');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_test`
--

DROP TABLE IF EXISTS `room_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_test` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`room_id`),
  KEY `fk_room_batch_rooms1_idx` (`room_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_test`
--

LOCK TABLES `room_test` WRITE;
/*!40000 ALTER TABLE `room_test` DISABLE KEYS */;
INSERT INTO `room_test` VALUES (1,1,13,1,'2017-06-15 03:00:46','2017-06-15 03:00:46');
/*!40000 ALTER TABLE `room_test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_user`
--

DROP TABLE IF EXISTS `room_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `is_deleted` varchar(45) DEFAULT '0',
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `scores_test` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_user`
--

LOCK TABLES `room_user` WRITE;
/*!40000 ALTER TABLE `room_user` DISABLE KEYS */;
INSERT INTO `room_user` VALUES (21,1,1,'2','0','2017-06-21 11:37:15','2017-06-21 11:37:15',13,NULL);
/*!40000 ALTER TABLE `room_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `id_room` varchar(45) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` float DEFAULT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `categories_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1,1,'2222','adsfasfsaf','adsfasfsaf',100000,'2017-06-20 01:00:00','2017-06-22 02:00:00',50,0,0,'2017-05-08 21:46:47','2017-06-20 07:53:55'),(4,1,'jljafj','phòng thi văn học ','phong-thi-van-học-',100000,'2017-06-21 01:00:00','2017-06-22 13:00:00',50,1,0,'2017-06-21 03:11:17','2017-06-21 03:11:17');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slides`
--

DROP TABLE IF EXISTS `slides`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slides` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slides`
--

LOCK TABLES `slides` WRITE;
/*!40000 ALTER TABLE `slides` DISABLE KEYS */;
INSERT INTO `slides` VALUES (3,'Qu?ng cáo 1','d27cae27321e05dca9b2b8390e9cc080.jpg','<p>123 abc</p>\r\n','demo 1',0,1,0,'2017-06-20 07:04:35','2017-06-20 07:04:35'),(4,'Qu?ng cao 2','0bae4a3ecd726b7e1d2bacf5a147b9f3.jpg','<p>abc xyz</p>\r\n','demo2',0,1,0,'2017-06-20 07:04:53','2017-06-20 07:04:53'),(5,'Quang cao 3','c4adebd6ada49271ae95aea6bb822f6a.jpg','<p>123 abcx</p>\r\n','123 abc',0,1,0,'2017-06-20 07:05:34','2017-06-20 07:15:07'),(6,'Quang cao 4','','<p>123 abc</p>\r\n','123 abc',1,1,0,'2017-06-20 07:50:55','2017-06-20 08:29:31');
/*!40000 ALTER TABLE `slides` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcribe`
--

DROP TABLE IF EXISTS `subcribe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcribe`
--

LOCK TABLES `subcribe` WRITE;
/*!40000 ALTER TABLE `subcribe` DISABLE KEYS */;
INSERT INTO `subcribe` VALUES (1,'khongten667@gmail.com','2017-05-06 01:19:51','2017-05-06 01:19:51'),(2,'khongten667@gmail.com','2017-05-06 01:20:28','2017-05-06 01:20:28'),(3,'nguyenvana@gmail.com','2017-05-06 01:20:51','2017-05-06 01:20:51'),(4,'','2017-05-13 03:12:38','2017-05-13 03:12:38');
/*!40000 ALTER TABLE `subcribe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'abc','abc',1,0,'2017-03-29 00:38:55','2017-05-02 09:34:24'),(2,'sach van hoc','sach-van-hoc',0,0,'2017-04-25 03:26:09','2017-05-02 09:34:11'),(3,'khoa học trên tuyệt vời ','khoa-học-tren-tuyet-vời-',0,0,'2017-04-25 08:52:11','2017-05-02 09:33:56'),(4,'khóa học hay nhất hành tinh','khoa-học-hay-nhat-hanh-tinh',0,0,'2017-05-02 09:59:55','2017-05-02 10:01:00'),(5,'khoa hoc thu vi ','khoa-hoc-thu-vi-',0,0,'2017-05-02 10:01:21','2017-05-02 10:01:21'),(6,'thẻ abcdef','the-abcdef',1,0,'2017-05-05 21:18:35','2017-05-05 21:18:35');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tests`
--

DROP TABLE IF EXISTS `tests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_score` double(8,2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `work_time` int(11) DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tests`
--

LOCK TABLES `tests` WRITE;
/*!40000 ALTER TABLE `tests` DISABLE KEYS */;
INSERT INTO `tests` VALUES (8,'đề thi tiếng anh online','de-thi-tieng-anh-online',40.00,1,0,40,1,'2017-05-16 11:32:33','2017-05-26 00:18:37'),(9,'đề thi tieengs anh 2','de-thi-tieengs-anh-2',100.00,1,1,100,1,'2017-05-16 11:33:01','2017-05-26 00:18:35'),(10,'bài thi 1 tiết ','bai-thi-1-tiet-',10.00,1,1,11,0,'2017-05-26 01:35:32','2017-06-08 03:48:50'),(11,'đề thi sinh học ','de-thi-sinh-học-',100.00,0,0,60,1,'2017-06-04 00:06:47','2017-06-04 00:08:48'),(12,'đề thi sinh học1 ','de-thi-sinh-học1-',100.00,0,0,60,0,'2017-06-04 00:08:42','2017-06-04 00:08:42'),(13,'bài thi 1 tiết ','bai-thi-1-tiet-',100.00,1,1,90,0,'2017-06-15 03:00:46','2017-06-15 03:00:46'),(14,'đề thi sinh học ','de-thi-sinh-học-',100.00,1,1,90,0,'2017-06-19 03:17:35','2017-06-19 03:17:35');
/*!40000 ALTER TABLE `tests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `units`
--

LOCK TABLES `units` WRITE;
/*!40000 ALTER TABLE `units` DISABLE KEYS */;
INSERT INTO `units` VALUES (1,'fhjkffsdg','1',1,0,NULL,NULL),(2,'abc','abc',1,0,NULL,NULL);
/*!40000 ALTER TABLE `units` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `upload_batch`
--

DROP TABLE IF EXISTS `upload_batch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `upload_batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `is_deleted` int(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `upload_batch`
--

LOCK TABLES `upload_batch` WRITE;
/*!40000 ALTER TABLE `upload_batch` DISABLE KEYS */;
INSERT INTO `upload_batch` VALUES (1,'Ph?n m?m facebook.xlsx','uploads/batch_file/ab39111d6137eb8f057da02dbf88ee10.xlsx','9.3 Kb',0,12,NULL,0,'2017-06-04 07:08:42','2017-06-04 07:08:42'),(19,'58bee39d5d1b1156dfc46935b2b70ccb.pdf','uploads/batch_file/58bee39d5d1b1156dfc46935b2b70ccb.pdf','698.7 Kb',0,19,NULL,1,'2017-06-02 21:36:53','2017-06-02 21:37:24'),(20,'45fb71c60e92f148667a50be5d5629df.pdf','uploads/batch_file/45fb71c60e92f148667a50be5d5629df.pdf','473.8 Kb',0,19,NULL,1,'2017-06-02 21:36:53','2017-06-02 21:57:31'),(21,'61982860d3974b35e6407676b17e5dfc.pdf','uploads/batch_file/61982860d3974b35e6407676b17e5dfc.pdf','918.4 Kb',0,19,NULL,1,'2017-06-02 21:36:53','2017-06-02 21:43:58'),(22,'957fd30108a297ebd545163ad8a8bad8.pdf','uploads/batch_file/957fd30108a297ebd545163ad8a8bad8.pdf','698.7 Kb',0,20,NULL,1,'2017-06-02 21:59:56','2017-06-02 22:02:18'),(23,'1a002438f54fab96d3de50ac66347427.pdf','uploads/batch_file/1a002438f54fab96d3de50ac66347427.pdf','473.8 Kb',0,20,NULL,0,'2017-06-02 21:59:56','2017-06-02 21:59:56'),(24,'2d4bc7ea7855766014915af81f481916.pdf','uploads/batch_file/2d4bc7ea7855766014915af81f481916.pdf','918.4 Kb',0,20,NULL,0,'2017-06-02 21:59:56','2017-06-02 21:59:56'),(25,'decdec5aaae2a55e5928b7ec0a12c0fa.png','uploads/batch_file/decdec5aaae2a55e5928b7ec0a12c0fa.png','366.0 Kb',0,21,NULL,0,'2017-06-02 22:09:26','2017-06-02 22:09:26'),(26,'ac5db34a93c7fa79efc490a0550a4f59.png','uploads/batch_file/ac5db34a93c7fa79efc490a0550a4f59.png','618.0 Kb',0,21,NULL,0,'2017-06-02 22:09:26','2017-06-02 22:09:26'),(27,'125cea8a5b473fccbe72848e98c1b67e.png','uploads/batch_file/125cea8a5b473fccbe72848e98c1b67e.png','516.2 Kb',0,21,NULL,0,'2017-06-02 22:09:26','2017-06-02 22:09:26'),(28,'f9ed0f8afa7e8558bc29ef5928463936.png','uploads/batch_file/f9ed0f8afa7e8558bc29ef5928463936.png','431.7 Kb',0,22,NULL,1,'2017-06-02 22:17:01','2017-06-02 22:44:12'),(29,'e55ce197760e58247929dbd5c6e88bea.png','uploads/batch_file/e55ce197760e58247929dbd5c6e88bea.png','496.9 Kb',0,22,NULL,1,'2017-06-02 22:17:01','2017-06-02 22:46:32'),(30,'2.png','uploads/batch_file/492256df8ba72a6ddf6fd1d4ee18ddf3.png','618.0 Kb',0,22,NULL,0,'2017-06-02 22:47:05','2017-06-02 22:47:05'),(31,'12.png','uploads/batch_file/3e2e7b6456a6cd7ad26c52334951b33f.png','492.5 Kb',0,23,NULL,1,'2017-06-03 00:34:22','2017-06-03 00:37:43'),(32,'?nh.png','uploads/batch_file/8e8ecc3b35bac39450cc01683371b0a9.png','796.7 Kb',0,23,NULL,1,'2017-06-03 00:35:14','2017-06-03 00:37:50'),(33,'12.png','uploads/batch_file/664cdb0521b3e97ea85cdbe2c36893ab.png','492.5 Kb',0,23,NULL,0,'2017-06-03 00:38:05','2017-06-03 00:38:05'),(34,'tp','uploads/video/b7c76da766164be008b9640127fd537f.jpg','47.4 Kb',1,NULL,31,0,'2017-06-07 16:49:31','2017-06-07 16:49:31'),(35,'a','uploads/video/b04fc2efb69f8fe562d11def0338df08.jpg','34.0 Kb',1,NULL,31,0,'2017-06-07 16:49:31','2017-06-07 16:49:31'),(36,'jafjlajfkl','uploads/video/49e4fa2b6b4fa20b714de6d4bae2c169.png','1,564.9 Kb',1,NULL,31,0,'2017-06-07 16:49:31','2017-06-07 16:49:31'),(37,'Kana3.jpg','uploads/video/d78b6de370406deb2c45feadb2c34daa.jpg','34.0 Kb',1,NULL,32,0,'2017-06-07 17:14:57','2017-06-07 17:14:57'),(38,'1.jpg','uploads/video/eafbf4ec3cff9a61bd362b52deed7cce.jpg','72.6 Kb',1,NULL,33,0,'2017-06-07 17:27:35','2017-06-07 17:27:35'),(40,'Kana.jpg','uploads/video/06ff9deaa3aef155f0720f46d1493ac6.jpg','47.4 Kb',1,NULL,34,0,'2017-06-08 09:02:48','2017-06-08 09:14:11'),(41,'Kana3.jpg','uploads/video/78a790d17167dfac1ad3d9c1c82ab1fd.jpg','34.0 Kb',1,NULL,34,1,'2017-06-08 09:02:48','2017-06-08 09:14:17'),(42,'Kana.jpg','uploads/video/a5d892d5c88bee0debdae754348fe544.jpg','47.4 Kb',1,NULL,34,0,'2017-06-08 09:22:44','2017-06-08 09:22:44'),(43,'Kana3.jpg','uploads/video/b26963a77d6f83990b6b952b1eadcd31.jpg','34.0 Kb',1,NULL,34,0,'2017-06-08 09:22:44','2017-06-08 09:22:44'),(44,'New-Microsoft-Word-Document.docx','uploads/video/7fa83efec20ebb21b49e626b9c66d737.docx','192.6 Kb',1,NULL,34,0,'2017-06-08 10:14:42','2017-06-08 10:14:42'),(46,'New-Microsoft-Word-Document.docx','uploads/batch_file/1da11d13f78c195aee5f7d155d9f0892.docx','192.6 Kb',0,10,NULL,1,'2017-06-08 10:48:45','2017-06-08 11:05:28'),(47,'a5d892d5c88bee0debdae754348fe544.jpg','uploads/batch_file/e7618104e11c2796cd2df96bab66c73b.jpg','47.4 Kb',1,10,NULL,1,'2017-06-08 11:05:10','2017-06-08 11:05:24'),(48,'gxd.mwb','uploads/batch_file/55388f6611c1e458967a73c1bd04c178.mwb','20.5 Kb',1,10,NULL,0,'2017-06-08 11:05:10','2017-06-08 11:05:10'),(49,'gxd.sql','uploads/batch_file/d2672740736b55d9622faf7d45cf82a8.sql','46.7 Kb',1,10,NULL,0,'2017-06-08 11:05:10','2017-06-08 11:05:10'),(50,'New-Microsoft','uploads/batch_file/bbae6fb1b4211496108535eaed944f1d.docx','192.6 Kb',1,10,NULL,0,'2017-06-08 11:06:07','2017-06-08 11:06:07');
/*!40000 ALTER TABLE `upload_batch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_batch`
--

DROP TABLE IF EXISTS `user_batch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `average_score` int(5) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `count` int(10) DEFAULT NULL,
  `secret_key` varchar(20) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` int(1) DEFAULT '0',
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_user_batch_users1_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_batch`
--

LOCK TABLES `user_batch` WRITE;
/*!40000 ALTER TABLE `user_batch` DISABLE KEYS */;
INSERT INTO `user_batch` VALUES (94,31,16,NULL,'2017-06-26 14:44:44',NULL,'',1,'2017-06-26 07:44:44','2017-06-26 07:44:44',0),(95,31,15,NULL,'2017-06-26 14:44:44',NULL,'',1,'2017-06-26 07:44:44','2017-06-26 07:44:44',0),(96,31,16,NULL,'2017-06-26 14:54:09',NULL,'XfcCKJK2',1,'2017-06-26 07:54:09','2017-06-26 07:54:09',0),(97,31,15,NULL,'2017-06-26 14:54:09',NULL,'XfcCKJK2',1,'2017-06-26 07:54:09','2017-06-26 07:54:09',0),(98,31,16,NULL,'2017-06-26 15:38:00',NULL,'',1,'2017-06-26 08:38:00','2017-06-26 08:38:00',0),(99,31,15,NULL,'2017-06-26 15:38:00',NULL,'',1,'2017-06-26 08:38:00','2017-06-26 08:38:00',0),(100,31,16,NULL,'2017-06-26 16:22:01',NULL,'HGhMAeFc',0,'2017-06-26 09:22:01','2017-06-26 09:22:01',0);
/*!40000 ALTER TABLE `user_batch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_batch_test`
--

DROP TABLE IF EXISTS `user_batch_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_batch_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_batch_test_id` int(11) NOT NULL,
  `test_id` int(11) DEFAULT NULL,
  `total_score` int(10) DEFAULT NULL,
  `answer_correct` int(10) DEFAULT NULL,
  `total_question` float DEFAULT NULL,
  `date_practical` datetime DEFAULT NULL,
  `count_practical` int(10) DEFAULT NULL,
  `secret_key` varchar(20) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` int(1) DEFAULT '0',
  PRIMARY KEY (`id`,`user_batch_test_id`),
  KEY `fk_user_batch_test_user_batch1_idx` (`user_batch_test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_batch_test`
--

LOCK TABLES `user_batch_test` WRITE;
/*!40000 ALTER TABLE `user_batch_test` DISABLE KEYS */;
INSERT INTO `user_batch_test` VALUES (115,94,14,NULL,NULL,NULL,NULL,7,NULL,0,'2017-06-26 07:44:44','2017-06-26 09:24:31',0),(116,95,13,7,NULL,NULL,NULL,10,NULL,0,'2017-06-26 07:44:44','2017-06-26 08:47:15',0),(117,96,14,NULL,NULL,NULL,NULL,11,NULL,0,'2017-06-26 07:54:09','2017-06-26 07:54:09',0),(118,97,13,NULL,NULL,NULL,NULL,10,NULL,0,'2017-06-26 07:54:09','2017-06-26 07:54:09',0),(119,98,14,NULL,NULL,NULL,NULL,11,NULL,0,'2017-06-26 08:38:00','2017-06-26 08:38:00',0),(120,99,13,NULL,NULL,NULL,NULL,10,NULL,0,'2017-06-26 08:38:00','2017-06-26 08:38:00',0),(121,100,14,NULL,NULL,NULL,NULL,11,NULL,0,'2017-06-26 09:22:02','2017-06-26 09:22:02',0);
/*!40000 ALTER TABLE `user_batch_test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_course`
--

DROP TABLE IF EXISTS `user_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `average_score` int(10) DEFAULT NULL,
  `encode` varchar(225) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `count` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `is_deleted` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_course`
--

LOCK TABLES `user_course` WRITE;
/*!40000 ALTER TABLE `user_course` DISABLE KEYS */;
INSERT INTO `user_course` VALUES (5,NULL,13,93,NULL,'hzhFXl9HkPXvzT0Y',NULL,NULL,'2017-06-26 07:07:32','2017-06-26 07:07:32',0,0),(6,NULL,13,93,NULL,'fCd3NVXyEQud4D2I',NULL,NULL,'2017-06-26 07:07:32','2017-06-26 07:07:32',0,0),(7,NULL,13,93,NULL,'aDurniu3cF2XoEcm',NULL,NULL,'2017-06-26 07:07:32','2017-06-26 07:07:32',0,0),(8,NULL,13,93,NULL,'tUXZgtDpziVuTdHp',NULL,NULL,'2017-06-26 07:07:32','2017-06-26 07:07:32',0,0),(9,NULL,13,93,NULL,'ldxNcgG54C5o4f4b',NULL,NULL,'2017-06-26 07:07:32','2017-06-26 07:07:32',0,0),(10,NULL,13,93,NULL,'FomBMhN1zSZDmLF1',NULL,NULL,'2017-06-26 07:07:32','2017-06-26 07:07:32',0,0),(11,NULL,13,93,NULL,'0ymJyDLcOS1YyKku',NULL,NULL,'2017-06-26 07:07:32','2017-06-26 07:07:32',0,0),(12,NULL,13,93,NULL,'0xaOS7Iza39oBtas',NULL,NULL,'2017-06-26 07:07:32','2017-06-26 07:07:32',0,0),(13,NULL,13,92,NULL,'hq522EMBOdxqcawd',NULL,NULL,'2017-06-26 07:08:44','2017-06-26 07:08:44',0,0),(14,NULL,13,92,NULL,'LLMKWzVqGSgmgywm',NULL,NULL,'2017-06-26 07:08:44','2017-06-26 07:08:44',0,0),(15,NULL,13,92,NULL,'l1V5cHZ0YhNoMspe',NULL,NULL,'2017-06-26 07:08:44','2017-06-26 07:08:44',0,0),(16,NULL,13,92,NULL,'NaM1XUBim66q0259',NULL,NULL,'2017-06-26 07:08:44','2017-06-26 07:08:44',0,0),(17,NULL,13,92,NULL,'jenorPAqRm1uP7zx',NULL,NULL,'2017-06-26 07:08:44','2017-06-26 07:08:44',0,0),(18,NULL,13,92,NULL,'0puOZYTTBauXzETn',NULL,NULL,'2017-06-26 07:08:45','2017-06-26 07:08:45',0,0),(19,31,13,92,NULL,'E87Yls2ePN1m7ln7',NULL,NULL,'2017-06-26 07:08:45','2017-06-26 08:37:59',1,0),(20,NULL,13,92,NULL,'1bbfsClyAjydu3gQ',NULL,NULL,'2017-06-26 07:08:45','2017-06-26 07:08:45',0,0),(21,NULL,13,92,NULL,'SiYso784syFaFFY9',NULL,NULL,'2017-06-26 07:08:45','2017-06-26 07:08:45',0,0),(22,NULL,13,92,NULL,'MiBKlcif2aqI2KRi',NULL,NULL,'2017-06-26 07:08:45','2017-06-26 07:08:45',0,0),(23,NULL,13,92,NULL,'tBhJD2n59MtaWQAM',NULL,NULL,'2017-06-26 07:08:45','2017-06-26 07:08:45',0,0),(24,NULL,13,92,NULL,'nowz5Ibi2DlaQ9Oi',NULL,NULL,'2017-06-26 07:08:45','2017-06-26 07:08:45',0,0),(25,NULL,13,92,NULL,'372pSRPBJkfTR4pp',NULL,NULL,'2017-06-26 07:08:45','2017-06-26 07:08:45',0,0),(26,NULL,13,92,NULL,'IuOmjoaQshl14Wxu',NULL,NULL,'2017-06-26 07:08:45','2017-06-26 07:08:45',0,0),(27,NULL,13,92,NULL,'CzJCbExl6fZ8Q4qn',NULL,NULL,'2017-06-26 07:08:45','2017-06-26 07:08:45',0,0),(28,NULL,13,92,NULL,'iq1ClQ00WiRojyUt',NULL,NULL,'2017-06-26 07:08:45','2017-06-26 07:08:45',0,0),(29,NULL,13,92,NULL,'5vIO0FHGhtRITmJH',NULL,NULL,'2017-06-26 07:08:45','2017-06-26 07:08:45',0,0),(30,NULL,13,92,NULL,'IwKONRAckrEIiMTx',NULL,NULL,'2017-06-26 07:08:45','2017-06-26 07:08:45',0,0),(31,NULL,13,92,NULL,'S2hBgxZ0Kyv74VCv',NULL,NULL,'2017-06-26 07:08:45','2017-06-26 07:08:45',0,0),(32,NULL,13,92,NULL,'26cbQpkNCENOzG44',NULL,NULL,'2017-06-26 07:08:46','2017-06-26 07:08:46',0,0),(33,NULL,13,92,NULL,'pMZZegSS5UowsvpX',NULL,NULL,'2017-06-26 07:08:46','2017-06-26 07:08:46',0,0),(34,NULL,13,92,NULL,'rsU8NfjVubrNphEa',NULL,NULL,'2017-06-26 07:08:46','2017-06-26 07:08:46',0,0),(35,NULL,13,92,NULL,'HnOcdjD39BUvvZxY',NULL,NULL,'2017-06-26 07:08:46','2017-06-26 07:08:46',0,0),(36,NULL,13,92,NULL,'gwHAT7hwgXWzaiJ7',NULL,NULL,'2017-06-26 07:08:46','2017-06-26 07:08:46',0,0),(37,NULL,13,92,NULL,'dRsMXhRcQn8Dfg6V',NULL,NULL,'2017-06-26 07:08:46','2017-06-26 07:08:46',0,0),(38,NULL,13,92,NULL,'4Xw8pZ48pzdTicSS',NULL,NULL,'2017-06-26 07:08:46','2017-06-26 07:08:46',0,0),(39,NULL,13,92,NULL,'wNw5R3ehxjK36Oat',NULL,NULL,'2017-06-26 07:08:46','2017-06-26 07:08:46',0,0),(40,NULL,13,92,NULL,'H2WOypNzr6iQTG1G',NULL,NULL,'2017-06-26 07:08:46','2017-06-26 07:08:46',0,0),(41,NULL,13,92,NULL,'ofRh1zXkhN8jdcm1',NULL,NULL,'2017-06-26 07:08:46','2017-06-26 07:08:46',0,0),(42,NULL,13,92,NULL,'BLlkvtXwKYzEeM1K',NULL,NULL,'2017-06-26 07:08:46','2017-06-26 07:08:46',0,0),(43,NULL,13,92,NULL,'cJwmn7LrWMxpPOHp',NULL,NULL,'2017-06-26 07:08:46','2017-06-26 07:08:46',0,0),(44,NULL,13,92,NULL,'l6cCIWJRDzTzC58i',NULL,NULL,'2017-06-26 07:08:46','2017-06-26 07:08:46',0,0),(45,NULL,13,92,NULL,'ofnLuUKWo8wj7DFk',NULL,NULL,'2017-06-26 07:08:46','2017-06-26 07:08:46',0,0),(46,NULL,13,92,NULL,'l0nklvK69a7pox7B',NULL,NULL,'2017-06-26 07:08:46','2017-06-26 07:08:46',0,0),(47,NULL,13,92,NULL,'nYlzR7cUcjHam5bs',NULL,NULL,'2017-06-26 07:08:47','2017-06-26 07:08:47',0,0),(48,NULL,13,92,NULL,'QRlJ0t9Yy5S8sJ7i',NULL,NULL,'2017-06-26 07:08:47','2017-06-26 07:08:47',0,0),(49,NULL,13,92,NULL,'7EhmV7kSsSZJjs6Z',NULL,NULL,'2017-06-26 07:08:47','2017-06-26 07:08:47',0,0),(50,NULL,13,92,NULL,'0cmOGbWONVBnxW49',NULL,NULL,'2017-06-26 07:08:47','2017-06-26 07:08:47',0,0),(51,NULL,13,92,NULL,'veljvKFtm075F2xa',NULL,NULL,'2017-06-26 07:08:47','2017-06-26 07:08:47',0,0),(52,NULL,13,92,NULL,'XNvQEafNbQGcdZfH',NULL,NULL,'2017-06-26 07:08:47','2017-06-26 07:08:47',0,0),(53,NULL,13,92,NULL,'fM9EIvWIuj5nXP2W',NULL,NULL,'2017-06-26 07:08:47','2017-06-26 07:08:47',0,0),(54,NULL,13,92,NULL,'vj88AenhyT5JLfDa',NULL,NULL,'2017-06-26 07:08:47','2017-06-26 07:08:47',0,0),(55,NULL,13,92,NULL,'Y7n1c2ZOB5iN2p0u',NULL,NULL,'2017-06-26 07:08:47','2017-06-26 07:08:47',0,0),(56,NULL,13,92,NULL,'zW0wouwEgOnMY5WT',NULL,NULL,'2017-06-26 07:08:47','2017-06-26 07:08:47',0,0),(57,NULL,13,92,NULL,'HxPyV9IhjhUBzkWY',NULL,NULL,'2017-06-26 07:08:47','2017-06-26 07:08:47',0,0),(58,NULL,13,92,NULL,'Ko0rkKlf5sIGel75',NULL,NULL,'2017-06-26 07:08:47','2017-06-26 07:08:47',0,0),(59,NULL,13,92,NULL,'rsuvT7hlby683oBU',NULL,NULL,'2017-06-26 07:08:47','2017-06-26 07:08:47',0,0),(60,NULL,13,92,NULL,'FisQW2jzTXPm7RSY',NULL,NULL,'2017-06-26 07:08:47','2017-06-26 07:08:47',0,0),(61,NULL,13,92,NULL,'hHGI5AtKVaWU2mCo',NULL,NULL,'2017-06-26 07:08:47','2017-06-26 07:08:47',0,0),(62,NULL,13,92,NULL,'6YtJ1bGPQ5o3DDRH',NULL,NULL,'2017-06-26 07:08:47','2017-06-26 07:08:47',0,0),(63,NULL,13,92,NULL,'8f6I9MskS9nDRT9p',NULL,NULL,'2017-06-26 07:08:48','2017-06-26 07:08:48',0,0),(64,NULL,13,92,NULL,'2m18DKizG3m3YW8H',NULL,NULL,'2017-06-26 07:08:48','2017-06-26 07:08:48',0,0),(65,NULL,13,92,NULL,'G1oFS8Or7VRLtiFZ',NULL,NULL,'2017-06-26 07:08:48','2017-06-26 07:08:48',0,0),(66,NULL,13,92,NULL,'kN9V1veDB1oN5SrC',NULL,NULL,'2017-06-26 07:08:48','2017-06-26 07:08:48',0,0),(67,NULL,13,92,NULL,'msUIgxGkmsGvtZeJ',NULL,NULL,'2017-06-26 07:08:48','2017-06-26 07:08:48',0,0),(68,NULL,13,92,NULL,'85CnVaU0742uozks',NULL,NULL,'2017-06-26 07:08:48','2017-06-26 07:08:48',0,0),(69,NULL,13,92,NULL,'97Hdw5RwRwX5Syvk',NULL,NULL,'2017-06-26 07:08:48','2017-06-26 07:08:48',0,0),(70,NULL,13,92,NULL,'3KFZyJzbAuzqj1gX',NULL,NULL,'2017-06-26 07:08:48','2017-06-26 07:08:48',0,0),(71,NULL,13,92,NULL,'uH7ZNJpOcMM8UQLN',NULL,NULL,'2017-06-26 07:08:48','2017-06-26 07:08:48',0,0),(72,NULL,13,92,NULL,'HY2IMxISmbdpeLX0',NULL,NULL,'2017-06-26 07:08:48','2017-06-26 07:08:48',0,0),(73,NULL,13,92,NULL,'x6O8vwEDcFG4b9xA',NULL,NULL,'2017-06-26 07:08:48','2017-06-26 07:08:48',0,0),(74,NULL,13,92,NULL,'2tOvoRNs3TcbF21C',NULL,NULL,'2017-06-26 07:08:48','2017-06-26 07:08:48',0,0),(75,NULL,13,92,NULL,'J2r6FdzqDW0gwX1b',NULL,NULL,'2017-06-26 07:08:48','2017-06-26 07:08:48',0,0),(76,NULL,13,92,NULL,'TwhhqegEinJNLS6n',NULL,NULL,'2017-06-26 07:08:48','2017-06-26 07:08:48',0,0),(77,NULL,13,92,NULL,'HkxdXV6QcjSyNKgd',NULL,NULL,'2017-06-26 07:08:48','2017-06-26 07:08:48',0,0),(78,NULL,13,92,NULL,'l98I9ITNn28XtxYv',NULL,NULL,'2017-06-26 07:08:48','2017-06-26 07:08:48',0,0),(79,NULL,13,92,NULL,'FgfWXSAr4MwXD6ii',NULL,NULL,'2017-06-26 07:08:49','2017-06-26 07:08:49',0,0),(80,NULL,13,92,NULL,'7YhpkBue00pKMwt3',NULL,NULL,'2017-06-26 07:08:49','2017-06-26 07:08:49',0,0),(81,NULL,13,92,NULL,'8gMYKiSfTwDiVDET',NULL,NULL,'2017-06-26 07:08:49','2017-06-26 07:08:49',0,0),(82,NULL,13,92,NULL,'m3gD0GEpgPJz5n7K',NULL,NULL,'2017-06-26 07:08:49','2017-06-26 07:08:49',0,0),(83,NULL,13,92,NULL,'aidqxpj5q0FBgN2v',NULL,NULL,'2017-06-26 07:08:49','2017-06-26 07:08:49',0,0),(84,NULL,13,92,NULL,'5DNchcvy4qxVh01v',NULL,NULL,'2017-06-26 07:08:49','2017-06-26 07:08:49',0,0),(85,NULL,13,92,NULL,'BhaWCLXFBjVgFrkJ',NULL,NULL,'2017-06-26 07:08:49','2017-06-26 07:08:49',0,0),(86,NULL,13,92,NULL,'qSMI0mYOTvEjqGQ3',NULL,NULL,'2017-06-26 07:08:49','2017-06-26 07:08:49',0,0),(87,NULL,13,92,NULL,'ne9g4gRnYpFIvAn9',NULL,NULL,'2017-06-26 07:08:49','2017-06-26 07:08:49',0,0),(88,NULL,13,92,NULL,'krBWWA8yLiCdXP5U',NULL,NULL,'2017-06-26 07:08:49','2017-06-26 07:08:49',0,0),(89,NULL,13,92,NULL,'bBxyVTSEKFaAyM9q',NULL,NULL,'2017-06-26 07:08:49','2017-06-26 07:08:49',0,0),(90,NULL,13,92,NULL,'m1pIpXF1obpMvQfa',NULL,NULL,'2017-06-26 07:08:49','2017-06-26 07:08:49',0,0),(91,NULL,13,92,NULL,'BgSWxoL9qoxRMo5T',NULL,NULL,'2017-06-26 07:08:49','2017-06-26 07:08:49',0,0),(92,NULL,13,92,NULL,'19zaxudNlSPaxTuC',NULL,NULL,'2017-06-26 07:08:49','2017-06-26 07:08:49',0,0),(93,NULL,13,92,NULL,'JQokglPlH3MH3sxs',NULL,NULL,'2017-06-26 07:08:49','2017-06-26 07:08:49',0,0),(94,NULL,13,92,NULL,'nWgcga9HiuhAORRv',NULL,NULL,'2017-06-26 07:08:49','2017-06-26 07:08:49',0,0),(95,NULL,13,92,NULL,'3bhjntxNreZvtKj6',NULL,NULL,'2017-06-26 07:08:50','2017-06-26 07:08:50',0,0),(96,NULL,13,92,NULL,'99sz1jYTAMI5sOM9',NULL,NULL,'2017-06-26 07:08:50','2017-06-26 07:08:50',0,0),(97,NULL,13,92,NULL,'M3z7zdTBCYRNHSwG',NULL,NULL,'2017-06-26 07:08:50','2017-06-26 07:08:50',0,0),(98,NULL,13,92,NULL,'nrB24fjHX3qdMwjX',NULL,NULL,'2017-06-26 07:08:50','2017-06-26 07:08:50',0,0),(99,NULL,13,92,NULL,'WSU4bvHhk7SZ6HLo',NULL,NULL,'2017-06-26 07:08:50','2017-06-26 07:08:50',0,0),(100,NULL,13,92,NULL,'HwhPQ4imvTaZtzR9',NULL,NULL,'2017-06-26 07:08:50','2017-06-26 07:08:50',0,0),(101,NULL,13,92,NULL,'qxWAMmuDeCOgQEdO',NULL,NULL,'2017-06-26 07:08:50','2017-06-26 07:08:50',0,0),(102,NULL,13,92,NULL,'G4SjHHUj0u9Uxzmq',NULL,NULL,'2017-06-26 07:08:50','2017-06-26 07:08:50',0,0),(103,NULL,13,92,NULL,'dK9Fbb6K7xtWyox8',NULL,NULL,'2017-06-26 07:08:50','2017-06-26 07:08:50',0,0),(104,NULL,13,92,NULL,'rxtj3JBQykiEQ1ng',NULL,NULL,'2017-06-26 07:08:50','2017-06-26 07:08:50',0,0),(105,NULL,13,92,NULL,'TeWfvsOSIAFaNASU',NULL,NULL,'2017-06-26 07:08:50','2017-06-26 07:08:50',0,0),(106,NULL,13,92,NULL,'mHihWTwyWt1VZTh2',NULL,NULL,'2017-06-26 07:08:50','2017-06-26 07:08:50',0,0),(107,NULL,13,92,NULL,'Ntlbtm10cSWiet6Z',NULL,NULL,'2017-06-26 07:08:50','2017-06-26 07:08:50',0,0),(108,NULL,13,92,NULL,'KUy5yjqbIrPQMxMq',NULL,NULL,'2017-06-26 07:08:50','2017-06-26 07:08:50',0,0),(109,NULL,13,92,NULL,'0j3l3vbyTZrO1kla',NULL,NULL,'2017-06-26 07:08:51','2017-06-26 07:08:51',0,0),(110,NULL,13,92,NULL,'uliFtEsQwaQRvPFo',NULL,NULL,'2017-06-26 07:08:51','2017-06-26 07:08:51',0,0),(111,NULL,13,92,NULL,'Jxd6opMFNZ5qXFut',NULL,NULL,'2017-06-26 07:08:51','2017-06-26 07:08:51',0,0),(112,NULL,13,92,NULL,'gD29W2wbmLxFcwlf',NULL,NULL,'2017-06-26 07:08:51','2017-06-26 07:08:51',0,0),(113,31,13,NULL,NULL,'XfcCKJK2','2017-06-26 14:54:08',NULL,'2017-06-26 07:54:08','2017-06-26 07:54:08',0,0);
/*!40000 ALTER TABLE `user_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_course_test`
--

DROP TABLE IF EXISTS `user_course_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_course_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_course_id` int(11) NOT NULL,
  `video_id` int(11) DEFAULT NULL,
  `total_score` int(10) DEFAULT NULL,
  `answer_correct` int(10) DEFAULT NULL,
  `total_question` int(10) DEFAULT NULL,
  `date_practical` datetime DEFAULT NULL,
  `count_practical` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` int(1) DEFAULT '0',
  PRIMARY KEY (`id`,`user_course_id`),
  KEY `fk_user_course_test_user_course1_idx` (`user_course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_course_test`
--

LOCK TABLES `user_course_test` WRITE;
/*!40000 ALTER TABLE `user_course_test` DISABLE KEYS */;
INSERT INTO `user_course_test` VALUES (51,4,2,NULL,NULL,NULL,NULL,10,0,'2017-06-26 07:44:44','2017-06-26 07:44:44',0),(52,4,3,NULL,NULL,NULL,NULL,10,0,'2017-06-26 07:44:44','2017-06-26 07:44:44',0),(53,113,2,NULL,NULL,NULL,NULL,10,0,'2017-06-26 07:54:09','2017-06-26 07:54:09',0),(54,113,3,NULL,NULL,NULL,NULL,10,0,'2017-06-26 07:54:09','2017-06-26 07:54:09',0),(55,19,2,NULL,NULL,NULL,NULL,10,0,'2017-06-26 08:37:59','2017-06-26 08:37:59',0),(56,19,3,NULL,NULL,NULL,NULL,10,0,'2017-06-26 08:37:59','2017-06-26 08:37:59',0);
/*!40000 ALTER TABLE `user_course_test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_keys`
--

DROP TABLE IF EXISTS `user_keys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `key_id` int(10) unsigned NOT NULL,
  `count_practical` int(11) NOT NULL,
  `expiry_time` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`,`key_id`),
  KEY `fk_user_keys_users1_idx` (`user_id`),
  KEY `fk_user_keys_key_batch1` (`key_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_keys`
--

LOCK TABLES `user_keys` WRITE;
/*!40000 ALTER TABLE `user_keys` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_keys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_score`
--

DROP TABLE IF EXISTS `user_score`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `test_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `score` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_score`
--

LOCK TABLES `user_score` WRITE;
/*!40000 ALTER TABLE `user_score` DISABLE KEYS */;
INSERT INTO `user_score` VALUES (1,NULL,1,13,13,'2017-06-16',0,'2017-06-16 10:26:37','2017-06-16 10:26:37'),(2,12,NULL,10,1,'2017-06-16',10,'2017-06-16 14:49:18','2017-06-16 14:49:18'),(3,12,NULL,10,1,'2017-06-17',0,'2017-06-17 03:29:06','2017-06-17 03:29:06'),(4,12,NULL,10,1,'2017-06-17',10,'2017-06-17 03:54:24','2017-06-17 03:54:24'),(5,12,NULL,10,1,'2017-06-19',40,'2017-06-19 01:57:27','2017-06-19 01:57:27'),(6,12,NULL,10,10,'2017-06-19',20,'2017-06-19 02:00:07','2017-06-19 02:00:07'),(7,12,NULL,10,10,'2017-06-19',0,'2017-06-19 02:19:04','2017-06-19 02:19:04'),(8,16,NULL,14,14,'2017-06-19',1,'2017-06-19 05:42:02','2017-06-19 05:42:02'),(9,16,NULL,14,14,'2017-06-19',0,'2017-06-19 05:42:58','2017-06-19 05:42:58'),(10,16,NULL,14,14,'2017-06-19',0,'2017-06-19 05:43:27','2017-06-19 05:43:27'),(11,16,NULL,14,14,'2017-06-19',1,'2017-06-19 07:41:03','2017-06-19 07:41:03'),(12,16,NULL,14,1,'2017-06-19',1,'2017-06-19 08:29:15','2017-06-19 08:29:15'),(13,16,NULL,14,1,'2017-06-19',1,'2017-06-19 08:40:33','2017-06-19 08:40:33'),(14,16,NULL,14,31,'2017-06-19',0,'2017-06-19 08:48:22','2017-06-19 08:48:22'),(15,16,NULL,14,1,'2017-06-19',0,'2017-06-19 08:50:09','2017-06-19 08:50:09'),(16,16,NULL,14,1,'2017-06-19',1,'2017-06-19 09:21:09','2017-06-19 09:21:09'),(17,15,NULL,13,1,'2017-06-22',3,'2017-06-22 09:32:10','2017-06-22 09:32:10'),(18,15,NULL,13,1,'2017-06-22',4,'2017-06-22 09:32:33','2017-06-22 09:32:33'),(19,15,NULL,13,1,'2017-06-22',4,'2017-06-22 09:32:52','2017-06-22 09:32:52'),(20,15,NULL,13,1,'2017-06-22',4,'2017-06-22 09:34:47','2017-06-22 09:34:47'),(21,15,NULL,13,1,'2017-06-22',0,'2017-06-22 09:40:46','2017-06-22 09:40:46'),(22,15,NULL,13,1,'2017-06-23',4,'2017-06-23 08:19:01','2017-06-23 08:19:01'),(23,15,NULL,13,1,'2017-06-23',5,'2017-06-23 08:19:09','2017-06-23 08:19:09'),(24,15,NULL,13,1,'2017-06-23',5,'2017-06-23 08:19:15','2017-06-23 08:19:15'),(25,15,NULL,13,1,'2017-06-23',5,'2017-06-23 08:19:21','2017-06-23 08:19:21'),(26,15,NULL,13,1,'2017-06-23',5,'2017-06-23 08:21:15','2017-06-23 08:21:15'),(27,15,NULL,13,1,'2017-06-23',0,'2017-06-23 08:27:53','2017-06-23 08:27:53'),(28,15,NULL,13,1,'2017-06-23',0,'2017-06-23 08:36:10','2017-06-23 08:36:10'),(29,15,NULL,13,1,'2017-06-23',5,'2017-06-23 08:36:21','2017-06-23 08:36:21'),(30,15,NULL,13,1,'2017-06-23',5,'2017-06-23 08:36:31','2017-06-23 08:36:31'),(31,15,NULL,13,1,'2017-06-23',5,'2017-06-23 08:36:42','2017-06-23 08:36:42'),(32,15,NULL,13,1,'2017-06-23',1,'2017-06-23 10:38:13','2017-06-23 10:38:13'),(33,15,NULL,13,1,'2017-06-23',3,'2017-06-23 16:56:57','2017-06-23 16:56:57'),(34,15,NULL,13,1,'2017-06-23',0,'2017-06-23 16:57:56','2017-06-23 16:57:56'),(35,15,NULL,13,1,'2017-06-23',7,'2017-06-23 16:58:03','2017-06-23 16:58:03'),(36,15,NULL,13,1,'2017-06-23',0,'2017-06-23 16:58:45','2017-06-23 16:58:45'),(37,15,NULL,13,1,'2017-06-23',0,'2017-06-23 16:58:57','2017-06-23 16:58:57'),(38,15,NULL,13,1,'2017-06-23',7,'2017-06-23 16:59:27','2017-06-23 16:59:27'),(39,15,NULL,13,1,'2017-06-24',0,'2017-06-23 17:03:18','2017-06-23 17:03:18'),(40,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:03:40','2017-06-23 17:03:40'),(41,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:06:01','2017-06-23 17:06:01'),(42,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:06:03','2017-06-23 17:06:03'),(43,15,NULL,13,1,'2017-06-24',0,'2017-06-23 17:06:12','2017-06-23 17:06:12'),(44,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:06:17','2017-06-23 17:06:17'),(45,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:06:37','2017-06-23 17:06:37'),(46,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:06:42','2017-06-23 17:06:42'),(47,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:06:45','2017-06-23 17:06:45'),(48,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:06:49','2017-06-23 17:06:49'),(49,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:06:56','2017-06-23 17:06:56'),(50,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:07:02','2017-06-23 17:07:02'),(51,15,NULL,13,1,'2017-06-24',1,'2017-06-23 17:08:14','2017-06-23 17:08:14'),(52,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:08:20','2017-06-23 17:08:20'),(53,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:08:28','2017-06-23 17:08:28'),(54,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:08:32','2017-06-23 17:08:32'),(55,15,NULL,13,1,'2017-06-24',2,'2017-06-23 17:08:55','2017-06-23 17:08:55'),(56,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:09:02','2017-06-23 17:09:02'),(57,15,NULL,13,1,'2017-06-24',1,'2017-06-23 17:10:04','2017-06-23 17:10:04'),(58,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:10:10','2017-06-23 17:10:10'),(59,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:10:16','2017-06-23 17:10:16'),(60,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:10:24','2017-06-23 17:10:24'),(61,15,NULL,13,1,'2017-06-24',0,'2017-06-23 17:12:17','2017-06-23 17:12:17'),(62,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:12:22','2017-06-23 17:12:22'),(63,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:12:27','2017-06-23 17:12:27'),(64,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:13:53','2017-06-23 17:13:53'),(65,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:14:08','2017-06-23 17:14:08'),(66,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:18:42','2017-06-23 17:18:42'),(67,15,NULL,13,1,'2017-06-24',7,'2017-06-23 17:18:46','2017-06-23 17:18:46'),(68,15,NULL,13,31,'2017-06-26',0,'2017-06-26 03:14:49','2017-06-26 03:14:49'),(69,15,NULL,13,31,'2017-06-26',7,'2017-06-26 03:14:56','2017-06-26 03:14:56'),(70,15,NULL,13,31,'2017-06-26',7,'2017-06-26 03:15:01','2017-06-26 03:15:01'),(71,15,NULL,13,31,'2017-06-26',7,'2017-06-26 03:15:07','2017-06-26 03:15:07'),(72,16,NULL,14,31,'2017-06-26',0,'2017-06-26 05:34:18','2017-06-26 05:34:18'),(73,16,NULL,14,31,'2017-06-26',0,'2017-06-26 05:34:26','2017-06-26 05:34:26'),(74,15,NULL,13,31,'2017-06-26',1,'2017-06-26 08:46:18','2017-06-26 08:46:18'),(75,15,NULL,13,31,'2017-06-26',7,'2017-06-26 08:46:54','2017-06-26 08:46:54'),(76,15,NULL,13,31,'2017-06-26',2,'2017-06-26 08:47:05','2017-06-26 08:47:05'),(77,15,NULL,13,31,'2017-06-26',7,'2017-06-26 08:47:15','2017-06-26 08:47:15'),(78,15,NULL,13,31,'2017-06-26',7,'2017-06-26 08:47:19','2017-06-26 08:47:19');
/*!40000 ALTER TABLE `user_score` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_test`
--

DROP TABLE IF EXISTS `user_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `score` float(11,0) DEFAULT NULL,
  `access` int(11) DEFAULT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`,`test_id`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_test`
--

LOCK TABLES `user_test` WRITE;
/*!40000 ALTER TABLE `user_test` DISABLE KEYS */;
INSERT INTO `user_test` VALUES (1,1,10,30,NULL,0,'2017-05-26 01:40:16','2017-06-03 21:51:58'),(2,14,10,0,NULL,0,'2017-05-26 01:41:16','2017-05-26 01:41:16'),(3,29,10,10,NULL,0,'2017-06-02 20:49:26','2017-06-15 13:40:15'),(4,1,20,0,NULL,0,'2017-06-14 17:49:14','2017-06-14 17:49:14'),(5,31,10,0,NULL,0,'2017-06-16 14:45:09','2017-06-16 14:45:09'),(6,32,10,60,NULL,0,'2017-06-16 14:51:11','2017-06-16 15:04:24');
/*!40000 ALTER TABLE `user_test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `facebook_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnai` varchar(225) DEFAULT NULL,
  `info` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `balance` double(20,2) DEFAULT NULL,
  `coin` int(11) DEFAULT NULL,
  `actived_code` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_activated` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `active_role` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(225) DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,'cuong','admin@gmail.com','$2y$10$JdQ9p9rYMg0mNBvZ4hjwwu3GOwHF/SVUCg8Sr6s4cFIa8cuvPwBMq','https://graph.facebook.com/v2.8/1688359814793209/picture?type=normal','là một giảng viên có nhiều năm kinh nghiệm',345.00,23,'23',1,1,1,'4SOQDY5eKoKuqWV0gKdYdz6XCz3yc31duQX3dC6jz7IhtsVABf7b6DLqgYo5',0,NULL,'2017-06-23 07:12:21'),(13,NULL,'cuong','huyendoan1809@gmail.com','$2y$10$Dy1ItpuL/2BcWw9IeGt8eOUaeJC.NX7mpCniscW0UEx1A13QBzr/G',NULL,'',NULL,NULL,'abcdeftghik',1,1,1,'rWl8LDurFzAlxhWDgumqPjXWTWU5Lw1e8fSKCPjsmDX5YiBTJspXPAFXyHrl',0,'2017-05-16 11:04:33','2017-06-21 03:13:15'),(14,NULL,'huyendoan','changtraihonguyen95@gmail.com','$2y$10$.zJawYzxd0KioGaaYrYnMevq0xbbO4Hbw73TEM05Q77XKfyk7ZpN2',NULL,'',NULL,NULL,'0a2d209fe8e59ecc1f4035b54372d188',1,1,1,'jAgqeQH4ygI63Ve9lWxs7ANKYHunAjU8wPVXwEXgcR55xjXPyt7bVS4VhRSM',0,'2017-05-28 19:25:27','2017-06-16 07:41:55'),(15,NULL,'anhLiem','aliem@gmail.com','$2y$10$xarqd7K3p14zRuSWKvhYneGtWwcHrqjwtLKJvGPPjEbaZ8KoVcYce',NULL,NULL,NULL,NULL,'b6ecba56147150f12d7c06783f0d2d6d',1,1,0,'Qi3uim6Kg76mNYYNBNQVyb0ZoWQ4HdfCUZN8UzI3FHrzSCZ4EJhBRek4EStR',1,'2017-05-17 00:05:29','2017-05-22 02:03:48'),(16,NULL,'van thi anh','dm@gmail.com','$2y$10$SyW7/y1titJUqN64zJ7oyOuvXR8HhUb4rIlWn5oUyZlYbv7LYqhEu',NULL,NULL,NULL,NULL,'be8a9ed48d403fb80cff2c6788c8fae3',1,1,1,'mqjNZk9lS7DM2U7HrjEoEfzrS4XacDh2WbLBInQav4tFSbvcNzdb4ocReOsG',0,'2017-05-17 01:51:01','2017-05-22 01:59:37'),(17,NULL,'domanhcuong','domanhcuong@gmail.com','$2y$10$EZ0N8/WX9hskca4leCUzXOgZ4/pvtU6Kn94lnWGdfc9prrh4Yf6pW',NULL,NULL,NULL,NULL,'9e5296d8b03faaaead3d197bc496c236',1,1,1,'HJkVTvYyRALgY2kWGwicjwj4Z6B17PELCkdOixEVSD2glnmLqYWMmsrGFFZj',0,'2017-05-17 01:52:32','2017-05-17 01:53:10'),(18,NULL,'yen gio','yengio@gmail.com','$2y$10$8jneBfgw/gZGN2nb/pkw7.sTOGaiIohbMq/VaF7a4G/xwuhHMEm0y',NULL,NULL,NULL,NULL,'abcdeftghik',1,NULL,0,'MP9dzj0enRL0cPYJXPNJSDsc2osm6yCGGiXhqkgKVyKoTmFAfWOyjjpjvStw',0,'2017-05-17 03:08:54','2017-05-22 02:09:28'),(19,NULL,'abc','k@gmail.com','$2y$10$A863h/wmu43Tsb4xhdT72uYaV2oBmIXLFiRiaWL7s6SpY/ZZ6lopO',NULL,NULL,NULL,NULL,'abcdeftghik',1,NULL,0,'4H9K3iY82YYIG3z8glOMOWRmn8RKFmsJ6FI5Xk8TiT0XvupYyiQuYkLLwu5e',0,'2017-05-17 03:33:03','2017-05-17 03:33:18'),(20,NULL,'aaaa','a@gmail.com','$2y$10$dHjedZIG3wcIvZSCgzFArun6g9cB0atGVNVqNoxYTBO7Q1JEXGc4q',NULL,NULL,NULL,NULL,'abcdeftghik',1,NULL,0,NULL,0,'2017-05-17 03:34:27','2017-05-17 03:34:27'),(21,NULL,'k','cuong@gmail.com','$2y$10$cDH8fm3LKc/2Y/Jiis12/uHkfgGUw6BMTufjhBmIftVzNpYNbjGTq',NULL,NULL,NULL,NULL,'abcdeftghik',1,NULL,0,'LhNxdLnCZVetorPvwozS3BEcKZ2OIhFQde0gnDLUZb9UDbThZqQxDJ01l1hN',0,'2017-05-17 18:45:40','2017-05-17 18:52:44'),(22,NULL,'nguyen van a','ab@gmail.com','$2y$10$Q8KEvBUxDqZodWyCtEeh2eQCT/ErGLnD0gc2h3D1oOju89gfU59aW',NULL,NULL,NULL,NULL,'abcdeftghik',1,NULL,0,'J9kbH8pzJmUWaikFhwksrf2vLPDLCLLygVhGK3SyL1Wh8M0Aw7e17JwwQ7ar',0,'2017-05-20 00:55:30','2017-05-20 00:59:16'),(23,NULL,'cuongdomanh1','anhcuong@gmail.com','$2y$10$7K357eVtofJDdNAhmXg46eVl4Es0IHbbkfnjXW7wl9Ux48uFAqZva',NULL,NULL,NULL,NULL,'abcdeftghik',1,NULL,0,'MorY6woGOOi9ICQAjOqN9rPqe09HEkX9ITxZ26dS2Zw38fRCxzgEoepuOuxb',0,'2017-05-24 02:02:56','2017-05-24 02:49:46'),(24,NULL,'cuongdomanh','anhcuongno1@gmail.com','$2y$10$yRNs2c4iVU12hHsUTlKlkeuhs/KWc6xCwbwpqMRjKzY/QZ2G3fmQG',NULL,NULL,NULL,NULL,'a77921a8371b08a251f80f3730692ca1',1,1,1,'AVwvxerVmccW4xXCFPBaJI1LABQoBYZvEOh1NCAx8yTChObwrkAPTtobaedh',0,'2017-05-24 02:05:02','2017-05-24 02:28:10'),(25,NULL,'cuongdomanh1234','cuongdomanhnd1@gmail.com','$2y$10$1yZ8.XGcc6W3zBjWjS2W1.kLgu4TAmWUNHZv1yGAR.vT9zoMhepDy',NULL,NULL,NULL,NULL,'abcdeftghik',1,NULL,0,'mJeZqsGkI2pAbTGx7erZsZzA03P4ZP8Dv8I9oc6UGlzibng4Syw31dKFpJMq',0,'2017-05-24 03:49:21','2017-05-24 03:49:45'),(26,NULL,'nva','nva@gmail.com','$2y$10$HxEWPzcj/zBrfWK13df33OYJztk6LVHRLtjj7mlBAfmez/3f4Of0O',NULL,NULL,NULL,NULL,'abcdeftghik',1,NULL,0,'YXq5axP0ikH86xvc65HXzZ5i5Kf8jcMxam1uwT3LC9AyOpZUBQD7DCtY2Wgs',0,'2017-05-25 01:46:38','2017-05-25 02:22:00'),(28,'1939309362949943','Nguyễn Doãn Huyên','changtraihonguyen95@gmail.com','',NULL,NULL,NULL,NULL,NULL,1,NULL,0,'bH0MHGoVuEzFzwR8tX7V49insBV06THbOAIAMK7KzTfkUQyleQ0j7gGhLIYS',0,'2017-05-29 03:52:54','2017-05-29 18:57:58'),(30,'1374449462624901','Võ Lê Huy','moe.tan.desu.yo@gmail.com','','https://graph.facebook.com/v2.8/1374449462624901/picture?type=normal',NULL,NULL,NULL,NULL,1,NULL,0,'kxkNymfvW900OSwb7HtLZ5JNFglltuwFjg8hjMXLTy1295aLzZjd1mTCEK0v',0,'2017-06-07 10:46:51','2017-06-09 09:45:47'),(31,'1688359814793209','Đỗ Mạnh Cường','khongten667@gmail.com','','https://graph.facebook.com/v2.8/1688359814793209/picture?type=normal',NULL,NULL,NULL,NULL,1,NULL,0,'Us3LR037yYehUKj5iegnilKLkfylOdhaLMuUTyShrmU29IoWbVzf9Ht7YRoh',0,'2017-06-16 10:19:16','2017-06-23 15:43:20'),(32,'1181391322006737','Shini Vanchido','shinivanchido@gmail.com','','https://graph.facebook.com/v2.8/1181391322006737/picture?type=normal',NULL,NULL,NULL,NULL,1,NULL,0,NULL,0,'2017-06-16 14:50:48','2017-06-16 14:50:48');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `folder_id` int(10) unsigned NOT NULL,
  `course_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_file` varchar(225) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`folder_id`),
  KEY `fk_videos_folders1_idx` (`folder_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,4,11,'video khóa học mất gốc ','video-khoa-học-mat-gốc-','14258594','video/mp4','uploads/videos/99da0f65930f7334a3907d5e2997e01c.mp4','<p>video hay thật đấy&nbsp;</p>\r\n',NULL,'abcdef',NULL,1,0,'2017-06-15 08:05:34','2017-06-15 08:05:34'),(2,6,13,'video 1','video-1','5477965','video/mp4','uploads/videos/9b9e8fcd93002b129d8adbcc36b4d45f.mp4','<p>..</p>\r\n',NULL,'aa',NULL,1,0,'2017-06-19 05:45:42','2017-06-19 05:45:42'),(3,6,13,'video 2','video-2','8459849','video/mp4','uploads/videos/07a5bd9cbba0e2f99e507e094c52a1c3.mp4','<p>ad</p>\r\n',NULL,'ad',NULL,1,0,'2017-06-19 05:45:57','2017-06-19 05:45:57');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-26 16:41:58
