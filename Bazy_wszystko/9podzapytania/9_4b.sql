select k.*, z.wartosc 
from klienci k inner join zamowienia z
on z.klient_id = k.id
where z.wartosc = (select max(wartosc) from zamowienia);

