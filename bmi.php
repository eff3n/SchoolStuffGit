<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoje BMI</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <?php 
        $connect = new mysqli("localhost","root","","egzamin");
    ?>
    <header>
        <div id="logo">
            <img src="./zdjecia/wzor.png" alt="wzór BMI">
        </div>
        <div id="baner">
            <h1>Oblicz swoje BMI</h1>
        </div>
    </header>
    <menu>
        <table>
            <tr>
                <th>Interpretacja BMI</th>
                <th>Wartość minimalna</th>
                <th>Wartość maksymalna</th>
            </tr>
            <?php 
                $zap1 = "SELECT informacja, wart_min, wart_max FROM bmi";
                $query1 = mysqli_query($connect,$zap1);
                while($assoc = mysqli_fetch_assoc($query1)){
                    echo "<tr>";
                    echo "<td>" . $assoc['informacja'] . "</td>";
                    echo "<td>" . $assoc['wart_min'] . "</td>";
                    echo "<td>" . $assoc['wart_max'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </menu>
    <main>
        <div id="strefa_obliczen">
            <h2>Podaj wagę i wzrost</h2>
            <form action="bmi.php" method="POST">
                <p>Waga: </p> <input type="number" name="waga" id="waga" min="1">
                <p>Wzrost w cm: </p> <input type="number" name="wzrost" id="wzrost" min="1"><br />
                <input type="submit" value="Oblicz i zapamiętaj wynik">
            </form>
            <?php 
                $waga = @ $_POST['waga'];
                $wzrost = @ $_POST['wzrost'];
                if($waga == "" || $wzrost == "" ){

                }else{
                    $bmi = ($waga/pow($wzrost,2)) * 10000;
                    echo "<p>Twoja waga: " . $waga . "; Twój wzrost: " . $wzrost . "<br /> BMI wynosi: " . $bmi . "</p>";
                    $bmi_id = 0;
                    if($bmi >= 0 && $bmi <= 18)
                    {
                        $bmi_id=1;
                    }
                    if($bmi >= 19 && $bmi <= 25)
                    {
                        $bmi_id=2;
                    }
                    if($bmi >= 26 && $bmi <= 30)
                    {
                        $bmi_id=3;
                    }
                    if($bmi >= 31 && $bmi <= 100)
                    {
                        $bmi_id=4;
                    }
                    $zap2 = "INSERT INTO wynik(bmi_id,data_pomiaru,wynik) VALUES ('" . $bmi_id ."', '". date("Y-m-d") ."', '". $bmi ."')";
                    mysqli_query($connect,$zap2);
                }
            ?>
        </div>
        <div id="zdjecie">
            <img src="./zdjecia/rys1.png" alt="ćwiczenia">
        </div>
    </main>
    <footer>
        <p>Autor: Damian <a href="./kwerendy.txt">Zobacz kwerendy</a></p>
    </footer>
    <?php 
        mysqli_close($connect);
    ?>
</body>
</html>
