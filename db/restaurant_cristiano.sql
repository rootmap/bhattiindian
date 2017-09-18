-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2017 at 08:45 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
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
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `date`, `status`) VALUES
(1, 'Reservation', '2017-03-25', 1),
(2, 'Menu', '2017-04-16', 1),
(3, 'Menu 2', '2017-04-16', 1),
(4, 'Gallery', '2017-03-25', 1),
(5, 'Event', '2017-04-16', 1),
(6, 'Faq', '2017-04-16', 1),
(7, 'T & C', '2017-04-16', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `category_view`
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
  `product_id` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chef_recommended`
--

INSERT INTO `chef_recommended` (`id`, `product_id`, `date`, `status`) VALUES
(1, 1, '2017-03-23', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `chef_recommended_view`
--
CREATE TABLE `chef_recommended_view` (
`id` int(20)
,`product_id` int(20)
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
(1, 'How do I create an account?', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non a ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et. Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit iste delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem!&lt;/p&gt;&lt;p&gt;Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa nam soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem atque quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.&lt;/p&gt;', '2017-04-18', 1),
(2, 'How do I change my password?', '&lt;p&gt;&lt;/p&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem\r\n blanditiis delectus corporis, possimus officia sint sequi ex tenetur id\r\n impedit est pariatur iure animi non a ratione reiciendis nihil sed \r\nconsequatur atque repellendus fugit perspiciatis rerum et. Dolorum \r\nconsequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit\r\n sit iste delectus obcaecati debitis omnis, assumenda accusamus cumque \r\nperferendis eos aut quidem!&lt;/p&gt;&lt;p&gt;Aut, totam rerum, cupiditate quae \r\naperiam voluptas rem inventore quas, ex maxime culpa nam soluta labore \r\nat amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem \r\natque quis quam voluptate fugiat earum rem hic, reprehenderit quaerat \r\ntempore at. Aperiam.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '2017-04-18', 1),
(3, 'How do I upload large files?', '&lt;p&gt;&lt;/p&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem\r\n blanditiis delectus corporis, possimus officia sint sequi ex tenetur id\r\n impedit est pariatur iure animi non a ratione reiciendis nihil sed \r\nconsequatur atque repellendus fugit perspiciatis rerum et. Dolorum \r\nconsequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit\r\n sit iste delectus obcaecati debitis omnis, assumenda accusamus cumque \r\nperferendis eos aut quidem!&lt;/p&gt;&lt;p&gt;Aut, totam rerum, cupiditate quae \r\naperiam voluptas rem inventore quas, ex maxime culpa nam soluta labore \r\nat amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem \r\natque quis quam voluptate fugiat earum rem hic, reprehenderit quaerat \r\ntempore at. Aperiam.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '2017-04-18', 1),
(4, 'Any support backup to my files?', '&lt;p&gt;&lt;/p&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem\r\n blanditiis delectus corporis, possimus officia sint sequi ex tenetur id\r\n impedit est pariatur iure animi non a ratione reiciendis nihil sed \r\nconsequatur atque repellendus fugit perspiciatis rerum et. Dolorum \r\nconsequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit\r\n sit iste delectus obcaecati debitis omnis, assumenda accusamus cumque \r\nperferendis eos aut quidem!&lt;/p&gt;&lt;p&gt;Aut, totam rerum, cupiditate quae \r\naperiam voluptas rem inventore quas, ex maxime culpa nam soluta labore \r\nat amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem \r\natque quis quam voluptate fugiat earum rem hic, reprehenderit quaerat \r\ntempore at. Aperiam.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '2017-04-18', 1),
(5, 'Are there any hidden fees? ', '&lt;p&gt;&lt;/p&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem\r\n blanditiis delectus corporis, possimus officia sint sequi ex tenetur id\r\n impedit est pariatur iure animi non a ratione reiciendis nihil sed \r\nconsequatur atque repellendus fugit perspiciatis rerum et. Dolorum \r\nconsequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit\r\n sit iste delectus obcaecati debitis omnis, assumenda accusamus cumque \r\nperferendis eos aut quidem!&lt;/p&gt;&lt;p&gt;Aut, totam rerum, cupiditate quae \r\naperiam voluptas rem inventore quas, ex maxime culpa nam soluta labore \r\nat amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem \r\natque quis quam voluptate fugiat earum rem hic, reprehenderit quaerat \r\ntempore at. Aperiam.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '2017-04-18', 1),
(6, 'How does syncing work?', '&lt;p&gt;&lt;/p&gt;&lt;div class="mdn-container"&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Quae quidem blanditiis delectus corporis, \r\n                            possimus officia sint sequi ex tenetur id \r\nimpedit est pariatur iure animi non a ratione reiciendis nihil \r\n                            sed consequatur atque repellendus fugit \r\nperspiciatis rerum et. Dolorum consequuntur fugit deleniti, soluta \r\n                            fuga nobis. Ducimus blanditiis velit sit \r\niste delectus obcaecati debitis omnis, assumenda accusamus cumque \r\n                            perferendis eos aut quidem!&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;Aut, \r\ntotam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex \r\nmaxime \r\n                            culpa nam soluta labore at amet nihil \r\nlaborum? Explicabo numquam, sit fugit, voluptatem autem atque quis \r\n                            quam voluptate fugiat earum rem hic, \r\nreprehenderit quaerat tempore at. Aperiam.&lt;/p&gt;', '2017-04-18', 1),
(7, 'Do you offer refunds? ', '&lt;p&gt;&lt;/p&gt;&lt;div class="mdn-container"&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetur \r\nadipisicing elit. Quae quidem blanditiis delectus corporis, \r\n                            possimus officia sint sequi ex tenetur id \r\nimpedit est pariatur iure animi non a ratione reiciendis nihil \r\n                            sed consequatur atque repellendus fugit \r\nperspiciatis rerum et. Dolorum consequuntur fugit deleniti, soluta \r\n                            fuga nobis. Ducimus blanditiis velit sit \r\niste delectus obcaecati debitis omnis, assumenda accusamus cumque \r\n                            perferendis eos aut quidem!&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;Aut, \r\ntotam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex \r\nmaxime \r\n                            culpa nam soluta labore at amet nihil \r\nlaborum? Explicabo numquam, sit fugit, voluptatem autem atque quis \r\n                            quam voluptate fugiat earum rem hic, \r\nreprehenderit quaerat tempore at. Aperiam.&lt;/p&gt;', '2017-04-18', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `faq_view`
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
(1, 'photo_upload__1490643749_1490643749.jpg', '2017-03-27', 1),
(2, 'photo_upload__1490643765_1490643765.jpg', '2017-03-27', 1),
(3, 'photo_upload__1490643801_1490643801.jpg', '2017-03-27', 1),
(4, 'photo_upload__1490643348_1490643348.jpg', '2017-03-27', 1),
(5, 'photo_upload__1490643817_1490643817.jpg', '2017-03-27', 1),
(6, 'photo_upload__1490643367_1490643367.jpg', '2017-03-27', 1),
(7, 'photo_upload__1490643701_1490643701.jpg', '2017-03-27', 1),
(8, 'photo_upload__1490643876_1490643876.jpg', '2017-03-27', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `gallery_view`
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
  `product_id` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `product_id`, `date`, `status`) VALUES
(1, 6, '2017-04-12', 1),
(2, 2, '2017-03-27', 1),
(3, 4, '2017-03-27', 1),
(4, 6, '2017-03-27', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `offer_view`
--
CREATE TABLE `offer_view` (
`id` int(20)
,`product_id` int(20)
,`date` date
,`status` int(2)
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
(13, 2, 9, 'photo_upload__1492454169_1492454169.jpg', '2017-04-17', 1),
(14, 2, 10, 'photo_upload__1492454194_1492454194.jpg', '2017-04-17', 1),
(15, 2, 11, 'photo_upload__1492454202_1492454202.jpg', '2017-04-17', 1),
(16, 2, 13, 'photo_upload__1492454212_1492454212.jpg', '2017-04-17', 1),
(17, 3, 15, 'photo_upload__1492454226_1492454226.jpg', '2017-04-17', 1),
(18, 3, 16, 'photo_upload__1492454234_1492454234.jpg', '2017-04-17', 1),
(19, 3, 17, 'photo_upload__1492454243_1492454243.jpg', '2017-04-17', 1),
(20, 3, 18, 'photo_upload__1492454259_1492454259.png', '2017-04-17', 1),
(21, 3, 19, 'photo_upload__1492454271_1492454271.jpg', '2017-04-17', 1),
(22, 6, 0, 'photo_upload__1492497589_1492497589.jpg', '2017-04-18', 1),
(23, 7, 0, 'photo_upload__1492497599_1492497599.jpg', '2017-04-18', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `page_cover_photo_view`
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
  `name` varchar(255) DEFAULT NULL,
  `photo` text,
  `short_details` text,
  `long_details` text,
  `new_price` varchar(255) DEFAULT NULL,
  `old_price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `sub_category_id`, `name`, `photo`, `short_details`, `long_details`, `new_price`, `old_price`, `quantity`, `date`, `status`) VALUES
