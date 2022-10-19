-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2021 at 07:07 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtualclassroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_body` text NOT NULL,
  `courseCode` varchar(50) NOT NULL,
  `posted_by` varchar(60) NOT NULL,
  `posted_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `removed` varchar(3) NOT NULL,
  `post_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=185 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_body`, `courseCode`, `posted_by`, `posted_to`, `date_added`, `removed`, `post_id`) VALUES
(181, 'edi wow', 'classname/coursename_section', 'ruel_almonia', 'joshua_villanueva', '2021-11-26 20:56:17', 'no', 666),
(182, 'error pa more', 'classname/coursename_section', 'ruel_almonia', 'ruel_almonia', '2021-11-26 21:53:14', 'no', 679),
(183, 'a', 'softwareengineer_bscs4-c', 'joshua_villanueva', 'joshua_villanueva', '2021-12-07 14:55:32', 'no', 698),
(184, 'ASD', 'qwerty_q', 'ruel_almonia', 'joshua_villanueva', '2021-12-07 14:57:06', 'no', 699);

-- --------------------------------------------------------

--
-- Table structure for table `createclass`
--

DROP TABLE IF EXISTS `createclass`;
CREATE TABLE IF NOT EXISTS `createclass` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `className` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `section` varchar(25) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `courseCode` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `num_posts` int NOT NULL,
  `student_array` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createclass`
--

INSERT INTO `createclass` (`id`, `username`, `className`, `section`, `subject`, `courseCode`, `date`, `num_posts`, `student_array`) VALUES
(109, 'jhunriz_lalata', 'qwerty', 'q', 'sample', 'qwerty_q', '2021-11-22', 0, ' , , , , ,ruel_almonia ,'),
(112, 'joshua_villanueva', 'BSCS', 'C', 'Networking', 'bscs_c', '2021-11-26', 0, ' ,'),
(113, 'joshua_villanueva', 'ClassName/CourseName', 'Section', 'Subject/CourseTitle', 'classname/coursename_section', '2021-11-26', 0, ' , ,ruel_almonia ,'),
(114, 'ruel_almonia', 'Advance Web', 'BSCS1C', 'CSS001', 'advanceweb_bscs1c', '2021-11-26', 0, 'joshua_villanueva ,'),
(115, 'joshua_villanueva', 'SystemFundamentals', 'BSCS1-C', 'CS101', 'systemfundamentals_bscs1-c', '2021-11-26', 0, ''),
(116, 'joshua_villanueva', 'AdvanceWeb', 'BSCS3-C', 'CS101', 'advanceweb_bscs3-c', '2021-11-26', 0, ''),
(117, 'joshua_villanueva', 'SoftwareEngineer', 'BSCS4-C', 'CSE001', 'softwareengineer_bscs4-c', '2021-11-26', 0, ''),
(118, 'joshua_villanueva', 'Computerprogramming', 'BSCS2-C', 'CS009', 'computerprogramming_bscs2-c', '2021-11-28', 0, 'ericson_mariscotes ,');

-- --------------------------------------------------------

--
-- Table structure for table `joinclass`
--

DROP TABLE IF EXISTS `joinclass`;
CREATE TABLE IF NOT EXISTS `joinclass` (
  `user_id_fk` int NOT NULL,
  `class_id_fk` int NOT NULL,
  PRIMARY KEY (`user_id_fk`,`class_id_fk`),
  KEY `user_id_fk` (`user_id_fk`),
  KEY `class_id_fk` (`class_id_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joinclass`
--

INSERT INTO `joinclass` (`user_id_fk`, `class_id_fk`) VALUES
(64, 0),
(65, 0),
(65, 104),
(65, 105),
(65, 106),
(66, 104),
(66, 105),
(66, 106),
(67, 104),
(67, 107),
(68, 104),
(68, 106),
(69, 104),
(69, 105),
(69, 106),
(70, 0),
(70, 109),
(70, 114),
(71, 108),
(72, 109),
(72, 112),
(72, 113),
(73, 118);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  `opended` varchar(3) NOT NULL,
  `viewed` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_to`, `user_from`, `message`, `link`, `datetime`, `opended`, `viewed`) VALUES
