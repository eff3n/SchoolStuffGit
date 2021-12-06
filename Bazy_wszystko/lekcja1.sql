create table pracownicy2 (id integer primary key auto_increment, imie varchar(20) not null, nazwisko varchar(30) not null, 
                          placa decimal(7,2) not null, stanowisko varchar(11), pesel char(11));
insert into pracownicy2 (imie, nazwisko, placa, stanowisko, pesel) 
values ('Adam', 'Kowalski', 1624.50, 'magazynier', '78945612396'), 
('Adam', 'Nowak', 3760.50, 'kierownik', '65478932147'),
('Andrzej', 'Kowalski', 4200.50, 'kierownik', '39852147896'),
('Arkadiusz', 'Maliniwski', 1600.50, 'kierowca', '85214796324'),
('Andrzej', 'Maliniwski', 1450.50, 'sprzedawca', null),
('Krzysztof', 'Nowicki', 1300.50, 'sprzedawca', null),
('Kacper', 'Adamczyk', 1610.50, 'serwisant', '65478932145'),
('Kamil', 'Andrzejczak', 1200.50, 'asystent', null),
('Krzysztof', 'Arkuszewski', 1500.50, 'magazynier', '3579514658'),
('Kamil', 'Boroeski', 1600.50, 'sprzedawca', '35412365897');

