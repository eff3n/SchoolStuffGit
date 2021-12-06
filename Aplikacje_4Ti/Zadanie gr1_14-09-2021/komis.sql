SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `samochody` (
  `id` int(11) NOT NULL,
  `marka` char(30) DEFAULT NULL,
  `model` char(30) DEFAULT NULL,
  `rocznik` year(4) DEFAULT NULL,
  `kolor` char(30) DEFAULT NULL,
  `stan` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `samochody` (`id`, `marka`, `model`, `rocznik`, `kolor`, `stan`) VALUES
(1, 'Fiat', 'Punto', 2016, 'czerwony', 'nowy'),
(2, 'Fiat', 'Punto', 2002, 'zielony', 'uzywany'),
(3, 'Fiat', 'Punto', 2007, 'fioletowy', 'uzywany'),
(4, 'Opel', 'Corsa', 2016, 'czarny', 'nowy'),
(5, 'Opel', 'Astra', 2003, 'bia?y', 'u?ywany'),
(6, 'Toyota', 'Corolla', 2016, 'szary', 'nowy'),
(7, 'Toyota', 'Corolla', 2014, 'szary', 'uzywany'),
(8, 'Toyota', 'Yaris', 2004, 'szary', 'uzywany');


CREATE TABLE `zamowienia` (
  `id` int(11) NOT NULL,
  `samochody_id` int(11) DEFAULT NULL,
  `Klient` char(30) DEFAULT NULL,
  `telefon` char(30) DEFAULT NULL,
  `dataZam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `zamowienia` (`id`, `samochody_id`, `Klient`, `telefon`, `dataZam`) VALUES
(1, 3, 'Kowalski', '123456789', 22),
(2, 6, 'Nowak', '987123456', 11),
(3, 8, 'Duda', '123123567', 55);


ALTER TABLE `samochody`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telefon` (`telefon`);
ALTER TABLE `samochody`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


ALTER TABLE `zamowienia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

