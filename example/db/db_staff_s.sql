-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 10, 2023 at 09:38 AM
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
-- Database: `db_staff_s`
--

-- --------------------------------------------------------

--
-- Table structure for table `insert_data`
--

CREATE TABLE `insert_data` (
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
-- Dumping data for table `insert_data`
--

INSERT INTO `insert_data` (`id`, `a1`, `a2`, `a3`, `a4`, `a4t`, `a5`, `a5t`, `sex`, `age`, `q2_3`, `q2_4`, `q2_5_1`, `q2_5_2`, `q2_5_3`, `q2_5_4`, `q2_5_5`, `q2_5_6`, `q2_5_7`, `q2_5_8`, `q2_5_9`, `q2_5_10`, `q2_5t`, `q2_6`, `q2_6t`, `q2_7`, `q2_8`, `q2_9`, `q2_10`, `q2_10t`, `q2_11`, `q2_12`, `q2_13`, `q2_13t`, `q2_14`, `q2_15`, `q2_16`, `weight`, `waist`, `height`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `q26`, `q27`, `q28`, `q29`, `q30`, `q31`, `q32`, `q33`, `q34`, `q35`, `q36`, `q37`, `q38`, `q39`, `q40`, `date`, `idcode`) VALUES
(1, 0, '0', 0, 0, '', 0, '', 2, 22, 1, 5, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, '2.5 ปัจจุบัน โดยส่วนใหญ่ท่านอาศัยอยู่กับใครบ้าง (ตอบได้มากกว่า 1 ข้อ)', 10, '2.6 ท่านจบการศึกษาสูงสุด ในระดับใด (ไม่รวมระดับการศึกษาที่ยังไม่สำเร็จการศึกษา)', 1, 3, 2, 5, '2.10 งานที่ท่านทำเป็นงานลักษณะใด', 4, 4, 7, '2.13 สถานภาพการจ้างงาน', 4, 3, 7, '59', '38', '162', 4, 2, 4, 3, 4, 3, 3, 2, 5, 4, 3, 2, 4, 3, 3, 3, 3, 3, 2, 3, 3, 3, 2, 4, 4, 3, 5, 5, 2, 4, 4, 3, 4, 3, 2, 5, 2, 1, 4, '31-03-2566/20-26-11', '310ef6fc4319fd40c0a535916cf0413d'),
(2, 0, '0', 0, 0, '', 0, '', 2, 22, 1, 5, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, '2.5 ปัจจุบัน โดยส่วนใหญ่ท่านอาศัยอยู่กับใครบ้าง (ตอบได้มากกว่า 1 ข้อ)', 10, '2.6 ท่านจบการศึกษาสูงสุด ในระดับใด (ไม่รวมระดับการศึกษาที่ยังไม่สำเร็จการศึกษา)', 1, 3, 2, 5, '2.10 งานที่ท่านทำเป็นงานลักษณะใด', 4, 4, 7, '2.13 สถานภาพการจ้างงาน', 4, 3, 7, '59', '38', '162', 4, 2, 4, 3, 4, 3, 3, 2, 5, 4, 3, 2, 4, 3, 3, 3, 3, 3, 2, 3, 3, 3, 2, 4, 4, 3, 5, 5, 2, 4, 4, 3, 4, 3, 2, 5, 2, 1, 4, '31-03-2566/20-26-12', '310ef6fc4319fd40c0a535916cf0413d'),
(3, 5, '4.คณะมนุษยศาสตร์และสังคมศาสตร์', 2, 0, '', 6, 'gggg', 2, 22, 2, 4, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, NULL, NULL, NULL, 6, NULL, 5, 3, 2, 2, NULL, 6, 2, 4, NULL, 3, 4, 4, '33', '38', '162', 2, 4, 3, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '08-04-2566/16-42-46', '1daa39dd164d33fedee772ae2113cf74'),
(4, 5, '4.คณะมนุษยศาสตร์และสังคมศาสตร์', 2, 0, '', 6, 'gggg', 2, 22, 2, 4, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, NULL, NULL, NULL, 6, NULL, 5, 3, 2, 2, NULL, 6, 2, 4, NULL, 3, 4, 4, '33', '38', '162', 2, 4, 3, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '08-04-2566/16-42-47', '1daa39dd164d33fedee772ae2113cf74'),
(5, 4, '4.คณะมนุษยศาสตร์และสังคมศาสตร์', 2, 0, '', 6, '1.5 ตำแหน่งทางสายสนับสนุน', 1, 22, 1, 4, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, '2.5 ปัจจุบัน โดยส่วนใหญ่ท่านอาศัยอยู่กับใครบ้าง (ตอบได้มากกว่า 1 ข้อ)', 10, '2.6 ท่านจบการศึกษาสูงสุด ในระดับใด (ไม่รวมระดับการศึกษาที่ยังไม่สำเร็จการศึกษา)', 4, 3, 2, 5, '2.10 งานที่ท่านทำเป็นงานลักษณะใด', 7, 3, 7, '2.13 สถานภาพการจ้างงาน', 3, 3, 5, '54', '38', '162', 4, 3, 3, 3, 4, 4, 2, 3, 5, 5, 5, 5, 5, 4, 4, 4, 4, 4, 3, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 1, 1, 1, 2, 2, 2, 2, '10-04-2566/15-08-31', '3a69884da02a98acd0e953acf8671083');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insert_data`
--
ALTER TABLE `insert_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insert_data`
--
ALTER TABLE `insert_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
