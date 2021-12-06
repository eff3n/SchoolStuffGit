drop database baza_dyrektor1;

create database baza_dyrektor1;

use baza_dyrektor1;

grant all on baza_dyrektor1.* to 'dyrektor1'@'localhost' identified by 'baza1';


create table tabela_dyrektor1 
	(
	id integer primary key auto_increment,
	imie varchar(30) not null,
	nazwisko varchar(30) not null, 
	telefon varchar(11) not null
	);

insert into tabela_dyrektor1 (id, imie, nazwisko, telefon) 
values 
(1, 'Adam', 'Kowalski', '789456123'), 

(2, 'Adam', 'Nowak', '654789321'),

(3, 'Andrzej', 'Kowalski', '398521478'),

(4, 'Arkadiusz', 'Maliniwski', '852147963'),

(5, 'Andrzej', 'Maliniwski', '569874236'),

(6, 'Krzysztof', 'Nowicki', '587369458'),

(7, 'Kacper', 'Adamczyk', '654789321'),

(8, 'Kamil', 'Andrzejczak', '789632546'),

(9, 'Krzysztof', 'Arkuszewski', '357951465'),

(10, 'Kamil', 'Boroeski', '354123658');

select * from tabela_dyrektor1;

