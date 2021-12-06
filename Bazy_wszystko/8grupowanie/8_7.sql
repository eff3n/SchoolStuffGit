select imie as `imie`, count(imie) as `liczba imion` 
from pracownicy 
group by imie
order by imie;