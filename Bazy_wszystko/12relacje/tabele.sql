drop database relacje;

create database relacje;

use relacje;

create table pracownicy 
	(id integer primary key,
	imie varchar(20) not null,
	nazwisko varchar(30) not null, 
	placa decimal(7,2) not null, 
	stanowisko_id integer,
	pesel char(11));

insert into pracownicy (id, imie, nazwisko, placa, stanowisko_id, pesel) 
values 
(1, 'Adam', 'Kowalski', 1624.50, 1, '78945612396'), 

(2, 'Adam', 'Nowak', 3760.50, 2, '65478932147'),

(3, 'Andrzej', 'Kowalski', 4200.50, 2, '39852147896'),

(4, 'Arkadiusz', 'Maliniwski', 1600.50, 4, '85214796324'),

(5, 'Andrzej', 'Maliniwski', 1450.50, 3, null),

(6, 'Krzysztof', 'Nowicki', 1300.50, 3, null),

(7, 'Kacper', 'Adamczyk', 1610.50, 6, '65478932145'),

(8, 'Kamil', 'Andrzejczak', 1200.50, 5, null),

(9, 'Krzysztof', 'Arkuszewski', 1500.50, 1,  '3579514658'),

(10, 'Kamil', 'Boroeski', 1600.50, 3, '35412365897');

select * from pracownicy;

create table stanowiska 
	(
	id integer primary key,
 	nazwa varchar(20) not null
	);

insert into stanowiska (id, nazwa) 
values 
(1, 'magazynier'),
(2, 'kierownik'), 
(3, 'sprzedawca'), 
(4, 'kierowca'), 
(5, 'asystent'), 
(6, 'serwisant');

select * from stanowiska;