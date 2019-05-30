-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: localhost:3306
-- Χρόνος δημιουργίας: 29 Μάη 2019 στις 23:20:00
-- Έκδοση διακομιστή: 10.3.14-MariaDB
-- Έκδοση PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `id9642978_project`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `contact`
--

INSERT INTO `contact` (`Name`, `email`, `text`) VALUES
('dasd', 'asdasda', ''),
('asdasd', 'dasdasd', ''),
('asdasd', 'asdasd', 'asdasd'),
('dfgdfg', 'dfgdfg', 'dfgdfgf'),
('gcfgf', 'fgfgfg', 'gfgfgf'),
('dadasdas12312', '31231231', '2312312321'),
('MALAKAS', 'kakatsa@kakatsa.com', 'NA FAS SKATA');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `quan` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `items`
--

INSERT INTO `items` (`id`, `name`, `image`, `price`, `quan`) VALUES
(1, 'black tshirt with logo', '1.jpg', 100.00, 20),
(2, 'black tshirt', '2.jpg', 100.00, 50),
(3, 'white tshirt', '3.jpg', 100.00, 48),
(4, 'CD 1 ', '4.jpg', 50.00, 2),
(5, 'CD 2 ', '5.jpg', 50.00, 0),
(6, 'CD 3 ', '6.jpg', 50.00, 50);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `firstname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(52) CHARACTER SET utf8 NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `password` varchar(254) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `email`, `phonenumber`, `password`) VALUES
('admin1', 'admin1', 'admin1@admin.com', '1111111112', 'admin1'),
('admin', 'admin', 'admin@admin.com', '2147483647', 'admin'),
('kakatsa', 'kakatsa', 'kakatsa@kakatsa.com', '6969696969', 'kakatsa'),
('dsadas', 'dfsafsd', 'malakopitouras@gamw.com', '65984875', 'mpa');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phonenumber` (`phonenumber`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;