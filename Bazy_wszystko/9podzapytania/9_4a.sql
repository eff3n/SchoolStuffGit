select k.*, z.wartosc 
from klienci k, zamowienia z
where z.klient_id = k.id
and z.wartosc = (select max(wartosc) from zamowienia);

