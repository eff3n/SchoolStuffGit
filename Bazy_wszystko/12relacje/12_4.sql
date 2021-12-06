alter table pracownicy add 
constraint stanowiska_fk foreign key (stanowisko_id) references stanowiska(id);