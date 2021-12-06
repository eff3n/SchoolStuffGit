<?php

$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];
$e=$_POST["e"];
$suma=$a+$b+$c+$d+$e;
$srednia=$suma/5;
echo "Średnia arytmetyczna liczb " . $a . ", " . $b . ", " . $c . ", " . $d . " i " . $e . " jest równa " . $srednia . "<br />";

?>