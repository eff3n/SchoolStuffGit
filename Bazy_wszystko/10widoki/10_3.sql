create view suma_zamowien
as
select id, data, wartosc, 
(select sum(wartosc)
from zamowienia z2
where z2.id <= z1.id)
as suma 
from zamowienia z1
order by id ;