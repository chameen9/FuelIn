-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 05:56 PM
-- Server version: 8.0.32
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuelin`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_ID` int NOT NULL,
  `contact_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `national_identity_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_ID`, `contact_number`, `national_identity_number`, `address`, `updated_at`, `created_at`) VALUES
(5, '234234234', '234234', 'ASDASDAS', '2023-02-13', '2023-02-13'),
(6, '234234234', '234234', 'ASDASDAS', '2023-02-13', '2023-02-13'),
(7, '0772350923', '199955510000', 'A2, Galle', '2023-02-13', '2023-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` int NOT NULL,
  `filling_station_id` int DEFAULT NULL,
  `liters` double DEFAULT NULL,
  `Fuel_Type_ID` int DEFAULT NULL,
  `Fuel_Station_ID` int DEFAULT NULL,
  `ordered_date` datetime DEFAULT NULL,
  `expected_filling_time` datetime DEFAULT NULL,
  `actual_filling_time` datetime DEFAULT NULL,
  `driver_id` int DEFAULT NULL,
  `order_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_status`
--

CREATE TABLE `delivery_status` (
  `status_id` int NOT NULL,
  `delivery_id` int NOT NULL,
  `current_location` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `progress_value` int DEFAULT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_status`
--

INSERT INTO `delivery_status` (`status_id`, `delivery_id`, `current_location`, `progress_value`, `status`) VALUES
(1, 1, 'Panadura', 50, 'In Transist');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int NOT NULL,
  `first_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `driver_license_number` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `first_name`, `last_name`, `driver_license_number`, `phone_number`, `address`, `date_of_birth`, `created_at`, `updated_at`) VALUES
