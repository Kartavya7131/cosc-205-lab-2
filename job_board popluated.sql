-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2025 at 09:23 PM
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
('EduTech', 'Educational technology firm', 'jobs@edutech.com', 'edupass', 'Education', 'Sarah Lee', 15000000, 100, 2015),
('HealthPlus', 'Healthcare solutions provider', 'careers@healthplus.com', 'securepass', 'Healthcare', 'David Smith', 20000000, 150, 2010),
('hi', 'hi', 'kart@gmail.com', 'b7a875fc1ea228b9061041b7cec4bd3c52ab3ce3', 'Agriculture', 'hi', 100000, 10, 2015),
('TechCorp', 'A leading software development company', 'hr@techcorp.com', 'pass123', 'Technology', 'Alice Johnson', 50000000, 200, 2005);

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
(1, 'Software Engineer', 'Develop and maintain software applications.', '$80,000 - $100,000', 'Full-time', 'Kelowna, BC', 'TechCorp'),
(2, 'Data Analyst', 'Analyze and interpret complex data sets.', '$70,000 - $90,000', 'Full-time', 'Toronto, ON', 'TechCorp'),
(3, 'Nurse Practitioner', 'Provide healthcare services to patients.', '$90,000 - $110,000', 'Full-time', 'Vancouver, BC', 'HealthPlus'),
(4, 'IT Support Specialist', 'Assist in troubleshooting and IT support.', '$50,000 - $70,000', 'Part-time', 'Calgary, AB', 'HealthPlus'),
(5, 'Instructional Designer', 'Create e-learning materials and courses.', '$60,000 - $80,000', 'Full-time', 'Montreal, QC', 'EduTech');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Age` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Education` enum('High School','Diploma','Bachelors','Masters','PHD') NOT NULL,
  `Resume` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Username`, `Password`, `First_Name`, `Last_Name`, `Age`, `Email`, `Education`, `Resume`) VALUES
('jane_smith', 'js5678', 'Jane', 'Smith', 24, 'jane.smith@example.com', '', NULL),
('john_doe', 'jd1234', 'John', 'Doe', 22, 'john.doe@example.com', '', NULL),
('mike_brown', 'mb9101', 'Mike', 'Brown', 21, 'mike.brown@example.com', '', NULL),
('sara_white', 'sw1122', 'Sara', 'White', 23, 'sara.white@example.com', 'PHD', NULL);

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
-- Dumping data for table `stu_application`
--

INSERT INTO `stu_application` (`Username`, `Job_ID`, `Email`, `Resume`) VALUES
('jane_smith', 2, 'jane.smith@example.com', ''),
('john_doe', 1, 'john.doe@example.com', ''),
('mike_brown', 3, 'mike.brown@example.com', ''),
('sara_white', 4, 'sara.white@example.com', '');

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
  MODIFY `Job_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
