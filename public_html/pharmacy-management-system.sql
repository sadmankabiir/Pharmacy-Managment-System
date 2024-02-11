-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 08:07 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy-management-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `address` varchar(60) DEFAULT NULL,
  `phone_number` varchar(11) NOT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `address`, `phone_number`, `email`) VALUES
(1, 'Square Pharmaceuticals Ltd.', 'Square Centre 48 Mohakhali C/A, Dhaka 1212', '02-8833047', 'in23@square.com'),
(2, 'Beximco Pharmaceuticals Ltd.', '19 Dhanmondi, R/A Rd No. 7, Dhaka 1205', '02-58611001', 'info@bpl.net'),
(3, 'Incepta Pharmaceuticals Ltd.', '40 Shaheed Tajuddin Ahmed Ave, Dhaka 1208', '028891190', 'info@inceptapharma.com'),
(4, 'ACI Limited.', 'Tejgaon Industrial Area, Dhaka-1208', '028878603', 'info@aci.net'),
(5, 'Drug International', 'Khwaja Enayetpuri (R) Tower, 17 Green Rd, Dhaka 1205', '029662611', 'info@drug-international.com'),
(6, 'Healthcare Pharmaceuticals Ltd', '89 Bir Uttam C.R. Datta Road, Dhaka 1205', '029632176', 'info@hpl.com.bd'),
(7, 'Radiant Pharmaceuticals Ltd.', '22/1 Dhanmondi, Road 2,Dhaka 1205', '029660307', 'info@radiant.com.bd'),
(8, 'Opsonin Pharma Ltd.', '30, Opsonin Building, New Eskaton Road, Dhaka 1000', '0248311900', 'info@opsonin.net'),
(9, 'Ibn Sina Pharmaceuticals Ltd.', 'Tanin center,03 Asad gate,mirpur road,mohammadpur,Dhaka-1207', '029119564', 'info@ibnsina.net'),
(10, 'Globe Pharmaceuticals Ltd.', 'Shaheed Tajuddin Ahmed Ave, Dhaka 1208', '01959995575', 'globeimd@globe-uro.com');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `emp_id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `job` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`emp_id`, `username`, `password`, `job`) VALUES
(1, 'sadman', 'sadman123', 'manager'),
(2, 'faysal', 'faysal123', 'manager'),
(3, 'arnob', 'arnob123', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone_number` char(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `job` varchar(10) NOT NULL,
  `join_date` date NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `first_name`, `last_name`, `phone_number`, `dob`, `salary`, `job`, `join_date`, `email`, `address`) VALUES
