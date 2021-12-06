drop table zam_tymczas;

create table zam_tymczas
(
imie varchar(20),
nazwisko varchar(30),
wartosc decimal(7, 2)
);

insert into tabela (kolumny)
(
select kolumny_podzapytania
from tabele_podzapytania
where warunki_podzapytania
);