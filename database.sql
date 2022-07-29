/*
SQLyog Ultimate v8.82 
MySQL - 5.7.38-log : Database - mhss
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mhss` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mhss`;

/*Table structure for table `academic_topper` */

DROP TABLE IF EXISTS `academic_topper`;

CREATE TABLE `academic_topper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topper_name` varchar(255) DEFAULT NULL,
  `topper_section` varchar(255) DEFAULT NULL,
  `topper_image` varchar(25) DEFAULT NULL,
  `topper_percentage` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `academic_topper` */

/*Table structure for table `download_type` */

DROP TABLE IF EXISTS `download_type`;

CREATE TABLE `download_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form` varchar(255) DEFAULT NULL,
  `bcsea_questions` varchar(255) DEFAULT NULL,
  `question_paper` varchar(255) DEFAULT NULL,
  `eba` varchar(255) DEFAULT NULL,
  `news_letter` varchar(255) DEFAULT NULL,
  `attendance_sheet` varchar(255) DEFAULT NULL,
  `online_result` varchar(255) DEFAULT NULL,
  `concern_letter` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `download_type` */

/*Table structure for table `download_type_id` */

DROP TABLE IF EXISTS `download_type_id`;

CREATE TABLE `download_type_id` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `download_type_id` */

/*Table structure for table `t_aboutus` */

DROP TABLE IF EXISTS `t_aboutus`;

CREATE TABLE `t_aboutus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `mission` text,
  `vision` text,
  `logo` varchar(255) DEFAULT NULL,
  `mission_img` varchar(255) DEFAULT NULL,
  `vision_img` varchar(255) DEFAULT NULL,
  `status` enum('Active','InActive') DEFAULT 'Active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_aboutus` */

/*Table structure for table `t_country_topper` */

DROP TABLE IF EXISTS `t_country_topper`;

CREATE TABLE `t_country_topper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `topper_type` enum('BCSE','BHSEC') DEFAULT NULL,
  `percentage` varchar(25) DEFAULT NULL,
  `status` enum('Active','InActive') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_country_topper` */

/*Table structure for table `t_history` */

DROP TABLE IF EXISTS `t_history`;

CREATE TABLE `t_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `history` text,
  `status` enum('Active','InActive') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_history` */

/*Table structure for table `t_homeslider` */

DROP TABLE IF EXISTS `t_homeslider`;

CREATE TABLE `t_homeslider` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Desicription` text,
  `Status` varchar(15) DEFAULT 'Active',
  `Image` varchar(255) DEFAULT NULL,
  `URL` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `t_homeslider` */

insert  into `t_homeslider`(`Id`,`Name`,`Desicription`,`Status`,`Image`,`URL`) values (5,'B-Ngul Reacharge Now','Get 10% Extra','Active','uploads/slider/11.jpeg','bt.bt');

/*Table structure for table `t_news` */

DROP TABLE IF EXISTS `t_news`;

CREATE TABLE `t_news` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Description` text,
  `Date` date DEFAULT NULL,
  `Status` varchar(255) DEFAULT 'Active',
  `Type` varchar(255) DEFAULT NULL,
  `Image` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `t_news` */

insert  into `t_news`(`Id`,`Name`,`Description`,`Date`,`Status`,`Type`,`Image`) values (2,'dwef','fwefwefw','2022-06-28','Active','Announcement','uploads/News/img.jpeg'),(3,'Karma','Very smart and worthy product 55 inch smart TV','2022-06-28','Active','BT Offer','uploads/News/12.jpeg');

/*Table structure for table `t_principals` */

DROP TABLE IF EXISTS `t_principals`;

CREATE TABLE `t_principals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `year` varchar(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('Active','InActive') DEFAULT 'Active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_principals` */

/*Table structure for table `t_role` */

DROP TABLE IF EXISTS `t_role`;

CREATE TABLE `t_role` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Role_Name` varchar(200) DEFAULT NULL,
  `Status` enum('Active','InActive') DEFAULT 'Active',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Entryby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `t_role` */

insert  into `t_role`(`Id`,`Role_Name`,`Status`,`created_date`,`Entryby`) values (1,'Adminstrator','Active','2021-05-05 10:43:39',NULL),(2,'hhc_user','Active','2021-05-05 10:56:38',NULL),(3,'hotel_user','Active','2021-05-06 21:13:36',NULL),(4,'desthospital_user','Active','2021-05-06 21:13:47',NULL),(5,'basehospital_user','Active','2021-05-06 21:15:28',NULL);

/*Table structure for table `t_user` */

DROP TABLE IF EXISTS `t_user`;

CREATE TABLE `t_user` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Email_Id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mobile_Number` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` enum('Active','InActive') COLLATE utf8_unicode_ci DEFAULT 'Active',
  `Image` tinyblob,
  `Activation_Code` int(10) DEFAULT NULL,
  `Role_Id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password_ResetCode` int(10) DEFAULT NULL,
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Entryby` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `t_user` */

