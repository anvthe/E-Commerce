-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2018 at 02:16 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `user_name`, `email`, `password`, `gender`, `date_of_birth`, `address`, `image`, `user_type`) VALUES
(2, 'imran', 'admin', 'imu@gmail.com', '2', 'other', '1995-02-02', 'alkjdakd askdja', 'images/admin.jpg', 'admin'),
(3, 'pranto', 'p', 'p.pranto@gmail.com', '1', 'male', '1996-08-19', 'Narsingdi', 'images/KFP3_Pos_Jumping_Adventure_lg.jpg', 'admin'),
(5, 'def', 'dd', 'd@gmail.com', '1', 'female', '2018-08-20', 'eee', 'images/main-qimg-65515f0d4c5e1050b809d8f4ec20011d-c.jpg', 'admin'),
(6, 'imran', 'i', 'i@gmail.com', '123', 'male', '2018-08-01', 'slkjlksjdf', 'images/Screenshot (16).png', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(20) NOT NULL,
  `price` int(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `price`, `payment_method`) VALUES
(5, 3900, 'cash on delivary'),
(6, 15900, 'cash on delivary'),
(7, 11500, 'cash on delivary'),
(8, 7600, 'cash on delivary'),
(9, 260000, 'cash on delivary'),
(10, 260000, 'cash on delivary'),
(11, 18700, 'cash on delivary'),
(12, 24800, 'cash on delivary'),
(13, 150880, 'cash on delivary'),
(14, 200880, 'cash on delivary'),
(15, 150880, 'cash on delivary'),
(16, 250880, 'cash on delivary'),
(17, 7260000, 'cash on delivary'),
(18, 81800, 'cash on delivary'),
(19, 81800, 'cash on delivary');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(20) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `quantity` int(20) NOT NULL,
  `net_weight` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `quantity`, `net_weight`) VALUES
