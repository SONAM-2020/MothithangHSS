/*
SQLyog Trial v13.1.8 (64 bit)
<<<<<<< HEAD
MySQL - 8.0.28 : Database - mhss
=======
MySQL - 8.0.29 : Database - mhss
>>>>>>> 6afd6e90bad9d07f56a5c32be3e3f82746a3c825
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

/*Table structure for table `t_aboutus` */

DROP TABLE IF EXISTS `t_aboutus`;

CREATE TABLE `t_aboutus` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Mission` text,
  `Vision` text,
  `image` varchar(255) DEFAULT NULL,
  `Motto` text,
  `History` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_aboutus` */

insert  into `t_aboutus`(`Id`,`Name`,`Mission`,`Vision`,`image`,`Motto`,`History`) values 
(1,'Motithang Higher Secondary School xcfdf','<table width=\"863\" border=\"0\" style=\"background-color: rgb(255, 255, 255); width: 1030px; font-family: \" times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 16px;\"=\"\"><tbody><tr><td><p>Motithang Higher Secondary School, located in Motithang, which means an abode of pearls, was established on April 1, 1975. When it started it was known as Motithang Central School. The school had one building and a total student population of two hundred and thirty-five. There were classes ranging from one to eight with fourteen teachers including the principal.<br>The school was then upgraded to a junior high school level with the phasing out of classes one and two, and upgrading of the school till class ten in 1989. One primary level was phased out every year till the school became a full-fledged high school with classes ranging from seven to eight.<br>The school was upgraded to a higher secondary in 2006 with Mrs. Maina Kharga as the principal. The school also had its first All Bhutan Class Ten Topper in 2000 under the leadership of its then principal Mrs. Maina Kharga, making it one of the top high schools in the country. From then onwards, the school has produced many such toppersdf df</p></td></tr></tbody></table>','<table width=\"863\" border=\"0\" style=\"background-color: rgb(255, 255, 255); width: 1030px; font-family: \" times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 16px;\"=\"\"><tbody><tr><td><p>Motithang Higher Secondary School, located in Motithang, which means an abode of pearls, was established on April 1, 1975. When it started it was known as Motithang Central School. The school had one building and a total student population of two hundred and thirty-five. There were classes ranging from one to eight with fourteen teachers including the principal.<br>The school was then upgraded to a junior high school level with the phasing out of classes one and two, and upgrading of the school till class ten in 1989. One primary level was phased out every year till the school became a full-fledged high school with classes ranging from seven to eight.<br>The school was upgraded to a higher secondary in 2006 with Mrs. Maina Kharga as the principal. The school also had its first All Bhutan Class Ten Topper in 2000 under the leadership of its then principal Mrs. Maina Kharga, making it one of the top high schools in the country. From then onwards, the school has produced many such toppers dfvd</p></td></tr></tbody></table>','uploads/School/logo1.png','The school was upgraded to a higher secondary in 2006 with Mrs. Maina Kharga as the principal. The school also had its first All Bhutan Clfvdfvass Ten Topper in 2000 under the leadership of its then principal Mrs. Maina Kharga, making it one of the top high schools in the country. From then onwards, the school has produced many such toppers','<table width=\"863\" border=\"0\" style=\"background-color: rgb(255, 255, 255); width: 1030px; font-family: \" times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 16px;\"=\"\"><tbody><tr><td><p>Motithang Higher Secondary School, located in Motithang, which means an abode of pearls, was established on April 1, 1975. When it started it was known as Motithang Central School. The school had one building and a total student population of two hundred and thirty-five. There were classes ranging from one to eight with fourteen teachers including the principal.<br>The school was then upgraded to a junior high school level with the phasing out of classes one and two, and upgrading of the school till class ten in 1989. One primary level was phased out every year till the school became a full-fledged high school with classes ranging from seven to eight.<br>The school was upgraded to a higher secondary in 2006 with Mrs. Maina Kharga as the principal. The school also had its first All Bhutan Class Ten Topper in 2000 under the leadership of its then principal Mrs. Maina Kharga, making it one of the top high schools in the country. From then onwards, the school has produced many such toppersvdd&nbsp;</p></td></tr></tbody></table>');

/*Table structure for table `t_academic_topper` */

