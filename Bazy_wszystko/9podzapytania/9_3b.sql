select towar_id, nazwa 
from zamowienia inner join towary
on towary.id = zamowienia.towar_id 
where wartosc = (select min(wartosc) from zamowienia);