(1, 'Sadman', 'Kabir', '01731160033', '1999-07-09', 15000, 'manager', '2022-10-07', 'sadman@gmail.com', 'xyz'),
(2, 'Maruf', 'Hasan', '01756565544', '1998-01-04', 15000, 'manager', '2022-04-29', 'arnob@gmail.com', 'xyz'),
(3, 'Faysal', 'Bin Zaman', '01825252244', '2000-09-17', 15000, 'manager', '2022-04-29', 'fousal@yahoo.com', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `generic`
--

CREATE TABLE `generic` (
  `generic_name` varchar(50) NOT NULL,
  `otc` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generic`
--

INSERT INTO `generic` (`generic_name`, `otc`) VALUES
('Clonazepam', 'no'),
('Domperidone', 'yes'),
('Esomeprazole Magnesium Trihydrate', 'yes'),
('Fexofenadine Hydrochloride', 'yes'),
('Ketotifen', 'yes'),
('Losartan Potassium', 'no'),
('Metformin Hydrochloride', 'yes'),
('Midazolam', 'no'),
('Montelukast', 'yes'),
('Paracetamol', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(1, 'Pan Africa Market', '1521 1st Ave, Seattle, WA', 47.608940, -122.340141, 'restaurant'),
(2, 'Buddha Thai & Bar', '2222 2nd Ave, Seattle, WA', 47.613590, -122.344391, 'bar'),
(3, 'The Melting Pot', '14 Mercer St, Seattle, WA', 47.624561, -122.356445, 'restaurant'),
(4, 'Ipanema Grill', '1225 1st Ave, Seattle, WA', 47.606365, -122.337654, 'restaurant'),
(5, 'Sake House', '2230 1st Ave, Seattle, WA', 47.612823, -122.345673, 'bar'),
(6, 'Crab Pot', '1301 Alaskan Way, Seattle, WA', 47.605961, -122.340363, 'restaurant'),
(7, 'Mama\'s Mexican Kitchen', '2234 2nd Ave, Seattle, WA', 47.613976, -122.345467, 'bar'),
(8, 'Wingdome', '1416 E Olive Way, Seattle, WA', 47.617214, -122.326584, 'bar'),
(9, 'Pan Africa Market', '1521 1st Ave, Seattle, WA', 47.608940, -122.340141, 'restaurant'),
(10, 'Buddha Thai & Bar', '2222 2nd Ave, Seattle, WA', 47.613590, -122.344391, 'bar'),
(11, 'The Melting Pot', '14 Mercer St, Seattle, WA', 47.624561, -122.356445, 'restaurant'),
(12, 'Ipanema Grill', '1225 1st Ave, Seattle, WA', 47.606365, -122.337654, 'restaurant'),
(13, 'Sake House', '2230 1st Ave, Seattle, WA', 47.612823, -122.345673, 'bar'),
(14, 'Crab Pot', '1301 Alaskan Way, Seattle, WA', 47.605961, -122.340363, 'restaurant'),
(15, 'Mama\'s Mexican Kitchen', '2234 2nd Ave, Seattle, WA', 47.613976, -122.345467, 'bar'),
(16, 'Wingdome', '1416 E Olive Way, Seattle, WA', 47.617214, -122.326584, 'bar'),
(17, 'Piroshky Piroshky', '1908 Pike pl, Seattle, WA', 47.610126, -122.342834, 'restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `medicine_id` int(11) NOT NULL,
  `medicine_name` varchar(30) NOT NULL,
  `generic_name` varchar(50) NOT NULL,
  `otc` varchar(3) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `category` varchar(10) NOT NULL,
  `retail_price` decimal(6,2) NOT NULL,
  `purchase_price` decimal(6,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `stock_minimum` int(11) NOT NULL,
  `shelf_no` varchar(4) NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`medicine_id`, `medicine_name`, `generic_name`, `otc`, `company_name`, `category`, `retail_price`, `purchase_price`, `stock`, `stock_minimum`, `shelf_no`, `expiry_date`) VALUES
(1, 'Napa 500mg', 'Paracetamol', 'yes', 'Beximco Pharmaceuticals Ltd.', 'Tablet', '1.00', '0.85', 18, 30, 'B2', '2022-11-30'),
(2, 'Ace 500mg', 'Paracetamol', 'yes', 'Square Pharmaceuticals Ltd.', 'Tablet', '1.00', '0.85', 80, 20, 'A1', '2022-12-31'),
(3, 'Napa 50ml', 'Paracetamol', 'yes', 'Beximco Pharmaceuticals Ltd.', 'Syrup', '20.00', '17.00', 30, 5, 'B2', '2022-09-30'),
(4, 'Sergel 20mg', 'Esomeprazole Magnesium Trihydrate', 'no', 'Healthcare Pharmaceuticals Ltd', 'Capsule', '7.00', '5.95', 65, 25, 'F1', '2022-01-31'),
(5, 'Esomep 20mg', 'Esomeprazole Magnesium Trihydrate', 'no', 'ACI Limited', 'Capsule', '7.00', '5.95', 43, 15, 'D3', '2022-10-31'),
(6, 'Esonix 20mg', 'Esomeprazole Magnesium Trihydrate', 'no', 'Incepta Pharmaceuticals Ltd.', 'Capsule', '7.00', '5.95', 85, 20, 'C1', '2022-03-31'),
(7, 'Motigut 10mg', 'Domperidone', 'yes', 'Square Pharmaceuticals Ltd.', 'Tablet', '3.00', '2.55', 60, 20, 'A2', '2022-10-31'),
(8, 'Deflux 10mg', 'Domperidone', 'yes', 'Beximco Pharmaceuticals Ltd.', 'Tablet', '3.00', '2.55', 50, 15, 'B1', '2022-12-31'),
(9, 'Dopadon 10mg', 'Domperidone', 'yes', 'Ibn Sina Pharmaceuticals Ltd.', 'Tablet', '2.50', '2.12', 40, 10, 'I1', '2022-06-30'),
(10, 'Fexofast 120mg', 'Fexofenadine Hydrochloride', 'no', 'Drug International', 'Tablet', '7.00', '5.95', 40, 10, 'E2', '2022-07-31'),
(11, 'Fixal 120mg', 'Fexofenadine Hydrochloride', 'no', 'Opsonin Pharma Ltd.', 'Tablet', '8.00', '6.80', 35, 10, 'H1', '2022-12-31'),
(12, 'Osartil 50mg', 'Losartan Potassium', 'no', 'Incepta Pharmaceuticals Ltd.', 'Tablet', '8.00', '6.80', 40, 30, 'C2', '2022-11-30'),
(13, 'Larb 50mg', 'Losartan Potassium', 'no', 'Opsonin Pharma Ltd.', 'Tablet', '8.00', '6.80', 15, 20, 'H1', '2022-12-31'),
(14, 'Lok 50mg', 'Losartan Potassium', 'no', 'Globe Pharmaceuticals Ltd.', 'Tablet', '8.00', '6.80', 20, 25, 'J2', '2022-09-30'),
(15, 'asdasd', 'asdasda', 'yes', 'asdasdas', 'asdasd', '10.00', '5.00', 20, 5, 'b1', '2022-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `representatives`
--

CREATE TABLE `representatives` (
  `rep_id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `phone_number` char(11) NOT NULL,
  `company_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `representatives`
--

INSERT INTO `representatives` (`rep_id`, `first_name`, `last_name`, `phone_number`, `company_name`) VALUES
(14, 'abcd', 'abcd', '015000000', 'Radiant Pharmaceuticals Ltd.'),
(15, 'xyz', 'xyz', '01634875236', 'Square Pharmaceuticals Ltd.'),
(16, 'abc', 'abc', '01516849762', 'Incepta Pharmaceuticals Ltd.'),
(18, 'qwer', 'qwer', '01912547892', 'Opsonin Pharma Ltd.'),
(19, 'zxcv', 'zxcv', '01714586235', 'Ibn Sina Pharmaceuticals Ltd.'),
(20, 'fghfj', 'fgjfg', '01500033344', 'Healthcare Pharmaceuticals Ltd');

--
-- Triggers `representatives`
--
DELIMITER $$
CREATE TRIGGER `before_rep_delete` BEFORE DELETE ON `representatives` FOR EACH ROW BEGIN
INSERT INTO former_representatives(first_name,last_name,phone_number,company_name)
VALUES(OLD.first_name,OLD.last_name,OLD.phone_number,OLD.company_name);
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `generic`
--
ALTER TABLE `generic`
  ADD PRIMARY KEY (`generic_name`);

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `representatives`
--
ALTER TABLE `representatives`
  ADD PRIMARY KEY (`rep_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `representatives`
--
ALTER TABLE `representatives`
  MODIFY `rep_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
