select nazwa as `stanowisko`, min(placa) as `min place`, max(placa) as `max place`, avg(placa) as `srednia plac` 
from pracownicy inner join stanowiska
on pracownicy.stanowisko_id = stanowiska.id
group by nazwa
order by `stanowisko` asc;