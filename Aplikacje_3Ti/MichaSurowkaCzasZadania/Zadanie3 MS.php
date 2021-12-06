<?php
$dzis = mktime(0,0,0,date('n'),date('j'),date('Y'));
$sylwester = mktime(0,0,0,12,31,(date('Y')));
$nowyrok = mktime(0,0,0,01,01,(date('Y')));
$koniec = ($sylwester - $dzis) / 86400;
$poczatek = ($dzis - $nowyrok) / 86400;
echo 'Od początku roku upłynęło '.$poczatek.' dni <br /> '; 
echo 'Do końca roku pozostało '.$koniec.' dni ';
?>
