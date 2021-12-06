select p.id as "id produktu", p.nazwa as "Nazwa produktu", kategoria_id as "id kategorii", k.nazwa_kategorii as "nazwa kategorii" from 
produkty p natural join kategorie k;