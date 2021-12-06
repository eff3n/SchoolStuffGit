drop database relacje;

create database relacje;

use relacje;

create table stanowiska 
	(
	id integer primary key,
 	nazwa varchar(20) not null
	);

create table pracownicy 
	(
	id integer primary key,
	imie varchar(20) not null,
	nazwisko varchar(30) not null, 
	placa decimal(7,2) not null, 
	stanowisko_id integer,
	pesel char(11),
	constraint stanowiska_fk foreign key (stanowisko_id) references
	stanowiska(id)
	);







select * from pracownicy;
select * from stanowiska;