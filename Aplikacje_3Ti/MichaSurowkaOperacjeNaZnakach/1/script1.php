<?php
$a=$_POST["a"];
echo "Pomyślnie opublikowano komentarz <br />";
echo "Oto treść twojego komentarza: </br />";
$komentarz = str_replace("dlaczego","","$a");
echo $komentarz;
?>