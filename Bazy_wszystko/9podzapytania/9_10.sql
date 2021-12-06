select z.id, k.imie, k.nazwisko, z.wartosc, z.data
from
klienci k inner join zamowienia z on k.id = z.klient_id
inner join 
(
select klient_id, avg(wartosc) as srednia
from zamowienia z
group by klient_id
)
s on s.klient_id = z.klient_id
where z.wartosc < s.srednia
order by k.nazwisko, z.id;





