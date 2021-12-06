drop database tranz;

create database tranz;

use tranz;

create table konta 
	(
	id integer primary key,
	id_osoby integer not null,
	saldo decimal(12,2) not null 
	);

insert into konta (id, id_osoby, saldo) 
values 
(1, 1, 120.20), 

(2, 2, 30.00);

select * from konta;

