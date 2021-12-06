drop database podzapytania357;

create database podzapytania357;

use podzapytania357;

create table klienci 
	(
	id integer primary key,
	imie varchar(30),
	nazwisko varchar(30)
	);

insert into klienci (id, imie, nazwisko) 
values 
(1, 'Jan', 'Kowalski'), 

(2, 'Andrzej', 'Nowak'),

(3, 'Janusz', 'Malinowski'),

(4, 'Adam', 'Kowalski'),

(5, 'Krzysztof', 'Nowicki');

select * from klienci;

create table towary 
	(
	id integer primary key,
 	nazwa varchar(20) not null,
	grupa integer,
	cena decimal(7, 2)
	);

insert into towary (id, nazwa, grupa, cena) 
values 
(1, 'sruby', 1, 2.00),
(2, 'nakretki', 1, 3.00), 
(3, 'katowniki', 2, 8.00), 
(4, 'plaskowniki', 2, 9.00), 
(5, 'gwozdzie', 1, 1.00), 
(6, 'panele', 3, 15.00);

select * from towary;

create table zamowienia 
	(
	id integer primary key,
 	klient_id integer,
	towar_id integer,
	data date,
	wartosc decimal(7, 2)
	);

insert into zamowienia (id, klient_id, towar_id, data, wartosc) 
values 
(1, 1, 2, '2015-01-01', 12.44),
(2, 1, 4, '2015-01-01', 10.22), 
(3, 1, 2, '2015-02-12', 15.88), 
(4, 2, 1, '2015-01-01', 22.35), 
(5, 2, 1, '2015-02-12', 28.00), 
(6, 2, 4, '2015-03-01', 2.28),
(7, 3, 1, '2015-02-11', 18.48),
(8, 3, 4, '2015-01-01', 12.44),
(9, 4, 3, '2015-03-11', 15.26),
(10, 5, 4, '2015-03-02', 6.11);

select * from zamowienia;