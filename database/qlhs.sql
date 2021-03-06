-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 12:40 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `teach_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`, `teach_id`) VALUES
(' L01', '11A2', 'GV01'),
(' L02', '11A4', 'GV06'),
(' L03', '11A10', 'GV04');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `st_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sb_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_mini_test` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_hour_test` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_final_exam` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_avarage` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`st_id`, `sb_id`, `ma_mini_test`, `ma_hour_test`, `ma_final_exam`, `ma_avarage`) VALUES
('SV01', 'SB01', '7', '7', '8', '7.5'),
('SV01', 'SB02', '7', '7', '7', '7'),
('SV01', 'SB04', '8', '8', '9', '8.5'),
('SV01', 'SB05', '9', '8', '7', '7.7'),
('SV02', 'SB01', '7', '6', '6', '6.2'),
('SV02', 'SB02', '7', '7', '6', '6.5'),
('SV02', 'SB03', '9', '9', '9', '9'),
('SV02', 'SB04', '8', '8', '7', '7.5'),
('SV02', 'SB05', '7', '8', '9', '8.3'),
('SV03', 'SB01', '10', '10', '9', '9.5'),
('SV03', 'SB02', '9', '9', '8', '8.5'),
('SV03', 'SB03', '10', '10', '8', '9'),
('SV03', 'SB04', '7', '9', '9', '8.7'),
('SV04', 'SB01', '6', '6', '7', '6.5'),
('SV04', 'SB02', '7', '7', '7', '7'),
('SV04', 'SB03', '7', '8', '8', '7.8'),
('SV04', 'SB04', '9', '9', '9', '9'),
('SV04', 'SB05', '8', '8', '8', '8'),
('SV05', 'SB02', '7', '9', '6', '7.2'),
('SV05', 'SB03', '10', '10', '10', '10'),
('SV05', 'SB04', '7', '10', '9', '9'),
('SV05', 'SB05', '9', '8', '9', '8.7'),
('SV06', 'SB01', '7', '7', '7', '7'),
('SV06', 'SB02', '9', '8', '9', '8.7'),
('SV06', 'SB03', '9', '9', '9', '9'),
('SV06', 'SB04', '8', '8', '8', '8'),
('SV06', 'SB05', '8', '6', '7', '6.8'),
('SV01', 'SB03', '7', '7', '7', '7'),
('SV03', 'SB05', '9', '9', '9', '9'),
('SV05', 'SB01', '8', '8', '8', '8'),
('SV07', 'SB01', '7', '7', '7', '7'),
('SV07', 'SB02', '9', '9', '9', '9'),
('SV07', 'SB03', '6', '6', '6', '6'),
('SV07', 'SB04', '7', '7', '9', '8'),
('SV07', 'SB05', '10', '10', '9', '9.5'),
('SV08', 'SB01', '7', '7', '8', '7.5'),
('SV08', 'SB02', '9', '9', '9', '9'),
('SV08', 'SB03', '10', '10', '9', '9.5'),
('SV08', 'SB04', '7', '8', '9', '8.3'),
('SV08', 'SB05', '7', '8', '9', '8.3'),
('SV09', 'SB01', '7', '8', '9', '8.3'),
('SV09', 'SB02', '9', '9', '8', '8.5'),
('SV09', 'SB03', '8', '8', '8', '8'),
('SV09', 'SB04', '8', '8', '10', '9'),
('SV09', 'SB05', '9', '8', '9', '8.7');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `st_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `st_birth` date NOT NULL,
  `st_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `st_gender` tinyint(1) NOT NULL,
  `st_phone` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `st_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `st_parent` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`st_id`, `st_name`, `st_birth`, `st_address`, `st_gender`, `st_phone`, `st_email`, `st_parent`, `class_id`) VALUES
