begin transaction;
uodate konta set saldo = saldo - 40 where id = 1;
uodate konta set saldo = saldo + 40 where id = 2;
commit;