-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2015 at 03:20 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `activeresort`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `about_id` int(11) NOT NULL auto_increment,
  `type` longtext NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY  (`about_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `type`, `description`) VALUES
(1, 'main_text', 'This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. This is the about div. '),
(2, 'counter_text1', 'ACCOMODATION'),
(3, 'counter_text2', 'EVENTS'),
(4, 'counter_text3', 'PACKAGES'),
(5, 'counter_text4', 'FACILITY'),
(8, 'counter_number1', '1114'),
(9, 'counter_number2', '154'),
(6, 'counter_number3', '111'),
(7, 'counter_number4', '5518');

-- --------------------------------------------------------

--
-- Table structure for table `about_gallary`
--

CREATE TABLE IF NOT EXISTS `about_gallary` (
  `about_gallary_id` int(11) NOT NULL auto_increment,
  `about` longtext NOT NULL,
  PRIMARY KEY  (`about_gallary_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `about_gallary`
--

INSERT INTO `about_gallary` (`about_gallary_id`, `about`) VALUES
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(25, ''),
(26, ''),
(27, '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `email` longtext NOT NULL,
  `password` longtext NOT NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'ananya', 'admin@resort.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL auto_increment,
  `branch` longtext NOT NULL,
  `roon` longtext NOT NULL,
  `start_date` longtext NOT NULL,
  `end_date` longtext NOT NULL,
  `current_state` longtext NOT NULL,
  `cost` longtext NOT NULL,
  `payment_state` longtext NOT NULL,
  PRIMARY KEY  (`booking_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `booking`
--


-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `branch_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `email` longtext NOT NULL,
  `phone_number` longtext NOT NULL,
  `division` longtext NOT NULL,
  `address` longtext NOT NULL,
  `location` longtext NOT NULL,
  PRIMARY KEY  (`branch_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `name`, `email`, `phone_number`, `division`, `address`, `location`) VALUES
(6, 'niketon', 'niketon@gmail.com', '', '', '', ''),
(8, 'project', '', '', '', '', ''),
(9, 'uttara', 'a.b@c', '1234', 'dhaka', 'asb', ''),
(11, 'Branch Test', 'admin@resort.com', '1356165', 'Dhaka', 'Uttara', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL auto_increment,
  `address` longtext NOT NULL,
  `email` longtext NOT NULL,
  `phone_number` longtext NOT NULL,
  PRIMARY KEY  (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `address`, `email`, `phone_number`) VALUES
(1, 'gulsan, niketon', 'aunok@activeit.com', '01737916277');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `employee_type` longtext NOT NULL,
  `email` longtext NOT NULL,
  `address` longtext NOT NULL,
  `others` longtext NOT NULL,
  `facebook` longtext NOT NULL,
  `twitter` longtext NOT NULL,
  `google_plus` longtext NOT NULL,
  PRIMARY KEY  (`employee_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `name`, `employee_type`, `email`, `address`, `others`, `facebook`, `twitter`, `google_plus`) VALUES
(1, 'Rabiul Khan', 'Accountant', 'rabiulkhan90@yahoo.com', 'Rampura', 'oiuytr', 'https://www.facebook.com/krabiulkhan', '', ''),
(2, 'Maisie Chavez', '201', 'denytyzu@yahoo.com', 'Lorem sequi beatae qui ea debitis consequatur, cupidatat quia dolorem possimus, vel omnis cum rem animi, suscipit est esse.', 'Eius et sunt non non vel sit minus quis vitae.', '99', '577', '236');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `events_id` int(11) NOT NULL auto_increment,
  `title` longtext NOT NULL,
  `event_type` longtext NOT NULL,
  `start_time` longtext NOT NULL,
  `end_time` longtext NOT NULL,
  `venue` longtext NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY  (`events_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`events_id`, `title`, `event_type`, `start_time`, `end_time`, `venue`, `description`) VALUES
(1, 'co', '3', '2015-02-07', '2015-02-08', 'niketon', ''),
(5, 'Khan', '3', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE IF NOT EXISTS `event_type` (
  `event_type_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY  (`event_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`event_type_id`, `name`, `description`) VALUES
(3, 'cultural', 'asdfghj');

-- --------------------------------------------------------

--
-- Table structure for table `exclusive_gallary`
--

CREATE TABLE IF NOT EXISTS `exclusive_gallary` (
  `exclusive_gallary_id` int(11) NOT NULL auto_increment,
  `about` longtext NOT NULL,
  PRIMARY KEY  (`exclusive_gallary_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `exclusive_gallary`
--

INSERT INTO `exclusive_gallary` (`exclusive_gallary_id`, `about`) VALUES
(18, ''),
(17, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, '');

-- --------------------------------------------------------

--
-- Table structure for table `extra_facility`
--

CREATE TABLE IF NOT EXISTS `extra_facility` (
  `extra_facility_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY  (`extra_facility_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `extra_facility`
--

INSERT INTO `extra_facility` (`extra_facility_id`, `name`, `description`) VALUES
(2, 'rabiul', 'asd'),
(4, 'Test extra Facilities', 'test description for extra facilities\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `favicon`
--

CREATE TABLE IF NOT EXISTS `favicon` (
  `favicon_id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`favicon_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `favicon`
--


-- --------------------------------------------------------

--
-- Table structure for table `floors`
--

CREATE TABLE IF NOT EXISTS `floors` (
  `floors_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `branch` longtext NOT NULL,
  `number` longtext NOT NULL,
  PRIMARY KEY  (`floors_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`floors_id`, `name`, `branch`, `number`) VALUES
(5, '1st', '9', '123456'),
(6, '5th', '6', '12345'),
(8, 'Floor Test', '11', '1651651');

-- --------------------------------------------------------

--
-- Table structure for table `food_item`
--

CREATE TABLE IF NOT EXISTS `food_item` (
  `food_item_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `food_item_category` longtext NOT NULL,
  `description` longtext NOT NULL,
  `made_by` longtext NOT NULL,
  `price` longtext NOT NULL,
  `availability` longtext NOT NULL,
  PRIMARY KEY  (`food_item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `food_item`
--

INSERT INTO `food_item` (`food_item_id`, `name`, `food_item_category`, `description`, `made_by`, `price`, `availability`) VALUES
(4, 'Rice', '1', '', 'rice', '100', '0');

-- --------------------------------------------------------

--
-- Table structure for table `food_item_category`
--

CREATE TABLE IF NOT EXISTS `food_item_category` (
  `food_item_category_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  PRIMARY KEY  (`food_item_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `food_item_category`
--

INSERT INTO `food_item_category` (`food_item_category_id`, `name`) VALUES
(1, 'lunch'),
(2, 'breakfast'),
(3, 'dinner');

-- --------------------------------------------------------

--
-- Table structure for table `food_package`
--

CREATE TABLE IF NOT EXISTS `food_package` (
  `food_package_id` int(11) NOT NULL auto_increment,
  `food_item` longtext NOT NULL,
  `quantity` longtext NOT NULL,
  `price` longtext NOT NULL,
  PRIMARY KEY  (`food_package_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `food_package`
--

INSERT INTO `food_package` (`food_package_id`, `food_item`, `quantity`, `price`) VALUES
(1, '2', '2', '280'),
(2, '2', '6', '3377');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE IF NOT EXISTS `general_settings` (
  `general_settings_id` int(11) NOT NULL auto_increment,
  `system_name` longtext NOT NULL,
  `system_email` longtext NOT NULL,
  `system_title` longtext NOT NULL,
  `currency` longtext NOT NULL,
  `language` longtext NOT NULL,
  `google_ad` longtext NOT NULL,
  `google_box` longtext NOT NULL,
  `google_wide` longtext NOT NULL,
  `meta_tags` longtext NOT NULL,
  PRIMARY KEY  (`general_settings_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`general_settings_id`, `system_name`, `system_email`, `system_title`, `currency`, `language`, `google_ad`, `google_box`, `google_wide`, `meta_tags`) VALUES
(1, 'Active Resort Management System', 'activeresort@gmail.com', 'Active resort Aunok', '$', 'English', '642451000822', '297151600722', '297151600722', 'classified,activeit');

-- --------------------------------------------------------

--
-- Table structure for table `indoor_games`
--

CREATE TABLE IF NOT EXISTS `indoor_games` (
  `indoor_games_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `about` longtext NOT NULL,
  `available_item` longtext NOT NULL,
  `allowance` longtext NOT NULL,
  PRIMARY KEY  (`indoor_games_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `indoor_games`
--

INSERT INTO `indoor_games` (`indoor_games_id`, `name`, `about`, `available_item`, `allowance`) VALUES
(1, 'aaaaa', 'addsfdf', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE IF NOT EXISTS `library` (
  `library_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `about` longtext NOT NULL,
  `type` longtext NOT NULL,
  PRIMARY KEY  (`library_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`library_id`, `name`, `about`, `type`) VALUES
(1, 'jhglj', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `logo_id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`logo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `logo`
--


-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `address` longtext NOT NULL,
  `email` longtext NOT NULL,
  `phone_number` longtext NOT NULL,
  `skype` longtext NOT NULL,
  `facebook` longtext NOT NULL,
  `google_plus` longtext NOT NULL,
  `member_type` longtext NOT NULL,
  `creation_date` longtext NOT NULL,
  PRIMARY KEY  (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `address`, `email`, `phone_number`, `skype`, `facebook`, `google_plus`, `member_type`, `creation_date`) VALUES
(3, 'rabiul khan', 'rampura', 'rabiulkhan90@yahoo.com', '12345', '', 'https://www.facebook.com/krabiulkhan', '', '2', ''),
(4, 'Member test Name', '', 'admin@resort.com', '721312356756', 'cfgd.fhdfh', 'dfhdfh', 'dfhdfh', '4', '');

-- --------------------------------------------------------

--
-- Table structure for table `member_type`
--

CREATE TABLE IF NOT EXISTS `member_type` (
  `member_type_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  PRIMARY KEY  (`member_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `member_type`
--

INSERT INTO `member_type` (`member_type_id`, `name`) VALUES
(4, 'Member Type test'),
(2, 'rabiul'),
(3, 'ananya');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL auto_increment,
  `headline` longtext NOT NULL,
  `summery` longtext NOT NULL,
  `description` longtext NOT NULL,
  `tag` longtext NOT NULL,
  `date` longtext NOT NULL,
  `time` longtext NOT NULL,
  `publication` longtext NOT NULL,
  `writter` longtext NOT NULL,
  PRIMARY KEY  (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `headline`, `summery`, `description`, `tag`, `date`, `time`, `publication`, `writter`) VALUES
(1, 'Headline Headline Headline Headline Headline Headline ', 'something something something something something something something something something something something something something something something something something something something something something something something ', 'something something something something something something something something something something something something something something something something something something something something ', 'News New', '2015-02-07', '10:00', 'published', 'r khan'),
(5, 'something', 'something something something something something something ', 'something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something ', 'something ', '2015-02-07', '11:59', 'unpublished', 'aunok'),
(6, 'something something something ', 'something something something something something something something something something something something something something ', 'something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something something ', 'something ', '2015-02-13', '13:59', 'published', 'someone');

-- --------------------------------------------------------

--
-- Table structure for table `outdoor_games`
--

CREATE TABLE IF NOT EXISTS `outdoor_games` (
  `outdoor_games_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `about` longtext NOT NULL,
  `place` longtext NOT NULL,
  `available_item` longtext NOT NULL,
  `allowance` longtext NOT NULL,
  PRIMARY KEY  (`outdoor_games_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `outdoor_games`
--

INSERT INTO `outdoor_games` (`outdoor_games_id`, `name`, `about`, `place`, `available_item`, `allowance`) VALUES
(1, '0', '0', '0', '0', '0'),
(2, 'Ananya Dey', 'hgfgh', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `packages_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `description` longtext NOT NULL,
  `cost` longtext NOT NULL,
  PRIMARY KEY  (`packages_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `packages`
--


-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE IF NOT EXISTS `religion` (
  `religion_id` int(11) NOT NULL auto_increment,
  `type` longtext NOT NULL,
  `floor` longtext NOT NULL,
  `name` longtext NOT NULL,
  `about` longtext NOT NULL,
  `size` longtext NOT NULL,
  PRIMARY KEY  (`religion_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`religion_id`, `type`, `floor`, `name`, `about`, `size`) VALUES
(1, '', '', 'xgfhgfj', 'fhjhk', '');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `rooms_id` int(11) NOT NULL auto_increment,
  `branch` longtext NOT NULL,
  `floor` longtext NOT NULL,
  `room_type` longtext NOT NULL,
  `rent_per_night` longtext NOT NULL,
  `description` longtext NOT NULL,
  `room_size` longtext NOT NULL,
  `adult` longtext NOT NULL,
  `children` longtext NOT NULL,
  `bathroom` longtext NOT NULL,
  `packages` longtext NOT NULL,
  `creation_date` longtext NOT NULL,
  `garage` longtext NOT NULL,
  `bed` longtext NOT NULL,
  `room_service` longtext NOT NULL,
  PRIMARY KEY  (`rooms_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`rooms_id`, `branch`, `floor`, `room_type`, `rent_per_night`, `description`, `room_size`, `adult`, `children`, `bathroom`, `packages`, `creation_date`, `garage`, `bed`, `room_service`) VALUES
(25, '6', '5', '10', '+563-95-7780278', '  Nulla ut aut tenetur aliquam reiciendis anim sint incidunt, sapiente et quasi natus beatae quia voluptatem. Dolorem veniam, velit.  ', '88', '34', '93', '17', '', '10-Mar-1978', '0', '2', '0'),
(26, '8', '6', '10', '800', '  happy family   happy family   happy family   happy family   happy family   happy family   happy family   happy family   happy family   happy family   happy family   happy family   happy family   happy family ', '600', '2', '1', '0', '', '', '0', '2', '0'),
(27, '11', '8', '11', '500', 'Description Description Description Description Description Description Description Description Description Description Description Description Description Description Description ', '9', '2', '3', '1', '', '', '0', '2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `room_facilities`
--

CREATE TABLE IF NOT EXISTS `room_facilities` (
  `room_facilities_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  PRIMARY KEY  (`room_facilities_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `room_facilities`
--


-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE IF NOT EXISTS `room_type` (
  `room_type_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `floor` longtext NOT NULL,
  `branch` longtext NOT NULL,
  `facilities` longtext NOT NULL,
  PRIMARY KEY  (`room_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_type_id`, `name`, `floor`, `branch`, `facilities`) VALUES
(11, 'Super Delux', '5', '6', 'Children room,Living room,TV'),
(10, 'Delux ', '5', '8', 'Children room,Living room,TV'),
(12, 'Member test Name', '6', '8', 'Children room,Living room,TV');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE IF NOT EXISTS `social_media` (
  `social_media_id` int(11) NOT NULL auto_increment,
  `media` longtext NOT NULL,
  `link` longtext NOT NULL,
  PRIMARY KEY  (`social_media_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`social_media_id`, `media`, `link`) VALUES
(1, 'kjnlk', 'kjlkjlk');

-- --------------------------------------------------------

--
-- Table structure for table `swimming_pool`
--

CREATE TABLE IF NOT EXISTS `swimming_pool` (
  `swimming_pool_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `depth` longtext NOT NULL,
  `size` longtext NOT NULL,
  `about` longtext NOT NULL,
  `allowance` longtext NOT NULL,
  PRIMARY KEY  (`swimming_pool_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `swimming_pool`
--

INSERT INTO `swimming_pool` (`swimming_pool_id`, `name`, `depth`, `size`, `about`, `allowance`) VALUES
(1, 'Ananya Dey', '5', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ui_home`
--

CREATE TABLE IF NOT EXISTS `ui_home` (
  `ui_home_id` int(11) NOT NULL auto_increment,
  `title` longtext NOT NULL,
  `status` longtext NOT NULL,
  PRIMARY KEY  (`ui_home_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ui_home`
--

INSERT INTO `ui_home` (`ui_home_id`, `title`, `status`) VALUES
(1, '', '0'),
(2, '', '0'),
(3, '', 'ok'),
(4, '', 'ok');
