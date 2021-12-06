<?php
$l1= $_POST['a'] + 0;
$l2= $_POST['b'] + 0;
$wynik= 0;
$operator = $_POST["calculator"];
switch($operator)
{
    case "dodawanie"
    $wynik=$l1 + $l2;
    break; 
    case "odejmowanie"
    $wynik=$l1 - $l2;
    break;
    case "mnozenie"
    $wynik=$l1 * $l2;
    break; 
    case "dzielenie"
    $wynik=$l1 / $l2;
    break;
}
echo "Wynik działania to: " $wynik;
?>