-- IT0049 - Technical Formative Assessment 2
-- Database: it0049_pos
-- POS Foundations: From Arrays to a Real Database

CREATE DATABASE IF NOT EXISTS `it0049_pos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `it0049_pos`;

-- --------------------------------------------------------
-- Table structure for table `customers`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `full_name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `phone` VARCHAR(20),
    `created_at` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Seed data for table `customers` (6 sample records)
-- --------------------------------------------------------

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
(1, 'Eleanor Vance', 'eleanor.vance@example.com', '+1 (555) 234-5678', '2026-09-01 08:30:00'),
(2, 'Marcus Thorne', 'marcus.thorne@example.com', '+1 (555) 345-6789', '2026-09-02 09:15:00'),
(3, 'Sophia Sterling', 'sophia.sterling@example.com', '+1 (555) 456-7890', '2026-09-03 10:45:00'),
(4, 'Lucas Gallagher', 'lucas.gallagher@example.com', '+1 (555) 567-8901', '2026-09-04 11:20:00'),
(5, 'Clara Delgado', 'clara.delgado@example.com', '+1 (555) 678-9012', '2026-09-05 14:00:00'),
(6, 'Julian Hayes', 'julian.hayes@example.com', '+1 (555) 789-0123', '2026-09-06 16:30:00');

-- --------------------------------------------------------
-- Table structure for table `users`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `full_name` VARCHAR(100) NOT NULL,
    `created_at` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Seed data for table `users` (6 sample records)
-- --------------------------------------------------------

INSERT INTO `users` (`id`, `username`, `full_name`, `created_at`) VALUES
(1, 'clara.delgado', 'Clara Delgado', '2026-08-15 08:00:00'),
(2, 'marcus.thorne', 'Marcus Thorne', '2026-08-16 09:00:00'),
(3, 'eleanor.vance', 'Eleanor Vance', '2026-08-17 10:00:00'),
(4, 'lucas.gallagher', 'Lucas Gallagher', '2026-08-18 11:00:00'),
(5, 'sophia.sterling', 'Sophia Sterling', '2026-08-19 13:00:00'),
(6, 'julian.hayes', 'Julian Hayes', '2026-08-20 15:00:00');
