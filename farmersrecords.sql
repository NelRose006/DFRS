-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2024 at 05:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmersrecords`
--

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `amount` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`id`, `user_id`, `name`, `type`, `amount`, `date`, `description`) VALUES
(1, 1, 'oranges', 'fruit', '30', '2024-04-11', 'bought');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `amount` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `name`, `type`, `amount`, `price`, `date`, `description`, `user_id`) VALUES
(1, 'Maize', 'Crops', '1000', '1500', '2024-04-12', 'High-quality maize seeds', 1),
(2, 'Wheat', 'Crops', '800', '2000', '2024-04-12', 'Premium wheat grains', 1),
(3, 'Beans', 'Crops', '700', '1800', '2024-04-12', 'Fresh beans for sale', 1),
(4, 'Tomatoes', 'Crops', '500', '1200', '2024-04-12', 'Ripe tomatoes ready for market', 1),
(5, 'Cattle', 'Livestock', '5', '50000', '2024-04-12', 'Healthy cattle for breeding', 2),
(6, 'Goats', 'Livestock', '10', '20000', '2024-04-12', 'Young goats for sale', 2),
(7, 'Sheep', 'Livestock', '8', '15000', '2024-04-12', 'Healthy sheep for sale', 2),
(8, 'Chickens', 'Livestock', '50', '5000', '2024-04-12', 'Broiler chickens ready for market', 2),
(9, 'Potatoes', 'Crops', '500', '1200', '2024-04-12', 'Fresh potatoes for consumption', 3),
(10, 'Cabbages', 'Crops', '300', '800', '2024-04-12', 'Green cabbages for sale', 3),
(11, 'Carrots', 'Crops', '200', '1000', '2024-04-12', 'Organic carrots from the farm', 3),
(12, 'Onions', 'Crops', '400', '900', '2024-04-12', 'Fresh onions for cooking', 3),
(13, 'Mangoes', 'Fruits', '100', '500', '2024-04-12', 'Sweet mangoes from the farm', 4),
(14, 'Bananas', 'Fruits', '120', '400', '2024-04-12', 'Ripe bananas for sale', 4),
(15, 'Oranges', 'Fruits', '80', '600', '2024-04-12', 'Fresh oranges from the orchard', 4),
(16, 'Pineapples', 'Fruits', '70', '700', '2024-04-12', 'Juicy pineapples ready to eat', 4),
(17, 'Fish', 'Seafood', '50', '2000', '2024-04-12', 'Fresh fish from the lake', 5),
(18, 'Prawns', 'Seafood', '30', '3000', '2024-04-12', 'Large prawns for sale', 5),
(19, 'Crabs', 'Seafood', '20', '2500', '2024-04-12', 'Live crabs from the coast', 5),
(20, 'Lobsters', 'Seafood', '15', '3500', '2024-04-12', 'Fresh lobsters for special occasions', 5),
(21, 'Beans', 'Crops', '700', '1800', '2024-04-12', 'Fresh beans for sale', 6),
(22, 'Tomatoes', 'Crops', '500', '1200', '2024-04-12', 'Ripe tomatoes ready for market', 6),
(23, 'Spinach', 'Crops', '400', '1000', '2024-04-12', 'Organic spinach for cooking', 6),
(24, 'Kales', 'Crops', '300', '800', '2024-04-12', 'Green kales for sale', 6),
(25, 'Goats', 'Livestock', '10', '20000', '2024-04-12', 'Young goats for sale', 7),
(26, 'Sheep', 'Livestock', '8', '15000', '2024-04-12', 'Healthy sheep for sale', 7),
(27, 'Chickens', 'Livestock', '50', '5000', '2024-04-12', 'Broiler chickens ready for market', 7),
(28, 'Turkeys', 'Livestock', '5', '10000', '2024-04-12', 'Healthy turkeys for sale', 7),
(29, 'Cabbages', 'Crops', '300', '800', '2024-04-12', 'Green cabbages for sale', 8),
(30, 'Carrots', 'Crops', '200', '1000', '2024-04-12', 'Organic carrots from the farm', 8),
(31, 'Onions', 'Crops', '400', '900', '2024-04-12', 'Fresh onions for cooking', 8),
(32, 'Garlic', 'Crops', '150', '1100', '2024-04-12', 'Aromatic garlic for sale', 8),
(33, 'Bananas', 'Fruits', '120', '400', '2024-04-12', 'Ripe bananas for sale', 9),
(34, 'Oranges', 'Fruits', '80', '600', '2024-04-12', 'Fresh oranges from the orchard', 9),
(35, 'Pineapples', 'Fruits', '70', '700', '2024-04-12', 'Juicy pineapples ready to eat', 9),
(36, 'Watermelons', 'Fruits', '30', '1200', '2024-04-12', 'Sweet watermelons from the farm', 9),
(37, 'Prawns', 'Seafood', '30', '3000', '2024-04-12', 'Large prawns for sale', 10),
(38, 'Crabs', 'Seafood', '20', '2500', '2024-04-12', 'Live crabs from the coast', 10),
(39, 'Lobsters', 'Seafood', '15', '3500', '2024-04-12', 'Fresh lobsters for special occasions', 10),
(40, 'Fish', 'Seafood', '50', '2000', '2024-04-12', 'Fresh fish from the lake', 10),
(41, 'Sukuma Wiki', 'Vegetable', '30kg', '300', '2024-04-05', 'Bought', 1);

-- --------------------------------------------------------

--
-- Table structure for table `livestock_and_poultry`
--

CREATE TABLE `livestock_and_poultry` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `amount` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livestock_and_poultry`
--

