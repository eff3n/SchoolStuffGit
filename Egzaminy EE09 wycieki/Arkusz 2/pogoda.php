<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Wrocław</title>
    <link rel="Stylesheet" href="./styl2.css" />
</head>
<body>
    <header>
        <section id="left">
            <img src="./pliki2/logo.png" alt="meteo"/>
        </section>
        <section id="middle">
            <h1>Prognoza dla Wrocławia </h1>
        </section>
        <section id="right">
            <p>maj, 2019 r.</p>
        </section>
    </header>
    <main>
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
            <?php
                $conn = mysqli_connect('localhost','root','','prognoza');
                $query = mysqli_query($conn, "SELECT * FROM `pogoda` WHERE miasta_id=1 ORDER BY data_prognozy;");
                while($assoc=mysqli_fetch_assoc($query)){
                    echo "<tr><td>".$assoc['data_prognozy']."</td><td>".$assoc['temperatura_noc']."</td><td>".$assoc['temperatura_dzien']."</td><td>".$assoc['opady']."</td><td>".$assoc['cisnienie']."</td></tr>";
                }
                mysqli_close($conn);
            ?>
        </table>
    </main>
    <section id="bottomleft">
        <img src="./pliki2/obraz.jpg" alt="Polska, Wrocław" />
    </section>
    <section id="bottomright">
        <a href="./kwerendy.txt">Pobierz kwerendy</a>
    </section>
    <footer>
    <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>