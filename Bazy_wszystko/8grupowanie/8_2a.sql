select nazwa as "stanowisko", avg(placa) as "srednia plac" 
from pracownicy, stanowiska
where pracownicy.stanowisko_id = stanowiska.id
group by nazwa;