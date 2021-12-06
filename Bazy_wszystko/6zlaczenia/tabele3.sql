drop database zlaczenie3;

create database zlaczenie3;

use zlaczenie3;

create table produkty 
	(id integer primary key not null,
	kategoria_id integer not null,
	nazwa varchar(50));

insert into produkty (id, kategoria_id, nazwa) 
values 
(1, 1, 'pralka'), 

(2, 2, 'telewizor'),

(3, 2, 'kamera');

select * from produkty;

create table kategorie 
	(
	id integer primary key not null,
 	nazwa varchar(50)
	);

insert into kategorie (id, nazwa) 
values 
(1, 'agd'),
(2, 'rtv');

select * from kategorie;