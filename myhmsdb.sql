-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost

-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`username`, `password`) VALUES
('admin', 'admin123');

INSERT INTO `admintb` (`username`, `password`) VALUES
('mazen', 'mazen123');

-- --------------------------------------------------------

--
-- Table structure for table `appointmenttb`
--

CREATE TABLE `appointmenttb` (
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `docFees` int(5) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `userStatus` int(5) NOT NULL,
  `doctorStatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmenttb`
--

INSERT INTO `appointmenttb` (`pid`, `ID`, `fname`, `lname`, `gender`, `email`, `contact`, `doctor`, `docFees`, `appdate`, `apptime`, `userStatus`, `doctorStatus`) VALUES
(4, 1, 'Mohamed', 'Ahmed', 'Male', 'mohamed@gmail.com', '0112345678', 'Mahmoud', 550, '2020-02-14', '10:00:00', 1, 0),
(4, 2, 'Mohamed', 'Ahmed', 'Male', 'mohamed@gmail.com', '0112345678', 'Ayman', 700, '2020-02-28', '10:00:00', 0, 1),
(4, 3, 'Mohamed', 'Ahmed', 'Male', 'mohamed@gmail.com', '0112345678', 'Rania', 1000, '2020-02-19', '03:00:00', 0, 1),
(11, 4, 'Mariam', 'Nabil', 'Female', 'mariam@gmail.com', '0101234567', 'Karim', 500, '2020-02-29', '20:00:00', 1, 1),
(4, 5, 'Mohamed', 'Ahmed', 'Male', 'mohamed@gmail.com', '0112345678', 'Ayman', 700, '2020-02-28', '12:00:00', 1, 1),
(4, 6, 'Mohamed', 'Ahmed', 'Male', 'mohamed@gmail.com', '0112345678', 'Mahmoud', 550, '2020-02-26', '15:00:00', 0, 1),
(2, 8, 'Nour', 'Hesham', 'Female', 'nour@gmail.com', '0123456789', 'Mahmoud', 550, '2020-03-21', '10:00:00', 1, 1),
(5, 9, 'Ahmed', 'Gamal', 'Male', 'ahmed@gmail.com', '0109876543', 'Mahmoud', 550, '2020-03-19', '20:00:00', 1, 0),
(4, 10, 'Mohamed', 'Ahmed', 'Male', 'mohamed@gmail.com', '0112345678', 'Mahmoud', 550, '0000-00-00', '14:00:00', 1, 0),
(4, 11, 'Mohamed', 'Ahmed', 'Male', 'mohamed@gmail.com', '0112345678', 'Ayman', 700, '2020-03-27', '15:00:00', 1, 1),
(9, 12, 'Omar', 'Farouk', 'Male', 'omar@gmail.com', '0111234567', 'Yasser', 800, '2020-03-26', '12:00:00', 1, 1),
(9, 13, 'Omar', 'Farouk', 'Male', 'omar@gmail.com', '0111234567', 'Essam', 450, '2020-03-26', '14:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contact`, `message`) VALUES
('Amr', 'amr@gmail.com', '0112233445', 'Hello Admin'),
('Farida', 'farida@gmail.com', '0123123123', 'Great service'),
('Sara', 'sara@gmail.com', '0101010101', 'How can I reach you?'),
('Khaled', 'khaled@gmail.com', '0155551234', 'Love your site'),
('Mostafa', 'mostafa@gmail.com', '0122222222', 'Need consultation'),
('Hany', 'hany@gmail.com', '0109999999', 'Excellent service'),
('Asmaa', 'asmaa@gmail.com', '0123456123', 'Great doctors'),
('Osama', 'osama@gmail.com', '0111222333', 'Thank you for your service!'),
('Dina', 'dina@gmail.com', '0101230123', 'I appreciate your help!');

-- --------------------------------------------------------

--
-- Table structure for table `doctb`
--

CREATE TABLE `doctb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `docFees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctb`
--

INSERT INTO `doctb` (`username`, `password`, `email`, `spec`, `docFees`) VALUES
('Mahmoud', 'Mahmoud123', 'Mahmoud@gmail.com', 'General', 500),
('Ayman', 'Ayman123', 'Ayman@gmail.com', 'Facial', 600),
('Rania', 'Rania123', 'Rania@gmail.com', 'Oncology', 700),
('Karim', 'Karim123', 'Karim@gmail.com', 'ENT (Ear, Nose, Throat)', 550),
('Yasser', 'Yasser123', 'Yasser@gmail.com', 'Radiology', 800),
('Mazen', 'Mazen123', 'Mazen@gmail.com', 'Beuty', 1000),
('Essam', 'Essam123', 'Essam@gmail.com', 'Childerns', 1500),
('Ahmed', 'Ahmed123', 'Ahmed@gmail.com', 'Pediatrician', 450);

-- -------------------------------------------------+++-------

--
-- Table structure for table `patreg`
--

CREATE TABLE `patreg` (
  `pid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patreg`
--

INSERT INTO `patreg` (`pid`, `fname`, `lname`, `gender`, `email`, `contact`, `password`, `cpassword`) VALUES
(1, 'Ibrahim', 'Hassan', 'Male', 'ibrahim@gmail.com', '0112233444', 'ibrahim123', 'ibrahim123'),
(2, 'Nour', 'Hesham', 'Female', 'nour@gmail.com', '0123456789', 'nour123', 'nour123'),
(3, 'Tarek', 'Mahmoud', 'Male', 'tarek@gmail.com', '0111222333', 'tarek123', 'tarek123'),
(4, 'Mohamed', 'Ahmed', 'Male', 'mohamed@gmail.com', '0112345678', 'mohamed123', 'mohamed123'),
(5, 'Ahmed', 'Gamal', 'Male', 'ahmed@gmail.com', '0109876543', 'ahmed123', 'ahmed123'),
(6, 'Sherif', 'Ali', 'Male', 'sherif@gmail.com', '0101234567', 'sherif123', 'sherif123'),
(7, 'Noha', 'Medhat', 'Female', 'noha@gmail.com', '0100001111', 'noha123', 'noha123'),
(8, 'Kareem', 'Samy', 'Male', 'kareem@gmail.com', '0123123123', 'kareem123', 'kareem123'),
(9, 'Omar', 'Farouk', 'Male', 'omar@gmail.com', '0111234567', 'omar123', 'omar123'),
(10, 'Tamer', 'Hosny', 'Male', 'tamer@gmail.com', '0102030405', 'tamer123', 'tamer123'),
(11, 'Mariam', 'Nabil', 'Female', 'mariam@gmail.com', '0101234567', 'mariam123', 'mariam123');

-- --------------------------------------------------------

--
-- Table structure for table `prestb`
--

CREATE TABLE `prestb` (
  `doctor` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `disease` varchar(250) NOT NULL,
  `allergy` varchar(250) NOT NULL,
  `prescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestb`
--

INSERT INTO `prestb` (`doctor`, `pid`, `ID`, `fname`, `lname`, `appdate`, `apptime`, `disease`, `allergy`, `prescription`) VALUES
('Ayman', 4, 11, 'Mohamed', 'Ahmed', '2020-03-27', '15:00:00', 'Cough', 'Nothing', 'Take one teaspoon of cough syrup before bed'),
('Mahmoud', 2, 8, 'Nour', 'Hesham', '2020-03-21', '10:00:00', 'Severe Fever', 'Nothing', 'Take bed rest and paracetamol every 8 hours'),
('Yasser', 9, 12, 'Omar', 'Farouk', '2020-03-26', '12:00:00', 'Sever fever', 'nothing', 'Paracetamol -> 1 every morning and night'),
('Essam', 9, 13, 'Omar', 'Farouk', '2020-03-26', '14:00:00', 'Cough', 'Skin dryness', 'Intake fruits with more water content');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmenttb`
--
ALTER TABLE `appointmenttb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patreg`
--
ALTER TABLE `patreg`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmenttb`
--
ALTER TABLE `appointmenttb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patreg`
--
ALTER TABLE `patreg`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Admin information
SELECT username FROM admintb;

-- All appointments with basic info
SELECT ID, fname, lname, doctor, appdate, apptime, userStatus, doctorStatus FROM appointmenttb;

-- Contacts list
SELECT name, email, contact, message FROM contact;

-- Doctors list with specialization and fees
SELECT username, spec, docFees FROM doctb;

-- Patient registry
SELECT pid, fname, lname, gender, email, contact FROM patreg;

-- Prescriptions
SELECT doctor, disease, allergy, prescription FROM prestb;

-- Patients with their appointments
SELECT p.fname, p.lname, p.contact, a.doctor, a.appdate, a.apptime, a.docFees
FROM patreg p
INNER JOIN appointmenttb a ON p.pid = a.pid;

-- Doctors with appointment counts
SELECT d.username, d.spec, COUNT(a.ID) as appointment_count 
FROM doctb d
LEFT JOIN appointmenttb a ON d.username = a.doctor
GROUP BY d.username;

-- Prescriptions with patient and appointment details
SELECT pr.pid, p.fname, p.lname, pr.doctor, pr.disease, pr.prescription, a.appdate
FROM prestb pr
INNER JOIN patreg p ON pr.pid = p.pid
INNER JOIN appointmenttb a ON pr.ID = a.ID;

-- Patients with prescriptions and payment status
SELECT p.pid, p.fname, p.lname, pr.disease, pr.prescription, a.docFees
FROM patreg p
INNER JOIN appointmenttb a ON p.pid = a.pid
INNER JOIN prestb pr ON a.ID = pr.ID;

-- Appointments by doctor with patient contact info
SELECT d.username, d.spec, a.appdate, a.apptime, p.fname, p.lname, p.contact
FROM doctb d
INNER JOIN appointmenttb a ON d.username = a.doctor
INNER JOIN patreg p ON a.pid = p.pid;
