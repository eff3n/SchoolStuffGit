<!doctype html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
mysql_connect ("localhost" , "root", "") or die ("Nie można poączyć się z bazą danych<br>");
echo("Połączono z bazą danych<br>");
mysql_select_db ("zadanie") or die ("Nie można wybrać bazy danych<br>");
echo("Wybrano bazę danych<br>");


if ($_GET['co'] == 'dodaj') {
	if ($_GET['nazwisko'] && $_GET['imie'] && $_GET['dzial'] && $_GET['stanowisko']) 
	{
		$query = "INSERT INTO przyklad (nazwisko, imie, dzial, stanowisko) VALUES ('".$_GET['nazwisko']."', '".$_GET['imie']."', '".$_GET['dzial']."', '".$_GET['stanowisko']."');";
		$wynik = mysql_query ($query) ;
	}

	
	
}elseif ($_GET['co'] == 'popraw') 
{
		
		if ($_GET['nazwisko'] && $_GET['imie'] && $_GET['dzial'] && $_GET['stanowisko']) 
		{
		$query = "UPDATE przyklad SET nazwisko='".$_GET['nazwisko']."', imie='".$_GET['imie']."', dzial='".$_GET['dzial']."', stanowisko='".$_GET['stanowisko']."'WHERE Nr='".$_GET['Nr']."';";		
		$wynik = mysql_query ($query) or die ('Błąd zapytania update');	
		echo('Poprawnie wykonano zapytanie update');
		}
			
}elseif ($_GET['co']=='edytuj')
		{
		$query="SELECT * FROM przyklad where Nr='".$_GET['Nr']."';";

		$wynik = mysql_query($query) or die ('Błąd zapytania');
		echo('Poprawnie wykonano zapytanie');

			
				while ($rekord = mysql_fetch_assoc($wynik))
				{
					$nr = $rekord['Nr'];
					$nazwisko = $rekord['Nazwisko'];
					$imie = $rekord['Imie'];
					$dzial = $rekord['Dzial'];
					$stanowisko = $rekord['Stanowisko'];
		
					echo ('<FORM METHOD="GET" action="baza4.php">Poprawa rekordu 1:');
					echo ('<INPUT TYPE="hidden" NAME="co" VALUE="popraw"> ');
					echo ('<INPUT TYPE="hidden" NAME="Nr" VALUE="'.$nr.'"><TABLE>' );
					echo ('<TR><TD>Nazwisko:</TD><TD><INPUT TYPE="text" name="nazwisko" VALUE="'.$nazwisko.'"></TD></TR>');
					echo ('<TR><TD>Imie:</TD><TD><INPUT TYPE="text" name="imie" VALUE="'.$imie.'"></TD></TR>');
					echo ('<TR><TD>Dzial:</TD><TD> <INPUT TYPE="text" name="dzial" VALUE="'.$dzial.'"></TD></TR>');
					echo ('<TR><TD>Stanowisko:</TD><TD> <INPUT TYPE="text" name="stanowisko" VALUE="'.$stanowisko.'"></TD></TR>');
					echo ('</TABLE><INPUT TYPE="submit" VALUE="Popraw"></FORM>' );
					$z=5;
					echo('hehe'.$rekord['nazwisko']);
				}
		}


elseif ($_GET['co'] == 'skasuj') 
		{
		$query="DELETE FROM przyklad where Nr='".$_GET['Nr']."';";
		$wynik = mysql_query($query) or die('Błąd zapytania');
		echo('Rekord został usunięty');
		}


$wynik = mysql_query ("SELECT * FROM przyklad;");




print "<TABLE CELLPADDING=5 BORDER=1>";
print "<TR><TD><B>Nazwisko</B></TD><TD><B>Imie</B></TD>";
print "<TD><B>Dzial</B></TD><TD><B>Stanowisko</B></TD><TD></TD><TD></TD></TR>\n";


while ($rekord = mysql_fetch_assoc($wynik))
		{
			$nr = $rekord['Nr'];
			$nazwisko = $rekord['Nazwisko'];
			$imie = $rekord['Imie'];
			$dzial = $rekord['Dzial'];
			$stanowisko = $rekord['Stanowisko'];
			print "<TR><TD>$nazwisko</TD><TD>$imie</TD><TD>$dzial</TD><TD>$stanowisko</TD>";
			print "<TD><A HREF=\"?co=skasuj&Nr=$nr\">skasuj</A></TD>\n";
			print "<TD><A HREF=\"?co=edytuj&Nr=$nr\">edytuj</A></TD></TR>\n";
		}
		
		
		
print "</TABLE>";
print '<FORM METHOD="GET" action="baza4.php" >Nowy użytkownik:';
print '<INPUT TYPE="hidden" NAME="co" VALUE="dodaj"><TABLE>';
print '<TR><TD>Nazwisko:</TD><TD><INPUT TYPE="text" ';
print 'NAME="nazwisko"></TD></TR><TR><TD>Imie:</TD><TD><INPUT ';
print 'TYPE="text" NAME="imie"></TD></TR><TR><TD>Dzial:</TD>';
print '<TD><INPUT TYPE="text" NAME="dzial"></TD></TR><TR><TD>Stanowisko:</TD><TD><INPUT ';
print 'TYPE="text" NAME="stanowisko"></TD></TR>';
print '</TABLE><INPUT TYPE="submit" VALUE="Dodaj"></FORM>';
?>
</body>
</html>