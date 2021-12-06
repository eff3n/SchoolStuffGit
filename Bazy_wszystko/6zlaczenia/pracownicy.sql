create table pracownicy 
	(id integer primary key auto_increment,
	imie varchar(20) not null,
	nazwisko varchar(30) not null, 
	placa decimal(7,2) not null, 
	stanowisko_id integer,
	pesel char(11));

insert into pracownicy (imie, nazwisko, placa, stanowisko_id, pesel) 
values 
('Adam', 'Kowalski', 1624.50, 1, '78945612396'), 

('Adam', 'Nowak', 3760.50, 2, '65478932147'),

('Andrzej', 'Kowalski', 4200.50, 2, '39852147896'),

('Arkadiusz', 'Maliniwski', 1600.50, 4, '85214796324'),

('Andrzej', 'Maliniwski', 1450.50, 3, null),

('Krzysztof', 'Nowicki', 1300.50, 3, null),

('Kacper', 'Adamczyk', 1610.50, 6, '65478932145'),

('Kamil', 'Andrzejczak', 1200.50, 5, null),

('Krzysztof', 'Arkuszewski', 1500.50, 1,  '3579514658'),

('Kamil', 'Boroeski', 1600.50, 3, '35412365897');

select * from pracownicy;