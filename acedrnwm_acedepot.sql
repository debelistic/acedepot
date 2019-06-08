-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 29, 2019 at 09:35 AM
-- Server version: 10.1.38-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acedrnwm_acedepot`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `id` int(6) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` (`id`, `title`) VALUES
(1, 'I can live in my employer\'s house'),
(2, 'I cannot live in my employer\'s house');

-- --------------------------------------------------------

--
-- Table structure for table `account_verification`
--

CREATE TABLE `account_verification` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `category` int(1) NOT NULL,
  `code` varchar(6) NOT NULL,
  `regdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `age_bracket`
--

CREATE TABLE `age_bracket` (
  `id` int(1) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `age_bracket`
--

INSERT INTO `age_bracket` (`id`, `title`) VALUES
(1, 'Below 18 years'),
(2, '19 &mdash; 25 years'),
(3, '26 &mdash; 30 years'),
(4, '31 &mdash; 45 years'),
(5, 'Above 45 years');

-- --------------------------------------------------------

--
-- Table structure for table `business_sectors`
--

CREATE TABLE `business_sectors` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `img_src` varchar(1500) NOT NULL,
  `approved` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_sectors`
--

INSERT INTO `business_sectors` (`id`, `name`, `description`, `img_src`, `approved`) VALUES
(1, 'Events Centers & Planning', '', '', 1),
(2, 'Lands, Building, Architecture & Design', '', '', 1),
(3, 'Technicians & Technologists', '', '', 1),
(4, 'Power & Energy', '', '', 1),
(5, 'Arts, Music & Entertainment', '', '', 1),
(6, 'Security', '', '', 1),
(7, 'Food Catering & Restaurants', '', '', 1),
(8, 'Beauty & Massage', '', '', 1),
(9, 'Carpentry & Furniture', '', '', 1),
(10, 'Automotive & Transportation', '', '', 1),
(11, 'Goods Supply', '', '', 1),
(12, 'Borehole & Sewage', '', '', 1),
(13, 'IT & Photography', '', '', 1),
(14, 'Education, Training & Research', '', '', 1),
(15, 'Sewing, Tailoring & Styling', '', '', 1),
(16, 'House Keeping & Cleaning', '', '', 1),
(17, 'Engineering & Law', '', '', 1),
(18, 'Travel & Hospitality', '', '', 1),
(19, 'Printing, Branding, Packaging & Publishing', '', '', 1),
(20, 'Domestic Staffing', '', '', 1),
(21, 'Non-Governmental Oorganizations', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `regdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `username`, `password`, `firstname`, `lastname`, `phone`, `regdate`) VALUES
(5, 'frankodaokons@yahoo.com', 'dcfccddb6567d33ca68e4da0eecb526dd1eb3010', 'Franklin', 'Okoro', '07035202509', '2018-10-21 15:52:55'),
(6, 'anouar.15@yahoo.com', '7f9d5ae33533e7195e6c5e01833306978b1a49e4', 'Akajhakjh', 'Sklssjks', '21261107188', '2019-01-28 09:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_applications`
--

CREATE TABLE `candidate_applications` (
  `id` int(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `job` int(8) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `endorsement` int(1) NOT NULL DEFAULT '0',
  `rating` int(1) NOT NULL,
  `regdate` datetime NOT NULL,
  `completed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_guarantors`
--

CREATE TABLE `candidate_guarantors` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `organization` varchar(80) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_guarantor_documents`
--

CREATE TABLE `candidate_guarantor_documents` (
  `id` int(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `document_id` int(8) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_guarantor_documents`
--

INSERT INTO `candidate_guarantor_documents` (`id`, `username`, `document_id`, `url`) VALUES
(1, 'kanu.ugochukwu@livenetglobal.com.ng', 1, '356a192b7913b04c54574d18c28d46e6395428aa'),
(2, 'kanu.ugochukwu@livenetglobal.com.ng', 2, '356a192b7913b04c54574d18c28d46e6395428ac');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_jobs`
--

CREATE TABLE `candidate_jobs` (
  `id` int(6) NOT NULL,
  `id2` varchar(8) NOT NULL,
  `company` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `job_sector` int(3) NOT NULL,
  `location` varchar(50) NOT NULL,
  `lga` int(3) NOT NULL,
  `job_category` int(3) NOT NULL,
  `job_type` int(3) NOT NULL,
  `required_skills` text NOT NULL,
  `gender` int(1) NOT NULL,
  `experience` int(2) NOT NULL,
  `salary_range` int(2) NOT NULL,
  `min_qualification` int(2) NOT NULL,
  `experience_description` text NOT NULL,
  `regdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_preferences`
--

CREATE TABLE `candidate_preferences` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `state` int(2) NOT NULL,
  `lga` int(3) NOT NULL,
  `title` int(1) NOT NULL,
  `age` int(1) NOT NULL,
  `language_proficiency` int(1) NOT NULL,
  `religion` int(1) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(11) NOT NULL,
  `lga2` int(3) NOT NULL,
  `city` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `job_category` int(2) NOT NULL,
  `location` int(2) NOT NULL,
  `jobs` text NOT NULL,
  `expertize` text NOT NULL,
  `job_style` int(2) NOT NULL,
  `job_salary` int(1) NOT NULL,
  `accommodation` int(1) NOT NULL,
  `regdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_preferences`
--

INSERT INTO `candidate_preferences` (`id`, `username`, `state`, `lga`, `title`, `age`, `language_proficiency`, `religion`, `address`, `phone`, `lga2`, `city`, `facebook`, `linkedin`, `job_category`, `location`, `jobs`, `expertize`, `job_style`, `job_salary`, `accommodation`, `regdate`) VALUES
(5, 'ucheelenu@yahoo.com', 3, 7, 2, 2, 2, 3, '4 Emeka Close, Aba, Abia State', '08060936842', 689, 'Port Harcourt', '', '', 2, 3, 'I can do all things Christ', 'I can do all things Christ', 1, 3, 2, '2018-09-04 00:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_qualifications`
--

CREATE TABLE `candidate_qualifications` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `degree` int(1) NOT NULL,
  `school` varchar(80) NOT NULL,
  `course` varchar(80) NOT NULL,
  `start_year` int(4) NOT NULL,
  `end_year` int(4) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_qualifications`
--

INSERT INTO `candidate_qualifications` (`id`, `username`, `degree`, `school`, `course`, `start_year`, `end_year`, `description`) VALUES
(1, 'kanu.ugochukwu@livenetglobal.com.ng', 3, 'Federal University Of Technology, Owerri', 'Information Management Technology', 2007, 2012, 'I explored the fields of database management, programming, computer networking and general management principles'),
(6, 'kanu.ugochukwu@livenetglobal.com.ng', 2, 'Tallin University Of Technology, Estonia', 'Software Engineering', 2015, 2017, 'I learnt the intermediate skills needed for the development and deployment of software systems.'),
(7, 'kanu.ugochukwu@livenetglobal.com.ng', 6, 'Holy Family Secondary School, Aba', 'West African Senior School Certificate Examination', 2000, 2006, 'Gained the skills required to work in a computer servicing organization and discharge my duties effectively'),
(9, 'kanu.ugochukwu@livenetglobal.com.ng', 7, 'St Thomas Primary School, Ekeakpara', 'First School Leaving Certificate', 1994, 2000, 'I explored the fields of database management, programming, computer networking and general management principles');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_qualification_documents`
--

CREATE TABLE `candidate_qualification_documents` (
  `id` int(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `document_id` int(8) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_qualification_documents`
--

INSERT INTO `candidate_qualification_documents` (`id`, `username`, `document_id`, `url`) VALUES
(1, 'kanu.ugochukwu@livenetglobal.com.ng', 1, '356a192b7913b04c54574d18c28d46e6395428ab');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_ranking`
--

CREATE TABLE `candidate_ranking` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rank` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_ranking`
--

INSERT INTO `candidate_ranking` (`id`, `username`, `rank`) VALUES
(1, 'kanu.ugochukwu@livenetglobal.com.ng', 67);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_salary`
--

CREATE TABLE `candidate_salary` (
  `id` int(2) NOT NULL,
  `amount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_salary`
--

INSERT INTO `candidate_salary` (`id`, `amount`) VALUES
(1, 'Less than N20,000'),
(2, 'N20,000 &mdash; N30,000'),
(3, 'N30,000 &mdash; N50,000'),
(4, 'N50,000 &mdash; N100,000'),
(5, 'N100,000 &mdash; N200,000'),
(6, 'More than N200,000'),
(7, 'Confidential');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_skills`
--

CREATE TABLE `candidate_skills` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `organization` varchar(80) NOT NULL,
  `certificate` varchar(50) NOT NULL,
  `year` int(4) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_skills`
--

INSERT INTO `candidate_skills` (`id`, `username`, `organization`, `certificate`, `year`, `description`) VALUES
(1, 'kanu.ugochukwu@livenetglobal.com.ng', 'Cisco Academy', 'CCNA', 2015, 'Learnt the basic of home and office networking, routing and switching, LAN configurations, etc'),
(2, 'kanu.ugochukwu@livenetglobal.com.ng', 'Nigerian Institute of Management', 'NIM Basic Certification', 2007, 'Description here');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_skill_documents`
--

CREATE TABLE `candidate_skill_documents` (
  `id` int(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `document_id` int(8) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_skill_documents`
--

INSERT INTO `candidate_skill_documents` (`id`, `username`, `document_id`, `url`) VALUES
(1, 'kanu.ugochukwu@livenetglobal.com.ng', 1, '356a192b7913b04c54574d18c28d46e6395428aa'),
(2, 'kanu.ugochukwu@livenetglobal.com.ng', 2, '356a192b7913b04c54574d18c28d46e6395428ac');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_work_experience`
--

CREATE TABLE `candidate_work_experience` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `company` varchar(80) NOT NULL,
  `position` varchar(50) NOT NULL,
  `start_year` int(4) NOT NULL,
  `end_year` int(4) NOT NULL,
  `duties` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_work_experience`
--

INSERT INTO `candidate_work_experience` (`id`, `username`, `company`, `position`, `start_year`, `end_year`, `duties`) VALUES
(1, 'kanu.ugochukwu@livenetglobal.com.ng', 'LiveNET System Limited, Port Harcourt', 'Managing Director', 2007, 2012, 'Worked as the general manager of the company. My official duties included overseeing the affairs of the company.'),
(2, 'kanu.ugochukwu@livenetglobal.com.ng', 'Federal Inland Revenue Service', 'Account Officer', 2007, 2012, 'Gained practical experiences in programming, web design and web application development, database management, graphics design, computer networking, etc.[200 xters max]'),
(3, 'kanu.ugochukwu@livenetglobal.com.ng', 'Genesis Group Nigeria Limited', 'Sales Supervisor', 2016, 2017, 'Skills in planning urban and regional centers and other forms of planning');

-- --------------------------------------------------------

--
-- Table structure for table `contractor`
--

CREATE TABLE `contractor` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `regdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractor`
--

INSERT INTO `contractor` (`id`, `username`, `password`, `firstname`, `lastname`, `phone`, `regdate`) VALUES
(1, 'kanu_cclinton@yahoo.com', '4f26aeafdb2367620a393c973eddbe8f8b846ebd', 'Emeka', 'Ehiogu', '08060936842', '2018-03-13 09:22:25'),
(2, 'kanuclinton@yahoo.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Kanu', 'Clinton', '08060936842', '2018-03-09 11:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `contractor_applications`
--

CREATE TABLE `contractor_applications` (
  `id` int(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `job` varchar(8) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `endorsement` int(1) NOT NULL DEFAULT '0',
  `rating` int(1) NOT NULL,
  `regdate` datetime NOT NULL,
  `completed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractor_applications`
--

INSERT INTO `contractor_applications` (`id`, `username`, `job`, `status`, `endorsement`, `rating`, `regdate`, `completed`) VALUES
(6, 'kanu.ugochukwu@livenetglobal.com.ng', '21474199', 3, 0, 0, '2018-03-24 20:12:13', '0000-00-00 00:00:00'),
(7, 'kanu.ugochukwu@livenetglobal.com.ng', '21474848', 3, 2, 0, '2018-03-24 20:13:40', '0000-00-00 00:00:00'),
(8, 'kanu.ugochukwu@livenetglobal.com.ng', '21474847', 1, 0, 0, '2018-03-24 20:15:33', '0000-00-00 00:00:00'),
(9, 'kanu.ugochukwu@livenetglobal.com.ng', '22874111', 1, 0, 0, '2018-03-28 23:04:56', '0000-00-00 00:00:00'),
(19, 'kanu_cclinton@yahoo.com', '21474848', 2, 0, 0, '2018-10-08 18:55:14', '0000-00-00 00:00:00'),
(21, 'kanu_cclinton@yahoo.com', '21474199', 0, 0, 0, '2018-10-08 19:42:29', '0000-00-00 00:00:00'),
(22, 'kanu_cclinton@yahoo.com', '22874111', 0, 0, 0, '2018-10-08 23:53:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contractor_jobs`
--

CREATE TABLE `contractor_jobs` (
  `id` int(6) NOT NULL,
  `id2` varchar(8) NOT NULL,
  `company` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `job_sector` int(3) NOT NULL,
  `location` varchar(50) NOT NULL,
  `lga` int(3) NOT NULL,
  `job_category` int(3) NOT NULL,
  `job_type` int(3) NOT NULL,
  `required_skills` text NOT NULL,
  `responsibilities` text NOT NULL,
  `project_start` date NOT NULL,
  `project_end` date NOT NULL,
  `terms` text NOT NULL,
  `regdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contractor_job_images`
--

CREATE TABLE `contractor_job_images` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `job_id` int(6) NOT NULL,
  `title` varchar(100) NOT NULL,
  `regdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractor_job_images`
--

INSERT INTO `contractor_job_images` (`id`, `username`, `job_id`, `title`, `regdate`) VALUES
(1, 'kanu@yahoo.com', 0, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contractor_preferences`
--

CREATE TABLE `contractor_preferences` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `registration_number` varchar(20) NOT NULL,
  `business_sector` int(3) NOT NULL,
  `business_nature` varchar(100) NOT NULL,
  `business_specialization` text NOT NULL,
  `about` text NOT NULL,
  `representative_name` varchar(50) NOT NULL,
  `representative_position` varchar(30) NOT NULL,
  `business_address` varchar(100) NOT NULL,
  `house_number` varchar(50) NOT NULL,
  `street_name` varchar(50) NOT NULL,
  `state` int(2) NOT NULL,
  `lga` int(3) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `regdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractor_preferences`
--

INSERT INTO `contractor_preferences` (`id`, `username`, `business_name`, `registration_number`, `business_sector`, `business_nature`, `business_specialization`, `about`, `representative_name`, `representative_position`, `business_address`, `house_number`, `street_name`, `state`, `lga`, `zone`, `regdate`) VALUES
(1, 'kanuclinton@yahoo.com', 'LiveNET System Limited', 'RC2007157002', 1, 'Web design, web application development, graphics design', 'Web design, web application development, graphics design', 'Web design, web application development, graphics design', 'Kanu Chukwuma', 'Managing Director', '183 Okporo Road, Rumuodara,Port Harcourt, Rivers State', 'D100', 'Odukem Street', 33, 12, '689', '0000-00-00 00:00:00'),
(5, 'kanu_cclinton@yahoo.com', 'livenet system limited', 'Rc 6476667', 4, 'GENERAL CONTRACTS', 'GENERAL CONTRACTS', 'GENERAL CONTRACTS', 'Emeka Ehiogu', 'Managers Manager', '4 Emeka Close, Aba, Abia State', 'jksd', 'klklk', 22, 452, '500102', '2018-10-08 12:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `contractor_subscriptions`
--

CREATE TABLE `contractor_subscriptions` (
  `id` int(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `startme` datetime NOT NULL,
  `endme` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`id`, `title`) VALUES
(1, 'Doctorate degree (Ph.D)'),
(2, 'Masters Degree (M.Sc)'),
(3, 'Bachelors Degree (B.Sc)'),
(4, 'HND'),
(5, 'OND/NCE'),
(6, 'WAEC/NECO/GCE'),
(7, 'School Cert');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `registration_number` varchar(20) NOT NULL,
  `business_sector` int(3) NOT NULL,
  `business_nature` varchar(100) NOT NULL,
  `business_specialization` text NOT NULL,
  `about` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `representative_name` varchar(50) NOT NULL,
  `representative_position` varchar(30) NOT NULL,
  `business_address` varchar(100) NOT NULL,
  `house_number` varchar(50) NOT NULL,
  `street_name` varchar(50) NOT NULL,
  `state` int(2) NOT NULL,
  `lga` int(3) NOT NULL,
  `zone` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `username`, `password`, `business_name`, `registration_number`, `business_sector`, `business_nature`, `business_specialization`, `about`, `website`, `phone`, `representative_name`, `representative_position`, `business_address`, `house_number`, `street_name`, `state`, `lga`, `zone`) VALUES
(1, 'info@livenetglobal.com', 'ruggedman', 'LiveNET System Limited', 'RC2007157002', 3, 'Web design, web application development, graphics design', 'Web design, web application development, graphics design', 'Web design, web application development, graphics design', 'www.livenet.com.ng', '08060936842', 'Kanu Clinton', 'Managing Director', '183 Okporo Road, Rumuodara, Port Harcourt', '', '', 1, 12, 22),
(2, 'infox@livenetglobal.com', 'ruggedman', 'LiveNET System Limited', 'RC2007157002', 3, 'Web design, web application development, graphics design', 'Web design, web application development, graphics design', 'Web design, web application development, graphics design', 'www.livenet.com.ng', '08060936842', 'Kanu Clinton', 'Managing Director', '183 Okporo Road, Rumuodara,Port Harcourt', '', '', 1, 12, 22);

-- --------------------------------------------------------

--
-- Table structure for table `english_proficiency`
--

CREATE TABLE `english_proficiency` (
  `id` int(2) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `english_proficiency`
--

INSERT INTO `english_proficiency` (`id`, `remark`) VALUES
(1, 'Fluent in the use of English'),
(2, 'Fairly fluent in the use of English'),
(3, 'Very fluent in the use of English'),
(4, 'Not fluent in the use of English');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(2) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `title`) VALUES
(1, 'No experience'),
(2, '1 &mdash; 2 years'),
(3, '3 &mdash; 5 years'),
(4, '5 &mdash; 10 years'),
(5, 'Above 10 years');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(2) NOT NULL,
  `title` varchar(100) NOT NULL,
  `stat` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `title`, `stat`) VALUES
(1, 'TV', 22),
(2, 'Social media', 14),
(3, 'In the post', 4),
(4, 'Newspaper', 6),
(5, 'Bill board', 82),
(6, 'Radio', 12),
(7, 'From a friend', 128),
(8, 'Bills', 0),
(9, 'Others', 88),
(10, 'Magazine', 16),
(11, 'Search engine', 6);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `name`) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'Both male and female');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(4) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `heading` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `help_headings`
--

CREATE TABLE `help_headings` (
  `id` int(2) NOT NULL,
  `title` varchar(40) NOT NULL,
  `code` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int(2) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `title`) VALUES
(1, 'Domestic'),
(2, 'Commercial'),
(3, 'Domestic/Commercial');

-- --------------------------------------------------------

--
-- Table structure for table `job_style`
--

CREATE TABLE `job_style` (
  `id` int(2) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_style`
--

INSERT INTO `job_style` (`id`, `title`) VALUES
(1, 'Full time'),
(2, 'Part-time'),
(3, 'Temporary'),
(4, 'Contract'),
(5, 'Commission'),
(6, 'Apprenticeship'),
(7, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `local_governments`
--

CREATE TABLE `local_governments` (
  `id` int(4) NOT NULL,
  `state_id` int(2) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `local_governments`
--

INSERT INTO `local_governments` (`id`, `state_id`, `name`) VALUES
(1, 2, 'Abaji'),
(2, 2, 'Abuja Municipa'),
(3, 2, 'Bwari'),
(4, 2, 'Gwagwalada'),
(5, 2, 'Kuje'),
(6, 2, 'Kwali'),
(7, 1, 'Aba North'),
(8, 1, 'Aba South'),
(9, 1, 'Arochukwu'),
(10, 1, 'Bende'),
(11, 1, 'Ikwuano'),
(12, 1, 'Isiala-Ngwa North'),
(13, 1, 'Isiala-Ngwa South'),
(14, 1, 'Isuikwato'),
(15, 1, 'Obi Nwa'),
(16, 1, 'Ohafia'),
(17, 1, 'Osisioma'),
(18, 1, 'Ngwa'),
(19, 1, 'Ugwunagbo'),
(20, 1, 'Ukwa East'),
(21, 1, 'Ukwa West'),
(22, 1, 'Umuahia North'),
(23, 1, 'Umuahia South'),
(24, 1, 'Umu-Neochi'),
(25, 3, 'Demsa'),
(26, 3, 'Fufore'),
(27, 3, 'Ganaye'),
(28, 3, 'Gireri'),
(29, 3, 'Gombi'),
(30, 3, 'Guyuk'),
(31, 3, 'Hong'),
(32, 3, 'Jada'),
(33, 3, 'Lamurde'),
(34, 3, 'Madagali'),
(35, 3, 'Maiha'),
(36, 3, 'Mayo-Belwa'),
(37, 3, 'Michika'),
(38, 3, 'Mubi North'),
(39, 3, 'Mubi South'),
(40, 3, 'Numan'),
(41, 3, 'Shelleng'),
(42, 3, 'Song'),
(43, 3, 'Toungo'),
(44, 3, 'Yola North'),
(45, 3, 'Yola South'),
(46, 4, 'Abak'),
(47, 4, 'Eastern Obolo'),
(48, 4, 'Eket'),
(49, 4, 'Esit Eket'),
(50, 4, 'Essien Udim'),
(51, 4, 'Etim Ekpo'),
(52, 4, 'Etinan'),
(53, 4, 'Ibeno'),
(54, 4, 'Ibesikpo Asutan'),
(55, 4, 'Ibiono Ibom'),
(56, 4, 'Ika'),
(57, 4, 'Ikono'),
(58, 4, 'Ikot Abasi'),
(59, 4, 'Ikot Ekpene'),
(60, 4, 'Ini'),
(61, 4, 'Itu'),
(62, 4, 'Mbo'),
(63, 4, 'Mkpat Enin'),
(64, 4, 'Nsit Atai'),
(65, 4, 'Nsit Ibom'),
(66, 4, 'Nsit Ubium'),
(67, 4, 'Obot Akara'),
(68, 4, 'Okobo'),
(69, 4, 'Onna'),
(70, 4, 'Oron'),
(71, 4, 'Oruk Anam'),
(72, 4, 'Udung Uko'),
(73, 4, 'Ukanafun'),
(74, 4, 'Uruan'),
(75, 4, 'Urue-Offong/Oruko'),
(76, 4, 'Uyo'),
(77, 5, 'Aguata'),
(78, 5, 'Anambra East'),
(79, 5, 'Anambra West'),
(80, 5, 'Anaocha'),
(81, 5, 'Awka North'),
(82, 5, 'Awka South'),
(83, 5, 'Ayamelum'),
(84, 5, 'Dunukofia'),
(85, 5, 'Ekwusigo'),
(86, 5, 'Idemili North'),
(87, 5, 'Idemili south'),
(88, 5, 'Ihiala'),
(89, 5, 'Njikoka'),
(90, 5, 'Nnewi North'),
(91, 5, 'Nnewi South'),
(92, 5, 'Ogbaru'),
(93, 5, 'Onitsha North'),
(94, 5, 'Onitsha South'),
(95, 5, 'Orumba North'),
(96, 5, 'Orumba South'),
(97, 5, 'Oyi'),
(98, 6, 'Alkaleri'),
(99, 6, 'Bauchi'),
(100, 6, 'Bogoro'),
(101, 6, 'Damban'),
(102, 6, 'Darazo'),
(103, 6, 'Dass'),
(104, 6, 'Ganjuwa'),
(105, 6, 'Giade'),
(106, 6, 'Itas/Gadau'),
(107, 6, 'Jama\'are'),
(108, 6, 'Katagum'),
(109, 6, 'Kirfi'),
(110, 6, 'Misau'),
(111, 6, 'Ningi'),
(112, 6, 'Shira'),
(113, 6, 'Tafawa-Balewa'),
(114, 6, 'Toro'),
(115, 6, 'Warji'),
(116, 6, 'Zaki'),
(117, 7, 'Brass'),
(118, 7, 'Ekeremor'),
(119, 7, 'Kolokuma/Opokuma'),
(120, 7, 'Nembe'),
(121, 7, 'Ogbia'),
(122, 7, 'Sagbama'),
(123, 7, 'Southern Jaw'),
(124, 7, 'Yenegoa'),
(125, 8, 'Ado'),
(126, 8, 'Agatu'),
(127, 8, 'Apa'),
(128, 8, 'Buruku'),
(129, 8, 'Gboko'),
(130, 8, 'Guma'),
(131, 8, 'Gwer East'),
(132, 8, 'Gwer West'),
(133, 8, 'Katsina-Ala'),
(134, 8, 'Konshisha'),
(135, 8, 'Kwande'),
(136, 8, 'Logo'),
(137, 8, 'Makurdi'),
(138, 8, 'Obi'),
(139, 8, 'Ogbadibo'),
(140, 8, 'Oju'),
(141, 8, 'Okpokwu'),
(142, 8, 'Ohimini'),
(143, 8, 'Oturkpo'),
(144, 8, 'Tarka'),
(145, 8, 'Ukum'),
(146, 8, 'Ushongo'),
(147, 8, 'Vandeikya'),
(148, 9, 'Abadam'),
(149, 9, 'Askira/Uba'),
(150, 9, 'Bama'),
(151, 9, 'Bayo'),
(152, 9, 'Biu'),
(153, 9, 'Chibok'),
(154, 9, 'Damboa'),
(155, 9, 'Dikwa'),
(156, 9, 'Gubio'),
(157, 9, 'Guzamala'),
(158, 9, 'Gwoza'),
(159, 9, 'Hawul'),
(160, 9, 'Jere'),
(161, 9, 'Kaga'),
(162, 9, 'Kala/Balge'),
(163, 9, 'Konduga'),
(164, 9, 'Kukawa'),
(165, 9, 'Kwaya Kusar'),
(166, 9, 'Mafa'),
(167, 9, 'Magumeri'),
(168, 9, 'Maiduguri'),
(169, 9, 'Marte'),
(170, 9, 'Mobbar'),
(171, 9, 'Monguno'),
(172, 9, 'Ngala'),
(173, 9, 'Nganzai'),
(174, 9, 'Shani'),
(175, 10, 'Akpabuyo'),
(176, 10, 'Odukpani'),
(177, 10, 'Akamkpa'),
(178, 10, 'Biase'),
(179, 10, 'Abi'),
(180, 10, 'Ikom'),
(181, 10, 'Yarkur'),
(182, 10, 'Odubra'),
(183, 10, 'Boki'),
(184, 10, 'Ogoja'),
(185, 10, 'Yala'),
(186, 10, 'Obanliku'),
(187, 10, 'Obudu'),
(188, 10, 'Calabar South'),
(189, 10, 'Etung'),
(190, 10, 'Bekwara'),
(191, 10, 'Bakassi'),
(192, 10, 'Calabar Municipality'),
(193, 11, 'Oshimili'),
(194, 11, 'Aniocha'),
(195, 11, 'Aniocha South'),
(196, 11, 'Ika South'),
(197, 11, 'Ika North-East'),
(198, 11, 'Ndokwa West'),
(199, 11, 'Ndokwa East'),
(200, 11, 'Isoko south'),
(201, 11, 'Isoko North'),
(202, 11, 'Bomadi'),
(203, 11, 'Burutu'),
(204, 11, 'Ughelli South'),
(205, 11, 'Ughelli North'),
(206, 11, 'Ethiope West'),
(207, 11, 'Ethiope East'),
(208, 11, 'Sapele'),
(209, 11, 'Okpe'),
(210, 11, 'Warri North'),
(211, 11, 'Warri South'),
(212, 11, 'Uvwie'),
(213, 11, 'Udu'),
(214, 11, 'Warri Central'),
(215, 11, 'Ukwani'),
(216, 11, 'Oshimili North'),
(217, 11, 'Patani'),
(218, 12, 'Afikpo South'),
(219, 12, 'Afikpo North'),
(220, 12, 'Onicha'),
(221, 12, 'Ohaozara'),
(222, 12, 'Abakaliki'),
(223, 12, 'Ishielu'),
(224, 12, 'lkwo'),
(225, 12, 'Ezza'),
(226, 12, 'Ezza South'),
(227, 12, 'Ohaukwu'),
(228, 12, 'Ebonyi'),
(229, 12, 'Ivo'),
(230, 13, 'Esan North-East'),
(231, 13, 'Esan Central'),
(232, 13, 'Esan West'),
(233, 13, 'Egor'),
(234, 13, 'Ukpoba'),
(235, 13, 'Central'),
(236, 13, 'Etsako Central'),
(237, 13, 'Igueben'),
(238, 13, 'Oredo'),
(239, 13, 'Ovia SouthWest'),
(240, 13, 'Ovia South-East'),
(241, 13, 'Orhionwon'),
(242, 13, 'Uhunmwonde'),
(243, 13, 'Etsako East'),
(244, 13, 'Esan South-East'),
(245, 14, 'Ado'),
(246, 14, 'Ekiti-East'),
(247, 14, 'Ekiti-West'),
(248, 14, 'Emure/Ise/Orun'),
(249, 14, 'Ekiti South-West'),
(250, 14, 'Ikare'),
(251, 14, 'Irepodun'),
(252, 14, 'Ijero'),
(253, 14, 'Ido/Osi'),
(254, 14, 'Oye'),
(255, 14, 'Ikole'),
(256, 14, 'Moba'),
(257, 14, 'Gbonyin'),
(258, 14, 'Efon'),
(259, 14, 'Ise/Orun'),
(260, 14, 'Ilejemeje'),
(261, 15, 'Enugu South'),
(262, 15, 'Igbo-Eze South'),
(263, 15, 'Enugu North'),
(264, 15, 'Nkanu'),
(265, 15, 'Udi Agwu'),
(266, 15, 'Oji-River'),
(267, 15, 'Ezeagu'),
(268, 15, 'IgboEze North'),
(269, 15, 'Isi-Uzo'),
(270, 15, 'Nsukka'),
(271, 15, 'Igbo-Ekiti'),
(272, 15, 'Uzo-Uwani'),
(273, 15, 'Enugu East'),
(274, 15, 'Aninri'),
(275, 15, 'Nkanu East'),
(276, 15, 'Udenu'),
(277, 16, 'Akko'),
(278, 16, 'Balanga'),
(279, 16, 'Billiri'),
(280, 16, 'Dukku'),
(281, 16, 'Kaltungo'),
(282, 16, 'Kwami'),
(283, 16, 'Shomgom'),
(284, 16, 'Funakaye'),
(285, 16, 'Gombe'),
(286, 16, 'Nafada/Bajoga'),
(287, 16, 'Yamaltu/Delta'),
(288, 17, 'Aboh-Mbaise'),
(289, 17, 'Ahiazu-Mbaise'),
(290, 17, 'Ehime-Mbano'),
(291, 17, 'Ezinihitte'),
(292, 17, 'Ideato North'),
(293, 17, 'Ideato South'),
(294, 17, 'Ihitte/Uboma'),
(295, 17, 'Ikeduru'),
(296, 17, 'Isiala Mbano'),
(297, 17, 'Isu'),
(298, 17, 'Mbaitoli'),
(299, 17, 'Ngor-Okpala'),
(300, 17, 'Njaba'),
(301, 17, 'Nwangele'),
(302, 17, 'Nkwerre'),
(303, 17, 'Obowo'),
(304, 17, 'Oguta'),
(305, 17, 'Ohaji/Egbema'),
(306, 17, 'Okigwe'),
(307, 17, 'Orlu'),
(308, 17, 'Orsu'),
(309, 17, 'Oru East'),
(310, 17, 'Oru West'),
(311, 17, 'Owerri-Municipal'),
(312, 17, 'Owerri North'),
(313, 17, 'Owerri West'),
(314, 18, 'Auyo'),
(315, 18, 'Babura'),
(316, 18, 'Birni Kudu'),
(317, 18, 'Biriniwa'),
(318, 18, 'Buji'),
(319, 18, 'Dutse'),
(320, 18, 'Gagarawa'),
(321, 18, 'Garki'),
(322, 18, 'Gumel'),
(323, 18, 'Guri'),
(324, 18, 'Gwaram'),
(325, 18, 'Gwiwa'),
(326, 18, 'Hadejia'),
(327, 18, 'Jahun'),
(328, 18, 'Kafin Hausa'),
(329, 18, 'Kaugama Kazaure'),
(330, 18, 'Kiri Kasamma'),
(331, 18, 'Kiyawa'),
(332, 18, 'Maigatari'),
(333, 18, 'Malam Madori'),
(334, 18, 'Miga'),
(335, 18, 'Ringim'),
(336, 18, 'Roni'),
(337, 18, 'Sule-Tankarkar'),
(338, 18, 'Taura'),
(339, 18, 'Yankwashi'),
(340, 19, 'Birni-Gwari'),
(341, 19, 'Chikun'),
(342, 19, 'Giwa'),
(343, 19, 'Igabi'),
(344, 19, 'Ikara'),
(345, 19, 'jaba'),
(346, 19, 'Jema\'a'),
(347, 19, 'Kachia'),
(348, 19, 'Kaduna North'),
(349, 19, 'Kaduna South'),
(350, 19, 'Kagarko'),
(351, 19, 'Kajuru'),
(352, 19, 'Kaura'),
(353, 19, 'Kauru'),
(354, 19, 'Kubau'),
(355, 19, 'Kudan'),
(356, 19, 'Lere'),
(357, 19, 'Makarfi'),
(358, 19, 'Sabon-Gari'),
(359, 19, 'Sanga'),
(360, 19, 'Soba'),
(361, 19, 'Zango-Kataf'),
(362, 19, 'Zaria'),
(363, 20, 'Ajingi'),
(364, 20, 'Albasu'),
(365, 20, 'Bagwai'),
(366, 20, 'Bebeji'),
(367, 20, 'Bichi'),
(368, 20, 'Bunkure'),
(369, 20, 'Dala'),
(370, 20, 'Dambatta'),
(371, 20, 'Dawakin Kudu'),
(372, 20, 'Dawakin Tofa'),
(373, 20, 'Doguwa'),
(374, 20, 'Fagge'),
(375, 20, 'Gabasawa'),
(376, 20, 'Garko'),
(377, 20, 'Garum'),
(378, 20, 'Mallam'),
(379, 20, 'Gaya'),
(380, 20, 'Gezawa'),
(381, 20, 'Gwale'),
(382, 20, 'Gwarzo'),
(383, 20, 'Kabo'),
(384, 20, 'Kano Municipal'),
(385, 20, 'Karaye'),
(386, 20, 'Kibiya'),
(387, 20, 'Kiru'),
(388, 20, 'kumbotso'),
(389, 20, 'Kunchi'),
(390, 20, 'Kura'),
(391, 20, 'Madobi'),
(392, 20, 'Makoda'),
(393, 20, 'Minjibir'),
(394, 20, 'Nasarawa'),
(395, 20, 'Rano'),
(396, 20, 'Rimin Gado'),
(397, 20, 'Rogo'),
(398, 20, 'Shanono'),
(399, 20, 'Sumaila'),
(400, 20, 'Takali'),
(401, 20, 'Tarauni'),
(402, 20, 'Tofa'),
(403, 20, 'Tsanyawa'),
(404, 20, 'Tudun Wada'),
(405, 20, 'Ungogo'),
(406, 20, 'Warawa'),
(407, 20, 'Wudil'),
(408, 21, 'Bakori'),
(409, 21, 'Batagarawa'),
(410, 21, 'Batsari'),
(411, 21, 'Baure'),
(412, 21, 'Bindawa'),
(413, 21, 'Charanchi'),
(414, 21, 'Dandume'),
(415, 21, 'Danja'),
(416, 21, 'Dan Musa'),
(417, 21, 'Daura'),
(418, 21, 'Dutsi'),
(419, 21, 'Dutsin-Ma'),
(420, 21, 'Faskari'),
(421, 21, 'Funtua'),
(422, 21, 'Ingawa'),
(423, 21, 'Jibia'),
(424, 21, 'Kafur'),
(425, 21, 'Kaita'),
(426, 21, 'Kankara'),
(427, 21, 'Kankia'),
(428, 21, 'Katsina'),
(429, 21, 'Kurfi'),
(430, 21, 'Kusada'),
(431, 21, 'Mai\'Adua'),
(432, 21, 'Malumfashi'),
(433, 21, 'Mani'),
(434, 21, 'Mashi'),
(435, 21, 'Matazuu'),
(436, 21, 'Musawa'),
(437, 21, 'Rimi'),
(438, 21, 'Sabuwa'),
(439, 21, 'Safana'),
(440, 21, 'Sandamu'),
(441, 21, 'Zango'),
(442, 22, 'Aleiro'),
(443, 22, 'Arewa-Dandi'),
(444, 22, 'Argungu'),
(445, 22, 'Augie'),
(446, 22, 'Bagudo'),
(447, 22, 'Birnin Kebbi'),
(448, 22, 'Bunza'),
(449, 22, 'Dandi'),
(450, 22, 'Fakai'),
(451, 22, 'Gwandu'),
(452, 22, 'Jega'),
(453, 22, 'Kalgo'),
(454, 22, 'Koko/Besse'),
(455, 22, 'Maiyama'),
(456, 22, 'Ngaski'),
(457, 22, 'Sakaba'),
(458, 22, 'Shanga'),
(459, 22, 'Suru'),
(460, 22, 'Wasagu/Danko'),
(461, 22, 'Yauri'),
(462, 22, 'Zuru'),
(463, 23, 'Adavi'),
(464, 23, 'Ajaokuta'),
(465, 23, 'Ankpa'),
(466, 23, 'Bassa'),
(467, 23, 'Dekina'),
(468, 23, 'Ibaji'),
(469, 23, 'Idah'),
(470, 23, 'Igalamela-Odolu'),
(471, 23, 'Ijumu'),
(472, 23, 'Kabba/Bunu'),
(473, 23, 'Kogi'),
(474, 23, 'Lokoja'),
(475, 23, 'Mopa-Muro'),
(476, 23, 'Ofu'),
(477, 23, 'Ogori/Mangongo'),
(478, 23, 'Okehi'),
(479, 23, 'Okene'),
(480, 23, 'Olamabolo'),
(481, 23, 'Omala'),
(482, 23, 'Yagba East'),
(483, 23, 'Yagba West'),
(484, 24, 'Asa'),
(485, 24, 'Baruten'),
(486, 24, 'Edu'),
(487, 24, 'Ekiti'),
(488, 24, 'Ifelodun'),
(489, 24, 'Ilorin East'),
(490, 24, 'Ilorin West'),
(491, 24, 'Irepodun'),
(492, 24, 'Isin'),
(493, 24, 'Kaiama'),
(494, 24, 'Moro'),
(495, 24, 'Offa'),
(496, 24, 'Oke-Ero'),
(497, 24, 'Oyun'),
(498, 24, 'Pategi'),
(499, 25, 'Agege'),
(500, 25, 'Ajeromi-Ifelodun'),
(501, 25, 'Alimosho'),
(502, 25, 'Amuwo-Odofin'),
(503, 25, 'Apapa'),
(504, 25, 'Badagry'),
(505, 25, 'Epe'),
(506, 25, 'Eti-Osa'),
(507, 25, 'Ibeju/Lekki'),
(508, 25, 'Ifako-Ijaye'),
(509, 25, 'Ikeja'),
(510, 25, 'Ikorodu'),
(511, 25, 'Kosofe'),
(512, 25, 'Lagos Island'),
(513, 25, 'Lagos Mainland'),
(514, 25, 'Mushin'),
(515, 25, 'Ojo'),
(516, 25, 'Oshodi-Isolo'),
(517, 25, 'Shomolu'),
(518, 25, 'Surulere'),
(519, 26, 'Akwanga'),
(520, 26, 'Awe'),
(521, 26, 'Doma'),
(522, 26, 'Karu'),
(523, 26, 'Keana'),
(524, 26, 'Keffi'),
(525, 26, 'Kokona'),
(526, 26, 'Lafia'),
(527, 26, 'Nasarawa'),
(528, 26, 'Nasarawa-Eggon'),
(529, 26, 'Obi'),
(530, 26, 'Toto'),
(531, 26, 'Wamba'),
(532, 27, 'Agaie'),
(533, 27, 'Agwara'),
(534, 27, 'Bida'),
(535, 27, 'Borgu'),
(536, 27, 'Bosso'),
(537, 27, 'Chanchaga'),
(538, 27, 'Edati'),
(539, 27, 'Gbako'),
(540, 27, 'Gurara'),
(541, 27, 'Katcha'),
(542, 27, 'Kontagora'),
(543, 27, 'Lapai'),
(544, 27, 'Lavun'),
(545, 27, 'Magama'),
(546, 27, 'Mariga'),
(547, 27, 'Mashegu'),
(548, 27, 'Mokwa'),
(549, 27, 'Muya'),
(550, 27, 'Pailoro'),
(551, 27, 'Rafi'),
(552, 27, 'Rijau'),
(553, 27, 'Shiroro'),
(554, 27, 'Suleja'),
(555, 27, 'Tafa'),
(556, 27, 'Wushishi'),
(557, 28, 'Abeokuta North'),
(558, 28, 'Abeokuta South'),
(559, 28, 'Ado-Odo/Ota'),
(560, 28, 'Egbado North'),
(561, 28, 'Egbado South'),
(562, 28, 'Ewekoro'),
(563, 28, 'Ifo'),
(564, 28, 'Ijebu East'),
(565, 28, 'Ijebu North'),
(566, 28, 'Ijebu North East'),
(567, 28, 'Ijebu Ode'),
(568, 28, 'Ikenne'),
(569, 28, 'Imeko-Afon'),
(570, 28, 'Ipokia'),
(571, 28, 'Obafemi-Owode'),
(572, 28, 'Ogun Waterside'),
(573, 28, 'Odeda'),
(574, 28, 'Odogbolu'),
(575, 28, 'Remo North'),
(576, 28, 'Shagamu'),
(577, 29, 'Akoko North East'),
(578, 29, 'Akoko North West'),
(579, 29, 'Akoko South Akure East'),
(580, 29, 'Akoko South West'),
(581, 29, 'Akure North'),
(582, 29, 'Akure South'),
(583, 29, 'Ese-Odo'),
(584, 29, 'Idanre'),
(585, 29, 'Ifedore'),
(586, 29, 'Ilaje'),
(587, 29, 'Ile-Oluji'),
(588, 29, 'Okeigbo'),
(589, 29, 'Irele'),
(590, 29, 'Odigbo'),
(591, 29, 'Okitipupa'),
(592, 29, 'Ondo East'),
(593, 29, 'Ondo West'),
(594, 29, 'Ose'),
(595, 29, 'Owo'),
(596, 30, 'Aiyedade'),
(597, 30, 'Aiyedire'),
(598, 30, 'Atakumosa East'),
(599, 30, 'Atakumosa West'),
(600, 30, 'Boluwaduro'),
(601, 30, 'Boripe'),
(602, 30, 'Ede North'),
(603, 30, 'Ede South'),
(604, 30, 'Egbedore'),
(605, 30, 'Ejigbo'),
(606, 30, 'Ife Central'),
(607, 30, 'Ife East'),
(608, 30, 'Ife North'),
(609, 30, 'Ife South'),
(610, 30, 'Ifedayo'),
(611, 30, 'Ifelodun'),
(612, 30, 'Ila'),
(613, 30, 'Ilesha East'),
(614, 30, 'Ilesha West'),
(615, 30, 'Irepodun'),
(616, 30, 'Irewole'),
(617, 30, 'Isokan'),
(618, 30, 'Iwo'),
(619, 30, 'Obokun'),
(620, 30, 'Odo-Otin'),
(621, 30, 'Ola-Oluwa'),
(622, 30, 'Olorunda'),
(623, 30, 'Oriade'),
(624, 30, 'Orolu'),
(625, 30, 'Osogbo'),
(626, 31, 'Afijio'),
(627, 31, 'Akinyele'),
(628, 31, 'Atiba'),
(629, 31, 'Atigbo'),
(630, 31, 'Egbeda'),
(631, 31, 'IbadanCentral'),
(632, 31, 'Ibadan North'),
(633, 31, 'Ibadan North West'),
(634, 31, 'Ibadan South East'),
(635, 31, 'Ibadan South West'),
(636, 31, 'Ibarapa Central'),
(637, 31, 'Ibarapa East'),
(638, 31, 'Ibarapa North'),
(639, 31, 'Ido'),
(640, 31, 'Irepo'),
(641, 31, 'Iseyin'),
(642, 31, 'Itesiwaju'),
(643, 31, 'Iwajowa'),
(644, 31, 'Kajola'),
(645, 31, 'Lagelu Ogbomosho North'),
(646, 31, 'Ogbmosho South'),
(647, 31, 'Ogo Oluwa'),
(648, 31, 'Olorunsogo'),
(649, 31, 'Oluyole'),
(650, 31, 'Ona-Ara'),
(651, 31, 'Orelope'),
(652, 31, 'Ori Ire'),
(653, 31, 'Oyo East'),
(654, 31, 'Oyo West'),
(655, 31, 'Saki East'),
(656, 31, 'Saki West'),
(657, 31, 'Surulere'),
(658, 32, 'Barikin Ladi'),
(659, 32, 'Bassa'),
(660, 32, 'Bokkos'),
(661, 32, 'Jos East'),
(662, 32, 'Jos North'),
(663, 32, 'Jos South'),
(664, 32, 'Kanam'),
(665, 32, 'Kanke'),
(666, 32, 'Langtang North'),
(667, 32, 'Langtang South'),
(668, 32, 'Mangu'),
(669, 32, 'Mikang'),
(670, 32, 'Pankshin'),
(671, 32, 'Qua\'an Pan'),
(672, 32, 'Riyom'),
(673, 32, 'Shendam'),
(674, 32, 'Wase'),
(675, 33, 'Abua/Odual'),
(676, 33, 'Ahoada East'),
(677, 33, 'Ahoada West'),
(678, 33, 'Akuku Toru'),
(679, 33, 'Andoni'),
(680, 33, 'Asari-Toru'),
(681, 33, 'Bonny'),
(682, 33, 'Degema'),
(683, 33, 'Emohua'),
(684, 33, 'Eleme'),
(685, 33, 'Etche'),
(686, 33, 'Gokana'),
(687, 33, 'Ikwerre'),
(688, 33, 'Khana'),
(689, 33, 'Obio/Akpor'),
(690, 33, 'Ogba/Egbema/Ndoni'),
(691, 33, 'Ogu/Bolo'),
(692, 33, 'Okrika'),
(693, 33, 'Omumma'),
(694, 33, 'Opobo/Nkoro'),
(695, 33, 'Oyigbo'),
(696, 33, 'Port-Harcourt'),
(697, 33, 'Tai'),
(698, 34, 'Binji'),
(699, 34, 'Bodinga'),
(700, 34, 'Dange-shnsi'),
(701, 34, 'Gada'),
(702, 34, 'Goronyo'),
(703, 34, 'Gudu'),
(704, 34, 'Gawabawa'),
(705, 34, 'Illela'),
(706, 34, 'Isa'),
(707, 34, 'Kware'),
(708, 34, 'kebbe'),
(709, 34, 'Rabah'),
(710, 34, 'Sabon birni'),
(711, 34, 'Shagari'),
(712, 34, 'Silame'),
(713, 34, 'Sokoto North'),
(714, 34, 'Sokoto South'),
(715, 34, 'Tambuwal'),
(716, 34, 'Tqngaza'),
(717, 34, 'Tureta'),
(718, 34, 'Wamako'),
(719, 34, 'Wurno'),
(720, 34, 'Yabo'),
(721, 35, 'Ardo-kola'),
(722, 35, 'Bali'),
(723, 35, 'Donga'),
(724, 35, 'Gashaka'),
(725, 35, 'Cassol'),
(726, 35, 'Ibi'),
(727, 35, 'Jalingo'),
(728, 35, 'Karin-Lamido'),
(729, 35, 'Kurmi'),
(730, 35, 'Lau'),
(731, 35, 'Sardauna'),
(732, 35, 'Takum'),
(733, 35, 'Ussa'),
(734, 35, 'Wukari'),
(735, 35, 'Yorro'),
(736, 35, 'Zing'),
(737, 36, 'Bade'),
(738, 36, 'Bursari'),
(739, 36, 'Damaturu'),
(740, 36, 'Fika'),
(741, 36, 'Fune'),
(742, 36, 'Geidam'),
(743, 36, 'Gujba'),
(744, 36, 'Gulani'),
(745, 36, 'Jakusko'),
(746, 36, 'Karasuwa'),
(747, 36, 'Karawa'),
(748, 36, 'Machina'),
(749, 36, 'Nangere'),
(750, 36, 'Nguru Potiskum'),
(751, 36, 'Tarmua'),
(752, 36, 'Yunusari'),
(753, 36, 'Yusufari'),
(754, 37, 'Anka'),
(755, 37, 'Bakura'),
(756, 37, 'Birnin Magaji'),
(757, 37, 'Bukkuyum'),
(758, 37, 'Bungudu'),
(759, 37, 'Gummi'),
(760, 37, 'Gusau'),
(761, 37, 'Kaura'),
(762, 37, 'Namoda'),
(763, 37, 'Maradun'),
(764, 37, 'Maru'),
(765, 37, 'Shinkafi'),
(766, 37, 'Talata Mafara'),
(767, 37, 'Tsafe'),
(768, 37, 'Zurmi');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(6) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`) VALUES
(8, 'anouar.15@yahoo.com'),
(5, 'emeka.ibe@yahoo.com'),
(7, 'frankodaokons@yahoo.com'),
(3, 'kanu.ugochukwu@livenetglobal.com.ng'),
(2, 'kanu@livenetglobal.com'),
(1, 'kanuclinton@yahoo.com'),
(4, 'kanu_clinton@yahoo.com'),
(6, 'ucheelenu@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `category` int(1) NOT NULL,
  `code` varchar(6) NOT NULL,
  `regdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`id`, `username`, `category`, `code`, `regdate`) VALUES
(1, 'kanu_cclinton@yahoo.com', 2, 'L3190O', '0000-00-00 00:00:00'),
(2, 'kanu_cclinton@yahoo.com', 2, '8PAYTJ', '0000-00-00 00:00:00'),
(3, 'kanu_cclinton@yahoo.com', 2, 'Y50V3I', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `id` int(2) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`id`, `title`) VALUES
(1, 'Christian'),
(2, 'Muslim'),
(3, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Abia'),
(2, 'Abuja'),
(3, 'Adamawa'),
(4, 'Akwa Ibom'),
(5, 'Anambra'),
(6, 'Bauchi'),
(7, 'Bayelsa'),
(8, 'Benue'),
(9, 'Borno'),
(10, 'Cross River'),
(11, 'Delta'),
(12, 'Ebonyi'),
(13, 'Edo'),
(14, 'Ekiti'),
(15, 'Enugu'),
(16, 'Gombe'),
(17, 'Imo'),
(18, 'Jigawa'),
(19, 'Kaduna'),
(20, 'Kano'),
(21, 'Katsina'),
(22, 'Kebbi'),
(23, 'Kogi'),
(24, 'Kwara'),
(25, 'Lagos'),
(26, 'Nasarawa'),
(27, 'Niger'),
(28, 'Ogun'),
(29, 'Ondo'),
(30, 'Osun'),
(31, 'Oyo'),
(32, 'Plateau'),
(33, 'Rivers'),
(34, 'Sokoto'),
(35, 'Taraba'),
(36, 'Yobe'),
(37, 'Zamfara');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(5) NOT NULL,
  `company` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `regdate` datetime NOT NULL,
  `approved` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id` int(1) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `title`) VALUES
(1, 'Mr.'),
(2, 'Mrs.'),
(3, 'Miss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_verification`
--
ALTER TABLE `account_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `age_bracket`
--
ALTER TABLE `age_bracket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_sectors`
--
ALTER TABLE `business_sectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_applications`
--
ALTER TABLE `candidate_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_guarantors`
--
ALTER TABLE `candidate_guarantors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_guarantor_documents`
--
ALTER TABLE `candidate_guarantor_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_jobs`
--
ALTER TABLE `candidate_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id2` (`id2`);

--
-- Indexes for table `candidate_preferences`
--
ALTER TABLE `candidate_preferences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `candidate_qualifications`
--
ALTER TABLE `candidate_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_qualification_documents`
--
ALTER TABLE `candidate_qualification_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_ranking`
--
ALTER TABLE `candidate_ranking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_salary`
--
ALTER TABLE `candidate_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_skills`
--
ALTER TABLE `candidate_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_skill_documents`
--
ALTER TABLE `candidate_skill_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_work_experience`
--
ALTER TABLE `candidate_work_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contractor`
--
ALTER TABLE `contractor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contractor_applications`
--
ALTER TABLE `contractor_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contractor_jobs`
--
ALTER TABLE `contractor_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id2` (`id2`);

--
-- Indexes for table `contractor_job_images`
--
ALTER TABLE `contractor_job_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contractor_preferences`
--
ALTER TABLE `contractor_preferences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contractor_subscriptions`
--
ALTER TABLE `contractor_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `english_proficiency`
--
ALTER TABLE `english_proficiency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_headings`
--
ALTER TABLE `help_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_style`
--
ALTER TABLE `job_style`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local_governments`
--
ALTER TABLE `local_governments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `account_verification`
--
ALTER TABLE `account_verification`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `age_bracket`
--
ALTER TABLE `age_bracket`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `business_sectors`
--
ALTER TABLE `business_sectors`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `candidate_applications`
--
ALTER TABLE `candidate_applications`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidate_guarantors`
--
ALTER TABLE `candidate_guarantors`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidate_guarantor_documents`
--
ALTER TABLE `candidate_guarantor_documents`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidate_jobs`
--
ALTER TABLE `candidate_jobs`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidate_preferences`
--
ALTER TABLE `candidate_preferences`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `candidate_qualifications`
--
ALTER TABLE `candidate_qualifications`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `candidate_qualification_documents`
--
ALTER TABLE `candidate_qualification_documents`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidate_ranking`
--
ALTER TABLE `candidate_ranking`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidate_salary`
--
ALTER TABLE `candidate_salary`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `candidate_skills`
--
ALTER TABLE `candidate_skills`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidate_skill_documents`
--
ALTER TABLE `candidate_skill_documents`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidate_work_experience`
--
ALTER TABLE `candidate_work_experience`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contractor`
--
ALTER TABLE `contractor`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contractor_applications`
--
ALTER TABLE `contractor_applications`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contractor_jobs`
--
ALTER TABLE `contractor_jobs`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contractor_job_images`
--
ALTER TABLE `contractor_job_images`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contractor_preferences`
--
ALTER TABLE `contractor_preferences`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contractor_subscriptions`
--
ALTER TABLE `contractor_subscriptions`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `english_proficiency`
--
ALTER TABLE `english_proficiency`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `help_headings`
--
ALTER TABLE `help_headings`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_style`
--
ALTER TABLE `job_style`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `local_governments`
--
ALTER TABLE `local_governments`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=769;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
