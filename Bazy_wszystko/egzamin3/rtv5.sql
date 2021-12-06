drop database baza_rtv;
create database baza_rtv;
use baza_rtv;

CREATE TABLE IF NOT EXISTS `tabela_rtv` (
  `nr` int(11) NOT NULL,
  `producent` varchar(30) NOT NULL,
  `technologia` varchar(30) NOT NULL,
  `cena` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `tabela_rtv` (`nr`, `producent`, `technologia`, `cena`) VALUES
(1, 'Samsung', 'LCD', '1500.53'),
(2, 'Panasonic', 'LED', '1650.60'),
(3, 'LG', 'PLAZMA', '1385.43');

ALTER TABLE `tabela_rtv`
  ADD PRIMARY KEY (`nr`);

ALTER TABLE `tabela_rtv`
  MODIFY `nr` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;