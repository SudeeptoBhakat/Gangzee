-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 05:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gangzee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_feedback`
--

CREATE TABLE `admin_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sub` varchar(250) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_feedback`
--

INSERT INTO `admin_feedback` (`id`, `name`, `email`, `sub`, `msg`) VALUES
(1, 'Sudeepta Bhakat ', 'sudeeptabhakat84645@gmail.com', 'Very good', 'laskcnlc');

-- --------------------------------------------------------

--
-- Table structure for table `block_list`
--

CREATE TABLE `block_list` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blocked_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `created_at`) VALUES
(48, 14, 13, 'hi', '2023-06-02 06:44:28'),
(49, 14, 14, 'abcd', '2023-06-02 06:46:52'),
(50, 15, 14, 'Hello world', '2023-06-02 06:59:35'),
(51, 15, 16, 'i dath', '2023-06-02 07:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `follow_list`
--

CREATE TABLE `follow_list` (
  `id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `follow_list`
--

INSERT INTO `follow_list` (`id`, `follower_id`, `user_id`) VALUES
(76, 13, 12),
(77, 14, 13),
(79, 16, 15),
(80, 16, 14),
(81, 17, 12),
(82, 17, 13),
(83, 18, 13),
(84, 18, 15);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `user_id`) VALUES
(91, 14, 13),
(92, 14, 14),
(94, 15, 14),
(95, 15, 16),
(97, 14, 18),
(98, 23, 18),
(100, 25, 17),
(101, 22, 17),
(102, 28, 17),
(103, 27, 17);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `read_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `from_user_id` int(11) NOT NULL,
  `read_status` int(11) NOT NULL DEFAULT 0,
  `post_id` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `to_user_id`, `message`, `created_at`, `from_user_id`, `read_status`, `post_id`) VALUES
(99, 12, 'started following you !', '2023-06-02 06:41:28', 13, 0, '0'),
(100, 13, 'started following you !', '2023-06-02 06:46:26', 14, 0, '0'),
(101, 13, 'liked your post !', '2023-06-02 06:46:33', 14, 0, '14'),
(102, 13, 'commented on your post', '2023-06-02 06:46:52', 14, 0, '14'),
(103, 15, 'started following you !', '2023-06-02 06:59:54', 14, 0, '0'),
(104, 15, 'Unfollowed you !', '2023-06-02 06:59:59', 14, 0, '0'),
(105, 15, 'started following you !', '2023-06-02 07:43:40', 16, 0, '0'),
(106, 14, 'started following you !', '2023-06-02 07:43:49', 16, 0, '0'),
(107, 14, 'liked your post !', '2023-06-02 07:43:57', 16, 0, '15'),
(108, 14, 'commented on your post', '2023-06-02 07:44:13', 16, 0, '15'),
(109, 12, 'started following you !', '2023-06-05 07:50:39', 17, 0, '0'),
(110, 13, 'started following you !', '2023-06-05 07:50:43', 17, 0, '0'),
(111, 13, 'started following you !', '2023-06-08 08:53:32', 18, 0, '0'),
(112, 15, 'started following you !', '2023-06-08 08:53:34', 18, 0, '0'),
(113, 13, 'liked your post !', '2023-06-08 08:53:44', 18, 0, '14');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_img` text NOT NULL,
  `post_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `post_img`, `post_text`, `created_at`) VALUES
(14, 13, '1685688254WhatsApp Image 2023-05-31 at 11.13.09 PM.jpeg', 'ami tittli boti', '2023-06-02 06:44:14'),
(15, 14, '1685689157michael-dam-mEZ3PoFGs_k-unsplash.jpg', 'Hi first post', '2023-06-02 06:59:17'),
(22, 17, '1685975427indian-flag-3607410_640.jpg', 'my first post', '2023-06-05 14:30:27'),
(23, 18, '1686214606download (1).jpg', 'my first post', '2023-06-08 08:56:46'),
(25, 17, '1686225968482994.jpg', 'dream car', '2023-06-08 12:06:08'),
(27, 17, '1686227021MV5BNjRiNmNjMmMtN2U2Yi00ODgxLTk3OTMtMmI1MTI1NjYyZTEzXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_FMjpg_UX1000_.jpg', 'my first anime', '2023-06-08 12:23:41'),
(28, 17, '1686227044skysports-cristiano-ronaldo-real-madrid-football_4178227.jpg', 'my idol', '2023-06-08 12:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `profile_pic` text NOT NULL DEFAULT 'default_profile.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ac_status` int(11) NOT NULL COMMENT '0=not verified,1=active,2=blocked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `email`, `username`, `password`, `profile_pic`, `created_at`, `updated_at`, `ac_status`) VALUES
(12, 'titli', 'das', 2, 'titlid801@gmail.com', 'titlidas', '11b7e80941dff25c4a8b6871bc157c6c', 'default_profile.jpg', '2023-06-02 06:38:34', '2023-06-02 06:38:34', 0),
(13, 'titli', 'daS', 2, 'titlid81@gmail.com', 'TITLIBOTA', 'c5fe25896e49ddfe996db7508cf00534', '1685688219michael-dam-mEZ3PoFGs_k-unsplash.jpg', '2023-06-02 06:41:05', '2023-06-02 06:43:39', 0),
(14, 'ankit', 'dhara', 1, 'ankitdhara8250@gmail.com', 'immortalankit', '25d55ad283aa400af464c76d713c07ad', 'default_profile.jpg', '2023-06-02 06:45:35', '2023-06-02 06:45:35', 0),
(15, 'Koushik', 'Das', 1, 'koushikdas41812@gmail.com', 'koushikdas41812@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'default_profile.jpg', '2023-06-02 06:54:35', '2023-06-02 06:54:35', 0),
(16, 'Souvik', 'Bhattacharjee', 1, 'dragxxx2002@gmail.com', 'DRAGXXx', '45bf61fac4b88870ae707a9e3d12ec5b', 'default_profile.jpg', '2023-06-02 07:38:09', '2023-06-02 07:38:09', 0),
(17, 'koushik', 'das', 1, 'kdas2760@gmail.com', 'koushik', '3fc0a7acf087f549ac2b266baf94b8b1', '1686226463profile pic.jpg', '2023-06-05 05:45:04', '2023-06-08 12:14:23', 0),
(18, 'SOUMYA', 'CHAKRABORTTY', 1, 'soumyachakrabortty5@gmail.com', 'soumya21', '354c215de8f08e60ba786f164bad4110', '1686214568download (1).jpg', '2023-06-08 08:52:30', '2023-06-08 08:56:08', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_feedback`
--
ALTER TABLE `admin_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `block_list`
--
ALTER TABLE `block_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow_list`
--
ALTER TABLE `follow_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `admin_feedback`
--
ALTER TABLE `admin_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `block_list`
--
ALTER TABLE `block_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `follow_list`
--
ALTER TABLE `follow_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