(1, 'nje', 'asde', 'qwe', '234', 'asd', '2023-02-02', '2023-02-12', NULL),
(2, 'Samantha', 'Sumane', '200131403957', '0714017271', 'Wanduramba, Galle', '2023-02-15', '2023-02-15', '2023-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_quota`
--

CREATE TABLE `fuel_quota` (
  `Fuel_Quota_ID` int NOT NULL,
  `Vehicle_Type_ID` int DEFAULT NULL,
  `liters_amount` int NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `fuel_reset_day` enum('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Monday'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fuel_quota`
--

INSERT INTO `fuel_quota` (`Fuel_Quota_ID`, `Vehicle_Type_ID`, `liters_amount`, `created_at`, `updated_at`, `fuel_reset_day`) VALUES
(13, 8, 10, '2023-02-15', '2023-02-15', 'Thursday'),
(17, 11, 15, '2023-02-15', '2023-02-15', 'Monday');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_request`
--

CREATE TABLE `fuel_request` (
  `Fuel_Request_ID` int NOT NULL,
  `Customer_ID` int DEFAULT NULL,
  `Vehicle_Registration_Number` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Fuel_Type_ID` int DEFAULT NULL,
  `Requested_Liters` double DEFAULT NULL,
  `Scheduled_Filling_Date` date DEFAULT NULL,
  `Scheduled_Filling_Time` time DEFAULT NULL,
  `Tolerance_Hours` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fuel_stations`
--

CREATE TABLE `fuel_stations` (
  `Fuel_Station_ID` int NOT NULL,
  `Fuel_Station_Name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Fuel_Station_Location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Scheduled_Delivery_Date` date DEFAULT NULL,
  `Scheduled_Delivery_Time` time DEFAULT NULL,
  `Population_density` int DEFAULT NULL,
  `owner_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fuel_stations`
--

INSERT INTO `fuel_stations` (`Fuel_Station_ID`, `Fuel_Station_Name`, `Fuel_Station_Location`, `Scheduled_Delivery_Date`, `Scheduled_Delivery_Time`, `Population_density`, `owner_id`) VALUES
(1, 'Max Center', 'Galle', '2023-02-10', '00:00:00', 10000, NULL),
(2, 'ABC Gas', 'Matara', '2023-02-11', '12:00:00', 15000, NULL),
(3, 'Shakthi', 'Hambantota', NULL, NULL, 12500, NULL),
(4, 'Hydra', 'Colombo', NULL, NULL, 35000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `fuel_stations_stock`
--

CREATE TABLE `fuel_stations_stock` (
  `Fuel_Station_Stock_ID` int NOT NULL,
  `Fuel_Station_ID` int DEFAULT NULL,
  `Fuel_Type_ID` int DEFAULT NULL,
  `Stock` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fuel_station_status`
--

CREATE TABLE `fuel_station_status` (
  `Fuel_Station_ID` int NOT NULL,
  `Fuel_Station_Open` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fuel_type`
--

CREATE TABLE `fuel_type` (
  `Fuel_Type_ID` int NOT NULL,
  `Type_Name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fuel_type`
--

INSERT INTO `fuel_type` (`Fuel_Type_ID`, `Type_Name`, `Description`) VALUES
(1, 'Petrol 92', 'Petrol 92'),
(2, 'Petrol 95', 'Petrol 95'),
(3, 'Auto Diesel', 'Auto Diesel'),
(4, 'Super Diesel', '(LSD)');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `Fuel_Station_ID` int NOT NULL,
  `Fuel_Type_ID` int NOT NULL,
  `liters_quantity` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Approval_Status` enum('pending','approved','declined') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  `Approval_Date` datetime DEFAULT NULL,
  `Approval_By` int DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `Fuel_Station_ID`, `Fuel_Type_ID`, `liters_quantity`, `created_at`, `Approval_Status`, `Approval_Date`, `Approval_By`, `updated_at`) VALUES
(2, 4, 1, 7867, '2023-02-14 12:29:31', 'pending', NULL, NULL, '2023-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_ID` int NOT NULL,
  `Delivery_ID` int DEFAULT NULL,
  `Payment_Date` date DEFAULT NULL,
  `Payment_Time` time DEFAULT NULL,
  `Payment_Status_ID` int DEFAULT NULL,
  `Amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_status`
--

CREATE TABLE `payment_status` (
  `Payment_Status_ID` int NOT NULL,
  `Payment_Status` enum('PENDING','PAID','FAILED','CANCELLED') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `Token_ID` int NOT NULL,
  `Customer_ID` int DEFAULT NULL,
  `Payment_Status_ID` int DEFAULT NULL,
  `Fuel_Type_ID` int DEFAULT NULL,
  `Liters` double DEFAULT NULL,
  `Scheduled_Filling_Time` time DEFAULT NULL,
  `Scheduled_Filling_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_type_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `user_type_id`, `created_at`, `updated_at`) VALUES
(1, 'Ashen', 'Ishanka', 'ashen@gmail.com', 'Ashen$321', 1, '2023-02-05 17:46:43', '2023-02-05 17:46:43'),
(2, 'chameen', 'sandeepa', 'chameen@gmail.com', 'chameen@119', 1, '2023-02-09 17:06:04', '2023-02-09 17:06:04'),
(4, 'manager', 'manager', 'manager@gmail.com', 'manager123', 4, '2023-02-10 06:47:43', '2023-02-10 06:47:43'),
(5, 'ASDASDA', 'SDASDASD', 'ashAASDdsASDen@gmail.com', '$2y$10$g1b4CuZm.0vmMmTzMubzM.15dSOk1wV2zNwV2sRfM3QzltAUgnyhy', 3, '2023-02-13 05:16:03', '2023-02-13 05:16:03'),
(6, 'ASDASDA', 'SDASDASD', 'ashAAasdSDdsASDen@gmail.com', '$2y$10$wVAzSbBkvIfY.88pBq0tJOccDk7ro5Eu2AKO/c.t7j6MTv7rqjn.O', 3, '2023-02-13 05:19:46', '2023-02-13 05:19:46'),
(7, 'Ashen ishanka', 'Costha', 'ashenishanka@gmail.com', 'Ashen$321', 3, '2023-02-13 06:01:25', '2023-02-13 11:33:02'),
(8, 'Samantha', 'Sumane', 'samanthasumane@fuelin.lk', '200131403957', 2, '2023-02-15 01:42:52', '2023-02-15 01:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int NOT NULL,
  `type` enum('end_customer','driver','petrol_station_manager','head_office_user') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'head_office_user', '2023-02-05 17:45:47', '2023-02-05 17:45:47'),
(2, 'driver', '2023-02-09 06:22:53', '2023-02-09 06:22:53'),
(3, 'end_customer', '2023-02-10 06:46:11', '2023-02-10 06:46:11'),
(4, 'petrol_station_manager', '2023-02-10 06:46:26', '2023-02-10 06:46:26');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int NOT NULL,
  `registration_number` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Customer_ID` int DEFAULT NULL,
  `Vehicle_Type_ID` int DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `registration_number`, `Customer_ID`, `Vehicle_Type_ID`, `updated_at`, `created_at`) VALUES
(4, 'asdas', 7, 8, '2023-02-14', '2023-02-14'),
(6, 'bjkbbjk', 7, 8, '2023-02-14', '2023-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `Vehicle_Type_ID` int NOT NULL,
  `Type_Name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`Vehicle_Type_ID`, `Type_Name`, `Description`, `updated_at`, `created_at`) VALUES
(8, 'SUV', 'Suv vehicle type', '2023-02-09', '2023-02-09'),
(11, 'Sedan', 'Sedan Vehicle', '2023-02-15', '2023-02-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD KEY `Customer_ID` (`Customer_ID`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery has` (`driver_id`),
  ADD KEY `delivery has fuel type` (`Fuel_Type_ID`),
  ADD KEY `delivery will go to` (`filling_station_id`),
  ADD KEY `delivery_related_to` (`order_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`),
  ADD UNIQUE KEY `driver_license_number` (`driver_license_number`);

--
-- Indexes for table `fuel_quota`
--
ALTER TABLE `fuel_quota`
  ADD PRIMARY KEY (`Fuel_Quota_ID`),
  ADD UNIQUE KEY `Vehicle_Type_ID` (`Vehicle_Type_ID`);

--
-- Indexes for table `fuel_request`
--
ALTER TABLE `fuel_request`
  ADD PRIMARY KEY (`Fuel_Request_ID`),
  ADD KEY `Fuel_Type_ID` (`Fuel_Type_ID`),
  ADD KEY `fuel_request_ibfk_1` (`Customer_ID`);

--
-- Indexes for table `fuel_stations`
--
ALTER TABLE `fuel_stations`
  ADD PRIMARY KEY (`Fuel_Station_ID`);

--
-- Indexes for table `fuel_stations_stock`
--
ALTER TABLE `fuel_stations_stock`
  ADD PRIMARY KEY (`Fuel_Station_Stock_ID`),
  ADD KEY `Fuel_Type_ID` (`Fuel_Type_ID`),
  ADD KEY `fuel_stations_stock_ibfk_1` (`Fuel_Station_ID`);

--
-- Indexes for table `fuel_station_status`
--
ALTER TABLE `fuel_station_status`
  ADD PRIMARY KEY (`Fuel_Station_ID`);

--
-- Indexes for table `fuel_type`
--
ALTER TABLE `fuel_type`
  ADD PRIMARY KEY (`Fuel_Type_ID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `approved by` (`Approval_By`),
  ADD KEY `has fuel type` (`Fuel_Type_ID`),
  ADD KEY `has fuel station` (`Fuel_Station_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_ID`),
  ADD KEY `Payment_Status_ID` (`Payment_Status_ID`),
  ADD KEY `Delivery_ID` (`Delivery_ID`);

--
-- Indexes for table `payment_status`
--
ALTER TABLE `payment_status`
  ADD PRIMARY KEY (`Payment_Status_ID`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`Token_ID`),
  ADD KEY `Fuel_Type_ID` (`Fuel_Type_ID`),
  ADD KEY `Payment_Status_ID` (`Payment_Status_ID`),
  ADD KEY `Customer_ID` (`Customer_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `user_type_id` (`user_type_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registration_number` (`registration_number`),
  ADD KEY `vehicles_ibfk_1` (`Vehicle_Type_ID`),
  ADD KEY `vehicles_ibfk_2` (`Customer_ID`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`Vehicle_Type_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fuel_quota`
--
ALTER TABLE `fuel_quota`
  MODIFY `Fuel_Quota_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `fuel_request`
--
ALTER TABLE `fuel_request`
  MODIFY `Fuel_Request_ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fuel_stations`
--
ALTER TABLE `fuel_stations`
  MODIFY `Fuel_Station_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_status`
--
ALTER TABLE `payment_status`
  MODIFY `Payment_Status_ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `Vehicle_Type_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `users` (`id`);

--
-- Constraints for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD CONSTRAINT `delivery has` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`),
  ADD CONSTRAINT `delivery has fuel type` FOREIGN KEY (`Fuel_Type_ID`) REFERENCES `fuel_type` (`Fuel_Type_ID`),
  ADD CONSTRAINT `delivery will go to` FOREIGN KEY (`filling_station_id`) REFERENCES `fuel_stations` (`Fuel_Station_ID`),
  ADD CONSTRAINT `delivery_related_to` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `fuel_quota`
--
ALTER TABLE `fuel_quota`
  ADD CONSTRAINT `fuel_quota_ibfk_1` FOREIGN KEY (`Vehicle_Type_ID`) REFERENCES `vehicle_type` (`Vehicle_Type_ID`);

--
-- Constraints for table `fuel_request`
--
ALTER TABLE `fuel_request`
  ADD CONSTRAINT `fuel_request_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `fuel_stations` (`Fuel_Station_ID`),
  ADD CONSTRAINT `fuel_request_ibfk_2` FOREIGN KEY (`Fuel_Type_ID`) REFERENCES `fuel_type` (`Fuel_Type_ID`);

--
-- Constraints for table `fuel_stations_stock`
--
ALTER TABLE `fuel_stations_stock`
  ADD CONSTRAINT `fuel_stations_stock_ibfk_1` FOREIGN KEY (`Fuel_Station_ID`) REFERENCES `fuel_stations` (`Fuel_Station_ID`),
  ADD CONSTRAINT `fuel_stations_stock_ibfk_2` FOREIGN KEY (`Fuel_Type_ID`) REFERENCES `fuel_type` (`Fuel_Type_ID`);

--
-- Constraints for table `fuel_station_status`
--
ALTER TABLE `fuel_station_status`
  ADD CONSTRAINT `fuel_station_status_ibfk_1` FOREIGN KEY (`Fuel_Station_ID`) REFERENCES `driver` (`driver_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `approved by` FOREIGN KEY (`Approval_By`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `has fuel station` FOREIGN KEY (`Fuel_Station_ID`) REFERENCES `fuel_stations` (`Fuel_Station_ID`),
  ADD CONSTRAINT `has fuel type` FOREIGN KEY (`Fuel_Type_ID`) REFERENCES `fuel_type` (`Fuel_Type_ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`Payment_Status_ID`) REFERENCES `payment_status` (`Payment_Status_ID`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`Delivery_ID`) REFERENCES `deliveries` (`id`);

--
-- Constraints for table `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT `tokens_ibfk_1` FOREIGN KEY (`Fuel_Type_ID`) REFERENCES `fuel_type` (`Fuel_Type_ID`),
  ADD CONSTRAINT `tokens_ibfk_2` FOREIGN KEY (`Payment_Status_ID`) REFERENCES `payment_status` (`Payment_Status_ID`),
  ADD CONSTRAINT `tokens_ibfk_3` FOREIGN KEY (`Customer_ID`) REFERENCES `customers` (`Customer_ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`id`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ibfk_1` FOREIGN KEY (`Vehicle_Type_ID`) REFERENCES `vehicle_type` (`Vehicle_Type_ID`),
  ADD CONSTRAINT `vehicles_ibfk_2` FOREIGN KEY (`Customer_ID`) REFERENCES `customers` (`Customer_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
