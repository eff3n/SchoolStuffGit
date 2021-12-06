-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Lis 2019, 21:18
-- Wersja serwera: 10.1.13-MariaDB
-- Wersja PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza_u_admin`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id` int(11) NOT NULL,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `placa` decimal(7,2) NOT NULL,
  `stanowisko_id` int(11) DEFAULT NULL,
  `pesel` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`id`, `imie`, `nazwisko`, `placa`, `stanowisko_id`, `pesel`) VALUES
(1, 'Adam', 'Kowalski', '1624.50', 1, '78945612396'),
(2, 'Adam', 'Nowak', '3760.50', 2, '65478932147'),
(3, 'Andrzej', 'Kowalski', '4200.50', 2, '39852147896'),
(4, 'Arkadiusz', 'Maliniwski', '1600.50', 4, '85214796324'),
(5, 'Andrzej', 'Maliniwski', '1450.50', 3, NULL),
(6, 'Krzysztof', 'Nowicki', '1300.50', 3, NULL),
(7, 'Kacper', 'Adamczyk', '2000.50', 6, '65478932145'),
(8, 'Kamil', 'Andrzejczak', '1200.50', 5, '888888888'),
(9, 'Krzysztof', 'Arkuszewski', '1500.50', 1, '3579514658'),
(10, 'Kamil', 'Boroeski', '1600.50', 3, '35412365897'),
(11, 'imiexx', 'nazwiskoxx', '4000.00', 3, '123456789'),
(12, 'kl', 'po', '3214.00', 5, '963258741');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `stanowiska`
--

CREATE TABLE `stanowiska` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `stanowiska`
--

INSERT INTO `stanowiska` (`id`, `nazwa`) VALUES
(1, 'magazynier'),
(2, 'kierownik'),
(3, 'sprzedawca'),
(4, 'kierowca'),
(5, 'asystent'),
(6, 'serwisant');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stanowiska`
--
ALTER TABLE `stanowiska`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
