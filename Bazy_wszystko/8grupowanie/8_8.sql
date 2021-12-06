select nazwa as `stanowisko`, avg(placa) as `srednia plac` 
from pracownicy inner join stanowiska
on pracownicy.stanowisko_id = stanowiska.id
group by nazwa
having avg(placa)>1400
order by `srednia plac` desc;