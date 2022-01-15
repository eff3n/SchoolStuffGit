<!DOCTYPE html>
<html>
<head>
    <title>Port lotniczy</title>
    <meta charset="UTF-8" />
    <link rel="Stylesheet" href="./styl5.css" />
</head>
<body>
    <section>
        <banner id="firstbanner">
            <img src="../zad5.png" alt="logo lotnisko" />
        </banner>
        <banner id="secondbanner">
            <h1>Przyloty</h1>
        </banner>
        <banner id="thirdbanner">
            <h3>Przydatne linki:</h3> <br />
            <a href="../kwerendy.txt" target="_blank">Pobierz...</a>
        </banner>
    </section>
    <section>
        <main>
            <table>
                <tr>
                    <th>czas</th>
                    <th>kierunek</th>
                    <th>numer rejsu</th>
                    <th>status</th>
                </tr>
                <?php
                    $connect = mysqli_connect('localhost','root','','egzamin');
                    $query = mysqli_query($connect,"SELECT nr_rejsu, czas, kierunek,  status_lotu FROM przyloty ORDER BY czas ASC;");
                    while($assoc=mysqli_fetch_assoc($query)){
                        echo "<tr><td>".$assoc['czas']."</td><td>".$assoc['kierunek']."</td><td>".$assoc['nr_rejsu']."</td><td>".$assoc['status_lotu']."</td></tr>";
                    }
                    mysqli_close($connect);
                ?>
            </table>
        </main>
    </section>
    <footer>
        <div id="firstfooter">
            <p><?php
            if(isset($_COOKIE['wejscie'])){
                echo "<i>Witaj ponownie na stronie lotniska<i/>";
            } else {
                setcookie('wejscie',1,time()+60*60*2);
                echo "<b>Dzień dobry! Strona lotniska używa ciasteczek</b>";
            }
            ?></p>
        </footer>
        <div id="secondfooter">
            Autor: Michał Surówka
        </footer>
        </footer>
</body>
</html>
