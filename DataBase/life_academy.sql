-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 08:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `life_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` bigint(20) NOT NULL,
  `Email` text NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Email`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` text NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `Contact`, `Message`) VALUES
(11, 'shiroya krushil', 'shiroya@gmail.com', 83200662288, 'halo'),
(12, 'dhruv', 'dhruv@gmail.com', 7046934474, 'halo'),
(13, 'denish', 'denish@gmail.com', 9054695107, 'ram ram'),
(14, 'shiroya krushil', 'shiroya@gmail.com', 6355917269, '5555'),
(23, 'ghfhg', 'krushil@gmail.com', 83200662288, 'dfgfd'),
(24, 'shiroya krushil', 'admin@gmail.com', 58888, 'sc'),
(25, 'shiroya krushil', 'sdcard1130@gmail.com', 6355917269, 'dcefvevefv');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Id` bigint(20) NOT NULL,
  `Images` text NOT NULL,
  `Student_Name` varchar(30) NOT NULL,
  `Father_Name` varchar(30) NOT NULL,
  `Email` text NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Class` text NOT NULL,
  `Date_Of_Birth` varchar(20) NOT NULL,
  `Gendar` text NOT NULL,
  `Blood_Group` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Id`, `Images`, `Student_Name`, `Father_Name`, `Email`, `Contact`, `Address`, `Class`, `Date_Of_Birth`, `Gendar`, `Blood_Group`) VALUES
(96, '..//photos/teacher-3.jpg', 'harsh', 'parsotambhai', 'harsh@gmail.com', 6355917269, 'virpur   ', 'React Js', '2004-10-09', 'Male', 'A+'),
(97, '..//photos/teacher-2.jpg', 'sohana', 'husainali', 'sohana@gmail.com', 6355917269, 'bilkha state', 'React Js', '2003-11-29', 'Femail', 'A-'),
(98, '..//photos/teacher-1.jpg', 'denish', 'ashvinbhai', 'denish@gmail.com', 83200662288, 'surat ', 'React Js', '2003-07-19', 'Male', 'A+'),
(105, 'photos/teacher-2.png', 'dhaval', 'dhavalbhai', 'dhaval@gmail.com', 9429423071, 'visavadar', 'Angular Js', '2022-09-24', 'Male', 'AB+'),
(106, 'photos/teacher-5.png', 'aganik', 'dineshbhai', 'aganik@gmail.com', 9016385819, 'chavand', 'Laravel', '2003-09-28', 'Male', 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Cpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Password`, `Cpassword`) VALUES
(13, 'dhruv', 'dhruv@gmail.com', '456123', '456123'),
(14, 'denish', 'denish@gmail.com', 'denish123', 'denish@123'),
(27, 'admin', 'admin@gmail.com', 'admin123', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
