<?php

$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$delta=$b*$b-4*$a*$c;
echo "Równanie ma postać: f(x)= " . $a . "x<sup>2</sup> + " . $b . "x + " . $c . "<br />";
echo "Delta jest równa: " . $delta . "<br />";
if($delta>0)
{
 $x1=(-$b-sqrt($delta))/2/$a;
 $x2=(-$b+sqrt($delta))/2/$a;
 print("Równanie ma dwa pierwiastki<br />");
 print("x1=$x1"."<br>");
 print("x2=$x2"."<br>");
}
else
{
 if($delta==0)
 {
 $x12=-$b/(2*$a);
 print("Równanie ma jeden pierwiastek<br />");
 print("x12=$x12<br>");
 }
 else
 {
 print("Brak pierwiastków rzeczywist ych w równaniu<br />");
 }
}


?>
