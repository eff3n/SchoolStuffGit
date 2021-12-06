select nazwa as `stanowisko`, count(*) as `liczba pracownikow` 
from pracownicy inner join stanowiska
on pracownicy.stanowisko_id = stanowiska.id
group by nazwa
order by `liczba pracownikow`;