-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `bugs`;
CREATE TABLE `bugs` (
  `bugID` int(10) NOT NULL AUTO_INCREMENT,
  `bugName` varchar(50) NOT NULL,
  `bugSummary` varchar(50) NOT NULL,
  `bugCategory` varchar(50) NOT NULL,
  PRIMARY KEY (`bugID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `bugs` (`bugID`, `bugName`, `bugSummary`, `bugCategory`) VALUES
(1,	'abc',	'hdc vdch hvx jA SJH  sjv ',	'iOS Bugs'),
(2,	'def',	'hgc h hv  gvhgv ccg ',	'Android Bugs'),
(3,	'ghi',	'bvcbc  gghg h hv',	'Windows Bugs');

-- 2016-04-25 20:43:00