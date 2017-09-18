-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2017 at 01:07 PM
-- Server version: 5.6.35-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web3matr_Cafebalti_2017`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorize_user`
--

CREATE TABLE `authorize_user` (
  `id` int(20) NOT NULL,
  `pc_name` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `photo` text,
  `date_and_time` varchar(255) DEFAULT NULL,
  `details` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `photo`, `date_and_time`, `details`, `date`, `status`) VALUES
(1, 'Where does it come from?', 'photo_upload__1490723970_1490723970.jpg', '2017-03-29 01:42 AM', 'Pellentesque nulla justo, auctor ac maximus sed, tempus sed nibh. Ut elit sapien, ornare et diam ac, efficitur luctus elit. Proin ut nulla consequat, elementum lacus eu, cursus ipsum. Fusce efficitur lectus ante, quis egestas nisl tristique eu. Curabitur tincidunt dapibus augue non fringilla. Cras lorem urna, gravida in velit vitae, varius egestas enim. Proin facilisis nibh a justo egestas elementum. Mauris ac ipsum accumsan, luctus quam sit amet, rhoncus risus. Vivamus semper, magna vel porta interdum, odio mi molestie turpis, eget accumsan tellus orci sed dolor. Donec imperdiet commodo metus, eget ultricies orci sodales at. Sed tincidunt commodo nisi, et varius nulla ullamcorper eget.&lt;br /&gt;&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bla&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; ndit nunc a rutrum elementum. Nulla euismod pretium nunc, vel scelerisque lorem iaculis id. Quisque facilisis ipsum id consectetur placerat. Sed fringilla dolor vitae leo consequat, non maximus nulla auctor. Integer ultricies luctus tortor, at congue ipsum sollicitudin a.Mauris vehicula lacus eget semper&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; ornare. Donec porttitor felis accumsan malesuada dictum. Fusce augue tellus, dignissim bibendum dictum vel, dictum in risus.&lt;br /&gt;&lt;br /&gt;Integer lectus quam, viverra id justo non, lacinia bibendum orci. Morbi cursus mi ut dolor viverra porta. Nulla at cursus nulla. Sed ut libero odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean a ultricies purus. Etiam nec lacus vel orci iaculis commodo in id diam. Ut mollis fermentum velit a cursus. Cras augue turpis, condimentum vel iaculis vel, mollis et lorem. Cras vitae auctor arcu. Sed hendrerit, ipsum a hendrerit vestibulum, nisi tellus iaculis neque, sit amet consectetur elit diam viverra odio. Duis ut gravida libero. Nullam eu faucibus arcu, quis efficitur mauris. Nulla eu egestas odio.&lt;br /&gt;&lt;br /&gt;Nunc interdum felis nisl, eget sodales ligula condimentum id. Nullam eu mi a tortor efficitur condimentum. Vivamus turpis arcu, aliquet in ullamcorper lacinia, laoreet nec turpis. Curabitur vitae augue id nunc feugiat suscipit ut id felis. Quisque finibus vulputate eros nec aliquam. Fusce id laoreet tortor. Duis faucibus pellentesque accumsan. Sed euismod nisl nec dolor malesuada aliquam.&lt;br /&gt;&lt;br /&gt;', '2017-03-28', 1),
(2, 'What is Lorem Ipsum?', 'photo_upload__1490724022_1490724022.jpg', '2017-03-29 01:43 AM', 'Pellentesque nulla justo, auctor ac maximus sed, tempus sed nibh. Ut elit sapien, ornare et diam ac, efficitur luctus elit. Proin ut nulla consequat, elementum lacus eu, cursus ipsum. Fusce efficitur lectus ante, quis egestas nisl tristique eu. Curabitur tincidunt dapibus augue non fringilla. Cras lorem urna, gravida in velit vitae, varius egestas enim. Proin facilisis nibh a justo egestas elementum. Mauris ac ipsum accumsan, luctus quam sit amet, rhoncus risus. Vivamus semper, magna vel porta interdum, odio mi molestie turpis, eget accumsan tellus orci sed dolor. Donec imperdiet commodo metus, eget ultricies orci sodales at. Sed tincidunt commodo nisi, et varius nulla ullamcorper eget.&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bla&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; ndit nunc a rutrum elementum. Nulla euismod pretium nunc, vel scelerisque lorem iaculis id. Quisque facilisis ipsum id consectetur placerat. Sed fringilla dolor vitae leo consequat, non maximus nulla auctor. Integer ultricies luctus tortor, at congue ipsum sollicitudin a.Mauris vehicula lacus eget semper&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; ornare. Donec porttitor felis accumsan malesuada dictum. Fusce augue tellus, dignissim bibendum dictum vel, dictum in risus.&lt;br /&gt;&lt;br /&gt;Integer lectus quam, viverra id justo non, lacinia bibendum orci. Morbi cursus mi ut dolor viverra porta. Nulla at cursus nulla. Sed ut libero odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean a ultricies purus. Etiam nec lacus vel orci iaculis commodo in id diam. Ut mollis fermentum velit a cursus. Cras augue turpis, condimentum vel iaculis vel, mollis et lorem. Cras vitae auctor arcu. Sed hendrerit, ipsum a hendrerit vestibulum, nisi tellus iaculis neque, sit amet consectetur elit diam viverra odio. Duis ut gravida libero. Nullam eu faucibus arcu, quis efficitur mauris. Nulla eu egestas odio.&lt;br /&gt;&lt;br /&gt;Nunc interdum felis nisl, eget sodales ligula condimentum id. Nullam eu mi a tortor efficitur condimentum. Vivamus turpis arcu, aliquet in ullamcorper lacinia, laoreet nec turpis. Curabitur vitae augue id nunc feugiat suscipit ut id felis. Quisque finibus vulputate eros nec aliquam. Fusce id laoreet tortor. Duis faucibus pellentesque accumsan. Sed euismod nisl nec dolor malesuada aliquam.', '2017-03-28', 1),
(3, 'Summer Begin!', 'photo_upload__1490724173_1490724173.jpg', '2017-03-29 12:00 AM', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod \r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim \r\nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea \r\ncommodo consequat. Duis aute irure dolor in reprehenderit in voluptate \r\nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint \r\noccaecat cupidatat non proident, sunt in culpa qui officia deserunt \r\nmollit anim id est laborum.', '2017-03-28', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `blog_view`
-- (See below for the actual view)
--
CREATE TABLE `blog_view` (
`id` int(20)
,`title` varchar(255)
,`photo` text
,`date_and_time` varchar(255)
,`details` text
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` int(2) DEFAULT NULL,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `is_active`, `priority`, `date`, `status`) VALUES
(1, 'Reservation', 1, 1, '2017-03-25', 1),
(2, 'Menu', 1, 0, '2017-09-14', 1),
(3, 'Menu 2', 2, 7, '2017-08-16', 1),
(4, 'Gallery', 1, 3, '2017-03-25', 1),
(5, 'Event', 0, 4, '2017-09-14', 1),
(6, 'T & C', 1, 2, '2017-09-14', 1),
(7, 'Menu list (left side bar)', 0, 6, '2017-09-14', 1),
(9, 'Free Home Delivery', 0, 5, '2017-08-28', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `category_view`
-- (See below for the actual view)
--
CREATE TABLE `category_view` (
`id` int(20)
,`name` varchar(255)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `chef_recommended`
--

CREATE TABLE `chef_recommended` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chef_recommended`
--

INSERT INTO `chef_recommended` (`id`, `name`, `date`, `status`) VALUES
(1, 'Chef Recommended', '2017-08-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chef_recommended_content`
--

CREATE TABLE `chef_recommended_content` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` text,
  `short_details` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chef_recommended_content`
--

INSERT INTO `chef_recommended_content` (`id`, `name`, `photo`, `short_details`, `date`, `status`) VALUES
(1, 'LAMB CHOP', 'photo_upload__1505741797_1505741797.jpg', 'Very tender lamb marinated overnight and grilled on a charcoal clay oven.&lt;br /&gt;', '2017-09-18', 1),
(2, 'Thali (Non-Vegitable)', 'photo_upload__1505742618_1505742618.jpg', 'A traditional complete meal served on a thali with tandoori chicken, pilau rice, nan, chicken tikka massala, Lamb rogan josh, vegetable curry, raitha.&lt;span style=\"color:#333333;font-family:Lora, sans-serif;font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:normal;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#ffffff;text-decoration-style:initial;text-decoration-color:initial;display:inline !important;float:none;\"&gt;&lt;br /&gt;&lt;/span&gt;', '2017-09-18', 1),
(3, 'Bhatti Special', 'photo_upload__1503480644_1503480644.jpg', 'Chicken drumstick, sheek kebab and onion bhaji', '2017-08-28', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `chef_recommended_content_view`
-- (See below for the actual view)
--
CREATE TABLE `chef_recommended_content_view` (
`id` int(20)
,`name` varchar(255)
,`photo` text
,`short_details` text
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `chef_recommended_view`
-- (See below for the actual view)
--
CREATE TABLE `chef_recommended_view` (
`id` int(20)
,`name` varchar(255)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(20) NOT NULL,
  `header` varchar(255) DEFAULT NULL,
  `footer` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `header`, `footer`, `date`, `status`) VALUES
(7, '#1b2024', '#1b2024', '2017-08-27', 1),
(9, '#e51a1a', '#c1b5b5', '2017-08-27', 1),
(10, '#000000', '#000000', '2017-08-27', 1),
(11, '#ffffff', '#000000', '2017-08-27', 1),
(12, '#000000', '#000000', '2017-08-27', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `color_view`
-- (See below for the actual view)
--
CREATE TABLE `color_view` (
`id` int(20)
,`header` varchar(255)
,`footer` varchar(255)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `custom_table_field`
--

CREATE TABLE `custom_table_field` (
  `id` int(20) NOT NULL,
  `table_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom_table_field`
--

INSERT INTO `custom_table_field` (`id`, `table_id`, `name`, `date`, `status`) VALUES
(112, 25, 'site_name', '2017-03-10', 1),
(113, 25, 'photo', '2017-03-10', 1),
(114, 25, 'address', '2017-03-10', 1),
(115, 25, 'phone_number', '2017-03-10', 1),
(116, 25, 'restaurant_open_1', '2017-03-10', 1),
(117, 25, 'restaurant_open_2', '2017-03-10', 1),
(118, 25, 'facebook_link', '2017-03-10', 1),
(119, 25, 'twitter_link', '2017-03-10', 1),
(120, 25, 'tripadvisor_link', '2017-03-10', 1),
(121, 25, 'yelp_link', '2017-03-10', 1),
(122, 26, 'name', '2017-03-10', 1),
(125, 28, 'slider_title', '2017-03-10', 1),
(126, 28, 'slider_sub_title', '2017-03-10', 1),
(127, 28, 'photo', '2017-03-10', 1),
(128, 29, 'category_id', '2017-03-10', 1),
(129, 29, 'name', '2017-03-10', 1),
(130, 29, 'photo', '2017-03-10', 1),
(131, 30, 'title', '2017-03-21', 1),
(132, 30, 'photo', '2017-03-21', 1),
(133, 30, 'details', '2017-03-21', 1),
(134, 31, 'category_id', '2017-03-21', 1),
(135, 31, 'sub_category_id', '2017-03-21', 1),
(136, 31, 'name', '2017-03-21', 1),
(137, 31, 'photo', '2017-03-21', 1),
(138, 31, 'short_details', '2017-03-21', 1),
(139, 31, 'long_details', '2017-03-21', 1),
(140, 31, 'new_price', '2017-03-21', 1),
(141, 31, 'old_price', '2017-03-21', 1),
(142, 31, 'quantity', '2017-03-21', 1),
(143, 32, 'product_id', '2017-03-21', 1),
(144, 33, 'photo', '2017-03-21', 1),
(145, 34, 'title', '2017-03-23', 1),
(146, 34, 'photo', '2017-03-23', 1),
(147, 34, 'date_and_time', '2017-03-23', 1),
(148, 34, 'details', '2017-03-23', 1),
(149, 35, 'title', '2017-03-23', 1),
(150, 35, 'photo', '2017-03-23', 1),
(151, 35, 'details', '2017-03-23', 1),
(152, 35, 'button_name', '2017-03-23', 1),
(153, 35, 'button_link', '2017-03-23', 1),
(154, 36, 'product_id', '2017-03-23', 1),
(155, 37, 'reservation_date', '2017-04-05', 1),
(156, 37, 'reservation_time', '2017-04-05', 1),
(157, 37, 'guest_number', '2017-04-05', 1),
(158, 37, 'name', '2017-04-05', 1),
(159, 37, 'phone', '2017-04-05', 1),
(160, 37, 'email', '2017-04-05', 1),
(161, 38, 'category_id', '2017-04-12', 1),
(162, 38, 'sub_category_id', '2017-04-12', 1),
(163, 38, 'photo', '2017-04-12', 1),
(164, 39, 'name', '2017-04-18', 1),
(165, 39, 'details', '2017-04-18', 1),
(166, 40, 'name', '2017-04-18', 1),
(167, 40, 'details', '2017-04-18', 1),
(168, 41, 'meta_keywords', '2017-05-07', 1),
(169, 41, 'meta_descriptions', '2017-05-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `blood_group` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `contactnumber` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `gender`, `blood_group`, `dob`, `contactnumber`, `address`, `username`, `password`, `date`, `status`) VALUES
(3, 'CMS Admin', '1', '1', '2015-12-09', '01927608261', 'asdS', 'cms', '7e8a32176a113a7ba3d2b1f85834e828', '2015-09-13', 1),
(4, 'Shanto', '1', '1', '1988-08-16', '13231312', 'wesaqweqw', 'shanto', '7e8a32176a113a7ba3d2b1f85834e828', '2015-11-25', 1),
(5, 'Sirajum Munira', '1', '1', '1986-08-29', '01923318408', 'adasdsad', 'munira', '7e8a32176a113a7ba3d2b1f85834e828', '2015-12-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `extra_page`
--

CREATE TABLE `extra_page` (
  `id` int(20) NOT NULL,
  `category_id` int(20) DEFAULT NULL,
  `details` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extra_page`
--

INSERT INTO `extra_page` (`id`, `category_id`, `details`, `date`, `status`) VALUES
(1, 9, '<p><br></p><table class=\"table table-bordered\" height=\"1\" width=\"715\"><tbody><tr><td><br></td><td><br></td><td><p><b>Free home delivery</b><br></p></td><td><br></td><td><br></td></tr></tbody></table><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>', '2017-08-28', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `extra_page_view`
-- (See below for the actual view)
--
CREATE TABLE `extra_page_view` (
`id` int(20)
,`category_id` int(20)
,`details` text
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `details` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `name`, `details`, `date`, `status`) VALUES
(1, 'Q: Is there any service charge to be added in the bill?', 'Ans: &lt;span&gt;&lt;span style=\"font-face:Arial;\"&gt;&lt;span style=\"font-size:15px;\"&gt;Yes, a discretionary service charge of 12.5% will be added to your bill.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;', '2017-09-14', 1),
(2, 'Q: Do you accept credit cards?', 'Ans: We accept all major cards? &lt;p&gt;&lt;/p&gt;', '2017-09-14', 1),
(3, 'Q: Do you allow takeaway service?', '&lt;p&gt;Ans: Y&lt;span style=\"font-face:Arial;\"&gt;ES, &lt;/span&gt;&lt;span&gt;&lt;span style=\"font-face:Arial;\"&gt;&lt;span style=\"font-size:15px;\"&gt;Take Away orders welcome, Price include V.A.T.&lt;br /&gt;&lt;br /&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;', '2017-09-14', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `faq_view`
-- (See below for the actual view)
--
CREATE TABLE `faq_view` (
`id` int(20)
,`name` varchar(255)
,`details` text
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(20) NOT NULL,
  `photo` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `photo`, `date`, `status`) VALUES
(3, 'photo_upload__1505512696_1505512696.jpg', '2017-09-15', 1),
(4, 'photo_upload__1505512736_1505512736.jpg', '2017-09-15', 1),
(5, 'photo_upload__1505512759_1505512759.jpg', '2017-09-15', 1),
(6, 'photo_upload__1502893188_1502893188.jpg', '2017-08-16', 1),
(7, 'photo_upload__1502841570_1502841570.jpg', '2017-08-15', 1),
(9, 'photo_upload__1502841180_1502841180.jpg', '2017-08-15', 1),
(10, 'photo_upload__1505512789_1505512789.jpg', '2017-09-15', 1),
(11, 'photo_upload__1505512808_1505512808.jpg', '2017-09-15', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `gallery_view`
-- (See below for the actual view)
--
CREATE TABLE `gallery_view` (
`id` int(20)
,`photo` text
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `login`
-- (See below for the actual view)
--
CREATE TABLE `login` (
`id` int(20)
,`name` varchar(255)
,`username` varchar(255)
,`password` varchar(255)
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `details` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `title`, `subtitle`, `details`, `date`, `status`) VALUES
(1, 'NOTES ', 'Don\'t Miss', '<p><b>If you have any dietary restrictions, e.g.: nuts, dairy products, etc. please inform us.</b></p><p><b>Any dish not on the menu, can be prepared on request.</b></p><p><b>Please ask for exceptional choice Open 7 days a week<br>Last orders 11:30pm</b><br><b><br></b></p>', '2017-09-14', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `offer_view`
-- (See below for the actual view)
--
CREATE TABLE `offer_view` (
);

-- --------------------------------------------------------

--
-- Table structure for table `page_cover_photo`
--

CREATE TABLE `page_cover_photo` (
  `id` int(20) NOT NULL,
  `category_id` int(20) DEFAULT NULL,
  `sub_category_id` int(20) DEFAULT NULL,
  `photo` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_cover_photo`
--

INSERT INTO `page_cover_photo` (`id`, `category_id`, `sub_category_id`, `photo`, `date`, `status`) VALUES
(1, 3, 0, 'photo_upload__1492023308_1492023308.jpg', '2017-04-12', 1),
(2, 1, 1, 'photo_upload__1492026849_1492026849.jpg', '2017-04-12', 1),
(3, 1, 2, 'photo_upload__1492026873_1492026873.jpg', '2017-04-12', 1),
(4, 1, 3, 'photo_upload__1492023361_1492023361.jpg', '2017-04-12', 1),
(5, 1, 4, 'photo_upload__1492026899_1492026899.jpg', '2017-04-12', 1),
(6, 1, 5, 'photo_upload__1492023382_1492023382.jpg', '2017-04-12', 1),
(7, 2, 6, 'photo_upload__1492023402_1492023402.jpg', '2017-04-12', 1),
(8, 4, 0, 'photo_upload__1492023421_1492023421.jpg', '2017-04-12', 1),
(9, 5, 0, 'photo_upload__1492023436_1492023436.jpg', '2017-04-12', 1),
(10, 1, 0, 'photo_upload__1492030349_1492030349.jpg', '2017-04-12', 1),
(11, 2, 12, 'photo_upload__1492454105_1492454105.png', '2017-04-17', 1),
(12, 3, 18, 'photo_upload__1492454145_1492454145.png', '2017-04-17', 1),
(14, 2, 9, 'photo_upload__1505509052_1505509052.jpg', '2017-09-15', 1),
(15, 2, 11, 'photo_upload__1492454202_1492454202.jpg', '2017-04-17', 1),
(16, 2, 13, 'photo_upload__1492454212_1492454212.jpg', '2017-04-17', 1),
(17, 3, 15, 'photo_upload__1492454226_1492454226.jpg', '2017-04-17', 1),
(18, 3, 16, 'photo_upload__1492454234_1492454234.jpg', '2017-04-17', 1),
(19, 3, 17, 'photo_upload__1492454243_1492454243.jpg', '2017-04-17', 1),
(20, 3, 18, 'photo_upload__1492454259_1492454259.png', '2017-04-17', 1),
(21, 3, 19, 'photo_upload__1505742893_1505742893.jpg', '2017-09-18', 1),
(22, 6, 0, 'photo_upload__1492497589_1492497589.jpg', '2017-04-18', 1),
(23, 7, 0, 'photo_upload__1492497599_1492497599.jpg', '2017-04-18', 1),
(24, 4, 0, 'photo_upload__1502841668_1502841668.jpg', '2017-08-15', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `page_cover_photo_view`
-- (See below for the actual view)
--
CREATE TABLE `page_cover_photo_view` (
`id` int(20)
,`category_id` int(20)
,`sub_category_id` int(20)
,`photo` text
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `page_info`
--

CREATE TABLE `page_info` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `page_name_view` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_info`
--

INSERT INTO `page_info` (`id`, `name`, `page_name`, `page_name_view`, `menu_name`, `date`, `status`) VALUES
(25, 'site_basic_info', 'site_basic_info.php', '', 'Site Basic Info', '2017-03-10', 1),
(26, 'category', 'category.php', '', 'Category', '2017-03-10', 1),
(28, 'slider', 'slider.php', '', 'Slider', '2017-03-10', 1),
(29, 'sub_category', 'sub_category.php', '', 'sub category', '2017-03-10', 1),
(30, 'promo_action', 'promo_action.php', '', 'Promo Action', '2017-03-21', 1),
(31, 'product', 'product.php', '', 'Product', '2017-03-21', 1),
(32, 'chef_recommended', 'chef_recommended.php', '', 'Chef Recommended', '2017-03-21', 1),
(33, 'gallery', 'gallery.php', '', 'Gallery', '2017-03-21', 1),
(34, 'blog', 'blog.php', '', 'Blog', '2017-03-23', 1),
(35, 'reservation_slider', 'reservation_slider.php', '', 'Reservation Slider', '2017-03-23', 1),
(36, 'offer', 'offer.php', '', 'Offer', '2017-03-23', 1),
(37, 'reservation', 'reservation.php', '', 'Reservation', '2017-04-05', 1),
(38, 'page_cover_photo', 'page_cover_photo.php', '', 'Page Cover Photo', '2017-04-12', 1),
(39, 'faq', 'faq.php', '', 'Faq', '2017-04-18', 1),
(40, 'team_and_condition', 'team_and_condition.php', '', 'Team and Condition', '2017-04-18', 1),
(41, 'seo_', 'seo_.php', '', 'Seo ', '2017-05-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(20) NOT NULL,
  `category_id` int(20) DEFAULT NULL,
  `sub_category_id` int(20) DEFAULT NULL,
  `sub_category_menu_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` text,
  `short_details` text,
  `long_details` text,
  `new_price` varchar(255) DEFAULT NULL,
  `old_price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `sub_category_id`, `sub_category_menu_id`, `name`, `photo`, `short_details`, `long_details`, `new_price`, `old_price`, `quantity`, `priority`, `date`, `status`) VALUES
(3, 2, 9, 0, 'PAPADAM (Plain or spicy) ', 'photo_upload__1490514845_1490514845.jpg', 'Served with a touch of oriental herbs', '&lt;span style=\"color:#333333;font-family:Lora, sans-serif;font-size:14px;background-color:rgba(240, 240, 240, 0.8);\"&gt;&lt;br type=\"_moz\" /&gt;&lt;/span&gt;', '£0.80', '', '1', 6, '2017-08-20', 1),
(10, 2, 9, 0, 'PRAWN COCKTAIL', '', 'Served with a touch of oriental herbs', '', '£5.75', '', '1', 12, '2017-08-20', 1),
(11, 2, 9, 0, 'LAMB TIKKA', '', 'Pieces of boneless tender lamb marinated overnight&lt;br /&gt;and cooked in a charcoal clay oven&lt;br /&gt;', '', '£5.75', '£5.75', '1', 22, '2017-08-20', 1),
(12, 2, 9, 0, 'LAMB CHOPS ', '', 'Very tender lamb marinated overnight and grilled on a charcoal clay oven (Chef\'s recommendation)&lt;br /&gt;', '', '£4.95', '', '1', 22, '2017-08-20', 1),
(13, 2, 9, 0, 'CIIICKEN TIKKA', '', 'Pieces of boneless tender chicken marinated overnight and cooked in a charcoal clay oven&lt;br /&gt;', '', '£4.95', '', '', 20, '2017-08-20', 1),
(14, 2, 9, 0, 'CHICKEN TANGREE', '', '&amp;nbsp;Tender chicken drumsticks marinated overnight and cooked in a charcoal clay oven (Chef\'s recommendation)&lt;br /&gt;', '', '£5.95', '', '', 23, '2017-08-20', 1),
(15, 2, 9, 0, 'SHAMI KEBAB', '', 'Specially ground lamb and lentils, garnished with rich spices and herbs&lt;br /&gt;', '', '£4.95', '', '', 22, '2017-08-20', 1),
(16, 2, 9, 0, 'SHEEK KEBAB', '', 'Minced lamb mildly marinated, barbecued on skewers, served sizzling hot', '', '£5.65', '', '', 25, '2017-08-20', 1),
(17, 2, 9, 0, 'TANDOORI BATER (Quail)', '', 'Very tender quails, marinated in well blended spices and cooked in a clay oven at a low temperature&lt;br /&gt;', '', '£4.95', '', '', 1, '2017-08-28', 1),
(18, 2, 9, 0, 'CHICKEN CHAT ', '', 'Small juicy pieces of chicken, spiced with hot &amp;amp; sour sauce', '', '£4.50', '', '', 28, '2017-08-20', 1),
(19, 2, 9, 0, 'ALOO CHAT', '', 'Juicy pieces of potato, spiced with hot &amp;amp; sour sauce&lt;br /&gt;', '', '£3.95', '', '', 31, '2017-08-20', 1),
(20, 2, 9, 0, 'SAMOSA (Vegetable)', '', 'Strudel pastry filled with spiced peas, potatoes and deep fried', '', '£4.50', '', '', 34, '2017-08-20', 1),
(21, 2, 9, 0, 'ONION BHAJI', '', 'Sliced rings of onions marinated in spices and deepfried in a crisp coating&lt;br /&gt;', '', '£3.95', '', '', 36, '2017-08-20', 1),
(22, 2, 9, 0, 'VEGETABLE KEBAB', '', 'Mashed potatoes and vegetables mixed with diced onions, ground spices, covered in breadcrumbs and deep fried&lt;br /&gt;', '', '£4.65', '', '', 37, '2017-08-20', 1),
(23, 2, 9, 0, 'DALL OR MULLIGATAWNY SOUP', '', 'Lentil based spicy soup, made with special herbs and stock&lt;br /&gt;', '', '£3.25', '', '', 38, '2017-08-20', 1),
(24, 2, 9, 0, 'FISH CAKE', '', 'Pieces of tuna chunks, spring onions, mashed potatoes bread crumbs and spices&lt;br /&gt;', '', '£5.95', '', '', 39, '2017-08-20', 1),
(25, 2, 9, 0, 'PRAWN POORI', '', 'Prawns cooked in ground spices and rolled in pancake (spicy)&lt;br /&gt;', '', '£4.95', '£4.95', '1', 40, '2017-08-20', 1),
(26, 2, 9, 0, 'KING PRAWN POORI', '', 'King Prawns cooked in ground spices and rolled in pancake (spicy)&lt;br /&gt;', '', '£6.95', '', '', 41, '2017-08-20', 1),
(27, 2, 9, 0, 'KEBAB POORI', '', 'Spiced minced lamb barbecued on skewers and rolled in a thin pancake&lt;br /&gt;', '', '£5.65', '', '', 42, '2017-08-20', 1),
(28, 2, 9, 0, 'BHATTI SPECIAL', '', 'Chicken drumstick, sheek kebab and onion bhaji &lt;strong&gt;&amp;nbsp;(Chef\'s recommendation)&lt;/strong&gt;&lt;br /&gt;', '', '£5.95', '9.36', '', 43, '2017-08-20', 1),
(29, 2, 9, 0, 'KING PRAWN BUTTERFLY', '', 'King prawn deep fried with crispy coating&lt;br /&gt;', '', '£5.95', '', '', 44, '2017-08-20', 1),
(30, 2, 9, 0, 'CHICKEN PAKORA', '', 'Chicken tikka fried with gram flour &amp;amp; spices&lt;br /&gt;', '', '£4.95', '', '', 45, '2017-08-20', 1),
(31, 2, 10, 0, 'PRAWN CURRY', '', 'Prawns cooked in freshly ground spices and herbs&lt;br /&gt;', '', '£10.25', '', '', 46, '2017-08-20', 1),
(32, 2, 10, 0, 'PRAWN KORMA', '', 'Prawns cooked in a mildly spiced creamy sauce.&lt;br /&gt;', '', '£10.25', '', '', 47, '2017-08-20', 1),
(33, 2, 10, 0, 'KING PRAWN MASALA (Mild)', '', 'King prawns cooked to our chef\'s recipe&lt;br /&gt;', '', '£16.95', '', '', 48, '2017-08-20', 1),
(34, 2, 10, 0, 'KING PRAWN TANDOORI', '', 'Jumbo prawns marinated overnight and barbecued in our clay oven,&lt;br /&gt;served sizzling with onion', '', '£17.95', '', '', 49, '2017-08-20', 1),
(35, 2, 10, 0, 'KING PRAWN BHUNA', '', 'King prawns cooked in a spicy sauce and tossed dry (traditional speciality)&lt;br /&gt;', '', '£16.95', '', '', 50, '2017-08-20', 1),
(36, 2, 10, 0, 'KING PRAWN SAG ', '', 'King prawn pieces cooked with spinach&lt;br /&gt;', '', '£16.95', '', '', 51, '2017-08-20', 1),
(37, 2, 10, 0, 'TANDOORI FISH', '', 'Marinated overnight and delicately cooked at low temperature in a clay oven and served with side salad &lt;strong&gt;(Chef\'s recommendation)&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;', '', '£13.50', '', '', 52, '2017-08-20', 1),
(38, 2, 10, 0, 'FISH CURRY OR BHUNA', '', 'Pan fried fish cooked in freshly ground spice, please ask the waiter to&lt;br /&gt;verify the type offish&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;', '', '£12.75', '', '', 53, '2017-08-20', 1),
(39, 2, 11, 0, 'CHICKEN TANDOORI (Half)', '', 'Spring chicken marinated overnight and cooked in our clay oven&lt;br /&gt;', '', '£10.75', '', '', 54, '2017-08-20', 1),
(40, 2, 11, 0, 'CHICKEN TIKKA LAHORI', '', 'Tender chicken pieces marinated in spice and roasted in our clay oven, served sizzling with onions&lt;br /&gt;&lt;br /&gt;', '', '£10.95', '', '', 55, '2017-08-20', 1),
(42, 2, 11, 0, 'SEEKH KEBAB', '', 'Minced lamb, mildly marinated, barbecued on skewers, served sizzling with onions&lt;br /&gt;', '', '£10.95', '', '', 56, '2017-08-20', 1),
(43, 2, 11, 0, 'KEBAB AFGHANI (Lamb Tikka) ', '', 'Tender lamb pieces marinated in spices and roasted in our clay oven with green peppers, onions &amp;amp; tomatoes. &lt;strong&gt;(Chef\'s recommendation)&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;', '', '£10.95', '', '', 57, '2017-08-20', 1),
(44, 2, 11, 0, 'MIXED GRILL', '', 'A platter of assorted tandoori delicate, tandoori chicken, chicken tikka, lamb tikka and seekh kebab with salad.&lt;br /&gt;&lt;br /&gt;', '', '£15.95', '', '', 58, '2017-08-20', 1),
(45, 2, 11, 0, 'TANDOORI BATER (Quail) ', '', 'Very tender quails, marinated in well blended spices and cooked in a clay oven at a low temperature&lt;br /&gt;&lt;br /&gt;', '', '£10.95', '', '', 59, '2017-08-20', 1),
(46, 2, 11, 0, 'TANDOORI LAMB CHOPS', '', 'Tender lamb chops marinated overnight and grilled in a charcoal clay oven&lt;br /&gt;', '', '£11.95', '', '', 60, '2017-08-20', 1),
(47, 2, 11, 0, 'CHICKEN/LAMB SHASHLICK', '', 'Tender chicken/lamb pieces marinated in spices and grilled on a skewer with onions, green peppers and tomatoes.&lt;br /&gt;&lt;br /&gt;', '', '£11.95', '', '', 61, '2017-08-20', 1),
(48, 2, 12, 0, 'LAMB/CHICKEN HYDRABADI', '', 'Fried with sliced onion, tomatoes, coconut, medium thick sauce curry&lt;br /&gt;', '', '£14.95', '', '', 62, '2017-08-20', 1),
(49, 2, 12, 0, 'ACHARI GOSTH OR CHICKEN', '', 'Chicken or lamb cooked with mango achar and onions (Madras hot)&lt;br /&gt;', '', '£14.95', '', '', 63, '2017-08-20', 1),
(50, 2, 12, 0, 'NAGA CHICKEN/LAMB', '', 'Spicy dish cooked with tomatoes &amp;amp; naga chilli (Vindaloo hot)', '', '£14.95', '', '', 64, '2017-08-20', 1),
(51, 2, 12, 0, 'GARLIC CHILLI CHICKEN MASALA', '', 'Fresh garlic with green chilli&lt;br /&gt;', '', '£14.95', '', '', 65, '2017-08-20', 1),
(52, 2, 12, 0, 'CHICKEN MANGO PULP', '', 'Cooked with mango and almond (Mild &amp;amp; sweet)&lt;br /&gt;', '', '£14.95', '', '', 66, '2017-08-20', 1),
(53, 2, 12, 0, 'CHICKEN NAWABI', '', 'Cooked with egg, coconut &amp;amp; almond (Mild)&lt;br /&gt;', '', '£15.95', '', '', 67, '2017-08-20', 1),
(54, 2, 12, 0, 'CHICKEN MORRISA', '', 'Cooked with chicken tikka slice, green chilli, green pepper &amp;amp; onion (Vindaloo hot)&lt;br /&gt;', '', '£14.95', '', '', 68, '2017-08-20', 1),
(55, 2, 13, 0, 'SPECIAL DINNER', '', '&amp;nbsp;&lt;strong&gt;(Specially recommended by the chef)&lt;/strong&gt;&lt;br /&gt;Tandoori chicken, chicken tikka, seekh kebab (Served as starter) &lt;br /&gt;Lamb Bhuna, Mixed Vegetables, Pilau Rice &amp;amp; nan (Served as main course)', '', '£24.95', '', '', 69, '2017-08-20', 1),
(56, 2, 13, 0, 'NON VEGETABLE DINNER', '', 'A traditional complete meal served on a thali with tandoori chicken, pilau rice, nan, chicken tikka massala, Lamb rogan josh, vegetable curry, raitha.&lt;br /&gt;&lt;br /&gt;', '', '£19.95', '', '', 0, '2017-09-16', 1),
(57, 2, 13, 0, 'VEGETARIAN DINNER', '', 'A traditional Indian vegetarian bho)an served on a thali with vegetables curry, bhindi, sag, raitha, pilau rice, nan and onion bhaji&lt;br /&gt;&lt;br /&gt;', '', '£17.95', '', '', 72, '2017-08-20', 1),
(58, 2, 13, 0, 'FISH DINNER', '', 'Tandoorifish with vegetable samosa, vegetable curry, pilau rice, nan bread&lt;br /&gt;', '', '£18.95', '', '', 73, '2017-08-20', 1),
(59, 2, 13, 0, 'BHATTI DELIGHT (For two persons)', '', '&lt;p&gt;Starter: 1 Mixed grill, 2 Main dish (lamb or chicken), 1 any Vegetable side dish, 2 pilau rice and nan&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Please ask for exceptional choice&lt;/strong&gt;&lt;br /&gt;&lt;/p&gt;', '', '£44.95', '', '', 74, '2017-08-20', 1),
(60, 2, 14, 0, 'CHICKEN TIKKA MASALA', '', 'Tender barbecued chicken pieces cooked in butter, fresh cream and fresh ground spices, Mild dish (Chef\'s recommendation)', '', '£10.50', '', '', 75, '2017-08-20', 1),
(61, 2, 14, 0, 'BUTTER CHICKEN (Mild dish)', '', 'Tender pieces of chicken barbecued and cooked in tomato, cream &amp;amp; nuts', '', '£10.50', '', '', 76, '2017-08-20', 1),
(62, 2, 14, 0, 'CHICKEN KORMA (Mild dish)', '', 'Chicken cooked in mildly spiced sauce and flavoured with cream and nuts&lt;br /&gt;', '', '£9.95', '', '', 78, '2017-08-20', 1),
(63, 2, 14, 0, 'CHICKEN KARAHI', '', 'Chicken cooked in spicy sauce and tossed dry in an iron karahi&lt;br /&gt;', '', '£10.50', '', '', 77, '2017-08-20', 1),
(64, 2, 14, 0, 'CHICKEN CURRY/MADRAS! VINDALOO/PHALL', '', 'Pieces of chicken cooked in very strong spices&lt;br /&gt;', '', '£9.95', '', '', 79, '2017-08-20', 1),
(65, 2, 14, 0, 'CHICKEN JALFREZI', '', 'Boneless chicken pieces in a blend of exotic spices with ginger, green chilli. Onion &amp;amp; capsicum&lt;br /&gt;', '', '£10.50', '', '', 80, '2017-08-20', 1),
(66, 2, 14, 0, 'CHICKEN PATHIA', '', 'Hot, sweet &amp;amp; sour cooked with chicken&lt;br /&gt;', '', '£9.95', '', '', 81, '2017-08-20', 1),
(67, 2, 14, 0, 'CHICKEN DANSAK', '', 'Boneless chicken pieces cooked in spicy lentils&lt;br /&gt;', '', '£10.50', '', '', 82, '2017-08-20', 1),
(68, 2, 14, 0, 'CHICKEN BALTI', '', 'Tender chicken pieces cooked in a special balti sauce&lt;br /&gt;', '', '£10.20', '', '', 83, '2017-08-20', 1),
(69, 2, 14, 0, 'CHICKEN SAG', '', 'Tender chicken pieces cooked with spinach.&lt;br /&gt;', '', '£10.50', '', '', 84, '2017-08-20', 1),
(70, 2, 14, 0, 'CHICKEN PASANDA', '', 'Thin chicken fillet marinated in spices and yoghurt, cooked in herbs. A Kashmiri village recipe. Mild dish', '', '£10.50', '', '', 85, '2017-08-20', 1),
(71, 2, 14, 0, 'CHICKEN ROGAN JOSH', '', 'Chicken cooked with tomatoes, green pepper and served in a spicy sauce', '', '£9.95', '', '', 86, '2017-08-20', 1),
(72, 2, 14, 0, 'CHICKEN DUPIAZA', '', 'Tender chicken pieces cooked in a spicy sauce and brown onions, tossed dry&lt;br /&gt;', '', '£9.95', '', '', 87, '2017-08-20', 1),
(73, 2, 20, 0, 'LAMB DANSAK', '', 'Tender lamb cooked in spicy lentils&lt;br /&gt;', '', '£10.75', '', '1', 88, '2017-08-22', 1),
(74, 2, 20, 0, 'LAMB BHUNA', '', '&amp;nbsp;(Tender lamb pot, Roasted with Ground green spice)&lt;br /&gt;', '', '£9.95', '', '', 89, '2017-08-22', 1),
(75, 2, 20, 0, 'LAMB CURRY/MADRAS! VINDALOO/PHALL', '', 'Pieces of lamb cooked in very strong spices', '', '£9.95', '', '', 70, '2017-08-22', 1),
(76, 2, 20, 0, 'LAMB PATHIA ', '', 'Hot, sweet &amp;amp;sour cooked with Lamb', '', '£10.50', '', '', 90, '2017-08-22', 1),
(77, 2, 20, 0, 'LAMB JALFREZI', '', 'Boneless lamb pieces in a blend of exotic spices with ginger. Tomatoes, onion &amp;amp; capsicum.&lt;br /&gt;', '', '£10.50', '', '', 0, '2017-08-28', 1),
(78, 2, 20, 0, 'LAMB ROGAN JOSH', '', 'Lamb cooked with tomatoes, green pepper and served in a spicy sauce', '', '£9.95', '', '', 2, '2017-08-28', 1),
(79, 2, 20, 0, 'LAMB DUPIAZA', '', 'Tender lamb pieces cooked in a spicy sauce and brown onions, tossed dry.', '', '£9.95', '', '', 4, '2017-08-28', 1),
(80, 2, 20, 0, 'KARAHI GOSHT', '', 'Tender lamb pieces cooked in spicy sauce and tossed dry in an iron karahi.', '', '£10.50', '', '', 7, '2017-08-28', 1),
(81, 2, 20, 0, 'LAMB BALTI', '', 'Tender lamb pieces cooked in a special balti sauce&lt;br /&gt;', '', '£10.50', '', '', 8, '2017-08-28', 1),
(82, 2, 20, 0, 'LAMB SAG', '', 'Tender lamb pieces cooked with spinach&lt;br /&gt;', '', '£10.95', '', '', 10, '2017-08-22', 1),
(83, 2, 20, 0, 'LAMB CHOP MASALA ', '', 'Baby tender lamb chops cooked in exotic spicy sauce. &lt;strong&gt;(Chef\'s recommendation)&lt;/strong&gt;&lt;br /&gt;', '', '£12.95', '', '', 13, '2017-08-22', 1),
(84, 2, 20, 0, 'LAMB PASANDA (Mild dish)', '', 'Thin lambflllet marinated in spices and yoghurt, cooked in herbs. A Kashmiri village recipe. &amp;nbsp;&lt;strong&gt;Chef\'s recommendation&lt;/strong&gt; &lt;br /&gt;', '', '£10.75', '', '', 15, '2017-08-22', 1),
(85, 2, 20, 0, 'LAMB TIKKA MASALA (Mild dish)', '', 'Tender barbecued lamb pieces cooked in butter, fresh cream and fresh ground spices. &lt;strong&gt;(Chef\'s recommendation)&lt;/strong&gt;&lt;br /&gt;', '', '£10.75', '', '', 23, '2017-08-22', 1),
(86, 2, 20, 0, 'LAMB KORMA (Mild dish)', '', 'Lamb cooked in mildly spiced sauce and flavoured with cream and nuts', '', '£9.95', '', '', 76, '2017-08-22', 1),
(87, 2, 20, 0, 'CHANA GOSHT', '', 'Chickpeas with lam (medium hot)', '', '£12.95', '', '', 77, '2017-08-22', 1),
(88, 2, 22, 0, 'CHILDREN\'S MENU', '', 'CHICKEN TIKKA &amp;amp; CHIPS&lt;br /&gt;CHICKEN TIKKA, SALAD &amp;amp; NAN&lt;br /&gt;OMELETTE &amp;amp; CHIPS&lt;br /&gt;CHICKEN &amp;amp; CHIPS&lt;br /&gt;FISH FINGER &amp;amp; CHIPS&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;', '', '£7.50', '', '', 78, '2017-08-23', 1),
(89, 2, 24, 0, 'BHATTI SPEIAL BIRYANI', '', 'Saffron flavoured rice cooked with chicken tikka, lamb tikka, prawns, topped with fried egg.', '', '£16.95', '', '', 79, '2017-08-23', 1),
(90, 2, 24, 0, 'LAMB BIRYANI', '', 'Saffron flavoured rice prepared to our own chef\'s recipe, served with special sauce', '', '£13.95', '', '', 80, '2017-08-23', 1),
(91, 2, 24, 0, 'CHICKEN BIRYANI (Chicken)', '', 'Saffron flavoured rice prepared to our own chef\'s recipe, served with special sauce', '', '£13.75', '', '', 81, '2017-08-23', 1),
(92, 2, 24, 0, 'LAMB / CHICKEN TIKKA BIRYANI (as above)', '', '&amp;nbsp;', '', '£14.95', '', '', 82, '2017-08-23', 1),
(93, 2, 24, 0, 'PRAWN BIRYANI', '', 'Saffron flavoured rice prepared to our own chef\'s recipe, served with special sauce', '', '£14.95', '', '', 83, '2017-08-23', 1),
(94, 2, 24, 0, 'KING PRAWN BIRYANI', '', 'Saffron flavoured rice prepared to our own chef\'s recipe, served with special sauce', '', '£16.95', '', '', 84, '2017-08-23', 1),
(95, 2, 24, 0, 'VEGETABLE BIRYANI', '', 'A mixture of rice and vegetables with various spices, served with special sauce', '', '£11.95', '', '', 85, '2017-08-23', 1),
(96, 2, 24, 0, 'BHATTI\'S SPECIAL FRIED RICE', '', 'Saffron flavoured rice prepared to our own chef\'s recipe, with egg &amp;amp;peas.', '', '£3.95', '', '', 86, '2017-08-23', 1),
(97, 2, 24, 0, 'PILAU RICE', '', 'Long grain rice flavoured with saffron', '', '£3.60', '', '', 87, '2017-08-23', 1),
(98, 2, 24, 0, 'BOILED RICE', '', 'Boiled long grain rice&lt;br /&gt;', '', '£3.25', '', '', 88, '2017-08-23', 1),
(99, 2, 24, 0, 'MUSHROOM RICE', '', 'Long grain pilau rice with mushroom&lt;br /&gt;', '', '£3.95', '', '', 3, '2017-08-28', 1),
(100, 2, 24, 0, 'EGG /LEMON / COCONUT / KEEMA', '', 'RICE Cooked with pilau rice', '', '£3.95', '', '', 9, '2017-08-23', 1),
(101, 2, 25, 0, 'NAN ', '', 'Leavened bread infineflour baked in tandoor&lt;br /&gt;', '', '£2.95', '', '', 17, '2017-08-23', 1),
(102, 2, 25, 0, 'ONION KULCHA', '', 'Leavened bread filled with mildly spiced onions and fresh coriander', '', '£3.50', '', '', 22, '2017-08-23', 1),
(103, 2, 25, 0, 'KEEMA NAN', '', 'Leavened bread filled with mildly spiced minced meat&lt;br /&gt;', '', '£3.95', '', '', 24, '2017-08-23', 1),
(104, 2, 25, 0, 'PESHWARI NAN', '', 'Leavened bread filled with dry fruits (sweet)&lt;br /&gt;', '', '£3.50', '', '', 22, '2017-08-23', 1),
(105, 2, 25, 0, 'GARLIC NAN', '', 'Leavened bread with garlic&lt;br /&gt;', '', '£3.25', '', '', 24, '2017-08-23', 1),
(106, 2, 25, 0, 'CHEESE NAN', '', 'Leavened bread filled with cheese&lt;br /&gt;', '', '£3.50', '', '', 23, '2017-08-23', 1),
(107, 2, 25, 0, 'TANDOORI ROTI', '', 'Leavened whole wheat flour bread baked in tandoor.&lt;br /&gt;', '', '£2.50', '', '', 26, '2017-08-23', 1),
(108, 2, 25, 0, 'PARATHA', '', 'Buttered leavened whole wheat bread.&lt;br /&gt;', '', '£3.45', '', '', 29, '2017-09-14', 1),
(109, 2, 25, 0, 'STUFFED PARATHA', '', 'Buttered leavened whole wheat bread filled with mildly spiced potatoes', '', '£3.45', '', '', 32, '2017-08-23', 1),
(110, 2, 25, 0, 'CHAPATI', '', 'Soft dry thin bread made on the pan&lt;br /&gt;', '', '£2.50', '', '', 5, '2017-08-28', 1),
(111, 2, 25, NULL, 'CHIPS', '', 'Fresh yoghurt drink or natural, sweet and mango', '', '£2.80', '', '', 11, '2017-08-23', 1),
(127, 2, 23, 6, 'TARKA DAL', '', 'Yellow lentils cooked in spices', '', '6.95', '', '', 24, '2017-08-26', 1),
(128, 2, 23, 7, 'TARKA DAL', '', 'Yellow lentils cooked in spices', '', '4.45', '', '', 21, '2017-08-26', 1),
(129, 2, 23, 8, 'Main', '', '', '', '£6.95', '', '', 24, '2017-08-26', 1),
(130, 2, 23, 8, 'Side', '', '', '', '4.45', '', '', 23, '2017-08-26', 1),
(131, 2, 23, 9, 'Main', '', '', '', '£7.50', '', '', 14, '2017-08-26', 1),
(132, 2, 23, 9, 'Side', '', '', '', '£4.95', '', '', 16, '2017-08-26', 1),
(133, 2, 23, 10, 'Main', '', '', '', '£7.50', '', '', 18, '2017-08-26', 1),
(135, 2, 23, 11, 'Main', '', '', '', '£7.95', '', '', 23, '2017-08-26', 1),
(136, 2, 23, 11, 'Side', '', '', '', '£5.45', '', '', 19, '2017-08-26', 1),
(139, 2, 23, 10, 'Side', '', '', '', '£4.95', '', '', 91, '2017-08-26', 1),
(140, 2, 23, 12, 'Main', '', '', '', '£7.95', '', '', 92, '2017-08-26', 1),
(141, 2, 23, 12, 'Side', '', '', '', '£5.45', '', '', 93, '2017-08-26', 1),
(142, 2, 23, 13, 'Main', '', '', '', '£7.95', '', '', 94, '2017-08-26', 1),
(143, 2, 23, 13, 'Side', '', '', '', '£5.45', '', '', 95, '2017-08-26', 1),
(144, 2, 23, 14, 'Main', '', '', '', '£7.95', '', '', 96, '2017-08-26', 1),
(145, 2, 23, 14, 'Side', '', '', '', '£5.45', '', '', 97, '2017-08-26', 1),
(146, 2, 23, 15, 'Main', '', '', '', '£7.50', '', '', 98, '2017-08-26', 1),
(147, 2, 23, 15, 'Side', '', '', '', '4.95', '', '', 99, '2017-08-26', 1),
(148, 2, 23, 16, 'Main', '', '', '', '£7.50', '', '', 100, '2017-08-26', 1),
(149, 2, 23, 16, 'Side', '', '', '', '4.95', '', '', 101, '2017-08-26', 1),
(150, 2, 23, 17, 'Main', '', '', '', '£7.50', '', '', 102, '2017-08-26', 1),
(151, 2, 23, 17, 'Side', '', '', '', '£4.95', '', '', 103, '2017-08-26', 1),
(152, 2, 23, 18, 'Main', '', '', '', '£7.95', '', '', 104, '2017-08-26', 1),
(153, 2, 23, 18, 'Side', '', '', '', '5.45', '', '', 105, '2017-08-26', 1),
(154, 2, 23, 19, 'Main', '', '', '', '£7.95', '', '', 106, '2017-08-26', 1),
(155, 2, 23, 19, 'Side', '', '', '', '5.45', '', '', 107, '2017-08-26', 1),
(156, 2, 23, 20, 'Main', '', '', '', '£7.95', '', '', 108, '2017-08-26', 1),
(157, 2, 23, 20, 'Side', '', '', '', '£5.45', '', '', 109, '2017-08-26', 1),
(158, 2, 23, 0, 'RAITHA', '', 'Cool whipped yoghurt with cucumber, tomatoes, potatoes and mint', '', '£2.50', '', '', 110, '2017-08-26', 1),
(159, 2, 23, 0, 'FRESH GREEN SALAD', '', '', '', '£3.25', '', '', 111, '2017-08-26', 1),
(160, 2, 23, 0, 'ONION SALAD', '', '', '', '£2.95', '', '', 112, '2017-08-26', 1),
(161, 2, 23, 0, 'Chutney (per head)', '', '', '', '80p', '', '', 113, '2017-08-26', 1),
(162, 2, 23, 0, 'Lassi', '', '', '', '2.95', '', '', 114, '2017-08-26', 1),
(163, 2, 14, 0, 'CHICKEN BHUNA', '', '', '', '£9.95', '', '', 115, '2017-09-14', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_view`
-- (See below for the actual view)
--
CREATE TABLE `product_view` (
`id` int(20)
,`category_id` int(20)
,`sub_category_id` int(20)
,`name` varchar(255)
,`photo` text
,`short_details` text
,`long_details` text
,`new_price` varchar(255)
,`old_price` varchar(255)
,`quantity` varchar(255)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `promo_action`
--

CREATE TABLE `promo_action` (
  `id` int(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `photo` text,
  `details` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo_action`
--

INSERT INTO `promo_action` (`id`, `title`, `photo`, `details`, `date`, `status`) VALUES
(1, 'TRIP ADVISOR Reviews,', 'photo_upload__1490512613_1490512613.jpg', '&lt;div class=\"quote isNew\"&gt;&lt;a href=\"https://www.tripadvisor.co.uk/ShowUserReviews-g186338-d1043911-r517474115-Bhatti-London_England.html#REVIEWS\" id=\"rn517474115\"&gt;&lt;span class=\"noQuotes\"&gt;Friday Night curry *****&lt;br /&gt;&lt;/span&gt;&lt;/a&gt;&lt;/div&gt;&lt;p class=\"partial_entry\"&gt;We were the first ones in! Did this mean that it wasn\'t popular? Well we wanted an Indian and so we entered in. They put us in the window - good move given our concerns, and before long people were flocking in and the restaurant was full. As to the food, well it was delicious. My king Prawn Bhuna was very good and my wife\'s chicken pasanda was devoured with great enjoyment. &lt;br /&gt;All in all a really good experience and recommended&lt;/p&gt;&lt;p class=\"partial_entry\"&gt;&lt;strong&gt;Pipanjay, Label 2 Contributor&lt;/strong&gt;&lt;/p&gt;', '2017-08-28', 1),
(2, 'TRIP ADVISOR Reviews', 'photo_upload__1490512677_1490512677.jpg', '&lt;p&gt;&lt;strong&gt;&lt;/strong&gt;&lt;span class=\"noQuotes\"&gt;&lt;strong&gt;\"Not plush but tasty Indian food\" *****&lt;br /&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;Unpretententious. We had king prawn rogan gosh [not on menu but done for us] and lamb dansak, both very enjoyable The dansak was the best I\'ve tasted for some years.&lt;span class=\"noQuotes\"&gt;&lt;strong&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span class=\"noQuotes\"&gt;&lt;strong&gt;Uprrot, Level 4 contributor&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;', '2017-08-16', 1),
(3, 'Google Reviews', 'photo_upload__1505513134_1505513134.jpg', '&lt;p&gt;&lt;span class=\"r-i7v_HD6tkvvw\"&gt;****&lt;br /&gt;Came in off the street. Seated straight away. Served quickly. Friendly staff. Had the fish which was tasty. Not got bill yet. I enjoyed it&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;a class=\"_e8k\" href=\"https://www.google.com/maps/contrib/103516706253650245053/reviews?hl=en-GB&amp;sa=X&amp;ved=0ahUKEwjbx8n-2vnVAhVG4YMKHY2PCZoQvvQBCA0\" style=\"color:black;text-decoration:none;\"&gt;&lt;strong&gt;Dave Giles&lt;/strong&gt;&lt;/a&gt;&lt;span class=\"r-i7v_HD6tkvvw\"&gt;&lt;/span&gt;&lt;/p&gt;', '2017-09-15', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `promo_action_view`
-- (See below for the actual view)
--
CREATE TABLE `promo_action_view` (
`id` int(20)
,`title` varchar(255)
,`photo` text
,`details` text
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(20) NOT NULL,
  `reservation_date` varchar(255) DEFAULT NULL,
  `reservation_time` varchar(255) DEFAULT NULL,
  `guest_number` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `reservation_message` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `reservation_date`, `reservation_time`, `guest_number`, `name`, `phone`, `email`, `reservation_message`, `date`, `status`) VALUES
(1, '2017-04-06', '12:30 AM', '2', 'Fakhrul Islam Talukder', '534553534345345', 'fakhrulislamtalukder@gmail.com', NULL, '2017-04-05', 1),
(2, '04/06/2017', '7:00pm', '2', 'Fakhrul Islam Talukder', '534553534345345', 'fakhrulislamtalukder@gmail.com', NULL, '2017-04-05', 1),
(3, '2017-04-25', '7:30 PM', '10', 'Fakhrul Islam Talukder', '534553534345345', 'fakhrulislamtalukder@gmail.com', NULL, '2017-04-16', 1),
(4, '2017-04-18', '07:50 PM', '10', 'Ariful Islam Shohag', '534553', 'aminulislam.diit@gmail.com', 'dasdas', '2017-04-16', 1),
(5, '2017-04-18', '7:30 PM', '2', 'Fakhrul Islam Talukder', '534553534345345', 'fakhrulislamtalukder@gmail.com', 'cdsad', '2017-04-17', 1),
(6, '2017-04-18', '07:30 PM', '4', 'Fakhrul Islam Talukder', '534553534345345', 'fakhrulislamtalukder@gmail.com', 's', '2017-04-17', 1),
(7, '2017-04-18', '12:30 AM', '2', 'Fakhrul Islam Talukder', '534553', 'fakhrulislamtalukder@gmail.com', 'sdf', '2017-04-17', 1),
(8, '2017-08-14', '05:35 PM', '8', 'shaiful islam', '01781 709777', 'shaiful1408@gmail.com', 'test', '2017-08-13', 1),
(9, '2017-08-13', '04:35 PM', '2', 'Fakhrul Islam Talukder', '01677136045', 'fakhrul606399@gmail.com', 'sdafsafsde', '2017-08-13', 1),
(10, '2017-08-13', '04:35 PM', '2', 'Fakhrul Islam Talukder', '013456789', 'fakhrul606399@gmail.com', 'sdafsafsde', '2017-08-13', 1),
(11, '2017-08-14', '07:05 AM', '2', 'kamal test', '123456', 'kamalhemel@gmail.com', 'test', '2017-08-13', 1),
(12, '2017-08-14', '02:40 AM', '10', 'Parash', '+8801860748020', 'shaiful1408@gmail.com', 'demo', '2017-08-13', 1),
(13, '2017-08-15', '10:30 AM', '8', 'shaiful islam', '123456', 'shaiful1408@gmail.com', 'test', '2017-08-13', 1),
(14, '2017-08-15', '10:30 AM', '9', 'kamal test', '256398', 'kamalhemel@gmail.com', 'test', '2017-08-13', 1),
(15, '2017-08-14', '07:35 PM', '4', 'Pattern Default Night', '+8801860748020', 'f.bhuyian@gmail.com', 'hyuhkj', '2017-08-14', 1),
(16, '2017-08-16', '05:30 PM', '2', 'shaiful islam', '123456', 'shaiful1408@gmail.com', 'test', '2017-08-14', 1),
(17, '2017-08-16', '01:30 PM', '6', 'shaiful islam', '01258963', 'shaiful1408@gmail.com', 'tesyt', '2017-08-14', 1),
(18, '2017-08-15', '06:30 PM', '7', 'Pattern Default Day', '+8801860748020', 'f.bhuyian@gmail.com', 'sajsjjs', '2017-08-15', 1),
(19, '2017-08-19', '05:10 PM', '2', 'PARASG', '565565456', 'PARASH@gmail.com', NULL, '2017-08-19', 1),
(20, '2017-08-31', '08:15 PM', '2', 'dasda', '324523523', 'afasf@assf.dfgsd', NULL, '2017-08-19', 1),
(21, '2017-08-30', '08:15 PM', '2', 'fsdfsfa', '53224562646', 'sdfsadfsa@hsfdh.hfghdf', NULL, '2017-08-19', 1),
(22, '2017-08-26', '08:20 AM', '2', 'fa', '4234', 'fa@gm.hg', NULL, '2017-08-19', 1),
(23, '2017-08-29', '11:25 AM', '2', 'fakhrul', '54', 'f@gmail.com', NULL, '2017-08-19', 1),
(24, '2017-08-29', '09:25 PM', '3', 'fdsf', '353245325', 'fasfasfasfasfasfas@sfdsf./com', NULL, '2017-08-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_slider`
--

CREATE TABLE `reservation_slider` (
  `id` int(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `photo` text,
  `details` text,
  `button_name` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_slider`
--

INSERT INTO `reservation_slider` (`id`, `title`, `photo`, `details`, `button_name`, `button_link`, `date`, `status`) VALUES
(1, 'See Our Menu', 'photo_upload__1490642017_1490642017.jpg', 'Lorem Ipsum has been the industry&amp;rsquo;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'See Our Menu', 'our-menu.php', '2017-03-27', 1),
(2, 'Delivery Service', 'photo_upload__1490642078_1490642078.jpg', 'Lorem Ipsum has been the industry&amp;rsquo;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Order Online', 'shop.php', '2017-03-27', 1),
(3, 'See Our Interior', 'photo_upload__1490642121_1490642121.jpg', 'Lorem Ipsum has been the industry&amp;rsquo;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Our Gallery', 'gallery.php', '2017-03-27', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `reservation_slider_view`
-- (See below for the actual view)
--
CREATE TABLE `reservation_slider_view` (
`id` int(20)
,`title` varchar(255)
,`photo` text
,`details` text
,`button_name` varchar(255)
,`button_link` varchar(255)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `reservation_view`
-- (See below for the actual view)
--
CREATE TABLE `reservation_view` (
`id` int(20)
,`reservation_date` varchar(255)
,`reservation_time` varchar(255)
,`guest_number` varchar(255)
,`name` varchar(255)
,`phone` varchar(255)
,`email` varchar(255)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `seo_`
--

CREATE TABLE `seo_` (
  `id` int(20) NOT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_descriptions` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seo_`
--

INSERT INTO `seo_` (`id`, `meta_keywords`, `meta_descriptions`, `date`, `status`) VALUES
(1, 'Cristiano, Restaurant, food', 'Business partners, Kelly Barker, from South Louisiana, and Cristiano Raffignone, a native of Liguria, Italy first met and shared their passion for worldly cuisine in 1990 when they met in NYC.\r\n\r\nIn 2000, the team opened Cristiano Ristorante in Houma. Cristiano\'s, led by Chef Lindsay Mason, specializes in  northern Italian cuisine and also produces a seasonal menu focusing on the freshest local ingredients. The combination provides an experience that surpasses the imagination. \r\n\r\nIn May of 2013, the KC Restaurant Group purchased Dick & Jenny\'s. The popular, renowned restaurant is known for it\'s eclectic style of New Orleans cuisine. Kelly and Cristiano intend to build a culinary bridge between their two boots, Louisiana and Italy. Chef Sparr works to renew the essence of D&J, while maintaining the consistency of this restaurant group\'s vision.\r\n\r\nOur restaurants are available for all your private party needs, from intimate dinners to birthday celebrations. Let us create the perfect venue for your rehearsal dinner, wedding ceremony, reception, holiday party or business meeting. We also offer off-site catering for any size event, from drop off to full service.', '2017-05-07', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `seo__view`
-- (See below for the actual view)
--
CREATE TABLE `seo__view` (
`id` int(20)
,`meta_keywords` varchar(255)
,`meta_descriptions` text
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `site_basic_info`
--

CREATE TABLE `site_basic_info` (
  `id` int(20) NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `photo` text,
  `address` text,
  `phone_number` varchar(255) DEFAULT NULL,
  `restaurant_open_1` varchar(255) DEFAULT NULL,
  `restaurant_open_2` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `tripadvisor_link` varchar(255) DEFAULT NULL,
  `yelp_link` varchar(255) DEFAULT NULL,
  `map` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_basic_info`
--

INSERT INTO `site_basic_info` (`id`, `site_name`, `photo`, `address`, `phone_number`, `restaurant_open_1`, `restaurant_open_2`, `facebook_link`, `twitter_link`, `tripadvisor_link`, `yelp_link`, `map`, `date`, `status`) VALUES
(1, 'Bhatti Indian Restaurant', 'photo_upload__1503594792_1503594792.png', '37 Great Queen St, London WC2B 5AA', '020 7831 0817', 'Mon - Sat: 12:00 pm - 12:00 am', 'Sun : 12:00 pm - 11:00 pm', '#', '#', '#', '#', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.895743416709!2d-0.12406698398274753!3d51.51512867963635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b34b59b2e75%3A0xd17f23f57c8ee145!2s37+Great+Queen+St%2C+London+WC2B+5AA%2C+UK!5e0!3m2!1sen!2sbd!4v1503066365700\" width=\"800\" height=\"600\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2017-08-24', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `site_basic_info_view`
-- (See below for the actual view)
--
CREATE TABLE `site_basic_info_view` (
`id` int(20)
,`site_name` varchar(255)
,`photo` text
,`address` text
,`phone_number` varchar(255)
,`restaurant_open_1` varchar(255)
,`restaurant_open_2` varchar(255)
,`facebook_link` varchar(255)
,`twitter_link` varchar(255)
,`tripadvisor_link` varchar(255)
,`yelp_link` varchar(255)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(20) NOT NULL,
  `slider_title` varchar(255) DEFAULT NULL,
  `slider_sub_title` varchar(255) DEFAULT NULL,
  `photo` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_title`, `slider_sub_title`, `photo`, `date`, `status`) VALUES
(1, 'Bhatti Indian Restaurant, AWARD WINNER, LBC Radio', 'Serving Since 1985', 'photo_upload__1502876870_1502876870.jpg', '2017-08-16', 1),
(2, 'Bhatti Indian Restaurant, AWARD WINNER, LBC Radio', 'Serving Since 1985', 'photo_upload__1502876805_1502876805.jpg', '2017-08-22', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `slider_view`
-- (See below for the actual view)
--
CREATE TABLE `slider_view` (
`id` int(20)
,`slider_title` varchar(255)
,`slider_sub_title` varchar(255)
,`photo` text
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(20) NOT NULL,
  `category_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` text,
  `description` text,
  `page_link` varchar(255) DEFAULT NULL,
  `is_active` int(2) DEFAULT NULL,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `name`, `photo`, `description`, `page_link`, `is_active`, `priority`, `date`, `status`) VALUES
(9, 2, 'STARTERS', 'photo_upload__1492374681_1492374681.jpg', 'Starters, Appetisers and Soup', 'our menu', 1, 0, '2017-09-14', 1),
(10, 2, 'SEA FOOD DISHES', 'photo_upload__1502622229_1502622229.jpg', 'Delicious Seafood Dishes', 'our menu', 1, 1, '2017-09-14', 1),
(11, 2, 'TANDOORI DISHES', 'photo_upload__1492374809_1492374809.jpg', 'An introduction to the clay oven. Tandoor is a traditional clay oven, known for the mysterious and unique flavour it gives to a variety of meats and breads.&lt;br /&gt;', 'our menu', 1, 2, '2017-09-14', 1),
(12, 2, 'CHEF\'S SPECIALS', 'photo_upload__1492374906_1492374906.png', 'Shifarish e khas', 'our menu', 1, 3, '2017-08-20', 1),
(13, 2, 'HOUSE RECOMMENDATIONS', 'photo_upload__1502913476_1502913476.jpg', '', 'our menu', 1, 4, '2017-09-14', 1),
(14, 2, 'CHICKEN DISHES', 'photo_upload__1503245555_1503245555.jpg', 'Exquisite Chicken Dishes', 'our menu', 1, 5, '2017-09-14', 1),
(15, 3, 'Tandoori Dish', '', NULL, 'our menu', 1, 12, '2017-04-17', 1),
(16, 3, 'Traditional Dish', '', NULL, 'our menu', 1, 13, '2017-04-17', 1),
(17, 3, 'Biryani Dish', '', NULL, 'our menu', 1, 14, '2017-04-17', 1),
(18, 3, 'Vegitable', '', NULL, 'our menu', 1, 15, '2017-04-17', 1),
(19, 3, 'Desserts', '', NULL, 'our menu', 1, 11, '2017-04-17', 1),
(20, 2, 'LAMB DISHES', '', 'Tender boneless lamb dishes', 'our menu', 1, 6, '2017-09-14', 1),
(22, 2, 'CHILDREN\'S MENU', '', '', 'our menu', 1, 7, '2017-09-14', 1),
(23, 2, 'VEGETABLE DISHES', '', 'Delicious Vegetables', 'our menu', 1, 8, '2017-09-14', 1),
(24, 2, 'RICE SPECIALITIES', '', '', 'our menu', 1, 9, '2017-09-14', 1),
(25, 2, 'NAN - ROTI', '', 'Freshly baked Indian bread, specially prepared in our clay oven', 'our menu', 1, 10, '2017-09-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_menu`
--

CREATE TABLE `sub_category_menu` (
  `id` int(20) NOT NULL,
  `category_id` int(20) DEFAULT NULL,
  `sub_category_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `details` text,
  `is_active` int(2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category_menu`
--

INSERT INTO `sub_category_menu` (`id`, `category_id`, `sub_category_id`, `name`, `details`, `is_active`, `date`, `status`) VALUES
(8, 2, 23, 'TARKA DAL', 'Yellow lentils cooked in spices', 1, '2017-08-26', 1),
(9, 2, 23, 'NAVARATAN CURRY (Mix Veg)', 'Mixed vegetables cooked with nuts and mild spices', 1, '2017-08-26', 1),
(10, 2, 23, 'ALOO GOBI OR SAG', 'Cauliflower &amp;amp; potatoes cooked with freshly ground spices or spinach &amp;amp; potatoes', 1, '2017-08-26', 1),
(11, 2, 23, 'MATAR OR SAG PANEER', 'Home made special cottage cheese cooked with peas or spinach, onion, herbs and spices', 1, '2017-08-26', 1),
(12, 2, 23, 'BHINDI MASALA', 'Ladies finger (okra) cooked with onions, herbs &amp;amp; spices', 1, '2017-08-26', 1),
(13, 2, 23, 'BRINJAL BHAJI', 'Fresh aubergine cooked in onion, herbs &amp;amp; spices', 1, '2017-08-26', 1),
(14, 2, 23, 'MUSHROOM BHAJI', 'Fresh button mushrooms cooked with onion, herbs &amp;amp; spices', 1, '2017-08-26', 1),
(15, 2, 23, 'SAG BHAJI', 'Fresh spinach cooked with onion, herbs &amp;amp; spices', 1, '2017-08-26', 1),
(16, 2, 23, 'BOMBAY ALOO', 'Potatoes cooked in herbs and spices', 1, '2017-08-26', 1),
(17, 2, 23, 'CHANA MASALA', 'Chick Peas cooked in spices and tomatoes', 1, '2017-08-26', 1),
(18, 2, 23, 'BUTTER PANEER MASALA (PaneerMakhani)', 'Home made fresh cottage cheese cooked in a mild tomato sauce with cream.', 1, '2017-08-26', 1),
(19, 2, 23, 'DAL MAKANI', 'Mixed lentils with butter (medium hot)', 1, '2017-08-26', 1),
(20, 2, 23, 'MALAI KOFTA', 'Vegetables balls cooked in a mild sauce with cream and nuts', 1, '2017-08-26', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sub_category_menu_view`
-- (See below for the actual view)
--
CREATE TABLE `sub_category_menu_view` (
`id` int(20)
,`category_id` int(20)
,`sub_category_id` int(20)
,`name` varchar(255)
,`details` text
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sub_category_view`
-- (See below for the actual view)
--
CREATE TABLE `sub_category_view` (
`id` int(20)
,`category_id` int(20)
,`name` varchar(255)
,`photo` text
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `team_and_condition`
--

CREATE TABLE `team_and_condition` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `details` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_and_condition`
--

INSERT INTO `team_and_condition` (`id`, `name`, `details`, `date`, `status`) VALUES
(1, 'Metus auctor fringilla', '&lt;table&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td&gt;&lt;h2&gt;&lt;span class=\"title\" style=\"font:400 14px/1 \'Lora\', sans-serif;font-weight:normal;\"&gt;TANDOORI BATER (Quail)&lt;br /&gt;&lt;/span&gt;&lt;em&gt;Very tender quails, marinated in well blended spices and cooked in a clay oven at a low temperature&lt;/em&gt;&lt;span class=\"title\" style=\"font:400 14px/1 \'Lora\', sans-serif;font-weight:normal;\"&gt;&lt;br /&gt;&lt;/span&gt;&lt;br /&gt;&lt;/h2&gt;&lt;/td&gt;&lt;td&gt;&lt;span class=\"pr-font dm-price\"&gt;&amp;pound;4.95&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;&lt;/td&gt;&lt;td&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '2017-09-14', 1),
(2, 'Cum sociss', '&lt;h2&gt;Pellentesque Nibh Mattis 2&lt;/h2&gt;&lt;p&gt;Donec ullamcorper nulla non metus auctor fringilla. Cum sociis \r\nnatoque penatibus el magnis dis parturient montes, nascetur ridiculus \r\nmus. Cras justo odio, dapibus ac facukusus ubm egestas eet qyan. Nullam \r\nid dolor id nibh ultricies vehicula ut od elit. Donec ullamcorper nulla \r\nnon metus auctor fringiall. Sed posuere consctetur est at labortis. \r\nAenean lacinia bibendum nulla sed consectetur.&lt;/p&gt;&lt;div class=\"one_third\"&gt;&lt;p&gt;Donec ullamcorper nulla non metus auctor firgilla. Cum sociis \r\nnatoque penatibus et magnis dis parturient montees nascetur ridicuklus \r\nmus. Cras justo odio., dapibus ac faiclisis in egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;div class=\"one_third\"&gt;&lt;p&gt;Conec ullamcorper nulla non metus auctor fringila. Cum sociis \r\nnatoque penatibus et magnis dis parturient montes, nascetur riduculus \r\nmus. Craas justo odion, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;Donec ullamcorper nulla non metus auctor fringilla. Cum sociis \r\nnatoque penatibus et magnis dis parturient montes, nascetur rididulus \r\nmus. Ctas justo odio, dapobus ac facilisis in, egestas eget quam.', '2017-04-18', 1),
(3, 'Penatibus et', '&lt;h2&gt;Pellentesque Nibh Mattis&lt;/h2&gt;&lt;p&gt;Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus el magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facukusus ubm egestas eet qyan. Nullam id dolor id nibh ultricies vehicula ut od elit. Donec ullamcorper nulla non metus auctor fringiall. Sed posuere consctetur est at labortis. Aenean lacinia bibendum nulla sed consectetur.&lt;/p&gt;&lt;div class=\"one_third\"&gt;&lt;p&gt;Donec ullamcorper nulla \r\nnon metus auctor firgilla. Cum sociis natoque penatibus et magnis dis \r\nparturient montees nascetur ridicuklus mus. Cras justo odio., dapibus ac\r\n faiclisis in egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;div class=\"one_third\"&gt;&lt;p&gt;Conec\r\n ullamcorper nulla non metus auctor fringila. Cum sociis natoque \r\npenatibus et magnis dis parturient montes, nascetur riduculus mus. Craas\r\n justo odion, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;Donec\r\n ullamcorper nulla non metus auctor fringilla. Cum sociis natoque \r\npenatibus et magnis dis parturient montes, nascetur rididulus mus. Ctas \r\njusto odio, dapobus ac facilisis in, egestas eget quam.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '2017-04-18', 1),
(4, 'Dolor Porta Fermentum', '&lt;h2&gt;Pellentesque Nibh Mattis 2&lt;/h2&gt;&lt;p&gt;Donec ullamcorper nulla non metus auctor fringilla. Cum sociis \r\nnatoque penatibus el magnis dis parturient montes, nascetur ridiculus \r\nmus. Cras justo odio, dapibus ac facukusus ubm egestas eet qyan. Nullam \r\nid dolor id nibh ultricies vehicula ut od elit. Donec ullamcorper nulla \r\nnon metus auctor fringiall. Sed posuere consctetur est at labortis. \r\nAenean lacinia bibendum nulla sed consectetur.&lt;/p&gt;&lt;div class=\"one_third\"&gt;&lt;p&gt;Donec ullamcorper nulla non metus auctor firgilla. Cum sociis \r\nnatoque penatibus et magnis dis parturient montees nascetur ridicuklus \r\nmus. Cras justo odio., dapibus ac faiclisis in egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;div class=\"one_third\"&gt;&lt;p&gt;Conec ullamcorper nulla non metus auctor fringila. Cum sociis \r\nnatoque penatibus et magnis dis parturient montes, nascetur riduculus \r\nmus. Craas justo odion, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;div class=\"one_third column-last\"&gt;&lt;p&gt;Donec ullamcorper nulla non metus auctor fringilla. Cum sociis \r\nnatoque penatibus et magnis dis parturient montes, nascetur rididulus \r\nmus. Ctas justo odio, dapobus ac facilisis in, egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;', '2017-04-18', 1),
(5, 'Penatibus et', '&lt;h2&gt;Pellentesque Nibh Mattis&lt;/h2&gt;&lt;p&gt;Donec ullamcorper nulla non\r\n metus auctor fringilla. Cum sociis natoque penatibus el magnis dis \r\nparturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac \r\nfacukusus ubm egestas eet qyan. Nullam id dolor id nibh ultricies \r\nvehicula ut od elit. Donec ullamcorper nulla non metus auctor fringiall.\r\n Sed posuere consctetur est at labortis. Aenean lacinia bibendum nulla \r\nsed consectetur.&lt;br /&gt;&lt;br /&gt;&lt;/p&gt;&lt;div class=\"one_third\"&gt;&lt;p&gt;Donec ullamcorper nulla \r\nnon metus auctor firgilla. Cum sociis natoque penatibus et magnis dis \r\nparturient montees nascetur ridicuklus mus. Cras justo odio., dapibus ac\r\n faiclisis in egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;div class=\"one_third\"&gt;&lt;p&gt;Conec\r\n ullamcorper nulla non metus auctor fringila. Cum sociis natoque \r\npenatibus et magnis dis parturient montes, nascetur riduculus mus. Craas\r\n justo odion, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;Donec\r\n ullamcorper nulla non metus auctor fringilla. Cum sociis natoque \r\npenatibus et magnis dis parturient montes, nascetur rididulus mus. Ctas \r\njusto odio, dapobus ac facilisis in, egestas eget quam.&lt;/p&gt;', '2017-04-18', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `team_and_condition_view`
-- (See below for the actual view)
--
CREATE TABLE `team_and_condition_view` (
`id` int(20)
,`name` varchar(255)
,`details` text
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `welcome_content`
--

CREATE TABLE `welcome_content` (
  `id` int(20) NOT NULL,
  `details` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `welcome_content`
--

INSERT INTO `welcome_content` (`id`, `details`, `date`, `status`) VALUES
(1, '<h4 style=\"text-align: center;\">\r\n  <font face=\"Arial, sans-serif\" color=\"#777777\"><strong>Scan me quick</strong></font><br type=\"_moz\" /></h4>\r\n<p class=\"MsoNormal\" style=\"text-align: center;\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH0AAAB9CAYAAACPgGwlAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAABFFSURBVHhe7Z17zB7DF8enblUVWjQh7jRpxK2lCBIhIfiDlGqDVDXiD/+0URXqkiAhLqGRSETQaEpcyktDJNV/iERLJQhCQ136R0PcVet++e13ds77O3ueeWae2Zl93mef3U9y8u7uzOzss2dnzsw5s/uO+y9DtTSKHczflgbRKr2BtEpvIK3SG0ir9AbSKr2BtEpvIK3SG0ir9AbSKr2BtEpvIK3SG0ir9AbSKr2BRCl93LhxfZH169ebGnN42n777WeO2kE6zy/lkUceMTlzZHoIsmxVIq85lFq09F133dVsdbLvvvuaLTu+9N13391s5fC6XPXaCM1fFnnNodS+e//777/Nlh1f+g47FG8BWtKwE7Vyht8gPOVHH320+vPPP82Rcuy0005qy5Yt6uuvvzZHlHrnnXfUjBkzzF7eeiFQ6NSpU9W9996rtm3bZlL/D1rEtddeqzZt2qTPK/n111/VNddco0477TR93VOmTNHn+/3333U6ftNvv/2mt8GPP/6oz7Xzzjurv/76S+edPHmySVVqwoQJo2XBiSeeqP744w+zV44dd9xRff/992rz5s3miFJPPvmkuuSSS8xeCaD0sqA4SfYDzdF4MiUWzp0p3aR08sknnxTySkG6iwsvvNBaDpIp3eTKWb58eSEd+xzkp7SJEyeao/G8/PLLhXozpZuUciTr3mNbOMfWarvhy+tL32WXXcyWH7Rkjtzn/PPPP2Yrnp9//tlspWHobboPl9Klvd9tt93MVr1JZtOnT5+u3n33XbOn1GuvvabWrFnjHdFCaQcccIC66qqrzBGlbrvtNnXrrbeavU6bzvnqq6/Ufffdp+036nrllVd03YQse/XVV6tJkybpbSjx8ccfVx9++KHel2AccPfdd6utW7fqhwPnGhkZMamdtpXbdDke+OCDD3Rdvgfn33//1XXdfPPN5ohSTz31lLr00kvN3gDZ9Ezp5mjO0qVLC+kuyQZEplROpvBCusumS+666y5nWZ4WK9K2cpuObc6KFSsKZX3CQT08bWBsusTXwjmx804OHz0PEiFjh5B7V4ba23SJHLilHGAOC0On9CVL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\" data-filename=\"download.png\" style=\"width: 125.333px; height: 125.333px;\" />\r\n  <font face=\"Arial, sans-serif\" color=\"#777777\"><br /><br /></font>\r\n</p>\r\n<p class=\"MsoNormal\"></p>', '2017-09-11', 1),
(2, '<h3 style=\"text-align: center;\">\r\n  <font face=\"Arial\"><b><u>Reservation</u></b></font>\r\n</h3>\r\n<p style=\"text-align: center;\"><a href=\"http://web3matrix.net/reservationn.php?filters=1\"><img src=\"data:image/jpeg;base64,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AKGZmgAGAAAAAAABADIAAAABAFoAAAAGAAAAAAABADUAAAABAC0AAAAGAAAAAAABOEJJTQP4AAAAAABwAAD/////////////////////////////A+gAAAAA/////////////////////////////wPoAAAAAP////////////////////////////8D6AAAAAD/////////////////////////////A+gAADhCSU0EAAAAAAAAAgAAOEJJTQQCAAAAAAAEAAAAADhCSU0EMAAAAAAAAgEBOEJJTQQtAAAAAAAGAAEAAAABOEJJTQQIAAAAAAAQAAAAAQAAAkAAAAJAAAAAADhCSU0EHgAAAAAABAAAAAA4QklNBBoAAAAAAvYAAAAIAAAAEAAAAAEAAAAAAABudWxsAAAAAwAAAAhiYXNlTmFtZVRFWFQAAAAFAFUAcwBlAHIAAAAAAAZib3VuZHNPYmpjAAAAAQAAAAAAAFJjdDEAAAAEAAAAAFRvcCBsb25nAAAAAAAAAABMZWZ0bG9uZwAAAAAAAAAAQnRvbWxvbmcAAACnAAAAAFJnaHRsb25nAAAA+gAAAAZzbGljZXNWbExzAAAAAU9iamMAAAABAAAAAAAFc2xpY2UAAAASAAAAB3NsaWNlSURsb25nAAAAAAAAAAdncm91cElEbG9uZwAAAAAAAAAGb3JpZ2luZW51bQAAAAxFU2xpY2VPcmlnaW4AAAANYXV0b0dlbmVyYXRlZAAAAABUeXBlZW51bQAAAApFU2xpY2VUeXBlAAAAAEltZyAAAAAGYm91bmRzT2JqYwAAAAEAAAAAAABSY3QxAAAABAAAAABUb3AgbG9uZwAAAAAAAAAATGVmdGxvbmcAAAAAAAAAAEJ0b21sb25nAAAApwAAAABSZ2h0bG9uZwAAAPoAAAADdXJsVEVYVAAAAAEAAAAAAABudWxsVEVYVAAAAAEAAAAAAABNc2dlVEVYVAAAAAEAAAAAAAZhbHRUYWdURVhUAAAAAQAAAAAADmNlbGxUZXh0SXNIVE1MYm9vbAEAAAAIY2VsbFRleHRURVhUAAAAAQAAAAAACWhvcnpBbGlnbmVudW0AAAAPRVNsaWNlSG9yekFsaWduAAAAB2RlZmF1bHQAAAAJdmVydEFsaWduZW51bQAAAA9FU2xpY2VWZXJ0QWxpZ24A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MS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/Pg0KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4zLWMwMTEgNjYuMTQ1NjYxLCAyMDEyLzAyLzA2LTE0OjU2OjI3ICAgICAgICAiPg0KCTxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+DQoJCTxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQjIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpCRDAzRDk2QTQ2NzNFNzExOUMxM0Y2QkRBRjgzMjk2RCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpGQzI1NDQ2MERDNzZFNzExQTZDOEFBMzFDMjc1NjU2QyIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSIwMjE0N0M5MkY4OTIxRjJFQzlDN0MxOEMzMTRCRjVDNSIgZGM6Zm9ybWF0PSJpbWFnZS9qcGVnIiBwaG90b3Nob3A6TGVnYWN5SVBUQ0RpZ2VzdD0iQjFCMTgxRUI2QzI1MUE1RTc2N0U1MUJBNzE5ODQ5NjQiIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHhtcDpDcmVhdGVEYXRlPSIyMDE3LTA3LTI3VDA4OjMwOjI0KzA2OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAxNy0wOC0wMVQyMzoxMTozNCswNjowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAxNy0wOC0wMVQyMzoxMTozNCswNjowMCIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+DQoJCQk8eG1wTU06SGlzdG9yeT4NCgkJCQk8cmRmOlNlcT4NCgkJCQkJPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOkJBMDNEOTZBNDY3M0U3MTE5QzEzRjZCREFGODMyOTZEIiBzdEV2dDp3aGVuPSIyMDE3LTA3LTI4VDA5OjM5OjUzKzA2OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPg0KCQkJCQk8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6QkMwM0Q5NkE0NjczRTcxMTlDMTNGNkJEQUY4MzI5NkQiIHN0RXZ0OndoZW49IjIwMTctMDctMjhUMDk6NDA6NTIrMDY6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDUzYgKFdpbmRvd3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+DQoJCQkJCTxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjb252ZXJ0ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImZyb20gaW1hZ2UvanBlZyB0byBhcHBsaWNhdGlvbi92bmQuYWRvYmUucGhvdG9zaG9wIi8+DQoJCQkJCTxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJkZXJpdmVkIiBzdEV2dDpwYXJhbWV0ZXJzPSJjb252ZXJ0ZWQgZnJvbSBpbWFnZS9qcGVnIHRvIGFwcGxpY2F0aW9uL3ZuZC5hZG9iZS5waG90b3Nob3AiLz4NCgkJCQkJPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOkJEMDNEOTZBNDY3M0U3MTE5QzEzRjZCREFGODMyOTZEIiBzdEV2dDp3aGVuPSIyMDE3LTA3LTI4VDA5OjQwOjUyKzA2OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPg0KCQkJCQk8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6QkUwM0Q5NkE0NjczRTcxMTlDMTNGNkJEQUY4MzI5NkQiIHN0RXZ0OndoZW49IjIwMTctMDctMjhUMDk6NDE6MDErMDY6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDUzYgKFdpbmRvd3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+DQoJCQkJCTxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjb252ZXJ0ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImZyb20gYXBwbGljYXRpb24vdm5kLmFkb2JlLnBob3Rvc2hvcCB0byBpbWFnZS9qcGVnIi8+DQoJCQkJCTxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJkZXJpdmVkIiBzdEV2dDpwYXJhbWV0ZXJzPSJjb252ZXJ0ZWQgZnJvbSBhcHBsaWNhdGlvbi92bmQuYWRvYmUucGhvdG9zaG9wIHRvIGltYWdlL2pwZWciLz4NCgkJCQkJPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOkJGMDNEOTZBNDY3M0U3MTE5QzEzRjZCREFGODMyOTZEIiBzdEV2dDp3aGVuPSIyMDE3LTA3LTI4VDA5OjQxOjAxKzA2OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPg0KCQkJCQk8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6N0ZGMDQ4NzE3NzczRTcxMUI2RERGQUU4NTlEOTAyOEIiIHN0RXZ0OndoZW49IjIwMTctMDctMjhUMTU6MzU6NDkrMDY6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDUzYgKFdpbmRvd3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+DQoJCQkJCTxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjb252ZXJ0ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImZyb20gaW1hZ2UvanBlZyB0byBhcHBsaWNhdGlvbi92bmQuYWRvYmUucGhvdG9zaG9wIi8+DQoJCQkJCTxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJkZXJpdmVkIiBzdEV2dDpwYXJhbWV0ZXJzPSJjb252ZXJ0ZWQgZnJvbSBpbWFnZS9qcGVnIHRvIGFwcGxpY2F0aW9uL3ZuZC5hZG9iZS5waG90b3Nob3AiLz4NCgkJCQkJPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjgwRjA0ODcxNzc3M0U3MTFCNkRERkFFODU5RDkwMjhCIiBzdEV2dDp3aGVuPSIyMDE3LTA3LTI4VDE1OjM1OjQ5KzA2OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPg0KCQkJCQk8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6RkIyNTQ0NjBEQzc2RTcxMUE2QzhBQTMxQzI3NTY1NkMiIHN0RXZ0OndoZW49IjIwMTctMDgtMDFUMjM6MTE6MzQrMDY6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDUzYgKFdpbmRvd3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+DQoJCQkJCTxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjb252ZXJ0ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImZyb20gYXBwbGljYXRpb24vdm5kLmFkb2JlLnBob3Rvc2hvcCB0byBpbWFnZS9qcGVnIi8+DQoJCQkJCTxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJkZXJpdmVkIiBzdEV2dDpwYXJhbWV0ZXJzPSJjb252ZXJ0ZWQgZnJvbSBhcHBsaWNhdGlvbi92bmQuYWRvYmUucGhvdG9zaG9wIHRvIGltYWdlL2pwZWciLz4NCgkJCQkJPHJkZjpsaSBzdEV2dDphY3Rpb249InNhdmVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOkZDMjU0NDYwREM3NkU3MTFBNkM4QUEzMUMyNzU2NTZDIiBzdEV2dDp3aGVuPSIyMDE3LTA4LTAxVDIzOjExOjM0KzA2OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPg0KCQkJCTwvcmRmOlNlcT4NCgkJCTwveG1wTU06SGlzdG9yeT4NCgkJCTx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkZCMjU0NDYwREM3NkU3MTFBNkM4QUEzMUMyNzU2NTZDIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkJEMDNEOTZBNDY3M0U3MTE5QzEzRjZCREFGODMyOTZEIiBzdFJlZjpvcmlnaW5hbERvY3VtZW50SUQ9IjAyMTQ3QzkyRjg5MjFGMkVDOUM3QzE4QzMxNEJGNUM1Ii8+DQoJCQk8cGhvdG9zaG9wOkRvY3VtZW50QW5jZXN0b3JzPg0KCQkJCTxyZGY6QmFnPg0KCQkJCQk8cmRmOmxpPnhtcC5kaWQ6RjkzNEQzRUY5QkMyMTFFNDlFQURBMjgzRjA0QjVBQzg8L3JkZjpsaT4NCgkJCQk8L3JkZjpCYWc+DQoJCQk8L3Bob3Rvc2hvcDpEb2N1bWVudEFuY2VzdG9ycz4NCgkJPC9yZGY6RGVzY3JpcHRpb24+DQoJPC9yZGY6UkRGPg0KPC94OnhtcG1ldGE+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8P3hwYWNrZXQgZW5kPSd3Jz8+/9sAQwACAQECAQECAgICAgICAgMFAwMDAwMGBAQDBQcGBwcHBgcHCAkLCQgICggHBwoNCgoLDAwMDAcJDg8NDA4LDAwM/9sAQwECAgIDAwMGAwMGDAgHCAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwM/8AAEQgAeAC0AwEiAAIRAQMRAf/EAB8AAAEFAQEBAQEBAAAAAAAAAAABAgMEBQYHCAkKC//EALUQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+v/EAB8BAAMBAQEBAQEBAQEAAAAAAAABAgMEBQYHCAkKC//EALURAAIBAgQEAwQHBQQEAAECdwABAgMRBAUhMQYSQVEHYXETIjKBCBRCkaGxwQkjM1LwFWJy0QoWJDThJfEXGBkaJicoKSo1Njc4OTpDREVGR0hJSlNUVVZXWFlaY2RlZmdoaWpzdHV2d3h5eoKDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uLj5OXm5+jp6vLz9PX29/j5+v/aAAwDAQACEQMRAD8AwBJn+L9KPMz3P5V+gf7dPhv/AISb4MapC4LYicc/Q1f/AGnvEX9rfsH+BLgSMyrDZg8/7CD+lfzHHg1N1V7b4I83w7/+Tafif0jDjxy5P3HxO3x7f+Sn53b/APaoD/7X6V7vY3Ko3zetX9PuPsmqxSbsbXBB9K8qWQKOvtP/ACX/AIJ6EuLrf8uv/Jv/ALU+ePM/2v0o8z/a/Sv0X+H1xNqXg1cs2MZ61x3xo+JFj8OPh1ewahv/ANIcEY75bNe/T4FjKKk8Rur/AAf/AGx5S8Qnz8n1f/yf/wC0Phnf7/pSl8D736V7faftN6BpngnxKkYO64syiY75ArN/4NtNFvPC37XHjCKSRVhvNCaYBRjdm6GBx/nmu7D+G8aslH61Zt/yf/bmON8RpUI86w11/j/+0PIBKCfvfpTs5/8A1V++HxQ+Ien+CfDt1PeXUdskMZkkZnC7FHJ5+gr+Snx/qFj/AMJJqVxI8Iimu7iVC2OVaZ2H6EVrj/DNYZxSxPNf+5/9uejwnxws6xf1adH2Ss3fnvt5csfzPub8aM+/6V+ffh34papLBeaV4dht5o3/AHTSjrHuBB6detevT6/dX/7NOiaVqgEk9oyRgsOuGYA/98ivnsZwbPDyUXVvd221tbe1/wBT9YwWW4bFQnKjVl7kHJvk91tO3Kpc2r87H1MXx3/Sk38dT+Vdz/wbt3cegftReLI/9XDd+Cb1WI43YuID/U16b+2B8R18MnTxZ3bQ3drLA0Y343gdPrW8eC4exjWlX0crP3NvP4j8u4x4xeRV6lGNH2nLGMr83Lfm6fDK1vnc+et/ufypN/PX9K6P4gfth+J5tLFtZ6tPZw7g7CPk7h3rB8ff8FN/Emo+AG8PWvh/Vtsg2XN0lvM4u2zkkcYAJANeTnnDssIl9Rk6zf8AdULefxS0+R+e0/G6Nn7TB2dtP3l7+X8PQj3c9/ypC+O5/KvMPG/7YXxz8ffCj/hEJta8TL4TlXy5LCOHyRNGDxG7hQ7LwPlzg9819Rf8EO/21td/Zp8R6p4P17RtSHhnVpGuI5liP+hTHGMjoVOGHqCfSunA8LqrOMa9XkXV8t7f+TK/4eg6PjdGbV8E0urdTZ/+Abef4Hlfmj+9+lKJAf4v0r9rvAnjjTf2gdVu71rO4aHR/wBzBJcR43CQAsV9uAM180/tsXD/AA9+Jwt9P0u6ltZrYTB4It2GPVc/UE/jXJxJw5Vy/ALMMDJYiLlyrTl6tN7y0TTOzF+MDpUPb08Hz+SqP/5WfnPv/wBr9KDJg/e/Svp34a+MdVvfEOpvc6Hqlrbt8iSy25VWz7mvoj/gn74K1rQtL8UWd5BNarrepSTqGyoClVH49K1wPDaxMoQ9pZyV7ct7O17b69j2cn8SKmOwP16pheTyc79e/IvyPza8z/aor9evEn/BPzwh4i1aS6uI4Xmk5Y+V36/3veis3wTxEnb6r/5PH/M9mPiLkjV3OS/7dZ5l+0xpxv8A4W6su3OInOPwNcN+1RNb6T/wT/8ACfksAsf2UDn3X/Gue8a/tYab4u0O4tPtEXlzKR972p37U2oxx/sraLpt5IqW0iI8bE4HARh/Kv0qMoTVWa6wt+J+bUacocif81zwm11Dc685DYrasJWuruNv4cjNcboWoWkkMLG7jK47Ef416Qvg6fwrosOrX0kMOnyc+aW4H19K8KeFlOOieh7FSpHqz6Y+E8Kr4Bt/dBmvDP8AgoFEIfhwrR7S2QT29axNW/4KLeE/hj4a+w2skmpXcA2BIFL5P4A4rxX9ov8AaT1T4y/DaO+ubO80yGScbElG3evPSvp6c17CEVvp+aPnox/fs8fk03V7zwnq8iRr5flADnnoK9//AOCHXi61+GX7Vjf2pdIsmt6JLa2w6fvFlWQj/vkGvnjS/Ek503Vl86TY0W3bnj7lan/BNK2vr/8Aa/8ADGfNjjU3btI4woITIAJ4zXtYHmdRNdzLHpOlZH7NftFfspXH7UPwu8ZW2qapdxnUoGhs44ZCgiwCQTgjOSRn6Yr+Uv8AaS1lofGUlik7brXzI5QDj5ldlP8AKv66tL8dG0+FOoQyahaQTeUymSSQZXI5r+aj9pn/AIJ5WPhHQbjWo/tMlxNK7SXIdsMDI2WPODxXbm2ZYXC1KKxDfNJtL8P+AerwPwljsy+s4jCWSppN3dm97Jd3o/wPBv2JdVX/AISnUraSMeWwWVXPY9OtfRXxFngXwBYxqylmnXgH3Y/1rxH9n7Uf+EN+I0ej6PpMmoTXBitx5QB+d32qOfXPWvuT42f8EzPiL8PPDmjeJtchWTS7pBI9sICv2fI7kHnFfFcRVIRxka09ItJ3/D5Xv1P6R4L4hpUeG3lNSSdRtxV3Zq/vNK+9t9Ls9U/4N9dKbX/2rtatlJUTeEdQQH0/fW9fVkf7PHhP4jXurSeJLO31J7SVUjMxwsXl5AP414P/AMERPhrdfDf9sm4uII2/s248MX6GTH+pctD8h/IkV9H+HPhzefFnxbceH7G6ktVupdtzMq7mwWbp+Rr1snhSr4aPW8n+h+B+JCdTM5qpqlGC/Nf5HQ/Af9mH4c+Lbi4Wz0vSZFs5PLJQ7wrDseTXtMH7MXg77KI/sOn4TgDyhXX/AAf/AGUtC+Bfg0WWkwbHPzSSHl5XI5Zj6mrl74Zm02OSQZbuK9LE5PTglJxR+a0fYJe5Ffh/kcK/7L/g8w7f7Nsdvp5Qq74I/Zk8J6RePNHZWcbdDtQdK3YL6Rv3bLjjvTbS4uoLiQ7vl6/SuSOX4aLvKCZp9YptcsV+B23hS20vwqWjtzEiMoQgHrjpWT4k8G6L4n1P7VceTI4G1S2CQK4S4nu59SdllwM8U8SXgf8A1md1er7CH1dUlBci1sYxcVLmR0U3w48OvrmmxNHasskuMbRyRyK7DXtEtNAv9Ja3iii866WNuMDocZP4V5TrNpeafdWN7NNIsdvMkpI4xg+taHxT+NsMPiHwrYxTI7TanEGJbOQeOR9SKzjUw1CEk4pN2t3O6OHr1XFwb5db9j2m5spJJcr9nC47pmiqE+vyDZtMO0oDyv8A9eivpJYjD31/U8GNGtbS33H4M+Jv2YvFXh+aG3tdSurqS4lEaRj5i+T6V9GftO+EvEXjn4f+HfBlws0M9jYguChByEVa+rtN8CeG/wBn+WxvHhj1DVLhdsksoBZD1ODg7RxjA5pfHHibQ9U1KG8+zQrqSKCRJHt+Xrjkd6+Fo5W1CSqS1dvkfoksVFNcsdD8wYvgJqiRNa/bpopoTtIDEMrD2rkf2z/FnxWuPhLbeG7a6VbWOMRyXUQIllAHGR0z71+rWrfAz4aftOyMlvdroPiZY8M8GEdjjA3AjbIB+fvXy18Z/gFeeGvFupeHrqS11ZdLAbz0wu9SMjKnofauT6ri8K+eFpRfb9TS2FxS5JXi/wCup8+/8E8bPRLH9hDx/D4kgtG8V20crpc3YDSO2wlTzzwfSuh/a413S739lD4bfZ/IS9ubSNpnjXbuYRpk8evPWuA+J3wqvr1tS0/Sp1sbO4jInVeN6+h/Wu4/ZJ0fw/qGmXOi+Mbpbi10uMRWiy/MqLtx3z3FejRqqvywdost5XKlQlUp+8la/ddPmYvwI8FaHqX7KnjK+ulW41b7S0VuyjLKMqqj8M136/Cm78Lfs7aePCunXn/CUWZW4S5sov3ynjcQR+NfSf7O2h/DV/C99o1nJYR280m58gfMx79Pbr7V778OtM8G+B72bSBPa3M01sWX5QMLXu08LHlir6+R4Uqzu00fGPhTQfiF8cPhtYaPpOua5e69rCMZY5Llo8BQN2QMdOeK8g/4KXeJrf8AZ9/YtvNJ1bSVs/Eun3KWc8W3/VscgPnuGHIxkc195fsmjwj8Pfjb4s1iTXYftGkGXybd5QFSOXknHfpj2r82P+ConxCuP2j/ABV4t8SapFb/ANntc/ZtOtIgfkjjyFYk9WJyfbOK8TNqOGUadTE6y5rLrp19PM+x4ZxGP9pUoYTSnbmfT3rNK/c+HP2Rv2h/h78GPjb4T8Q+I7Sa40+x1SG9vm+zySBgj5zwPmwecDriv2d+PP8AwcCfsp/Fb4SDQ7PxB/aV/JD5YtpNHuo9jFcdWiAAr8mvhJZeHxpcNre6Bb3Ekbgg4ye/tXoGo/s+QShdUj8Ox29qy/KVUYwDn0zWcswwclOlUTXMrO9tUvkGZ5TmKlSrQqKai007NOLe+zSZ90f8Ebf2htI8dfH3XtL06PGmyWNzcWk5JBCZX5Pm575FffH7GPgL7X4avPEiDZJd3MpicDPyrI4Ffnv/AMEnPgJc2Sa947TS7yHTo7Z7G0mhTmVxnftxyQOmQOtfoJ/wTL8dya78FdR0u4juIZdJ1S5hRLiNo5TGZGZSQfr+lbZDGCqRhFWjLma/D/I8PiqU/em5c0kopv7z6CXxA09q0T4EuME1W1GJrrSGwnOO1VLoMl4x9ziui021Ethg96+mfPWbpvsfCVOWnG8Tx7WXktJ27MvHSqCeICkDqW+ZutdX8RdJa1nk2r1B/GvLNRuXhuu4ry5YO7OepPkOi0YNPf8AzfxN3rqk0hIkWSQqqkgAniuV8HyNLLD8rcmvTz4Ji8V6OsU25eOoNdSoyceSJ1UZJQ5pEev+FofEfh37NhWBXBwep+tcZ/wqSzQhp7YebbYaMiLcVI5BBr0BfBs+g6S2zUm2IPlDKABWDB41GlNJ5zC42r95e1c2IoxU17Vcrsehha9Rwapu6KwvdSvUVo4/lUbRnAoriNS+I0kN/Nt1OG3VnLCMjO0ZorzpWb3PRXMtOVfcfJuvftIap4i8R6fDctbyMlyJmbBw2DnGCcCu1+Pmt6t8Srq1fRrFZLh7XmKE42rxyST6kDmvmTxVqT2erQTRfK8bD+fSvQvHHxUuPDHiL4Y2sc7J/wAJJqn2a4XOA8ZiMag+3mSofqorz8uxU67lCb3PocdSjShGqlsO0H4XfE2xml26PFDubKSy6jBG6/8AkUGl0X9nrx5ZajfXdxf6Uk2of657jVhIx/Ebj+teiSXUmB+8bGOPeoi7SfxNXqf2TTvrOX3/APAPO/tKp0jH7v8Agnh3iv8AYI8QeKb65mbxV4ZsvOjKriaeTafcCOl+HH/BPqXwdbSLqHjfQ7uRx8xi0+V8fQsVzXuGCv8Ae4/nUyRszfLuZfYVUMqw8HdX+9lvOcVyOndWfkjl9E/Zn8O6XpSQT655jo33rfTthP5yGvQPh5D4f+GVzI1tLfXkkyeWfMjRPy4JrNFpME3eVJtA5O04FRzWMjPt8tvMxu27fmx64ruhShH4TgniJy0kzAvvgJ8O77W7rUJLPxPJdXcrSyudW8tSWOSMJGpx7ZrG1r9kv4SeJLZ7e/8ACFzfQyMWZJ9Xu8E/8BkX1q1qHxu8E6LZapdXXjPwjDb6HAbjU5DrVsV06LeE3z4f90u8hcvj5jjrXF+IP+CgfwS8J3F5HefE3wu02nWwvLuO0le8e1gKqwmkEKOVjKspDnC4YHPIrOWX0qjvKmnbXY2p5xiaMbQrOKfaVtvmdh4F/Yq+CPhubdYfCvw2rDndcyXF0T/38lau38WfB74U/wBiyax4k0iz0nSPD9s+ywsIRHDfNgsoZAPmYbWwMjO7nOK8ovv+ChXwh8FeM9W0HUfFF5a3/h22t77VpDoWoG00y1uNnkXU9wIDDHbv5se2Zn8shwd2K9n1rxnb+HfBuraqsdnqVmumvcgcSxTR7Q4dSMhht+YEcEexrLFZfR9m3Kml11XY3wObYieIivaylra3N3063S9T43vP+DibT/2eTZeG/DPwllj8I6dv8xHvUguPvH/VqPlHHPzc5r1v9nP/AIOIvgz8TvGmkw6tqOpfDaQy+XK+q2BktcN/fliJVQD/ABHA55r5N/bJ/wCCaWsftWaDfeKvhVa2smteW9xcaS0ojW77/uT0DHHQkA+1flZ470zxX8CfGFxo/i3QNZ8O6lauY3hv7R4ckHBwSMMPcEill/NWpp0+n9aeRx51F4WtKNVb9f8APz9T+sn49/tf6h4L0Pw34k8FHw3448DeIm8ka9pV0t0sMhXOwbGKlsfMBn5grLwwGfXP2Yf2ltH+PXhbaslvZ67Yxhr2x3/w9BNHnkxMQcHqDwcGv5Uv2A5vi38avGEvhX4Qad4wurjWpozeppHmJYK6Nujmnb/UoyMMh2+YY49K/bEfCbx5+zzB4MTx9e6bb+Nby0Hlavobsttd3IXM0BBAxKRy0f3ZBkp0KjvjiKtKrz2+TPn5UKNWmo8+v9dD9HvH+kRakhKSLI2OArDk1554l+Et5oVg9/P9jFvGu98yHK+nbFfNHxL0vxD+3HZaL4a8K+MpvhDqloy3GoX+kzf6ZehOot94K7W7hskeh613Xh39k/T/AAZc2417xV448bX9sQ3n6xqjyKzjv5ahU7enetvaqd5WOeVGySfQ9g8KoisrbQvXHvXpmhaqsNovG7joDzXD+E9DeaGP5Nqr69hXWf2Lst1EjFcehxmrp8yd4mzpxcOWRD8RPFUNpoM24y5CEgBD/PpXhvhPxnaappesPeXUsLW5bYQOCO3bn9K9S+JllG3h2UMXZdp4B9q8R8LeForvQdY8uNoVbcCM8nivHxVec6rcux7WW4dQp3Xc8h8V/EfSrrXJmbVMNkgjPTmisPW/hJo82qzNJYztIzkkiTrzRXxcvrN9Kj/D/wCRPvI1MNbWivx/zPAfE2v2sGosh8yRs8DFcr+2X8R20bxX4Lmt9yyeG9Nt9RCk9HMxlGf+Aota/iW2+za6hX7PH8wBLEszV41+2Fr/APa/xc8SWysGFnHFpykdvJgSM4/4EDXqcPx5pyseVncrUYR7s/Q3X0vPE3h+4k8P3lnY6hqFsZNMurq3NzbxSOMxM8ashdeRlQy5Hevz7+DP/BTb4r2vw/8Ah/488dSeEtU8O678SJ/hr4t0nTtEayufDlxvVYLqCbzn81du5nSRRyAB13D7L/Y18aN48/ZU+HurO+64fSI7WU+kts72r/8Aj0BP41+XPxw8J+Lf2dv2zvjTq2m2dx4r+H/wY+JOmfFLWfA7p/o99Zaghf8AtFNvzFrYui5cmNfMRypCuG+6wkIzvF/10/yPisdUlDllF/1v+SZ9MWfjf4ra58d/2jPh/rXxv8Z6frfw41fQYPBE9vpuk21repqrMtrHeJHaoZEM8lrA7oy7fMYgE8Uah8bIfF/7bnjrwL4i8aeIvBPxW0rxlo+r+EtKvdans9D8QaGYbSRtJEYfyGkfF1k7RI0roVdgGQcl8fdB+Hvx/wD+Cmnw78WQ69pq+H/jV8N11bwzrkt+bZLHWtMn+02lxIA6qXj8lUaKTIzvXG4cT/tk+PvgN/wULXxtZ+NdV8N+FtS0Gx1Kb4beO7XUBCuoPp91cQ3MAn3eXOrSx28kcfJdLgtEdwzW8YrTTp0W39NPQ55S311T6t67/do1ZmV4H8OeFfD37T/xg+FfiHxHra+PLL4o6Yvw51LVfFd/JdWNrdwy3tpEI3lb7RbxNbxxShkfK3RyS2w15Z+1R4G8J/szfGT9pzw9ocOn+EfiVZ674b8ZfCS5sV26t9ouplSewsyMu8bLM4MIzGAuSMCvYNALWP7aPgPXviNoHiy8k8f/AAV8NX/im903wpfald6F4msZIrm3kYQQSNHcN9mUlQAR5pVsBiKzfj5+zn4k/b9/aI8GeIPFnwt+Iul6P8QPBeqeHtX1CTQJLaTwfNHq97Lod5KrbcSRxi2MyA7vKds5D86RlaV5bW19dP8AI55RvC0VrfT0/po7/wCNGnQ/sJftp6xrlxpOn6L4G/ae8GXmma7BDCi2uleLLeylcDsojuNzrgZ3PLI2PlyWftWePPE37Kf7YPw98aeD9B1PxHrnxK+C934Pg0yyETNeXtgkV7DvSUhZFEYClBudkBVVYlVrqfEP7NnxQ/bc/wCCYHiL4XfGjw/HpvxU8PhodH1eS9gmt9bu7QH7HfpJExMfmqXhk8xVJEjPj5iF9Q/bU/Zy8dfG29+CWr/D9fClj4g+F3im38RST67fzW8ZgS38uW0UQwyFvNOAW4CiPjdnjn50naT7p9vL+vI6nSk4txXZrvq9UcN4l8MeF/hf/wAFLvgutjb/AGv4e/Gz4U6j8OvInbzIbm2gEd5bRPnrm3ZYxnnaSK2P+CRes3t5+y74o+FWuTzXcnwl8W6z8PRPKSzy2KuTCCe+2OdkHoqIOwql8QP2Hvip8U/GGieJ7zxp8OfC2ueF/Htp4x0SHTdKvNQs9MtrbTorFdOAcwFklWINI3y5P3dvQe0/s3fs/wBv+zn4S1y3bUn1zX/Fmv3nifxBqptxbC/v7pwXZIQzCKJFVERNzYCZJJJNZVJRdPkbu9P1/wAzahCca3Olbf8AT9Vc+LfgX+1344/ZytdftNQmLXGmyzWUcQwGEsbNGf1Wvl39rP4wfFL9tEyab4w8QzXmhRzF4rJbeP5OePn27vTvX6RfF79mbTPE/wAZ/EDfZVWLWLldQ4XqZVDPj/tpvrtfhL+wz4b8+JY9DjumPWRlLIv1PSvmcvo4qM3GLtZn2efZhgsS/a1IfEk7Hw3/AMEz/iP+0H+zNY2vhX4d6tdDwu0m9tPuLKIwDPU+Zt35P+9X7i/s7fDD/haHwTsm+I9na65e6tFuu7aZMwg5yMDswOCCMEEAjBrgvg5+zVpPhXymWyt4UixhVX5Sf8+le6DxAmgaepb9zDGuFBIXH0zXuxw/JLnm+aXnt9x8RU9lJ/u4KK8j5n/aI/Yi8TfDDWP7d8Fz33iDw6rh3tYsyaxpnPDKODcov95SJgP4ZDk1s/s8/Gq88X2UkWoeJvDeutp+Flc38cd9aHj5Jom2urDnh1Vs161q/jXVPHkkljpq3FtE3DXJbJT12jAx9TXh/wAXP+CWHwF+O3idta8e/D+z8YeIpkCSanf3dx9qK88B0kUgAk8DFX1ukc0uZpJM9Z8Xf8FAPg58ALKT/hLfiL4X02WGMyNbnUInmAXrhFYsT7AVowftMeMPjRpNtL8Lfhvqlza3pRo9d8Xy/wBi6WIT1kjjAkuZjj7qiJVP94Cvib4h/wDBsR+zh4yl+2eGdP1jwjfZ3p5eqXE0Qb28x2PpXrX7K/7D3xA/YKlhHh3xV4g8Q6DbnEumXl611bzJ32hgSjehXH40pVpRVle3l/wbmkad3eTR674g/Z2+Met2c914g+PmpadI7F0svDHhjT7S1t15wge4SaV/94kZPYVxOkfAP4hQ2N3Ja/HfxlJJGThdQ0TSriNvqFgQkfiK9tuvj5aeJdGmhm3abfIMGC6UA59j0P4VxeleIJLmO88v7LIFJ+7JXmYiMHJ8t/nf/M9jLZSb5ZW/A8Q1DSfjBpt28K+I/hTqiqeLi98KTQzP/vLFcBPyAorp9f1bUv7VlC2cLBTjInH+FFeF7aXn9z/yPrfqCetl9/8AwT5L0az0+PxVZrIsccHnoZZ53ChUByzE9AAATknjFfCHxO+OWh+IfFmsapNrmmltSvZrr/j5Tne5Yd/Q19XatYX2q37RzIphf5HRmyGU8EEdSK+NvHH7N0Oj67eW8cFvGsMrKu2IAYB4rPLMwpYS6l1KxuVzxduWVrfqfe//AASK+LGn/EX9mfVtL0+9gvv+EU8QzwHy23BEuES5X83aY/ga9gtv2RfhpafF/WviB/whemyeM/E0Elpquq3E088t/BJEIXgdJJGj8oxqqeWECYAGK+Kv+CYeva1+zjd+PGtNDi1zR9cFgWjW++xvBcReeA4zG4YFJGB6EbV69K+o5f2sfEkz4t/CelWuBk+dq8k2PT7sK171POsLbm57eWv6Hi1sjxMZ8nLe3XT/ADO20T9kD4TeFrK2g0/4YfD21hs1KQIvh+1ZYV3FyFyhwNxZuO5J6mu0svDum6Rp8dra6bptrax42QwWscca4OQQoAAweeB15rwe4/aO8bXO7anh21U/d2Wkj7fxaXB/IVQk+OPjSXcZNdgGOvlWUKqPxIP8zUTz7Dd2/l/mKORYjsl/XkfSv2uUIF82QDOSN3FR5aQbs7j+dfLN58XfElwpWTxLqx3dRG6xflsANYepeMdQvpFW5vtYuxzjzr2VgfxLGueWf0ekW/uN45DX6yS+9n17cajbWI/0i4hgXOcySBR+tZWo/FnwroiZu/EmgW/OMSahCpPtgtmvkV7S1vUaSaGGRs5O9gefrzVtdIs9NMfl2dvGZj2Xk1jLiJLaH4/8A6I8P/zT/D/gn0nqP7S/gWwY/wDFQ290y9rSGa5J/wC+EIrDv/2vvC6Ixt7TxJenbn5NLeLj/trsrxN44ElVTJFHuOwIWPX6cV3Xw28Hx6o6uY90asAMLtU47VjHPq9R8sIr8f8AM2lklCCvKT/A9Y+E3iO1+K2v2mpNoN3pjPAUgfUxEJbhFbIZUDONoJIyQD15xivoT4V251J/9IZn8tiqK2So+gOa8R+GECWnjfKmFfJiEaquW8oDng+pPYegr2r4VzLBcsqsuGkyDnr6/wCf5V9Jgajkry3PnczpxikonompakuiWh2t8wX5VjXbmqGj+GJvE9yLq+aTyc5WMsef16Vtw2cdy27y9zEDO4EmtKK02RnL7WXAx1P4V23PDcb7ldbaLRrZY4tsfOAF4rKu7pknzj5Qc7j3q7qCyBmx65yDWNdwO8jM3+r7gEDnvzSMpvU6fRdZ3Kof68D/ADn8K6DTtQJmCllTn+Llj9AP55wK8/sb5oZNvyg8cK3X8a6Cx1BYYI5GOW/hBycfr/Op2dy4yujU8a+HNH8QWrNcWVvJI3HmsF3njoAOK8kuPh5paSTLHbsmM8q5XFeiX+rqYd0jL7M+F2/41xl5egXkjbt24naM8YrmxDvqdmD912POdT8FWK3RARuB65orpb2w8+5Zlwo/PP6UV4rozufURrYe2x+e+n2vmXnzbm3Htx+fevNPir4Ugh8T3bMsIV23fNgDkV2GleOrWfy7lbqJoZVEkbr829SMgj2Iwa5j4kXB1/WvOt28xWUZIxwa+IxFal8Lmk1vqj7PD0a6l8D+5nR/BOC38P8AgqVhsDXE5c7F6hRtH9ar6z8RvJ1+6t41wLddx4wOlHhXWLXRvDsFu1xHG6KcgLzkkmuS1Ty5vEdzdeTNMskyZOMb1Hf6VNPE0LayX3ouWGrc1+V/czZk8Y3U+s2UYT57pSysWLkY/lVxRqV3PMoh27N4LNzn0wDWddeImbXfMhtljS3hCxuqjGD1Gas6h4ha/v23M0UOBnYOH9a0+tUntKP3on6rW/lf3MdBHc3Gu2KNN5Sy2okkVRuIboar6/Y/2TrVtHK1zM0cbM3z5X7x28dPSrFvewS69JMzIkcaokWWK8A8+2K17vUdP1G4lEk1ttYAI+/ninHEUW/jX3oPYVV9h/cxJbG403wxJGq/vrgZ68jP0zV7xHo1xqaaRHtkO0iRyqYyAvQ896vSeKtIMwb7RAfLiCL83U1n3nimG/uYWN9brGsWwpuPpirjUoL7cfvRi6Nf+R/czbj0Czh1qzZljbLLOQicjAx0r0HwROtnazMryrulaUhskxjOOn4fyrzW38dafDcq8dxCv7vZuL4/StCT4p2cOmyLDd28cki7eDjHqa9DC4rDRetSP3r/ADOGvhcTLam/uZ7p8JNTQ682Jl3Nkkbtztzn6AfhXsnw61DbeKv8W7OCc8c18g/CH4r6T4cvzLdanbxeZkHzHxt9K9q8A/tDeDbJt1x4q0aDkH57jGefT/PWvq8DmWES1qxX/by/zPmc0y7FS+GnJ/8Abr/yPrTRtSEkGFbaenA3Vwfhvx14s+OGreNpPDOpWfhvSfCuq3Xh/TmmsUvJdav7dNs0sxf/AFdslwRGEQCRvKdvMUMq1i+H/wBrX4Z29uFm8d+HVH3jm8Az7VnaT8WfgjonivU9UsPiPY2MetXg1G/02HW2TT7u64DTNF2Z9qlwpCuRlgcnPXUzTBt6Vof+BL/M58swdWlGo6tCXPZcrdNyS1V/datdrRN3S12bUoyWX7Ql9pPivUV8Qa5brpLeIb+1t7u4sIltbXTtK0+NtRld1kRowbzzQshWUKAqlfm3Cp8Zf2mT4atvCK2dr4g0m617xDBZi1vdNjim1S0+yvdOlukrANJIPJhA3I6SzqrhSrAcfrl9+z/caX/Zp8Z2t9ZrZ6rZNHLr8pWRNSmE10WOQSxcZU8beoGcGr+t+Jvg34/sbf8Atb4jaXPqFrA0EGpXmvO15bFprecyxsOI5PMtYCCoH3SMfM2cf7Sw9re2h/4Ev8z3/Y5W8XTqSw1VxSaa9lZaXUJW2ba5XNPrtuzs/wBoz4t3nwp0zwXIDeaVda9riQzWnkRXFybOG1nvLxMBmQERQFd6uFVnUl9oJrSuf2svB8Ys4bf+1by8urOK9uLeGKNZdMWSz+3IlwrSKUbyCrMeVQyIHZd654n4veOPgn8WVaPWPiLpN4G0W90ENDqzK0VrdiJbgKSSd7rEimQ5bG4Zwxzzmp6j8D7mLxTCfH1v9h8ZRNDqtpHrriK73WyWryEDkM0MaqecHGcbuap5lhr6VoW/xL/M4cHgcveFp08ThqyqRUrtQ0bclbzaUOja96Nr2kztbX9tzwx4k0jTZ7Wx8RiTWIbS6s7V7JI7m4trnyxFcIjSAvHvkK/JliYpiFZY2YdVcXjXWoMZPuqcMwPf0FeT6n8UvhK3jz/hJLfxnY2epfYodPkjstVMNvcQwu7wq6Lx8hkfGMZVirbl4rIk+MXgaA26r8RWk8lbVctq5Yv9ncsNxxz5mcS/3wADjFY1MywzVnVh/wCBL/MwxWX0ZSjLB0KsO6lGUt7aXSXw66/aTWiei9wN+rnPmFfQKcYory6z/aW8BrDhvFmg5z/z80Vy/wBoYT/n7H/wJf5nL9Sxn/PqX/gL/wAj87/BI/4orRev/Hhb9P8ArktaRXPZqKK/Bs1/32t/jl+bP6GpfAvRCgY7NR2/ioorgNAx7NR0P3WoooATH+y1KBgdGoooAPwajH+y1FFABj2ajv0aiigAIz/C1IBjs1FFAARn+FqNvPRqKKAFx7NSAY7N+VFFAC446N+VGOPutRRQAY/2Wo/BqKKAAjP8JooooA//2Q==\" /></a><br\r\n  /><br /></p>', '2017-09-11', 1);
INSERT INTO `welcome_content` (`id`, `details`, `date`, `status`) VALUES
(3, '<h3 style=\"text-align: center;\">\r\n  <u><font face=\"Arial\">Download &amp; Print Menu<br /><a href=\"http://www.bhattiindian.com/Bhatti_Menu.pdf\"><img src=\"data:image/jpeg;base64,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\" /></a></font></u><br type=\"_moz\" /></h3>', '2017-09-15', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `welcome_content_view`
-- (See below for the actual view)
--
CREATE TABLE `welcome_content_view` (
`id` int(20)
,`details` text
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `welcome_title`
--

CREATE TABLE `welcome_title` (
  `id` int(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_details` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `welcome_title`
--

INSERT INTO `welcome_title` (`id`, `title`, `short_details`, `date`, `status`) VALUES
(1, 'WELCOME TO BHATTI INDIAN RESTAURANT', '<table style=\"border-collapse: collapse; width: 718px; height: 185px;\" border=\"1\">\r\n  <tbody>\r\n    <tr style=\"height: 185px;\">\r\n      <td style=\"width: 378px; border-color: rgb(255, 255, 255); border-style: solid; height: 185px; border-width: 1px;\">\r\n        <div style=\"text-align: justify; margin-left: 40px;\">\r\n          <div>\r\n            <div>We welcome you to Bhatti indian restaurant in London, tempted by an unrivaled range of authentic &amp; imaginative fusion dishes.\r\n\r\n            </div>\r\n          </div>\r\n          <div>\r\n            <div>\r\n              <div>\r\n                <div><br /></div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n        <div style=\"text-align: left; margin-left: 40px;\">\r\n          <div>\r\n            <div>\r\n              <div>\r\n                <div>Our food is cooked to the highest standards only using the best quality ingredients.</div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n          <div>\r\n            <div>\r\n              <div>\r\n                <div><br /></div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n        <div style=\"text-align: left; margin-left: 40px;\">\r\n          <div>\r\n            <div>\r\n              <div>\r\n                <div>We never forget that without our customers, </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n        <div style=\"text-align: justify; margin-left: 40px;\">\r\n          <div>\r\n            <div>\r\n              <div>\r\n                <p><br /></p>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n      </td>\r\n      <td style=\"width: 340px; border-color: rgb(255, 255, 255); border-style: solid; height: 185px;\">\r\n        <div style=\"margin-left: 40px;\">\r\n          <div>\r\n            <div>\r\n              <div>\r\n                <div style=\"margin-left: 40px;\"><br />many of whom have become friends, none of this success would be possible.</div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n          <div>\r\n            <div>\r\n              <div>\r\n                <div style=\"margin-left: 40px;\"><br /></div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n        <div style=\"margin-left: 40px;\">\r\n          <div>\r\n            <div>\r\n              <div>\r\n                <div style=\"margin-left: 40px;\">So Enjoy your meal &amp; have a memorable experience.<br /><br /></div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n        <div style=\"margin-left: 40px;\">\r\n          <div>\r\n            <div>\r\n              <div>\r\n                <div style=\"margin-left: 40px;\">…………………………</div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n          <div>\r\n            <div>\r\n              <div>\r\n                <div style=\"margin-left: 40px;\">(Manager) </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n          <div>\r\n            <div>\r\n              <div>\r\n                <div style=\"margin-left: 40px;\">Bhatti Indian Restaurant,</div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n          <div>\r\n            <div>\r\n              <div>\r\n                <div style=\"margin-left: 40px;\">London</div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n        <div>\r\n          <div>\r\n            <div>\r\n              <div>\r\n                <div style=\"margin-left: 40px;\"><br /></div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n      </td>\r\n    </tr>\r\n  </tbody>\r\n</table>\r\n<p><br /></p>', '2017-09-14', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `welcome_title_view`
-- (See below for the actual view)
--
CREATE TABLE `welcome_title_view` (
`id` int(20)
,`title` varchar(255)
,`short_details` text
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Structure for view `blog_view`
--
DROP TABLE IF EXISTS `blog_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `blog_view`  AS  select `blog`.`id` AS `id`,`blog`.`title` AS `title`,`blog`.`photo` AS `photo`,`blog`.`date_and_time` AS `date_and_time`,`blog`.`details` AS `details`,`blog`.`date` AS `date`,`blog`.`status` AS `status` from `blog` ;

-- --------------------------------------------------------

--
-- Structure for view `category_view`
--
DROP TABLE IF EXISTS `category_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `category_view`  AS  select `category`.`id` AS `id`,`category`.`name` AS `name`,`category`.`date` AS `date`,`category`.`status` AS `status` from `category` ;

-- --------------------------------------------------------

--
-- Structure for view `chef_recommended_content_view`
--
DROP TABLE IF EXISTS `chef_recommended_content_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `chef_recommended_content_view`  AS  select `chef_recommended_content`.`id` AS `id`,`chef_recommended_content`.`name` AS `name`,`chef_recommended_content`.`photo` AS `photo`,`chef_recommended_content`.`short_details` AS `short_details`,`chef_recommended_content`.`date` AS `date`,`chef_recommended_content`.`status` AS `status` from `chef_recommended_content` ;

-- --------------------------------------------------------

--
-- Structure for view `chef_recommended_view`
--
DROP TABLE IF EXISTS `chef_recommended_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `chef_recommended_view`  AS  select `chef_recommended`.`id` AS `id`,`chef_recommended`.`name` AS `name`,`chef_recommended`.`date` AS `date`,`chef_recommended`.`status` AS `status` from `chef_recommended` ;

-- --------------------------------------------------------

--
-- Structure for view `color_view`
--
DROP TABLE IF EXISTS `color_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `color_view`  AS  select `color`.`id` AS `id`,`color`.`header` AS `header`,`color`.`footer` AS `footer`,`color`.`date` AS `date`,`color`.`status` AS `status` from `color` ;

-- --------------------------------------------------------

--
-- Structure for view `extra_page_view`
--
DROP TABLE IF EXISTS `extra_page_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `extra_page_view`  AS  select `extra_page`.`id` AS `id`,`extra_page`.`category_id` AS `category_id`,`extra_page`.`details` AS `details`,`extra_page`.`date` AS `date`,`extra_page`.`status` AS `status` from `extra_page` ;

-- --------------------------------------------------------

--
-- Structure for view `faq_view`
--
DROP TABLE IF EXISTS `faq_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `faq_view`  AS  select `faq`.`id` AS `id`,`faq`.`name` AS `name`,`faq`.`details` AS `details`,`faq`.`date` AS `date`,`faq`.`status` AS `status` from `faq` ;

-- --------------------------------------------------------

--
-- Structure for view `gallery_view`
--
DROP TABLE IF EXISTS `gallery_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `gallery_view`  AS  select `gallery`.`id` AS `id`,`gallery`.`photo` AS `photo`,`gallery`.`date` AS `date`,`gallery`.`status` AS `status` from `gallery` ;

-- --------------------------------------------------------

--
-- Structure for view `login`
--
DROP TABLE IF EXISTS `login`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `login`  AS  select `employee`.`id` AS `id`,`employee`.`name` AS `name`,`employee`.`username` AS `username`,`employee`.`password` AS `password`,`employee`.`status` AS `status` from `employee` ;

-- --------------------------------------------------------

--
-- Structure for view `offer_view`
--
DROP TABLE IF EXISTS `offer_view`;
-- in use(#1356 - View 'web3matr_Cafebalti_2017.offer_view' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Structure for view `page_cover_photo_view`
--
DROP TABLE IF EXISTS `page_cover_photo_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `page_cover_photo_view`  AS  select `page_cover_photo`.`id` AS `id`,`page_cover_photo`.`category_id` AS `category_id`,`page_cover_photo`.`sub_category_id` AS `sub_category_id`,`page_cover_photo`.`photo` AS `photo`,`page_cover_photo`.`date` AS `date`,`page_cover_photo`.`status` AS `status` from `page_cover_photo` ;

-- --------------------------------------------------------

--
-- Structure for view `product_view`
--
DROP TABLE IF EXISTS `product_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `product_view`  AS  select `product`.`id` AS `id`,`product`.`category_id` AS `category_id`,`product`.`sub_category_id` AS `sub_category_id`,`product`.`name` AS `name`,`product`.`photo` AS `photo`,`product`.`short_details` AS `short_details`,`product`.`long_details` AS `long_details`,`product`.`new_price` AS `new_price`,`product`.`old_price` AS `old_price`,`product`.`quantity` AS `quantity`,`product`.`date` AS `date`,`product`.`status` AS `status` from `product` ;

-- --------------------------------------------------------

--
-- Structure for view `promo_action_view`
--
DROP TABLE IF EXISTS `promo_action_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `promo_action_view`  AS  select `promo_action`.`id` AS `id`,`promo_action`.`title` AS `title`,`promo_action`.`photo` AS `photo`,`promo_action`.`details` AS `details`,`promo_action`.`date` AS `date`,`promo_action`.`status` AS `status` from `promo_action` ;

-- --------------------------------------------------------

--
-- Structure for view `reservation_slider_view`
--
DROP TABLE IF EXISTS `reservation_slider_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `reservation_slider_view`  AS  select `reservation_slider`.`id` AS `id`,`reservation_slider`.`title` AS `title`,`reservation_slider`.`photo` AS `photo`,`reservation_slider`.`details` AS `details`,`reservation_slider`.`button_name` AS `button_name`,`reservation_slider`.`button_link` AS `button_link`,`reservation_slider`.`date` AS `date`,`reservation_slider`.`status` AS `status` from `reservation_slider` ;

-- --------------------------------------------------------

--
-- Structure for view `reservation_view`
--
DROP TABLE IF EXISTS `reservation_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `reservation_view`  AS  select `reservation`.`id` AS `id`,`reservation`.`reservation_date` AS `reservation_date`,`reservation`.`reservation_time` AS `reservation_time`,`reservation`.`guest_number` AS `guest_number`,`reservation`.`name` AS `name`,`reservation`.`phone` AS `phone`,`reservation`.`email` AS `email`,`reservation`.`date` AS `date`,`reservation`.`status` AS `status` from `reservation` ;

-- --------------------------------------------------------

--
-- Structure for view `seo__view`
--
DROP TABLE IF EXISTS `seo__view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `seo__view`  AS  select `seo_`.`id` AS `id`,`seo_`.`meta_keywords` AS `meta_keywords`,`seo_`.`meta_descriptions` AS `meta_descriptions`,`seo_`.`date` AS `date`,`seo_`.`status` AS `status` from `seo_` ;

-- --------------------------------------------------------

--
-- Structure for view `site_basic_info_view`
--
DROP TABLE IF EXISTS `site_basic_info_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `site_basic_info_view`  AS  select `site_basic_info`.`id` AS `id`,`site_basic_info`.`site_name` AS `site_name`,`site_basic_info`.`photo` AS `photo`,`site_basic_info`.`address` AS `address`,`site_basic_info`.`phone_number` AS `phone_number`,`site_basic_info`.`restaurant_open_1` AS `restaurant_open_1`,`site_basic_info`.`restaurant_open_2` AS `restaurant_open_2`,`site_basic_info`.`facebook_link` AS `facebook_link`,`site_basic_info`.`twitter_link` AS `twitter_link`,`site_basic_info`.`tripadvisor_link` AS `tripadvisor_link`,`site_basic_info`.`yelp_link` AS `yelp_link`,`site_basic_info`.`date` AS `date`,`site_basic_info`.`status` AS `status` from `site_basic_info` ;

-- --------------------------------------------------------

--
-- Structure for view `slider_view`
--
DROP TABLE IF EXISTS `slider_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `slider_view`  AS  select `slider`.`id` AS `id`,`slider`.`slider_title` AS `slider_title`,`slider`.`slider_sub_title` AS `slider_sub_title`,`slider`.`photo` AS `photo`,`slider`.`date` AS `date`,`slider`.`status` AS `status` from `slider` ;

-- --------------------------------------------------------

--
-- Structure for view `sub_category_menu_view`
--
DROP TABLE IF EXISTS `sub_category_menu_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `sub_category_menu_view`  AS  select `sub_category_menu`.`id` AS `id`,`sub_category_menu`.`category_id` AS `category_id`,`sub_category_menu`.`sub_category_id` AS `sub_category_id`,`sub_category_menu`.`name` AS `name`,`sub_category_menu`.`details` AS `details`,`sub_category_menu`.`date` AS `date`,`sub_category_menu`.`status` AS `status` from `sub_category_menu` ;

-- --------------------------------------------------------

--
-- Structure for view `sub_category_view`
--
DROP TABLE IF EXISTS `sub_category_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `sub_category_view`  AS  select `sub_category`.`id` AS `id`,`sub_category`.`category_id` AS `category_id`,`sub_category`.`name` AS `name`,`sub_category`.`photo` AS `photo`,`sub_category`.`date` AS `date`,`sub_category`.`status` AS `status` from `sub_category` ;

-- --------------------------------------------------------

--
-- Structure for view `team_and_condition_view`
--
DROP TABLE IF EXISTS `team_and_condition_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `team_and_condition_view`  AS  select `team_and_condition`.`id` AS `id`,`team_and_condition`.`name` AS `name`,`team_and_condition`.`details` AS `details`,`team_and_condition`.`date` AS `date`,`team_and_condition`.`status` AS `status` from `team_and_condition` ;

-- --------------------------------------------------------

--
-- Structure for view `welcome_content_view`
--
DROP TABLE IF EXISTS `welcome_content_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `welcome_content_view`  AS  select `welcome_content`.`id` AS `id`,`welcome_content`.`details` AS `details`,`welcome_content`.`date` AS `date`,`welcome_content`.`status` AS `status` from `welcome_content` ;

-- --------------------------------------------------------

--
-- Structure for view `welcome_title_view`
--
DROP TABLE IF EXISTS `welcome_title_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`web3matrix`@`localhost` SQL SECURITY DEFINER VIEW `welcome_title_view`  AS  select `welcome_title`.`id` AS `id`,`welcome_title`.`title` AS `title`,`welcome_title`.`short_details` AS `short_details`,`welcome_title`.`date` AS `date`,`welcome_title`.`status` AS `status` from `welcome_title` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorize_user`
--
ALTER TABLE `authorize_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chef_recommended`
--
ALTER TABLE `chef_recommended`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chef_recommended_content`
--
ALTER TABLE `chef_recommended_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_table_field`
--
ALTER TABLE `custom_table_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_page`
--
ALTER TABLE `extra_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_cover_photo`
--
ALTER TABLE `page_cover_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_info`
--
ALTER TABLE `page_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo_action`
--
ALTER TABLE `promo_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_slider`
--
ALTER TABLE `reservation_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_`
--
ALTER TABLE `seo_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_basic_info`
--
ALTER TABLE `site_basic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category_menu`
--
ALTER TABLE `sub_category_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_and_condition`
--
ALTER TABLE `team_and_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome_content`
--
ALTER TABLE `welcome_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome_title`
--
ALTER TABLE `welcome_title`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authorize_user`
--
ALTER TABLE `authorize_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `chef_recommended`
--
ALTER TABLE `chef_recommended`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `chef_recommended_content`
--
ALTER TABLE `chef_recommended_content`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `custom_table_field`
--
ALTER TABLE `custom_table_field`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `extra_page`
--
ALTER TABLE `extra_page`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `page_cover_photo`
--
ALTER TABLE `page_cover_photo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `page_info`
--
ALTER TABLE `page_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
--
-- AUTO_INCREMENT for table `promo_action`
--
ALTER TABLE `promo_action`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `reservation_slider`
--
ALTER TABLE `reservation_slider`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `seo_`
--
ALTER TABLE `seo_`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_basic_info`
--
ALTER TABLE `site_basic_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `sub_category_menu`
--
ALTER TABLE `sub_category_menu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `team_and_condition`
--
ALTER TABLE `team_and_condition`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `welcome_content`
--
ALTER TABLE `welcome_content`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `welcome_title`
--
ALTER TABLE `welcome_title`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
