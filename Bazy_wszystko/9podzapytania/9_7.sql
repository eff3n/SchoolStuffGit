select id, nazwa, cena, grupa
from towary
where cena > 
	(select avg(cena)
	from towary as towary2
	where towary.grupa=towary2.grupa)
order by cena;  


