-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhostdbms_project
-- Generation Time: Apr 09, 2024 at 09:18 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` varchar(512) DEFAULT NULL,
  `Name` varchar(512) DEFAULT NULL,
  `Password` varchar(512) DEFAULT NULL,
  `Role` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Name`, `Password`, `Role`) VALUES
('A1001', 'Ravi Kumar', 'h3L#Z$p!@', 'Owner'),
('A1002', 'Priya Patel', 'y%2&nJ@9!', 'Manager'),
('A1003', 'Amit Singh', '$e*4Xb8#Z', 'Guide'),
('A1004', 'Deepika Sharma', 'Q7^T@g*1K', 'Owner'),
('A1005', 'Rajesh Gupta', '5@hY*o#mP', 'Manager'),
('A1006', 'Neha Khan', '8k$Q@jPw!', 'Guide'),
('A1007', 'Vikram Malhotra', 'w&3$%kS1J', 'Owner'),
('A1008', 'Anjali Desai', '6R*t#xG9@', 'Manager'),
('A1009', 'Sandeep Verma', 'b2!mP8Lx&', 'Guide'),
('A1010', 'Sunita Reddy', 'y$F&5u@4m', 'Owner'),
('A1011', 'Rahul Iyer', 'P^4uK&w8#', 'Manager'),
('A1012', 'Pooja Choudhury', '9L!s$zN7#', 'Guide'),
('A1013', 'Arun Khanna', '2@B8w*3%q', 'Owner'),
('A1014', 'Shilpa Joshi', 'u@1H9V!s%', 'Manager'),
('A1015', 'Manoj Kapoor', '5T@n6%y#J', 'Guide'),
('A1016', 'Sneha Sharma', '#9x@7g4P!', 'Owner'),
('A1017', 'Rajendra Prasad', 'p6Q&wN1!%', 'Manager'),
('A1018', 'Nisha Singh', 'K$8h!q*4T', 'Guide'),
('A1019', 'Kishan Patel', '#3S@jW6x!', 'Owner'),
('A1020', 'Swati Menon', '@1z*Y#6sJ', 'Manager'),
('A1021', 'Arjun Deshpande', 't$J7H&m3@', 'Guide'),
('A1022', 'Anita Chatterjee', 'v4X#n%6K@', 'Owner'),
('A1023', 'Vivek Rastogi', '&y5r@K8J!', 'Manager'),
('A1024', 'Ananya Das', '8L@k4%wD&', 'Guide'),
('A1025', 'Suresh Tiwari', 'u8#p2K@5m', 'Owner'),
('A1026', 'Meena Singh', '5H@p8zX2k', 'Manager'),
('A1027', 'Harish Sharma', 'p&L@8b3n%', 'Guide'),
('A1028', 'Geeta Patel', '#4U@n3z%w', 'Owner'),
('A1029', 'Alok Dubey', 'q7V#n9z*W', 'Manager'),
('A1030', 'Kavita Shah', 'e&4Y8j@1X', 'Guide'),
('A1031', 'Anand Joshi', '3F@z!5y6x', 'Owner'),
('A1032', 'Madhuri Gupta', '9U@z$7y1%', 'Manager'),
('A1033', 'Nitin Rao', '7@v!mK2W%', 'Guide'),
('A1034', 'Pallavi Mohan', '4F@x8L!7Y', 'Owner'),
('A1035', 'Ganesh Iyer', '#8D@f5r1K', 'Manager'),
('A1036', 'Sarita Sharma', 'y6@p8s%b#', 'Guide'),
('A1037', 'Prakash Patel', '%3k@9q2N*', 'Owner'),
('A1038', 'Jyoti Mishra', '5X@y4K!v3', 'Manager'),
('A1039', 'Kunal Khurana', '8T@m4K&p!', 'Guide'),
('A1040', 'Sarika Singh', '6Z#n@2g7P', 'Owner'),
('A1041', 'Aditya Mehra', '2G@m!4y7J', 'Manager'),
('A1042', 'Shubha Agarwal', '9N#m5q6K@', 'Guide'),
('A1043', 'Rahul Tiwari', '3T@g9n8Q$', 'Owner'),
('A1044', 'Neelam Rao', '8M%r@5s9Z', 'Manager'),
('A1045', 'Sanjay Gupta', '5P%w!9x8H', 'Guide'),
('A1046', 'Juhi Patel', 'v$6t@8j3Q', 'Owner'),
('A1047', 'Amar Singh', '#3X@v9m7G', 'Manager'),
('A1048', 'Suman Sharma', '6H@x3L&4Z', 'Guide'),
('A1049', 'Deepak Verma', '9K@q3m2Jv', 'Owner'),
('A1050', 'Rajni Kapoor', '4R@m5J&8W', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Bill_no` varchar(512) DEFAULT NULL,
  `Amount` int DEFAULT NULL,
  `Date` varchar(512) DEFAULT NULL,
  `Payment_method` varchar(512) DEFAULT NULL,
  `User_Id` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Bill_no`, `Amount`, `Date`, `Payment_method`, `User_Id`) VALUES
