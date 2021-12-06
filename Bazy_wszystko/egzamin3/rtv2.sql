
drop database baza_rtv;
create database baza_rtv;
use baza_rtv;
grant all on baza_rtv.* to 'rtv'@'localhost' identified by 'rtv';
create table tabela_rtv (nr int primary key auto_increment, producent varchar(20), technologia varchar(20), cena varchar(20));
insert into tabela_rtv (producent, technologia, cena) values ('Samsung','LCD','1500.53'), ('Panasonic','LED','1650.60'), ('LG','PLAZMA','1385.43');