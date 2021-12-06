drop database baza_rtv;

create database baza_rtv;

grant all on baza_rtv.* to 'rtv'@'localhost' identified by 'rtv';

use baza_rtv;

create table tabela_rtv
	(
	nr integer primary key auto_increment,
	producent varchar(30) not null,
	technologia varchar(30) not null, 
	cena varchar(11) not null
	);

insert tabela_rtv (nr, producent, technologia, cena) 
values 
(1, 'Samsung', 'LCD', '1500.53'), 

(2, 'Panasonic', 'LED', '1650.60'),

(3, 'LG', 'PLAZMA', '1385.43');

select * from tabela_rtv;

