select nazwa as `stanowisko`, count(pracownicy.id) as `liczba pracownikow` 
from pracownicy right join stanowiska
on pracownicy.stanowisko_id = stanowiska.id
group by nazwa
order by `liczba pracownikow`;