drop database zadanie;
create database zadanie;
use zadanie;
drop table przyklad;
create table przyklad
(
	Nr INT Primary Key auto_increment,
	Nazwisko VARCHAR(30) NOT NULL,
	Imie VARCHAR(30) NOT NULL,
	Dzial VARCHAR(30) NOT NULL,
	Stanowisko VARCHAR(30) NOT NULL
);
SELECT * FROM przyklad;