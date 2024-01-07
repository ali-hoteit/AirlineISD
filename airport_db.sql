-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 10:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airport_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_ID` int(11) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `First_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_ID`, `Position`, `First_name`, `Last_name`) VALUES
(1, 'Pilot', 'Jaydan', 'Lynch'),
(2, 'Pilot', 'Wade', 'Kaye'),
(3, 'Pilot', 'Bethanie', 'Watkins'),
(4, 'Pilot', 'Aleena', 'Graham'),
(5, 'Pilot', 'Nia', 'Palacios'),
(6, 'Pilot', 'Elliot', 'Bell'),
(7, 'Pilot', 'Anderson', 'Myers'),
(8, 'Pilot', 'Jeffrey', 'Raymond'),
(9, 'Pilot', 'Simeon', 'Ramirez'),
(10, 'Pilot', 'Elle', 'Shepard'),
(11, 'Pilot', 'Zoe', 'Prince'),
(12, 'Pilot', 'Eliza', 'Mckenzie'),
(13, 'Manager', 'Ashraf', 'Farrington'),
(14, 'Manager', 'Kiah', 'Maxwell'),
(15, 'Manager', 'Hetty', 'Rodrigues'),
(16, 'Manager', 'Niyah', 'Hodge'),
(17, 'Attendant', 'Niam', 'Felix'),
(18, 'Attendant', 'Marco', 'Douglas'),
(19, 'Attendant', 'Lennie', 'Swan'),
(20, 'Attendant', 'Nada', 'Clarke'),
(21, 'Attendant', 'Shanna', 'Huang'),
(22, 'Attendant', 'Aurora', 'Boyer'),
(23, 'Attendant', 'Rayan', 'Bloom'),
(24, 'Attendant', 'Zi', 'Finney');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `FLight_ID` int(11) NOT NULL,
  `From_country` varchar(30) NOT NULL,
  `To_country` varchar(30) NOT NULL,
  `Departure_time` varchar(10) NOT NULL,
  `Arrival_time` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Seats` int(11) NOT NULL,
  `Raw_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`FLight_ID`, `From_country`, `To_country`, `Departure_time`, `Arrival_time`, `Date`, `Seats`, `Raw_cost`) VALUES
(102910, 'Lebanon', 'France', '2:00 am', '6:00 am', '2023-01-21', 30, 200),
(104723, 'Lebanon', 'Spain', '5:00 pm', '6:50 pm', '2023-01-29', 0, 430),
(105734, 'Lebanon', 'United Kingdom', '3:00 am', '12:00 pm', '2023-01-12', 22, 425),
(112950, 'Lebanon', 'Finland', '1:00 pm', '5:25 pm', '2023-03-06', 9, 190),
(118954, 'Lebanon', 'Japan', '10:00 am', '5:50 pm', '2023-03-23', 75, 540),
(119354, 'Lebanon', 'Cyprus', '6:45 am', '7:15 am', '2023-01-12', 62, 610),
(134657, 'Lebanon', 'India', '9:00 am', '1:15 pm', '2023-02-18', 9, 385),
(156427, 'Lebanon', 'Iraq', '7:00 am', '8:40 am', '2023-03-18', 12, 400),
(184924, 'Lebanon', 'Saudi Arabia', '11:00 am', '1:00 pm', '2022-12-01', 86, 240),
(188128, 'Lebanon', 'China', '4:00 pm', '6:10 pm', '2023-03-10', 0, 505),
(195251, 'Lebanon', 'Canada', '1:32 pm', '12:00 am', '2023-08-25', 52, 210),
(195312, 'Lebanon', 'Germany', '12:30 pm', '3:10 pm', '2023-02-07', 13, 300);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `Username` varchar(20) NOT NULL,
  `Flight_ID` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Max_luggage` int(11) NOT NULL,
  `Meal_type` varchar(30) NOT NULL,
  `Seat_location` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`Username`, `Flight_ID`, `Status`, `Cost`, `Max_luggage`, `Meal_type`, `Seat_location`) VALUES
('loula', 184924, 'Purchased', 240, 50, 'Basic', 'y4'),
('yahya_drake]', 102910, 'Purchased', 240, 76, 'Basic', 'a2'),
('yahya_drake]', 104723, 'Reservation', 280, 68, 'Basic', 'c4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(20) NOT NULL,
  `Password` char(32) NOT NULL,
  `First_Name` varchar(60) NOT NULL,
  `Last_Name` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Phone_Number` varchar(60) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Birth_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`, `First_Name`, `Last_Name`, `Email`, `Phone_Number`, `Address`, `Birth_Date`) VALUES
('christine', '583766438dad42b611117b4c1db6cc8c', 'Christine', 'Sparks', 'Christine@gmail.com', '70 285934', 'Tyre', '1985-09-14'),
('KateUser', '2185d72d2e9728df8591365117bb252a', 'Katelyn', 'Ponce', 'KatePonce@gmail.com', '86 123765', 'Byblos', '1980-04-27'),
('loula', '561bd0d6987c55fc5920678578224bc4', 'ali', 'hoteit', 'alihoteit0@gmail.com', '12345677', 'Beirut', '2001-03-03'),
('Maison', '482c811da5d5b4bc6d497ffa98491e38', 'Maison', 'Walsh', 'Maison.Walsh@yahoo.com', '76 234954', 'Bekaa', '1990-06-15'),
('Osman_Acc', '4cfec6ac15c56014472852bec92321cb', 'Osman', 'Haddad', 'Haddad.Osman01@gmail.com', '86 976541', 'Sidon', '2002-08-01'),
('Ray123', '7b14ca0ae4a201f4972c8e5aefe43c7c', 'Raymond', 'Bullock', 'Raymond.Bul0@gmail.com', '76 839532', 'Tripoli', '1997-01-13'),
('safoo', 'be63e2d10d608446b905354b5d910d17', 'mostafa', 'itani', 'asdr123@gmail.com', '75 123522', 'byblos', '2024-01-01'),
('tanoo', '5241ae15dee5b19b219adadbc0ab2d5e', 'jaafar', 'tanookhi', 'jafaar123@gmail.com', '76213952', 'nabatieye', '2023-12-07'),
('yahya_drake', '0d107d09f5bbe40cade3de5c71e9e9b7', 'Yahya', 'Drake', 'YahyaDrake2@gmail.com', '70 434243', 'Beirut', '2000-12-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_ID`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`FLight_ID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`Username`,`Flight_ID`),
  ADD UNIQUE KEY `Seat_location` (`Seat_location`),
  ADD KEY `Flight_ID` (`Flight_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Emp_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `FLight_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195313;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`Flight_ID`) REFERENCES `flight` (`FLight_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
