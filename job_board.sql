-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2025 at 09:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_board`
--

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `Company_Name` varchar(255) NOT NULL,
  `Company_Description` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Industry` varchar(255) NOT NULL,
  `CEO_Name` varchar(50) DEFAULT NULL,
  `Yearly_Revenue` int(11) DEFAULT NULL,
  `Emp_Count` int(11) DEFAULT NULL,
  `Year_Founded` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`Company_Name`, `Company_Description`, `Email`, `Password`, `Industry`, `CEO_Name`, `Yearly_Revenue`, `Emp_Count`, `Year_Founded`) VALUES
('AgriCare', 'We have everything you need for Farms and Gardens alike!', 'jobs@agricare', '3d326e2bf04427b111d8ffbb012550317a7380f7', 'Other', 'Abrigail', 129000, 107, 1999),
('Dee`s Nuts', 'Has been selling Nuts across America since 1963', 'job@deeznuts.co', '97b918dec08ca5101ec623f6d69b06ae4e00b596', 'Retail', 'Debbie Nutterson', 161000, 69, 1963),
('EduTech', 'Educational Technology Firm', 'jobs@edutech.com', '23f79c9047693c2d81f75bff3ba65a794630773f', 'Technology', 'Sarah Lee', 166000, 93, 2013),
('HealthPlus', 'A Healthcare Service Provider', 'careers@healthplus.ca', '9ebbeffedbaffb156b8a7c44e4ba49ef8c28ab0f', 'Healthcare', 'David Smith', 212000, 127, 2009),
('TechCorp', 'Leading software development company', 'hr@techcorp.com', '0f016db246d4cdceb70316b7de04d1f67b5d3b87', 'Technology', 'Alice Ford', 253000, 227, 2004);

-- --------------------------------------------------------

--
-- Table structure for table `job_posting`
--

CREATE TABLE `job_posting` (
  `Job_ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Salary_Range` varchar(50) NOT NULL,
  `Job_type` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `Company_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_posting`
--

INSERT INTO `job_posting` (`Job_ID`, `Title`, `Description`, `Salary_Range`, `Job_type`, `location`, `Company_Name`) VALUES
(1, 'Software Development Lead', 'Looking for a new Leader in the Software space to help our teams in a few projects', '$26,000 - $41,000', 'Full-Time', 'TechCorp - Texas #4', 'TechCorp'),
(2, 'Database Maintenance Worker', 'Help ensure our databases are never broken', '$21,000 - $40,000', 'Part-Time', 'TechCorp - Florida #2', 'TechCorp'),
(3, 'Shelf Stocker', 'Stock the Shelves and assist where needed in the store', '$9,000 - $21,000', 'Full-Time', 'AgriCare Store #261', 'AgriCare'),
(4, 'Healthcare TeleMarketer', 'Call our customers to sell extended health care or other products', '$18,000 - $39,000', 'Full-Time', 'HealthCare Call Center #035', 'HealthPlus'),
(5, 'Delivery Driver', 'Drives Shipments of Nuts to clients', '$36,000 - $54,000', 'Full-Time', 'Deez Nuts Warehouse #025', 'Dee`s Nuts'),
(6, 'Sales Rep', 'Help with selling Nuts to more people', '$18,000 - $31,000', 'Full-Time', 'Deez Nuts Call Center #31', 'Dee`s Nuts');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Age` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Education` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Username`, `Password`, `First_Name`, `Last_Name`, `Age`, `Email`, `Education`) VALUES
('JaneS1985', '40ab67d0840a91170a96c60614b9f72202ae22b8', 'Jane', 'Smith', 27, 'janes@gmail.com', 'Bacholers'),
('JohnD1927', '6c074fa94c98638dfe3e3b74240573eb128b3d16', 'John', 'Doe', 43, 'johndoe@gmail.com', 'Masters'),
('KevinProne69', 'a4a65656996380d42c9d6f54ee7c8b39f7dd6ed9', 'Kevin', 'Prone', 18, 'kevinpiscool@hotmail.com', 'Highschool'),
('MBrown2001', 'f7de6920ceed9aae26dead3d654479d143ea9893', 'Mike', 'Brown', 21, 'mikeb@hotmail.com', 'Highschool'),
('SaraWhite420', '490a52aab9eecb038d9a68b2d794d0acdb7aea2a', 'Sara', 'White', 24, 'sara.white@yahoo.ca', 'Diploma');

-- --------------------------------------------------------

--
-- Table structure for table `stu_application`
--

CREATE TABLE `stu_application` (
  `Username` varchar(255) NOT NULL,
  `Job_ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Resume` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`Company_Name`);

--
-- Indexes for table `job_posting`
--
ALTER TABLE `job_posting`
  ADD PRIMARY KEY (`Job_ID`),
  ADD KEY `Company_Name` (`Company_Name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `stu_application`
--
ALTER TABLE `stu_application`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `Job_ID` (`Job_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_posting`
--
ALTER TABLE `job_posting`
  MODIFY `Job_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_posting`
--
ALTER TABLE `job_posting`
  ADD CONSTRAINT `job_posting_ibfk_1` FOREIGN KEY (`Company_Name`) REFERENCES `employer` (`Company_Name`);

--
-- Constraints for table `stu_application`
--
ALTER TABLE `stu_application`
  ADD CONSTRAINT `stu_application_ibfk_1` FOREIGN KEY (`Job_ID`) REFERENCES `job_posting` (`Job_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
