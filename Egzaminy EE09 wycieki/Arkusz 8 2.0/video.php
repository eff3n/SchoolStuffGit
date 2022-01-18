<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video on Demand</title>
    <link href="styl3.css" rel="Stylesheet" />
</head>
<body>
    <header>
        <section id="header_left">
            <h1>Internetowa wypożyczalnia filmów</h1>
        </section>
        <section id="header_right">
            <table>
                <tr>
                    <td>Kryminał</td>
                    <td>Horror</td>
                    <td>Przygodowy</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>30</td>
                    <td>20</td>
                </tr>
            </table>
        </section>
    </header>
    <main>
        <section id="polecamy">
            <h3>Polecamy</h3>
            <?php 
            $conn1 = mysqli_connect('localhost','root','','dane3');
            $query1 = mysqli_query($conn1, "SELECT `id`, `nazwa`, `opis`, `zdjecie` FROM `produkty` WHERE id IN (18,22,23,25);");
            while($assoc1=mysqli_fetch_assoc($query1)){
                echo "<span><h4>".$assoc1['id'].", ".$assoc1['nazwa']."</h4>";
                echo "<img src=./pliki8/".$assoc1['zdjecie']." alt=film /><br />";
                echo "<p>".$assoc1['opis']."</p></span>";
            }
            mysqli_close($conn1);
            ?>
        </section>
        <section id="fantastyczne">
            <h3>Fantastyczne</h3>
            <?php 
            $conn2 = mysqli_connect('localhost','root','','dane3');
            $query2 = mysqli_query($conn2, "SELECT `id`, `nazwa`, `opis`, `zdjecie` FROM `produkty` WHERE Rodzaje_id=12");
            while($assoc2=mysqli_fetch_assoc($query2)){
                echo "<span><h4>".$assoc2['id'].", ".$assoc2['nazwa']."</h4>";
                echo "<img src=./pliki8/".$assoc2['zdjecie']." alt=film /><br />";
                echo "<p>".$assoc2['opis']."</p></span>";
            }
            mysqli_close($conn2);
            ?>
        </section>
    </main>
    <footer>
        <form method="POST"> 
            Usuń film nr: <input type="number" name="number" /> <input type="submit" name="submit" value="usun"/> 
        </form> <br />
        <?php 
        $conn3 = mysqli_connect('localhost','root','','dane3');
        if(isset($_POST['submit'])){
            $number = $_POST['number'];
            $query3 = mysqli_query($conn3,"DELETE FROM `produkty` WHERE id=$number");
        }
        mysqli_close($conn3);
        ?>
        Stronę wykonał: <a href="mailto:ja@poczta.com">0000000000</a>
    </footer>
</body>
</html>