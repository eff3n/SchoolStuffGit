<!DOCTYPE html>
<html>
<head>
    <title>Wędkujemy</title>
    <meta charset="UTF-8" />
    <link rel="Stylesheet" href="styl_1.css" />
</head>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <main>
        <section id="left">
            <h2>Ryby drapieżne naszych wód</h2>
            <ul>
                <?php 
                $conn = mysqli_connect('localhost','root','','wedkowanie');
                $query = mysqli_query($conn, "SELECT nazwa, wystepowanie FROM Ryby WHERE styl_zycia=1;");
                while($assoc=mysqli_fetch_assoc($query)){
                    echo "<li>".$assoc['nazwa'].", wystepowanie: ".$assoc['wystepowanie']."</li>";
                }
                mysqli_close($conn);
                ?>
            </ul>
        </section>
        <section id="right">
            <img src="./img/ryba1.jpg" alt="Sum" /> <br />
            <a href="./kwerendy.txt">Pobierz kwerendy</a>
        </section>
    </main>
    <footer><p>Stronę wykonał: 69420</p></footer>
</body>
</html>