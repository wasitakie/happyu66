-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 19, 2023 at 09:53 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_happy`
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
  `q2_5_1` int(11) NOT NULL,
  `q2_5_2` int(11) NOT NULL,
  `q2_5_3` int(11) NOT NULL,
  `q2_5_4` int(11) NOT NULL,
  `q2_5_5` int(11) NOT NULL,
  `q2_5_6` int(11) NOT NULL,
  `q2_5_7` int(11) NOT NULL,
  `q2_5_8` int(11) NOT NULL,
  `q2_5_9` int(11) NOT NULL,
  `q2_5_10` int(11) NOT NULL,
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

--
-- Dumping data for table `staff_f`
--

INSERT INTO `staff_f` (`id`, `a1`, `a2`, `a3`, `a4`, `a4t`, `a5`, `a5t`, `sex`, `age`, `q2_3`, `q2_4`, `q2_5_1`, `q2_5_2`, `q2_5_3`, `q2_5_4`, `q2_5_5`, `q2_5_6`, `q2_5_7`, `q2_5_8`, `q2_5_9`, `q2_5_10`, `q2_5t`, `q2_6`, `q2_6t`, `q2_7`, `q2_8`, `q2_9`, `q2_10`, `q2_10t`, `q2_11`, `q2_12`, `q2_13`, `q2_13t`, `q2_14`, `q2_15`, `q2_16`, `weight`, `waist`, `height`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `cv1`, `q10`, `q11`, `q12`, `q13`, `q14`, `cv2`, `q15`, `q16`, `q17`, `q18`, `q19`, `cv3`, `q20`, `q21`, `q22`, `q23`, `q24`, `cv4`, `q25`, `q26`, `q27`, `cv5`, `q28`, `q29`, `q30`, `q31`, `q32`, `q33`, `cv6`, `q34`, `q35`, `q36`, `cv7`, `q37`, `q38`, `q39`, `q40`, `cv8`, `q41`, `q42`, `q43`, `q44`, `q45`, `q46`, `q47`, `q48`, `q49`, `q50`, `q51`, `q52`, `q53`, `q54`, `q55`, `q56`, `q57`, `cv9`, `q58`, `q59`, `q60`, `q61`, `q62`, `q63`, `q64`, `q65`, `q66`, `q67`, `q68`, `q69`, `q70`, `q71`, `q72`, `q73`, `q74`, `q75`, `q76`, `q77`, `q78`, `q79`, `q80`, `q81`, `date`, `idcode`) VALUES
(1, 4, '4.คณะมนุษยศาสตร์และสังคมศาสตร์', 1, 5, '1.4 ตำแหน่งทางสายวิชาการ', 0, '', 2, 22, 1, 5, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, '2.5 ปัจจุบัน โดยส่วนใหญ่ท่านอาศัยอยู่กับใครบ้าง (ตอบได้มากกว่า 1 ข้อ)', 10, '2.6 ท่านจบการศึกษาสูงสุด ในระดับใด (ไม่รวมระดับการศึกษาที่ยังไม่สำเร็จการศึกษา)', 4, 4, 2, 3, NULL, 4, 2, 4, NULL, 5, 3, 3, '53', '32', '162', 3, 3, 3, 3, 3, 3, 4, 3, 3, 3, 4, 3, 3, 3, 4, 3, 5, 4, 3, 3, 2, 3, 3, 3, 4, 3, 3, 4, 3, 5, 3, 4, 4, 4, 4, 3, 3, 4, 5, 5, 4, 4, 4, 4, 5, 4, 2, 5, 4, 5, 3, 5, 5, 5, 5, 3, 4, 5, 4, 4, 3, 5, 5, 3, 3, 5, 5, 5, 5, 3, 4, 5, 5, 3, 4, 4, 4, 3, 4, '2.6', '3.9', 4, 5, 4, 3, 3, 4, 5, 4, '19-04-2566/16-28-31', '76deb55a261a0fa6c9ce6e9692808fe1');

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

--
-- Dumping data for table `staff_s`
--

INSERT INTO `staff_s` (`id`, `a1`, `a2`, `a3`, `a4`, `a4t`, `a5`, `a5t`, `sex`, `age`, `q2_3`, `q2_4`, `q2_5_1`, `q2_5_2`, `q2_5_3`, `q2_5_4`, `q2_5_5`, `q2_5_6`, `q2_5_7`, `q2_5_8`, `q2_5_9`, `q2_5_10`, `q2_5t`, `q2_6`, `q2_6t`, `q2_7`, `q2_8`, `q2_9`, `q2_10`, `q2_10t`, `q2_11`, `q2_12`, `q2_13`, `q2_13t`, `q2_14`, `q2_15`, `q2_16`, `weight`, `waist`, `height`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `q26`, `q27`, `q28`, `q29`, `q30`, `q31`, `q32`, `q33`, `q34`, `q35`, `q36`, `q37`, `q38`, `q39`, `q40`, `date`, `idcode`) VALUES
(1, 4, '3.คณะวิทยาการจัดการ', 1, 5, '1.4 ตำแหน่งทางสายวิชาการ', 0, '', 2, 22, 1, 5, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, '2.5 ปัจจุบัน โดยส่วนใหญ่ท่านอาศัยอยู่กับใครบ้าง (ตอบได้มากกว่า 1 ข้อ)', 6, NULL, 3, 3, 2, 4, NULL, 4, 4, 7, '2.13 สถานภาพการจ้างงาน', 3, 3, 3, '57', '32', '162', 3, 3, 2, 3, 3, 4, 4, 3, 4, 4, 3, 3, 4, 4, 4, 4, 5, 3, 5, 3, 3, 4, 5, 3, 3, 2, 3, 4, 3, 5, 3, 3, 4, 3, 2, 5, 3, 4, 4, '19-04-2566/16-36-37', 'c7095ba73f6948a47e1852a6f7686e1e');

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

--
-- Dumping data for table `student_f`
--

INSERT INTO `student_f` (`id`, `a2`, `a3`, `sex`, `age`, `q2_3`, `q2_4_1`, `q2_4_2`, `q2_4_3`, `q2_4_4`, `q2_4_5`, `q2_4_6`, `q2_4_7`, `q2_4_8`, `q2_4_9`, `q2_4_10`, `q2_4t`, `q2_5`, `weight`, `waist`, `height`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `cv1`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `cv2`, `q22`, `q23`, `q24`, `q25`, `q26`, `cv3`, `q27`, `q28`, `q29`, `q30`, `q31`, `q32`, `cv4`, `q33`, `q34`, `q35`, `cv5`, `q36`, `q37`, `q38`, `q39`, `q40`, `q41`, `q42`, `q43`, `q44`, `cv6`, `q45`, `q46`, `q47`, `cv7`, `q48`, `q49`, `q50`, `q51`, `cv8`, `q52`, `q53`, `q54`, `q55`, `q56`, `q57`, `q58`, `q59`, `q60`, `q61`, `q62`, `q63`, `q64`, `q65`, `q66`, `q67`, `q68`, `q69`, `cv9`, `q70`, `q71`, `q72`, `q73`, `q74`, `q75`, `q76`, `q77`, `q78`, `q79`, `q80`, `q81`, `q82`, `q83`, `q84`, `q85`, `q86`, `q87`, `q88`, `q89`, `q90`, `date`, `idcode`) VALUES
(1, '4. คณะมนุษยศาสตร์และสังคมศาสตร์', 3, 2, 22, 1, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, '2.4 ปัจจุบัน โดยส่วนใหญ่ท่านอาศัยอยู่กับใครบ้าง (ตอบได้มากกว่า 1 ข้อ)', 3, '57', '32', '162', 3, 4, 3, 2, 3, 3, 4, 3, 4, 5, 3, 5, 4, 3, 5, 4, 4, 5, 4, 4, 4, 4, 5, 4, 3, 4, 4, 3, 4, 4, 4, 5, 5, 5, 5, 5, 3, 4, 4, 4, 4, 4, 4, 5, 4, 3, 3, 5, 4, 4, 4, 5, 5, 4, 3, 4, 4, 3, 3, 4, 5, 3, 4, 3, 5, 5, 3, 4, 5, 4, 4, 4, 4, 4, 4, 3, 3, 5, 4, 3, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, '2.7', '3.6', '19-04-2566/16-41-57', '57a37a3458bc33df41466f3bfeae1db8');

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
-- Dumping data for table `student_s`
--

INSERT INTO `student_s` (`id`, `a2`, `a3`, `sex`, `age`, `q2_3`, `q2_4_1`, `q2_4_2`, `q2_4_3`, `q2_4_4`, `q2_4_5`, `q2_4_6`, `q2_4_7`, `q2_4_8`, `q2_4_9`, `q2_4_10`, `q2_4t`, `q2_5`, `weight`, `waist`, `height`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `q26`, `q27`, `q28`, `q29`, `q30`, `q31`, `q32`, `q33`, `q34`, `q35`, `q36`, `q37`, `q38`, `q39`, `q40`, `q41`, `q42`, `q43`, `q44`, `q45`, `q46`, `q47`, `q48`, `q49`, `q50`, `q51`, `date`, `idcode`) VALUES
(1, '3.คณะวิทยาการจัดการ', 2, 2, 22, 1, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, '2.4 ปัจจุบัน โดยส่วนใหญ่ท่านอาศัยอยู่กับใครบ้าง (ตอบได้มากกว่า 1 ข้อ)', 4, '57', '32', '162', 3, 3, 2, 3, 3, 3, 5, 3, 3, 3, 4, 4, 3, 4, 3, 5, 2, 3, 5, 2, 4, 4, 5, 4, 3, 4, 4, 4, 4, 3, 3, 4, 3, 3, 3, 4, 5, 4, 4, 5, 4, 4, 5, 3, 4, 4, 5, 4, 4, 3, '19-04-2566/16-46-13', 'b2669ed4ae0370cc223ad16dfb37e160');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
