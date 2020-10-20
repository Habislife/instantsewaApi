-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 07:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: instantsewa
--

--
-- Dumping data for table users
--

INSERT INTO users (id, username, fullname, email, email_verified_at, `password`, address, phoneno, avatar, remember_token, verified, verification_token, user_type, created_at, updated_at, deleted_at) VALUES
(1, 'ram', 'Ram Poudel', 'ram@gmail.com', NULL, 'ram12345', 'Rambazar, Pokhara', '9807845678', NULL, NULL, NULL, NULL, 'ServiceProvider', '2020-10-05 07:28:32', '2020-10-12 10:00:32', '2020-10-13 16:12:32'),
(2, 'shyam', 'Shyam Thapa', 'shyam@gmail.com', NULL, 'shyam12345', 'Lamachaur, Pokhara', '9803432580', NULL, NULL, NULL, NULL, 'ServiceProvider', '2020-10-01 15:14:42', '2020-10-06 17:08:54', '2020-10-07 14:09:17'),
(3, 'hari', 'Hari Bahadur', 'hari@gmail.com', NULL, 'hari12345', 'Hari Chowk, Pokhara', '9821389089', NULL, NULL, NULL, NULL, 'ServiceProvider', '2020-10-03 05:23:09', '2020-10-06 07:30:06', '2020-10-08 11:14:41'),
(4, 'laxman', 'Laxman Adhikari', 'laxman@gmail.com', NULL, 'laxman12345', 'Lekhnath', '9812345678', NULL, NULL, NULL, NULL, 'ServiceProvider', '2020-10-06 08:29:41', '2020-10-10 01:09:52', '2020-10-12 13:23:12'),
(5, 'gopal', 'Gopal Sunar', 'gopal@gmail.com', NULL, 'gopal12345', 'Amarsingh Chowk, Pokhara', '9803456767', NULL, NULL, NULL, NULL, 'ServiceProvider', '2020-10-10 11:37:00', '2020-10-12 10:15:00', '2020-10-14 12:48:09'),
(6, 'gopi', 'Gopi Khadka', 'gopi@gmail.com', NULL, 'gopi12345', 'Deep', '9867890234', NULL, NULL, NULL, NULL, 'ServiceProvider', '2020-10-02 13:15:00', '2020-10-05 18:25:06', '2020-10-10 11:43:56'),
(7, 'bijay', 'Bijay Gurung', 'bijay@gmail.com', NULL, 'bijay12345', 'Birauta', '9840876453', NULL, NULL, NULL, NULL, 'ServiceProvider', '2020-10-08 16:19:31', '2020-10-10 08:11:22', '2020-10-12 10:43:50'),
(8, 'ashish', 'Ashish KC', 'ashish@gmail.com', NULL, 'ashish12345', 'Chauthe', '9876345678', NULL, NULL, NULL, NULL, 'ServiceProvider', '2020-10-08 14:27:15', '2020-10-09 08:31:42', '2020-10-13 11:34:13'),
(9, 'ajay', 'Ajay Pun', 'ajay@gmail.com', NULL, 'ajay12345', 'Bagar', '9803647844', NULL, NULL, NULL, NULL, 'ServiceProvider', '2020-10-02 02:11:08', '2020-10-06 18:48:58', '2020-10-12 11:39:26'),
(10, 'sita', 'Sita Sapkota', 'sita@gmail.com', NULL, 'sita12345', 'Chhorepatan', '9807645623', NULL, NULL, NULL, NULL, 'ServiceProvider', '2020-10-03 15:33:23', '2020-10-07 13:23:48', '2020-10-11 19:35:34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
