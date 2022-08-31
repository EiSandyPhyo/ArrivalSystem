-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2019 at 06:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourismmanagementsystemm`
--

-- --------------------------------------------------------

--
-- Table structure for table `customize_hotel`
--

CREATE TABLE `customize_hotel` (
  `chotel_id` int(11) NOT NULL,
  `chotel_name` varchar(200) NOT NULL,
  `cregion_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customize_hotel`
--

INSERT INTO `customize_hotel` (`chotel_id`, `chotel_name`, `cregion_id`) VALUES
(7, 'Shangrila', 1),
(8, 'Sedona', 1),
(9, 'Melia', 1),
(10, 'Novotel', 1),
(11, 'Park Royal', 1),
(12, 'Eastern Palace', 2),
(13, 'Hilton', 2),
(14, 'Sakura', 2),
(15, 'Mercure', 2),
(16, 'Hazel', 2),
(17, 'Aye Yar River Resort', 3),
(18, 'Aureum Palace', 3),
(19, 'Heritage', 3),
(20, 'Bagan Lodge', 3),
(21, 'Amata Garden Resort', 3),
(22, 'Sanctum Inle', 4),
(23, 'Ananta Inle', 4),
(24, 'Skylake Inle', 4),
(25, 'Paramount Inle', 4),
(26, 'Villa Inle', 4),
(27, 'Amazing Ngapali Resort', 5),
(28, 'Sandoway Ngapali Resort', 5),
(29, 'Sea Breeze Resort', 5),
(30, 'Hilton Ngapali Resort', 5),
(31, 'Thande Beach Resort', 5);

-- --------------------------------------------------------

--
-- Table structure for table `customize_region`
--

CREATE TABLE `customize_region` (
  `cregion_id` int(11) NOT NULL,
  `cregion_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customize_region`
--

INSERT INTO `customize_region` (`cregion_id`, `cregion_name`) VALUES
(1, 'Yangon'),
(2, 'Mandalay'),
(3, 'Bagan'),
(4, 'Inle'),
(5, 'Ngapali');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_type` varchar(300) NOT NULL,
  `package_image` varchar(100) NOT NULL,
  `package_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_type`, `package_image`, `package_desc`) VALUES
(26, 'Culture Tour', '26.png', 'Culturetour'),
(27, 'Beach Leisure Tour', '27.png', 'Beachleisuretour'),
(28, 'Special Tour', '28.png', 'Specialtour'),
(29, 'Trekking Tour', '29.png', 'Trekkingtour'),
(30, 'Adventure Tour', '30.png', 'Adventuretour');

-- --------------------------------------------------------

--
-- Table structure for table `packagelist`
--

