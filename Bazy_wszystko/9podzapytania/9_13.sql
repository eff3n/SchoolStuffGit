delete from zam_tymczas
where wartosc < 
(
select avg(wartosc)
from zamowienia
);