insert into zam_tymczas(imie, nazwisko, wartosc)
select imie, nazwisko, wartosc
from klienci, zamowienia
where klienci.id = zamowienia.klient_id;


INSERT INTO zam_tymczas3 (imie, nazwisko, wartosc) 
SELECT imie, nazwisko, SUM(wartosc) AS wartosc 
FROM klienci INNER JOIN zamowienia 
ON klienci.id=zamowienia.klient_id GROUP BY klient_id 