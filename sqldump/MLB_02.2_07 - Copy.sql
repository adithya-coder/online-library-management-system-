-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2021 at 06:38 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faWOyvXtmF`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Frist_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL DEFAULT '@gmail.com',
  `Password` varchar(12) NOT NULL
) ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Frist_Name`, `Last_Name`, `Email`, `Password`) VALUES
(1, 't', 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ISBN` int(11) NOT NULL,
  `PID` int(11) DEFAULT NULL,
  `Book_Name` varchar(200) NOT NULL,
  `Author` varchar(200) NOT NULL,
  `Edition` varchar(200) NOT NULL,
  `Cover_pic` varchar(200) NOT NULL,
  `Book_pdf` varchar(200) NOT NULL,
  `Category` varchar(200) NOT NULL,
  `Date` varchar(200) NOT NULL
) ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ISBN`, `PID`, `Book_Name`, `Author`, `Edition`, `Cover_pic`, `Book_pdf`, `Category`, `Date`) VALUES
(13, 2, 'Sherlock Holmes', 'Athur Conan Doyle', 'Second Edition', 'SH.jpg', ' advs.pdf', 'Novel', '2021-10-10 04:55:16pm'),
(14, 2, 'Harry Potter', 'J. K. Rowling', 'Third Edition', 'harry.jpeg', ' Harry Potter and The Sorcerer’s Stone.pdf', 'Fiction', '2021-10-10 05:11:10pm'),
(15, 2, 'Twilight', 'Stephanie Meyar', 'Second Edition', 'Twilightbook.jpg', ' Twilight.pdf', 'Novel', '2021-10-10 05:11:53pm'),
(16, 2, 'Harry Potter', 'J. K. Rowling', 'Second Edition', 'harry.jpeg', ' Harry Potter and The Sorcerer’s Stone.pdf', 'Fiction', '2021-10-10 05:12:55pm'),
(17, 2, 'The Village by the sea', 'Anita Desai', 'Third Esition', 'VBS.jpg', ' Scan1.pdf', 'Novel', '2021-10-10 05:13:45pm'),
(20, 2, 'Twilight', 'Stephanie Meyar', 'Second Edition', 'Twilightbook.jpg', ' Twilight.pdf', 'Novel', '2021-10-10 05:36:25pm');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `Name`, `email`, `message`) VALUES
(6, 'adithya', 'a@gmail.com', '111'),
(8, 'chanudi', 'abcd@gmail.com', 'blaaaaaaa hi');

-- --------------------------------------------------------

--
-- Table structure for table `event_s`
--

CREATE TABLE `event_s` (
  `Event_ID` int(11) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `Time` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Language` varchar(200) NOT NULL,
  `Admin_ID` int(11) DEFAULT NULL
) ;

--
-- Dumping data for table `event_s`
--

INSERT INTO `event_s` (`Event_ID`, `Date`, `Time`, `Name`, `Description`, `Language`, `Admin_ID`) VALUES
(1, '2021-09-01', '19:04:32', 'Adithya', 'dsfgtfhjh', 'sinhala', 1),
(2, '1', '1', '1', '1', '1', NULL),
(3, '1', '1', '1', '1', ' English', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feed_ID` int(11) NOT NULL,
  `RID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Stetus` varchar(200) NOT NULL
) ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feed_ID`, `RID`, `PID`, `Description`, `Stetus`) VALUES
(1, 2, 2, 'aaaa', '5');

-- --------------------------------------------------------

--
-- Table structure for table `member_detail`
--

CREATE TABLE `member_detail` (
  `M_ID` int(11) NOT NULL,
  `RID` int(11) DEFAULT NULL,
  `Email` varchar(200) NOT NULL DEFAULT '@gmai.com',
  `Name` varchar(200) NOT NULL
) ;

--
-- Dumping data for table `member_detail`
--

INSERT INTO `member_detail` (`M_ID`, `RID`, `Email`, `Name`) VALUES
(1, 1, '@gmai.com', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `PID` int(11) NOT NULL,
  `Frist_Name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Last_Name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Email` text COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`PID`, `Frist_Name`, `Last_Name`, `Email`, `Password`) VALUES
(2, 'test', 'test', 'pub@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `regular_book`
--

CREATE TABLE `regular_book` (
  `RID` int(11) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `View_count` int(11) NOT NULL
) ;

--
-- Dumping data for table `regular_book`
--

INSERT INTO `regular_book` (`RID`, `ISBN`, `View_count`) VALUES
(1, 1111, 2);

-- --------------------------------------------------------

--
-- Table structure for table `regular_user`
--

CREATE TABLE `regular_user` (
  `Frist_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL DEFAULT '@gmail.com',
  `Password` varchar(12) DEFAULT NULL,
  `RID` int(11) NOT NULL
) ;

--
-- Dumping data for table `regular_user`
--

INSERT INTO `regular_user` (`Frist_Name`, `Last_Name`, `Email`, `Password`, `RID`) VALUES
('Asdithya', 'Heshan', 'user@gmail.com', 'user', 1),
('Adithya', 'Heshan', 'adithya@gmail.com', '1234', 3);

-- --------------------------------------------------------

--
-- Table structure for table `request_book`
--

CREATE TABLE `request_book` (
  `Request_ID` int(11) NOT NULL,
  `RID` int(11) NOT NULL,
  `Author` varchar(200) NOT NULL,
  `Category` varchar(200) NOT NULL,
  `Language` varchar(200) NOT NULL,
  `Book_name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL
) ;

--
-- Dumping data for table `request_book`
--

INSERT INTO `request_book` (`Request_ID`, `RID`, `Author`, `Category`, `Language`, `Book_name`, `Email`, `Name`) VALUES
(208, 1, 'Adithya', 'Education', 'Sinhala', 'JAVA', 'Jadithya803@gmail.com', 'Heshan'),
(245, 1, 'Adithya', 'Education', 'Sinhala', 'MySQL', 'adithya803@gmail.com', 'heshan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `event_s`
--
ALTER TABLE `event_s`
  ADD PRIMARY KEY (`Event_ID`),
  ADD KEY `Admin_ID` (`Admin_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feed_ID`),
  ADD KEY `RID` (`RID`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `member_detail`
--
ALTER TABLE `member_detail`
  ADD PRIMARY KEY (`M_ID`),
  ADD KEY `Request_ID` (`RID`);

--
-- Indexes for table `regular_book`
--
ALTER TABLE `regular_book`
  ADD KEY `ISBN` (`ISBN`),
  ADD KEY `RID` (`RID`);

--
-- Indexes for table `regular_user`
--
ALTER TABLE `regular_user`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `request_book`
--
ALTER TABLE `request_book`
  ADD PRIMARY KEY (`Request_ID`),
  ADD KEY `RID` (`RID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `ISBN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event_s`
--
ALTER TABLE `event_s`
  MODIFY `Event_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feed_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member_detail`
--
ALTER TABLE `member_detail`
  MODIFY `M_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regular_user`
--
ALTER TABLE `regular_user`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request_book`
--
ALTER TABLE `request_book`
  MODIFY `Request_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