('SV01', 'Nguy???n Th??? Ph??', '2005-11-18', 'H?? N???i', 0, '0916211456', 'nguyenvanduy@gmail.com', 'Nguy???n V??n Duy', ' L01'),
('SV02', 'Nguy???n Th???  Y???n Nhi', '2005-11-05', 'H?? N???i', 0, '0916200456', 'nguyenvandung@gmail.com', 'Nguy???n V??n D??ng', ' L01'),
('SV03', 'Nguy???n V??n Phong', '2005-01-07', 'H?? N???i', 0, '0916211421', 'nguyenvanphong@gmail.com', 'Nguy???n Th??? Ly', ' L01'),
('SV04', 'Nguy???n H???ng H??', '2005-11-16', 'H?? Nam', 1, '0916244456', 'nguyenvanduy@gmail.com', 'Nguy???n Anh Lam', ' L02'),
('SV05', 'Nguy???n Th??? Mai Lan', '2005-01-07', 'H?? N???i', 0, ' 0923211456', 'nguyenuoc@gmail.com', 'Nguy???n Th??? ?????c', ' L02'),
('SV06', 'Nguy???n V??n Ph??', '2005-12-15', 'H?? N???i', 1, ' 0916222125', 'nguyenkhuongduy@gmail.com', 'Nguy???n Kh????ng Duy', ' L02'),
('SV07', 'Nguy???n ?????c Ki??n', '2005-08-25', 'H?? N???i', 1, '0918006456', 'nguyenvanduc@gmail.com', 'Nguy???n V??n ?????c', ' L03'),
('SV08', 'Nguy???n V??n D????ng', '2005-10-07', 'H?? N???i', 1, '0916056456', 'nguyengiapduc@gmail.com', 'Nguy???n Gi??p ?????c', ' L03'),
('SV09', 'Ng?? ?????c T??m', '2005-12-01', 'H?? N???i', 1, '0916445780', 'nguyenlongduc@gmail.com', 'Nguy???n Long ?????c', ' L03');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sb_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sb_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sb_id`, `sb_name`) VALUES
('SB01', 'To??n h???c'),
('SB02', 'H??a h???c'),
('SB03', 'Ng??? V??n'),
('SB04', 'Sinh H???c'),
('SB05', 'V???t L??');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(27, 0, '  hi kien', 'Nguy???n Th??? L??', '2021-11-05 05:34:32'),
(28, 0, '  m??nh c??ng hi ki??n', 'Nguy???n Th??? H??a', '2021-11-05 05:35:06'),
(29, 27, ' hi nh??m m??nh nh??', 'Nguy???n Th??? H??a', '2021-11-05 05:35:26'),
(30, 0, '  hello nh??m 6 nh??\r\n', 'Nguy???n Th??? Mai Lan', '2021-11-05 05:38:11'),
(31, 0, '  ??? th?? hello kien', 'Nguy???n Th??? L??', '2021-11-05 05:39:32'),
(32, 0, '  =))\r\n', 'Nguy???n Th??? L??', '2021-11-05 05:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teach_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teach_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `teach_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `teach_phone` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `teach_address` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `teach_gender` tinyint(1) DEFAULT NULL,
  `teach_birth` date DEFAULT NULL,
  `sb_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teach_id`, `teach_name`, `teach_email`, `teach_phone`, `teach_address`, `teach_gender`, `teach_birth`, `sb_id`) VALUES
