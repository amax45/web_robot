-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Čtv 17. lis 2022, 14:33
-- Verze serveru: 10.4.24-MariaDB
-- Verze PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `web`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `jmeno` text NOT NULL,
  `predmet` text NOT NULL,
  `prumer` decimal(11,0) NOT NULL,
  `datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`ID`, `jmeno`, `predmet`, `prumer`, `datum`) VALUES
(1, 'Alex', 'SOS', '2', '2022-01-09'),
(2, 'Alex', 'AKR', '2', '2022-01-11'),
(3, 'Alex', 'ICT', '1', '2022-01-09'),
(4, 'Alex', 'TIN', '3', '2022-02-01'),
(5, 'Alex', 'MAT', '3', '2022-02-12'),
(6, 'Alex', 'PST', '4', '2022-02-23'),
(7, 'Alex', 'POS', '2', '2021-05-06'),
(8, 'Alex', 'FYZ', '3', '2021-05-12'),
(9, 'Alex', 'ZKR', '1', '2021-05-11'),
(10, 'Alex', 'EK1', '1', '2021-05-29'),
(33, 'Petr', 'SOS', '2', '2022-05-02'),
(35, 'Petr', 'AKR', '2', '2022-05-18'),
(36, 'Alex', 'FYS', '1', '2022-05-01'),
(37, 'Alex', 'AIT', '1', '2022-11-17'),
(38, 'Matěj', 'MDS', '1', '2022-10-17');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
