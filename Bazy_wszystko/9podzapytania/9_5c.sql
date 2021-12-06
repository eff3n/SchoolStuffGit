select z.id, k.imie, k.nazwisko, z.wartosc, z.data, s.srednia 
from (klienci k inner join zamowienia z on k.id = z.klient_id)
cross join (select avg(wartosc) as srednia from zamowienia) s
where z.wartosc > s.srednia;

