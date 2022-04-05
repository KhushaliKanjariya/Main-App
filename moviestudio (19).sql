-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 03:00 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moviestudio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`a_id` int(11) NOT NULL,
  `a_nm` varchar(30) NOT NULL,
  `a_password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_nm`, `a_password`) VALUES
(1, 'admin', 'admin'),
(2, 'nidhidhokia', '2331');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`id` int(11) NOT NULL,
  `seatno` varchar(10) NOT NULL,
  `userid` int(11) NOT NULL,
  `user_nm` varchar(50) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `bd_id` int(11) NOT NULL,
  `showid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `seatno`, `userid`, `user_nm`, `movie_id`, `date`, `bd_id`, `showid`) VALUES
(1, 'C3', 8, 'harsh', 4, '2019-09-24', 39, 25),
(2, 'C4', 8, 'harsh', 4, '2019-09-24', 39, 25),
(3, 'D2', 8, 'hasu', 7, '2019-09-24', 40, 12);

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

CREATE TABLE IF NOT EXISTS `bookingdetails` (
`bd_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `show_id` int(11) NOT NULL,
  `bd_seat_no` int(11) NOT NULL,
  `bd_amt` int(11) NOT NULL,
  `bd_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`bd_id`, `user_id`, `user_name`, `show_id`, `bd_seat_no`, `bd_amt`, `bd_date`) VALUES
(33, 8, 'khushali', 16, 2, 400, '2019-09-21'),
(34, 8, 'vidhi', 11, 5, 1000, '2019-09-21'),
(35, 8, 'shruti', 19, 1, 150, '2019-09-21'),
(36, 2, 'harsh', 17, 3, 750, '2019-09-21'),
(37, 2, 'Harsh', 25, 2, 500, '2019-09-21'),
(38, 2, 'Harshangi', 12, 5, 1250, '2019-09-21'),
(39, 8, 'harsh', 25, 2, 500, '2019-09-24'),
(40, 8, 'hasu', 12, 1, 250, '2019-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`f_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `user_name`, `email`, `message`) VALUES
(1, 'nidhidhokia', 'nishidhokia@gmail.com', 'nice one'),
(2, 'khushalikanjariya', 'khushalikanjariya24@gmail.com', 'good services and nice movie resolution '),
(3, 'nikita', 'nikita@gmail.com', 'very cool site'),
(6, 'Harshangi', 'hasu@gmail.com', 'This website is very useful');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
`movie_id` int(3) NOT NULL,
  `movie_name` varchar(30) NOT NULL,
  `movie_type_id` int(10) NOT NULL,
  `movie_type` varchar(50) NOT NULL,
  `movie_rel` date NOT NULL,
  `movie_runtime` varchar(10) NOT NULL,
  `movie_lan` varchar(10) NOT NULL,
  `movie_desc` varchar(500) NOT NULL,
  `movie_image` varchar(30) NOT NULL,
  `r_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `movie_type_id`, `movie_type`, `movie_rel`, `movie_runtime`, `movie_lan`, `movie_desc`, `movie_image`, `r_status`) VALUES
(4, 'bharat', 2, 'action', '2019-06-05', '2h 35mins', 'hindi', 'Bharat (transl.?India)[a] is a 2019 Indian Hindi-language action drama film[5][6] written and directed by Ali Abbas Zafar. It is jointly produced by Atul Agnihotri, Alvira Khan Agnihotri, Bhushan Kumar, Krishan Kumar, Nikhil Namit and Salman Khan under the banners Reel Life Productions, Salman Khan ', 'bharat.png', 1),
(5, 'Chaal Jeevi Laiye', 3, 'family', '2019-02-01', '2h 17min', 'Gujarati', 'Chaal Jeevi Laiye! (transl.?Come, let''s live!) is a 2019 Indian Gujarati-language comedy-drama road film written and directed by Vipul Mehta. Produced by Rashmin Majithia, the film stars Siddharth Randeria, Yash Soni and Aarohi Patel.[2] The soundtrack was composed by Sachin–Jigar.[3] It is the high', 'chaal jivi laiye.png', 1),
(6, 'De De Pyaar De', 4, 'comedy', '2019-05-16', '2h 40min', 'hindi', 'De De Pyaar De  is a 2019 Indian Hindi-language romantic comedy film written by Luv Ranjan and directed by Akiv Ali in his directorial debut. It was produced by Bhushan Kumar, Krishan Kumar, Luv Ranjan and Ankur Garg under their respective banners T-Series and Luv Films. ', 'dedepyaarde1.png', 1),
(7, 'jalebi', 5, 'romantic', '2018-10-12', '1h 50min', 'hindi', 'Jalebi is a 2018 Indian Hindi-language romantic drama film directed by Pushpdeep Bhardwaj. A remake of the Bengali film Praktan (2016), Jalebi stars Rhea Chakraborty, debutant Varun Mitra and Digangana Suryavanshi in lead roles.[2][3]', 'jalebi.png', 1),
(10, 'The Lion King', 7, 'animation', '2019-07-19', '2h 50min', 'english', 'The Lion King is an upcoming American musical drama film directed by Jon Favreau and produced by Walt Disney Pictures. It is a photorealistic computer animated remake of Disney''s traditionally animated 1994 film of the same name.', 'thelionking.png', 1),
(11, 'Avengers', 8, 'hollywood', '2019-04-26', '3h 15min', 'english', 'Avengers: Endgame is a 2019 American superhero film based on the Marvel Comics superhero team the Avengers, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. It is the sequel to 2012''s The Avengers, 2015''s Avengers: Age of Ultron, and 2018''s Avengers: Infinity War, and the twenty-second film in the Marvel Cinematic Universe (MCU). It was directed by Anthony and Joe Russo, written by Christopher Markus.', 'Avenger.png', 1),
(13, 'loveyatri', 5, 'romantic', '2018-10-05', '2h 20min', 'hindi', 'Loveyatri (transl.?Love travellers; Hindi pronunciation: [l??ja?t???]) is a 2018 Bollywood romantic drama film produced by Salman Khan under Salman Khan Films and directed by debutante Abhiraj Minawala. It is inspired from the Telugu film Devadasu. It stars Aayush Sharma and Warina Hussain in its le', 'loveyatri.png', 1),
(15, 'baahubali 2', 9, 'history', '2019-04-28', '3h 15min', 'hindi', 'Baahubali 2: The Conclusion is a 2017 Indian epic action film directed by S. S. Rajamouli and written by his father K. V. Vijayendra Prasad. It was produced by Shobu Yarlagadda and Prasad Devineni under the banner Arka Media Works. Released on 28 April 2017, the film stars Prabhas, Rana Daggubati, Anushka Shetty and Tamannaah while Ramya Krishna, Sathyaraj, and Nassar appear in prominent roles.', 'bahubali 2.png', 1),
(19, 'kesari', 2, 'action', '2019-03-21', '2h 40min', 'hindi', 'Kesari (transl.?Saffron) is a 2019 Indian Hindi-language action war film[6] written and directed by Anurag Singh. It was jointly produced by Karan Johar, Aruna Bhatia, Hiroo Yash Johar, Apoorva Mehta and Sunir Khetarpal under the banners of Dharma Productions, Cape of Good Films, Azure Entertainment', 'kesari.png', 1),
(31, 'golamaal again', 4, 'comedy', '2018-10-20', '3h 05min', 'hindi', 'Golmaal Again (transl.?Hotchpotch again) is a 2017 Indian Hindi supernatural comedy film directed and co-produced by Rohit Shetty, and written by Sajid-Farhad and Yunus Sajawal. The film stars Ajay Devgn, Arshad Warsi, Tusshar Kapoor, Kunal Khemu, Shreyas Talpade, Parineeti Chopra, Tabu, Johnny Lever.', 'golmaalagain.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movietype`
--