(2, 1, 8, 'Caeser Salad', 'photo_upload__1490514830_1490514830.jpg', '&lt;span style="color:#777777;font-family:Lora, sans-serif;font-size:14px;font-style:italic;letter-spacing:0.3px;background-color:rgba(240, 240, 240, 0.8);"&gt;Lettuce, Eggs, Parmesan Cheese, Chicken Breast Fillets.&lt;/span&gt;', '&lt;span style="color:#333333;font-family:Lora, sans-serif;font-size:14px;background-color:rgba(240, 240, 240, 0.8);"&gt;The salad&amp;rsquo;s creation is generally attributed to restaurateur Caesar Cardini, an Italian immigrant who operated restaurants in Mexico and the United States.&lt;/span&gt;', '30.00', '', '', '2017-04-16', 1),
(3, 1, 9, 'Apple Strudel', 'photo_upload__1490514845_1490514845.jpg', '&lt;span style="color:#777777;font-family:Lora, sans-serif;font-size:14px;font-style:italic;letter-spacing:0.3px;background-color:rgba(240, 240, 240, 0.8);"&gt;Apples, Vanilla Ice Cream, Nuts&lt;/span&gt;', '&lt;span style="color:#333333;font-family:Lora, sans-serif;font-size:14px;background-color:rgba(240, 240, 240, 0.8);"&gt;Tasty apple dessert for tea time. This delicious you will never forget.&lt;/span&gt;', '15.00', '', '10', '2017-04-16', 1),
(4, 1, 12, 'Cherry Pie', 'photo_upload__1490514865_1490514865.jpg', '&lt;span style="color:#777777;font-family:Lora, sans-serif;font-size:14px;font-style:italic;letter-spacing:0.3px;background-color:rgba(240, 240, 240, 0.8);"&gt;Cherries, Dough, White Sugar, Cheese, Vanilla Ice Cream&lt;/span&gt;', '&lt;span style="color:#333333;font-family:Lora, sans-serif;font-size:14px;background-color:rgba(240, 240, 240, 0.8);"&gt;If you love cherry and cheese then you must try this dessert. Cherry dessert good idea for you.&lt;/span&gt;', '15.00', '', '10', '2017-04-16', 1),
(5, 1, 12, 'Greek Salad ', 'photo_upload__1490637714_1490637714.jpg', 'Tuna, Red Onion, Caper, Mozzarella, Tomato Sauce', 'Made with love for you from our chef.', '30.00', '', '45', '2017-04-16', 1),
(6, 1, 13, 'Fish Parmentier ', 'photo_upload__1490637822_1490637822.jpg', 'Cod, haddock, prawn and salmon in a creamy white wine and leek sauce, topped with mash potato and Gruy&amp;egrave;re cheese', 'It good idea for quick and tasty lunch.', '21.00', '', '10', '2017-04-16', 1),
(7, 3, 14, 'Fish Parmentier', 'photo_upload__1492458773_1492458773.jpg', 'Cod, haddock, prawn and salmon in a creamy white wine and leek sauce, topped with mash potato and Gruy&amp;egrave;re cheese', 'It good idea for quick and tasty lunch', '21.00', '0', '45', '2017-04-17', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_view`
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
(1, 'Promo Action', 'photo_upload__1490512613_1490512613.jpg', '&lt;strong&gt;Ut enim ad minim veniam&lt;/strong&gt;, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2017-03-26', 1),
(2, 'Cristiano Restaurant', 'photo_upload__1490512677_1490512677.jpg', '&lt;strong&gt;Ut enim ad minim venia&lt;/strong&gt;, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2017-03-26', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `promo_action_view`
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
(7, '2017-04-18', '12:30 AM', '2', 'Fakhrul Islam Talukder', '534553', 'fakhrulislamtalukder@gmail.com', 'sdf', '2017-04-17', 1);

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
(1, 'Cristiano, Restaurant, food', 'Business partners, Kelly Barker, from South Louisiana, and Cristiano Raffignone, a native of Liguria, Italy first met and shared their passion for worldly cuisine in 1990 when they met in NYC.\r\n\r\nIn 2000, the team opened Cristiano Ristorante in Houma. Cristiano''s, led by Chef Lindsay Mason, specializes in  northern Italian cuisine and also produces a seasonal menu focusing on the freshest local ingredients. The combination provides an experience that surpasses the imagination. \r\n\r\nIn May of 2013, the KC Restaurant Group purchased Dick & Jenny''s. The popular, renowned restaurant is known for it''s eclectic style of New Orleans cuisine. Kelly and Cristiano intend to build a culinary bridge between their two boots, Louisiana and Italy. Chef Sparr works to renew the essence of D&J, while maintaining the consistency of this restaurant group''s vision.\r\n\r\nOur restaurants are available for all your private party needs, from intimate dinners to birthday celebrations. Let us create the perfect venue for your rehearsal dinner, wedding ceremony, reception, holiday party or business meeting. We also offer off-site catering for any size event, from drop off to full service.', '2017-05-07', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `seo__view`
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
  `map` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_basic_info`
--

INSERT INTO `site_basic_info` (`id`, `site_name`, `photo`, `address`, `phone_number`, `restaurant_open_1`, `restaurant_open_2`, `facebook_link`, `twitter_link`, `tripadvisor_link`, `yelp_link`, `map`, `date`, `status`) VALUES
(1, 'Restaurant Cristiano', 'photo_upload__1493655858_1493655858.png', '123 Main Street, Uni 21, New York City', '+38 (012) 34 56 789', 'Mon - Fri: 08:00 am - 10:00 pm', 'Sat - Sun: 10:00 am - 11:00 pm', '#', '#', '#', '#', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84040304204!2d-74.2581961822122!3d40.70583158621043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2s', '2017-05-01', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `site_basic_info_view`
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
(1, 'Cristiano Restaurant', '123 Main Street, Uni 21, New York City', 'photo_upload__1490511628_1490511628.jpg', '2017-03-26', 1),
(2, 'Cristiano Restaurant', '123 Main Street, Uni 21, New York City', 'photo_upload__1490511638_1490511638.jpg', '2017-03-26', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `slider_view`
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
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `name`, `photo`, `date`, `status`) VALUES
(9, 2, 'Tandoori Dish', 'photo_upload__1492374681_1492374681.jpg', '2017-04-16', 1),
(10, 2, 'Traditional Dish', 'photo_upload__1492374746_1492374746.jpg', '2017-04-16', 1),
(11, 2, 'Biryani Dish', 'photo_upload__1492374809_1492374809.jpg', '2017-04-16', 1),
(12, 2, 'Vegetables', 'photo_upload__1492374906_1492374906.png', '2017-04-16', 1),
(13, 2, 'Desserts', 'photo_upload__1492374989_1492374989.jpg', '2017-04-16', 1),
(14, 3, 'Starter', '', '2017-04-17', 1),
(15, 3, 'Tandoori Dish', '', '2017-04-17', 1),
(16, 3, 'Traditional Dish', '', '2017-04-17', 1),
(17, 3, 'Biryani Dish', '', '2017-04-17', 1),
(18, 3, 'Vegitable', '', '2017-04-17', 1),
(19, 3, 'Desserts', '', '2017-04-17', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sub_category_view`
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
(1, 'Metus auctor fringilla', '&lt;h2&gt;Pellentesque Nibh Mattis&lt;br /&gt;&lt;/h2&gt;&lt;p&gt;Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus el magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facukusus ubm egestas eet qyan. Nullam id dolor id nibh ultricies vehicula ut od elit. Donec ullamcorper nulla non metus auctor fringiall. Sed posuere consctetur est at labortis. Aenean lacinia bibendum nulla sed consectetur.&lt;/p&gt;&lt;div class="one_third"&gt;&lt;p&gt;Donec ullamcorper nulla non metus auctor firgilla. Cum sociis natoque penatibus et magnis dis parturient montees nascetur ridicuklus mus. Cras justo odio., dapibus ac faiclisis in egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;div class="one_third"&gt;&lt;p&gt;Conec ullamcorper nulla non metus auctor fringila. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur riduculus mus. Craas justo odion, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;&lt;p&gt;Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur rididulus mus. Ctas justo odio, dapobus ac facilisis in, egestas eget quam.&lt;/p&gt;&lt;/div&gt;', '2017-04-18', 1),
(2, 'Cum sociss', '&lt;h2&gt;Pellentesque Nibh Mattis 2&lt;/h2&gt;&lt;p&gt;Donec ullamcorper nulla non metus auctor fringilla. Cum sociis \r\nnatoque penatibus el magnis dis parturient montes, nascetur ridiculus \r\nmus. Cras justo odio, dapibus ac facukusus ubm egestas eet qyan. Nullam \r\nid dolor id nibh ultricies vehicula ut od elit. Donec ullamcorper nulla \r\nnon metus auctor fringiall. Sed posuere consctetur est at labortis. \r\nAenean lacinia bibendum nulla sed consectetur.&lt;/p&gt;&lt;div class="one_third"&gt;&lt;p&gt;Donec ullamcorper nulla non metus auctor firgilla. Cum sociis \r\nnatoque penatibus et magnis dis parturient montees nascetur ridicuklus \r\nmus. Cras justo odio., dapibus ac faiclisis in egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;div class="one_third"&gt;&lt;p&gt;Conec ullamcorper nulla non metus auctor fringila. Cum sociis \r\nnatoque penatibus et magnis dis parturient montes, nascetur riduculus \r\nmus. Craas justo odion, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;Donec ullamcorper nulla non metus auctor fringilla. Cum sociis \r\nnatoque penatibus et magnis dis parturient montes, nascetur rididulus \r\nmus. Ctas justo odio, dapobus ac facilisis in, egestas eget quam.', '2017-04-18', 1),
(3, 'Penatibus et', '&lt;h2&gt;Pellentesque Nibh Mattis&lt;/h2&gt;&lt;p&gt;Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus el magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facukusus ubm egestas eet qyan. Nullam id dolor id nibh ultricies vehicula ut od elit. Donec ullamcorper nulla non metus auctor fringiall. Sed posuere consctetur est at labortis. Aenean lacinia bibendum nulla sed consectetur.&lt;/p&gt;&lt;div class="one_third"&gt;&lt;p&gt;Donec ullamcorper nulla \r\nnon metus auctor firgilla. Cum sociis natoque penatibus et magnis dis \r\nparturient montees nascetur ridicuklus mus. Cras justo odio., dapibus ac\r\n faiclisis in egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;div class="one_third"&gt;&lt;p&gt;Conec\r\n ullamcorper nulla non metus auctor fringila. Cum sociis natoque \r\npenatibus et magnis dis parturient montes, nascetur riduculus mus. Craas\r\n justo odion, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;Donec\r\n ullamcorper nulla non metus auctor fringilla. Cum sociis natoque \r\npenatibus et magnis dis parturient montes, nascetur rididulus mus. Ctas \r\njusto odio, dapobus ac facilisis in, egestas eget quam.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '2017-04-18', 1),
(4, 'Dolor Porta Fermentum', '&lt;h2&gt;Pellentesque Nibh Mattis 2&lt;/h2&gt;&lt;p&gt;Donec ullamcorper nulla non metus auctor fringilla. Cum sociis \r\nnatoque penatibus el magnis dis parturient montes, nascetur ridiculus \r\nmus. Cras justo odio, dapibus ac facukusus ubm egestas eet qyan. Nullam \r\nid dolor id nibh ultricies vehicula ut od elit. Donec ullamcorper nulla \r\nnon metus auctor fringiall. Sed posuere consctetur est at labortis. \r\nAenean lacinia bibendum nulla sed consectetur.&lt;/p&gt;&lt;div class="one_third"&gt;&lt;p&gt;Donec ullamcorper nulla non metus auctor firgilla. Cum sociis \r\nnatoque penatibus et magnis dis parturient montees nascetur ridicuklus \r\nmus. Cras justo odio., dapibus ac faiclisis in egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;div class="one_third"&gt;&lt;p&gt;Conec ullamcorper nulla non metus auctor fringila. Cum sociis \r\nnatoque penatibus et magnis dis parturient montes, nascetur riduculus \r\nmus. Craas justo odion, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;div class="one_third column-last"&gt;&lt;p&gt;Donec ullamcorper nulla non metus auctor fringilla. Cum sociis \r\nnatoque penatibus et magnis dis parturient montes, nascetur rididulus \r\nmus. Ctas justo odio, dapobus ac facilisis in, egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;', '2017-04-18', 1),
(5, 'Penatibus et', '&lt;h2&gt;Pellentesque Nibh Mattis&lt;/h2&gt;&lt;p&gt;Donec ullamcorper nulla non\r\n metus auctor fringilla. Cum sociis natoque penatibus el magnis dis \r\nparturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac \r\nfacukusus ubm egestas eet qyan. Nullam id dolor id nibh ultricies \r\nvehicula ut od elit. Donec ullamcorper nulla non metus auctor fringiall.\r\n Sed posuere consctetur est at labortis. Aenean lacinia bibendum nulla \r\nsed consectetur.&lt;br /&gt;&lt;br /&gt;&lt;/p&gt;&lt;div class="one_third"&gt;&lt;p&gt;Donec ullamcorper nulla \r\nnon metus auctor firgilla. Cum sociis natoque penatibus et magnis dis \r\nparturient montees nascetur ridicuklus mus. Cras justo odio., dapibus ac\r\n faiclisis in egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;div class="one_third"&gt;&lt;p&gt;Conec\r\n ullamcorper nulla non metus auctor fringila. Cum sociis natoque \r\npenatibus et magnis dis parturient montes, nascetur riduculus mus. Craas\r\n justo odion, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;Donec\r\n ullamcorper nulla non metus auctor fringilla. Cum sociis natoque \r\npenatibus et magnis dis parturient montes, nascetur rididulus mus. Ctas \r\njusto odio, dapobus ac facilisis in, egestas eget quam.&lt;/p&gt;', '2017-04-18', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `team_and_condition_view`
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
-- Structure for view `blog_view`
--
DROP TABLE IF EXISTS `blog_view`;

CREATE  VIEW `blog_view`  AS  select `blog`.`id` AS `id`,`blog`.`title` AS `title`,`blog`.`photo` AS `photo`,`blog`.`date_and_time` AS `date_and_time`,`blog`.`details` AS `details`,`blog`.`date` AS `date`,`blog`.`status` AS `status` from `blog` ;

-- --------------------------------------------------------

--
-- Structure for view `category_view`
--
DROP TABLE IF EXISTS `category_view`;

CREATE  VIEW `category_view`  AS  select `category`.`id` AS `id`,`category`.`name` AS `name`,`category`.`date` AS `date`,`category`.`status` AS `status` from `category` ;

-- --------------------------------------------------------

--
-- Structure for view `chef_recommended_view`
--
DROP TABLE IF EXISTS `chef_recommended_view`;

CREATE  VIEW `chef_recommended_view`  AS  select `chef_recommended`.`id` AS `id`,`chef_recommended`.`product_id` AS `product_id`,`chef_recommended`.`date` AS `date`,`chef_recommended`.`status` AS `status` from `chef_recommended` ;

-- --------------------------------------------------------

--
-- Structure for view `faq_view`
--
DROP TABLE IF EXISTS `faq_view`;

CREATE  VIEW `faq_view`  AS  select `faq`.`id` AS `id`,`faq`.`name` AS `name`,`faq`.`details` AS `details`,`faq`.`date` AS `date`,`faq`.`status` AS `status` from `faq` ;

-- --------------------------------------------------------

--
-- Structure for view `gallery_view`
--
DROP TABLE IF EXISTS `gallery_view`;

CREATE  VIEW `gallery_view`  AS  select `gallery`.`id` AS `id`,`gallery`.`photo` AS `photo`,`gallery`.`date` AS `date`,`gallery`.`status` AS `status` from `gallery` ;

-- --------------------------------------------------------

--
-- Structure for view `login`
--
DROP TABLE IF EXISTS `login`;

CREATE  VIEW `login`  AS  select `employee`.`id` AS `id`,`employee`.`name` AS `name`,`employee`.`username` AS `username`,`employee`.`password` AS `password`,`employee`.`status` AS `status` from `employee` ;

-- --------------------------------------------------------

--
-- Structure for view `offer_view`
--
DROP TABLE IF EXISTS `offer_view`;

CREATE  VIEW `offer_view`  AS  select `offer`.`id` AS `id`,`offer`.`product_id` AS `product_id`,`offer`.`date` AS `date`,`offer`.`status` AS `status` from `offer` ;

-- --------------------------------------------------------

--
-- Structure for view `page_cover_photo_view`
--
DROP TABLE IF EXISTS `page_cover_photo_view`;

CREATE  VIEW `page_cover_photo_view`  AS  select `page_cover_photo`.`id` AS `id`,`page_cover_photo`.`category_id` AS `category_id`,`page_cover_photo`.`sub_category_id` AS `sub_category_id`,`page_cover_photo`.`photo` AS `photo`,`page_cover_photo`.`date` AS `date`,`page_cover_photo`.`status` AS `status` from `page_cover_photo` ;

-- --------------------------------------------------------

--
-- Structure for view `product_view`
--
DROP TABLE IF EXISTS `product_view`;

CREATE  VIEW `product_view`  AS  select `product`.`id` AS `id`,`product`.`category_id` AS `category_id`,`product`.`sub_category_id` AS `sub_category_id`,`product`.`name` AS `name`,`product`.`photo` AS `photo`,`product`.`short_details` AS `short_details`,`product`.`long_details` AS `long_details`,`product`.`new_price` AS `new_price`,`product`.`old_price` AS `old_price`,`product`.`quantity` AS `quantity`,`product`.`date` AS `date`,`product`.`status` AS `status` from `product` ;

-- --------------------------------------------------------

--
-- Structure for view `promo_action_view`
--
DROP TABLE IF EXISTS `promo_action_view`;

CREATE  VIEW `promo_action_view`  AS  select `promo_action`.`id` AS `id`,`promo_action`.`title` AS `title`,`promo_action`.`photo` AS `photo`,`promo_action`.`details` AS `details`,`promo_action`.`date` AS `date`,`promo_action`.`status` AS `status` from `promo_action` ;

-- --------------------------------------------------------

--
-- Structure for view `reservation_slider_view`
--
DROP TABLE IF EXISTS `reservation_slider_view`;

CREATE  VIEW `reservation_slider_view`  AS  select `reservation_slider`.`id` AS `id`,`reservation_slider`.`title` AS `title`,`reservation_slider`.`photo` AS `photo`,`reservation_slider`.`details` AS `details`,`reservation_slider`.`button_name` AS `button_name`,`reservation_slider`.`button_link` AS `button_link`,`reservation_slider`.`date` AS `date`,`reservation_slider`.`status` AS `status` from `reservation_slider` ;

-- --------------------------------------------------------

--
-- Structure for view `reservation_view`
--
DROP TABLE IF EXISTS `reservation_view`;

CREATE  VIEW `reservation_view`  AS  select `reservation`.`id` AS `id`,`reservation`.`reservation_date` AS `reservation_date`,`reservation`.`reservation_time` AS `reservation_time`,`reservation`.`guest_number` AS `guest_number`,`reservation`.`name` AS `name`,`reservation`.`phone` AS `phone`,`reservation`.`email` AS `email`,`reservation`.`date` AS `date`,`reservation`.`status` AS `status` from `reservation` ;

-- --------------------------------------------------------

--
-- Structure for view `seo__view`
--
DROP TABLE IF EXISTS `seo__view`;

CREATE  VIEW `seo__view`  AS  select `seo_`.`id` AS `id`,`seo_`.`meta_keywords` AS `meta_keywords`,`seo_`.`meta_descriptions` AS `meta_descriptions`,`seo_`.`date` AS `date`,`seo_`.`status` AS `status` from `seo_` ;

-- --------------------------------------------------------

--
-- Structure for view `site_basic_info_view`
--
DROP TABLE IF EXISTS `site_basic_info_view`;

CREATE  VIEW `site_basic_info_view`  AS  select `site_basic_info`.`id` AS `id`,`site_basic_info`.`site_name` AS `site_name`,`site_basic_info`.`photo` AS `photo`,`site_basic_info`.`address` AS `address`,`site_basic_info`.`phone_number` AS `phone_number`,`site_basic_info`.`restaurant_open_1` AS `restaurant_open_1`,`site_basic_info`.`restaurant_open_2` AS `restaurant_open_2`,`site_basic_info`.`facebook_link` AS `facebook_link`,`site_basic_info`.`twitter_link` AS `twitter_link`,`site_basic_info`.`tripadvisor_link` AS `tripadvisor_link`,`site_basic_info`.`yelp_link` AS `yelp_link`,`site_basic_info`.`date` AS `date`,`site_basic_info`.`status` AS `status` from `site_basic_info` ;

-- --------------------------------------------------------

--
-- Structure for view `slider_view`
--
DROP TABLE IF EXISTS `slider_view`;

CREATE  VIEW `slider_view`  AS  select `slider`.`id` AS `id`,`slider`.`slider_title` AS `slider_title`,`slider`.`slider_sub_title` AS `slider_sub_title`,`slider`.`photo` AS `photo`,`slider`.`date` AS `date`,`slider`.`status` AS `status` from `slider` ;

-- --------------------------------------------------------

--
-- Structure for view `sub_category_view`
--
DROP TABLE IF EXISTS `sub_category_view`;

CREATE  VIEW `sub_category_view`  AS  select `sub_category`.`id` AS `id`,`sub_category`.`category_id` AS `category_id`,`sub_category`.`name` AS `name`,`sub_category`.`photo` AS `photo`,`sub_category`.`date` AS `date`,`sub_category`.`status` AS `status` from `sub_category` ;

-- --------------------------------------------------------

--
-- Structure for view `team_and_condition_view`
--
DROP TABLE IF EXISTS `team_and_condition_view`;

CREATE  VIEW `team_and_condition_view`  AS  select `team_and_condition`.`id` AS `id`,`team_and_condition`.`name` AS `name`,`team_and_condition`.`details` AS `details`,`team_and_condition`.`date` AS `date`,`team_and_condition`.`status` AS `status` from `team_and_condition` ;

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
-- Indexes for table `team_and_condition`
--
ALTER TABLE `team_and_condition`
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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `chef_recommended`
--
ALTER TABLE `chef_recommended`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `page_cover_photo`
--
ALTER TABLE `page_cover_photo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `page_info`
--
ALTER TABLE `page_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `promo_action`
--
ALTER TABLE `promo_action`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `team_and_condition`
--
ALTER TABLE `team_and_condition`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
