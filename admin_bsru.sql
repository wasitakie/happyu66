-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 21, 2023 at 02:59 PM
-- Server version: 5.5.56-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_bsru`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `check` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `check`) VALUES
(1, 'admin', 'happyu', 'a'),
(2, 'admin', 'happyu_s', 's');

-- --------------------------------------------------------

--
-- Table structure for table `staff_f`
--

CREATE TABLE `staff_f` (
  `id` int(11) NOT NULL,
  `a1` int(11) NOT NULL,
  `a2` text NOT NULL,
  `a3` int(11) NOT NULL,
  `a4` int(11) NOT NULL,
  `a4t` text,
  `a5` int(11) NOT NULL,
  `a5t` text,
  `sex` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `q2_3` int(11) NOT NULL,
  `q2_4` int(11) NOT NULL,
  `q2_5_1` int(11) DEFAULT NULL,
  `q2_5_2` int(11) DEFAULT NULL,
  `q2_5_3` int(11) DEFAULT NULL,
  `q2_5_4` int(11) DEFAULT NULL,
  `q2_5_5` int(11) DEFAULT NULL,
  `q2_5_6` int(11) DEFAULT NULL,
  `q2_5_7` int(11) DEFAULT NULL,
  `q2_5_8` int(11) DEFAULT NULL,
  `q2_5_9` int(11) DEFAULT NULL,
  `q2_5_10` int(11) DEFAULT NULL,
  `q2_5t` varchar(250) DEFAULT NULL,
  `q2_6` int(11) NOT NULL,
  `q2_6t` varchar(250) DEFAULT NULL,
  `q2_7` int(11) NOT NULL,
  `q2_8` int(11) NOT NULL,
  `q2_9` int(11) NOT NULL,
  `q2_10` int(11) NOT NULL,
  `q2_10t` varchar(250) DEFAULT NULL,
  `q2_11` int(11) NOT NULL,
  `q2_12` int(11) NOT NULL,
  `q2_13` int(11) NOT NULL,
  `q2_13t` varchar(250) DEFAULT NULL,
  `q2_14` int(11) NOT NULL,
  `q2_15` int(11) NOT NULL,
  `q2_16` int(11) NOT NULL,
  `weight` varchar(3) NOT NULL,
  `waist` varchar(3) NOT NULL,
  `height` varchar(3) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `cv1` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `q11` int(11) NOT NULL,
  `q12` int(11) NOT NULL,
  `q13` int(11) NOT NULL,
  `q14` int(11) NOT NULL,
  `cv2` int(11) NOT NULL,
  `q15` int(11) NOT NULL,
  `q16` int(11) NOT NULL,
  `q17` int(11) NOT NULL,
  `q18` int(11) NOT NULL,
  `q19` int(11) NOT NULL,
  `cv3` int(11) NOT NULL,
  `q20` int(11) NOT NULL,
  `q21` int(11) NOT NULL,
  `q22` int(11) NOT NULL,
  `q23` int(11) NOT NULL,
  `q24` int(11) NOT NULL,
  `cv4` int(11) NOT NULL,
  `q25` int(11) NOT NULL,
  `q26` int(11) NOT NULL,
  `q27` int(11) NOT NULL,
  `cv5` int(11) NOT NULL,
  `q28` int(11) NOT NULL,
  `q29` int(11) NOT NULL,
  `q30` int(11) NOT NULL,
  `q31` int(11) NOT NULL,
  `q32` int(11) NOT NULL,
  `q33` int(11) NOT NULL,
  `cv6` int(11) NOT NULL,
  `q34` int(11) NOT NULL,
  `q35` int(11) NOT NULL,
  `q36` int(11) NOT NULL,
  `cv7` int(11) NOT NULL,
  `q37` int(11) NOT NULL,
  `q38` int(11) NOT NULL,
  `q39` int(11) NOT NULL,
  `q40` int(11) NOT NULL,
  `cv8` int(11) NOT NULL,
  `q41` int(11) NOT NULL,
  `q42` int(11) NOT NULL,
  `q43` int(11) NOT NULL,
  `q44` int(11) NOT NULL,
  `q45` int(11) NOT NULL,
  `q46` int(11) NOT NULL,
  `q47` int(11) NOT NULL,
  `q48` int(11) NOT NULL,
  `q49` int(11) NOT NULL,
  `q50` int(11) NOT NULL,
  `q51` int(11) NOT NULL,
  `q52` int(11) NOT NULL,
  `q53` int(11) NOT NULL,
  `q54` int(11) NOT NULL,
  `q55` int(11) NOT NULL,
  `q56` int(11) NOT NULL,
  `q57` int(11) NOT NULL,
  `cv9` int(11) NOT NULL,
  `q58` int(11) NOT NULL,
  `q59` int(11) NOT NULL,
  `q60` int(11) NOT NULL,
  `q61` int(11) NOT NULL,
  `q62` int(11) NOT NULL,
  `q63` int(11) NOT NULL,
  `q64` int(11) NOT NULL,
  `q65` int(11) NOT NULL,
  `q66` int(11) NOT NULL,
  `q67` int(11) NOT NULL,
  `q68` int(11) NOT NULL,
  `q69` int(11) NOT NULL,
  `q70` int(11) NOT NULL,
  `q71` int(11) NOT NULL,
  `q72` varchar(10) NOT NULL,
  `q73` varchar(10) NOT NULL,
  `q74` int(11) NOT NULL,
  `q75` int(11) NOT NULL,
  `q76` int(11) NOT NULL,
  `q77` int(11) NOT NULL,
  `q78` int(11) NOT NULL,
  `q79` int(11) NOT NULL,
  `q80` int(11) NOT NULL,
  `q81` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `idcode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `staff_s`
