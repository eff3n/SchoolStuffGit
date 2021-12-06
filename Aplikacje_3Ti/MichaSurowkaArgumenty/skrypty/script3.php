<?php
$a = $_POST['a'];
function matma($wartosc)
{
    $wynik=$wartosc*$wartosc;
	echo "Kwadrat podanej liczby to: $wynik";
}
matma($a);
?>