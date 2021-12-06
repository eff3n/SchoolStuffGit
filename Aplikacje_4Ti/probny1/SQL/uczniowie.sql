CREATE DATABASE Szkola;


CREATE TABLE uczniowie ( 
id_ucz int(11) NOT NULL PRIMARY KEY, 
Nazwisko varchar(30) NOT NULL, 
Imię varchar(30) NOT NULL, 
PESEL char(11) NOT NULL, 
Adres_ul varchar(30) NOT NULL, 
Adres_nr varchar(30) NOT NULL, 
Miasto varchar(30) NOT NULL);


INSERT INTO uczniowie (`id_ucz`, `Nazwisko`, `Imię`, `PESEL`, `Adres_ul`, `Adres_nr`, `Miasto`) 
VALUES 
(1, 'Abacki', 'Jan', '95091202012', 'Nocna', '21a', 'Gniezno'), 
(2, 'Babacki', 'Tomasz', '96100102013', 'Gwiezdna', '2', 'Gniezno'), 
(3, 'Cabacki', 'Jerzy', '95110902056', 'Mierna', '13b', 'Kutno'), 
(4, 'Dabacki', 'Tobiasz', '94010398345', 'Bierna', '3', 'Miastko'), 
(5, 'Ebacki', 'Adrian', '95010198934', 'Marna', '456', 'Mielno');



SELECT * FROM `uczniowie`;