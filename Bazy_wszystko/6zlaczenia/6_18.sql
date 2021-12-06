select p.id as "id produktu", p.nazwa as "Nazwa produktu", kategoria_id as "id kategorii", k.nazwa as "nazwa kategorii" from 
produkty p inner join kategorie k using(kategoria_id);