start transaction;
update konta set saldo = saldo - 40 where id = 1;
update konta set saldo = saldo + 40 where id = 2;