(1, 'vivo', 30, NULL),
(2, 'samsung', 20, NULL),
(3, 'huawei', 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(20) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL,
  `product_id` int(50) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `product_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `quantity`, `price`, `total_amount`, `product_id`, `product_name`, `customer_id`, `product_image`) VALUES
(1, 1, 500, 500, 8, 'sunglass', 25, 'demo.JPG'),
(30, 1, 80, 80, 10, '  Gold Pasta', 32, 'fresh-pasta-500x500.jpg'),
(31, 1, 50000, 50000, 24, ' monitor', 32, 'Computer-icon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(20) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'MOBILE_PHONES\r\n'),
(2, 'MEN\'S_WEAR'),
(3, 'WOMEN\'S_WEAR'),
(4, 'FOODS'),
(5, 'KID\'S_ITEM'),
(6, 'ACCESSORIES'),
(7, 'GIFT_ITEM');

-- --------------------------------------------------------

--
-- Table structure for table `delivary`
--

CREATE TABLE `delivary` (
  `delivary_id` int(20) NOT NULL,
  `order_id` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `status` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `name`, `user_name`, `email`, `password`, `gender`, `date_of_birth`, `address`, `image`, `user_type`, `status`) VALUES
(1, 'p', 'im', 'im@gmail.com', '1', 'female', '2018-08-19', '45 jhgjhgjh hjhgjhg', 'images/im.jpg', 'employee', 0),
(2, 'nahid', 'takla', 'takla@gmal.com', '1', 'male', '2018-08-06', 'noakhali', 'images/takla.jpg', 'employee', 0),
(3, 'knk', 'knk1', 'knk@gmail.com', '1', 'female', '2018-08-12', '12 sldlaksd alksdla', 'images/3b340d7d-8d5b-472c-8ccf-78f61e96c604.jpg', 'employee', 0),
(4, 'imran', 'im12', 'i@gmail.com', '123', 'male', '2018-08-01', 'narinda', 'images/Gift-4-icon.jpg', 'employee', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `user_type`) VALUES
('a1234', 'a11@gmail', 'user'),
('admin', '2', 'admin'),
('adnan', '1', 'user'),
('b', '12', 'user'),
('dd', '1', 'admin'),
('emp', '1', 'employee'),
('engnr', 'bertho@gmail', 'user'),
('hah', 'hah123!@#', 'user'),
('himu', 'himua@gmail', 'user'),
('i', '123', 'admin'),
('i1', '1', 'user'),
('im', '1', 'employee'),
('imm', 'imran420@', 'user'),
('imran', '1', 'user'),
('imran12', '123imran@', 'user'),
('imu', 'imu420!@', 'user'),
('j', '1', 'user'),
('knk1', '1', 'employee'),
('m1', '1', 'user'),
('p', '12', 'user'),
('s', 'c4ca4238a0b923820dcc509a6f75849b', 'user'),
('san', '1', 'user'),
('T1', 'c4ca4238a0b923820dcc509a6f75849b', 'user'),
('takla', '1', 'employee'),
('x', '1', 'user'),
('zzz', '1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `lot`
--

CREATE TABLE `lot` (
  `lot_id` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `arraival_date` varchar(100) NOT NULL,
  `buy_price` int(100) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `net_weight` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `notice_name` varchar(100) NOT NULL,
  `notice_type` varchar(100) NOT NULL,
  `notice_body` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `notice_name`, `notice_type`, `notice_body`) VALUES
(1, 'hot FriDay', 'DisCount				', 'Flas sell on friday checkout the discount				');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `order_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `date_o` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `time_o` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`order_id`, `user_id`, `date_o`, `status`, `time_o`, `address`, `phone`, `price`) VALUES
(6, 33, '01:09:2018', 'undelivar', '15:47:46:pm', 'narinda', '1', ''),
(7, 33, '01:09:2018', 'On Process', '16:20:42:pm', 'narinda', '1', ''),
(8, 33, '01:09:2018', 'On Process', '17:10:42:pm', 'wari', '1', ''),
(9, 33, '01:09:2018', 'On Process', '17:13:37:pm', 'sutrapur', '1', ''),
(10, 33, '01:09:2018', 'On Process', '17:17:23:pm', 'sutrapur', '1', ''),
(11, 33, '01:09:2018', 'On Process', '17:18:20:pm', 'sutrapur', '1', ''),
(12, 33, '01:09:2018', 'On Process', '17:19:31:pm', 'wari', '1', ''),
(13, 11, '01:09:2018', 'On Process', '17:23:33:pm', 'wari,narinda', '', ''),
(14, 11, '01:09:2018', 'On Process', '17:32:32:pm', 'ff', '', ''),
(15, 11, '01:09:2018', 'On Process', '17:34:37:pm', 'ljas', '', ''),
(16, 11, '01:09:2018', 'On Process', '17:47:41:pm', 'lallalala', '', ''),
(17, 11, '01:09:2018', 'On Process', '17:50:22:pm', 'lkaask', '', ''),
(18, 11, '02:09:2018', 'On Process', '00:21:21:am', 'hahahhaha', '', ''),
(19, 11, '02:09:2018', 'On Process', '01:40:28:am', 'hahahah', '', 'price'),
(20, 11, '02:09:2018', 'On Process', '01:41:14:am', 'heheheh', '', '81800');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `buy_price` int(100) NOT NULL,
  `sell_price` int(100) NOT NULL,
  `net_weight` varchar(100) DEFAULT NULL,
  `category_id` int(50) NOT NULL,
  `brand_id` int(50) DEFAULT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `buy_price`, `sell_price`, `net_weight`, `category_id`, `brand_id`, `status`) VALUES
