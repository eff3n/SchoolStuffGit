<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<style>
			td {
				border: solid #000 1px;
				padding: 5px;
			}
		</style>
	</head>
	<body>
		
		<?php
			
			$conn = new mysqli("localhost", "root", "", "ogloszenia") or die("B³¹d");
			
			$wynik = $conn->query("SELECT * FROM ogloszenie");
			
			
			if($wynik->num_rows > 0){
				
				echo "<table>";
				echo "<tr>";
				echo "<th>id</th>";
				echo "<th>tytul</th>";
				echo "<th>tresc</th>";
				echo "</tr>";
				
				while( $wiersz = $wynik->fetch_assoc() ){
					echo "<tr>";
					
					echo "<td>" . $wiersz["id"]    . "</td>";
					echo "<td>" . $wiersz["tytul"] . "</td>";
					echo "<td>" . $wiersz["tresc"] . "</td>";
					
					echo "</tr>";
				}
				
				echo "</table>";
				
			}else {
				echo "Nie ma nic w bazie danych";
			}
			
			$conn->close();
		
		?>
		
		
	</body>
</html>
