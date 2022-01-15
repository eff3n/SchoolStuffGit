<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Twój wskaźnik BMI </title>
    <meta charset="UTF-8"/>
    <link rel="Stylesheet" href="styl4.css" />
</head>
<body>
<!-- BLOKI GÓRNE -->
    <section id="banner">
        <h2>Oblicz wskaźnik BMI</h2>
    </section>
    <section id="logo">
        <img src="./wzor.png" alt="liczymy BMI" id="template"/>
    </section>
<!-- BOKI LEWY I PRAWY -->
    <section id="left">
        <img src="./rys1.png" alt="zrzuć kalorie!" id="duderunning"/>
    </section>
    <section id="right">
        <h1>Podaj dane</h1>
        <form method="POST" action="">
            Waga: <input type="number" name="weight" default="1" /> <br />
            Wzrost [cm]: <input type="number" name="height" default="1" /> <br />
            <input type="submit" id="submit" value="Licz BMI i zapisz wynik" /> <br />
            <?php 
                //zmienne i wypisanie
                @$weight = $_POST['weight'];
                @$height = $_POST['height'];
                if($height !="" || $weight !=""){
                $BMI = ($weight / pow($height , 2))*10000;
                echo "Twoja waga: ".$weight." Twój wzrost: ".$height;
                echo "<br />Twoje BMI: ".$BMI;
                //sprawdzenie wskaznika
                if($BMI<19){
                    $wskaznik = 1;
                } else if($BMI>=19 && $BMI<26) {
                    $wskaznik = 2;
                } else if($BMI>=26 && $BMI<31) {
                    $wskaznik = 3;
                } else if($BMI>=31) {
                    $wskaznik = 4;
                } else {$wskaznik = 0;}
                //baza danych i czas
                $data = date("Y-m-d");
                echo "<br />".$data;
                $conn1 = mysqli_connect('localhost','root','','egzamin');
                $query1 = mysqli_query($conn1,"INSERT INTO `wynik`(`bmi_id`, `data_pomiaru`, `wynik`) VALUES ('$wskaznik','$data','$BMI')");
                mysqli_close($conn1);
                } 
                else {
                $weight = 1;
                $height = 1;
                }
                
            ?>
        </form>
    </section>
<!-- BLOK GŁÓWNY -->
    <section id="main">
        <table>
            <tr>
                <th>lp.</th>
                <th>Intepretacja</th>
                <th>zaczyna się od...</th>
            </tr>
            <?php 
            $conn2 = mysqli_connect('localhost','root','','egzamin');
            $query2 = mysqli_query($conn2,"SELECT id, informacja, wart_min FROM bmi; ");
            while($assoc=mysqli_fetch_assoc($query2)){
                echo "<tr><td>".$assoc['id']."</td><td>".$assoc['informacja']."</td><td>".$assoc['wart_min']."</td></tr>";
            }
            mysqli_close($conn2);
            ?>
        </table>
    </section>
<!-- STOPKA -->
    <footer>
        Autor: Michał Surówka <a href="../SQL_Rozwiazania/kw2.jpg">Wynik działania kwerendy 2</a>
    </footer>
</body>    
</html>