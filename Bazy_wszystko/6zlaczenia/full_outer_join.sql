SELECT pracownicy.id, pracownicy.imie, pracownicy.nazwisko, stanowiska.nazwa 
FROM pracownicy LEFT OUTER JOIN stanowiska 
ON pracownicy.stanowisko_id=stanowiska.id 

UNION 

SELECT pracownicy.id, pracownicy.imie, pracownicy.nazwisko, stanowiska.nazwa 
FROM pracownicy RIGHT OUTER JOIN stanowiska 
ON pracownicy.stanowisko_id=stanowiska.id