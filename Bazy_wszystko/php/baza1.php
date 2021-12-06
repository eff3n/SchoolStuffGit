<html>
<head>
<meta http-equiv>
<body>
<?php
mysql_connect ("localhost", "znajomi", "baza1") or die ("Nie mo¿na po³¹czyæ siê z MySQL");
mysql_select_db ("baza_znajomi") or die ("Nie mo¿na po³¹czyæ siê z baz¹ baza_znajomi");
$wynik=mysql_query ("SELECT * FROM tab_znajomi;") or die ("b³¹d w pytaniu");
print "<TABLE CELLPADDING=5 BORDER=2>";
print "<TR><TD><B>imie</B></TD><TD><B>nazwisko</B></TD><TD><B>telefon</B></TD></TR>";
while ($rekord=mysql_fetch_assoc ($wynik)) 
{
$nr=$rekord['nr'];
$imie=$rekord['imie'];
$nazwisko=$rekord['nazwisko'];
$telefon=$rekord['telefon'];
print "<TR><TD>$imie</TD><TD>$nazwisko</TD><TD>$telefon</TD></TR>";
}
print "</TABLE>";
?>
</body>
</html>