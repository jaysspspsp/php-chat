-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 04:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_4`
--

CREATE TABLE `chat_4` (
  `id` bigint(20) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `text` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `voice_notes` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_4`
--

INSERT INTO `chat_4` (`id`, `from_id`, `to_id`, `type`, `text`, `images`, `voice_notes`, `data`, `date`, `time`, `status`) VALUES
(1, 4, 0, 0, 'Hi', '', '', '', '0000-00-00', '00:00:00', 0),
(2, 0, 16, 1, 'hello\n', '', '', '', '0000-00-00', '00:00:00', 0),
(3, 0, 15, 1, 'h', '', '', '', '0000-00-00', '00:00:00', 0),
(4, 4, 0, 0, 'Hello', '', '', '', '0000-00-00', '00:00:00', 0),
(5, 0, 16, 1, 'hi', '', '', '', '0000-00-00', '00:00:00', 0),
(6, 0, 15, 1, 'hi', '', '', '', '0000-00-00', '00:00:00', 0),
(7, 0, 15, 1, 'hello', '', '', '', '0000-00-00', '00:00:00', 0),
(8, 4, 0, 0, 'Hii', '', '', '', '0000-00-00', '00:00:00', 0),
(9, 4, 0, 0, 'Hiihuhhjjhhhuugygghhhhj', '', '', '', '0000-00-00', '00:00:00', 0),
(10, 0, 17, 1, 'hello\n', '', '', '', '0000-00-00', '00:00:00', 0),
(11, 0, 17, 1, 'su k', '', '', '', '0000-00-00', '00:00:00', 0),
(12, 4, 0, 0, 'Kai nai gand marayli he 😝😛', '', '', '', '0000-00-00', '00:00:00', 0),
(13, 0, 15, 1, 'fu', '', '', '', '0000-00-00', '00:00:00', 0),
(14, 0, 3, 0, '', '', '', '', '0000-00-00', '00:00:00', 0),
(15, 0, 5, 0, '', '', '', '', '0000-00-00', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat_14`
--

CREATE TABLE `chat_14` (
  `id` bigint(20) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `text` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `voice_notes` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chat_15`
--

CREATE TABLE `chat_15` (
  `id` bigint(20) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `text` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `voice_notes` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_15`
--

INSERT INTO `chat_15` (`id`, `from_id`, `to_id`, `type`, `text`, `images`, `voice_notes`, `data`, `date`, `time`, `status`) VALUES
(1, 15, 0, 0, 'hello', '', '', '', '0000-00-00', '00:00:00', 0),
(2, 0, 4, 1, 'Hi', '', '', '', '0000-00-00', '00:00:00', 0),
(3, 15, 0, 0, 'how are you', '', '', '', '0000-00-00', '00:00:00', 0),
(4, 0, 4, 1, 'I am good', '', '', '', '0000-00-00', '00:00:00', 0),
(5, 15, 0, 0, 'h', '', '', '', '0000-00-00', '00:00:00', 0),
(6, 15, 0, 0, 'hi', '', '', '', '0000-00-00', '00:00:00', 0),
(7, 15, 0, 0, 'hello', '', '', '', '0000-00-00', '00:00:00', 0),
(8, 15, 0, 0, 'fu', '', '', '', '0000-00-00', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat_16`
--

CREATE TABLE `chat_16` (
  `id` bigint(20) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `text` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `voice_notes` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_16`
--

INSERT INTO `chat_16` (`id`, `from_id`, `to_id`, `type`, `text`, `images`, `voice_notes`, `data`, `date`, `time`, `status`) VALUES
(1, 0, 4, 1, 'Hi', '', '', '', '0000-00-00', '00:00:00', 0),
(2, 16, 0, 0, 'hello\n', '', '', '', '0000-00-00', '00:00:00', 0),
(3, 0, 4, 1, 'Hello', '', '', '', '0000-00-00', '00:00:00', 0),
(4, 16, 0, 0, 'hi', '', '', '', '0000-00-00', '00:00:00', 0),
(5, 0, 16, 1, 'Hello', '', '', '', '0000-00-00', '00:00:00', 0),
(6, 16, 0, 0, 'Hello', '', '', '', '0000-00-00', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat_17`
--

CREATE TABLE `chat_17` (
  `id` bigint(20) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `text` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `voice_notes` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_17`
--

INSERT INTO `chat_17` (`id`, `from_id`, `to_id`, `type`, `text`, `images`, `voice_notes`, `data`, `date`, `time`, `status`) VALUES
(1, 0, 4, 1, 'Hii', '', '', '', '0000-00-00', '00:00:00', 0),
(2, 0, 4, 1, 'Hiihuhhjjhhhuugygghhhhj', '', '', '', '0000-00-00', '00:00:00', 0),
(3, 17, 0, 0, 'hello\n', '', '', '', '0000-00-00', '00:00:00', 0),
(4, 17, 0, 0, 'su k', '', '', '', '0000-00-00', '00:00:00', 0),
(5, 0, 4, 1, 'Kai nai gand marayli he 😝😛', '', '', '', '0000-00-00', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `phone`, `email`, `password`) VALUES
(4, 'Jay', 'Parmar', 'admin', 65, 'jaysspspsp@gmail.com', 'admin'),
(7, 'Rahul', 'Gorasiya', 'admin3', 34, 'adjkadhnck@gmail.com', 'admin3'),
(8, 'yashvi', 'Joshi', 'admin4', 985282, 'jaysspspsp@gmail.com', 'admin4'),
(9, 'avi', 'hirani', 'admin5', 98985, 'jaysspspsp@gmail.com', 'admin5'),
(10, 'jagruti', 'vekariya', 'admin6', 651651, 'jaysspspsp@gmail.com', 'admin6'),
(15, 'Avadhesh', 'Patel', 'admin1', 9725084613, 'jaysspspsp@gmail.com', 'admin1'),
(16, 'Dravin', 'Hirani', 'admin2', 9898528257, 'jaysspspsp@gmail.com', 'admin2'),
(17, 'Shivang', 'Goswami', 'shivang. goswami', 8141520554, '', 'shivang.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_4`
--
ALTER TABLE `chat_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_14`
--
ALTER TABLE `chat_14`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_15`
--
ALTER TABLE `chat_15`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_16`
--
ALTER TABLE `chat_16`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_17`
--
ALTER TABLE `chat_17`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_4`
--
ALTER TABLE `chat_4`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `chat_14`
--
ALTER TABLE `chat_14`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_15`
--
ALTER TABLE `chat_15`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chat_16`
--
ALTER TABLE `chat_16`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chat_17`
--
ALTER TABLE `chat_17`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
