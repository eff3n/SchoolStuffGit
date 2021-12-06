<html>
<head>
    <title>Zadanie 5 MichałS</title>
</head>
<body>
    <form action="calc5.php" method="POST">
    Pierwsza liczba: <input type=number name="a"/> <br />
    Druga liczba: <input type=number name="b"/> <br />
    <input type="radio" name="calculator" id="dodawanie" value="dodawanie" checked="true"><p>+</p><br/>
    <input type="radio" name="calculator" id="odejmowanie" value="odejmowanie"><p>-</p><br/>
    <input type="radio" name="calculator" id="mnożenie" value="mnozenie"><p>x</p><br/>
    <input type="radio" name="calculator" id="dzielenie" value="dzielenie"><p>/</p><br/>
    <p></p>
    <button type="submit" name="answer" id="answer" value="answer">Policz</button>
    </form>

</body>
</html>