<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Portal ogłoszeniowy</title>
    <link rel="Stylesheet" href="styl1.css" />
</head>    
<body>
<section id="banner">
    <h1>Portal ogłoszeniowy</h1>
</section>
<section id="left">
    <h2>Kategorie ogłoszeń</h2>
    <ol>
        <li>Książki</li>
        <li>Muzyka</li>
        <li>Filmy</li>
    </ol>
    <img src="ksiazki.jpg" alt="Kupię / sprzedam książkę" />
    <table>
        <tr>
            <td>Lista Ogłoszeń</td>
            <td>Cena ogłoszenia</td>
            <td>Bonus</td>
        </tr>
        <tr>
            <td>1-10</td>
            <td>1 PLN</td>
            <td rowspan="3">Subskrypcja newslettera to upust 0.20 PLN za ogłoszenie</td>
        </tr>
        <tr>
            <td>11-50</td>
            <td>0.80 PLN</td>
            
        </tr>
        <tr>
            <td>51 i więcej</td>
            <td>0.60 PLN</td>
            
        </tr>
    </table>
</section>
<section id="right">
    <h2>Ogłoszenia kategorii książki</h2>

    <?php
    $conn=mysqli_connect('localhost','root','','ogloszenia');
    $conn -> query ('SET NAMES utf8');
    $conn -> query ('SET CHARACTER_SET utf8_unicode_ci');
    $z1=mysqli_query($conn,'SELECT ogloszenie.id, ogloszenie.tytul, ogloszenie.tresc, uzytkownik.telefon from ogloszenie INNER JOIN uzytkownik ON ogloszenie.uzytkownik_id=uzytkownik.id');
    while ($row=mysqli_fetch_array($z1))
    {
        echo    "<h3>".$row['id'].',   '.$row['tytul'].'</h3><br>';
        echo    "<p>".$row['tresc'].'</p><br>';
        echo    "<p> telefon kontaktowy: ".$row['telefon'].'</p><br>';
    }
    mysqli_close($conn);
    ?>

</section>
<section id="footer">
    Portal ogłoszeniowy opracował: Michał Surówka
</section>
</body>
</html>