-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 11:19 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS `afa_db`;
CREATE DATABASE `afa_db`;
USE `afa_db`;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afa_db`
--

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
(7, 7, 9, 0x494d475f36303134202831292e6a7067),
(8, 5, 10, 0x696d61676530202832292e6a706567),
(9, 5, 11, 0x696d61676532202831292e6a706567),
(10, 5, 22, 0x53637265656e73686f745f32303232313032385f3037353633322e706e67);

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

--
-- Dumping data for table `fixture`
--

INSERT INTO `fixture` (`fixtureId`, `seasonId`, `fTeamImg`, `fTeamId`, `sTeamImg`, `sTeamId`, `fixtureDate`, `fixtureTime`) VALUES
(4, 1, 'images/teamIcons/legendsFC.png', 5, 'images/teamIcons/redArmy.png', 7, '2023-03-12', '18:20:00.000000'),
(6, 2, 'images/teamIcons/northside.png', 6, 'images/teamIcons/kasanoma.png', 3, '2023-03-12', '18:43:00.000000'),
(7, 2, 'images/teamIcons/highlanders.png', 4, 'images/teamIcons/elite.png', 2, '2023-03-26', '11:30:00.000000'),
(8, 2, 'images/teamIcons/elite.png', 2, 'images/teamIcons/kasanoma.png', 3, '2023-02-25', '11:16:00.000000'),
(9, 2, 'images/teamIcons/highlanders.png', 4, 'images/teamIcons/legendsFC.png', 5, '2023-02-18', '10:00:00.000000'),
(10, 2, 'images/teamIcons/redArmy.png', 7, 'images/teamIcons/northside.png', 6, '2023-02-18', '08:00:00.000000'),
(11, 2, 'images/teamIcons/elite.png', 2, 'images/teamIcons/redArmy.png', 7, '2023-02-11', '10:00:00.000000'),
(12, 2, 'images/teamIcons/northside.png', 6, 'images/teamIcons/highlanders.png', 4, '2023-02-11', '10:30:00.000000'),
(13, 2, 'images/teamIcons/legendsFC.png', 5, 'images/teamIcons/northside.png', 6, '2023-01-21', '09:00:00.000000');

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

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`gameId`, `seasonId`, `fixtureId`, `officiator`, `fTeamGoals`, `sTeamGoals`, `winnerTeamId`) VALUES
(1, 2, 8, 'Wepea Buntugu', 3, 1, 2),
(2, 2, 9, '', 1, 0, 4),
(3, 2, 10, 'Wepea Buntugu', 5, 2, 7),
(4, 2, 11, 'Eileen Kudjo', 1, 0, 2),
(6, 2, 12, 'Wepea Buntugu', 4, 2, 6);

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

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`seasonId`, `seasonName`, `startDate`, `numOfTeams`, `endDate`, `winnerTeamId`) VALUES
(1, 'Fall 2022', '2022-09-10', 6, '2022-12-10', 3),
(2, 'Spring 2023', '2023-01-14', 6, NULL, NULL);

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
-- Table structure for table `teammember`
--

CREATE TABLE `teammember` (
  `playerID` int(11) NOT NULL,
  `teamID` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teammember`
--

