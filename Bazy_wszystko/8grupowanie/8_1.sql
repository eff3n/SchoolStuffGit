﻿select stanowisko_id, avg(placa) as "srednia plac" from pracownicy group by stanowisko_id;