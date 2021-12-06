<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			if( isset($_POST["imie"]) ){
				$imie = $_POST["imie"];
				$nazwisko = $_POST["nazwisko"];
				$telefon = $_POST["numer"];
				$email = $_POST["email"];
				
				if( empty( $imie ) || empty($nazwisko) || empty($telefon) || empty($email) ){
					echo "Wypełnij wszystkie pola";
				}else {
					
					$conn = new mysqli("localhost", "root", "", "ogloszenia");
					
					$odp = $conn->query("INSERT INTO uzytkownik(imie, nazwisko, telefon, email) VALUES ('$imie', '$nazwisko', '$telefon', '$email')");

					if($odp){
						echo "Dodano użytkownika";
					}else {
						echo "Nie udało się dodać użytkownika";
					}
					
					$conn->close();
				}
				
			}
			
		?>
		
		<form method="POST" action="zap.php">
		
			Imie: <input name="imie" type="text"> <br>
			Nazwisko: <input name="nazwisko" type="text"><br>
			Numer telefonu: <input name="numer" type="number"><br>
			E-mail: <input name="email" type="email"><br>
		
			<input type="submit" value="Zapisz">
		
		</form>
		
		
	</body>
</html>
