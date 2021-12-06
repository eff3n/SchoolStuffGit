select z.id, k.imie, k.nazwisko, t.nazwa, z.data, z.wartosc  
from zamowienia z inner join towary t no t.id = z.towar_id
	inner join klienci k on k.id = z.klient_id
where wartosc in 
(select max(wartosc) from zamowienia group by towar_id)
order by z.wartosc;


