/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `dbms` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */;
USE `dbms`;

CREATE TABLE IF NOT EXISTS `admin` (
  `Admin_id` varchar(512) DEFAULT NULL,
  `Name` varchar(512) DEFAULT NULL,
  `Password` varchar(512) DEFAULT NULL,
  `Role` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `bill` (
  `Bill_no` varchar(512) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Date` varchar(512) DEFAULT NULL,
  `Payment_method` varchar(512) DEFAULT NULL,
  `User_Id` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `hotel` (
  `Hotel_id` varchar(512) DEFAULT NULL,
  `Name` varchar(512) DEFAULT NULL,
  `No_Of_Rooms` int(11) DEFAULT NULL,
  `Cost` int(11) DEFAULT NULL,
  `Address` varchar(512) DEFAULT NULL,
  `Rating` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `itinerary` (
  `Itinerary_id` varchar(512) DEFAULT NULL,
  `Title` varchar(512) DEFAULT NULL,
  `Budget` int(11) DEFAULT NULL,
  `Country` varchar(512) DEFAULT NULL,
  `State` varchar(512) DEFAULT NULL,
  `City` varchar(512) DEFAULT NULL,
  `Rating` double DEFAULT NULL,
  `No_Of_Travellers` varchar(512) DEFAULT NULL,
  `FoodPreference` varchar(512) DEFAULT NULL,
  `Transport_id` varchar(512) DEFAULT NULL,
  `Hotel_id` varchar(512) DEFAULT NULL,
  `Date_Of_Travel` varchar(512) DEFAULT NULL
  'ItineraryImage' varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `tblenquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(100) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE IF NOT EXISTS `tbltourpackages` (
  `PackageId` int(11) NOT NULL AUTO_INCREMENT,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageType` varchar(150) DEFAULT NULL,
  `PackageLocation` varchar(100) DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) DEFAULT NULL,
  `PackageDetails` mediumtext DEFAULT NULL,
  `PackageImage` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`PackageId`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

CREATE TABLE IF NOT EXISTS `tourist_places` (
  `Id` varchar(512) DEFAULT NULL,
  `Country` varchar(512) DEFAULT NULL,
  `State` varchar(512) DEFAULT NULL,
  `City` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `transport_type` (
  `Transport_id` varchar(512) DEFAULT NULL,
  `NameOfProvider` varchar(512) DEFAULT NULL,
  `Fare` double DEFAULT NULL,
  `TypeOfVehicle` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `user` (
  `User_Id` varchar(512) DEFAULT NULL,
  `Name` varchar(512) DEFAULT NULL,
  `Password` varchar(512) DEFAULT NULL,
  `Dob` varchar(512) DEFAULT NULL,
  `Email_Id` varchar(512) DEFAULT NULL,
  `Address` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `user_account` (
  `Account_Id` varchar(512) DEFAULT NULL,
  `Doj` varchar(512) DEFAULT NULL,
  `Wallet` int(11) DEFAULT NULL,
  `User_Id` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `user_preference` (
  `User_Id` varchar(512) DEFAULT NULL,
  `Budget` int(11) DEFAULT NULL,
  `Country` varchar(512) DEFAULT NULL,
  `Climate` varchar(512) DEFAULT NULL,
  `Rating` double DEFAULT NULL,
  `No_Of_Travellers` varchar(512) DEFAULT NULL,
  `FoodPreference` varchar(512) DEFAULT NULL,
  `Transport_Preference` varchar(512) DEFAULT NULL,
  `No_Of_Days` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `bill_after_insert` AFTER INSERT ON `bill` FOR EACH ROW BEGIN
    DECLARE total_amount DECIMAL(10, 2);
    

    SELECT SUM(Amount) INTO total_amount FROM Bill WHERE User_Id = NEW.User_Id;
    

    UPDATE User_Account SET Wallet = Wallet - NEW.Amount WHERE User_Id = NEW.User_Id;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

-- Create a new user
CREATE USER 'customer'@'MSHOME:3304' IDENTIFIED BY 'password';


GRANT SELECT ON dbms.admin TO 'customer'@'MSHOME:3304';
GRANT SELECT ON dbms.bill TO 'customer'@'MSHOME:3304';
GRANT SELECT ON dbms.hotel TO 'customer'@'MSHOME:3304';
GRANT SELECT ON dbms.itinerary TO 'customer'@'MSHOME:3304';
GRANT SELECT ON dbms.tblenquiry TO 'customer'@'MSHOME:3304';
GRANT SELECT ON dbms.tbltourpackages TO 'customer'@'MSHOME:3304';
GRANT SELECT ON dbms.tourist_places TO 'customer'@'MSHOME:3304';
GRANT SELECT ON dbms.transport_type TO 'customer'@'MSHOME:3304';
GRANT SELECT ON dbms.user TO 'customer'@'MSHOME:3304';
GRANT SELECT ON dbms.user_account TO 'customer'@'MSHOME:3304';
GRANT SELECT ON dbms.user_preference TO 'customer'@'MSHOME:3304';