(42, 'liam_moore', 'lue_worley', 'Lue Worley commented on your post', 'post.php?id=651', '2021-06-21 22:23:50', 'no', 'no'),
(43, 'liam_moore', 'stephanie_carter', 'Stephanie Carter commented on your post', 'post.php?id=654', '2021-06-28 23:07:57', 'no', 'no'),
(44, 'liam_moore', 'stephanie_carter', 'Stephanie Carter commented on your post', 'post.php?id=653', '2021-06-28 23:08:18', 'no', 'no'),
(45, 'liam_moore', 'stephanie_carter', 'Stephanie Carter posted on your class room', 'post.php?id=', '2021-06-28 23:08:44', 'no', 'no'),
(46, 'stephanie_carter', 'liam_moore', 'Liam Moore commented on your post', 'post.php?id=655', '2021-06-28 23:11:26', 'no', 'no'),
(47, '', 'liam_moore', 'Liam Moore commented on your post', 'post.php?id=655', '2021-06-28 23:11:38', 'no', 'no'),
(48, '', 'liam_moore', 'Liam Moore commented on your class room post', 'post.php?id=655', '2021-06-28 23:11:38', 'no', 'no'),
(49, 'liam_moore', 'stephanie_carter', 'Stephanie Carter posted on your class room', 'post.php?id=', '2021-06-28 23:12:24', 'no', 'no'),
(50, 'liam_moore', 'ben_shaw', 'Ben Shaw posted on your class room', 'post.php?id=', '2021-06-28 23:14:52', 'no', 'no'),
(51, 'liam_moore', 'stephanie_carter', 'Stephanie Carter posted on your class room', 'post.php?id=', '2021-06-28 23:15:14', 'no', 'no'),
(52, 'liam_moore', 'luz_haynes', 'Luz Haynes posted on your class room', 'post.php?id=', '2021-06-28 23:16:47', 'no', 'no'),
(53, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia commented on your post', 'post.php?id=666', '2021-11-26 20:56:17', 'no', 'no'),
(54, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:21:28', 'no', 'no'),
(55, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:22:03', 'no', 'no'),
(56, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:22:49', 'no', 'no'),
(57, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:23:03', 'no', 'no'),
(58, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:23:05', 'no', 'no'),
(59, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:24:11', 'no', 'no'),
(60, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:24:44', 'no', 'no'),
(61, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:24:48', 'no', 'no'),
(62, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:24:50', 'no', 'no'),
(63, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:50:29', 'no', 'no'),
(64, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:52:40', 'no', 'no'),
(65, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia commented on your class room post', 'post.php?id=679', '2021-11-26 21:53:14', 'no', 'no'),
(66, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:53:18', 'no', 'no'),
(67, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:54:46', 'no', 'no'),
(68, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:55:14', 'no', 'no'),
(69, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:57:56', 'no', 'no'),
(70, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:57:59', 'no', 'no'),
(71, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 21:58:18', 'no', 'no'),
(72, 'jhunriz_lalata', 'ruel_almonia', 'Ruel Almonia posted on your class room', 'post.php?id=', '2021-11-26 22:07:22', 'no', 'no'),
(73, 'jhunriz_lalata', 'joshua_villanueva', 'Joshua Villanueva posted on your class room', 'post.php?id=', '2021-11-26 22:07:49', 'no', 'no'),
(74, 'jhunriz_lalata', 'joshua_villanueva', 'Joshua Villanueva posted on your class room', 'post.php?id=', '2021-12-07 14:52:46', 'no', 'no'),
(75, 'joshua_villanueva', 'ruel_almonia', 'Ruel Almonia commented on your post', 'post.php?id=699', '2021-12-07 14:57:06', 'no', 'no'),
(76, 'jhunriz_lalata', 'ruel_almonia', 'Ruel Almonia commented on your class room post', 'post.php?id=699', '2021-12-07 14:57:06', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  `added_by` varchar(60) NOT NULL,
  `courseCode` varchar(50) NOT NULL,
  `user_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `edited` varchar(3) NOT NULL,
  `files` varchar(500) DEFAULT NULL,
  `fileDestination` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=710 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `added_by`, `courseCode`, `user_to`, `date_added`, `user_closed`, `edited`, `files`, `fileDestination`) VALUES
(663, 'Inventory management', 'joshua_villanueva', 'classname/coursename_section', 'none', '2021-11-26 20:18:39', 'no', 'no', 'none', 'none'),
(664, 'Inventory management', 'joshua_villanueva', 'classname/coursename_section', 'none', '2021-11-26 20:18:43', 'no', 'no', 'none', 'none'),
(665, 'Inventory management', 'joshua_villanueva', 'classname/coursename_section', 'none', '2021-11-26 20:18:46', 'no', 'no', 'none', 'none'),
(666, 'Midterm exam', 'joshua_villanueva', 'classname/coursename_section', 'none', '2021-11-26 20:19:06', 'no', 'no', ' 61a0ecda745414.55644166.docx', 'uploads/MIDTERM. 61a0ecda745414.55644166.docx'),
(668, 'edi wow', 'ruel_almonia', 'classname/coursename_section', 'joshua_villanueva', '2021-11-26 21:22:03', 'no', 'no', 'none', 'none'),
(672, 'please lang', 'joshua_villanueva', 'classname/coursename_section', 'none', '2021-11-26 21:23:54', 'no', 'no', 'none', 'none'),
(673, 'parang awa mo na wag kana mag bug', 'ruel_almonia', 'classname/coursename_section', 'joshua_villanueva', '2021-11-26 21:24:11', 'no', 'no', 'none', 'none'),
(674, 'parang awa mo na wag kana mag bug', 'ruel_almonia', 'classname/coursename_section', 'joshua_villanueva', '2021-11-26 21:24:44', 'no', 'no', 'none', 'none'),
(675, 'parang awa mo na wag kana mag bug', 'ruel_almonia', 'classname/coursename_section', 'joshua_villanueva', '2021-11-26 21:24:48', 'no', 'no', 'none', 'none'),
(676, 'parang awa mo na wag kana mag bug', 'ruel_almonia', 'classname/coursename_section', 'joshua_villanueva', '2021-11-26 21:24:50', 'no', 'no', 'none', 'none'),
(677, 'asddwa', 'joshua_villanueva', 'classname/coursename_section', 'none', '2021-11-26 21:50:13', 'no', 'no', 'none', 'none'),
(678, 'asdw', 'ruel_almonia', 'classname/coursename_section', 'joshua_villanueva', '2021-11-26 21:50:29', 'no', 'no', 'none', 'none'),
(679, 'asdw', 'ruel_almonia', 'classname/coursename_section', 'joshua_villanueva', '2021-11-26 21:52:40', 'no', 'no', 'none', 'none'),
(680, 'asdw', 'ruel_almonia', 'classname/coursename_section', 'joshua_villanueva', '2021-11-26 21:53:18', 'no', 'no', 'none', 'none'),
(681, 'asdw', 'ruel_almonia', 'classname/coursename_section', 'joshua_villanueva', '2021-11-26 21:54:46', 'no', 'no', 'none', 'none'),
(682, 'asdw', 'ruel_almonia', 'classname/coursename_section', 'joshua_villanueva', '2021-11-26 21:55:14', 'no', 'no', 'none', 'none'),
(683, 'asdw', 'ruel_almonia', 'classname/coursename_section', 'joshua_villanueva', '2021-11-26 21:57:56', 'no', 'no', 'none', 'none'),
(684, 'asdw', 'ruel_almonia', 'classname/coursename_section', 'joshua_villanueva', '2021-11-26 21:57:59', 'no', 'no', 'none', 'none'),
(685, 'asdw', 'ruel_almonia', 'classname/coursename_section', 'joshua_villanueva', '2021-11-26 21:58:18', 'no', 'no', 'none', 'none'),
(686, 'hi phoescxz', 'ruel_almonia', 'qwerty_q', 'jhunriz_lalata', '2021-11-26 22:07:22', 'no', 'no', 'none', 'none'),
(688, 'Line 63', 'joshua_villanueva', 'classname/coursename_section', 'none', '2021-11-26 22:08:04', 'no', 'no', 'none', 'none'),
(689, '100% walang error', 'ruel_almonia', 'advanceweb_bscs1c', 'none', '2021-11-26 22:16:37', 'no', 'no', 'none', 'none'),
(697, 'asd', 'joshua_villanueva', 'softwareengineer_bscs4-c', 'none', '2021-12-07 14:55:02', 'no', 'no', 'none', 'none'),
(698, 'Assignment Due to 12/8/21', 'joshua_villanueva', 'softwareengineer_bscs4-c', 'none', '2021-12-07 14:55:23', 'no', 'no', ' 61af217b435d02.87851899.pdf', 'uploads/ASSIGNMENT NETWORK LAYOUT2 VILLANUEVA. 61af217b435d02.87851899.pdf'),
(699, 'Assignment', 'joshua_villanueva', 'qwerty_q', 'jhunriz_lalata', '2021-12-07 14:56:07', 'no', 'no', ' 61af21a73198d3.22183250.docx', 'uploads/Assignment#2 Villanueva. 61af21a73198d3.22183250.docx'),
(700, 'asd', 'ruel_almonia', 'qwerty_q', 'jhunriz_lalata', '2021-12-07 14:57:26', 'no', 'no', ' 61af21f6982ff0.44366849.pptx', 'uploads/Presentation1. 61af21f6982ff0.44366849.pptx'),
(706, 'Line 63', 'ruel_almonia', 'classname/coursename_section', 'joshua_villanueva', '2021-12-07 15:00:03', 'no', 'no', 'none', 'none'),
(707, 'asd', 'joshua_villanueva', 'classname/coursename_section', 'none', '2021-12-07 09:28:12', 'no', 'no', 'none', 'none'),
(708, 'edi wow ', 'joshua_villanueva', 'qwerty_q', 'jhunriz_lalata', '2021-12-07 09:29:22', 'no', 'Yes', 'none', 'none'),
(709, 'Hi lodicakes', 'joshua_villanueva', 'advanceweb_bscs1c', 'ruel_almonia', '2021-12-07 11:09:16', 'no', 'no', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profilePic` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `num_posts` int NOT NULL,
  `phoneNumber` int NOT NULL,
  `bio` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `profilePic`, `signup_date`, `user_closed`, `num_posts`, `phoneNumber`, `bio`) VALUES
(70, 'Joshua', 'Villanueva', 'joshua_villanueva', 'villanuevajoshua27@gmail.com', 'a8f5f167f44f4964e6c998dee827110c', 'assets/images/profilePics/joshua_villanueva859ca44271f701ebdfb21f6bf05b55e0n.jpeg', '2021-11-22', 'no', 0, 930050256, 'Student of University of Caloocan city taking bachelor of science in computer science'),
(71, 'Jhunriz', 'Lalata', 'jhunriz_lalata', 'jhunriz1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'assets/images/profilePics/deafultPP.png', '2021-11-22', 'no', 0, 0, ''),
(72, 'Ruel', 'Almonia', 'ruel_almonia', 'almonia@gmail.com', '6d4a7eb3da8bb3f4594b422d84e7daea', 'assets/images/profilePics/ruel_almoniab6ddb9984f13775188d53874dad18333n.jpeg', '2021-11-26', 'no', 0, 123456789, 'Best in speeling'),
(73, 'Ericson', 'Mariscotes', 'ericson_mariscotes', 'ericson@gmail.com', 'd5f9762acb42de03a05fa69243eb43f0', 'assets/images/profilePics/deafultPP.png', '2021-11-28', 'no', 0, 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
