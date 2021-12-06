create table stanowiska 
	(
	id integer primary key auto_increment,
 	nazwa varchar(20) not null
	);

insert into stanowiska (id, nazwa) 
values 
(1, 'magazynier'),
(2, 'kierownik'), 
(3, 'sprzedawca'), 
(4, 'kierowca'), 
(5, 'asystent'), 
(6, 'serwisant');

select * from stanowiska;