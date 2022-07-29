/*
SQLyog Trial v13.1.8 (64 bit)
MySQL - 8.0.28 : Database - mhss
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mhss` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `mhss`;

/*Table structure for table `academic_topper` */

DROP TABLE IF EXISTS `academic_topper`;

CREATE TABLE `academic_topper` (
  `id` int NOT NULL AUTO_INCREMENT,
  `topper_name` varchar(255) DEFAULT NULL,
  `topper_section` varchar(255) DEFAULT NULL,
  `topper_image` varchar(25) DEFAULT NULL,
  `topper_percentage` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `academic_topper` */

/*Table structure for table `download_type` */

DROP TABLE IF EXISTS `download_type`;

CREATE TABLE `download_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `form` varchar(255) DEFAULT NULL,
  `bcsea_questions` varchar(255) DEFAULT NULL,
  `question_paper` varchar(255) DEFAULT NULL,
  `eba` varchar(255) DEFAULT NULL,
  `news_letter` varchar(255) DEFAULT NULL,
  `attendance_sheet` varchar(255) DEFAULT NULL,
  `online_result` varchar(255) DEFAULT NULL,
  `concern_letter` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `download_type` */

/*Table structure for table `download_type_id` */

DROP TABLE IF EXISTS `download_type_id`;

CREATE TABLE `download_type_id` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type_id` int DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `download_type_id` */

/*Table structure for table `teacher_login` */

DROP TABLE IF EXISTS `teacher_login`;

CREATE TABLE `teacher_login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `teacher_login` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
