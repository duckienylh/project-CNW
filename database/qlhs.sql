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
('SV01', 'Nguyễn Thị Phú', '2005-11-18', 'Hà Nội', 0, '0916211456', 'nguyenvanduy@gmail.com', 'Nguyễn Văn Duy', ' L01'),
('SV02', 'Nguyễn Thị  Yến Nhi', '2005-11-05', 'Hà Nội', 0, '0916200456', 'nguyenvandung@gmail.com', 'Nguyễn Văn Dũng', ' L01'),
('SV03', 'Nguyễn Văn Phong', '2005-01-07', 'Hà Nội', 0, '0916211421', 'nguyenvanphong@gmail.com', 'Nguyễn Thị Ly', ' L01'),
('SV04', 'Nguyễn Hồng Hà', '2005-11-16', 'Hà Nam', 1, '0916244456', 'nguyenvanduy@gmail.com', 'Nguyễn Anh Lam', ' L02'),
('SV05', 'Nguyễn Thị Mai Lan', '2005-01-07', 'Hà Nội', 0, ' 0923211456', 'nguyenuoc@gmail.com', 'Nguyễn Thị Ước', ' L02'),
('SV06', 'Nguyễn Văn Phú', '2005-12-15', 'Hà Nội', 1, ' 0916222125', 'nguyenkhuongduy@gmail.com', 'Nguyễn Khương Duy', ' L02'),
('SV07', 'Nguyễn Đức Kiên', '2005-08-25', 'Hà Nội', 1, '0918006456', 'nguyenvanduc@gmail.com', 'Nguyễn Văn Đức', ' L03'),
('SV08', 'Nguyễn Văn Dương', '2005-10-07', 'Hà Nội', 1, '0916056456', 'nguyengiapduc@gmail.com', 'Nguyễn Giáp Đức', ' L03'),
('SV09', 'Ngô Đức Tâm', '2005-12-01', 'Hà Nội', 1, '0916445780', 'nguyenlongduc@gmail.com', 'Nguyễn Long Đức', ' L03');

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
('SB01', 'Toán học'),
('SB02', 'Hóa học'),
('SB03', 'Ngữ Văn'),
('SB04', 'Sinh Học'),
('SB05', 'Vật Lý');

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
(27, 0, '  hi kien', 'Nguyễn Thị Lý', '2021-11-05 05:34:32'),
(28, 0, '  mình cũng hi kiên', 'Nguyễn Thị Hòa', '2021-11-05 05:35:06'),
(29, 27, ' hi nhóm mình nhé', 'Nguyễn Thị Hòa', '2021-11-05 05:35:26'),
(30, 0, '  hello nhóm 6 nhé\r\n', 'Nguyễn Thị Mai Lan', '2021-11-05 05:38:11'),
(31, 0, '  ừ thì hello kien', 'Nguyễn Thị Lý', '2021-11-05 05:39:32'),
(32, 0, '  =))\r\n', 'Nguyễn Thị Lý', '2021-11-05 05:39:41');

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
('GV01', 'Nguyễn Thị Hòa', 'hoathi@gmail.com', '0456175189', 'Hà Nội', 0, '1989-12-12', 'SB01'),
('GV02', 'Lê Thị Hồng', 'hongg@gmail.com', '0456912489', 'Hà Nam', 0, '1990-12-07', 'SB02'),
('GV03', 'Nguyễn Thị Lý', 'nguyenly@gmail.com', '0456948900', 'Lào Cai', 0, '1989-06-19', 'SB03'),
('GV04', 'Nguyễn Văn Hưng', 'hưngvan@gmail.com', '0789912489', 'Bắc Ninh', 1, '1974-09-16', 'SB04'),
('GV05', 'Trần Tuấn Đức', 'trantuanduc@gmail.com', '0986912111', 'Hà Giang', 1, '1979-01-11', 'SB05'),
('GV06', 'Nguyễn Văn Đúng', 'Dungnguyenvan@gmail.com', '0454512480', 'Hà Nam', 0, '1984-05-12', 'SB01');

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
('1', 'Kiên trưởng nhóm', 'admin', '123hp@gmail.com', '$2y$10$keXolp5Zm/FcJQEeTy0eDuoZnSw.sZ89Xy6IoZ5LrYXbsZDe7MSEy', 0),
('GV01', 'Nguyễn Thị Hòa', 'nguyenthihoa', 'hoathi@gmail.com', '$2y$10$mJV7PiJBt7lx4sXIgIzk7.5tLSY8rVRgi0o9cDFVSWdJ480Vq.yf2', 1),
('GV02', 'Lê Thị Hồng', 'lethihong', 'hongg@gmail.com', '$2y$10$f6FhkXiF59fLWRFZvxvVouqaOt57cmkNPgJAJiJez3/JONm9agbAS', 1),
('GV03', 'Nguyễn Thị Lý', 'nguyenthily', 'nguyenly@gmail.com', '$2y$10$vZsdW8rZabf8Se2bd2NpNugNtn7RjVGc5arnAPMs7UhWiro8fioaW', 1),
('GV04', 'Nguyễn Văn Hưng', 'hungnguyenvan', 'hưngvan@gmail.com', '$2y$10$F0IlCtPT.QSc11weWgFnUerUTaY9KZw0YfT.TS584sxUytTqmnsoK', 1),
('GV05', 'Trần Tuấn Đức', 'trantuanduc', 'trantuanduc@gmail.com', '$2y$10$yc/1Xfeklb0TnIktK8UzLexyeQwj1WvMv5ofT9a38dSuapH7PcAIq', 1),
('GV06', 'Nguyễn Văn Đúng', 'dungnguyenvan', 'Dungnguyenvan@gmail.com', '$2y$10$rYpc1zq/WXopfZ0sYwyGterHVIC1mtqow8gkNCy4ZDVRg79vo6oMy', 1),
('SV01', 'Nguyễn Thị Phú', 'nguyenthiphu', 'nguyenvanduy@gmail.com', '$2y$10$.wYlS5pKSVdSIKZW52onKuPPbu106RGQJgj4qjQpyguUB4vnYRCQi', 2),
('SV02', 'Nguyễn Thị  Yến Nhi', 'nguyenthiyennhi', 'nguyenvandung@gmail.com', '$2y$10$IhrlBTxpJb0vBpQnRd0QdOYTrmIO73JfMltaen1HahxyNps543NhS', 2),
('SV03', 'Nguyễn Văn Phong', 'nguyenvanphong', 'nguyenthily@gmail.com', '$2y$10$csgF42EtGlr17MzXucfdkuVxHKqzhDk.RWQb0Z3nzFEhp9I1vWrK.', 2),
('SV04', 'Nguyễn Hồng Hà', 'nguyenthiha', 'nguyenvanduy@gmail.com', '$2y$10$kjGswy6epKm.p2PvCZMireoR76F9EGAlVMfFSnWHOuSDO6Q3Zzoqq', 2),
('SV05', 'Nguyễn Thị Mai Lan', 'nguyenthimailan', 'nguyenuoc@gmail.com', '$2y$10$yYvDeke41G8aN2C7EFVrc.r8f8e2601lEDYiC.VQ4C1XPJjYZ7P.W', 2),
('SV06', 'Nguyễn Văn Phú', 'nguyenvanphu', 'nguyenkhuongduy@gmail.com', '$2y$10$BM/jFuSr.4Oa5sZvY8lyC.6JCeQb4trfZfE1NfCBjjmoiNe4CqOeu', 2),
('SV07', 'Nguyễn Đức Kiên', 'nguyenduckien', 'nguyenvanduc@gmail.com', '$2y$10$Ci7n37h1bv73gN6gTfKWPOAJcFpItzXj5u5EqDr0tCLkENWo4R086', 2),
('SV08', 'Nguyễn Văn Dương', 'nguyenvanduong', 'nguyengiapduc@gmail.com', '$2y$10$b4JEctofe4cwgzOvlfzkT.evBSrQioa3LoCwhqSaNfKVbUKqehEjK', 2),
('SV09', 'Ngô Đức Tâm', 'ngoductam', 'nguyenlongduc@gmail.com', '$2y$10$Z0JQ3YZSwQbJ1edJZ/THU.dVkTSi.rjXBd6n1JnF7WFMh6jhD93rW', 2);

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
