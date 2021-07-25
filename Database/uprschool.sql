-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 01:21 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uprschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(233) NOT NULL,
  `password` varchar(233) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `commentID` int(10) NOT NULL AUTO_INCREMENT,
  `postID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `email` varchar(233) NOT NULL,
  `firstname` varchar(211) NOT NULL,
  `lastname` varchar(233) NOT NULL,
  `comment` text NOT NULL,
  `photo` text NOT NULL,
  `active` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`commentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=500 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `postID`, `userID`, `email`, `firstname`, `lastname`, `comment`, `photo`, `active`, `date_added`) VALUES
(251, 23, 0, '', 'Atif', 'Mumtaz', 'Nice Video', '14946537041482162529989.JPG', 0, '2017-05-13 06:05:13'),
(252, 23, 0, '', 'Sadheer', 'Ajk', 'Thanx Atif', '1494651186Capture.PNG', 0, '2017-05-13 06:05:42'),
(256, 23, 0, '', 'Salik', 'Khan', 'Hmmm', '14946539611482161986727.JPG', 0, '2017-05-13 06:42:33'),
(257, 61, 0, '', 'Sadheer', 'Ajk', 'Nice', '1494651186Capture.PNG', 0, '2017-05-13 06:47:54'),
(258, 61, 0, '', 'Kashif', 'Zulfiquar', 'Very helpful..thanxx', '1494658483Capture.PNG', 0, '2017-05-13 06:55:14'),
(261, 23, 0, '', 'Nomi', 'Khan', 'Nicee', 'user.ico', 0, '2017-05-13 09:02:02'),
(262, 61, 0, '', 'Hasnain', 'Qasim', 'Nice work..Sadheer Ajk', '14946662901482162456474.JPG', 0, '2017-05-13 09:05:26'),
(263, 66, 0, '', 'Hasnain', 'Qasim', 'Nice post', '14946662901482162456474.JPG', 0, '2017-05-13 09:06:05'),
(265, 66, 0, '', 'Muhammad', 'Aqib', 'Great concept....', '14946666471482161801771.JPG', 0, '2017-05-13 09:11:08'),
(266, 66, 0, '', 'Salik', 'Khan', 'Chaachu yo ki krleya Hun ???', '14946539611482161986727.JPG', 0, '2017-05-13 09:11:59'),
(267, 65, 0, '', 'Salik', 'Khan', 'Nice....', '14946539611482161986727.JPG', 0, '2017-05-13 09:36:33'),
(268, 65, 0, '', 'Muhammad', 'Aqib', 'Hmmm', '14946666471482161801771.JPG', 0, '2017-05-13 09:37:06'),
(269, 65, 0, '', 'Saddam', 'Azad', 'Nice work..', '14946540201482161837580.JPG', 0, '2017-05-13 09:37:32'),
(270, 65, 0, '', 'Nomi', 'Khan', 'Niceeee', 'user.ico', 0, '2017-05-13 09:38:23'),
(271, 64, 0, '', 'Mustafa', 'Abbasi', 'Nicee', 'user.ico', 0, '2017-05-13 09:41:43'),
(272, 64, 0, '', 'Sadheer', 'Ajk', 'Thanx Mustafa', '1494651186Capture.PNG', 0, '2017-05-13 09:42:20'),
(273, 65, 0, '', 'Atif', 'Mumtaz', 'Great sir...!!!', '14946537041482162529989.JPG', 0, '2017-05-13 09:43:18'),
(274, 65, 0, '', 'Kashif', 'Zulfiquar', 'ayyyy  haaan ???', '1494658483Capture.PNG', 0, '2017-05-13 09:44:23'),
(275, 66, 0, '', 'Hassan', 'Khan', 'Chaachu  ???', '14946687471482161782115.JPG', 0, '2017-05-13 09:46:26'),
(276, 66, 0, '', 'Danyal', 'Rashid', 'Hmmm\r\n', '14946543501482161861859.JPG', 0, '2017-05-13 09:49:22'),
(277, 62, 0, '', 'Saddam', 'Azad', 'Nice...\r\n', '14946540201482161837580.JPG', 0, '2017-05-13 09:52:05'),
(278, 60, 0, '', 'Marry', 'Loci', 'Niceee', 'user.ico', 0, '2017-05-13 09:52:57'),
(279, 60, 0, '', 'Kashif', 'Zulfiquar', 'Soonyoo ..!! Chora programing ...Number Dya maa', '1494658483Capture.PNG', 0, '2017-05-13 09:54:10'),
(280, 60, 0, '', 'Atif', 'Mumtaz', 'Kashi ...Yo rawalakoti nai samajni....???', '14946537041482162529989.JPG', 0, '2017-05-13 09:55:11'),
(281, 60, 0, '', 'Muhammad', 'Aqib', 'hahahha...kashi me ki v dya number ???', '14946666471482161801771.JPG', 0, '2017-05-13 09:57:14'),
(282, 65, 0, '', 'Atif', 'Mumtaz', 'Nicee', '14946748071460816010atif.JPG', 0, '2017-05-13 11:44:18'),
(283, 31, 0, '', 'Mujtaba', 'Ahmed', 'Nicee', '14946760761460815631mijtaba.JPG', 0, '2017-05-13 11:48:19'),
(284, 17, 0, '', 'Mujtaba', 'Ahmed', 'Nice concept', '14946760761460815631mijtaba.JPG', 0, '2017-05-13 11:48:36'),
(285, 66, 0, '', 'Mujtaba', 'Ahmed', 'hahahahhaha', '14946760761460815631mijtaba.JPG', 0, '2017-05-13 11:49:07'),
(286, 22, 0, '', 'Muhammad', 'Zahoor', 'helps alot....!!!', '1494676364Capture.PNG', 0, '2017-05-13 11:54:27'),
(287, 30, 0, '', 'Mujtaba', 'Ahmed', 'Why redirection on main page destroy the seession ???', '14946760761460815631mijtaba.JPG', 0, '2017-05-13 12:53:53'),
(288, 30, 0, '', 'Upr', 'Admin', 'put the session_set() function on main page where destroyed...then try ...!!', 'user.ico', 0, '2017-05-13 12:55:53'),
(289, 30, 0, '', 'Mujtaba', 'Ahmed', 'Thanx admin..it works...!!!', '14946760761460815631mijtaba.JPG', 0, '2017-05-13 12:56:37'),
(290, 71, 0, '', 'Mujtaba', 'Ahmed', 'Nice post', '14946760761460815631mijtaba.JPG', 0, '2017-05-13 12:59:25'),
(291, 71, 0, '', 'Muhammad', 'Aqib', 'Ahaan ??', '14946666471482161801771.JPG', 0, '2017-05-13 13:00:23'),
(292, 59, 0, '', 'Shehraz', 'Muzaffar', 'Simple and Easy Concept....!!!', '1494682047sheraz.PNG', 0, '2017-05-13 13:30:29'),
(293, 59, 0, '', 'Umair', 'Khan', 'Shehraz .... or koi kam ni ??', '1494682084umair.PNG', 0, '2017-05-13 13:31:09'),
(294, 59, 0, '', 'Junaid', 'Khan', 'Settllite...nechy ni ani chay baqi khair a ??', '1494682124junaid.PNG', 0, '2017-05-13 13:32:09'),
(295, 59, 0, '', 'Sadheer', 'Ajk', 'hahahahah', '1494651186Capture.PNG', 0, '2017-05-13 13:33:20'),
(296, 73, 0, '', 'Sadheer', 'Ajk', 'Nice post..!!', '1494651186Capture.PNG', 0, '2017-05-13 13:40:24'),
(297, 73, 0, '', 'Shehraz', 'Muzaffar', 'Nice work bro...!!!', '1494682047sheraz.PNG', 0, '2017-05-13 17:00:43'),
(298, 46, 0, '', 'Shehraz', 'Muzaffar', 'advance guide..!', '1494682047sheraz.PNG', 0, '2017-05-13 17:06:35'),
(299, 72, 0, '', 'Sadheer', 'Ajk', 'Nice', '1494651186Capture.PNG', 0, '2017-05-13 18:18:47'),
(300, 72, 0, '', 'Shehraz', 'Muzaffar', 'hammmm', '1494682047sheraz.PNG', 0, '2017-05-13 18:19:18'),
(301, 3, 0, '', 'Shehraz', 'Muzaffar', 'Easy concept...!!', '1494682047sheraz.PNG', 0, '2017-05-13 18:20:37'),
(302, 74, 0, '', 'Shehraz', 'Muzaffar', 'This for MAMP but i am using WAMP what procedure will be for that ?? ', '1494682047sheraz.PNG', 0, '2017-05-14 04:34:01'),
(303, 74, 0, '', 'Saddam', 'Azad', 'same procedure but you have to select...apache modules...', '14946540201482161837580.JPG', 0, '2017-05-15 12:50:40'),
(304, 58, 0, '', 'Sadheer', 'Ajk', 'Nice prediction ....!!!', '1494651186Capture.PNG', 0, '2017-05-16 06:03:49'),
(305, 57, 0, '', 'Sadheer', 'Ajk', 'How can i add ??', '1494651186Capture.PNG', 0, '2017-05-19 11:35:54'),
(306, 58, 0, '', 'Atif', 'Mumtaz', 'ahaaan ???', '14946748071460816010atif.JPG', 0, '2017-05-19 12:09:14'),
(307, 56, 0, '', 'Sadheer', 'Ajk', 'Nicee', '1494651186Capture.PNG', 0, '2017-05-19 13:04:57'),
(308, 56, 0, '', 'Danyal', 'Rashid', 'Nice post....', '149480698414946747801460815959danyal.JPG', 0, '2017-05-22 13:21:56'),
(309, 61, 0, '', 'Muhammad', 'Zahoor', 'Nice', '1494676364Capture.PNG', 0, '2017-05-22 13:29:58'),
(310, 29, 0, '', 'Zulqernain', 'Haider', 'Nice post..very helpful..!!', 'user.ico', 0, '2017-05-22 13:31:52'),
(311, 30, 0, '', 'Atif', 'Mumtaz', 'Hmmm', '14946748071460816010atif.JPG', 0, '2017-05-23 10:26:03'),
(312, 13, 0, '', 'Sadheer', 'Ajk', 'Nicee...', '1494651186Capture.PNG', 0, '2017-06-03 05:55:03'),
(313, 22, 0, '', 'Shoib', 'Usmani', 'Nice...', 'user.ico', 0, '2017-06-05 13:52:59'),
(314, 33, 0, '', 'Shehraz', 'Muzaffar', 'very helpful..!!', '1494682047sheraz.PNG', 0, '2017-06-07 13:38:58'),
(315, 65, 0, '', 'Sadheer', 'Ajk', 'Hmmm', '1494651186Capture.PNG', 0, '2017-06-10 06:58:02'),
(316, 66, 0, '', 'Saddam', 'Azad', 'Muji Khair eyy ??', '14946540201482161837580.JPG', 0, '2017-06-10 07:41:10'),
(317, 32, 0, '', 'Sadheer', 'Ajk', 'great post', '1494651186Capture.PNG', 0, '2017-06-12 07:37:16'),
(318, 60, 0, '', 'Saddam', 'Azad', 'Astaghfirullah .....!!!', '14946540201482161837580.JPG', 0, '2017-06-13 15:00:44'),
(319, 72, 0, '', 'Umair', 'Khan', 'Niceee', '1494682084umair.PNG', 0, '2017-06-13 15:06:06'),
(320, 77, 0, '', 'Muhammad', 'Zahoor', 'Nice tutorial ...thanx it helps alot', '1494676364Capture.PNG', 0, '2017-06-14 06:34:15'),
(321, 77, 0, '', 'Sadheer', 'Ajk', 'You are welcome Muhammad Zahoor ', '1494651186Capture.PNG', 0, '2017-06-14 06:35:07'),
(322, 79, 0, '', 'Hasnain', 'Qasim', 'How can i remove a background without duplicating layer ?', '14946662901482162456474.JPG', 0, '2017-06-14 06:40:16'),
(323, 78, 0, '', 'Hasnain', 'Qasim', 'NIcee', '14946662901482162456474.JPG', 0, '2017-06-14 06:40:51'),
(324, 77, 0, '', 'Hasnain', 'Qasim', 'Nicee', '14946662901482162456474.JPG', 0, '2017-06-14 06:41:03'),
(325, 62, 0, '', 'Sadheer', 'Ajk', 'Yeah..!!', '1494651186Capture.PNG', 0, '2017-06-14 11:34:07'),
(326, 62, 0, '', 'Upr', 'Admin', 'Thanxx', 'user.ico', 0, '2017-06-14 11:34:35'),
(327, 79, 0, '', 'Sadheer', 'Ajk', 'Put Erauer from Toolbar and remove it..don''t make a duplicate layer', '1494651186Capture.PNG', 0, '2017-06-14 11:35:46'),
(328, 78, 0, '', 'Sadheer', 'Ajk', 'Great', '1494651186Capture.PNG', 0, '2017-06-14 11:36:19'),
(329, 78, 0, '', 'Sadheer', 'Ajk', ' >:( :smirk: :coolmad: :shut: :ohh: :-S >:-(', '1494651186Capture.PNG', 0, '2017-06-14 11:37:35'),
(330, 79, 0, '', 'Muhammad', 'Zahoor', ' ;-) :roll: :roll: :roll:', '1494676364Capture.PNG', 0, '2017-06-14 11:49:44'),
(331, 79, 0, '', 'Upr', 'Admin', ' :blank: :blank: :blank: :blank:', 'user.ico', 0, '2017-06-14 11:54:02'),
(332, 77, 0, '', 'Sadheer', 'Ajk', ' :gulp: :gulp: :gulp:', '1494651186Capture.PNG', 0, '2017-06-14 11:57:36'),
(333, 75, 0, '', 'Sadheer', 'Ajk', ' :gulp: :gulp: :gulp: :gulp:', '1494651186Capture.PNG', 0, '2017-06-14 11:59:09'),
(334, 78, 0, '', 'Atif', 'Mumtaz', ' :blank: :blank: :blank: :blank: :blank:', '14946748071460816010atif.JPG', 0, '2017-06-14 11:59:43'),
(335, 74, 0, '', 'Awais', 'Kamran', 'Saddam Bi.. yo ki krleya  :lol: :lol: :lol:', 'user.ico', 0, '2017-06-14 12:03:46'),
(336, 62, 0, '', 'Sadheer', 'Ajk', ' :coolsmile: :coolsmile: :coolsmile: :coolsmile:', '1494651186Capture.PNG', 0, '2017-06-14 12:10:16'),
(337, 33, 0, '', 'Sadheer', 'Ajk', 'Sheraz pi khair a  :zip: >:-( >:-( >:-(', '1494651186Capture.PNG', 0, '2017-06-14 12:11:49'),
(338, 76, 0, '', 'Sadheer', 'Ajk', ' :coolgrin: :coolgrin: :coolgrin:', '1494651186Capture.PNG', 0, '2017-06-14 12:13:05'),
(339, 78, 0, '', 'Kashif', 'Zulfquar', ' :kiss: :kiss: :kiss: :kiss: :kiss: :kiss:`', '14946766691460815791kashf.JPG', 0, '2017-06-14 13:34:46'),
(340, 61, 0, '', 'Sadheer', 'Ajk', ' :down: :down: :down: :down: :down: :down:', '1494651186Capture.PNG', 0, '2017-06-14 13:48:03'),
(341, 21, 0, '', 'Sadheer', 'Ajk', ' :question: :question: :question: :question:', '1494651186Capture.PNG', 0, '2017-06-14 13:49:52'),
(342, 78, 0, '', 'Saddam', 'Azad', 'Astagfirullah  :coolsmile: :coolsmile: :coolsmile: :coolsmile: :coolsmile: ', '14946540201482161837580.JPG', 0, '2017-06-14 13:50:44'),
(343, 78, 0, '', 'Muhammad', 'Aqib', ' >:( >:( >:( >:( >:(', '14946666471482161801771.JPG', 0, '2017-06-14 13:51:42'),
(344, 74, 0, '', 'Junaid', 'Khan', ' >:-( >:-( >:-( >:-(', '1494682124junaid.PNG', 0, '2017-06-14 14:52:30'),
(345, 77, 0, '', 'Junaid', 'Khan', 'Nicee   :gulp: :gulp: :gulp: :gulp:', '1494682124junaid.PNG', 0, '2017-06-14 15:05:45'),
(346, 76, 0, '', 'Junaid', 'Khan', ' :bug: :bug: :bug:', '1494682124junaid.PNG', 0, '2017-06-14 15:06:07'),
(347, 71, 0, '', 'Junaid', 'Khan', ' :down: :down: :down: :down: :down:', '1494682124junaid.PNG', 0, '2017-06-14 15:11:07'),
(348, 3, 0, '', 'Sadheer', 'Ajk', ' ;-) ;-) :) :cheese:', '1494651186Capture.PNG', 0, '2017-06-14 15:29:55'),
(349, 30, 0, '', 'Sadheer', 'Ajk', ' 8-/ 8-/ 8-/ 8-/ 8-/ 8-/ 8-/ 8-/', '1494651186Capture.PNG', 0, '2017-06-14 15:30:53'),
(350, 21, 0, '', 'Saddam', 'Azad', ' :lol: :lol: :lol: :lol:', '14946540201482161837580.JPG', 0, '2017-06-14 15:49:23'),
(351, 23, 0, '', 'Saddam', 'Azad', ' :zip: :zip: :zip: :zip:', '14946540201482161837580.JPG', 0, '2017-06-14 15:49:50'),
(352, 77, 0, '', 'Saddam', 'Azad', ' :coolsmile: :coolsmile: :coolsmile: :coolsmile: :coolsmile:', '14946540201482161837580.JPG', 0, '2017-06-14 15:50:49'),
(353, 76, 0, '', 'Atif', 'Mumtaz', ' :zip: :zip: :zip:', '14946748071460816010atif.JPG', 0, '2017-06-14 18:22:19'),
(354, 57, 0, '', 'Atif', 'Mumtaz', ' :blank: :blank: :blank: :blank:', '14946748071460816010atif.JPG', 0, '2017-06-14 18:28:04'),
(355, 79, 0, '', 'Sadheer', 'Ajk', ' :bug: :bug: :bug: :bug:', '1494651186Capture.PNG', 0, '2017-06-14 18:37:39'),
(356, 66, 0, '', 'Sadheer', 'Ajk', ' :ohh: :ohh: :ohh: :ohh: :ohh: :ohh:', '1494651186Capture.PNG', 0, '2017-06-15 06:30:27'),
(357, 29, 0, '', 'Sadheer', 'Ajk', ' ;-) :-/ :cheese: :-) :blank: :zip: >:( :blank:', '1494651186Capture.PNG', 0, '2017-06-15 08:28:35'),
(358, 22, 0, '', 'Sadheer', 'Ajk', ' :long: :long: :long:', '1494651186Capture.PNG', 0, '2017-06-15 08:29:24'),
(359, 22, 0, '', 'Muhammad', 'Aqib', ' :bug: :bug: :bug: :bug:', '14946666471482161801771.JPG', 0, '2017-06-15 09:05:47'),
(360, 74, 0, '', 'Sadheer', 'Ajk', ' :down: :down: :down: :down:', '1494651186Capture.PNG', 0, '2017-06-15 09:31:51'),
(361, 74, 0, '', 'Noman', 'Khan', ' :gulp: :gulp: :gulp: :gulp: :gulp:', 'user.ico', 0, '2017-06-15 09:32:17'),
(362, 78, 0, '', 'Hassan', 'Khan', ' :coolsmile: :coolsmile: :coolsmile: :coolsmile:', '14946687471482161782115.JPG', 0, '2017-06-15 09:42:56'),
(363, 77, 0, '', 'Atif', 'Mumtaz', ' :coolhmm: :coolhmm: :coolhmm: :coolhmm:', '14946748071460816010atif.JPG', 0, '2017-06-16 05:26:32'),
(364, 75, 0, '', 'Noman', 'Khan', 'Niceee :gulp: :gulp: :gulp: :gulp:', 'user.ico', 0, '2017-06-16 05:32:16'),
(365, 29, 0, '', 'Umair', 'Khan', ' :ohh: :ohh: :ohh: :ohh: :ohh: :ohh: :ohh:', '1494682084umair.PNG', 0, '2017-06-16 05:46:57'),
(366, 75, 0, '', 'Saddam', 'Azad', ' :roll: :roll: :roll: :roll:', '14946540201482161837580.JPG', 0, '2017-06-26 08:46:24'),
(367, 78, 0, '', 'Saddam', 'Azad', ' :wow: :wow: :wow: :wow:', '14946540201482161837580.JPG', 0, '2017-06-26 08:50:28'),
(368, 79, 0, '', 'Ramzan', 'Latif', 'Very Nice... :ohh: :ohh: :ohh: :ohh:', '1498499751Capture.JPG', 0, '2017-06-26 17:56:19'),
(369, 46, 0, '', 'Ramzan', 'Latif', ' :-S :-S :-S :-S :-S', '1498499751Capture.JPG', 0, '2017-06-26 18:28:44'),
(370, 57, 0, '', 'Sadheer', 'Ajk', ' >:( >:( >:( >:(', '1494651186Capture.PNG', 0, '2017-06-27 13:51:42'),
(371, 75, 0, '', 'Sadheer', 'Ajk', ' :-S :-S :-S :-S :-S', '1494651186Capture.PNG', 0, '2017-06-28 17:42:16'),
(372, 79, 0, '', 'Sadheer', 'Ajk', ' >:-( >:-( >:-( >:-(', '1494651186Capture.PNG', 0, '2017-07-01 13:32:21'),
(373, 46, 0, '', 'Shehraz', 'Muzaffar', ' :gulp: :gulp: :gulp: :gulp:', '1494682047sheraz.PNG', 0, '2017-06-16 21:08:03'),
(374, 46, 0, '', 'Shehraz', 'Muzaffar', ' :roll: :roll:', '1494682047sheraz.PNG', 0, '2017-06-16 21:08:18'),
(375, 79, 0, '', 'Shehraz', 'Muzaffar', 'Nicee.... :wow: :wow: :wow:', '1494682047sheraz.PNG', 0, '2017-06-16 21:08:39'),
(376, 46, 0, '', 'Sadheer', 'Ajk', ' :coolsmile: :coolsmile: :coolsmile:', '1494651186Capture.PNG', 0, '2017-06-17 13:01:41'),
(377, 29, 0, '', 'Danyal', 'Rashid', 'Nice...', '149480698414946747801460815959danyal.JPG', 0, '2017-06-17 13:29:03'),
(378, 76, 0, '', 'Danyal', 'Rashid', ' :ohh: :ohh: :ohh:', '149480698414946747801460815959danyal.JPG', 0, '2017-06-17 13:29:23'),
(379, 62, 0, '', 'Danyal', 'Rashid', ' :roll: :roll: :roll: :roll:', '149480698414946747801460815959danyal.JPG', 0, '2017-06-17 13:30:38'),
(380, 78, 0, '', 'Danyal', 'Rashid', ' :blank: :blank: :blank:', '149480698414946747801460815959danyal.JPG', 0, '2017-06-17 13:31:10'),
(381, 71, 0, '', 'Danyal', 'Rashid', ' :bug: :bug:', '149480698414946747801460815959danyal.JPG', 0, '2017-06-19 11:20:56'),
(382, 30, 0, '', 'Danyal', 'Rashid', ' :question: :question: :question: :question: :question:', '149480698414946747801460815959danyal.JPG', 0, '2017-06-19 11:22:46'),
(383, 29, 0, '', 'Shehraz', 'Muzaffar', 'Nice post..!!', '1494682047sheraz.PNG', 0, '2017-06-19 11:28:00'),
(384, 62, 0, '', 'Shehraz', 'Muzaffar', ' ;-) ;-) ;-) ;-)', '1494682047sheraz.PNG', 0, '2017-06-19 11:36:54'),
(385, 44, 0, '', 'Sadheer', 'Ajk', ' :gulp: :gulp: :gulp: :gulp:', '1494651186Capture.PNG', 0, '2017-06-19 11:52:20'),
(386, 44, 0, '', 'Danyal', 'Rashid', ' :blank: :blank: :blank: :blank:', '149480698414946747801460815959danyal.JPG', 0, '2017-07-14 03:39:53'),
(387, 77, 0, '', 'Zafeer', 'Sultani', 'Nice... :roll: :roll: :roll:', '1500053864Capture.JPG', 0, '2017-07-14 17:39:07'),
(388, 76, 0, '', 'Zafeer', 'Sultani', 'how can i do that ??', '1500053864Capture.JPG', 0, '2017-07-14 18:05:32'),
(389, 79, 0, '', 'Zafeer', 'Sultani', ' :smirk: :smirk: :smirk:', '1500053864Capture.JPG', 0, '2017-07-18 13:22:15'),
(390, 71, 0, '', 'Sadheer', 'Ajk', ' :coolsmile: :coolsmile:', '1494651186Capture.PNG', 0, '2017-07-20 02:26:29'),
(391, 44, 0, '', 'Muhammad', 'Aqib', ' :question: :question: :question:', '14946666471482161801771.JPG', 0, '2017-07-20 02:30:54'),
(392, 75, 0, '', 'Junaid', 'Khan', 'Thanks it helps alot...!!!', '1494682124junaid.PNG', 0, '2017-07-20 02:40:36'),
(393, 22, 0, '', 'Saddam', 'Azad', ' 8-/ 8-/ 8-/', '14946540201482161837580.JPG', 0, '2017-07-20 15:13:25'),
(394, 56, 0, '', 'Sadheer', 'Ajk', ' ;-P ;-P ;-P ;-P', '1494651186Capture.PNG', 0, '2017-07-20 15:16:08'),
(395, 60, 0, '', 'Sadheer', 'Ajk', 'Hahahahahah :lol: :lol: :lol: :lol:', '1494651186Capture.PNG', 0, '2017-07-20 17:01:28'),
(396, 75, 0, '', 'Atif', 'Mumtaz', ' :ohh: :ohh: :ohh:', '14946748071460816010atif.JPG', 0, '2017-07-21 12:18:27'),
(397, 75, 0, '', 'Atif', 'Mumtaz', 'Hahahah', '14946748071460816010atif.JPG', 0, '2017-07-21 12:18:35'),
(420, 80, 0, '', 'Rehan', 'Khan', 'Nicee  :roll: :roll: :roll:', 'user.ico', 1, '2017-08-25 11:51:08'),
(421, 80, 0, '', 'Ramzan', 'Latif', ' :gulp: :gulp: :gulp:', '1498499751Capture.JPG', 1, '2017-08-25 11:55:55'),
(422, 28, 0, '', 'Ramzan', 'Latif', ' :bug: :bug: :bug: :bug:', '1498499751Capture.JPG', 1, '2017-08-25 11:56:21'),
(423, 75, 0, '', 'Kashif', 'Zulfquar', ' :ohh: :ohh: :ohh:', '14946766691460815791kashf.JPG', 1, '2017-08-26 13:39:55'),
(425, 64, 0, '', 'Sadheer', 'Ajk', ' :gsmile: :gsmile: :gsmile:', '15038228231494651186Capture.PNG', 1, '2017-08-27 08:51:41'),
(426, 76, 0, '', 'Muhammad', 'Nasir', ' :gsmile: :gsmile: :gsmile: :gsmile:', 'user.ico', 1, '2017-08-27 13:14:28'),
(427, 58, 0, '', 'Saddam', 'Azad', ' :roll: :roll: :roll:', '14946540201482161837580.JPG', 1, '2017-09-05 13:16:13'),
(428, 59, 0, '', 'Saddam', 'Azad', ' :bug: :bug: :bug: :bug:', '14946540201482161837580.JPG', 1, '2017-09-05 13:17:03'),
(429, 33, 0, '', 'Sadheer', 'Ajk', ' :roll: :roll: :roll:', '15038228231494651186Capture.PNG', 1, '2017-10-15 18:28:16'),
(430, 23, 0, '', 'Danyal', 'Rashid', 'Niceee... :roll: :roll: :roll: :roll:', '149480698414946747801460815959danyal.JPG', 1, '2017-11-24 10:26:15'),
(431, 59, 0, '', 'Danyal', 'Rashid', ' :blank: :blank: :blank: :blank:', '149480698414946747801460815959danyal.JPG', 1, '2017-11-24 10:26:53'),
(432, 13, 0, '', 'Atif', 'Mumtaz', 'Nice... :shut: >:( >:( :coolcheese: :gulp: :smirk: :roll:', '14946748071460816010atif.JPG', 1, '2017-12-07 05:32:40'),
(451, 85, 0, '', 'Danyal', 'Rashid', 'Yup..!! It works for me ..thanks', '149480698414946747801460815959danyal.JPG', 1, '2017-12-16 07:08:34'),
(462, 90, 0, '', 'Atif', 'Mumtaz', 'Nicee one g', '14946748071460816010atif.JPG', 1, '2018-01-04 06:36:29'),
(465, 91, 0, '', 'Noman', 'Khan', 'welldoneee', 'user.ico', 1, '2018-01-09 09:40:24'),
(466, 80, 0, '', 'Noman', 'Khan', 'Nicee', 'user.ico', 1, '2018-01-09 09:43:45'),
(467, 91, 0, '', 'Atif', 'Mumtaz', 'Niceee', '14946748071460816010atif.JPG', 1, '2018-01-09 09:45:03'),
(468, 89, 0, '', 'Atif', 'Mumtaz', 'Nicweee', '14946748071460816010atif.JPG', 1, '2018-01-09 10:02:38'),
(469, 56, 0, '', 'Atif', 'Mumtaz', 'Niceeeeee', '14946748071460816010atif.JPG', 1, '2018-01-09 10:09:19'),
(470, 62, 0, '', 'Faran', 'Kazmi', 'Thanksss', '1511849151dsdsdsdsdsdz.jpg', 1, '2018-01-09 10:13:58'),
(471, 62, 0, '', 'Faran', 'Kazmi', 'Thankss', '1511849151dsdsdsdsdsdz.jpg', 1, '2018-01-09 10:15:45'),
(472, 62, 0, '', 'Faran', 'Kazmi', 'Thankksss', '1511849151dsdsdsdsdsdz.jpg', 1, '2018-01-09 10:20:37'),
(473, 62, 0, '', 'Faran', 'Kazmi', 'Thankksss', '1511849151dsdsdsdsdsdz.jpg', 1, '2018-01-09 10:20:47'),
(475, 62, 0, '', 'Faran', 'Kazmi', 'Thankssss', '1511849151dsdsdsdsdsdz.jpg', 1, '2018-01-09 10:22:22'),
(476, 62, 0, '', 'Faran', 'Kazmi', 'Thanksssss', '1511849151dsdsdsdsdsdz.jpg', 1, '2018-01-09 10:24:04'),
(479, 91, 0, '', 'Atif', 'Mumtaz', ' :bug: :bug: :bug:', '14946748071460816010atif.JPG', 1, '2018-01-09 12:16:23'),
(480, 76, 0, '', 'Atif', 'Mumtaz', 'Niceee', '14946748071460816010atif.JPG', 1, '2018-01-09 12:48:00'),
(481, 58, 0, '', 'Atif', 'Mumtaz', 'Niceee', '14946748071460816010atif.JPG', 1, '2018-01-09 12:51:54'),
(482, 58, 0, '', 'Faran', 'Kazmi', 'Thanksss', '1511849151dsdsdsdsdsdz.jpg', 1, '2018-01-09 13:15:27'),
(483, 58, 0, '', 'Faran', 'Kazmi', 'Thanksss', '1511849151dsdsdsdsdsdz.jpg', 1, '2018-01-09 13:31:07'),
(484, 58, 0, '', 'Alex', 'Ellen', 'Wel done !', '1515505124dfsd.jpg', 1, '2018-01-09 13:42:22'),
(485, 83, 0, '', 'Saddam', 'Azad', 'NIcee Concept  ;-P ;-P ;-P', '14946540201482161837580.JPG', 1, '2018-01-09 15:19:55'),
(486, 83, 0, '', 'Alex', 'Ellen', 'Thanxx <b>Saddam Azad </b>', '1515505124dfsd.jpg', 1, '2018-01-09 15:20:35'),
(487, 75, 0, '', 'Sadheer', 'Ajk', 'Thanx ..its working', '1513350132150824220715038228231494651186Capture.PNG', 1, '2018-01-09 17:14:24'),
(489, 90, 0, '', 'Sadheer', 'Ajk', 'Nice post broo', '1513350132150824220715038228231494651186Capture.PNG', 1, '2018-01-09 17:19:47'),
(490, 90, 0, '', 'Alex', 'Ellen', 'You are welcome <b>Sadheer Ajk</b> ', '1515505124dfsd.jpg', 1, '2018-01-09 17:20:19'),
(492, 30, 0, '', 'Alex', 'Ellen', '<font color="blue">you are welcome', '1515505124dfsd.jpg', 1, '2018-01-09 17:21:28'),
(493, 89, 0, '', 'Sadheer', 'Ajk', 'Niceee :roll: :roll: :roll: :roll: :roll:', '1513350132150824220715038228231494651186Capture.PNG', 1, '2018-01-10 10:36:42'),
(494, 89, 0, '', 'Faran', 'Kazmi', 'Thanxkxxx', '1511849151dsdsdsdsdsdz.jpg', 1, '2018-01-10 10:37:22'),
(499, 60, 0, '', 'Mujtaba', 'Ahmed', 'Nice post', 'user.ico', 0, '2018-02-21 00:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `experts`
--

CREATE TABLE IF NOT EXISTS `experts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(111) NOT NULL,
  `lname` varchar(211) NOT NULL,
  `email` varchar(211) NOT NULL,
  `sex` varchar(111) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(111) NOT NULL,
  `e_type` enum('html','php','cplusplus') NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `photo` varchar(211) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `experts`
--

INSERT INTO `experts` (`id`, `fname`, `lname`, `email`, `sex`, `date`, `password`, `e_type`, `date_added`, `photo`) VALUES
(4, 'Faran', 'Kazmi', 'faran@gmail.com', 'Male', '2017-11-16', 'da1eafbdafda9c49c74075dcd17c2f6a', 'html', '2017-11-28 06:05:51', '1511849151dsdsdsdsdsdz.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mypost`
--

CREATE TABLE IF NOT EXISTS `mypost` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `des` text NOT NULL,
  `cate` varchar(211) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mypost`
--

INSERT INTO `mypost` (`id`, `title`, `des`, `cate`) VALUES
(0, 'Sadheer', 'Lives in Hajira', '20'),
(0, 'Mujtaba', 'something in deataols', '30');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(233) NOT NULL,
  `video` varchar(500) NOT NULL,
  `des` text NOT NULL,
  `code` text NOT NULL,
  `cate` varchar(233) NOT NULL,
  `sub_cate` varchar(233) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `video`, `des`, `code`, `cate`, `sub_cate`, `date_added`, `active`) VALUES
(44, 'PHP Codelnighter', 'https://www.youtube.com/embed/I752ofYu7ag', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Installation', 'Codelnighter', '2016-12-25 10:15:03', 1),
(60, 'C++ program to add two numbers', 'https://www.youtube.com/embed/zWoSzwSKPYQ\r\n', 'Sum is : 102', '#include<iostream>\r\nusing namespace std;\r\nvoid main(){\r\nint a=45;\r\nint b=57;\r\nint result=a+b;\r\ncout<<"Sum is : "<<result<<endl;\r\n\r\n}', 'cplusplus', 'Basic', '2016-12-25 11:25:16', 1),
(66, 'Arrays in Java', 'https://www.youtube.com/embed/k92WCUX9A1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'sdjfskdLorem Ipsum is simply dummy text of the printing and typesetting industry', 'java', 'arrays', '2017-01-07 07:16:27', 1),
(71, 'Data Tables', 'https://www.youtube.com/embed/k92WCUX9A1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'csharp', 'Nothing', '2017-05-13 12:58:52', 1),
(72, 'Classes (C++)', 'https://www.youtube.com/embed/k92WCUX9A1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'cplusplus', 'gjdkff', '2017-05-13 13:36:09', 1),
(74, 'removing index.php from url', 'https://www.youtube.com/embed/k92WCUX9A1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'php', 'skdjksdfk', '2017-05-14 03:06:09', 1),
(75, 'how to get an element by id', 'https://www.youtube.com/embed/k92WCUX9A1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'php', 'how to get an element by id', '2017-06-14 06:10:18', 1),
(76, 'how to create session', 'https://www.youtube.com/embed/h6KID8n0zCU', 'jhsdkfhsdjf\r\njhsdkfhsdjf', '<?php\r\necho ''jhsdkfhsdjf'';\r\necho ''jhsdkfhsdjf'';\r\n?>', 'php', 'how to get an element by id', '2017-06-14 06:12:05', 1),
(77, 'Installing Android Studio', 'https://www.youtube.com/embed/Z98hXV9GmzY', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Installation', 'Java', '2017-06-14 06:15:48', 1),
(78, 'Learning Cinema 4D', 'https://www.youtube.com/embed/BjbT98hTIQU', 'Not Available', 'Not Available', 'other', 'Nothing', '2017-06-14 06:37:04', 1),
(79, 'PhotoShop Guide', 'https://www.youtube.com/embed/ImjX7O6PN5A', 'Not Available', 'Not Available', 'other', 'Not Available', '2017-06-14 06:38:45', 1),
(80, 'Configuring Apache Module', 'https://www.youtube.com/embed/k92WCUX9A1', 'Not Available', 'Not Available', 'Installation', 'DFD', '2017-08-24 08:38:18', 1),
(82, 'PHP Programming', 'https://www.youtube.com/embed/xb8aad4MRx8', 'jksdfhsdjfs', 'sds', 'other', 'sdfsd', '2017-12-13 05:42:13', 1),
(84, 'HTML Tag Testing', 'https://www.youtube.com/embed/qKoajPPWpmo', 'sdjh', '<style type="text/css">\r\n	h1{color: red;}\r\nh6{color: green;}\r\np{color: blue;}\r\n</style>\r\n<!DOCTYPE html>\r\n<html>\r\n<head>\r\n	<title>Test</title>\r\n</head>\r\n<body>\r\n<h1>Hello To the future</h1>\r\n<p>Hello To the future</p>\r\n<h6>Hello To the future</h6>\r\n</body>\r\n</html>', 'HTML', 'sjdfhsdfj', '2017-12-14 05:13:04', 1),
(85, 'PHP Test', 'https://www.youtube.com/embed/7TF00hJI78Y', 'Hello to the future\r\n', '<?php \r\necho ''Hello to the future'';\r\n?>', 'php', 'Hello to the future', '2017-12-14 05:29:31', 1),
(86, 'Javsascript Test', 'https://www.youtube.com/embed/PwsigsH4oXw', 'kjsdhfsf', ' <script type="text/javascript">\r\n            \r\nfunction test(){\r\n   alert(''Hello'')\r\n   \r\n}\r\n      </script>  \r\n<!DOCTYPE html>\r\n<html>\r\n<head>\r\n	<title>sdkhja</title>\r\n</head>\r\n<body>\r\n\r\n<button type="button" style="background-color: red;\r\ncolor: yellow;font-size: 5px solid #fff;border:none;\r\nheight: 25px;" name="button" onclick="test();">Cick me please</button>\r\n</body>\r\n</html>', 'HTML', 'Javascript', '2017-12-14 05:49:00', 1),
(89, 'Applying css on HTML Tags', 'https://www.youtube.com/embed/yTHTo28hwTQ', 'ksdjhfsdkfjh', '\r\n<style type="text/css">\r\n	.john{\r\n		color: red;font-size: 30px;\r\n	}\r\n	#merry{\r\n		color: orange;font-size: 20px;\r\n	}\r\n</style>\r\n<div class="john">Heloo John</div>\r\n<div id="merry">Heloo merry</div>', 'HTML', 'HTML and css', '2017-12-16 09:39:02', 1),
(91, 'HTML Headings', 'https://www.youtube.com/embed/Pq9DkCt4fqI', 'dflkgdjfgkdf', '<style>\r\nh1{color:red;}\r\nh2{color:green;}\r\n\r\n</style>\r\n<!DOCTYPE html>\r\n<html>\r\n<head>\r\n	<title>test</title>\r\n</head>\r\n<body>\r\n<h1>Heading 1</<h1>\r\n<h2>Heading 2</<h2>\r\n\r\n</body>\r\n</html>', 'HTML', 'heading', '2017-12-17 06:11:15', 1),
(92, 'PHP Variables', 'https://www.youtube.com/embed/6MxUGGEcDB4', '16', '<?php\r\n\r\n$var1=4;\r\n$var2=4;\r\n$result=$var1+$var2;\r\necho $result;\r\n\r\n?>', 'php', 'variable', '2018-02-20 04:15:34', 1),
(93, 'dsfdfsd', '', 'sdfsdf', '', 'csharp', '', '2018-02-21 23:52:35', 0),
(94, 'dfsdff', '', 'sdfdsf', '', 'csharp', '', '2018-02-22 00:00:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `sex` varchar(121) NOT NULL,
  `date` date NOT NULL,
  `password` varchar(40) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `photo` text NOT NULL,
  `terms_and_policy` varchar(111) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=146 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `sex`, `date`, `password`, `date_added`, `photo`, `terms_and_policy`) VALUES
(76, 'Sadheer', 'Ajk', 'sadheerajk4@gmail.com', 'Male', '1995-01-12', '2077e4a6bafa9b4e7b55e1fff16818af', '2017-05-13 04:53:06', '1513350132150824220715038228231494651186Capture.PNG', 'Agree To Terms & Policy'),
(91, 'Shehraz', 'Muzaffar', 'sherazmuzaffar@gmail.com', 'Male', '1998-03-12', 'd5828f3aa94c349e6a871bf98761ba7e', '2017-05-13 13:27:27', '1494682047sheraz.PNG', 'Agree To Terms & Policy'),
(90, 'Zohaib', 'Jamil', 'zohaib@gmail.com', 'Male', '1991-03-07', '3e5a1f9d331d52527bfd2e3e75003842', '2017-05-13 13:18:30', '14946815101461300977WIN_20160421_215526.JPG', 'Agree To Terms & Policy'),
(89, 'Muhammad', 'Zahoor', 'zahoor@gmail.com', 'Male', '1988-03-02', 'f0c040fae4addf264d456b295dc7df15', '2017-05-13 11:52:44', '1494676364Capture.PNG', 'Agree To Terms & Policy'),
(88, 'Mujtaba', 'Ahmed', 'mujtaba@gmail.com', 'Male', '2017-05-12', '47298d223ad6f6cd94fcf4dae4eea54b', '2017-05-13 11:47:56', '14946760761460815631mijtaba.JPG', 'Agree To Terms & Policy'),
(86, 'Hassan', 'Khan', 'hassankhan@gmail.com', 'Male', '1998-03-12', 'f04e1fd4cbfeecfdce8aa2ad6e9cf4ac', '2017-05-13 09:45:47', '14946687471482161782115.JPG', 'Agree To Terms & Policy'),
(85, 'Muhammad', 'Aqib', 'aqibkhan@gmail.com', 'Male', '2017-05-17', '7172e9ec27d7ac5a576e5764946ab5a7', '2017-05-13 09:10:47', '14946666471482161801771.JPG', 'Agree To Terms & Policy'),
(80, 'Saddam', 'Azad', 'saddam20ksa@gmail.com', 'Male', '1997-06-11', '8c4cfa1c2ee5992a76f8c105f379368d', '2017-05-13 05:40:20', '14946540201482161837580.JPG', 'Agree To Terms & Policy'),
(81, 'Danyal', 'Rashid', 'danyal@gmail.com', 'Male', '1997-02-11', 'd5aab5c97dee7777e497dbb0d5d52db0', '2017-05-13 05:45:50', '149480698414946747801460815959danyal.JPG', 'Agree To Terms & Policy'),
(79, 'Salik', 'Khan', 'salik@outlook.com', 'Male', '2010-07-14', '654872630fbd3428d615cdea3f1894be', '2017-05-13 05:39:21', '150383975614946539611482161986727.JPG', 'Agree To Terms & Policy'),
(77, 'Atif', 'Mumtaz', 'atifmumtaz404@outlook.com', 'Male', '1997-07-17', '182b68b5c4ddcdd81b3d54335c82027a', '2017-05-13 05:35:04', '14946748071460816010atif.JPG', 'Agree To Terms & Policy'),
(82, 'Kashif', 'Zulfquar', 'kashif20ksa@gmail.com', 'Male', '1999-10-20', 'd31237492a5b0b9a4b21494de800a400', '2017-05-13 06:54:43', '14946766691460815791kashf.JPG', 'Agree To Terms & Policy'),
(83, 'Hasnain', 'Qasim', 'hasnainqasim@gmaol.com', 'Male', '1981-07-15', 'f926d1ee342bbe4963c635e80c3b0ba7', '2017-05-13 09:04:50', '14946662901482162456474.JPG', 'Agree To Terms & Policy'),
(92, 'Umair', 'Khan', 'umairkhan@outlook.com', 'Male', '1991-03-06', 'aafd4fb9adee64d2fce872647245e083', '2017-05-13 13:28:04', '1494682084umair.PNG', 'Agree To Terms & Policy'),
(93, 'Junaid', 'Khan', 'junaidkhan@yahoo.com', 'Male', '1993-04-01', 'd2bf9130317bba494fc4b5b28837b525', '2017-05-13 13:28:44', '1494682124junaid.PNG', 'Agree To Terms & Policy'),
(107, 'Qaisar', 'Hussain', 'qaisarhussain88@gmail.com', 'male', '1994-08-13', 'e0afeb835e66d6e6b9548cce6c547ed7', '2017-08-13 07:19:19', '1502608759qaisar.JPG', 'Agree To Terms & Policy'),
(106, 'Zafeer', 'Sultani', 'zafeersultani@gmail.com', 'Male', '2017-07-05', '29de9091bf70de52b55d35e5ed0988d5', '2017-07-14 17:37:44', '1500053864Capture.JPG', 'Agree To Terms & Policy'),
(105, 'Ramzan', 'Latif', 'ramzanlatif@gmail.com', 'Male', '2017-06-08', '383473c229ecc0ae87d2e0ac46b88b6b', '2017-06-26 17:55:51', '1503822731Capture.JPG', 'Agree To Terms & Policy'),
(144, 'Abdual', 'Attique', 'abdulattique@gmail.com', 'Male', '2018-01-23', '5cacde54307bae20bfe41171619b00e8', '2018-01-22 02:26:53', '1516588013dddd (2).PNG', 'Agree To Terms & Policy'),
(145, 'Rehan', 'Khan', 'rehan33@gmail.com', 'Male', '2018-02-09', '825625953cfd8a71e773215200a4de40', '2018-02-21 19:53:40', '1519242820dfd.PNG', 'Agree To Terms & Policy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