INSERT INTO `livestock_and_poultry` (`id`, `user_id`, `name`, `type`, `amount`, `date`, `description`) VALUES
(1, 1, 'cow', 'fresha', '1', '2024-04-11', 'died'),
(2, 1, 'cow', 'fresha', '1', '2024-04-11', 'died');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(45) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `itemname` varchar(45) NOT NULL,
  `quantity` varchar(45) NOT NULL,
  `category` text NOT NULL,
  `amountpaid` varchar(45) NOT NULL,
  `modeofpayment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `name`, `phonenumber`, `itemname`, `quantity`, `category`, `amountpaid`, `modeofpayment`, `date`) VALUES
(1, 1, 'Akinyi Atieno', 1234567890, 'Maize', '10', 'Crops', '10000', 'Cash', '2024-04-15'),
(2, 1, 'Kipkoech Bett', 2147483647, 'Cattle', '2', 'Livestock', '15000', 'MPesa', '2024-04-16'),
(3, 1, 'Mwende Mutisya', 2147483647, 'Chicken', '20', 'Other', '2000', 'Mpesa', '2024-04-17'),
(4, 1, 'Wangari Muthoni', 2147483647, 'Bananas', '50', 'Crops', '5000', 'Cash', '2024-04-18'),
(5, 1, 'Linet Wanjiku', 2147483647, 'Pigs', '5', 'Livestock', '10000', 'MPesa', '2024-04-19'),
(6, 2, 'Chepkorir Jepchumba', 2147483647, 'Potatoes', '15', 'Crops', '1500', 'Cash', '2024-04-20'),
(7, 2, 'Omondi Odhiambo', 2147483647, 'Goats', '3', 'Livestock', '9000', 'MPesa', '2024-04-21'),
(8, 2, 'Njoki Wanjiru', 2147483647, 'Fish', '30', 'Other', '3000', 'Mpesa', '2024-04-22'),
(9, 2, 'Kipchoge Kibet', 2147483647, 'Beans', '25', 'Crops', '2500', 'Cash', '2024-04-23'),
(10, 2, 'Adisa Achieng', 1234567890, 'Sheep', '4', 'Livestock', '8000', 'MPesa', '2024-04-24'),
(11, 3, 'Kanini Mwikali', 2147483647, 'Tomatoes', '8', 'Crops', '800', 'Cash', '2024-04-25'),
(12, 3, 'Odhiambo Onyango', 2147483647, 'Ducks', '10', 'Livestock', '12000', 'MPesa', '2024-04-26'),
(13, 3, 'Wambui Njeri', 2147483647, 'Rice', '40', 'Other', '4000', 'Mpesa', '2024-04-27'),
(14, 3, 'Kemei Kiptoo', 2147483647, 'Mangoes', '30', 'Crops', '3000', 'Cash', '2024-04-28'),
(15, 3, 'Auma Adhiambo', 2147483647, 'Cows', '3', 'Livestock', '15000', 'MPesa', '2024-04-29'),
(16, 4, 'Njoki Waithera', 2147483647, 'Avocados', '12', 'Crops', '1200', 'Cash', '2024-04-30'),
(17, 4, 'Moses Ochieng', 2147483647, 'Poultry', '25', 'Livestock', '7500', 'MPesa', '2024-05-01'),
(18, 4, 'Karanja Waweru', 2147483647, 'Beef', '4', 'Other', '400', 'Mpesa', '2024-05-02'),
(19, 4, 'Korir Kimutai', 1234567890, 'Oranges', '40', 'Crops', '4000', 'Cash', '2024-05-03'),
(20, 4, 'Adhiambo Aoko', 2147483647, 'Pigs', '6', 'Livestock', '12000', 'MPesa', '2024-05-04'),
(21, 5, 'Njeri Wambui', 2147483647, 'Beans', '20', 'Crops', '2000', 'Cash', '2024-05-05'),
(22, 5, 'Ouma Odhiambo', 2147483647, 'Sheep', '5', 'Livestock', '10000', 'MPesa', '2024-05-06'),
(23, 5, 'Kibet Kiprop', 2147483647, 'Fish', '25', 'Other', '2500', 'Mpesa', '2024-05-07'),
(24, 5, 'Atieno Adhiambo', 2147483647, 'Bananas', '30', 'Crops', '3000', 'Cash', '2024-05-08'),
(25, 5, 'Kigen Korir', 2147483647, 'Goats', '3', 'Livestock', '6000', 'MPesa', '2024-05-09'),
(26, 6, 'Akinyi Anyango', 2147483647, 'Cassava', '10', 'Crops', '1000', 'Cash', '2024-05-10'),
(27, 6, 'Ogutu Ochieng', 2147483647, 'Chickens', '15', 'Livestock', '9000', 'MPesa', '2024-05-11'),
(28, 6, 'Mwende Mutisya', 1234567890, 'Eggs', '50', 'Other', '2500', 'Cash', '2024-05-12'),
(29, 6, 'Wangari Muthoni', 2147483647, 'Onions', '25', 'Crops', '2500', 'Cash', '2024-05-13'),
(30, 6, 'Linet Wanjiku', 2147483647, 'Pigs', '8', 'Livestock', '16000', 'MPesa', '2024-05-14'),
(31, 7, 'Chepkorir Jepchirchir', 2147483647, 'Pumpkins', '20', 'Crops', '2000', 'Cash', '2024-05-15'),
(32, 7, 'Omondi Oloo', 2147483647, 'Sheep', '4', 'Livestock', '8000', 'MPesa', '2024-05-16'),
(33, 7, 'Njoki Wanjiru', 2147483647, 'Fish', '30', 'Other', '3000', 'Cash', '2024-05-17'),
(34, 7, 'Kipchoge Kibet', 2147483647, 'Beans', '25', 'Crops', '2500', 'Cash', '2024-05-18'),
(35, 7, 'Adisa Achieng', 2147483647, 'Sheep', '4', 'Livestock', '8000', 'MPesa', '2024-05-19'),
(36, 8, 'Kanini Mwikali', 2147483647, 'Tomatoes', '8', 'Crops', '800', 'Cash', '2024-05-20'),
(37, 8, 'Odhiambo Onyango', 1234567890, 'Ducks', '10', 'Livestock', '12000', 'MPesa', '2024-05-21'),
(38, 8, 'Wambui Njeri', 2147483647, 'Rice', '40', 'Other', '4000', 'Cash', '2024-05-22'),
(39, 8, 'Kemei Kiptoo', 2147483647, 'Mangoes', '30', 'Crops', '3000', 'Cash', '2024-05-23'),
(40, 8, 'Auma Adhiambo', 2147483647, 'Cows', '3', 'Livestock', '15000', 'MPesa', '2024-05-24'),
(41, 9, 'Njoki Waithera', 2147483647, 'Avocados', '12', 'Crops', '1200', 'Cash', '2024-05-25'),
(42, 9, 'Moses Ochieng', 2147483647, 'Poultry', '25', 'Livestock', '7500', 'MPesa', '2024-05-26'),
(43, 9, 'Karanja Waweru', 2147483647, 'Beef', '4', 'Other', '400', 'Cash', '2024-05-27'),
(44, 9, 'Korir Kimutai', 2147483647, 'Oranges', '40', 'Crops', '4000', 'Cash', '2024-05-28'),
(45, 9, 'Adhiambo Aoko', 2147483647, 'Pigs', '6', 'Livestock', '12000', 'MPesa', '2024-05-29'),
(46, 10, 'Njeri Wambui', 1234567890, 'Beans', '20', 'Crops', '2000', 'Cash', '2024-05-30'),
(47, 10, 'Ouma Odhiambo', 2147483647, 'Sheep', '5', 'Livestock', '10000', 'MPesa', '2024-05-31'),
(48, 10, 'Kibet Kiprop', 2147483647, 'Fish', '25', 'Other', '2500', 'Cash', '2024-06-01'),
(49, 10, 'Atieno Adhiambo', 2147483647, 'Bananas', '30', 'Crops', '3000', 'Cash', '2024-06-02'),
(50, 10, 'Kigen Korir', 2147483647, 'Goats', '3', 'Livestock', '6000', 'MPesa', '2024-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Rosecandy Nelima', 'nelima@_', 'rosecandynelima@gmail.com', '1234qw'),
(2, 'Grace Njeri', 'Grace', 'grace1234@gmail.com', 'zxcv1234'),
(3, 'Sally Joy', 'Sally', 'sallyjoy@gmail.com', '9876sally'),
(4, 'Mary Ann', 'Ann', 'maryann254@gmail.com', '25466'),
(5, 'Peter Munene', 'petermunene', 'petermunene@example.com', 'munene123'),
(6, 'Janet Wangari', 'janetw', 'janetw@example.com', 'janetw456'),
(7, 'David Kimani', 'davidk', 'davidk@example.com', 'davidkim123'),
(8, 'Mercy Njeri', 'mercynj', 'mercynj@example.com', 'mercynj456'),
(9, 'Paul Ngugi', 'paulngugi', 'paulngugi@example.com', 'paul123'),
(10, 'Esther Wambui', 'estherw', 'estherw@example.com', 'esther456');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `task_name`, `task_date`) VALUES
(1, 1, 'Harvest Wheat Field', '2024-04-15'),
(2, 1, 'Plant Corn Seeds', '2024-04-16'),
(3, 1, 'Repair Tractor', '2024-04-17'),
(4, 2, 'Fertilize Soybean Crop', '2024-04-18'),
(5, 2, 'Water Tomato Plants', '2024-04-19'),
(6, 2, 'Check Chicken Coop', '2024-04-20'),
(7, 3, 'Harvest Potato Field', '2024-04-21'),
(8, 3, 'Prune Apple Trees', '2024-04-22'),
(9, 3, 'Feed Cows', '2024-04-23'),
(10, 4, 'Repair Irrigation System', '2024-04-24'),
(11, 4, 'Plant Pumpkin Patch', '2024-04-25'),
(12, 4, 'Check Beehives', '2024-04-26'),
(13, 5, 'Harvest Strawberry Field', '2024-04-27'),
(14, 5, 'Repair Barn Roof', '2024-04-28'),
(15, 5, 'Plant Sunflower Seeds', '2024-04-29'),
(16, 6, 'Feed Pigs', '2024-04-30'),
(17, 6, 'Check Grapevines', '2024-05-01'),
(18, 6, 'Harvest Carrot Patch', '2024-05-02'),
(19, 7, 'Plant Lettuce Seeds', '2024-05-03'),
(20, 7, 'Fertilize Pumpkin Patch', '2024-05-04'),
(21, 7, 'Check Sheep Herd', '2024-05-05'),
(22, 8, 'Repair Fence', '2024-05-06'),
(23, 8, 'Plant Watermelon Seeds', '2024-05-07'),
(24, 8, 'Check Tomato Plants', '2024-05-08'),
(25, 9, 'Harvest Corn Field', '2024-05-09'),
(26, 9, 'Prune Grapevines', '2024-05-10'),
(27, 9, 'Feed Horses', '2024-05-11'),
(28, 10, 'Plant Strawberry Patch', '2024-05-12'),
(29, 10, 'Fertilize Apple Trees', '2024-05-13'),
(30, 10, 'Check Pumpkin Patch', '2024-05-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livestock_and_poultry`
--
ALTER TABLE `livestock_and_poultry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `livestock_and_poultry`
--
ALTER TABLE `livestock_and_poultry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
