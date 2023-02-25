-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2023 at 08:25 AM
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
-- Database: `afa_db`
--
DROP DATABASE IF EXISTS afa_db;
CREATE DATABASE afa_db;

USE afa_db;
-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `coachId` int(100) NOT NULL,
  `teamId` int(100) NOT NULL,
  `userId` int(100) DEFAULT NULL,
  `coach_img` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`coachId`, `teamId`, `userId`, `coach_img`) VALUES
(1, 6, 1, 0x53656e612c204e61612c20416e6e612c20476f6c6469652e6a706567),
(2, 5, 3, 0x576861747341707020496d61676520323032312d30352d31312061742031322e32352e323820414d2e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `fixture`
--

CREATE TABLE `fixture` (
  `fixtureId` int(100) NOT NULL,
  `seasonId` int(100) NOT NULL,
  `fTeamImg` varchar(255) DEFAULT NULL,
  `fTeamId` int(100) NOT NULL,
  `sTeamImg` varchar(255) DEFAULT NULL,
  `sTeamId` int(100) NOT NULL,
  `fixtureDate` date DEFAULT NULL,
  `fixtureTime` time(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `gameId` int(100) NOT NULL,
  `seasonId` int(11) NOT NULL,
  `fixtureId` int(100) NOT NULL,
  `officiator` varchar(255) DEFAULT NULL,
  `fTeamGoals` int(100) DEFAULT NULL,
  `sTeamGoals` int(100) DEFAULT NULL,
  `winnerTeamId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leaguetable`
--

CREATE TABLE `leaguetable` (
  `seasonId` int(100) NOT NULL,
  `teamId` int(100) NOT NULL,
  `points` int(100) NOT NULL,
  `goalsFor` int(100) NOT NULL,
  `goalsAgainst` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mediacentre`
--

CREATE TABLE `mediacentre` (
  `mediaId` int(100) NOT NULL,
  `matchName` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `videoLink` varchar(255) DEFAULT NULL,
  `gameId` int(100) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `playerId` int(255) NOT NULL,
  `teamId` int(255) NOT NULL,
  `player_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `seasonId` int(100) NOT NULL,
  `seasonName` varchar(255) NOT NULL,
  `startDate` date DEFAULT NULL,
  `numOfTeams` int(100) NOT NULL,
  `endDate` date DEFAULT NULL,
  `winnerTeamId` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamId` int(100) NOT NULL,
  `teamName` varchar(255) NOT NULL,
  `team_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`teamId`, `teamName`, `team_img`) VALUES
(1, 'None (Admin)', '-'),
(2, 'Elite FC', 'images/teamIcons/elite.png'),
(3, 'Kasanoma FC', 'images/teamIcons/kasanoma.png'),
(4, 'Highlanders', 'images/teamIcons/highlanders.png'),
(5, 'Legends FC', 'images/teamIcons/legendsFC.png'),
(6, 'Northside FC', 'images/teamIcons/northside.png'),
(7, 'Red Army ', 'images/teamIcons/redArmy.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(100) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `upass` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role` varchar(15) NOT NULL,
  `status` int(10) DEFAULT NULL,
  `yearGroup` varchar(10) DEFAULT NULL,
  `dateCreated` date NOT NULL DEFAULT current_timestamp(),
  `dateUpdated` datetime(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `fullName`, `uname`, `uemail`, `upass`, `gender`, `role`, `status`, `yearGroup`, `dateCreated`, `dateUpdated`) VALUES
(1, 'Annaliese Nartey', 'anna22', 'annaliesesusan.nartey@vodafone.com', '$2y$10$bn8zzXwF6hBE3a5fNjZHv.QykSGDBJzyy.kaD4JIr3rwECWLUpWja', 'other', 'coach', NULL, '2024', '2023-02-24', '2023-02-24 13:28:21.635655'),
(2, 'Cyril kujar', 'cyrilk', 'cyrilkujar@gmail.com', '$2y$10$DTAqozchV8XY/cHqmsjyEeQn87YUs6WT5BS7w04Oc5prF3YzvNOG.', 'male', 'admin', NULL, '2024', '2023-02-24', '2023-02-24 13:28:21.635655'),
(3, 'Omar Basheer', 'omarb', 'omar.basheer@ashesi.edu.gh', '$2y$10$dK65vY7ICKm/8aDo8CBhFOilx4ngEIglofbhg38x8WHiDHpwZBNaS', 'other', 'coach', NULL, '2026', '2023-02-24', '2023-02-24 14:09:04.437818');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`coachId`),
  ADD KEY `teamId` (`teamId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `fixture`
--
ALTER TABLE `fixture`
  ADD PRIMARY KEY (`fixtureId`),
  ADD KEY `seasonId` (`seasonId`),
  ADD KEY `fTeamId` (`fTeamId`),
  ADD KEY `sTeamId` (`sTeamId`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`gameId`),
  ADD KEY `seasonId` (`seasonId`),
  ADD KEY `fixtureId` (`fixtureId`),
  ADD KEY `winnerTeamId` (`winnerTeamId`);

--
-- Indexes for table `leaguetable`
--
ALTER TABLE `leaguetable`
  ADD KEY `seasonId` (`seasonId`),
  ADD KEY `teamId` (`teamId`);

--
-- Indexes for table `mediacentre`
--
ALTER TABLE `mediacentre`
  ADD PRIMARY KEY (`mediaId`),
  ADD KEY `gameId` (`gameId`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`playerId`),
  ADD KEY `teamId` (`teamId`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`seasonId`),
  ADD KEY `winnerTeamId` (`winnerTeamId`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `uemail` (`uemail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `coachId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fixture`
--
ALTER TABLE `fixture`
  MODIFY `fixtureId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `gameId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mediacentre`
--
ALTER TABLE `mediacentre`
  MODIFY `mediaId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `playerId` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
  MODIFY `seasonId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `teamId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coach`
--
ALTER TABLE `coach`
  ADD CONSTRAINT `coach_ibfk_1` FOREIGN KEY (`teamId`) REFERENCES `team` (`teamId`) ON UPDATE CASCADE ON DELETE CASCADE,
  ADD CONSTRAINT `coach_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON UPDATE CASCADE ON DELETE CASCADE;

--
-- Constraints for table `fixture`
--
ALTER TABLE `fixture`
  ADD CONSTRAINT `fixture_ibfk_1` FOREIGN KEY (`seasonId`) REFERENCES `season` (`seasonId`) ON UPDATE CASCADE ON DELETE CASCADE,
  ADD CONSTRAINT `fixture_ibfk_2` FOREIGN KEY (`fTeamId`) REFERENCES `team` (`teamId`) ON UPDATE CASCADE ON DELETE CASCADE,
  ADD CONSTRAINT `fixture_ibfk_3` FOREIGN KEY (`sTeamId`) REFERENCES `team` (`teamId`) ON UPDATE CASCADE ON DELETE CASCADE;

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`seasonId`) REFERENCES `season` (`seasonId`) ON UPDATE CASCADE ON DELETE CASCADE,
  ADD CONSTRAINT `game_ibfk_2` FOREIGN KEY (`fixtureId`) REFERENCES `fixture` (`fixtureId`) ON UPDATE CASCADE ON DELETE CASCADE,
  ADD CONSTRAINT `game_ibfk_3` FOREIGN KEY (`winnerTeamId`) REFERENCES `team` (`teamId`) ON UPDATE CASCADE ON DELETE CASCADE;

--
-- Constraints for table `leaguetable`
--
ALTER TABLE `leaguetable`
  ADD CONSTRAINT `leaguetable_ibfk_1` FOREIGN KEY (`seasonId`) REFERENCES `season` (`seasonId`) ON UPDATE CASCADE ON DELETE CASCADE,
  ADD CONSTRAINT `leaguetable_ibfk_2` FOREIGN KEY (`teamId`) REFERENCES `team` (`teamId`) ON UPDATE CASCADE ON DELETE CASCADE;

--
-- Constraints for table `mediacentre`
--
ALTER TABLE `mediacentre`
  ADD CONSTRAINT `mediacentre_ibfk_1` FOREIGN KEY (`gameId`) REFERENCES `game` (`gameId`) ON UPDATE CASCADE ON DELETE CASCADE;

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`teamId`) REFERENCES `team` (`teamId`) ON UPDATE CASCADE;

--
-- Constraints for table `season`
--
ALTER TABLE `season`
  ADD CONSTRAINT `season_ibfk_1` FOREIGN KEY (`winnerTeamId`) REFERENCES `team` (`teamId`) ON UPDATE CASCADE ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
