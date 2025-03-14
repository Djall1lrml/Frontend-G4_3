-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 15, 2025 at 12:14 AM
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
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `operation`
--

CREATE TABLE `operation` (
  `Id` int(11) NOT NULL,
  `PayID` int(11) NOT NULL,
  `dt` datetime DEFAULT NULL,
  `points_earned` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panneau`
--

CREATE TABLE `panneau` (
  `Id` int(11) NOT NULL,
  `IDproduit` int(11) NOT NULL,
  `IDpanneau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payement`
--

CREATE TABLE `payement` (
  `PayID` int(11) NOT NULL,
  `Cardnumber` int(11) DEFAULT NULL,
  `CVV` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `IDproduit` int(11) NOT NULL,
  `Badge` varchar(200) DEFAULT NULL,
  `Categorie` varchar(200) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Points de fidélité` int(10) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `FirstName`, `Email`, `Points de fidélité`, `Password`, `LastName`) VALUES
(1, 'anis', 'anis337483@gmail.com', 20, 'anis2005', NULL),
(2, 'difiuaf', 'younes@gmail.com', 34, 'youzkcbwdgw', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `operation`
--
ALTER TABLE `operation`
  ADD KEY `Id` (`Id`),
  ADD KEY `PayID` (`PayID`);

--
-- Indexes for table `panneau`
--
ALTER TABLE `panneau`
  ADD PRIMARY KEY (`IDpanneau`),
  ADD KEY `Id` (`Id`),
  ADD KEY `IDproduit` (`IDproduit`);

--
-- Indexes for table `payement`
--
ALTER TABLE `payement`
  ADD PRIMARY KEY (`PayID`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`IDproduit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panneau`
--
ALTER TABLE `panneau`
  MODIFY `IDpanneau` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payement`
--
ALTER TABLE `payement`
  MODIFY `PayID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `IDproduit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `operation`
--
ALTER TABLE `operation`
  ADD CONSTRAINT `operation_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `operation_ibfk_2` FOREIGN KEY (`PayID`) REFERENCES `payement` (`PayID`);

--
-- Constraints for table `panneau`
--
ALTER TABLE `panneau`
  ADD CONSTRAINT `panneau_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `panneau_ibfk_2` FOREIGN KEY (`IDproduit`) REFERENCES `produits` (`IDproduit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
