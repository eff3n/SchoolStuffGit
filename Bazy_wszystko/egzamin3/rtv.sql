drop database baza_rtv;

create database baza_rtv;

use baza_rtv;

create table tabela_rtv (nr int auto_increment primary key, producent varchar(10), technologia varchar(10), cena decimal (6,3));

insert into tabela_rtv (producent, technologia, cena) values 
('Samsung', 'LCD', '1500.53'), ('Panasonic', 'LED', '1650.60'), ('LG','PLAZMA', '1385.43');


grant all on baza_rtv.* to 'rtv'@'localhost' identified by 'rtv';