('GV01', 'Nguy???n Th??? H??a', 'hoathi@gmail.com', '0456175189', 'H?? N???i', 0, '1989-12-12', 'SB01'),
('GV02', 'L?? Th??? H???ng', 'hongg@gmail.com', '0456912489', 'H?? Nam', 0, '1990-12-07', 'SB02'),
('GV03', 'Nguy???n Th??? L??', 'nguyenly@gmail.com', '0456948900', 'L??o Cai', 0, '1989-06-19', 'SB03'),
('GV04', 'Nguy???n V??n H??ng', 'h??ngvan@gmail.com', '0789912489', 'B???c Ninh', 1, '1974-09-16', 'SB04'),
('GV05', 'Tr???n Tu???n ?????c', 'trantuanduc@gmail.com', '0986912111', 'H?? Giang', 1, '1979-01-11', 'SB05'),
('GV06', 'Nguy???n V??n ????ng', 'Dungnguyenvan@gmail.com', '0454512480', 'H?? Nam', 0, '1984-05-12', 'SB01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `account` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `account`, `user_email`, `user_password`, `user_level`) VALUES
('1', 'Ki??n tr?????ng nh??m', 'admin', '123hp@gmail.com', '$2y$10$keXolp5Zm/FcJQEeTy0eDuoZnSw.sZ89Xy6IoZ5LrYXbsZDe7MSEy', 0),
('GV01', 'Nguy???n Th??? H??a', 'nguyenthihoa', 'hoathi@gmail.com', '$2y$10$mJV7PiJBt7lx4sXIgIzk7.5tLSY8rVRgi0o9cDFVSWdJ480Vq.yf2', 1),
('GV02', 'L?? Th??? H???ng', 'lethihong', 'hongg@gmail.com', '$2y$10$f6FhkXiF59fLWRFZvxvVouqaOt57cmkNPgJAJiJez3/JONm9agbAS', 1),
('GV03', 'Nguy???n Th??? L??', 'nguyenthily', 'nguyenly@gmail.com', '$2y$10$vZsdW8rZabf8Se2bd2NpNugNtn7RjVGc5arnAPMs7UhWiro8fioaW', 1),
('GV04', 'Nguy???n V??n H??ng', 'hungnguyenvan', 'h??ngvan@gmail.com', '$2y$10$F0IlCtPT.QSc11weWgFnUerUTaY9KZw0YfT.TS584sxUytTqmnsoK', 1),
('GV05', 'Tr???n Tu???n ?????c', 'trantuanduc', 'trantuanduc@gmail.com', '$2y$10$yc/1Xfeklb0TnIktK8UzLexyeQwj1WvMv5ofT9a38dSuapH7PcAIq', 1),
('GV06', 'Nguy???n V??n ????ng', 'dungnguyenvan', 'Dungnguyenvan@gmail.com', '$2y$10$rYpc1zq/WXopfZ0sYwyGterHVIC1mtqow8gkNCy4ZDVRg79vo6oMy', 1),
('SV01', 'Nguy???n Th??? Ph??', 'nguyenthiphu', 'nguyenvanduy@gmail.com', '$2y$10$.wYlS5pKSVdSIKZW52onKuPPbu106RGQJgj4qjQpyguUB4vnYRCQi', 2),
('SV02', 'Nguy???n Th???  Y???n Nhi', 'nguyenthiyennhi', 'nguyenvandung@gmail.com', '$2y$10$IhrlBTxpJb0vBpQnRd0QdOYTrmIO73JfMltaen1HahxyNps543NhS', 2),
('SV03', 'Nguy???n V??n Phong', 'nguyenvanphong', 'nguyenthily@gmail.com', '$2y$10$csgF42EtGlr17MzXucfdkuVxHKqzhDk.RWQb0Z3nzFEhp9I1vWrK.', 2),
('SV04', 'Nguy???n H???ng H??', 'nguyenthiha', 'nguyenvanduy@gmail.com', '$2y$10$kjGswy6epKm.p2PvCZMireoR76F9EGAlVMfFSnWHOuSDO6Q3Zzoqq', 2),
('SV05', 'Nguy???n Th??? Mai Lan', 'nguyenthimailan', 'nguyenuoc@gmail.com', '$2y$10$yYvDeke41G8aN2C7EFVrc.r8f8e2601lEDYiC.VQ4C1XPJjYZ7P.W', 2),
('SV06', 'Nguy???n V??n Ph??', 'nguyenvanphu', 'nguyenkhuongduy@gmail.com', '$2y$10$BM/jFuSr.4Oa5sZvY8lyC.6JCeQb4trfZfE1NfCBjjmoiNe4CqOeu', 2),
('SV07', 'Nguy???n ?????c Ki??n', 'nguyenduckien', 'nguyenvanduc@gmail.com', '$2y$10$Ci7n37h1bv73gN6gTfKWPOAJcFpItzXj5u5EqDr0tCLkENWo4R086', 2),
('SV08', 'Nguy???n V??n D????ng', 'nguyenvanduong', 'nguyengiapduc@gmail.com', '$2y$10$b4JEctofe4cwgzOvlfzkT.evBSrQioa3LoCwhqSaNfKVbUKqehEjK', 2),
('SV09', 'Ng?? ?????c T??m', 'ngoductam', 'nguyenlongduc@gmail.com', '$2y$10$Z0JQ3YZSwQbJ1edJZ/THU.dVkTSi.rjXBd6n1JnF7WFMh6jhD93rW', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `teach_key` (`teach_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD KEY `sb2_key` (`sb_id`),
  ADD KEY `st_key` (`st_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`st_id`),
  ADD KEY `L_key` (`class_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sb_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teach_id`),
  ADD KEY `sb_key` (`sb_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `teach_key` FOREIGN KEY (`teach_id`) REFERENCES `teachers` (`teach_id`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `sb2_key` FOREIGN KEY (`sb_id`) REFERENCES `subjects` (`sb_id`),
  ADD CONSTRAINT `st_key` FOREIGN KEY (`st_id`) REFERENCES `students` (`st_id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `L_key` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `sb_key` FOREIGN KEY (`sb_id`) REFERENCES `subjects` (`sb_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
