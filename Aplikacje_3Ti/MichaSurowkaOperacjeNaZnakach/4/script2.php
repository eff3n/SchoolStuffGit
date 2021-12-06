<?php
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$imie = ucfirst($a);
$imie = str_replace(' ', '', $imie);
$nazwisko = strtoupper($b);
$nazwisko = str_replace(' ', '', $nazwisko);
$komentarz = strtolower($c);
if (strlen($komentarz) > 300){
    $dlugosc = strlen($komentarz);
    echo "Twój komentarz jest zbyt długi. Dozwolone jest 300 znaków, natomiast liczy on sobie $dlugosc znaków";
}
else {
    echo "Imię: $imie <br />";
    echo "Nazwisko: $nazwisko <br />";
    echo "Treść komentarza: $komentarz <br />";
}
?>