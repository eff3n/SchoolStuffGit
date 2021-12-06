<?php
$a = $_POST['a'];	
function podzielnosc($wartosc){
    if($wartosc%2!=0)
    {echo "Liczba $wartosc nie jest podzielna przez 2<br />";} 
    else
    {echo "Liczba $wartosc jest podzielna przez 2<br />";}
   
    if($wartosc%3!=0)
    {echo "Liczba $wartosc nie jest podzielna przez 3<br />";} 
    else
    {echo "Liczba $wartosc jest podzielna przez 3<br />";}
    
    if($wartosc%5!=0)
    {echo "Liczba $wartosc nie jest podzielna przez 5<br />";} 
    else
    {echo "Liczba $wartosc jest podzielna przez 5<br />";}
}
podzielnosc($a);
echo "</br>";
?>