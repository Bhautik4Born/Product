-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2023 at 04:49 AM
-- Server version: 10.6.15-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seamarin_4Born_Market`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `otp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created`, `otp`) VALUES
(1, 'admin@4born.info', 'Admin#4born', '2023-11-03 12:50:44.258917', 'Your OTP send Only Mail So You Can Access It Sorry For That');

-- --------------------------------------------------------

--
-- Table structure for table `AI_contact`
--

CREATE TABLE `AI_contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `AI_contact`
--

INSERT INTO `AI_contact` (`id`, `name`, `email`, `mobile_number`, `message`, `created`) VALUES
(3, 'Sorathiya Bhagirath', 'sorathiyamer3@gmail.com', '6356526597', 'dasd', '2023-10-14 17:18:17.190209'),
(4, 'Sorathiya Bhagirath', 'bhagirath@gmail.com', '', 'dasdas', '2023-10-14 17:19:12.586408'),
(5, 'Sorathiya', 'sorathiyamer3@gmail.com', '6356526597', 'Hello', '2023-11-08 04:34:34.038788'),
(6, 'Sorathiya', 'admin@gmail.com', '6356526597', 'Hellol', '2023-11-08 04:35:09.284065');

-- --------------------------------------------------------

--
-- Table structure for table `AI_Keys`
--

