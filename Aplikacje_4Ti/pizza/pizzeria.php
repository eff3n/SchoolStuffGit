<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Pizzeria Margherita</title>
	<link rel="stylesheet" href="styl6.css" />
		
</head>
<body>
		<div class="plakat">
			Najlepsza pizza w miescie <img class="logo" alt="logo" src="logo.png" />
		</div>
			<div class="content">
				<div class="lewa">
					<p>U nas zamówisz pizzę z dowozem</p>
				<a href="logo.png" alt="">Nasze logo</a>
			
				</div>
					<div class="srodek">
						<h3>Pizzeria Margherita</h3>
						<p>ul. Botaniczna 4, Zielona Góra</p>
						<img class="logo1" alt="logo" src="logo.png" />
					</div>
				<div class="prawa">
					<h3>Oferta</h3>
					<p>
						1. Pizza
						2. Lasagne
						3. Sałataki
					</p>
						<a href="Oferta.txt"><button id="pobierz_oferte">Pobierz pełną ofertę</button></a>
				</div>
			</div>
			<div class="order">
				<h3> Oblicz koszt dostawy </h3>
					<form action="pizzeria.php" method="post">
			<label for="zielona" > <input id="zielona" type="checkbox" name="zielona" /> Jestem z zielonej góry </label>
			<div> albo </div>
			<label for="odleglosc"> Podaj liczbę kilometrów od Zielonej góry <input id="odleglosc" type="number" name="odleglosc" /></label>
			<br />
			<?php
				$zielona = isset($_POST["zielona"]) ? $_POST["zielona"] : "";
				$odleglosc = isset($_POST["odleglosc"]) ? $_POST["odleglosc"] : "";
				
				if($zielona == true) {
					echo '<h3>Dowieziemy Twoją pizzę za darmo</h3>';
				}
				else if($odleglosc != "" && is_numeric($odleglosc) == true) {
					echo '<h3>Dowieziemy za '.($odleglosc * 2).' pln</h3>';
				}
			?>
			<input type="submit" value="Oblicz" />
		</form>
		</div>
	<div class="stopka">
		Strone internetową opracował <strong>Dawid Preisner</strong>
	</div>
</body>
</html>