CREATE TABLE `packagelist` (
  `packagelist_id` int(100) NOT NULL,
  `packagelist_name` varchar(300) NOT NULL,
  `packagelist_image` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `packagelist_price` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `itinerary_id` int(100) NOT NULL,
  `package_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packagelist`
--

INSERT INTO `packagelist` (`packagelist_id`, `packagelist_name`, `packagelist_image`, `duration`, `packagelist_price`, `user_id`, `itinerary_id`, `package_id`) VALUES
(6, 'Yangon-Bagan-Mandalay-Amarapura -Inle-Yangon', '6.jpg', '5 Days / 4 Nights', 50000, 0, 0, 26),
(7, 'Yangon-Bagan-Popa-Mandalay-Amarapura-Inle-Yangon', '7.png', '6 Days / 5 Nights', 40000, 0, 0, 26),
(8, 'Yangon-Bagan-Popa-Mandalay-Amarapura-Mingun-Inle-Yangon', '8.png', '7 Days / 6 Nights', 70000, 0, 0, 26),
(9, 'Yangon-Bagan-Heho-Pindaya-Kalaw-Inle-Yangon', '9.png', '6 Days / 5 Nights', 60000, 0, 0, 26),
(10, 'Yangon-Bagan-Mandalay-Amarapura-Heho-Pindaya-Inle-Yangon', '10.jpg', '6 Days / 5 Nights', 60000, 0, 0, 26),
(11, 'Yangon-Bagan-Mandalay-Amarapura-Heho-Inle-Taunggyi-Kakku-Inle-Yangon', '11.jpg', '6 Days / 5 Nights', 50000, 0, 0, 26),
(12, 'Yangon-Bagan-Inle-Yangon', '12.png', '4 Days / 3 Nights', 40000, 0, 0, 26),
(13, 'Yangon-Kyaikhtiyoe-Bago-Yangon', '13.jpg', '4 Days / 3 Nights', 40000, 0, 0, 26),
(14, 'Yangon-Bagan-Mandalay-Amarapura-Inle-ChaungTharBeach-Yangon', '14.jpg', '8 Days / 7 Nights', 900009, 0, 0, 27),
(15, 'Yangon-Bagan-Mandalay-Amarapura-Inle-GawYanGyiBeach-Yangon', '15.jpg', '7 Days / 6 Nights', 80000, 0, 0, 27),
(16, 'Yangon-Bagan-MerguiArchipelagoBeach-Yangon', '16.jpg', '6 Days / 5 Nights', 10000, 0, 0, 27),
(17, 'Yangon-Bagan-NabuleBeach-Yangon', '17.jpg', '6 Days / 5 Nights', 60000, 0, 0, 27),
(18, 'Yangon-Bagan-Inle-NgapaliBeach-Yangon', '18.jpg', '8 Days / 7 Nights', 120000, 0, 0, 27),
(19, 'Yangon- Kyaikhtiyoe- Bago-Pathein-NgweSaungBeach-Yangon', '19.jpg', '7 Days / 6 Nights', 80000, 0, 0, 27),
(20, 'Yangon-PaNyit Beach-Yangon', '20.jpg', '4 Days / 3 Nights', 70000, 0, 0, 27),
(21, 'Yangon-TeyzitBeach-Yangon', '21.jpg', '4 Days / 3 Nights', 70000, 0, 0, 27),
(22, 'Yangon-Bagan-Mandalay-Amarapura-Shwebo-Kyauk Myaung-Ayeyarwaddy Dolphin-Mingun-Sagaing-Ava-Mandalay-Inle-Yangon', '22.jpg', '8 Days / 7 Nights', 150000, 0, 0, 28),
(23, 'Yangon-Bagan-Mandalay-Amarapura-Shwebo-Mingun-Sagaing-Ava-Mandalay-Inle-Taunggyi-Kakku-Yangon', '23.jpg', '8 Days / 7 Nights', 160000, 0, 0, 28),
(24, 'Yangon-Mandalay-Amarapura-Shwebo-Kyauk Myaung\r\n-Mingun-Sagaing-Ava-Yandabo-Bagan-Pindaya-Inle-Yangon', '24.jpg', '10 Days / 9 Nights', 200000, 0, 0, 28),
(25, 'Yangon-Mandalay-Amarapura-Mingun-Sagaing-Ava-Monywa-Pakkokku-Bagan-Popa-Inle-Yangon', '25.jpg', '10 Days / 9 Nights', 180000, 0, 0, 28),
(26, 'Yangon-Bagan-Mandalay-Amarapura-Pyin Oo lwin- Hsipaw-Mandalay-Inle-Yangon', '26.jpg', '11 Days / 10 Nights', 220000, 0, 0, 28),
(27, 'Yangon-Mandalay-Amarapura-Sagaing-Monywa-Mauk Kataw-Kalay Wa-Maw Laik-Yu Wa-Monywa-Bagan-Inle-Yangon', '27.jpg', '11 Days / 10 Nights', 230000, 0, 0, 28),
(28, 'Yangon-Bagan-Balloon over Bagan Riding-Mandalay-Amarapura-Inle-Yangon', '28.jpg', '7 Days / 6 Nights', 300000, 0, 0, 28),
(29, 'Yangon-Bagan-Mandalay-Amarapura-Inle-Balloon over Inle-Yangon', '29.jpg', '6 Days / 5 Nights', 270000, 0, 0, 28),
(30, 'Yangon-Bagan-Mandalay-Amarapura-Heho-Kalaw Half Day Trekking-Inle-Yangon', '30.jpeg', '8 Days / 7 Nights', 250000, 0, 0, 29),
(31, 'Yangon-Bagan-Mandalay-Amarapura-Pindaya-Loikaw Trekking-Yangon', '31.jpg', '8 Days / 7 Nights', 240000, 0, 0, 29),
(32, 'Yangon-Bagan-Heho-Kalaw-Elephant Camp Trekking-Inle-Yangon', '32.jpg', '7 Days / 6 Nights', 300000, 0, 0, 29),
(33, 'Yangon-Bagan-Heho-Pindaya-Kalaw-Alaung Daw Kat Tha Pa Elephant Trekking-Inle-Yangon', '33.jpg', '7 Days / 6 Nights', 300000, 0, 0, 29),
(34, 'Yangon-Taungoo-Phoekyar Elephant Camp-Loikaw-Phae Khone-Sagar-Inle-Bagan-Mt.Popa-Yangon', '34.jpg', '11 Days / 10 Nights', 70000, 0, 0, 30),
(35, 'Yangon-Inle-Mandalay-Amarapura-Ava-Sagaing-Tamu-Kalay Wa-Monwya-Bagan-Yangon', '35.png', '12 Days / 11 Nights', 80000, 0, 0, 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_ID` int(11) NOT NULL,
  `a_Name` varchar(500) NOT NULL,
  `a_Email` varchar(500) NOT NULL,
  `a_Pw` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_ID`, `a_Name`, `a_Email`, `a_Pw`) VALUES
(1, 'Phyu Sin Htun', 'pst@m.com', '123'),
(2, 'kaunghtoowin', 'kaung@m.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(100) NOT NULL,
  `user_email` varchar(300) NOT NULL,
  `checkdate` varchar(100) NOT NULL,
  `checkoutdate` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `packagelist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `user_email`, `checkdate`, `checkoutdate`, `payment`, `packagelist_id`, `user_id`) VALUES
(1, 'kaunghtoowin23@gmail.com', '2019-05-01', '2019-05-15', '500000', 1, 1),
(2, 'phyushintunkari@gmail.com', '2019-05-10', '2019-05-20', '500000', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customizedbook`
--

CREATE TABLE `tbl_customizedbook` (
  `cb_id` int(11) NOT NULL,
  `cbook_date` date NOT NULL,
  `chotel_id` int(11) NOT NULL,
  `ride` varchar(500) NOT NULL,
  `duration` varchar(500) NOT NULL,
  `person` varchar(500) NOT NULL,
  `u_Email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customizedbook`
--

INSERT INTO `tbl_customizedbook` (`cb_id`, `cbook_date`, `chotel_id`, `ride`, `duration`, `person`, `u_Email`) VALUES
(14, '2019-06-05', 7, 'Bus', '4', '1', 'koe@m.com'),
(15, '2019-06-05', 11, 'Flight', '4', '2', 'eisandy@m.com'),
(16, '2019-06-05', 28, 'Flight', '4', '2', 'sandy@m.com'),
(17, '2019-06-05', 23, 'Bus', '4', '1', 'koe@m.com'),
(18, '2019-06-06', 14, 'Bus', '4', '2', 'sandy@m.com'),
(19, '2019-06-06', 25, 'Bus', '3', '2', 'koe@m.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `faq_id` int(11) NOT NULL,
  `faq_question` varchar(1000) NOT NULL,
  `faq_answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`faq_id`, `faq_question`, `faq_answer`) VALUES
(1, 'Is Myanmar safe for travel?', 'Yes, definitely. The country is very safe for travel, even travel alone. The people mostly follow Buddhism and practice the Buddhaâ€™s lessons in their daily lives. Then they are very friendly, honest and willing to help others. \r\nMyanmar is the colonial of UK for centuries. English is the second nationwide language after Burmese.'),
(2, 'How many days I should spend in Myanmar?', 'Mostly recommended Myanmar package tours is running from 10 â€“ 14 days. This is quite enough time for you to explore the best highlights of the country while still have sometimes for insight discoveries at each stop. We can do it longer or shorter very much depending on your requests.'),
(3, 'How long we should book a Myanmar tour in advance?', 'In other destinations, we often say the sooner the better but this fact somehow is NOT true in Myanmar. Just because the suppliers cannot provide their rates for too far future. We believe that from 2 â€“ 4 months is the best. The minimum booking time should not be within 2 weeks to arrival date, especially in high season.'),
(4, 'I want to join in a group. Do you offer?', 'We are sorry that we do not offer joined-group tours until this post updated. All our tours are offered on customized and private basis.'),
(5, 'I travel alone - do I have to pay the single supplement?', 'Yes, you do. Myanmar is a newly opened country and the service suppliers seem not single-travelers-friendly that much. You will have to pay single supplement while we will try our bests to minimize the costs. '),
(6, 'Can I used credit/debit cards when I am in Myanmar?', 'Yes, we are confident to confirm â€œyou can use credit cardsâ€ in main cities and most hotels from 3 stars up. The fee for processing is running from 3 â€“ 5%.'),
(7, 'Does Intrepid have family trips? ', 'The minimum age (for Family trips) varies depending on destination, and Arrival has set minimum ages to ensure that the included activities suit each age range. Additionally, youâ€™ll notice that some of the more adventurous destinations have a higher minimum age.'),
(8, 'Can we book a triple room?', 'Depending on the trip style you choose, our trips are organised on a twin, triple or multi share basis. As our bookings are made well in advance, individual room requests canâ€™t be guaranteed.'),
(9, 'Electricity: what sort of power adapter should I bring?', 'Myanmar uses 220-230 Volts AC. AC (50 Hz) electricity. We suggest bringing a universal power adapter with voltage converter.'),
(11, 'How can I settle the payment for the tour I have booked?', 'We provide 4 different types of payment method:\r\n1) Cash on arrival in Yangon 2) Bank Transfer 3) By Check (only in U.S) 4) Credit Card (there is 3% surcharge apply)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flight`
--

CREATE TABLE `tbl_flight` (
  `flight_id` int(11) NOT NULL,
  `flight_name` varchar(500) NOT NULL,
  `flight_image` varchar(300) NOT NULL,
  `flight_price` double NOT NULL,
  `flight_phone` varchar(500) NOT NULL,
  `flight_number` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_flight`
--

INSERT INTO `tbl_flight` (`flight_id`, `flight_name`, `flight_image`, `flight_price`, `flight_phone`, `flight_number`) VALUES
(2, 'Air KBZ', '2.jpg', 50000, '09772344112', 'B-234'),
(3, 'Eee', '3.jpg', 3333, '2222222', 'A-1111'),
(4, 'Qqq', '4.jpeg', 2222, '33333', 'A-1111'),
(5, 'Eee', '5', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flight_roundtripbooking`
--

CREATE TABLE `tbl_flight_roundtripbooking` (
  `rt_id` int(50) NOT NULL,
  `book_date` date NOT NULL,
  `airline` varchar(500) NOT NULL,
  `fromm` varchar(500) NOT NULL,
  `too` varchar(500) NOT NULL,
  `departt` varchar(500) NOT NULL,
  `returnn` varchar(500) NOT NULL,
  `class` varchar(500) NOT NULL,
  `adult` varchar(500) NOT NULL,
  `child` varchar(500) NOT NULL,
  `u_Email` varchar(500) NOT NULL,
  `paymenttype` varchar(500) NOT NULL,
  `cardno` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_flight_roundtripbooking`
--

INSERT INTO `tbl_flight_roundtripbooking` (`rt_id`, `book_date`, `airline`, `fromm`, `too`, `departt`, `returnn`, `class`, `adult`, `child`, `u_Email`, `paymenttype`, `cardno`) VALUES
(1, '2019-06-06', 'Air KBZ', 'Yangon', 'Mandalay', '06/08/2019', '06/10/2019', 'economy', '2', '0', 'koe@m.com', 'mpu', '1234567890765321'),
(2, '2019-06-06', 'Golden', 'Mandalay', 'Yangon', '06/11/2019', '06/15/2019', 'Business', '4', '0', 'koe@m.com', 'kbz', '9567340987126097'),
(3, '2019-06-06', 'Air Bagan', 'Bagan', 'Yangon', '06/18/2019', '06/21/2019', 'First class', '2', '1', 'koe@m.com', 'mpu', '9086123400954807'),
(7, '2019-06-06', 'Yangon Airways', 'Yangon', 'Bagan', '06/08/2019', '06/15/2019', 'First class', '2', '0', 'sandy@m.com', 'kbz', '0987230941952075');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel`
--

CREATE TABLE `tbl_hotel` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(300) NOT NULL,
  `hotel_image` varchar(300) NOT NULL,
  `hotel_price` double NOT NULL,
  `hotel_location` varchar(20000) NOT NULL,
  `hotel_phone` varchar(500) NOT NULL,
  `hotel_email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_hotel`
--

INSERT INTO `tbl_hotel` (`hotel_id`, `hotel_name`, `hotel_image`, `hotel_price`, `hotel_location`, `hotel_phone`, `hotel_email`) VALUES
(1, 'Royal Palace', '', 24000, 'Bagan', '019999', 'royalpalace@gmail.com'),
(2, 'Aaa', '2.jpg', 444, 'Asdf', '444444', 'a@m.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotelbooking`
--

CREATE TABLE `tbl_hotelbooking` (
  `hb_id` int(100) NOT NULL,
  `book_date` date NOT NULL,
  `region` varchar(500) NOT NULL,
  `hotel` varchar(500) NOT NULL,
  `checkin` varchar(500) NOT NULL,
  `checkout` varchar(500) NOT NULL,
  `night` varchar(500) NOT NULL,
  `room` varchar(500) NOT NULL,
  `adults` varchar(500) NOT NULL,
  `children` varchar(500) NOT NULL,
  `u_Email` varchar(500) NOT NULL,
  `paymenttype` varchar(500) NOT NULL,
  `cardno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_hotelbooking`
--

INSERT INTO `tbl_hotelbooking` (`hb_id`, `book_date`, `region`, `hotel`, `checkin`, `checkout`, `night`, `room`, `adults`, `children`, `u_Email`, `paymenttype`, `cardno`) VALUES
(47, '2019-06-01', 'Yangon', 'Shangarila', '6/7/2019', '8/7/2019', '2', '1', '1', '0', 'koe@m.com', 'kbz', '08641234565456'),
(48, '2019-06-04', 'Inle', 'Skylate Inle', '1/1/2020', '5/1/2020', '4', '2', '2', '0', 'sandy@m.com', 'kbz', '9503051762552442'),
(49, '2019-06-04', 'Mawlamyine', 'Sedona', '2/2/2020', '5/2/2020', '3', '1', '1', '0', 'koe@m.com', 'mpu', '0987654567876'),
(50, '2019-06-05', 'Yangon', 'Shangrila', '1/7/2019', '5/7/2019', '4', '3', '1', '0', 'eisandy@m.com', 'kbz', '0912896523001165'),
(51, '2019-06-05', 'Mandalay', 'Skylate Inle', '1/7/2019', '4/7/2019', '3', '1', '1', '0', 'koe@m.com', 'kbz', '9087123099753421');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itinerary`
--

CREATE TABLE `tbl_itinerary` (
  `iti_id` int(11) NOT NULL,
  `iti_desc` varchar(5000) NOT NULL,
  `iti_image` varchar(50) NOT NULL,
  `packagelist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_itinerary`
--

INSERT INTO `tbl_itinerary` (`iti_id`, `iti_desc`, `iti_image`, `packagelist_id`) VALUES
(11, '-Day1.Yangon Arrival by flight and Yangon Sightseeing by car\r\n-Day2.Yangon-Bagan by flight and Bagan Sightseeing by car/horse cart\r\n-Day3.Bagan-Mandalay by flight and Mandalay-Amarapura Sightseeing by car\r\n-Day4.Mandalay-Heho by flight and Inle Sightseeing by traditional long boat\r\n-Day5.Heho-Yangon by flight, Yangon Sightseeing by car and Yangon Departure by flight', '11.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_packagetourbook`
--

CREATE TABLE `tbl_packagetourbook` (
  `ptb_id` int(10) NOT NULL,
  `book_date` date NOT NULL,
  `packagelist_id` int(10) NOT NULL,
  `start_date` varchar(500) NOT NULL,
  `end_date` varchar(500) NOT NULL,
  `person` varchar(500) NOT NULL,
  `u_Email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_packagetourbook`
--

INSERT INTO `tbl_packagetourbook` (`ptb_id`, `book_date`, `packagelist_id`, `start_date`, `end_date`, `person`, `u_Email`) VALUES
(0, '2019-06-06', 0, '06/17/2019', 'mm/dd/yyyy', '3', 'sandy@m.com'),
(0, '2019-06-06', 0, '06/12/2019', '06/17/2019', '2', 'sandy@m.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `r_ID` int(11) NOT NULL,
  `r_type` varchar(500) NOT NULL,
  `r_price` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`r_ID`, `r_type`, `r_price`) VALUES
(1, 'Classic Room', '100000'),
(2, 'Family Room', '200000'),
(3, 'Luxury Room', '300000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `u_ID` int(11) NOT NULL,
  `u_Name` varchar(300) NOT NULL,
  `u_Image` varchar(100) NOT NULL,
  `u_NRC` varchar(300) NOT NULL,
  `u_Email` varchar(300) NOT NULL,
  `u_Phno` varchar(300) NOT NULL,
  `u_Address` varchar(500) NOT NULL,
  `u_Pw` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`u_ID`, `u_Name`, `u_Image`, `u_NRC`, `u_Email`, `u_Phno`, `u_Address`, `u_Pw`) VALUES
(1, 'Kaung Htoo Win', '', '11/satana (N) 123456', 'kaunghtoowin23@gmail.com', '9780577109', 'Hlinetharyar,KyanSitethar housing', ''),
(2, 'Phyu Shin Tun', '', '13/ygn(N)111111', 'phyushintunkari@gmail.com', '0987654321', 'Bahan,Raytarchay Street', ''),
(3, 'Shwe Phone Nine', '', '13/tharkata(N)222222', 'luphonenine@gmail.com', '098999999', 'Tharkayta, Main Housing', ''),
(4, 'Min Khat Mg Mg', '', '13/kamaryout(N)333333', 'mgminkhant@gmail.com', '098888888', 'Kamaryout, ChorRayton 2 Street', ''),
(5, 'Ei Sandy Phyo', '', '13/hline(N)444444', 'sandyphyolay@gmail.com', '098777777777', 'HlineTharYar, Bayintnoun Housing', ''),
(16, 'KoeKoe', '16.png', '12/kmt(N)876091', 'koe@m.com', '09876123567', 'Kyee Myint Taing', '202cb962ac59075b964b07152d234b70'),
(17, 'Sandy', '17.png', '12/lty(N)789123', 'sandy@m.com', '099861230987', 'HlaingTharYar', '202cb962ac59075b964b07152d234b70'),
(18, 'EiSandyPhyoe', '18.png', '12/lty(N)982510', 'eisandy@m.com', '09402985556', 'Hlaing Thar Yar', '202cb962ac59075b964b07152d234b70');
(19, 'didi', '19.png', '12/LHN(N)968437', 'didi789@gmail.com', '09789546432', 'HTY', 'efb32ac2c911a47be9792c21bfee43f4'); --didi7890!


--
-- Indexes for dumped tables
--

--
-- Indexes for table `customize_hotel`
--
ALTER TABLE `customize_hotel`
  ADD PRIMARY KEY (`chotel_id`);

--
-- Indexes for table `customize_region`
--
ALTER TABLE `customize_region`
  ADD PRIMARY KEY (`cregion_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `packagelist`
--
ALTER TABLE `packagelist`
  ADD PRIMARY KEY (`packagelist_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`a_ID`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_customizedbook`
--
ALTER TABLE `tbl_customizedbook`
  ADD PRIMARY KEY (`cb_id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_flight`
--
ALTER TABLE `tbl_flight`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `tbl_flight_roundtripbooking`
--
ALTER TABLE `tbl_flight_roundtripbooking`
  ADD PRIMARY KEY (`rt_id`);

--
-- Indexes for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `tbl_hotelbooking`
--
ALTER TABLE `tbl_hotelbooking`
  ADD PRIMARY KEY (`hb_id`);

--
-- Indexes for table `tbl_itinerary`
--
ALTER TABLE `tbl_itinerary`
  ADD PRIMARY KEY (`iti_id`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`r_ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`u_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customize_hotel`
--
ALTER TABLE `customize_hotel`
  MODIFY `chotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `customize_region`
--
ALTER TABLE `customize_region`
  MODIFY `cregion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `packagelist`
--
ALTER TABLE `packagelist`
  MODIFY `packagelist_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `a_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_customizedbook`
--
ALTER TABLE `tbl_customizedbook`
  MODIFY `cb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_flight`
--
ALTER TABLE `tbl_flight`
  MODIFY `flight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_flight_roundtripbooking`
--
ALTER TABLE `tbl_flight_roundtripbooking`
  MODIFY `rt_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_hotel`
--
ALTER TABLE `tbl_hotel`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_hotelbooking`
--
ALTER TABLE `tbl_hotelbooking`
  MODIFY `hb_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_itinerary`
--
ALTER TABLE `tbl_itinerary`
  MODIFY `iti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `r_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `u_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
