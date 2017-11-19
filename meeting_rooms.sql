-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for meeting_rooms
CREATE DATABASE IF NOT EXISTS `meeting_rooms` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `meeting_rooms`;

-- Dumping structure for table meeting_rooms.meeting_rooms
CREATE TABLE IF NOT EXISTS `meeting_rooms` (
  `mr_id` int(11) NOT NULL AUTO_INCREMENT,
  `mr_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mr_capacity` int(11) NOT NULL,
  `multimedia` tinyint(4) NOT NULL,
  `workstations` tinyint(4) NOT NULL,
  `whiteboard` tinyint(4) NOT NULL,
  `mr_status` tinyint(4) NOT NULL,
  `office_id` int(11) NOT NULL,
  PRIMARY KEY (`mr_id`),
  KEY `FK1_office_id` (`office_id`),
  CONSTRAINT `FK1_office_id` FOREIGN KEY (`office_id`) REFERENCES `offices` (`office_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table meeting_rooms.offices
CREATE TABLE IF NOT EXISTS `offices` (
  `office_id` int(11) NOT NULL AUTO_INCREMENT,
  `office_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `office_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `office_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `office_tz` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`office_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table meeting_rooms.reservations
CREATE TABLE IF NOT EXISTS `reservations` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `mr_id` int(11) NOT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `FK1_user_id` (`user_id`),
  KEY `FK2_mr_id` (`mr_id`),
  CONSTRAINT `FK1_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `FK2_mr_id` FOREIGN KEY (`mr_id`) REFERENCES `meeting_rooms` (`mr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table meeting_rooms.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_tz` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `office_id` int(11) DEFAULT NULL,
  `user_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  KEY `FK1_role_id` (`role_id`),
  KEY `FK2_office_id` (`office_id`),
  CONSTRAINT `FK1_role_id` FOREIGN KEY (`role_id`) REFERENCES `user_roles` (`role_id`),
  CONSTRAINT `FK2_office_id` FOREIGN KEY (`office_id`) REFERENCES `offices` (`office_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
-- Dumping structure for table meeting_rooms.user_roles
CREATE TABLE IF NOT EXISTS `user_roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
