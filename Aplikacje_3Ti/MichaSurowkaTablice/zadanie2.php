<html>
<head>
    <title>Tablice, zadanie 2, Michał Surówka</title>
</head>
<body>
    <?php
    $tab = array('Poniedziałek' => array('Obudzenie się', 'Przygotowanie śniadania', 'Aktywność fizyczna', 'Nauka PHP'), 'Wtorek' => array('Nauka jazdy', 'Granie', 'Słuchanie muzyki', 'Spanie'), 'Środa' => array('Nauka angielskiego', 'Dalsze ćwiczenie PHP', 'Gadanie z kolegami', 'Rysowanie'), 'Czwartek' => array('Jeszcze raz nauka PHP', 'Granie', 'Czekanie na nowy sezon w F1', 'Czytanie o nowym sprzęcie komputerowym'), 'Piątek' => array('Oglądanie treningów w F1', 'Granie', 'Cieszenie się z nachodzącego weekendu', 'Powstrzymywanie się by nie jeść mięsa'), 'Sobota' => array('Oglądanie kwalifikacji w F1', 'Dłuższe niż zwykle spanie', 'Odpoczynek', 'Pomaganie w domu'), 'Niedziela' => array('Oglądanie wyśćigu', 'Sprawdzanie ile jest sprawdzianów w następnym tygodniu', 'Granie', 'Nauka na poniedziałek'));
    echo '<pre>';
	print_r($tab);
	echo '</pre>'
    ?>
</body>
</html>