('BL1001', 5000, '15-05-24', 'Credit Card', 'USR1001'),
('BL1002', 7000, '20-06-24', 'Debit Card', 'USR1002'),
('BL1003', 6000, '10-07-24', 'Net Banking', 'USR1003'),
('BL1004', 8000, '05-08-24', 'PayPal', 'USR1004'),
('BL1005', 6500, '15-09-24', 'Cash', 'USR1005'),
('BL1006', 7500, '20-10-24', 'Credit Card', 'USR1006'),
('BL1007', 8500, '10-11-24', 'Debit Card', 'USR1007'),
('BL1008', 7000, '05-12-24', 'Net Banking', 'USR1008'),
('BL1009', 9000, '20-01-25', 'PayPal', 'USR1009'),
('BL1010', 8000, '15-02-25', 'Cash', 'USR1010'),
('BL1011', 6000, '10-03-25', 'Credit Card', 'USR1011'),
('BL1012', 10000, '05-04-25', 'Debit Card', 'USR1012'),
('BL1013', 7500, '20-05-25', 'Net Banking', 'USR1013'),
('BL1014', 9500, '10-06-25', 'PayPal', 'USR1014'),
('BL1015', 8000, '05-07-25', 'Cash', 'USR1015'),
('BL1016', 6500, '15-08-25', 'Credit Card', 'USR1016'),
('BL1017', 8500, '20-09-25', 'Debit Card', 'USR1017'),
('BL1018', 7000, '10-10-25', 'Net Banking', 'USR1018'),
('BL1019', 9000, '05-11-25', 'PayPal', 'USR1019'),
('BL1020', 7500, '20-12-25', 'Cash', 'USR1020'),
('BL1021', 7000, '15-01-26', 'Credit Card', 'USR1021'),
('BL1022', 9500, '10-02-26', 'Debit Card', 'USR1022'),
('BL1023', 8500, '05-03-26', 'Net Banking', 'USR1023'),
('BL1024', 8000, '20-04-26', 'PayPal', 'USR1024'),
('BL1025', 6000, '10-05-26', 'Cash', 'USR1025'),
('BL1026', 9000, '05-06-26', 'Credit Card', 'USR1026'),
('BL1027', 7500, '20-07-26', 'Debit Card', 'USR1027'),
('BL1028', 8500, '15-08-26', 'Net Banking', 'USR1028'),
('BL1029', 7000, '10-09-26', 'PayPal', 'USR1029'),
('BL1030', 9500, '05-10-26', 'Cash', 'USR1030'),
('BL1031', 8000, '20-11-26', 'Credit Card', 'USR1031'),
('BL1032', 7000, '10-12-26', 'Debit Card', 'USR1032'),
('BL1033', 8500, '05-01-27', 'Net Banking', 'USR1033'),
('BL1034', 7500, '20-02-27', 'PayPal', 'USR1034'),
('BL1035', 9000, '15-03-27', 'Cash', 'USR1035'),
('BL1036', 8000, '10-04-27', 'Credit Card', 'USR1036'),
('BL1037', 6500, '20-05-27', 'Debit Card', 'USR1037'),
('BL1038', 7000, '10-06-27', 'Net Banking', 'USR1038'),
('BL1039', 9500, '05-07-27', 'PayPal', 'USR1039'),
('BL1040', 8500, '20-08-27', 'Cash', 'USR1040'),
('BL1041', 7500, '15-09-27', 'Credit Card', 'USR1041'),
('BL1042', 8000, '10-10-27', 'Debit Card', 'USR1042'),
('BL1043', 7000, '05-11-27', 'Net Banking', 'USR1043'),
('BL1044', 9500, '20-12-27', 'PayPal', 'USR1044'),
('BL1045', 8500, '15-01-28', 'Cash', 'USR1045'),
('BL1046', 8000, '10-02-28', 'Credit Card', 'USR1046'),
('BL1047', 7500, '05-03-28', 'Debit Card', 'USR1047'),
('BL1048', 9000, '20-04-28', 'Net Banking', 'USR1048'),
('BL1049', 7000, '10-05-28', 'PayPal', 'USR1049'),
('BL1050', 9500, '05-06-28', 'Cash', 'USR1050');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Hotel_id` varchar(512) DEFAULT NULL,
  `Name` varchar(512) DEFAULT NULL,
  `No_Of_Rooms` int DEFAULT NULL,
  `Cost` int DEFAULT NULL,
  `Address` varchar(512) DEFAULT NULL,
  `Rating` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Hotel_id`, `Name`, `No_Of_Rooms`, `Cost`, `Address`, `Rating`) VALUES
('H1001', 'Grand Hyatt', 200, 5000, 'Mumbai', 8.5),
('H1002', 'Taj Palace', 150, 6000, 'Delhi', 9),
('H1003', 'Marriott Marquis', 180, 5500, 'Bengaluru', 8.7),
('H1004', 'Hilton', 220, 4800, 'Chennai', 8.2),
('H1005', 'InterContinental', 190, 5200, 'Kolkata', 8.4),
('H1006', 'The Oberoi', 210, 5100, 'Jaipur', 8.8),
('H1007', 'ITC Grand Chola', 240, 4700, 'Hyderabad', 8.3),
('H1008', 'Leela Palace', 230, 4900, 'Pune', 8.6),
('H1009', 'Radisson Blu', 170, 5700, 'Ahmedabad', 8.1),
('H1010', 'Hyatt Regency', 200, 5400, 'Lucknow', 8.9),
('H1011', 'The Ritz-Carlton', 250, 4600, 'Goa', 8),
('H1012', 'Novotel', 160, 6200, 'Chandigarh', 9.1),
('H1013', 'Four Seasons', 190, 5300, 'Nagpur', 8.7),
('H1014', 'Westin', 210, 5100, 'Indore', 8.4),
('H1015', 'Shangri-La', 180, 5800, 'Varanasi', 8.6),
('H1016', 'Le Meridien', 220, 5000, 'Dehradun', 8.2),
('H1017', 'DoubleTree', 200, 5600, 'Bhopal', 8.5),
('H1018', 'Crowne Plaza', 190, 5900, 'Gurugram', 8.8),
('H1019', 'JW Marriott', 240, 4800, 'Ludhiana', 8.3),
('H1020', 'Trident', 230, 5200, 'Raipur', 8.7),
('H1021', 'The Leela', 170, 5700, 'Vadodara', 8.2),
('H1022', 'Holiday Inn', 200, 5400, 'Ranchi', 8.9),
('H1023', 'Park Hyatt', 250, 4600, 'Visakhapatnam', 8),
('H1024', 'Grand Mercure', 160, 6200, 'Puducherry', 9.1),
('H1025', 'Aloft', 190, 5300, 'Kochi', 8.7),
('H1026', 'Hotel Formule1', 210, 5100, 'Mysuru', 8.4),
('H1027', 'ibis', 180, 5800, 'Thiruvananthapuram', 8.6),
('H1028', 'The Lalit', 220, 5000, 'Bhubaneswar', 8.2),
('H1029', 'Radisson', 200, 5600, 'Aurangabad', 8.5),
('H1030', 'Renaissance', 190, 5900, 'Surat', 8.8),
('H1031', 'ITC Maurya', 230, 5200, 'Patna', 8.7),
('H1032', 'The Westin', 170, 5700, 'Jodhpur', 8.2),
('H1033', 'Taj Bengal', 200, 5400, 'Kanpur', 8.9),
('H1034', 'Le Méridien', 250, 4600, 'Gwalior', 8),
('H1035', 'Hotel Sahara Star', 160, 6200, 'Amritsar', 9.1),
('H1036', 'The Gateway Hotel', 190, 5300, 'Nashik', 8.7),
('H1037', 'Hyatt Pune', 210, 5100, 'Kolhapur', 8.4),
('H1038', 'Hilton Mumbai', 180, 5800, 'Jabalpur', 8.6),
('H1039', 'Taj Lands End', 220, 5000, 'Allahabad', 8.2),
('H1040', 'The St. Regis', 200, 5600, 'Rajkot', 8.5),
('H1041', 'Le Méridien', 190, 5900, 'Guwahati', 8.8),
('H1042', 'The Ritz-Carlton', 230, 5200, 'Rourkela', 8.7),
('H1043', 'Oberoi Grand', 170, 5700, 'Hisar', 8.2),
('H1044', 'ITC Sonar', 200, 5400, 'Ramgarh', 8.9),
('H1045', 'The Oberoi Cecil', 250, 4600, 'Kharagpur', 8),
('H1046', 'Hotel Trident', 200, 5500, 'Panchkula', 8.4),
('H1047', 'The Lalit Great Eastern', 220, 5200, 'Siliguri', 8.6),
('H1048', 'Crowne Plaza Jaipur Tonk Road', 210, 5300, 'Jaipur', 8.5),
('H1049', 'Hyatt Ahmedabad', 190, 5700, 'Ahmedabad', 8.7),
('H1050', 'Marriott Hotel Kochi', 180, 5800, 'Kochi', 8.9);