CREATE TABLE `AI_Keys` (
  `id` int(255) NOT NULL,
  `license_key` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `AI_Keys`
--

INSERT INTO `AI_Keys` (`id`, `license_key`, `description`, `created`, `url`) VALUES
(1, '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', 'Added Keys For Need', '2023-11-09 12:17:02.990851', 'https://api.openai.com/v1/completions');

-- --------------------------------------------------------

--
-- Table structure for table `AI_License`
--

CREATE TABLE `AI_License` (
  `id` int(255) NOT NULL,
  `License_key` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `AI_License`
--

INSERT INTO `AI_License` (`id`, `License_key`, `date`, `end_date`) VALUES
(1, '4BORN5384', '12/10/2023', '12/12/2023');

-- --------------------------------------------------------

--
-- Table structure for table `AI_login_google`
--

CREATE TABLE `AI_login_google` (
  `id` int(255) NOT NULL,
  `google_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `license_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `AI_login_google`
--

INSERT INTO `AI_login_google` (`id`, `google_id`, `name`, `email`, `profile_image`, `created`, `license_key`) VALUES
(7, '115856667236811501495', 'DARSHAN MECHODAL', 'darshan@mechodal.com', 'https://lh3.googleusercontent.com/a/ACg8ocLiUVIrJSL07Xa0uGPNJLK2X5Hv3ZJUtW4QGBilHuXy=s96-c', '2023-11-09 06:40:35.303656', '4BCBORNNov235091BH'),
(9, '106272109414714155859', 'Sorathiya Bhautik', 'bhautik@4born.info', 'https://lh3.googleusercontent.com/a/ACg8ocLgEmqhBb_LKxPW0zYDco99hQou6bU2cPBS9DiuAeA3=s96-c', '2023-11-09 06:40:29.451394', '4BCBORNNov235090BH'),
(11, '103609743605433057722', 'Ankit Parekh', 'ankit.p@mechodal.com', 'https://lh3.googleusercontent.com/a/ACg8ocKxmZOmIP2GVUlHA15T47SjhSaxL2uHMnra2hIBiayj0w=s96-c', '2023-11-09 06:40:24.302772', '4BCBORNNov235089BH'),
(12, '117398075073321406859', 'jagdish sorathiya', 'jagdish@mechodal.com', 'https://lh3.googleusercontent.com/a/ACg8ocL4a33kIhTc6MwQIFiCtJaiDCXrVPFo3sxK-WePYdfN=s96-c', '2023-11-09 06:40:16.825656', '4BCBORNNov235088BH'),
(13, '101709489050147426152', 'Gahanbharthi Gosai', 'gahanbharthigosai@gmail.com', 'https://lh3.googleusercontent.com/a/ACg8ocJzFRGlZwXbkvohqHsYC6vmIMv4b4dT7STFnnBb6DgaQg=s96-c', '2023-11-09 06:40:12.405800', '4BCBORNNov235087BH'),
(14, '114471488710702265118', 'Jagdish Sorthiya', 'jagdishsorthiya01@gmail.com', 'https://lh3.googleusercontent.com/a/ACg8ocLnDyVNtjgHGRq1ttzawcAZWOXW5hi4Fc_N0AIqZRPGDcI=s96-c', '2023-11-09 06:40:04.346957', '4BCBORNNov235086BH'),
(15, '108984815190548439325', 'Ashok Bavliya', 'ashokbavliya17988@gmail.com', 'https://lh3.googleusercontent.com/a/ACg8ocKhyDMRC-2VOzs8POGm951JyZOr1l5_KnzIDN8bqv-tpw=s96-c', '2023-11-09 06:39:58.411829', '4BCBORNNov235085BH'),
(16, '103857624345728430753', 'Divyesh Sonagara', 'divyesh.s@mechodal.com', 'https://lh3.googleusercontent.com/a/ACg8ocKNM4KQnGggp_wfEIpU9IJTSG6EkvnXcQ00ufnvU9if=s96-c', '2023-11-09 06:39:41.728208', '4BCBORNNov235084BH'),
(18, '106065067426847395209', 'Jay Mahakal', 'sorathiyamer3@gmail.com', 'https://lh3.googleusercontent.com/a/ACg8ocLyFEXqD_f1R5iNL3cFy8wdK0RD6lcnaKjWWKrqmW3dRg=s96-c', '2023-11-09 06:48:00.404315', '4BCBornNov237219BH');

-- --------------------------------------------------------

--
-- Table structure for table `AI_notifications`
--

CREATE TABLE `AI_notifications` (
  `id` int(255) NOT NULL,
  `tital` varchar(255) DEFAULT NULL,
  `descriptions` varchar(255) DEFAULT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `AI_notifications`
--

INSERT INTO `AI_notifications` (`id`, `tital`, `descriptions`, `date`) VALUES
(4, 'Special offer For Navratri', 'Special offer For Navratri', 'Oct,21,2023 09:35:04 PM'),
(5, 'Dashera offer To Buy Our API', 'Dashera offer To Buy Our API', 'Oct,21,2023 09:35:30 PM'),
(6, 'Diwali Sale Offer', 'Dipavali Special Offer To Buy Our API', 'Oct,21,2023 09:38:36 PM');

-- --------------------------------------------------------

--
-- Table structure for table `AI_register`
--

CREATE TABLE `AI_register` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `created` varchar(255) NOT NULL,
  `license_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `AI_register`
--

INSERT INTO `AI_register` (`id`, `username`, `email`, `password`, `mobile_number`, `profile_image`, `created`, `license_key`) VALUES
(3, 'Soathiya@2005', 'Sorathiya@gmail.com', 'Sorathiya@2005', '63565265952', 'platform/img/user/user.jpg', '15-10-2023', '4BCBORNNov232775BH'),
(6, 'admin', 'sorathiyabhautikkumar@gmail.com', 'Admin#4born', '6356526597', 'platform/img/user/user.jpg', '15-10-2023', '4BCBORNNov232765BH'),
(8, 'jk', 'jk@gmail.com', 'JK@201', '0000000000', 'platform/img/user/user.jpg', '15-10-2023', '4BCBornNov232745BH'),
(9, 'Rohan', 'roahn@gmail.com', 'Rohan@2007', '1234567890', 'platform/img/user/user.jpg', '17-10-2023', '4BCBornNov232735BH'),
(10, '123', '123@gmail.com', '123', '123', 'platform/img/user/user.jpg', '17-10-2023', '4BCBornNov232725BH');

-- --------------------------------------------------------

--
-- Table structure for table `AI_subscribe_email`
--

CREATE TABLE `AI_subscribe_email` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `AI_subscribe_email`
--

INSERT INTO `AI_subscribe_email` (`id`, `email`, `created`) VALUES
(1, 'ah@mechodal.com', '2023-10-16 15:19:39.561811'),
(2, 'admin@gmail.com', '2023-10-16 15:22:00.184529'),
(3, 'test@gmail.com', '2023-10-16 15:25:01.672418'),
(4, 'test@gmail.com', '2023-10-16 15:26:53.074979'),
(5, 'ah@mechodal.com', '2023-10-16 15:29:09.793585'),
(6, 'sorathiyamer3@gmail.com', '2023-10-17 00:44:23.826366'),
(7, 'ah@mechodal.com', '2023-10-24 03:56:33.210225'),
(8, 'asworld@site.com', '2023-11-03 08:36:20.351552'),
(9, 'admin9846512651@gmail.com', '2023-11-05 10:03:05.067457');

-- --------------------------------------------------------

--
-- Table structure for table `E_OTP_confirm_payment`
--

CREATE TABLE `E_OTP_confirm_payment` (
  `id` int(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `E_OTP_confirm_payment`
--

INSERT INTO `E_OTP_confirm_payment` (`id`, `payment_id`, `email`, `created`, `image`) VALUES
(14, 'TEST@123', 'sorathiyamer3@gmail.com', '2023-11-03 12:21:12.058070', 'include/images/download.png'),
(15, '12231321', 'vedant@mechodal.com', '2023-09-11 12:09:49.028071', 'include/images/edit.png');

-- --------------------------------------------------------

--
-- Table structure for table `E_OTP_license`
--

CREATE TABLE `E_OTP_license` (
  `id` int(255) NOT NULL,
  `license_key` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `create` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `E_OTP_license`
--

INSERT INTO `E_OTP_license` (`id`, `license_key`, `domain`, `create`) VALUES
(3, 'EOPBORNJULT01729BH', 'https://simplesoft.com/', '2023-07-04 10:26:45.928407');

-- --------------------------------------------------------

--
-- Table structure for table `E_OTP_register`
--

CREATE TABLE `E_OTP_register` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `E_OTP_register`
--

INSERT INTO `E_OTP_register` (`id`, `name`, `email`, `mobile`, `password`, `created`) VALUES
(1, 'Sorathiya', 'sorathiyamer3@gmail.com', '6356526597', '1234567890', '2023-06-27 02:25:30.719396'),
(2, 'gahan', 'gahan@mechodal.com', '9016406354', '12345678', '2023-06-27 04:26:20.974621'),
(3, 'Jagdish@Sorathiya', 'jagdish@mechodal.com', '6354386757', 'JAgdish@2001', '2023-06-27 05:47:17.737382'),
(5, 'onezeroeight', 'shubham@onezeroeight.in', '9823871759', 'OZE@2023', '2023-06-27 09:27:03.610592'),
(7, 'Jagdish', 'jka@gmail.com', '6354386757', 'Jagdish@2001', '2023-07-01 08:42:45.612630');

-- --------------------------------------------------------

--
-- Table structure for table `market_buy_product`
--

CREATE TABLE `market_buy_product` (
  `id` int(255) NOT NULL,
  `Stock_name` varchar(255) NOT NULL,
  `license_key` varchar(255) NOT NULL,
  `stock_link` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `domain` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `market_cart`
--

CREATE TABLE `market_cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT '1',
  `total` varchar(255) DEFAULT NULL,
  `created` timestamp(6) NULL DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `market_cart`
--

INSERT INTO `market_cart` (`id`, `name`, `price`, `quantity`, `total`, `created`, `user_id`, `product_id`) VALUES
(1, 'NIFTY 50', '500', '2', '1000', NULL, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `market_confirm_payment`
--

CREATE TABLE `market_confirm_payment` (
  `id` int(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `status` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `market_contact`
--

CREATE TABLE `market_contact` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `market_contact`
--

INSERT INTO `market_contact` (`id`, `firstname`, `lastname`, `email`, `text`, `message`, `date`) VALUES
(1, 'Sorathiya', 'Bhautik', 'sorathiyamer3@gmail.com', 'For Testing', 'Hello i need to Custome Plan plz helpl and Replay me', '2023-10-14 10:42:55.692503');

-- --------------------------------------------------------

--
-- Table structure for table `market_contact.php`
--

CREATE TABLE `market_contact.php` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `market_coupon`
--

CREATE TABLE `market_coupon` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `market_coupon`
--

INSERT INTO `market_coupon` (`id`, `name`, `code`, `status`, `discount`, `created`) VALUES
(1, 'For testing', 'Test123', 'Active', '20', '2023-11-03 16:18:02.000000');

-- --------------------------------------------------------

--
-- Table structure for table `market_license`
--

CREATE TABLE `market_license` (
  `id` int(255) NOT NULL,
  `license_key` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `market_license`
--

INSERT INTO `market_license` (`id`, `license_key`, `domain`, `created`) VALUES
(1, 'EOPBORNAUGT01730BH', 'seamarineservice.in', '2023-09-05 02:31:53.913892'),
(5, '', '', '2023-09-16 01:54:27.414945');

-- --------------------------------------------------------

--
-- Table structure for table `market_product`
--

CREATE TABLE `market_product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT '1',
  `Created` timestamp(6) NULL DEFAULT NULL,
  `stock_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `market_product`
--

INSERT INTO `market_product` (`id`, `name`, `price`, `quantity`, `Created`, `stock_id`) VALUES
(1, 'NIFTY 50', '500', '1', NULL, '174525'),
(2, 'BSE SENSEX', '500', '1', NULL, '001791'),
(3, 'Nifty Bank', '500', '1', NULL, '662803'),
(4, 'S&P BSE SmallCap', '500', '1', NULL, '885373'),
(5, 'Bitcoin to Indian Rupee', '500', '1', NULL, '256649'),
(6, 'Ether to Indian Rupee', '500', '1', NULL, '799920'),
(7, 'Cardano to Indian Rupee', '500', '1', NULL, '955065'),
(8, 'XRP to Indian Rupee', '500', '1', NULL, '104994'),
(9, 'Dogecoin to Indian Rupee', '500', '1', NULL, '030257'),
(10, 'Dogecoin to United States Dollar', '500', '1', NULL, '074261'),
(11, 'Bitcoin to USD', '500', '1', NULL, '320293'),
(12, 'Euro to United States Dollar', '500', '1', NULL, '407229'),
(13, 'Cardano to United States Dollar', '500', '1', NULL, '311824'),
(14, 'XRP to United States Dollar', '500', '1', NULL, '454778'),
(15, 'Tata Steel Ltd', '500', '1', NULL, '860747'),
(16, 'Tata Consultancy Services Ltd', '500', '1', NULL, '559040'),
(17, 'Tata Power Company Ltd', '500', '1', NULL, '102707'),
(18, 'HDFC Bank Ltd', '500', '1', NULL, '456324'),
(19, 'State Bank of India', '500', '1', NULL, '125578'),
(20, 'Tether', '500', '1', NULL, '766820'),
(21, 'Tether', '500', '1', NULL, '401311'),
(22, 'TRON to United States Dollar', '500', '1', NULL, '754850'),
(23, 'TRON to Indian Rupee', '500', '1', NULL, '078546'),
(24, 'Litecoin to United States Dollar', '500', '1', NULL, '995419'),
(25, 'Litecoin to Indian Rupee', '500', '1', NULL, '426783'),
(26, 'Adani Power Ltd', '500', '1', NULL, '713451'),
(27, 'Asian Paints Ltd', '500', '1', NULL, '016041'),
(28, 'Bajaj Finserv Ltd', '500', '1', NULL, '220898'),
(29, 'Axis Bank Ltd', '500', '1', NULL, '381909'),
(30, 'Apollo Hospitals Enterprise Limited', '500', '1', NULL, '313363'),
(31, 'Indusind Bank Ltd', '500', '1', NULL, '556550'),
(32, 'ICICI Bank Ltd', '500', '1', NULL, '963960'),
(33, 'Shree Cement Ltd', '500', '1', NULL, '648657'),
(34, 'Sbi Life Insurance Company Ltd', '500', '1', NULL, '728552'),
(35, 'Tech Mahindra Ltd', '500', '1', NULL, '488958'),
(36, 'UltraTech Cement Ltd', '500', '1', NULL, '423384'),
(37, 'UPL Ltd', '500', '1', NULL, '959573'),
(38, 'UPL Ltd', '500', '1', NULL, '959573'),
(39, 'Oil and Natural Gas Corporation Ltd', '500', '1', NULL, '042864'),
(40, 'Mahindra And Mahindra Ltd', '500', '1', NULL, '048059'),
(42, 'Adani Ports and Special Economic Zone Ld', '500', '1', NULL, '559240'),
(43, 'Shriram Finance Ltd', '500', '1', NULL, '674043');

-- --------------------------------------------------------

--
-- Table structure for table `market_Stock`
--

CREATE TABLE `market_Stock` (
  `id` int(255) NOT NULL,
  `Stock_name` varchar(255) DEFAULT NULL,
  `google_link` varchar(255) DEFAULT NULL,
  `created` timestamp(6) NULL DEFAULT NULL,
  `stock_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `market_Stock`
--

INSERT INTO `market_Stock` (`id`, `Stock_name`, `google_link`, `created`, `stock_id`) VALUES
(1, 'NIFTY 50', 'https://www.google.com/finance/quote/NIFTY_50:INDEXNSE', NULL, '174525'),
(2, 'BSE SENSEX', 'https://www.google.com/finance/quote/SENSEX:INDEXBOM', NULL, '001791'),
(3, 'Nifty Bank', 'https://www.google.com/finance/quote/NIFTY_BANK:INDEXNSE', NULL, '662803'),
(4, 'Nifty IT', 'https://www.google.com/finance/quote/NIFTY_IT:INDEXNSE', NULL, '319440'),
(5, 'S&P BSE SmallCap', 'https://www.google.com/finance/quote/BSE-SMLCAP:INDEXBOM', NULL, '885373'),
(6, 'Bitcoin to Indian Rupee', 'https://www.google.com/finance/quote/BTC-INR', NULL, '256649'),
(7, 'Ether to Indian Rupee', 'https://www.google.com/finance/quote/ETH-INR', NULL, '799920'),
(8, 'Cardano to Indian Rupee', 'https://www.google.com/finance/quote/ADA-INR', NULL, '955065'),
(9, 'XRP to Indian Rupee', 'https://www.google.com/finance/quote/XRP-INR', NULL, '104994'),
(10, 'Dogecoin to Indian Rupee', 'https://www.google.com/finance/quote/DOGE-INR', NULL, '030257'),
(11, 'Bitcoin to USD', 'https://www.google.com/finance/quote/BTC-USD', NULL, '320293'),
(12, 'Euro to United States Dollar', 'https://www.google.com/finance/quote/EUR-USD', NULL, '407229'),
(13, 'Cardano to United States Dollar', 'https://www.google.com/finance/quote/ADA-USD', NULL, '311824'),
(14, 'XRP to United States Dollar', 'https://www.google.com/finance/quote/XRP-USD', NULL, '454778'),
(15, 'Dogecoin to United States Dollar', 'https://www.google.com/finance/quote/DOGE-USD', NULL, '074261'),
(16, 'Tata Steel Ltd', 'https://www.google.com/finance/quote/TATASTEEL:NSE', NULL, '860747'),
(17, 'Tata Consultancy Services Ltd', 'https://www.google.com/finance/quote/TCS:NSE', NULL, '559040'),
(18, 'Tata Power Company Ltd', 'https://www.google.com/finance/quote/TATAPOWER:NSE', NULL, '102707'),
(19, 'HDFC Bank Ltd', 'https://www.google.com/finance/quote/HDFCBANK:NSE', NULL, '456324'),
(20, 'State Bank of India', 'https://www.google.com/finance/quote/SBIN:NSE', NULL, '125578'),
(21, 'Tether', 'https://www.google.com/finance/quote/USDT-INR', NULL, '766820'),
(22, 'Tether', 'https://www.google.com/finance/quote/USDT-USD', NULL, '401311'),
(23, 'TRON to United States Dollar', 'https://www.google.com/finance/quote/TRX-USD', NULL, '754850'),
(24, 'TRON to Indian Rupee', 'https://www.google.com/finance/quote/TRX-INR', NULL, '078546'),
(25, 'Litecoin to United States Dollar', 'https://www.google.com/finance/quote/LTC-USD', NULL, '995419'),
(26, 'Litecoin to Indian Rupee', 'https://www.google.com/finance/quote/LTC-INR', NULL, '426783'),
(27, 'Adani Power Ltd', 'https://www.google.com/finance/quote/ADANIPOWER:NSE', NULL, '713451'),
(28, 'Asian Paints Ltd', 'https://www.google.com/finance/quote/ASIANPAINT:NSE', NULL, '016041'),
(29, 'Bajaj Finserv Ltd', 'https://www.google.com/finance/quote/BAJAJFINSV:NSE', NULL, '220898'),
(30, 'Axis Bank Ltd', 'https://www.google.com/finance/quote/AXISBANK:NSE', NULL, '381909'),
(31, 'Apollo Hospitals Enterprise Limited', 'https://www.google.com/finance/quote/APOLLOHOSP:NSE', NULL, '313363'),
(32, 'Indusind Bank Ltd', 'https://www.google.com/finance/quote/INDUSINDBK:NSE', NULL, '556550'),
(33, 'ICICI Bank Ltd', 'https://www.google.com/finance/quote/ICICIBANK:NSE', NULL, '963960'),
(34, 'Shree Cement Ltd', 'https://www.google.com/finance/quote/SHREECEM:NSE', NULL, '648657'),
(35, 'Sbi Life Insurance Company Ltd', 'https://www.google.com/finance/quote/SBILIFE:NSE', NULL, '728552'),
(36, 'Tech Mahindra Ltd', 'https://www.google.com/finance/quote/TECHM:NSE', NULL, '488958'),
(37, 'UltraTech Cement Ltd', 'https://www.google.com/finance/quote/ULTRACEMCO:NSE', NULL, '423384'),
(38, 'UPL Ltd', 'https://www.google.com/finance/quote/UPL:NSE', NULL, '959573'),
(39, 'Oil and Natural Gas Corporation Ltd', 'https://www.google.com/finance/quote/ONGC:NSE', NULL, '042864'),
(40, 'Mahindra And Mahindra Ltd', 'https://www.google.com/finance/quote/M%26M:NSE', NULL, '048059'),
(41, 'Oil and Natural Gas Corporation Ltd', 'https://www.google.com/finance/quote/ONGC:NSE?hl=en', NULL, '072333'),
(42, 'Adani Ports and Special Economic Zone Ld', 'https://www.google.com/finance/quote/ADANIPORTS:NSE?hl=en', NULL, '559240'),
(43, 'Shriram Finance Ltd', 'https://www.google.com/finance/quote/SHRIRAMFIN:NSE?hl=en', NULL, '674043');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `license_key` varchar(255) DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `mobile_number`, `created`, `name`, `surname`, `country`, `state`, `license_key`, `domain`, `date`, `profile_image`) VALUES
(1, 'Sorathiya@2005', 'sorathiyamer3@gmail.com', 'Sorathiya@2005', '6356526597', '2023-10-14 09:05:05.693048', 'Bhautik', 'Sorathiya', 'india', 'Gujarat', '6OM69R5G1S', '4born.info', '16-10-2023', 'include/image/download.png'),
(2, 'Mer', 'mer@gmail.com', 'Mer@2006', '6356526594', '2023-10-19 14:03:57.639274', NULL, NULL, NULL, NULL, 'XD0IV7F8A7', '4born.info', '21-10-2023', './images/add-product.svg'),
(3, 'admin', 'admin@gmail.com', 'Admin@#2005', '932778669', '2023-10-28 13:25:36.784409', NULL, NULL, NULL, NULL, '1MZLF1JCK9', 'asdasd', '12-11-2023', './images/add-product.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AI_contact`
--
ALTER TABLE `AI_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AI_Keys`
--
ALTER TABLE `AI_Keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AI_License`
--
ALTER TABLE `AI_License`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AI_login_google`
--
ALTER TABLE `AI_login_google`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AI_notifications`
--
ALTER TABLE `AI_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AI_register`
--
ALTER TABLE `AI_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AI_subscribe_email`
--
ALTER TABLE `AI_subscribe_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `E_OTP_confirm_payment`
--
ALTER TABLE `E_OTP_confirm_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `E_OTP_license`
--
ALTER TABLE `E_OTP_license`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `E_OTP_register`
--
ALTER TABLE `E_OTP_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_buy_product`
--
ALTER TABLE `market_buy_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_cart`
--
ALTER TABLE `market_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_confirm_payment`
--
ALTER TABLE `market_confirm_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_contact`
--
ALTER TABLE `market_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_contact.php`
--
ALTER TABLE `market_contact.php`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_coupon`
--
ALTER TABLE `market_coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_license`
--
ALTER TABLE `market_license`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_product`
--
ALTER TABLE `market_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_Stock`
--
ALTER TABLE `market_Stock`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `AI_contact`
--
ALTER TABLE `AI_contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `AI_Keys`
--
ALTER TABLE `AI_Keys`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `AI_License`
--
ALTER TABLE `AI_License`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `AI_login_google`
--
ALTER TABLE `AI_login_google`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `AI_notifications`
--
ALTER TABLE `AI_notifications`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `AI_register`
--
ALTER TABLE `AI_register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `AI_subscribe_email`
--
ALTER TABLE `AI_subscribe_email`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `market_buy_product`
--
ALTER TABLE `market_buy_product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `market_cart`
--
ALTER TABLE `market_cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `market_confirm_payment`
--
ALTER TABLE `market_confirm_payment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `market_contact`
--
ALTER TABLE `market_contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `market_contact.php`
--
ALTER TABLE `market_contact.php`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `market_coupon`
--
ALTER TABLE `market_coupon`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `market_license`
--
ALTER TABLE `market_license`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `market_product`
--
ALTER TABLE `market_product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `market_Stock`
--
ALTER TABLE `market_Stock`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
