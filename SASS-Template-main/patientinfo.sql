-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 02:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patientinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `record_id` int(100) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `date_birth` date DEFAULT NULL,
  `age` int(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `blood_type` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `home_address` varchar(100) DEFAULT NULL,
  `contact_no` int(100) DEFAULT NULL,
  `emer_full_name_1` varchar(100) DEFAULT NULL,
  `relationship_1` varchar(100) DEFAULT NULL,
  `emer_contact_1` int(100) DEFAULT NULL,
  `emer_full_name_2` varchar(100) DEFAULT NULL,
  `relationship_2` varchar(100) DEFAULT NULL,
  `emer_contact_2` int(100) DEFAULT NULL,
  `known_medical_condition` varchar(200) DEFAULT NULL,
  `allergies` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`record_id`, `first_name`, `middle_name`, `last_name`, `date_birth`, `age`, `gender`, `blood_type`, `nationality`, `email_address`, `home_address`, `contact_no`, `emer_full_name_1`, `relationship_1`, `emer_contact_1`, `emer_full_name_2`, `relationship_2`, `emer_contact_2`, `known_medical_condition`, `allergies`) VALUES
(21, 'Charles Andrei', 'Coronado', 'Cabusas', '2004-01-06', 12, 'male', 'O', 'filipino', 'importantacc513@gmail.com', 'adfvaergadfgear', 0, 'Arthur S. Cabusas', 'Father', 2147483647, '009496119710', 'Mother', 2147483647, 'UTI, Kidney Stones', 'None'),
(22, 'Charles Andrei', 'Coronado', 'Cabusas', '2024-01-06', 12, 'male', 'O', 'filipino', 'importantacc513@gmail.com', 'adfvaergadfgear', 0, 'Arthur S. Cabusas', 'Father', 2147483647, '009496119710', 'Mother', 2147483647, 'No medical Condition', 'None.'),
(23, 'Charles Andrei', 'Coronado', 'Cabusas', '2024-01-06', 12, 'male', 'O', 'filipino', 'importantacc513@gmail.com', 'adfvaergadfgear', 0, 'Arthur S. Cabusas', 'Father', 2147483647, '009496119710', 'Mother', 2147483647, 'No medical Condition', 'None.'),
(24, 'Charles Andrei', 'Coronado', 'Cabusas', '2024-01-06', 12, 'male', 'O', 'filipino', 'importantacc513@gmail.com', 'adfvaergadfgear', 0, 'Arthur S. Cabusas', 'Father', 2147483647, '009496119710', 'Mother', 2147483647, 'No medical Condition', 'None.'),
(25, 'Charles Andrei', 'Coronado', 'Cabusas', '2024-01-31', 12, 'male', 'B', 'filipino', 'importantacc513@gmail.com', 'adfvaergadfgear', 0, 'Arthur S. Cabusas', 'Father', 2147483647, '009496119710', 'Mother', 2147483647, 'UTI, diabetes', 'None.'),
(26, 'Charles Andrei', 'Coronado', 'Cabusas', '2024-01-10', 12, 'male', 'O', 'filipino', 'importantacc513@gmail.com', 'adfvaergadfgear', 0, 'Arthur S. Cabusas', 'Father', 2147483647, '009496119710', 'Mother', 2147483647, 'Diabetes, UTI', 'None.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`record_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
