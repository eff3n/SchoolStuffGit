select p.id as "Identyfikator produktu", p.nazwa as "Nazwa produktu", k.id as "identyfikator kategorii", k.nazwa as "nazwa kategorii" from 
produkty as p inner join kategorie as k 
on p.kategoria_id = k.id;