(2, 'samsung', 'Samsung s9.JPG', 70000, 80000, NULL, 1, 2, 0),
(3, 'vivo', 'vivo v9.JPG', 20000, 24000, NULL, 1, 1, -299),
(5, 'Huawei', 'honor 10.jpg', 20000, 25000, NULL, 1, 3, 0),
(6, 'iphone', 'vivo v9.JPG', 2000, 70000, NULL, 1, 3, 0),
(7, 'French Blue suit', 'maksmenswear-french-blue-suit_2048x.jpg', 6000, 9000, NULL, 2, NULL, 1),
(8, 'Sun glass', 'Menswear-fashion.jpg', 400, 700, NULL, 2, NULL, 3),
(9, 'Style', 'P_18-300x300.jpg', 2000, 3000, NULL, 3, NULL, -3),
(10, ' Gold Pasta', 'fresh-pasta-500x500.jpg', 60, 80, NULL, 4, NULL, 9),
(11, 'Full set', 'kids_fendi_bervin.PDF.jpg', 800, 1200, NULL, 5, NULL, 6),
(12, 'Case Iphone', 'iphone case.jpg', 300, 500, NULL, 6, NULL, -60),
(13, 'Iphone case', 'iphonecase_.jpg', 300, 600, NULL, 6, NULL, -96),
(14, 'Vintage Gramophone', 'Indian_vintage_Gramophone.jpg', 600, 900, NULL, 7, NULL, -19),
(24, 'monitor', 'Computer-icon.jpg', 32000, 50000, '1.75kg', 6, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_lot`
--

CREATE TABLE `product_lot` (
  `lot_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_lot`
--

INSERT INTO `product_lot` (`lot_id`, `product_id`, `price`) VALUES
(2, 0, 400),
(3, 23, 32000),
(4, 24, 32000);

-- --------------------------------------------------------

--
-- Table structure for table `product_order_tbl`
--

CREATE TABLE `product_order_tbl` (
  `customer_id` int(100) NOT NULL,
  `product_Id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order_tbl`
--

INSERT INTO `product_order_tbl` (`customer_id`, `product_Id`) VALUES
(11, 3),
(11, 13),
(11, 13),
(11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(20) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `supplier_address` varchar(100) NOT NULL,
  `supplier_phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_phone`) VALUES
(1, 'imu', 'narinda', '098765432'),
(2, 'Sajid', ' Mirpur Dhaka', ' 0181772272'),
(4, 'Sajol', ' dhanmondi', ' 01707223341'),
(5, 'HIMU', ' NARINDA', ' 01837097912'),
(6, 'HIMU', ' Bangladesh', ' 01707223341');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`customer_id`, `name`, `user_name`, `email`, `password`, `gender`, `date_of_birth`, `address`, `image`, `user_type`, `phone`) VALUES
(11, 'pranto', 'p', 'p@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'male', '2018-07-24', '1w', 'images/Screenshot (1).png', 'user', ''),
(15, 'aas', 'asw2a', 'aa@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'male', '2018-07-10', '1d', 'images/Screenshot (4).png', 'user', ''),
(17, 'd', 'd22', 'd@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'male', '2018-07-16', '1', 'images/Screenshot (7).png', 'user', ''),
(20, 'c', 'c', 'c@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'male', '2018-07-04', 'cc', 'images/Screenshot (8).png', 'user', ''),
(23, 'l', 'l', 'l@gmail.com', '1', 'male', '2018-07-23', 'aa', 'images/Screenshot (6).png', 'user', ''),
(24, 'z', 'z', 'z@gmail.com', '1', 'male', '2018-07-03', 'asaddaad', 'images/Screenshot (4).png', 'user', ''),
(25, 'x', 'x', 'x@gmail.com', '1', 'male', '2018-07-16', 'wsda', 'images/Screenshot (7).png', 'user', ''),
(26, 'ss', 's', 's@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', 'male', '2018-07-31', 'wsdasd', 'images/Screenshot (15).png', 'user', ''),
(27, 'j', 'j', 'j@gmail.com', '1', 'male', '2018-07-31', 'sqq', 'images/Screenshot (23).png', 'user', ''),
(28, 'n', 's', 's@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'female', '2018-08-06', 'skmsla', 'images/Screenshot (6).png', 'user', ''),
(29, 'a', 'd', 'd@yahoo.com', 'c4ca4238a0b923820dcc509a6f75849b', 'male', '2018-08-20', 'qwq', 'images/Screenshot (7).png', 'user', ''),
(30, 'a', 'd', 'd@yahoo.com', 'c4ca4238a0b923820dcc509a6f75849b', 'male', '2018-08-20', 'qwq', 'images/Screenshot (7).png', 'user', ''),
(31, 'Topu', 'T1', 't@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'male', '2018-01-11', 'narinda', 'images/Gift-4-icon.jpg', 'user', '0987654321'),
(32, 'Mahamudul', 'm1', 'm@gmail.com', '1', 'male', '2018-08-14', 'alkjdlkjalkdj', 'images/Gift-4-icon.jpg', 'user', '1234567'),
(33, 'imran', 'i1', 'p@gmail.com', '1', 'male', '2018-09-19', '111', 'images/Christmas-kid-icon.jpg', 'user', '1'),
(34, 'Sanjida', 's', 'san@gmail.com', '1', 'female', '2018-09-02', 'kjaslkjdlkajlkdj', 'images/Screenshot (16).png', 'user', '123456'),
(35, 'imran', 'imran', 'imran@gmail.com', '1', 'male', '2018-08-29', '1231231313pk', 'images/menuicon.png', 'user', '11122313123'),
(36, 'sanjida', 'san', 'san@gmail.com', '1', 'female', '2018-09-01', 'wari', 'images/Lock.jpg', 'user', '1433534'),
(37, 'a', 'adnan', 'adnan@gmail.com', '1', 'male', '2018-08-31', 'narinda', 'images/3.jpg', 'user', '123456'),
(38, 'imran', 'imu', 'imran@gmail.com', 'imu420!@', 'male', '2018-09-17', 'doyagonj', 'images/6.jpg', 'user', '123123123'),
(39, 'imran', 'imran12', 'imran@gmail.com', '123imran@', 'male', '2018-09-12', 'aqqjqjq', 'images/4.jpg', 'user', '01707530888'),
(40, 'imran', 'imran12', 'imran@gmail.com', '123imran@', 'male', '2018-09-12', 'aqqjqjq', 'images/4.jpg', 'user', '01707530888'),
(41, 'imran', 'imran12', 'imran@gmail.com', '123imran@', 'male', '2018-09-12', 'aqqjqjq', 'images/4.jpg', 'user', '01707530888'),
(42, 'imran', 'imm', 'imran@gmail.com', 'imran420@', 'male', '2018-08-28', 'aaa', 'images/1.jpg', 'user', '12345678991'),
(43, 'imran', 'imm', 'imran@gmail.com', 'imran420@', 'male', '2018-08-28', 'aaa', 'images/1.jpg', 'user', '12345678991'),
(44, 'imran', 'imran', 'imran@gmail.com', 'imran123@', 'male', '2018-09-18', 'askhdlkajsd', 'images/9.png', 'user', '99999999992'),
(45, 'imran', 'imran', 'iiiiii@gmail.com', 'imran1234@', 'male', '2018-08-26', 'kakakkaak', 'images/11.jpg', 'user', '01000000000'),
(46, 'imran', 'im', 'im12@gmail.com', '123imran@', 'male', '2018-08-31', 'kqkqk', 'images/12.jpg', 'user', '11223344556'),
(47, 'hah', 'hah', 'hah@gmail.com', 'hah123!@#', 'male', '2018-08-31', 'narina', 'images/4.jpg', 'user', '12312312312'),
(48, 'himu', 'himu', 'himua@gmail.com', 'himua@gmail', 'male', '2018-09-05', 'narinda', 'images/3.jpg', 'user', '01123456789'),
(49, 'bertho', 'engnr', 'bertho@gmail.com', 'bertho@gmail', 'male', '2018-08-31', 'dacca', 'images/1.jpg', 'user', '01911765035'),
(50, 'a', 'a1234', 'a11@gmail.com', 'a11@gmail', 'male', '2018-08-26', 'nannaka', 'images/4.jpg', 'user', '01991122993');

-- --------------------------------------------------------

--
-- Table structure for table `work_assign`
--

CREATE TABLE `work_assign` (
  `order_id` int(100) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `employee_id` int(100) NOT NULL,
  `c_phone` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `delivary_number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_assign`
--

INSERT INTO `work_assign` (`order_id`, `c_address`, `employee_name`, `employee_id`, `c_phone`, `price`, `delivary_number`) VALUES
(17, '', 'imran', 4, '', '81800', 1),
(10, '', 'nahid', 2, '', '81800', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `delivary`
--
ALTER TABLE `delivary`
  ADD PRIMARY KEY (`delivary_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `lot`
--
ALTER TABLE `lot`
  ADD PRIMARY KEY (`lot_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `product_lot`
--
ALTER TABLE `product_lot`
  ADD PRIMARY KEY (`lot_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `work_assign`
--
ALTER TABLE `work_assign`
  ADD PRIMARY KEY (`delivary_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `delivary`
--
ALTER TABLE `delivary`
  MODIFY `delivary_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lot`
--
ALTER TABLE `lot`
  MODIFY `lot_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_lot`
--
ALTER TABLE `product_lot`
  MODIFY `lot_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `work_assign`
--
ALTER TABLE `work_assign`
  MODIFY `delivary_number` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `user` (`customer_id`);

--
-- Constraints for table `delivary`
--
ALTER TABLE `delivary`
  ADD CONSTRAINT `delivary_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_tbl` (`order_id`);

--
-- Constraints for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD CONSTRAINT `order_tbl_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`customer_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
