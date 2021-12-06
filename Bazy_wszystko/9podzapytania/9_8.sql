select z.id, k.imie, k.nazwisko, z.wartosc, z.data
from klienci k inner join zamowienia z 
on k.id = z.klient_id
where z.wartosc < (
	select avg(wartosc)
	from zamowienia z2
	where z2.klient_id = z.klient_id
	)
	order by k.nazwisko, z.id;






