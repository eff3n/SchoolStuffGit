select z.id, k.imie, k.nazwisko, t.nazwa, z.data, z.wartosc
from zamowienia z, towary t, klienci k
where wartosc in
(select max(wartosc) from zamowienia group by towar_id)
and t.id = z.towar_id
and k.id = z.klient_id
order by z.wartosc;

