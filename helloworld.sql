-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 01:37 PM
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
-- Database: `helloworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `content` text NOT NULL,
  `likes` int(11) NOT NULL,
  `createdtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `userid`, `content`, `likes`, `createdtime`) VALUES
(1, 16, ' Moj prvi post!', 0, '0000-00-00 00:00:00'),
(9, 18, 'Zdravo svima!', 0, '0000-00-00 00:00:00'),
(25, 19, 'echo &quot;Zdravo kolege!&quot;;', 0, '0000-00-00 00:00:00'),
(27, 20, 'Web development &gt;&gt;&gt;', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `posts2`
--

CREATE TABLE `posts2` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts2`
--

INSERT INTO `posts2` (`id`, `userid`, `content`) VALUES
(1, 18, 'Zdravo!'),
(2, 16, 'Test'),
(3, 16, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(4, 16, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(5, 19, 'Lorem Ipsum je overrated!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `profileimg` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `profileimg`, `email`, `password`) VALUES
(7, 'Magdalena', 'Nikolic', 'magdalena', 'images/default.jpg', 'magdalenanikolic2000@gmail.com', '$2y$10$3A/dsgI/sQoL5rXwtJ9jWOY1nIYnHd66P653sdoEiaxIIbuuYuX/a'),
(8, 'ilija', 'Nikolic', '20195012', 'images/default.jpg', '', '$2y$10$z5XOu0B0bBlX8xV0S4mQn.lu5Cjlb3d/wjDZGpndE2rp7R8rQZSKi'),
(9, 'neko', 'nekic', 'neko2000', 'images/default.jpg', '', '$2y$10$WBx3bPvxESP594o10xIuw./cvz7xsuzd3YnU0vmnsYweZLi5jy3ye'),
(10, 'Neko', 'nekic', 'nekonekic', 'images/default.jpg', '', '$2y$10$8.WkoA6hjrjpzP/Jf2G1mOBvm0D3FQTjLQbZCbgJXzHOhnygVgysK'),
(11, 'paja', 'pajic', 'pajapajic', 'images/default.jpg', '', '$2y$10$hawFFG2hEFILE5LaYHb4juX6AsWDRT/f5m7qoLIzCr93JBEeoCDHu'),
(12, 'maja', 'majic', 'majamajic', 'images/default.jpg', 'maja@majic.com', '$2y$10$vsBmZlzFPxVXMo42ZYeUGeBRaVSGhtwVGGx77fJ9vNHWpq4mFOc0C'),
(13, 'anja', 'anjic', 'anja@anjic.com', 'images/default.jpg', 'megic.odredista@gmail.com', '$2y$10$VIR.1mgudag6PtpbhlsaHOfL0Ek0teKrZwacFkchpMpK4bh2/c5K.'),
(14, 'sasa', 'Nikolic', 'sale75', 'images/default.jpg', 'magdalenanikolic00@icloud.com', '$2y$10$M785s1ay4Q.SSVxxbjS1wO7aOTnIFKVPhOH0i28ieYn3WW5.CJnv6'),
(15, 'Proba', 'Proba', 'proba', 'images/default.jpg', 'proba@proba.com', '$2y$10$l7Txr/nJameR/clNzzH64umnp7RVv7yHeFQq7gIEtbQWDvQ.NBH1q'),
(16, 'Magdalena', 'Nikolic', 'magdalena2000', 'uploads/16.jpg', 'magdalena2000@gmail.com', '$2y$10$LdtcBhErscUq2cT9PhlPfuKOGigapBS60L.Rbjhwp3ev8gnjO1frO'),
(17, 'Greska', 'greska', 'greska1234', 'uploads/.jpg', 'greska@gmail.com', '$2y$10$BXYfBmFLxDDnjRLMOVhZw.zVNHJ2Kr3h/nmMmesale8uzpTLhNpSa'),
(18, 'Ika', 'Ikic', 'ika1997', 'uploads/18.png', 'ika@gmail.com', '$2y$10$shfy.3Ojsd7gqKCsa1FjDuPkJdhqm3VvxZCq0zu0lk3MH.9v0.6zq'),
(19, 'Ivan', 'Ivanovic', 'ivanivca', 'uploads/19.png', 'ivan@gmail.com', '$2y$10$QbZX1DbH8uilhZGzkQi4suowxWafTmuQWZ3O1qDXoFJhuAiXmXLge'),
(20, 'Aca', 'Acic', 'Aca1999', 'uploads/20.png', 'aca1999@gmail.com', '$2y$10$jUMPc/2S3yVlzkACH5QwCOaswaqlFlqHHKDciY6xJxDf0aEbgim86');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts2`
--
ALTER TABLE `posts2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `posts2`
--
ALTER TABLE `posts2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
