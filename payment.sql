-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 12:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aamar_pay_db_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `tran_id` varchar(255) NOT NULL,
  `mer_txnid` varchar(255) NOT NULL,
  `amount` int(100) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `cus_email` varchar(255) NOT NULL,
  `cus_add1` varchar(255) NOT NULL,
  `cus_add2` varchar(255) NOT NULL,
  `cus_city` varchar(255) NOT NULL,
  `cus_state` varchar(255) NOT NULL,
  `cus_phone` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pay_status` varchar(255) NOT NULL,
  `status_code` int(11) NOT NULL,
  `cardnumber` int(100) NOT NULL,
  `approval_code` varchar(255) NOT NULL,
  `payment_processor` varchar(255) NOT NULL,
  `bank_trxid` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `error_code` int(100) NOT NULL,
  `date_processed` varchar(255) NOT NULL,
  `processing_charge` int(11) NOT NULL,
  `ip` varchar(250) NOT NULL,
  `verify_status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `tran_id`, `mer_txnid`, `amount`, `cus_name`, `cus_email`, `cus_add1`, `cus_add2`, `cus_city`, `cus_state`, `cus_phone`, `description`, `pay_status`, `status_code`, `cardnumber`, `approval_code`, `payment_processor`, `bank_trxid`, `payment_type`, `error_code`, `date_processed`, `processing_charge`, `ip`, `verify_status`, `created_at`, `updated_at`) VALUES
(1, 'AAM1612258066103331', 'Q3BU9YEIQV', 1000, 'Md.AkhteruzzamanMoon', 'moon@pencilbox.edu.bd', '18 Rojoniboslen', 'Mitford', 'Dhaka(city)', 'Dhaka', '01521217040', 'test', 'Successful', 2, 1826323538, '6ED4FIJ1G)', 'bKash', '6ED4FIJ1G)', 'bKash-bKash', 0, '2021-02-02 15:27:57', 21, '103.239.6.90', 'PENDING', '2021-02-02 09:28:03', '2021-02-02 09:28:03'),
(2, 'AAM1612259227103404', '0UGNTJTXR3', 10, 'Mr. ABCfj', 'test@test.comfgjfg', 'Dhakagfjgjf', 'Dhakafgjhfg', 'Dhakafgjhfg', 'Dhakafghfgh', '01000000051', 'test', 'Successful', 2, 1826323538, '6ED4FIJ1G)', 'bKash', '6ED4FIJ1G)', 'bKash-bKash', 0, '2021-02-02 15:47:14', 0, '103.239.6.90', 'PENDING', '2021-02-02 09:47:19', '2021-02-02 09:47:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tran_id` (`tran_id`),
  ADD UNIQUE KEY `mer_txnid` (`mer_txnid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
