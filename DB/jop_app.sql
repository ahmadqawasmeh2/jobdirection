-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2019 at 02:40 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jop_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL,
  `cat_name_ar` varchar(30) CHARACTER SET utf8 NOT NULL,
  `cat_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_name_ar`, `cat_img`) VALUES
(1, 'Hotel services', 'الخدمات الفندقيه', '\"fas fa-hotel\"'),
(3, ' Accounting ', 'محاسبة', '\"fas fa-calculator\"'),
(4, 'Secretary', 'سكرتاريه', '\"fas fa-user-tie\"'),
(5, 'Driver', 'سائق', '\"fas fa-car\"'),
(6, 'Business Administration', 'ادارة', '\"fas fa-user-tie\"'),
(7, ' Marketing', 'تسويق', '\"fas fa-search-location\"'),
(8, ' Libraries', 'مكتبات ', '\"fas fa-book-reader\"'),
(9, 'Archives', 'ارشيف', '\"fas fa-archive\"'),
(10, 'customers service', 'خدمة عملاء ', '\"fas fa-concierge-bell\"'),
(11, 'Data entry', 'ادخال بيانات', '\"fas fa-desktop\"'),
(12, 'Nursing', 'ممرض', '\"fas fa-user-nurse\"'),
(13, 'Fashion design', 'تصميم الازياء', '\"fas fa-tshirt\"'),
(14, 'Languages', 'لغات', '\"fas fa-globe\"'),
(15, 'Translation', 'الترجمه', '\"fas fa-language\"'),
(16, 'French', 'فرنسي', '\"fas fa-globe\"'),
(17, ' Computer maintenance', 'صيانة الكمبيوتر', ' \"fas fa-plug\"'),
(18, 'programming', 'البرمجه ', '\"fas fa-laptop-code\"'),
(19, ' Financial and banking', 'الماليه والمصرفيه', '\"fas fa-university\"'),
(20, ' HR', 'الموارد البشرية ', '\"fas fa-user-tie\"'),
(21, 'others', 'اخرى ', '\"fab fa-battle-net\"');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `sub_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`sub_id`, `cat_id`, `sub_name`) VALUES
(1, 1, 'sfgdvjhbksja'),
(2, 1, 'shdjbnkl;s'),
(3, 1, 'gvsdhbsjnlk'),
(4, 2, 'styuygdahlksl');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` text NOT NULL,
  `is_log` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `pass`, `is_log`) VALUES
(1, 'ahmad', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(2, 'rami', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(3, 'asajdnsk', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(4, 'yewu', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(5, 'werwy', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(6, 'ttt', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(7, 'sdgihojsdbs', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(8, 'sgdvjhs', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(9, 'mkamskamsak', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(10, 'plp32as', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(11, 'rewq22', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(12, 'aas14wq', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(13, 'uyuqw123a', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(14, 'lklsdkls45', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(15, 'asqwesdc', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(16, 'asaawqqq120', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(17, 'aasxzc2', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(18, 'aswwwq', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(19, 'ffrgfdf', '4a7d1ed414474e4033ac29ccb8653d9b', 0),
(20, 'tyutqwyurqt', '4a7d1ed414474e4033ac29ccb8653d9b', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
