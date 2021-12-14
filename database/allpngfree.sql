-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 01:30 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuelpng`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `no_of_sub_cats` int(11) UNSIGNED NOT NULL,
  `no_of_posts` int(11) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `no_of_sub_cats`, `no_of_posts`, `status`) VALUES
(95, 'Bihar', 3, 9, 1),
(96, 'City', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) UNSIGNED NOT NULL,
  `post_title` varchar(1000) NOT NULL,
  `slug_url` text NOT NULL,
  `post_desc` varchar(1000) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `cat_id` int(4) UNSIGNED NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `slug_url`, `post_desc`, `thumbnail`, `cat_id`, `sub_cat_id`, `tags`, `post_date`) VALUES
(267, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(268, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(269, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(270, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(271, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(272, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(273, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(274, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(275, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(276, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(277, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(278, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(279, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(280, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(281, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(282, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(283, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(284, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(285, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(286, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(287, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(288, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(289, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(290, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(291, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(292, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(293, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(294, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(295, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(296, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(297, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(298, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(299, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(300, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(301, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(302, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(303, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(304, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(305, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(306, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(307, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(308, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(309, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(310, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(311, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(312, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(313, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(314, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(315, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(316, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(317, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(318, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(319, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(320, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22'),
(321, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-xalnun', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851262.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:42'),
(322, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-mjcpqt', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851221.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:01'),
(323, 'Dimple singh, Dimple singh free transparent PNG', 'all-png-free-transparent-background-clipart-pvhfos', 'Dimple singh, Dimple singh free transparent PNG', 'dimple-singh,-dimple-singh-free-transparent-png-thumbnail-1635851242.jpg', 95, 5, 'Dimple singh, Dimple singh free transparent PNG', '2021-11-02 16:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `no_of_posts` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `cat_id`, `no_of_posts`, `status`) VALUES
(5, 'Nalanda', 95, 9, 1),
(6, 'Facebook ads', 95, 0, 1),
(8, 'Motihari', 95, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag_id` int(5) NOT NULL,
  `tag_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tag_id`, `tag_name`) VALUES
(4, 'building'),
(6, 'covid'),
(7, 'marketing'),
(8, 'business'),
(9, 'building');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_role` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_role`, `first_name`, `last_name`, `image`, `email`, `password`) VALUES
(1, 'admin', 'Raju', 'Sanehi', 'profile-widget-avatar.jpg', 'test@gmail.com', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