INSERT INTO `teammember` (`playerID`, `teamID`, `fname`, `lname`, `position`) VALUES
(7, 2, 'Kofi', 'Bob', 'CB'),
(9, 2, 'Johm', 'Russell', 'PF'),
(10, 1, 'KK', 'Bob', 'CB'),
(11, 2, 'Paul', 'KLAUS', 'PF'),
(13, 1, 'Russell', 'Kuj', 'CF'),
(14, 3, 'Owen', 'Darwin', 'CF'),
(15, 3, 'Charles', 'Dickins', 'RB'),
(16, 2, 'Chinua', 'Achebe', 'DM'),
(17, 3, 'David', 'King', 'CB');

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
  `dateCreated` date NOT NULL,
  `dateUpdated` date NOT NULL,
  `team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `fullName`, `uname`, `uemail`, `upass`, `gender`, `role`, `status`, `yearGroup`, `dateCreated`, `team`) VALUES
(9, 'Omar Basheer', 'omarb', 'omar.basheer@ashesi.edu.gh', '$2y$10$ijHshIEp/rCGRO28L1vnSOUtzYA9LB/r9GnKXiVgZCaSC.HkRYY7S', 'other', 'coach', NULL, '2024', '2023-02-25', 'Red Army '),
(10, 'Oheneba Dade', 'ohenebad', 'oheneba.dade@ashesi.edu.gh', '$2y$10$gWz7qfYPlPcOtthuQX0QSuYvY0nTlreYEL5nDin0623gbx.aJU0c.', 'male', 'coach', NULL, '2026', '2023-02-25', 'Legends FC '),
(11, 'Yamoah Attafuah', 'yattafuah', 'yattafuah@gmail.com', '$2y$10$jxeVnoPVFm5TR46FxqZS/.Q1S2vP1NAEIr0jukTBrZpDiS1Ybwvsq', 'male', 'coach', NULL, '2026', '2023-02-26', 'Legends FC '),
(22, 'Janelle', 'jnapx', 'cyril.kujar@ashesi.edu.gh', '$2y$10$wbdo1dqY2CGZ5xbGDV1DqeQI/MjBenFB/cdRPtWhYH6gXd6OS1goG', 'male', 'coach', NULL, '2024', '2023-03-03', 'Legends FC ');

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
-- Indexes for table `teammember`
--
ALTER TABLE `teammember`
  ADD PRIMARY KEY (`playerID`),
  ADD KEY `teamID` (`teamID`);

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
  MODIFY `coachId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fixture`
--
ALTER TABLE `fixture`
  MODIFY `fixtureId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `gameId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mediacentre`
--
ALTER TABLE `mediacentre`
  MODIFY `mediaId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
  MODIFY `seasonId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `teamId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teammember`
--
ALTER TABLE `teammember`
  MODIFY `playerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coach`
--
ALTER TABLE `coach`
  ADD CONSTRAINT `coach_ibfk_1` FOREIGN KEY (`teamId`) REFERENCES `team` (`teamId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coach_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fixture`
--
ALTER TABLE `fixture`
  ADD CONSTRAINT `fixture_ibfk_1` FOREIGN KEY (`seasonId`) REFERENCES `season` (`seasonId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fixture_ibfk_2` FOREIGN KEY (`fTeamId`) REFERENCES `team` (`teamId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fixture_ibfk_3` FOREIGN KEY (`sTeamId`) REFERENCES `team` (`teamId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`seasonId`) REFERENCES `season` (`seasonId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `game_ibfk_2` FOREIGN KEY (`fixtureId`) REFERENCES `fixture` (`fixtureId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `game_ibfk_3` FOREIGN KEY (`winnerTeamId`) REFERENCES `team` (`teamId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leaguetable`
--
ALTER TABLE `leaguetable`
  ADD CONSTRAINT `leaguetable_ibfk_1` FOREIGN KEY (`seasonId`) REFERENCES `season` (`seasonId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `leaguetable_ibfk_2` FOREIGN KEY (`teamId`) REFERENCES `team` (`teamId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mediacentre`
--
ALTER TABLE `mediacentre`
  ADD CONSTRAINT `mediacentre_ibfk_1` FOREIGN KEY (`gameId`) REFERENCES `game` (`gameId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `season`
--
ALTER TABLE `season`
  ADD CONSTRAINT `season_ibfk_1` FOREIGN KEY (`winnerTeamId`) REFERENCES `team` (`teamId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teammember`
--
ALTER TABLE `teammember`
  ADD CONSTRAINT `teammember_ibfk_1` FOREIGN KEY (`teamID`) REFERENCES `team` (`teamId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
