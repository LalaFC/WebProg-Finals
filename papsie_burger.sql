-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 03:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `papsie_burger`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_list`
--

CREATE TABLE `cart_list` (
  `Cart_ID` int(7) NOT NULL,
  `User_ID` int(7) NOT NULL,
  `Product_ID` int(7) NOT NULL,
  `Quantity` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_id`
--

CREATE TABLE `employee_id` (
  `Employee_ID` int(7) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Age` int(3) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact_Number` varchar(13) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_id`
--

INSERT INTO `employee_id` (`Employee_ID`, `First_Name`, `Last_Name`, `Age`, `Email`, `Contact_Number`, `Address`, `Position`) VALUES
(1, 'Donny', 'Bernardo', 26, 'don.b@yahoo.com', '+639162531986', 'Quezon City', 'Courier');

-- --------------------------------------------------------

--
-- Table structure for table `orders_list`
--

CREATE TABLE `orders_list` (
  `Order_ID` int(7) NOT NULL,
  `User_ID` int(7) NOT NULL,
  `Product_ID` int(7) NOT NULL,
  `Quantity` int(7) NOT NULL,
  `Date_Time` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `Courier_ID` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `Product_ID` int(7) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(7) NOT NULL,
  `Image` varchar(20) NOT NULL,
  `Product_Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`Product_ID`, `Product_Name`, `Description`, `Price`, `Quantity`, `Image`, `Product_Type`) VALUES
(1, 'Original Burger', 'Round buns filled with coleslaw, cucumber and our special beef patty mixed with 13 secret ingredients.', 15, 10, 'ogburger.jpg', 'Burger'),
(2, 'Cheesy Burger', 'Original burger with additional cheese slice', 20, 10, 'cburger.jpg', 'Burger'),
(3, 'Footlong', '12-inch hotdog bun with coleslaw and lots of shredded cheese', 30, 10, 'flong.jpg', 'Hotdog'),
(4, 'Half-long', '6-inch hotdog bun with coleslaw and lots of shredded cheese', 15, 10, 'hlong.jpg', 'Hotdog'),
(5, 'Flavored Fries (Cheese)', 'Fried potato strips coated with powdered cheese flavor.', 15, 10, 'cfries.jpg', 'Snack'),
(6, 'Tacos', 'Crispy taco shell filled with ground beef, cabbage, tomato, onion, special mayo sauce and lots of shredded cheese.', 25, 10, 'taco.jpg', 'Snack');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(10) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact_Number` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `First_Name`, `Last_Name`, `Address`, `Password`, `Email`, `Contact_Number`) VALUES
(1, 'Angelik', 'Operio', 'Pasig City', 'Abcde#01', 'angelik.operio@ciit.edu.ph', '+639452531945');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_list`
--
ALTER TABLE `cart_list`
  ADD PRIMARY KEY (`Cart_ID`),
  ADD KEY `User_ID` (`User_ID`,`Product_ID`),
  ADD KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `employee_id`
--
ALTER TABLE `employee_id`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `orders_list`
--
ALTER TABLE `orders_list`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Product_ID` (`Product_ID`,`Courier_ID`),
  ADD KEY `Courier_ID` (`Courier_ID`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_list`
--
ALTER TABLE `cart_list`
  MODIFY `Cart_ID` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_id`
--
ALTER TABLE `employee_id`
  MODIFY `Employee_ID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders_list`
--
ALTER TABLE `orders_list`
  MODIFY `Order_ID` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `Product_ID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_list`
--
ALTER TABLE `cart_list`
  ADD CONSTRAINT `cart_list_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `product_list` (`Product_ID`),
  ADD CONSTRAINT `cart_list_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `orders_list`
--
ALTER TABLE `orders_list`
  ADD CONSTRAINT `orders_list_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`),
  ADD CONSTRAINT `orders_list_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `product_list` (`Product_ID`),
  ADD CONSTRAINT `orders_list_ibfk_3` FOREIGN KEY (`Courier_ID`) REFERENCES `employee_id` (`Employee_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
