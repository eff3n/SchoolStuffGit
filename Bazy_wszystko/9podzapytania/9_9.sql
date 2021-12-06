select grupa, avg(cena) as srednia
from towary group by grupa;

select t1.id, t1.nazwa, t1.cena, t1.grupa, t2.srednia
from towary t1 inner join
(select grupa, avg(cena) as srednia
from towary group by grupa
) t2 on t1.grupa = t2.grupa;


select t1.id, t1.nazwa, t1.cena, t1.grupa
from towary t1 inner join
(select grupa, avg(cena) as srednia
from towary group by grupa
) t2 on t1.grupa = t2.grupa
where t1.cena > t2.srednia
order by t1.cena;






