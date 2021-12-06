create view pracownicy_nazwiskaimiona (id, pracownik, stanowisko)
as
select p.id, concat(p.imie,'',p.nazwisko), s.nazwa 
from pracownicy p inner join stanowiska s
on p.stanowisko_id = s.id;