CREATE TABLE IF NOT EXISTS `movietype` (
`movie_type_id` int(11) NOT NULL,
  `movie_type` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movietype`
--

INSERT INTO `movietype` (`movie_type_id`, `movie_type`) VALUES
(2, 'action'),
(3, 'family'),
(4, 'comedy'),
(5, 'romantic'),
(6, 'biography'),
(7, 'animation'),
(8, 'hollywood'),
(9, 'history');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`user_id` int(11) NOT NULL,
  `user_nm` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `sec_question` varchar(100) NOT NULL,
  `sec_ans` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `user_nm`, `email`, `password`, `phone_no`, `sec_question`, `sec_ans`) VALUES
(1, 'nidhidhokia', 'nidhidhokia3105@gmail.com', '12345', 12345, '', ''),
(2, 'khushalikanjariya', 'khushalikanjariya@gmail.com', '123', 1234567980, '', ''),
(3, 'vrutikajethva', 'vrutikajethva@gmail.com', '123456', 2147483647, '', ''),
(4, 'nikitachhaya', 'nikitachhaya@gmail.com', '12345678', 2147483647, '', ''),
(5, 'abc', 'abc@gmail.com', '123', 2147483647, '', ''),
(6, 'jsgfb', 'sdfnh@gmail.com', '12', 5647963, '', ''),
(8, 'user', 'user@gmail.com', 'user', 2147483647, '', ''),
(11, 'aaa', 'aaa@gmail.com', '123', 1234567980, 'What is the name of your favourite sports team?', 'rcb');

-- --------------------------------------------------------

--
-- Table structure for table `rows`
--

CREATE TABLE IF NOT EXISTS `rows` (
`row_id` int(3) NOT NULL,
  `scr_id` int(11) NOT NULL,
  `row_name` varchar(30) NOT NULL,
  `row_seats` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rows`
--

INSERT INTO `rows` (`row_id`, `scr_id`, `row_name`, `row_seats`) VALUES
(1, 1, 'A', 12),
(2, 1, 'B', 12),
(3, 0, 'C', 12),
(4, 0, 'D', 12),
(5, 0, 'E', 12),
(6, 0, 'F', 12),
(7, 0, 'G', 12),
(8, 0, 'H', 12),
(9, 0, 'I', 12),
(10, 0, 'J', 12);

-- --------------------------------------------------------

--
-- Table structure for table `screen`
--

CREATE TABLE IF NOT EXISTS `screen` (
`scr_id` int(3) NOT NULL,
  `scr_name` varchar(25) NOT NULL,
  `scr_seat` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screen`
--

INSERT INTO `screen` (`scr_id`, `scr_name`, `scr_seat`) VALUES
(1, 'screen1', 120),
(2, 'screen2', 120),
(3, 'screen3', 120),
(4, 'screen4', 120);

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE IF NOT EXISTS `shows` (
`show_id` int(3) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `scr_id` int(11) NOT NULL,
  `show_time` varchar(11) NOT NULL,
  `reserved` int(11) NOT NULL,
  `empty` int(11) NOT NULL,
  `price` int(11) NOT NULL DEFAULT '100'
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`show_id`, `movie_id`, `scr_id`, `show_time`, `reserved`, `empty`, `price`) VALUES
(9, 19, 1, '10:00', 0, 110, 100),
(10, 4, 1, '14:00', 0, 110, 150),
(11, 5, 1, '18:00', 5, 105, 200),
(12, 7, 1, '21:00', 6, 104, 250),
(13, 11, 2, '10:00', 0, 110, 100),
(15, 0, 2, '14:00', 0, 110, 150),
(16, 15, 2, '18:00', 2, 108, 200),
(17, 10, 2, '21:00', 3, 107, 250),
(18, 5, 3, '10:00', 0, 110, 100),
(19, 11, 3, '14:00', 1, 109, 150),
(20, 0, 3, '18:00', 0, 110, 200),
(21, 19, 3, '21:00', 0, 110, 250),
(22, 13, 4, '10:00', 0, 110, 100),
(23, 6, 4, '14:00', 0, 110, 150),
(24, 31, 4, '18:00', 0, 110, 200),
(25, 4, 4, '21:00', 4, 106, 250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
 ADD PRIMARY KEY (`bd_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
 ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `movietype`
--
ALTER TABLE `movietype`
 ADD PRIMARY KEY (`movie_type_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `rows`
--
ALTER TABLE `rows`
 ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `screen`
--
ALTER TABLE `screen`
 ADD PRIMARY KEY (`scr_id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
 ADD PRIMARY KEY (`show_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
MODIFY `bd_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
MODIFY `movie_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `movietype`
--
ALTER TABLE `movietype`
MODIFY `movie_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rows`
--
ALTER TABLE `rows`
MODIFY `row_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `screen`
--
ALTER TABLE `screen`
MODIFY `scr_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
MODIFY `show_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
