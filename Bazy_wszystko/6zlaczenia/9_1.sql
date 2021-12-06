select imie, nazwisko, wartosc, data from
(select k.imie, k.nazwisko, z.*
from klienci k inner join zamowienia z
on k.id = z.klient_id) as klienci_zamowienia  
where wartosc > 15 order by wartosc;