insert  into `t_user`(`Id`,`Email_Id`,`Password`,`Mobile_Number`,`Name`,`Status`,`Image`,`Activation_Code`,`Role_Id`,`Password_ResetCode`,`Created_date`,`Entryby`) values (1,'sdorji815@gmail.com','$2y$10$oVQ6BavZ3QGabxRjyvKxduBq4lJFSQwAR6cPfGzLb9F6CDFP38iay','772298','SONAM DORJI','Active','Half Photo.jpg',NULL,'Adminstrator',NULL,'2021-05-07 14:34:29',NULL),(8,'lchoden@health.gov.bt','$2y$10$oVQ6BavZ3QGabxRjyvKxduBq4lJFSQwAR6cPfGzLb9F6CDFP38iay','17458669','SONAM DORJI','InActive',NULL,NULL,'basehospital_user',NULL,'2021-05-07 14:34:43',NULL),(9,'bsunwar@health.gov.bt','$2y$10$oVQ6BavZ3QGabxRjyvKxduBq4lJFSQwAR6cPfGzLb9F6CDFP38iay','17458669','AMT SONAM','Active',NULL,NULL,'desthospital_user',NULL,'2021-05-07 14:35:01',NULL),(10,'bgurung@health.gov.bt','$2y$10$oVQ6BavZ3QGabxRjyvKxduBq4lJFSQwAR6cPfGzLb9F6CDFP38iay','17458669','Sonam','Active',NULL,NULL,'hotel_user',NULL,'2021-05-07 14:35:13',NULL),(11,'bsunwar07@gmail.com','$2y$10$oVQ6BavZ3QGabxRjyvKxduBq4lJFSQwAR6cPfGzLb9F6CDFP38iay','1745866977','Sonam','InActive',NULL,NULL,'hhc_user',NULL,'2021-05-07 14:35:39',NULL);

/*Table structure for table `t_visiter_detls` */

DROP TABLE IF EXISTS `t_visiter_detls`;

CREATE TABLE `t_visiter_detls` (
  `Id` int(11) DEFAULT NULL,
  `browser` varchar(765) DEFAULT NULL,
  `browser_version` varchar(765) DEFAULT NULL,
  `os` varchar(765) DEFAULT NULL,
  `ip_address` varchar(765) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` char(24) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_visiter_detls` */

insert  into `t_visiter_detls`(`Id`,`browser`,`browser_version`,`os`,`ip_address`,`date`,`Status`) values (NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:08:40','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:09:59','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:21:43','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:47:11','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:47:54','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:47:56','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:54:46','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:55:26','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:55:31','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:56:19','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:59:02','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:59:37','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:04:05','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:04:19','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:05:25','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:05:29','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:07:33','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:09:44','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:11:47','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:12:00','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:12:24','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:19:08','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:19:27','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:19:56','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:20:14','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:20:30','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:22:48','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:23:03','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:23:14','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:25:28','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:25:51','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:28:48','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:29:41','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:31:12','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:31:44','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','192.168.120.50','2021-05-07 11:18:33','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:18:52','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:18:52','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:19:53','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:25:23','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:29:21','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:30:20','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:33:27','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:35:34','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:48:58','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:52:53','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:40:07','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:42:59','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:43:32','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:45:21','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:45:47','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:46:26','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:47:00','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:47:52','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:48:27','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:51:30','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:07:31','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:08:26','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:09:14','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:31:50','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:32:41','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:33:31','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:34:18','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:36:59','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:37:38','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:45:29','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:49:53','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:52:18','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:52:49','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:54:03','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:54:48','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 14:00:27','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 14:02:08','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 14:05:11','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 14:32:20','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:03:19','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:22:47','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:23:28','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:23:45','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:25:10','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:30:22','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:32:20','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:37:21','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:38:19','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:39:14','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:40:28','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:41:41','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:43:28','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-11 11:30:24','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-11 11:30:25','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-11 11:30:39','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-11 11:31:34','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-11 11:32:18','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-11 11:32:33','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-11 11:53:38','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-12 12:16:21','Active'),(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-12 12:16:22','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-12 16:28:35','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-17 16:50:28','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-17 16:51:42','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-17 16:52:13','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-18 20:44:50','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-18 20:45:09','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-18 22:24:33','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-18 22:24:33','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-18 22:24:33','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:11:34','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:22:29','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:22:56','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:24:28','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:24:33','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:25:43','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:26:20','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:26:42','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:27:15','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:28:12','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:29:22','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:29:51','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:31:32','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:32:04','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:35:24','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:36:03','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:38:01','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:38:25','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:38:41','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:38:54','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:39:08','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:42:35','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:43:11','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:43:46','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:44:05','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:44:21','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:44:37','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:44:51','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:46:13','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:46:51','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:48:28','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:48:44','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:49:40','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:49:53','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:50:36','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:52:27','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:52:49','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:53:02','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:53:28','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:54:26','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:54:52','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:57:19','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-24 16:50:00','Active'),(NULL,'Safari','604.1','iOS','::1','2021-05-24 17:21:55','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-24 17:22:43','Active'),(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-24 19:01:31','Active'),(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-08 19:01:30','Active'),(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-13 13:29:10','Active'),(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-13 13:29:32','Active'),(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-13 13:33:07','Active'),(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-13 14:51:19','Active'),(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-14 10:37:05','Active'),(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-14 10:37:11','Active'),(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-14 10:44:16','Active'),(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-14 10:46:54','Active'),(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-14 10:47:26','Active'),(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-14 10:59:57','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:36:05','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:41:25','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:42:38','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:43:34','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:43:36','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:44:14','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:44:57','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:45:00','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:45:01','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:45:06','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:45:38','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:46:45','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:47:15','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:47:57','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:55:13','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:55:58','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-07 23:20:26','Active'),(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-08 07:35:55','Active'),(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-11-30 18:16:44','Active'),(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-11-30 18:18:28','Active'),(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-03 10:04:25','Active'),(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-03 10:04:26','Active'),(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-03 15:49:26','Active'),(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-03 15:49:41','Active'),(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-03 15:50:28','Active'),(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-08 18:52:28','Active'),(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-08 22:22:25','Active'),(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-08 22:22:25','Active'),(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-08 22:24:22','Active'),(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-08 22:24:41','Active');

/*Table structure for table `teacher_login` */

DROP TABLE IF EXISTS `teacher_login`;

CREATE TABLE `teacher_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `teacher_login` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