-- --------------------------------------------------------

--
-- Table structure for table `itinerary`
--

CREATE TABLE `itinerary` (
  `Itinerary_id` varchar(512) DEFAULT NULL,
  `Title` varchar(512) DEFAULT NULL,
  `Budget` int DEFAULT NULL,
  `Country` varchar(512) DEFAULT NULL,
  `State` varchar(512) DEFAULT NULL,
  `City` varchar(512) DEFAULT NULL,
  `Rating` double DEFAULT NULL,
  `No_Of_Travellers` varchar(512) DEFAULT NULL,
  `FoodPreference` varchar(512) DEFAULT NULL,
  `Transport_id` varchar(512) DEFAULT NULL,
  `Hotel_id` varchar(512) DEFAULT NULL,
  `Date_Of_Travel` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `itinerary`
--

INSERT INTO `itinerary` (`Itinerary_id`, `Title`, `Budget`, `Country`, `State`, `City`, `Rating`, `No_Of_Travellers`, `FoodPreference`, `Transport_id`, `Hotel_id`, `Date_Of_Travel`) VALUES
('IT1001', 'Exploring Mumbai', 5000, 'India', 'Maharashtra', 'Mumbai', 4.2, '2', 'Vegetarian', 'FL1001', 'HT1001', '15-05-24'),
('IT1002', 'Sightseeing in Paris', 8000, 'France', 'Île-de-France', 'Paris', 4.5, '1', 'Non-Vegetarian', 'FL1021', 'HT1041', '20-06-24'),
('IT1003', 'Weekend Trip to Goa', 6000, 'India', 'Goa', 'Panaji', 4.6, '4', 'Seafood', 'FL1002', 'HT1009', '10-07-24'),
('IT1004', 'Business Trip to New York', 10000, 'United States', 'New York', 'New York City', 4.8, '1', 'Non-Vegetarian', 'FL1023', 'HT1051', '05-08-24'),
('IT1005', 'Adventure in Tokyo', 7000, 'Japan', 'Tokyo', 'Tokyo', 4.7, '2', 'Vegetarian', 'FL1025', 'HT1024', '15-09-24'),
('IT1006', 'Exploring Barcelona', 7500, 'Spain', 'Catalonia', 'Barcelona', 4.4, '2', 'Non-Vegetarian', 'FL1026', 'HT1063', '20-10-24'),
('IT1007', 'Holiday in Sydney', 8500, 'Australia', 'New South Wales', 'Sydney', 4.6, '2', 'Seafood', 'FL1031', 'HT1055', '10-11-24'),
('IT1008', 'Exploring Bangkok', 7000, 'Thailand', 'Bangkok', 'Bangkok', 4.3, '1', 'Vegetarian', 'FL1038', 'HT1054', '05-12-24'),
('IT1009', 'Weekend in Amsterdam', 8000, 'Netherlands', 'North Holland', 'Amsterdam', 4.5, '1', 'Non-Vegetarian', 'FL1039', 'HT1069', '20-01-25'),
('IT1010', 'Relaxing in Zurich', 9000, 'Switzerland', 'Zurich', 'Zurich', 4.7, '2', 'Vegetarian', 'FL1040', 'HT1070', '15-02-25'),
('IT1011', 'Cultural Tour in Delhi', 5500, 'India', 'Delhi', 'New Delhi', 4.4, '3', 'Vegetarian', 'FL1003', 'HT1002', '10-03-25'),
('IT1012', 'Skiing in Oslo', 10000, 'Norway', 'Oslo', 'Oslo', 4.8, '2', 'Non-Vegetarian', 'FL1047', 'HT1047', '05-04-25'),
('IT1013', 'Hiking in Helsinki', 7500, 'Finland', 'Uusimaa', 'Helsinki', 4.6, '1', 'Vegan', 'FL1048', 'HT1048', '20-05-25'),
('IT1014', 'Exploring Dubai', 9000, 'United Arab Emirates', 'Dubai', 'Dubai', 4.5, '2', 'Non-Vegetarian', 'FL1036', 'HT1036', '10-06-25'),
('IT1015', 'Sightseeing in Rome', 8000, 'Italy', 'Lazio', 'Rome', 4.7, '1', 'Non-Vegetarian', 'FL1024', 'HT1056', '05-07-25'),
('IT1016', 'Weekend Trip to Bengaluru', 6000, 'India', 'Karnataka', 'Bangalore', 4.3, '4', 'Seafood', 'FL1004', 'HT1003', '15-08-25'),
('IT1017', 'Exploring Istanbul', 8500, 'Turkey', 'Istanbul', 'Istanbul', 4.4, '2', 'Vegetarian', 'FL1029', 'HT1029', '20-09-25'),
('IT1018', 'Adventure in Seoul', 7500, 'South Korea', 'Seoul', 'Seoul', 4.6, '1', 'Non-Vegetarian', 'FL1037', 'HT1037', '10-10-25'),
('IT1019', 'Holiday in Barcelona', 9000, 'Spain', 'Catalonia', 'Barcelona', 4.7, '2', 'Vegetarian', 'FL1026', 'HT1063', '05-11-25'),
('IT1020', 'Cultural Tour in Paris', 6000, 'France', 'Île-de-France', 'Paris', 4.5, '3', 'Vegan', 'FL1021', 'HT1041', '20-12-25'),
('IT1021', 'Exploring Moscow', 8500, 'Russia', 'Moscow', 'Moscow', 4.6, '2', 'Non-Vegetarian', 'FL1028', 'HT1028', '15-01-26'),
('IT1022', 'Weekend Trip to Goa', 6500, 'India', 'Goa', 'Panaji', 4.4, '4', 'Vegetarian', 'FL1002', 'HT1009', '10-02-26'),
('IT1023', 'Skiing in Stockholm', 10000, 'Sweden', 'Stockholm', 'Stockholm', 4.8, '2', 'Non-Vegetarian', 'FL1044', 'HT1044', '05-03-26'),
('IT1024', 'Relaxing in Dubai', 9500, 'United Arab Emirates', 'Dubai', 'Dubai', 4.7, '2', 'Vegan', 'FL1036', 'HT1036', '20-04-26'),
('IT1025', 'Hiking in Auckland', 8000, 'New Zealand', 'Auckland', 'Auckland', 4.5, '1', 'Vegetarian', 'FL1045', 'HT1045', '10-05-26'),
('IT1026', 'Cultural Tour in Bangkok', 6500, 'Thailand', 'Bangkok', 'Bangkok', 4.3, '3', 'Non-Vegetarian', 'FL1038', 'HT1054', '05-06-26'),
('IT1027', 'Weekend in Amsterdam', 8500, 'Netherlands', 'North Holland', 'Amsterdam', 4.6, '1', 'Vegetarian', 'FL1039', 'HT1069', '20-07-26'),
('IT1028', 'Adventure in Barcelona', 9000, 'Spain', 'Catalonia', 'Barcelona', 4.7, '2', 'Seafood', 'FL1026', 'HT1063', '15-08-26'),
('IT1029', 'Holiday in Tokyo', 7500, 'Japan', 'Tokyo', 'Tokyo', 4.4, '1', 'Non-Vegetarian', 'FL1025', 'HT1024', '10-09-26'),
('IT1030', 'Sightseeing in London', 8000, 'United Kingdom', 'England', 'London', 4.6, '1', 'Vegetarian', 'FL1023', 'HT1052', '05-10-26'),
('IT1031', 'Exploring Paris', 8500, 'France', 'Île-de-France', 'Paris', 4.7, '2', 'Vegan', 'FL1021', 'HT1041', '20-11-26'),
('IT1032', 'Weekend Trip to Moscow', 6500, 'Russia', 'Moscow', 'Moscow', 4.3, '4', 'Non-Vegetarian', 'FL1028', 'HT1028', '10-12-26'),
('IT1033', 'Cultural Tour in Rome', 9000, 'Italy', 'Lazio', 'Rome', 4.5, '3', 'Non-Vegetarian', 'FL1024', 'HT1056', '05-01-27'),
('IT1034', 'Adventure in Istanbul', 7500, 'Turkey', 'Istanbul', 'Istanbul', 4.6, '1', 'Vegetarian', 'FL1029', 'HT1029', '20-02-27'),
('IT1035', 'Holiday in Seoul', 8000, 'South Korea', 'Seoul', 'Seoul', 4.4, '2', 'Vegan', 'FL1037', 'HT1037', '15-03-27'),
('IT1036', 'Skiing in Stockholm', 10000, 'Sweden', 'Stockholm', 'Stockholm', 4.8, '2', 'Non-Vegetarian', 'FL1044', 'HT1044', '10-04-27'),
('IT1037', 'Relaxing in Dubai', 9500, 'United Arab Emirates', 'Dubai', 'Dubai', 4.7, '2', 'Vegan', 'FL1036', 'HT1036', '20-05-27'),
('IT1038', 'Hiking in Auckland', 8000, 'New Zealand', 'Auckland', 'Auckland', 4.5, '1', 'Vegetarian', 'FL1045', 'HT1045', '10-06-27'),
('IT1039', 'Cultural Tour in Bangkok', 6500, 'Thailand', 'Bangkok', 'Bangkok', 4.3, '3', 'Non-Vegetarian', 'FL1038', 'HT1054', '05-07-27'),
('IT1040', 'Weekend in Amsterdam', 8500, 'Netherlands', 'North Holland', 'Amsterdam', 4.6, '1', 'Vegetarian', 'FL1039', 'HT1069', '20-08-27'),
('IT1041', 'Adventure in Paris', 7500, 'France', 'Île-de-France', 'Paris', 4.4, '2', 'Non-Vegetarian', 'FL1021', 'HT1041', '15-09-27'),
('IT1042', 'Exploring Los Angeles', 8000, 'United States', 'California', 'Los Angeles', 4.6, '1', 'Vegan', 'FL1022', 'HT1052', '10-10-27'),
('IT1043', 'Holiday in London', 8500, 'United Kingdom', 'England', 'London', 4.7, '2', 'Vegetarian', 'FL1023', 'HT1052', '05-11-27'),
('IT1044', 'Weekend Trip to Rome', 6500, 'Italy', 'Lazio', 'Rome', 4.3, '3', 'Non-Vegetarian', 'FL1024', 'HT1056', '20-12-27'),
('IT1045', 'Cultural Tour in Tokyo', 9000, 'Japan', 'Tokyo', 'Tokyo', 4.5, '2', 'Vegan', 'FL1025', 'HT1024', '15-01-28'),
('IT1046', 'Sightseeing in Barcelona', 7500, 'Spain', 'Catalonia', 'Barcelona', 4.6, '1', 'Vegetarian', 'FL1026', 'HT1063', '10-02-28'),
('IT1047', 'Adventure in São Paulo', 8000, 'Brazil', 'São Paulo', 'São Paulo', 4.7, '2', 'Non-Vegetarian', 'FL1027', 'HT1027', '05-03-28'),
('IT1048', 'Weekend in Moscow', 6500, 'Russia', 'Moscow', 'Moscow', 4.3, '3', 'Vegetarian', 'FL1028', 'HT1028', '20-04-28'),
('IT1049', 'Holiday in Dubai', 9500, 'United Arab Emirates', 'Dubai', 'Dubai', 4.6, '2', 'Non-Vegetarian', 'FL1036', 'HT1036', '10-05-28'),
('IT1050', 'Exploring Amsterdam', 8500, 'Netherlands', 'North Holland', 'Amsterdam', 4.5, '1', 'Vegetarian', 'FL1039', 'HT1069', '05-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `tourist_places`
--

CREATE TABLE `tourist_places` (
  `Id` varchar(512) DEFAULT NULL,
  `Country` varchar(512) DEFAULT NULL,
  `State` varchar(512) DEFAULT NULL,
  `City` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tourist_places`
--

INSERT INTO `tourist_places` (`Id`, `Country`, `State`, `City`) VALUES
('TP1001', 'India', 'Maharashtra', 'Mumbai'),
('TP1002', 'India', 'Delhi', 'New Delhi'),
('TP1003', 'India', 'Karnataka', 'Bangalore'),
('TP1004', 'India', 'Tamil Nadu', 'Chennai'),
('TP1005', 'India', 'West Bengal', 'Kolkata'),
('TP1006', 'India', 'Rajasthan', 'Jaipur'),
('TP1007', 'India', 'Telangana', 'Hyderabad'),
('TP1008', 'India', 'Uttar Pradesh', 'Lucknow'),
('TP1009', 'India', 'Goa', 'Panaji'),
('TP1010', 'India', 'Himachal Pradesh', 'Shimla'),
('TP1011', 'India', 'Gujarat', 'Ahmedabad'),
('TP1012', 'India', 'Punjab', 'Chandigarh'),
('TP1013', 'India', 'Kerala', 'Thiruvananthapuram'),
('TP1014', 'India', 'Assam', 'Dispur'),
('TP1015', 'India', 'Uttarakhand', 'Dehradun'),
('TP1016', 'India', 'Bihar', 'Patna'),
('TP1017', 'India', 'Haryana', 'Chandigarh'),
('TP1018', 'India', 'Odisha', 'Bhubaneswar'),
('TP1019', 'India', 'Chhattisgarh', 'Raipur'),
('TP1020', 'India', 'Jharkhand', 'Ranchi'),
('TP1021', 'France', 'Île-de-France', 'Paris'),
('TP1022', 'United States', 'California', 'Los Angeles'),
('TP1023', 'United Kingdom', 'England', 'London'),
('TP1024', 'Italy', 'Lazio', 'Rome'),
('TP1025', 'Japan', 'Tokyo', 'Tokyo'),
('TP1026', 'Spain', 'Catalonia', 'Barcelona'),
('TP1027', 'Brazil', 'São Paulo', 'São Paulo'),
('TP1028', 'Russia', 'Moscow', 'Moscow'),
('TP1029', 'Turkey', 'Istanbul', 'Istanbul'),
('TP1030', 'Malaysia', 'Kuala Lumpur', 'Kuala Lumpur'),
('TP1031', 'Australia', 'New South Wales', 'Sydney'),
('TP1032', 'Canada', 'Ontario', 'Toronto'),
('TP1033', 'China', 'Beijing', 'Beijing'),
('TP1034', 'Singapore', 'Central Singapore', 'Singapore'),
('TP1035', 'Germany', 'Berlin', 'Berlin'),
('TP1036', 'United Arab Emirates', 'Dubai', 'Dubai'),
('TP1037', 'South Korea', 'Seoul', 'Seoul'),
('TP1038', 'Thailand', 'Bangkok', 'Bangkok'),
('TP1039', 'Netherlands', 'North Holland', 'Amsterdam'),
('TP1040', 'Switzerland', 'Zurich', 'Zurich'),
('TP1041', 'Austria', 'Vienna', 'Vienna'),
('TP1042', 'Argentina', 'Buenos Aires', 'Buenos Aires'),
('TP1043', 'Denmark', 'Capital Region of Denmark', 'Copenhagen'),
('TP1044', 'Sweden', 'Stockholm', 'Stockholm'),
('TP1045', 'New Zealand', 'Auckland', 'Auckland'),
('TP1046', 'Portugal', 'Lisbon', 'Lisbon'),
('TP1047', 'Norway', 'Oslo', 'Oslo'),
('TP1048', 'Finland', 'Uusimaa', 'Helsinki'),
('TP1049', 'Belgium', 'Brussels-Capital Region', 'Brussels'),
('TP1050', 'Ireland', 'Leinster', 'Dublin');

-- --------------------------------------------------------

--
-- Table structure for table `transport_type`
--

CREATE TABLE `transport_type` (
  `Transport_id` varchar(512) DEFAULT NULL,
  `NameOfProvider` varchar(512) DEFAULT NULL,
  `Fare` double DEFAULT NULL,
  `TypeOfVehicle` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transport_type`
--

INSERT INTO `transport_type` (`Transport_id`, `NameOfProvider`, `Fare`, `TypeOfVehicle`) VALUES
('T1001', 'Air India', 50000, 'Flight'),
('T1002', 'IndiGo', 45000, 'Flight'),
('T1003', 'GoAir', 40000, 'Flight'),
('T1004', 'SpiceJet', 42000, 'Flight'),
('T1005', 'Jet Airways', 55000, 'Flight'),
('T1006', 'Vistara', 48000, 'Flight'),
('T1007', 'British Airways', 60000, 'Flight'),
('T1008', 'Lufthansa', 70000, 'Flight'),
('T1009', 'Emirates', 75000, 'Flight'),
('T1010', 'Etihad Airways', 68000, 'Flight'),
('T1011', 'Qatar Airways', 72000, 'Flight'),
('T1012', 'First Flight', 28000, 'Flight'),
('T1013', 'Ola', 2500, 'Car'),
('T1014', 'Uber', 2000, 'Car'),
('T1015', 'Tata Motors', 3000, 'Car'),
('T1016', 'Maruti Suzuki', 2800, 'Car'),
('T1017', 'ZoomCar', 3000, 'Car'),
('T1018', 'Ford', 3200, 'Car'),
('T1019', 'Honda', 2700, 'Car'),
('T1020', 'Kia Motors', 3500, 'Car'),
('T1021', 'Volvo', 1200, 'Bus'),
('T1022', 'KSRTC', 1000, 'Bus'),
('T1023', 'BMTC', 800, 'Bus'),
('T1024', 'Scania', 1400, 'Bus'),
('T1025', 'Toyota', 2900, 'Car'),
('T1026', 'Nissan', 3100, 'Car'),
('T1027', 'Hyundai', 2600, 'Car'),
('T1028', 'Mercedes-Benz', 4000, 'Car'),
('T1029', 'Metro', 500, 'Train'),
('T1030', 'Indian Railways', 1000, 'Train'),
('T1031', 'Air India', 50000, 'Flight'),
('T1032', 'IndiGo', 45000, 'Flight'),
('T1033', 'GoAir', 40000, 'Flight'),
('T1034', 'SpiceJet', 42000, 'Flight'),
('T1035', 'Jet Airways', 55000, 'Flight'),
('T1036', 'Vistara', 48000, 'Flight'),
('T1037', 'British Airways', 60000, 'Flight'),
('T1038', 'Lufthansa', 70000, 'Flight'),
('T1039', 'Emirates', 75000, 'Flight'),
('T1040', 'Etihad Airways', 68000, 'Flight'),
('T1041', 'Qatar Airways', 72000, 'Flight'),
('T1042', 'First Flight', 28000, 'Flight'),
('T1043', 'Ola', 2500, 'Car'),
('T1044', 'Uber', 2000, 'Car'),
('T1045', 'Tata Motors', 3000, 'Car'),
('T1046', 'Maruti Suzuki', 2800, 'Car'),
('T1047', 'ZoomCar', 3000, 'Car'),
('T1048', 'Ford', 3200, 'Car'),
('T1049', 'Honda', 2700, 'Car'),
('T1050', 'Kia Motors', 3500, 'Car');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_Id` varchar(512) DEFAULT NULL,
  `Name` varchar(512) DEFAULT NULL,
  `Password` varchar(512) DEFAULT NULL,
  `Dob` varchar(512) DEFAULT NULL,
  `Email_Id` varchar(512) DEFAULT NULL,
  `Address` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_Id`, `Name`, `Password`, `Dob`, `Email_Id`, `Address`) VALUES
('U1001', 'Ravi Kumar', 'h3L#Z$p!@', '15-05-90', 'ravikumar@example.com', 'Mumbai'),
('U1002', 'Priya Patel', 'y%2&nJ@9!', '25-10-88', 'priyapatel@example.com', 'New Delhi'),
('U1003', 'Amit Singh', '$e*4Xb8#Z', '08-03-95', 'amitsingh@example.com', 'Bangalore'),
('U1004', 'Deepika Sharma', 'Q7^T@g*1K', '30-12-87', 'deepikasharma@example.com', 'Kolkata'),
('U1005', 'Rajesh Gupta', '5@hY*o#mP', '18-08-90', 'rajeshgupta@example.com', 'Chennai'),
('U1006', 'Neha Khan', '8k$Q@jPw!', '20-07-92', 'nehakhan@example.com', 'Hyderabad'),
('U1007', 'Vikram Malhotra', 'w&3$%kS1J', '12-06-85', 'vikrammalhotra@example.com', 'Pune'),
('U1008', 'Anjali Desai', '6R*t#xG9@', '05-09-98', 'anjalidesai@example.com', 'Ahmedabad'),
('U1009', 'Sandeep Verma', 'b2!mP8Lx&', '28-04-93', 'sandeepverma@example.com', 'Jaipur'),
('U1010', 'Sunita Reddy', 'y$F&5u@4m', '02-11-96', 'sunitareddy@example.com', 'Lucknow'),
('U1011', 'Rahul Iyer', 'P^4uK&w8#', '14-02-87', 'rahuliyer@example.com', 'Kanpur'),
('U1012', 'Pooja Choudhury', '9L!s$zN7#', '30-06-89', 'poojachoudhury@example.com', 'Nagpur'),
('U1013', 'Arun Khanna', '2@B8w*3%q', '22-09-86', 'arunkhanna@example.com', 'Indore'),
('U1014', 'Shilpa Joshi', 'u@1H9V!s%', '17-03-91', 'shilpajoshi@example.com', 'Thane'),
('U1015', 'Manoj Kapoor', '5T@n6%y#J', '04-07-94', 'manojkapoor@example.com', 'Bhopal'),
('U1016', 'Sneha Sharma', '#9x@7g4P!', '28-11-88', 'snehasharma@example.com', 'Visakhapatnam'),
('U1017', 'Rajendra Prasad', 'p6Q&wN1!%', '12-12-79', 'rajendraprasad@example.com', 'Patna'),
('U1018', 'Nisha Singh', 'nisha1997', '09-05-97', 'nishasingh@example.com', 'Ludhiana'),
('U1019', 'Kishan Patel', 'kishan@1991', '03-08-91', 'kishanpatel@example.com', 'Agra'),
('U1020', 'Swati Menon', 'swati#93', '17-10-93', 'swatimenon@example.com', 'Nashik'),
('U1021', 'Arjun Deshpande', 'arjun@1998', '21-01-98', 'arjundeshpande@example.com', 'Meerut'),
('U1022', 'Anita Chatterjee', 'anita@85', '15-04-85', 'anitachatterjee@example.com', 'Varanasi'),
('U1023', 'Vivek Rastogi', '&y5r@K8J!', '27-09-92', 'vivekrastogi@example.com', 'Allahabad'),
('U1024', 'Ananya Das', 'ananya1989', '31-12-89', 'ananyadas@example.com', 'Jabalpur'),
('U1025', 'Suresh Tiwari', 'suresh@97', '05-02-97', 'sureshtiwari@example.com', 'Ranchi'),
('U1026', 'Meena Singh', 'meenak@2000', '12-06-00', 'meenasingh@example.com', 'Gwalior'),
('U1027', 'Harish Sharma', 'harish_1994', '03-10-94', 'harishsharma@example.com', 'Jodhpur'),
('U1028', 'Geeta Patel', 'geeta78', '27-03-78', 'geetapatel@example.com', 'Raipur'),
('U1029', 'Alok Dubey', 'alok@96', '14-08-96', 'alokdubey@example.com', 'Kota'),
('U1030', 'Kavita Shah', 'kavita#99', '07-11-99', 'kavitashah@example.com', 'Chandigarh'),
('U1031', 'Anand Joshi', 'anand85', '19-02-85', 'anandjoshi@example.com', 'Guwahati'),
('U1032', 'Madhuri Gupta', 'madhuri@90', '23-07-90', 'madhurigupta@example.com', 'Shimla'),
('U1033', 'Nitin Rao', 'nitin_87', '15-09-87', 'nitinrao@example.com', 'Kochi'),
('U1034', 'Pallavi Mohan', 'pallavi_91', '05-01-91', 'pallavimohan@example.com', 'Thiruvananthapuram'),
('U1035', 'Ganesh Iyer', 'ganesh@95', '11-04-95', 'ganeshiyer@example.com', 'Mysore'),
('U1036', 'Anushka Sharma', 'sharma@2001', '20-08-01', 'anushkasharma@example.com', 'Jaipur'),
('U1037', 'Rahul Khanna', 'rahul@1996', '25-12-96', 'rahulkhanna@example.com', 'New Delhi'),
('U1038', 'Aarav Singh', 'singh@1999', '10-05-99', 'aaravsingh@example.com', 'Mumbai'),
('U1039', 'Ishaan Mehra', 'mehra@2002', '01-04-02', 'ishaanmehra@example.com', 'Chennai'),
('U1040', 'Aadya Gupta', 'gupta@2003', '07-11-03', 'aadyagupta@example.com', 'Kolkata'),
('U1041', 'Aaradhya Patel', 'patel@2005', '14-09-05', 'aaradhyapatel@example.com', 'Bangalore'),
('U1042', 'Veer Singh', 'singh@1998', '18-03-98', 'veersingh@example.com', 'Hyderabad'),
('U1043', 'Diya Reddy', 'reddy@2004', '22-06-04', 'diyareddy@example.com', 'Pune'),
('U1044', 'Kabir Kumar', 'kumar@2000', '30-10-00', 'kabirkumar@example.com', 'Ahmedabad'),
('U1045', 'Aahana Sharma', 'sharma@2006', '08-02-06', 'aahanasharma@example.com', 'Jaipur'),
('U1046', 'Vihaan Khanna', 'khanna@2007', '17-07-07', 'vihaankhanna@example.com', 'Lucknow'),
('U1047', 'Advik Patel', 'patel@2008', '24-12-08', 'advikpatel@example.com', 'Kanpur'),
('U1048', 'Misha Gupta', 'gupta@2009', '03-04-09', 'mishagupta@example.com', 'Nagpur'),
('U1049', 'Ananya Singh', 'singh@2010', '11-08-10', 'ananyasingh@example.com', 'Indore'),
('U1050', 'Kiaan Choudhury', 'choudhury@2011', '16-03-11', 'kiaanchoudhury@example.com', 'Thane');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `Account_Id` varchar(512) DEFAULT NULL,
  `Doj` varchar(512) DEFAULT NULL,
  `Wallet` int DEFAULT NULL,
  `User_Id` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`Account_Id`, `Doj`, `Wallet`, `User_Id`) VALUES
('A1001', '15-03-20', 5000, 'U1001'),
('A1002', '21-08-19', 7500, 'U1002'),
('A1003', '10-01-21', 3000, 'U1003'),
('A1004', '05-05-22', 4500, 'U1004'),
('A1005', '30-11-23', 6000, 'U1005'),
('A1006', '17-07-20', 4000, 'U1006'),
('A1007', '25-12-19', 5500, 'U1007'),
('A1008', '02-08-21', 6500, 'U1008'),
('A1009', '14-09-22', 7000, 'U1009'),
('A1010', '03-04-23', 8000, 'U1010'),
('A1011', '19-11-20', 3500, 'U1011'),
('A1012', '27-05-19', 4800, 'U1012'),
('A1013', '08-03-21', 5200, 'U1013'),
('A1014', '12-10-22', 6800, 'U1014'),
('A1015', '01-07-23', 4200, 'U1015'),
('A1016', '30-01-20', 5700, 'U1016'),
('A1017', '18-06-19', 6100, 'U1017'),
('A1018', '25-09-21', 4600, 'U1018'),
('A1019', '08-12-22', 7300, 'U1019'),
('A1020', '14-02-23', 3800, 'U1020'),
('A1021', '20-05-20', 5000, 'U1021'),
('A1022', '11-10-19', 6400, 'U1022'),
('A1023', '03-07-21', 3000, 'U1023'),
('A1024', '19-08-22', 5500, 'U1024'),
('A1025', '07-01-23', 4700, 'U1025'),
('A1026', '24-04-20', 6200, 'U1026'),
('A1027', '15-09-19', 5400, 'U1027'),
('A1028', '28-11-21', 4900, 'U1028'),
('A1029', '05-06-22', 6800, 'U1029'),
('A1030', '11-08-23', 5100, 'U1030'),
('A1031', '09-02-20', 4500, 'U1031'),
('A1032', '14-07-19', 5900, 'U1032'),
('A1033', '29-10-21', 7000, 'U1033'),
('A1034', '17-03-22', 4300, 'U1034'),
('A1035', '22-05-23', 6500, 'U1035'),
('A1036', '03-09-20', 4800, 'U1036'),
('A1037', '06-04-19', 5400, 'U1037'),
('A1038', '25-12-21', 5200, 'U1038'),
('A1039', '18-02-22', 4600, 'U1039'),
('A1040', '11-03-23', 6900, 'U1040'),
('A1041', '28-06-20', 3900, 'U1041'),
('A1042', '05-11-19', 5700, 'U1042'),
('A1043', '18-08-21', 4800, 'U1043'),
('A1044', '01-07-22', 6200, 'U1044'),
('A1045', '14-09-23', 5500, 'U1045'),
('A1046', '22-03-20', 5000, 'U1046'),
('A1047', '12-08-19', 6600, 'U1047'),
('A1048', '27-01-21', 4300, 'U1048'),
('A1049', '09-04-22', 7100, 'U1049'),
('A1050', '15-06-23', 5400, 'U1050');

-- --------------------------------------------------------

--
-- Table structure for table `user_preference`
--

CREATE TABLE `user_preference` (
  `User_Id` varchar(512) DEFAULT NULL,
  `Budget` int DEFAULT NULL,
  `Country` varchar(512) DEFAULT NULL,
  `Climate` varchar(512) DEFAULT NULL,
  `Rating` double DEFAULT NULL,
  `No_Of_Travellers` varchar(512) DEFAULT NULL,
  `FoodPreference` varchar(512) DEFAULT NULL,
  `Transport_Preference` varchar(512) DEFAULT NULL,
  `No_Of_Days` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_preference`
--

INSERT INTO `user_preference` (`User_Id`, `Budget`, `Country`, `Climate`, `Rating`, `No_Of_Travellers`, `FoodPreference`, `Transport_Preference`, `No_Of_Days`) VALUES
('USR1011', 7500, 'Italy', 'Moderate', 4.5, '2', 'Non-Vegetarian', 'Flight', 7),
('USR1012', 8500, 'South Korea', 'Mild', 4.4, '1', 'Vegetarian', 'Flight', 8),
('USR1013', 9000, 'Germany', 'Moderate', 4.7, '2', 'Seafood', 'Flight', 9),
('USR1014', 7000, 'Brazil', 'Tropical', 4.6, '2', 'Non-Vegetarian', 'Flight', 6),
('USR1015', 8000, 'Russia', 'Cold', 4.3, '1', 'Vegan', 'Flight', 7),
('USR1016', 9500, 'New Zealand', 'Mild', 4.8, '2', 'Non-Vegetarian', 'Flight', 10),
('USR1017', 6000, 'Sweden', 'Cold', 4.2, '4', 'Seafood', 'Train', 5),
('USR1018', 7000, 'Norway', 'Cold', 4.6, '2', 'Vegetarian', 'Train', 6),
('USR1019', 8500, 'Denmark', 'Cold', 4.4, '1', 'Non-Vegetarian', 'Flight', 8),
('USR1020', 8000, 'Argentina', 'Mild', 4.5, '2', 'Vegetarian', 'Flight', 7),
('USR1021', 7500, 'Portugal', 'Moderate', 4.3, '1', 'Vegan', 'Flight', 6),
('USR1022', 9000, 'Finland', 'Cold', 4.7, '2', 'Non-Vegetarian', 'Flight', 9),
('USR1023', 8500, 'United Kingdom', 'Mild', 4.6, '1', 'Non-Vegetarian', 'Flight', 8),
('USR1024', 7000, 'Switzerland', 'Moderate', 4.5, '1', 'Vegetarian', 'Train', 6),
('USR1025', 9500, 'Ireland', 'Mild', 4.8, '2', 'Seafood', 'Flight', 10),
('USR1026', 8000, 'Austria', 'Moderate', 4.4, '2', 'Vegan', 'Flight', 7),
('USR1027', 7500, 'Singapore', 'Tropical', 4.3, '1', 'Non-Vegetarian', 'Flight', 6),
('USR1028', 7000, 'Malaysia', 'Tropical', 4.6, '2', 'Non-Vegetarian', 'Flight', 6),
('USR1029', 9000, 'China', 'Mild', 4.7, '2', 'Seafood', 'Flight', 8),
('USR1030', 8000, 'Turkey', 'Moderate', 4.5, '1', 'Vegetarian', 'Flight', 7),
('USR1031', 8500, 'Maldives', 'Tropical', 4.6, '2', 'Vegan', 'Flight', 8),
('USR1032', 7500, 'Greece', 'Moderate', 4.4, '1', 'Vegetarian', 'Flight', 6),
('USR1033', 9000, 'Sri Lanka', 'Tropical', 4.7, '2', 'Non-Vegetarian', 'Flight', 8),
('USR1034', 8500, 'Philippines', 'Tropical', 4.5, '1', 'Vegan', 'Flight', 7),
('USR1035', 7000, 'Egypt', 'Hot', 4.3, '1', 'Non-Vegetarian', 'Flight', 6),
('USR1036', 9500, 'Peru', 'Mild', 4.6, '2', 'Seafood', 'Flight', 8),
('USR1037', 8000, 'Chile', 'Mild', 4.4, '2', 'Vegetarian', 'Flight', 7),
('USR1038', 7500, 'Costa Rica', 'Tropical', 4.3, '1', 'Non-Vegetarian', 'Flight', 6),
('USR1039', 9000, 'Canada', 'Cold', 4.7, '2', 'Vegan', 'Flight', 8),
('USR1040', 8500, 'Iceland', 'Cold', 4.6, '1', 'Non-Vegetarian', 'Flight', 8),
('USR1041', 7000, 'Scotland', 'Mild', 4.5, '1', 'Seafood', 'Train', 6),
('USR1042', 9500, 'Australia', 'Mild', 4.8, '2', 'Vegan', 'Flight', 10),
('USR1043', 8000, 'Germany', 'Moderate', 4.4, '2', 'Non-Vegetarian', 'Flight', 7),
('USR1044', 7500, 'Spain', 'Moderate', 4.3, '1', 'Vegetarian', 'Flight', 6),
('USR1045', 7000, 'France', 'Mild', 4.6, '2', 'Vegan', 'Flight', 6),
('USR1046', 9000, 'Italy', 'Moderate', 4.7, '2', 'Seafood', 'Flight', 8),
('USR1047', 8500, 'United States', 'Mild', 4.5, '1', 'Non-Vegetarian', 'Flight', 8),
('USR1048', 7000, 'Japan', 'Mild', 4.3, '1', 'Vegan', 'Flight', 6),
('USR1049', 9500, 'Brazil', 'Tropical', 4.6, '2', 'Non-Vegetarian', 'Flight', 8),
('USR1050', 8000, 'India', 'Tropical', 4.4, '2', 'Vegetarian', 'Train', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `User_Id` varchar(512) DEFAULT NULL,
  `Blood_group` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`User_Id`, `Blood_group`) VALUES
('U1001', 'A+'),
('U1002', 'O-'),
('U1003', 'B+'),
('U1004', 'AB-'),
('U1005', 'A-'),
('U1006', 'O+'),
('U1007', 'B-'),
('U1008', 'AB+'),
('U1009', 'A+'),
('U1010', 'O-'),
('U1011', 'B+'),
('U1012', 'AB-'),
('U1013', 'A-'),
('U1014', 'O+'),
('U1015', 'B-'),
('U1016', 'AB+'),
('U1017', 'A+'),
('U1018', 'O-'),
('U1019', 'B+'),
('U1020', 'AB-'),
('U1021', 'A-'),
('U1022', 'O+'),
('U1023', 'B-'),
('U1024', 'AB+'),
('U1025', 'A+'),
('U1026', 'O-'),
('U1027', 'B+'),
('U1028', 'AB-'),
('U1029', 'A-'),
('U1030', 'O+'),
('U1031', 'B-'),
('U1032', 'AB+'),
('U1033', 'A+'),
('U1034', 'O-'),
('U1035', 'B+'),
('U1036', 'AB-'),
('U1037', 'A-'),
('U1038', 'O+'),
('U1039', 'B-'),
('U1040', 'AB+'),
('U1041', 'A+'),
('U1042', 'O-'),
('U1043', 'B+'),
('U1044', 'AB-'),
('U1045', 'A-'),
('U1046', 'O+'),
('U1047', 'B-'),
('U1048', 'AB+'),
('U1049', 'A+'),
('U1050', 'O-');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
