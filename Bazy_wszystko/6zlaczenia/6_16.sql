select produkty.id as "Identyfikator produktu", produkty.nazwa as "Nazwa produktu", kategorie.id as "identyfikator kategorii", kategorie.nazwa as "nazwa kategorii" from 
produkty inner join kategorie 
on produkty.kategoria_id = kategorie.id;