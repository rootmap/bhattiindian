-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2016 at 12:29 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `open_university_record`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorize_user`
--

CREATE TABLE IF NOT EXISTS `authorize_user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pc_name` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `authorize_user`
--

INSERT INTO `authorize_user` (`id`, `pc_name`, `date`, `status`) VALUES
(1, 'SUL-LABPC-11', '2015-09-15', 1),
(2, 'fahad-PC', NULL, NULL),
(4, 'Khairul-PC', NULL, NULL),
(5, 'SUL-Soft-PC', '2015-11-25', 1),
(7, 'USER-PC-Monira', '2015-12-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `custom_table_field`
--

CREATE TABLE IF NOT EXISTS `custom_table_field` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `table_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `custom_table_field`
--

INSERT INTO `custom_table_field` (`id`, `table_id`, `name`, `date`, `status`) VALUES
(100, 21, 'subject_id', '2016-03-27', 1),
(101, 21, 'subject_name', '2016-03-27', 1),
(105, 23, 'subject_id', '2016-03-27', 1),
(106, 23, 'student_id', '2016-03-27', 1),
(107, 23, 'student_name', '2016-03-27', 1),
(108, 23, 'student_gpa', '2016-03-27', 1),
(109, 24, 'subject', '2016-03-27', 1),
(110, 24, 'student_id_start_from', '2016-03-27', 1),
(111, 24, 'student_id_end_to', '2016-03-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `blood_group` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `contactnumber` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `gender`, `blood_group`, `dob`, `contactnumber`, `address`, `username`, `password`, `date`, `status`) VALUES
(3, 'CMS Admin', '1', '1', '2015-12-09', '01927608261', 'asdS', 'cms', '7e8a32176a113a7ba3d2b1f85834e828', '2015-09-13', 1),
(4, 'Shanto', '1', '1', '1988-08-16', '13231312', 'wesaqweqw', 'shanto', '7e8a32176a113a7ba3d2b1f85834e828', '2015-11-25', 1),
(5, 'Sirajum Munira', '1', '1', '1986-08-29', '01923318408', 'adasdsad', 'munira', '7e8a32176a113a7ba3d2b1f85834e828', '2015-12-13', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `login`
--
CREATE TABLE IF NOT EXISTS `login` (
`id` int(20)
,`name` varchar(255)
,`username` varchar(255)
,`password` varchar(255)
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `page_info`
--

CREATE TABLE IF NOT EXISTS `page_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `page_name_view` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `page_info`
--

INSERT INTO `page_info` (`id`, `name`, `page_name`, `page_name_view`, `menu_name`, `date`, `status`) VALUES
(21, 'subject', 'subject.php', '', 'Subject', '2016-03-27', 1),
(23, 'result_record', 'result_record.php', '', 'Result Record', '2016-03-27', 1),
(24, 'robot', 'robot.php', '', 'ROBOT', '2016-03-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `result_record`
--

CREATE TABLE IF NOT EXISTS `result_record` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `subject_id` int(20) DEFAULT NULL,
  `student_id` varchar(255) DEFAULT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `student_gpa` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=201 ;

--
-- Dumping data for table `result_record`
--

INSERT INTO `result_record` (`id`, `subject_id`, `student_id`, `student_name`, `student_gpa`, `date`, `status`) VALUES
(1, 0, '14-0-0-00-002', 'MOST. AREFIN JAHAN', '1st Class ', '2016-03-27', 1),
(2, 0, '14-0-0-00-001', 'Mst. Nina Ayrin ', '1st Class ', '2016-03-27', 1),
(3, 0, '14-0-0-00-003', 'DILARA SARKER ', '1st Class ', '2016-03-27', 1),
(4, 0, '14-0-0-00-006', 'SOMPA RANI GHOSH', '1st Class ', '2016-03-27', 1),
(5, 0, '14-0-0-00-005', 'LAILA FERTHOUS', '1st Class ', '2016-03-27', 1),
(6, 0, '14-0-0-00-007', 'JANNATUN NUR', '1st Class ', '2016-03-27', 1),
(7, 0, '14-0-0-00-009', 'SIKDER ASADULLAH', '1st Class ', '2016-03-27', 1),
(8, 0, '14-0-0-00-010', 'GAZI RAFIQUL ALAM ', '1st Class ', '2016-03-27', 1),
(9, 0, '14-0-0-00-011', 'FAYSAL AHMED', '1st Class ', '2016-03-27', 1),
(10, 0, '14-0-0-00-016', 'SHILPI AKTAR', '1st Class ', '2016-03-27', 1),
(11, 0, '14-0-0-00-017', 'KHALID AHMED', '1st Class ', '2016-03-27', 1),
(12, 0, '14-0-0-00-018', 'PARVIN AKTER', '1st Class ', '2016-03-27', 1),
(13, 0, '14-0-0-00-020', 'MORSHEDA', '1st Class ', '2016-03-27', 1),
(14, 0, '14-0-0-00-021', 'BABUL SHEULY', '2nd Class ', '2016-03-27', 1),
(15, 0, '14-0-0-00-023', 'KHADIZA SULTANA ', '2nd Class ', '2016-03-27', 1),
(16, 0, '14-0-0-00-024', 'ANUPAM BISWAS ', '2nd Class ', '2016-03-27', 1),
(17, 0, '14-0-0-00-025', 'MD. NOORSHAD ALI', '2nd Class ', '2016-03-27', 1),
(18, 0, '14-0-0-00-027', 'NAZMUN ARA', '1st Class ', '2016-03-27', 1),
(19, 0, '14-0-0-00-030', 'MD. RAFIQUL ISLAM ', '1st Class ', '2016-03-27', 1),
(20, 0, '14-0-0-00-033', 'TAPASH KUMAR KARMAKER ', '1st Class ', '2016-03-27', 1),
(21, 0, '14-0-0-00-035', 'FATEMA KHATUN ', '2nd Class ', '2016-03-27', 1),
(22, 0, '14-0-0-00-037', 'MD. NURUL ISLAM ', '1st Class ', '2016-03-27', 1),
(23, 0, '14-0-0-00-038', 'SAIFUL ISLAM', '2nd Class ', '2016-03-27', 1),
(24, 0, '14-0-0-00-039', 'MD. TARIKUL ISLAM ', '2nd Class ', '2016-03-27', 1),
(25, 0, '14-0-0-00-040', 'TANIA AKTER ', '1st Class ', '2016-03-27', 1),
(26, 0, '14-0-0-00-041', 'MOHAMMAD ABDUS SALAM PRODHAN', '1st Class ', '2016-03-27', 1),
(27, 0, '14-0-0-00-042', 'MD. SHARIFUR RAHMAN ', '2nd Class ', '2016-03-27', 1),
(28, 0, '14-0-0-00-044', 'QUAMRUN NESSA ', '2nd Class ', '2016-03-27', 1),
(29, 0, '14-0-0-00-045', 'MEHEDI HASAN', '2nd Class ', '2016-03-27', 1),
(30, 0, '14-0-0-00-046', 'MD. RIPAN BABU', '2nd Class ', '2016-03-27', 1),
(31, 0, '14-0-0-00-048', 'MD. SHAFIKUL ISLAM', '2nd Class ', '2016-03-27', 1),
(32, 0, '14-0-0-00-050', 'MD. ABUL KALAM AZAD ', '1st Class ', '2016-03-27', 1),
(33, 0, '14-0-0-00-054', 'RASHIDA KHATUN', '2nd Class ', '2016-03-27', 1),
(34, 0, '14-0-0-00-055', 'AKLIMA AKTER', '1st Class ', '2016-03-27', 1),
(35, 0, '14-0-0-00-057', 'MD. ABDUS SALAM ', '2nd Class ', '2016-03-27', 1),
(36, 0, '14-0-0-00-059', 'MOSTAFIZUR RAHAMAN', '1st Class ', '2016-03-27', 1),
(37, 0, '14-0-0-00-060', 'FARHANA MAHMUD', '2nd Class ', '2016-03-27', 1),
(38, 0, '14-0-0-00-061', 'KAWSER JAHAN ROZY ', '1st Class ', '2016-03-27', 1),
(39, 0, '14-0-0-00-094', 'SHAMIM ARA LIZA ', '1st Class ', '2016-03-27', 1),
(40, 0, '14-0-0-00-267', 'MD. MIZANUR RAHMAN', '1st Class ', '2016-03-27', 1),
(41, 0, '14-0-0-00-117', 'UMME AZHA ', '1st Class ', '2016-03-27', 1),
(42, 0, '14-0-0-00-155', 'MD. KABIRUL ISLAM ', '1st Class ', '2016-03-27', 1),
(43, 0, '14-0-0-00-284', 'MD. ABDULLAH-AL-MAMUN ', '1st Class ', '2016-03-27', 1),
(44, 0, '14-0-0-00-240', 'MD. ENAMUR RAHMAN AFRAD ', '2nd Class ', '2016-03-27', 1),
(45, 0, '14-0-0-00-260', 'MD. JAMIL ROSHID', '1st Class ', '2016-03-27', 1),
(46, 0, '14-0-0-00-119', 'TANZILA RAHMAN', '1st Class ', '2016-03-27', 1),
(47, 0, '14-0-0-00-217', 'SYEDA ISMU AKTER', '1st Class ', '2016-03-27', 1),
(48, 0, '14-0-0-00-279', 'MD. DIDAR HOSSAIN ', '1st Class ', '2016-03-27', 1),
(49, 0, '14-0-0-00-323', 'RAWSHAN AKTER CHOWDHURY ', '1st Class ', '2016-03-27', 1),
(50, 0, '14-0-0-00-250', 'MOHAMMAD NURUL ALAM ', '2nd Class ', '2016-03-27', 1),
(51, 0, '14-0-0-00-311', 'RUMA BARAI', '1st Class ', '2016-03-27', 1),
(52, 0, '14-0-0-00-327', 'SHAHNAZ AKTER ', '1st Class ', '2016-03-27', 1),
(53, 0, '14-0-0-00-138', 'MD. BABLU MIA ', '1st Class ', '2016-03-27', 1),
(54, 0, '14-0-0-00-103', 'JUSNA BEGUM ', '2nd Class ', '2016-03-27', 1),
(55, 0, '14-0-0-00-090', 'KHALEDA AKTER CHOWDHURY ', '1st Class ', '2016-03-27', 1),
(56, 0, '14-0-0-00-223', 'H. M. SHAHIN AHAMMED', '1st Class ', '2016-03-27', 1),
(57, 0, '14-0-0-00-273', 'SHAHNAZ BEGUM ', '2nd Class ', '2016-03-27', 1),
(58, 0, '14-0-0-00-303', 'MD. NURUZZAMAN', '2nd Class ', '2016-03-27', 1),
(59, 0, '14-0-0-00-192', 'HABIBA AKTER', '1st Class ', '2016-03-27', 1),
(60, 0, '14-0-0-00-329', 'TAHMINA KHATUN', '1st Class ', '2016-03-27', 1),
(61, 0, '14-0-0-00-177', 'MONJU ARA BEGUM ', '1st Class ', '2016-03-27', 1),
(62, 0, '14-0-0-00-142', 'FATEMA KHATOON BITHI', '1st Class ', '2016-03-27', 1),
(63, 0, '14-0-0-00-290', 'REFSINARA AKTHER', '2nd Class ', '2016-03-27', 1),
(64, 0, '14-0-0-00-274', 'FARJANA YESMIN', '1st Class ', '2016-03-27', 1),
(65, 0, '14-0-0-00-249', 'RAHIMA AKTER', '2nd Class ', '2016-03-27', 1),
(66, 0, '14-0-0-00-101', 'FAZLUR RAHMAN ', '1st Class ', '2016-03-27', 1),
(67, 0, '14-0-0-00-104', 'MD. AIN UDDIN ', '2nd Class ', '2016-03-27', 1),
(68, 0, '14-0-0-00-113', 'TAHERA KHATUN ', '2nd Class ', '2016-03-27', 1),
(69, 0, '14-0-0-00-266', 'SANJIDA PARVEEN ', '2nd Class ', '2016-03-27', 1),
(70, 0, '14-0-0-00-186', 'FARHANA AHMED ', '2nd Class ', '2016-03-27', 1),
(71, 0, '14-0-0-00-154', 'MD. SARMAN ALI', '2nd Class ', '2016-03-27', 1),
(72, 0, '14-0-0-00-165', 'TANJEENA TAJ TAMANNA', '2nd Class ', '2016-03-27', 1),
(73, 0, '14-0-0-00-092', 'FARHANA HAUQE ', '2nd Class ', '2016-03-27', 1),
(74, 0, '14-0-0-00-193', 'ANJUMAN ARA RUNA', '1st Class ', '2016-03-27', 1),
(75, 0, '14-0-0-00-210', 'RUMA KHANAM ', '2nd Class ', '2016-03-27', 1),
(76, 0, '14-0-0-00-156', 'GOLAM MUSTAFA ', '2nd Class ', '2016-03-27', 1),
(77, 0, '14-0-0-00-298', 'NUPUR RANI SAHA ', '2nd Class ', '2016-03-27', 1),
(78, 0, '14-0-0-00-243', 'MOHAMMAD ATIQUL ISLAM ', '1st Class ', '2016-03-27', 1),
(79, 0, '14-0-0-00-286', 'SYEDA FARHANA HUQ ', '2nd Class ', '2016-03-27', 1),
(80, 0, '14-0-0-00-326', 'SHAMPA RANI MODAK ', '1st Class ', '2016-03-27', 1),
(81, 0, '14-0-0-00-289', 'REKHA AKTER ', '1st Class ', '2016-03-27', 1),
(82, 0, '14-0-0-00-159', 'RABEYA BEGUM', '1st Class ', '2016-03-27', 1),
(83, 0, '14-0-0-00-309', 'SAFWAN AKTER', '1st Class ', '2016-03-27', 1),
(84, 0, '14-0-0-00-328', 'HALIMA BEGUM', '1st Class ', '2016-03-27', 1),
(85, 0, '14-0-0-00-278', 'BINA AKTER', '2nd Class ', '2016-03-27', 1),
(86, 0, '14-0-0-00-067', 'MOHAMMAD ALI', '2nd Class ', '2016-03-27', 1),
(87, 0, '14-0-0-00-099', 'NASRIN SULTANA', '1st Class ', '2016-03-27', 1),
(88, 0, '14-0-0-00-225', 'RAZIA SULTANA ', '1st Class ', '2016-03-27', 1),
(89, 0, '14-0-0-00-265', 'MANJU ROY ', '2nd Class ', '2016-03-27', 1),
(90, 0, '14-0-0-00-128', 'SHARMIN AKTER ', '2nd Class ', '2016-03-27', 1),
(91, 0, '14-0-0-00-272', 'NARGIS SULTANA', '2nd Class ', '2016-03-27', 1),
(92, 0, '14-0-0-00-325', 'KANIZ SALMA RIMI', '1st Class ', '2016-03-27', 1),
(93, 0, '14-0-0-00-214', 'MOST. SHAMSUNNAHAR TITHI', '1st Class ', '2016-03-27', 1),
(94, 0, '14-0-0-00-254', 'MUHAMMAD MIJANUR RAHMAN ', '1st Class ', '2016-03-27', 1),
(95, 0, '14-0-0-00-167', 'SABIRON MOY BHOWMIK ', '2nd Class ', '2016-03-27', 1),
(96, 0, '14-0-0-00-062', 'TAHMINA HOSSAIN ', '1st Class ', '2016-03-27', 1),
(97, 0, '14-0-0-00-130', 'JOY MRIDHA', '1st Class ', '2016-03-27', 1),
(98, 0, '14-0-0-00-189', 'REZINA BEGUM', '1st Class ', '2016-03-27', 1),
(99, 0, '14-0-0-00-135', 'FARIZA AKHTER ', '2nd Class ', '2016-03-27', 1),
(100, 0, '14-0-0-00-211', 'AMENA KHATUN', '1st Class ', '2016-03-27', 1),
(101, 0, '14-0-0-00-292', 'JUMA SULTANA', '1st Class ', '2016-03-27', 1),
(102, 0, '14-0-0-00-064', 'JENISH FARHANA', '1st Class ', '2016-03-27', 1),
(103, 0, '14-0-0-00-107', 'HASANUL KABIR ', '1st Class ', '2016-03-27', 1),
(104, 0, '14-0-0-00-126', 'MD. MOINUL HOSSAIN', '1st Class ', '2016-03-27', 1),
(105, 0, '14-0-0-00-161', 'TOHIDA AKHTER ', '2nd Class ', '2016-03-27', 1),
(106, 0, '14-0-0-00-294', 'KANIZ FERJANA ', '2nd Class ', '2016-03-27', 1),
(107, 0, '14-0-0-00-174', 'TAMANNA-E-JAHAN ', '1st Class ', '2016-03-27', 1),
(108, 0, '14-0-0-00-091', 'MAHAMUDA BEGUM', '1st Class ', '2016-03-27', 1),
(109, 0, '14-0-0-00-264', 'TANIA AKHTER', '1st Class ', '2016-03-27', 1),
(110, 0, '14-0-0-00-152', 'MUHAMMAD FOYSAL RANA', '1st Class ', '2016-03-27', 1),
(111, 0, '14-0-0-00-198', 'TASLIMA YEASMIN ', '1st Class ', '2016-03-27', 1),
(112, 0, '14-0-0-00-293', 'SHANEA AKTER SHEMO', '1st Class ', '2016-03-27', 1),
(113, 0, '14-0-0-00-276', 'RAWSHONARA KHATUN ', '2nd Class ', '2016-03-27', 1),
(114, 0, '14-0-0-00-111', 'SADIA SAMSAD', '1st Class ', '2016-03-27', 1),
(115, 0, '14-0-0-00-149', 'RASHEDUL HASSAN ', '2nd Class ', '2016-03-27', 1),
(116, 0, '14-0-0-00-320', 'KAZI KAMRUNNAHER', '2nd Class ', '2016-03-27', 1),
(117, 0, '14-0-0-00-255', 'FATEMA BEGUM', '1st Class ', '2016-03-27', 1),
(118, 0, '14-0-0-00-074', 'TANIA AFRIN ', '2nd Class ', '2016-03-27', 1),
(119, 0, '14-0-0-00-241', 'MD. KARAMAT ALI ', '2nd Class ', '2016-03-27', 1),
(120, 0, '14-0-0-00-080', 'BIPLOB MONDAL ', '1st Class ', '2016-03-27', 1),
(121, 0, '14-0-0-00-120', 'MAHIUDDIN KHAN', '2nd Class ', '2016-03-27', 1),
(122, 0, '14-0-0-00-221', 'SALMA ', '2nd Class ', '2016-03-27', 1),
(123, 0, '14-0-0-00-314', 'NEKPERVIN ', '2nd Class ', '2016-03-27', 1),
(124, 0, '14-0-0-00-075', 'MOHAMMAD MUSHARAF HOSSAIN ', '2nd Class ', '2016-03-27', 1),
(125, 0, '14-0-0-00-300', 'MD. SOHRB HOSSAIN ', '1st Class ', '2016-03-27', 1),
(126, 0, '14-0-0-00-232', 'LOUISYA KHONDAKER ', '2nd Class ', '2016-03-27', 1),
(127, 0, '14-0-0-00-139', 'REEMA SULTANA ', '2nd Class ', '2016-03-27', 1),
(128, 0, '14-0-0-00-066', 'ABU HANZALA ', '1st Class ', '2016-03-27', 1),
(129, 0, '14-0-0-00-282', 'MD. FAZLUL HAQUE', '2nd Class ', '2016-03-27', 1),
(130, 0, '14-0-0-00-086', 'MAHIYA ISLAM', '1st Class ', '2016-03-27', 1),
(131, 0, '14-0-0-00-262', 'SAJAL SHIKDER ', '1st Class ', '2016-03-27', 1),
(132, 0, '14-0-0-00-093', 'MD. ZAKIR HOSSAIN ', '1st Class ', '2016-03-27', 1),
(133, 0, '14-0-0-00-215', 'SAYEDA ISRAT JAHAN', '1st Class ', '2016-03-27', 1),
(134, 0, '14-0-0-00-253', 'SHUKLA DEBI ', '2nd Class ', '2016-03-27', 1),
(135, 0, '14-0-0-00-068', 'MD. ABUL KASHEM ', '2nd Class ', '2016-03-27', 1),
(136, 0, '14-0-0-00-269', 'MUHAMMAD JALAL UDDIN', '2nd Class ', '2016-03-27', 1),
(137, 0, '14-0-0-00-238', 'SHAHNAJ PERVEEN ', '1st Class ', '2016-03-27', 1),
(138, 0, '14-0-0-00-187', 'ROKSANA MUZUMDER', '2nd Class ', '2016-03-27', 1),
(139, 0, '14-0-0-00-313', 'ROWSHON ARA BEGUM ', '2nd Class ', '2016-03-27', 1),
(140, 0, '14-0-0-00-166', 'MRINAL KANTI MAJUMDER ', '1st Class ', '2016-03-27', 1),
(141, 0, '14-0-0-00-097', 'SYEDA AMBIA KARIM ', '2nd Class ', '2016-03-27', 1),
(142, 0, '14-0-0-00-305', 'SAYMA MORIUM TREENA ', '2nd Class ', '2016-03-27', 1),
(143, 0, '14-0-0-00-195', 'ISRAT JAHAN ROSY', '1st Class ', '2016-03-27', 1),
(144, 0, '14-0-0-00-089', 'SHAJIDA AKTER ', '1st Class ', '2016-03-27', 1),
(145, 0, '14-0-0-00-081', 'MD. JOHIRUL ISLAM ', '1st Class ', '2016-03-27', 1),
(146, 0, '14-0-0-00-157', 'MST. ANWARA KHATUN', '2nd Class ', '2016-03-27', 1),
(147, 0, '14-0-0-00-078', 'JHUMA AKTER ', '1st Class ', '2016-03-27', 1),
(148, 0, '14-0-0-00-151', 'MARUFA SULTANA', '1st Class ', '2016-03-27', 1),
(149, 0, '14-0-0-00-270', 'JESMIN MAZUMDER ', '1st Class ', '2016-03-27', 1),
(150, 0, '14-0-0-00-316', 'NUSRAT SALMA HAPPY', '2nd Class ', '2016-03-27', 1),
(151, 0, '14-0-0-00-100', 'REGUN CHANDRA MALAKER ', '1st Class ', '2016-03-27', 1),
(152, 0, '14-0-0-00-271', 'SHAHINOOR BEGUM ', '2nd Class ', '2016-03-27', 1),
(153, 0, '14-0-0-00-287', 'NUR-E-HAFSA ', '1st Class ', '2016-03-27', 1),
(154, 0, '14-0-0-00-141', 'REZWANA TASNIM', '1st Class ', '2016-03-27', 1),
(155, 0, '14-0-0-00-063', 'MST. KHURSHIDA KHATUN ', '2nd Class ', '2016-03-27', 1),
(156, 0, '14-0-0-00-216', 'FARZANA MAMTAJ', '1st Class ', '2016-03-27', 1),
(157, 0, '14-0-0-00-163', 'ROZINA AKTER', '1st Class ', '2016-03-27', 1),
(158, 0, '14-0-0-00-164', 'FAHMIDA AZAD', '2nd Class ', '2016-03-27', 1),
(159, 0, '14-0-0-00-204', 'NIGAR AFROZ ', '1st Class ', '2016-03-27', 1),
(160, 0, '14-0-0-00-118', 'MD. JALIL MIAH', '2nd Class ', '2016-03-27', 1),
(161, 0, '14-0-0-00-179', 'ISRAT ARA ', '2nd Class ', '2016-03-27', 1),
(162, 0, '14-0-0-00-322', 'MD. SHAMSUL HAQUE ', '2nd Class ', '2016-03-27', 1),
(163, 0, '14-0-0-00-257', 'LAKSHMI RANI MONDOL ', '2nd Class ', '2016-03-27', 1),
(164, 0, '14-0-0-00-083', 'SHAMIMA SULTANA ', '2nd Class ', '2016-03-27', 1),
(165, 0, '14-0-0-00-121', 'ISHRAT JAHAN LIA', '1st Class ', '2016-03-27', 1),
(166, 0, '14-0-0-00-082', 'SYFUR RAHAMAN ', '1st Class ', '2016-03-27', 1),
(167, 0, '14-0-0-00-234', 'MOHAMMAD MAHBUB ALAM', '1st Class ', '2016-03-27', 1),
(168, 0, '14-0-0-00-324', 'DILRUBA AKTER ', '1st Class ', '2016-03-27', 1),
(169, 0, '14-0-0-00-140', 'SAYIDA NAZNIN ', '2nd Class ', '2016-03-27', 1),
(170, 0, '14-0-0-00-162', 'MOST. ZANNATUL FERDOUS', '1st Class ', '2016-03-27', 1),
(171, 0, '14-0-0-00-109', 'MD. MANNAN MOLLAH ', '2nd Class ', '2016-03-27', 1),
(172, 0, '14-0-0-00-288', 'NASRIN SULTANA', '1st Class ', '2016-03-27', 1),
(173, 0, '14-0-0-00-191', 'SAILA SIDDIQUA', '1st Class ', '2016-03-27', 1),
(174, 0, '14-0-0-00-115', 'OMAR FARUK', '1st Class ', '2016-03-27', 1),
(175, 0, '14-0-0-00-153', 'RUMANA AFRIN', '1st Class ', '2016-03-27', 1),
(176, 0, '14-0-0-00-259', 'KHADIZA AKTER ', '1st Class ', '2016-03-27', 1),
(177, 0, '14-0-0-00-268', 'RUBYA SHARMIN NISHU ', '2nd Class ', '2016-03-27', 1),
(178, 0, '14-0-0-00-110', 'SHAMIM ARA NIPA ', '1st Class ', '2016-03-27', 1),
(179, 0, '14-0-0-00-188', 'UMMEY SALMA ', '1st Class ', '2016-03-27', 1),
(180, 0, '14-0-0-00-194', 'SHAMIMA NASRIN', '2nd Class ', '2016-03-27', 1),
(181, 0, '14-0-0-00-076', 'KHOKAN CHOWDHURY', '2nd Class ', '2016-03-27', 1),
(182, 0, '14-0-0-00-205', 'MAKSUDA HOSSAIN ', '1st Class ', '2016-03-27', 1),
(183, 0, '14-0-0-00-134', 'KULSUMA AKTER ', '1st Class ', '2016-03-27', 1),
(184, 0, '14-0-0-00-088', 'MERINA SULTANA', '2nd Class ', '2016-03-27', 1),
(185, 0, '14-0-0-00-297', 'SHAMSUN NAHAR TUHIN ', '2nd Class ', '2016-03-27', 1),
(186, 0, '14-0-0-00-213', 'MD. REZAUL KARIM KHAN ', '1st Class ', '2016-03-27', 1),
(187, 0, '14-0-0-00-315', 'HASINA AKHTER ', '1st Class ', '2016-03-27', 1),
(188, 0, '14-0-0-00-304', 'TAHMINA AKTER POLY', '2nd Class ', '2016-03-27', 1),
(189, 0, '14-0-0-00-125', 'MD. MOSTAFA KAMAL ', '1st Class ', '2016-03-27', 1),
(190, 0, '14-0-0-00-183', 'TASLIMA KHATUN', '1st Class ', '2016-03-27', 1),
(191, 0, '14-0-0-00-160', 'NAEMA SULTANA ', '2nd Class ', '2016-03-27', 1),
(192, 0, '14-0-0-00-275', 'MAZEDA KHANOM ', '2nd Class ', '2016-03-27', 1),
(193, 0, '14-0-0-00-283', 'MD. NIGAM UDDIN ', '2nd Class ', '2016-03-27', 1),
(194, 0, '14-0-0-00-087', 'MUNIRA MUSTARI', '1st Class ', '2016-03-27', 1),
(195, 0, '14-0-0-00-231', 'MD. HELAL UDDIN ', '2nd Class ', '2016-03-27', 1),
(196, 0, '14-0-0-00-237', 'MOSAMMAT KAMRUNNAHAR', '1st Class ', '2016-03-27', 1),
(197, 0, '14-0-0-00-263', 'AZAHARUL ISLAM', '1st Class ', '2016-03-27', 1),
(198, 0, '14-0-0-00-127', 'BEAUTY BEGUM', '2nd Class ', '2016-03-27', 1),
(199, 0, '14-0-0-00-222', 'S. M. FAYZUL KARIM', '2nd Class ', '2016-03-27', 1),
(200, 0, '14-0-0-00-084', 'MD. MANIRUL ISLAM ', '2nd Class ', '2016-03-27', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `result_record_view`
--
CREATE TABLE IF NOT EXISTS `result_record_view` (
`id` int(20)
,`subject_id` int(20)
,`student_id` varchar(255)
,`student_name` varchar(255)
,`student_gpa` varchar(255)
,`date` date
,`status` int(2)
,`subject_name` varchar(255)
);
-- --------------------------------------------------------

--
-- Table structure for table `robot`
--

CREATE TABLE IF NOT EXISTS `robot` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `subject` int(20) DEFAULT NULL,
  `student_id_start_from` varchar(255) DEFAULT NULL,
  `student_id_end_to` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `robot`
--

INSERT INTO `robot` (`id`, `subject`, `student_id_start_from`, `student_id_end_to`, `date`, `status`) VALUES
(9, 0, '14-0-0-00-001', '14-0-0-00-100', '2016-03-27', 1),
(10, 0, '14-0-0-00-001', '14-0-0-00-100', '2016-03-27', 1),
(11, 0, '14-0-0-00-001', '14-0-0-00-100', '2016-03-27', 1),
(12, 0, '14-0-0-00-001', '14-0-0-00-100', '2016-03-27', 1),
(13, 0, '14-0-0-00-001', '14-0-0-00-100', '2016-03-27', 1),
(14, 0, '14-0-0-00-001', '14-0-0-00-100', '2016-03-27', 1),
(15, 0, '14-0-0-00-001', '14-0-0-00-999', '2016-03-27', 1),
(16, 0, '14-0-0-00-001', '14-0-0-00-100', '2016-03-27', 1),
(17, 0, '14-0-0-00-001', '14-0-0-00-100', '2016-03-27', 1),
(18, 0, '140-0-0-00-001', '140-0-0-00-100', '2016-03-27', 1),
(19, 0, '140-0-0-00-001', '140-0-0-00-100', '2016-03-27', 1),
(20, 0, '140-0-0-00-001', '140-0-0-00-100', '2016-03-27', 1),
(21, 0, '140-0-0-00-001', '140-0-0-00-100', '2016-03-27', 1),
(22, 0, '140-0-0-00-001', '140-0-0-00-100', '2016-03-27', 1),
(23, 0, '14-0-0-00-001', '14-0-0-00-100', '2016-03-27', 1),
(24, 0, '14-0-0-00-001', '14-0-0-00-100', '2016-03-27', 1),
(25, 0, '14-0-0-00-001', '14-0-0-00-999', '2016-03-27', 1),
(26, 0, '14-0-0-00-001', '14-0-0-00-999', '2016-03-27', 1),
(27, 0, '14-0-0-00-001', '14-0-0-00-999', '2016-03-27', 1),
(28, 0, '14-0-0-00-001', '14-0-0-00-999', '2016-03-27', 1),
(29, 0, '14-0-0-00-001', '14-0-0-00-999', '2016-03-27', 1),
(30, 0, '14-0-0-00-001', '14-0-0-00-999', '2016-03-27', 1),
(31, 0, '14-0-0-00-001', '14-0-0-00-999', '2016-03-27', 1),
(32, 0, '14-0-0-00-001', '14-0-0-00-999', '2016-03-27', 1),
(33, 0, '14-0-0-00-001', '14-0-0-00-999', '2016-03-27', 1),
(34, 0, '14-0-0-00-001', '14-0-0-00-999', '2016-03-27', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `robot_view`
--
CREATE TABLE IF NOT EXISTS `robot_view` (
`id` int(20)
,`subject` int(20)
,`student_id_start_from` varchar(255)
,`student_id_end_to` varchar(255)
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `subject_id` int(20) DEFAULT NULL,
  `subject_name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_id`, `subject_name`, `date`, `status`) VALUES
(1, 1, 'CEd', '2016-03-27', 1),
(2, 2, 'MEd', '2016-03-27', 1),
(3, 10, 'SSC', '2016-03-27', 1),
(4, 11, 'HSC', '2016-03-27', 1),
(5, 12, 'BBS', '2016-03-27', 1),
(6, 20, 'CELP', '2016-03-27', 1),
(7, 31, 'PGDM', '2016-03-27', 1),
(8, 22, 'BELT', '2016-03-27', 1),
(9, 23, 'BA/BSS', '2016-03-27', 1),
(10, 33, 'MBA', '2016-03-27', 1),
(11, 32, 'BBA', '2016-03-27', 1),
(12, 71, 'CEMBA', '2016-03-27', 1),
(13, 55, 'BAgEd', '2016-03-27', 1),
(14, 0, 'B.Ed', '2016-03-27', 1),
(15, 14, 'HSC(Niche-1)', '2016-03-27', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `subject_view`
--
CREATE TABLE IF NOT EXISTS `subject_view` (
`id` int(20)
,`subject_id` int(20)
,`subject_name` varchar(255)
,`date` date
,`status` int(2)
);
-- --------------------------------------------------------

--
-- Structure for view `login`
--
DROP TABLE IF EXISTS `login`;

CREATE OR REPLACE VIEW `login` AS select `employee`.`id` AS `id`,`employee`.`name` AS `name`,`employee`.`username` AS `username`,`employee`.`password` AS `password`,`employee`.`status` AS `status` from `employee`;

-- --------------------------------------------------------

--
-- Structure for view `result_record_view`
--
DROP TABLE IF EXISTS `result_record_view`;

CREATE OR REPLACE VIEW `result_record_view` AS (select `a`.`id` AS `id`,`a`.`subject_id` AS `subject_id`,`a`.`student_id` AS `student_id`,`a`.`student_name` AS `student_name`,`a`.`student_gpa` AS `student_gpa`,`a`.`date` AS `date`,`a`.`status` AS `status`,`s`.`subject_name` AS `subject_name` from (`result_record` `a` left join `subject` `s` on((`s`.`subject_id` = `a`.`subject_id`))));

-- --------------------------------------------------------

--
-- Structure for view `robot_view`
--
DROP TABLE IF EXISTS `robot_view`;

CREATE OR REPLACE VIEW `robot_view` AS select `robot`.`id` AS `id`,`robot`.`subject` AS `subject`,`robot`.`student_id_start_from` AS `student_id_start_from`,`robot`.`student_id_end_to` AS `student_id_end_to`,`robot`.`date` AS `date`,`robot`.`status` AS `status` from `robot`;

-- --------------------------------------------------------

--
-- Structure for view `subject_view`
--
DROP TABLE IF EXISTS `subject_view`;

CREATE OR REPLACE VIEW `subject_view` AS select `subject`.`id` AS `id`,`subject`.`subject_id` AS `subject_id`,`subject`.`subject_name` AS `subject_name`,`subject`.`date` AS `date`,`subject`.`status` AS `status` from `subject`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
