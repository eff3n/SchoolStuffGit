select imie, nazwisko, nazwa, placa from 
pracownicy left outer join stanowiska 
on pracownicy.stanowisko_id = stanowiska.id
where nazwa is null;