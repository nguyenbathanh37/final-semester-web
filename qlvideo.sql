-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 05:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlvideo`
--

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `namevideo` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `view` int(15) NOT NULL,
  `dayupload` date NOT NULL,
  `thumbnail` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `mode` tinyint(1) DEFAULT NULL,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `namevideo`, `view`, `dayupload`, `thumbnail`, `mode`, `username`, `link`) VALUES
(11, 'hello', 123823912, '2022-10-18', 'assets/images/thumbnail1.png', 0, 'voluyen123', 'assets/videos/video1.mp4'),
(21, 'hello', 123823912, '2022-10-18', 'assets/images/thumbnail1.png', 0, 'voluyen123', 'assets/videos/video2.mp4'),
(31, 'hello', 123823912, '2022-10-18', 'assets/images/thumbnail1.png', 0, 'voluyen123', 'assets/videos/video3.mp4'),
(32, 'hello', 123823912, '2022-10-18', 'assets/images/thumbnail1.png', 0, 'voluyen123', 'assets/videos/video4.mp4'),
(33, 'hello', 123823912, '2022-10-18', 'assets/images/thumbnail1.png', 0, 'voluyen123', 'assets/videos/video5.mp4'),
(34, 'hello', 238239123, '2022-10-18', 'assets/images/thumbnail1.png', 0, 'voluyen123', 'assets/videos/video6.mp4'),
(35, 'Let Her Go', 125522, '2022-12-16', 'assets/images/thumbnail1.png', 0, 'nguyenbathanh1', 'https://www.youtube.com/embed/RBumgq5yVrA'),
(36, 'Home', 2312456, '2022-10-27', 'assets/images/thumbnail1.png', 0, 'nguyenbathanh1', 'https://www.youtube.com/embed/ZAYZmIfHEiU'),
(37, 'Roar', 11214, '2022-10-27', 'assets/images/thumbnail1.png', 0, 'nguyenbathanh1', 'https://www.youtube.com/embed/CevxZvSJLk8'),
(38, 'Old Town Road', 238951, '2022-10-27', 'assets/images/user.png', 0, 'nguyenbathanh1', 'https://www.youtube.com/embed/r7qovpFAGrQ'),
(39, 'Road So Far', 189247, '2022-10-27', 'assets/images/thumbnail1.png', 0, 'nguyentanthanh3', 'https://www.youtube.com/embed/MVMIwIJtMdU'),
(40, 'There no one at all', 2387567, '2022-10-27', 'assets/images/thumbnail1.png', 0, 'nguyentanthanh3', 'https://www.youtube.com/embed/JHSRTU31T14'),
(41, 'Remember me', 293857, '2022-10-27', 'assets/images/thumbnail1.png', 0, 'nguyentanthanh3', 'https://www.youtube.com/embed/6Edc6xxV93M'),
(42, 'Hãy trao cho anh', 9238759, '2022-10-27', 'assets/images/thumbnail1.png', 0, 'nguyentanthanh3', 'https://www.youtube.com/embed/knW7-x7Y7RE'),
(43, 'Muộn rồi mà sao còn', 237569, '2022-10-27', 'assets/images/thumbnail1.png', 0, 'nguyentanthanh3', 'https://www.youtube.com/embed/xypzmu5mMPY'),
(111, '12345', 0, '2022-12-18', 'assets/images/thumnail.png', 1, 'voluyen2', 'assets/videos/video.mp4'),
(112, 'sao cũng được', 0, '2022-12-18', '/assets/images/thumnail.png', 0, 'voluyen2', 'https://www.youtube.com/embed/j4T0-huYsW4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
