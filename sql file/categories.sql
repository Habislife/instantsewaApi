-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 11:34 AM
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
-- Database: `instantsewa`
--

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Electrical', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus aliquam eleifend mi in nulla. Id ornare arcu odio ut. Blandit turpis cursus in hac. Elementum eu facilisis sed odio morbi quis.', 'Electrical.png', '2020-10-07 09:31:16', '2020-10-07 09:31:16', NULL),
(2, 'Painting', 'Ullamcorper malesuada proin libero nunc consequat interdum. Neque ornare aenean euismod elementum nisi quis eleifend. Erat nam at lectus urna duis convallis. Aliquam eleifend mi in nulla. Feugiat sed lectus vestibulum mattis ullamcorper velit.', 'Paint.png', '2020-10-07 09:32:03', '2020-10-07 09:32:03', NULL),
(3, 'Plumbing', 'Netus et malesuada fames ac turpis egestas sed tempus. Lectus nulla at volutpat diam ut venenatis. Eu sem integer vitae justo eget magna fermentum iaculis. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim.', 'Plumbing.png', '2020-10-07 09:32:24', '2020-10-07 09:32:24', NULL),
(4, 'Beauty', 'Duis ultricies lacus sed turpis tincidunt id aliquet risus. Pellentesque habitant morbi tristique senectus et netus. Sed risus ultricies tristique nulla aliquet enim. In nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque.', 'beauty.png', '2020-10-07 09:32:37', '2020-10-07 09:32:37', NULL),
(5, 'Cleaning', 'At ultrices mi tempus imperdiet nulla malesuada pellentesque elit. Lorem ipsum dolor sit amet consectetur adipiscing. Neque volutpat ac tincidunt vitae. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Volutpat est velit egestas dui id ornare arcu odio. ', 'cleaning.png', '2020-10-07 09:32:49', '2020-10-07 09:32:49', NULL),
(6, 'Appliances', 'Quisque sagittis purus sit amet volutpat consequat mauris nunc. Tristique senectus et netus et malesuada fames ac turpis. Ante metus dictum at tempor commodo ullamcorper. Dictum varius duis at consectetur. Eget arcu dictum varius duis at. ', 'appliances.png', '2020-10-07 09:33:06', '2020-10-07 09:33:06', NULL),
(7, 'Laundry', 'Eget nunc lobortis mattis aliquam faucibus purus in massa tempor. A pellentesque sit amet porttitor eget dolor morbi. Pellentesque habitant morbi tristique senectus.', 'Laundry.png', '2020-10-07 09:33:25', '2020-10-07 09:33:25', NULL),
(8, 'Tv mounting', 'Dictumst quisque sagittis purus sit amet. Felis eget velit aliquet sagittis id consectetur purus. Nunc sed id semper risus in hendrerit. Semper auctor neque vitae tempus quam pellentesque nec.', 'tvmounting.png', '2020-10-07 09:33:39', '2020-10-07 09:33:39', NULL),
(9, 'Handyman', 'Eu feugiat pretium nibh ipsum consequat nisl vel pretium lectus. Enim nulla aliquet porttitor lacus luctus accumsan. Proin nibh nisl condimentum id venenatis a condimentum vitae sapien. Venenatis urna cursus eget nunc scelerisque viverra mauris.', 'handyman.png', '2020-10-07 09:33:52', '2020-10-07 09:33:52', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
