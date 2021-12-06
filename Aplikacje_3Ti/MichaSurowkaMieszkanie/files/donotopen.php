<html>
<head>
    <title>Kup Mieszkanie</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="agencja.css"/>
</head>
<body>
    <div id="leftsection">
        <h1>AGENCJA NIERUCHOMOŚCI</h1>
        <h3>OFERUJEMY</h3>
            <ol>
                <li>Nowe mieszkania</li>
                <li>Domy w naszym mieście</li>
                <li>Domy w okolicy</li>
            </ol>
        <h3>Nasi pracownicy</h3>
        <table>
            <tr>
                <td rowspan="3">Jan nowak <br /> Prezes</td>
                <td>Anna Kowalska</td>
            </tr>
            <tr>
                <td>Katarzyna Nowakowska</td>
            </tr>
            <tr>
                <td>Krzysztof Kowalewski</td>
            </tr>
        </table>
    </div>
    <div id="rightsection">
        <h1>KALKULATOR CENY MIESZKANIA</h1>
        Podaj metraż mieszkania w m<sup>2</sup>
        <form action="donotopen.php" method="POST">
        <input type="number" name="meters" value="0"/><br />
        Liczba pokoi z zamontowanym okablowaniem sieciowym <br />
        <input type="number" name="rooms" value="0"/><br />
        <input type="checkbox" name="kafelki" />Kafelki w łazience? <br />
        <button type="submit">OBLICZ</button> <br />
<?php
$a=$_POST["meters"]*4000;
$b=$_POST["rooms"]*1000;
if(isset($_POST['kafelki']))
{
    $koszt=$a+$b+2000;
    echo "Koszt mieszkania: " . $koszt . " zł.";
}
else
{
    $koszt=$a+$b;
    echo "Koszt mieszkania: " . $koszt . " zł.";
}
?>
        </form>
    </div>
    <footer>
        <p>
        Autor strony: Michał Surówka 
        <img src="logo.png" alt="nieruchomość">
        </p>
    </footer>
</body>
</html>
