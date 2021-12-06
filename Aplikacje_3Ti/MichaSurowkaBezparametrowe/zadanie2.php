<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>F. Bezparametrowe, zadanie 2, Michał Surówka</title>
</head>
<body>
<p>
Liczby w programie do 18 i 9, co chcesz z nimi zrobić?</br />
Dodać- wpisz "plus"</br />
Odjąć od siebie- wpisz "minus"</br />
Pomnożyć- wpisz "razy"</br />
Podzielić- wpisz "przez"</br />
</p>
<form action="" method="POST">
<input type="text" name="activity" />
</form>
Po wpisaniu wciśnij ENTER <br />
<?php	
function dodawanie(){
    $a = 18;
    $b = 9;
    $wynik=$a+$b;
    return $wynik;
}
function odejmowanie(){
    $a = 18;
    $b = 9;
    $wynik=$a-$b;
    return $wynik;
}
function mnozenie(){
    $a = 18;
    $b = 9;
    $wynik=$a*$b;
    return $wynik;
}
function dzielenie(){
    $a = 18;
    $b = 9;
    $wynik=$a/$b;
    return $wynik;
}
function matma()
{
$x = $_POST['activity'];
switch($x){
    case 'plus':
        echo "wynik dodawania to: ".dodawanie();
        break;
    case 'minus':
        echo "wynik odejmowania to: ".odejmowanie();
        break;
    case 'razy':
        echo "wynik mnożenia to: ".mnozenie();
        break;
    case 'przez':
        echo "wynik dzielenia to: ".dzielenie();
        break;
    default: 
    echo "Wprowadzono błędne dane";
    }
}
matma();
?>
</body>
</html>