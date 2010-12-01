-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2010 at 11:26 PM
-- Server version: 5.1.37
-- PHP Version: 5.2.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assignment1`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `headline` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `writer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `source` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `story` text COLLATE utf8_unicode_ci,
  `date_submitted` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` VALUES(2, 'Ruby for Newbies: Conditional Statements and Loops', 'Tech', 'Andrew Burgess', 'http://nettuts.plus.com', 'Ruby is a one of the most popular languages used on the web. We’ve started a new screencast series here on Nettuts+ that will introduce you to Ruby, as well as the great frameworks and tools that go along with Ruby development. In this chapter, we’ll be looking at how conditional statements and loops work in Ruby.', 'December 1, 2010, 12:46 pm');
INSERT INTO `article` VALUES(3, 'IRAS to introduce hassle-free GST refund system for tourists', 'Singapore', 'S Ramesh He', 'http://www.channelnewsasia.com/', 'Tourists can look forward to a hassle-free tourist refund experience in Singapore from mid-2011.\\r\\n\\r\\nThe Inland Revenue Authority of Singapore (IRAS) is partnering Global Blue to develop a new electronic tourist refund system.\\r\\nThe aim is to remove form filling by tourists at the point of purchase, and make it easy for them to claim GST refunds at Changi Airport.\\r\\n\\r\\nCurrently, the tourist refund scheme is either operated by the retailers themselves or through the central refund agencies, Global Blue and Premier Tax Free.\\r\\nIRAS feels the paper-based tourist refund system is burdensome and inconvenient for both tourists and retailers at the point of purchase because of the need to fill refund claim forms.', 'December 1, 2010, 8:43 pm');
INSERT INTO `article` VALUES(4, 'Importance of Usability', 'Tech', 'Matt Cronin', 'http://www.smashingmagazine.com/', 'Usability is an essential goal of any website, and usable navigation is something every website needs. It determines where users are led and how they interact with the website. Without usable navigation, content becomes all but useless. Menus need to be simple enough for the user to understand, but also contain the elements necessary to guide the user through the website — with some creativity and good design thrown in.', 'December 1, 2010, 11:18 pm');
INSERT INTO `article` VALUES(5, 'Did Anne and Jake Have to Get Naked for Their Movie?', 'Entertainment', 'LESLIE GORNSTEIN', 'http://www.eonline.com/', 'All I see are Anne Hathaway and Jake Gyllenhaal talking about being naked in their new movie. Was that their choice? How much control did they get?\\r\\n\\r\\nIndeed, Hathaway and Gyllenhaal sure did get naked for that movie that nobody saw. In a recent radio interview, Hathaway said she and her co-star got final cut approval over their nude scenes -- the power to decide exactly which nude takes made it to the big screen. \\r\\n', 'December 1, 2010, 11:20 pm');
INSERT INTO `article` VALUES(6, 'Did Anne and Jake Have to Get Naked for Their Movie?', 'Entertainment', 'LESLIE GORNSTEIN', 'http://www.eonline.com/', 'All I see are Anne Hathaway and Jake Gyllenhaal talking about being naked in their new movie. Was that their choice? How much control did they get?\\r\\n\\r\\nIndeed, Hathaway and Gyllenhaal sure did get naked for that movie that nobody saw. In a recent radio interview, Hathaway said she and her co-star got final cut approval over their nude scenes -- the power to decide exactly which nude takes made it to the big screen. \\r\\n', 'December 1, 2010, 11:20 pm');
INSERT INTO `article` VALUES(7, 'Did Anne and Jake Have to Get Naked for Their Movie?', 'Entertainment', 'LESLIE GORNSTEIN', 'http://www.eonline.com/', 'All I see are Anne Hathaway and Jake Gyllenhaal talking about being naked in their new movie. Was that their choice? How much control did they get?\\r\\n\\r\\nIndeed, Hathaway and Gyllenhaal sure did get naked for that movie that nobody saw. In a recent radio interview, Hathaway said she and her co-star got final cut approval over their nude scenes -- the power to decide exactly which nude takes made it to the big screen. \\r\\n', 'December 1, 2010, 11:21 pm');