DROP TABLE IF EXISTS `t_academic_topper`;

CREATE TABLE `t_academic_topper` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `Percentage` varchar(25) DEFAULT NULL,
  `Class` int DEFAULT NULL,
  `Year` int DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Status` varchar(39) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `t_academic_topper` */

/*Table structure for table `t_calender` */

DROP TABLE IF EXISTS `t_calender`;

CREATE TABLE `t_calender` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Status` enum('Active','InActive') DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `t_calender` */

insert  into `t_calender`(`Id`,`Name`,`Date`,`Status`) values 
(4,'Karma','2022-08-04','Active');

/*Table structure for table `t_country_topper` */

DROP TABLE IF EXISTS `t_country_topper`;

CREATE TABLE `t_country_topper` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `year` int DEFAULT NULL,
  `topper_type` enum('BCSE','BHSEC') DEFAULT NULL,
  `percentage` varchar(25) DEFAULT NULL,
  `status` enum('Active','InActive') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_country_topper` */

/*Table structure for table `t_department_type` */

DROP TABLE IF EXISTS `t_department_type`;

CREATE TABLE `t_department_type` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Status` enum('Active','InActive') DEFAULT 'Active',
  PRIMARY KEY (`Id`)
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
=======
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
>>>>>>> 6afd6e90bad9d07f56a5c32be3e3f82746a3c825

/*Data for the table `t_department_type` */

insert  into `t_department_type`(`Id`,`Name`,`Status`) values 
<<<<<<< HEAD
(1,NULL,'Active');
=======
(1,'School Management board','Active'),
(2,'Dzongkha Department','Active'),
(3,'English Department','Active'),
(4,'Mathematics/IT department','Active'),
(5,'Science Department','Active'),
(6,'Commerce/Economics/Accountancy Department','Active'),
(7,'Humanities & Others\' Department','Active');
>>>>>>> 6afd6e90bad9d07f56a5c32be3e3f82746a3c825

/*Table structure for table `t_files` */

DROP TABLE IF EXISTS `t_files`;

CREATE TABLE `t_files` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `image` text,
  `Status` enum('Active','InActive') DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `t_files` */

insert  into `t_files`(`Id`,`Name`,`Type`,`image`,`Status`) values 
(5,'rules 2022','Rules','Khenrig Enterprise Untertaking Letter.pdf','Active');

/*Table structure for table `t_history` */

DROP TABLE IF EXISTS `t_history`;

