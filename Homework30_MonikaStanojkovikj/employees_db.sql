-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.29-0ubuntu0.18.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for employees_db
CREATE DATABASE IF NOT EXISTS `employees_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `employees_db`;

-- Dumping structure for table employees_db.adresses
CREATE TABLE IF NOT EXISTS `adresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adress` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.adresses: ~5 rows (approximately)
/*!40000 ALTER TABLE `adresses` DISABLE KEYS */;
INSERT INTO `adresses` (`id`, `adress`) VALUES
	(1, 'Londoner Weg, 25'),
	(2, 'Baker Street, 46'),
	(3, 'Magore Bibi, Locale 36'),
	(4, '10 Downing Street, Greater'),
	(5, 'My Street, Bournemouth');
/*!40000 ALTER TABLE `adresses` ENABLE KEYS */;

-- Dumping structure for table employees_db.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `birthdate` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.employees: ~5 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`id`, `first_name`, `last_name`, `birthdate`) VALUES
	(1, 'Mike', 'Ward', '12/05/1986'),
	(2, 'Julie', 'Bell', '14/08/1982'),
	(3, 'Paul', 'Ward', '03/09/1992'),
	(4, 'Joey', 'Peterson', '17/12/1990'),
	(5, 'Luisa', 'Evans', '14/04/1979');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping structure for table employees_db.job_positions
CREATE TABLE IF NOT EXISTS `job_positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.job_positions: ~5 rows (approximately)
/*!40000 ALTER TABLE `job_positions` DISABLE KEYS */;
INSERT INTO `job_positions` (`id`, `job`) VALUES
	(1, 'Marketing Consultant'),
	(2, 'Product Manager'),
	(3, 'SEO Manager'),
	(4, 'Digital Marketing Manager'),
	(5, 'Business Owner');
/*!40000 ALTER TABLE `job_positions` ENABLE KEYS */;

-- Dumping structure for table employees_db.mails
CREATE TABLE IF NOT EXISTS `mails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.mails: ~5 rows (approximately)
/*!40000 ALTER TABLE `mails` DISABLE KEYS */;
INSERT INTO `mails` (`id`, `mail`) VALUES
	(1, 'mike_ward@mail.com'),
	(2, 'julie_bell@mail.com'),
	(3, 'paul_ward@mail.com'),
	(4, 'joey_peterson@mail.com'),
	(5, 'luisa_evans@mail.com');
/*!40000 ALTER TABLE `mails` ENABLE KEYS */;

-- Dumping structure for table employees_db.phones
CREATE TABLE IF NOT EXISTS `phones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(50) DEFAULT NULL,
  `type_phone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.phones: ~0 rows (approximately)
/*!40000 ALTER TABLE `phones` DISABLE KEYS */;
INSERT INTO `phones` (`id`, `phone`, `type_phone`) VALUES
	(1, '043586254', 'mobile'),
	(2, '00689245365', 'home'),
	(3, '042579346', 'mobile'),
	(4, '0065876235', 'home'),
	(5, '042532546', 'mobile');
/*!40000 ALTER TABLE `phones` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
