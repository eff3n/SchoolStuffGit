select produkty.id, produkty.nazwa, kategorie.id, kategorie.nazwa from 
produkty inner join kategorie 
on produkty.kategoria_id = kategorie.id;