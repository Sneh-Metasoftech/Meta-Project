-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2024 at 08:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`) VALUES
(1, 'Meta Softech', NULL, '2024-09-24 11:28:42'),
(2, '', NULL, '2024-09-24 18:16:27'),
(3, 'Meta Softech', NULL, '2024-09-24 18:16:43'),
(6, 'Meta Softech', 'bussiness', '2024-09-24 18:22:49'),
(7, '', '', '2024-09-24 18:22:54'),
(8, 'Meta Softech', 'bussiness Head', '2024-09-24 18:24:00'),
(9, '', '', '2024-09-24 18:36:28'),
(10, 'Meta Softech', 'bussiness Head', '2024-09-25 11:20:18'),
(11, '', 'technology', '2024-09-25 13:21:25'),
(12, '', 'technology', '2024-09-25 13:24:55'),
(13, '', 'technology', '2024-09-25 13:26:18'),
(14, '', 'bussiness', '2024-09-27 12:38:48'),
(15, '', '', '2024-09-27 14:56:45'),
(16, '', '', '2024-09-28 12:37:23'),
(17, '', '', '2024-09-28 12:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` enum('pending','approved','rejected','') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Metasoftech', 'e807f1fcf82d132f9bb018ca6738a19f');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `upload_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `author_id` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `slug`, `content`, `author_id`, `category_id`, `featured_image`, `create_at`, `update_at`) VALUES
(8, 'Inext', 'Excellence and Innovation in single touch', 'As we “INEXT SECURITIES AUTOMATION PVT LTD” are pleased to introduce ourselves as the security surveillance system & IT Products Company in India. We are committed towards providing the best of services & solutions through indigenous number of products .We believed in customer\'s satisfaction centric which has helped us in retaining our customer base from the very beginning.\r\nINEXT holds ISO 9001:2008 Certificate under various categories like Installation & Service providers of Security System, Fire Frightening Systems & CCTV Surveillance System & IT Products.\r\nWe are having team of trained engineers to render efficient & timely services to our valued customers.\r\nWe assure to build long term relationships with our customers. Moreover, importantly we ensure you the best interests are always comes first, both on a one to one basis at the company level with service & supports extended through locations across 50+ cities across the country. We promise to give you the best possible support anywhere in India..', 'Metasoftech', 'event', 'con-1.jpg', '2024-09-30 12:02:14', '2024-09-30 13:49:14'),
(10, 'Get answers', ' Find inspiration. Be more productive.', 'It looks like you have provided the HTML and PHP code for a blog post page. There are some areas in the code that can be enhanced for better performance, and there are also a couple of issues that need fixing, particularly the SQL query for fetching the post count for each category.\r\n\r\nHere\'s a summary of improvements and corrections you can apply:', 'Metasoftech', 'technology', '', '2024-10-02 12:03:01', '2024-10-02 12:03:01'),
(11, 'Chatgpt', 'Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.', 'Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.Free to use. Easy to try. Just ask and ChatGPT can help with writing, learning, brainstorming, and more.', 'Metasoftech', 'learning', 'Animation - 1726918357048.gif', '2024-10-02 12:07:40', '2024-10-02 12:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `setting_name` varchar(255) NOT NULL,
  `setting_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD UNIQUE KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
