select produkty.id, produky.nazwa, kategorie.id, kategorie.nazwa from 
produkty inner join kategorie 
on produkty.kategoria_id = kategorie.id;