CREATE TABLE `t_history` (
  `id` int NOT NULL AUTO_INCREMENT,
  `history` text,
  `status` enum('Active','InActive') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_history` */

/*Table structure for table `t_homeslider` */

DROP TABLE IF EXISTS `t_homeslider`;

CREATE TABLE `t_homeslider` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Desicription` text,
  `Status` varchar(15) DEFAULT 'Active',
  `Image` varchar(255) DEFAULT NULL,
  `URL` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `t_homeslider` */

insert  into `t_homeslider`(`Id`,`Name`,`Desicription`,`Status`,`Image`,`URL`) values 
(8,'sa','cscs','Active','chencho.jpg','bt.bt');

/*Table structure for table `t_news` */

DROP TABLE IF EXISTS `t_news`;

CREATE TABLE `t_news` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Description` text,
  `Date` date DEFAULT NULL,
  `Status` varchar(255) DEFAULT 'Active',
  `Type` varchar(255) DEFAULT NULL,
  `Image` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `t_news` */

insert  into `t_news`(`Id`,`Name`,`Description`,`Date`,`Status`,`Type`,`Image`) values 
(6,'No safety standards defined for any vehicles, fitness checks not done properly and safety check issues in transport buses: Audit Report','<p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">A Royal Audit Authority (RAA) report showed that Road Safety and Transport Authority (RSTA) neither has the proper testing equipment nor competent inspectors to assess vehicles with sophisticated features.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">The Royal Bhutan Police (RBP), during normal or highway inspection, does not inspect vehicles, which might not be roadworthy based on rusted body structure, engine noise, and emission.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">However, RSTA expressed that it will incur huge expenditure to procure and equip all of its regional and base offices with proper testing equipment.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">The vehicle inspection is not carried out properly due to additional responsibilities of Motor Vehicle Inspectors (MVIs) apart from their primary responsibility, the report pointed out.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">The RAA Report revealed that inadequacy in the current system of ensuring vehicle fitness indirectly indicates that a greater number of unsafe vehicles are allowed to ply posing risk to road users and properties, besides causing environmental hazard.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">Meanwhile, as per the figure from RBP on the Motor Vehicle (MV) Accident, accident caused as a result of mechanical failure is on rise. From January 2015 to September 2020, there were 272 MV accidents reported due to mechanical failure.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">The data analysis revealed that there are 28 buses used in various schools and institutes that exceeded the serviceable age provided in the regulation (15 years). Though it is easier to track the conversion of taxis when it reaches the end of serviceable age, it is challenging to track the conversion of passenger buses after the serviceable age.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">However, for non-commercial vehicles (private and government vehicles), there is no limit of the serviceable age.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">According to the report, the use of old vehicles will not only cause threat to the safety of passengers or road users, but is also a major environmental concern because of the carbon footprint.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">When it comes to scheduled passenger buses, no passenger bus is allowed to operate on the route after the expiry of its operational life. However, the life of the other non-scheduled buses (school/institution buses) has been lifted in the revised regulation and operation shall be subjected to the six-monthly fitness inspection, report stated.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">To ensure safety of the inter-dzongkhag passengers, RSTA has monitoring mechanisms, such as pre-departure inspection and luggage weigh-ins.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">As per the data analysis of eRALIs from 2015 to 2020, 405 medium buses and 188 heavy buses were charged for carrying extra passengers, the report pointed out that this was a result of improper pre-departure inspection and non-enforcement of rules by the official concerned. This issue can compromise the safety of the public transport passengers.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">RAA noted that there was no RSTA official to conduct the pre-inspection of the buses or oversee the comfort of the passengers in order to ensure safety of passengers.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">The audit findings mention that the luggage charges are not enforced uniformly. Drivers, themselves, carry heavy luggage, which need to be rectified.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">“The agreement between the bus operators and the RSTA states that all buses should have a fire extinguisher and first-aid kits”. Further, all buses should have a speed sensor installed in the bus for alerting the driver if he is speeding beyond the permitted speed limit,” states the report.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">Although cases of overloaded trucks cannot be totally eliminated, it can be controlled through effective monitoring, legislation and education, the report stated.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">Bhutan imports a large number of vehicles annually, wherein the data from the Department of Revenue and Custom (DRC) shows an import of 34,482 vehicles within the span of July 2015 to 2020.&nbsp; The RAA noted that in terms of safer vehicles, there is no safety standards defined for any of the vehicles imported yet.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">Except for one model of vehicle which was prohibited in the country (Tata Nano), the RSTA had not identified the type and make of vehicles including two-wheelers which are safe to ply on the Bhutanese roads.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">As per the RAA Report May 2022, the minimum safety standards are not defined.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">“Without safety standards for the vehicles instituted, there is possibility of new vehicles coming without necessary safety requirements. This increases the risk of motor vehicle crashes resulting in loss of lives, causing serious injuries, and impacting quality of life,” the report further stated.</p><p style=\"padding: 0px; margin-bottom: 20px; outline: none; list-style: none; border: 0px none; color: rgb(40, 40, 40); font-family: &quot;Droid Sans&quot;;\">Given the importance of inspection of vehicle fitness, vehicles are assessed only based on the type of vehicles and not the age of the vehicle. The validity of roadworthiness is a maximum one year, irrespective of vehicles being fairly new or more than 15 years of age.&nbsp;</p>','2022-08-02','Active','News','uploads/News/wide-angle-shot-single-tree-growing-clouded-sky-during-sunset-surrounded-by-grass_181624-22807.png'),
(8,'Karmaege4y5eu5','<p>afeger</p>','2022-07-30','Active','','uploads/News/chencho.jpg');

/*Table structure for table `t_post_type` */

DROP TABLE IF EXISTS `t_post_type`;

CREATE TABLE `t_post_type` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Status` enum('Active','InActive') DEFAULT 'Active',
  PRIMARY KEY (`Id`)
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
=======
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
>>>>>>> 6afd6e90bad9d07f56a5c32be3e3f82746a3c825

/*Data for the table `t_post_type` */

insert  into `t_post_type`(`Id`,`Name`,`Status`) values 
<<<<<<< HEAD
(1,'HoD','Active'),
(2,'Principal','Active'),
(3,'Academic head','Active'),
(4,'CCD head','Active'),
(5,'Chairman','Active'),
(6,'Dy. chairman','Active'),
(7,'Librarian ','Active'),
(8,'PR','Active'),
(9,'Office Assistant','Active'),
(10,'Computer Lab Assistant','Active'),
(11,'Biology Lab Assistant','Active'),
(12,'Librarian','Active'),
(13,'Store in-charge','Active'),
(14,'Physics Lab Assistant','Active'),
(15,'Chemistry Lab Assistant','Active'),
(16,'Caretaker','Active'),
(17,'Driver','Active'),
(18,'Sweeper','Active'),
(19,'Night Guard','Active');
=======
(1,'HoD','Active');
>>>>>>> 6afd6e90bad9d07f56a5c32be3e3f82746a3c825

/*Table structure for table `t_principals` */

DROP TABLE IF EXISTS `t_principals`;

CREATE TABLE `t_principals` (
  `id` int NOT NULL AUTO_INCREMENT,
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
  `Id` int NOT NULL AUTO_INCREMENT,
  `Role_Name` varchar(200) DEFAULT NULL,
  `Status` enum('Active','InActive') DEFAULT 'Active',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Entryby` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `t_role` */

insert  into `t_role`(`Id`,`Role_Name`,`Status`,`created_date`,`Entryby`) values 
(1,'Adminstrator','Active','2021-05-05 10:43:39',NULL),
(2,'hhc_user','Active','2021-05-05 10:56:38',NULL),
(3,'hotel_user','Active','2021-05-06 21:13:36',NULL),
(4,'desthospital_user','Active','2021-05-06 21:13:47',NULL),
(5,'basehospital_user','Active','2021-05-06 21:15:28',NULL);

/*Table structure for table `t_staff` */

DROP TABLE IF EXISTS `t_staff`;

CREATE TABLE `t_staff` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Year` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `Qualification` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Post` varchar(255) DEFAULT NULL,
  `Serving_tenure` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_staff` */

/*Table structure for table `t_student` */

DROP TABLE IF EXISTS `t_student`;

CREATE TABLE `t_student` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Student_Count` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_student` */

/*Table structure for table `t_user` */

DROP TABLE IF EXISTS `t_user`;

CREATE TABLE `t_user` (
  `Id` int NOT NULL AUTO_INCREMENT,
<<<<<<< HEAD
  `Email_Id` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mobile_Number` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` enum('Active','InActive') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'Active',
=======
  `Email_Id` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mobile_Number` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Name` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` enum('Active','InActive') CHARACTER SET utf8mb3 COLLATE utf8_unicode_ci DEFAULT 'Active',
>>>>>>> 6afd6e90bad9d07f56a5c32be3e3f82746a3c825
  `Image` tinyblob,
  `Created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

/*Data for the table `t_user` */

insert  into `t_user`(`Id`,`Email_Id`,`Password`,`Mobile_Number`,`Name`,`Status`,`Image`,`Created_date`) values 
(1,'sdorji815@gmail.com','$2y$10$oVQ6BavZ3QGabxRjyvKxduBq4lJFSQwAR6cPfGzLb9F6CDFP38iay','772298','SONAM DORJI','Active','Half Photo.jpg','2021-05-07 14:34:29');

/*Table structure for table `t_visiter_detls` */

DROP TABLE IF EXISTS `t_visiter_detls`;

CREATE TABLE `t_visiter_detls` (
  `Id` int DEFAULT NULL,
  `browser` varchar(765) DEFAULT NULL,
  `browser_version` varchar(765) DEFAULT NULL,
  `os` varchar(765) DEFAULT NULL,
  `ip_address` varchar(765) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` char(24) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_visiter_detls` */

insert  into `t_visiter_detls`(`Id`,`browser`,`browser_version`,`os`,`ip_address`,`date`,`Status`) values 
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:08:40','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:09:59','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:21:43','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:47:11','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:47:54','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:47:56','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:54:46','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:55:26','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:55:31','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:56:19','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:59:02','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 21:59:37','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:04:05','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:04:19','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:05:25','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:05:29','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:07:33','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:09:44','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:11:47','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:12:00','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:12:24','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:19:08','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:19:27','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:19:56','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:20:14','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:20:30','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:22:48','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:23:03','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:23:14','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:25:28','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:25:51','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:28:48','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:29:41','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:31:12','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-06 22:31:44','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','192.168.120.50','2021-05-07 11:18:33','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:18:52','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:18:52','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:19:53','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:25:23','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:29:21','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:30:20','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:33:27','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:35:34','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:48:58','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 11:52:53','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:40:07','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:42:59','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:43:32','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:45:21','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:45:47','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:46:26','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:47:00','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:47:52','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:48:27','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 12:51:30','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:07:31','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:08:26','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:09:14','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:31:50','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:32:41','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:33:31','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:34:18','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:36:59','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:37:38','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:45:29','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:49:53','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:52:18','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:52:49','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:54:03','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 13:54:48','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 14:00:27','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 14:02:08','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 14:05:11','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 14:32:20','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:03:19','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:22:47','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:23:28','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:23:45','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:25:10','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:30:22','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:32:20','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:37:21','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:38:19','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:39:14','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:40:28','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:41:41','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-07 15:43:28','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-11 11:30:24','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-11 11:30:25','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-11 11:30:39','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-11 11:31:34','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-11 11:32:18','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-11 11:32:33','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-11 11:53:38','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-12 12:16:21','Active'),
(NULL,'Chrome','90.0.4430.93','Windows 10','::1','2021-05-12 12:16:22','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-12 16:28:35','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-17 16:50:28','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-17 16:51:42','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-17 16:52:13','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-18 20:44:50','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-18 20:45:09','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-18 22:24:33','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-18 22:24:33','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-18 22:24:33','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:11:34','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:22:29','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:22:56','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:24:28','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:24:33','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:25:43','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:26:20','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:26:42','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:27:15','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:28:12','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:29:22','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:29:51','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:31:32','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:32:04','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:35:24','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:36:03','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:38:01','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:38:25','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:38:41','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:38:54','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:39:08','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:42:35','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:43:11','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:43:46','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:44:05','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:44:21','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:44:37','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:44:51','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:46:13','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:46:51','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:48:28','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:48:44','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:49:40','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:49:53','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:50:36','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:52:27','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:52:49','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:53:02','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:53:28','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-19 17:54:26','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:54:52','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-19 17:57:19','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-24 16:50:00','Active'),
(NULL,'Safari','604.1','iOS','::1','2021-05-24 17:21:55','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-24 17:22:43','Active'),
(NULL,'Chrome','90.0.4430.212','Windows 10','::1','2021-05-24 19:01:31','Active'),
(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-08 19:01:30','Active'),
(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-13 13:29:10','Active'),
(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-13 13:29:32','Active'),
(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-13 13:33:07','Active'),
(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-13 14:51:19','Active'),
(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-14 10:37:05','Active'),
(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-14 10:37:11','Active'),
(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-14 10:44:16','Active'),
(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-14 10:46:54','Active'),
(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-14 10:47:26','Active'),
(NULL,'Chrome','91.0.4472.77','Windows 10','::1','2021-06-14 10:59:57','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:36:05','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:41:25','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:42:38','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:43:34','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:43:36','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:44:14','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:44:57','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:45:00','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:45:01','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:45:06','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:45:38','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:46:45','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:47:15','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:47:57','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:55:13','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-06 16:55:58','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-07 23:20:26','Active'),
(NULL,'Chrome','94.0.4606.71','Windows 10','::1','2021-10-08 07:35:55','Active'),
(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-11-30 18:16:44','Active'),
(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-11-30 18:18:28','Active'),
(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-03 10:04:25','Active'),
(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-03 10:04:26','Active'),
(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-03 15:49:26','Active'),
(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-03 15:49:41','Active'),
(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-03 15:50:28','Active'),
(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-08 18:52:28','Active'),
(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-08 22:22:25','Active'),
(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-08 22:22:25','Active'),
(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-08 22:24:22','Active'),
(NULL,'Chrome','96.0.4664.45','Windows 10','::1','2021-12-08 22:24:41','Active');

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
