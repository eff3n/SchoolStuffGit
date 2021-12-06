insert into zam_tymczas(imie, nazwisko, wartosc)
select imie, nazwisko, sum(wartosc) as wartosc
from klienci, zamowienia
where klienci.id = zamowienia.klient_id
group by klient_id;