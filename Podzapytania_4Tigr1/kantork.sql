-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Mar 2021, 07:21
-- Wersja serwera: 10.1.13-MariaDB
-- Wersja PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kantorkk`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `id` int(10) UNSIGNED NOT NULL,
  `imie` text,
  `nazwisko` text,
  `PESEL` text,
  `stanKonta` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `klient`
--

INSERT INTO `klient` (`id`, `imie`, `nazwisko`, `PESEL`, `stanKonta`) VALUES
(1, 'Jan', 'Nowak', '00000000000', 302),
(2, 'Anna', 'Kowalska', '00000000000', 540),
(3, 'Krzysztof', 'Kowalski', '00000000000', 700);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kurs`
--

CREATE TABLE `kurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwaWaluty` text,
  `kurs` double DEFAULT NULL,
  `dataKursu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `kurs`
--

INSERT INTO `kurs` (`id`, `nazwaWaluty`, `kurs`, `dataKursu`) VALUES
(1, 'dolar', 3.7, '2015-07-01'),
(2, 'euro', 4.2, '2015-07-01'),
(3, 'frank szwajcarski', 4, '2015-07-01');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wymiana`
--

CREATE TABLE `wymiana` (
  `id` int(10) UNSIGNED NOT NULL,
  `klientId` int(10) UNSIGNED DEFAULT NULL,
  `kursId` int(10) UNSIGNED DEFAULT NULL,
  `ile` double DEFAULT NULL,
  `dataWymiany` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `wymiana`
--

INSERT INTO `wymiana` (`id`, `klientId`, `kursId`, `ile`, `dataWymiany`) VALUES
(1, 1, 1, 20, '2015-07-16'),
(2, 2, 1, 30, '2015-07-07'),
(3, 2, 3, 10, '2015-07-14'),
(4, 3, 2, 10, '2015-07-14'),
(5, 1, 2, 40, '2015-07-17'),
(6, 1, 2, 40, '2015-07-17'),
(7, 1, 1, 10, '2015-07-17'),
(8, 1, 3, 14, '2015-07-17'),
(9, 2, 2, 30, '2015-07-17'),
(10, 2, 1, 15, '2015-07-17'),
(11, 2, 3, 10, '2015-07-17'),
(12, 3, 2, 30, '2015-07-17'),
(13, 3, 1, 15, '2015-07-17'),
(14, 3, 3, 50, '2015-07-17');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wymiana`
--
ALTER TABLE `wymiana`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klient`
--
ALTER TABLE `klient`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `kurs`
--
ALTER TABLE `kurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `wymiana`
--
ALTER TABLE `wymiana`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