--

CREATE TABLE `staff_s` (
  `id` int(11) NOT NULL,
  `a1` int(11) NOT NULL,
  `a2` text NOT NULL,
  `a3` int(11) NOT NULL,
  `a4` int(11) NOT NULL,
  `a4t` text,
  `a5` int(11) NOT NULL,
  `a5t` text,
  `sex` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `q2_3` int(11) NOT NULL,
  `q2_4` int(11) NOT NULL,
  `q2_5_1` int(11) DEFAULT NULL,
  `q2_5_2` int(11) DEFAULT NULL,
  `q2_5_3` int(11) DEFAULT NULL,
  `q2_5_4` int(11) DEFAULT NULL,
  `q2_5_5` int(11) DEFAULT NULL,
  `q2_5_6` int(11) DEFAULT NULL,
  `q2_5_7` int(11) DEFAULT NULL,
  `q2_5_8` int(11) DEFAULT NULL,
  `q2_5_9` int(11) DEFAULT NULL,
  `q2_5_10` int(11) DEFAULT NULL,
  `q2_5t` varchar(250) DEFAULT NULL,
  `q2_6` int(11) NOT NULL,
  `q2_6t` varchar(250) DEFAULT NULL,
  `q2_7` int(11) NOT NULL,
  `q2_8` int(11) NOT NULL,
  `q2_9` int(11) NOT NULL,
  `q2_10` int(11) NOT NULL,
  `q2_10t` varchar(250) DEFAULT NULL,
  `q2_11` int(11) NOT NULL,
  `q2_12` int(11) NOT NULL,
  `q2_13` int(11) NOT NULL,
  `q2_13t` varchar(250) DEFAULT NULL,
  `q2_14` int(11) NOT NULL,
  `q2_15` int(11) NOT NULL,
  `q2_16` int(11) NOT NULL,
  `weight` varchar(3) NOT NULL,
  `waist` varchar(3) NOT NULL,
  `height` varchar(3) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `q11` int(11) NOT NULL,
  `q12` int(11) NOT NULL,
  `q13` int(11) NOT NULL,
  `q14` int(11) NOT NULL,
  `q15` int(11) NOT NULL,
  `q16` int(11) NOT NULL,
  `q17` int(11) NOT NULL,
  `q18` int(11) NOT NULL,
  `q19` int(11) NOT NULL,
  `q20` int(11) NOT NULL,
  `q21` int(11) NOT NULL,
  `q22` int(11) NOT NULL,
  `q23` int(11) NOT NULL,
  `q24` int(11) NOT NULL,
  `q25` int(11) NOT NULL,
  `q26` int(11) NOT NULL,
  `q27` int(11) NOT NULL,
  `q28` int(11) NOT NULL,
  `q29` int(11) NOT NULL,
  `q30` int(11) NOT NULL,
  `q31` int(11) NOT NULL,
  `q32` int(11) NOT NULL,
  `q33` int(11) NOT NULL,
  `q34` int(11) NOT NULL,
  `q35` int(11) NOT NULL,
  `q36` int(11) NOT NULL,
  `q37` int(11) NOT NULL,
  `q38` int(11) NOT NULL,
  `q39` int(11) NOT NULL,
  `q40` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `idcode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_f`
--

CREATE TABLE `student_f` (
  `id` int(11) NOT NULL,
  `a2` text NOT NULL,
  `a3` int(11) NOT NULL,
  `sex` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `q2_3` int(11) NOT NULL,
  `q2_4_1` int(11) DEFAULT NULL,
  `q2_4_2` int(11) DEFAULT NULL,
  `q2_4_3` int(11) DEFAULT NULL,
  `q2_4_4` int(11) DEFAULT NULL,
  `q2_4_5` int(11) DEFAULT NULL,
  `q2_4_6` int(11) DEFAULT NULL,
  `q2_4_7` int(11) DEFAULT NULL,
  `q2_4_8` int(11) DEFAULT NULL,
  `q2_4_9` int(11) DEFAULT NULL,
  `q2_4_10` int(11) DEFAULT NULL,
  `q2_4t` varchar(250) DEFAULT NULL,
  `q2_5` int(11) NOT NULL,
  `weight` varchar(3) NOT NULL,
  `waist` varchar(3) NOT NULL,
  `height` varchar(3) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `q11` int(11) NOT NULL,
  `cv1` int(11) NOT NULL,
  `q12` int(11) NOT NULL,
  `q13` int(11) NOT NULL,
  `q14` int(11) NOT NULL,
  `q15` int(11) NOT NULL,
  `q16` int(11) NOT NULL,
  `q17` int(11) NOT NULL,
  `q18` int(11) NOT NULL,
  `q19` int(11) NOT NULL,
  `q20` int(11) NOT NULL,
  `q21` int(11) NOT NULL,
  `cv2` int(11) NOT NULL,
  `q22` int(11) NOT NULL,
  `q23` int(11) NOT NULL,
  `q24` int(11) NOT NULL,
  `q25` int(11) NOT NULL,
  `q26` int(11) NOT NULL,
  `cv3` int(11) NOT NULL,
  `q27` int(11) NOT NULL,
  `q28` int(11) NOT NULL,
  `q29` int(11) NOT NULL,
  `q30` int(11) NOT NULL,
  `q31` int(11) NOT NULL,
  `q32` int(11) NOT NULL,
  `cv4` int(11) NOT NULL,
  `q33` int(11) NOT NULL,
  `q34` int(11) NOT NULL,
  `q35` int(11) NOT NULL,
  `cv5` int(11) NOT NULL,
  `q36` int(11) NOT NULL,
  `q37` int(11) NOT NULL,
  `q38` int(11) NOT NULL,
  `q39` int(11) NOT NULL,
  `q40` int(11) NOT NULL,
  `q41` int(11) NOT NULL,
  `q42` int(11) NOT NULL,
  `q43` int(11) NOT NULL,
  `q44` int(11) NOT NULL,
  `cv6` int(11) NOT NULL,
  `q45` int(11) NOT NULL,
  `q46` int(11) NOT NULL,
  `q47` int(11) NOT NULL,
  `cv7` int(11) NOT NULL,
  `q48` int(11) NOT NULL,
  `q49` int(11) NOT NULL,
  `q50` int(11) NOT NULL,
  `q51` int(11) NOT NULL,
  `cv8` int(11) NOT NULL,
  `q52` int(11) NOT NULL,
  `q53` int(11) NOT NULL,
  `q54` int(11) NOT NULL,
  `q55` int(11) NOT NULL,
  `q56` int(11) NOT NULL,
  `q57` int(11) NOT NULL,
  `q58` int(11) NOT NULL,
  `q59` int(11) NOT NULL,
  `q60` int(11) NOT NULL,
  `q61` int(11) NOT NULL,
  `q62` int(11) NOT NULL,
  `q63` int(11) NOT NULL,
  `q64` int(11) NOT NULL,
  `q65` int(11) NOT NULL,
  `q66` int(11) NOT NULL,
  `q67` int(11) NOT NULL,
  `q68` int(11) NOT NULL,
  `q69` int(11) NOT NULL,
  `cv9` int(11) NOT NULL,
  `q70` int(11) NOT NULL,
  `q71` int(11) NOT NULL,
  `q72` int(11) NOT NULL,
  `q73` int(11) NOT NULL,
  `q74` int(11) NOT NULL,
  `q75` int(11) NOT NULL,
  `q76` int(11) NOT NULL,
  `q77` int(11) NOT NULL,
  `q78` int(11) NOT NULL,
  `q79` int(11) NOT NULL,
  `q80` int(11) NOT NULL,
  `q81` int(11) NOT NULL,
  `q82` int(11) NOT NULL,
  `q83` int(11) NOT NULL,
  `q84` int(11) NOT NULL,
  `q85` int(11) NOT NULL,
  `q86` int(11) NOT NULL,
  `q87` int(11) NOT NULL,
  `q88` int(11) NOT NULL,
  `q89` varchar(10) NOT NULL,
  `q90` varchar(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `idcode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_s`
--

CREATE TABLE `student_s` (
  `id` int(11) NOT NULL,
  `a2` text NOT NULL,
  `a3` int(11) NOT NULL,
  `sex` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `q2_3` int(11) NOT NULL,
  `q2_4_1` int(11) DEFAULT NULL,
  `q2_4_2` int(11) DEFAULT NULL,
  `q2_4_3` int(11) DEFAULT NULL,
  `q2_4_4` int(11) DEFAULT NULL,
  `q2_4_5` int(11) DEFAULT NULL,
  `q2_4_6` int(11) DEFAULT NULL,
  `q2_4_7` int(11) DEFAULT NULL,
  `q2_4_8` int(11) DEFAULT NULL,
  `q2_4_9` int(11) DEFAULT NULL,
  `q2_4_10` int(11) DEFAULT NULL,
  `q2_4t` varchar(250) DEFAULT NULL,
  `q2_5` int(11) NOT NULL,
  `weight` varchar(3) NOT NULL,
  `waist` varchar(3) NOT NULL,
  `height` varchar(3) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `q11` int(11) NOT NULL,
  `q12` int(11) NOT NULL,
  `q13` int(11) NOT NULL,
  `q14` int(11) NOT NULL,
  `q15` int(11) NOT NULL,
  `q16` int(11) NOT NULL,
  `q17` int(11) NOT NULL,
  `q18` int(11) NOT NULL,
  `q19` int(11) NOT NULL,
  `q20` int(11) NOT NULL,
  `q21` int(11) NOT NULL,
  `q22` int(11) NOT NULL,
  `q23` int(11) NOT NULL,
  `q24` int(11) NOT NULL,
  `q25` int(11) NOT NULL,
  `q26` int(11) NOT NULL,
  `q27` int(11) NOT NULL,
  `q28` int(11) NOT NULL,
  `q29` int(11) NOT NULL,
  `q30` int(11) NOT NULL,
  `q31` int(11) NOT NULL,
  `q32` int(11) NOT NULL,
  `q33` int(11) NOT NULL,
  `q34` int(11) NOT NULL,
  `q35` int(11) NOT NULL,
  `q36` int(11) NOT NULL,
  `q37` int(11) NOT NULL,
  `q38` int(11) NOT NULL,
  `q39` int(11) NOT NULL,
  `q40` int(11) NOT NULL,
  `q41` int(11) NOT NULL,
  `q42` int(11) NOT NULL,
  `q43` int(11) NOT NULL,
  `q44` int(11) NOT NULL,
  `q45` int(11) NOT NULL,
  `q46` int(11) NOT NULL,
  `q47` int(11) NOT NULL,
  `q48` int(11) NOT NULL,
  `q49` int(11) NOT NULL,
  `q50` int(11) NOT NULL,
  `q51` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `idcode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_f`
--
ALTER TABLE `staff_f`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_s`
--
ALTER TABLE `staff_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_f`
--
ALTER TABLE `student_f`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_s`
--
ALTER TABLE `student_s`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_f`
--
ALTER TABLE `staff_f`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_s`
--
ALTER TABLE `staff_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_f`
--
ALTER TABLE `student_f`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_s`
--
ALTER TABLE `student_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
