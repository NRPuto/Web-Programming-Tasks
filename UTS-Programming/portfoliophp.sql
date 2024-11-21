-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 28, 2024 at 03:52 AM
-- Server version: 8.0.36
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfoliophp`
--

-- --------------------------------------------------------

--
-- Table structure for table `full_message`
--

CREATE TABLE `full_message` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `full_message`
--

INSERT INTO `full_message` (`id`, `name`, `email`, `message`, `submitted_at`) VALUES
(1, 'Nathan Rahmavanya', 'wsense911@gmail.com', 'Hallo ini pesan pertama', '2024-10-26 13:22:52'),
(2, 'Zidane Yeather', 'legacy2004@gmail.com', 'Is you like that?', '2024-10-26 13:47:09'),
(3, 'Zidane Yeather', 'legacy2004@gmail.com', 'Hello there buddy!', '2024-10-27 07:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `github_link` varchar(255) DEFAULT NULL,
  `website_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `github_link`, `website_link`) VALUES
(1, 'Regrant', 'At my first hackathon, my team and I faced challenges with secondhand items piling up and creating clutter. Not wanting to waste their potential, we decided to tackle this issue at GarudaHacks. I primarily worked on UI/UX design, contributed to frontend development, and helped improve user interface functionality.', 'https://github.com/luthfibintang/Regrant', 'https://devpost.com/software/regrant'),
(2, 'WaterWise', 'WaterWise is an advanced application that uses artificial intelligence to track and optimize water usage. Created during my second hackathon with a team of four in hackjakarta, the project addressed the track \"Community Resilience.\" The app integrates intuitive UI/UX design to provide a seamless experience while promoting sustainable water practices. I focused on UI/UX design and supported front-end development to ensure timely completion.', 'https://github.com/zizky13/WaterWise', NULL),
(3, 'Class Manager', 'Designed to streamline the management and scheduling of classes, particularly in environments where teachers volunteer on a rotating basis. Has user-friendly interface to provide a clear, organized view of teacher assignments and schedules, allowing administrators to quickly adapt to shifts.', NULL, NULL),
(4, 'Eventour', 'My initial individual project in creating an information system application on mobile devices for the college final project in the \"Mobile Programming\" course. Built using React Native with JavaScript and Firebase, and utilizing Expo as the development platform. The UI/UX was designed based on available time and the inspiration I gathered.', NULL, 'https://github.com/nrpradh/MyAuthApp'),
(5, 'UtoVault', 'UtoVault is an innovative open-source vault designed to streamline the reuse of UI components and layouts. Utilizing React, JavaScript, and TailwindCSS, UtoVault provides a comprehensive toolkit for developers to deploy and manage user interface elements efficiently. The project focuses on enabling rapid deployment and consistent design through reusable components. It addresses challenges in layout design and component management while offering valuable insights and solutions for UI development.', 'https://github.com/nrpradh/UtoVault', 'https://utovault.vercel.app'),
(6, 'Happier, Healthier', 'The project was inspired by my interest in promoting healthy living and is modeled after Eatingwell.com. The idea is to create a blog that provides practical tips and inspiration for a healthier lifestyle, while also allowing people to share their own wellness experiences and insights. Mostly focused on prototyping and flexibility during this mini project.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quick_messages`
--

CREATE TABLE `quick_messages` (
  `id` int NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `quick_messages`
--

INSERT INTO `quick_messages` (`id`, `message`, `submitted_at`) VALUES
(1, 'Dont worry!', '2024-10-26 13:29:59'),
(2, 'Like that', '2024-10-26 13:46:27'),
(5, 'Hello there!', '2024-10-26 13:58:00'),
(8, 'reminder!', '2024-10-27 07:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int NOT NULL,
  `platform` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `platform`, `url`) VALUES
(1, 'Github', 'https://github.com/nrpradh'),
(2, 'Linkedin', 'https://www.linkedin.com/in/nathan-r-pradhana-6b91ba294/'),
(3, 'Instagram', 'https://www.instagram.com/nrpradh'),
(4, 'Email', 'mailto:wsense911@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `points` varchar(50) DEFAULT NULL,
  `id` int NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`points`, `id`, `category`, `description`) VALUES
('Research and Planning', 1, 'User Research', 'Gathering insights about user needs and behaviors through interviews, surveys, and observations to inform design decisions.'),
('Research and Planning', 2, 'Information Architecture', 'Structuring and organizing content to facilitate easy navigation and information retrieval.'),
('Research and Planning', 3, 'User Journey Mapping', 'Visualizing the steps users take to achieve their goals, identifying needs and pain points throughout their journey.'),
('Design and Prototyping', 4, 'Prototyping & Wireframing', 'Creating low-fidelity sketches and interactive models to visualize design concepts and user flows.'),
('Design and Prototyping', 5, 'Interaction Design', 'Designing engaging and intuitive interfaces that enhance user interaction with elements like buttons and forms.'),
('Design and Prototyping', 6, 'Visual Design', 'Crafting the aesthetic aspects of a product, including color, typography, and imagery, to align with brand identity.'),
('Design and Prototyping', 7, 'Accessibility Design', 'Ensuring products are usable by people of all abilities by adhering to accessibility standards.'),
('Design and Prototyping', 8, 'Design Systems', 'Creating reusable components and guidelines to maintain consistency across products.'),
('Testing and Development', 9, 'Usability Testing', 'Evaluating products with real users to identify issues and gather feedback for improvement.'),
('Testing and Development', 10, 'Responsive Design', 'Designing websites to adapt seamlessly to various devices and screen sizes for a consistent user experience.'),
('Testing and Development', 11, 'Performance Optimization', 'Enhancing speed and efficiency of a product through techniques like image optimization and code minimization.'),
('Testing and Development', 12, 'Front-End Development', 'Converting design prototypes into functional web pages using HTML, CSS, and JavaScript.'),
('Testing and Development', 13, 'Feedback and Iteration', 'Continuously collecting user feedback and refining designs to improve usability and meet evolving needs.');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `tooltip` varchar(255) DEFAULT NULL,
  `status` enum('Done','Present','Soon') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `title`, `tooltip`, `status`) VALUES
(1, 'UI/UX', 'Principles, Wireframe, Prototyping.', 'Done'),
(2, 'Basic FE', 'HTML, CSS, Git.', 'Done'),
(3, 'Advanced FE', 'ReactJs & CSS Mastery.', 'Present'),
(4, 'Web Motions', 'GSAP, Lenis, Framer Motion.', 'Soon'),
(5, 'Creative coding', 'MatterJs, P5.Js, Piqnt.', 'Soon'),
(6, 'Complete Backend', 'SSR, Auth, DB, Socket io.', 'Soon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `full_message`
--
ALTER TABLE `full_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quick_messages`
--
ALTER TABLE `quick_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `full_message`
--
ALTER TABLE `full_message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quick_messages`
--
ALTER TABLE `quick_messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
