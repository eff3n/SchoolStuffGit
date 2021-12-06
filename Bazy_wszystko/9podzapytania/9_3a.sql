select towar_id, nazwa from zamowienia, towary 
where wartosc = (select min(wartosc) from zamowienia) 
and towary.id = zamowienia.towar_id;