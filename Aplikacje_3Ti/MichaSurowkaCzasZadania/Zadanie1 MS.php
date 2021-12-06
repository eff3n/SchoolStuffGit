<?php
setlocale(LC_ALL, 'pl_PL', 'pl', 'Polish_Poland.28592');
$date = getdate();
$dzien = $date["mday"];
$miesiac = strftime('%B',time());
$rok = $date["year"];

echo "Dzisiejsza data to: $dzien-$miesiac-$rok r.";

?>