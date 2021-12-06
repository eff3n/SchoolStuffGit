select nazwa as `stanowisko`, avg(placa) as `srednia plac` 
from pracownicy inner join stanowiska
on pracownicy.stanowisko_id = stanowiska.id
where pracownicy.pesel is not null
group by nazwa
order by `srednia plac`;