<?php
$a = $_POST['a'];
$b = $_POST['b'];
function matma($wartosc, $stopien)
{
    $wynik = pow($wartosc, $stopien);
    echo "Wartością potęgowania liczby $wartosc do potęgi $stopien wynosi $wynik";
}
matma($a, $b);
?>