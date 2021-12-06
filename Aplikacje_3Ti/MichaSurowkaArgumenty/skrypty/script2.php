<?php
$a = $_POST['a'];
function matma($wartosc)
{
	$s= 1;
for ($i=1; $i<=$wartosc; $i++)
	{
		$s = $s * $i;
	}
	echo "Silnia podanej liczby to: $s";
}
matma($a);
?>